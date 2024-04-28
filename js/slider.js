// Hero Carousel
const slider1 = document.querySelector('#glide_1');
if (slider1) {
  new Glide(slider1, {
    type: 'carousel',
    startAt: 0,
    autoplay: 8000,
    gap: 0,
    // hoverpause: true,
    perView: 1,
    animationDuration: 500,
    animationTimingFunc: 'linear',
  }).mount();
}
