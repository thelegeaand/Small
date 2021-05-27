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
    values('".$idUsuari."','".$Nom."','".$Cognom."','".$Cognom2."','".$Dni."','".$Data."','".$Correu."','".$Ciutat."','".$Provincia."',".$CodiPostal.")";
    
    $this->db->query($sql);
    
    $num_files=$this->db->affected_rows();
    
    return $num_files;
    }

    public function CodiUsuari($NomUsuari){
    
        $this->db->select('*');
        $this->db->where('usuaris',$NomUsuari);
        $query = $this->db->get('id_usuari');
        return $query->result();
       
       
   }


    


}
    


    

