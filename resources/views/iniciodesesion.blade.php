<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="{{asset('css_index/Einisio.css')}}">
</head>
<body>

    <div class="formulario">
        <img class="avatar" src="{{ asset('local_storage/img/logo.png') }}"  alt="Logo de empresa">
        <h1>Inicio de sesión</h1>
        <form method="post" action="/login">
               
                <label>Nombre de usuario</label>
                <input type="text" placeholder="Ingrese su nombre de usuario">
                
                @error('apellidos')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            

                <label>Contraseña</label>
                <input type="password" placeholder="Ingrese su contraseña">
                

                
                    <input href="{{route('inicio')}}"type="submit" value="Iniciar Sesion">
                

                  
                <a href="{{route('registro')}}">Aún no tiene cuenta</a>
                <a href="{{route('recuperar')}}">Ha olvidado su contraseña</a>
               

            
            

            </div>

        </form>

    </div>
    
</body>
</html>