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
    <h1>El Silbon</h1>
    <figure>
        <img id="El Silbon" src="{{ asset('local_storage/img/Elsilbon.png') }}"  alt="">
    </figure>
    
    <p> Si escuchas cerca los silbidos, el Silbón está lejos y no hay peligro; si los escuchas lejos, no tienes escapatoria, el Silbón está cerca y corres peligro"
        En los Llanos Orientales, hace muchos años, vivía un joven al que apodaban El Silbón porque silbaba y silbaba todo el día mientras caminaba e iba de cantina en cantina desperdiciando su tiempo. Este joven era malcriado, mimado y consentido por su familia, hasta el punto que todo capricho que quería, se lo cumplían. Un día, enfadado porque no le gustó la comida que sirvieron en la mesa, obligó a su padre a buscar un venado y cazarlo para sacarle las vísceras y cocinarlas. Su padre se fue en busca de este, pero tras un largo día de caza no encontró nada y llegó a la casa con las manos vacías. El joven Silbón al ver que su padre no le cumplió su capricho, en un momento de ira y bajo los efectos del alcohol, golpeó brutalmente a su progenitor, luego tomó su escopeta y sin medir las consecuencias de sus actos, lo mató de un tiro en la cabeza, con un cuchillo le saco las vísceras y entrañas, y las empacó en un pedazo de camisa y las llevó a su casa. 
        Al llegar a su casa, entregó las asaduras a su abuela para que las preparara; ella le preguntó que de dónde las había sacado, y este sin remordimiento alguno respondió: "El inepto de mi padre no logró, ¡hic!, cazar al venado, así que yo le arranqué sus vísceras para saciar mi hambre, ¡hic!.  
        Su familia, abrumada ante tan aterradora noticia, lo ató a un árbol y lo torturó con latigazos en reprimenda por sus malévolos actos, aplicándole sal y ají picante en sus heridas para que su dolor fuera aún más desesperante. </p>
    
    
        <a href="{{route('Silbon2')}}"><img id="flecha" src="{{ asset('local_storage/img/derecha.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>