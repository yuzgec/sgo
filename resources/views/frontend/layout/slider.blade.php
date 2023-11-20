<section id="home" class="slider-area fix p-relative">
    <div class="slider-active">
        @foreach($Slider as $item)
        <div class="single-slider slider-bg slider-bg5 d-flex align-items-center">
            <img src="{{ $item->getFirstMediaUrl('web')}}" class="position-absolute d-none d-sm-block" style="width: 100%" >
            <img src="{{ $item->getFirstMediaUrl('mobil')}}" class="position-absolute d-block d-sm-none" style="width: 100%" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="slider-content s-slider-content text-left">
                            <span data-animation="fadeInUp" data-delay=".2s">SGO ÇELİK</span>
                            <h2 data-animation="fadeInUp" data-delay=".4s">{{ $item->text1 }}<br> {{ $item->text2 }}</h2>
                            <div class="slider-btn mt-40">
                                <a href="{{ $item->button_link }}" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">{{ ($item->button_text) ? $item->button_text : 'Devamını Oku' }}</a>
                                <div class="btn-after" data-animation="fadeInRight" data-delay=".8s"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                    </div>
                </div>
            </div>
        </div>
        @endforeach
       {{-- <div class="single-slider slider-bg slider-bg5 d-flex align-items-center" >
            <img src="/banner2.jpg" class="position-absolute" style="width: 100%" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="slider-content s-slider-content text-left">
                            <span data-animation="fadeInUp" data-delay=".2s">Bay-Tech Makine - Mühendislik - Taahhüt </span>
                            <h2 data-animation="fadeInUp" data-delay=".4s">Sizin İçin Yenilikçi
                                <br> Çözümler Üretiyoruz</h2>
                            <div class="slider-btn mt-40">
                                <a href="#" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Devamını Oku</a>
                                <div class="btn-after" data-animation="fadeInRight" data-delay=".8s"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                    </div>
                </div>
            </div>
        </div>--}}
    </div>
</section>
