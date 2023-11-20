<header class="header-area">
    <div class="header-top second-header d-none d-md-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-8 d-none d-md-block">
                    <div class="header-cta">
                        <ul>
                            <li>
                                <i class="icon dripicons-phone"></i>
                                <span><a href="tel:{{ config('settings.telefon1') }}" class="text-dark">{{ config('settings.telefon1') }}</a></span>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <span><a href="mailto:{{ config('settings.email1') }}" class="text-dark">{{ config('settings.email1') }}</a></span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 d-none d-lg-block">
                    <div class="header-social text-right">
                        <span>
                            <a href="https://facebook.com/{{ config('settings.facebook') }}" title="Facebook"><i class="fab fa-facebook"></i></a>
                            <a href="https://instagram.com/{{ config('settings.instagram') }}" title="İnstagram"><i class="fab fa-instagram"></i></a>
                       </span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 d-none d-md-block">
                    <a href="{{ route('contactus') }}" class="top-btn">Teklif İste</a>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-area">
        <div class="container">
            <div class="second-menu">
                <div class="row">
                    <div class="col-md-4">

                            <a href="{{ route('home') }}" title="{{ config('app.name') }}">
                                <img src="/logo.jpg" alt="{{ config('app.name') }}" class="img-fluid baytech-logo" style="width: 300px">
                            </a>
                    </div>
                    <div class="col-md-8 d-flex align-items-center justify-content-center">
                        <div class="main-menu text-right">
                            <nav id="mobile-menu">
                                <ul>
                                    <li><a href="a{{ route('home') }}" title="Anasayfa">Anasayfa</a></li>
                                    <li><a href="{{ route('corporatedetail' ,'hakkimizda') }}" title="Hakkımızda">Hakkımızda</a></li>
                                    <li><a href="{{ route('corporatedetail', 'kalite') }}" title="Kalite">Kalite</a></li>
                                    <li class="has-sub">
                                        <a href="{{ route('service') }}" title="Hizmetlerimiz">Kaynaklı İmalatlar</a>
                                        <ul>
                                            @foreach($Service->where('category', 1) as $item)
                                                <li>
                                                    <a href="{{ route('servicedetail', $item->slug) }}" title="{{ $item->title }}">
                                                        {{ $item->title }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="has-sub">
                                        <a href="{{ route('project') }}" title="Projelerimiz">Projeler</a>
                                        <ul>
                                            @foreach($Service->where('category', 2) as $item)
                                                <li>
                                                    <a href="{{ route('projectdetail', $item->slug) }}" title="{{ $item->title }}">
                                                        {{ $item->title }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('reference') }}" title="Referanslar">Referanslar</a></li>
                                    <li><a href="{{ route('contactus') }}" title="İletişim">İletişim</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
