import './bootstrap';

//Parallax effect
function effectsHomeSection() {
    const homeSection = document.querySelector('.home-parallax, .home-fade');
  
    if (homeSection) {
      const homeSHeight = homeSection.offsetHeight;
      const topScroll = window.scrollY; 
  
      if (topScroll <= homeSHeight) {
        if (homeSection.classList.contains('home-parallax')) {
          homeSection.style.transform = `translateY(${topScroll * 0.7}px)`;
        }
  
        if (homeSection.classList.contains('home-fade')) {
          const caption = homeSection.querySelector('.caption-content');
          if (caption) {
            caption.style.opacity = 1 - (topScroll / homeSHeight);
          }
        }
      }
    }
}

// Call the function on scroll and initial load
window.addEventListener('scroll', effectsHomeSection);
effectsHomeSection();

// tsParticles 
tsParticles.load("tsparticles", {
  fpsLimit: 60,
  interactivity: {
      events: {
          onClick: { enable: true, mode: "push" },
          onHover: { enable: true, mode: "repulse" },
          resize: true
      },
      modes: {
          push: { quantity: 4 },
          repulse: { distance: 200, duration: 0.4 }
      }
  },
  particles: {
      color: { value: "#10B981" },
      links: {
          color: "#ffffff",
          distance: 150,
          enable: true,
          opacity: 0.5,
          width: 1
      },
      move: {
          direction: "none",
          enable: true,
          outModes: { default: "bounce" },
          random: false,
          speed: 1,
          straight: false
      },
      number: { density: { enable: true, area: 800 }, value: 80 },
      opacity: { value: 0.5 },
      shape: { type: "circle" },
      size: { value: { min: 1, max: 5 } }
  },
  detectRetina: true
});