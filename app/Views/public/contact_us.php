<html>
  <head>
    <script src="js/contact_us.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <script type="text/javascript">
      (function(){
        emailjs.init({
          publicKey: "C9gkryqNG61SPInH7",
        });
      })();
    </script>
  </head>
  <!--page title start-->
  
  <section class="page-title parallaxie" data-bg-img="images/client/img_17.jpg">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="white-bg p-md-5 p-3 d-inline-block">
          <h1 class="text-theme">Contact <span class="text-black">Us</span></h1>
          <nav aria-label="breadcrumb" class="page-breadcrumb border-top border-light pt-3 mt-3">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url('/') ?>"><i class="las la-home me-1"></i>Home</a>
              </li>
              <li class="breadcrumb-item">About Us
              </li>
              <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
            </ol>
          </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!--page title end-->
  
  
  <!--body content start-->
  
  <div class="page-content">
  
<!--contact start-->

<section>
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8 col-12">
        <div class="section-title">
          <h2 class="title">Drop A Line!</h2> 
          <p class="mb-0">Any Question or Remarks ? Just Write Us a Message!</p>
        </div>
      </div>
    </div>
    <div class="row g-0">
      <div class="col-lg-6">
    <!-- Previous sections remain the same until the form -->
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
    <div class="col-lg-5 dark-bg">
        <div class="px-3 py-5 p-md-5 text-white">
          <div class="contact-media mb-4">
            <h5 class="text-white">Find Office:</h5>
            <span>National Road 7, Ampil Krom Village, Kampong Cham, Cambodia </span>
          </div>
          <div class="contact-media mb-4">
            <h5 class="text-white">Contact Us:</h5>
            <ul class="list-unstyled">
              <li class="mb-2">Phone: <a href="tel:+912345678900"><strong>+855 (0) 16 668 900 </strong></a>
              </li>
              <li class="mb-2">Email:<br>
              </li>
              <li>&nbsp&nbsp&nbsp&nbsp General Inquiries: <a href="info@wil-kh.com"><strong>info@wil-kh.com </strong></a>
              </li>
              <li>&nbsp&nbsp&nbsp&nbsp Laboratory Services: <a href="mailto:lab@wil-kh.com"><strong>lab@wil-kh.com </strong></a>
              </li>
              <li>&nbsp&nbsp&nbsp&nbsp Research Collaborations: <a href="mailto:research@wil-kh.com"><strong>research@wil-kh.com </strong></a>
              </li>
            </ul>
          </div>
          <div class="contact-media mb-4">
            <h5 class="text-white">Working Hours:</h5>
            <span>Monday - Saturday: <strong>8:00 AM - 12:00 PM, 1:00 PM - 5:00 PM </strong></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--contact end-->


<!--map start-->

<section class="p-0">
  <div class="container-fluid p-0">
    <div class="row">
      <div class="col-md-12">
        <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.982330201794!2d105.4280371!3d12.0145362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310c4120fd1f5121%3A0x5888bd0cab029ddf!2sWatER%20Innovation%20LAB!5e1!3m2!1sen!2sin!4v1731593948807!5m2!1sen!2sin" allowfullscreen=""></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<!--map end-->

</div>

<!--body content end--> 

  </body>
</html>