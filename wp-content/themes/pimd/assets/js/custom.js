

function openNav(){
  jQuery("#mySideNav").css("transform", "translateX(0)");
}

function closeNav(){
  jQuery("#mySideNav").css("transform", "translateX(100%)");
}


jQuery(document).ready(function () {
  
    jQuery(".mob-menu").click(openNav);
    jQuery(".close-menu").click(closeNav);

});

jQuery(".hdr-menu li").click(function () {
  // Remove active class from all items
  jQuery(".hdr-menu li").removeClass("active");
  // Add active class to the clicked item
  jQuery(this).addClass("active");
});

console.log(jQuery);

// partner-slider

jQuery(".partner-slider").slick({
  speed: 5000,
  autoplay: true,
  autoplaySpeed: 0,
  cssEase: 'linear',
  slidesToShow: 5,
slidesToScroll: 1,
  infinite: true,
  swipeToSlide: true,
centerMode: true,
  focusOnSelect: true,
  responsive: [
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 2,
            }
          }
          ]
});



  AOS.init({
   duration:1000,
   easing: 'ease-in-out',
   once: true,
  });



  function openTab(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
     
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  
  document.getElementById("defaultOpen").click();


