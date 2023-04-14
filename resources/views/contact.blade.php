<head>
    @include('partials.head')
</head>
<body>
@include('partials.nav')
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="wrapper">
                    <div class="row no-gutters">
                        <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <h3 class="mb-4 contact-title">Skontaktuj się z nami</h3>
{{--                                <div id="form-message-warning" class="mb-4"></div>--}}
{{--                                <div id="form-message-success" class="mb-4">--}}
{{--                                    Your message was sent, thank you!--}}
{{--                                </div>--}}
                                <form method="POST" id="contactForm" name="contactForm" class="contactForm">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="name">Imię i nazwisko</label>
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Imię i nazwisko">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="email">E-mail</label>
                                                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="subject">Temat</label>
                                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Temat">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="#">Wiadomość</label>
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Wiadomość"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="submit" value="Wyślij" class="send-button btn btn-primary">
                                                <div class="submitting"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 d-flex align-items-stretch ">
                            <div class="info-wrap bg-primary w-100 p-md-5 p-4 info-box">
                                <h3 class="label-info-box">Lorem ipsum dolor sit</h3>
                                <p class="mb-4 ">consectetur adipiscing elit, sed do eiusmod tempor incididunt </p>
                                        <p><span class="label-info-box">Adres:</span> ul. Sokołowskiego 19 31-436 Kraków</p>
                                        <p><span class="label-info-box">Telefon:</span> <a href="tel://124108860">+48 12 410 88 60</a></p>
                                            <p class="second-phone"><a href="tel://124108860">+48 12 410 88 60</a></p>
                                        <p><span class="label-info-box">E-mail:</span> <a href="mailto:biuro@reklamiarnia.pl">biuro@reklamiarnia.pl</a></p>
                                        <p><span class="label-info-box">Facebook:</span> <a href="#">yoursite.com</a></p>
                                        <p><span class="label-info-box">Instagram:</span> <a href="#">yoursite.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="spacer1"></div>
<div class="lolo">
    <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=1000&amp;height=400&amp;hl=en&amp;q=ul. Sokołowskiego 19 31-436 Kraków&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.gachacute.com/">www.gachacute.com</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>
</div>
<div class="spacer2"></div>

</body>
<footer>
    @include('partials.footer')
</footer>


