<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body>

<h1>{{$title}}</h1>

    {{-- CUARTA FORMA, JUNTANDO --}}

    <ul>
        {{-- forelse: Hace un forelse sólo en el caso de que la variable que va a ser iterada no esté vacía --}}

        @forelse($users as $user)

            <li>{{ $user }}</li>

        @empty
            <p>No hay usuarios registrados</p>

        @endforelse
    </ul>

{{-- PRIMERA FORMA

    <ul>
    @if(!empty($users))

        <!-- recorremos el array de usuarios que tenemos en el controlador -->

        @foreach($users as $user) <!-- @funciones blade. -->

        <li>{{ $user }} </li>  <!-- Añadimos mostacho: escapa e imprime el contenido de esa variable -->

        @endforeach

    @else

        <p>No hay usuarios registrados</p>

    @endif
    </ul>

--}}


{{-- SEGUNDA FORMA

    @unless(empty($users))

        <ul>

        @foreach($users as $user)

            <li>{{ $user }} </li>

        @endforeach

        </ul>

    @else

        <p>No hay usuarios registrados</p>

    @endif

--}}


{{-- TERCERA FORMA

    @empty($users)

        <p>No hay usuarios registrados</p>

    @else
        <ul>

            @foreach($users as $user)

                <li>{{ $user }} </li>

            @endforeach

        </ul>
    @endif

--}}



</body>
</html>