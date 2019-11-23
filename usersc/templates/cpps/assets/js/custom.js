// $(document).scroll(function () {
//   var $nav = $(".fixed-top");
//   $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
// });

function sectionScrollToAnchor(aid) {
  var aTag = $("section[id='"+ aid +"']");
  $('html,body').animate({scrollTop: aTag.offset().top},'slow');
}
//Main Page button scroll
$("#about_link").click(function() {
   sectionScrollToAnchor('aboutus');
});

$("#video_link").click(function() {
   sectionScrollToAnchor('videos');
});

$("#elearning_link").click(function() {
   sectionScrollToAnchor('elearnings');
});

//Safe Passage button scroll
$("#sp_link").click(function() {
   sectionScrollToAnchor('sp');
});



function divScrollToAnchor(aid) {
  var aTag = $("div[id='"+ aid +"']");
  $('html,body').animate({scrollTop: aTag.offset().top},'slow');
}
// Beyond Lockdown button scroll
$("#sks_link").click(function() {
   divScrollToAnchor('sks');
});

$("#blabout_link").click(function() {
   divScrollToAnchor('about');
});

$("#courses_link").click(function() {
   divScrollToAnchor('courses');
});


// To top button
$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 850) {
        $('#to-top').fadeIn();
    } else {
        $('#to-top').fadeOut();
    }
});
$(document).ready(function() {
    $("#to-top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});
