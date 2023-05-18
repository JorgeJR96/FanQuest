@extends('header')
@section('content')
    <style>
        body {
            background-image: url("https://fondosmil.com/fondo/23110.jpg");
            background-size: cover;
            background-position: center;
        }

        legend,
        label,
        #ayuda {
            color: white;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', 'Geneva', Verdana, sans-serif;
        }

        body.div{
            margin: 1%;
        }

        #checkbox-list ul {
            display: inline-block;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        #checkbox-list li {
            display: inline-block;
            margin-right: 10px;
        }

        #checkbox-list input[type="checkbox"] {
            display: none;
        }

        #checkbox-list input[type="checkbox"]+label:before {
            content: "";
            display: inline-block;
            width: 16px;
            height: 16px;
            border: 1px solid #ccc;
            margin-right: 5px;
            vertical-align: middle;
            cursor: pointer;
        }

        #checkbox-list input[type="checkbox"]:checked+label:before {
            background-color: #ccc;
        }

        #checkbox-list label {
            display: inline-block;
            vertical-align: middle;
            cursor: pointer;
        }

        .container{
            background-color: black;
        }
    </style>

    <script>
        var toggleInput = document.getElementById('toggle-web');
        var extraInfo = document.getElementById('info-web');

        function showContent() {
            element = document.getElementById("info-web");
            check = document.getElementById("cbweb");
            if (check.checked) {
                element.style.display = 'block';
            } else {
                element.style.display = 'none';
            }
        }
    </script>

    <body>
        <div class="container w-25 border p-4 mt-4 mb-4">
            <form>
                <legend>Introduce tus datos</legend>
                <div class="mb-3"> {{-- campo nombre --}}
                    <label class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                    <div id="ayuda" class="form-text">Todo empieza con un nombre.</div>
                </div>
                <div class="mb-3"> {{-- campo descripcion --}}
                    <label class="form-label">Descripción</label>
                    <textarea type="description" id="description" class="form-control" id="descInput" name="description" rows="5"></textarea>
                    <div id="ayuda" class="form-text">Date a conocer. Cuenta de que vá tu comunidad.</div>
                </div>
                <div class="mb-3"> {{-- campo genero --}}
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Género de tu contenido</option>
                        <option value="general">General</option>
                        <option value="juegos">Juegos</option>
                        <option value="seriespelis">Series y pelis</option>
                        <option value="noticias">Noticias</option>
                        <option value="novelas">Novelas</option>
                        <option value="deportes">Deportes</option>
                    </select>
                </div>
                <div class="mb-3"> {{-- campo email --}}
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" required>
                    <div id="ayuda" class="form-text">Introduce tu email.</div>
                </div>

                <div id="info-web" > {{-- campo pagina --}}
                    <label class="form-label">Pagina web:</label>
                    <input type="web" class="form-control">
                    <div id="ayuda" class="form-text">Introduce tu web</div>
                </div>

                <div id="info-web" > {{-- campo twitter --}}
                    <label class="form-label">Pagina twitter:</label>
                    <input type="tw" class="form-control">
                </div>

                <div id="info-web" > {{-- campo Instagram --}}
                    <label class="form-label">Cuenta Instagram:</label>
                    <input type="ig" class="form-control">
                </div>

                <div id="info-web" > {{-- campo pagina --}}
                    <label class="form-label">Cuenta Youtube</label>
                    <input type="yt" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" required>
                    <div id="ayuda" class="form-text">Protege tu perfil. Usa contraseña.</div>
                </div>

                <button type="submit" class="btn btn-primary">Crear comunidad</button>
            </form>
        </div>

        <footer>
            @include('footer')
        </footer>
    </body>
@endsection
