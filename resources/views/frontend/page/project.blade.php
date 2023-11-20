@extends('frontend.layout.app')
@section('content')

    <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(/back.jpg);">
        <div class="container" >
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="breadcrumb-wrap text-center">
                        <div class="breadcrumb-title mb-30">
                            <h1>Projeler</h1>
                        </div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Anasayfa</a></li>
                                <li class="breadcrumb-item text-dark" aria-current="page">Projeler</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>




        <div class="container mt-5">
            <div class="row">
                @foreach($Service->where('category',2) as $item)
                    <div class="col-md-4">
                        <div class="single-project mb-30">
                            <div class="project-thumb">
                                <img src="{{ $item->getFirstMediaUrl('page', 'thumb') }}" alt="{{ $item->title.' | '.config('app.anem') }}" class="img">
                            </div>
                            <div class="project-info">
                                <h4>{{ $item->title }}</h4>
                                <a href="#">Projeyi İncele
                                    <img src="/frontend/img/portfolio/right_icon.svg" alt="{{ config('app.name') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


@endsection
