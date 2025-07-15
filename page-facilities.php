<?php get_header(  ); ?>
    <div class="ss-hero-banner-container ss-hero-banner--facility">
        <div class="ss-hero-content">
            <img src="<?= esc_url( get_template_directory_uri(  ) . '/assets/images/facility/facility-icon.png' ); ?>" alt="">
            <p class="ss-header-highlight">
                We don’t do ordinary. From <mark>poolside sips to spa bliss</mark>, SUPERSENANG brings laid-back luxury to Balian—your way, all day.
            </p>        
            <a href="#room-the-restaurant" class="ss-cta--underline ss-cta--90">
                Explore
                <svg
                    width="17"
                    height="16"
                    viewBox="0 0 17 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M16.7071 8.70711C17.0976 8.31658 17.0976 7.68342 16.7071 7.29289L10.3431 0.928932C9.95262 0.538408 9.31946 0.538408 8.92893 0.928932C8.53841 1.31946 8.53841 1.95262 8.92893 2.34315L14.5858 8L8.92893 13.6569C8.53841 14.0474 8.53841 14.6805 8.92893 15.0711C9.31946 15.4616 9.95262 15.4616 10.3431 15.0711L16.7071 8.70711ZM0 8V9H16V8V7H0V8Z"
                        fill="white"
                    />
                </svg>
            </a>
        </div>
    </div>
    <?php 
        $args = array(
            "post_type" => "facility",
            "order" => "ASC"
        );

        $posts = new WP_Query ( $args );
        if ( $posts->have_posts(  ) ) :
            while ( $posts->have_posts(  ) ) :
                $posts->the_post(  );
    ?>
    <div id="facility-<?= esc_html( get_post_field( 'post_name' ) ); ?>" class="ss-textured-bg">
        <div class="ss-content-container">
            <div class="ss-content ss-column">
                <a href="<?= esc_url( get_the_permalink(  ) ); ?>" class="ss-thumb-container">
                    <img src="<?= esc_url( get_field( 'cover_thumbnail' ) ); ?>" alt="<?= esc_html( get_the_title(  ) ); ?>" class="ss-thumb">
                    <img src="<?= esc_url( get_field( 'cover_icon' ) ); ?>" alt="<?= esc_html( get_the_title(  ) ); ?>" class="ss-icon">
                </a>
                <div class="ss-content ss-column-center">
                    <div class="ss-text-content-container">
                        <a href="<?= esc_url( get_the_permalink(  ) ); ?>" class="ss-content-title">
                            <?= get_the_title(  ); ?>
                        </a>
                        <p class="ss-content-excerpt">
                            <?= esc_html( __( get_field( 'cover_excerpt' ), 'supersenang-theme' ) ); ?>
                        </p>
                    </div>
                    <div class="ss-cta-container">
                        <?php if ( ! get_field( 'is_available' ) ) : ?>
                            <a href="<?= esc_url( get_the_permalink(  ) ); ?>" class="ss-cta--underline">Available Soon</a>
                        <?php else : ?>
                            <?php if ( get_field( 'is_bookable' ) ) :
                                    if ( get_field( 'have_menu' ) ) :    
                            ?>
                                <a href="<?= esc_url( get_field( 'menu_link' ) ); ?>" class="ss-cta--underline">
                                    View our menu
                                    <svg
                                        width="17"
                                        height="16"
                                        viewBox="0 0 17 16"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M16.7071 8.70711C17.0976 8.31658 17.0976 7.68342 16.7071 7.29289L10.3431 0.928932C9.95262 0.538408 9.31946 0.538408 8.92893 0.928932C8.53841 1.31946 8.53841 1.95262 8.92893 2.34315L14.5858 8L8.92893 13.6569C8.53841 14.0474 8.53841 14.6805 8.92893 15.0711C9.31946 15.4616 9.95262 15.4616 10.3431 15.0711L16.7071 8.70711ZM0 8V9H16V8V7H0V8Z"
                                            fill="white"
                                        />
                                    </svg>
                                </a>
                                <?php endif ;?>
                                <a href="<?= esc_url( get_the_permalink(  ) ); ?>" class="ss-cta--underline">
                                    Book a <?= esc_html( get_field( 'booking_type' ) ); ?>
                                    <svg
                                        width="17"
                                        height="16"
                                        viewBox="0 0 17 16"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M16.7071 8.70711C17.0976 8.31658 17.0976 7.68342 16.7071 7.29289L10.3431 0.928932C9.95262 0.538408 9.31946 0.538408 8.92893 0.928932C8.53841 1.31946 8.53841 1.95262 8.92893 2.34315L14.5858 8L8.92893 13.6569C8.53841 14.0474 8.53841 14.6805 8.92893 15.0711C9.31946 15.4616 9.95262 15.4616 10.3431 15.0711L16.7071 8.70711ZM0 8V9H16V8V7H0V8Z"
                                            fill="white"
                                        />
                                    </svg>
                                </a>
                            <?php endif;?>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php 
    wp_reset_postdata();
            endwhile;
        endif;
get_footer(  ); ?>