<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SmallController extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            $this->load->helper(array('form', 'url'));
            $this->load->helper('form');
            $this->load->database();
            $this->load->library('email');
            $this->load->library("session");
            $this->load->library('form_validation'); 
        
    }

	public function index()
	{
        
        
		$this->load->view('Home');

        
	}

    public function registreclient(){

        $Nom=$this->input->post('Nom');
        $PrimerCognom=$this->input->post('Cognom');
        $SegonCognom=$this->input->post('Cognom2');
        $Dni=$this->input->post('Dni');
        $DataNaixement=$this->input->post('datanaixement');
        $Correu=$this->input->post('correu');
        $Ciutat=$this->input->post('ciutat');
        $Provincia=$this->input->post('provincia');
        $CodiPostal=$this->input->post('cpostal');
        $Password=$this->input->post('password');
        $NomUsuari=$this->input->post('NomUsuari');
        $passwordE=md5($Password);
        $data['dada']=$this->input->post();

      $this->form_validation->set_rules('correu','correu','is_unique[client.correu]');
      

      if($this->form_validation->run()==FALSE){

          echo "notunique";

        }else{

            echo "ok";

            $this->load->model('SmallModel');
            $this->SmallModel->NouUsuari($NomUsuari,$passwordE,1);


            /*$dades=$this->SmallModel->CodiUsuari($NomUsuari);*/
        
          /*$this->SmallModel->NouClient($dades,$Nom,$PrimerCognom,$SegonCognom,$Dni,$DataNaixement,$Correu,$Ciutat,$CodiPostal,$Provincia);*/


           
        }

          
        
        }


   
    public function MainBotiguesPer(){

        $this->load->view('MainBotiguesPersona');

    }

    public function RegisterBotiga(){

        $this->load->view('RegistreBotigues');

    }

    public function IniciClient(){


        $this->load->view('IniciClient');


    }

    public function HistorialClient(){


        $this->load->view('HistorialClient');


    }

    public function CompteClient(){


        $this->load->view('CompteClient');

        
    }

    public function TramitarComanda(){


        $this->load->view('TramitarComanda');


    }

    public function Contacte(){

        $this->load->view('Contacte');

    }
 
    public function IniciBotiga(){

        $this->load->view('IniciBotiga');

    }




    
}
