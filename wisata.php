<?php
session_start();
include 'koneksi.php';
if (!empty($_POST['keyword'])) {
    $keyword = $_POST['keyword'];
} else {
    $keyword = "";
}
?>

<?php include 'header2.php';

if (!empty($_POST['keyword'])) {
    $keyword = $_POST['keyword'];
    $query = "SELECT * FROM wisata 
              LEFT JOIN event ON wisata.idevent=event.idevent 
              WHERE namawisata LIKE '%$keyword%' 
              OR hargawisata LIKE '%$keyword%' 
              OR namaevent LIKE '%$keyword%' 
              ORDER BY idwisata DESC";
    $result = $koneksi->query($query);
} else {
    $keyword = "";
    $result = $koneksi->query("SELECT * FROM wisata LEFT JOIN event ON wisata.idevent=event.idevent ORDER BY idwisata DESC");
}
?>

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

<!-- Search Box Mulai -->
<section id="ProjectsWisata">
    <div class="container3">
        
        <!-- Menu Links -->
        <div class="items-links-wisata">
            <span class="item-link-wisata wisataa-activee" data-name="semua">Semua</span>
            <span class="item-link-wisata" data-name="pertanian">Pertanian</span>
            <span class="item-link-wisata" data-name="perkebunan">Perkebunan</span>
            <span class="item-link-wisata" data-name="persawahan">Persawahan</span>
        </div>

        <!-- Filter Image -->
        <div class="galleri-wisataa">
            <div class="projectss-img" data-name="pertaninan">
                <img src="assets_home/img/Lumbung view 2/20230816_105129.jpg" alt="">
                <div class="soflight_images">
                    <h4>Pertanian Desa Lumbung</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, inventore.</p>
                    <div class="action-ariaa">
                        <a href="" class="ttn ttn-light"><i class="fa fa-eye text-white"></i>Telusuri</a>
                    </div>
                </div>
            </div>
            <div class="projectss-img" data-name="persawahan">
                <img src="assets_home/img/Lumbung view 2/20230816_105129.jpg" alt="">
                <div class="soflight_images">
                    <h4>Persawahan Desa Lumbung</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, inventore.</p>
                    <div class="action-ariaa">
                        <a href="" class="ttn ttn-light"><i class="fa fa-eye text-white"></i>Telusuri</a>
                    </div>
                </div>
            </div>
            <div class="projectss-img" data-name="perkebunan">
                <img src="assets_home/img/Lumbung view 2/20230816_105133.jpg" alt="">
                <div class="soflight_images">
                    <h4>Perkebunan Desa Lumbung</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, inventore.</p>
                    <div class="action-ariaa">
                        <a href="" class="ttn ttn-light"><i class="fa fa-eye text-white"></i>Telusuri</a>
                    </div>
                </div>
            </div>
            <div class="projectss-img" data-name="pertanian">
                <img src="assets_home/img/Lumbung view 2/20230816_105126.jpg" alt="">
                <div class="soflight_images">
                    <h4>Pertanian Desa Lumbung</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, inventore.</p>
                    <div class="action-ariaa">
                        <a href="" class="ttn ttn-light"><i class="fa fa-eye text-white"></i>Telusuri</a>
                    </div>
                </div>
            </div>
            <div class="projectss-img" data-name="perkebunan">
                <img src="assets_home/img/Lumbung view 2/20230902_082324.jpg" alt="">
                <div class="soflight_images">
                    <h4>Perkebunan Desa Lumbung</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, inventore.</p>
                    <div class="action-ariaa">
                        <a href="" class="ttn ttn-light"><i class="fa fa-eye text-white"></i>Telusuri</a>
                    </div>
                </div>
            </div>
            <div class="projectss-img" data-name="persawahan">
                <img src="assets_home/img/Lumbung view 2/20230902_082318.jpg" alt="">
                <div class="soflight_images">
                    <h4>Persawahan Desa Lumbung</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, inventore.</p>
                    <div class="action-ariaa">
                        <a href="" class="ttn ttn-light"><i class="fa fa-eye text-white"></i>Telusuri</a>
                    </div>
                </div>
            </div>
            <div class="projectss-img" data-name="persawahan">
                <img src="assets_home/img/Lumbung view 2/20230816_105133.jpg" alt="">
                <div class="soflight_images">
                    <h4>Persawahan Desa Lumbung</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, inventore.</p>
                    <div class="action-ariaa">
                        <a href="" class="ttn ttn-light"><i class="fa fa-eye text-white"></i>Telusuri</a>
                    </div>
                </div>
            </div>
            <div class="projectss-img" data-name="pertanian">
                <img src="assets_home/img/Lumbung view 2/20230816_105129.jpg" alt="">
                <div class="soflight_images">
                    <h4>Pertanian Desa Lumbung</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, inventore.</p>
                    <div class="action-ariaa">
                        <a href="" class="ttn ttn-light"><i class="fa fa-eye text-white"></i>Telusuri</a>
                    </div>
                </div>
            </div>
            <div class="projectss-img" data-name="perkebunan">
                <img src="assets_home/img/Lumbung view 2/20230816_104924.jpg" alt="">
                <div class="soflight_images">
                    <h4>Perkebunan Desa Lumbung</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, inventore.</p>
                    <div class="action-ariaa">
                        <a href="" class="ttn ttn-light"><i class="fa fa-eye text-white"></i>Telusuri</a>
                    </div>
                </div>
            </div>
            <div class="projectss-img" data-name="pertanian">
                <img src="assets_home/img/Lumbung view 2/20230816_105122.jpg" alt="">
                <div class="soflight_images">
                    <h4>Pertanian Desa Lumbung</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, inventore.</p>
                    <div class="action-ariaa">
                        <a href="" class="ttn ttn-light"><i class="fa fa-eye text-white"></i>Telusuri</a>
                    </div>
                </div>
            </div>
            <div class="projectss-img" data-name="perkebunan">
                <img src="assets_home/img/Lumbung view/lumbung6.jpg" alt="">
                <div class="soflight_images">
                    <h4>Perkebunan Desa Lumbung</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, inventore.</p>
                    <div class="action-ariaa">
                        <a href="" class="ttn ttn-light"><i class="fa fa-eye text-white"></i>Telusuri</a>
                    </div>
                </div>
            </div>
            <div class="projectss-img" data-name="pertanian">
                <img src="assets_home/img/Lumbung view/lumbung5.jpg" alt="">
                <div class="soflight_images">
                    <h4>Persawahan Desa Lumbung</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, inventore.</p>
                    <div class="action-ariaa">
                        <a href="" class="ttn ttn-light"><i class="fa fa-eye text-white"></i>Telusuri</a>
                    </div>
                </div>
            </div>
            <div class="projectss-img" data-name="perkebunan">
                <img src="assets_home/img/Lumbung view/lumbung4.jpg" alt="">
                <div class="soflight_images">
                    <h4>Perkebunan Desa Lumbung</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, inventore.</p>
                    <div class="action-ariaa">
                        <a href="" class="ttn ttn-light"><i class="fa fa-eye text-white"></i>Telusuri</a>
                    </div>
                </div>
            </div>
            <div class="projectss-img" data-name="pertanian">
                <img src="assets_home/img/Lumbung view/lumbung3.jpg" alt="">
                <div class="soflight_images">
                    <h4>Pertanian Desa Lumbung</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, inventore.</p>
                    <div class="action-ariaa">
                        <a href="" class="ttn ttn-light"><i class="fa fa-eye text-white"></i>Telusuri</a>
                    </div>
                </div>
            </div>
            <div class="projectss-img" data-name="persawahan">
                <img src="assets_home/img/Lumbung view/lumbung2.jpg" alt="">
                <div class="soflight_images">
                    <h4>Persawahan Desa Lumbung</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, inventore.</p>
                    <div class="action-ariaa">
                        <a href="" class="ttn ttn-light"><i class="fa fa-eye text-primary"></i>Telusuri</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
							
