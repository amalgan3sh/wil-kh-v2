

<html>
  <head>
    <script src="js/contact_us.js"></script>
  <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
</script>
<script type="text/javascript">
   (function(){
      emailjs.init({
        publicKey: "C9gkryqNG61SPInH7",
      });
   })();
</script>
  </head>
  <body>

<!--hero section start-->
<section class="banner p-0 pos-r">
  <div class="banner-slider owl-carousel no-pb" data-dots="false" data-nav="true">
    <div class="item overlay-50 theme-overlay" style="background-image: url('images/client/banner_2.jpg'); background-size: cover; " data-overlay="0">
      <div class="container">
        <div class="row pt-8 custom-pb-2">
          <div class="col-lg-6 col-md-8 col-12">
            <h1 class="mb-4 text-white">Excellence in Laboratory Services</h1>
            <p class="lead font-w-5 text-white">Experience state-of-the-art laboratory services with WIL.<br>We are committed to delivering excellence in every test.</p>
            <div class="btn-box mt-5">
              <a class="btn btn-white" href="<?php echo base_url('/about_us') ?>"> <span>Learn More.</span>
              </a>
              <a class="btn btn-dark" href="<?php echo base_url('/contact_us') ?>"> <span>Schedule Appointment</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="item overlay-50 theme-overlay" 
     style="background-image: url('images/client/img_28_1.jpg'); 
            background-size: cover; "
            data-overlay="0">
      <div class="container">
        <div class="row pt-8 custom-pb-2">
          <div class="col-lg-6 col-md-8 col-12">
            <h1 class="mb-4 text-white">Your Trusted Laboratory Partner</h1>
            <p class="lead font-w-5 text-white">WIL provides comprehensive laboratory services.<br>Our team is dedicated to ensuring accurate and timely results.</p>
            <div class="btn-box mt-5">
              <a class="btn btn-white" href="<?php echo base_url('/about_us') ?>"> <span>Learn More.</span>
              </a>
              <a class="btn btn-dark" href="<?php echo base_url('/contact_us') ?>"> <span>Schedule Appointment</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--hero section end-->



<!--body content start-->

<div class="page-content">

<!--feature start-->

<section class="p-0">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="mt-n8 white-bg z-index-1 border-top border-start border-light">
          <div class="row g-0">
            <div class="col-lg-4">
              <div class="featured-item py-5 shadow-none d-flex align-items-start style-2 border-end border-light border-bottom">
                <div class="featured-icon me-3"> <i class="flaticon-water-drop"></i>
                </div>
                <div class="featured-desc">
                  <div class="featured-title">
                    <h5 class="mt-0">Water Quality Testing</h5>
                  </div>
                  <p class="mb-3">We conduct comprehensive water quality testing to assess and ensure the safety of water sources.</p>
                  <a class="btn-link text-black" href="<?php echo base_url('/water_quality_test') ?>">Read More...</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="featured-item py-5 shadow-none d-flex align-items-start style-2 border-end border-light border-bottom">
                <div class="featured-icon me-3"> <i class="flaticon-food-safety"></i>
                </div>
                <div class="featured-desc">
                  <div class="featured-title">
                    <h5 class="mt-0">Food Safety Analysis</h5>
                  </div>
                  <p class="mb-3">Our food quality tests are designed to evaluate and improve the safety and quality of food products.</p>
                  <a class="btn-link text-black" href="<?php echo base_url('/food_quality_test') ?>">Read More...</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="featured-item py-5 shadow-none d-flex align-items-start style-2 border-end border-light border-bottom">
                <div class="featured-icon me-3"> <i class="flaticon-soil"></i>
                </div>
                <div class="featured-desc">
                  <div class="featured-title">
                    <h5 class="mt-0">Soil Quality Assessment</h5>
                  </div>
                  <p class="mb-3">Our soil testing services help determine soil health and suitability for various applications.</p>
                  <a class="btn-link text-black" href="<?php echo base_url('/soil_quality_test') ?>">Read More...</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--feature end-->


<!--about start-->

