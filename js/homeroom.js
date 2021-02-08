// Initialize Flickity
var elem = document.querySelector('.main-carousel');
var flkty = new Flickity( elem, {
  // options
  cellAlign: 'left',
  contain: true
});

// element argument can be a selector string
//   for an individual element
var flkty = new Flickity( '.main-carousel', {
  // options
});


var darkColor = "#081c1b";
var lightColor = "#d64052";
var highlight = "#2fa8a4";
var navColor = darkColor;
var headerColor = "#000000"

var navElements = document.querySelectorAll(".nav-item"); // item containing both title and marker
var navTitles = document.querySelectorAll(".nav-title"); // the title of each section in the nav 
var markerList = document.querySelectorAll(".nav-marker"); // the line that marks where on the page you are
var navPositions = [];

var curPage = 0;

function highlightElem(elem){
    elem.style.backgroundColor=highlight;
    elem.style.animationFillMode="forwards";
    elem.style.animation="grow 0.05s ease-in"
    elem.style.width="40px";
    elem.style.transform="translateX(120px) rotate(90deg)";
}

function unhighlightElem(elem){
    elem.style.backgroundColor=navColor;
    elem.style.animationFillMode="forwards";
    elem.style.animation="shrink 0.05s ease-in"
    elem.style.width="30px";
    elem.style.transform="";
}

function updateNav(){
  curPage = 0;
  let pos = window.pageYOffset;

  let pageSections = [];
  for(ELEM of document.querySelectorAll("section")){
    // let elemPos = ELEM.getBoundingClientRect().top;
    // let elemHeigh = ELEM.offsetHeight;

    // if(elemPos > 0){
    //   curPage++;
    // }
    pageSections.push(ELEM);
  }
  for(i in pageSections){
    let elemPos = pageSections[i].getBoundingClientRect().top - 50;

    if(i == pageSections.length-1 && elemPos < 200){
      curPage = i;
      break;
    }

    if(elemPos>0){
      curPage = i-1;
      break;
    }
  }

  
  for(let i = 0; i < markerList.length; i++){
    if(i == curPage){
      highlightElem(markerList[i]);
      navTitles[i].style.color=highlight;
      navTitles[i].style.opacity=1;
    }
    else{
        unhighlightElem(markerList[i]);
        navTitles[i].style.color=navColor;
        navTitles[i].style.opacity=0;
        if(navElements[i].matches(':hover')) navTitles[i].style.opacity=1;
    }
  }

}

function colorShift(){
  let pos1 = window.pageYOffset;
  let pos2 = 300;

  if(pos1 <= pos2/3){
      // document.body.style.backgroundColor = headerColor;
      // document.body.style.color = lightColor;
      navColor = lightColor;
      document.getElementById('headerImg').style.opacity = "1";
  }
  else{
    document.getElementById('headerImg').style.opacity = "0";
      // document.body.style.backgroundColor = lightColor;
      // document.body.style.color = darkColor;
      navColor = darkColor;
  }
}


function onScroll(){
    updateNav();
    colorShift();
}

function onPointerMove(){
  for(let i = 0; i < markerList.length; i++){
    if(navElements[i].matches(':hover')) navTitles[i].style.opacity=1;
    else if(i != curPage)navTitles[i].style.opacity=0;
  //   if(i == curPage){
  //     highlightElem(markerList[i]);
  //     navTitles[i].style.color=highlight;
  //     navTitles[i].style.opacity=1;
  //   }
  //   else{
  //       unhighlightElem(markerList[i]);
  //       navTitles[i].style.color=navColor;
  //       navTitles[i].style.opacity=0;
  //       if(navElements[i].matches(':hover')) navTitles[i].style.opacity=1;
  //   }
  }
  
}

colorShift();
updateNav();
document.addEventListener("scroll",onScroll,false);
document.addEventListener("pointermove",onPointerMove,false);