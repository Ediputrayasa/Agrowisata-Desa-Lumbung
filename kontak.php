<?php
session_start();
include 'koneksi.php';
?>
<?php
if (isset($_SESSION["pengguna"])) {
	$id = $_SESSION["pengguna"]["idpengguna"];
	$ambilakun = $koneksi->query("SELECT *FROM pengguna WHERE idpengguna='$id'");
	$akun = $ambilakun->fetch_assoc();
	$nama = $akun['nama'];
	$alamat = $akun['alamat'];
} else {
	$nama = "";
	$alamat = "";
}
?>

<!-- Page Header Start -->
<?php 
	include 'header5.php'; 
?>
<!-- Page Header End -->

<!-- Hero Mulai -->
<div class="container-fluid bg-primary py-5 hero-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">Kontak</h1>
            <a href="#" class="h4 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h4 text-white">Kontak</a>
        </div>
    </div>
</div>
<!-- Hero Selesai -->

<!-- Contact Start -->
<div class="container-xxl py-6">
	<div class="container">
		<div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
			<h1 class="display-6 mb-4">Silahkan ajukan pertanyaan atau saran</h1>
		</div>
		<div class="row g-0 justify-content-center">
			<div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
				<form method="post">
					<div class="row g-3">
						<div class="col-md-12">
							<div class="form-floating">
								<input type="text" class="form-control" placeholder="Nama" name="nama" value="<?= $nama ?>" required>
								<label for="name">Nama</label>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-floating">
								<textarea class="form-control w-100" placeholder="Alamat" name="alamat" required><?= $alamat ?></textarea>
								<label for="email">Alamat</label>
							</div>
						</div>
						<div class="col-12">
							<div class="form-floating">
								<textarea class="form-control w-100" placeholder="Komentar" rows="3" name="komentar" required></textarea>
								<label for="subject">Komentar</label>
							</div>
						</div>
						<div class="col-12 text-center">
							<button class="btn btn-primary rounded-pill py-3 px-5" type="submit" name="simpan" value="simpan">Kirim</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-12" style="padding-top:50px">
				<div class="row">
					<?php
					$ambilkontak = $koneksi->query("SELECT *FROM kontak order by idkontak asc");
					while ($kontak = $ambilkontak->fetch_assoc()) {
						?>
						<div class="col-md-12">
							<div class="row mt-5">
								<div class="col-md-1 col-2">
									<img src="foto/user.png" width="50px">
								</div>
								<div class="col-md-11 col-10">
									<div class="card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
										<div class="card-body" style="padding:20px">
											<div class="d-flex justify-content-between">
												<h5 style="margin:0px">
													<?= $kontak['nama'] ?>
												</h5>
												<p class="date"> <?= tanggal(date("Y-m-d", strtotime($kontak['waktu']))) . ' ' . date("H:i", strtotime($kontak['waktu'])); ?> W.I.B</p>
											</div>
											<span style="font-size:9pt"><?= $kontak['alamat'] ?></span>
											<br>
											<br>
											<div class="row align-items-end">
												<div class="col-md-12">
													<p class="comment">
														<?= $kontak['komentar'] ?>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php
								$ambilkontakbalasan = $koneksi->query("SELECT *FROM kontakbalasan where idkontak='$kontak[idkontak]' order by idkontakbalasan asc");
								while ($kontakbalasan = $ambilkontakbalasan->fetch_assoc()) {
									?>
								<div class="row mt-5" style="padding-left:130px">
									<div class="col-md-1 col-2">
										<img src="foto/adm.png" width="150px">
									</div>
									<div class="col-md-11 col-10">
										<div class="card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
											<div class="card-body" style="padding:20px">
												<div class="d-flex justify-content-between">
													<h5 style="margin:0px">
														<?= $kontakbalasan['nama'] ?>
													</h5>
													<p class="date"> <?= tanggal(date("Y-m-d", strtotime($kontakbalasan['waktu']))) . ' ' . date("H:i", strtotime($kontakbalasan['waktu'])); ?> W.I.B</p>
												</div>
												<span style="font-size:9pt"><?= $kontakbalasan['alamat'] ?></span>
												<br>
												<br>
												<div class="row align-items-end">
													<div class="col-md-12">
														<p class="comment">
															<?= $kontakbalasan['komentar'] ?>
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include_once('koneksi.php');
if (isset($_POST['simpan'])) {
	$koneksi->query("INSERT INTO kontak
		(nama,alamat,komentar)
		VALUES('$_POST[nama]','$_POST[alamat]','$_POST[komentar]')") or die(mysqli_error($koneksi));
	echo "<script>alert('Komentar Anda Berhasil Di Kirim');</script>";
	echo "<script>location='kontak.php';</script>";
}
?>
<?php
include 'footer.php';
?>