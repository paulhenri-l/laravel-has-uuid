<?php

namespace PaulhenriL\LaravelHasUuid\Tests;

use PaulhenriL\LaravelHasUuid\Tests\Concerns\ManagesDatabase;

class TestCase extends \PHPUnit\Framework\TestCase
{
    use ManagesDatabase;

    protected function setUp(): void
    {
        $this->prepareDbIfNecessary();
        $this->freshSchema();
    }
}
