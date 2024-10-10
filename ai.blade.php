<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>A.I Aspiring Intelligence</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- fevicon -->
  <link rel="icon" href="{{asset('frontend/images/fevicon.png')}}" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
  <!-- style css -->
  <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
  <!-- Responsive-->
  <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">  
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="{{asset('frontend/css/jquery.mCustomScrollbar.min.css')}}">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
  <!-- loader  -->
  {{-- <div class="loader_bg">
    <div class="loader"><img src="{{asset('frontend/images/loading.gif')}}" alt="#" /></div>
  </div> --}}
  <!-- end loader -->
  <!-- header -->
  <header>
    <!-- header inner -->
    <div class="header-top">
      <div class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo">
                    <a href="index.html"><img src="{{asset('frontend/images/AIlogo1.png')}}" alt="#" /></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-10 col-lg-8 col-md-8 col-sm-9">
              <div class="header_information">
               <div class="menu-area">
                <div class="limit-box">
                  <nav class="main-menu ">
                    <ul class="menu-area-main">
                      <li class="active"> <a href="index.html">Home</a> </li>
                      <li> <a href="#courses">Our Courses </a> </li>
                      <li> <a href="#about">About</a> </li>
                      <li> <a href="#learn">My Profile</a> </li>
                      <li> <a href="#important">Become an Instructor</a> </li>
                      <li> <a href="#contact">Contact</a> </li>
                     </ul>
                   </nav>
                 </div>
               </div> 
                {{-- <div class="mean-last">
                        <a href="#"><img src="{{asset('frontend/images/search_icon.png')}}" alt="#" /></a> <a href="#">login/signup</a></div>               --}}
             </div>
           </div>
         </div>
       </div>
     </div>
     <!-- end header inner -->

     <!-- end header -->
     <section class="slider_section">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">    

            <div class="container-fluid padding_dd">
              <div class="carousel-caption">
                <div class="row">
                  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="text-bg">
                      <h1 style="color: rgb(253, 19, 19); font-family:impact; text-shadow: rgb(49, 49, 46) 1px 0 10px;">Search your Favorite Course here </h1>
            
                      <p style="color: rgb(253, 19, 19);font-family:sitka;font-size: 20px; " >TOP NOTCH COURSES FROM TRAINED PROFESSIONALS</p>
                      <a href="#">Read more</a> <a href="#">get a qoute</a>
                    </div>
                  </div>
                  <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">  
                    <div class="images_box">
                      <figure><img src="{{asset('frontend/images/img2.png')}}"></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption">

                <div class="row">
                  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="text-bg">
                      <h1 style="color: rgb(253, 19, 19); font-family:impact;">Search your Favorite Course here </h1>
                    
                      <p style="color: rgb(253, 19, 19);font-family:sitka;font-size: 30px;">TOP NOTCH COURSES FROM TRAINED PROFESSIONALS</p>
                      <a href="#">Read more</a><a href="#">get a qoute</a>
                    </div>
                  </div>

                  <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                    <div class="images_box">
                      <figure><img src="{{asset('frontend/images/img2.png')}}"></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>


          <div class="carousel-item">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption ">
                <div class="row">
                  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="text-bg">
                      <h1 style="color: rgb(202, 253, 19); font-family:impact;" >Search your Favorite Course here</h1>
                      <p style="color: rgb(42, 19, 253);font-family:sitka;font-size: 40px;" >TOP NOTCH COURSES FROM </p>
                      <p style="color: rgb(42, 19, 253);font-family:sitka;font-size: 40px; text-shadow: #fc0 1px 0 10px;" >TRAINED PROFESSIONALS</p>
                      <a href="#">Read more</a> <a href="#">get a qoute</a>
                    </div>
                  </div>
                  <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                    <div class="images_box">
                      <figure><img src="{{asset('frontend/images/img2.png')}}"></figure>
                    </div>
                  </div>
                </div>
              </div>  
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</section>
</div>
</header>



<!-- about  -->
<div id="about" class="about">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <h2>About <strong class="yellow">Our Game</strong></h2>
          <p> Welcome to our IT Course Institute, where we empower aspiring tech professionals with the skills and knowledge needed to thrive in today's digital landscape. Our comprehensive programs cover a wide range of topics, from programming and web development to cybersecurity and data analysis. Led by experienced instructors, our hands-on training ensures that students gain practical experience while fostering a collaborative learning environment. Whether you're a beginner looking to kickstart your career or an experienced professional aiming to upgrade your skills, our tailored courses are designed to meet your needs and help you achieve your goals in the fast-evolving world of technology. Join us and unlock your potential in the exciting field of IT!  </p>
          <a href="Javascript:void(0)">Read more</a>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <figure><img src="{{asset('frontend/images/about.jpg')}}" alt="#" /></figure>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- end abouts -->



