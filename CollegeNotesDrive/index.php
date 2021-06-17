<?php include 'includes/connection.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>

<br><br>

<style>
	section
{
	height: 12vh;
	background: #000;
} 

video
{
	object-fit: cover;
}

#notes
{
	margin: 0;
	padding: 0;
	position: absolute;
	top: 14%;
	transform: translateY(-50%);
	width: 100%;
	text-align: center;
	color: #ddd;
	font-size: 3.5em;
	font-family: sans-serif;
	letter-spacing: 0.2em;
}

#notes span
{
	opacity: 0;
	display: inline-block;
	animation: animate 1s linear forwards;  /*infinite*/
}
@keyframes animate
{
	0%
	{
		opacity: 0;
		transform: rotateY(90deg);
		filter: blur(10px);
	}
	100%
	{
		opacity: 1;
		transform: rotateY(0deg);
		filter: blur(0);
	}
}

#notes span:nth-child(1)
{
	animation-delay: 1s;
}
#notes span:nth-child(2)
{
	animation-delay: 1.5s;
}
#notes span:nth-child(3)
{
	animation-delay: 2s;
}
#notes span:nth-child(4)
{
	animation-delay: 2.5s;
}
#notes span:nth-child(5)
{
	animation-delay: 3s;
}
#notes span:nth-child(6)
{
	animation-delay: 3.25s;
}
#notes span:nth-child(7)
{
	animation-delay: 3.5s;
}
#notes span:nth-child(8)
{
	animation-delay: 3.75s;
}
#notes span:nth-child(9)
{
	animation-delay: 4s;
}
#notes span:nth-child(10)
{
	animation-delay: 4.75s;
}
</style>

	<section>
		<video src="smoke.mp4" width="100%" height="118" autoplay muted></video>
		<h1 id="notes">
			<span>N</span>
			<span>O</span>
			<span>T</span>
			<span>E</span>
			<span>S </span>
			<span>D</span>
			<span>R</span>
			<span>I</span>
			<span>V</span>
			<span>E</span>
		</h1>
	</section>


<link rel="stylesheet" type="text/css" href="styles.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- FlexSlider -->
     <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
     <script type="text/javascript" src="js/bootstrap.js"></script>
     <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <script type="text/javascript" charset="utf-8">
    var $ = jQuery.noConflict();
    $(window).load(function() {
    $('.flexslider').flexslider({
          animation: "fade"
    });
	
	$(function() {
		$('.show_menu').click(function(){
				$('.menu').fadeIn();
				$('.show_menu').fadeOut();
				$('.hide_menu').fadeIn();
		});
		$('.hide_menu').click(function(){
				$('.menu').fadeOut();
				$('.show_menu').fadeIn();
				$('.hide_menu').fadeOut();
		});
	});
  });
</script>



     <div class="slider_container">
		<div class="flexslider">
	      <ul class="slides">
	    	<li>
	    		<img src="images/slider/slide1.png" alt="1" title=""/>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Notes Drive</h2><p>Now easily manage all kind of notes by uploading them here.</p></div>
                </div>
	    	</li>
			<li>
	    		<img src="images/slider/slide2.png" alt="2" title=""/>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Notes Drive</h2><p>All Kinds of Notes uploaded by students.</p></div>
                </div>
	    	</li>
	    	<li>
	    		<img src="images/slider/slide3.png" alt="3" title=""/>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Upload Various Files</h2><p>User can upload various types of files like PDF, PPT, DOC etc..</p></div>
                </div>
	    	</li>
<!-- 	    	<li>
	    		<img src="images/slider/carousel4.png" alt="4" title=""/>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Controled By Admin</h2><p>Everying is managed and controled by administrator</p></div>
                </div>
	    	</li> -->
	    </ul>
	  </div>
   </div>
    </div>  
</div>
</body>
</html>









































<?php include 'includes/footer.php';?>

        