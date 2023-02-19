@extends('layouts.home')
@section('content')
    <hr>
    <div class="page-content blog">
        <div class="container mt-5">
            <div class="text-center">
                <h1>Our Rewards</h1>
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
                @foreach ($rewards as $reward)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card blogg mb-5 shadow-sm text-center">
                            <img src="{{ url(asset('images/reward/' . $reward->image)) }}" alt="reward_item"
                                class="img-responsive">
                            <div class="card-body">
                                <div class="card-title">
                                    <h2>{{ $reward->title }}</h2>
                                </div>
                                <div class="card-text">
                                    <p>
                                        {{ $reward->point }}

                                    </p>
                                </div>
                                @auth
                                    <a href="{{ route('rewardRedeem',$reward->id) }}" class="btn btn-primary rounded-0">Redeem</a>
                                @endauth
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="row">
                <div class="col-md-12">
                    {{ $rewards->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
