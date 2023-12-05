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
    <h1>La Tunda</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/tunda.png') }}"  alt="">
    </figure>
    <p>Este es un mito propio de los departamentos que poseen costa en el océano Pacífico. Cuentan los que saben que este personaje mítico es una mujer fea, que tiene un pie de molinillo o de tingui-tingui (raíz de un árbol) y el otro como el de un bebé. Se lleva a los moritos (bebés sin bautismo), a los niños desobedientes, a los maridos trasnochadores e infieles y a jóvenes hombre o mujeres, a los confines del monte para convertirlos en sus amantes.
        La Tunda engaña a sus victimas tomando la apariencia de sus madres u otro ser querido para que la sigan al monte; ya en sus dominios, los alimenta con camarones y cangrejos que cocina en su ano. Con sus malos olores emboba a sus victimas, les chupa el pene a los hombres hasta sacarles sangre y se hace succionar la vagina para idiotizarlos.
        Los “entundados” aprender a amar a dicha mujer y rechazan a los humanos. Para poder rescatarlos de la Tunda, es necesario formar una comisión con el padrino y la madrina del “entundado”, un sacerdote, amigos y otros familiares. 
        Todos ellos se internan en el monte tocando tambores (cununos y bombos), quemando pólvora, disparando escopetas, rezando las oraciones y diciendo palabras soeces para que ella desaparezca.
        Algunos dicen que la Tunda es negra y que huele muy mal, es un ser que experimenta sentimientos humanos, se enamora, se queja y odia, especialmente a los niños. A pesar de sus sentimientos y acciones humanas, la Tunda tiene poderes sobrehumanos, pues es ella quien produce la conjugación de sol y lluvia, y cuando esto pasa la gente del Pacífico dice que: “la Tunda está pariendo”.
        Se dice que en una zona rural del municipio de Buenaventura, existe la Matunda, la mamá de la Tunda. Una vez en una fiesta, se organizó un concurso de baile y la Tunda componía una de las parejas finalistas, pero alguien la descubrió al mirar la pata de molinillo y gritó “¡vela Tunda, esa es la Tunda!” y esta salió corriendo.
        </p>
    
        <a href="{{route('Felipe2')}}"><img id="flecha" src="{{ asset('local_storage/img/derecha.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>


