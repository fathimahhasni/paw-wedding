@extends('layouts.index')
@section('content')

<!-- Header section
================================================== -->
<section id="header">
	<div class="container">
		<div class="row">
      <div id=" myCarousel" class="carousel slide" data-ride="carousel">
        <!-- indikator -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" style="color: salmon;" data-slide-to="0" class="active"></li>          
          <li data-target="#myCarousel" data-slide-to="1"></li>          
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <a href="#">
              <img src="images/couple.png" style="width: 100%; max-height: 600px;" >
            </a>
          </div>
          <div class="item">
            <a href="#">
              <img src="images/discount.png" style="width: 100%; max-height: 600px;">
            </a>
          </div>          
          <div class="item">
            <a href="#">
              <img src="images/event.png" style="width: 100%; max-height: 521px;">
            </a>
          </div>
        </div>
         <a class="left carousel-control" href="#myCarousel" data-slide="prev">
           <span class="glyphicon glyphicon-chevron-left"></span>
           <span class="sr-only">Sebelumnya</span>
         </a>
         <a class="right carousel-control" href="#myCarousel" data-slide="next">
           <span class="glyphicon glyphicon-chevron-right"></span>
           <span class="sr-only">Selanjutnya</span>
         </a>
      </div>
      <div class="jargon"> 
        <h1> Temukan Vendor Terbaik Anda</h1>
      </div>
		</div>
  </div>	
</section>


<!-- Portfolio section
================================================== -->
<section id="portfolio">
  <div class="container">
    <div class="row">

    <div class="col-md-12 col-sm-12">
            
      <!-- iso section -->
        <div class="iso-section wow fadeInUp" data-wow-delay="2.6s">
          <ul class="filter-wrapper clearfix">
            <li><a href="#" data-filter=".dekorasi" class="selected opc-main-bg">Dekorasi</a></li>
            <li><a href="#" class="opc-main-bg" data-filter=".fotografi">Jasa Fotografi</a></li>
            <li><a href="#" class="opc-main-bg" data-filter=".venue">Venue</a></li>
            <li><a href="#" class="opc-main-bg" data-filter=".catering">Catering</a></li>
            <li><a href="#" class="opc-main-bg" data-filter=".rias-busana">Rias & Busana</a></li>
          </ul>

          <!-- iso box section -->
          <div class="iso-box-section wow fadeInUp" data-wow-delay="1s">
            <div class="iso-box-wrapper col4-iso-box">
              @foreach($datas as $data)
              <div class="iso-box dekorasi branding col-md-4 col-sm-6">
                <div class="portfolio-thumb">
                  <img src="{{ asset('images/'.$data->gambar)}}" class="img-responsive" style="max-width:350px;max-height:350px;" alt="Portfolio">
                  <div class="portfolio-overlay"> 
                    <a href="">
                      <h3>DETAIL LAINNYA</h3>
                    </a>
                    <div class="portfolio-item">
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
                      

              @foreach($ketrings as $ketring)
              <div class="iso-box catering template col-md-4 col-sm-6">
                <div class="portfolio-thumb">
                  <img src="{{ asset('images/'.$ketring->gambar)}}" class="img-responsive" style="max-width:350px;max-height:350px;" alt="Portfolio">
                  <div class="portfolio-overlay">
                    <a href="">
                      <h3>DETAIL LAINNYA</h3>
                    </a>
                    <div class="portfolio-item">
                      <a href="single-project.html"><i class="fa fa-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach

              @foreach($venues as $venue)
              <div class="iso-box venue graphic col-md-4 col-sm-6">
                <div class="portfolio-thumb">
                  <img src="{{ asset('images/'.$venue->gambar)}}" class="img-responsive" style="max-width:350px;max-height:350px;" alt="Portfolio">
                  <div class="portfolio-overlay"> 
                    <a href="">
                      <h3>DETAIL LAINNYA</h3>
                    </a>
                    <div class="portfolio-item">
                      <a href="single-project.html"><i class="fa fa-link"></i></a>
                      <h2>Project Three</h2>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach

              @foreach($fotos as $foto)
              <div class="iso-box fotografi branding col-md-4 col-sm-6">
                <div class="portfolio-thumb">
                  <img src="{{ asset('images/'.$foto->gambar)}}" class="img-responsive" style="max-width:350px;max-height:350px;" alt="Portfolio">
                  <div class="portfolio-overlay"> 
                    <a href="">
                      <h3>DETAIL LAINNYA</h3>
                    </a>
                    <div class="portfolio-item">
                      <a href="single-project.html"><i class="fa fa-link"></i></a>
                      <h2>Project Five</h2>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach

              @foreach($riasbs as $rias)
              <div class="iso-box rias-busana col-md-4 col-sm-6">
                <div class="portfolio-thumb">
                  <img src="{{ asset('images/'.$rias->gambar)}}" class="img-responsive" style="max-width:350px;max-height:350px;" alt="Portfolio">
                  <div class="portfolio-overlay"> 
                    <a href="">
                      <h3>DETAIL LAINNYA</h3>
                    </a>
                    <div class="portfolio-item">
                      <a href="single-project.html"><i class="fa fa-link"></i></a>
                      <h2>Project Six</h2>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach

            </div>
          </div>
          {{ $datas->render() }}
        </div>
      </div>

              
    </div>
  </div>
</section>
@endsection