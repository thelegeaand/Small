<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SmallModel extends CI_Model {


public function __construct(){

parent::__construct();
$this->load->database();

}

public function NouUsuari($NomUsuari,$Contrasenya,$Estat){

    $sql="insert into usuaris(nom_usuari,contrasenya,estat)
    values('".$NomUsuari."','".$Contrasenya."',".$Estat.")";
    
    $this->db->query($sql);
    
    $num_files=$this->db->affected_rows();
    
    return $num_files;
    }

public function NouClient($idUsuari,$Nom,$Cognom,$Cognom2,$Dni,$Data,$Correu,$Ciutat,$CodiPostal,$Provincia){

    $sql="insert into client(id_usuari,nom,primer_cognom,segon_cognom,dni,data_naixement,correu,ciutat,província,codi_postal)
    values(".$idUsuari.",'".$Nom."','".$Cognom."','".$Cognom2."','".$Dni."','".$Data."','".$Correu."','".$Ciutat."','".$Provincia."','".$CodiPostal."')";
    
    $this->db->query($sql);
    
    $num_files=$this->db->affected_rows();
    
    return $num_files;
    }

public function NovaBotiga($id,$NomPropietari,$NomBotiga,$TipusBotiga,$NomEmpresa,$CIF,$CorreuEmpresa,$Ciutat,$Carrer,$Provincia,$CodiPostal,$Iban,$Numero){
   
    $sql="insert into botiga(id_usuari,nom_propietari,nom_botiga,nom_empresa,cif,correu,tipus,iban,província,ciutat,codi_postal,carrer,numero)
    values(".$id.",'".$NomPropietari."','".$NomBotiga."','".$NomEmpresa."','".$CIF."','".$CorreuEmpresa."','".$TipusBotiga."','".$Iban."','".$Provincia."','".$Ciutat."','".$CodiPostal."','".$Carrer."',".$Numero.")";
    
    $this->db->query($sql);
    
    $num_files=$this->db->affected_rows();
    
    return $num_files;

}

    public function CodiUsuari($NomUsuari){
    
        $sql="SELECT * FROM usuaris WHERE nom_usuari='".$NomUsuari."'";
    
        $dades=$this->db->query($sql);

        return $dades->result_array();

        
   }

   public function compClient($CodiUsuari){

    $sql="SELECT * FROM client WHERE id_usuari=".$CodiUsuari."";
    $query=$this->db->query($sql);
    $count=$query->num_rows();

    return $count;

   }
   public function compAdmin($CodiUsuari){

    $sql="SELECT * FROM administrador WHERE id_usuari=".$CodiUsuari."";
    $query=$this->db->query($sql);
    $count=$query->num_rows();

    return $count;

   }
   public function compBotiga($CodiUsuari){

    $sql="SELECT * FROM botiga WHERE id_usuari=".$CodiUsuari."";
    $query=$this->db->query($sql);
    $count=$query->num_rows();

    return $count;

   }
   public function compRepartidor($CodiUsuari){

    $sql="SELECT * FROM repartidor WHERE id_usuari=".$CodiUsuari."";
    $query=$this->db->query($sql);
    $count=$query->num_rows();

    return $count;

   }

   public function compAtencio($CodiUsuari){

    $sql="SELECT * FROM aclient WHERE id_usuari=".$CodiUsuari."";
    $query=$this->db->query($sql);
    $count=$query->num_rows();

    return $count;

   }

   public function InciarSessio($NomUsuari,$Password){

    $sql="SELECT * FROM usuaris WHERE nom_usuari='".$NomUsuari."' AND contrasenya='".$Password."' AND estat=1 ";
    $query=$this->db->query($sql);
    $count=$query->num_rows();

    return $count;

   }

   public function MostrarBotiguesPer($tipus){

    $sql="SELECT * FROM botiga b LEFT JOIN usuaris u ON b.id_usuari=u.id_usuari 
    WHERE u.estat=1 AND b.tipus='".$tipus."'";
    
        $dades=$this->db->query($sql);

        return $dades->result_array();

   }

   public function CiutatClient($idUsuari){
    $sql="SELECT * FROM client c LEFT JOIN usuaris u ON c.id_usuari=u.id_usuari 
    WHERE u.id_usuari=".$idUsuari."";
    
    $dades=$this->db->query($sql);

    return $dades->result_array();

   } 

   public function MostrarBotiguesCiutat($tipus,$ciutat){

    $sql="SELECT * FROM botiga b LEFT JOIN usuaris u ON b.id_usuari=u.id_usuari 
    WHERE u.estat=1 AND b.tipus='".$tipus."' AND b.ciutat='".$ciutat."'";
    
        $dades=$this->db->query($sql);

        return $dades->result_array();

   }

   public function Botiga($idbotiga){

    $sql="SELECT * FROM botiga 
    WHERE id_botiga=".$idbotiga."";
    
        $dades=$this->db->query($sql);

        return $dades->result_array();

   }
   
}
    


    

