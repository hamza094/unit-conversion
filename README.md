# Perform unit conversions in PHP

[![Stable Version](http://poser.pugx.org/hamza094/unit_conversion/v)](https://packagist.org/packages/hamza094/unit_conversion)
[![Total Downloads](http://poser.pugx.org/hamza094/unit_conversion/downloads)](https://packagist.org/packages/hamza094/unit_conversion)
[![Tests](https://github.com/hamza094/unit-conversion/actions/workflows/run-tests.yml/badge.svg)](https://github.com/hamza094/unit-conversion/actions/workflows/run-tests.yml)
[![Check & fix styling](https://github.com/hamza094/unit-conversion/actions/workflows/php-cs-fixer.yml/badge.svg)](https://github.com/hamza094/unit-conversion/actions/workflows/php-cs-fixer.yml)

This Package performs unit conversions.Right now only kg to lbs and celcius to farenheit is supported  

Here how to use it:

```php
$use Hamza094\UnitConversions\Weight;
echo Weight::fromkilograms(100)->toLbs();
``` 


```bash
composer require hamza094/unit_conversion
```

## Usage

```php
$unit_conversion = new Hamza094\UnitConversion();
echo $unit_conversion->echoPhrase('Hello, Hamza094!');
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

- [Hamza Ikram](https://github.com/hamza094)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
