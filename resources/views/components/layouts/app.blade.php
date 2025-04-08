<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    </head>
    <body>
        @if(auth()->check())
        <nav class="navbar navbar-expand-lg navbar-light bg-dark" data-bs-theme="dark">
            <div class="container-fluid">
                <a href="" class="navbar-brand">bootstrap</a>
                <button class="navbar-toggler" type="button" data-bd-toggle="collapse" data-bs-taget="#navbarNavalAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"> </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a href="{{route('admin.dashboard')}}" class="nav-link active">Home</a>
                        <a href="" class="nav-link ">Clientes</a>
                        <a href="{{route('admin.funcionario.index')}}" class="nav-link ">Funcionarios</a>
                        <a href="" class="nav-link ">Produtos</a>
                        <a href="" class="nav-link ">Vendas</a>


                    </div>
                </div>
            </div>
        </nav>
        @endif
        <div class="container">
            {{ $slot }}
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
