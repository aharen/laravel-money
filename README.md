# Laravel Money

Simple class with Facade to handle money for Laravel 5. The class stores and calculates all money related value (eg: prices etc..) in Laari (Pennies)

## Installation

	composer require aharen/laravel-money

## Configuration

1. Add `MoneyServiceProvider` to `providers` in `config/app.php`

	aharen\Money\MoneyServiceProvider::class,

2. Add `Money` Facade to `aliases` in `config/app.php`

	Money => aharen\Money\MoneyManagerFacade::class,
