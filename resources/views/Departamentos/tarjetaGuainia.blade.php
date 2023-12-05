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
   <h1>DEPARTAMENTO GUAINIA</h1>
</div>

<div class="container">
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/soto.jpg') }}" >
        </figure>
        <div class="contenido">
            <h3>La Leyenda de Sotomayor Guanina</h3>
            <p>     Cuenta la leyenda, que el cacique Agüeybaná el Bravo, asignado a Sotomayor en los repartimientos, tenía una hermana llamada Guanina. Guanina era una hermosa india que tenía un taíno.</p>
            <a href="{{route('soto')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/Flor.png') }}" >
        </figure>
        <div class="contenido">
            <h3>LA PRINCESA FLOR EN EL CERRO PAJARITO</h3>
            <p>Cuenta la historia que la palabra Inírida significa “espejito de sol”, un nombre muy bonito para una indígena que habita en el cerro Pajarito desde hace siglos. Dicen que desde niña, Inírida era tan.</p>
            <a href="{{route('flor')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/india.png') }}" >
        </figure>
        <div class="contenido">
            <h3>India Guainia</h3>
            <p>A los siete días de haber entrado al cerro fue vista por los familiares que iban con el fin de rescatarla. Ella salió a la puerta vestida de hierbas, con un largo manto de color blanco y con flores de todos los colores.</p>
            <a href="{{route('india')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/cauca/Caquiona/imagen 3.jpg') }}" >
        </figure>
        <div class="contenido">
            <h3>La virgen de Caquiona</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla asperiores nam repellendus dolor itaque, delectus fuga debitis corporis facilis veritatis.</p>
            <a href="{{route('leyenda')}}">Leer más</a>

        </div>

    </div>

</div>





