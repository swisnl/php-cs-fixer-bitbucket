# PHP CS Fixer Bitbucket error reporter

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Buy us a tree][ico-treeware]][link-treeware]
[![Total Downloads][ico-downloads]][link-downloads]
[![Maintained by SWIS][ico-swis]][link-swis]

This PHP CS Fixer reporter will add annotations in Bitbucket, for example in pull requests, similar to the built-in GitLab formatting.

## Installation

Via Composer

```bash
composer require --dev swisnl/php-cs-fixer-bitbucket
```

## Usage

To use this custom reporter you need to run PHP CS Fixer with the GitLab format and pipe the results to this package. For example:

```bash
php-cs-fixer check --format=gitlab | phpcsf2bb
```

### Line numbers

PHP CS Fixer doesn't keep track of line numbers, so all annotations are at the top of the file. You can add (approximate) line numbers based on the diff, by using the `--diff` argument for PHP CS Fixer. For example:

```bash
php-cs-fixer check --format=gitlab --diff | phpcsf2bb
```

## Screenshots

![Annotations](/img/annotations.png)
![Report](/img/report.png)

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email security@swis.nl instead of using the issue tracker.

## Credits

- [Jasper Zonneveld][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

This package is [Treeware](https://treeware.earth). If you use it in production, then we ask that you [**buy the world a tree**][link-treeware] to thank us for our work. By contributing to the Treeware forest you’ll be creating employment for local families and restoring wildlife habitats.

## SWIS :heart: Open Source

[SWIS][link-swis] is a web agency from Leiden, the Netherlands. We love working with open source software.

[ico-version]: https://img.shields.io/packagist/v/swisnl/php-cs-fixer-bitbucket.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-treeware]: https://img.shields.io/badge/Treeware-%F0%9F%8C%B3-lightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/swisnl/php-cs-fixer-bitbucket.svg?style=flat-square
[ico-swis]: https://img.shields.io/badge/%F0%9F%9A%80-maintained%20by%20SWIS-%230737A9.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/swisnl/php-cs-fixer-bitbucket
[link-downloads]: https://packagist.org/packages/swisnl/php-cs-fixer-bitbucket
[link-treeware]: https://plant.treeware.earth/swisnl/php-cs-fixer-bitbucket
[link-fork]: https://github.com/modprobe/php-cs-fixer-bitbucket
[link-author]: https://github.com/JaZo
[link-contributors]: ../../contributors
[link-swis]: https://www.swis.nl
