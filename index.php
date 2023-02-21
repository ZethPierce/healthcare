
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>HEALTHCARE</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles2.css" rel="stylesheet" />
    </head>
    <style>



        .card {
            padding-top: 20px;
            background: #0085fe;
        }


        .fa-inverse {
            color: #0085fe !important;
        }

        .card-flip {
          perspective: 1000px;
        }
        .card-flip:hover .flip, .card-flip.hover .flip {
          transform: rotateY(180deg);
        }

        .card-flip,
        .front,
        .back {
          width: 100%;
/*          height: 480px;*/
        }

        .flip {
          transition: 0.6s;
          transform-style: preserve-3d;
          position: relative;
        }

        .front,
        .back {
          -webkit-backface-visibility: hidden;
                  backface-visibility: hidden;
          position: absolute;
          top: 0;
          left: 0;
        }

        .front {
          z-index: 2;
          transform: rotateY(0deg);
        }

        .back {
          transform: rotateY(180deg);
        }






    </style>
    <body id="page-top" style="zoom: 110%;">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                 <!-- <img src="assets/img/gabaylogo2.png" width="70" height="70"  alt=""> -->
                <a class="navbar-brand js-scroll-trigger" href="#page-top">
                    
                HEALTHCARE</a>





                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#aboutus">About Us</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#guidelines">Sections</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                        <li class="nav-item" data-toggle="modal" data-target="#myModal"><a style="padding: 0.5rem 3rem;" class="nav-link js-scroll-trigger log-in-border" href="#">Log In</a></li>   

                    </ul>
                </div>
            </div>
        </nav>

        <!-- The Modal -->
      <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-sm modal-dialog-centered">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Choose Your Usertype</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
            
              <a href="admin_login.php"><button class="btn btn-primary btn-home btn-block">Log In as Administrator</button></a>

              <a href="user_login.php"><button class="btn btn-primary btn-home btn-block mt-2">Log In as Researcher</button></a>
            </div>
            
            
          </div>
        </div>
      </div>



        <!-- Masthead-->
        <header class="masthead" style="zoom: 125%;">
            <div class="container">
                <div class="masthead-subheading"><span class="underline-red">Welcome</span> to Patients Record Management System!</div>
                <div class="masthead-heading">Innovative project that seeks to streamline the management of medical records for patients.</div>
                <!-- <a class="btn btn-primary btn-home btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a> -->
            </div>
        </header>

        <!-- Services-->
        <section class="page-section" id="aboutus">
            <div class="container">
                <div class="text-center">

                       <h2 class="section-heading text-uppercase">About Us</h2>
                        <!-- Icon Divider-->
                        <div class="divider-custom divider-light">
                            <div class="divider-custom-line"></div>
                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                            <div class="divider-custom-line"></div>
                        </div>
                        <!-- About Section Content-->
                        <div class="row">                        
                            <div class="col-lg-12 me-auto"><p class="lead">This system is designed to provide a secure and efficient way to manage patient records and ensure accuracy and confidentiality. The system will allow users to easily store, manage, and access patient documents in a secure, organized manner. It will provide various features that enable users to quickly and accurately input patient data, create custom reports, and coordinate between multiple departments and providers. Additionally, the system will have safeguards to ensure patient privacy and protect sensitive data. 
