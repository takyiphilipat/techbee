 <div class="container-fluid py-5 bg-secondary">
        <div class="container py-5">
            <div class="text-center">
                <div class="title wow fadeInUp" data-wow-delay="0.1s">
                    <div class="title-center">
                        <h5>Testimonial</h5>
                        <h1>Our Clients Say</h1>
                    </div>
                </div>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
                @foreach ($testimonies as $testimony)
                <div class="testimonial-item text-center"
                    data-dot="<img class='img-fluid' src='{{ asset('assets/img/' . $testimony->image) }}' alt=''>">
                    <p class="fs-5">{{$testimony->message}}</p>
                    <h5 class="text-uppercase">{{$testimony->name }}</h5>
                    <span class="text-primary">{{$testimony->role}}</span>
                </div>

                @endforeach



            </div>
        </div>
    </div>
