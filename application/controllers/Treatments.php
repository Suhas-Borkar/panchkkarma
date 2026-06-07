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

    public function lekhan_basti_treatment()
    {
        $data['title'] = 'Lekhan Basti Treatment';
        $this->views('lekhan-basti-treatment',$data);
    }

    public function nadi_swedan_treatment()
    {
        $data['title'] = 'Nadi Swedan Treatment';
        $this->views('nadi-swedan-treatment',$data);
    }

    public function nasya_treatment()
    {
        $data['title'] = 'Nasya Treatment';
        $this->views('nasya-treatment',$data);
    }

    public function navarakizhi_treatment()
    {
        $data['title'] = 'Navarakizhi Treatment';
        $this->views('navarakizhi-treatment',$data);
    }

    public function netra_terpana_treatment()
    {
        $data['title'] = 'Netra Terpana Treatment';
        $this->views('netra-terpana-treatment',$data);
    }


    public function niruha_basti_treatment()
    {
        $data['title'] = 'Niruha Basti Treatment';
        $this->views('niruha-basti-treatment',$data);
    }


    public function pada_abhyanga_treatment()
    {
        $data['title'] = 'Pada Abhyanga Treatment';
        $this->views('pada-abhyanga-treatment',$data);
    }

    public function pichu_treatment()
    {
        $data['title'] = 'Pichu Treatment';
        $this->views('pichu-treatment',$data);
    }

    public function pizhichill_treatment()
    {
        $data['title'] = 'Pizhichill Treatment';
        $this->views('pizhichill-treatment',$data);
    }

    public function podikizhi_treatment()
    {
        $data['title'] = 'Podikizhi Treatment';
        $this->views('podikizhi-treatment',$data);
    }

    public function pristha_basti_treatment()
    {
        $data['title'] = 'Pristha Basti Treatment';
        $this->views('pristha-basti-treatment',$data);
    }

    public function raktmokashana_treatment()
    {
        $data['title'] = 'Raktmokashana Treatment';
        $this->views('raktmokashana-treatment',$data);
    }

    public function janu_basti_treatment()
    {
        $data['title'] = 'Janu Basti Treatment';
        $this->views('janu-basti-treatment',$data);
    }

    public function kati_basti_treatment()
    {
        $data['title'] = 'Kati Basti Treatment';
        $this->views('kati-basti-treatment',$data);
    }

    public function siravedh_treatment()
    {
        $data['title'] = 'Siravedh Treatment';
        $this->views('siravedh-treatment',$data);
    }

    public function sarvanga_abhyanga_treatment()
    {
        $data['title'] = 'Sarvanga Abhyanga Treatment';
        $this->views('sarvanga-abhyanga-treatment',$data);
    }

    public function shiro_abhyanga_treatment()
    {
        $data['title'] = 'Shiro Abhyanga Treatment';
        $this->views('shiro-abhyanga-treatment',$data);
    }

    public function shirodhara_treatment()
    {
        $data['title'] = 'Shirodhara Treatment';
        $this->views('shirodhara-treatment',$data);
    }

    public function sthanik_abhyanga_treatment()
    {
        $data['title'] = 'Sthanik Abhyanga Treatment';
        $this->views('sthanik-abhyanga-treatment',$data);
    }

    public function thalam_treatment()
    {
        $data['title'] = 'Thalam Treatment';
        $this->views('thalam-treatment',$data);
    }

    public function takradhara_treatment()
    {
        $data['title'] = 'Takradhara Treatment';
        $this->views('takradhara-treatment',$data);
    }

    public function udvartana_treatment()
    {
        $data['title'] = 'Udvartana Treatment';
        $this->views('udvartana-treatment',$data);
    }

    public function vaman_treatment()
    {
        $data['title'] = 'Vaman Treatment';
        $this->views('vaman-treatment',$data);
    }

    public function virechan_treatment()
    {
        $data['title'] = 'Virechan Treatment';
        $this->views('virechan-treatment',$data);
    }

    public function ayurvedic_consultation()
    {
        $data['title'] = 'Ayurvedic Consultation';
        $this->views('ayurvedic-consultation',$data);
    }
}