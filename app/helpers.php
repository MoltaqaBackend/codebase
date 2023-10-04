<?php

use App\Classes\AbilitiesConstant;
use App\Classes\DashboardModulesActionsConstant;
use App\Classes\DashboardModulesConstant;
use App\Mail\OTPMail;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Encryption\Encrypter;
use Illuminate\Http\JsonResponse;
use Illuminate\Mail\SentMessage;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

if (!function_exists('getLocales')) {
    /**
     * @return array array of supported locales
     */
    function getLocales($forSeeder = false)
    {
        return $forSeeder ? ['ar' => 'ar_EG', 'en' => 'en_US'] : ['ar', 'en'];
    }
}
if (!function_exists('activeGuard')) {

    function activeGuard(): int|string|null
    {

        foreach (array_keys(config('auth.guards')) as $guard) {

            if (auth()->guard($guard)->check()) return $guard;

        }
        return null;
    }
}

if (!function_exists('dynamicMultiLangValidationRules')) {
    /**
     * @param $attributesAndRules array array of multilang fileds as keys and their validation rules as values
     * @param $bindOtherAttibutesRules array|null array of other fields as keys and theris validation roles as values
     * @return array
     */
    function dynamicMultiLangValidationRules($attributesAndRules, $bindOtherAttibutesRules = null)
    {
        $validationRules = array();
        foreach (getLocales() as $locale) {
            foreach ($attributesAndRules as $attribute => $rules) {
                $validationRules[$attribute . '.' . $locale] = $rules;
            }
        }
        if (is_array($bindOtherAttibutesRules)) {
            foreach ($bindOtherAttibutesRules as $attribute => $rules) {
                $validationRules[$attribute] = $rules;
            }
        }
        return $validationRules;
    }
}

if (!function_exists('createdAt')) {
    /**
     * @return string formated date
     */
    function createdAt($created_at, $shouldParse = false)
    {
        if ($shouldParse)
            $created_at = Carbon::parse($created_at);
        return $created_at->toDayDateTimeString() . ' - ' . $created_at->diffForHumans();
    }
}

if (!function_exists('retrieveFromCache')) {
    function retrieveFromCache(string $key, $model = null, $quries = null, $relations = null, $order = "ASC", $isCollection = true)
    {
        return cache()->rememberForever($key, function () use ($model, $quries, $relations, $order, $isCollection) {
            if ($model == null)
                return null;
            $records = $model::query();
            if ($relations != null)
                $records = $records->with($relations);
            if (is_array($quries))
                foreach ($quries as $query) {
                    if (array_key_exists('attr', $query))
                        $records = $records->{$query['fn']}($query['attr']);
                    else
                        $records = $records->{$query['fn']}();
                }
            if ($order != "ASC")
                $records = $records->latest();
            if (!$isCollection)
                return $records->first();
            return $records->get();
        });
    }
}

if (!function_exists('removeFromCache')) {
    function removeFromCache(string $key)
    {
        cache()->forget($key);
    }
}

if (!function_exists('reCache')) {
    function reCache(string $key, $model = null, $relations = null, $order = "ASC", $isCollection = true)
    {
        removeFromCache($key);
        return retrieveFromCache($key, $model, $relations, $order, $isCollection);
    }
}

if (!function_exists('prepareQueryCache')) {
    function prepareQueryCache(string $fn, $attr = null)
    {
        return is_null($attr) ? ['fn' => $fn] : ['fn' => $fn, 'attr' => $attr];
    }
}

if (!function_exists('encryptData')) {
    /**
     * @param $data string raw data to encrypt
     * @return string encrypted data
     */
    function encryptData($data, $key)
    {
        $encrypter = new Encrypter($key, Config::get('app.cipher'));
        return $encrypter->encrypt($data);
    }
}

if (!function_exists('decryptData')) {
    /**
     * @param $data string encrypted data to decrypt
     * @return string decrypt data
     */
    function decryptData($data, $key)
    {
        $encrypter = new Encrypter($key, Config::get('app.cipher'));
        return $encrypter->decrypt($data);
    }
}

if (!function_exists('randomCode')) {
    /**
     * @param $length int size of randomly generated number max size 100
     * @param $type int 0 for alphanumeric , 1  for numeric only, 2 for alphapitical only
     * @return mixed
     */
    function randomCode($length, $type = 0)
    {
        $min_lenght = 1;
        $max_lenght = 100;
        $bigL = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $smallL = "abcdefghijklmnopqrstuvwxyz";
        $number = "123456789";
        $bigB = str_shuffle($bigL);
        $smallS = str_shuffle($smallL);
        $numberS = str_shuffle($number);
        $subA = substr($bigB, 0, 5);
        $subB = substr($bigB, 6, 5);
        $subC = substr($bigB, 10, 5);
        $subD = substr($smallS, 0, 5);
        $subE = substr($smallS, 6, 5);
        $subF = substr($smallS, 10, 5);
        $subG = substr($numberS, 0, 5);
        $subH = substr($numberS, 6, 5);
        $subI = substr($numberS, 9, 5);
        switch ($type) {
            case 1:
                $RandCode1 = str_shuffle($subG . $subH . $subI);
                break;
            case 2:
                $RandCode1 = str_shuffle($subA . $subD . $subB . $subF . $subC . $subE);
                break;
            default:
                $RandCode1 = str_shuffle($subA . $subD . $subB . $subF . $subC . $subE . $subG . $subH . $subI);
                break;
        }
        $RandCode2 = str_shuffle($RandCode1);
        $RandCode = $RandCode1 . $RandCode2;

        if ($length > $min_lenght && $length < $max_lenght) {
            $CodeEX = substr($RandCode, 0, $length);
        } else {
            $CodeEX = $RandCode;
        }
        return $CodeEX;
    }
}

