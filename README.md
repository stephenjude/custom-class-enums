# Custom Type Enum Constants

[![Latest Version on Packagist](https://img.shields.io/packagist/v/stephenjude/enums.svg?style=flat-square)](https://packagist.org/packages/stephenjude/enums)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/stephenjude/enums/Tests?label=tests)](https://github.com/stephenjude/enums/actions?query=workflow%3ATests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/stephenjude/enums.svg?style=flat-square)](https://packagist.org/packages/stephenjude/enums)

If you have built a project where you create constants for variables like `success`, `pending`, `failed` so as to have consistency across your codebase then this package is for you. This constants inludes variables for gateways like `paystack`, `flutterwave`, `paypal` ETC. This package provides class variables that you can call statistically without instantiating the class. Example: `Status::PAYSTACK`, `Status::FLUTTWAVE`, `Status::PAYPAL`;

#### PS: If you have any variable that is not here please make a PR and I will gladly merge it.

## Installation

You can install the package via composer:

```bash
composer require stephenjude/enums
```

## Usage
All the constants we have defined in this package are grouped into different class-based categories. Lets dive into it:

### Status

```php
use Stephenjude\Enums\Status;

Status::PENDING; //pending
Status::SUCCESS; //success
Status::FAILED; //failed
Status::WARNING; //warning
Status::ERROR; //error
Status::PUBLISHED; //published
Status::UNPUBLISHED; //unpublished
Status::APPROVED; //approved
Status::REJECTED; //rejected
```
### Gateway

```php
use Stephenjude\Enums\Gateway;

Gateway::PAYPAL;  //paypal
Gateway::STRIPE;  //stripe
Gateway::BINANCE;  //binance
Gateway::COINBASE;  //coinbase
Gateway::PAYSTACK;  //paystack
Gateway::FLUTTERWAVE;  //flutterwave
Gateway::BUYPOWER_NG;  //buypowerng
Gateway::BANK_TRANSFER;  //bank_transfer
```
### FileType

```php
use Stephenjude\Enums\FileType;

FileType::VIDEO; //video
FileType::AUDIO; //audio
FileType::DOCUMENT; //document
FileType::TEXT; //text
FileType::PDF; //pdf
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

- [stephenjude](https://github.com/stephenjude)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
