<?php

namespace Mediusware\FilamentEmailClient;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Mediusware\FilamentEmailClient\Resources\MailboxResource;

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
                MailboxResource::class,
            ]);
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
