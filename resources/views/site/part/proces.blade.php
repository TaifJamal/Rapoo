<section class="section {{ request()->routeIs('site.index')? ' bg-grey': '' }}" id="process">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-md-8 col-lg-6 text-center">
                <div class="section-heading">
                    <!-- Heading -->
                    <h2 class="section-title ">
                        Our Working process
                    </h2>

                    <!-- Subheading -->
                    <p>
                        Rappo can be used to create anything from a small marketing page to a sophisticated website.
                    </p>
                </div>
            </div>
        </div> <!-- / .row -->

        <div class="row justify-content-center">
            @foreach ($proces  as $proce)
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="process-block">
                        <img src="{{ asset('image/proces/'.$proce->image) }}" alt="" class="img-fluid">

                        <h3>{{ $proce->titel }}</h3>
                        <p>{!! $proce->content !!}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
