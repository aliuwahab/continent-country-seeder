# This is a package to help developers to quickly seed their database with a list of all the continents and the respective countries and relations established

[![Latest Version on Packagist](https://img.shields.io/packagist/v/aliuwahab/continent-country-seeder.svg?style=flat-square)](https://packagist.org/packages/aliuwahab/continent-country-seeder)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/aliuwahab/continent-country-seeder/run-tests?label=tests)](https://github.com/aliuwahab/continent-country-seeder/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/aliuwahab/continent-country-seeder/Check%20&%20fix%20styling?label=code%20style)](https://github.com/aliuwahab/continent-country-seeder/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/aliuwahab/continent-country-seeder.svg?style=flat-square)](https://packagist.org/packages/aliuwahab/continent-country-seeder)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/continent-country-seeder.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/continent-country-seeder)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require aliuwahab/continent-country-seeder
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="continent-country-seeder-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="continent-country-seeder-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="continent-country-seeder-views"
```

## Usage

```php
$continentCountrySeeder = new Aliuwahab\ContinentCountrySeeder();
echo $continentCountrySeeder->echoPhrase('Hello, Aliuwahab!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Aliu](https://github.com/aliuwahab)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
