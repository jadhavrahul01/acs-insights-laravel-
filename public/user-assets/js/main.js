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