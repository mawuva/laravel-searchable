# Laravel package to make easy search on Eloquent model

This package is provided with a service provider and trait to make search on your eloquent model

## Installation

You can install the package via composer:

```bash
composer require mawuekom/laravel-searchable
```

## Usage

### Laravel

Go to **config/app.php**, and add this in the providers key


```php
'providers' => [
    ...
    Mawuekom\MacroSearch\MacroSearchServiceProvider::class,
    ...
]
```

### Lumen

Go to **bootstrap/app.php**, and add this in the specified key

```php
// Add provider 
$app->register(Mawuekom\MacroSearch\MacroSearchServiceProvider::class);
```


### Your model which inherits an eloquent model

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    ...

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'content'
    ];

     ...
}
```

### Use it to make search

```php

use App\Models\Post;

Post::whereLike(['title', 'content'], 'Post title');

```

You can also include `Searchable` Trait in your model.

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Mawuekom\LaravelSearchable\Searchable;

class Post extends Model
{
    use Searchable;

    ...
}
```

Once done, you can make your reseach like this

```php

use App\Models\Post;

Post::search(['title', 'content'], 'Post title') ->get();

```

### Once done, enjoy it.

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security and Report bug

If you discover any security related issues, please email seddorephraim7@gmail.com or contact me on Twitter [@ephraimseddor](https://twitter.com/ephraimseddor) instead of using the issue tracker.


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

