
//Initialize animation
  AOS.init();

//initialze dynamic navbar color
  $(window).scroll(function(){
    $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
  });

// Add highlight to navigation menu for current page
  $(function(){
    // this will get the full URL at the address bar
    var url = window.location.href;
    // passes on every "a" tag

    $("#nav-menu a").each(function(){
      // checks if its the same on the address bar
      if (url == (this.href)) {
        $(this).closest("li").addClass("active");
        //for making parent of submenu active
        $(this).closest("li").parent().parent().addClass("active");
      }
    });
  });

  window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));
