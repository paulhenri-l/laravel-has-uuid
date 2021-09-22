<?php

namespace PaulhenriL\LaravelHasUuid\Tests\Fakes;

use Illuminate\Database\Eloquent\Model;
use PaulhenriL\LaravelHasUuid\HasUuid;

class Hello extends Model
{
    use HasUuid;
}
