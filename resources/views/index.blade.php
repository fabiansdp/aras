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
                            <a href="{{ $hospital->website }}"><h3>Informasi Lebih Lanjut</h3></a>
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
            <div class="description">
                <p><span>COVID-19</span> atau Corona Virus Disease 2019 adalah penyakit menular yang disebabkan oleh virus golongan coronavirus, yaitu SARS-CoV-2. Virus ini secara umum menginfeksi sistem pernapasan, mulai dari gejala ringan seperti flu dan batuk, hingga infeksi berat, seperti pneumonia. 
                <br><br>Kasus pertama COVID-19 ditemukan di Wuhan, Tiongkok, sekitar akhir 2019. Wabah virus ini menyebar luas secara masif dan ditetapkan sebagai pandemi oleh WHO pada Maret 2020. Kasus pertama di Indonesia diumumkan pada 2 Maret 2020, dan saat ini telah menyebar ke 34 provinsi di Indonesia.
                <br><br>COVID-19 diketahui menular dari manusia ke manusia melalui droplet (percikan air liur). Namun, pada Juli 2020, WHO mengumumkan bahwa COVID-19 dapat menyebar secara airborne (melalui udara). Gejala infeksi COVID-19 dapat menyerupai seperti flu, yaitu batuk, pilek, dan demam. Gejala COVID-19 ini dapat muncul dalam waktu 2 hari sampai 2 minggu setelah tertular. Namun, pada beberapa kasus, ditemukan pasien yang dinyatakan positif COVID-19, tetapi tidak memiliki gejala sama sekali.
                <br><br>Oleh karena itu, penting bagi kita untuk selalu menaati protokol kesehatan yang telah ditetapkan seperti, rutin mencuci tangan, menghindari kerumunan dan menjaga jarak, serta menggunakan masker.</p>
            </div>
            <!-- info -->
            <div class="faq">
                <h1> FAQ </h1>

                <div class="question">
                    <h4>BAGAIMANA PROSES PENYEBARAN COVID-19?</h4>
                    <p>Virus ini menyebar antar manusia ke manusia melalui tetesan cairan dari hidung dan mulut saat orang yang terinfeksi COVID-19 sedang batuk atau membuang nafas.</p>
                </div>

                <div class="question">
                    <h4>APA SAJA GEJALA YANG DIALAMI PASIEN COVID-19?</h4>
                    <p>Gejala umum COVID-19 mirip seperti pilek dan flu biasa, sehingga membuat deteksi penyakit ini menjadi lebih sulit. Biasanya, pasien mengalami demam, batuk, dan napas pendek.</p>
                </div>

                <div class="question">
                    <h4>APA YANG BISA SAYA LAKUKAN UNTUK MELINDUNGI DIRI SAYA DARI COVID-19? </h4>
                    <ol type="1">
                        <li>Perbanyak cuci tangan menggunakan air dan sabun paling tidak selama 20 detik.</li>
                        <li>Hindari menyentuh wajah, terutama mata, hidung, dan mulut.</li>
                        <li>Tinggal di rumah jika memungkinkan.</li>
                        <li>Hindari kontak dengan orang sakit.</li>
                        <li>Jauhi keramaian.</li>
                        <li>Memakai alat perlindungan, seperti masker, faceshield.</li>
                    </ol>
                </div>
                

                <div class="question">
                    <h4> BISAKAH PASIEN COVID-19 SEMBUH?</h4>
                    <p>Belum ada pengobatan anti-virus untuk menyembuhkan mereka yang terjangkit COVID-19.
                    Para pasien perlu mendapatkan perawatan medis ekstra untuk meringankan dan menghilangkan gejalanya.
                    </p>
                </div>

                <div class="question">
                    <h4> SIAPA YANG BERISIKO TERINFEKSI?</h4>
                    <p>Orang-orang yang hidup di dan melakukan perjalanan ke wilayah-wilayah di mana virus ini telah positif menyebar berpotensi terjangkit COVID-19.
                    Pekerja medis yang merawat pasien positif COVID-19 adalah orang-orang yang paling berpotensi terinfeksi virus ini, sehingga mereka membutuhkan prosedur pencegahan secara ekstra.
                    </p>
                </div>

                <div class="question">
                    <h4> BAGAIMANA STATUS PENYEBARAN COVID DI INDONESIA?</h4>
                    <p>Indonesia telah mencatat ribuan kasus positif COVID-19. Untuk perkembangan terbaru, silakan kunjungi situs www.covid19.go.id dan www.kemkes.go.id.
                    </p>
                </div>
            </div>
        </div>
        <!-- Tentang Kami -->
        <div id="about">
            <div>
                <h1>Tentang Kami</h1>
                <p>Aras.id merupakan platform penyedia informasi Covid-19 yang didirikan pada tahun 2020 oleh mahasiswa ITB sebagai proyek Milestone SPARTA 2020. Web kami fokus dalam memberikan informasi terkait dengan ketersediaan kamar pada rumah sakit di Indonesia.
                Hal ini dilatarbelakangi oleh banyaknya orang yang membuang-buang waktu untuk pergi dari satu rumah sakit ke rumah sakit lainnya dikarenakan penuhnya kapasitas rumah sakit tersebut. Oleh karena itu, dengan adanya Aras.id, orang-orang dapat terlebih dahulu mengecek kamar kosong pada daerah sekitar mereka tanpa perlu mendatangi rumah sakitnya terlebih dahulu. 
                <br><br>Aras.id memberikan informasi terperinci tentang kategori kamar yang tersedia sehingga pengguna dapat mencari rumah sakit yang sesuai keinginannya. Selain itu, data pada Aras.id di-update secara real time sehingga pengguna tidak perlu khawatir jika data tidak sesuai dengan kondisi sebenarnya di rumah sakit.</p>
            </div>
        </div>
    </div>
</body>
</html>