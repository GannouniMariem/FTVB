@extends('front-office.layout.main')

@section('slide')
<div class="inner-page-banner">
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <div class="slider-contant" data-animation="animated fadeInRight">
                      <h3 style="margin-top: 400px;padding-bottom: 1px;">Coupe de tunisie Seniors <span class="color-yellow">'Hommes'</span></h3>
      </div>
     </div>
    </div>
 </div>
@endsection


@section('content')
<section id="contant" class="contant main-heading team">
    <div class="row">
       <div class="container">
          <div class="col-md-9">
        @foreach ($article as $art)
        <div class="feature-post">
            <div class="feature-img">
               <img src="{{"/img"."/".$art->attachment}}" class="img-responsive" alt="#" />
            </div>
            <div class="feature-cont">
               <div class="post-people">
                  <div class="left-profile">
                     <div class="post-info">
                     </div>
                     <span class="share"></span>
                  </div>
               </div>
               <div class="post-heading">
                  <p>{!! $art->description!!}</p>
                  <h5> 27 Juin, 2021</h5>
                  
               </div>
            </div>
         </div>
        @endforeach
             @foreach ($articles as $post )
             <div class="feature-post small-blog">
                <div class="col-md-5">
                   <div class="feature-img">
                      <img src="{{"/img"."/".$post->attachment}}" class="img-responsive" alt="#" />
                   </div>
                </div>
                <div class="col-md-7">
                   <div class="feature-cont">
                      
                      <div class="post-heading">
                        <p>{!! $post->description !!}</p>
                   <div class="post-info">
                   
                      <span>

                         <h5>2 juin 2021</h5>
                      </span>
                   </div>
                         <div class="full">
                            <a class="btn" href="#">Lire la suite</a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             @endforeach
            
           
          </div>
          <div class="col-md-3">
          <div class="blog-sidebar">
              <h4 style="background-color: #D80E2A ; color: #fff;">Catégorie</h4>
                <div class="category-menu">
                   <ul>
                      <li><a href="#">Senior hommes</a></li>
                      <li><a href="#">Senior Dames</a></li>
                      <li><a href="#">Jeune Garcon</a></li>
                      <li><a href="#">Jeune fille</a></li>
                   </ul>
                </div>
             </div>
             <h4 style="background-color: #D80E2A ; color: #fff;">PROCHAIN MATCH</h4>
             <aside id="sidebar" class="left-bar">
                <div class="feature-matchs">
                   <div class="team-btw-match">
                      <ul>
                         <li>
                            <img src="front-office/images/tunisia flag.png" alt="">
                            <span>Tunisie</span>
                         </li>
                         <li class="vs"><span>vs</span></li>
                         <li>
                            <img src="front-office/images/egypt flag.png" alt="">
                            <span>Egypte</span>
                         </li>
                      </ul>
                      <ul>
                         <li>
                            <img src="front-office/images/tunisia flag.png" alt="">
                            <span>Tunisie</span>
                         </li>
                         <li class="vs"><span>vs</span></li>
                         <li>
                            <img src="front-office/images/belgium flag.png" alt="">
                            <span>Belgique</span>
                         </li>
                      </ul>
                   </div>
                </div>
             </aside>
             <aside id="sidebar" class="left-bar">
                <div class="banner-sidebar">
                   <img class="img-responsive" src="front-office/images/pub 2.png" alt="#">
                  
                </div>
             </aside>
             <aside id="sidebar" class="right-bar">
                <div class="banner">
                   <img class="img-responsive" src="front-office/images/pub.png" alt="#">
                </div>
             </aside>
             <aside id="sidebar" class="left-bar">
                <div class="feature-matchs">
                   <table class="table table-bordered table-hover">
                      <thead>
                         <tr>
                            <th>#</th>
                            <th>Equipe nationale</th>
                            <th>P</th>
                         
                         </tr>
                      </thead>
                      <tbody>
                         <tr>
                            <td>16</td>
                            <td><img src="front-office/images/netherlands flag.png" alt="">Pays-Bas</td>
                            <td>171</td>
                       
                         </tr>
                         <tr>
                            <td>17</td>
                            <td><img src="front-office/images/tunisia flag.png" alt="">Tunisie</td>
                            <td>168</td>
                            
                         </tr>
                         <tr>
                            <td>18</td>
                            <td><img src="front-office/images/egypt flag.png" alt="">Eqypte</td>
                            <td>167</td>
                           
                         </tr>
                         <tr>
                            <td>19</td>
                            <td><img src="front-office/images/belgium flag.png" alt="">Belgique</td>
                            <td>164</td>
                         
                         </tr>
                      </tbody>
                   </table>
                </div>
             </aside>
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
                   <p>L'équipe Nationale Seniors Hommes</p>
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
 
 <div class="dark-section" style="background:url(/front-office/images/volleypic\ 2.jpg)">
    <div class="container">
        <div class="main-heading sytle-2">
            <h2>Effectif</h2>
            <p>Les joueurs de l'equipe nationale Seniors Hommes</p>
         </div>
       <div class="row">
          <div class="col-md-12 col-sm-12">
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

 


    
        </div> 

 
     </div> 

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