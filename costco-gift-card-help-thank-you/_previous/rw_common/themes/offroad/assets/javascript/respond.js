!function(e){"use strict";e.matchMedia=e.matchMedia||function(e){var t,n=e.documentElement,a=n.firstElementChild||n.firstChild,s=e.createElement("body"),i=e.createElement("div");return i.id="mq-test-1",i.style.cssText="position:absolute;top:-100em",s.style.background="none",s.appendChild(i),function(e){return i.innerHTML='&shy;<style media="'+e+'"> #mq-test-1 { width: 42px; }</style>',n.insertBefore(s,a),t=42===i.offsetWidth,n.removeChild(s),{matches:t,media:e}}}(e.document)}(this),function(e){"use strict";function t(){E(!0)}var n={};e.respond=n,n.update=function(){};var a=[],s=function(){var t=!1;try{t=new e.XMLHttpRequest}catch(n){t=new e.ActiveXObject("Microsoft.XMLHTTP")}return function(){return t}}(),i=function(e,t){var n=s();n&&(n.open("GET",e,!0),n.onreadystatechange=function(){4!==n.readyState||200!==n.status&&304!==n.status||t(n.responseText)},4!==n.readyState&&n.send(null))};if(n.ajax=i,n.queue=a,n.regex={media:/@media[^\{]+\{([^\{\}]*\{[^\}\{]*\})+/gi,keyframes:/@(?:\-(?:o|moz|webkit)\-)?keyframes[^\{]+\{(?:[^\{\}]*\{[^\}\{]*\})+[^\}]*\}/gi,urls:/(url\()['"]?([^\/\)'"][^:\)'"]+)['"]?(\))/g,findStyles:/@media *([^\{]+)\{([\S\s]+?)$/,only:/(only\s+)?([a-zA-Z]+)\s?/,minw:/\([\s]*min\-width\s*:[\s]*([\s]*[0-9\.]+)(px|em)[\s]*\)/,maxw:/\([\s]*max\-width\s*:[\s]*([\s]*[0-9\.]+)(px|em)[\s]*\)/},n.mediaQueriesSupported=e.matchMedia&&null!==e.matchMedia("only all")&&e.matchMedia("only all").matches,!n.mediaQueriesSupported){var r,o,l,m=e.document,d=m.documentElement,h=[],u=[],c=[],f={},p=30,y=m.getElementsByTagName("head")[0]||d,g=m.getElementsByTagName("base")[0],x=y.getElementsByTagName("link"),v=function(){var e,t=m.createElement("div"),n=m.body,a=d.style.fontSize,s=n&&n.style.fontSize,i=!1;return t.style.cssText="position:absolute;font-size:1em;width:1em",n||(n=i=m.createElement("body"),n.style.background="none"),d.style.fontSize="100%",n.style.fontSize="100%",n.appendChild(t),i&&d.insertBefore(n,d.firstChild),e=t.offsetWidth,i?d.removeChild(n):n.removeChild(t),d.style.fontSize=a,s&&(n.style.fontSize=s),e=l=parseFloat(e)},E=function(t){var n="clientWidth",a=d[n],s="CSS1Compat"===m.compatMode&&a||m.body[n]||a,i={},f=x[x.length-1],g=(new Date).getTime();if(t&&r&&p>g-r)return e.clearTimeout(o),void(o=e.setTimeout(E,p));r=g;for(var w in h)if(h.hasOwnProperty(w)){var S=h[w],T=S.minw,C=S.maxw,b=null===T,z=null===C,M="em";T&&(T=parseFloat(T)*(T.indexOf(M)>-1?l||v():1)),C&&(C=parseFloat(C)*(C.indexOf(M)>-1?l||v():1)),S.hasquery&&(b&&z||!(b||s>=T)||!(z||C>=s))||(i[S.media]||(i[S.media]=[]),i[S.media].push(u[S.rules]))}for(var R in c)c.hasOwnProperty(R)&&c[R]&&c[R].parentNode===y&&y.removeChild(c[R]);c.length=0;for(var O in i)if(i.hasOwnProperty(O)){var k=m.createElement("style"),q=i[O].join("\n");k.type="text/css",k.media=O,y.insertBefore(k,f.nextSibling),k.styleSheet?k.styleSheet.cssText=q:k.appendChild(m.createTextNode(q)),c.push(k)}},w=function(e,t,a){var s=e.replace(n.regex.keyframes,"").match(n.regex.media),i=s&&s.length||0;t=t.substring(0,t.lastIndexOf("/"));var r=function(e){return e.replace(n.regex.urls,"$1"+t+"$2$3")},o=!i&&a;t.length&&(t+="/"),o&&(i=1);for(var l=0;i>l;l++){var m,d,c,f;o?(m=a,u.push(r(e))):(m=s[l].match(n.regex.findStyles)&&RegExp.$1,u.push(RegExp.$2&&r(RegExp.$2))),c=m.split(","),f=c.length;for(var p=0;f>p;p++)d=c[p],h.push({media:d.split("(")[0].match(n.regex.only)&&RegExp.$2||"all",rules:u.length-1,hasquery:d.indexOf("(")>-1,minw:d.match(n.regex.minw)&&parseFloat(RegExp.$1)+(RegExp.$2||""),maxw:d.match(n.regex.maxw)&&parseFloat(RegExp.$1)+(RegExp.$2||"")})}E()},S=function(){if(a.length){var t=a.shift();i(t.href,function(n){w(n,t.href,t.media),f[t.href]=!0,e.setTimeout(function(){S()},0)})}},T=function(){for(var t=0;t<x.length;t++){var n=x[t],s=n.href,i=n.media,r=n.rel&&"stylesheet"===n.rel.toLowerCase();s&&r&&!f[s]&&(n.styleSheet&&n.styleSheet.rawCssText?(w(n.styleSheet.rawCssText,s,i),f[s]=!0):(!/^([a-zA-Z:]*\/\/)/.test(s)&&!g||s.replace(RegExp.$1,"").split("/")[0]===e.location.host)&&("//"===s.substring(0,2)&&(s=e.location.protocol+s),a.push({href:s,media:i})))}S()};T(),n.update=T,n.getEmValue=v,e.addEventListener?e.addEventListener("resize",t,!1):e.attachEvent&&e.attachEvent("onresize",t)}}(this);