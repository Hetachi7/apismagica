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
    <h1>GORANCHA HIJO DEL SOL Y PROFETA CHIBCHA</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/felipe.png') }}"  alt="">
    </figure>
        <p>tomándose el poder por la fuerza. Escogió los criados para su servicio y entre ellos al pregonero, un indio con una gran cola, que se convirtió en la segunda persona del pueblo.
            Goranchacha gobernó con un gran rigor; tenía castigos, aún para cosas muy leves. Cambió en forma definitiva la capital de los Zaques, que inicialmente era Ramiriquí, por Hunza. Se transformó en un verdadero dictador, el primero en estas tierras aborígenes.
            El hijo del Sol mandó construir en Hunza un templo para rendirle culto a su padre; para ello mandó traer piedras y columnas de los lugares más distantes de sus dominios. Contaban los Hunzas que nunca pudieron ver las caras de quienes traían las piedras, por llegar con ellas de noche.
            Goranchacha hacía venerar muy frecuentemente al sol en su templo de piedra y cuentan las tradiciones que hacía fiestas especiales con procesiones desde el cercado de Quimuinza hasta el templo del sol. La procesión seguía un camino tapizado con mantas finas y pintadas. Duraba tres días de ida, tres días de oración y tres días de regreso.
            Un día el pregonero reunió a todos los Hunzas en un lugar, e hizo que Goranchacha les hablara de la esclavitud que tendrían en el futuro, pues vendría gente fuerte y feroz que les habría de maltratar y afligir con sujeciones y trabajos. El gran Chacha se despidió de los Hunzas y les dijo que se iba para no verlos padecer, y después de muchos años volvería a verlos. El Zaque entró al cercado y desapareció en forma definitiva, pues nunca más lo vieron. El pregonero con cola de león, delante de todos, estalló y se convirtió en humo hediondo, dando así la última despedida.
            </p>
        <a href="{{route('goroncha')}}"><img id="flecha" src="{{ asset('local_storage/img/izquierda.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>


