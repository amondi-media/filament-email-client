<?php

namespace Mediusware\FilamentEmailClient;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Assets\Theme;
use Filament\Support\Color;
use Filament\Support\Facades\FilamentAsset;
use Mediusware\FilamentEmailClient\Resources\MailboxResource;
use Mediusware\FilamentEmailClient\Resources\UserResource;

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
        // FilamentAsset::register([
        //     Theme::make('filament-email-client', __DIR__.'/../resources/dist/filament-email-client.css'),
        // ]);

        $panel
            // ->font('DM Sans')
            // ->primaryColor(Color::Amber)
            // ->secondaryColor(Color::Gray)
            // ->warningColor(Color::Amber)
            // ->dangerColor(Color::Rose)
            // ->successColor(Color::Green)
            // ->grayColor(Color::Gray)
            // ->theme('filament-email-client')
            ->resources([
                UserResource::class,
                MailboxResource::class,
            ]);
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
