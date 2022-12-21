<?php

declare(strict_types=1);

namespace Aharen\Money;

use Illuminate\Support\Traits\Macroable;

class MoneyManager
{
    use Macroable {
        Macroable::__call as macroCall;
    }

    public function __construct(
        private $laari
    ) {
    }

    public static function fromRufiyaa(float $rufiyaa): self
    {
        return new static($rufiyaa * 100);
    }

    public static function fromLaari(float $laari): self
    {
        return new static($laari);
    }

    public function inLaari() : string
    {
        return (string) $this->laari;
    }

    public function inRufiyaa() : string
    {
        return (string) ($this->laari / 100);
    }

    public function inRufiyaaAndLaari() : string
    {
        return number_format($this->laari / 100, 2, '.', '');
    }

    public function add(MoneyManager | float  $laari): self
    {
        if ($laari instanceof MoneyManager) {
            $this->laari += $laari->laari;

            return $this;
        }

        $this->laari += $laari;

        return $this;
    }

    public function subtract(MoneyManager | float $laari): self
    {
        if ($laari instanceof MoneyManager) {
            $this->laari -= $laari->laari;

            return $this;
        }

        $this->laari -= $laari;
        return $this;
    }

    public function multiply(MoneyManager | float $laari): self
    {
        if ($laari instanceof MoneyManager) {
            $this->laari = $this->laari  * ($laari->laari / 100);

            return $this;
        }

        $this->laari = $this->laari  * ($laari / 100);
        return $this;
    }

    public function divide($laari): self
    {
        if ($laari instanceof MoneyManager) {
            $this->laari = $this->laari  / ($laari->laari / 100);

            return $this;
        }

        $this->laari = $this->laari  / ($laari / 100);
        return $this;
    }
}
