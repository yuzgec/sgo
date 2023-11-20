@extends('frontend.layout.app')
@section('content')
    <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(/back.jpg);">
        <div class="container" >
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="breadcrumb-wrap text-center">
                        <div class="breadcrumb-title mb-30">
                            <h1>{{ $Detail->title }}</h1>
                        </div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Anasayfa</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('service') }}" class="text-dark">Projelerimiz</a></li>
                                <li class="breadcrumb-item text-dark" aria-current="page">{{ $Detail->title }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-4">
        <div class="row pb-4">
            <div class="col-lg-8 mb-5 mb-lg-0 appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                <h2 class="text-color-dark font-weight-bold text-10 pb-2 mb-4">{{ $Detail->title }}</h2>
                @if($Detail->getFirstMediaUrl('page'))
                    <img src="{{ $Detail->getFirstMediaUrl('page') }}" class="img-fluid mb-3" alt="{{ $Detail->title }}">
                @endif
                {!!  $Detail->desc !!}
            </div>
            <div class="col-lg-4 position-relative">
                <aside class="sidebar" data-plugin-sticky="" data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 120}}">

                    @include('frontend.layout.form')

                    <div class="sidebar-widget categories mt-3">
                        <div class="widget-content">
                            <h3>Hizmetler</h3>
                            <ul class="services-categories">
                                @foreach($Service->where('category', 1) as $item)
                                <li>
                                    <a href="{{ route('servicedetail' , $item->slug)}}" title="{{ $item->title }}">
                                        {{ $item->title }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="widget-content">
                            <h3>Projeler</h3>
                            <ul class="services-categories">
                                @foreach($Service->where('category', 2) as $item)
                                    <li>
                                        <a href="{{ route('servicedetail' , $item->slug)}}" title="{{ $item->title }}">
                                            {{ $item->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </aside>
            </div>
        </div>
    </div>
@endsection
