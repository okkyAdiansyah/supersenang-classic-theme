<?php
    $menu = wp_get_nav_menu_items( 'footer-menu' );
?>

    </main>
    <footer class="ss-footer-container">
        <div class="ss-footer-content-container">
            <nav class="ss-footer-content">
                <a href="<?= esc_url( home_url( '/' ) ); ?>" class="ss-footer-img">
                    <img src="<?= esc_url( get_template_directory_uri(  ) . '/assets/images/footer-logo.png' ); ?>" alt="footer logo">
                </a>
                <ul class="ss-footer-menu-container">
                    <?php if ( ! empty( $menu ) ) :
                        foreach ( $menu as $item ) :
                    ?>
                    <li>
                        <a href="<?= esc_url( $item->url ); ?>" class="ss-menu-item">
                            <?= esc_html( __($item->title), 'supersenang-theme' ); ?>
                        </a>
                    </li>
                    <?php endforeach;
                        endif;
                    ?>
                    <li>
                        <a href="/legal" class="ss-menu-item">
                            <?= __(('terms & conditions'), 'supersenang-theme'); ?>
                        </a>
                    </li>
                    <li>
                        <a href="/legal" class="ss-menu-item">
                            <?= __(('disclaimer'), 'supersenang-theme'); ?>
                        </a>
                    </li>
                    <li>
                        <a href="/legal" class="ss-menu-item">
                            <?= __(('privacy policy'), 'supersenang-theme'); ?>
                        </a>
                    </li>
                </ul>
                <ul class="ss-footer-menu-container">
                    <li><p class="ss-menu-item ss-menu-item--title">Connect</p></li>
                    <li><a target="_blank" href="https://www.facebook.com/share/15y6GA7Qze/?mibextid=wwXIfr" class="ss-menu-item">facebook</a></li>
                    <li><a target="_blank" href="https://www.instagram.com/supersenang?igsh=YTI3czRxNWNtNnh3&utm_source=qr" class="ss-menu-item">instagram</a></li>
                    <li class="ss-copyright"><p>© 2025 SUPERSENANG.</p></li>
                </ul>
            </nav>
        </div>
    </footer>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    // Initialize Flatpickr for Check-in date
    const checkin = flatpickr("#check-in", {
        minDate: "today",  // Disable past dates
        dateFormat: "Y-m-d",  // Format the date
        onChange: function (selectedDates, dateStr, instance) {
            // When a date is selected for check-in, update minDate for check-out
            checkout.set('minDate', dateStr);  // Set check-out min date as check-in date
        }
    });

    // Initialize Flatpickr for Check-out date
    const checkout = flatpickr("#check-out", {
        minDate: "today",  // Disable past dates initially
        dateFormat: "Y-m-d",  // Format the date
    });
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "Where is Supersenang located?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Supersenang is located in Balian Beach, on Bali’s peaceful and scenic west coast. We’re about 90 minutes from Canggu or Ubud by car, far from the crowds, close to the waves."
    }
  },{
    "@type": "Question",
    "name": "Is Supersenang close to the beach?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes! We’re just 120 meters from the beach, with ocean views from every room. You can walk to the sea in under five minutes."
    }
  },{
    "@type": "Question",
    "name": "What types of rooms do you offer?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "We have three room types:
	•	Ocean View Lodge – bright, breezy, and perfect for two
	•	Pool Lodge – same view, plus a private plunge pool
	•	Ocean View House – two bedrooms, ideal for friends, families, or longer stays

All rooms come with AC, hot water, super comfy beds, and beautiful design touches."
    }
  },{
    "@type": "Question",
    "name": "Do you have a restaurant?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, and it’s open to the public. We serve breakfast, lunch, and dinner, with a mix of tasty Indonesian dishes, healthy favorites, and guilty pleasures. Our kitchen is open daily from 8am to 10pm."
    }
  },{
    "@type": "Question",
    "name": "Do you offer happy hour?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "No happy hour here — because we’re always happy. But seriously, our cocktails and drinks are well-priced all day."
    }
  },{
    "@type": "Question",
    "name": "Do you offer yoga or wellness classes?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "We don’t host yoga classes (yet), but there are nearby options. SUPERSENANG is all about relaxed luxury, poolside naps, ocean dips, and massage on demand."
    }
  },{
    "@type": "Question",
    "name": "Do you have a spa?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes. Our in-house spa offers massages and treatments daily. We’re also building a sauna, steam room, and cold plunge, coming soon!"
    }
  },{
    "@type": "Question",
    "name": "s Balian Beach good for surfing?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Absolutely. Balian is a well-known surf spot in Bali with a mellow, consistent wave. It’s perfect for intermediate surfers. Lessons and board rentals are available nearby."
    }
  },{
    "@type": "Question",
    "name": "When is the best time to visit Balian?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The dry season (April to October) is perfect for sunshine and surf. The wet season (November to March) is quieter, greener, and still beautiful. We’re open all year."
    }
  },{
    "@type": "Question",
    "name": "Are kids welcome?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, children are welcome at Supersenang. That said, please note that our resort is built on a slope with quite a few stairs and some elevated areas. If you’re traveling with little ones, we kindly ask that you keep a close eye on them for their safety.

Also, our pool is designed for relaxing, not splashing; large waves tend to spill over into our sunken pool bar. And while we’re happy to serve cocktails, we prefer them without pool water.

So yes, kids can join, just no cannonballs, please."
    }
  },{
    "@type": "Question",
    "name": "Can I bring my dog?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "We love pets, especially well-behaved ones. They’re very welcome in our restaurant and public areas, and we’ll probably sneak them a cuddle (or a treat).

However, we don’t allow pets inside the rooms, out of respect for guests with allergies and to keep things extra clean and comfy for everyone.

So yes, bring your furry friend for brunch or sunset drinks, just not for sleepovers."
    }
  },{
    "@type": "Question",
    "name": "Do you offer airport transfer?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes. We can arrange a private driver to pick you up from Ngurah Rai International Airport or anywhere else on the island. Just let us know your travel details."
    }
  },{
    "@type": "Question",
    "name": "Do you have good WiFi?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes! We have fast, stable WiFi in all rooms and common areas. Perfect for working remotely or bingeing your favorite show."
    }
  },{
    "@type": "Question",
    "name": "What is your cancellation policy?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "We get it, plans change. Here’s how our cancellation policy works if you booked directly with us:
	•	Cancel 30 days or more before check-in: full refund.
	•	Cancel between 7 and 30 days before check-in: 50% refund.
	•	Cancel less than 7 days before check-in: no refund.

We always try to be understanding, but since we’re a small resort with limited rooms, last-minute cancellations hit hard. Thanks for understanding"
    }
  },{
    "@type": "Question",
    "name": "What payment methods do you accept?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "We accept Visa, Mastercard, Indonesian QRIS payments, and cash. Easy."
    }
  }]
}
</script>
<?php wp_footer(  ); ?>
</body>
</html>