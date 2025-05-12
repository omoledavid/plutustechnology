@props(['pageName' => 'About Us'])
<div class="breadcrumb-section" style="background-image: url({{asset('assets/image/banner-img/breadcrumb-img.png')}})">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="banner-wrapper">
            <div class="banner-content">
              <h1>{{$pageName}}</h1>
              <p>
                Your ideas matter to us! Get in touch, and let’s create
                something amazing together!
              </p>
            </div>
            <div class="breadcrumb-list">
              <ul>
                <li>
                  <a href="{{route('home')}}">Home</a>
                </li>
                <li><span>/</span></li>
                <li>
                  <a href="javascript::void()">{{$pageName}}</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>