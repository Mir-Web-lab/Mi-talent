<?php
$title = "Contact";
$class = "White-text";
$hamburger = "hamburger";
include( 'header.php' );
?>
<div class="jumbotron jumbos">
  <div class="wrapper">
    <div class="row">
      <div class="col-md-6 pr-0">
        <section class="header">
          <ul class="header-left">
            <li class="header-left-item "> <a href="#" class="header-left-burger  <?php echo $hamburger ?>"><i class="fas fa-bars"></i></a> </li>
            <li class="header-left-item <?php echo $class ?>">Clients</li>
            <li class="header-left-item <?php echo $class ?>">News</li>
          </ul>
        </section>
        <section class="highlight contact">
          <div class="news-main-heading">
            
            <h2>CONTACT<br>US</h2>
            <h5 class="mt-5">mass impressions</h5>
         </div>
          <div class="action">
            <div class="col-md-4">
              <div class="action-button"> <a class="contact-page-action-button">Get direction</a>
                <button class="contact-page-action-button-play"></button>
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
          <div class="main-heading headings d-flex align-items-center">
            <h1>W</h1>
            <p style="color: #000;">e would love to hear from you, whether<br>
              you want more information on any of</p>
          </div>
          <p class="main-paragraph">our acts or wish to discover how our artists can <br>
            support your event.</p>
          <div class="contact-info">
            <div class="row">
              <div class="col-md-4 address"> <img src="images/home.png">
                <div class="col-md-10 pl-5">
                  <p>79 - 81 Berkeley Square London WC923 9TT</p>
                </div>
              </div>
              <div class="col-md-4 phone-number text-left"> <img src="images/phone.png">
                <div class="col-md-10 pl-5">
                  <p>+44 (0) 234 567 8910 +44 (0) 234 567 8910</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 mail"> <img src="images/mail.png">
                <div class="col-md-10 pl-5">
                  <p>hello@mitalent.com</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include( 'footer.php' );
?>
<style type="text/css">
  footer{
    margin: 400px 0 0 0;
  }
</style>