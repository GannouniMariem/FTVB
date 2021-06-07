@extends('front-office.layout.main')

@section('slide')
<div class="inner-page-banner">
   <div class="container">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
       <div class="slider-contant" data-animation="animated fadeInRight">
       <h3 style="margin-top: 400px;padding-bottom: 1px;">Beach volleyball <span class="color-yellow">Les équipes Nationale</span></h3>
     </div>
    </div>
   </div>
</div>
@endsection

@section('content')
<section id="contant" class="contant">
    <div class="container">
       <div class="row">
          <div class="col-lg-9 col-sm-12 col-xs-12">
             <div class="news-post-holder">
                @foreach ($articles as $article)
                <div class="col-lg-6 col-sm-6 col-xs-12">
                  <div class="news-post-widget">
                     <img class="img-responsive" src="{{"/img"."/".$article->attachment}}" alt="">
                     <div class="news-post-detail">
                     <p>{!! $article->description !!}</p>
                        <span class="date">20 juin 2021</span>
                     </div>
                  </div>
               </div>
                @endforeach
                
              
             </div>
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
      <h4>Championnat Nationale seniors A hommes </h4>
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
               <td>Amir Hamdaoui / Souad rhimi</td>
               <td>10</td>
               <td>21</td>
               <td>20</td>
               <td>20</td>
               <td>20</td>
            </tr>
            <tr>
               <td>2</td>
               <td>Amir Hamdaoui / Souad rhimi</td>
               <td>10</td>
               <td>19</td>
               <td>20</td>
               <td>20</td>
               <td>20</td>
            </tr>
            <tr>
               <td>3</td>
               <td>Amir Hamdaoui / Souad rhimi</td>
               <td>10</td>
               <td>15</td>
               <td>20</td>
               <td>20</td>
               <td>20</td>
            </tr>
            <tr>
               <td>4</td>
               <td>Amir Hamdaoui / Souad rhimi</td>
               <td>10</td>
               <td>10</td>
               <td>0</td>
               <td>0</td>
               <td>20</td>
            </tr>
            <tr>
               <td>5</td>
               <td>Amir Hamdaoui / Souad rhimi</td>
               <td>10</td>
               <td>6</td>
               <td>30</td>
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
            @foreach ($gallerys as $gallery )
                <div class="col-lg-3 col-md-4">
                    <div class="pictures">
                    <a href="#" class="glightbox">
                        <img src="{{'/gallery'.'/'.$gallery->url}}" class="zoom img-fluid "  alt="">
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