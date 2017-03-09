<?php
namespace aharen\Money;

class MoneyManager
{

    private $laari;

    public function __construct($laari)
    {
        $this->laari = $laari;
    }

    public static function fromRufiyaa($rufiyaa)
    {
        return new static($rufiyaa * 100);
    }

    public static function fromLaari($laari)
    {
        return new static($laari);
    }

    public function inLaari()
    {
        return (string) $this->laari;
    }

    public function inRufiyaa()
    {
        return (string) ($this->laari / 100);
    }

    public function inRufiyaaAndLaari()
    {
        return number_format($this->laari / 100, 2, '.', '');
    }

    public function add($laari)
    {
        $this->laari += $laari;
        return (string) $this->laari;
    }

    public function subtract($laari)
    {
        $this->laari -= $laari;
        return (string) $this->laari;
    }

}
