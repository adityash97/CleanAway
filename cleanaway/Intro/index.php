
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">

<title>CleanAway</title>
<link rel="shortcut icon" href="Img/two.png">

<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Anton|Krona+One" rel="stylesheet">

<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">

<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script src="contactform/contactform.js"></script>
</head>
<body>
<header class="header" id="header"><!--header-start-->
	<div class="container">
    		
        <h1 class="animated fadeInDown delay-07s"><b>Welcome To Clean Away</b></h1>
        
            <a class="link animated fadeInUp delay-1s servicelink" href="#service">Get Started</a>
    </div>
</header><!--header-end-->

<nav class="main-nav-outer" id="test"><!--main-nav-start-->
	<div class="container">
        <ul class="main-nav">
        	<li><a href="#header">Home</a></li>
            <li><a href="#service">Services</a></li>
            <li><a href="#Portfolio">About</a></li>
            <li class="small-logo"><a href="#header"><img src="img/g2.jpg" alt=""></a></li>
            <li><a href="..\Login\index.php">Login</a></li>
            <li><a href="#team">Team</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
    </div>
</nav><!--main-nav-end-->



<section class="main-section" id="service"><!--main-section-start-->
	<div class="container">
    	<h2>Services</h2>
    	<h6>"We don't want to push our ideas on to customers, we simply want to make what they want"..</h6>
        <div class="row">
        	<div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
            	<div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa fa-eye"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>NGO/VOLUNTEER SERVICE</h3>
                        <p>As a volunteer leader, it’s you who can change this. You can encourage your volunteers, engage and motivate them to grow, and become a source of inspiration!.</p>
                    </div>
                </div>
                <div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa fa-plane"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>tracking</h3>
                        <p>Forget about complaining about the lack of time and keep track on the work.</p>
                    </div>
                </div>
                <div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa fa-exchange"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>Effective Management</h3>
                        <p>We deliver the earliest, whatever the convenience to us.</p>
                    </div>
                </div>
                <div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa-medkit"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>24/7 Support</h3>
                        <p>We would rather hustle 24/7 than slave 9 to 5.</p>
                    </div>
                </div>
            </div>
            <figure class="col-lg-8 col-sm-6  text-right wow fadeInUp delay-02s">
            	<img src="img/pic1.jpg" alt="">
            </figure>
        
        </div>
	</div>
</section><!--main-section-end-->






<section class="main-section paddind" id="Portfolio"><!--main-section-start-->
	<div class="container">
    	<h2>ABOUT US</h2>
    	<!--  Add about content -->
<p style="text-align:justify"> 
Clean Away are the activities and actions required to manage waste from its inception to its final disposal.It includes the collection, transport, treatment and disposal of waste, together with monitoring and regulation of the waste management process.Our website is focused on developing a platform for the users, volunteers and NGO(s) to participate in the cleanliness of the neighbourhood and the city in all. The user will be able to raise complaints in the medium of  images. These images will be used to identify the level of waste spread across a particular location attached by the user. To overcome the misinformation problem this system will provide updates regarding the actions taken by concerned people.Volunteers and NFO are a major part of this system as they will be helping in segregation and cleaning of wastes around the neighbourhood and also creating awareness among the citizens.


</section>
</p>
     
        
	</div>

<script type="text/javascript">
    $(document).ready(function(e) {
        $('#test').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false    
            
        });
        
    });
</script>

  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();
  </script>


<script type="text/javascript">
	$(window).load(function(){
		
		$('.main-nav li a, .servicelink').bind('click',function(event){
			var $anchor = $(this);
			
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 102
			}, 1500,'easeInOutExpo');
			
      if ($(window).width() < 768 ) { 
        $('.main-nav').hide(); 
      }
			event.preventDefault();
		});
	})
</script>

<script type="text/javascript">

$(window).load(function(){
  
  
  var $container = $('.portfolioContainer'),
      $body = $('body'),
      colW = 375,
      columns = null;

  
  $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
      columnWidth: colW
    }
  });
  
  $(window).smartresize(function(){
    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )
        .isotope('reLayout');
    }
    
  }).smartresize(); // trigger resize to set container width
  $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
			
            filter: selector,
         });
         return false;
    });
  
});

</script>

</body>
</html>