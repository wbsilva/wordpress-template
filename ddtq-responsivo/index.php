<!-- Inicio Slider -->
	<div class="slider">	
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <!-- Os indicadores de quantas img possuem no slide "bolinhas abaixo da imagem"-->
			   <ol class="carousel-indicators">
			   		<?php 
			    		$args = array('post_type'=>'slider', 'showposts'=>5); /* Aqui diz a quantidade de sliders que vai na tela, se quiser infinito coloque "-1" (sem aspas)*/
			    		$my_slider = get_posts( $args );	    		
			    		$count = 0 ; if($my_slider) : foreach($my_slider as $post) : setup_postdata($post);
			    	?>
		<!-- Parte que insere a quantidade de bolinhas conforme a quantidade de sliders
			<li data-target="#carousel-example-generic" data-slide-to="<?php  echo $count;?>" <?php if($count == 0); echo "class=\"active\""?>></li> -->			
				    <?php 
				    	$count ++;
				    	endforeach;
				    	endif;
				    ?>
			  </ol>
			  <!-- Wrapper for slides -->
			  <!--Inserindo Imagens no slide -->
			    <div class="carousel-inner" role="listbox">
			    	<?php 	    		
			    		$cont = 0 ; if($my_slider) : foreach($my_slider as $post) : setup_postdata( $post );
			    	?>
				    <div class="item <?php if($cont == 0) echo"active"; ?>">
				      	<?php the_post_thumbnail('full'); ?>
					    <div class="carousel-caption"> 
					     <!--  <h2><?php the_title(); ?></h2>
					       <a class="leia-mais" href="#">LEIA MAIS</a> -->
					    </div>
				    </div>
				    <?php 
				    	$cont ++;
				    	endforeach;
				    	endif;
				    ?>	   
			    </div>
			  <!-- Controls -->
			  <!-- Botoes de Prev e Next
			 	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
			    </a>
			    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
			    </a>	--> 
			</div>
	</div>
<!-- Fim Slider -->

<?php get_header( ); ?>

<!-- Inicio Serviços -->
	<div class="servicos">
		<div class="container">
			<div class="title-servicos">
				<h2>Noticias Estaduais</h2>
			</div>
			<div class="row">

				<?php 
			    	$args = array('post_type'=>'servicos', 'showposts'=>3); /* Aqui diz a quantidade de sliders que vai na tela, se quiser infinito coloque "-1" (sem aspas)*/
			    	$my_servicos = get_posts( $args );	    		
			    	if($my_servicos) : foreach($my_servicos as $post) : setup_postdata($post);
			    ?>
				<div class="col-md-4 col-lg-4">					
					<i class="<?php the_field('icones'); ?>"></i>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(false, array('class'=>'img-responsive')); ?></a>
					<h2><?php the_title(); ?></h2>
					<p><?php the_excerpt(); ?></p>
				</div>

				<?php 			    	
				   	endforeach;
				   	endif;
				?>
				<div class="clear"></div>
				<div class="link">
					<a href="#" class="btn btn-default" role="button">Leia Mais...</a>
				</div>

			</div>
		</div>
	</div>
<!-- Fim Serviços -->
<!-- Inicio Blog-->
<div class="blog">
	<div class="container">
		<div class="title-blog">
				<h2>Ações Comunitária</h2>
			</div>
		<div class="row">
			<?php 
			    	$args = array('post_type'=>'post', 'showposts'=>3); 
			    	$my_posts = get_posts( $args );	    		
			    	if($my_servicos) : foreach($my_posts as $post) : setup_postdata($post);
			    ?>
				<div class="col-md-4 col-lg-4">					
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(false, array('class'=>'img-responsive')); ?></a>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p><?php the_excerpt(); ?></p>
				</div>

				<?php 			    	
				   	endforeach;
				   	endif;
				?>
			<div class="clear"></div>
				<div class="link">
					<a href="#" class="btn btn-default" role="button">Leia Mais...</a>
				</div

		</div>
	</div>
</div>
<!-- Fim Blog -->
<!-- Inicio Sobre -->

	<div class="sobre">
		<div class="container">
			<div class="row">
				<?php 
			    		$args = array('post_type'=>'page', 'pagename'=>'sobre');
			    		$my_sobre = get_posts( $args );	    		
			    		if($my_sobre) : foreach($my_sobre as $post) : setup_postdata($post);
			    	?>
				<div class="col-md-12 col-lg-12">
					<h2><?php the_title(); ?></h2>
				</div>
				<div class="col-md-6 col-lg-6">					
					<p><?php the_content(); ?></p>
				</div>
				<div class="col-md-6 col-lg-6">
					<?php the_post_thumbnail( false, array('class'=>'img-responsive')); ?>
				</div>

				 	<?php 			    	
				    	endforeach;
				    	endif;
				    ?>
			</div>
		</div>
	</div>
<!-- Fim Sobre -->


<?php get_footer( ); ?>