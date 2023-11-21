@isset($strictTitle)
    @section('title', "$strictTitle | " . config('app.name'))
@else
    @section('title', __("laravel-seo::seo.$title", $params ?? []) . ' | ' . config('app.name'))
@endisset