@props(['title' => 'titre'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Social network | {{$title}}</title>
</head>
<body>
    @include('partials.nav')
    <div class="row m-3">
        @include('partials.flashbag')
    </div>

    <div class="m-3">
        <main>
            {{$slot}}
        </main>
    </div>

    @include('partials.footer')
</body>
</html>