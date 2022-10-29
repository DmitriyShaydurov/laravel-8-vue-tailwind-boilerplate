<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Vue, Tailwind boilerplate</title>
</head>
<body>
    <div class ="bg-yellow-400 h-20 flex items-center justify-center">
        <h1 class="capitalize">welcome to the world of business snippets</h1>
    </div>

     <div id="app">
            <div class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">
                <welcome/>
            </div>
      </div>

      <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
