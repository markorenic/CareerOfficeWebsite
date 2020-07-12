<header>
    <link rel="stylesheet" href="style/welcomestyle.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="resources/slideshow/responsiveslides.min.js"></script>
    <script>
    $(function() {
       $(".rslides").responsiveSlides({
         auto: true,             // Boolean: Animate automatically, true or false
         speed: 500,            // Integer: Speed of the transition, in milliseconds
         timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
       })
     });
    </script>
</header>
<div class="welcome-container parallax">
  <div class="one shadow">
    <ul class="rslides">
      <li><img src="resources/slideshow1.jpg" alt="image1" class="image" id="slideshow1"></li>
      <li><img src="resources/slideshow2.jpg" alt="image2" class="image" id="slideshow2"></li>
    </ul>
  </div>
  <div class="two shadow">
    <div class="box">
      <h1>Upcoming Events</h1>
      <h2> Event - Date - Location</h2>
      <p> Medicin Meeting - Friday - A200 </p>
    </div>
  </div>
  <div class="three shadow">
    <div class="box">
      <h1>SAT</h1>
    </div>
  </div>
  <div class="four shadow">
  <div class="box">
      <h1>ACT</h1>
    </div>
  </div>
</div>

<script>
 $(function() {
    $(".rslides").responsiveSlides({
      auto: true,             // Boolean: Animate automatically, true or false
      speed: 500,            // Integer: Speed of the transition, in milliseconds
      timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
    })
  });

var counter = 0, // to keep track of current slide
    $items = $('.slideshow figure'), // a collection of all of the slides, caching for performance
    numItems = $items.length; // total number of slides

// this function is what cycles the slides, showing the next or previous slide and hiding all the others
var showCurrent = function(){
    var itemToShow = Math.abs(counter%numItems);// uses remainder (aka modulo) operator to get the actual index of the element to show  
   
  $items.removeClass('show'); // remove .show from whichever element currently has it
  $items.eq(itemToShow).addClass('show');    
};

// add click events to prev & next buttons 
$('.next').on('click', function(){
    counter++;
    showCurrent(); 
});
$('.prev').on('click', function(){
    counter--;
    showCurrent(); 
});
}
</script>

<style>
</style>