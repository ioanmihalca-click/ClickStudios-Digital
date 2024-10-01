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





