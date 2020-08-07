<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ url('css/reset.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="{{ url('css/jquery.dataTables.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="icon" type="image/png" href="{{ url('img/Logo-Aras.png') }}">
    <script src="{{ url('scripts/tableFilter.js') }}"></script>
    <script src="{{ url('scripts/modal.js') }}" defer></script>
    <script src="{{ url('scripts/responsive-navbar.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/050398a7af.js"></script>
    <script src="{{ url('scripts/counter.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
    <script src="{{ url('scripts/table-pagination.js') }}"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARAS.ID</title>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="content">
            <a href="#"><img class="logo" src="{{ url('img/Logo-Aras.png') }}" alt="Logo"></a>
            <a href="#"><img class="icon" src="{{ url('img/tulisan-aras.png') }}" alt="Aras"></a>
            <span class="navbar-toggle" id="js-navbar-toggle">
                <i class="fas fa-bars"></i>
            </span>
            <nav class="navbar">
                <ul class="main-nav" id="js-menu">
                    <li><a href="#covid19">COVID 19</a></li>
                    <li><a href="#dataRS-content">Rumah Sakit</a></li>
                    <li><a href="#info">Info</a></li>
                    <li><a href="#about">Tentang Kami</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Intro -->
    <div class="main-content">
        <div id="intro-section" class="banner">
            <div class="speech-bubble">
                <img src="{{ url('img/speechbubble.png') }}" alt="">
            </div>
            <img class="girl desktop" src="{{ url('img/Character-vector.png') }}" alt="girl">
            <div class="search-box">
                <input type="text" placeholder="Cari Rumah Sakit" id="inputRS" onkeyup="cariRS()">
            </div>
        </div>

        <div id="dataRS-content">
            <h1>Ruangan Tersedia</h1>
            <h3>Location: Bandung, Jawa Barat</h3>

            <div class="table-wrapper">
                <table id="dataRS">
                    <thead>
                        <tr>
                            <th class="namaRS">Nama Rumah Sakit</td>
                            <th class="kelasVIP">VIP</td>
                            <th class="kelas1">I</td>
                            <th class="kelas2">II</td>
                            <th class="kelas3">III</td>
                            <th class="covid">Khusus COVID</td>  
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($hospitals as $hospital)
                            <tr>
                                <td class="namaRS"><a class="myBtn" href="#/">{{ $hospital->rs }}</a></td>
                                <td class="kelasVIP">{{ $hospital->kelas_vip }}</td>
                                <td class="kelas1">{{ $hospital->kelas_1 }}</td>
                                <td class="kelas2">{{ $hospital->kelas_2 }}</td>
                                <td class="kelas3">{{ $hospital->kelas_3 }}</td>
                                <td class="covid">{{ $hospital->kelas_covid }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <h2>Covid-19</h2>
            <h3>Update : 29 Juli 2020</h3>
        </div>

        @foreach($hospitals as $hospital)
            <!-- Modal -->
            <div class= "myModal modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close">&times;</span>
                        <h2>{{ $hospital->rs }}</h2>
                        <div class="address">
                            <div class="icon-container">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="address-text">
                                <p>{{ $hospital->alamat }}<br>{{ $hospital->daerah }}</p>
                            </div>
                        </div>

                        <br>
                        <p><i class="fas fa-phone"></i>{{ $hospital->telepon }}</p>
                        <hr>
                    </div>
                    <div class="modal-body">
                        <div class="content-box">
                            <h4>VIP</h4>
                            <h1>{{ $hospital->kelas_vip }}</h1>
                        </div>
                        <div class="content-box">
                            <h4>Kelas 1</h4>
                            <h1>{{ $hospital->kelas_1 }}</h1>
                        </div>
                        <div class="content-box">
                            <h4>Kelas 2</h4>
                            <h1>{{ $hospital->kelas_2 }}</h1>
                        </div>
                        <div class="content-box">
                            <h4>Kelas 3</h4>
                            <h1>{{ $hospital->kelas_3 }}</h1>
                        </div>
                        <div class="content-box">
                            <h4>Khusus COVID-19</h4>
                            <h1>{{ $hospital->kelas_covid }}</h1>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="footer-content">
                            <a href="http://herminahospitals.com/hermina-arcamanik/"><h3>Informasi Lebih Lanjut</h3></a>
                        </div>
                    </div>
                </div>

            </div>
        @endforeach
        
        <!-- Covid-19 -->
        <div id="covid19">
            <div class="left-section">
                <div class="centered">
                    <h1><span id="counterc">116922</span></h1>
                </div>
                <div>
                    <h3>Kasus Aktif</h3>
                </div>
            </div>
            <div class="middle-section">
                <div class="centered">
                    <h1><span id="counterd">5388</span></h1>
                </div>
                <div>
                    <h3>Meninggal Dunia</h3>
                </div>
            </div>
            <div class="right-section">
                <div class="centered">
                    <h1><span id="countera">72050</span></h1>
                </div>
                <div>
                    <h3>Sembuh</h3>
                </div>
            </div>
        </div>
        
        <!-- Info -->
        <div id="info">
            <!-- covid -->
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <!-- info -->
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div>

            </div>
        </div>
        <!-- Tentang Kami -->
        <div id="about">
            <div>
                <h1>Tentang Kami</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>
</body>
</html>