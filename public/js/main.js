const open = document.getElementById('open');
const modalCon = document.getElementById('modal');
const cerrar = document.getElementById('cerrar');


open.addEventListener('click', () =>{
    modalCon.classList.add('show');
  
})
cerrar.addEventListener('click', () =>{
    modalCon.classList.remove('show');
    
})

//validacion
const descrip2 = document.getElementById('descr2');
const descrip = document.getElementById('descr');
const form = document.getElementById('form');
const nombre = document.getElementById('nombre');
const edad = document.getElementById('edad');
const email = document.getElementById('email');
const telefono = document.getElementById('telefono');


form.addEventListener('submit', e =>{
e.preventDefault();
validar();

})



function validar() {
const descripValu2 = descrip2.value.trim();
const descripValu = descrip.value.trim();
const nombreValu = nombre.value.trim();
const edadValu = edad.value.trim();
const emailValu = email.value.trim();
const telefonoValu = telefono.value.trim();



//descripción de arriba
if(descripValu === ''){
    setError(descrip2, 'Por favor, escriba una corta descipción')
  }else if(descripValu2.length>300){
      setError(descrip2, 'La descripción es demasiado larga')
  }else{
      setBien(descrip2);
     document.getElementById('fo-desc').innerHTML = descripValu2;
      
  }
//validar descripcion
if(descripValu === ''){
    setError(descrip, 'Por favor, escriba una corta descipción')
  }else if(descripValu.length>300){
      setError(descrip, 'La descripción es demasiado larga')
  }else{
      setBien(descrip);
     document.getElementById('per-desc').innerHTML = descripValu;
      
  }

//validar nombre
if(nombreValu === ''){
  setError(nombre, 'Por favor, escriba su nombre')
}else if(nombreValu.length>30){
    setError(nombre, 'El nombre es demasiado largo')
}else{
    setBien(nombre);
   document.getElementById('per-nom').innerHTML = nombreValu;
    
}
//validar edad
if(edadValu === ''){
    setError(edad, 'Por favor, escriba su edad')
  }else if(edadValu.length>3){
      setError(edad, 'Edad inválida')
  }else if(isNaN(edadValu)){
    setError(edad, 'Digite solo numeros')
}else{
      setBien(edad);
      document.getElementById('per-edad').innerHTML = edadValu;
  }
//validar email
if(emailValu === ''){
  setError(email, 'Por favor, escriba su email');
}else if(!vaEmail(emailValu)){
 setError(email, 'No ingresó un email válido');
}else{
    setBien(email);
    document.getElementById('per-ema').innerHTML = emailValu;
}
//validar telefono
if(telefonoValu === ''){
    setError(telefono, 'Por favor, escriba su telefono')
  }else if(telefonoValu.length>12){
      setError(telefono, 'Numero de telefono demasiado largo')
  }else if(isNaN(telefonoValu)){
    setError(telefono, 'Digite solo numeros')
}else{
      setBien(telefono);
      document.getElementById('per-tel').innerHTML = telefonoValu;
  }
 

}

//funciones

function setError(input, message){
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className = 'form-control error';
    small.innerText = message;
}
function setBien(input){
    const formControl = input.parentElement;
    formControl.className = 'form-control sucess';
}
function vaEmail (email){
    return /\w+@\w+\.+[a-z]/.test(email);
}
//////////////////// cambiar foto de perfil
/*
const inputImagen = document.getElementById('inputImagen');
const imagenPerfil = document.getElementById('imagenPerfil');

inputImagen.addEventListener('change', function(event) {
    const archivo = event.target.files[0];
    
    if (archivo) {
        const reader = new FileReader();
        
        reader.onload = function(e) {
            imagenPerfil.src = e.target.result;
        };
        
        reader.readAsDataURL(archivo);
    }
});
*/
