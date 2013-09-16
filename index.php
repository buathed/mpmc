<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Home</title>
  	<meta charset="utf-8">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-1.7.1.min.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/tms-0.4.1.js"></script>
    <script src="js/slider.js"></script>
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
<body id="page1">
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
                    <li class="current"><a href="home.html">main</a></li>
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
                    <li><a href="links.html">links</a></li>
                    <li><a href="contacts.html">contacts</a></li>
                </ul>
            </nav>
        </div>
        <div class="clear"></div>
    </div>
    <div class="slider-container">
        <div class="mp-slider">
            <ul class="items">
                <li><img src="images/slide-1.jpg" alt=""></li>
                <li><img src="images/slide-2.jpg" alt=""></li>
                <li><img src="images/slide-3.jpg" alt=""></li>
            </ul>
        </div>
    </div>
</header>
<!-- Content -->
<section id="content"><div class="ic"></div>
    <div class="container_24">
        <div class="indent-bot">
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
        <div class="indent-bot-1">
            <div class="grid_6">
                <div class="inner-indent">
                    <h2>New articles:</h2>
                    <ul class="list-1">
                        <li><a href="#">Vivamus hendrerit mauris</a></li> 
                        <li><a href="#">gravida ut viverra</a></li>  
                        <li><a href="#">Cras mattis tempor eros</a></li>
                        <li><a href="#">nec tristique Sed sed</a></li>
                        <li><a href="#">felis arcu vel vehicula</a></li> 
                        <li><a href="#">Maecenas faucibus</a></li> 
                        <li><a href="#">sagittis cursus Fusce</a></li>
                    </ul>
                </div>
            </div>
            <div class="grid_6 suffix_1">
                <div class="box-2">
                    <h2>Innovation:</h2>
                    <p class="p1">
                        <strong class="str-2">
                            Vivamus hendrerit mauris ut dui gravida ut viverra lectus tincidunt.
                        </strong>
                    </p>
                    <p class="p1">
                        This website template has several pages:  Main, About, Services, Links, Contacts (note that contact us form - doesn't work).
                    </p>
                    <div class="alignright">
                        <a href="#" class="link">read more</a>
                    </div>
                </div>
            </div>
            <div class="grid_11 indent-top">
                <h2><span>welcome</span> to our clinic!</h2>
                <div class="wrapper">
                    <figure class="img-indent">
                        <img src="images/page1-img1.png" alt="" class="img-indent-bot">
                        <div class="author">
                            <em>John Smith</em>
                            (veterinary)
                        </div>
                    </figure>
                     <blockquote class="quote extra-wrap">
                        <strong>
                            Pet Clinic is one of <a href="http://blog.templatemonster.com/free-website-templates/">Free website templates</a> created by TemplateMonster.com team.
                        </strong><br>
                        This website template is optimized for 1280X1024 screen resolution. It is also XHTML &amp; CSS valid.  The PSD source files of this <a href="http://blog.templatemonster.com/2012/07/23/free-website-template-jquery-slider-pet-clinic/">Pet Clinic</a> template are available for free for the registered members of TemplateMonster.com. Feel free to get them!
                    </blockquote>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="hr-border"></div>
        <div class="wrapper">
            <div class="grid_7 suffix_1">
                <div class="wrapper hr-border-1">
                    <span class="dropcap">A.</span>
                    <div class="extra-wrap">
                        <dl class="def-list-1">
                            <dt>
                                <a href="#">Wildlife Rehabilitation</a>
                            </dt>
                            <dd class="extra">
                                Cras mattis tempor eros nec tristique. Sed sed felis arcu, vel vehicula augue. Maecenas faucibus sagittis cursus.
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="wrapper">
                    <span class="dropcap">B.</span>
                    <div class="extra-wrap">
                        <dl class="def-list-1">
                            <dt>
                                <a href="#">Grief Management in Children</a>
                            </dt>
                            <dd>
                                Cras mattis tempor eros nec tristique. Sed sed felis arcu, vel vehicula augue. Maecenas faucibus sagittis cursus.
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="grid_7 suffix_1">
                <div class="wrapper hr-border-1">
                    <span class="dropcap">C.</span>
                    <div class="extra-wrap">
                        <dl class="def-list-1">
                            <dt>
                                <a href="#">Loving Memories Services</a>
                            </dt>
                            <dd>
                                Cras mattis tempor eros nec tristique. Sed sed felis arcu, vel vehicula augue.
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="wrapper">
                    <span class="dropcap">D.</span>
                    <div class="extra-wrap">
                        <dl class="def-list-1">
                            <dt>
                                <a href="#">Where To Bury Your Dog</a>
                            </dt>
                            <dd>
                                Cras mattis tempor eros nec tristique. Sed sed felis arcu, vel vehicula augue. Maecenas faucibus sagittis cursus. Fusce tincidunt, tellus eget. tristique cursus.
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="grid_7 suffix_1">
                <div class="wrapper hr-border-1">
                    <span class="dropcap">E.</span>
                    <div class="extra-wrap">
                        <dl class="def-list-1">
                            <dt>
                                <a href="#">Diagnostic Laboratory Services</a>
                            </dt>
                            <dd>
                                Cras mattis tempor eros nec tristique. Sed sed felis arcu, vel vehicula augue.
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="wrapper">
                    <span class="dropcap">F.</span>
                    <div class="extra-wrap">
                        <dl class="def-list-1">
                            <dt>
                                <a href="#">Microchip Implantation</a>
                            </dt>
                            <dd>
                                Cras mattis tempor eros nec tristique. Sed sed felis arcu, vel vehicula augue. Maecenas faucibus sagittis cursus. Fusce tincidunt, tellus eget tristique.
                            </dd>
                        </dl>
                    </div>
                </div>
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