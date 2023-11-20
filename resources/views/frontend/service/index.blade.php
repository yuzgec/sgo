@extends('frontend.layout.app')
@section('content')

    <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(/back.jpg);">
        <div class="container" >
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="breadcrumb-wrap text-center">
                        <div class="breadcrumb-title mb-30">
                            <h1>Hizmetlerimiz</h1>
                        </div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Anasayfa</a></li>
                                <li class="breadcrumb-item"><a href="#" class="text-dark">Hizmetlerimiz</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="services-area services-bg services-two pt-95 pb-70"  style="background-image:url(/frontend/img/bg/services_aliment_bg.png); background-size: contain; background-repeat: no-repeat;background-position: center center;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10">
                    <div class="section-title text-center pl-40 pr-40 mb-80 wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
                        <span><small class="circle-left"><img src="/frontend/img/bg/circle_Left.png" alt="img"></small> SGO ÇELİK<small class="circle-right"><img src="/frontend/img/bg/circle_right.png" alt="img"></small></span>
                        <h2>HİZMETLERİMİZ</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($Service->where('category',1) as $item)
                    <div class="col-lg-6 col-md-6">
                        <div class="s-single-services  {{ ($loop->first) ? 'active' : null}}  active wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s"
                             style="min-height: 290px;background-image: url({{ (!$item->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $item->getFirstMediaUrl('page', 'thumb') }})">
                            <div class="second-services-content">
                                <p class="position-absolute"  style="bottom:15px;font-size: 22px;font-weight: bold"><a href="{{ route('servicedetail', $item->slug) }}">{{ $item->title }}</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-12">
                    <p><b>Çelik Silo Tank Üretimi: </b>SGO Çelik olarak, gıda, tarım, inşaat ve birçok farklı sektörde kullanılan çelik silo tanklarımızla tanınıyoruz. Geniş depolama kapasiteleri ve yüksek dayanıklılık özellikleri ile öne çıkan silo tanklarımız, müşterilerimizin depolama ihtiyaçlarını güvenle karşılamaktadır.

                    <p> <b> Çelik Palet Üretimi: </b> Lojistik sektörünün ihtiyaçları doğrultusunda tasarlanan çelik paletlerimiz, yüksek taşıma kapasitesi ve uzun ömürlü kullanım avantajlarıyla dikkat çekmektedir. Bu ürünler, depolama ve taşıma süreçlerinde verimliliği ve güvenliği artırmak için ideal çözümler sunmaktadır.

                    <p> <b>  Çelik Beton Kalıpları:  </b>İnşaat sektöründe kullanılan çelik beton kalıplarımız, mükemmel dayanıklılık ve kolay kullanım özellikleri ile fark yaratmaktadır. Bu kalıplar, karmaşık yapıların inşaatında bile yüksek performans sağlamak için tasarlanmıştır.

                    <p> <b> Makine Parçaları Üretimi:  </b>Hassas mühendislik ve üstün teknoloji kullanarak, müşterilerimizin özel ihtiyaçlarına yönelik makine parçaları üretiyoruz. Bu üretim sürecinde, kalite ve performansı optimize etmek için en yeni teknolojileri kullanmaktayız.

                    <p> <b>Özel Projeler ve Çözümler:  </b>Her müşterinin ihtiyacına özel çözümler sunan SGO Çelik, özel projeler için tasarım, üretim ve danışmanlık hizmetleri de sağlamaktadır. Bu hizmetler, müşterilerimizin iş süreçlerinde maksimum verimlilik ve maliyet etkinliği elde etmelerini sağlamak için özelleştirilmektedir.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
