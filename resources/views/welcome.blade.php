@extends('front-office.layout.main')
@section('slide')
   <div class="full-slider">
      <div id="carousel-example-generic" class="carousel slide">
         <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner" role="listbox">

            <div class="item active deepskyblue" data-ride="carousel" data-interval="5000">
               <div class="carousel-caption">
                  <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                  <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                     <div class="slider-contant" data-animation="animated fadeInRight">
                        <h3>La Fédération tunisienne <br>de <span class="color-yellow">volleyball</span><br>présente</h3>
                        <p>le Mondiale 2022 en brazil<br>la liste des equipes qualifiéz</p>
                        <button class="btn btn-primary btn-lg">Savoir plus</button>
                     </div>
                  </div>
               </div>
            </div>
      
      
            <div class="item skyblue" data-ride="carousel" data-interval="5000">
               <div class="carousel-caption">
                  <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                  <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                     <div class="slider-contant" data-animation="animated fadeInRight">
                        <h3>beach volleyball<br>En <span class="color-yellow">Tunisie</span><br>Aujourd'hui</h3>
                        <p>You can make a case for several potential winners of<br>the expanded European Championships.</p>
                        <button class="btn btn-primary btn-lg">Savoir plus</button>
                     </div>
                  </div>
               </div>
            </div>
   
            <div class="item darkerskyblue" data-ride="carousel" data-interval="5000">
               <div class="carousel-caption">
                  <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                  <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                     <div class="slider-contant" data-animation="animated fadeInRight">
                        <h3>Les équipes<br>Nationale <span class="color-yellow">Dames</span><br>qualifié</h3>
                        <p>Les qualification de Mondiale 2022 en chine</p>
                        <button class="btn btn-primary btn-lg">Savoir plus</button>
                     </div>
                  </div>
               </div>
            </div>

         </div>
   
      
         <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
         <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
         </a>
         <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
         <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
         </a>
      </div>

      <div class="news">
         <div class="container">
            <div class="heading-slider">
               <p class="headline"><i class="fa fa-star color-yellow" aria-hidden="true"></i> Grands titres :</p>
   
               <h1>
               <a href="" class="typewrite" data-period="20ms" data-type='[ "رسالة تهنئة من رئيس الاتحاد الدولي للكرة الطائرة الدكتور اريى قراسة لرئيس الجامعة التونسية للكرة الطائرة الدكتور فراس الفالح بخصوص ", "Suite à la participation du président de la Fédération Tunisienne de Volleyball Dr Firas El Felah au congrès de la FIVB au Mexique et en présence de Mr Eric Tanguy, président de la Fédération Française de Volleyball, Dr Firas El Felah a signé une convention  avec la FFVOLLEY le 16/11/2018. "]'>
               <span class="wrap"></span>
               </a>
               </h1>	   
               <span class="wrap"></span>
               </a>
            </div>
         </div>
      </div>
   </div>
