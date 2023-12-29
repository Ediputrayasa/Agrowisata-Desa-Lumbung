<?php
session_start();
include 'koneksi.php';
?>
<?php include 'header3.php'; ?>

<!-- Hero Mulai -->
<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">Berita Terkini</h1>
            <a href="#" class="h4 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h4 text-white">Berita</a>
        </div>
    </div>
</div>
<!-- Hero Selesai -->

<div class="container-xxl bg-light my-6 py-6 pt-0">
    <div class="container">

        <div class="row g-4">
        <?php
            function potong($string, $word_limit)
            {
                $words = explode(" ", $string);
                return implode(" ", array_splice($words, 0, $word_limit));
            }
            if (isset($_POST["cari"])) {
                $result = $koneksi->query("SELECT * FROM berita where judul like '%$_POST[keyword]%' order by tanggal desc, id desc");
            } else {
                $result = $koneksi->query("SELECT * FROM berita order by tanggal desc, id desc");
            }
            while ($pecah = $result->fetch_array()) :
                ?>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                        <div class="text-center p-4">
                            <div class="d-inline-block border border-primary rounded-pill px-3 mb-3"><?php echo $pecah["tanggal"] ?></div>
                            <h3 class="mb-3"><?php echo $pecah['judul']; ?></h3>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" style="height: 400px;object-fit:cover" width="100%" src="foto/<?= $pecah['foto'] ?>" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href="beritadetail.php?id=<?php echo $pecah['id']; ?>"><i class="fa fa-eye text-primary"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>