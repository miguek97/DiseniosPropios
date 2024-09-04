

//obtenemos elementos de la pantalla
let pantallaOperador=document.getElementById("calculo");
let pantallaResultado=document.getElementById("resultado");

//obtenemos botones
    let botonCalcular=document.getElementById("botonCalcular");
    let botonesNumeros=document.getElementsByClassName("botonNumero");
    let botonesOpeaciones=document.getElementsByClassName("botonesOperaciones");
    let botonReset=document.getElementById("botonReset");
    let botonEliminarUnNumero=document.getElementById("botonEliminarUnNumero");
    



//botones calculadora
for(let valor of botonesNumeros){
    valor.addEventListener("click",(ev)=>{
            if(pantallaOperador.innerHTML==0){
                pantallaOperador.innerHTML=valor.innerHTML;

            }else{
                let numeroPantalla=pantallaOperador.innerHTML;
                pantallaOperador.innerHTML=numeroPantalla+valor.innerHTML;
            }
    });
};

//botones operadores
for(let valor of botonesOpeaciones){
    valor.addEventListener("click",(ev)=>{
        pantallaOperador.innerHTML=pantallaOperador.innerHTML+valor.innerHTML;
    })
}


//botonReset
botonReset.addEventListener("click",(ev)=>{
    pantallaOperador.innerHTML=0;
    pantallaResultado.innerHTML=0;
    
});


//boton eliminar un numero
botonEliminarUnNumero.addEventListener("click",(ev)=>{
    let datosPantallaOperador=pantallaOperador.innerHTML;
    let arrayValores=datosPantallaOperador.split("");
    console.log(arrayValores);
    arrayValores.pop();
    console.log(arrayValores);
    
    let string=arrayValores.join("");
    console.log(string);
    pantallaOperador.innerHTML=`${string}`;
})

function calcular(op1,op2){

}

botonCalcular.addEventListener("click",(ev)=>{
    let dato=pantallaOperador.innerHTML;
    let array=dato.split("");
    console.log("ase");
    for(let valor of array){
        switch(valor){
            case "+":
                var array2=dato.split("+");
                pantallaResultado.innerHTML=array2[0]+array2[1];
            break;
            case "-":
                var array2=dato.split("-");
                pantallaResultado.innerHTML=array2[0]-array2[1];
            break;
            case "*":
                var array2=dato.split("*");
                pantallaResultado.innerHTML=array2[0]*array2[1];
            break;
            case "/":
                var array2=dato.split("/");
                pantallaResultado.innerHTML=array2[0]/array2[1];
            break;
        }
    }

});



