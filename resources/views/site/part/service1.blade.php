<section class="section" id="service">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 pl-4 text-center">
                <div class="service-heading">
                    <h1>Get a better deal and start saving money today</h1>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            @foreach ($services1 as $service1)
                <div class="col-lg-4 col-md-6">
                    <div class="service-block media">
                        <div class="service-icon">
                            <i class="{{ $service1->icoun  }}"></i>
                        </div>
                        <div class="service-inner-content media-body">
                            <h4>{{ $service1->titel  }}</h4>
                            <p>{!! $service1->content  !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-lg-12 text-center">
                <p class="pl-3">Want to know more about this? <a href="{{ route('site.contact') }}">Contact us</a></p>
            </div>
        </div>
    </div>
</section>
