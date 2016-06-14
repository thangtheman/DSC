<?php include 'meta.php';?>
<body>
<div id="contact" class="secondary-page">
  <?php $page_name='संपर्क'; include 'header.php';?>
  
  <!-- header -->
  
  <div class="page-content">
    <div class="contact-form container">
    <form method="post" action="http://coreesseldigital.com/DSC/pre-launch/process-contact.php">
      <div class="row">
        <div class="col-sm-6">
          <label for="exampleInputEmail1">नाम</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Name">
        </div>
        <div class="col-sm-6">
          <label for="exampleInputEmail1">टेलीफोन</label>
          <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <label for="exampleInputEmail1">ईमेल पता</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
        </div>
        <div class="col-sm-6">
          <label for="exampleInputEmail1">विषय</label>
          <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <textarea class="form-control" id="message" name="message" rows="3"></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <input type="submit" value="Submit"/>
        </div>
      </div>
      </form>
    </div>
    <div class="splitboxes">
      <div class="row">
        <div class="container">
          <div class="col-sm-6">
            <h3>प्रेस जांच</h3>
            <img src="images/press-inquiry.jpg" class="pull-right"/>
            <p>प्रेस और मीडिया में पूछताछ के लिए नीचे दिए गए लिंक पर क्लिक करें.</p>
            <p><a href="mailto:press@drsubhashchandra.com" class="button secondary">Inquries</a></p>
          </div>
          <div class="col-sm-6 connect-with-dsc">
            <h3>डीएससी का पालन करें</h3>
            <img src="images/dsc-1.jpg" class="pull-right"/>
            <p><a href="https://www.facebook.com/DrSubhashChandraDSC/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i> फेसबुक</a></p>
            <p><a href="https://twitter.com/_SubhashChandra" target="_blank" ><i class="fa fa-twitter-square" aria-hidden="true"></i> ट्विटर</a></p>
            <p><a href="https://www.instagram.com/_subhashchandra/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i> इंस्टाग्राम</a></p>
            <p><a href="https://www.youtube.com/channel/UCuVnhh7xEv78fEawk_WiAEQ?sub_confirmation=1" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i> यूट्यूब</a></p>
          </div>
        </div>
        <!-- charities --> 
      </div>
    </div>
  </div>
  
  <?php include 'footer.php';?>
   
</div>
<!-- page --> 
</body>
</html>