</p></div>
                            </div>

                  
                </div>





        </section>


        <section class="page-section bg-light" id="guidelines">
            <div class="container-fluid" style="max-width: 1600px;">
                <div class=" text-center">
                    <h2 class="section-heading text-uppercase">Sections</h2>
                    <!-- Icon Divider-->
                        <div class="divider-custom divider-light mb-4">
                            <div class="divider-custom-line"></div>
                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                            <div class="divider-custom-line"></div>
                        </div>
                        <div class="row">
                    <!-- <h3 class="section-subheading text-muted">Here are some user guideline to use the system.</h3> -->
                     <div class="col-md-2">
                        <div class="card-flip">
                                <div class="flip">
                                    <div class="front">
                                        <div class="card">
                                          <span class="fa-stack fa-4x card-img-top">
                                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                            <i class="fas fa-x-ray fa-stack-1x fa-inverse"></i>
                                          </span>
                                          <div class="card-body">
                                            <!-- <h5 class="card-title text-white">X Ray</h5> -->
                                            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                                          </div>
                                        </div>
                                    </div>

                                    <div class="back">
                                        <div class="card bg-light" style="border: 1px solid #0085fe;">
                                          <span class="fa-stack fa-4x card-img-top" >
                                            <h3 class="card-title text-white text-center" style="margin-top: 50px; color: #0085fe !important;">X Ray</h3>             
                                          </span>
                                          <div class="card-body">
                                            <!-- <h5 class="card-title text-white">X Ray</h5> -->
                                            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                                          </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                     </div>
                    <div class="col-md-2">
                       <div class="card-flip">
                               <div class="flip">
                                   <div class="front">
                                       <div class="card">
                                         <span class="fa-stack fa-4x card-img-top">
                                           <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                           <i class="fas fa-teeth fa-stack-1x fa-inverse"></i>
                                         </span>
                                         <div class="card-body">
                                           <!-- <h5 class="card-title text-white">X Ray</h5> -->
                                           <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                                         </div>
                                       </div>
                                   </div>

                                   <div class="back">
                                       <div class="card bg-light" style="border: 1px solid #0085fe;">
                                         <span class="fa-stack fa-4x card-img-top" >
                                           <h3 class="card-title text-white text-center" style="margin-top: 50px; color: #0085fe !important;">Dental</h3>             
                                         </span>
                                         <div class="card-body">
                                           <!-- <h5 class="card-title text-white">X Ray</h5> -->
                                           <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                                         </div>
                                       </div>

                                   </div>
                               </div>
                           </div>
                    </div>
                    <div class="col-md-2">
                       <div class="card-flip">
                               <div class="flip">
                                   <div class="front">
                                       <div class="card">
                                         <span class="fa-stack fa-4x card-img-top">
                                           <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                           <i class="fas fas fa-lungs-virus fa-stack-1x fa-inverse"></i>
                                         </span>
                                         <div class="card-body">
                                           <!-- <h5 class="card-title text-white">X Ray</h5> -->
                                           <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                                         </div>
                                       </div>
                                   </div>

                                   <div class="back">
                                       <div class="card bg-light" style="border: 1px solid #0085fe;">
                                         <span class="fa-stack fa-4x card-img-top" >
                                           <h3 class="card-title text-white text-center" style="margin-top: 50px; color: #0085fe !important;">Sputum</h3>             
                                         </span>
                                         <div class="card-body">
                                           <!-- <h5 class="card-title text-white">X Ray</h5> -->
                                           <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                                         </div>
                                       </div>

                                   </div>
                               </div>
                           </div>
                    </div>
                    <div class="col-md-2">
                       <div class="card-flip">
                               <div class="flip">
                                   <div class="front">
                                       <div class="card">
                                         <span class="fa-stack fa-4x card-img-top">
                                           <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                           <i class="fas fa-prescription-bottle-alt  fa-stack-1x fa-inverse"></i>
                                         </span>
                                         <div class="card-body">
                                           <!-- <h5 class="card-title text-white">X Ray</h5> -->
                                           <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                                         </div>
                                       </div>
                                   </div>

                                   <div class="back">
                                       <div class="card bg-light" style="border: 1px solid #0085fe;">
                                         <span class="fa-stack fa-4x card-img-top" >
                                           <h3 class="card-title text-white text-center" style="margin-top: 50px; color: #0085fe !important;">Urinalysis</h3>             
                                         </span>
                                         <div class="card-body">
                                           <!-- <h5 class="card-title text-white">X Ray</h5> -->
                                           <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                                         </div>
                                       </div>

                                   </div>
                               </div>
                           </div>
                    </div>
                    <div class="col-md-2">
                       <div class="card-flip">
                               <div class="flip">
                                   <div class="front">
                                       <div class="card">
                                         <span class="fa-stack fa-4x card-img-top">
                                           <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                           <i class="fas fa-eye-dropper fa-stack-1x fa-inverse"></i>
                                         </span>
                                         <div class="card-body">
                                           <!-- <h5 class="card-title text-white">X Ray</h5> -->
                                           <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                                         </div>
                                       </div>
                                   </div>

                                   <div class="back">
                                       <div class="card bg-light" style="border: 1px solid #0085fe;">
                                         <span class="fa-stack fa-4x card-img-top" >
                                           <h3 class="card-title text-white text-center" style="margin-top: 50px; color: #0085fe !important;">Hematology</h3>             
                                         </span>
                                         <div class="card-body">
                                           <!-- <h5 class="card-title text-white">X Ray</h5> -->
                                           <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                                         </div>
                                       </div>

                                   </div>
                               </div>
                           </div>
                    </div>
                    <div class="col-md-2">
                       <div class="card-flip">
                               <div class="flip">
                                   <div class="front">
                                       <div class="card">
                                         <span class="fa-stack fa-4x card-img-top">
                                           <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                           <i class="fas fa-poop fa-stack-1x fa-inverse"></i>
                                         </span>
                                         <div class="card-body">
                                           <!-- <h5 class="card-title text-white">X Ray</h5> -->
                                           <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                                         </div>
                                       </div>
                                   </div>

                                   <div class="back">
                                       <div class="card bg-light" style="border: 1px solid #0085fe;">
                                         <span class="fa-stack fa-4x card-img-top" >
                                           <h3 class="card-title text-white text-center" style="margin-top: 50px; color: #0085fe !important;">Fecalysis</h3>             
                                         </span>
                                         <div class="card-body">
                                           <!-- <h5 class="card-title text-white">X Ray</h5> -->
                                           <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                                         </div>
                                       </div>

                                   </div>
                               </div>
                           </div>
                    </div>

                </div>
                
               
            </div>
        </div>
        </section>

        <!-- Team-->
        <section class="page-section bg-light" id="team" style="margin-top: 100px;">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Doctors!</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/doc1.png" alt="..." />
                            <h4>Omar Pace</h4>
                            <p class="text-muted">Lead Doctor</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/doc3.png" alt="..." />
                            <h4>Diana Petersen</h4>
                            <p class="text-muted">Hematologist</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/doc2.png" alt="..." />
                            <h4>Larry Parker</h4>
                            <p class="text-muted">Dentist</p>
                        </div>
                    </div>
                     <div class="col-lg-3">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/doc3.png" alt="..." />
                            <h4>Diana Petersen</h4>
                            <p class="text-muted">Hematologist</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Let’s get you a doc who gets you.</p></div>
                </div>
            </div>
        </section>



        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Patients Record Management System</h3>
                </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-home btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </section>

        <!-- Footer-->
        <footer class="footer py-4 bg-dark">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left text-white">Healthcare - Patients Record Management System</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                       
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/profile.php?id=100087270458329"><i class="fab fa-facebook-f"></i></a>
                     
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <a class="mr-3" href="#!">Privacy Policy</a>
                        <a href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/01-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/02-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Explore</li>
                                        <li>Category: Graphic Design</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/03-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Finish</li>
                                        <li>Category: Identity</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/04-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Lines</li>
                                        <li>Category: Branding</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/05-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Southwest</li>
                                        <li>Category: Website Design</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/06-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Window</li>
                                        <li>Category: Photography</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts2.js"></script>
    </body>
</html>

<script>
    document.querySelector(".card-flip").classList.toggle("flip");

/* 
 * Holder.js for demo image
 * Just for demo purpose
 */
Holder.addTheme('gray', {
  bg: '#777',
  fg: 'rgba(255,255,255,.75)',
  font: 'Helvetica',
  fontweight: 'normal'
});

</script>






