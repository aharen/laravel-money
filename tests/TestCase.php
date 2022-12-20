<?php

namespace Aharen\Tests;

use Aharen\Money\MoneyServiceProvider;
use GrahamCampbell\TestBench\AbstractPackageTestCase;

abstract class TestCase extends AbstractPackageTestCase
{
    /**
     * Get the service provider class.
     *
     * @return string
     */
    protected function getServiceProviderClass()
    {
        return MoneyServiceProvider::class;
    }
}