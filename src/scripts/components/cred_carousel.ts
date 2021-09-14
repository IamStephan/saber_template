import { carousel } from "./carousel";

function InitCredCarousel() {
  const carouselNode = document.querySelector<HTMLDivElement>(".carousel");

  const options = {
    loop: true,
  };

  const Embla = carousel(carouselNode, options);

  // Reinit since embla sometimes messes uo the first run
  setTimeout(() => {
    Embla.reInit();
  }, 10);
}

try {
  InitCredCarousel();
} catch (e) {
  console.log(`Could not init Carousel: ${e}`);
}