<!-- our -->
<div id="important" class="important">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="titlepage">
          <h2>Some <strong class="yellow">important facts</strong></h2>
          <span> Our IT courses cover a wide range of topics, including programming, networking, cybersecurity, data science, cloud computing, and software development.</span>
        </div>
      </div>
    </div>
  </div>
  <div class="important_bg">
    <div class="container">
      <div class="row">

        <div class="col col-xs-12">
          <div class="important_box">
            <h3>200+</h3>
            <span>Teachers</span>
          </div>
        </div>
        <div class="col col-xs-12">
          <div class="important_box">
            <h3>20+</h3>
            <span>Colleges</span>
          </div>
        </div>
        <div class="col col-xs-12">
          <div class="important_box">
            <h3>50+</h3>
            <span>Courses</span>
          </div>
        </div>
        <div class="col col-xs-12">
          <div class="important_box">
            <h3>200+</h3>
            <span>Members</span>
          </div>
        </div>
        <div class="col col-xs-12">
          <div class="important_box">
            <h3>10+</h3>
            <span>countries</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- end our -->
<!-- Courses -->
<div id="courses" class="Courses">
  <div class="container-fluid padding_left3">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="box_bg">
          <div class="box_bg_img">
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="box_my">
                  <figure><img src="{{asset('frontend/images/my1.jpg')}}"></figure>
                  <div class="overlay">
                    <h3>Data Science and Analytics</h3>
                    <p>Focuses on data analysis, machine learning, and statistical modeling. Tools like Python, R, and SQL are commonly covered.</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="box_my">
                  <figure><img src="{{asset('frontend/images/my2.jpg')}}"></figure>
                  <div class="overlay">
                    <h3>Artificial Intelligence and Machine Learning</h3>
                    <p>Teaches algorithms, neural networks, and AI applications. Popular tools include TensorFlow and PyTorch.</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="box_my">
                  <figure><img src="{{asset('frontend/images/my3.jpg')}}"></figure>
                  <div class="overlay">
                    <h3>DevOps</h3>
                    <p>Focuses on the integration of development and operations. Key tools include Docker, Kubernetes, and Jenkins, emphasizing automation and continuous integration.</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="box_my">
                  <figure><img src="{{asset('frontend/images/my4.jpg')}}"></figure>
                  <div class="overlay">
                    <h3>UI/UX Design</h3>
                    <p>Focuses on user interface and user experience design principles, tools like Sketch and Figma, and design thinking methodologies.</p>
                  </div>
                </div>
              </div>



            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 border_right">
        <div class="box_text">
          <div class="titlepage">
            <h2 style="text-align: center;">Our <strong class="yellow"> Courses</strong></h2>
          </div>
          <p
            style="text-align: justify;  line-height: 2;font-size: 20px;">
           1. Data Science and Analytics
            

           
            </p>
            <p
            style="text-align: justify;">


            Data Science and Analytics
            Focuses on data analysis, machine learning, and statistical modeling. Tools like Python, R, and SQL are commonly covered.
            </p>
            <p
            style="text-align: justify;  line-height: 2;font-size: 20px;">
           2. Artificial Intelligence and Machine Learning
            

           
            </p>
            <p
            style="text-align: justify;">


            Teaches algorithms, neural networks, and AI applications. Popular tools include TensorFlow and PyTorch.
            </p>
          <a href="Javascript:void(0)">Read more</a>
        </div>
      </div> 
    </div>
  </div>
</div>
<!-- end Courses -->

<!-- learn -->


<div id="learn" class="learn">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="titlepage">
          <h2>Learn <strong class="yellow">the Practical way</strong></h2>
          <span>Our institute offers comprehensive programs designed to equip students with the technical skills and knowledge necessary for a successful career in information technology. Through a combination of theoretical instruction and hands-on experience, students learn about programming, network management, cybersecurity, data analysis, and more. The curriculum is often aligned with industry standards, ensuring that graduates are job-ready and familiar with the latest technologies. Additionally, many institutes provide career support services, including internships and job placement assistance, to help students transition smoothly into the workforce.</span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="learn_box">
          <figure><img src="{{asset('frontend/images/img.jpg')}}" alt="img"/></figure>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- MAKE --> 
<div class="make">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="titlepage">
          <h2>Make Your <strong class="white_colo">Courses Standout</strong></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
        <div class="make_text">
          <p>We focus on delivering a unique learning experience that combines engaging content with practical applications. Incorporate real-world projects, interactive workshops, and case studies that allow students to apply their knowledge immediately. Highlight industry partnerships and guest lectures from professionals, providing students with valuable insights and networking opportunities. Additionally, ensure your courses are updated regularly to reflect the latest trends and technologies, fostering an innovative and relevant curriculum. Finally, prioritize personalized support and mentorship, creating a learning environment where students feel valued and empowered to succeed.
          </p>
          <a href="Javascript:void(0)">Start now</a>
        </div>
      </div>
      <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
        <div class="make_img">
          <figure><img src="{{asset('frontend/images/make_img.jpg')}}"></figure>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end MAKE --> 
<!-- end learn --> 


