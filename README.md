# Filament Email Client

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mediusware/filament-email-client.svg?style=flat-square)](https://packagist.org/packages/mediusware/filament-email-client)
[![Total Downloads](https://img.shields.io/packagist/dt/mediusware/filament-email-client.svg?style=flat-square)](https://packagist.org/packages/mediusware/filament-email-client)

This is a simple email client system based on IMAP.

## Installation

You can install the package via composer:

```bash
composer require mediusware/filament-email-client
```

After install run this command

```bash
php artisan vendor:publish --provider="Webklex\IMAP\Providers\LaravelServiceProvider"
```

## Configuration

Copy to this config in your .env file and configure with your credentials.

```env
IMAP_HOST="mail.example.com"
IMAP_PORT="993"
IMAP_ENCRYPTION="ssl"
IMAP_VALIDATE_CERT="true"
IMAP_USERNAME="test@example.com"
IMAP_PASSWORD="your_password"
IMAP_DEFAULT_ACCOUNT="default"
IMAP_PROTOCOL="imap"
```

## Usage

Now go to your AdminPanelProvider and add this line in plugins section.

```php
// App\Providers\Filament;
  return $panel
    ->plugins([
        // 
        FilamentEmailClientPlugin::make(),
    ]);
```
When you configure properly then you will see this Mailbox menu on Filament Admin Panel.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Amdadul Haq](https://github.com/amdad121)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
