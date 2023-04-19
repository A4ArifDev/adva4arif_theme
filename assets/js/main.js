  jQuery(document).ready(function(){
      jQuery('.bxslider').bxSlider({
        mode: 'horizontal',
        infiniteLoop: true,
        auto: true,
        autoStart: true,
        autoDirection: 'next',
        autoHover: true,
        pause: 3000,
        autoControls: false,
        pager: true,
        pagerType: 'full',
        controls: true,
        captions: true,
        speed: 500,
        Height:300
        });
        var selector = '.links li a';
        jQuery(selector).on('click', function(){
        jQuery(selector).removeClass('link-active');
        jQuery(this).addClass('link-active');
    });
  });
  

// toggle bar creating
const menuToggle = document.querySelector(".toggle");
menuToggle.addEventListener('click',()=>{
  menuToggle.classList.toggle('active-toggle');
})


// active class on menu
const bar = document.querySelector(".toggle");
const menu = document.querySelector(".links");

bar.addEventListener('click', ()=>{
  menu.classList.toggle("active");
});

// menu close after clicking on link
const anchors = document.querySelectorAll('.links li a');
anchors.forEach(anchor => {
    anchor.addEventListener('click', ()=>{
      menu.classList.remove('active');
      menuToggle.classList.remove('active-toggle');
    })
});

window.addEventListener('scroll', reveal);

function reveal(){
  let reveals = document.querySelectorAll(".reveal");
  for(var i = 0; i < reveals.length; i++){
    var windowHeight = window.innerHeight;
    var revealTop = reveals[i].getBoundingClientRect().top;
    var revealPoint = 100;
      if(revealTop < windowHeight - revealPoint){
        reveals[i].classList.add('sec-active');
      }else{
        reveals[i].classList.remove('sec-active');
      }
  }
}

function animate(obj, initVal, lastVal, duration) {
  let startTime = null;

//get the current timestamp and assign it to the currentTime variable
let currentTime = Date.now();

//pass the current timestamp to the step function
const step = (currentTime ) => {

//if the start time is null, assign the current time to startTime
if (!startTime) {
  startTime = currentTime ;
}

//calculate the value to be used in calculating the number to be displayed
const progress = Math.min((currentTime - startTime)/ duration, 1);

//calculate what to be displayed using the value gotten above
obj.innerHTML = Math.floor(progress * (lastVal - initVal) + initVal);

//checking to make sure the counter does not exceed the last value (lastVal)
if (progress < 1) {
  window.requestAnimationFrame(step);
} else {
     window.cancelAnimationFrame(window.requestAnimationFrame(step));
  }
};
//start animating
  window.requestAnimationFrame(step);
}
let text1 = document.getElementById('0101');
let text2 = document.getElementById('0102');
let text3 = document.getElementById('0103');
let text4 = document.getElementById('0104');
const load = () => {
  animate(text1, 0, 2000, 3000);
  animate(text2, 0, 250, 3000);
  animate(text3, 0, 15, 2000);
  animate(text4, 0, 4, 2000);
}
