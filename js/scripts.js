

function Tancar(){
    Swal.fire({
        icon: 'Success',
        title: 'S\'ha tancat la sessió correctament!'
     
      })
}

function registreClient() {

    var Nom = document.getElementById("Nom").value;
    var Cognom = document.getElementById("Cognom").value;
    var Cognom2 = document.getElementById("Cognom2").value;
    var Dni = document.getElementById("Dni").value;
    var DataNaixement = document.getElementById("Datanaixement").value;
    var Correu = document.getElementById("Correu").value;
    var Ciutat = document.getElementById("Ciutat").value;
    var Provincia = document.getElementById("Provincia").value;
    var CodiPostal = document.getElementById("Cpostal").value;
    var Password = document.getElementById("Password").value;
    var Password2 = document.getElementById("Password2").value;

    var CompNom = number(Nom);
    var CompCognom = number(Cognom);
    var CompCognom2 = number(Cognom2);
    var missatge = false;
    var CompDni = ComprobarDni(Dni);
    var Edat = Anos(DataNaixement);
    var CompEmail = ComprobarEmail(Correu);
    var CompCiutat = number(Ciutat);
    var CompProvincia = number(Provincia);
    var CompCP = ComprobarCodiPostal(CodiPostal);
    var passwords = ComprobarContrasenyas(Password, Password2);
    var formatContrasenya = validar_clave(Password);


    /*Nom*/

    if (Nom == "") {

        document.getElementById("Nom").style = "border-color:red;";
        document.getElementById("nomInc").innerHTML = "Camp en blanc";
        missatge = true;

    } else if (CompNom == false || Nom.length > 50) {
        document.getElementById("nomInc").innerHTML = "Format incorrecte";
        document.getElementById("Nom").style = "border-color:red;";
        missatge = true;

    }
    else {
        document.getElementById("nomInc").innerHTML = "";
        document.getElementById("Nom").style = "border-color:#07FB7F;";
    }
    /*Cognom*/

    if (Cognom == "") {
        document.getElementById("cognomInc").innerHTML = "Camp en blanc";
        document.getElementById("Cognom").style = "border-color:red;";
        missatge = true;

    } else if (CompCognom == false || Cognom.length > 50) {
        document.getElementById("cognomInc").innerHTML = "Format incorrecte";
        document.getElementById("Cognom").style = "border-color:red;";
        missatge = true;

    }
    else {
        document.getElementById("cognomInc").innerHTML = "";
        document.getElementById("Cognom").style = "border-color:#07FB7F;";
    }

    /*Cognom2*/

    if (Cognom2 == "") {
        document.getElementById("cognom2Inc").innerHTML = "Camp en blanc";
        document.getElementById("Cognom2").style = "border-color:red;";
        missatge = true;

    } else if (CompCognom2 == false || Cognom2.length > 50) {
        document.getElementById("cognom2Inc").innerHTML = "Format incorrecte";
        document.getElementById("Cognom2").style = "border-color:red;";
        missatge = true;

    }
    else {
        document.getElementById("cognom2Inc").innerHTML = "";
        document.getElementById("Cognom2").style = "border-color:#07FB7F;";
    }

    /*Dni*/

    if (Dni == "") {
        document.getElementById("dniInc").innerHTML = "Camp en blanc";
        document.getElementById("Dni").style = "border-color:red;";
        missatge = true;

    } else if (CompDni == false) {

        document.getElementById("dniInc").innerHTML = "Camp en blanc";
        document.getElementById("Dni").style = "border-color:red;";
        missatge = true;

    }
    else {
        document.getElementById("dniInc").innerHTML = "";
        document.getElementById("Dni").style = "border-color:#07FB7F;";
    }

    /*Data*/
    if (DataNaixement == "") {
        document.getElementById("dataInc").innerHTML = "Camp en blanc";
        document.getElementById("Datanaixement").style = "border-color:red;";
        missatge = true;

    } else if (Edat < 18) {
        document.getElementById("dataInc").innerHTML = "Has de ser major d'edat";
        document.getElementById("Datanaixement").style = "border-color:red;";
        missatge = true;

    }
    else {
        document.getElementById("dataInc").innerHTML = "";
        document.getElementById("Datanaixement").style = "border-color:#07FB7F;";
    }

    /*Correu*/

    if (Correu == "") {
        document.getElementById("correuInc").innerHTML = "Camp en blanc";
        document.getElementById("Correu").style = "border-color:red;";
        missatge = true;

    } else if (CompEmail != true) {
        document.getElementById("correuInc").innerHTML = "Format incorrecte";
        document.getElementById("Correu").style = "border-color:red;";
        missatge = true;
    } else {
        document.getElementById("correuInc").innerHTML = "";
        document.getElementById("Correu").style = "border-color:#07FB7F;";

    }
    /*Ciutat*/
    if (Ciutat == "") {
        document.getElementById("ciutatInc").innerHTML = "<br>Camp en blanc";
        document.getElementById("Ciutat").style = "border-color:red;";
        missatge = true;

    } else if (Ciutat.length > 50) {

        document.getElementById("ciutatInc").innerHTML = "<br>Format incorrecte";
        document.getElementById("Ciutat").style = "border-color:red;";
        missatge = true;

    }
    else {
        document.getElementById("ciutatInc").innerHTML = "";
        document.getElementById("Ciutat").style = "border-color:#07FB7F;";
    }

    /*Provincia*/
    if (Provincia == "") {
        document.getElementById("provinciaInc").innerHTML = "<br>Camp en blanc";
        document.getElementById("Provincia").style = "border-color:red;";
        missatge = true;


    } else if (Provincia.length > 50) {
        document.getElementById("provinciaInc").innerHTML = "<br>Format incorrecte";
        document.getElementById("Provincia").style = "border-color:red;";
        missatge = true;

    }
    else {
        document.getElementById("provinciaInc").innerHTML = "";
        document.getElementById("cognom2Inc").innerHTML = "";
        document.getElementById("Provincia").style = "border-color:#07FB7F;";
    }
    /*CodiPostal*/
    if (CodiPostal == "") {
        document.getElementById("postalInc").innerHTML = "<br>Camp en blanc";
        document.getElementById("Cpostal").style = "border-color:red;";
        missatge = true;

    } else if (CompCP != true) {
        document.getElementById("postalInc").innerHTML = "<br>Format incorrecte";
        document.getElementById("Cpostal").style = "border-color:red;";
        missatge = true;

    }
    else {
        document.getElementById("postalInc").innerHTML = "";
        document.getElementById("Cpostal").style = "border-color:#07FB7F;";
    }

    /*Passwords*/
    if (passwords != true) {
        document.getElementById("passwordInc").innerHTML = "Contrasenyes no coincideixen";
        document.getElementById("Password").style = "border-color:red;";
        document.getElementById("Password2").style = "border-color:red;";
        missatge = true;

    } else if (Password == "" || Password2 == "") {
        document.getElementById("passwordInc").innerHTML = "Algun camp està en blanc";
        document.getElementById("Password").style = "border-color:red;";
        document.getElementById("Password2").style = "border-color:red;";
        missatge = true;

    } else if (formatContrasenya != true) {
        document.getElementById("passwordInc").innerHTML = "<br>Ha de tenir almenys una majúscula, minúscula, caràcter especial i màxim 6 caràcters.";
        document.getElementById("Password").style = "border-color:red;";
        document.getElementById("Password2").style = "border-color:red;";
        missatge = true;

    }
    else {
        document.getElementById("passwordInc").innerHTML = "";
        document.getElementById("Password").style = "border-color:#07FB7F;";
        document.getElementById("Password2").style = "border-color:#07FB7F;";

    }

    /*SweetAlert*/
    if (missatge != true) {

        const xhr = new XMLHttpRequest();
        xhr.withCredentials = false;

        xhr.addEventListener("readystatechange", function () {
            if (this.readyState === this.DONE) {
                var data = JSON.parse(this.responseText);

                if (data.length==undefined) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'No s\'ha trobat cap ciutat com la introduida...',
                     
                      })

                } else {

                    var coma = ",";
                    var string = data[0]['display_name'];
                    var arrayDeCadenas = "";
                    arrayDeCadenas = string.split(coma);
                    var Ciutat2="";
                    var Comarca2="";
                    var Provincia2="";
                    var Comunitat="";
                    var CodiP="null";
                    var Pais="";

                    var longStringAPI=arrayDeCadenas.length;

                if(longStringAPI==6){

                   Ciutat2 = arrayDeCadenas[0];
                   Comarca2=arrayDeCadenas[1];
                   Provincia2 = arrayDeCadenas[2];
                   Comunitat=arrayDeCadenas[3];
                   CodiP=arrayDeCadenas[4];
                   Pais=arrayDeCadenas[5];

                   

                }else if(longStringAPI==5){

                    Ciutat2 = arrayDeCadenas[0];
                    Comarca2 = arrayDeCadenas[1];
                    Provincia2=arrayDeCadenas[2];
                    Comunitat=arrayDeCadenas[3];
                    Pais=arrayDeCadenas[4];
                    
                }

                if(Ciutat2==""||Provincia2==""){

                    document.getElementById("Cpostal").style = "border-color:red;";
                    document.getElementById("Ciutat").style = "border-color:red;";
                    document.getElementById("Provincia").style = "border-color:red;";

                     Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'No s\'ha trobat cap ciutat com la introduida...(Especifica més)',
                     
                      })

                }else{

                    Swal.fire({
                        title: 'És aquesta ciutat la teva?',
                        text: "" + Ciutat2 + ","+ Provincia2 + ","+Comunitat+","+Comarca2+","+Pais+".",
                        showDenyButton: true,
                        showCancelButton: false,
                        confirmButtonText: `Si`,
                        denyButtonText: `No`,
                      }).then((result) => {
                        if (result.isConfirmed) {
                        var num1 = Math.round(Math.random() * 9);
                        var num2 = Math.round(Math.random() * 9);
                        var num3 = Math.round(Math.random() * 9);
                        var num4 = Math.round(Math.random() * 9);
                    
                        var NomUsuari = Nom.substr(0, 2) + "" + Cognom.substr(0, 2) + "" + num1 + num2 + num3 + num4;
                    
                        var Request = new XMLHttpRequest();
                        Request.onreadystatechange = function () {
                            console.log(this.readyState);
                            console.log(this.status);
                            
                            if (this.readyState == 4 && this.status == 200) {
                                var m = Request.responseText;
                        
                                if (m == "ok") {
                                    document.getElementById("correuInc").innerHTML = "";
                                    document.getElementById("Correu").style = "border-color:#07FB7F;";
                    
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Registrat Correctament!',
                                        text: 'El teu Nom d\'usuari per iniciar sessió és ' + NomUsuari + '.'
                                    }).then((value) => {


                               
                                        window.location.href="http://localhost/Small/index.php/SmallController/index";
                                        
                                      });
                                } else if (m == "notunique") {
                    
                                    document.getElementById("correuInc").innerHTML = "Aquest correu ja existeix";
                                    document.getElementById("Correu").style = "border-color:red;";
                    
                                } else {
                                    document.getElementById("correuInc").innerHTML = "";
                                    document.getElementById("Correu").style = "border-color:#07FB7F;";
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Oops...',
                                        text: 'Disculpa les molèsties, això no hauria d\'estar passant'
                                    });
                    
                                }
                            }
                        };
                    
                        
                        Request.open("POST", "http://localhost/Small/index.php/SmallController/registreclient", true);
                        Request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                        Request.send("Nom=" + Nom + "&Cognom=" + Cognom + "&Cognom2=" + Cognom2 + "&Dni=" + Dni + "&datanaixement=" + DataNaixement +"&correu=" + Correu + "&ciutat=" + Ciutat2 + "&provincia=" + Provincia2 + "&cpostal=" + CodiP + "&password=" + Password + "&NomUsuari=" + NomUsuari);
                           
                    }else if (result.isDenied) {          
                    }
                    })     
                }
                       
                }

            }
        });

        xhr.open("GET", "https://forward-reverse-geocoding.p.rapidapi.com/v1/search?q="+Ciutat+" "+Provincia+" "+CodiPostal+"&format=json&accept-language=es&polygon_threshold=0.0");
        xhr.setRequestHeader("x-rapidapi-key", "5018451283msh0b39ed77f1b8c11p195cb7jsnf3a9897e0f1d");
        xhr.setRequestHeader("x-rapidapi-host", "forward-reverse-geocoding.p.rapidapi.com");
        xhr.send();

    } else {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'No s\'ha pogut dur a terme el registre correctament!'
        });
    }
}

