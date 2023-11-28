let slideshowActive = false; // Flag per indicare se lo slideshow è attivo
let slideshowTimer; // Timer per controllare l'intervallo di visualizzazione degli slide

function startSlideShow() {
  let slides = document.getElementsByClassName("cosa");
  let slideIndex = 0;

  function showSlides() {
    for (let i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }

    slideIndex++;
    if (slideIndex > slides.length) {
      slideIndex = 1;
    }

    slides[slideIndex - 1].style.display = "flex";
    slideshowTimer = setTimeout(showSlides, 3500);
  }

  // Controlla se lo slideshow è già attivo
  if (!slideshowActive) {
    slideshowActive = true;
    showSlides();
  }
}

function stopSlideShow() {
  clearTimeout(slideshowTimer); // Interrompe il timer dello slideshow
  let slides = document.getElementsByClassName("cosa");
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "flex";
  }
  slideshowActive = false; // Imposta il flag a false quando lo slideshow è interrotto
}

function handleResize() {
  let slides = document.getElementsByClassName("cosa");

  if (window.innerWidth < 768) {
    // Avvia lo slideshow solo se la finestra è sufficientemente piccola
    startSlideShow();
  } else {
    // Interrompi lo slideshow se la finestra è abbastanza grande
    stopSlideShow();
  }
}

window.addEventListener('resize', function() {
  clearTimeout(window.resizeTimer);
  window.resizeTimer = setTimeout(function() {
    handleResize();
  }, 250);
});

// Chiama la funzione handleResize al caricamento della pagina per gestire lo stato iniziale
handleResize();