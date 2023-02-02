<section class="section" id="services-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 text-center">
                <div class="section-heading">
                    <!-- Heading -->
                    <h2 class="section-title mb-2 text-white">
                        Web Services
                    </h2>

                    <!-- Subheading -->
                    <p class="mb-5 text-white">
                        Rappo can be used to create anything from a small marketing page to a sophisticated website.
                    </p>
                </div>
            </div>
        </div> <!-- / .row -->

        <div class="row">
            @foreach ($services2 as $service2)
                <div class="col-lg-4 col-sm-6 col-md-6 {{ $loop->index<3 ? 'mb-30': '' }} ">
                    <div class="web-service-block">
                        <i class="{{ $service2->icoun  }}"></i>
                        <h3>{{ $service2->titel  }}</h3>
                        <p>{!! $service2->content  !!}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
