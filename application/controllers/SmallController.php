<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SmallController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->helper('form');
        $this->load->database();
        $this->load->library('email');
        $this->load->library("session");
        $this->load->library('form_validation');
        $this->load->model('SmallModel');
    }

    public function index()
    {

        $this->load->view('Home');
    }

    public function TramitarComandaRed(){
        $this->load->view('TramitarComanda');
    }

    public function HistorialComandes(){
        $this->load->view('Comanda');
    }

    public function ModDadesPersonaRed(){
        $this->load->view('ModDadesPersonals');
    }
    public function registreclient()
    {

        $Nom = $this->input->post('Nom');
        $PrimerCognom = $this->input->post('Cognom');
        $SegonCognom = $this->input->post('Cognom2');
        $Dni = $this->input->post('Dni');
        $DataNaixement = $this->input->post('datanaixement');
        $Correu = $this->input->post('correu');
        $Ciutat = $this->input->post('ciutat');
        $Provincia = $this->input->post('provincia');
        $CodiPostal = $this->input->post('cpostal');
        $Password = $this->input->post('password');
        $NomUsuari = $this->input->post('NomUsuari');
        $passwordE = md5($Password);
        $data['dada'] = $this->input->post();

        $this->form_validation->set_rules('correu', 'correu', 'is_unique[client.correu]');

        if ($this->form_validation->run() == FALSE) {

            echo "notunique";
        } else {

            $this->SmallModel->NouUsuari($NomUsuari, $passwordE, 1);

            $dades = $this->SmallModel->CodiUsuari($NomUsuari);

            $id = $dades[0]['id_usuari'];

            $this->SmallModel->NouClient($id, $Nom, $PrimerCognom, $SegonCognom, $Dni, $DataNaixement, $Correu, $Ciutat, $CodiPostal, $Provincia);

            echo "ok";
        }
    }

    public function inicisessio(){

        $NomUsuari = $this->input->post('NomUsuariIS');
        $Password= $this->input->post('PasswordIS');
        $comp="";
        $PasswordE=md5($Password);

        $cont=$this->SmallModel->InciarSessio($NomUsuari,$PasswordE);

        if($cont!=0){
          $comp="ok";

          $dades = $this->SmallModel->CodiUsuari($NomUsuari);

          $idusuari = $dades[0]['id_usuari'];

          $contClientsId=$this->SmallModel->compClient($idusuari);
          $contAdminId=$this->SmallModel->compAdmin($idusuari);
          $contBotigaId=$this->SmallModel->compBotiga($idusuari);
          $contRepartidorId=$this->SmallModel->compRepartidor($idusuari);
          $contAtencioId=$this->SmallModel->compAtencio($idusuari);

          if($contClientsId!=0){
              $comp="client";
              $this->load->library("session");
              $this->session->set_userdata("validat",$idusuari);
              $this->session->set_userdata("tipus",$comp);
              echo $comp;

          }else if($contAdminId!=0){

            $comp="admin";
            $this->load->library("session");
            $this->session->set_userdata("validat",$idusuari);
            $this->session->set_userdata("tipus",$comp);
            echo $comp;

          }else if($contBotigaId!=0){

            $comp="botiga";
            $this->load->library("session");
            $this->session->set_userdata("validat",$idusuari);
            $this->session->set_userdata("tipus",$comp);
            echo $comp;

        }else if($contRepartidorId!=0){

            $comp="repartidor";
            $this->load->library("session");
            $this->session->set_userdata("validat",$idusuari);
            $this->session->set_userdata("tipus",$comp);
            echo $comp;
              

          }else if($contAtencioId){

            $comp="atencioclient";
            $this->load->library("session");
            $this->session->set_userdata("validat",$idusuari);
            $this->session->set_userdata("tipus",$comp);
            echo $comp;

          }

        }else{
          $comp="no";
          echo $comp;

        }

    }

    public function Contacte()
    {
        $this->load->view('Contacte');
    }


    public function MainBotiguesPer()
    {

        $this->load->view('MainBotiguesPersona',);

    }

    public function RegisterBotiga()
    {

        $this->load->view('RegistreBotigues');
    }

    public function IniciClient()
    {
        $this->load->view('IniciClient');
    }

    public function HistorialClient()
    {
        $this->load->view('HistorialClient');
    }

    public function CompteClient()
    {

        $this->load->view('CompteClient');
    }

    public function TramitarComanda()
    {


        $this->load->view('TramitarComanda');
    }


    public function IniciBotiga()
    {

        $this->load->view('IniciBotiga');
    }
    
    
}
