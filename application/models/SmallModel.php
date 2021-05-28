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

    $sql="SELECT * FROM usuaris WHERE nom_usuari='".$NomUsuari."' AND contrasenya='".$Password."'";
    $query=$this->db->query($sql);
    $count=$query->num_rows();

    return $count;

   }

   
}
    


    

