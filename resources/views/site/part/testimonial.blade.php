<section class="section" id="section-testimonial">
    <div class="container">
       <div class="row align-items-center">
            <div class="col-lg-4 col-sm-12 col-md-12">
                <div class="section-heading testimonial-heading">
                    <h1>What they say <br>about us</h1>
                    <p>Numquam doloribus impedit at consectetur molestiae tempora ratione possimus in veniam aperiam, eum consequuntur, unde. Earum ullam molestiae suscipit saepe sunt recusandae.</p>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12 col-md-12">
                @for ($i=1 ; $i<count($testimonials); $i+=2)
                <div class="row">
                    <div class="col-lg-6">
                        <div class="test-inner ">
                           <div class="test-author-thumb d-flex">
                               <img src="{{ asset('image/testimonial/'.$testimonials[$i-1]->image) }}" alt="Testimonial author" class="img-fluid">
                               <div class="test-author-info">
                                   <h4>{{ $testimonials[$i-1]->name }}</h4>
                                   <h6>{{ $testimonials[$i-1]->job }}</h6>
                               </div>
                           </div>

                           {!! $testimonials[$i-1]->comment !!}
                            <i class="fa fa-quote-right"></i>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="test-inner ">
                           <div class="test-author-thumb d-flex">
                               <img src="{{ asset('image/testimonial/'.$testimonials[$i]->image) }}" alt="Testimonial author" class="img-fluid">
                               <div class="test-author-info">
                                   <h4>{{ $testimonials[$i]->name }}</h4>
                                   <h6>{{ $testimonials[$i]->job }}</h6>
                               </div>
                           </div>

                           {!! $testimonials[$i]->comment !!}

                            <i class="fa fa-quote-right"></i>
                        </div>
                    </div>
                </div>
                @endfor

            </div>
        </div>
    </div>
</section>
