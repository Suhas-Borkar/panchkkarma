<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6 Panchakarma & Wellness</title>
    <link rel="shortcut icon" href="<?=base_url('uploads/')?>assets/images/favicon.png">

    <!-- Stylesheets -->
    <!-- Stylesheets -->
    <link href="<?=base_url('uploads/')?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url('uploads/')?>assets/css/style.css" rel="stylesheet">
     <style>
        /* ── Base nav ── */
        .navbar-nav .nav-link {
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .5px;
            color: #222 !important;
            padding: 18px 14px !important;
        }
        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: #cea651 !important;
        }
 
        /* ── Regular dropdowns ── */
        .navbar-nav .dropdown-menu {
            border: none;
            border-radius: 0;
            box-shadow: 0 8px 28px rgba(0,0,0,.12);
            padding: 14px 0;
            min-width: 260px;
            margin-top: 0;
        }
        .navbar-nav .dropdown-item {
            font-size: 15px;
            color: #333;
            font-weight: 500;
            padding: 9px 24px;
            white-space: normal;
            background: transparent;
            transition: color .2s, background .2s;
        }
        .navbar-nav .dropdown-item:hover,
        .navbar-nav .dropdown-item:focus {
            color: #cea651;
            background: #fdf6f5;
        }
 
        /* ── MEGA MENU ── */
        .mega-nav-item {
            position: static !important; /* key: makes child menu full-width relative to navbar */
        }
        .mega-menu {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            width: 100%;
            border: none;
            border-radius: 0;
            padding: 28px 40px 30px;
            background: #fff;
            box-shadow: 0 10px 30px rgba(0,0,0,.1);
            display: none;   /* hidden by default */
            z-index: 9999;
        }
        /* Show mega menus on hover (desktop) */
        @media (min-width: 992px) {
            .mega-nav-item:hover .mega-menu {
                display: flex !important;
            }
            /* Show regular Bootstrap dropdowns on hover too */
            .navbar-nav .dropdown:hover > .dropdown-menu {
                display: block;
                margin-top: 0;
            }
        }
 
        /* ── Mega menu internals ── */
        .mega-menu .mega-col {
            flex: 1;
            padding: 0 16px;
            border-right: 1px solid #f2f2f2;
        }
        .mega-menu .mega-col:last-child {
            border-right: none;
        }
        .mega-menu .mega-col-heading {
            font-size: 12px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: .5px;
            color: #111;
            margin-bottom: 14px;
            padding-bottom: 10px;
            border-bottom: 2px solid #eee;
            line-height: 1.3;
        }
        .mega-menu .mega-link {
            display: block;
            font-size: 14px;
            font-weight: 500;
            color: #555;
            padding: 5px 0;
            text-decoration: none;
            transition: color .2s, padding-left .2s;
            line-height: 1.4;
        }
        .mega-menu .mega-link:hover {
            color: #cea651;
            padding-left: 6px;
        }
 
        /* ── Navbar wrapper needs position: relative ── */
        .navbar {
            position: relative;
        }
        @media (min-width:992px){
            .mega-nav-item:hover > .mega-menu,
            .mega-menu:hover{
                display:flex !important;
            }
        }

        @media (max-width:991px){

            .navbar-brand img{
                margin-left:0 !important;
                width:80px !important;
            }

            .navbar-nav{
                align-items:flex-start !important;
            }

            .mega-menu{
                position:static !important;
                width:100% !important;
                display:none;
                padding:10px !important;
                box-shadow:none !important;
            }

            .mega-menu.show{
                display:block !important;
            }

            .mega-col{
                border-right:none !important;
                border-bottom:1px solid #eee;
                padding:12px 0;
            }

            .mega-col:last-child{
                border-bottom:none;
            }
        }
    </style>
</head>
<body>
 
