<?php
$title = "About";
include( 'header.php' );
?>
<div class="jumbotron jumbo">
  <div class="wrapper">
    <div class="row">
      <div class="col-md-6 pr-0">
        <section class="header">
          <ul class="header-left">
            <li class="header-left-item"> <a href="#" class="header-left-burger"><img src="images/menu.svg"></a> </li>
            <li class="header-left-item">Clients</li>
            <li class="header-left-item">News</li>
          </ul>
          <div class="col-md-2">
            <ul class="social-media">
              <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
              <li><a href="#"><i class="fab fa-youtube"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            </ul>
          </div>
        </section>
        <section class="highlight">
          <div class="action">
            <div class="col-md-4">
              <div class="action-button"> <a class="second-page-action-button">CONTACT US 100</a>
                <button class="second-page-action-button-play"></button>
              </div>
            </div>
          </div>
          <!-- <div class="main">
						<h1 class="main-name">Georgina Alson</h1>
						<h5 class="main-job-title">Young Model 2020</h5>
					</div> --> 
          <!-- <div class="pagination">
						<ol class="pagination-list">
							<li class="pagination-list-item">01</li>
							<li class="pagination-list-item pagination-list-item--active">02</li>
							<li class="pagination-list-item">03</li>
							<li class="pagination-list-item">04</li>
						</ol>
					</div> --> 
        </section>
      </div>
      <div class="col-md-6 pl-0">
        <div class="row d-flex align-items-center">
          <div class="col-md-4">
            <div class="header-brand text-left"> <img src="images/logo.png"> </div>
          </div>
          <div class="col-md-4"> </div>
          <div class="col-md-4">
            <div class="header-right"> <a href="#" class="header-right-search"></a> </div>
          </div>
        </div>
        <div class="about-us">
          <div class="main-heading d-flex align-items-center">
            <h1>D</h1>
            <p>eveloping the best talent in the comedy<br>
              & entertainment business</p>
          </div>
          <div class="about-pragraph">
            <div class="col-md-8">
              <p>Our client list is drawn from the competitive world of stand-up comedy and our boutique, focused company works closely with them to develop talents learned on the circuit into the skills needed for a long-lasting career performing and writing for television, radio and film.</p>
              <p>Our client list is drawn from the competitive world of stand-up comedy and our boutique, focused company works closely with them to develop talents. Learned on the circuit into the skills needed for a long-lasting career performing and writing for television, radio and film.</p>
            </div>
          </div>
          <div class="col-md-8">
            <div class="black-bg">
              <h2><i>Motivation</i> Is The First <br>
                Step To <i>Success</i></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="wrapper blog">
  <div class="profession">
    <ul class="profession-list">
      <li>Actor</li>
      <li>Comedian</li>
      <li>Musician</li>
      <li>Comedian</li>
      <li>Model</li>
    </ul>
  </div>
  <div class="container">
    <div class="image-slider">
      <div class="owl-carousel owl-theme">
        <div class="item">
          <div class="hovereffect" style="background: url(./images/talent2.jpg) 0px top / cover no-repeat;">
            <div class="overlay"> <a href="#"><span><i class="fas fa-arrow-right"></i></span></a>
              <h4 class="text-center">Iva Newman</h4>
              <h5 class="text-center">SINGER</h5>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="hovereffect" style="background: url(./images/talent1.jpg) 0px top / cover no-repeat;">
            <div class="overlay"> <a href="#"><span><i class="fas fa-arrow-right"></i></span></a>
              <h4 class="text-center">Iva Newman</h4>
              <h5 class="text-center">SINGER</h5>
            </div>
          </div>
        </div>
        <div class="item mr-0">
          <div class="hovereffect" style="background: url(./images/talent3.jpg) 0px top / cover no-repeat;">
            <div class="overlay"> <a href="#"><span><i class="fas fa-arrow-right"></i></span></a>
              <h4 class="text-center">Iva Newman</h4>
              <h5 class="text-center">SINGER</h5>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="hovereffect" style="background: url(./images/talent8.jpg) 0px top / cover no-repeat;">
            <div class="overlay"> <a href="#"><span><i class="fas fa-arrow-right"></i></span></a>
              <h4 class="text-center">Iva Newman</h4>
              <h5 class="text-center">SINGER</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('.owl-carousel').owlCarousel({
		  	autoplay:true,
			   autoplayTimeout:3000,
			   autoplayHoverPause:false,
		    loop:true,
		    margin:0,
		    nav:true,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:2
		        },
		        1000:{
		            items:4
		        }
		    }
		});

	});

</script>
<?php
include( 'footer.php' );
?>
