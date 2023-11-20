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
                                <li class="breadcrumb-item"><a href="{{ route('blog') }}" class="text-dark">Haberler</a></li>
                                <li class="breadcrumb-item text-dark" aria-current="page">{{ $Detail->title }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row pb-4">
            <div class="col-lg-12 mb-5 mb-lg-0 appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200" style="animation-delay: 200ms;">

                @if($Detail->getFirstMediaUrl('page'))
                    <div class="text-center">
                        <img src="{{ $Detail->getFirstMediaUrl('page') }}" class="img-fluid mb-3 mt-4 " alt="{{ $Detail->title }}">

                    </div>
                @endif
                <h2 class="text-color-dark font-weight-bold text-10 pb-2 mb-4"><em>{{ $Detail->title }}</em></h2>

                {!!  $Detail->desc !!}
            </div>
        </div>
    </div>
@endsection
