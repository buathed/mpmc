<!DOCTYPE html>
<html lang="en">
<head>
  	<title>About</title>
  	<meta charset="utf-8">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-1.7.1.min.js"></script>
    <script src="js/superfish.js"></script>
    <script type="text/javascript">
		$(function(){
			function equalHeight(group) {
				var tallest = 0;
				group.each(function() {
					var thisHeight = $(this).height();
					if(thisHeight > tallest) {
						tallest = thisHeight;
					}
				});
				group.height(tallest);
			}	
			equalHeight($(".box-1 .inner"));
		})
	</script>
<!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
<![endif]-->
<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<link rel="stylesheet" href="css/ie.css"> 
<![endif]-->
</head>
<body>
<!-- Header -->
<header>
    <div class="inner">
        <h1 class="logo"><a href="home.html">Pet clinic</a></h1>
        <div class="fright">
            <div class="header-meta">
                <form id="search-form" method="post">
                    <input type="text" onblur="if(this.value==''){this.value='search'}" onfocus="if(this.value=='search'){this.value=''}" value="search" name="search">
                    <a class="search-form-submit" onclick="document.getElementById('search-form').submit()"></a>
                </form>
                <div class="col-elem">
                    Have a problem with your pet?<br>
                    Call us now: 
                    <span class="phone">
                        1-800-123-1234
                    </span>
                </div>
            </div>
            <nav>
                <ul class="sf-menu">
                    <li><a href="home.html">main</a></li>
                    <li class="current"><a href="about.html">about</a></li>
                    <li>
                        <a href="services.html">services</a>
                        <ul>
                            <li><a href="#">Maecenas faucibus</a></li>
                            <li><a href="#">Fusce tincidunt</a></li>
                            <li>
                                <a href="#">tempor eros</a>
                                <ul>
                                    <li><a href="#">ut viverra</a></li>
                                    <li><a href="#">hendrerit mauris</a></li>
                                </ul>
                            </li>
                            <li><a href="#">mauris ut du</a></li>
                        </ul>
                    </li>
                    <li><a href="links.html">links</a></li>
                    <li><a href="contacts.html">contacts</a></li>
                </ul>
            </nav>
        </div>
        <div class="clear"></div>
    </div>
