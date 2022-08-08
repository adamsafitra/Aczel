function LazyAqil() {
  for (var e = document.getElementsByClassName("lazy"), t = 0; t < e.length; t++) {
    return isInViewport(e[t]) && (e[t].src = e[t].getAttribute("data-src"));
  }
}

function isInViewport(e) {
  var t = e.getBoundingClientRect();
  return t.bottom >= 0 && t.right >= 0 && t.top <= (window.innerHeight || document.documentElement.clientHeight) && t.left <= (window.innerWidth || document.documentElement.clientWidth);
}

function registerListener(e, t) {
  return window.addEventListener ? window.addEventListener(e, t) : window.attachEvent("on"+e, t)
}

registerListener("load", LazyAqil);
registerListener("scroll", LazyAqil)'
document.addEventListener("DOMContentLoaded", function() {
  "use strict";
  
  for (
    var e = document.querySelectorAll("a"),
    t = e.length,
    n = /firefox|trident/i.test(navigator.userAgent) ? document.documentElement : document.body,
    i = function(e, t, n, i) {
      return(e /= i / 2) < 1 ? n / 2 * e * e * e + t : n / 2 * ((e-=2) * e * e + 2) + t;
    };
    t--;
  ) {
    e.item(t).addEventListener("click", function(e) {
      var t;
      var o = n.scrollTop;
      var r = document.getElementById(/[^#]+$/.exec(this.href)[0]).getBoundingClientRect().top;
      var d = n.scrollHeight - window.innerHeight;
      var a = d > o + r ? r : d - o;
      var c = 900;
      var s = function(e) {
        t = t || e;
        var r = e - t, d = i(r, o, a, c);
        n.scrollTop = d, c > r && requestAnimationFrame(s)
      };

      requestAnimationFrame(s), e.preventDefault()
	});
  }
});
