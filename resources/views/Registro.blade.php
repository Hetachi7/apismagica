<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    {{-- <link rel="stylesheet" href="{{asset('css_index/Eregistrarse.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('css_index/Erecuperar.css')}}">

</head>
<body>

    <div class="formulario">
        <img class="avatar" src="{{ asset('local_storage/img/logo.png') }}"  alt="Logo de empresa">
        <h1>Registrate</h1>
        <form action="/register" method="POST">
               @csrf
                <label>Usuario</label>
                <input type="text" name="Usuario" placeholder="Ingrese tu Usuario">

                <label>E-mail</label>
                <input type="text" name="E-mail" placeholder="Ingrese sus Correo">

                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label>password</label>
                <input type="text" name="password"  placeholder="Ingrese su contraseña">

                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label>Confirmar contraseña</label>
                <input type="password" name="pasword" placeholder="Confirmar contraseña">

                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                
                    <input href="index.html"type="submit" value="Registrarse">
                

                  
                <a href="{{route('iniciosesion')}}">¿Ya tiene cuenta?</a>
                <a href="{{route('recuperar')}}">Ha olvidado su contraseña</a>
               

            
            

            </div>

        </form>

    </div>
    
</body>
</html>