if (!function_exists('zipFiles')) {
    /**
     * @param $folder string output folder name
     * @param $files array array of files
     * @return void
     */
    function zipFiles($folder, $files)
    {
        $zip = new ZipArchive();
        if ($zip->open(public_path($folder), ZipArchive::CREATE | ZipArchive::OVERWRITE) == TRUE) {
            foreach ($files as $value) {
                $relativeName = basename($value);
                $zip->addFile($value, $relativeName);
            }
            $zip->close();
        }
    }
}

if (!function_exists('generateAPIKey')) {
    function generateAPIKey()
    {
        $data['api_key'] = encryptData(Config::get('kdadeltariq.root_key'), Config::get('kdadeltariq.private_key'));
        Storage::disk('local')->put('api_key.json', json_encode($data));
    }
}

if (!function_exists('readAPIKey')) {
    function readAPIKey()
    {
        $apiKey = json_decode(Storage::disk('local')->get('api_key.json'), true);
        return $apiKey['api_key'];
    }
}

if (!function_exists('sendFCMNotiffication')) {
    /**
     * @param $locale string the preferd locale to recieve message
     * @param $tokens array registration ids as array
     * @param $title string notification title
     * @param $message string notification message
     * @param $topic string notification topic
     * @param $payLoad array notification payload
     * @param $isDataMessage bool if true send firbase data message notification else normal notification
     * @return bool the status of sending the notification
     */
    function sendFCMNotiffication($locale, $tokens, $title, $message, $topic, $payLoad = null, $isDataMessage = true): bool
    {
        if ($payLoad == null)
            $payLoad = array();
        $payLoad['topic'] = $topic;
        $url = 'https://fcm.googleapis.com/fcm/send';
        $serverKey = env('FCM_SERVER_KEY');
        $data = [
            // "topic" => $topic,
            "registration_ids" => $tokens,
        ];
        if ($isDataMessage) {
            $payLoad["body"] = __($message, [], $locale);
            $payLoad["title"] = __($title, [], $locale);
            $data["data"] = $payLoad;
        } else {
            $data["notification"] = [
                "body" => __($message, [], $locale),
                "title" => __($title, [], $locale),
            ];
            $data["data"] = $payLoad;
        }
        $encodedData = json_encode($data);

        $headers = [
            "Authorization: key=" . $serverKey,
            "Content-Type: application/json",
            'Accept: application/json',
            "project_id" => "marasil-11389",
            "sender_id" => 1078554782370,
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $encodedData);
        // Execute post
        $result = curl_exec($ch);
        // Close connection
        curl_close($ch);
        // Log::info("push {$result}/nerror /n" . curl_error($ch) . "/nResponse /n" . curl_getinfo($ch, CURLINFO_HTTP_CODE));
        if ($result === FALSE) {
            // die('Curl failed: ' . curl_error($ch));
            return false;
        } else {
            return true;
        }
    }
}

if (!function_exists('diffInMinutesFormated')) {
    function diffInMinutesFormated($start, $end)
    {
        $diffInMinutes = $start->diffInMinutes($end);
        $minutes = floor($diffInMinutes);
        $seconds = ($diffInMinutes - $minutes) * 60;
        return sprintf('%02d:%02d', $minutes, $seconds);
    }
}

if (!function_exists('searchMultipleLanguages')) {
    /**
     * search multi language database columns
     *
     * @param mixed $query elquent query builder
     * @param mixed $field database column
     * @param mixed $seach search value
     * @return mixed
     */
    function searchMultipleLanguages($query, $field, $search)
    {
        return $query->where(function ($query) use ($field, $search) {
            $locales = getLocales();
            if (!empty($locales)) {
                $query->where($field . '->' . $locales[0], 'LIKE', '%' . $search . '%');
                if (!empty(array_slice($locales, 1))) {
                    foreach (array_slice($locales, 1) as $locale) {
                        $query->orWhere($field . '->' . $locale, 'LIKE', '%' . $search . '%');
                    }
                }
            }
        });
    }
}

