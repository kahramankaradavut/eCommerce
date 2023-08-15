<footer class="site-footer border-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-6">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="footer-heading mb-4">Menü</h3>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <ul class="list-unstyled">
                            <li><a href="{{ route('mainPage') }}">Anasayfa</a></li>
                            <li><a href="{{ route('about') }}">Hakkımızda</a></li>
                            <li><a href={{ route('products') }}>Ürünler</a></a></li>
                            <li><a href={{ route('contact') }}>İletişim</a></li>
                        </ul>
                    </div>
                </div>
            </div> 
            <div class="col-md-6 col-lg-6">
                <div class="block-5 mb-5">
                    <h3 class="footer-heading mb-4">İletişim</h3>
                    <ul class="list-unstyled">
                        <li class="address">Adres Bilgilerim Burada</li>
                        <li class="phone"><a href="tel://05555555555">05555555555</a></li>
                        <li class="email">emailaddress@domain.com</li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <p>

                    Copyright &copy; {{date('Y')}} Tüm haklar saklıdır.
                </p>
            </div>

        </div>
    </div>
</footer>
