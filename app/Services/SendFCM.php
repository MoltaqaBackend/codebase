<?php

namespace App\Services;

use Exception;
use Google_Client;
use GuzzleHttp\Client;

class SendFCM
{
    protected Client $client;
    protected string $serverKey;
    protected string $projectId;

    /**
     * @throws \Exception
     */
    public function __construct()
    {
        $this->client = new Client();
        $this->authenticate();
    }

    protected function authenticate(): void
    {
        $credentialsFilePath = public_path('fcm.json');

        if (!file_exists($credentialsFilePath)) {
            throw new Exception('Service account credentials file not found');
        }

        $credentials = json_decode(file_get_contents($credentialsFilePath), true);
        $this->projectId = $credentials['project_id'];


        $client = new Google_Client();
        $client->setAuthConfig($credentialsFilePath);
        $client->addScope('https://www.googleapis.com/auth/firebase.messaging');

        # Ensure the credentials are loaded
        $client->useApplicationDefaultCredentials();

        # Fetch the access token
        try {

            $token = $client->fetchAccessTokenWithAssertion();

            if (isset($token['error'])) {
                throw new Exception('Error fetching access token: ' . $token['error_description']);
            }

            if (!empty($token) && isset($token['access_token'])) {
                $this->serverKey = $token['access_token'];
            } else {
                throw new Exception('Failed to obtain access token');
            }
        } catch (Exception $e) {
            # Handle the exception
            throw new Exception('Error authenticating with Firebase: ' . $e->getMessage());
        }
    }

    public function sendNotification(
        $notifiable,
        $title,
        $body,
        $id = null,
        $type = null
    )
    {
        # Get title and body according to user language
        $title = $title[$notifiable->lang] ?: ($title?->ar ?? 'title');
        $body = is_array($body)
            ? ($body[$notifiable->lang] ?? $body->ar ?? 'body')
            : (json_decode($body, true)[$notifiable->lang] ?? $body?->ar ?? 'body');

        $deviceToken = $notifiable->deviceTokens->first()?->device_token;
        if (!$deviceToken) {
            return false;
        }

        $url = 'https://fcm.googleapis.com/v1/projects/' . $this->projectId . '/messages:send';

        $headers = [
            'Authorization' => 'Bearer ' . $this->serverKey,
            'Content-Type' => 'application/json; charset=UTF-8',
        ];

        $data = [
            'message' => [
                'token' => $deviceToken,
                'notification' => [
                    'title' => $title,
                    'body' => $body,
                ],
                'data' => [
                    'id' => $id,
                    'type' => $type,
                ]
            ],
        ];

        try {
            $response = $this->client->post($url, [
                'headers' => $headers,
                'json' => $data,
            ]);

            return json_decode($response->getBody()->getContents(), true);
        } catch (\Exception $e) {
            return false;
        }
    }
}
