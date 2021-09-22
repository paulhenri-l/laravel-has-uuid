<?php

namespace PaulhenriL\LaravelHasUuid;

use Illuminate\Support\Str;

trait HasUuid
{
    public static function bootHasUuid()
    {
        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = Str::orderedUuid()->toString();
            }
        });
    }

    protected function initializeHasUuid()
    {
        $this->keyType = 'string';
        $this->incrementing = false;
    }
}
