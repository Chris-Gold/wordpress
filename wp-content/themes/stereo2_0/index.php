<?php get_header(); ?>
<section id="sec1" class="container-fluid img-fluid">
	<div class="col-xs-8 col-lg-12">
		<div class="jumbotron text-center">
				<!--<img src="img/01.jpg"></img>-->
				<h2>The 10th Anniversary Discount!</h2>
				<p>Celebrate our band’s anniversary by purchasing any of our tracks or albums and get a complimentary 10% OFF discount! Works through December only!</p>
				<button class="btn btn-pink">FIND OUT MORE</button>
		</div>
	</div>
</section>

<section id="sec2" class="container-fluid">
	<div class="row">
		<div class="jumbotron col-xs-12 col-md-6 text-center">
			<h3>Band History</h3>
			<span>Do you know how you experiment with all these different kinds of things when you are in a college? We do know that for a fact. To give you an example, the range of genres our band members delved into during their college years (2001-2005) ranged from alternative rock, blues rock, hard rock, heavy metal, jazz and country-pop music to minimal techno.</span>
			<p><button>READ MORE</button></p>
		</div>

		<span class="img2 img-fluid col-xs-12 col-md-6"></span>
	</div>
</section>



<section id="sec3" class="container-fluid">
	<div class="row">
		<div id="sec3-1" class="col-3 pink1">
			<img class="sec3_pic" src="img/icon1.png">
			<p>Stupendous Pub, NYC, 43rd str. 1200, MN, 8PM, JAN 7 2017</p>
		</div>

		<div id="sec3-2" class="col-3 pink2">
			<p>John's Bar & Grill, NYC, 43rd str. 1200, MN, 8PM, JAN 7 2017</p>
		</div>

		<div id="sec3-3" class="col-3 pink1">
			<p>Blurb Concert Hall, NYC, 43rd str. 1200, MN, 8PM, JAN 7 2017</p>
		</div>

		<div id="sec3-4" class="col-3 pink2">
			<p>Ringo Club, NYC, 43rd str. 1200, MN, 8PM, JAN 7 2017</p>
		</div>
	</div>
</section>

<section id="sec4">
</section>

<section id="sec5">
	<h2>Our New 4th Album is Already Released! Be Sure to Purchase the "White & White" LP by the StereoForce and get a 15% Discount, This Month Only!</h2>
	<button>READ MORE</button>
</section>

<section id="sec6" class="container-fluid text-center">
	<h3>Listen to our Best Tracks</h3>

	<div class="row">
		<div class="sec6 col-3">
			<div id="pic1">
			</div>
			<div class="sec6_player">
				<h2>Laughin at Live Dragons</h2>
				<p>by StereoForce</p>
			</div>
		</div>

		<div class="sec6 col-3">
			<div id="pic2">
			</div>
			<div class="sec6_player">
				<h2>Treasure Seekers</h2>
				<p>by StereoForce</p></div>
		</div>

		<div class="sec6 col-3">
			<div id="pic3">
			</div>
			<div class="sec6_player">
				<h2>Awesomeness</h2>
				<p>by StereoForce</p></div></div>
		</div>
	</div>
</section>
<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
	get_template_part( 'content', get_post_format() );
endwhile; endif;
?>
<?php get_sidebar(); ?>
</div> <!-- /.row -->
<?php get_footer(); ?>
