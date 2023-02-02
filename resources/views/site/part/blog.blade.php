<section class="section" id="blog">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 text-center">
                <div class="section-heading">
                    <!-- Heading -->
                    <h2 class="section-title">
                        Read our latest news
                    </h2>

                    <!-- Subheading -->
                    <p>
                        Our duty towards you is to share our experience we're reaching in our work path with you.
                    </p>
                </div>
            </div>
        </div> <!-- / .row -->

        <div class="row justify-content-center">
            @foreach ($neews as $neew)
            <div class="col-lg-4 col-md-6">
                <div class="blog-box">
                    <div class="blog-img-box">
                        <img src="{{ asset('image/neew/'.$neew->image) }}" alt="" class="img-fluid blog-img">
                    </div>
                    <div class="single-blog">
                        <div class="blog-content">
                            <h6> {{ $neew->date }}</h6>
                            <a href="#!">
                                <h3 class="card-title">{{ $neew->titel }}</h3>
                            </a>
                            <p>{!! $neew->content !!}</p>
                            <a href="#!" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
