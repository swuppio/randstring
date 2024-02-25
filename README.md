# RandString

*This package was created for my personal use, but if you find it useful, feel free to use it*

It helps generate random strings  

## Installation

### Via Composer

~~~
composer require swuppio/randstring
~~~

## Get Started

### Params description

```php
gen(int $length = 5, ?string $symbols = null): string
```

- *int* `$length` - The desired length of the generated random string. Specifies how many characters the resulting string should contain (default = 5)  
- *?string* `$symbols` - An optional string of characters from which the random string will be generated. If not provided, the method will use a default set of characters returned by the `getChars()` method

The method returns a randomly generated string

### Example

#### Generate a random string using default parameters:

```php
echo RandString::gen();
```

#### Generate a 10-character long random string using a custom set of characters:

```php
echo RandString::gen(10, 'abc123');
```
