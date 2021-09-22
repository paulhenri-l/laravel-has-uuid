# LaravelHasUuid

![Tests](https://github.com/paulhenri-l/laravel-has-uuid/workflows/Tests/badge.svg)
[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)

Easily use uuids as the primary key for your eloquent models.


## Installation

```
composer require paulhenri-l/laravel-has-uuid
```

## Usage

This feature is provided as a trait that you should use in your models.

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hello extends Model
{
    use \PaulhenriL\LaravelHasUuid\HasUuid;
}
```

You should also use the uuid filed in your migrations instead of the default id one.

```php
Schema::create('hellos', function (Blueprint $table) {
    $table->uuid('id')->primary();
    $table->timestamps();
});
```

Now whenever you'll create a new model it will be given an uuid instead of an 
incrementing id
