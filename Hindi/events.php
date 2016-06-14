<?php include 'meta.php';?>
<body>
<div id="events" class="secondary-page">
  <?php $page_name='इवेंट्स'; include 'header.php';?>

  <!-- header -->
  
  <style>
        ul{
            list-style:none;
            color:#555;
        }
    </style>
  <div class="page-content">
    <div id="map" >
      <ul class="points" style="display: none">
        <li id="5594">
          <point_header>6th May, 2016<br>
            Simhast Kumbh Mahaparva <br>
            Mahaparva	Ujjain, Madhya Pradesh , India</point_header>
        </li>
        <li id="5462">
          <point_header>11-13 May,2016<br>
            2nd Smart Cities in India Expo 2016 <br>
            Pragati Maidan, New Delhi, India </point_header>
        </li>
        <li id="5986">
          <point_header> 16-19 May,2016<br>
            Vision 2020 Meet<br>
            Goa, India </point_header>
        </li>
    
      </ul>
    </div>
    <section id="upcoming-events" class="fullsize">
      <h2>आने वाले कार्यक्रम</h2>
      <div class="wrapper container">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="event-preview" onclick="window.location.href='http://vision2020.esselgroup.com';">
                <h6>आने वाले कार्यक्रम</h6>
                <h4>सूचना जल्द ही उपलब्ध होगी</h4>
              <!--<p><strong></strong>-->
              <p>-</p>
              <p>-</p>
                <div id="getting-started" class="timer"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="events">
      <div class="events-list container">
      <h2 style="margin-bottom:0;">पिछली घटनाएं</h2>
        <div class="row">
          <div class="col-md-2 col-sm-2 col-xs-12 date">MAY <span>6</span>FRI</div>
          <div class="col-md-10 col-sm-10 col-xs-12 location">
            <h3>Ujjain, Madhya Pradesh</h3>
            <p>Simhast Kumbh Mahaparva, India</p>
            </div>
        </div>
        <!-- row -->
        
        <div class="row">
          <div class="col-md-2 col-sm-2 col-xs-12 date">MAY <span>11</span>WED</div>
          <div class="col-md-10 col-sm-10 col-xs-12 location">
            <h3>2nd Smart Cities in India Expo 2016</h3>
            <p>New Delhi, India</p>
            </div>
        </div>
        <!-- row -->
        
        <div class="row">
          <div class="col-md-2 col-sm-2 col-xs-12 date">MAY <span>16</span>MON</div>
          <div class="col-md-10 col-sm-10 col-xs-12 location">
            <h3>Vision 2020 Meet</h3>
            <p>GOA, India</p>
            </div>
        </div>
        <!-- row -->
        
        <div class="row">
          <div class="col-md-2 col-sm-2 col-xs-12 date">June <span>30</span>THUR</div>
          <div class="col-md-10 col-sm-10 col-xs-12 location">
            <h3>Zee Leadership series</h3>
            <p>London, UK</p>
            </div>
        </div>
        <!-- row --> 
      </div>
    </section>
  </div>
  
  <?php include 'footer.php';?> 
  <script src="js/jquery.countdown.min.js"></script> 
  <script type="text/javascript">
    $('#getting-started').countdown('2015/06/30', function(event) {
        $(this).html(event.strftime('<div>%w</div> <div class="days">%d</div> <div class="hours">%H</div> <div class="mins">%M</div><div class="secs">%S</div>'));
    });
</script> 
 /div>
<!-- page --> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/jquery.min.js"></script> 
<script src="js/raphael-min.js"></script> 
<script src="js/pixelmap-min.js"></script> 
<script>
    $(document).ready(function() {
		if($(window).width()>768){
        $('#map').pixelmap({
            point_shape:'circle',
            pointW:6,
            pointH:6,
            pointS:2,
            c_bg:"#f0f0f0",
            cw:950,
            ch:600,
            c_deadPoint: "#c0c0c0",
            rad:6,
            slideshow:true,
            tooltip_delay:550,
            tt_off:8,
            slidedelay: 5000,
            b_t1:true,
            b_t2:true

        });
		}
		else
		{
		$('#map').pixelmap({
            point_shape:'circle',
            pointW:6,
            pointH:6,
            pointS:2,
            c_bg:"#f0f0f0",
            cw:950,
            ch:600,
            c_deadPoint: "#c0c0c0",
            rad:6,
            slideshow:true,
            tooltip_delay:550,
            tt_off:8,
            slidedelay: 5000,
            b_t1:true,
            b_t2:true

        });
		}
    });
</script>
</body>
</html>
