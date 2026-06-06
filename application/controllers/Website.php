<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        error_reporting(0);
        date_default_timezone_set('Asia/Kolkata');
    }


    public function views($page = 'index',$data = array())
    {
        $this->load->view('common/header',$data);
        $this->load->view('website/'.$page,$data);
        $this->load->view('common/footer',$data);
    }

    public function index()
    {
        $data['title'] = 'Home';
        $this->views('index',$data);
    }

     public function about_us()
    {
        $data['title'] = 'About Us';
        $this->views('about-us',$data);
    }

     public function contact_us()
    {
        $data['title'] = 'Contact Us';
        $this->views('contact-us',$data);
     }  
}