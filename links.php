<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Links</title>
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
                    <li><a href="about.html">about</a></li>
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
                    <li class="current"><a href="links.html">links</a></li>
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
        <div class="a1">
        	<h2>Useful links:</h2>
        </div>
        <div class="wrapper">
			<div class="grid_7 suffix_1">
            	<h6 class="heading-1">Animal sites:</h6>
                <p>
                	<strong>Vivamus hendrerit mauris ut dui gravida ut viverra lectus tincidunt. Cras mattis tempor eros nec tristique.</strong>
                </p>
                <ul class="list-2">
                	<li><a href="#">Vivamus hendrerit mauris ut dui</a></li> 
                    <li><a href="#">Gravida ut viverra lectus tincidunt</a></li> 
                    <li><a href="#">Cras mattis tempor eros nec ique</a></li> 
                    <li><a href="#">Sed sed felis arcu vel vehicula</a></li> 
                    <li><a href="#">Maecenas faucibus sagittis cursus</a></li>
                </ul>
                <div class="hr-border-3"></div>
                <h6 class="heading-1">pet loss:</h6>
                <p>
                	<strong>Vivamus hendrerit mauris ut dui gravida ut viverra lectus tincidunt. </strong>
                </p>
                <ul class="list-2">
                	<li><a href="#">Sed sed felis arcu vel vehicula</a></li> 
                    <li><a href="#">Maecenas faucibus sagittis cursus</a></li>
                </ul>
                <div class="hr-border-3"></div>
                <h6 class="heading-1">organizations &amp; associations:</h6>
                <p>
                	<strong>Cras mattis tempor eros nec tristique. Sed sed felis arcu, vel vehicula augue. Maecenas faucibus sagittis cursus.</strong>
                </p>
                <ul class="list-2">
                	<li><a href="#">Fusce tincidunt tellus</a></li>
                    <li><a href="#">Eget tristique cursus orci mi iaculis</a></li> 
                    <li><a href="#">Sit amet dictum velit velit eu magna</a></li>
                    <li><a href="#">Nunc viverra nisi sed orci tincidunt at </a></li>
                </ul>
            </div>
            <div class="grid_7 suffix_1">
            	<h6 class="heading-1">pet products:</h6>
                <p>
                	<strong>Cras mattis tempor eros nec tristique. Sed sed felis arcu, vel vehicula augue. Maecenas faucibus sagittis cursus. </strong>
                </p>
                <ul class="list-2">
                	<li><a href="#">Vivamus hendrerit mauris ut dui</a></li> 
                    <li><a href="#">Gravida ut viverra lectus tincidunt </a></li>
                    <li><a href="#">Cras mattis tempor eros nec ique</a></li> 
                    <li><a href="#">Sed sed felis arcu vel vehicula </a></li>
                    <li><a href="#">Maecenas faucibus sagittis cursus</a></li>
                    <li><a href="#">Fusce tincidunt tellus</a></li>
                    <li><a href="#">Eget tristique cursus orci mi</a></li> 
                    <li><a href="#">Sit amet dictum velit velit eu </a></li>
                    <li><a href="#">Nunc viverra nisi sed orci</a></li>
                    <li><a href="#">Incidunt at hendrerit orci</a></li>
                </ul>
                <div class="hr-border-3"></div>
                <h6 class="heading-1">pet insurance:</h6>
                <p>
                	<strong>Vivamus hendrerit mauris ut dui gravida ut viverra lectus tincidunt. Cras mattis tempor eros nec tristique.</strong>
                </p>
                <ul class="list-2">
                	<li><a href="#">Vivamus hendrerit mauris ut dui</a></li> 
                    <li><a href="#">Gravida ut viverra lectus tincidunt</a></li> 
                    <li><a href="#">Cras mattis tempor eros nec ique</a></li> 
                    <li><a href="#">Sed sed felis arcu vel vehicula</a></li> 
                    <li><a href="#">Maecenas faucibus sagittis cursus</a></li>
                </ul>
            </div>
            <div class="grid_7 suffix_1">
            	<h6 class="heading-1">financial aid:</h6>
                <p>
                	<strong>Vivamus hendrerit mauris ut dui gravida ut viverra lectus tincidunt. Cras mattis tempor eros nec tristique.</strong>
                </p>
                <ul class="list-2">
                	<li><a href="#">Vivamus hendrerit mauris ut dui</a></li> 
                    <li><a href="#">Gravida ut viverra lectus tincidunt</a></li> 
                    <li><a href="#">Cras mattis tempor eros nec ique</a></li> 
                    <li><a href="#">Sed sed felis arcu vel vehicula</a></li>
                </ul>
                <div class="hr-border-3"></div>
                <h6 class="heading-1">behaviour:</h6>
                <p>
                	<strong>Vivamus hendrerit mauris ut dui gravida ut viverra lectus tincidunt. Cras mattis tempor eros nec tristique.</strong>
                </p>
                <ul class="list-2">
                	<li><a href="#">Vivamus hendrerit mauris ut dui</a></li> 
                    <li><a href="#">Gravida ut viverra lectus tincidunt</a></li> 
                    <li><a href="#">Cras mattis tempor eros nec ique</a></li> 
                    <li><a href="#">Sed sed felis arcu vel vehicula </a></li>
                </ul>
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