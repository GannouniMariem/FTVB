@extends('front-office.layout.main')

@section('slide')
<div class="inner-page-banner">
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <div class="slider-contant" data-animation="animated fadeInRight">
                      <h3 style="margin-top: 400px;padding-bottom: 1px;">Galerie<span class="color-yellow">"/front-office/Images"</span></h3>
      </div>
     </div>
    </div>
 </div>
@endsection

@section('content')
    
<section>
    <div class="container">
       <div class="row">
       <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
           <h1 class="gallery-title"></h1>
       </div>
    
       <div align ="center">
           <button class="btn btn-default filter-button Active" data-filter="all">TOUS</button>
           <button class="btn btn-default filter-button" data-filter="EqN">Equipe Nationale</button>
           <button class="btn btn-default filter-button" data-filter="CHN">Championnat Nationale</button>
           <button class="btn btn-default filter-button" data-filter="CPT">Coupe</button>
           <button class="btn btn-default filter-button" data-filter="MD">Media</button>
       </div>
       <br/>
    
       <div class="row">
    
    @foreach ($gallerys as $image)
    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter EqN">
        <a href="{{"/gallery"."/".$image->url}}" class="fancybox" rel="ligthbox">
            <img  src="{{"/gallery"."/".$image->url}}"  class="zoom img-fluid "  alt="">
           
        </a>
    </div>
    @endforeach
          

      
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