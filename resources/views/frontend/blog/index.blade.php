@extends('frontend.layout.app')
@section('content')

    <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(/back.jpg);">
        <div class="container" >
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="breadcrumb-wrap text-center">
                        <div class="breadcrumb-title mb-30">
                            <h1>Bay-Tech Haberler</h1>
                        </div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Anasayfa</a></li>
                                <li class="breadcrumb-item"><a href="#" class="text-dark">Haberler</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="container container-fluid mt-4">
        <div class="row ">
            @foreach($Blog as $item)
                <div class="col-12 col-md-4">
                    <div class="single-post mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                        <div class="blog-thumb">
                            <a href="{{ route('blogdetail', $item->slug) }}" title="{{ $item->title }}">


                                <img src="{{ (!$item->getFirstMediaUrl('page')) ? '/backend/resimyok.jpg': $item->getFirstMediaUrl('page')}}" alt="{{ $item->title }}">
                            </a>
                        </div>
                        <div class="blog-content">
                            <h4><a href="{{ route('blogdetail', $item->slug) }}" title="{{ $item->title }}">{{ $item->title }}</a></h4>
                            <div class="slider-btn">
                                <a href="{{ route('blogdetail', $item->slug) }}" title="{{ $item->title }}" class="ss-btn" data-animation="fadeInRight" data-delay=".8s">Devamını Okuyun<i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
