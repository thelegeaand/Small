
function noestoc(){

    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'No es pot afegir el producte'
    });


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

                        window.location.href="http://localhost/Small/index.php/SmallController/Administracio";



                    }else if(m=="atencioclient"){

                        window.location.href="http://localhost/Small/index.php/SmallController/Atencio";


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

    var NomPropietari=document.getElementById("NPropietari").value;
    var NomUsuari=document.getElementById("NUsuari").value;
    var Password=document.getElementById("P").value;
    var Password2=document.getElementById("P2").value;
    var Cif=document.getElementById("Cif").value;
    var NomBotiga=document.getElementById("NBotiga").value;
    var NomEmpresa=document.getElementById("NEmpresa").value;
    var CorreuE=document.getElementById("CElectronic").value;
    var Provincia=document.getElementById("Prov").value;
    var Ciutat=document.getElementById("Ciut").value;
    var CodiPost=document.getElementById("CodiPost").value;
    var Carrer=document.getElementById("Carrer").value;
    var Numero=document.getElementById("Numero").value;
    var TipusBotiga=document.getElementById("TipusBotiga").value;
    var IBAN=document.getElementById("Iban").value;
    var PIban=document.getElementById("CodiIban").value;
    var IbanComplet=PIban+""+IBAN;
    missatge=false;

    

    var CompNomProp = number(NomPropietari);
    var CompNomUsu=number(NomUsuari);
    var passwords = ComprobarContrasenyas(Password, Password2);
    var formatContrasenya = validar_clave(Password);
    var CompNomBot = number(NomBotiga);
    var CompNomEmp = number(NomEmpresa);    
    var CompCif=ValidaCIF(Cif);
    var CompEmail = ComprobarEmail(CorreuE);
    var CompCP = ComprobarCodiPostal(CodiPost);
    var CompIban=ValidateIBAN(IbanComplet);


 

    /*NomPropietari*/

    if (NomPropietari == "") {

        document.getElementById("NPropietari").style = "border-color:red;";
        document.getElementById("NomPropInc").innerHTML = "Camp en blanc";
        missatge = true;

    } else if (CompNomProp == false || NomPropietari.length > 50) {
        document.getElementById("nomInc").innerHTML = "Format incorrecte";
        document.getElementById("NPropInc").style = "border-color:red;";
        missatge = true;

    }
    else {
        document.getElementById("NomPropInc").innerHTML = "";
        document.getElementById("NPropietari").style = "border-color:#07FB7F;";
    }
    /*Nom Usuari*/
    if (NomUsuari == "") {

        document.getElementById("NUsuari").style = "border-color:red;";
        document.getElementById("NomUsuariInc").innerHTML = "Camp en blanc";
        missatge = true;

    } else if (CompNomUsu == false || NomUsuari.length > 50) {
        document.getElementById("NomUsuariInc").innerHTML = "Format incorrecte";
        document.getElementById("NUsuari").style = "border-color:red;";
        missatge = true;

    }
    else {
        document.getElementById("NomUsuariInc").innerHTML = "";
        document.getElementById("NUsuari").style = "border-color:#07FB7F;";
    }

    /*Passwords*/
    if (passwords != true) {
        document.getElementById("PasswInc").innerHTML = "Contrasenyes no coincideixen";
        document.getElementById("P").style = "border-color:red;";
        document.getElementById("P2").style = "border-color:red;";
        missatge = true;

    } else if (Password == "" || Password2 == "") {
        document.getElementById("PasswInc").innerHTML = "Algun camp està en blanc";
        document.getElementById("P").style = "border-color:red;";
        document.getElementById("P2").style = "border-color:red;";
        missatge = true;

    } else if (formatContrasenya != true) {
        document.getElementById("PasswInc").innerHTML = "Ha de tenir almenys una majúscula, minúscula, caràcter especial i màxim 6 caràcters.";
        document.getElementById("P").style = "border-color:red;";
        document.getElementById("P2").style = "border-color:red;";
        missatge = true;

    }
    else {
        document.getElementById("PasswInc").innerHTML = "";
        document.getElementById("P").style = "border-color:#07FB7F;";
        document.getElementById("P2").style = "border-color:#07FB7F;";

    }

    /*Nom Botiga*/
    if (NomBotiga == "") {

        document.getElementById("NBotiga").style = "border-color:red;";
        document.getElementById("NBotigaInc").innerHTML = "Camp en blanc";
        missatge = true;

    } else if (CompNomBot== false || NomBotiga.length > 50) {
        document.getElementById("NBotigaInc").innerHTML = "Format incorrecte";
        document.getElementById("NBotiga").style = "border-color:red;";
        missatge = true;

    }
    else {
        document.getElementById("NBotigaInc").innerHTML = "";
        document.getElementById("NBotiga").style = "border-color:#07FB7F;";
    }

    /*Nom Empresa*/
    if (NomEmpresa == "") {

        document.getElementById("NEmpresa").style = "border-color:red;";
        document.getElementById("NEmpresaInc").innerHTML = "Camp en blanc";
        missatge = true;

    } else if (CompNomEmp== false || NomEmpresa.length > 50) {
        document.getElementById("NEmpresaInc").innerHTML = "Format incorrecte";
        document.getElementById("NEmpresa").style = "border-color:red;";
        missatge = true;

    }
    else {
        document.getElementById("NEmpresaInc").innerHTML = "";
        document.getElementById("NEmpresa").style = "border-color:#07FB7F;";
    }

    /*Tipus Botiga*/
    if (TipusBotiga=="Tipus Botiga")  {
        document.getElementById("TBotigaInc").innerHTML = "Has de seleccionar una opció";
        document.getElementById("TipusBotiga").style = "border-color:red;";
        missatge = true;
    }
    else {
        document.getElementById("TBotigaInc").innerHTML = "";
        document.getElementById("TipusBotiga").style = "border-color:#07FB7F;";
    }
    /*Cif*/
    if (Cif=="") {

        document.getElementById("Cif").style = "border-color:red;";
        document.getElementById("CifBotigaInc").innerHTML = "Camp en blanc";
        missatge = true;

    } else if (CompCif != true) {
        document.getElementById("CifBotigaInc").innerHTML = "Format incorrecte";
        document.getElementById("Cif").style = "border-color:red;";
        missatge = true;
    }
    else {
        document.getElementById("CifBotigaInc").innerHTML = "";
        document.getElementById("Cif").style = "border-color:#07FB7F;";
    }

    /*Correu*/
    if (CorreuE == "") {
        document.getElementById("CorreuBotigaInc").innerHTML = "Camp en blanc";
        document.getElementById("CElectronic").style = "border-color:red;";
        missatge = true;

    } else if (CompEmail != true) {
        document.getElementById("CorreuBotigaInc").innerHTML = "Format incorrecte";
        document.getElementById("CElectronic").style = "border-color:red;";
        missatge = true;
    } else {
        document.getElementById("CorreuBotigaInc").innerHTML = "";
        document.getElementById("CElectronic").style = "border-color:#07FB7F;";
    }

    /*Provincia*/
    if (Provincia == "") {
        document.getElementById("ProvinciaBotigaInc").innerHTML = "Camp en blanc";
        document.getElementById("Prov").style = "border-color:red;";
        missatge = true;

    } else if (Provincia.length > 50) {
        document.getElementById("ProvinciaBotigaInc").innerHTML = "Format incorrecte";
        document.getElementById("Prov").style = "border-color:red;";
        missatge = true;
    }
    else {
        document.getElementById("ProvinciaBotigaInc").innerHTML = "";
        document.getElementById("Prov").style = "border-color:#07FB7F;";
    }

    /*Ciutat*/
    if (Ciutat == "") {
        document.getElementById("CiutatBotigaInc").innerHTML = "Camp en blanc";
        document.getElementById("Ciut").style = "border-color:red;";
        missatge = true;

    } else if (Ciutat.length > 50) {

        document.getElementById("CiutatBotigaInc").innerHTML = "Format incorrecte";
        document.getElementById("Ciut").style = "border-color:red;";
        missatge = true;

    }
    else {
        document.getElementById("CiutatBotigaInc").innerHTML = "";
        document.getElementById("Ciut").style = "border-color:#07FB7F;";
    }

    /*CodiPostal*/
    if (CodiPost == "") {
        document.getElementById("CodiPBotigaInc").innerHTML = "Camp en blanc";
        document.getElementById("CodiPost").style = "border-color:red;";
        missatge = true;

    } else if (CompCP != true) {
        document.getElementById("CodiPBotigaInc").innerHTML = "Format incorrecte";
        document.getElementById("CodiPost").style = "border-color:red;";
        missatge = true;

    }
    else {
        document.getElementById("CodiPBotigaInc").innerHTML = "";
        document.getElementById("CodiPost").style = "border-color:#07FB7F;";
    }

     /*Carrer*/
     if (Carrer == "") {
        document.getElementById("CarrerBotigaInc").innerHTML = "Camp en blanc";
        document.getElementById("Carrer").style = "border-color:red;";
        missatge = true;

    } else if (Carrer.length > 50) {

        document.getElementById("CarrerBotigaInc").innerHTML = "Format incorrecte";
        document.getElementById("Carrer").style = "border-color:red;";
        missatge = true;

    }
    else {
        document.getElementById("CarrerBotigaInc").innerHTML = "";
        document.getElementById("Carrer").style = "border-color:#07FB7F;";
    }

    /*Numero*/
    if(Numero==""){

        document.getElementById("NumeroBotigaInc").innerHTML = "Camp en blanc";
        document.getElementById("Numero").style = "border-color:red;";
        missatge = true;

    }else if(Numero <= 0){

        document.getElementById("NumeroBotigaInc").innerHTML = "Format incorrecte";
        document.getElementById("Numero").style = "border-color:red;";
        missatge = true;


    }else{
        document.getElementById("NumeroBotigaInc").innerHTML = "";
        document.getElementById("Numero").style = "border-color:#07FB7F;";

    }

    /*IBAN*/
/*Numero*/
if(IBAN==""){

    document.getElementById("IbanBotigaInc").innerHTML = "Camp en blanc";
    document.getElementById("Iban").style = "border-color:red;";
    missatge = true;

}else if(CompIban!=true){

    document.getElementById("IbanBotigaInc").innerHTML = "Format incorrecte";
    document.getElementById("Iban").style = "border-color:red;";
    missatge = true;


}else{
    document.getElementById("IbanBotigaInc").innerHTML = "";
    document.getElementById("Iban").style = "border-color:#07FB7F;";

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

                document.getElementById("CodiPost").style = "border-color:red;";
                document.getElementById("Ciut").style = "border-color:red;";
                document.getElementById("Prov").style = "border-color:red;";

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
                                    text: 'Rebras un correu en 24/48 hores amb la confirmació d\'activació.'
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
                
                    
                    Request.open("POST", "http://localhost/Small/index.php/SmallController/registrebotigues", true);
                    Request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    Request.send("Number=" + Numero + "&NomUsuari=" + NomUsuari + "&Password=" 
                    + Password+ "&NomBotiga=" + NomBotiga + "&NomEmpresa=" + NomEmpresa +"&TipusBotiga="+TipusBotiga+"&Cif="+Cif+"&Provincia="+Provincia2+"&cpostal="+CodiP+"&Ciutat="+Ciutat2+"&Carrer="+Carrer+"&NomPropietari=" + NomPropietari+"&IbanComplet="+IbanComplet+"&CorreuE="+CorreuE);
                }else if (result.isDenied) {          
                }
                })     
            }       
            }
        }
    });
    xhr.open("GET", "https://forward-reverse-geocoding.p.rapidapi.com/v1/search?q="+Ciutat+" "+Provincia+" "+CodiPost+"&format=json&accept-language=es&polygon_threshold=0.0");
    xhr.setRequestHeader("x-rapidapi-key", "5018451283msh0b39ed77f1b8c11p195cb7jsnf3a9897e0f1d");
    xhr.setRequestHeader("x-rapidapi-host", "forward-reverse-geocoding.p.rapidapi.com");
    xhr.send();



   
}else{

    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'No s\'ha pogut dur a terme el registre correctament!'
    });
    
}    
}


