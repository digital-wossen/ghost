
@extends('layout.app')
@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="carousel slide" id="carousel-719547" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-slide-to="0" data-target="#carousel-719547" class="active">
                        </li>
                        <li data-slide-to="1" data-target="#carousel-719547">
                        </li>
                        <li data-slide-to="2" data-target="#carousel-719547">
                        </li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" alt="Carousel Bootstrap First" src="{{ URL::to('/') }}/images/tbg2.jpg" />
                            <div class="carousel-caption">
                                <h4>
                                    {{ $caption1 }}
                                </h4>
                                <p>
                                     {{ $capline1 }}                               </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" alt="Carousel Bootstrap Second" src="{{ URL::to('/') }}/images/tbg1.jpg" />
                            <div class="carousel-caption">
                                <h4>
                                    {{ $caption2 }}
                                </h4>
                                <p>
                                      {{ $capline2 }}
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" alt="Carousel Bootstrap Third" src="{{ URL::to('/') }}/images/tbg3.jpg" />
                            <div class="carousel-caption">
                                <h4>
                                    {{ $caption3 }}
                                </h4>
                                <p>
                                   {{ $capline3 }}
                                </p>
                            </div>
                        </div>
                    </div> <a class="carousel-control-prev" href="#carousel-719547" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-719547" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
                </div>

                <div class="page-header">
                    <h1>
                     {{ $title }}   <small>{{ $phrase }}</small>
                    </h1>
                </div>
            </div>
        </div>
        <hr style="height:40pt; visibility:hidden;" />
        <div class="row">
                <div class="col-md-4">
                    <h2>
                        {{ $t1 }}
                    </h2>
                    <p>
                        <span>{{ $content1 }}</span>
                    </p>
                    <p>
                        <a class="btn" href="company">View details »</a>
                    </p>
                </div>
                <div class="col-md-4">
                    <h2>
                            {{ $t2 }}
                    </h2>
                    <p>
                            {{ $content2 }}
                    </p>
                    <p>
                        <a class="btn" href="company">View details »</a>
                    </p>
                </div>
                <div class="col-md-4">
                    <h2>
                            {{ $t3 }}
                    </h2>
                    <p>
                            {{ $content3 }}
                    </p>
                    <p>
                        <a class="btn" href="company">View details »</a>
                    </p>
                </div>
            </div>

    </div>



@endsection