</header>
<!-- Content -->
<section id="content"><div class="ic"></div>
    <div class="container_24">
        <div class="indent-bot-2 boxes-bg">
            <article class="grid_6">
                <div class="box-1">
                    <div class="inner">
                        <h3>Microchip implant</h3>
                        <p>
                            Vivamus hendrerit mauris ut dui. gravida ut viverra lectus tincidunt. Cras mattis tempor eros nec tristique. 
                        </p>
                        <div class="btn-container">
                            <div class="button-box">
                                <a href="#" class="button">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="grid_6">
                <div class="box-1">
                    <div class="inner">
                        <h3>Ultrasound</h3>
                        <p class="p0">
                            <strong class="str-1">
                                Vivamus hendrerit mauris ut dui gravida ut viverra
                            </strong>
                        </p>
                        <p>
                            Cras mattis tempor eros nec tristique. Sed sed felis arcu, vel vehicula augue. Maecenas faucibus sagittis. cursus.
                        </p>
                        <div class="btn-container">
                            <div class="button-box">
                                <a href="#" class="button">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="grid_6">
                <div class="box-1">
                    <div class="inner">
                        <h3>Transport service</h3>
                        <p>
                            Vivamus hendrerit mauris ut dui. gravida ut viverra lectus tincidunt. Cras mattis tempor eros nec tristique.
                        </p>
                        <div class="btn-container">
                            <div class="button-box">
                                <a href="#" class="button">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="grid_6">
                <div class="box-1">
                    <div class="inner">
                        <h3>Vaccinations</h3>
                        <p class="p0">
                            <strong class="str-1">
                                Vivamus hendrerit mauris ut gravida ut viverra  
                            </strong>
                        </p>
                        <p>
                            Cras mattis tempor eros nec tristique. Sed sed felis arcu, vel vehicula augue. 
                        </p>
                        <div class="btn-container">
                            <div class="button-box">
                                <a href="#" class="button">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <div class="clear"></div>
        </div>
        <div class="wrapper indent-bot-1">
            <article class="grid_7 suffix_1">
            	<h2>About our clinic:</h2>
                <p class="p1">
                	<strong class="str-3">
                    	Vivamus hendrerit mauris ut dui gravida ut viverra lectus tincidunt. Cras mattis tempor eros nec tristique.
                    </strong>
                </p>
                <p>
                	Sed sed felis arcu, vel vehicula augue. Maecenas faucibus sagittis cursus. Fusce tincidunt, tellus eget tristique cursus, orci mi iaculis sem, sit amet dictum velit velit eu magna. Nunc viverra nisi sed orci tincidunt at hendrerit orci luctus. Andisse tincidunt, ipsum at semper facilisis.
                </p>
                <div class="alignright">
                    <a href="#" class="link">read more</a>
                </div>
            </article>
            <article class="grid_16">
            	<h2>Meet our team:</h2>
                <div class="wrapper">
                	<div class="grid_4 alpha">
                    	<img src="images/page2-img1.png" alt="" class="img-indent-bot">
                        <div class="author">
                        	<em>
                            	Thom Green
                            </em>
                            (surgeon)
                        </div>
                    </div>
                    <div class="grid_4">
                    	<img src="images/page2-img2.png" alt="" class="img-indent-bot">
                        <div class="author">
                        	<em>
                            	Linda Nelson
                            </em>
                            (nurse)
                        </div>
                    </div>
                    <div class="grid_4">
                    	<img src="images/page2-img3.png" alt="" class="img-indent-bot">
                        <div class="author">
                        	<em>
                            	Sara Black
                            </em>
                            (diagnostician)
                        </div>
                    </div>
                    <div class="grid_4 omega">
                    	<img src="images/page2-img4.png" alt="" class="img-indent-bot">
                        <div class="author">
                        	<em>
                            	John Smith
                            </em>
                            (immunologist)
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <div class="hr-border"></div>
        <div class="a1">
        	<h2>Testimonials:</h2>
            <div>
            	<div class="grid_6 alpha">
                	<blockquote class="quote-1">
                    	<div class="quote-1-inner">
                    		<span class="str-1">Sed sed felis arcu, vel vehicula augue. Maecenas faucibus sagittis cursus. Fusce tincidunt, tellus eget tristique cursus orci mi iaculis sem sit.</span>
                        </div>
                    </blockquote>
                    <div class="author alignright indents-1">
                    	<em>
                        	Richard Cox
                        </em>
                        (manager)
                    </div>
                </div>
                <div class="grid_6">
                	<blockquote class="quote-1">
                    	<div class="quote-1-inner">
                    		<strong>Sed sed felis arcu, vel vehicula augue.</strong><br>
							Maecenas faucibus sagittis cursus. Fusce tincidunt, tellus eget tristique cursus orci mi iaculis sem sit amet dictum velit velit eu.
                        </div>
                    </blockquote>
                    <div class="author alignright indents-1">
                    	<em>
                        	April Jeckson
                        </em>
                        (housewife)
                    </div>
                </div>
                <div class="grid_6">
                	<blockquote class="quote-1">
                    	<div class="quote-1-inner">
                    		<strong>Maecenas faucibus sagittis cursus.</strong><br>
							Fusce tincidunt, tellus eget tristique cursus orci mi iaculis sem sit. amet.dictum velit velit eu magna. Nunc viverra nisi sed orci tin.
                        </div>
                    </blockquote>
                    <div class="author alignright indents-1">
                    	<em>
                        	Alan Pool
                        </em>
                        (lawyer)
                    </div>
                </div>
                <div class="grid_6 omega">
                	<blockquote class="quote-1">
                    	<div class="quote-1-inner">
                    		<strong>Fusce tincidunt, tellus eget tristique cursus orci mi</strong><br>
                            iaculis sem sit. amet.dictum velit velit eu magna. Nunc viverra nisi sed orci tincidunt at hendrerit orci luctus. Andisse tincidunt, ipsu.
                        </div>
                    </blockquote>
                    <div class="author alignright indents-1">
                    	<em>
                        	Serg Brin
                        </em>
                        (manager)
                    </div>
                </div>
        		<div class="clear"></div>
            </div>
        </div>
    </div>
</section>
<!-- Footer -->
<footer>
    <div class="copyright">
        &copy; 2012 <strong class="footer-logo">Pet clinic</strong>
        <div><a rel="nofollow" href="http://www.templatemonster.com">Website Template</a> by TemplateMonster.com</div>
		<div>More <a href="http://www.websitetemplatesonline.com" title="WTO - website templates and Flash templates" target="_blank">Free Web Templates</a> at WTO.</div>
    </div>
    <ul class="social-list">
    	<li><a href="#"><img src="images/social-link-1.jpg" alt=""></a></li>
        <li><a href="#"><img src="images/social-link-2.jpg" alt=""></a></li>
        <li><a href="#"><img src="images/social-link-3.jpg" alt=""></a></li>
        <li><a href="#"><img src="images/social-link-4.jpg" alt=""></a></li>
    </ul>
</footer>
</body>
</html>