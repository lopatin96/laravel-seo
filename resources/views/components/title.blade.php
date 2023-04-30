@isset($strictTitle)
    @section('title', config('app.name') . ': ' . $strictTitle)
@else
    @section('title', config('app.name') . ': ' . __("laravel-seo::seo.$title", $params ?? []))
@endisset