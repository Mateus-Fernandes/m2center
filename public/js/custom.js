!function(e){var t={};function n(r){if(t[r])return t[r].exports;var o=t[r]={i:r,l:!1,exports:{}};return e[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)n.d(r,o,function(t){return e[t]}.bind(null,o));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="/",n(n.s=69)}({20:function(e,t,n){var r;!function(o,i){"use strict";var a="file:"===o.location.protocol,s=i.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure","1.1");var u=Array.prototype.forEach||function(e,t){if(null==this||"function"!=typeof e)throw new TypeError;var n,r=this.length>>>0;for(n=0;n<r;++n)n in this&&e.call(t,this[n],n,this)},l={},c=0,f=[],d=[],p={},m=function(e){return e.cloneNode(!0)},v=function(e,t){d[e]=d[e]||[],d[e].push(t)},g=function(e,t){if(void 0!==l[e])l[e]instanceof SVGSVGElement?t(m(l[e])):v(e,t);else{if(!o.XMLHttpRequest)return t("Browser does not support XMLHttpRequest"),!1;l[e]={},v(e,t);var n=new XMLHttpRequest;n.onreadystatechange=function(){if(4===n.readyState){if(404===n.status||null===n.responseXML)return t("Unable to load SVG file: "+e),a&&t("Note: SVG injection ajax calls do not work locally without adjusting security setting in your browser. Or consider using a local webserver."),t(),!1;if(!(200===n.status||a&&0===n.status))return t("There was a problem injecting the SVG: "+n.status+" "+n.statusText),!1;if(n.responseXML instanceof Document)l[e]=n.responseXML.documentElement;else if(DOMParser&&DOMParser instanceof Function){var r;try{r=(new DOMParser).parseFromString(n.responseText,"text/xml")}catch(e){r=void 0}if(!r||r.getElementsByTagName("parsererror").length)return t("Unable to parse SVG file: "+e),!1;l[e]=r.documentElement}!function(e){for(var t=0,n=d[e].length;t<n;t++)!function(t){setTimeout(function(){d[e][t](m(l[e]))},0)}(t)}(e)}},n.open("GET",e),n.overrideMimeType&&n.overrideMimeType("text/xml"),n.send()}},h=function(e,t,n,r){var i=e.getAttribute("data-src")||e.getAttribute("src");if(/\.svg/i.test(i))if(s)-1===f.indexOf(e)&&(f.push(e),e.setAttribute("src",""),g(i,function(n){if(void 0===n||"string"==typeof n)return r(n),!1;var a=e.getAttribute("id");a&&n.setAttribute("id",a);var s=e.getAttribute("title");s&&n.setAttribute("title",s);var l=[].concat(n.getAttribute("class")||[],"injected-svg",e.getAttribute("class")||[]).join(" ");n.setAttribute("class",function(e){for(var t={},n=(e=e.split(" ")).length,r=[];n--;)t.hasOwnProperty(e[n])||(t[e[n]]=1,r.unshift(e[n]));return r.join(" ")}(l));var d=e.getAttribute("style");d&&n.setAttribute("style",d);var m=[].filter.call(e.attributes,function(e){return/^data-\w[\w\-]*$/.test(e.name)});u.call(m,function(e){e.name&&e.value&&n.setAttribute(e.name,e.value)});var v,g,h,b,y,S={clipPath:["clip-path"],"color-profile":["color-profile"],cursor:["cursor"],filter:["filter"],linearGradient:["fill","stroke"],marker:["marker","marker-start","marker-mid","marker-end"],mask:["mask"],pattern:["fill","stroke"],radialGradient:["fill","stroke"]};Object.keys(S).forEach(function(e){v=e,h=S[e];for(var t=0,r=(g=n.querySelectorAll("defs "+v+"[id]")).length;t<r;t++){var o;b=g[t].id,y=b+"-"+c,u.call(h,function(e){for(var t=0,r=(o=n.querySelectorAll("["+e+'*="'+b+'"]')).length;t<r;t++)o[t].setAttribute(e,"url(#"+y+")")}),g[t].id=y}}),n.removeAttribute("xmlns:a");for(var w,A,x=n.querySelectorAll("script"),O=[],k=0,j=x.length;k<j;k++)(A=x[k].getAttribute("type"))&&"application/ecmascript"!==A&&"application/javascript"!==A||(w=x[k].innerText||x[k].textContent,O.push(w),n.removeChild(x[k]));if(O.length>0&&("always"===t||"once"===t&&!p[i])){for(var E=0,M=O.length;E<M;E++)new Function(O[E])(o);p[i]=!0}var T=n.querySelectorAll("style");u.call(T,function(e){e.textContent+=""}),e.parentNode.replaceChild(n,e),delete f[f.indexOf(e)],e=null,c++,r(n)}));else{var a=e.getAttribute("data-fallback")||e.getAttribute("data-png");a?(e.setAttribute("src",a),r(null)):n?(e.setAttribute("src",n+"/"+i.split("/").pop().replace(".svg",".png")),r(null)):r("This browser does not support SVG and no PNG fallback was defined.")}else r("Attempted to inject a file with a non-svg extension: "+i)},b=function(e,t,n){var r=(t=t||{}).evalScripts||"always",o=t.pngFallback||!1,i=t.each;if(void 0!==e.length){var a=0;u.call(e,function(t){h(t,r,o,function(t){i&&"function"==typeof i&&i(t),n&&e.length===++a&&n(a)})})}else e?h(e,r,o,function(t){i&&"function"==typeof i&&i(t),n&&n(1),e=null}):n&&n(0)};"object"==typeof e.exports?e.exports=t=b:void 0===(r=function(){return b}.call(t,n,t,e))||(e.exports=r)}(window,document)},69:function(e,t,n){e.exports=n(70)},70:function(e,t,n){"use strict";n.r(t);var r=n(20),o=n.n(r),i=document.querySelectorAll(".injetar");o()(i),window.onbeforeunload=function(){window.scrollTo(0,0)},window.onload=function(){AOS.init(),document.addEventListener("aos:in:super-duper",function(){});var e=document.querySelectorAll(".botaoNovo");function t(e,t){anime.remove("rect"),anime({targets:"rect",width:e,easing:"easeInOutSine",endDelay:1e3,duration:t}).finished}function n(){t(300,2e3)}function r(){t(3,50)}for(var o=0;o<e.length;o++)e[o].addEventListener("mouseenter",n,!1),e[o].addEventListener("mouseleave",r,!1);var i=null,a=document.querySelector("#nome"),s=document.querySelector("#email"),u=document.querySelector("#telefone");a.addEventListener("focus",function(e){i&&i.pause(),i=anime({targets:"#form",strokeDashoffset:[anime.setDashoffset,0],easing:"easeInOutSine",duration:1500,direction:"alternate",loop:!1})}),s.addEventListener("focus",function(e){i&&i.pause(),i=anime({targets:"#form2",strokeDashoffset:[anime.setDashoffset,0],easing:"easeInOutSine",duration:1500,direction:"alternate",loop:!1})}),u.addEventListener("focus",function(e){i&&i.pause(),i=anime({targets:"#form3",strokeDashoffset:[anime.setDashoffset,0],easing:"easeInOutSine",duration:1500,direction:"alternate",loop:!1})}),mensagem.addEventListener("focus",function(e){i&&i.pause(),i=anime({targets:"#form4",strokeDashoffset:[anime.setDashoffset,0],easing:"easeInOutSine",duration:1500,direction:"alternate",loop:!1})}),anime({targets:".caixas",backgroundSize:"100%",easing:"easeInOutSine",duration:1e4,direction:"alternate",loop:!0}).finished}}});