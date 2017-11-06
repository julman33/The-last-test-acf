<?php get_header(); ?>
		<div>
			<img id="indroof" src="http://localhost/wordpress/wp-content/uploads/2017/10/nordische_oel.jpg" alt="industrial roof">
		</div>
	<div class="flexparent">
		
		<div class="box1">
			<h2> <?php the_field("header1");?></h2>
			<div class="redline"></div>
			<p><?php the_field("content1"); ?><br/><br/><a class="graylink" href="#">mehr erfahren <img id="morearrow" src="http://localhost/wordpress/wp-content/uploads/2017/10/right-arrow.png"></a>
			</p>
		</div>
		<h1 style="text-align:center; margin-top:-2%;" >Unsere Produkte</h1>
		<div class="box2">
			
			<div class="box2-1">
			<img id="facin" src="<?php the_field('product_image_1'); ?>">
				<div class="box2text">
					<h2><?php the_field("header2");?></h2>
					<div class="redline"></div>
					<p><?php the_field("content2"); ?><br/><br/><a class="graylink" href="#">zur Übersicht  <img id="morearrow" src="http://localhost/wordpress/wp-content/uploads/2017/10/right-arrow.png"></a></p>
				</div>
			</div>
			<div class="box2-2">
			<img id="facin1" src="<?php the_field('product_image_2'); ?>">
				<div class="box2text">
					<h2><?php the_field("header3");?></h2>
					<div class="redline"></div>
					<p><?php the_field("content3"); ?><br/><br/><a class="graylink" href="#">zur Übersicht  <img id="morearrow" src="http://localhost/wordpress/wp-content/uploads/2017/10/right-arrow.png"></a></p>
				</div>
			</div>
			<div class="box2-3">
				<img id="facin2" src="<?php the_field('product_image_3'); ?>">
				<div class="box2text">
					<h2><?php the_field("header4");?></h2>
					<div class="redline"></div>
					<p><?php the_field("content4"); ?><br/><br/><a class="graylink" href="#">zur Übersicht  <img id="morearrow" src="http://localhost/wordpress/wp-content/uploads/2017/10/right-arrow.png"></a></p>
				</div>
			</div>
		</div>
		<div class="box3" style="background-image: url(<?php the_field('image_background_field1'); ?>);">
			<div class="box3-1 box3text" >
				<h2><?php the_field("header5"); ?></h2>
				<div class="redline"></div>
				<p><?php the_field("content5"); ?><br/><br/><a class="graylink" href="#">mehr erfahren  <img id="morearrow" src="http://localhost/wordpress/wp-content/uploads/2017/10/right-arrow.png"></a></p>
			</div>
		</div>
		
		<div class="box4">
			<div class="box4-1">
				<h2><?php the_field("header6"); ?></h2>
				<div class="redline"></div>
				<p><?php the_field("content6"); ?><br/><br/><a class="graylink" href="#">zu den Stellenangeboten  <img id="morearrow" src="http://localhost/wordpress/wp-content/uploads/2017/10/right-arrow.png"></a></p>
			</div>
			
			<div class="box4-2">
				<h2><?php the_field("header7"); ?></h2>
				<div class="redline"></div>
				<p class="kontext"><?php the_field("content7"); ?></p><a class="graylink" href="#">finden Sie den richtigen Ansprechpartner  <img id="morearrow" src="http://localhost/wordpress/wp-content/uploads/2017/10/right-arrow.png"></a>
			</div>
			
		</div>
		
	</div>

<?php get_footer(); ?>