function TramitarComanda (){
    /*Preparat per incorporació Pagament*/
    var NumTarjeta=document.getElementById("numtarjeta").value;
    var MesCaducitat=document.getElementById("mescaducitat").value;
    var AnyCaducitat=document.getElementById("anycaducitat").value;
    var CVV=document.getElementById("cvv").value;
    CVV="123";
    NumTarjeta="5540500001000004";
    MesCaducitat="12";
    AnyCaducitat="20";
    /*-------------------------*/

    var Carrer=document.getElementById("carrer").value;
    var Numero=document.getElementById("numero").value;
    var Pis=document.getElementById("pis").value;
    var Escala=document.getElementById("escala").value;
    var Telefon=document.getElementById("telefon").value;

    var CompCarrer = number(Carrer);
    var CompTel=validarTel(Telefon);
    var missatge=false;

    if(Pis==""){

        Pis="null";
    }
    if(Escala=="null"){

        Escala="null";
    }

    if (Carrer == "") {

        document.getElementById("carrer").style = "border-color:red;";
        document.getElementById("carrerD").innerHTML = "Camp en blanc";
        missatge = true;

    } else if (Carrer.length > 50) {
        document.getElementById("carrerD").innerHTML = "Format incorrecte";
        document.getElementById("carrer").style = "border-color:red;";
        missatge = true;

    }
    else {
        document.getElementById("carrerD").innerHTML = "";
        document.getElementById("carrer").style = "border-color:#07FB7F;";
    }

    if(Numero=="" || Numero==0){
        document.getElementById("numeroD").innerHTML = "Camp en blanc";
        document.getElementById("numero").style = "border-color:red;";
        missatge = true;

    }else if(Numero<=0){
        document.getElementById("numero").style = "border-color:red;";
        document.getElementById("numeroD").innerHTML = "Format incorrecte";
        missatge = true;
    }else{
        document.getElementById("numeroD").innerHTML = "";
        document.getElementById("numero").style = "border-color:#07FB7F;";
    }

    if(Telefon==""){
        document.getElementById("telefonD").innerHTML = "Camp en blanc";
        document.getElementById("telefon").style = "border-color:red;";
        missatge = true;

    }else if(CompTel!=true){
        document.getElementById("telefon").style = "border-color:red;";
        document.getElementById("telefonD").innerHTML = "Format incorrecte";
        missatge = true;

    }else{
        document.getElementById("telefonD").innerHTML = "";
        document.getElementById("telefon").style = "border-color:#07FB7F;";

    }

    if (missatge != true) {

        var Request = new XMLHttpRequest();
        Request.onreadystatechange = function () {
            console.log(this.readyState);
            console.log(this.status);
            
            if (this.readyState == 4 && this.status == 200) {
                var m = Request.responseText;
            
                if (m == "ok") {
    
                        window.location.href="http://localhost/Small/index.php/SmallController/Success";
                        
                   
                }else if(m=="NoRep"){

                        window.location.href="http://localhost/Small/index.php/SmallController/ErrorRepartidor";
                } 
                else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Disculpa les molèsties,alguna botiga no disposa de suficient estoc d\'algun producte seleccionat!'
                    });
    
                }
            }
        };
          
        Request.open("POST", "http://localhost/Small/index.php/SmallController/Tramitar", true);
        Request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        Request.send("Carrer="+Carrer+"&Numero="+Numero+"&Pis="+Pis+"&Escala="+Escala+"&Telefon="+Telefon);

    }else{

        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'No s\'ha pogut tramitar la comanda!'
        });

    }

}

