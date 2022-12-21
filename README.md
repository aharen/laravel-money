# Laravel Money

Simple class with Facade to handle money for Laravel 5. The class stores and calculates all money related value (eg: prices etc..) in Laari (Pennies)

## Installation

    composer require aharen/laravel-money

## Configuration

1. Add `MoneyServiceProvider` to `providers` in `config/app.php`

    aharen\Money\MoneyServiceProvider::class,

2. Add `Money` Facade to `aliases` in `config/app.php`

    Money => aharen\Money\MoneyManagerFacade::class,

## Usage

Initiate from either Rufiyaa

```php
$money = Money::fromRufiyaa(10);
```

or Laari

```php
$money = Money::fromLaari(1000);
```

### Addition

Expects the provided ammount to be added in Laari

```php
Money::fromRufiyaa(20)
         ->add(100) // 1 rufiyaa
         ->inRufiyaa();
```

Adding other money objects

```php
Money::fromRufiyaa(20)
         ->add(Money::fromRufiyaa(20.5))
         ->inRufiyaa();
```

### Subtraction

Expects the provided ammount to be subtracted in Laari

```php
Money::fromRufiyaa(20)
         ->subtract(100) // 1 rufiyaa
         ->inRufiyaa();
```

Subtracting other money objects

```php
Money::fromRufiyaa(20)
         ->subtract(Money::fromRufiyaa(5)
         ->inRufiyaa();
```

### Multiplication

Expects the provided ammount to be multiplied in Laari

```php
Money::fromRufiyaa(2)
      ->multiply(200) // 2 rufiyaa
      ->inRufiyaa();
```

Multiplying other money objects

```php
Money::fromRufiyaa(20)
       ->multiply(Money::fromRufiyaa(5))
       ->inRufiyaa();
```

### Division

Expects the provided ammount to be multiplied in Laari

```php
Money::fromRufiyaa(4)
       ->divide(200) // 2 rufiyaa
       ->inRufiyaa();
```

Dividing other money objects

```php
Money::fromRufiyaa(4)
       ->divide(Money::fromRufiyaa(2))
       ->inRufiyaa();
```

### Chaining Methods

You have the ability to manipulate the values in a chainable way.

```php
Money::fromRufiyaa(20)
       ->add(200) // 2 rufiyaa
       ->subtract(100) // 1 rufiyaa
       ->inRufiyaa();
```

### Output

There are 3 output options available:

1. Output in Laari

```php
	$money->inLaari();
```

2. Output in Rufiyaa

```php
   $money->inRufiyaa();
```

3. Output in Rufiyaa and Laari

```php
	$money->inRufiyaaAndLaari();
```
