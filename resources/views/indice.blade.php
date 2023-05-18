@extends('header')

@section('content')
    <style>
        body {
            background-image: url("https://clubpcbox.com/wp-content/uploads/2021/03/jugador-gaming-espaldas.jpeg");
            background-size: cover;
            background-position: center;
        }

        /* Crear un contenedor para el contenido */
        .principal {
            max-width: 80%;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 100%;
        }

        h1{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', 'Geneva', Verdana, sans-serif;
            margin-bottom: 2%;
        }
        /* Establecer un margen y un ancho para el texto */
        .texto {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', 'Geneva', Verdana, sans-serif;
            margin-left: 10%;
            width: 40%;
            color: #fff;
            font-size: 24px;
            font-weight: bold;

        }

        /* Establecer estilos para el botón */
        .boton {
            padding: 10px;
            background-color: #fff;
            color: #333;
            font-size: 18px;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: inherit;
            filter: blur(10px);
            z-index: -1;
        }
    </style>

    <body>
        <div class="principal">
            <div class="texto">
                <h1>Busca fans, crea comunidades y une a los fans</h1>
                <p>Fan Quest se creó con una idea: Encontrar tu sitio en internet.</p>
                <p>Tanto si eres fan de una serie y has empezado con un juego tienes que saber una cosa: No estas solo</p>
                <p>Busca y únete a la comunidad de tu contenido favorito y comparte tu pasión.</p>
                <p>Y si eres una comunidad, ¡Hazte conocer!</p>
            </div>
            <button class="boton">Comenzar busqueda</button>
            <button class="boton">Crea tu comunidad</button>
        </div>
    </body>
    <footer>
        @include('footer')
    </footer>
@endsection