<section>
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-lg-6 col-12 pe-md-6">
        <div class=" position-relative">
          <div class="me-sm-8 mb-10">
            <img class="img-fluid img-border box-shadow w-100" src="images/client/img_1.jpg" alt="">
          </div>
          <div class="position-absolute bottom-0 ms-8 mb-n10">
            <img class="img-fluid img-border box-shadow z-index-1" src="images/client/img_2.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-12 mt-6 mt-lg-0">
        <div class="section-title">
          <h2 class="title">We Employ Cutting-Edge Research Technology & Expertise</h2> 
          <p class="mb-0">At WIL, we're dedicated to providing high-quality products and services in water, food, and environmental safety. Our state-of-the-art laboratory facilities support our research and development activities, ensuring precise and reliable results.</p>
        </div>
        <div class="d-flex align-items-start">
          <ul class="list-unstyled list-icon mb-5 me-5">
            <li class="mb-3"><i class="las la-check"></i> Water Quality Testing</li>
            <li class="mb-3"><i class="las la-check"></i> Food Safety Analysis</li>
            <li><i class="las la-check"></i> Soil Quality Assessment</li>
          </ul>
          <ul class="list-unstyled list-icon mb-5">
            <li class="mb-3"><i class="las la-check"></i> Arsenic Research</li>
            <li class="mb-3"><i class="las la-check"></i> Risk Assessment</li>
            <li><i class="las la-check"></i> Expert Consultation</li>
          </ul>
        </div>
        <!-- <img class="img-fluid me-3" src="images/sign.png" alt=""> -->
        <a class="btn btn-theme" href="<?php echo base_url('/about_us') ?>"> <span>Learn More About Us</span>
        </a>
      </div>
    </div>
  </div>
</section>

<!--about end-->


<!--service start-->
<section class="p-0">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="dark-bg px-md-7 px-4 pt-7 pb-9" style="background-image: url('images/client/img_28.jpg'); ">
          <div class="row justify-content-center text-center">
            <div class="col-lg-8">
              <div class="section-title">
                <h2 class="title">We Provide Comprehensive Solutions for Water, Food, and Environmental Safety!</h2> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid px-lg-6 light-bg">
    <div class="row">
      <div class="col mt-n10">
        <div class="owl-carousel" data-dots="false" data-items="3" data-md-items="2" data-sm-items="1" data-xs-items="1" data-margin="30">
          <div class="item">
            <div class="service-item style-2">
              <div class="service-img position-relative overflow-hidden">
                <img class="img-fluid" src="images/client/img_14.2.jpg" alt="">
              </div>
              <div class="service-desc white-bg shadow-none">
                <div class="service-title">
                  <h4>Water Quality Testing</h4>
                </div>
                <p>Comprehensive analysis to ensure safe and clean water sources.</p>
                <div class="service-icon"> <i class="flaticon-biology-1"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="service-item style-2 active">
              <div class="service-img position-relative overflow-hidden">
                <img class="img-fluid" src="images/client/img_8.2.jpg" alt="">
              </div>
              <div class="service-desc white-bg shadow-none">
                <div class="service-title">
                  <h4>Food Safety Analysis</h4>
                </div>
                <p>Ensuring food quality and safety through advanced testing methods.</p>
                <div class="service-icon"> <i class="flaticon-research"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="service-item style-2">
              <div class="service-img position-relative overflow-hidden">
                <img class="img-fluid" src="images/client/img_12.2.jpg" alt="">
              </div>
              <div class="service-desc white-bg shadow-none">
                <div class="service-title">
                  <h4>Soil Quality Assessment</h4>
                </div>
                <p>Evaluating soil health for sustainable agriculture and land use.</p>
                <div class="service-icon"> <i class="flaticon-test"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="service-item style-2">
              <div class="service-img position-relative overflow-hidden">
                <img class="img-fluid" src="images/services/04.jpg" alt=""> <a class="link-btn" href="arsenic-research.html"><i class="las la-long-arrow-alt-right"></i></a>
              </div>
              <div class="service-desc white-bg shadow-none">
                <div class="service-title">
                  <h4>Arsenic Research</h4>
                </div>
                <p>Developing effective strategies for arsenic contamination mitigation.</p>
                <div class="service-icon"> <i class="flaticon-research"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--service end-->

