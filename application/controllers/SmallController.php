<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SmallController extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            $this->load->helper(array('form', 'url'));
            $this->load->helper('form');
            $this->load->database();
            $this->load->library("session");
            $this->load->library('form_validation'); 
        
    }

	public function index()
	{

		$this->load->view('Home');
        
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

    public function IniciBotiga(){

        $this->load->view('IniciBotiga');

    }
    
}
