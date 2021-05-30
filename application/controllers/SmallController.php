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

    public function TramitarComandaRed()
    {

        $session = $this->session->userdata('tipus');

        if (empty($session)) {

            $this->load->view('Home');
        } else {


            if ($session == "client") {

                $this->load->view('TramitarComanda');
            } else {

                $this->load->view('Home');
            }
        }
    }

    public function HistorialComandes()
    {


        $session = $this->session->userdata('tipus');

        if (empty($session)) {

            $this->load->view('Home');
        } else {

            if ($session == "client") {

                $this->load->view('Comanda');
            } else {

                $this->load->view('Home');
            }
        }
    }

    public function ModDadesPersonaRed()
    {
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

    public function registrebotigues()
    {
        $Numero = $this->input->post('Number');
        $NomPropietari = $this->input->post('NomPropietari');
        $NomUsuari = $this->input->post('NomUsuari');
        $Password = $this->input->post('Password');
        $NomBotiga = $this->input->post('NomBotiga');
        $NomEmpresa = $this->input->post('NomEmpresa');
        $TipusBotiga = $this->input->post('TipusBotiga');
        $CIF = $this->input->post('Cif');
        $CorreuEmpresa = $this->input->post('CorreuE');
        $Ciutat = $this->input->post('Ciutat');
        $Carrer = $this->input->post('Carrer');
        $Provincia = $this->input->post('Provincia');
        $CodiPostal = $this->input->post('cpostal');
        
        $Iban = $this->input->post('IbanComplet');
        $passwordE = md5($Password);
        $data['dada'] = $this->input->post();

        $this->form_validation->set_rules('CorreuE', 'CorreuE', 'is_unique[botiga.correu]');
        $this->form_validation->set_rules('NomUsuari', 'NomUsuari', 'is_unique[usuaris.nom_usuari]');

        if ($this->form_validation->run() == FALSE) {

            echo "notunique";

        } else {

            $this->SmallModel->NouUsuari($NomUsuari, $passwordE, 0);

            $dades = $this->SmallModel->CodiUsuari($NomUsuari);

            $id = $dades[0]['id_usuari'];

            $this->SmallModel->NovaBotiga($id, $NomPropietari,$NomBotiga, $TipusBotiga,$NomEmpresa, $CIF, $CorreuEmpresa, $Ciutat, $Carrer,$Provincia,$CodiPostal,$Iban,$Numero);

            echo "ok";
        }
    }

    public function inicisessio()
    {
        $NomUsuari = $this->input->post('NomUsuariIS');
        $Password = $this->input->post('PasswordIS');
        $comp = "";
        $PasswordE = md5($Password);

        $cont = $this->SmallModel->InciarSessio($NomUsuari, $PasswordE);

        if ($cont != 0) {
            $comp = "ok";

            $dades = $this->SmallModel->CodiUsuari($NomUsuari);

            $idusuari = $dades[0]['id_usuari'];

            $contClientsId = $this->SmallModel->compClient($idusuari);
            $contAdminId = $this->SmallModel->compAdmin($idusuari);
            $contBotigaId = $this->SmallModel->compBotiga($idusuari);
            $contRepartidorId = $this->SmallModel->compRepartidor($idusuari);
            $contAtencioId = $this->SmallModel->compAtencio($idusuari);

            if ($contClientsId != 0) {
                $comp = "client";
                $this->load->library("session");
                $this->session->set_userdata("validat", $idusuari);
                $this->session->set_userdata("tipus", $comp);
                echo $comp;
            } else if ($contAdminId != 0) {

                $comp = "admin";
                $this->load->library("session");
                $this->session->set_userdata("validat", $idusuari);
                $this->session->set_userdata("tipus", $comp);
                echo $comp;
            } else if ($contBotigaId != 0) {

                $comp = "botiga";
                $this->load->library("session");
                $this->session->set_userdata("validat", $idusuari);
                $this->session->set_userdata("tipus", $comp);
                echo $comp;
            } else if ($contRepartidorId != 0) {

                $comp = "repartidor";
                $this->load->library("session");
                $this->session->set_userdata("validat", $idusuari);
                $this->session->set_userdata("tipus", $comp);
                echo $comp;
            } else if ($contAtencioId) {

                $comp = "atencioclient";
                $this->load->library("session");
                $this->session->set_userdata("validat", $idusuari);
                $this->session->set_userdata("tipus", $comp);
                echo $comp;
            }
        } else {
            $comp = "no";
            echo $comp;
        }
    }

    public function TipusBotiga(){

        $tipus = $this->input->post('select');
    
        if($tipus=="Carn"){

            $titol="LA CARN";
            $dades=$this->SmallModel->MostrarBotiguesPer("Carn");
            $this->load->view('MainBotiguesPersona',array('dades'=>$dades,'titol'=>$titol));

        }else if($tipus=="Peix"){

            $titol="EL PEIX";
            $dades=$this->SmallModel->MostrarBotiguesPer("Peix");
            $this->load->view('MainBotiguesPersona',array('dades'=>$dades,'titol'=>$titol));


        }else if($tipus=="Aviram"){
            
            $titol="AVIRAM";
            $dades=$this->SmallModel->MostrarBotiguesPer("Aviram");
            $this->load->view('MainBotiguesPersona',array('dades'=>$dades,'titol'=>$titol));


        }else if($tipus=="Fruita"){

            $titol="LA FRUITA";
            $dades=$this->SmallModel->MostrarBotiguesPer("Fruita");
            $this->load->view('MainBotiguesPersona',array('dades'=>$dades,'titol'=>$titol));

        }else{

            $this->load->view('Home');
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

    public function RegistreBotiga()
    {

        $this->load->view('RegistreBotigues');
    }

    public function IniciClient()
    {


        $session = $this->session->userdata('tipus');

        if (empty($session)) {

            $this->load->view('Home');
        } else {

            if ($session == "client") {

                $sessionid = $this->session->userdata('validat');

                $dades = $this->SmallModel->CiutatClient($sessionid);

                $ciutat = $dades[0]['ciutat'];
                $ciutatMajus = mb_strtoupper($ciutat);
                $tipus="Carn";
                $botiga="CARNISSERIES/XARCUTERIES";

                $data = $this->SmallModel->MostrarBotiguesCiutat($tipus,$ciutat);


    



                $this->load->view('IniciClient',array('ciutat'=>$ciutatMajus,'botiga'=>$botiga,'dades'=>$data));
            } else {

                $this->load->view('Home');
            }
        }
    }

    public function IniciClient2()
    {
        $session = $this->session->userdata('tipus');

        if (empty($session)) {

            $this->load->view('Home');
        } else {

            if ($session == "client") {

                $session = $this->session->userdata('validat');

            
                $this->load->view('IniciClient2');
            } else {

                $this->load->view('Home');
            }
        }
    }
    public function IniciClient3()
    {
        $session = $this->session->userdata('tipus');

        if (empty($session)) {

            $this->load->view('Home');
        } else {

            if ($session == "client") {

                $session = $this->session->userdata('validat');

            
                $this->load->view('IniciClient3');
            } else {

                $this->load->view('Home');
            }
        }
    }
    public function IniciClient4()
    {
        $session = $this->session->userdata('tipus');

        if (empty($session)) {

            $this->load->view('Home');

        } else {

            if ($session == "client") {

                $session = $this->session->userdata('validat');

                $this->load->view('IniciClient4');

            } else {

                $this->load->view('Home');
            }
        }
    }

    public function CompteClient()
    {

        $session = $this->session->userdata('tipus');

        if (empty($session)) {

            $this->load->view('Home');
        } else {

            if ($session == "client") {

                $this->load->view('ModDadesPersonals');
            } else {

                $this->load->view('Home');
            }
        }
    }


    public function IniciBotiga()
    {
        $session = $this->session->userdata('tipus');

        if (empty($session)) {

            $this->load->view('Home');
        } else {

            if ($session == "botiga") {

                $this->load->view('IniciBotiga');
            } else {

                $this->load->view('Home');
            }
        }
    }



    public function TancarSessio()
    {

        $this->session->sess_destroy();

        $this->load->view('MissatgeTS');
    }
}
