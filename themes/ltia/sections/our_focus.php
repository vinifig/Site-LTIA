<section class="focus blockSection" id="sobre">	<div class="container">		<div>			<section class="section-header">				<?php 					$sobre_titulo = get_option("sobre_title","Sobre");					$sobre_subtitulo = get_option("sobre_subtitle","O que é o LTIA?");					$sobre_conteudo = explode("\n", get_option("sobre_content",""));				?>				<h2 class="dark=text" data-scrollreveal="enter left after 0s over 1s"><?php echo  $sobre_titulo; ?></h2>				<?php					if($sobre_subtitulo != ""){				?>					<h6 class="dark=text" data-scrollreveal="enter right after 0s over 1s"><?php echo $sobre_subtitulo; ?></h6>				<?php } ?>			</section>			<p class="section-header-description" data-scrollreveal="enter left after 0s over 1s">Criado em 1995, propondo uma nova abordagem de aprendizado, o LTIA é um ambiente que estimula a criatividade e a busca por conhecimento e inovação através do desenvolvimento de projetos desafiadores!</p>			<?php				if(is_active_sidebar('sidebar-social')) :					?>				<?php				else:				endif;			?>			<!-- <div class="fb-like" data-href="https://www.facebook.com/LTIA.UNESP" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div><br> -->			<div data-scrollreveal="enter right after 0s over 1s" id="fb_widget" class="fb-page" data-height='90' data-href="https://www.facebook.com/LTIA.UNESP" data-tabs="timeline" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/LTIA.UNESP"><a href="https://www.facebook.com/LTIA.UNESP">LTIA UNESP</a></blockquote></div></div>			<br>			<?php 				echo "<a href='{$pathWordpress}index.php/sobre/'><img class='ver-mais' src='". get_template_directory_uri() . "/images/bt-ver-mais.png'></a>";			?>		</div>			</div>	<div class="blockSection missao">		<div class="container row" style="background">			<?php			if ( is_active_sidebar( 'sidebar-ourfocus' ) ) :				dynamic_sidebar( 'sidebar-ourfocus' );			else:				the_widget( 'zerif_ourfocus','title=PARALLAX EFFECT&text=Create memorable pages with smooth parallax effects that everyone loves. Also, use our lightweight content slider offering you smooth and great-looking animations.&link=#&image_uri='.get_stylesheet_directory_uri()."/images/parallax.png", array('before_widget' => '', 'after_widget' => '') );				the_widget( 'zerif_ourfocus','title=WOOCOMMERCE&text=Build a front page for your WooCommerce store in a matter of minutes. The neat and clean presentation will help your sales and make your store accessible to everyone.&link=#&image_uri='.get_stylesheet_directory_uri()."/images/woo.png", array('before_widget' => '', 'after_widget' => '') );				the_widget( 'zerif_ourfocus','title=CUSTOM CONTENT BLOCKS&text=Showcase your team, products, clients, about info, testimonials, latest posts from the blog, contact form, additional calls to action. Everything translation ready.&link=#&image_uri='.get_stylesheet_directory_uri()."/images/ccc.png", array('before_widget' => '', 'after_widget' => '') );				the_widget( 'zerif_ourfocus','title=GO PRO FOR MORE FEATURES&text=Get new content blocks: pricing table, Google Maps, and more. Change the sections order, display each block exactly where you need it, customize the blocks with whatever colors you wish.&link=#&image_uri='.get_stylesheet_directory_uri()."/images/ti-logo.png", array('before_widget' => '', 'after_widget' => '') );			endif;			?>		</div>	</div></section>  <!-- / END FOCUS SECTION -->