<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Disease extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        error_reporting(0);
        date_default_timezone_set('Asia/Kolkata');
    }

    public function views($page = 'index', $data = array())
    {
        $this->load->view('common/header', $data);
        $this->load->view('disease/' . $page, $data);
        $this->load->view('common/footer', $data);
    }

    public function acidity_treatment()
    {
        $data['title'] = 'Acidity Treatment in Ayurveda';
        $this->views('acidity-treatment', $data);
    }

    public function arthritis_treatment()
    {
        $data['title'] = 'Arthritis Treatment – Ayurvedic Joint Care';
        $this->views('arthritis-treatment', $data);
    }

    public function asthma_treatment()
    {
        $data['title'] = 'Asthma Treatment in Ayurveda';
        $this->views('asthma-treatment', $data);
    }

    public function blood_pressure_treatment()
    {
        $data['title'] = 'Blood Pressure Treatment in Ayurveda';
        $this->views('blood-pressure-treatment', $data);
    }

    public function chronic_cold_cough_treatment()
    {
        $data['title'] = 'Chronic Cold & Cough Treatment in Ayurveda';
        $this->views('chronic-cold-cough-treatment', $data);
    }

    public function constipation_treatment()
    {
        $data['title'] = 'Constipation Treatment in Ayurveda';
        $this->views('constipation-treatment', $data);
    }

    public function diabetes_treatment()
    {
        $data['title'] = 'Diabetes Treatment in Ayurveda';
        $this->views('diabetes-treatment', $data);
    }

    public function eye_disease_treatment()
    {
        $data['title'] = 'Ayurvedic Treatment for Eye Disease';
        $this->views('eye-disease-treatment', $data);
    }

    public function hair_fall_treatment()
    {
        $data['title'] = 'Hair Fall Treatment in Ayurveda';
        $this->views('hair-fall-treatment', $data);
    }

    public function heart_problems_treatment()
    {
        $data['title'] = 'Ayurvedic Treatment for Heart Problems';
        $this->views('heart-problems-treatment', $data);
    }

    public function insomnia_treatment()
    {
        $data['title'] = 'Insomnia Treatment in Ayurveda';
        $this->views('insomnia-treatment', $data);
    }

    public function liver_cleanse_treatment()
    {
        $data['title'] = 'Ayurvedic Liver Cleanse';
        $this->views('liver-cleanse-treatment', $data);
    }

    public function migraine_treatment()
    {
        $data['title'] = 'Ayurvedic Treatment for Migraine';
        $this->views('migraine-treatment', $data);
    }

    public function paralysis_treatment()
    {
        $data['title'] = 'Ayurvedic Treatment for Paralysis';
        $this->views('paralysis-treatment', $data);
    }

    public function pcos_pcod_treatment()
    {
        $data['title'] = 'PCOS-PCOD Treatment in Ayurveda';
        $this->views('pcos-pcod-treatment', $data);
    }

    public function skin_treatment()
    {
        $data['title'] = 'Ayurvedic Skin Treatment';
        $this->views('skin-treatment', $data);
    }

    public function stress_relief_treatment()
    {
        $data['title'] = 'Stress Relief – Ayurvedic Treatment';
        $this->views('stress-relief-treatment', $data);
    }

    public function thyroid_treatment()
    {
        $data['title'] = 'Ayurvedic Treatment for Thyroid';
        $this->views('thyroid-treatment', $data);
    }

    public function weight_loss_treatment()
    {
        $data['title'] = 'Ayurvedic Weight Loss Treatment';
        $this->views('weight-loss-treatment', $data);
    }
}
