<?php
session_start();
include 'koneksi.php';
?>
<?php
$idwisata = $_GET["id"];
$ambil = $koneksi->query("SELECT*FROM wisata WHERE idwisata='$idwisata'");
$detail = $ambil->fetch_assoc();
$event = $detail["idevent"];
?>
<?php include 'header2.php'; ?>

<!-- Hero Mulai -->
<div class="container-fluid bg-primary py-5 hero-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">Paket Wisata</h1>
            <a href="#" class="h4 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h4 text-white">Wisata</a>
        </div>
    </div>
</div>
<!-- Hero Selesai -->

	<!-- Detail Wisata Mulai -->
	<div class="container-fluid py-6">
	<div class="container">
		<div class="row g-4">
			<div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
				<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
					<div class="carousel-item active">
						<img src="foto/<?php echo $detail["fotowisata"]; ?>" height="700px" style="width: 100%;object-fit:cover">
					</div>
					<?php
					$no = 1;
					$ambilfoto = $koneksi->query("SELECT * FROM wisatafoto where idwisata='$detail[idwisata]'");
					while ($foto = $ambilfoto->fetch_assoc()) {
						if ($no == '1') {
							// $aktif = "active";
							$aktif = "";
						} else {
							$aktif = "";
						}
						?>
						<div class="carousel-item <?= $aktif ?>">
							<img src="foto/<?php echo $foto["foto"]; ?>" height="700px" style="width: 100%;object-fit:cover">
						</div>
					<?php
						$no++;
					}
					?>
				</div>
			</div>


			<div class="team-title">
				<h2><?php echo $detail["namawisata"] ?></h2>
				<span>Rp. <?php echo number_format($detail["hargawisata"]); ?></span> <br>
				<span><?php echo $detail["tanggal"]; ?></span>
			</div>
			<p><?php echo $detail["deskripsiwisata"]; ?></p>
			<h2>Fasilitas</h2>
			<p>
				<?php echo $detail["fasilitaswisata"]; ?>
			</p>
			<center>
				<h2>Map</h2>
				<br>
				<p>
					<?php echo $detail["alamat"]; ?>
				</p>
			</center>
		</div>
	</div>
</div>
	<!-- Detail Wisata Selesai -->

<?php
include 'footer.php';
?>