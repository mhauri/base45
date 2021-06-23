# Base45

*base45* is a base45 encoder/decoder that is fully compatible [draft-faltstrom-base45-03](https://datatracker.ietf.org/doc/html/draft-faltstrom-base45-03).

[![Latest Version](https://img.shields.io/packagist/v/mhauri/base45.svg?style=flat-square)](https://packagist.org/packages/mhauri/base45)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)

## Install

Install with [composer](https://getcomposer.org/).

``` bash
$ composer require mhauri/base45
```

## Usage


``` php
$base45 = new Mhauri\Base45;

$encoded = $base45->encode(random_bytes(128));
$decoded = $base45->decode($encoded);
```

## Testing

``` bash
$ make test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email marcel@hauri.dev instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.