# EasyMutex

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

**Note:** Replace ```Zyuhel``` ```zyuhel``` ```https://github.com/zyuhel``` ```zyuhel@ya.ru``` ```zyuhel``` ```EasyMutex``` ```Simple and straightward Mutex Php realisation``` with their correct values in [README.md](README.md), [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [LICENSE.md](LICENSE.md) and [composer.json](composer.json) files, then delete this line. You can run `$ php prefill.php` in the command line to make all replacements at once. Delete the file prefill.php as well.

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what
PSRs you support to avoid any confusion with users and contributors.

## Structure

If any of the following are applicable to your project, then the directory structure should follow industry best practises by being named the following.

```
bin/        
config/
src/
test/
vendor/
```


## Install

Via Composer

``` bash
$ composer require zyuhel/EasyMutex
```

## Usage

``` php
$skeleton = new EasyMutex();
echo $skeleton->echoPhrase('Hello, League!');
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

If you discover any security related issues, please email zyuhel@ya.ru instead of using the issue tracker.

## Credits

- [Zyuhel][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/zyuhel/EasyMutex.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/zyuhel/EasyMutex/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/zyuhel/EasyMutex.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/zyuhel/EasyMutex.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/zyuhel/EasyMutex.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/zyuhel/EasyMutex
[link-travis]: https://travis-ci.org/zyuhel/EasyMutex
[link-scrutinizer]: https://scrutinizer-ci.com/g/zyuhel/EasyMutex/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/zyuhel/EasyMutex
[link-downloads]: https://packagist.org/packages/zyuhel/EasyMutex
[link-author]: https://github.com/zyuhel
[link-contributors]: ../../contributors
