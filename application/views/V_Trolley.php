<?php
defined('BASEPATH') or exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HEJOTEKNO - PT Agro Tekno Indo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= base_url('img/logoweb.png') ?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('lib/animate/animate.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') ?>" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('css/style.css'); ?>" rel="stylesheet">
</head>

<body>

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <img src="<?= base_url('img/logo.png') ?>" alt="Logo" style="max-height: 30px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="<?= site_url('C_Hejotekno/index2'); ?>" class="nav-item nav-link">Home</a>
                    <a href="<?= site_url('C_Hejotekno/linkabout2'); ?>" class="nav-item nav-link">About Us</a>
                    <a href="<?= site_url('C_Hejotekno/linkproduct2'); ?>" class="nav-item nav-link">Product</a>
                    <a href="<?= site_url('C_Hejotekno/linkprogram2'); ?>" class="nav-item nav-link">Program</a>
                    <a href="<?= site_url('C_Hejotekno/linktrolley'); ?>" class="nav-item nav-link">Trolley</a>
                    <a href="<?= site_url('C_Hejotekno/linkhistory'); ?>" class="nav-item nav-link">History Order</a>
                    <a href="<?= site_url('C_Hejotekno/linkcontact2'); ?>" class="nav-item nav-link">Contact</a>
                    <a href="<?= site_url('C_Hejotekno/linkprofil'); ?>" class="nav-item nav-link">Profile</a>
                </div>
                <a href="<?= site_url('C_Hejotekno/linksignout'); ?>" class="btn btn-light rounded-pill py-2 px-4">Sign Out</a>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 mb-5">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Trolley</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Trolley</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Trolley Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Your Trolley</h6>
                <h1 class="mb-5">Review Your Trolley</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-8">
                <!-- <input type="hidden" name="id_user" value="<?php echo $user->id_user; ?>"> -->
                    <!-- Trolley Items Start -->
                    <?php foreach ($produk as $item): ?>
                        <div class="trolley-item p-4 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <img class="img-fluid" src="<?= base_url('img/' . $item->foto_produk) ?>" alt="Package">
                                </div>
                                <div class="col-md-4">
                                    <h5><?= $item->nama_produk ?></h5>
                                    <p class="mb-0"><?= $item->deskripsi_produk ?></p>
                                </div>
                                <div class="col-md-3">
                                    <p class="mb-0 price">Rp <?= number_format($item->harga_produk, 0, ',', '.') ?></p>
                                    <p class="mb-0 product-subtotal">Rp 0,00</p> <!-- New element for product subtotal -->
                                </div>
                                <div class="col-md-3 text-end">
                                    <div class="input-group">
                                        <button class="btn btn-outline-secondary btn-decrease">-</button>
                                        <input type="text" class="form-control text-center quantity" value="0">
                                        <button class="btn btn-outline-secondary btn-increase">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <!-- Trolley Items End -->
                </div>
                <div class="col-lg-4">
    <div class="bg-light p-4 rounded wow fadeInUp" data-wow-delay="0.3s">
        <h5 class="section-title bg-white text-center text-primary px-3">Order Summary</h5>
        <hr>
        <p>Total: <span id="total-order">Rp 0,00</span></p>
            <form id="order-form" action="<?php echo site_url('C_Hejotekno/action_order'); ?>" method="post">
                <?php foreach ($produk as $item): ?>
                    <input type="hidden" name="id_produk[]" value="<?= $item->id_produk ?>" class="product-id">
                    <input type="hidden" name="quantity_order[]" class="quantity-order" value="0">
                    <input type="hidden" name="subtotal_order[]" class="subtotal-order" value="0">
                <?php endforeach; ?>
                <input type="hidden" name="total_order" id="hidden-total-order" value="0">
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary rounded-pill py-2 px-4">Proceed to Checkout</button>
                </div>
            </form>

    </div>
</div>

            </div>
        </div>
    </div>
    <!-- Trolley End -->
    
    
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Company</h4>
                    <a class="btn btn-link" href="<?php echo site_url('C_Hejotekno/linkabout'); ?>">About Us</a>
                    <a class="btn btn-link" href="<?php echo site_url('C_Hejotekno/linkproduct'); ?>">Product</a>
                    <a class="btn btn-link" href="<?php echo site_url('C_Hejotekno/linkprogram'); ?>">Program</a>
                    <a class="btn btn-link" href="<?php echo site_url('C_Hejotekno/linkcontact'); ?>">Contact</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Kapur, Cibuntu, Kec. Bandung Kulon,
                        Kota Bandung, Jawa Barat 40212</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>002 9129102320 || 000 2324 39493</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@hejotech.co.id</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social"
                            href="https://www.instagram.com/hejotekno.indonesia/"><i
                                class="fab fa-instagram fw-normal"></i></a>
                        <a class="btn btn-outline-light btn-social"
                            href="https://www.youtube.com/@hejoteknotechnology7514"><i
                                class="fab fa-youtube fw-normal"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/company/hejotekno"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>


            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">PT AGRO TEKNO INDO</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        <!-- Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> -->
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('lib/wow/wow.min.js'); ?>"></script>
    <script src="<?= base_url('lib/easing/easing.min.js'); ?>"></script>
    <script src="<?= base_url('lib/waypoints/waypoints.min.js'); ?>"></script>
    <script src="<?= base_url('lib/owlcarousel/owl.carousel.min.js'); ?>"></script>
    <script src="<?= base_url('lib/tempusdominus/js/moment.min.js'); ?>"></script>
    <script src="<?= base_url('lib/tempusdominus/js/moment-timezone.min.js'); ?>"></script>
    <script src="<?= base_url('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url('js/main.js'); ?>"></script>

    <script>
       $(document).ready(function () {
    function updateSubtotalAndTotal() {
        var total = 0;

        $('.trolley-item').each(function (index) {
            var price = parseFloat($(this).find('.price').text().replace(/[^\d]/g, ''));
            var quantity = parseInt($(this).find('.quantity').val());
            var subtotal = price * quantity;

            // Update the displayed subtotal
            $(this).find('.product-subtotal').text('Rp ' + subtotal.toLocaleString('id-ID', { minimumFractionDigits: 0 }));

            // Update hidden inputs
            $('.quantity-order').eq(index).val(quantity);
            $('.subtotal-order').eq(index).val(subtotal);

            total += subtotal;
        });

        // Update the displayed total order
        $('#total-order').text('Rp ' + total.toLocaleString('id-ID', { minimumFractionDigits: 0 }));
        // Update the hidden total order input
        $('#hidden-total-order').val(total);
    }

    $('.btn-decrease').click(function () {
        var $input = $(this).siblings('.quantity');
        var value = parseInt($input.val()) - 1;
        $input.val(value < 0 ? 0 : value);
        updateSubtotalAndTotal();
    });

    $('.btn-increase').click(function () {
        var $input = $(this).siblings('.quantity');
        var value = parseInt($input.val()) + 1;
        $input.val(value);
        updateSubtotalAndTotal();
    });

    updateSubtotalAndTotal();  // Initial calculation
});
    </script>
</body>

</html>
