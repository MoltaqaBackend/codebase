<?php

namespace App\Classes\Scribe;

class FluentInterface
{
    private array $parameters = [];

    public function parameter(string $key, string $description, string $example = 'No-Example'): FluentInterface
    {
        if (str($key)->endsWith('*')) {
            foreach (getLocales() as $locale) {
                $this->parameters[str_replace('*', '', $key) . $locale] = [
                    'description' => $description,
                    'example' => $this->getExample($example),
                ];
            }
        } else {
            $this->parameters[$key] = [
                'description' => $description,
                'example' => $this->getExample($example),
            ];
        }
        return $this;
    }

    public function toArray(): array
    {
        return $this->parameters;
    }

    private function getExample($example): array|string
    {
        return match ($example) {
            "setFile" => storage_path("app/assets/filler.pdf"),
            "setImage" => storage_path("app/assets/image.png"),
            "setLogo" => storage_path("app/assets/logo.png"),
            "setCover" => storage_path("app/assets/cover.png"),
            'setFiles' => [storage_path("app/assets/imagearray.png"), storage_path("app/assets/filler.pdf")],
            'setImages' => [storage_path("app/assets/imagearray.png"), storage_path("app/assets/imagearray.png")],
            default => $example,
        };
    }
}
