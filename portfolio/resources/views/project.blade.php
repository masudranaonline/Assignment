@extends('layout/master')
@section('content')
  <!--start portfolio section-->
  <section id="portfolio">
    <div class="container">
      <div class="port_heading">
        <h2>portfolio</h2>
      </div>
      <!-- /.port_heading -->
      <div class="row">
         @foreach ($data as $item )
        <div class="col-md-3">

         <div class="mail_gly">
            <div class="gly_img">
              <img src="{{ $item->image }}" class="img-fluid w-100" alt="">
              <div class="gly_overlay">
                <a href="{{ $item->url}}"><i class="fas fa-link"></i></a>
              </div>
            </div>
          </div>

      </div>
       @endforeach
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /#portfolio -->
  @endsection
