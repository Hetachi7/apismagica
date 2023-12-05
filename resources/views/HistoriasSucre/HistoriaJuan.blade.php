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
    <h1>El Fantasma De Juan Lara</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/juanlara.png') }}"  alt="">
    </figure>
    
    <p>Es un espíritu burlón que aparece de vereda en vereda y de pueblo en pueblo, enamorado de alguna muchacha a quien asedia hasta enloquecerla. Si no es correspondido, empieza a hacerle la guerra lanzando piedras en los techos con risotadas que se oyen en el aire, las cuales no se sabe de donde vienen; se cree que en vida debió ser un hombre libidinoso, que por algún pecado sexual pudo ser condenado a vagar libre de enamorarse, pero con la desdicha de no ser correspondido y de no poseer pretendientes.
        Cuentan que en Caimito asedió a una bella mujer casada, a quien tiraba regalos y piedras preciosas, pero al ser rechazado y repudiado pasó a odiarla, a tal punto que cada hijo que la señora iba teniendo no se lo dejaba criar.
        En la vereda de Platero, muy cerca de Caimito y de San Marcos, se dedicó a una niña de rubios cabellos, a quien puso al borde de la locura y pudo salvarse del caso porque sus padres la llevaron a San Marcos para que el cura la exorcizara, tras lo cual fue retirado el espíritu.
        Juan Lara también hizo aparición cerca de San Marcos en la vereda de San Felipe. Allí se enamoró de una muchacha de cabellos rubios y ojos verdes, también le tiraba flores, piedras preciosas y regalos. La muchacha, al no ceder a sus deseos, empezó arañándole el rostro y luego todo el cuerpo, con pellizcos y chupones, por último hasta provocó el incendio de su casa. La muchacha y su familia tuvieron que irse a vivir a Santa Inés
        </p>
    
    
        <a href="{{route('leyenda')}}"><img id="flecha" src="{{ asset('local_storage/img/derecha.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>