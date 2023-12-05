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
    <h1>Rompellano</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/rompellano.png') }}"  alt="">
    </figure>
    
    <p>El 19 de Septiembre de 1953, llegó a la población de Arauca; según las personas que lo conocieron, bebió mucho durante tres días.
        El día 22 de Septiembre, lo vieron tomando con dos detectives del SIR. (Servicio Secreto), actual D.A.S. en la - tienda de don Belarmino Paredes, opuesta a la casa de don Román.
        Entrada la noche, fue asesinado, según los testigos, por uno de los detectives, de nombre Alberto García.
        Al día siguiente, después de recibir todo el aguacero de la noche, que según las creencias le purificó el alma, se hizo el levantamiento. Nadie reclamó su cadáver y fue enterrado, sin urna, en el cementerio local.
        Años más tarde se hizo presente una señora, que dijo ser la esposa de Rompellano, pero un nutrido grupo de habitantes de Arauca impidieron que sus restos fueran exhumados.
        Desde el día de su muerte, Rompellanos se convirtió en el benefactor de los necesitados que acuden, en romería, implorando sus milagros.
        En su memoria, hay una canción llanera, con ritmo de ‘pajarillo”, cuyo compositor e intérprete es el conocido cantautor araucano Juan Farfán, en la cual éste añora los tiempos pasados pidiendo rescatar lo perdido, en especial, las costumbres de otrora, que identifican al llanero.
        En la segunda parte de la canción rememora a Rompellanos haciendo un elogio de las virtudes, que aún recuerdan los araucanos raizales. 
        </p>
    
        <a href="{{route('Rompe')}}"><img id="flecha" src="{{ asset('local_storage/img/izquierda.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>