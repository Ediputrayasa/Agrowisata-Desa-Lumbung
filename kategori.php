<?php
session_start();
include 'koneksi.php';
if (!empty($_POST['keyword'])) {
	$keyword = $_POST['keyword'];
} else {
	$keyword = "";
}
?>

<?php include 'header6.php';
$event = $_GET["id"];


$semuadata = array();
$ambil = $koneksi->query("SELECT*FROM wisata WHERE (namawisata LIKE '%$keyword%' OR namawisata LIKE '%$keyword%' OR hargawisata LIKE '%$keyword%') and idevent = $event");
while ($pecah = $ambil->fetch_assoc()) {
	$semuadata[] = $pecah;
}
?>
<?php
$dataevent = array();
$ambil = $koneksi->query("SELECT * FROM event");
while ($tiap = $ambil->fetch_assoc()) {
	$dataevent[] = $tiap;
}
?>
<?php $am = $koneksi->query("SELECT * FROM event where idevent='$event'");
$pe = $am->fetch_assoc()
?>
<!-- Hero Mulai -->
<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">Kategori</h1>
            <a href="#" class="h4 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h4 text-white">Kategori</a>
        </div>
    </div>
</div>
<!-- Hero Selesai -->

<div class="container">
	<div class="row mb-5">
		<div class="col-md-12">
			<form method="post">
				<div class="row">
					<div class="col-md-9  my-auto">
						<div class="form-group">
							<input type="text" name="keyword" value="<?= $keyword ?>" placeholder="Masukkan kata pencarian" class="form-control">
						</div>
					</div>
					<div class="col-md-3">
						<button type="submit" name="cari" value="cari" class="btn btn-primary btn-block" style="padding:14px">Cari</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="container-xxl bg-light my-6 py-6 pt-0">
	<div class="container">
		<div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
			<h1 class="display-6 mb-4">Kategori : <?php echo $pe["namaevent"] ?></h1>
			<?php if (empty($semuadata)) : ?>
				<div class="alert alert-danger">event <strong><?php echo  $pe["namaevent"] ?></strong> Kosong</div>
			<?php endif ?>
		</div>
		<div class="row g-4">
			<?php foreach ($semuadata as $key => $wisata) : ?>
				<div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
					<div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
						<div class="text-center p-4">
							<div class="d-inline-block border border-primary rounded-pill px-3 mb-3"><?php echo $wisata["tanggal"] ?></div>
							<h3 class="mb-3"><?php echo $wisata["namawisata"] ?></h3>
							<p class="mb-3"><?= $pe["namaevent"] ?></p>
							<span>Rp <?php echo number_format($wisata['hargawisata']) ?></span>
						</div>
						<div class="position-relative mt-auto">
							<img class="img-fluid" style="height: 400px;object-fit:cover" width="100%" src="foto/<?php echo $wisata['fotowisata'] ?>" alt="">
							<div class="product-overlay">
								<a class="btn btn-lg-square btn-outline-light rounded-circle" href="detail.php?id=<?php echo $wisata['idwisata']; ?>"><i class="fa fa-eye text-primary"></i></a>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</div>
<?php
include 'footer.php';
?>