function iniciarsessio(){

    var NomUsuariIS=document.getElementById("NomUsuariIS").value;
    var PasswordIS=document.getElementById("PasswordIS").value;
    var comprobacio=true;
    document.getElementById("NomUsuariIS").style = "border-color:none;";
    document.getElementById("PasswordIS").style = "border-color:none;";
    document.getElementById("PassInc").innerHTML = "";
    document.getElementById("nomUsuariInc").innerHTML = "";

    if(NomUsuariIS==""){

    document.getElementById("NomUsuariIS").style = "border-color:red;";
    document.getElementById("nomUsuariInc").innerHTML = "Camp en blanc";
    comprobacio=false;


    }
    if(PasswordIS==""){

        document.getElementById("PasswordIS").style = "border-color:red;";
        document.getElementById("PassInc").innerHTML = "Camp en blanc";
        comprobacio=false;

    }

    if(comprobacio!=true){

        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Algun camp està en blanc!'
        });


    }else{

    var Request = new XMLHttpRequest();
      Request.onreadystatechange = function () {

        if (this.readyState == 4 && this.status == 200) {

            var m=this.responseText;
      
            if(m!="no"){

                Swal.fire({
                    icon: 'success',
                    title: 'Credencials Correctes!'
                }).then((value) => {

                    if(m=="client"){

                        window.location.href="http://localhost/Small/index.php/SmallController/IniciClient";

                    }else if(m=="botiga"){

                        window.location.href="http://localhost/Small/index.php/SmallController/IniciBotiga";


                    }else if(m=="admin"){

                        window.location.href="http://localhost/Small/index.php/SmallController/Administrador";



                    }else if(m=="atencioclient"){

                        window.location.href="http://localhost/Small/index.php/SmallController/AtencioClient";


                    }else if(m=="repartidor"){
                        window.location.href="http://localhost/Small/index.php/SmallController/Repartidor";

                    }
   
                  });

            }else{

                document.getElementById("PasswordIS").style = "border-color:red;";
                document.getElementById("NomUsuariIS").style = "border-color:red;";
      
              
              Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Nom d\'usuari o Contrasenya incorrecte!'
              });
      
            }       
    }
  };

 Request.open("POST", "http://localhost/Small/index.php/SmallController/inicisessio", true);
 Request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
 Request.send("NomUsuariIS=" + NomUsuariIS +"&PasswordIS="+PasswordIS);

}
}

