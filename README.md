# Molecule


Converts canonical SMILES into a php object.

## Structure

If any of the following are applicable to your project, then the directory structure should follow industry best practises by being named the following.

```
src/
tests/
vendor/
```


## Install

Via Composer

``` bash
$ composer require kdaviesnz/molecule
```

## Usage

``` php
        $fc = new \kdaviesnz\molecule\FactoryClient();
        $molecule = $fc->getMolecule("C1=C-C=C-C=C1");
        var_dump(get_class($molecule));

```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see CONTRIBUTING.md and CODE_OF_CONDUCT.md for details.

## Security

If you discover any security related issues, please email :kdaviesnz@gmail.com instead of using the issue tracker.

## Credits

- Kevin Davies

## License

The MIT License (MIT). Please see LICENSE.md for more information.


[link-packagist]: https://packagist.org/packages/kdaviesnz/molecule
[link-author]: https://github.com/kdaviesnz
[link-contributors]: ../../contributors

# Molecule
