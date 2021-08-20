@extends('frontend.layouts.master')
@section('content')
<!-- Banner -->
 <section class="banner">
   <div class="container">
     <div class="row">
       <div class="col-lg-6 dis-flex">
         <div class="content">
           <h2 class="hd"><i class="fas fa-caret-right mr-2"></i>Learn from the world’s best</h2>
           <h2 class="sec-heading">Choose <strong>2500+</strong> Online Video Courses With <strong>New Additions..</strong></h2>
           <p>Enroll Today Get 70% off  For All Courses</p>
           <form class="d-flex">
             <input class="form-control me-2" type="search" placeholder="Search Courses" aria-label="Search">
             <button class="btn" type="submit"><i class="fas fa-search"></i></button>
           </form>
         </div>
       </div>
       <div class="col-lg-6 dis-flex">
         <div class="img-box">
           <img src="{{ asset('frontend/assets/images/a (30).png') }}" class="img-fluid" alt="">
         </div>
       </div>

     </div>
   </div>
 </section>
 <!-- Banner -->
 <!-- Logos -->
 <section class="logos">
   <div class="container">
     <div class="row">
       <div class="col-lg-10 m-auto">
         <ul class="list-unstyled">
           <li><img src="{{ asset('frontend/assets/images/logo (1).png') }}" class="img-fluid" alt=""></li>
           <li><img src="{{ asset('frontend/assets/images/logo (2).png') }}" class="img-fluid" alt=""></li>
           <li><img src="{{ asset('frontend/assets/images/logo (3).png') }}" class="img-fluid" alt=""></li>
           <li><img src="{{ asset('frontend/assets/images/logo (4).png') }}" class="img-fluid" alt=""></li>
           <li><img src="{{ asset('frontend/assets/images/logo (5).png') }}" class="img-fluid" alt=""></li>
         </ul>
       </div>
     </div>
   </div>
 </section>
 <!-- Logos -->
 <!-- Steps -->
 <section class="steps">
   <div class="container">
     <div class="row">
       <div class="col-lg-12">
         <h2 class="sec-heading">Achieve your goals with <strong>MOJAVI</strong></h2>
       </div>
     </div>
     <div class="row">
       <div class="col-sm-12 col-md-3 col-lg-3">
         <img src="{{ asset('frontend/assets/images/a (14).png') }}" class="img-fluid" alt="">
         <h2 class="hd">Learn the latest skills</h2>
         <p>like business analytics, graphic design, Python, and more</p>
       </div>
       <div class="col-sm-12 col-md-3 col-lg-3">
         <img src="{{ asset('frontend/assets/images/a (15).png') }}" class="img-fluid" alt="">
         <h2 class="hd">Learn the latest skills</h2>
         <p>like business analytics, graphic design, Python, and more</p>
       </div>
       <div class="col-sm-12 col-md-3 col-lg-3">
         <img src="{{ asset('frontend/assets/images/a (16).png') }}" class="img-fluid" alt="">
         <h2 class="hd">Learn the latest skills</h2>
         <p>like business analytics, graphic design, Python, and more</p>
       </div>
       <div class="col-sm-12 col-md-3 col-lg-3">
         <img src="{{ asset('frontend/assets/images/a (27).png') }}" class="img-fluid" alt="">
         <h2 class="hd">Learn the latest skills</h2>
         <p>like business analytics, graphic design, Python, and more</p>
       </div>
     </div>
   </div>
 </section>
 <!-- Steps -->
 <!-- Team member -->
 <section class="team">
   <div class="container">
     <div class="row">
       <div class="col-lg-12">
         <h2 class="sec-heading">New classes added  <strong>every month.</strong></h2>
       </div>
     </div>
     <div class="row">
       <div class="col-lg-12">
         <div id="team">
           <div class="item">
             <div class="box">
               <div class="img-box"><img src="{{ asset('frontend/assets/images/a (13).png') }}" class="img-fluid" alt=""></div>
               <div class="overlay">
                 <h5>Jacob saim</h5>
                 <h4>Marketing</h4>
               </div>
             </div>
           </div>
           <div class="item">
             <div class="box">
               <div class="img-box"><img src="{{ asset('fontend/assets/images/a (22).png') }}" class="img-fluid" alt=""></div>
               <div class="overlay">
                 <h5>Jacob saim</h5>
                 <h4>Marketing</h4>
               </div>
             </div>
           </div>
           <div class="item">
             <div class="box">
               <div class="img-box"><img src="{{ asset('frontend/assets/images/a (23).png') }}" class="img-fluid" alt=""></div>
               <div class="overlay">
                 <h5>Jacob saim</h5>
                 <h4>Marketing</h4>
               </div>
             </div>
           </div>
           <div class="item">
             <div class="box">
               <div class="img-box"><img src="{{ asset('frontend/assets/images/a (19).png') }}" class="img-fluid" alt=""></div>
               <div class="overlay">
                 <h5>Jacob saim</h5>
                 <h4>Marketing</h4>
               </div>
             </div>
           </div>
           <div class="item">
             <div class="box">
               <div class="img-box"><img src="{{ asset('frontend/assets/images/a (23).png') }}" class="img-fluid" alt=""></div>
               <div class="overlay">
                 <h5>Jacob saim</h5>
                 <h4>Marketing</h4>
               </div>
             </div>
           </div>
         </div>
       </div>
       <div class="text-center">
         <a href="#" class="btn btn-main">Find Classes For You</a>
       </div>
     </div>
   </div>
 </section>
 <!-- Team member -->
 <!-- Courses -->
 <section class="courses">
   <div class="container">
     <div class="row">
       <div class="col-lg-12">
         <h2 class="sec-heading">Explore Our <strong>Courses</strong></h2>
         <div class="main-tab">
           <nav>
             <div class="nav nav-tabs" id="nav-tab" role="tablist">
               <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">All</button>
               <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Computer IT</button>
               <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Art & Design</button>
               <button class="nav-link" id="nav-cooking-tab" data-bs-toggle="tab" data-bs-target="#nav-cooking" type="button" role="tab" aria-controls="nav-cooking" aria-selected="false">Cooking</button>
               <button class="nav-link" id="nav-marketing-tab" data-bs-toggle="tab" data-bs-target="#nav-marketing" type="button" role="tab" aria-controls="nav-marketing" aria-selected="false">Art & Design</button>
             </div>
           </nav>
           <div class="tab-content" id="nav-tabContent">
             <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
               <div class="row">
                 <div class="col-lg-4">
                   <div class="box">
                     <div class="img-box"><img src="{{ asset('frontend/assets/images/a (4).png') }}" class="img-fluid" alt=""></div>
                     <ul class="list-unstyled">
                       <li class="list-inline-item"><span>$35.00</span></li>
                       <li class="list-inline-item float-right"><a href="#"><span><i class="fas fa-shopping-cart"></i></span></a></li>
                     </ul>
                     <h3>Artificial Intelligence Fundamental Startup Learn</h3>
                   </div>
                 </div>
                 <div class="col-lg-4">
                   <div class="box">
                     <div class="img-box"><img src="{{ asset('frontend/assets/images/a (17).png') }}" class="img-fluid" alt=""></div>
                     <ul class="list-unstyled">
                       <li class="list-inline-item"><span>$35.00</span></li>
                       <li class="list-inline-item float-right"><a href="#"><span><i class="fas fa-shopping-cart"></i></span></a></li>
                     </ul>
                     <h3>Artificial Intelligence Fundamental Startup Learn</h3>
                   </div>
                 </div>
                 <div class="col-lg-4">
                   <div class="box">
                     <div class="img-box"><img src="{{ asset('frontend/assets/images/a (20).png') }}" class="img-fluid" alt=""></div>
                     <ul class="list-unstyled">
                       <li class="list-inline-item"><span>$35.00</span></li>
                       <li class="list-inline-item float-right"><a href="#"><span><i class="fas fa-shopping-cart"></i></span></a></li>
                     </ul>
                     <h3>Artificial Intelligence Fundamental Startup Learn</h3>
                   </div>
                 </div>
                 <div class="col-lg-4">
                   <div class="box">
                     <div class="img-box"><img src="{{ asset('frontend/assets/images/a (6).png') }}" class="img-fluid" alt=""></div>
                     <ul class="list-unstyled">
                       <li class="list-inline-item"><span>$35.00</span></li>
                       <li class="list-inline-item float-right"><a href="#"><span><i class="fas fa-shopping-cart"></i></span></a></li>
                     </ul>
                     <h3>Artificial Intelligence Fundamental Startup Learn</h3>
                   </div>
                 </div>
                 <div class="col-lg-4">
                   <div class="box">
                     <div class="img-box"><img src="{{ asset('frontend/assets/images/a (25).png"') }} class="img-fluid" alt=""></div>
                     <ul class="list-unstyled">
                       <li class="list-inline-item"><span>$35.00</span></li>
                       <li class="list-inline-item float-right"><a href="#"><span><i class="fas fa-shopping-cart"></i></span></a></li>
                     </ul>
                     <h3>Artificial Intelligence Fundamental Startup Learn</h3>
                   </div>
                 </div>
                 <div class="col-lg-4">
                   <div class="box">
                     <div class="img-box"><img src="{{ asset('frontend/assets/images/a (12).png"') }} class="img-fluid" alt=""></div>
                     <ul class="list-unstyled">
                       <li class="list-inline-item"><span>$35.00</span></li>
                       <li class="list-inline-item float-right"><a href="#"><span><i class="fas fa-shopping-cart"></i></span></a></li>
                     </ul>
                     <h3>Artificial Intelligence Fundamental Startup Learn</h3>
                   </div>
                 </div>
               </div>
             </div>
             <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
               <div class="row">
                 <div class="col-lg-4">
                   <div class="box">
                     <div class="img-box"><img src="{{ asset('frontend/assets/images/a (4).png') }}" class="img-fluid" alt=""></div>
                     <ul class="list-unstyled">
                       <li class="list-inline-item"><span>$35.00</span></li>
                       <li class="list-inline-item float-right"><a href="#"><span><i class="fas fa-shopping-cart"></i></span></a></li>
                     </ul>
                     <h3>Artificial Intelligence Fundamental Startup Learn</h3>
                   </div>
                 </div>
                 <div class="col-lg-4">
                   <div class="box">
                     <div class="img-box"><img src="{{ asset('frontend/assets/images/a (17).png') }}" class="img-fluid" alt=""></div>
                     <ul class="list-unstyled">
                       <li class="list-inline-item"><span>$35.00</span></li>
                       <li class="list-inline-item float-right"><a href="#"><span><i class="fas fa-shopping-cart"></i></span></a></li>
                     </ul>
                     <h3>Artificial Intelligence Fundamental Startup Learn</h3>
                   </div>
                 </div>
                 <div class="col-lg-4">
                   <div class="box">
                     <div class="img-box"><img src="{{ asset('frontend/assets/images/a (20).png') }}" class="img-fluid" alt=""></div>
                     <ul class="list-unstyled">
                       <li class="list-inline-item"><span>$35.00</span></li>
                       <li class="list-inline-item float-right"><a href="#"><span><i class="fas fa-shopping-cart"></i></span></a></li>
                     </ul>
                     <h3>Artificial Intelligence Fundamental Startup Learn</h3>
                   </div>
                 </div>
                 <div class="col-lg-4">
                   <div class="box">
                     <div class="img-box"><img src="{{ asset('frontend/assets/images/a (6).png') }}" class="img-fluid" alt=""></div>
                     <ul class="list-unstyled">
                       <li class="list-inline-item"><span>$35.00</span></li>
                       <li class="list-inline-item float-right"><a href="#"><span><i class="fas fa-shopping-cart"></i></span></a></li>
                     </ul>
                     <h3>Artificial Intelligence Fundamental Startup Learn</h3>
                   </div>
                 </div>
                 <div class="col-lg-4">
                   <div class="box">
                     <div class="img-box"><img src="{{ asset('frontend/assets/images/a (25).png') }}" class="img-fluid" alt=""></div>
                     <ul class="list-unstyled">
                       <li class="list-inline-item"><span>$35.00</span></li>
                       <li class="list-inline-item float-right"><a href="#"><span><i class="fas fa-shopping-cart"></i></span></a></li>
                     </ul>
                     <h3>Artificial Intelligence Fundamental Startup Learn</h3>
                   </div>
                 </div>
                 <div class="col-lg-4">
                   <div class="box">
                     <div class="img-box"><img src="{{ asset('frontend/assets/images/a (12).png') }}" class="img-fluid" alt=""></div>
                     <ul class="list-unstyled">
                       <li class="list-inline-item"><span>$35.00</span></li>
                       <li class="list-inline-item float-right"><a href="#"><span><i class="fas fa-shopping-cart"></i></span></a></li>
                     </ul>
                     <h3>Artificial Intelligence Fundamental Startup Learn</h3>
                   </div>
                 </div>
               </div>
             </div>
             <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
               <div class="row">
                 <div class="col-lg-4">
                   <div class="box">
                     <div class="img-box"><img src="{{ asset('frontend/assets/images/a (4).png') }}" class="img-fluid" alt=""></div>
                     <ul class="list-unstyled">
                       <li class="list-inline-item"><span>$35.00</span></li>
                       <li class="list-inline-item float-right"><a href="#"><span><i class="fas fa-shopping-cart"></i></span></a></li>
                     </ul>
                     <h3>Artificial Intelligence Fundamental Startup Learn</h3>
                   </div>
                 </div>
                 <div class="col-lg-4">
                   <div class="box">
                     <div class="img-box"><img src="{{ asset('frontend/assets/images/a (17).png') }}" class="img-fluid" alt=""></div>
                     <ul class="list-unstyled">
                       <li class="list-inline-item"><span>$35.00</span></li>
                       <li class="list-inline-item float-right"><a href="#"><span><i class="fas fa-shopping-cart"></i></span></a></li>
                     </ul>
                     <h3>Artificial Intelligence Fundamental Startup Learn</h3>
                   </div>
                 </div>
                 <div class="col-lg-4">
                   <div class="box">
                     <div class="img-box"><img src="{{ asset('frontend/assets/images/a (20).png') }}" class="img-fluid" alt=""></div>
                     <ul class="list-unstyled">
                       <li class="list-inline-item"><span>$35.00</span></li>
                       <li class="list-inline-item float-right"><a href="#"><span><i class="fas fa-shopping-cart"></i></span></a></li>
                     </ul>
                     <h3>Artificial Intelligence Fundamental Startup Learn</h3>
                   </div>
                 </div>
                 <div class="col-lg-4">
                   <div class="box">
                     <div class="img-box"><img src="{{ asset('frontend/assets/images/a (6).png') }}" class="img-fluid" alt=""></div>
                     <ul class="list-unstyled">
                       <li class="list-inline-item"><span>$35.00</span></li>
                       <li class="list-inline-item float-right"><a href="#"><span><i class="fas fa-shopping-cart"></i></span></a></li>
                     </ul>
                     <h3>Artificial Intelligence Fundamental Startup Learn</h3>
                   </div>
                 </div>
                 <div class="col-lg-4">
                   <div class="box">
                     <div class="img-box"><img src="{{ asset('frontend/assets/images/a (25).png') }}" class="img-fluid" alt=""></div>
                     <ul class="list-unstyled">
                       <li class="list-inline-item"><span>$35.00</span></li>
                       <li class="list-inline-item float-right"><a href="#"><span><i class="fas fa-shopping-cart"></i></span></a></li>
                     </ul>
                     <h3>Artificial Intelligence Fundamental Startup Learn</h3>
                   </div>
                 </div>
                 <div class="col-lg-4">
                   <div class="box">
                     <div class="img-box"><img src="{{ asset('frontend/assets/images/') }}a (12).png" class="img-fluid" alt=""></div>
                     <ul class="list-unstyled">
                       <li class="list-inline-item"><span>$35.00</span></li>
                       <li class="list-inline-item float-right"><a href="#"><span><i class="fas fa-shopping-cart"></i></span></a></li>
                     </ul>
                     <h3>Artificial Intelligence Fundamental Startup Learn</h3>
                   </div>
                 </div>
               </div>
             </div>
             <div class="tab-pane fade" id="nav-cooking" role="tabpanel" aria-labelledby="nav-cooking-tab">
               <div class="row">
                 <div class="col-lg-4">
                   <div class="box">
                     <div class="img-box"><img src="{{ asset('frontend/assets/images/a (4).png') }}" class="img-fluid" alt=""></div>
                     <ul class="list-unstyled">
                       <li class="list-inline-item"><span>$35.00</span></li>
                       <li class="list-inline-item float-right"><a href="#"><span><i class="fas fa-shopping-cart"></i></span></a></li>
                     </ul>
                     <h3>Artificial Intelligence Fundamental Startup Learn</h3>
                   </div>
                 </div>
                 <div class="col-lg-4">
                   <div class="box">
                     <div class="img-box"><img src="{{ asset('frontend/assets/images/a (17).png') }}" class="img-fluid" alt=""></div>
                     <ul class="list-unstyled">
                       <li class="list-inline-item"><span>$35.00</span></li>
                       <li class="list-inline-item float-right"><a href="#"><span><i class="fas fa-shopping-cart"></i></span></a></li>
                     </ul>
                     <h3>Artificial Intelligence Fundamental Startup Learn</h3>
                   </div>
                 </div>
                 <div class="col-lg-4">
                   <div class="box">
                     <div class="img-box"><img src="{{ asset('frontend/assets/a (20).png') }}" class="img-fluid" alt=""></div>
                     <ul class="list-unstyled">
                       <li class="list-inline-item"><span>$35.00</span></li>
                       <li class="list-inline-item float-right"><a href="#"><span><i class="fas fa-shopping-cart"></i></span></a></li>
                     </ul>
                     <h3>Artificial Intelligence Fundamental Startup Learn</h3>
                   </div>
                 </div>
                 <div class="col-lg-4">
                   <div class="box">
                     <div class="img-box"><img src="{{ asset('frontend/assets/a (6).png') }}" class="img-fluid" alt=""></div>
                     <ul class="list-unstyled">
                       <li class="list-inline-item"><span>$35.00</span></li>
                       <li class="list-inline-item float-right"><a href="#"><span><i class="fas fa-shopping-cart"></i></span></a></li>
                     </ul>
                     <h3>Artificial Intelligence Fundamental Startup Learn</h3>
                   </div>
                 </div>
                 <div class="col-lg-4">
                   <div class="box">
                     <div class="img-box"><img src="{{ asset('frontend/assets/images/a (25).png') }}" class="img-fluid" alt=""></div>
                     <ul class="list-unstyled">
                       <li class="list-inline-item"><span>$35.00</span></li>
                       <li class="list-inline-item float-right"><a href="#"><span><i class="fas fa-shopping-cart"></i></span></a></li>
                     </ul>
                     <h3>Artificial Intelligence Fundamental Startup Learn</h3>
                   </div>
                 </div>
                 <div class="col-lg-4">
                   <div class="box">
                     <div class="img-box"><img src="{{ asset('frontend/assets/images/a (12).png') }}" class="img-fluid" alt=""></div>
                     <ul class="list-unstyled">
                       <li class="list-inline-item"><span>$35.00</span></li>
                       <li class="list-inline-item float-right"><a href="#"><span><i class="fas fa-shopping-cart"></i></span></a></li>
                     </ul>
                     <h3>Artificial Intelligence Fundamental Startup Learn</h3>
                   </div>
                 </div>
               </div>
             </div>
             <div class="tab-pane fade" id="nav-marketing" role="tabpanel" aria-labelledby="nav-marketing-tab">
               <div class="row">
                 <div class="col-lg-4">
                   <div class="box">
                     <div class="img-box"><img src="{{ asset('frontend/assets/images/a (4).png') }}" class="img-fluid" alt=""></div>
                     <ul class="list-unstyled">
                       <li class="list-inline-item"><span>$35.00</span></li>
                       <li class="list-inline-item float-right"><a href="#"><span><i class="fas fa-shopping-cart"></i></span></a></li>
                     </ul>
                     <h3>Artificial Intelligence Fundamental Startup Learn</h3>
                   </div>
                 </div>
                 <div class="col-lg-4">
                   <div class="box">
                     <div class="img-box"><img src="{{ asset('frontend/assets/images/a (17).png') }}" class="img-fluid" alt=""></div>
                     <ul class="list-unstyled">
                       <li class="list-inline-item"><span>$35.00</span></li>
                       <li class="list-inline-item float-right"><a href="#"><span><i class="fas fa-shopping-cart"></i></span></a></li>
                     </ul>
                     <h3>Artificial Intelligence Fundamental Startup Learn</h3>
                   </div>
                 </div>
                 <div class="col-lg-4">
                   <div class="box">
                     <div class="img-box"><img src="{{ asset('frontend/assets/images/a (20).png') }}" class="img-fluid" alt=""></div>
                     <ul class="list-unstyled">
                       <li class="list-inline-item"><span>$35.00</span></li>
                       <li class="list-inline-item float-right"><a href="#"><span><i class="fas fa-shopping-cart"></i></span></a></li>
                     </ul>
                     <h3>Artificial Intelligence Fundamental Startup Learn</h3>
                   </div>
                 </div>
                 <div class="col-lg-4">
                   <div class="box">
                     <div class="img-box"><img src="{{ asset('frontend/assets/images/a (6).png') }}" class="img-fluid" alt=""></div>
                     <ul class="list-unstyled">
                       <li class="list-inline-item"><span>$35.00</span></li>
                       <li class="list-inline-item float-right"><a href="#"><span><i class="fas fa-shopping-cart"></i></span></a></li>
                     </ul>
                     <h3>Artificial Intelligence Fundamental Startup Learn</h3>
                   </div>
                 </div>
                 <div class="col-lg-4">
                   <div class="box">
                     <div class="img-box"><img src="{{ asset('frontend/assets/images/a (25).png') }}" class="img-fluid" alt=""></div>
                     <ul class="list-unstyled">
                       <li class="list-inline-item"><span>$35.00</span></li>
                       <li class="list-inline-item float-right"><a href="#"><span><i class="fas fa-shopping-cart"></i></span></a></li>
                     </ul>
                     <h3>Artificial Intelligence Fundamental Startup Learn</h3>
                   </div>
                 </div>
                 <div class="col-lg-4">
                   <div class="box">
                     <div class="img-box"><img src="{{ asset('frontend/assets/images/a (12).png') }}" class="img-fluid" alt=""></div>
                     <ul class="list-unstyled">
                       <li class="list-inline-item"><span>$35.00</span></li>
                       <li class="list-inline-item float-right"><a href="#"><span><i class="fas fa-shopping-cart"></i></span></a></li>
                     </ul>
                     <h3>Artificial Intelligence Fundamental Startup Learn</h3>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
     <div class="text-center">
       <a href="#" class="btn btn-main">View All Courses</a>
     </div>
   </div>
 </section>
 <!-- Courses -->
 <!-- Join -->
 <section class="join">
   <div class="container">
     <div class="row">
       <div class="col-lg-8 m-auto">
         <ul class="list-unstyled">
           <li class="list-inline-item"><h2><strong>JOIN WITH US</strong>20% Offer Running - Join Today</h2></li>
           <li><a href="#" class="btn btn-business">Get Started</a></li>
         </ul>
       </div>
     </div>
   </div>
 </section>
 <!-- Join -->
 <!-- Category -->
 <section class="category">
   <div class="container">
     <div class="row">
       <h2 class="sec-heading">Our Top <strong>Categories</strong></h2>
       <p class="sec-para">It is a long established fact that a reader will be distracted by the readable content</p>
       <div class="col-lg-9">
         <div class="img-box"><img src="{{ asset('frontend/assets/images/a (5).png') }}" class="img-fluid" alt="">
           <div class="overlay"><h2>Lorem Ipsum is simply dummy </h2></div>
         </div>
         <div class="row">
           <div class="col-lg-4">
             <div class="img-box"><img src="{{ asset('frontend/assets/images/a (7).png') }}" class="img-fluid" alt="">
               <div class="overlay"><h2>Lorem Ipsum </h2></div>
             </div>
           </div>
           <div class="col-lg-4">
             <div class="img-box"><img src="{{ asset('frontend/assets/images/a (6).png') }}" class="img-fluid" alt="">
               <div class="overlay"><h2>Lorem Ipsum </h2></div>
             </div>
           </div>
           <div class="col-lg-4">
             <div class="img-box"><img src="{{ asset('frontend/assets/images/a (21).png') }}" class="img-fluid" alt="">
               <div class="overlay"><h2>Lorem Ipsum </h2></div>
             </div>
           </div>
         </div>
       </div>
       <div class="col-lg-3">
         <div class="img-box img2"><img src="{{ asset('frontend/assets/images/a (8).jpg') }}" class="img-fluid" alt="">
           <div class="overlay"><h2>Lorem Ipsum </h2></div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- Category -->
 <!-- Instruction -->
 <section class="instruction">
   <div class="container">
     <div class="row">
       <div class="col-lg-4"></div>
       <div class="col-lg-8">
         <div class="content">
           <h2>Become an instructor</h2>
           <p>Top instructors from around the world teach millions of students on My Mojavi. We provide the tools and skills to teach what you love</p>
           <a href="#" class="btn btn-business">Start Teaching Today</a>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- Instruction -->
 <!-- testimonials -->
 <section class="client">
   <div class="container">
     <div class="row">
       <div class="col-lg-12">
         <h2 class="sec-heading">What People Says <strong>About US</strong></h2>
         <div id="client">
           <div class="item">
             <div class="box">
               <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
               <div class="media"><img src="{{ asset('frontend/assets/images/') }}a (18).png" class="img-thumbnail" alt="">
                 <div class="media-body"><h4>John Clark</h4></div>
               </div>
             </div>
           </div>

           <div class="item">
             <div class="box">
               <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
               <div class="media"><img src="{{ asset('frontend/assets/images/a (18).png') }}" class="img-thumbnail" alt="">
                 <div class="media-body"><h4>John Clark</h4></div>
               </div>
             </div>
           </div>

           <div class="item">
             <div class="box">
               <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
               <div class="media"><img src="{{ asset('frontend/assets/images/a (18).png') }}" class="img-thumbnail" alt="">
                 <div class="media-body"><h4>John Clark</h4></div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- testimonials -->

 <!-- video-section -->