function registrebotiga(){


}












/*Funcions*/
/*No nunmeros o Caracters especials*/
function number(Nom) {

    var llargada = Nom.length;
    let array = [];
    let lletras = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'ñ', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'
        , 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'Ñ', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'á', 'à', 'è', 'é', 'ì'
        , 'í', 'ó', 'ò', 'ú', 'ù', 'ü', 'ï', 'ö'];
    var llargada2 = lletras.length;
    var comp = false;
    for (var i = 0; i < llargada; i++) {
        var cActual = Nom.charAt(i);

        if (lletras.includes(cActual)) {

            comp = true;

        } else {

            comp = false;
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

    if (expresion_regular_dni.test(Dni) == true) {
        numero = Dni.substr(0, Dni.length - 1);
        letr = Dni.substr(Dni.length - 1, 1);
        numero = numero % 23;
        letra = 'TRWAGMYFPDXBNJZSQVHLCKET';
        letra = letra.substring(numero, numero + 1);
        if (letra != letr.toUpperCase()) {
            return false;


        } else {
            cdni = false;
            return true;
        }
    } else {


        return false;
    }
}

/* Calcular Edat*/
function Anos(data) {

    var fecha = new Date(data);
    var mes = fecha.getMonth();
    var any = fecha.getYear();
    var dia = fecha.getDate();

    var fecha_hoy = new Date();
    var ahora_ano = fecha_hoy.getYear();
    var ahora_mes = fecha_hoy.getMonth();
    var ahora_dia = fecha_hoy.getDate();
    var edad = (ahora_ano) - any;

    if (ahora_mes < (mes - 1)) {
        edad--;
    }
    if (((mes - 1) == ahora_mes) && (ahora_dia < dia)) {
        edad--;
    }
    if (edad > 1900) {
        edad -= 1900;
    }

    return edad;
}
/*Comprobar format Email*/
function ComprobarEmail(email) {

    if (/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i.test(email)) {


        return true;

    } else {

        return false;
    }
}
/*Comprobar Contrasenyas*/

function ComprobarContrasenyas(pass1, pass2) {

    if (pass1 == pass2) {

        return true;

    } else {

        return false;

    }
}

/*Comprobar Format Contrasenya*/
function validar_clave(c) {
    if (c.length >= 6) {
        var mayuscula = false;
        var minuscula = false;
        var numero = false;
        var caracter_raro = false;

        for (var i = 0; i < c.length; i++) {
            if (c.charCodeAt(i) >= 65 && c.charCodeAt(i) <= 90) {
                mayuscula = true;
            }
            else if (c.charCodeAt(i) >= 97 && c.charCodeAt(i) <= 122) {
                minuscula = true;
            }
            else if (c.charCodeAt(i) >= 48 && c.charCodeAt(i) <= 57) {
                numero = true;
            }
            else {
                caracter_raro = true;
            }
        }
        if (mayuscula == true && minuscula == true && caracter_raro == true && numero == true) {
            return true;
        }
    }
    return false;
}

/*Comprobar Codi Postal*/
function ComprobarCodiPostal(Codi) {


    if (Codi.length == 5 && parseInt(Codi) >= 1000 && parseInt(Codi) <= 52999) {
        return true;
    }
    else {
        return false;
    }


}
/*Dividir datos Localizacion*/
function dividirCadena(cadenaADividir, separador) {
    var arrayDeCadenas = cadenaADividir.split(separador);
    document.write('<p>La cadena original es: "' + cadenaADividir + '"');
    document.write('<br>El separador es: "' + separador + '"');
    document.write("<br>El array tiene " + arrayDeCadenas.length + " elementos: ");

    for (var i = 0; i < arrayDeCadenas.length; i++) {
        document.write(arrayDeCadenas[i] + " / ");
    }
}






