<style>



.blog-card {
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
          flex-direction: column;
  margin: 1rem auto;
  box-shadow: 0 3px 7px -1px rgba(0, 0, 0, 0.1);
  margin-bottom: 1.6%;
  background: #fff;
  line-height: 1.4;
  font-family: sans-serif;
  border-radius: 5px;
  overflow: hidden;
  z-index: 0;
}
.blog-card a {
  color: inherit;
}
.blog-card a:hover {
  color: #FF4500;
}
.blog-card:hover .photo {
  -webkit-transform: scale(1.3) rotate(3deg);
          transform: scale(1.3) rotate(3deg);
}
.blog-card .meta {
  position: relative;
  z-index: 0;
  height: 200px;
}
.blog-card .photo {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-size: cover;
  background-position: center;
  -webkit-transition: -webkit-transform 0.2s;
  transition: -webkit-transform 0.2s;
  transition: transform 0.2s;
  transition: transform 0.2s, -webkit-transform 0.2s;
}
.blog-card .details,
.blog-card .details ul {
  margin: auto;
  padding: 0;
  list-style: none;
}
.blog-card .details {
  position: absolute;
  top: 0;
  bottom: 0;
  left: -100%;
  margin: auto;
  -webkit-transition: left 0.2s;
  transition: left 0.2s;
  background: rgba(0, 0, 0, 0.6);
  color: #fff;
  padding: 10px;
  width: 100%;
  font-size: 0.9rem;
}
.blog-card .details a {
  -webkit-text-decoration: dotted underline;
          text-decoration: dotted underline;
}
.blog-card .details ul li {
  display: inline-block;
}
.blog-card .details .author:before {
  font-family: FontAwesome;
  margin-right: 10px;
  content: "\f007";
}
.blog-card .details .date:before {
  font-family: FontAwesome;
  margin-right: 10px;
  content: "\f133";
}
.blog-card .details .tags ul:before {
  font-family: FontAwesome;
  content: "\f02b";
  margin-right: 10px;
}
.blog-card .details .tags li {
  margin-right: 2px;
}
.blog-card .details .tags li:first-child {
  margin-left: -4px;
}
.blog-card .description {
  padding: 1rem;
  background: #fff;
  position: relative;
  z-index: 1;
}
.blog-card .description h1,
.blog-card .description h2 {
  font-family: Poppins, sans-serif;
}
.blog-card .description h1 {
  line-height: 1;
  margin: 0;
  font-size: 1.7rem;
}
.blog-card .description h2 {
  font-size: 1rem;
  font-weight: 300;
  text-transform: uppercase;
  color: #a2a2a2;
  margin-top: 5px;
}
.blog-card .description .read-more {
  text-align: right;
}
.blog-card .description .read-more a {
  color: #FF4500;
  display: inline-block;
  position: relative;
}
.blog-card .description .read-more a:after {
  content: "\f061";
  font-family: FontAwesome;
  margin-left: -10px;
  opacity: 0;
  vertical-align: middle;
  -webkit-transition: margin 0.3s, opacity 0.3s;
  transition: margin 0.3s, opacity 0.3s;
}
.blog-card .description .read-more a:hover:after {
  margin-left: 5px;
  opacity: 1;
}
.blog-card p {
  position: relative;
  margin: 1rem 0 0;
}
.blog-card p:first-of-type {
  margin-top: 1.25rem;
}
.blog-card p:first-of-type:before {
  content: "";
  position: absolute;
  height: 5px;
  background: #FF4500;
  width: 35px;
  top: -0.75rem;
  border-radius: 3px;
}
.blog-card:hover .details {
  left: 0%;
}
@media (min-width: 640px) {
  .blog-card {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
            flex-direction: row;
    max-width: 700px;
  }
  .blog-card .meta {
    flex-basis: 40%;
    height: auto;
  }
  .blog-card .description {
    flex-basis: 60%;
  }
  .blog-card .description:before {
    -webkit-transform: skewX(-3deg);
            transform: skewX(-3deg);
    content: "";
    background: #fff;
    width: 30px;
    position: absolute;
    left: -10px;
    top: 0;
    bottom: 0;
    z-index: -1;
  }
  .blog-card.alt {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: reverse;
            flex-direction: row-reverse;
  }
  .blog-card.alt .description:before {
    left: inherit;
    right: -10px;
    -webkit-transform: skew(3deg);
            transform: skew(3deg);
  }
  .blog-card.alt .details {
    padding-left: 25px;
  }
}

