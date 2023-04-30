# Install
### View
Add seo component to head section
```html
<x-laravel-seo::seo />
```

### Localization
Publish localization
```php
php artisan vendor:publish --tag="laravel-seo-lang"
```

### Custom titles & descriptions
Add custom titles and descriptions
```html
<x-laravel-seo::title title="privacy-policy_title" />

// or with params

<x-laravel-seo::title title="terms-of-service_title" :params="['title' => 'Title']" />

// or strict-title (without localization)

<x-laravel-seo::title :strict-title="$post->meta_title ?: $post->title" />
```

# Publishing
### Localization
```php
php artisan vendor:publish --tag="laravel-seo-lang"
```

### Views
```php
php artisan vendor:publish --tag="laravel-seo-views"
```