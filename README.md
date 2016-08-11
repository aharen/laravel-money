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

	$money = Money::fromRufiyaa(10);

or Laari

	$money = Money::fromLaari(1000);

### Addition

Expects the provided ammount to be added in Laari

	$money->add(100);

### Subtraction

Expects the provided ammount to be subtracted in Laari

	$money->subtract(100);

### Output

There are 3 output options available:

1. Output in Laari

		$money->inLaari();

2. Output in Rufiyaa

		$money->inRufiyaa();

3. Output in Rufiyaa and Laari

		$money->inRufiyaaAndLaari();
