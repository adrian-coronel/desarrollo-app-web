const btnEnviar = document.getElementById('btn-enviar');
const btnLimpiar = document.getElementById('btn-limpiar');
const nombres = document.getElementById('nombres');
const direccion = document.getElementById('direccion');
const correo = document.getElementById('correo');
const edad = document.getElementById('edad');
const formulario = document.getElementById('formulario');
// BOTON LIMPIAR
btnLimpiar.addEventListener('click',()=>{
    nombres.value="";
    direccion.value="";
    correo.value="";
    edad.value="";
})

// BOTON ENVIAR 

btnEnviar.addEventListener('click',()=>{
    if (edad.value<18){
        alert('Solo se admiten usuarios mayores de edad')  
        window.location.href = 'pregunta2.html';      
        btnEnviar.disabled = true;
    }else{
        formulario.submit();
    }
})