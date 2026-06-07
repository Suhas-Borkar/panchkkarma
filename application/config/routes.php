<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Website';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;

$route['about-us'] = 'Website/about_us';
$route['contact-us'] = 'Website/contact_us';   


// Treatments
$route['treatments/agnikarma-treatment'] = 'Treatments/agnikarma_treatment';
$route['treatments/anuvasana-basti-treatment'] = 'Treatments/anuvasana_basti_treatment';
$route['treatments/dhum-paan-treatment'] = 'Treatments/dhum_paan_treatment';
$route['treatments/greeva-basti-treatment'] = 'Treatments/greeva_basti_treatment';
$route['treatments/hrudbasti-treatment'] = 'Treatments/hrudbasti_treatment';

$route['treatments/ksheerdhara-treatment'] = 'Treatments/ksheerdhara_treatment';
$route['treatments/lekhan-basti-treatment'] = 'Treatments/lekhan_basti_treatment';
$route['treatments/nadi-swedan-treatment'] = 'Treatments/nadi_swedan_treatment';
$route['treatments/nasya-treatment'] = 'Treatments/nasya_treatment';
$route['treatments/navarakizhi-treatment'] = 'Treatments/navarakizhi_treatment';
$route['treatments/netra-terpana-treatment'] = 'Treatments/netra_terpana_treatment';
$route['treatments/niruha-basti-treatment'] = 'Treatments/niruha_basti_treatment';
$route['treatments/pada-abhyanga-treatment'] = 'Treatments/pada_abhyanga_treatment';
$route['treatments/pichu-treatment'] = 'Treatments/pichu_treatment';
$route['treatments/pizhichill-treatment'] = 'Treatments/pizhichill_treatment';
$route['treatments/podikizhi-treatment'] = 'Treatments/podikizhi_treatment';
$route['treatments/pristha-basti-treatment'] = 'Treatments/pristha_basti_treatment';
$route['treatments/raktmokashana-treatment'] = 'Treatments/raktmokashana_treatment';
$route['treatments/janu-basti-treatment'] = 'Treatments/janu_basti_treatment';
$route['treatments/kati-basti-treatment'] = 'Treatments/kati_basti_treatment';
$route['treatments/siravedh-treatment'] = 'Treatments/siravedh_treatment';
$route['treatments/sarvanga-abhyanga-treatment'] = 'Treatments/sarvanga_abhyanga_treatment';
$route['treatments/shiro-abhyanga-treatment'] = 'Treatments/shiro_abhyanga_treatment';
$route['treatments/shirodhara-treatment'] = 'Treatments/shirodhara_treatment';
$route['treatments/sthanik-abhyanga-treatment'] = 'Treatments/sthanik_abhyanga_treatment';
$route['treatments/thalam-treatment'] = 'Treatments/thalam_treatment';
$route['treatments/takradhara-treatment'] = 'Treatments/takradhara_treatment';
$route['treatments/udvartana-treatment'] = 'Treatments/udvartana_treatment';
$route['treatments/vaman-treatment'] = 'Treatments/vaman_treatment';
$route['treatments/virechan-treatment'] = 'Treatments/virechan_treatment';
$route['treatments/ayurvedic-consultation'] = 'Treatments/ayurvedic_consultation';

// Disease Wise Treatments
$route['disease/acidity-treatment'] = 'Disease/acidity_treatment';
$route['disease/arthritis-treatment'] = 'Disease/arthritis_treatment';
$route['disease/asthma-treatment'] = 'Disease/asthma_treatment';
$route['disease/blood-pressure-treatment'] = 'Disease/blood_pressure_treatment';
$route['disease/chronic-cold-cough-treatment'] = 'Disease/chronic_cold_cough_treatment';
$route['disease/constipation-treatment'] = 'Disease/constipation_treatment';
$route['disease/diabetes-treatment'] = 'Disease/diabetes_treatment';
$route['disease/eye-disease-treatment'] = 'Disease/eye_disease_treatment';
$route['disease/hair-fall-treatment'] = 'Disease/hair_fall_treatment';
$route['disease/heart-problems-treatment'] = 'Disease/heart_problems_treatment';
$route['disease/insomnia-treatment'] = 'Disease/insomnia_treatment';
$route['disease/liver-cleanse-treatment'] = 'Disease/liver_cleanse_treatment';
$route['disease/migraine-treatment'] = 'Disease/migraine_treatment';
$route['disease/paralysis-treatment'] = 'Disease/paralysis_treatment';
$route['disease/pcos-pcod-treatment'] = 'Disease/pcos_pcod_treatment';
$route['disease/skin-treatment'] = 'Disease/skin_treatment';
$route['disease/stress-relief-treatment'] = 'Disease/stress_relief_treatment';
$route['disease/thyroid-treatment'] = 'Disease/thyroid_treatment';
$route['disease/weight-loss-treatment'] = 'Disease/weight_loss_treatment';