<!-- contact -->
<div id="contact" class="contact">
  <div class="container center_div  ">
    <div class="white_color">
      <div class="row">

        {{-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div id="map">
          </div>

        </div> --}}
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

          <form   action="https://formsubmit.co/arehmanmsg@gmail.com " method="POST"   class="contact_bg">
            <div class="row">
              <div class="col-md-12">
                <div class="titlepage">
                  <h2>   Contact <strong class="yellow">Us</strong> for Inquiry  </h2>
                </div>
                <div class="col-md-12">
                  <input class="contactus" placeholder="Your Name" type="text" name="Your Name" required>
                </div>
                <div class="col-md-12">
                  <input class="contactus" placeholder="Your Email" type="text" name="Your Email" required>
                </div>
                <div class="col-md-12">
                  <input class="contactus" placeholder="Your Phone" type="text" name="Your Phone" required>
                </div>
                <div class="col-md-12">
                  <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea required>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <button class="send" type="submit">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>


      {{-- <form action="https://formsubmit.co/arehmanmsg@gmail.com " method="POST">
        <input type="text" name="name" required>
        <input type="email" name="email" required>
        <textarea name="message" placeholder="Enter you message" ></textarea>
        <button type="submit">Send</button>
  </form> --}}
    <!-- end contact -->

    <!--  footer -->
    <footr>
      <div class="footer ">
        <div class="container">
          <div class="row">

            <div class="col-md-12">
              <form action="https://formsubmit.co/arehmanmsg@gmail.com " method="POST" class="news">
                <input class="newslatter" placeholder="Email" type="text=subcriber" name=" Email">
                <button class="submit">Subscribe</button>
              </form>
            </div>
            <div class="col-md-12">
              <h2>Newsletter</h2>
              <span>latest courses offers and class schedules  </span>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
              <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 ">
                  <div class="address">
                    <h3>Contact us </h3>
                    <ul class="loca">
                      <li>  
                        <a href="#"><img src="{{asset('frontend/icon/loc.png')}}" alt="#" /></a>229/6 Ghaffar Manzil
                        <br>Jamia Nagar New Delhi </li>
                        <li>
                          <a href="#"><img src="{{asset('frontend/icon/email.png')}}" alt="#" /></a>aiskillscenter@gmail.com </li>
                          <li>
                            <a href="#"><img src="{{asset('frontend/icon/call.png')}}" alt="#" /></a>+917532882873 </li>
                          </ul>
                          <ul class="social_link">
                            <li><a href="#"><img src="{{asset('frontend/icon/fb.png')}}"></a></li>
                            <li><a href="#"><img src="{{asset('frontend/icon/tw.png')}}"></a></li>
                            <li><a href="#"><img src="{{asset('frontend/icon/lin(2).png')}}"></a></li>
                            <li><a href="#"><img src="{{asset('frontend/icon/instagram.png')}}"></a></li>
                          </ul>

                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="address">
                          <h3>Courses</h3>
                          <ul class="Menu_footer">
                            <li class="active"> <a href="#">Data Science and Analytics</a> </li>
                            <li><a href="#">Artificial Intelligence and Machine Learning</a> </li>
                            <li><a href="#">DevOps</a> </li>
                            <li><a href="#">UI/UX Design</a> </li>
                            <li><a href="#">React</a> </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="address">
                          <h3>Information</h3>
                          <ul class="Links_footer">
                            <li class="active"><a href="#">Campus Tour</a> </li>
                            <li><a href="#">Student Lifes</a> </li>
                            <li><a href="#">Cholarship</a> </li>
                            <li><a href="#"> Admission</a> </li>
                            <li><a href="#">Leadership</a> </li>
                          </ul>
                        </div>
                      </div>

                      <div class="col-lg-3 col-md-6 col-sm-6 ">
                        <div class="address">
                          <a href="index.html"> <img src="{{asset('frontend/images/ai.jpg')}}" alt="logo"></a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

              </div>
              <div class="copyright">
                <div class="container">
                  <p>Copyright © 2019 Design by <a href="https://html.design/">Atiq </a></p>
                </div>
              </div>
            </div>
          </footr>
          <!-- end footer -->
          <!-- Javascript files-->
          <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
          <script src="{{asset('frontend/js/popper.min.js')}}"></script>
          <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
          <script src="{{asset('frontend/js/jquery-3.0.0.min.js')}}"></script>
          <script src="{{asset('frontend/js/plugin.js')}}"></script>
          <!-- sidebar -->
          <script src="{{asset('frontend/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
          <script src="{{asset('frontend/js/custom.js')}}"></script>
          <script src="{{asset('frontend/https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js')}}"></script>


          {{-- <script>
// This example adds a marker to indicate the position of Bondi Beach in Sydney,
// Australia.
function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 11,
    center: {
      lat: 40.645037,
      lng: -73.880224
    },
  });

  var image = 'images/maps-and-flags.png';
  var beachMarker = new google.maps.Marker({
    position: {
      lat: 40.645037,
      lng: -73.880224
    },
    map: map,
    icon: image
  });
}
</script>
<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<!-- end google map js --> --}}



</body>

</html>