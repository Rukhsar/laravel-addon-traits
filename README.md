# Laravel Addon Traits

Collection of useful Laravel model traits to retrieve random model and add OrderBy functionality.

## Installation

Require this package by running:

```
composer require rukhsar/addontraits
```

### Laravel OrderByTrait

**Usage**

Add support for a standard order by

```php

use Rukhsar\AddonTraits\OrderByTrait;

class User extends Model
{
    use OrderByTrait;

    protected $default_order_by = 'name';

    protected $default_order_direction = 'asc';

}

```

Use `Order()` in your query to fetch the result.

```php

    $users = App\User::Order()->get();

```
You can select any column to add OrderBy functionality either in `asc` or `desc` order.

### Laravel RandomModelTrait

Laravel package for getting a random model from database.

**Usage**

Use `RandomModelTrait` in your model.

```php
use Rukhsar\AddonTraits\RandomModelTrait;

class User extends Model
{
    use RandomModelTrait;
}

```

Now you can use `random()` scope on your model.

```php
$randomUser = User::random()->first();

$randomUserWithRelation = User::random()->with('relation_name')->first();

// Static methods which return an instance

$user = User::getRandom();  // return instance or null

$user = User::getRandomOrFail(); // return instance or throw exception

```
