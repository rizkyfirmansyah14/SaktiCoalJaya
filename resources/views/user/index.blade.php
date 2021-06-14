@extends('layouts.user.main')

@section('content')

<!-- Start about Area -->
<section class="section-gap info-area" id="about">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-40 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Sekilas Tentang Sakti Coal Jaya</h1>
                    <p>read and learn more about sakti coal jaya.</p>
                </div>
            </div>
        </div>
        <div class="single-info row mt-40">
            <div class="col-lg-6 col-md-12 mt-120 text-center no-padding info-left">
                <div class="info-thumb">
                    <img src="assets/users/img/about-img.jpg" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 no-padding info-rigth">
                <div class="info-content">
                    <h2 class="pb-30">Sekilas</h2>
                    <p>
                        PT. Sakti Coal Jaya adalah perusahaan swasta yang didirikan dan dipersembahkan
                        untuk memberikan solusi dalam rekayasa dan layanan jaringan telekomunikasi oleh
                        beberapa insinyur senior yang telah berpengalaman bertahun-tahun di bidang
                        telekomunikasi dan teknologi informasi.
                    </p>
                    <br>
                    <p>
                        Didorong oleh visi untuk menerapkan teknologi telekomunikasi & informasi agar
                        lebih mudah, PT. Sakti Coal Jaya telah mendapatkan pengalaman untuk berpartisipa-
                        si dalam pengembangan proyek seluler, telekomunikasi nirkabel tetap, dan pengem-
                        bangan perangkat lunak untuk perusahaan kecil menengah. Kami hadir untuk
                        memenuhi tantangan teknologi telekomunikasi yang berkembang pesat dan
                        layanannya. Kami berharap ini akan membawa kesejahteraan mitra bisnis kami saat
                        ini dan yang akan datang dan kami berharap dapat memperoleh dukungan tanpa
                        henti dari Anda.
                    </p>

                    <p><a href="" style="color: #A2CC3A;" data-toggle="modal" data-target="#exampleModal">selengkapnya
                            ..</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End about Area -->


<!-- Start project Area -->
<section class="project-area section-gap" id="project">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-30 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Lingkup Bisnis</h1>
                    <p>Didukung oleh staf ahli yang terlatih, kompeten dan berpengalaman yang dipimpin oleh manajemen
                        top yang berkomitmen juga memiliki pengalaman signifikan dalam berbagai proyek
                        telekomunikasi termasuk pengembangan sumber daya.<br> Kami menyediakan kualitas Layanan dengan
                        dukungan dari tim profesional dan pengalaman
                        kami, mengikuti layanan :</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center d-flex">
            <div class="active-works-carousel mt-40 col-lg-8">
                @foreach($bisnis as $bisnis)
                <div class="item">
                    <img class="img-fluid" src="assets/users/img/{{$bisnis->image}}" alt="">
                    <div class="caption text-center mt-20">
                        <h6 class="text-uppercase">{{$bisnis->title}}</h6>
                        <p class="mb-2">{{$bisnis->description1}}<br> </p>
                        <p>{{$bisnis->description2}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- End project Area -->

<!-- Start gallery Area -->
<section class="gallery-area" id="gallery">
    <div class="container-fluid">
        <div class="row no-padding">
            <div class="active-gallery">
                <div class="item single-gallery">
                    <img src="assets/users/img/g1.jpg" alt="">
                </div>
                <div class="item single-gallery">
                    <img src="assets/users/img/g2.jpg" alt="">
                </div>
                <div class="item single-gallery">
                    <img src="assets/users/img/g3.jpg" alt="">
                </div>
                <div class="item single-gallery">
                    <img src="assets/users/img/g4.jpg" alt="">
                </div>
                <div class="item single-gallery">
                    <img src="assets/users/img/g5.jpg" alt="">
                </div>
                <div class="item single-gallery">
                    <img src="assets/users/img/g6.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End gallery Area -->


<!-- Start faq Area -->
<section class="faq-area section-gap" id="faq">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Visi & Misi</h1>
                    <p>below is the vision and mission of the Sakti Coal Jaya company</p>
                </div>
            </div>
        </div>
        <div class="row d-flex align-items-center">
            <div class="counter-left col-lg-3 col-md-3">
                <div class="single-facts">
                    <h2 class="">Visi</h2>
                    <p>Our Vission</p>
                </div>
                <div class="single-facts">
                    <h2 class="">Misi</h2>
                    <p>Our Mission</p>
                </div>
            </div>
            <div class="faq-content col-lg-9 col-md-9">
                <div class="single-faq">
                    <h2 class="text-uppercase">
                        Visi
                    </h2>
                    <p>
                        "Tumbuh dan berkembang menjadi salah satu perusahaan terbaik dan
                        berkomitmen dalam industri telek.
                    </p>
                </div>
                <div class="single-faq">
                    <h2 class="text-uppercase">
                        Misi
                    </h2>
                    <p>
                        “Menjadi mitra bagi semua pemangku kepentingan dan memberikan
                        solusi terbaik dalam pengembangan telekomunikasi di Indonesia..
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End faq Area -->


<!-- start contact Area -->
<section class="contact-area section-gap" id="contact">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Contact Us</h1>
                    <p>Give your feedback about us below, thank you</p>
                </div>
            </div>
        </div>
        <form class="form-area " id="myForm" action="{{ route('store')}}" method="post" class="contact-form text-right">
            @csrf

            @if (session('status'))
            <div class="alert alert-success mt-4">
                {{ session('status') }}
            </div>
            @endif

            <div class="row">
                <div class="col-lg-6 form-group">
                    <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control"
                        required="" type="text">

                    <input name="email" placeholder="Enter email address"
                        pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control"
                        required="" type="email">

                    <input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control"
                        required="" type="text">
                </div>
                <div class="col-lg-6 form-group">
                    <textarea class="common-textarea mt-10 form-control" name="message" placeholder="Messege"
                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                    <button type="submit" class="primary-btn mt-20">Send Message<span
                            class="lnr lnr-arrow-right"></span></button>
                    <div class="alert-msg">
                    </div>
                </div>
            </div>
        </form>

    </div>
</section>
<!-- end contact Area -->



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sekilas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Kami memahami sepenuhnya bahwa Pelanggan kami adalah mitra kami, dan kami
                    menekankan bahwa kepuasan pelanggan adalah komitmen utama bagi kami.
                    Dengan pemikiran tersebut, kami telah menetapkan sistem mutu yang menjamin
                    hasil yang dapat diprediksi dengan cacat minimal.
                </p>
                <p>
                    Kami percaya bahwa solusi kami membantu operator atau mitra untuk mencapai
                    tingkat keuntungan yang lebih tinggi di jaringan Anda. Kami memiliki keahlian,
                    kemampuan, dan pengetahuan di lingkungan multi vendor untuk membantu
                    pelanggan memenuhi kebutuhan dan sasaran mereka, dan menjaga kinerja kami
                    dengan kualitas layanan yang tinggi dan sesuai jadwal.
                </p>
                <p>
                    Untuk itu, terus terbuka untuk belajar dengan cara yang lebih baik, lebih efektif dan
                    efisien dalam menangani tugas, memaksimalkan dalam mengadopsi teknologi
                    terbaik yang ada dan memahami pemahaman menyeluruh tentang implementasi
                    teknologi.
                </p>

            </div>
        </div>
    </div>
</div>
@endsection