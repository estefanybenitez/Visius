<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Aqui colocaremos el titulo --}}
    <title>@yield('Visius')</title>
    {{-- Utilizando Bootstrap --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

  {{-- Nuestro menu --}}
  @component('components.menu')
      
  @endcomponent

  {{-- aqui tendremos el contenido de las paginas --}}
      <div class="container-fluid">
        @yield('content')
      </div>
</body>
</html>

@yield('scripts')