<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My custom Bulma website</title>
    <link rel="stylesheet" href="/css/app.css">
{{--    <script src="/js/app.js"></script>--}}
    <script type="text/javascript" src="https://cdn.datatables.net/v/bm/jq-3.6.0/dt-1.12.1/b-2.2.3/b-html5-2.2.3/r-2.3.0/datatables.min.js"></script>
</head>
<body>

@include('nav')

    <h1 class="title">
        {{ $title ?? 'Untitled' }}
    </h1>
    @yield('content')


{{--<div class="field">--}}
{{--    <div class="control">--}}
{{--        <input class="input" type="text" placeholder="Input">--}}
{{--    </div>--}}
{{--</div>--}}

{{--<div class="field">--}}
{{--    <p class="control">--}}
{{--          <span class="select">--}}
{{--            <select>--}}
{{--              <option>Select dropdown</option>--}}
{{--            </select>--}}
{{--          </span>--}}
{{--    </p>--}}
{{--</div>--}}

{{--<div class="buttons">--}}
{{--    <a class="button is-primary">Primary</a>--}}
{{--    <a class="button is-link">Link</a>--}}
{{--</div>--}}

</body>
</html>
