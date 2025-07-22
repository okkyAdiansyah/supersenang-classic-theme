<?php get_header( 'booking' ); ?>
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
            <div class="ss-content--isAvailable ss-room">
                <div class="ss-content-wrapper">
                    <?php the_content(); ?>
                </div>
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
                    <!-- <a href="<?= esc_url( get_the_permalink(  ) ); ?>" class="ss-cta--underline">
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
                    </a> -->
                </div>
                <div class="ss-booking-container">
                    <div class="box-be-custom">
                        <div class="row gx-3">
                            <div class="col-12 col-sm-6 col-lg-2">
                                <label id="check-in-label">Check in:</label>
                                <input type="date" class="input-be" required name="check-in" id="check-in" placeholder="Check-in date">
                                <p class="text-danger mb-0" id="alert-check-in" style="display: none;">Please select check in date</p>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-2">
                                <label id="check-out-label">Check out:</label>
                                <input type="date" class="input-be" required name="check-out" id="check-out"
                                    placeholder="Check-out date">
                                <p class="text-danger mb-0" id="alert-check-out" style="display: none;">Please select check out date</p>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <label>Guest:</label>
                                <div class="input-be cursor-pointer" onclick="ShowHidePopUp()">
                                    <p class="center text-truncate"><span id="adult-guest">1</span> Adults, <span
                                            id="children-guest">0</span> Children, <span id="infant-guest">0</span> Infants</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3" onclick="HidePopUp()">
                                <label>Promo code:</label>
                                <input type="text" class="input-be" name="promo-code" placeholder="Promo code" id="promo-code">
                            </div>
                            <div class="col-12 col-sm-12 col-lg-2">
                                <button type="button" onclick="OnBook()" class="btn-book-now">Book Now</button>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4"></div>
                            <div class="col-12 col-sm-12 col-lg-5 position-relative">
                                <!-- Pop Up -->
                                <div class="pop-up-guest" id="pop-up-guest">
                                    <div class="border-bottom py-2 mb-2">
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="title">Adult</p>
                                                <p class="description">Ages 17 or above</p>
                                            </div>
                                            <div class="col-6">
                                                <div class="row slim-grid-row mt-2">
                                                    <div class="col-4">
                                                        <div class="icon" onclick="AdultsMin()">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                                fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                                                                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="col-3 text-center">
                                                        <p class="bold ml-2" id="adult-amount">1</p>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="icon" onclick="AdultsAdd()">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                                fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-bottom py-2 mb-2">
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="title">Children</p>
                                                <p class="description">Ages 2-16</p>
                                            </div>
                                            <div class="col-6">
                                                <div class="row slim-grid-row mt-2">
                                                    <div class="col-4">
                                                        <div class="icon" onclick="ChildrenMin()">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                                fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                                                                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="col-3 text-center">
                                                        <p class="bold ml-2" id="children-amount">0</p>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="icon" onclick="ChildrenAdd()">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                                fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt-2">
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="title">Infants</p>
                                                <p class="description">Under 2</p>
                                            </div>
                                            <div class="col-6">
                                                <div class="row slim-grid-row mt-2">
                                                    <div class="col-4">
                                                        <div class="icon" onclick="InfantMin()">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                                fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                                                                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="col-3 text-center">
                                                        <p class="bold ml-2" id="infant-amount">0</p>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="icon" onclick="InfantAdd()">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                                fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endwhile;
    endif;
?>
<?php get_footer( 'booking' ); ?>