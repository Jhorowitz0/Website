document.addEventListener("scroll",handlePageScroll);
var projectElement = document.getElementById('Projects');
var aboutElement = document.getElementById('About');
var navFillElement = document.getElementById('NavFill');
var projectNav = document.getElementById('ProjectNav');
var aboutNav = document.getElementById('AboutNav');
var profilePhoto = document.getElementById('ProfileImage');
var currentPhoto = 0;
setInterval(rotatePhoto,1500);

function handlePageScroll(event){
  scrollPos = window.pageYOffset;
  updateNavBar(scrollPos);
}

function updateNavBar(scrollPos){
  if(!projectElement)projectElement = document.getElementById('Projects');
  if(!aboutElement)aboutElement = document.getElementById('About');
  if(!navFillElement)navFillElement = document.getElementById('NavFill');
  if(!projectNav)projectNav = document.getElementById('ProjectNav');
  if(!aboutNav)aboutNav = document.getElementById('AboutNav');

  var projectHeight = projectElement.offsetTop - projectElement.scrollHeight/2;
  var aboutHeight = aboutElement.offsetTop - aboutElement.scrollHeight/2;


  if(scrollPos < projectHeight){
    // navFillElement.style.transform = 'translateY(3.5vh)';
    navFillElement.style.height = 0;
    projectNav.style.color = 'black';
  }
  else{
    navFillElement.style.height = '7vh';
    // navFillElement.style.transform = 'translateY(0vh)';
    if(scrollPos >= aboutHeight){
      projectNav.style.color = 'black';
      aboutNav.style.color = 'white';
      navFillElement.style.transform = 'translateX(100px)';
    }
    else{
      projectNav.style.color = 'white';
      aboutNav.style.color = 'black';
      navFillElement.style.transform = 'translateX(0)';
    }
  }
}

function rotatePhoto(){
  // profilePhoto.children[currentPhoto].style.opacity = 0;
  // currentPhoto = (currentPhoto + 1) % 6;
  if(!profilePhoto) profilePhoto = document.getElementById('ProfileImage');
  profilePhoto.children[currentPhoto].style.opacity = 0;
  currentPhoto = (currentPhoto + 1) % 5;
  profilePhoto.children[currentPhoto].style.opacity = 100;
}