if (!function_exists('stringfyErrors')) {
    function stringfyErrors($errors)
    {
        $groupedErrors = [];
        foreach (Arr::dot($errors) as $key => $value) {
            // Key Values as values is an array
            $groupedErrors[Str::before($key, '.')][] = $value;
            // Array of string with key in start of each value
            // $groupedErrors[] = Str::before($key, '.') . "**" . $value;
        }
        return $groupedErrors;
    }
}

if (!function_exists('apiSuccess')) {
    function apiSuccess($data, $pagination = [], $extras = [], $message = null, $code = 200): JsonResponse
    {
        return response()->apiResponse($data, array(), $pagination, $extras, $message ?? __('Data Found'), true, $code);
    }
}

if (!function_exists('apiErrors')) {
    function apiErrors($errors, $extras = [], $message = null, $code = 200): JsonResponse
    {
        $errors = is_array($errors) ? stringfyErrors($errors) : $errors;
        return response()->apiResponse(array(), $errors, [], $extras, is_array($message) ? reset($message) : $message, false, $code);
    }
}

if (!function_exists('sendSMS')) {
    function sendSMS($message, $mobile)
    {
        // $authdata = "username:pass:accountid";
        // $authdata = "11019383830476:gs2v;B(D_3/Bdkhu:871519";
        // base64 RFC 2045
        $encodedauthdata = "MTEwMTkzODA0NzY6Z3MydjtCKERfMy9CaHU6MTUxOQ==";
        $result = ['sms' => true];

        if (!config('kdadeltariq.sms') == "local") {
            $guzzelClient = new Client();
            $response = $guzzelClient->request('POST', 'http://weapi.connekio.com/sms/single', [
                'json' => [
                    "account_id" => 151915,
                    "text" => "{$message}",
                    "msisdn" => "2{$mobile}",
                    // "mnc" => "1",
                    // "mcc" => "602",
                    "sender" => "masdfjsdfnjs",
                ],
                [
                    'connect_timeout' => 30
                ],
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Basic ' . $encodedauthdata,
                ]
            ]);

            $sms = false;
            if ($response->getStatusCode() === 200) {
                $data = json_decode((string)$response->getBody(), true);
                $sms = filter_var($data['status'], FILTER_VALIDATE_BOOLEAN);
            }

            $result["sms"] = $sms;
        }

        return $result;
    }
}

if (!function_exists('sendOtpMail')) {
    function sendOtpMail($code, $email)
    {
        $sentMessage = Mail::to($email)->send(
            new OTPMail($code)
        );

        return $sentMessage instanceof SentMessage;
    }
}

if (!function_exists('clientAbilities')) {
    /**
     * intial abilities set for client
     */
    function clientAbilities(): array
    {
        return [
            AbilitiesConstant::CLIENT,
        ];
    }
}

if (!function_exists('providerAbilities')) {
    /**
     * intial abilities set for provider
     */
    function providerAbilities(): array
    {
        return [
            AbilitiesConstant::PROVIDER,
        ];
    }
}

if (!function_exists('adminAbilities')) {
    /**
     * intial abilities set for admin
     */
    function adminAbilities(): array
    {
        $abilities = generateDashboardAdminAbilities();
        array_push($abilities, AbilitiesConstant::ADMIN);
        return $abilities;
    }
}

if (!function_exists('generateDashboardAdminAbilities')) {
    function generateDashboardAdminAbilities()
    {
        $abilities = array();
        // modules with full main actions
        $dashboardModules = array_values(DashboardModulesConstant::getModulesForMainActions());
        $dashboardModulesActions = array_values(DashboardModulesActionsConstant::getMainActions());
        foreach ($dashboardModules as $module) {
            $abilities[] = $module;
            foreach ($dashboardModulesActions as $action) {
                $abilities[] = $module . ' ' . $action;
            }
        }
        // single module with spesific actions
        $settingModule = DashboardModulesConstant::SETTING;
        $settingModuleActions = array_values(DashboardModulesActionsConstant::getSettingActions());
        $abilities[] = $settingModule;
        foreach ($settingModuleActions as $action) {
            $abilities[] = $settingModule . ' ' . $action;
        }
        return $abilities;
    }
}
if (!function_exists('checkDashboardAdminAbilities')) {
    function checkDashboardAdminAbilities($userCurrentAbilities, $adminFullAbilitites)
    {
        $abilities = array();
        $dashboardModules = array_values(DashboardModulesConstant::getDashboardModules());
        foreach ($dashboardModules as $module) {
            $temp = [
                "parent_key" => $module,
                "has_permission" => in_array($module, $userCurrentAbilities),
                "permission" => array(),
            ];
            foreach ($adminFullAbilitites as $ability) {
                if (!str($ability)->contains($module)) {
                    continue;
                }
                $temp['permission'][] = [
                    "key" => str($ability)->replaceFirst($module . ' ', ''),
                    "has_permission" => in_array($ability, $userCurrentAbilities),
                ];
            }
            $abilities[] = $temp;
        }
        return $abilities;
    }
}
