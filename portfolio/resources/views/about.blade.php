@extends('layout/master')

@section('content')

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
            {{-- @php echo explode($data); @endphp --}}


            <h1>HI, I'M {{ $data->name }}</h1>
            <p class="self1">{{ $data->title }}</p>
            <p class="self2">{{ $data->details }}</p>
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
@endsection
