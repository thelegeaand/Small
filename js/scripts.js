function Tancar(){

    sessionStorage.clear();
    Swal.fire("S'ha tancat la sessió correctament!");

}

function registreClient(){

    var Nom=document.getElementById("Nom").value;
    var Cognom=document.getElementById("Cognom").value;
    var Cognom2=document.getElementById("Cognom2").value;
    var Dni=document.getElementById("Dni").value;
    var DataNaixement=document.getElementById("Datanaixement").value;
    var Correu=document.getElementById("Correu").value;
    var Ciutat=document.getElementById("Ciutat").value;
    var Provincia=document.getElementById("Provincia").value;
    var CodiPostal=document.getElementById("Cpostal").value;
    var Password=document.getElementById("Password").value;
    var Password2=document.getElementById("Password2").value;
    var CompNom=number(Nom);
    var CompCognom=number(Cognom);
    var CompCognom2=number(Cognom2);
    var missatge=false;
    var CompDni=ComprobarDni(Dni);
    var Edat=Anos(DataNaixement);
    var ComEmail= ComprobarEmail(email);

    /*Nom*/

    if(Nom==""){

        document.getElementById("Nom").style="border-color:red;"
        missatge=true;

    }else if(CompNom==false||Nom.length>50){

        document.getElementById("Nom").style="border-color:red;"
        missatge=true;

    }
    else{

        document.getElementById("Nom").style="border-color:#07FB7F;"
    }
    /*Cognom*/

    if(Cognom==""){

        document.getElementById("Cognom").style="border-color:red;"
        missatge=true;

    }else if(CompCognom==false||Cognom.length>50){

        document.getElementById("Cognom").style="border-color:red;"
        missatge=true;

    }
    else{

        document.getElementById("Cognom").style="border-color:#07FB7F;"
    }

    /*Cognom2*/
    
    if(Cognom2==""){

        document.getElementById("Cognom2").style="border-color:red;"
        missatge=true;

    }else if(CompCognom2==false||Cognom2.length>50){

        document.getElementById("Cognom2").style="border-color:red;"
        missatge=true;

    }
    else{

        document.getElementById("Cognom2").style="border-color:#07FB7F;"
    }

    /*Dni*/

    if(Dni==""){

        document.getElementById("Dni").style="border-color:red;"
        missatge=true;

    }else if(CompDni==false){

        document.getElementById("Dni").style="border-color:red;"
        missatge=true;

    }
    else{

        document.getElementById("Dni").style="border-color:#07FB7F;"
    }

    /*Edat*/
    if(Edat==""){

        document.getElementById("Datanaixement").style="border-color:red;"
        missatge=true;

    }else if(Edat<18){

        document.getElementById("Datanaixement").style="border-color:red;"
        missatge=true;

    }
    else{

        document.getElementById("Datanaixement").style="border-color:#07FB7F;"
    }

    /*Correu*/

    

   /*SweetAlert*/
   if(missatge==true){
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Algun Camp està buit o en format incorrecte!'
      });

   }


}

/*Funcions*/
/*No nunmeros o Caracters especials*/
function number(Nom){

    var llargada=Nom.length;
    let array = [];
    let lletras=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','ñ','o','p','q','r','s','t','u','v','w','x','y','z'
    ,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','Ñ','O','P','Q','R','S','T','U','V','W','X','Y','Z','á','à','è','é','ì'
    ,'í','ó','ò','ú','ù','ü','ï','ö'];
    var llargada2=lletras.length;     
    var comp=false;
    for(var i=0;i<llargada;i++){
        var cActual=Nom.charAt(i);

       if(lletras.includes(cActual)){
        
           comp=true;

       }else{

           comp=false;
           break;

       }
        
    }

    return comp;

}

/*Dni*/
function ComprobarDni(Dni) {

    var numero;
    var letr;
    var letra;
    var expresion_regular_dni;
   
    expresion_regular_dni = /^\d{8}[a-zA-Z]$/;
   
    if(expresion_regular_dni.test (Dni) == true){
       numero = Dni.substr(0,Dni.length-1);
       letr = Dni.substr(Dni.length-1,1);
       numero = numero % 23;
       letra='TRWAGMYFPDXBNJZSQVHLCKET';
       letra=letra.substring(numero,numero+1);
      if (letra!=letr.toUpperCase()) {
       return false;
       

       }else{
          cdni=false;
         return true;
       }
    }else{
   

       return false;
     }
  }


  function Anos(data){
 
    var fecha=new Date(data);
    var mes=fecha.getMonth();
    var any=fecha.getYear();
    var dia=fecha.getDate();
     
    var fecha_hoy = new Date();
    var ahora_ano = fecha_hoy.getYear();
    var ahora_mes = fecha_hoy.getMonth();
    var ahora_dia = fecha_hoy.getDate();
    var edad = (ahora_ano ) - any;
        
        if ( ahora_mes < (mes - 1)){
          edad--;
        }
        if (((mes - 1) == ahora_mes) && (ahora_dia < dia)){ 
          edad--;
        }
        if (edad > 1900){
            edad -= 1900;
        }
     
       return edad;
    }

    function ComprobarEmail(email){
        
        if ( /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i.test(email)){

       
         return true;

        } else {

         return false;
        }
      }

    





