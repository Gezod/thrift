@extends('pelanggan.layout.index')

@section('content')
<div class="row mt-4 align-items-center">
    <div class="col-md-6">
        <div class="content-text">
            Welcome to AtoZ, your premier destination for sustainable and stylish thrifting. At AtoZ, we bring together buyers and sellers to celebrate the art of thrifting while promoting eco-friendly fashion choices.
            Our Mission
            We are passionate about reducing fashion waste and making second-hand shopping enjoyable and accessible. Our platform offers a diverse collection of pre-loved items, ensuring quality and authenticity in every piece.
            Why AtoZ ?
            Diverse Collection: From vintage treasures to modern must-haves.
            User-Friendly: Easy navigation for a smooth shopping experience.
            Sustainable: Every purchase supports a greener planet.
            Affordable: Unique finds at a fraction of retail prices.
            Join us at AtoZ and discover the joy of thrifting while contributing to a more sustainable future. Happy thrifting!
            The AtoZ Team
        </div>
    </div>
    <div class="col-md-6">
        <img src="{{ asset('assets/images/office-2.png') }}" style="width:100%" alt="">
    </div>
</div>

<div class="d-flex justify-content-lg-between mt-5">
    <div class="d-flex align-items-center gap-4">
        <i class="fa fa-users fa-2x"></i>
        <p class="m-0 fs-5">+ 300 Pelanggan</p>
    </div>
    <div class="d-flex align-items-center gap-4">
        <i class="fas fa-home fa-2x"> </i>
        <p class="m-0 fs-5"> +500 Seller</p>
    </div>
    <div class="d-flex align-items-center gap-4">
        <i class="fas fa-shirt fa-2x"></i>
        <p class="m-0 fs-5">+ 300 Product</p>
    </div>
</div>

<h4 class="text-center mt-md-5 mb-md-2">Contact Us</h4>
<hr class="mb-5">
<div class="row  mb-md-5">
    <div class="col-md-5">
        <div class="bg-secondary" style="width: 100%; height:50vh; border-radius:10px;"></div>
    </div>
    <div class="col-md-7">
        <div class="card">
            <div class="card-header text-center">
                <h4>Kritik dan saran</h4>
            </div>
            <div class="card-body">
                <p class="p-0 mb-5 text-lg-center">Masukan kritik dan saran anda kepada aplikasi kami ini agar kami dapat memberikan
                    apa yang menjadi kebutuhan anda dan kami dapat berkembang lebih baik lagi.
                </p>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" value="" placeholder="Masukan email Anda">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="pesan" class="col-sm-2 col-form-label">Pesan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pesan" placeholder="Masukan Pesan Anda">
                    </div>
                </div>
                <button class="btn btn-primary mt-4 w-100"> Kirim pesan anda</button>
            </div>
        </div>
    </div>
</div>
@endsection