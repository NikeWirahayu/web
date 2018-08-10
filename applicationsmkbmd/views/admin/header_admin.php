<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADMIN BM</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('public/admin/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('public/admin/vendor/metisMenu/metisMenu.min.css'); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('public/admin/dist/css/sb-admin-2.css'); ?>" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url('public/admin/vendor/morrisjs/morris.css'); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('public/admin/vendor/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url('adminweb') ?>">ADMIN SMK BHAKTI MULIA PARE</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url('Authen/proseslogout') ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo base_url('adminweb/home_admin'); ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('adminweb/identitas'); ?>"><i class="fa fa-book fa-fw"></i> Identitas SMK</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-university fa-fw"></i> Profil SMK<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url('adminweb/profil_sejarah'); ?>">Sejarah</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('adminweb/profil_visimisi'); ?>">Visi Misi</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('adminweb/profil_kepala') ?>">Kepala Sekolah</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('adminweb/profil_wakakur') ?>">Waka Kurikulum</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('adminweb/profil_wakasis') ?>">Waka Kesiswaan</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('adminweb/profil_wakahum') ?>">Waka Humas</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('adminweb/profil_wakasar') ?>">Waka Sarana</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-desktop fa-fw"></i> Jurusan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Multimedia</a>
                                </li>
                                <li>
                                    <a href="morris.html">RPL</a>
                                </li>
                                <li>
                                    <a href="morris.html">Farmasi</a>
                                </li>
                                <li>
                                    <a href="morris.html">Keperawatan</a>
                                </li>
                                <li>
                                    <a href="morris.html">Adm. Perkantoran</a>
                                </li>
                                <li>
                                    <a href="morris.html">Akuntansi</a>
                                </li>
                                <li>
                                    <a href="morris.html">Perbankan</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-list-alt fa-fw"></i> Berita<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url('adminweb/list_berita'); ?>">Berita</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('adminweb/list_loker'); ?>">Lowongan</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('adminweb/tambah_lowongan'); ?>">Tambah</a>
                                </li>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo base_url('adminweb/list_pengumuman'); ?>"><i class="fa fa-bullhorn fa-fw"></i> Pengumuman</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-calendar fa-fw"></i> Jadwal<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Jadwal Pelajaran</a>
                                </li>
                                <li>
                                    <a href="morris.html">Jadwal UTS Ganjil</a>
                                </li>
                                <li>
                                    <a href="morris.html">Jadwal UTS Genap</a>
                                </li>
                                <li>
                                    <a href="morris.html">Jadwal UAS Ganjil</a>
                                </li>
                                <li>
                                    <a href="morris.html">Jadwal UAS Genap</a>
                                </li>
                                <li>
                                    <a href="morris.html">Jadwal Simulasi UNBK</a>
                                </li>
                                <li>
                                    <a href="morris.html">UNBK</a>
                                </li>
                                <li>
                                    <a href="morris.html">UNBK Susulan</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-suitcase fa-fw"></i> BKK<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Tentang BKK</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Adminweb/tambah_lowongan') ?>">Lowongan Kerja</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-building-o fa-fw"></i> LSP</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-flag-o fa-fw"></i> Kesiswaan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Ekstrakurikuler</a>
                                </li>
                                <li>
                                    <a href="morris.html">Agenda</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
