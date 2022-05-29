<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My custom Bulma website</title>
    <link rel="stylesheet" href="/css/app.css">
    <script type="text/javascript" src="https://cdn.datatables.net/v/bm/jq-3.6.0/dt-1.12.1/b-2.2.3/b-html5-2.2.3/r-2.3.0/datatables.min.js"></script>
</head>
<body>

@include('nav')

    <h1 class="title">
        {{ $title ?? 'Untitled' }}
    </h1>

    @if(session()->has('message'))
        <x-notification :message="session()->get('message')" />
    @endif

    @yield('content')

</body>
</html>