@endsection

    @section('content')
    
     <section id="contant" class="contant">
        <div class="main-heading sytle-2">
           <h2>Actualité</h2>
        </div>
        <div class="container">
           <div class="row">
              <div class="col-lg-4 col-sm-4 col-xs-12">
                 <aside id="sidebar" class="left-bar">
                    <div class="banner-sidebar">
                       <img class="img-responsive" src="/front-office/images/Eq nationale.jfif" alt="#" />
                       <h3>La Tunisie retrouve son piédestal.</h3>
                    </div>
                 </aside>
                 <h4 style="background-color: #D80E2A ; color: #fff;">Designation des matches</h4>
                   <aside id="sidebar" class="left-bar">
                    <h4>championnat Nationale A <br>Seniors Hommes </h4>
                    <div class="feature-matchs">
                       <div class="team-btw-match">
                          <ul>
                             <li>
                                <img src="/front-office/images/ess midium.png" alt="">
                                <span>ESS</span>
                             </li>
                             <li class="vs"><span>vs</span></li>
                             <li>
                                <img src="/front-office/images/est midium.png" alt="">
                                <span>EST</span>
                             </li>
                          </ul>
                          <ul>
                             <li>
                                <img src="/front-office/images/ess midium.png" alt="">
                                <span>ESS</span>
                             </li>
                             <li class="vs"><span>vs</span></li>
                             <li>
                                <img src="/front-office/images/est midium.png" alt="">
                                <span>EST</span>
                             </li>
                          </ul>
                          <ul>
                             <li>
                                <img src="/front-office/images/ess midium.png" alt="">
                                <span>ESS</span>
                             </li>
                             <li class="vs"><span>vs</span></li>
                             <li>
                                <img src="/front-office/images/est midium.png" alt="">
                                <span>EST</span>
                             </li>
                          </ul>
                         </div>
                    </div>
                 </aside>
                 <aside id="sidebar" class="left-bar">
                    <h4>championnat Nationale A <br>Seniors Dames </h4>

                    <div class="feature-matchs">
                       <div class="team-btw-match">
                          <ul>
                             <li>
                                <img src="/front-office/images/ess midium.png" alt="">
                                <span>CSS</span>
                             </li>
                             <li class="vs"><span>vs</span></li>
                             <li>
                                <img src="/front-office/images/ess midium.png" alt="">
                                <span>ESS</span>
                             </li>
                          </ul>
                          <ul>
                             <li>
                                <img src="/front-office/images/ess midium.png" alt="">
                                <span>CSS</span>
                             </li>
                             <li class="vs"><span>vs</span></li>
                             <li>
                                <img src="/front-office/images/est midium.png" alt="">
                                <span>EST</span>
                             </li>
                          </ul>
                       </div>
                    </div>
                       </aside>
                       <div class="main-heading sytle-2">
                          <h4 style="background-color: #D80E2A ; color: #fff;">Classement</h4>
                       </div>
                 <aside id="sidebar" class="left-bar">
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
                                <td>1</td>
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
                 </aside>
                 <aside id="sidebar" class="left-bar">
                    <div class="banner-sidebar">
                       <img class="img-responsive " src="/front-office/images/pub 2.png" alt="#" />
                    </div>
                 </aside>
                 <div class="content-widget top-story" style="background: url(/front-office/images/links\ zone.jpg);">
                    <div class="top-stroy-header">
                       <h2>Communiqués &nbsp  &nbsp  &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href="#" class="fa fa-fa fa-angle-right"></a></h2>
                       <span class="date">Juin 05, 2021</span>
                       <h2>Communiqués</h2>
                    </div>
                    <ul class="other-stroies ">
                       <li><a href="#">Classement poule A play out</a></li>
                       <li><a href="#">يلاغ حول غلق باب الترشحات </a></li>
                       <li><a href="#">بلاغ حول التدابر الاستثنائية للتوقي من فيروس كوفيد 19</a></li>
                       <li><a href="#"> 
                          بلاغ وزارة شؤون الشباب و الرياضية</a></li>
                       <li><a href="#">une journée de formation et recyclage</a></li>
                       <li><a href="#">Com_ Mutation Démission 2020-2021.</a></li>
                    </ul>
                 </div>
              </div>
              <div class="col-lg-8 col-sm-8 col-xs-12">
                 @foreach ($articles as $article )
                 <div class="news-post-holder">
            
                  <div class="news-post-widget">
                     <img class="img-responsive" src="{{'/img'.'/'.$article->attachment}}" alt="">
                     <div class="news-post-detail">
                        <p>
                           {!! $article->description !!}
                           <span class="date">20 mars 2021</span>                          
                     </div>
                  </div>
                  
               </div>
                 @endforeach
              </div>
           </div>
        </div>
     </section>
     <section>
        <div class="container">
        </div>
        <div class="space-50"></div>
      </div>
           <div class="row">
              <div class="col-md-12">
                 <div class="full">
                    <div class="main-heading sytle-2">
                       <h2>Galerie</h2>
                      
                    </div>
                 </div>
              </div>

           </div>
        </div>
     </section>
     <section class="video_section_main theme-padding middle-bg vedio">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="full">
                    <div class="match_vedio">
                       <iframe width="1105" height="500" src="https://www.youtube.com/embed/LemEycRPu2w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <div class="team-holder theme-padding">
        <div class="container">
           <div class="main-heading-holder">
              <div class="main-heading sytle-2">
                 <h2>Joueur de la semaine</h2>
                 <p>Nous presente les meilleur joueur de la semaine<br>dans chaque ligue</p>
              </div>
           </div>
           <div class="row">
              <div class="col-sm-10 col-sm-offset-1">
                 @foreach ($joueurs as $joueur)
                 <div class="col-md-4 col-sm-6">
                  <div class="card-container">
                     <div class="card">
                         <div class="front">
                         
                            <div class="user">
                               <img class="img-circle" src="/front-office/images/vol men.jpg"/>
                           </div>
                             <div class="content">
                                 <div class="main" >
                                     <h3 class="name">{{$joueur->nom}}</h3>
                                     <p class="profession">{{$joueur->post}}</p>
                                  
                                 </div>
                                 
                             </div>
                         </div> 
                         <div class="back">
                             <div class="header">
                                 <h5 class="motto"><img src="/front-office/images/ess midium.png" alt=""><br>"Esperance Sportive tunisien"</h5>
                             </div>
                             <div class="content">
                                 <div class="main">
                                     <h4 class="text-center">{{$joueur->post}}</h4>
                                     <div class="feature-matchs">
                                        <table class="table table-bordered table-hover">
                                           <thead>
                                              <tr bgcolor="#D80E2A"  >
                                                 <th>Match</th>
                                                 <th>But</th>
                                                 <th>C.R</th>
                                                 <th>C.J</th>
                                                 <th>Block</th>
                                                
                                              </tr>
                                           </thead>
                                           <tbody>
                                              <tr>
                                                 <td>35</td>
                                                 <td>{{$joueur->buts}}</td>
                                                 <td>2</td>
                                                 <td>0</td>
                                                 <td>10</td>
                                              </tr>
                                             
                                              </tr>
                                           </tbody>
                                        </table>
                                     </div>
     
                                     <div class="stats-container">
                                         <div class="stats">
                                             <h4>Taille</h4>
                                             <p>
                                                {{$joueur->taille}}                                             </p>
                                         </div>
                                         <div class="stats">
                                             <h4>Poids</h4>
                                             <p>
                                                {{$joueur->poids}}                                             </p>
                                         </div>
                                         <div class="stats">
                                             <h4>Age</h4>
                                             <p>
                                                 27
                                             </p>
                                         </div>
                                     </div>
     
                                 </div>
                             </div>
                             <div class="footer">
                               <li><a href="joueur">Plus detailles</a></li>
                             </div>
                         </div> 
                     </div> 
                 </div> 
             </div> 
                 @endforeach
               
    
              </div>
          </div> 
          <div class="space-100"></div>
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