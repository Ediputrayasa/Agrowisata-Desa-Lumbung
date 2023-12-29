<?php
include 'koneksi.php';
$dataevent = array();
$ambil = $koneksi->query("SELECT * FROM event");
while ($tiap = $ambil->fetch_assoc()) {
    $dataevent[] = $tiap;
}
function tanggal($tgl)
{
    $tanggal = substr($tgl, 8, 2);
    $bulan = getBulan(substr($tgl, 5, 2));
    $tahun = substr($tgl, 0, 4);
    return $tanggal . ' ' . $bulan . ' ' . $tahun;
}
function getBulan($bln)
{
    switch ($bln) {
        case 1:
          return "Januari";
          break;
        case 2:
          return "Februari";
          break;
        case 3:
          return "Maret";
          break;
        case 4:
          return "April";
          break;
        case 5:
          return "Mei";
          break;
        case 6:
          return "Juni";
          break;
        case 7:
          return "Juli";
          break;
        case 8:
          return "Agustus";
          break;
        case 9:
          return "September";
          break;
        case 10:
          return "Oktober";
          break;
        case 11:
          return "November";
          break;
        case 12:
          return "Desember";
          break;
      }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"> 
    <title>Wisata Desa Lumbung</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="Desa Lumbung" name="keywords">
    <meta content="Desa Lumbung" name="description">

    <script src="https://kit.fontawesome.com/4592f70558.js" crossorigin="anonymous"></script>

    <!-- Favicon -->
    <link href="assets_home/img/icon.webp" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Iconscout Link for Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets_home/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets_home/lib/animate/animate.min.css" rel="stylesheet" >
    <link href="assets_home/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" >
    <link href="assets_home/lib/twentytwenty/twentytwenty.css" rel="stylesheet" >

    <!-- Lembar Gaya Bootstrap yang Disesuaikan -->
    <link href="assets_home/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Web Fonts 2 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet"/>

    <!-- Libraries Stylesheet -->
    <link href="assets_home/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets_home/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets_home/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="assets_home/lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

     <!-- REMIXIcons -->
     <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">

     <!-- Iconscout Link for Icons -->
     <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

     <!-- Google Fonts Link For Icons -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <!-- Lembar Gaya Boostrap yang Disesuaikan -->
    <link href="assets_home/css/bootstrap.min.css" rel="stylesheet">

    <!-- Stylesheet -->
    <link href="assets_home/css/style.css" rel="stylesheet">
    <link href="assets_home/css/skins/color-1.css" rel="stylesheet">

    <!-- Google Fonts Link For Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    
    <!-- Style Switcher -->
    <link rel="stylesheet" href="assets_home/css/skins/color-1.css" class="alternate-style" title="color-1" disabled>
    <link rel="stylesheet" href="assets_home/css/skins/color-2.css" class="alternate-style" title="color-2" disabled>
    <link rel="stylesheet" href="assets_home/css/skins/color-3.css" class="alternate-style" title="color-3" disabled>
    <link rel="stylesheet" href="assets_home/css/skins/color-4.css" class="alternate-style" title="color-4" disabled>
    <link rel="stylesheet" href="assets_home/css/skins/color-5.css" class="alternate-style" title="color-5" disabled>
    <link rel="stylesheet" href="assets_home/css/style.switcher.css">

    <!-- icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets_home/img/icon.webp">

</head>

<body>
    <!-- Memuat Mulai -->
    <div class="loading" data-loading>
        <div class="circle"></div>
        <p class="text">Desa Lumbung</p>
    </div>
    <!-- Memuat Selesai -->

    <!-- WA BUTTON MULAI -->
    <div class="WA_Chat_Widget" data-position="bottom-left">
        <div class="WA_ChatBox">
            <div class="WA_ChatBox_Header">
                <div class="avatarBox">
                    <img src="./assets_home/img/Lumbung view/lumbung3.jpg" alt="Chat Avatar">
                </div>
                <div class="infoBox">
                    <h4 class="name">Kadek Wahyu</h4>
                    <span class="answer_time">Typically replies within a day</span>
                </div>
                <button class="WA_Close" onclick="hideChatbox()"><svg xmlns="http://www.w3.org/2000/svg" height="1em"
                    viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path
                        d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 175c-9.4 9.4-9.4 24.6 0 33.9l47 47-47 47c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l47-47 47 47c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-47-47 47-47c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-47 47-47-47c-9.4-9.4-24.6-9.4-33.9 0z" />
                </svg></button>
            </div>
            <div class="WA_ChatBox_Body">
                <h4 class="username">Rinjani Ayu</h4>
                <div class="message_content">
                    <p>Hey, Apa kabar, Ada yang bisa saya lakukan untuk Anda?</p>
                </div>
            </div>
            <div class="WA_ChatBox_Footer">
                <a class="btn btn-whatsapp" href="http://wa.me/087848243503" target="_blank">Start Chat</a>
            </div>
        </div>
        <div class="WA_FloatingButton" onclick="toggleChatbox()">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#4FCE5D" viewBox="0 0 90 90">
                <path
                    d="M90 43.841c0 24.213-19.779 43.841-44.182 43.841a44.256 44.256 0 01-21.357-5.455L0 90l7.975-23.522a43.38 43.38 0 01-6.34-22.637C1.635 19.628 21.416 0 45.818 0 70.223 0 90 19.628 90 43.841zM45.818 6.982c-20.484 0-37.146 16.535-37.146 36.859 0 8.065 2.629 15.534 7.076 21.61L11.107 79.14l14.275-4.537A37.122 37.122 0 0045.819 80.7c20.481 0 37.146-16.533 37.146-36.857S66.301 6.982 45.818 6.982zm22.311 46.956c-.273-.447-.994-.717-2.076-1.254-1.084-.537-6.41-3.138-7.4-3.495-.993-.358-1.717-.538-2.438.537-.721 1.076-2.797 3.495-3.43 4.212-.632.719-1.263.809-2.347.271-1.082-.537-4.571-1.673-8.708-5.333-3.219-2.848-5.393-6.364-6.025-7.441-.631-1.075-.066-1.656.475-2.191.488-.482 1.084-1.255 1.625-1.882.543-.628.723-1.075 1.082-1.793.363-.717.182-1.344-.09-1.883-.27-.537-2.438-5.825-3.34-7.977-.902-2.15-1.803-1.792-2.436-1.792-.631 0-1.354-.09-2.076-.09s-1.896.269-2.889 1.344c-.992 1.076-3.789 3.676-3.789 8.963 0 5.288 3.879 10.397 4.422 11.113.541.716 7.49 11.92 18.5 16.223C58.2 65.771 58.2 64.336 60.186 64.156c1.984-.179 6.406-2.599 7.312-5.107.9-2.512.9-4.663.631-5.111z">
                </path>
            </svg>
        </div>
    </div>
    <script>
        let isChatboxVisible = "false";
        const chatbox = document.querySelector(".WA_Chat_Widget .WA_ChatBox");
        function hideChatbox(){
            isChatboxVisible = false;
            chatbox.style.display = "none";
        }

        function toggleChatbox(){
            isChatboxVisible = !isChatboxVisible;
            chatbox.style.display = isChatboxVisible ? "block" : "none";
        }


    </script>
    <!-- WA BUTTON SELESAI -->
    
        <!-- Navbar Mulai -->
                <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0 wow fadeIn" data-wow-delay="0.1s">
                    <a href="index.php" class="navbar-brand p-0" id="logo">
                        <img src="assets_home/img/LogoTabanan.png" alt="logo">
                        <h2 class="m-0 text-primary">Desa Lumbung</h2>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto py-0">
                            <li><a href="index.php" class="nav-item nav-link">Home</a></li>
                            <li><a href="wisata.php" class="nav-item nav-link">Wisata</a></li>
                            <li><a href="berita.php" class="nav-item nav-link">Berita</a></li>
                            <li><a href="profil.php" class="nav-item nav-link">Profil</a></li>
                            <li><a href="kontak.php" class="nav-item nav-link">Kontak</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Kategori
                                </a>
                                <ul class="dropdown-menu m-0" aria-labelledby="navbarDropdown">
                                    <?php foreach ($dataevent as $key => $value) : ?>
                                        <li><a href=" kategori.php?id=<?php echo $value["idevent"] ?>" class="dropdown-item"><?php echo $value["namaevent"] ?></a></li>
                                    <?php endforeach ?>
                                    </ul>
                                </li>
                            <button type="button" class="login-btn"><i class="fa fa-user-alt"></i> Login</button>
                        </div>
                    </div>
                </nav>
        <!-- Navbar Selesai -->

    <!-- Login Mulai -->
    <div class="blur-bg-overlay">
        <div class="form-popup">
            <span class="close-btn material-symbols-rounded">close</span>
            <div class="form-box login">
                <div class="form-details">
                    <!-- <h2>Selamat Datang</h2>
                    <p> Silakan masuk menggunakan informasi pribadi Anda untuk tetap terhubung dengan kami.</p> -->
                </div>

                <div class="form-content">
                    <h2 class=fw-bold>LOGIN</h2>
                    <form method="post">
                        <div class="input-field">
                            <input type="email" name="email" class="form-control">
                            <label>Email</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="form-control" name=password>
                            <label>Kata Sandi</label>
                        </div>
                        <button type="submit" name="simpan">Masuk</button>
                    </form>
                    
                    <!-- LOGIN PHP Mulai -->
                    <?php
                if (isset($_POST["simpan"])) {
                  $email = $_POST["email"];
                  $password = $_POST["password"];
                  $ambil = $koneksi->query("SELECT * FROM pengguna
                WHERE email='$email' AND password='$password' limit 1");
                  $akunyangcocok = $ambil->num_rows;
                  if ($akunyangcocok == 1) {
                    $akun = $ambil->fetch_assoc();
                    if ($akun['level'] == "Pelanggan") {
                      $_SESSION["pengguna"] = $akun;
                      echo "<script> alert('Anda sukses login');</script>";
                      echo "<script> location ='index.php';</script>";
                    } elseif ($akun['level'] == "Admin") {
                      $_SESSION['admin'] = $akun;
                      echo "<script> alert('Anda sukses login');</script>";
                      echo "<script> location ='admin/index.php';</script>";
                    } elseif ($akun['level'] == "Kepala Resort") {
                      $_SESSION['admin'] = $akun;
                      echo "<script> alert('Anda sukses login');</script>";
                      echo "<script> location ='admin/index.php';</script>";
                    } else {
                      echo "<script> alert('Anda gagal login, Cek akun anda');</script>";
                      echo "<script> location ='index.php';</script>";
                    }
                  }
                }
               ?>
            <!-- LOGIN PHP Selesai -->
                </div>
            </div>
        </div>
    </div>
    <!-- Login Selesai -->


    <!-- Style Switcher Mulai -->
    <!-- <div class="style-switcher">
        <div class="style-switcher-toggler s-icon">
            <i class="fas fa-cog fa-spin"></i>
        </div>
        <div class="day-night s-icon">
            <i class="fas"></i>
        </div>
        <div class=""></div>
        <h4>Warna Tema</h4>
        <div class="colors">
            <span class="color-1" onclick="setActiveStyle('color-1')"></span>
            <span class="color-2" onclick="setActiveStyle('color-2')"></span>
            <span class="color-3" onclick="setActiveStyle('color-3')"></span>
            <span class="color-4" onclick="setActiveStyle('color-4')"></span>
            <span class="color-5" onclick="setActiveStyle('color-5')"></span>
        </div>
    </div> -->
    <!-- Style Switcher Selesai -->