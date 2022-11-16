<?php

get_header();
?>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>

    <main id="primary" class="site-main">
        <section class="banner">
            <img src="<?php echo  get_stylesheet_directory_uri(). '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
        </section>
		<section class="banner-video">
			<video src="<?php echo  get_stylesheet_directory_uri() . '/assets/images/video.mp4'; ?>" autoplay loop muted class="video-parallax"></video>
            <img src="<?php echo  get_stylesheet_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
        </section>
		
        <section id="#story" class="story">
            <h2>L'histoire</h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
            <article id="characters">
                <div class="main-character">
                    <h3>Les personnages</h3>
					<div class="swiper mySwiper">
					  <div class="swiper-wrapper">
						<div class="swiper-slide">
						  <img src="<?php echo  get_stylesheet_directory_uri() . '/assets/images/Kawaneko2.png'; ?>"/>
						</div>
						<div class="swiper-slide">
						  <img src="<?php echo  get_stylesheet_directory_uri() . '/assets/images/Orenjiiro2.png'; ?>" />
						</div>
						<div class="swiper-slide">
						  <img src="<?php echo  get_stylesheet_directory_uri() . '/assets/images/Pinku-1.png'; ?>" />
						</div>
						<div class="swiper-slide">
						  <img src="<?php echo  get_stylesheet_directory_uri() . '/assets/images/Tenshi2.png'; ?>" />
						</div>
						<div class="swiper-slide">
						  <img src="<?php echo  get_stylesheet_directory_uri() . '/assets/images/Jaakuna2.png'; ?>" />
						</div>
					  </div>
					</div>
                    <?php
                    $main_character = $characters_query->posts[0];
                    echo '<figure>';
                    echo get_the_post_thumbnail( $main_character->ID, 'full' );
                    echo '<figcaption>'. $main_character->post_title . '</figcaption>';
                    echo '</figure>';
                    $characters_query->next_post();
                    ?>
					
                </div>
                <div class="other-characters">
                    <?php
                    while ( $characters_query->have_posts() ) {
                        $characters_query->the_post();
                        echo '<figure>';
                        echo get_the_post_thumbnail( get_the_ID(), 'full' );
                        echo '<figcaption>';
                        the_title();
                        echo'</figcaption>';
                        echo '</figure>';
                    }
                    ?>
                </div>
            </article>
            <article id="place">
                <div>
                    <h3>Le Lieu</h3>
					<p class="paragraphe-place">
						Le pays fantastique des Nekos Nekos : Nekosnotochi. Loin, très loin, au-delà des monts Karma, à mille lieues des pays Mizukage et Kagura. Ils vivent en retrait, sur les côtes du Funato, un vaste océan d’arbres fruitiers. Un petit ruisseau coule en leur lieu et les approvisionne en régalades nécessaires en tout genre ; un pays paradisiaque... 
					</p>
					<img src="<?php echo  get_stylesheet_directory_uri() . '/assets/images/Grand Nuage.png'; ?>" class="Grand-Nuage"/>
					<img src="<?php echo  get_stylesheet_directory_uri() . '/assets/images/Petit Nuage.png'; ?>" class="Petit-Nuage"/>
                </div>
            </article>
        </section>


        <section id="studio">
            <h2>Studio Koukaki</h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>

		

	
		
    </main><!-- #main -->

	<section>
		<?php get_template_part( 'event-section' ); ?>
	</section>	
<?php
get_footer();

