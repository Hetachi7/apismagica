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
    <p>Los nukaks viven en la selva tropical, entre los ríos Guaviare e Inárida, en el Departamento de Guaviare en Colombia. Actualmente, existen alrededor de 500 nukaks que enfrentan el terrible proceso de su exterminio. Hablan una lengua tonal que pertenece a la Familia Bakú-Puinave.
        El mito nukak nos dice que en el inicio de los tiempos, el mundo fue creado por Idn Kamni, quien con su saliva y un poco de tierra hizo el mundo. Las primeras personas que existieron vinieron en la canoa-culebra que desovó en los rápidos del Río de Leche. Al tirar el árbol del Ye el río se formó. Idn Kamni vivía en un clan que los jaguares se comieron. En venganza el dios los mató con un rayo. Después hizo goma de balata (goma de ún árbol tropical) y soplando  humo hizo una mujer serpiente a la que deseo como esposa, y a la que le hizo un hijo. Con su vagina de dientes de piraña, la Mujer Serpiente creó a todas las alimañas que viven en el mundo. No muy satisfecho, el dios decidió hacer a otra mujer, la cual  formó de sus vómitos. Una vez creada, la mujer se fue a la casa de los buitres, a los que Idn, arrebatado de furia, mató. Después, el dios se puso a buscar miel, y cuando la encontró dio muerte a su mujer, organizó un baile y se fue al Cielo. Idn Kamni les dio a los hombres el lenguaje, el baile, la música, las cerbatanas, y a las mujeres la capacidad de fabricar canastas.
        El cosmos está conformado de dos planos paralelos relacionados por tiempo y espacio.  El plano de arriba es el antes, el aquí y ahora; y el plano de abajo es el después. Estos planos sólo los puede ver el chamán en sueños y nunca las personas comunes y corrientes. Verticalmente, existen niveles en forma de discos habitados por diversos seres. Los discos están cubiertos por una piel en forma de huevo. En el disco de arriba está El Lugar de Idn Kamni, que es el sitio al cual van las almas de los muertos;  su cuerpo retorna a la Tierra, bajo la forma de niños acabados de nacer. Estos niños beben el líquido de las flores y crecen hasta convertirse en muchachas y muchachos que comen solamente productos cultivados, pues no hay caza ni pesca. A un lado de El Lugar de Idn Kamni, se encuentra la Casa del Trueno, en donde vive el Cuerpo Rapé, a quien los chamanes entregan las almas de los muertos a cambio de rapé. </p>
    
        <a href="{{route('crea2')}}"><img id="flecha" src="{{ asset('local_storage/img/derecha.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>
