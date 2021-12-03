<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sistem Inventori Barang</title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/fonts/fontawesome5-overrides.min.css">
    <link rel="img" href="<?= BASEURL; ?>/assets/img/logo-tab/logo1.png">
</head>

<body id="page-top">
    <div id="wrapper">

        <!-- Sidebar -->
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="<?= BASEURL; ?>/home">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas "></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Inventori Barang</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link active" href="<?= BASEURL; ?>/home"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link " href="<?= BASEURL; ?>/user"><i class="fas fa fa-user-circle-o"></i><span>Data User</span></a></li>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                            <i class="fas fa-fw fa-folder"></i>
                            <span>Inventaris</span>
                        </a>
                        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <a class="collapse-item" href="<?= BASEURL; ?>/gedung">Data Gedung</a>
                                <a class="collapse-item" href="<?= BASEURL; ?>/ruangan">Data Ruangan</a>
                                <a class="collapse-item" href="<?= BASEURL; ?>/barang">Data Barang</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?= BASEURL; ?>/dinventaris"><i class="fas fa-fw fa-folder"></i><span>Daftar Inventaris</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= BASEURL; ?>/peminjaman"><i class="fas fa-fw fa-folder"></i><span>Peminjaman</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <!-- akhir sidebar -->

        <!-- Header (Search dan Profil) -->
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <!-- <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                            </div>
                        </form> -->
                        <ul class="navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small">Admin TU UNNES</span><img class="border rounded-circle img-profile" src="<?= BASEURL; ?>/assets/img/unnes/unnes.jpg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profil</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Pengaturan</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Aktivitas</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Keluar</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>

                <!-- Content -->