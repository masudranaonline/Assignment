@extends('layout/master')


@section('content')
<main>

  <!--end menu_ber section-->
  <!--start benner section-->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assest/img/m.jpg" class="d-block w-100" alt="img">
        <div class="carousel-caption d-none d-md-block">
          <h5> HELLO I'M <span>MASUD</span> RANA</h5>
          <p>I'M FREELANCE DIGITAL WEB DESIGNER.</p>
          <button class="mrbtn hvr-radial-in ">Download Cv</button>
          <button class="mrbtn hvr-radial-in">hire me!</button>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assest/img/m2.jpg" class="img-flu" class="d-block w-100" alt="img">
        <div class="carousel-caption d-none d-md-block">
          <h5>HELLO I'M <span>MASUD</span> RANA</h5>
          <p>I'M FREELANCE DIGITAL WEB DEVELOPER.</p>
          <button class="mrbtn hvr-radial-in">Download Cv</button>
          <button class="mrbtn hvr-radial-in">hire me!</button>
        </div>
      </div>


    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!--end benner section-->
  <!--start about section-->
  <section id="about">
    <div class="container">
      <div class="heading">
        <h5>About Us</h5>
      </div>
      <!-- /.heading -->
      <div class="row">
        <div class="col-md-4">
          <div class="about_us">

            <h1>HI, I'M Masud</h1>
            <p class="self1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed vero obcaecati quasi
              temporibus? Fugit, inventore harum. Reiciendis laborum quaerat doloremque, sunt magnam maxime! Sequi
              quisquam, quia tempora deserunt et inventore.</p>
            <p class="self2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur, optio. Ab vero ipsa
              porro id. Quae praesentium ex dolor rerum fuga, </p>
          </div>
          <!-- /.about_us -->
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4">
          <div class="img">
            <img src="https://via.placeholder.com/320x400" alt="">
          </div>
          <!-- /.img -->
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4">
          <div class="my_self">
            <div class="ber1">
              <span>html</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0"
                  aria-valuemax="100">85%</div>
              </div>
            </div>
            <div class="ber1">
              <span>css</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0"
                  aria-valuemax="100">75%</div>
              </div>
            </div>
            <div class="ber1">
              <span>bootstrap</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0"
                  aria-valuemax="100">80%</div>
              </div>
            </div>
            <div class="ber1">
              <span>JavaScript</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0"
                  aria-valuemax="100">25%</div>
              </div>
            </div>
          </div>
          <!-- /.my_self -->
        </div>
        <!-- /.col-md-4 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /#about -->
  <!--end about section-->

  <!--Start service section-->
  <section id="service">
    <div class="container">
      <div class="ser_heading">
        <h1>our service</h1>
      </div>
      <!-- /.ser_heading -->
      <div class="row">
        <div class="col-md-4">
          <div class="service_all">
            <div class="icon mx-auto">
              <div class="icon1 mx-auto">
                <i class="fas fa-users-cog"></i>
              </div>
            </div>
            <div class="ditels">
              <h2>best service</h2>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam illum, doloribus recusandae maiores
                velit debitis aliquid laborum asperiores excepturi maxime iste sapiente dolor dicta. Eligendi
                dignissimos corporis natus quo odio.</p>
            </div>
          </div>
          <!-- /.service_all -->
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4">
          <div class="service_all">
            <div class="icon mx-auto">
              <div class="icon1 mx-auto"><i class="fas fa-users-cog"></i></div>
            </div>
            <div class="ditels">
              <h2>best service</h2>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam illum, doloribus recusandae maiores
                velit debitis aliquid laborum asperiores excepturi maxime iste sapiente dolor dicta. Eligendi
                dignissimos corporis natus quo odio.</p>
            </div>
          </div>
          <!-- /.service_all -->
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4">
          <div class="service_all">
            <div class="icon mx-auto">
              <div class="icon1 mx-auto"><i class="fas fa-users-cog"></i></div>
            </div>
            <div class="ditels">
              <h2>best service</h2>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam illum, doloribus recusandae maiores
                velit debitis aliquid laborum asperiores excepturi maxime iste sapiente dolor dicta. Eligendi
                dignissimos corporis natus quo odio.</p>
            </div>
          </div>
          <!-- /.service_all -->
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4">
          <div class="service_all">
            <div class="icon mx-auto">
              <div class="icon1 mx-auto"><i class="fas fa-users-cog"></i></div>
            </div>
            <div class="ditels">
              <h2>best service</h2>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam illum, doloribus recusandae maiores
                velit debitis aliquid laborum asperiores excepturi maxime iste sapiente dolor dicta. Eligendi
                dignissimos corporis natus quo odio.</p>
            </div>
          </div>
          <!-- /.service_all -->
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4">
          <div class="service_all">
            <div class="icon mx-auto">
              <div class="icon1 mx-auto"><i class="fas fa-users-cog"></i></div>
            </div>
            <div class="ditels">
              <h2>best service</h2>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam illum, doloribus recusandae maiores
                velit debitis aliquid laborum asperiores excepturi maxime iste sapiente dolor dicta. Eligendi
                dignissimos corporis natus quo odio.</p>
            </div>
          </div>
          <!-- /.service_all -->
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4">
          <div class="service_all">
            <div class="icon mx-auto">
              <div class="icon1 mx-auto"><i class="fas fa-users-cog"></i></div>
            </div>
            <div class="ditels">
              <h2>best service</h2>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam illum, doloribus recusandae maiores
                velit debitis aliquid laborum asperiores excepturi maxime iste sapiente dolor dicta. Eligendi
                dignissimos corporis natus quo odio.</p>
            </div>
          </div>
          <!-- /.service_all -->
        </div>
        <!-- /.col-md-4 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /#service -->
  <!--end service section-->
  <!--START testimonial section-->
  <section id="testimonial">
    <div class="container">
      <div class="test_heading">
        <h1>Testimonial</h1>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="test1">
            <h6><i class="fas fa-quote-left"></i></h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque officiis veritatis neque nulla sit rem
              praesentium quidem minus eligendi, temporibus laborum sint iure a necessitatibus nobis laudantium error!
              Obcaecati, officia?</p>
            <h5><i class="fas fa-quote-right"></i></h5>
          </div>
        </div>
        <!-- /.col-md-6 -->
        <div class="col-md-6">
          <div class="test2">
            <img src="assest/img/self2.jpg" alt="">
            <h4>masud rana</h4>
            <p>web designer</p>
          </div>
        </div>
        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /#testimonial -->
  <!--end testmonial section-->
  <!--start portfolio section-->
  <section id="portfolio">
    <div class="container">
      <div class="port_heading">
        <h2>portfolio</h2>
      </div>
      <!-- /.port_heading -->
      <div class="row">
        <div class="col-md-3">
          <div class="mail_gly">
            <div class="gly_img">
              <img src="assest/img/port1.png" class="img-fluid w-100" alt="">
              <div class="gly_overlay">
                <a href="#"><i class="fas fa-link"></i></a>
              </div>
            </div>
          </div>
          <div class="mail_gly">
            <div class="gly_img">
              <img src="assest/img/port2.png" class="img-fluid w-100" alt="">
              <div class="gly_overlay">
                <a href="#"><i class="fas fa-link"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!-- /.col-md-3 -->
        <div class="col-md-3">
          <div class="mail_gly">
            <div class="gly_img">
              <img src="assest/img/port3.png" class="img-fluid w-100" alt="">
              <div class="gly_overlay">
                <a href="#"><i class="fas fa-link"></i></a>
              </div>
            </div>
          </div>
          <div class="mail_gly">
            <div class="gly_img">
              <img src="assest/img/port4.png" class="img-fluid w-100" alt="">
              <div class="gly_overlay">
                <a href="#"><i class="fas fa-link"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!-- /.col-md-3 -->
        <div class="col-md-3">
          <div class="mail_gly">
            <div class="gly_img">
              <img src="assest/img/port5.png" class="img-fluid w-100" alt="">
              <div class="gly_overlay">
                <a href="#"><i class="fas fa-link"></i></a>
              </div>
            </div>
          </div>
          <div class="mail_gly">
            <div class="gly_img">
              <img src="assest/img/port6.png" class="img-fluid w-100" alt="">
              <div class="gly_overlay">
                <a href="#"><i class="fas fa-link"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!-- /.col-md-3 -->
        <div class="col-md-3">
          <div class="mail_gly">
            <div class="gly_img">
              <img src="assest/img/port7.png" class="img-fluid w-100" alt="">
              <div class="gly_overlay">
                <a href="#"><i class="fas fa-link"></i></a>
              </div>
            </div>
          </div>
          <div class="mail_gly">
            <div class="gly_img">
              <img src="assest/img/port8.png" class="img-fluid w-100" alt="">
              <div class="gly_overlay">
                <a href="#"><i class="fas fa-link"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!-- /.col-md-3 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /#portfolio -->
  <!--end portfolio ssectiion-->

</main>
@endsection