<!-- Search Box Selesai -->

<!-- Paket Wisata Mulai -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <?php $ambil = $koneksi->query("SELECT *FROM wisata LEFT JOIN event ON wisata.idevent=event.idevent WHERE namawisata LIKE '%$keyword%' OR namawisata LIKE '%$keyword%' OR hargawisata LIKE '%$keyword%' OR namaevent LIKE '%$keyword%' order by idwisata desc"); ?>
            <?php while ($wisata = $ambil->fetch_assoc()) { ?>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="wisata-item bg-light rounded overflow-hidden">
                        <div class="wisata-img position-relative rounded-top overflow-hidden" style="z-index: 1;">
                            <img  class="img-fluid rounded-top w-100" src="foto/<?php echo $wisata['fotowisata'] ?>" alt="">
                            <div class="wisata-produk">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href="detail.php?id=<?php echo $wisata['idwisata']; ?>"><i class="fa fa-eye text-primary"></i></a>
                            <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                <a  class="d-inline-block border border-primary rounded-pill px-3 mb-3" href="#"><?php echo $wisata["tanggal"] ?> <i class="far fa-calendar-alt fw-normal"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="wisata-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                            <h4 class="mb-2"><?php echo $wisata["namawisata"] ?></h4>
                            <span class="text-primary mb-0">Rp <?php echo number_format($wisata['hargawisata']) ?></span>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if ($result->num_rows == 0) { ?>
                <img style="height: 400px;object-fit:contain" src="foto/imgg.jpg">
                <div class="col-md-12 text-center">
                    <h2>Tidak ada hasil yang ditemukan.</h2>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Paket Wisata Selesai -->

<?php
include 'footer.php';
?>