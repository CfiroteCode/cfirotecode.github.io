// Lorsque la page est chargée, on met en place les animations au scroll
document.addEventListener("DOMContentLoaded", () => {
    const faders = document.querySelectorAll(".fade-in");
  
    const appearOptions = {
      threshold: 0.1,
      rootMargin: "0px 0px -100px 0px"
    };
  
    // IntersectionObserver pour déclencher l'animation fade-in
    const appearOnScroll = new IntersectionObserver(function (entries, observer) {
      entries.forEach(entry => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add("active");
        observer.unobserve(entry.target);
      });
    }, appearOptions);
  
    faders.forEach(fader => {
      appearOnScroll.observe(fader);
    });
  
  });
  