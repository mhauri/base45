# Base45

*base45* is a PHP based base45 encoder/decoder that is fully compatible with [draft-faltstrom-base45-03](https://datatracker.ietf.org/doc/html/draft-faltstrom-base45-03).

[![Latest Version](https://img.shields.io/packagist/v/mhauri/base45.svg?style=flat-square)](https://packagist.org/packages/mhauri/base45)
![GitHub Workflow Status (event)](https://img.shields.io/github/workflow/status/mhauri/base45/Tests?event=push&style=flat-square)
![Codecov](https://img.shields.io/codecov/c/github/mhauri/base45?style=flat-square)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)

## Introduction

When using QR or Aztec codes a different encoding scheme is needed
than the already established base 64, base 32 and base 16 encoding
schemes that are described in RFC [RFC4648](https://datatracker.ietf.org/doc/html/rfc4648).  The difference
from those and base 45 is the key table and that the padding with '='
is not required.

## Install

Install with [composer](https://getcomposer.org/).

``` bash
$ composer require mhauri/base45
```

## Usage


``` php
$base45 = new \Mhauri\Base45();

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

The MIT License (MIT). Please see [License File](LICENSE) for more information.