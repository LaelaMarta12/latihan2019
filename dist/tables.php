<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> MY WEB </title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="#">SMK NU</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>

            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    
                    <div class="input-group-append">
                        
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#"><i class="fas fa-user fa-fw"></i> profile</a>
                        
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>




        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">menu</div>


                            <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                dashboard</a>

                           





                           
                            
                            
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    
                                   
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Data</div>
                            <a class="nav-link" href="tables.html"
                                ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Data Siswa</a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">



                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"></h1>

                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            
                        </ol>
                       









                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i><center>DATA MURID SMK NU</center></div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        
            <tr bgcolor="00FF00">
                <th colspan="2"><center>NO</center></th> 
                <th rowspan="2">NAMA LENGKAP</th>
                <th rowspan="2" >JENIS KELAMIN</th>
                <th colspan="4" ><center>BUKU YANG DIPINJAM</center></th>
            </tr>
            <tr bgcolor="00FF00">
                <th>URUT</th>
                <th>INDUK</th>
                <th>NAMA_BUKU</th>
                <th>NO</th>
                <th>TANGGAL_PEMINJAMAN</th>
                <th>TANGGAL PENGEMBALIAN</th>
            </tr>
                                                      
            <tr>
                <td>1</td>
                <td>19200718</td>
                <td>Laela Mukaromah</td>
                <td align="center">P</td>
                <td align="center">Novel</td>
                <td align="center">2345</td>
                <td align="center">21 Januari 2021</td>
                <td align="center">24 Januari 2021</td>
                
            </tr>
            <tr>
                <td>2</td>
                <td>19200719</td>
                <td>Firman Choerudin </td>
                <td align="center">L</td>
                <td align="center">Sejarah</td>
                <td align="center">2346</td>
                <td align="center">12 Februari 2021</td>
                <td align="center">15 Februari 2021</td>
               
            </tr>
            <tr>
                <td>3</td>
                <td>19200720</td>
                <td>Susi Sumianti</td>
                <td align="center">P</td>
                <td align="center">Aswaja</td>
                <td align="center">2347</td>
                <td align="center">09 Maret 2021</td>
                <td align="center">13 Maret 2021</td>
                
            </tr>
            <tr>
                <td>4</td>
                <td>19200721</td>
                <td>Indrawan Maulana</td>
                <td align="center">L</td>
                <td align="center">Kamus inggris</td>
                <td align="center">2348</td>
                <td align="center">14 Juni 2021</td>
                <td align="center">17 Juni 2021</td>
               
            </tr>
            <tr>
                <td>5</td>
                <td>19200722</td>
                <td>Furqon Hidayatullah</td>
                <td align="center">L</td>
                <td align="center">Matematika</td>
                <td align="center">2349</td>
                <td align="center">29 juli 2021</td>
                <td align="center">31 juli 2021</td>
               
            </tr>
            <tr>
                <td>6</td>
                <td>19200723</td>
                <td>Iis Listriani</td> 
                <td align="center">P</td>
                <td align="center">Sunda</td>
                <td align="center">2341</td>
                <td align="center">11 juli 2021/td>
                <td align="center">14 juli 2021</td>
                
            </tr>
            <tr>
                <td>7</td>
                <td>19200724</td>
                <td>Siti Mulhijah</td>
                <td align="center">P</td>
                <td align="center">Indonesia</td>
                <td align="center">2342</td>
                <td align="center">15 Mei 2021</td>
                <td align="center">17 Mei 2021</td>
                
            </tr>
            <tr>
                <td>8</td>
                <td>19200725</td>
                <td>Lia Komalasari</td>
                <td align="center">P</td>
                <td align="center">Kewirausahaan</td>
                <td align="center">2343</td>
                <td align="center">20 April 2021</td>
                <td align="center">13 April 2021</td>
               
            </tr>
            <tr>
                <td>9</td>
                <td>19200726</td>
                <td>Agung Gumelar</td>
                <td align="center">L</td>
                <td align="center">Fisika</td>
                <td align="center">2344</td>
                <td align="center">23 Agustus 2021</td>
                <td align="center">26 Agustus 2021</td>
               
            </tr>
            <tr>
                <td>10</td>
                <td>19200727</td>
                <td>fezi</td>
                <td align="center">L</td>
                <td align="center">PAI</td>
                <td align="center">2340</td>
                <td align="center">28 Desember 2021</td>
                <td align="center">30 Desember 2021</td>
                
            </tr>
           



                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

<footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Laela Mukaromah 2021</div>
                            <div>
                                                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>







                