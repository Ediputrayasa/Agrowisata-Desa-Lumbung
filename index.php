<?php
session_start();
include 'koneksi.php';
?>

<?php include 'header.php'; ?>

<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="assets_home/img/bgnav.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .4);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Selamat Datang di</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Agrowisata Desa Lumbung</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Desa Lumbung terletak di Kecamatan Selemadeg Barat, Kabuptaen Tabanan.
								Selain itu, Desa Lumbung memiliki wilayah yang sangat strategis dan hijau dengan wilayah pertanian dan perkebunan yang masih luas.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="assets_home/img/Lumbung view/lumbung122.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .4);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Selamat Datang di</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Agrowisata Desa Lumbung</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Dengan adanya sistem informasi Agrowisata berbasis website ini nantinya dapat membantu
									dalam pengenalan wilayah yang strategis, hingga lokasi salah satu monumen perjuangan yang saat ini masih menjadi daya tarik di Desa Lumbung.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="assets_home/img/Lumbung view/lumbung5.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .4);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Selamat Datang di</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Agrowisata Desa Lumbung</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Potensi alam yang dimiliki Desa Lumbung menjadi sorotan pemerintah desa untuk menjadikan
									daya tarik desa.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Carousel End -->

<!-- Tentang Mulai -->
<div class="container-fluid py-5">
	<div class="container">
		<div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
			<h6 class="section-title-3 bg-white text-center text-primary px-3">Wisata Terpopuler</h6>
			<h1 class="display-6 mb-4">Desa Lumbung</h1>
		</div>
		<div class="row g-5">
		<?php $ambil = $koneksi->query("SELECT *FROM wisata LEFT JOIN event ON wisata.idevent=event.idevent order by idwisata desc limit 3"); ?>
		<?php while ($perwisata = $ambil->fetch_assoc()) { ?>
			<div class="col-lg-4 col-md-6">
				<div class="wisataa-item">
					<div class="position-relative overflow-hidden">
						<img class="img-fluid w-100" src="foto/<?php echo $perwisata['fotowisata'] ?>" alt="">
						<div class="wisataa-overlay w-100 h-100 position-absolute top-50 start-50 translate-middle d-flex align-items-center justify-content-center">
							<div class="d-flex align-items-center justify-content-start">
								<a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1" href="detail.php?id=<?php echo $perwisata['idwisata']; ?>"><i class="fa fa-eye text-white"></i></a>
							</div>
						</div>
					</div>
					<div class="bg-dark border-inner text-center p-4">
						<h4 class="text-uppercase text-primary"><?php echo $perwisata["namawisata"] ?></h4>
						<p class="text-white m-0"></p>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<!-- Tentang Selesai -->

<!-- Product Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
	<div class="container py-5">
		<div class="section-title-2 text-center position-relative pb-2 mb-5 mx-auto" style="max-width: 600px;">
			<h5 class="fw-bold text-primary text-uppercase">// Paket Wisata</h5>
			<h1 class="display-6 mb-4">Desa Lumbung</h1>
		</div>
		<div class="row g-5">
			<?php $ambil = $koneksi->query("SELECT *FROM wisata LEFT JOIN event ON wisata.idevent=event.idevent order by idwisata desc limit 3"); ?>
			<?php while ($perwisata = $ambil->fetch_assoc()) { ?>
				<div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
					<div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
						<div class="product-img position-relative overflow-hidden">
							<img class="img-fluid" style="height: 400px;object-fit:cover" width="100%" src="foto/<?php echo $perwisata['fotowisata'] ?>" alt="">
							<span  class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-5 px-4"><?php echo $perwisata["namawisata"] ?></span>
							<div class="product-overlay">
								<a class="btn btn-lg-square btn-outline-light rounded-circle" href="detail.php?id=<?php echo $perwisata['idwisata']; ?>"><i class="fa fa-eye text-primary"></i></a>
							</div>
						</div>
						<div class="p-4">
							<div class="d-flex mb-3">
								<small class="me-3"><i class="far fa-calendar-alt text-primary me-2"></i><?php echo $perwisata["tanggal"] ?></small>
							</div>
							<h4 class="mb-3">Rp <?php echo number_format($perwisata['hargawisata']) ?></h4>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
<!-- Product End -->

<!-- Berita Mulai -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
	<div class="container py-5">
		<div class="section-title-2 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
			<h5 class="fw-bold text-primary text-uppercase">// Berita Terbaru</h5>
			<h1 class="display-6 mb-4">Agrowisata Desa Lumbung</h1>
		</div>
		<div class="row g-5">
			<?php
			$result = $koneksi->query("SELECT * FROM berita order by id desc limit 3");
			while ($data = $result->fetch_array()) :
				?>
			<div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
				<div class="berita-item bg-primary rounded overflow-hidden">
					<div class="berita-img position-relative overflow-hidden">
						<img class="img-fluid w-100" src="foto/<?= $data['foto'] ?>" alt="">
						<div class="berita-view">
							<a class="btn btn-lg btn-primary btn-lg-square rounded" href="beritadetail.php?id=<?php echo $data['id']; ?>"><i class="fa fa-eye text-white"></i></a>
						</div>
					</div>
					<div class="text-center py-4">
						<h4 class="text-light mb-4"><?php echo $data['judul']; ?></h4>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>			
</div>
<!-- Berita Selesai -->

<?php
include 'footer.php';
?>