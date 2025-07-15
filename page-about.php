<?php get_header(  ); ?>
    <div class="ss-hero-banner-container ss-hero-banner--about">
        <div class="ss-hero-content">
            <img src="<?= esc_url( get_template_directory_uri(  ) . '/assets/images/about/about-icon-1.png' ); ?>" alt="">
            <p class="ss-header-highlight">
                <mark>supersenang</mark> has got everything you need to escape the ordinary. drop your bags, ditch your worries, and jump into the fun. let’s make it unforgettable.
            </p>        
            <a href="#about-1" class="ss-cta--underline ss-cta--90">
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
    <div id="about-1" class="ss-about-content-wrapper">
        <div class="ss-about-content-container">
            <div class="ss-content">
                <img src="<?= esc_url( get_template_directory_uri(  ) . '/assets/images/about/about-icon-2.png' ); ?>" alt="" class="ss-icon">
                <p class="ss-content-paragraph">
                    SUPERSENANG means super happy - and that's exactly what we're here for. To make people smile. To make you feel good. To turn simple moments into the best part of your day. 
                </p>
                <p class="ss-content-paragraph">
                    You don't have to do anything here. But if you feel like doing everything - go for it! Swim, eat, explore, sip, chat, nap, repeat. It's your vibe, your pace. 
                </p>
                <p class="ss-content-paragraph">
                    We believe happiness should be easy. Good food, good people, good energy - and space to enjoy it all. Whether you're here to chill, connect, or celebrate, we've created a place where it's effortless to feel... SUPERSENANG.
                </p>
            </div>
        </div>
    </div>
    <div class="ss-about-content-wrapper">
        <div class="ss-about-content-container">
            <div class="ss-content">                
                <img src="<?= esc_url( get_template_directory_uri(  ) . '/assets/images/about/about-icon-3.png' ); ?>" alt="" class="ss-icon">
                <p class="ss-content-title">
                    BALIAN, BALI 
                </p>
                <p class="ss-content-paragraph">
                    Known for its powerful waves, black sand, and untamed beauty, this is Bali’s best-kept secret. Whether you’re here to surf, unwind, or just vibe with nature, Balian brings the perfect mix of energy and tranquility.
                </p>
                <a target="_blank" href="https://www.google.com/maps/place/Supersenang+Boutique+Resort+Balian/@-8.4939449,114.9512643,17z/data=!3m1!4b1!4m6!3m5!1s0x2dd22d9c865278bf:0xd5d2e3b77816f438!8m2!3d-8.4939502!4d114.9538392!16s%2Fg%2F11xl708lpr?entry=ttu&g_ep=EgoyMDI1MDcwOS4wIKXMDSoASAFQAw%3D%3D" class="ss-cta--underline">
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
    </div>
    <div class="ss-about-content-wrapper">
        <div class="ss-about-content-container">
            <div class="ss-content">                
                <div class="ss-post-content-container">
                    <?php if ( have_posts(  ) ) :
                        while ( have_posts(  ) ) :
                            the_post();
                    ?>
                        <?php the_content(  ); ?>
                    <?php endwhile; ?>
                    <?php else : ?>
                        <p>IG WIDGET</p>
                    <?php endif;?>
                </div>
                <p class="ss-contact-link">
                    STAY IN THE LOOP
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
                    Follow us on Instagram
                    <a href="https://www.instagram.com/supersenang?igsh=YTI3czRxNWNtNnh3&utm_source=qr">@SUPERSENANG</a>
                </p>
            </div>
        </div>
    </div>
<?php get_footer(  ); ?>