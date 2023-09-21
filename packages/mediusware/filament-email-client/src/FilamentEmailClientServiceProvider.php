<?php

namespace Mediusware\FilamentEmailClient;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentEmailClientServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-email-client';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasConfigFile();
    }
}
