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
    <h1>HISTORIA DE LEKONAIWA</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/leko.png') }}"  alt="">
    </figure>
    <p>En el conuco un hombre tenía un gran cultivo de ají. Aunque el hombre visitaba su cultivo diariamente, cuando la cosecha de ají estaba lista para ser recogida, las pepas desaparecían del cultivo y lo único que encontraba era el rastro de una persona. El hombre decidió entonces descubrir a la persona que le estaba robando su cosecha y se quedó en su cultivo día y noche, esperando que llegara el intruso. Cierto día el hombre vio a una muy hermosa mujer, llamada Lekonaiwa, que tomaba el ají y se alimentaba de él, también lo machacaba y tomaba su zumo con mucha facilidad. El hombre, al ver a esa valiente mujer, se enamoró de ella y la hizo su esposa; ella tenía poderes para realizar trabajos como arrancar yuca y llevarla a la casa sin hacer esfuerzo físico alguno, por lo que despertó la envidia de las demás mujeres, entre ellas su vecina, que tenía la capacidad de transformarse en zorra; una mañana la vecina tomó forma de zorra y se ofreció para sacarle los piojos a la hermosa Lekonaiwa y ella confiada aceptó que la zorra le ayudara, pero esta aprovechó la oportunidad para enterrar una puya en la nuca de la mujer y así matarla. Después la zorra tomó su forma humana, se presentó donde las cuñadas y empezó a imitar a Lekonaiwa, la mujer que había asesinado. Tomó el ají, lo comió y trató de realizar los trabajos de forma espiritual, como lo hacía Lekonaiwa, pero no pudo lograrlo pues carecía de sus poderes y no podía comer ají. Las cuñadas, al descubrir la imitación de la zorra, tramaron un plan en contra de la falsa mujer. 
        Cambiaron el agua que tomaba cuando realizaba los trabajos por zumo de ají. Ella, sin saberlo, consumió todo el ají y en su desespero en busca de agua tomó su verdadera forma de zorra y como no encontró agua, el picante del ají le produjo la muerte. Por eso los zorros no comen ají pues se envenenan con él. Los sikuani utilizan el ají en sus comidas para demostrar su valentía
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

