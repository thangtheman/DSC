<a id="top"></a>
<div class="header">
  <div class="topnav">
    <div class="container">
      <div class="row">
        <div class="col-sm-6" > <span class="quote" id="dscQuote"></span></div>
        <div class="col-sm-6 col-xs-12 text-right langauage social"> <a href="#" class="language">English / हिंदी</a> <a href="https://www.facebook.com/DrSubhashChandraDSC" target="_blank" ><i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="https://twitter.com/_SubhashChandra" target="_blank" ><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="https://www.youtube.com/channel/UCuVnhh7xEv78fEawk_WiAEQ?sub_confirmation=1" target="_blank" ><i class="fa fa-youtube" aria-hidden="true"></i></a> <a href="https://www.instagram.com/_subhashchandra/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a> </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-inverse" >
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="index"><img src="images/logo-header.png" class="logo"/></a> </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="about-dsc">About DSC</a></li>
          <li><a href="events">Events</a></li>
          <li><a href="shop">Shop</a></li>
          <li><a href="dsc-show">DSC Show</a></li>
          <li><a href="blog">Blog</a></li>
          <li><a href="news">News</a></li>
          <li><a href="contact">Contact</a></li>
          <li><a href="#modal" data-toggle="modal" data-target="#myModal" type="button">Join DSC <br>
            Newsletter</a></li>
          <li><a href="charities">Support <br>
            Charities</a></li>
        </ul>
      </div>
      <!--/.navbar-collapse --> 
    </div>
  </nav>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog " role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <p>Stay Informed, Learn, Succeed!</p>
          <h3 class="modal-title" style="margin-top: -15px" id="myModalLabel"> Join DSC Newsletter</h3>
          <form method="post" action="http://coreesseldigital.com/DSC/pre-launch/process-subscriptions.php">
            <input class="newsletter" type="text" name="email" id="email"  placeholder=""/>
            <input type="submit" />
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Nav Container -->
  <div class="container">
    <h1><?php echo $page_name; ?></h1>
  </div>
</div>

<?php if(($page_name=="News") or ($page_name=="Blog")){ ?>
<!-- Social Media Sharing -->
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "405b040e-fd61-49dc-b175-4d8c4725ea27", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
<!-- Social Media Sharing -->
<?php } ?>