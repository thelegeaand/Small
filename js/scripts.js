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


    if(Nom==""){

        document.getElementById("Nom").style="border-color:red;"

    }else if(CompNom==false||Nom.length>50){

        document.getElementById("Nom").style="border-color:red;"

    }
    else{

        document.getElementById("Nom").style="border-color:none;"
    }

   


}


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





