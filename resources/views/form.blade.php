<html>

<head>
    <title>Laravel 9 Work With Livewire Form Submit Tutorial</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @livewireStyles
</head>

<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header text-center text-white bg-primary">
                <h4 class="text-center">Laravel 9 Work With Livewire Form Submit Tutorial</h4>
            </div>
            <div class="card-body">
                @livewire('contact-form')
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    @livewireScripts
</body>

</html>