<nav class="navbar navbar-expand-lg bg-white border-bottom shadow-sm">
  <div class="container-fluid px-4">
 
    <!-- Logo -->
    <a class="navbar-brand fw-bold text-danger" href="#">
        <img src="<?=base_url('uploads/')?>assets/images/logo/logo-wellness.png" alt="logo" style="margin-left: 10px; width:80px;">
    </a>
 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
      <span class="navbar-toggler-icon"></span>
    </button>
 
    <div class="collapse navbar-collapse" id="navMain">
      <ul class="navbar-nav ms-auto align-items-lg-center">
 
        <!-- Home -->
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
 
        <!-- About -->
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
 
        <!-- Signature Treatment -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
            Signature Treatment
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Apatarpana</a></li>
            <li><a class="dropdown-item" href="#">Drishti</a></li>
            <li><a class="dropdown-item" href="#">Keshya</a></li>
            <li><a class="dropdown-item" href="#">Padabhyanga</a></li>
            <li><a class="dropdown-item" href="#">Saundarya</a></li>
            <li><a class="dropdown-item" href="#">Santulana</a></li>
            <li><a class="dropdown-item" href="#">Sukha</a></li>
            <li><a class="dropdown-item" href="#">Udvartana</a></li>
          </ul>
        </li>
 
        <!-- Health Package -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
            Health Package
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Detox Pro</a></li>
            <li><a class="dropdown-item" href="#">Joint Care</a></li>
            <li><a class="dropdown-item" href="#">Mann Shuddhi</a></li>
            <li><a class="dropdown-item" href="#">Weight Management</a></li>
            <li><a class="dropdown-item" href="#">5 Days Panchkarma Package</a></li>
          </ul>
        </li>
 
        <!-- ═══════════════════════════════════════
             AYURVEDIC TREATMENT — MEGA MENU
             ═══════════════════════════════════════ -->
        <li class="nav-item mega-nav-item">
          <a class="nav-link mega-toggle active" href="javascript:void(0)">
            Ayurvedic Treatment <i class="fa-solid fa-angle-down ms-1" style="font-size:11px;"></i>
          </a>
 
          <!-- Full-width mega menu panel -->
          <div class="mega-menu">
 
            <!-- Column 1: A – G -->
            <div class="mega-col">
              <div class="mega-col-heading">Ayurvedic Treatment A – G</div>
              <a class="mega-link" href="<?=base_url('treatments/agnikarma-treatment')?>">Agnikarma</a>
              <a class="mega-link" href="<?=base_url('treatments/anuvasana-basti-treatment')?>">Anuvasana Basti</a>
              <a class="mega-link" href="<?=base_url('treatments/dhum-paan-treatment')?>">Dhum Paan</a>
              <a class="mega-link" href="<?=base_url('treatments/greeva-basti-treatment')?>">Greeva Basti</a>
            </div>
 
            <!-- Column 2: H – M -->
            <div class="mega-col">
              <div class="mega-col-heading">Ayurvedic Treatment H – M</div>
              <a class="mega-link" href="<?=base_url('treatments/hrudbasti-treatment')?>">Hrudbasti</a>
              <a class="mega-link" href="<?=base_url('treatments/janu-basti-treatment')?>">Janu Basti</a>
              <a class="mega-link" href="<?=base_url('treatments/kati-basti-treatment')?>">Kati Basti</a>
              <a class="mega-link" href="<?=base_url('treatments/ksheerdhara-treatment')?>">Ksheerdhara</a>
              <a class="mega-link" href="<?=base_url('treatments/lekan-basti-treatment')?>">Lekhan Basti</a>
            </div>
 
            <!-- Column 3: N – P -->
            <div class="mega-col">
              <div class="mega-col-heading">Ayurvedic Treatment N – P</div>
              <a class="mega-link" href="<?=base_url('treatments/nadi-swedan-treatment')?>">Nadi Swedan</a>
              <a class="mega-link" href="<?=base_url('treatments/nasya-treatment')?>">Nasya</a>
              <a class="mega-link" href="<?=base_url('treatments/navarakizhi-treatment')?>">Navarakizhi</a>
              <a class="mega-link" href="<?=base_url('treatments/netra-terpana-treatment')?>">Netra Terpana</a>
              <a class="mega-link" href="<?=base_url('treatments/niruha-basti-treatment')?>">Niruha Basti</a>
              <a class="mega-link" href="<?=base_url('treatments/pada-abhyanga-treatment')?>">Pada Abhyanga</a>
              <a class="mega-link" href="<?=base_url('treatments/pichu-treatment')?>">Pichu</a>
            </div>
 
            <!-- Column 4: P – S -->
            <div class="mega-col">
              <div class="mega-col-heading">Ayurvedic Treatment P – S</div>
              <a class="mega-link" href="<?=base_url('treatments/pizhichill-treatment')?>">Pizhichill</a>
              <a class="mega-link" href="<?=base_url('treatments/podikizhi-treatment')?>">Podikizhi</a>
              <a class="mega-link" href="<?=base_url('treatments/pristha-basti-treatment')?>">Pristha Basti</a>
              <a class="mega-link" href="<?=base_url('treatments/raktmokashana-treatment')?>">Raktmokashana – Leech Therapy</a>
              <a class="mega-link" href="<?=base_url('treatments/siravedh-treatment')?>">Raktmokashana – Siravedh</a>
              <a class="mega-link" href="<?=base_url('treatments/sarvanga-abhyanga-treatment')?>">Sarvanga Abhyanga</a>
              <a class="mega-link" href="<?=base_url('treatments/shiro-abhyanga-treatment')?>">Shiro Abhyanga</a>
            </div>
 
            <!-- Column 5: S – V -->
            <div class="mega-col">
              <div class="mega-col-heading">Ayurvedic Treatment S – V</div>
              <a class="mega-link" href="<?=base_url('treatments/shirodhara-treatment')?>">Shirodhara</a>
              <a class="mega-link" href="<?=base_url('treatments/sthanik-abhyanga-treatment')?>">Sthanik Abhyanga</a>
              <a class="mega-link" href="<?=base_url('treatments/thalam-treatment')?>">Thalam</a>
              <a class="mega-link" href="<?=base_url('treatments/takradhara-treatment')?>">Takradhara</a>
              <a class="mega-link" href="<?=base_url('treatments/udvartana-treatment')?>">Udvartana</a>
              <a class="mega-link" href="<?=base_url('treatments/vaman-treatment')?>">Vaman</a>
              <a class="mega-link" href="<?=base_url('treatments/virechan-treatment')?>">Virechan</a>
            </div>
 
          </div><!-- /mega-menu -->
        </li>
 
        <!-- ═══════════════════════════════════════
             DISEASE WISE TREATMENT — MEGA MENU
             ═══════════════════════════════════════ -->
        <li class="nav-item mega-nav-item">
          <a class="nav-link mega-toggle" href="javascript:void(0)">
            Disease Wise Treatment <i class="fa-solid fa-angle-down ms-1" style="font-size:11px;"></i>
          </a>
 
          <div class="mega-menu">
 
            <!-- Column 1: A – C -->
            <div class="mega-col">
              <div class="mega-col-heading">Disease Treatment A – C</div>
              <a class="mega-link" href="#">Acidity Treatment</a>
              <a class="mega-link" href="#">Arthritis Treatment – Joint Care</a>
              <a class="mega-link" href="#">Asthma Treatment</a>
              <a class="mega-link" href="#">Blood Pressure</a>
              <a class="mega-link" href="#">Chronic Cold &amp; Cough</a>
            </div>
 
            <!-- Column 2: C – H -->
            <div class="mega-col">
              <div class="mega-col-heading">Disease Treatment C – H</div>
              <a class="mega-link" href="#">Constipation</a>
              <a class="mega-link" href="#">Diabetes Treatment</a>
              <a class="mega-link" href="#">Eye Disease</a>
              <a class="mega-link" href="#">Hair Fall Treatment</a>
              <a class="mega-link" href="#">Heart Problems</a>
            </div>
 
            <!-- Column 3: I – P -->
            <div class="mega-col">
              <div class="mega-col-heading">Disease Treatment I – P</div>
              <a class="mega-link" href="#">Insomnia</a>
              <a class="mega-link" href="#">Liver Cleanse</a>
              <a class="mega-link" href="#">Migraine</a>
              <a class="mega-link" href="#">Paralysis</a>
              <a class="mega-link" href="#">Pcos-Pcod Treatment</a>
            </div>
 
            <!-- Column 4: S – W -->
            <div class="mega-col">
              <div class="mega-col-heading">Disease Treatment S – W</div>
              <a class="mega-link" href="#">Skin Treatment</a>
              <a class="mega-link" href="#">Stress Relief Treatment</a>
              <a class="mega-link" href="#">Thyroid Treatment</a>
              <a class="mega-link" href="#">Weight Loss Treatment</a>
            </div>
 
          </div><!-- /mega-menu -->
        </li>
 
        <!-- Our Products -->
        <li class="nav-item">
          <a class="nav-link" href="#">Our Products</a>
        </li>
 
        <!-- Our Locations -->
        <li class="nav-item">
          <a class="nav-link" href="#">Our Locations</a>
        </li>
 
      </ul>
    </div>
  </div>
</nav>