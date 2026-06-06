<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Treatments extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        error_reporting(0);
        date_default_timezone_set('Asia/Kolkata');
    }


    public function views($page = 'index',$data = array())
    {
        $this->load->view('common/header',$data);
        $this->load->view('treatments/'.$page,$data);
        $this->load->view('common/footer',$data);
    }

    public function agnikarma_treatment()
    {
        $data['title'] = 'Agnikarma Treatment';
        $this->views('agnikarma-treatment',$data);
    }

    public function anuvasana_basti_treatment()
    {
        $data['title'] = 'Anuvasana Basti Treatment';
        $this->views('anuvasana-basti-treatment',$data);
    }

    public function dhum_paan_treatment()
    {
        $data['title'] = 'Dhum Paan Treatment';
        $this->views('dhum-paan-treatment',$data);
    }

    public function greeva_basti_treatment()
    {
        $data['title'] = 'Greeva Basti Treatment';
        $this->views('greeva-basti-treatment',$data);
    }

    public function hrudbasti_treatment()
    {
        $data['title'] = 'Hrudbasti Treatment';
        $this->views('hrudbasti-treatment',$data);
    }


    public function ksheerdhara_treatment()
    {
        $data['title'] = 'Ksheerdhara Treatment';
        $this->views('ksheerdhara-treatment',$data);
    }
}