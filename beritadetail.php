<?php include 'header3.php'; ?>
<!-- Header Start -->
<div class="container-fluid bg-primary py-5 hero-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">Kontak</h1>
            <a href="#" class="h4 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h4 text-white">Berita Detail</a>
        </div>
    </div>
</div>
<!-- Header End -->


<div class="container-xxl py-6">
	<div class="container">
		<div class="row g-4">
			<?php
			$result = $koneksi->query("SELECT * FROM berita where id = '$_GET[id]' limit 1");
			while ($pecah = $result->fetch_array()) :
				?>
				<div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
					<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
						<div class="carousel-item active">
							<img src="foto/<?= $pecah['foto'] ?>" height="700px" style="width: 100%;object-fit:cover">
						</div>
					</div>
				</div>
				<div class="team-title">
					<h2><?php echo $pecah["judul"] ?></h2>
					<span><?php echo tanggal(date($pecah['tanggal'])); ?></span>
				</div>
				<p><?= $pecah['isi'] ?></p>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php
include 'footer.php';
?>