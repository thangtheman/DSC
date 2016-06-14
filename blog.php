<?php include 'meta.php'; ?>
<body>
<div id="blog" class="secondary-page">
  <?php  $page_name="Blog";  include 'header.php'; ?>
  <!-- header -->

  <div class="page-content">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-12">
          <div class="highlight">
            <div class="bg"></div>
            <a href="blog-1"><img src="images/news-featured-1.jpg"/></a>
            <div class="wrapper">
              <h3><a href="#"></a></h3>
              <p class="preview"></p>
              <p class="text-muted">By DSC  on January 20, 2016</p>
              <br/>
              <a href="#" class="button secondary">Read More</a> </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12">
          <ul class="featured-blogs">
            <li> <img src="images/blog-6-t.jpg" class="pull-left" data-src="news-featured-2.jpg"/>
              <h4><a href="blog-3">Making The Right Career Choice</a></h4>
              <p>When it comes to making any major career... <a href="blog-3">Read More</a></p>
              <span>Posted on May 7, 2016</span> </li>
            <li> <img src="images/dsc-8.jpg" class="pull-left"  data-src="news-featured-3.jpg"/>
              <h4><a href="blog-2">Secrets of successful entreprenuership decoded!</a></h4>
              <p>I keep receiving a lot of questions from... <a href="blog-2">Read More</a></p>
              <span>Posted on May 7, 2016</span> </li>
            <li> <img src="images/blog-4-t.jpg" class="pull-left"  data-src="news-featured-4.jpg"/>
              <h4><a href="blog-4">Time Management Is Life Management</a></h4>
              <p>We all hope for that extra hour and extra... <a href="blog-4">Read More</a></p>
              <span>Posted on May 7, 2016</span> </li>
          </ul>
        </div>
      </div>
      <hr/>
      <div class="row">
        <div class="col-sm-8">
          <h3>Recent Blogs</h3>
          <ul class="news-listings">

            <li> <img src="images/blog-7.jpg" class="pull-left"/>
              <h4><a href="blog-7">90 Glorious years of Essel Group</a></h4>
              <p>It is a matter of immense pride for me to share with you that Essel Group has completed 90 Glorious Years this May 2016. A family firm, by the name of M/s Ram Gopal Inder Prashad, which was formed by my great grandfather Late Ram Gopal Ji in the year 1926, was reconstituted in a family separation... <a href="blog-7">Read More</a></p>
              <p class="text-muted">By DSC  on June 1, 2016</p>
            </li>


            <li> <img src="images/dsc-19.jpg" class="pull-left"/>
              <h4><a href="blog-6">Society, Our True Mirror</a></h4>
              <p>“A Dalit woman in a remote village in India…” This is how I started narrating a story in one of the DSC shows recently. A young man in the crowd immediately stopped me and asked, “Sir, why does your story start with a Dalit woman and not just a woman. Why did you attach her caste to her identity?”...  <a href="blog-6">Read More</a></p>
              <p class="text-muted">By DSC  on May  26, 2016</p>
            </li>
            <li> <img src="images/blog-5-t.jpg" class="pull-left"/>
              <h4><a href="blog-5">Importance Of Communication</a></h4>
              <p>It is always a matter of immense pride and pleasure to share moments of joy. Today, I want to share with you some good news for our Zee Family. I was privileged to receive the CIF Chanchlani Global Indian Award 2016. The award is result of the perseverance and hard work of our ZEE family around the world. I am extremely blessed to... <a href="blog-5">Read More</a></p>
              <p class="text-muted">By DSC  on May 7, 2016</p>
            </li>
            <li> <img src="images/dsc-8.jpg" class="pull-left"/>
              <h4><a href="blog-2">Secrets of successful entreprenuership decoded!</a></h4>
              <p>I keep receiving a lot of questions from my followers on social media about the secrets of being a successful entrepreneur. I had the opportunity to visit IIM Ahmedabad last year where students wanted to understand how to become a successful entrepreneur and what to keep in mind when he/she starts his/her entrepreneurial journey...  <a href="blog-2">Read More</a></p>
              <p class="text-muted">By DSC  on May 7, 2016</p>
            </li>
            <li> <img src="images/dsc-7.jpg" class="pull-left"/>
              <h4><a href="blog-1">Receiving the CIF Chanchlani Global Indian Award 2016</a></h4>
              <p>It is always a matter of immense pride and pleasure to share moments of joy. Today, I want to share with you some good news for our Zee Family. I was privileged to receive the CIF Chanchlani Global Indian Award 2016. The award is result of the perseverance and hard work of our ZEE family around the world...  <a href="blog-1">Read More</a></p>
              <p class="text-muted">By DSC  on May 7, 2016</p>
            </li>
          </ul>
        </div>
        <?php include 'blog-sidebar.php';?>
      </div>
      <nav class="pagination-container" style="display:none;">
        <ul class="pagination">
          <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">&laquo;</span> </a> </li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li> <a href="#" aria-label="Next"> <span aria-hidden="true">&raquo;</span> </a> </li>
        </ul>
      </nav>
    </div>
  </div>
  <?php include 'footer.php';?>
</div>
<!-- page -->

<script>
	  var slide=1;
      	$(document).ready(function(){
			if($(window).width()>767){
			changebanner();
			}
		});

		function changebanner(){
			if(slide<3){
				slide=slide+1;
			}else{
				slide=1;
			}
			$(".featured-blogs li").removeClass("current");
			$(".featured-blogs li:nth-child("+slide+")").addClass("current");
			$(".highlight img, .highlight h3, .highlight p,.highlight a.button").fadeOut(250);
			setTimeout(function(){
				$(".highlight img").attr('src',"images/"+$(".featured-blogs .current img").attr("data-src"));

				$(".highlight h3").html($(".featured-blogs .current h4").html());
				$(".highlight p.preview").html($(".featured-blogs .current p").html());
				$(".highlight a").attr('href',$(".featured-blogs .current a").attr('href'));
				$(".highlight p.text-muted").html($(".featured-blogs .current span").html());
				$(".highlight img, .highlight h3, .highlight p,.highlight a.button").fadeIn(250);
			},500);
			//$(".highlight img").attr('src',"images/"+$(".featured-blogs .current img").attr("data-src"));

			setTimeout(function(){  changebanner(); },5000);
		}
      </script>
</body>
</html>
