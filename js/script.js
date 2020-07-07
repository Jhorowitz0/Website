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

var darkColor = "#050517";
var lightColor = "#D0D6DD";
var highlight = "#E01A4F";
var navColor = darkColor;

var navElements = document.querySelectorAll(".nav-item");
var navTitles = document.querySelectorAll(".nav-title");
var markerList = document.querySelectorAll(".nav-marker");
var navPositions = [];

function highlightElem(elem){
    elem.style.backgroundColor=highlight;
    elem.style.animationFillMode="forwards";
    elem.style.animation="grow 0.05s ease-in"
    elem.style.width="40px";
}

function unhighlightElem(elem){
    elem.style.backgroundColor=navColor;
    elem.style.animationFillMode="forwards";
    elem.style.animation="shrink 0.05s ease-in"
    elem.style.width="30px";
}

function initializeNav(){
    let total = 0;
    let pageSections = [];
    pageSections.push(document.querySelector("header"));
    for(ELEM of document.querySelectorAll("section")){
        pageSections.push(ELEM);
    }
    for(ELEM of pageSections){
        navPositions.push(total);
        total += ELEM.offsetHeight;
    }
    updateNav();
}

function updateNav(){
    let curPage = 0;
    let pos1 = window.pageYOffset;
    for(let i = 0; i < navElements.length; i++){
        let pos2 = navPositions[i];
        if(pos1 >= pos2-100) curPage = i;
    }

    for(let i = 0; i < markerList.length; i++){
        if(i == curPage){
            highlightElem(markerList[i]);
            navTitles[i].style.color=highlight;
        }
        else{
            unhighlightElem(markerList[i]);
            navTitles[i].style.color=navColor;
        }
    }
}

function colorShift(){
    let pos1 = window.pageYOffset;
    let pos2 = navPositions[1];
    if(pos1 > pos2*0.5){
        document.body.style.backgroundColor = darkColor;
        document.body.style.color = lightColor;
        navColor = lightColor;
    }
    else{
        document.body.style.backgroundColor = lightColor;
        document.body.style.color = darkColor;
        navColor = darkColor;
    }
}

function onScroll(){
    colorShift();
    updateNav();
}

initializeNav();
colorShift();
document.addEventListener("scroll",onScroll,false);