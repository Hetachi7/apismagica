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
    <h1>El Chuyanchique</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/chuya.png') }}"  alt="">
    </figure>
    <p>
        es considerado el duende o guardián del bosque; infunde respeto y temor a propios y extraños. Está asociado o relacionado, a menudo, con el diablo, en algunas variantes, y en parte, con seres demoníacos. Además, cuentan que no solo es uno, sino varios. En otras creencias, se cree que el Chullachaqui se origina de una relación de un duende con un demonio, siendo una especie híbrida entre duende y demonio.
        Generalmente se presenta a quienes caminan solitariamente por las trochas. Según la tradición popular, algunas veces se presenta de manera amistosa y otorgando regalos de la Selva, siempre y cuando quien los recibe no diga el origen de su buena suerte; otras veces se presenta agresivo. Pero, por lo general, solamente desata su agresión hacia personas pecadoras, corruptas o los ateos.
        Algunos le atribuyen un espíritu infantil, porque secuestra niños para jugar con ellos, sin hacerles daño; otros en cambio dicen que los rapta, los destroza y se los come.8 Los que, supuestamente, han tenido una experiencia personal con el Chullachaqui, dicen que se les presentó cuando realizaban alguna labor propia del lugar, en una figura familiar que les hace señas para seguirlo; después de un buen tiempo se dan con la sorpresa de que ha desaparecido y los ha llevado a un lugar enmarañado del bosque.6
        Quienes dicen haberlo visto, sostienen que usa un gran sombrero de paja que oculta un rostro arrugado, en el que destaca una prominente nariz, orejas puntiagudas y ojos rojos. Apenas si rebasa el metro de estatura y viste harapos muy sucios. Otros dicen que camina encorvado y con los pies ladeados.6 Pero la característica principal, de la que deriva su nombre, se refiere a sus pies: uno es de un humano y el otro de un animal (venado, sajino, tortuga, gallo, etc.): tal como se dejan impresos en el barro por donde circula.8 De allí su nombre Chullachaqui ampliamente conocido en Madre de Dios, la parte selvática de Cuzco, Tingo María, Loreto, San Martín y Ucayali. Además en Huánuco, en donde se le conoce por tsulla chaki que significa "un solo pie", se asusta cuando le gritas en el oído, pero tiene que estar tranquilo.
        
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


