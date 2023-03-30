document.addEventListener("scroll",handlePageScroll);
var projectElement = document.getElementById('Projects');
var ToTopArrow = document.getElementById('ToTop');

function handlePageScroll(event){
  scrollPos = window.pageYOffset;
  updateScrollContent(scrollPos);
}

function updateScrollContent(scrollPos){
  if(!ToTopArrow)ToTopArrow = document.getElementById('ToTop');
  if(!projectElement)projectElement = document.getElementById('Projects');
  var hamburger = document.getElementById('Hamburger');
  if(scrollPos < projectElement.offsetTop/2){
    ToTopArrow.style.opacity = 0;
  } else{
    ToTopArrow.style.opacity = 100;
  }

  if(window.innerWidth < 1530){
    if(scrollPos < projectElement.offsetTop){
      hamburger.style.boxShadow = '5px 5px 10px #1b441b59,-5px -5px 10px rgba(245, 255, 240, 0.869)';
      hamburger.style.backgroundColor = "none";
    } else{
      hamburger.style.boxShadow = 'none';
      hamburger.style.backgroundColor = "rgba(217, 241, 217, 0.385)";
    }
  } else {
    hamburger.style.boxShadow = '5px 5px 10px #1b441b59,-5px -5px 10px rgba(245, 255, 240, 0.869)';
    hamburger.style.backgroundColor = "none";
  }
}

