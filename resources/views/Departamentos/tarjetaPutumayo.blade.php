<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css_index/EThistoria.css')}}">

</head>
<body>

<header>
<a href="{{route('inicio')}}" class="logo">
    <img src="{{ asset('local_storage/img/logo.png') }}"   alt="">
    <h2>La Mágica Colombia</h2>
</a>


<nav>
    <a href="{{route('subirhistoria')}}" class="link">¿Quieres subir tú historia?</a>
    <a href="{{route('info')}}" class="link">¿Quienes Somos?</a>
    <a href="{{route('contac')}}" class="link">Contacto</a>
    <a href="{{route('registro')}}" class="link">Registráte</a>
</nav>
</header>

<div class="titulo">
   <h1>DEPARTAMENTO PUTUMAYO</h1>
</div>

<div class="container">
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/chumbelo.png') }}" >
        </figure>
        <div class="contenido">
            <h3> Historia del Chumbelo</h3>
            <p>A doce horas de camino de herradura, hacia el occidente de la loma que separa las cuencas de lo ríos Afán y Caquetá, existe un salto que avienta las aguas a un precipicio por todos desconocido. Se dice que en la parte más alta del caudal habitó una tribu de la familia de los ingas</p>
            <a href="{{route('Chumbelo')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/diablovirgen.png') }}" >
        </figure>
        <div class="contenido">
            <h3>La Hsitoria del Diablo y la Virgen</h3>
            <p>Hace mucho tiempo, en la desolada vía que de Mocoa conduce a Pasto, pocos conductores de vehículos se atrevían a transitar de noche por esta carretera, por temor a encontrarse con el Diablo, que según muchas personas decían.</p>
            <a href="{{route('DiabloV')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/futeadora.png') }}" >
        </figure>
        <div class="contenido">
            <h3>EL Mito de la Fueteadora</h3>
            <p>El indio semidesnudo se retorcía en su hamaca, presentaba grandes hematomas en las piernas y en la espalda. Colgada de un palo que servía de cerca se hallaba una larguísima, delgada y horrible víbora.
                - “Perro animal”, dijo el cacique.
                - “¿Qué pasar taita?”, pregunté alarmado.
                - “Fueteadota</p>
            <a href="{{route('Fuete')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/Yage.png') }}" >
        </figure>
        <div class="contenido">
            <h3>La Historia del Yage</h3>
            <p>La imaginación indígena ha encontrado en la planta del yagé un motivo más para supersticiones y leyendas.
                Los indios del sur atribuyen a la bebida del yagé propiedades infrahumanas que transforman la personalidad. En algunas ocasiones elaboran la bebida del yagé, bien el curaca.</p>
            <a href="{{route('Yage')}}">Leer más</a>

        </div>

    </div>

</div>



