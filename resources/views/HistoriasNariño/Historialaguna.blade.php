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
    <h1>Historia de la Laguna de la Cocha</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/cocha.png') }}"  alt="">
    </figure>
    <p>El cacique Pucara, cuyo nombre significa Fortaleza, estaba enamorado de la princesa Lluvia de Estrellas, logró conquistarla y formar con ella un hogar donde nacieron tres hijos: Lucero, Estrella y Viento. Los cinco vivían muy felices en ese valle de los Andes que albergaba a siete sobresalientes ciudades, según testimonio tradicional de los viejos pobladores del sector.
        Dice la leyenda, que no podía faltar en ninguna armonía social y familiar la presencia de maldad y envidia, y así fue que durante una de las fiestas del Baile del Sol, cuando ya los niños de Lluvia de Estrellas estaban grandecitos, Fortaleza invitó y llevó a su esposa a una de las siete ciudades donde celebraban las mejores fiestas en honor del dios Sol, allí se divirtieron mucho hasta el amanecer.
        Narran que Munani (el amante), era el bailarín principal de la comparsa del festejo, impresionó  grandemente al público en general, pero de manera particular dejó caer su gracia y su encanto en la princesa Tamia o Lluvia de Estrellas.
        Para la princesa Lluvia de Estrellas, los días a partir de aquella fiesta no fueron los mismos, pensaba en el danzante Munani. Un día, cuando Pucara no se encontraba en casa, llegó Munani a buscar a Tamia, ésta salió y regocijada atendió al danzante, quien definitivamente había impactado en su corazón. Besos y abrazos se dieron los nuevos amantes. Concertando citas a partir del momento, acordaron un día romper con su silencio y decirles a todo el pueblo lo que estaba sucediendo
        </p>
    
        <a href="{{route('laguna3')}}"><img id="flecha" src="{{ asset('local_storage/img/derecha.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>


