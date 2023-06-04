@extends('layout.home')
@section('container')
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="https://cdn.pixabay.com/photo/2018/02/02/15/35/outdoor-3125692_640.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-9 ms-5">
                                {{-- <p
                                    class="d-inline-block border border-white rounded text-primary fw-semi-bold py-1 px-3 animated slideInDown">
                                    Welcome to Finanza</p> --}}
                                <h1 class="display-1 mb-4 animated slideInDown">Solusi Investasi Agroindustri yang Inovatif dan Terpercaya
                                </h1>
                                <a href="/login" class="btn btn-primary py-3 px-5 animated slideInDown">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="https://cdn.pixabay.com/photo/2014/11/16/15/15/field-533541_640.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-9">
                                {{-- <p
                                    class="d-inline-block border border-white rounded text-primary fw-semi-bold py-1 px-3 animated slideInDown">
                                    Welcome to Finanza</p> --}}
                                <h1 style="text-align: end" class=" display-1 me-5 mb-4 animated slideInDown">Solusi Investasi Agroindustri yang Inovatif dan Terpercaya</h1>
                                <a href="/login" class="btn btn-primary py-3 px-5 animated slideInDown">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

 <!-- Team Start -->
 <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            
            <h1 class="display-5 mb-5">Lengkapi Akun </h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp"  data-wow-delay="0.1s">
                <div class="team-item" style="height: 600px">
                    <img class="img-fluid rounded" src="https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg?size=626&ext=jpg&ga=GA1.1.1483684088.1660058933&semt=sph" alt="">
                    <div class="team-text">
                        <h4 class="mb-0">Lengkapi data diri</h4>
                        <div class="team-social d-flex">
                            <p>Pemberi pendanaan akan menerima pembagian margin sesuai dengan periode masing-masing proyek.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item" style="height: 600px">
                    <img class="img-fluid rounded" src="https://img.freepik.com/free-vector/fun-financial-concept-with-hand-drawn-computer_23-2147679927.jpg?size=626&ext=jpg&ga=GA1.1.1483684088.1660058933&semt=sph" alt="">
                    <div class="team-text">
                        <h5 class="mb-0">Lengkapi data keuangan</h5>
                        <div class="team-social d-flex">
                            <p>Pemberi pendanaan akan menerima pembagian margin sesuai dengan periode masing-masing proyek.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item" style="height: 600px">
                    <img class="img-fluid rounded" src="https://img.freepik.com/free-psd/3d-rendering-ui-icon_23-2149182288.jpg?size=626&ext=jpg&ga=GA1.1.1483684088.1660058933&semt=sph" alt="">
                    <div class="team-text">
                        <h4 class="mb-0">Unggah dokumen</h4>
                        <div class="team-social d-flex">
                            <p>Pemberi pendanaan akan menerima pembagian margin sesuai dengan periode masing-masing proyek.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid facts my-5 py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <i class="fa fa-users fa-3x text-white mb-3"></i>
                <h5 class="display-5 text-grey" data-toggle="counter-up">Pilih Proyek Pendanaan</h5 >
                <span class="fs-5 text-light">iGrow akan meluncurkan proyek terpilih dalam bentuk unit pendanaan untuk mengumpulkan dana proyek.</span>
                <hr class="bg-white w-25 mx-auto mb-0">
            </div>
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                <i class="fa fa-check fa-3x text-white mb-3"></i>
                <h5 class="display-5 text-grey" data-toggle="counter-up">Pendanaan Disalurkan</h5>
                <span class="fs-5 text-white">Setelah target pendanaan proyek terkumpul, pendanaan akan disalurkan secara bertahap sesuai dengan kebutuhan proyek tersebut.</span>
                <hr class="bg-white w-25 mx-auto mb-0">
            </div>
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                <i class="fa fa-users-cog fa-3x text-white mb-3"></i>
                <h5 class="display-5 text-grey" data-toggle="counter-up">Pantau Perkembangan</h5>
                <span class="fs-5 text-white">iGrow menyampaikan laporan perkembangan proyek, berupa foto dan detail proyek, secara berkala kepada para pemberi pendanaan.</span>
                <hr class="bg-white w-25 mx-auto mb-0">
            </div>
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                <i class="fa fa-award fa-3x text-white mb-3"></i>
                <h5 class="display-5 text-grey" data-toggle="counter-up">Pembagian Margin</h5>
                <span class="fs-5 text-white">Pemberi pendanaan akan menerima pembagian margin sesuai dengan periode masing-masing proyek.</span>
                <hr class="bg-white w-25 mx-auto mb-0">
            </div>
        </div>
    </div>
</div>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
<!-- Team End -->
@endsection