<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css_index/Econtacto.css')}}">
</head>
<body>
    <header>
        <div class="row">
            <nav class="navbar navbar-expand-lg bg-black navbar-black">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav" style="font-weight: 600px; padding-right: 20px; font-size: 20px;">
                        <a class="navbar-brand" href="#">
                            <img src="{{asset('local_storage/img/logo.png')}}" alt="Logo" width="100px" height="100px" class="d-inline-block align-text-top">
                            <a class="nav-link" href="{{route('inicio')}}" style="color: aliceblue; margin-right: 60rem;">MAGICA COLOMBIA</a>
                            </a>
                          </a>
                      <a class="nav-link active" style="color: aliceblue;margin-right:1rem" aria-current="page" href="{{route('subirhistoria')}}">Sube tu Historia</a>
                      <a class="nav-link" href="{{route('info')}}" style="color: aliceblue ;margin-right:1rem;">Quienes somos</a>
                      <a class="nav-link " aria-disabled="page" href="{{route('registro')}}" style="color: aliceblue; margin-right:1rem">Registrate</a>
                    </div>
                  </div>
                </div>
              </nav>   
              
        </div>
    <div class="container">
        <div class="row" style="text-align: center;">  
            <form  action="{{ route('guardarDatos') }}" method="POST" enctype="multipart/form-data">
    
            <label  style="color: aliceblue ; font-size: 30px; " 
            for="opciones"  >Seleciona el error</label>
            <br>
            <select name="opciones" id="opciones" style="   width: 400px;
            height: 40px;
            font-size: 20px;
            text-align: center;
            background: rgb(139, 0, 0);
            border: 2px solid rgb(139, 0, 0);
            border-radius: 5px;
            color: white; ">
                <option value="opcion1">Bug</option>
                <option value="opcion1">Errores en historias</option>
                <option value="opcion1">Errores en imagenes</option>
                <option value="opcion1">Errores en navegabilidad</option>

            </select>
           
        </div>
        <div class="row" style="text-align: center;">
            
            <h1 style="color: aliceblue;">Escribe sobre el error</h1>
            <br>

            <textarea name="texto" id="texto" rows="10" cols="10"; style="background:rgb(139, 0, 0);color: aliceblue;"></textarea>
        </div>
        <br>
        <div class="row" style="text-align: center;">

                <label style=" width: 200px;
                height: 40px;
                font-size: 20px;
                text-align: center;
                background: rgb(139, 0, 0);
                border: 2px solid rgb(139, 0, 0);
                border-radius: 5px;
                cursor: pointer;
                font-size: 16px;
                text-align: center;
                display: inline-block;
                border: none;
                color: aliceblue;
                border: 2px solid rgb(139, 0, 0);" for="imagen">imagen</label>
                <input type="file" name="imagen" id="imagen" >
    
                <input style=" width: 200px;
                height: 40px;
                font-size: 20px;
                text-align: center;
                background: rgb(139, 0, 0);
                border: 2px solid rgb(139, 0, 0);
                border-radius: 5px;
                cursor: pointer;
                font-size: 16px;
                text-align: center;
                display: inline-block;
                border: none;
                color: aliceblue;
                border: 2px solid rgb(139, 0, 0);" type="submit" value="Guardar">
            </div>
        
        
    </div>
       
</body>
</html>