</style>  
<div class="row">
<?php include "product.php"; ?> 
</div><br><br>
  <!--<div class="blog-card">
  	<div class="meta">
  		<div class="photo" style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-1.jpg)"></div>
  		<ul class="details">
  			<li class="author"><a href="#"><?=$planname?></a></li>
  			<li class="author">MINIMUM : 30USD</li>
  			<li class="author">MAXIMUM : 9999USD</li>
  			<li class="tags">
  				<ul>
  					<li><a href="#">one pip per day</a></li>
  				</ul>
  			</li>
  		</ul>
		<h1><?=$planname?></h1>
  	</div>
  	<div class="description">
  		<h2>CAPITAL BACK FOR THE NEXT DAY <br>CAPITAL BACK GUARANTEE</h2>
		
  		<h3>Plan <?=$planroi?>%</h3>
		<p><?=$parsento?>% per Day</p>
  		<h3><?=$planday?> Days Contract</h3>
			
  		<p class="read-more">
  			<a href="page_invest.php">Subscribe</a>
  		</p>
  	</div>
  </div> -->
  
  
  
  <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
    <div class="row">
    <div class="col-sm-4">
      +
    </div>
	<!-- meta trader 4 android -->
    <div class="col-sm-4 col-xs-12">
      <div class="outerbox text-center slideanim">
        <div class="meta-trader">
          <h1>Market Capitalization</h1>
        </div>
        <div class="panel-body glow4">
		<?php
		include "../btc.php";
		?>
          <table style="width:100%; text-align:center; color:#FFF" >
		  <tr style="border-bottom: 1px solid #f4511e;"><td style="width:33%;">Euro</td>
		  <td style="width:33%;">EUR</td><td style="width:33%;">$<?=$eur?></td></tr>
		  <tr style="border-bottom: 1px solid #f4511e;"><td style="width:33%;">Pound Sterling</td>
		  <td style="width:33%;">GBP</td><td style="width:33%;">$<?=$gbp?></td></tr>
		  <tr style="border-bottom: 1px solid #f4511e;"><td style="width:33%;">Japanese Yen</td>
		  <td style="width:33%;">JPY</td><td style="width:33%;">$<?=$jpy?></td></tr>
		  <tr style="border-bottom: 1px solid #f4511e;"><td style="width:33%;">Canadian Dollar</td>
		  <td style="width:33%;">CAD</td><td style="width:33%;">$<?=$cad?></td></tr>
		  <tr style="border-bottom: 1px solid #f4511e;"><td style="width:33%;">Australian Dollar</td>
		  <td style="width:33%;">AUD</td><td style="width:33%;">$<?=$aud?></td></tr>
		  <tr style="border-bottom: 1px solid #f4511e;"><td style="width:33%;">Chinese Yuan</td>
		  <td style="width:33%;">CNY</td><td style="width:33%;">$<?=$cny?></td></tr>
		  <tr style="border-bottom: 1px solid #f4511e;"><td style="width:33%;">New Zealand Dollar</td>
		  <td style="width:33%;">NZD</td><td style="width:33%;">$<?=$nzd?></td></tr>
          </table>
        </div>
      </div>
    </div><!-- ok -->
	<div class="col-sm-4">
      +
    </div>
  </div> 
  <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
  
  
  
  <div class="blog-card alt">
  	<div class="meta">
  		<div class="photo" style="background-image: url(images/soon.png)"></div>
  		<ul class="details">
  			<li class="author"><a href="#">Coming soon</a></li>
  			<li class="tags">
  				<ul>
  					<li><a href="#">one day</a></li>
  					<li><a href="#">one pip</a></li>
  					<li><a href="#">copyright</a></li>
  				</ul>
  			</li>
  		</ul>
  	</div>
  	<div class="description">
  		<h1>More Good News & Bonus Surprises Coming Soon</h1>
  		<h2>Coming Soon</h2>
		
  	</div>
  </div>