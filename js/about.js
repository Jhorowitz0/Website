var profilePhoto = document.getElementById('ProfileImage');
var currentPhoto = 0;
setInterval(rotatePhoto,1500);

function rotatePhoto(){
  // profilePhoto.children[currentPhoto].style.opacity = 0;
  // currentPhoto = (currentPhoto + 1) % 6;
  if(!profilePhoto) profilePhoto = document.getElementById('ProfileImage');
  profilePhoto.children[currentPhoto].style.opacity = 0;
  currentPhoto = (currentPhoto + 1) % 5;
  profilePhoto.children[currentPhoto].style.opacity = 100;
}