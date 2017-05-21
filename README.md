# ExitPoppable



## Install

Via Composer

``` bash
$ composer require smunabo/exit-poppable
```

## Usage

``` Add the service provider to config/app.php (app/config/app.php in Laravel 4), within the providers array.

'providers' => array(
    // ...

    smunabo\exitPoppable\exitPoppableServiceProvider::class,
)


```

``` Then add an alias to config/app.php (app/config/app.php), within the aliases array.

aliases' => [
    // ...

    "ExitPoppable" => smunabo\exitPoppable\Facades\ExitPoppable::class
]


```

``` Finally Publish the package configuration by running this CMD

    php artisan vendor:publish


```



## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email stephen.munabo@gmail.com instead of using the issue tracker.

## Credits

- [Stephen Munabo][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/smunabo/ExitPoppable.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/smunabo/ExitPoppable/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/smunabo/ExitPoppable.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/smunabo/ExitPoppable.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/smunabo/ExitPoppable.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/smunabo/ExitPoppable
[link-travis]: https://travis-ci.org/smunabo/ExitPoppable
[link-scrutinizer]: https://scrutinizer-ci.com/g/smunabo/ExitPoppable/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/smunabo/ExitPoppable
[link-downloads]: https://packagist.org/packages/smunabo/ExitPoppable
[link-author]: https://github.com/stephenx99
[link-contributors]: ../../contributors
