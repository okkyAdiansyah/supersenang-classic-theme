window.addEventListener( 'DOMContentLoaded', () => {
	const toggle = document.getElementById( 'nav-toggle' );
	const nav = document.getElementById( 'nav' );

	toggle.addEventListener( 'click', () => {
		nav.classList.toggle( 'isActive' );
	} );

	const accordions = document.querySelectorAll('.accordion-button');

	const toggleAccordions = (event) => {
		accordions.forEach((item) => {
			item.setAttribute('aria-expanded', 'false');
		});

		event.currentTarget.setAttribute('aria-expanded', 'true');
	};

	if (accordions.length > 0) {
		accordions.forEach((item) => {
			item.addEventListener('click', toggleAccordions);
		});
	}
} );
