<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css_index/Eleyenda.css')}}">

</head>
<body>

<header>
<a href="{{route('inicio')}}" class="logo">
    <img src="{{asset('local_storage/img/logo.png')}}"  alt="">
    <h2>La Mágica Colombia</h2>
</a>


<nav>
    <a href="{{route('subirhistoria')}}" class="link">¿Quieres subir tú historia?</a>
    <a href="{{route('info')}}" class="link">¿Quienes Somos?</a>
    <a href="{{route('contac')}}" class="link">Contacto</a>
    <a href="{{route('registro')}}" class="link">Registráte</a>
</nav>
</header>

<div class="audioo">
    <h2>Música de ambiente</h2>
    <div class="ojoo">
        <img src="{{ asset('local_storage/img/ojo.gif') }}" >
    </div>
<audio  controls autoplay >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>

<div class="leyenda">
    <div id="fondoo">

    </div>
    <h1>BURIZACO EL DEMONIO DEL CERRO</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/burizaco.png') }}"  alt="">
    </figure>
    <p>A principios del siglo XIX, Cali estuvo azotada por epidemias, desbordamientos y males. Estos se le atribuyeron al Buziraco, un demonio que llegó de Cartagena para asentarse en la Sultana del Valle.
        En las noches de tempestad se afirmaba que sobre el cerro se podía ver la sombra de un ser con enormes alas de murciélago que reía a carcajadas. Para desterrarlo, fue necesario iniciar romerías dirigidas por frailes que con rezos y aguas, intentaron desarraigar este ser maligno.
        Los frailes instalaron en la cima del cerro tres cruces de guadua con el objetivo de ahuyentar el demonio que atemorizaba a la población. Desde ese momento, cada año, el 3 de mayo, muchos caleños subían a hacer oración. Ya en 1937 se generó un proyecto para construir las cruces en cemento; desde ese entonces, se dice que el demonio abandonó la ciudad y la liberó de sus males, sin embargo, algunos aseguran que con las cruces lo que se logró fue atraparlo y convertir la ciudad en su cárcel para toda la eternidad.
        </p>
    
        
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>


