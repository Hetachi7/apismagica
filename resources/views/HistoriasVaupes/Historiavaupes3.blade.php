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
    <h1>Leyenda Del Vaupes</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/vaupes.png') }}"  alt="">
    </figure>
    <p>Diádoe huyó río abajo del Vaupés y para que no se escapara, el Sol puso una trampa de matapí (trampa para atrapar pescado) en la cascada o cachivera, que hoy en día se conoce con el nombre de Matapí. Diádoe no cayó en la trampa y pudo escapar desviándose por otro lado. Seguía bajando y el sol le seguía con la trampa; llegaron a otra cachivera y el padre de tarira se convirtió en cuerpo de arara, pasó volando y a la cachivera le colocaron de nombre Arara (que en lengua yeral quiere decir guacamayo). Siguió bajando Diádoe y llegó a otra cachivera donde el Sol ya tenía puesta otra trampa... al verla, se transformó en un pescado grande, pasó por encima de la trampa y esa cachivera quedó con el nombre de Carurú, que en lengua yeral significa pescado.
        Diádoe siguió bajando enfrentando varias circunstancias hasta llegar a la cachivera de tapíra yerao, donde había otra trampa del Sol. Allí se transformó en un pescado pequeño de la familia guaracú blanco, éste brincó a un lado de la trampa formando una guachinacán, que significa pez blanquillo en tukano. Siguió bajando hasta llegar a la cachivera de Yavaraté (yaí poeva) y entró por el río Papurí, subiendo hasta llegar donde su primo, Waí deyu, donde hoy en día es la cachivera de Waracapuri, en la cabecera del caño viña, ubicado en la jurisdicción de Acaricuara. Cuando llegó, el padre de los pescados Waí deyu, se encontraba preparando la fiesta del ofrecimiento de dabucurí con el cuñado Araña, en tukano bujpu. Ya estaba por empezar la fiesta cuando discutieron y salieron  peleando. Wai deyu se fue para empezar la música de la fiesta y al sacar la caja de instrumentos que había sido empacada por araña, se produjo una explosión de plumas. Al regresar a la fiesta Wai deyu le pegó una paliza a Araña porque estaba enojado. Araña, maltratado y furioso con Wai deyu, se encontró con el Sol que buscaba a Diadoe para vengarse por haberse tragado a su hijo, y decidieron ponerse de acuerdo para desquitarse echándole barbasco a los dos después de la fiesta, ya que seguramente estarían amanecidos pasando guayabo. Waí deyu y Diádoe se despertaron entre la vida y la muerte pero ninguno de los dos murió; salieron espantados río abajo con todos sus hijos. Llegaron a Piracuara y el padre de los pescados con todos sus hijos, como por arte de magia, lograró pasar bajo un conducto subterráneo y desde allí partieron hacia el río Apaporis, llegando al lugar sagrado de Jirijirimo (piedra Ñi) a la Cachivera la playa. Por esta razón el río Papurí es en este momento pobre de pescado.
        El personaje mítico Diádoe siguió su trayecto río abajo del Vaupés y una parte de río negro hasta llegar en San Gabriel (Brasil). En éste lugar sagrado el Sol le tendió la última trampa mortal, en sociedad con las demás familias de allí. Su cuerpo fue despedazado, las carnes y las escamas de la mitad para arriba del pez fueron lanzadas río abajo y las carnes y escamas de la cola fueron lanzadas río arriba, como señal de la existencia de peces dormilones grandes y pequeños. Sus carnes se convirtieron en diferentes pescados que actualmente nutren el río Vaupés.
        Esta leyenda es muy conocida por los grupos étnicos del Vaupés y de territorios aledaños: tukanos, guananos, desanos, tarianos, piratapuyos, barazanos, entre otros.
        </p>
    
        <a href="{{route('Vau2')}}"><img id="flecha" src="{{ asset('local_storage/img/izquierda.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>


