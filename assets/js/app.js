!function a(n,t,i){function e(o,s){if(!t[o]){if(!n[o]){var u="function"==typeof require&&require;if(!s&&u)return u(o,!0);if(r)return r(o,!0);throw new Error("Cannot find module '"+o+"'")}var l=t[o]={exports:{}};n[o][0].call(l.exports,function(a){var t=n[o][1][a];return e(t?t:a)},l,l.exports,a,n,t,i)}return t[o].exports}for(var r="function"==typeof require&&require,o=0;o<i.length;o++)e(i[o]);return e}({1:[function(a,n,t){!function(a){"use strict";var n=null;a(window).resize(function(){null!==n&&clearTimeout(n),n=setTimeout(function(){FB.XFBML.parse()},1e3)}),a(function(){for(var n=1,t=5,i=27,e=[],r=0;r<t;r++)e.push(null);a(".animation__single[data-id=1]").addClass("animation__single--active"),e[0]=a(".animation__single[data-id=1]");var i=27;setTimeout(function(){var r=setInterval(function(){e.forEach(function(n,r){if(null!=n){var o=parseInt(a(n).attr("data-id"))+1,s=parseInt(a(n).attr("data-sequence"))+1;a(n).removeClass("animation__single--active"),a(n).removeClass("animation__single--"+a(n).attr("data-sequence")),a(n).addClass("animation__single--"+s),a(n).attr("data-sequence",s),a(".animation__single[data-id="+o+"]").addClass("animation__single--active"),a(n).attr("data-id")==i-14&&t>=a(n).attr("data-sequence")&&(a(".animation__single[data-id=1]").addClass("animation__single--active"),e[r+1]=a(".animation__single[data-id=1]")),e[r]=a(".animation__single[data-id="+o+"]")}}),n==5*i-3&&clearInterval(r),n++},52)},1500)})}(jQuery)},{}]},{},[1]);
//# sourceMappingURL=app.js.map