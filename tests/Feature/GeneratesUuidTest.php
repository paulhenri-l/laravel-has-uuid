<?php

namespace PaulhenriL\LaravelHasUuid\Tests\Feature;

use PaulhenriL\LaravelHasUuid\Tests\Fakes\Hello;
use PaulhenriL\LaravelHasUuid\Tests\TestCase;

class GeneratesUuidTest extends TestCase
{
    const UUID_REGEX = '/[0-9a-fA-F]{8}\-[0-9a-fA-F]{4}\-[0-9a-fA-F]{4}\-[0-9a-fA-F]{4}\-[0-9a-fA-F]{12}/';

    public function test_uuid_is_generated()
    {
        $hello = new Hello();
        $hello->name = 'workd';
        $hello->save();

        $this->assertNotNull($hello->id);
        $this->assertMatchesRegularExpression(static::UUID_REGEX, $hello->id);
    }
}
