@extends('front-office.layout.main')

@section('slide')
<div class="inner-page-banner2">
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <div class="slider-contant" data-animation="animated fadeInRight">
                      <h3 style="margin-top: 400px;padding-bottom: 1px;">Contactez <span class="color-yellow">Nous</span></h3>
      </div>
     </div>
    </div>
 </div>
@endsection

@section('content')
<section id="contant" class="contant main-heading team">
    <div class="row">
       <div class="container">
          <div class="contact">
             <div class="col-md-12">
                <div class="map"> 
                   <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d6386.493119898279!2d10.19112487610724!3d36.83657066976436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sMaison%20des%20f%C3%A9d%C3%A9rations%20sportives%201er%20%C3%A9tage%20%E2%80%93%20Bloc%20A%20Av.%20Med%20Ali%20Akid%20B.P.%2051%20Cit%C3%A9%20Olympique%201003%20%E2%80%93%20Tunis!5e0!3m2!1sfr!2stn!4v1621130469339!5m2!1sfr!2stn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                     </div>
             </div>
             <section id="contact" class="section-bg">

                <div class="container" data-aos="fade-up">
          
                  <div class="section-header">
                    <h2>Contactez Nous</h2>
                    <div> space-100</div>
                  </div>
          
                  <div class="row contact-info">
          
                    <div class="col-md-4">
                      <div class="contact-address">
                         <li><a class="phone" href="#"><i class="fa fa-phone"></i></a></li>
                        <h3>Addresse</h3>
                        <address>Maison des fédérations sportives
                         1er étage – Bloc A Av. Med Ali Akid
                         B.P. 51 Cité Olympique 1003 – Tunis</address>
                      </div>
                    </div>
          
                    <div class="col-md-4">
                      <div class="contact-phone">
                         <li><a class="phone" href="#"><i class="fa fa-phone"></i></a></li>
                        <h3>Téléphone</h3>
                        <p><a href="tel:(+216) 71 755 100">(+216) 71 755 100</a></p>
                      </div>
                    </div>
          
                    <div class="col-md-4">
                      <div class="contact-fax">
                         <li><a class="phone" href="#"><i class="fa fa-phone"></i></a></li>
                        <h3>Fax</h3>
                        <p><a href="(+216) 71 236 999">(+216) 71 236 999</a></p>
                      </div>
                    </div>
          
                  </div>
                  @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                   @endif
                  <div class="form" >
                    
                    <form action="{{ route('send.email')}}" method="post" role="form" class="php-email-form">
                      @csrf
                      <div class="row">
                        <div class="form-group col-md-6">
                          <input type="text" name="name" class="form-control" id="name" placeholder="Nom" required>
                        </div>
                        <div class="form-group col-md-6 mt-3 mt-md-0">
                          <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                        </div>
                      </div>
                      <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required>
                      </div>
                      <div class="form-group mt-3">
                        <textarea class="form-control" name="content" rows="5" placeholder="Message" required></textarea>
                      </div>
                      <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                      </div>
                      <div class="text-center"><button type="submit">Envoyer</button></div>
                    </form>
                  </div>
          
                </div>
              </section>
          </div>
       </div>
    </div>
 </section>

 <section id="supporters" class="section-with-bg">

    <div class="container" data-aos="fade-up">
      <div class="section-header">
       <div class="main-heading sytle-2">
        <h2>Sponsors</h2>
      </div>
    </div>
      <div class="row no-gutters supporters-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">

        <div class="col-lg-3 col-md-4 col-xs-6">
          <div class="supporter-logo">
            <img src="/front-office/images/tunisair logo.jpg" class="img-responsive" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6">
          <div class="supporter-logo">
            <img src="/front-office/images/Tunisie-Telecom logo.jpg" class="img-responsive" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6">
          <div class="supporter-logo">
            <img src="/front-office/images/tunisair logo.jpg" class="img-responsive" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6">
          <div class="supporter-logo">
            <img src="/front-office/images/Tunisie-Telecom logo.jpg" class="img-responsive" alt="">
          </div>
        </div>

        

      </div>
      <div class="space-100"></div>
    </div>

  </section>
@endsection
