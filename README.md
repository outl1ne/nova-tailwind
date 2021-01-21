# Nova Tailwind

[![Latest Version on Packagist](https://img.shields.io/packagist/v/optimistdigital/nova-tailwind.svg?style=flat-square)](https://packagist.org/packages/optimistdigital/nova-tailwind)
[![Total Downloads](https://img.shields.io/packagist/dt/optimistdigital/nova-tailwind.svg?style=flat-square)](https://packagist.org/packages/optimistdigital/nova-tailwind)

This [Laravel Nova](https://nova.laravel.com) package loads the full Tailwind CSS in the Nova admin panel.

## Installation

Install the package in a Laravel Nova project via Composer:

```bash
composer require optimistdigital/nova-tailwind
```

## Usage

Just install with Composer and you're good to go!

## Conflicts

The Tailwind configuration has been modified so it doesn't conflict with Laravel Nova's variation of Tailwind - **the package is meant to just fill in the gaps.**

**If you do find some styles being overridden after installing this package, do make an issue and it can definitely be resolved.**

## Custom cases

### Usage on login screen

Nova does not load the registered styles on the Login screen automatically. In order for the Tailwind to work on the login screen, you have to publish the CSS yourself. This package will then check if there's a published CSS file and will load it on the login screen as a Nova theme style.

Basically, just publish the CSS and it will work on the auth screens:

```bash
php artisan vendor:publish --tag="tailwind-public-css"
```

## Credits

- [Tarvo Reinpalu](https://github.com/Tarpsvo)
- [Tailwind CSS](https://tailwindcss.com)

## License

This project is open-sourced software licensed under the [MIT license](LICENSE.md).
