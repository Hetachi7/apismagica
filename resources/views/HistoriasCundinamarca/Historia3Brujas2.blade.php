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
    <h1>Historia de las Tres Brujas</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/3BRIJAS.png') }}"  alt="">
    </figure>
        <p>las otras también querían. A todo esto las brujas no le daban importancia, porque eran tan codiciosas y con tanto poder que lo deseaban todo, hasta que ya llegando a una madura edad, Sina,  [cuando estaba] comprando en un pueblo cercano vio a un hombre, del cual se enamoró locamente, y le hechizó para que le diera su amor. Tina y Mada también sintieron amor por él y también conjuraron con el mismo hechizo. El hombre cuando llegó la noche se acercó a su casa, en la montaña.
            Estas tres, cuando vieron al hombre, se tiraron a él. El hombre al ver a las tres brujas se volvió loco y no sabía lo que hacer; las brujas al ver que el hombre no reaccionaba le dejaron morir de amor.
           Esto pasó con muchos hombres, se dice que fueron tantos que el pueblo, cuando se dio cuenta de que eran las tres hermanas las brujas que mataban los hombres, fueron a por ellas. Éstas estaban también locas, porque no habían conseguido ningún amor, sólo consiguieron odio entre ellas. Se dice también que cuando fueron a quemar a las brujas las quemaron una a una, y la primera fue Mada, y cuando estuvo ardiendo, las otras dos también ardieron. Para probar esta leyenda, sólo tienes que ir a cualquier punto de las montañas de los Ibores y contar esta historia para escuchar los escalofriante aullidos de las ánimas de los  hombres que fueron muertos de amor por tres brujas codiciosas.
           </p>
        <a href="{{route('Felipe')}}"><img id="flecha" src="{{ asset('local_storage/img/izquierda.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>


