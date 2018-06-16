/* -----------------------------------------
 Menu sticky
 ----------------------------------------- */
(function($) {
  if( $('#scroll-to-me').lenght ) {
  var subMenu = $('#masthead');
  var hideClass = "header--transparent";
  var toScroll = $('#scroll-to-me').offset().top;
  var logo = $(".site-branding");
  var hideSearch = $('#masthead .search-form');


  $(window).scroll(function() {
     if ($(this).scrollTop() >= toScroll ) {
         subMenu.css({"position":"fixed", "transition":"all 2s linear"});
         subMenu.removeClass(hideClass);
         $('a.custom-logo-link').removeClass("custom-logo-link--light");
         logo.css("filter", "invert(100%)");
         hideSearch.hide();
     } else {
         subMenu.addClass(hideClass);
         subMenu.css("position", "absolute");
         logo.css("filter", "");
       }
  })
}
})( jQuery );


/* -----------------------------------------
 Vr Tour Toggle
 ----------------------------------------- */
(function($) {
  var vrButton = $('#vr-button');
  var hideClass = "vr-bg";
  var showClass = "the-tour";

  $("#vr-button").click(function(){
      // Find the iframes within our newly-visible element
      $(".the-tour").find("iframe").prop("src", function(){
        // Set their src attribute to the value of data-src
        return $(this).data("src");
      });
      $(".vr-bg").css("display", "none");
      $(".the-tour").show();
      $("#virtual-tour").css("height","100vh");

  });

})( jQuery );


/* -----------------------------------------
 Hotel Tabs
 ----------------------------------------- */
(function($){

	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})

})( jQuery );

/* -----------------------------------------
 smooth scrolling
 ----------------------------------------- */
(function($){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})( jQuery );

/* -----------------------------------------
 pop up video
 ----------------------------------------- */
(function($) {
  var videoButton = $('.button-video');
  var videoPop = $('.full-video-popup-wrapper');
  var closeVideo = $('.close-full-video');
  var fullVideo = $('.full-video');
  var videoURL = "https://www.youtube.com/embed/WSVHHnEfHpk";

  videoButton.click(function(){
      videoPop.show();
      fullVideo.prop('src',videoURL);
});
closeVideo.click(function(){
    videoPop.hide();
    fullVideo.prop('src',"");

});

})( jQuery );
