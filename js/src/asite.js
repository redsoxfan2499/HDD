jQuery(document).ready(function () {
    jQuery(document).scroll(function () {
        var $nav = jQuery(".navbar");
        $nav.toggleClass('scrolled', jQuery(this).scrollTop() > $nav.height());
      });
}); 