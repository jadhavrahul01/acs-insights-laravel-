// Get elements from the DOM
const menuBtn = document.querySelector('.menu-btn');
const menu = document.querySelector('.menu-container');
const dropdowns = document.querySelectorAll('.dropdown > div');
const subDropdowns = document.querySelectorAll('.sub-dropdown > div');

// Toggle variable
let menuOpen = false;

// Set click event to menu button
menuBtn.addEventListener('click', ()=>{
    // Toggle mega menu show class
    menu.classList.toggle('mega-menu-show');
    // If the menu open variable is false
    if(menuOpen===false){
        // Set the close icon to the menu button
        menuBtn.innerHTML=`
        <span class="material-symbols-outlined">
            close
        </span>
        `;
        // Set menu open to true
        menuOpen = true;
    }
    else{
        // Set the menu icon to the menu button
        menuBtn.innerHTML=`
        <span class="material-symbols-outlined">
            menu
        </span>
        `;
        // Set menu open to false
        menuOpen = false;
    }
});

// Select all dropdowns
dropdowns.forEach(dropdown=>{
    // Add click event
    dropdown.addEventListener("click", (e)=>{
        // Toggle dropdown menu show class
        dropdown.nextElementSibling.classList.toggle('menu-show');
        // Toggle icon rotated class
        dropdown.lastElementChild.classList.toggle('icon-rotated');
    });
});

// Select all sub dropdowns
subDropdowns.forEach(subDropdown=>{
    // Add click event
    subDropdown.addEventListener('click', (e)=>{
        // Toggle sub dropdown menu show class
        subDropdown.nextElementSibling.classList.toggle('sub-menu-show');
        // Toggle icon rotated class
        subDropdown.lastElementChild.classList.toggle('icon-rotated');
    });
});


// disabling inspect element
document.addEventListener("contextmenu", function(e){
    e.preventDefault(); //this prevents right click
});
document.onkeydown=function(e){
    if(event.keycode==123){
        return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode=="I".charCodeAt(0)){
        return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode=="C".charCodeAt(0)){
        return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode=="J".charCodeAt(0)){
        return false;
    }
    if(e.ctrlKey && e.keyCode=="U".charCodeAt(0)){
        return false;
    }
    if(e.ctrlKey && e.keyCode=="S".charCodeAt(0)){
        return false;
    }
};









// var a = document.querySelector(".snapshots-status");
// function sho(){
//     a.classList.toggle("show");
// }


// var b = document.querySelector(".snapshots-status");
// function clos(){
//     a.classList.toggle("clos");
// }


// function myFunction() {
//     var x = document.getElementById("snapshots-status-content-box");
//     if (x.style.display === "none") {
//       x.style.display = "block";
//     } else {
//       x.style.display = "none";
//     }
//   }




const player = document.body.querySelector("amp-story-player");
const lightboxEl = document.querySelector(".lightbox");

if (player.isReady) {
  initializeCarousel();
} else {
  player.addEventListener("ready", () => {
    initializeCarousel();
  });
}

function initializeCarousel() {
  const stories = player.getStories();

  const thumbnails = document.querySelectorAll(
    ".entry-point-card-container img"
  );

  thumbnails.forEach((img, idx) => {
    img.addEventListener("click", () => {
      player.show(stories[idx].href);
      player.play();
      lightboxEl.classList.toggle("show");
    });
  });
}

player.addEventListener("amp-story-player-close", () => {
  player.pause();
  lightboxEl.classList.toggle("show");
});


//       $(document).ready(function(){
//       $('#statusShow').click(function() {
//       $('.snapshots-status-content-box').toggle("slide");
//       });
//  });




// var div = document.getElementById('statusShow');
// var display = 0;
// function hideshow()
// {
//   if(display == 1)
//   {
//     div.style.display = 'block';
//     display = 0;
//   }
//   else
//   {
//     div.style.display = 'none';
//     display = 1;
//   }
// }
