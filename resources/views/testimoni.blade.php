@extends('header')
<!-- ======= Doctors Section ======= -->
<section id="doctors" class="doctors">
    <div class="container">

        <div class="section-title">
            <h2>Testimoni</h2>
            <p>Review beberapa dokter mengenai farmasi ini</p>
        </div>

        <div class="row">

            @for ($i = 0; $i < count($listTesti["data"]); $i++)

            <div class="col-lg-6">
                <div class="member d-flex align-items-start">
                    <div class="pic"><img src="assets/img/doctors/doctors-{{$i+1}}.jpg" class="img-fluid"
                            alt=""></div>
                    <div class="member-info">
                        <h5 class="mt-0">{{$listTesti["data"][$i]["nama"]}}</h5>
                        <span>{{$listTesti["data"][$i]["pekerjaan"]}}</span>
                        <p>{{$listTesti["data"][$i]["keterangan"]}}</p>
                        {{-- <div class="social">
                            <a href=""><i class="ri-twitter-fill"></i></a>
                            <a href=""><i class="ri-facebook-fill"></i></a>
                            <a href=""><i class="ri-instagram-fill"></i></a>
                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                        </div> --}}
                    </div>
                </div>
            </div>
            @endfor
        </div>

    </div>
</section><!-- End Doctors Section -->
@extends('footer')
