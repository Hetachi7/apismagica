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
    <h1>IDN KAMNI CREA AL MUNDO CON SALIVA</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/crear.png') }}"  alt="">
    </figure>
        <p>Estas almas se las come el Trueno. Todas las Estrellas pasan por debajo de estos lugares, hasta dar la vuelta y cuando ya van a llegar a la Tierra, se transforman en aves. Entre los primeros discos y la Tierra, Jee, existen tres dominios: el de las Oropéndolas y Tángaras, que son amigos de Idn Kamni; el Dominio de los Milanos, que fueron los que le avisaron al dios que los buitres se habían raptado a su esposa; y el Dominio de los Buitres que se asociaban con los carroñeros.
            Hacia el este, en oposición al camino de las estrellas, el Sol y la Luna describen un arco que va hacia el oeste, para dar la vuelta a la Tierra y salir por el este. Por esta trayectoria también van las nubes hacia el este con las lluvias y el viento.
            Debajo de la Tierra y debajo del Camino del Sol y de la Luna, se encuentra el mundo llamado Bak, donde viven los umarí. De este mundo vinieron las personas, junto con algunos animales y plantas, porque otros seres siempre han vivido en este mundo. Aquí también se pueden ir los espíritus, a las casas de los dantas (tapires) y los venados, por eso no se puede cazar a dichos animales, porque pueden ser antepasados de uno. Los habitantes de abajo, llamados Bak Münü, ayudan a las personas a curarse o a conseguir alimento.
            En ese mundo el Sol y la Luna recorren un camino inverso al mundo de aquí,  porque están invertidos el tiempo, el día y la noche. En la parte de arriba se encuentra Hea, donde viven los astros, el Sol y los espíritus de los que mueren. En este sitio, la gente no se enferma, vive muy bien y tranquilamente. También existen árboles matrices que dan muchos frutos que sirven de alimento a los espíritus. En medio está Jee, la Tierra; algunos de los espíritus de los muertos se quedan con los hombres en el Jee, en la selva y les hacen mal a las personas que se les antojan.
            </p>
        <a href="{{route('crea')}}"><img id="flecha" src="{{ asset('local_storage/img/izquierda.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>
