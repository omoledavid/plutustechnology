<x-app-layout>
    <div class="error-page pt-120">
        <div class="container">
          <div class="error-image d-flex justify-content-center mb-50">
            <img src="assets/image/error-page/error.png" alt="" />
          </div>
          <div class="row">
            <div class="col-lg-12 d-flex align-items-center justify-content-center text-center">
              <div class="section-title style-3">
                <h2>Opps, Page Not Found</h2>
                <p>
                  We can’t seem to find the page you’re looking for. It may have
                  been moved, deleted, or never existed in the first place.
                </p>
                <div class="">
                  <ul class="btn-wrapper scroll-sec-title text-animation mt-40">
                    <li>
                      <a class="primary-btn-three error-btn" href="{{route('home')}}">
                        <span>Go to homepage</span>
                      </a>
                    </li>
                    <li>
                      <a class="primary-btn-four style-2" href="{{route('home')}}">
                        <span>Contact support</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</x-app-layout>