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
    <h1>Mito de la Creacion</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/creacion.png') }}"  alt="">
    </figure>
        <p>Al verse viejo se entristeció profundamente. “Estoy ya viejo... sólo!. Oh, si muero la tierra quedará más sola todavía”. Apesadumbrado, despaciosamente emprendió el regreso a su choza. El susurro de la selva y el canto de las aves lo embriagaban de infinita melancolía.
            Por el camino sintió un dolor en la rodilla como si le hubiera picado un animal. Sin darse cuenta, pensó que había podido ser una avispa y comenzó a sentir que un pesado sopor lo invadía. Siguió caminando con dificultad y al llegar a la choza se recostó quedándose dormido. Tuvo un largo sueño; soñó que entre más soñaba más se envejecía y más débil se ponía y que de su cuerpo agónico se proyectaban otros seres. Despertó muy tarde al día siguiente y quiso levantarse pero el dolor se lo impidió. 
            Entonces se miró la rodilla y notó que la tenía hinchada y transparente. Le pareció que algo en su interior se movía; al acercar más los ojos vio con sorpresa, allá en el fondo, dos seres minúsculos que trabajaban y se puso a observarlos.
            Las figuras eran de un hombre y una mujer, el hombre templaba un arco y la mujer tejía un chinchorro. Yuche les preguntó: “¿Quienes son ustedes? ¿Cómo llegaron ahí?” Los seres levantaron la cabeza, lo miraron pero no dijeron nada, siguieron trabajando. Al no obtener respuesta hizo un máximo esfuerzo para ponerse de pié, pero cayo en tierra. 
            Al golpearse la rodilla contra el suelo, salieron de allí los dos pequeños seres que empezaron a crecer mientras él moría.
            Los primeros Ticunas se quedaron un tiempo allí, donde tuvieron muchos hijos y más tarde se marcharon porque querían conocer más tierras. Muchos Ticunas han buscado ese lugar pero ninguno lo ha encontrado. Algunos dicen que es en el Brasil, en una quebrada que desemboca en el río Yavarí .
        </p>
        <a href="{{route('creacion')}}"><img id="flecha" src="{{ asset('local_storage/img/izquierda.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>


