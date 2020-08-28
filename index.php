<?php get_header(); ?>
 <div class="row">
   <div class="col-12">

<div class="jumbotron">


<h3 class="display-4">Seja bem vindo</h3>

	</div>

	  </div>
	    </div>


<div class ="row">
	   <div class="col-12">
	<?php masterslider(1); ?>
</div>
</div>


<div class="row">
   <div class="col-12">




<h2>Texto</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas feugiat porttitor diam vel feugiat. Mauris pellentesque, dolor sodales efficitur hendrerit, odio sapien semper lorem, a aliquet sem eros in lorem. Maecenas lacus purus, sollicitudin nec venenatis ut, sagittis eu ex.</p>


	  </div>
	    </div>

<div class="row">

<?php if ( have_posts() ){

while ( have_posts() ) {
	 the_post();
	 ?>
  <div class="col-4">
	 
	<h3><?php the_title(); ?></h3>

	<div class="img-fluid"><?php the_post_thumbnail(); ?> </div>

	<p><?php the_excerpt();  ?></p>
     <a href="<?php the_permalink(); ?>">Leia Mais</a>
 </div>
	<?php
            }//while
              }//if
   
   ?>
        </div> 



<?php get_footer(); ?>
