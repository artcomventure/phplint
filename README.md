# Recursive PHP linter

## Building

```
$ composer install
$ vendor/bin/box compile
```

## Usage

```
$ php bin/phplint.phar
$ php bin/phplint.phar <directory>
$ php bin/phplint.phar <file>
```

## Test

```
$ php bin/phplint.phar vendor/webmozart
$ echo $?
0
```
