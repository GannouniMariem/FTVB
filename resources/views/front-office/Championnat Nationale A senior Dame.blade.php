@extends('front-office.layout.main')

@section('slide')
<div class="inner-page-banner">
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="slider-contant" data-animation="animated fadeInRight">
        <h3 style="margin-top: 400px;padding-bottom: 1px;">L'équipe Nationale A Seniors <span class="color-yellow">'Dames'</span></h3>
      </div>
     </div>
    </div>
 </div>
@endsection

@section('content')
<section>
    <div class="Designation-main-section Designation-game-result-full">
       <div class="container">
           <div class="row">
    
               <div class="col-md-6 col-xs-6">
                   <div class="Designation-classic-heading"><h2 style="background-color: #D80E2A ;padding: 15px 15px 15px 15px;color: #fff;text-align: center;">Les derniéres Resultats</h2></div>
                   <div class="Designation-latest-result">
                       <div class="Designation-result-one">
                           <figure><img src="/front-office/images/est grand.png" alt=""></figure>
                           <section>
                               <h4>Esperance.ST</h4>
                               <span>(21)</span>
                               <span>(21)</span>
                               <span>(21)</span>
                           </section>
                       </div>
                       <div class="Designation-result-text ">
                           <div class="Designation-match-date">
                               <h4>Championnat Nationale A </h4>
                               <time datetime="2021-05-24 20:00">Samedi 24 Mai 2021</time>
                           </div>
                           <div class="Designation-score-result">
                               <h5>Score finale</h5>
                               <span>3 <small>:</small> 1</span>
                           </div>
                       </div>
                       <div class="Designation-result-one Designation-result-two  ">
                           <figure style="margin-right: 0px;"><img src="/front-office/images/ess grand.png" alt=""></figure>
                           <section style="margin-left: -33px;">
                               <h4>ES.Sahel</h4>
                               <span>(21)</span>
                               <span>(21)</span>
                               <span>(21)</span>
                           </section>
                       </div>
                   </div>
               </div>
               <div class="col-md-6">
                   <div class="Designation-classic-heading"><h2 style="background-color: #D80E2A ;padding: 15px 15px 15px 15px;color: #fff;text-align: center;">Match prochain</h2></div>
                   <div class="Designation-next-game">
                       <div class="Designation-result-one">
                           <figure><img src="/front-office/images/ess grand.png" alt=""></figure>
                           <section>
                               <h4>CS.Sfaxien </h4>
                           </section>
                       </div>
                       <div class="Designation-next-game-text">
                           <time datetime="2008-02-14 20:00">Samedi 24 Mai 2021<br> <span>19:00</span></time>
                           <span>Madison Stadium</span>
                       </div>
                       <div class="Designation-result-one Designation-result-two">
                           <figure><img src="/front-office/images/est grand.png""></figure>
                           <section>
                               <h4>ES.Sahel</h4>
                           </section>
                       </div>
                       <h6 class="game-countdown-heading">3j : 16h : 45m : 36s</h6>
                   </div>
                   <div id="Designation-game-countdown" class="Designation-game-countdown"></div>
               </div>
    
           </div>
       </div>
    </div>
    </section>
         <section id="contant" class="contant">
             <div class="container">
                <div class="row">
                   <div class="col-lg-9 col-sm-12 col-xs-12">
                     @foreach ($articles as $article )
                     <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="news-post-widget">
                           <img class="img-responsive" src="{{"/img"."/".$article->attachment}}" alt="">
                           <div class="news-post-detail">
                          {!! $article->description !!}
                              <span class="date">20 juin 2021</span>
                           </div>
                        </div>
                     </div>
                   @endforeach
                   </div>
                   <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="content-widget top-story" style="background: url(/front-office/images/links\ zone.jpg);">
                      <div class="top-stroy-header">
                         <h2>Communiqués &nbsp  &nbsp &nbsp <a href="#" class="fa fa-fa fa-angle-right"></a></h2>
                         <span class="date">Juin 05, 2021</span>
                      </div>
                      <ul class="other-stroies ">
                         <li><a href="#">Calendrier </a></li>
                         <li><a href="#">يلاغ حول غلق باب الترشحات </a></li>
                         <li><a href="#"> 
                            بلاغ وزارة شؤون الشباب و الرياضية</a></li>
                         <li><a href="#">une journée </a></li>
                         <li><a href="#">Com_ Mutation </a></li>
                      </ul>
                   </div>
                </div>
                   </div>
                </div>
             </div>
          </section>
          <div class="container">
          <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="feature-matchs">
               <h4>Championnat Nationale A seniors dames</h4>
               <table class="table table-bordered table-hover">
                  <thead>
                     <tr>
                        <th>#</th>
                        <th>Equipe</th>
                        <th>M</th>
                        <th>P</th>
                        <th>V</th>
                        <th>D</th>
                        <th>N</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>1</td>
                        <td><img src="/front-office/images/ess mini.png" alt="">Etoile.ss</td>
                        <td>10</td>
                        <td>21</td>
                        <td>20</td>
                        <td>20</td>
                        <td>20</td>
                     </tr>
                     <tr>
                        <td>2</td>
                        <td><img src="/front-office/images/est mini.png" alt="">Esperance.st</td>
                        <td>10</td>
                        <td>19</td>
                        <td>20</td>
                        <td>20</td>
                        <td>20</td>
                     </tr>
                     <tr>
                        <td>3</td>
                        <td><img src="/front-office/images/ess mini.png" alt="">cs.Sfaxien</td>
                        <td>10</td>
                        <td>15</td>
                        <td>20</td>
                        <td>20</td>
                        <td>20</td>
                     </tr>
                     <tr>
                        <td>4</td>
                        <td><img src="/front-office/images/est mini.png" alt="">A.Carthage</td>
                        <td>10</td>
                        <td>10</td>
                        <td>0</td>
                        <td>0</td>
                        <td>20</td>
                     </tr>
                     <tr>
                        <td>5</td>
                        <td><img src="/front-office/images/ess mini.png" alt="">OSCC</td>
                        <td>10</td>
                        <td>6</td>
                        <td>30</td>
                        <td>60</td>
                        <td>20</td>
                     </tr>
                     <tr>
                        <td>6</td>
                        <td><img src="/front-office/images/est mini.png" alt="">Tabarka</td>
                        <td>10</td>
                        <td>4</td>
                        <td>20</td>
                        <td>60</td>
                        <td>20</td>
                     </tr>
                  </tbody>
               </table>
            </div>
          </div>
         </div>
    
         <section>
          <div class="container">
          </div>
          <div class="space-50"></div>
        </div>
             <div class="row">
                <div class="col-md-12">
                   <div class="full">
                      <div style="margin-top: 50px;" class="main-heading sytle-2">
                         <h2>Galerie</h2>
                        
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </section>
       <section class="video_section_main ">
          <div class="container ">
             <div class="row">
                <div class="col-md-12">
                   <div class="full">
                      <div class="container-fluid pictures-container" data-aos="fade-up" data-aos-delay="100">
                          <div class="row g-0">
                           @foreach ($gallerys as $image )
                           <div class="col-lg-3 col-md-4 ">
                               <div class="venue-gallery">
                                 <a href="#" class="glightbox" >
                                   <img src="{{"/gallery"."/".$image->url}}" class="zoom img-fluid "  alt="">
                                 </a>
                               </div>
                             </div>
                           @endforeach
                   </div>
                </div>
             </div>
          </div>
         </div>
         <div class="space-100"></div>
       </div>
       </section>
      </div>
      </div>
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