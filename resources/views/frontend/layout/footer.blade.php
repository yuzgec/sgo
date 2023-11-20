<footer class="footer-bg footer-p pt-95 pb-30 ">
    <div class="footer-top pb-30">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget mb-30">
                        <img src="/logob.png" class="img-fluid" alt="{{ config('app.name') }}">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            <h5>İletişim Bilgileri</h5>
                        </div>
                        <div class="footer-link">
                            <div class="f-contact">
                                <ul>
                                    <li>
                                        <i class="icon dripicons-phone"></i>
                                        <span>{{ config('settings.telefon1') }}<br>{{ config('settings.telefon2') }}</span>
                                    </li>
                                    <li>
                                        <i class="icon dripicons-mail"></i>
                                        <span><a href="mailto:{{ config('settings.email1') }}">{{ config('settings.email1') }}</a><br><a href="mailto:{{ config('settings.email2') }}">{{ config('settings.email2') }}</a></span>
                                    </li>
                                    <li>
                                        <i class="fal fa-map-marker-alt"></i>
                                        <span>{{ config('settings.adres1') }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            <h5>Hizmetlerimiz</h5>
                        </div>
                        <div class="footer-link">
                            <ul>
                                @foreach($Service->where('category',1) as $item)
                                    <li><a href="{{ route('servicedetail', $item->slug) }}">{{ $item->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            <h5>PREJELER</h5>
                        </div>
                        <div class="footer-link">
                            <ul>
                                @foreach($Service->where('category',2) as $item)
                                    <li><a href="{{ route('projectdetail', $item->slug) }}">{{ $item->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright-text text-center">
                        <p>&copy; {{ date('Y') }} SGO Çelik.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
