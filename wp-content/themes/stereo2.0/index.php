<?php get_header(); ?> <!-- ouvrir header,php -->

	<div id="main-row" class="row">
		<div id="main" class="col-12">
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
					<div class="jumbotron col-6 text-center">
						<h3>Band History</h3>
						<span>Do you know how you experiment with all these different kinds of things when you are in a college? We do know that for a fact. To give you an example, the range of genres our band members delved into during their college years (2001-2005) ranged from alternative rock, blues rock, hard rock, heavy metal, jazz and country-pop music to minimal techno.</span>
						<p><button>READ MORE</button></p>
					</div>

					<span class="img2 img-fluid col-6"></span>
				</div>
			</section>

	<div class="section container-fluid">
		<section id="sec3" class="row text-center">
		<?php if(have_posts()) : while(have_posts() ) : the_post(); ?>
			<div class="col-3 pink2">
				 <?php echo get_post_custom_values('iconeFA')[0]; ?>
				<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
			</div>
		<?php endwhile; endif; ?>
		</section>
	</div>

			</div>
		</div>
<?php get_footer(); ?>
