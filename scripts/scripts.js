//Select all links with hashes
$('a[href*="#"]')
  //Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // on-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hotname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      //Does a scroll target exist?
      if (target.length) {
        //Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          //Callback after animation
          //Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { //checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); //adding tabindex for elements not focused
            $target.focus(); //set focus again
          };
        });
      }
    }
  });
