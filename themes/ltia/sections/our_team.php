<?php			echo '<section class="our-team blockSection" id="equipe">';				echo '<div class="container">';					echo '<div class="section-header">';							echo '<h2 class="white-text" data-scrollreveal="enter left after 0s over 1s">Equipe</h2>';							echo '<h6 class="white-text" data-scrollreveal="enter right after 0s over 1s">Quem faz parte do LTIA?</h6>';					echo '</div>';					/*					if(is_active_sidebar( 'sidebar-ourteam' )):						echo '<div class="row" data-scrollreveal="enter left after 0s over 0.1s">';							dynamic_sidebar( 'sidebar-ourteam' );						echo '</div> ';					else:						echo '<div class="row" data-scrollreveal="enter left after 0s over 0.1s">';							the_widget( 'zerif_team_widget','name=ASHLEY SIMMONS&position=Project Manager&description=Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dapibus, eros at accumsan auctor, felis eros condimentum quam, non porttitor est urna vel neque&fb_link=#&tw_link=#&bh_link=#&db_link=#&ln_link=#&image_uri='.get_template_directory_uri().'/images/team1.png', array('before_widget' => '', 'after_widget' => '') );							the_widget( 'zerif_team_widget','name=TIMOTHY SPRAY&position=Art Director&description=Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dapibus, eros at accumsan auctor, felis eros condimentum quam, non porttitor est urna vel neque&fb_link=#&tw_link=#&bh_link=#&db_link=#&ln_link=#&image_uri='.get_template_directory_uri().'/images/team2.png', array('before_widget' => '', 'after_widget' => '') );							the_widget( 'zerif_team_widget','name=TONYA GARCIA&position=Account Manager&description=Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dapibus, eros at accumsan auctor, felis eros condimentum quam, non porttitor est urna vel neque&fb_link=#&tw_link=#&bh_link=#&db_link=#&ln_link=#&image_uri='.get_template_directory_uri().'/images/team3.png', array('before_widget' => '', 'after_widget' => '') );							the_widget( 'zerif_team_widget','name=JASON LANE&position=Business Development&description=Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dapibus, eros at accumsan auctor, felis eros condimentum quam, non porttitor est urna vel neque&fb_link=#&tw_link=#&bh_link=#&db_link=#&ln_link=#&image_uri='.get_template_directory_uri().'/images/team4.png', array('before_widget' => '', 'after_widget' => '') );						echo '</div>';					endif;										echo '<div class="row" data-scrollreveal="enter left after 0s over 0.1s">';						MyUsersClass::listaUsuarios((new WP_User_Query( array( 'meta_key' => MyUsersClass::USER_IS_ACTIVE, 'meta_value' => 'on' , "number" => get_option('number_users', '5'), "orderby" => 'name' ) ))->results);					echo '</div>';*/					echo "<a href='".get_permalink( get_page_by_path( 'equipe' ) )."'><img class='ver-mais' src='". get_template_directory_uri() . "/images/bt-ver-mais.png'></a>";				echo '</div>';			echo '</section>';?>