<section class="video-section">
   <div class="container-fluid">
     <div class="row">
       <div class="col-lg-4">
         <button id="playme" onclick="revealVideo('video','youtube')">
         <span class="img-box1"><img src="{{ asset('frontend/assets/images/Group566.jpg') }}" class="img-fluid" alt="">
           <img src="{{ asset('frontend/assets/images/Group 56.png') }}" class="img-fluid play-icon" alt="">
         </span>

         </button>
         <div id="video" class="lightbox" onclick="hideVideo('video','youtube')">
           <div class="lightbox-container">
             <div class="lightbox-content">
               <button onclick="hideVideo('video','youtube')" class="lightbox-close">
               Close | ✕
               </button>
               <div class="video-container">
                 <iframe id="youtube" width="960" height="540" src="https://www.youtube.com/embed/WsptdUFthWI?showinfo=0" frameborder="0" allowfullscreen></iframe>
               </div>
             </div>
           </div>
         </div>
       </div>
       <div class="col-lg-8 dis-flex-start">
         <div class="content">
           <h2>We Have Special Programs For Challenged Students</h2>
           <p>Adam Jacob launched a new career in software development by taking courses </p>
           <a href="#" class="btn btn-business">Check Now</a>
         </div>
       </div>
     </div>
   </div>

</section>
 <!-- video-section -->
@endsection
