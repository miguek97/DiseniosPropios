let formulario=document.querySelector("form");

let inputSubmit=document.getElementById('enviar');

document.addEventListener("keyup",(ev)=>{
    var datosFormulario=new FormData(formulario);
    var nombreUsuario=datosFormulario.get("usuario");
    var contraseña=datosFormulario.get("contraseña");
    
    if(nombreUsuario.length>0 && contraseña.length>0){
        inputSubmit.removeAttribute("disabled");
    }else{
        inputSubmit.setAttribute("disabled","");
    }
})



formulario.addEventListener("submit",(ev)=>{
    ev.preventDefault();
    var datosFormulario=new FormData(formulario);
    var nombreUsuario=datosFormulario.get("usuario");
    var contraseña=datosFormulario.get("contraseña");
   
    if(/^[A-Z][a-z0-9]+$/.test(nombreUsuario) && /^[0-9]+$/.test(contraseña)){
       
        fetch('a.php',{
            method:'POST',
            body:datosFormulario
        })
        .then(res=>res.text())
        .then(data=>{
            console.log(data);
        })
    }
    
    });