<section>
  <div class="container">
    <div class="row align-items-center mb-6">
      <div class="col-lg-5 col-12">
      <img class="img-fluid img-border box-shadow w-100" src="images/client/img_20.jpg" alt="water_testing">
      </div>
      <div class="col-lg-7 col-12 mt-5 mt-lg-0 ps-lg-5">
        <div>
          <h3 class="mb-3">Water, Food, Soil Quality Testing Overview</h3>
          <div class="light-bg p-3">
            <ul class="list-unstyled">
              <li class="mb-3"><span class="text-black font-w-5"><a href="<?php echo base_url('images/pdf/WIL_Drinking Water Quality Package 2024_v1.pdf'); ?>" download>Drinking Water Quality Testing</a></span></li>
              <li class="mb-3"><span class="text-black font-w-5"><a href="<?php echo base_url('images/pdf/WIL_Wastewater test information 2024.pdf'); ?>" download>Waste Water Analysis</a></span></li>
              <li class="mb-3"><span class="text-black font-w-5"><a href="<?php echo base_url('images/pdf/WIL_Swimming Pool Water Test Information 2024.pdf'); ?>" download>Recreational Water Quality Testing </a></span></li>
              <li class="mb-3"><span class="text-black font-w-5"><a href="<?php echo base_url('images/pdf/WIL_Industrial Water Test Information 2024.pdf'); ?>" download>Water for Production Testing </a></span></li>
              <li class="mb-3"><span class="text-black font-w-5"><a href="<?php echo base_url('images/pdf/WIL_Irrigation Water Test Information 2024.pdf'); ?>" download>Irrigation Water Quality Testing </a></span></li>
              <li class="mb-3"><span class="text-black font-w-5"><a href="<?php echo base_url('images/pdf/WIL_Water Quality Testing Information Sheet 2024.pdf'); ?>" download>All Water Test Information and Price List </a></span></li>
              <li class="mb-3"><span class="text-black font-w-5"><a href="<?php echo base_url('images/pdf/WIL_Food Quality Test Information 2024.pdf'); ?>" download>Food Quality Testing Information </a></span></li>
              <li class="mb-3"><span class="text-black font-w-5"><a href="<?php echo base_url('images/pdf/WIL_Soil Test Information 2024_v1.pdf'); ?>" download>Soil Quality Testing Information </a></span></li>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!--form start-->
<section class="parallaxie" data-bg-img="https://t3.ftcdn.net/jpg/04/95/00/16/360_F_495001640_bHTjOMfRIiDCdaYmJ9sao4clTw8e9uG9.jpg">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-8 col-11 ms-auto">
      <div class="contact-main white-bg shadow-sm p-5">
      <form id="contact-form" class="row" onSubmit="return false;">
        <div id="formmessage"></div>
        <div class="form-group col-md-6">
          <label for="name">Name:</label>
          <input id="name" type="text" class="form-control" placeholder="Name" required>
        </div>
        <div class="form-group col-md-6">
          <label for="email">Email:</label>
          <input id="email" type="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group col-md-6">
          <label for="phone">Phone:</label>
          <input id="phone" type="tel" class="form-control" placeholder="Phone" required>
        </div>
        <div class="form-group col-md-6">
          <label for="service">Service:</label>
          <select id="service" name="service" class="form-select form-control" required>
            <option value="" disabled selected>- Choose Service -</option>
            <option>Water Testing</option>
            <option>Food Testing</option>
            <option>Soil Testing</option>
          </select>
        </div>
        <div class="form-group col-md-12">
          <label for="message">Message:</label>
          <textarea id="message" class="form-control" placeholder="Message" rows="3" required></textarea>
        </div>
        <div class="col-md-12 text-center mt-4">
          <button type="button" class="btn btn-theme" onclick="sendMail()">
            <span>Send Message</span>
          </button>
        </div>
      </form>
    </div></div>
      </div>
    </div>
  </div>
</section>

<!--form end-->


<!--project start-->

<section>
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8">
        <div class="section-title">
          <h2 class="title">Explore Our Latest Research Projects<br>in Water, Food, and Environmental Safety</h2> 
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="owl-carousel no-pb popup-gallery" data-dots="false" data-items="4" data-md-items="2" data-sm-items="1" data-xs-items="1" data-margin="10">
          <div class="item">
            <div class="cases-item position-relative overflow-hidden">
              <img class="img-fluid w-100" src="images/client/img_18.2.jpg" alt="">
              <a class="popup-img" href="images/client/img_18.2.jpg"> <i class="las la-plus"></i>
              </a>
              <div class="cases-title"> <span>Water Quality</span>
                <h4><a href="#">Microplastics in Drinking Water</a></h4>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="cases-item position-relative overflow-hidden">
              <img class="img-fluid w-100" src="images/client/img_18.2.jpg" alt="">
              <a class="popup-img" href="images/client/img_18.2.jpg"> <i class="las la-plus"></i>
              </a>
              <div class="cases-title"> <span>Food Safety</span>
                <h4><a href="#">Pesticide Residue Analysis</a></h4>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="cases-item position-relative overflow-hidden">
              <img class="img-fluid w-100" src="images/client/img_18.2.jpg" alt="">
              <a class="popup-img" href="images/client/img_18.2.jpg"> <i class="las la-plus"></i>
              </a>
              <div class="cases-title"> <span>Soil Quality</span>
                <h4><a href="#">Heavy Metal Contamination</a></h4>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="cases-item position-relative overflow-hidden">
              <img class="img-fluid w-100" src="images/client/img_18.2.jpg" alt="">
              <a class="popup-img" href="images/client/img_18.2.jpg"> <i class="las la-plus"></i>
              </a>
              <div class="cases-title"> <span>Arsenic Research</span>
                <h4><a href="#">Groundwater Arsenic Removal</a></h4>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="cases-item position-relative overflow-hidden">
              <img class="img-fluid w-100" src="images/client/img_18.2.jpg" alt="">
              <a class="popup-img" href="images/client/img_18.2.jpg"> <i class="las la-plus"></i>
              </a>
              <div class="cases-title"> <span>Environmental Safety</span>
                <h4><a href="#">Industrial Waste Management</a></h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--project end-->



