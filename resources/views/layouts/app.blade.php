<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>King Of Pasta</title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="js/jquery.js"></script> 
	<script src="js/jquery.glide.js"></script>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <script type="text/javascript" src="js/MyJQ.js"></script>
    <script src="js/jquery.localScroll.min.js" type="text/javascript"></script>
	<script src="js/jquery.scrollTo.min.js" type="text/javascript"></script> 
    <script src="js/wow.min.js" type="text/javascript"></script> 

    <script type="text/javascript">
    $(document).ready(function() {
    $('#navigations').localScroll({duration:800});
    });
    </script>

    <script src="js/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>
    </head>
<body>
<div class="headerwrapper">
	<div id="header" class="container">
		<div class="logo"> <a href="#"><img src="images/LOGO.png" alt="logo" width="165" height="74"></a> </div> <!--end of Logo-->
        <nav>
            <ul id="navigations">
                <li><a href="#navigations">HOME</a></li>
                <li> <a href="#slider">ABOUT</a></li>
                <li><a href="#map">LOCATONS</a></li>
                <li><a href="#bestdishes">MENU</a></li>
                <li><a href="#contactus">CONTACT</a></li>
            </ul>
        </nav>
      </div> <!--end of header-->
</div> <!-- end of headerwrapper-->

<div class="sliderwrapper">
      <div id="slider" class="container">
           <div class="slider">
      			<ul class="slides">
    		 	 	  <li class="slide">
                      	<h5 class="wow fadeInDown" data-wow-delay="0.8s">@yield('judul') </h5>
                      	<p class="wow fadeInUp" data-wow-delay="0.8s">@yield('konten')</p>                      
                      </li>
        		  </ul>
            </div>
      </div> <!-- End of Slider-->
</div> <!-- end of sliderwrapper-->


<div class="footerwrapper">
    <footer class="container">
    	<div class="customerreview">
       		 <h2>Customer Reviews</h2>
          <div class="review">
        	<p><strong>&#8220; </strong>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor 
            aliquet. Aenean 			            sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
             nec sagittis sem nibh id elit.
             Duis sed odio sit amet nibh vulputate  a ornare odio. Sed non  mauris vitae erat consequat  
            <strong>&#8221;</strong></p>
             
             <h4>- JOHN ALVES</h4>
            
            
        	</div> <!-- end of review-->
             
              <div class="clearfix"></div>
              <div class="line"></div>
              
          <div class="review">
        	<p><strong>&#8220; </strong>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor 
            aliquet. Aenean 			            sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
             nec sagittis sem nibh id elit.
             Duis sed odio sit amet nibh vulputate  a ornare odio. Sed non  mauris vitae erat consequat  
            <strong>&#8221;</strong></p>
             
             <h4>- CATHREINE JOHNES</h4>
                        
        	</div> <!-- end of review-->                                                     
            
        </div>
    
    
    
    </footer> <!-- end of footer-->

</div> <!-- end of footer-->     
</body>
</html>
