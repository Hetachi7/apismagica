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
    <h1>La Leyenda de Sotomayor Guainia</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/soto.jpg') }}"  alt="">
    </figure>
    <p> Cuenta la leyenda, que el cacique Agüeybaná el Bravo, asignado a Sotomayor en los repartimientos, tenía una hermana llamada Guanina. Guanina era una hermosa india que tenía un taíno enamorado de ella, llamado Guarionex, pero ella no le correspondía a su amor porque vivía enamorada de Cristóbal de Sotomayor. Esto hizo que Guarionex, sintiera tantos celos por el español, hasta el punto de desear su muerte. na noche, Agueybaná el Bravo celebró un areyto para planificar cómo iban a enfrentarse a los españoles por el maltrato que recibían, y decidieron que, para ellos poder ser libres otra vez, los españoles tenían que morir. Guarionex fue al poblado con un grupo de nitaínos para atacarlo, pero no pudo matar a Sotomayor ya que éste se había trasladado al caney de Agueybaná el Bravo para reunirse con Guanina. Ella le estaba advirtiendo que huyera para salvar su vida, pues se enteró que los nativos se habían levantado en su contra. 
        Al enterarse de la noticia, Sotomayor se fue con sus soldados a la Villa de Caparra, pero Guanina no lo quiso dejar huir solo y se fue con él. Los tainos los persiguieron y la lucha comenzó. Sotomayor y sus hombres se defendieron del ataque, pero los taínos peleaban ferozmente con sus lanzas y macanas. Guanina, al ver que su amado iba a ser golpeado, se interpuso entre Sotomayor y los indios, y recibió en su cuerpo la herida mortal que iba dirigida a su amado. Sotomayor fue a su rescate, pero Agüeybaná aprovechó para traspasarlo con su flecha, y Sotomayor cayó en los brazos de Guanina
        Según la leyenda, Agüeybaná mandó a que los enterraran juntos, pero ordenó que a Sotomayor le dejaran los pies fuera de la tumba para que no pudiera encontrar el camino a la tierra de los muertos. Así que los enterraron uno al lado del otro, a la sombra de una enorme ceiba. Desde entonces, se dice que cuando el viento sopla de noche, agita las ramas del árbol y se oye un murmullo, que no es el rumor de las hojas. Además, se ven dos luces blancas, que no son luces de luciérnagas, sino los espíritus de Guanina y Sotomayor que flotan y danzan felices, unidos por la eternidad.
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

