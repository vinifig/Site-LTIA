<?php 	global $wp_query;	$total_posts = $wp_query->post_count;	if ($total_posts>0) {		?>		<section class="latest-news blockSection" id="projetos">		<div class="container">			<div class="section-header">				<h2 class="dark-text" data-scrollreveal="enter left after 0s over 1s">Projetos</h2>				<h6 class="dark-text" data-scrollreveal="enter right after 0s over 1s">O que fazemos?</h6>			</div>			<p class="section-header-description" data-scrollreveal="enter left after 0s over 1s">Nossos projetos tem como foco o aprofundamento técnico, profissional e/ou acadêmico de nossos integrantes, por meio de parcerias com empresas e organizações locais ou multinacionais, como Microsoft e Motorola. À seguir, alguns de nossos projetos e parceiros.</p>		</div>		<div class="container-projetos">			<?php 					$args = array( 'post_type' => 'post', 'cat' => get_category_by_slug('projetos')->term_id, 'posts_per_page' => 3, 'order' => 'DESC');					$loop = new WP_Query( $args );					$i= 0;					while ( $loop->have_posts() ) : $loop->the_post(); ?>			<a href="<?php the_permalink();?>" class="projeto"  title="<?php the_title(); ?>">				<div class="projectBackground" style="background-image:url('<?php echo wp_get_attachment_thumb_url( get_post_thumbnail_id( $post->ID ) ); ?>')"></div>				<h6 class="projeto-titulo"><?php the_title(); ?></h6>			</a>			<?php					endwhile;			?>			<a href="<?php echo get_permalink( get_page_by_path( 'projetos' ) )?>" class="projeto"  title="Ver mais">				<div class="projectBackground" style="background-color: black; background-image:url('<?php echo get_template_directory_uri(); ?>/images/bt-ver-mais.png');"></div>				<h6 class="projeto-titulo">Ver mais</h6>			</a>		</div>		<div class="container-parceiros">			<!--<div class="section-header">				<h2 class="dark-text">Parceiros</h2>				<h6 class="dark-text">Lorem ipsum solem dolor sit amet. bacon dedeise solem</h6>			</div>-->			<p class="section-header-description" style="margin-bottom:2px;">				<?php					if(is_active_sidebar('parceiros_sidebar'))					 dynamic_sidebar('parceiros_sidebar');					?>			</p>			<p class="parceirosDireitos" data-scrollreveal="enter right after 0s over 1s">Todas as logos e marcas são propriedade de suas respectivas organizações</p>		</div>	</section>	<?php } ?>