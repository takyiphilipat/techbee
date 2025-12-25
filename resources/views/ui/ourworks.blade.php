
    <!-- Team Start -->
   <div class="container-fluid" style="background-color:#f8f9fa;">

        <div class="container py-5">
            <div class="text-center">
                <div class="title wow fadeInUp" data-wow-delay="0.1s">
                    <div class="title-center">
                        <h5 class="text-dark">Skills & Works</h5>
                        <h1 class="text-dark">View Skills & Works</h1>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                @foreach($works as $work)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-body">
                            <div class="team-before">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                           <img class="img-fluid"
                            src="{{ $work->image ? asset('assets/img/' . $work->image) : asset('assets/img/carousel-4.jpg') }}"
                            alt="{{ $work->title }}">
                            <div class="team-after">
                             <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <a class="team-name">
                            <h5 class="text-uppercase mb-0">{{ $work->title }}</h5>
                        </a>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>
    <!-- Team End -->
