<?php get_header(  ); ?>
<?php if ( have_posts(  ) ) :
    while ( have_posts(  ) ) :
        the_post(  );

        $highlight = str_replace(
            get_field( 'room_header_highlight' ),
            '<mark>' . get_field( 'room_header_highlight' ) . '</mark>',
            get_field( 'room_header' )
        );
?>
    <div
        class="ss-hero-banner-container"
        style="background-image: url('<?= esc_url( get_the_post_thumbnail_url( get_the_ID() ) ); ?>');"
    >
        <div class="ss-hero-content">
            <img src="<?= esc_url( get_field( 'cover_icon' ) ); ?>" alt="">
            <p class="ss-header-highlight"><?= __( $highlight, 'supersenang-theme' ); ?></p>
            <a href="#details" class="ss-cta--underline ss-cta--90">
                Details
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
    <div id="details" class="ss-single-container">
        <div class="ss-single-content-container ss-content-available">
            <div class="ss-content--isAvailable">
                <?php the_content(); ?>
                <div class="ss-text-content">
                    <a href="/rooms" class="ss-cta--underline ss-cta--thin">
                       < View other room types
                    </a>
                    <p class="ss-title">
                        <?= get_the_title(  ); ?>
                    </p>
                    <p class="ss-details">
                        <?= __( get_field( 'room_details' ), 'supersenang-theme' ); ?>
                    </p>
                    <div class="ss-amenities">
                        <p class="ss-amenities-title">Amenities</p>
                        <?= wp_kses_post( get_field( 'amenities' ) ); ?>
                    </div>
                    <p class="ss-details">
                        <?= __( get_field( 'room_closing_statement' ), 'supersenang-theme' ); ?>
                    </p>
                    <a href="<?= esc_url( get_the_permalink(  ) ); ?>" class="ss-cta--underline">
                        Book this room
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
        </div>
    </div>
<?php endwhile;
    endif;
?>
<?php get_footer(  ); ?>