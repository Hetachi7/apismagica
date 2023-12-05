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
    <h1>Historia del Cueche</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/cueche.png') }}"  alt="">
    </figure>
        <p>tenía cabeza de toro, unas veces pintada de negro y blanco, otras colorada; éste era el más bravo o sea el que más daño hacía. La llovizna que caía era el líquido fatal que producía el daño. A un niño le cayó en su cabello y dijeron que quedó pelado para siempre, a otro le cayó en la cara y se la desfiguró tanto que él mismo era un espanto. A donjuán Antonio le salió el Cueche cuando retornaba borracho a su rancho; el viejo tenía los ojos tan azules que parecían piedras preciosas incrustadas en las arrugas de su cara; pero cuando miró al Cueche se le volvieron negros y fosforescentes como los ojos de un buey en la mitad de la noche oscura.
            Cuando murió dicen que el Cueche vino a dejarle sus ojos y se llevó los de él. Patológicamente parece que la gente se hizo daño con el Cueche porque al creer que algo le iba a pasar cuando le caía la llovizna o “miado” del Cueche, no tardaba en pasarle.
            Una mujer se llenó de una bubas o como comúnmente les decían chandas” en todo su rostro y le perduraron hasta la muerte; su madre decía que la “mió El Cueche”.
            A los campesinos se les morían los animales con males incurable producidos por el Cueche, a otros se les enfermaba la mujer con fiebres terminales y males desconocidos que se los atribuían al Cueche.
            El Cueche fue un tirano, un demonio capaz de producir enfermedades incurables en niños, ancianos, mujeres y hombres; más aún cuando una mujer estaba en estado «interesante», embarazada, su hijo podía salir un fenómeno o un bastardo. 
            El Cueche pues paseó por todas las calles del pueblo, entró a las escuelas, a la Iglesia como cosa contradictoria, a la evangelización de doña Emma; al colegio del hermano Geminiano, a todas partes, pero de todas partes había que echarlo quemando incienso, o ramo conjurado en la misa de resurrección, amarrando en la puerta de la casa una cruz patas arriba o sea la de San Pedro que era el único que lo derrotaba.
            </p>
        <a href="{{route('cueche')}}"><img id="flecha" src="{{ asset('local_storage/img/izquierda.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>