<!--blog start-->

<section>
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8 col-12">
        <div class="section-title">
          <h2 class="title">From our blog list Latest News</h2>
        </div>
      </div>
    </div>
    <div class="row" style="display: flex; flex-wrap: wrap;">
    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" style="display: flex; flex-direction: column;">
        <!-- Blog Card -->
        <div class="card post-card border-0 rounded-0 shadow-sm bg-transparent" style="flex-grow: 1;">
            <img class="card-img-top" src="images/client/blog1.png" alt="blog 1">
            <div class="card-body px-4 pb-4 pt-0" style="flex-grow: 1;">
                <h2 class="h4 my-3">Joining the Regional Meeting of Cambodian Water Supply Association (C.W.A).</h2>
                <ul class="list-inline mb-0 border-top border-bottom border-light py-2 mb-4">
                    <li class="list-inline-item">
                        <a href="#" class="text-black"><i class="lar la-user-circle me-1"></i> Admin</a>
                    </li>
                </ul>
                <div class="d-flex justify-content-between align-items-center">
                    <div><a class="px-3 py-2 light-bg text-black" href="#">Research</a> <a class="px-3 py-2 light-bg text-black" href="#">Development</a></div>
                    <a class="link-btn" href="<?php echo base_url('/blog_one') ?>"><i class="las la-long-arrow-alt-right"></i></a>
                </div>
            </div>
        </div>
        <!-- End Blog Card -->
    </div>

    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" style="display: flex; flex-direction: column;">
        <!-- Blog Card -->
        <div class="card post-card border-0 rounded-0 shadow-sm bg-transparent" style="flex-grow: 1;">
            <img class="card-img-top" src="images/client/blog2.png" alt="blog 2">
            <div class="card-body px-4 pb-4 pt-0" style="flex-grow: 1;">
                <h2 class="h4 my-3">Visit to Saram Water Supply in Kampong Speu Province. </h2><h4 style="color: white;">.</h4>
                <ul class="list-inline mb-0 border-top border-bottom border-light py-2 mb-4">
                    <li class="list-inline-item">
                        <a href="#" class="text-black"><i class="lar la-user-circle me-1"></i> Admin</a>
                    </li>
                </ul>
                <div class="d-flex justify-content-between align-items-center">
                    <div><a class="px-3 py-2 light-bg text-black" href="#">Information</a> <a class="px-3 py-2 light-bg text-black" href="#">Water Supply</a></div>
                    <a class="link-btn" href="<?php echo base_url('/blog_two') ?>"><i class="las la-long-arrow-alt-right"></i></a>
                </div>
            </div>
        </div>
        <!-- End Blog Card -->
    </div>

    <div class="col-md-6 col-lg-4" style="display: flex; flex-direction: column;">
        <!-- Blog Card -->
        <div class="card post-card border-0 rounded-0 shadow-sm bg-transparent" style="flex-grow: 1;">
            <img class="card-img-top" src="images/client/blog3.png" alt="blog 3">
            <div class="card-body px-4 pb-4 pt-0" style="flex-grow: 1;">
                <h2 class="h4 my-3">A pilot study of gravity-driven membrane (GDM) solution at Sotr Nikum Water Supply Station.</h2>
                <ul class="list-inline mb-0 border-top border-bottom border-light py-2 mb-4">
                    <li class="list-inline-item">
                        <a href="#" class="text-black"><i class="lar la-user-circle me-1"></i> Admin</a>
                    </li>
                </ul>
                <div class="d-flex justify-content-between align-items-center">
                    <div><a class="px-3 py-2 light-bg text-black" href="#">Water</a> <a class="px-3 py-2 light-bg text-black" href="#">Standards</a></div>
                    <a class="link-btn" href="<?php echo base_url('/blog_three') ?>"><i class="las la-long-arrow-alt-right"></i></a>
                </div>
            </div>
        </div>
        <!-- End Blog Card -->
    </div>
</div>

    </div>
  </div>
</section>

<!--blog end-->

</div>

<!--body content end--> 