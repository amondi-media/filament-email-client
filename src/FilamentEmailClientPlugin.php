<?php

namespace Mediusware\FilamentEmailClient;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Mediusware\FilamentEmailClient\Resources\InboxResource;
use Mediusware\FilamentEmailClient\Resources\OutboxResource;
use Mediusware\FilamentEmailClient\Resources\SentResource;
use Mediusware\FilamentEmailClient\Resources\SpamResource;

class FilamentEmailClientPlugin implements Plugin
{
    public static function make(): static
    {
        return app(static::class);
    }

    public function getId(): string
    {
        return 'filament-email-client';
    }

    public function register(Panel $panel): void
    {
        // Register all Filament Resource
        $panel
            ->resources([
                InboxResource::class,
                OutboxResource::class,
                SentResource::class,
                SpamResource::class,
            ]);
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