function AfegirProd(id,quantitat){
    var Request = new XMLHttpRequest();
    Request.onreadystatechange = function () {

      if (this.readyState == 4 && this.status == 200) {

          var m=this.responseText;

          if(m=="ok"){

            Swal.fire({
                icon: 'success',
                text: 'Producte afegit a la cistella',
            }).then((value) => {

                location.reload();

            });
              
          }else{
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'No s\'ha pogut afegir el producte a la cistella'
            });
    

          }
    
         
       }
};

Request.open("POST", "http://localhost/Small/index.php/SmallController/AfegirCarrito", true);
Request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
Request.send("id="+id+"&quantitat="+quantitat);







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

/*Calcular Edat*/
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

/*Validar Cif*/
function ValidaCIF(F) {

    var v1 = new Array(0, 2, 4, 6, 8, 1, 3, 5, 7, 9);
    var temp = 0;
    var temp1;


    for (i = 2; i <= 6; i += 2) {
        var resul = false;
        var temp = F.toUpperCase(); // pasar a mayúsculas
        if (!/^[A-Za-z0-9]{9}$/.test(temp)) { // Son 9 dígitos? 
            resul = false;
        } else if (!/^[ABCDEFGHKLMNPQS]/.test(temp)) { // Es una letra de las admitidas ?
            resul = false
        } else {
            resul = true;


        }


        return resul;

    }



}

