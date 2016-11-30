## Laravel Addon Traits

Collection of useful Laravel model traits to retrieve random model and add OrderBy functionality.

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

You can select any column to add OrderBy functionality either in `asc` or `desc` order.