@extends('layouts.app')
@section('title', 'HIT Blog')

@section('content')
        <!-- Jumbotron -->
        <div class="container-fluid jumbo d-flex flex-column justify-content-center align-items-center"
        style="height: 100vh;
        background-image: url({{url('frontend/img/1.jpg')}});
        -webkit-background-size: cover;
        background-size: cover;
        background-position-y: 70%;">
            <p class="text-white font-weight-light">GAME</p>
            <a href="article.html" class="text-white">
                <h5 class="font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, nulla.</h5>
            </a>
        </div>
        <!-- Section -->
        <section class="container-fluid news my-5">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="h3-responsive py-3 text-uppercase">Latest News</h3>
                    <div class="kartu d-flex flex-row">
                        <img src="{{url('frontend/img/2.jpg')}}" alt="">
                        <div class="text mx-5 my-3">
                            <p>MUSIC</p>
                            <a href="" class="text-dark">
                                <h5 class="h5-responsive font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, possimus.</h5>
                            </a>
                        </div>
                    </div>
                    <div class="kartu d-flex flex-row my-5">
                        <img src="{{url('frontend/img/1.jpg')}}" alt="">
                        <div class="text mx-5 my-3">
                            <p>GAME</p>
                            <a href="" class="text-dark">
                                <h5 class="h5-responsive font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, aliquid.</h5>
                            </a>
                        </div>
                    </div>
                    <div class="kartu d-flex flex-row my-5">
                        <img src="{{url('frontend/img/3.jpg')}}" alt="">
                        <div class="text mx-5 my-3">
                            <p>MOVIES</p>
                            <a href="" class="text-dark">
                                <h5 class="h5-responsive font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, aperiam totam.</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid news my-5 bg-dark text-white">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="h3-responsive py-3 text-uppercase">Reviews</h3>
                    <div class="kartu d-flex flex-row second">
                        <img src="{{url('frontend/img/8.jpg')}}" alt="">
                        <div class="text mx-5 my-3">
                            <p>MUSIC</p>
                            <a href="" class="text-white">
                                <h5 class="h5-responsive font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, dignissimos?</h5>
                            </a>
                        </div>
                    </div>
                    <div class="kartu d-flex flex-row my-5 second">
                        <img src="{{url('frontend/img/4.jpg')}}" alt="">
                        <div class="text mx-5 my-3">
                            <p>GAME</p>
                            <a href="" class="text-white">
                                <h5 class="h5-responsive font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing.</h5>
                            </a>
                        </div>
                    </div>
                    <div class="kartu d-flex flex-row my-5 second">
                        <img src="{{url('frontend/img/7.jpg')}}" alt="">
                        <div class="text mx-5 my-3">
                            <p>TV SERIES</p>
                            <a href="" class="text-white">
                                <h5 class="h5-responsive font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, ratione.</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid news mt-5">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="h3-responsive py-3 text-uppercase">Festivals</h3>
                    <div class="kartu d-flex flex-row">
                        <img src="{{url('frontend/img/2.jpg')}}" alt="">
                        <div class="text mx-5 my-3">
                            <p>MUSIC</p>
                            <a href="" class="text-dark">
                                <h5 class="h5-responsive font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, placeat, nulla.</h5>
                            </a>
                        </div>
                    </div>
                    <div class="kartu d-flex flex-row my-5">
                        <img src="{{url('frontend/img/1.jpg')}}" alt="">
                        <div class="text mx-5 my-3">
                            <p>GAME</p>
                            <a href="" class="text-dark">
                                <h5 class="h5-responsive font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, aliquid.</h5>
                            </a>
                        </div>
                    </div>
                    <div class="kartu d-flex flex-row my-5">
                        <img src="{{url('frontend/img/3.jpg')}}" alt="">
                        <div class="text mx-5 my-3">
                            <p>MOVIES</p>
                            <a href="" class="text-dark">
                                <h5 class="h5-responsive font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, maxime.</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
