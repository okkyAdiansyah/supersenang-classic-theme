/******/ (() => { // webpackBootstrap
/*!**********************************!*\
  !*** ./src/img-carousel/view.js ***!
  \**********************************/
/**
 * Use this file for JavaScript code that you want to run in the front-end
 * on posts/pages that contain this block.
 *
 * When this file is defined as the value of the `viewScript` property
 * in `block.json` it will be enqueued on the front end of the site.
 *
 * Example:
 *
 * ```js
 * {
 *   "viewScript": "file:./view.js"
 * }
 * ```
 *
 * If you're not making any changes to this file because your project doesn't need any
 * JavaScript running in the front-end, then you should delete this file and remove
 * the `viewScript` property from `block.json`.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-metadata/#view-script
 */

/* eslint-disable no-console */
window.addEventListener('DOMContentLoaded', () => {
  const radios = document.querySelectorAll('.carousel-radio');
  const accents = document.querySelectorAll('.ss-radio-accent');
  const carouselSlider = document.querySelector('.ss-carousel-slider');
  const prevBtn = document.querySelector('#prev-btn');
  const nextBtn = document.querySelector('#next-btn');
  accents[0].classList.add('isActive');
  let count = 0;
  prevBtn?.addEventListener('click', () => {
    if (count > 0) {
      count -= 1;
    }
    radios[count].checked = true;
    radios[count].click();
  });
  nextBtn?.addEventListener('click', () => {
    if (count < radios.length - 1) {
      count += 1;
    }
    radios[count].checked = true;
    radios[count].click();
  });
  radios.forEach((radio, index) => {
    radio.addEventListener('click', e => {
      // Remove active from all
      accents.forEach(accent => accent.classList.remove('isActive'));

      // Parse the value and set count
      count = parseInt(e.target.value, 10) - 1;

      // Activate the current accent
      const targetId = radio.dataset.target;
      const targetAccent = document.querySelector(targetId);
      if (targetAccent) {
        targetAccent.classList.add('isActive');
      }

      // Move slider
      const translateX = -count * 100;
      carouselSlider.style.transform = `translateX(${translateX}%)`;
    });
  });
});

/* eslint-enable no-console */
/******/ })()
;
//# sourceMappingURL=view.js.map