/*Validar Iban*/

function ValidateIBAN(IBAN) {

    //Se pasa a Mayusculas
    IBAN = IBAN.toUpperCase();
    //Se quita los blancos de principio y final.
    IBAN = IBAN.trim();
    IBAN = IBAN.replace(/\s/g, ""); //Y se quita los espacios en blanco dentro de la cadena

    var letra1,letra2,num1,num2;
    var isbanaux;
    var numeroSustitucion;
    //La longitud debe ser siempre de 24 caracteres
    if (IBAN.length != 24) {
        return false;
    }

    // Se coge las primeras dos letras y se pasan a números
    letra1 = IBAN.substring(0, 1);
    letra2 = IBAN.substring(1, 2);
    num1 = getnumIBAN(letra1);
    num2 = getnumIBAN(letra2);
    //Se sustituye las letras por números.
    isbanaux = String(num1) + String(num2) + IBAN.substring(2);
    // Se mueve los 6 primeros caracteres al final de la cadena.
    isbanaux = isbanaux.substring(6) + isbanaux.substring(0,6);

    //Se calcula el resto, llamando a la función modulo97, definida más abajo
    resto = modulo97(isbanaux);
    if (resto == 1){
        return true;
    }else{
        return false;
    }
}

function modulo97(iban) {
    var parts = Math.ceil(iban.length/7);
    var remainer = "";

    for (var i = 1; i <= parts; i++) {
        remainer = String(parseFloat(remainer+iban.substr((i-1)*7, 7))%97);
    }

    return remainer;
}

function getnumIBAN(letra) {
    ls_letras = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    return ls_letras.search(letra) + 10;
}

function validarTel(tel){
        var comp=true;
    if( !(/^\d{9}$/.test(tel)) ) {
        comp=false;
      }

      return comp;
}


