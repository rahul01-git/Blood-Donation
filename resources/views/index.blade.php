@extends('layouts.home')
@section('content')
    <div class="hero-section">
        <img src="{{ url(asset('images/slider.jpg')) }}" class="d-block w-100 z-1" style="height: 90vh">
        <div class="details">
            <h1>Blood is a life,<br>pass it on !</h1>
            <p>Help us eliminate blood scarcity in Nepal</p>
            <a href="{{ route('donate') }}"><span>Donate Now <i class='bx bxs-right-arrow'></i></span></a>
        </div>
        <img src="{{ url(asset('images/wave.svg')) }}" class="wave">
    </div>

    {{-- @auth
    @else --}}
    <!-- Whyus Us Section -->
    <div class="container mx-auto mt-5 " id="whyus">
        <div class="row">
            <div class="col-lg-6 col-sm-12 col-md-6">
                <div class="img-fluid">
                    <img src="{{ url(asset('images/whyus.png')) }}" class="why_img img-fluid"
                        style="height: 50vh;width: 61vh;">
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-md-12 pt-10 mx-auto  ">
                <div class="title pt-4">
                    <h1 class="d-flex mx-md-auto">Why LIFELINE ?</h1>
                    <div class="d-flex md-justify-content-center">
                        <div class="one"> <img src="{{ url(asset('images/St_line.png')) }}"
                                class="img-fluid items-center" style="height: 3px;width: 13.5vh;"> </div>
                        <div class="two"> <img src="{{ url(asset('images/rectangle.png')) }}" class="img-fluid"
                                style="height: 21px;width: 21px;"> </div>
                        <div class="three"> <img src="{{ url(asset('images/St_line.png')) }}" class="img-fluid"
                                style="height: 3px;width: 13.5vh;"> </div>
                    </div><br><br>
                </div>
                <p>Existing blood management system in Nepal is manual,cumbersome
                    and inefficient. Most blood banks record the information on blood
                    collection/supply manually in registers.
                    Maintaining blood inventory is tedious with laborious back-
                    office paperwork and managing information on availability and
                    shortage of blood is a tall task
                    A social initiative for a smart, transparent and holistic
                    blood management service from collection to supply.
                    When it comes to blood, right information at the right time can be the
                    answer to a life and death situation.</p>
            </div>
        </div>
    </div><br><br>

    <!-- About Us Section -->
    <div class="container mx-auto mt-5 align-items-center" id="aboutus">
        <div class="row">
            <div class="col-lg-12 align-content-center">
                <div class="title text-center">
                    <h1>About US</h1>
                    <div class="d-flex justify-content-center  ">
                        <div class="one"> <img src="{{ url(asset('images/St_line.png')) }}" class="img-fluid "
                                style="height: 3px;width: 13.5vh;"> </div>
                        <div class="two"> <img src="{{ url(asset('images/rectangle.png')) }}" class="img-fluid"
                                style="height: 21px;width: 21px;"> </div>
                        <div class="three"> <img src="{{ url(asset('images/St_line.png')) }}" class="img-fluid"
                                style="height: 3px;width: 13.5vh;"> </div>
                    </div><br><br>
                    <p class="text-center col-lg-10 justify-content-center mx-auto">Existing blood management system in
                        Nepal is manual,cumbersome
                        and inefficient. Most blood banks record the information on blood
                        collection/supply manually in registers
                        Maintaining blood inventory is tedious with laborious back-
                        office paperwork and managing information on availability and
                        shortage of blood is a tall task
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card-container d-flex justify-content-center mt-3">
        <div class="row col-lg-10 col-md-12">
            <div class="col-lg-4 col-sm-6 mb-3 mb-sm-0">
                <div class="card  about_card ml-3">
                    <div class="card-body">
                        <h5 class="card-title text-center ">Give Donation</h5>
                        <p class="card-text text-center pt-2">With supporting text below as a natural lead-in to additional
                            content.</p>
                        <div class="d-flex justify-content-center pt-6"><a href="#"
                                class="btn text-black text-bold align-self-center "
                                style="background: #D9D9D9;border: 3px solid #CF3D3C;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); font-weight: 500;width:170px">Donate
                                now</a></div> <br>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card about_card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Become a volunteer</h5>
                        <p class="card-text text-center pt-2">With supporting text below as a natural lead-in to additional
                            content.</p>
                        <div class="d-flex justify-content-center "><a href="#"
                                class="btn text-black text-bold align-self-center ml-auto pt-2"
                                style="background: #D9D9D9;border: 3px solid #CF3D3C;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); font-weight: 500;width:170px">Become
                                now</a></div> <br>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card about_card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Give Scholarship</h5>
                        <p class="card-text text-center pt-2">With supporting text below as a natural lead-in to additional
                            content.</p>
                        <div class="d-flex justify-content-center"><a href="#"
                                class="btn text-black text-bold align-self-center ml-auto"
                                style="background: #D9D9D9;border: 3px solid #CF3D3C;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); font-weight: 500;width:170px">Give
                                now</a></div> <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- About Us Section -->

    <!-- Gallery -->
    <div class="mt-5 container" id="gallery">
        <div class="row">
            <div class="text-center">
                <h1>Gallery</h1>
                <div class="d-flex justify-content-center  ">
                    <div class="one"> <img src="{{ url(asset('images/St_line.png')) }}" class="img-fluid "
                            style="height: 3px;width: 13.5vh;"> </div>
                    <div class="two"> <img src="{{ url(asset('images/rectangle.png')) }}" class="img-fluid"
                            style="height: 21px;width: 21px;"> </div>
                    <div class="three"> <img src="{{ url(asset('images/St_line.png')) }}" class="img-fluid"
                            style="height: 3px;width: 13.5vh;"> </div>
                </div><br><br>
            </div>
            <div class="row">
                @foreach ($images as $image)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card  mb-5 shadow-sm image-fluid">
                            <img src="{{ url('/images/gallery/' . $image->image) }}" class="img-responsive"
                                alt="" height="350px">
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
    <!-- Gallery -->

    <!-- Blog Section -->
    <div class="container mt-5" id="blogger">
        <div class="text-center">
            <h1>Recent Blogs</h1>
            <div class="d-flex justify-content-center  ">
                <div class="one"> <img src="{{ url(asset('images/St_line.png')) }}" class="img-fluid "
                        style="height: 3px;width: 13.5vh;"> </div>
                <div class="two"> <img src="{{ url(asset('images/rectangle.png')) }}" class="img-fluid"
                        style="height: 21px;width: 21px;"> </div>
                <div class="three"> <img src="{{ url(asset('images/St_line.png')) }}" class="img-fluid"
                        style="height: 3px;width: 13.5vh;"> </div>
            </div><br><br>
        </div>
        <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card blogg mb-5 shadow-sm">
                        <img src="{{ url(asset('images/blogs/' . $blog->photo)) }}" alt=""
                            class="img-responsive">
                        <div class="card-body">
                            <div class="card-title">
                                <h2>{{ $blog->title }}</h2>
                            </div>
                            <div class="card-text">
                                <p>
                                    {!! nl2br(Str::limit($blog->description, 150)) !!}

                                </p>
                            </div>
                            <a href="{{ route('blog_detail', $blog->id) }}"
                                class="btn btn-outline-primary rounded-0 float-end">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Blog Section -->

    <div class="container ">
        <div class="col-lg-12 contact mx-auto mt-5">
            <div class="row">
                <div class="col-lg-6">
                    <div class=" py-5">
                        <img src="{{ asset('images/contact-img.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 py-5 text-white text-center d-flex flex-column justify-content-center">
                    <h1> <b>रगत चाहियो?</b></h1>
                    <p class="fs-4">Fill in the form and send us your details.</p>
                    <p class="fs-4">Someone will get back to you asap. If it’s an emergency,</p>
                    <p class="fs-4">call us @ +977 9800000000 or msg us at Facebook</p>
                    <span>
                        <a href="{{ route('receive') }}" class="btn me-3 px-5 py-2 shadow text-danger bg-white border-0">Request
                            Blood</a>
                        <a href="{{ route('donate') }}" class="btn btn-secondary btn me-3 px-5 py-2  border-white shadow bg-danger">Donate
                            Blood</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    {{-- @endauth --}}
@endsection
