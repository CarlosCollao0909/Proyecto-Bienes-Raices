document.addEventListener("DOMContentLoaded",(()=>{eventListeners(),darkMode()}));const darkMode=()=>{const e=window.matchMedia("(prefers-color-scheme: dark)");e.matches?document.body.classList.add("dark-mode"):document.body.classList.remove("dark-mode"),e.addEventListener("change",(()=>{e.matches?document.body.classList.add("dark-mode"):document.body.classList.remove("dark-mode")}));document.querySelector(".dark-mode-boton").addEventListener("click",(()=>{document.body.classList.toggle("dark-mode")}))},eventListeners=()=>{document.querySelector(".mobile-menu").addEventListener("click",navegacionResponsive);document.querySelectorAll('input[name="contacto[contacto]"]').forEach((e=>e.addEventListener("click",mostrarOcultarCampos)))},navegacionResponsive=()=>{document.querySelector(".navegacion").classList.toggle("mostrar")},mostrarOcultarCampos=e=>{const n=document.querySelector("#contacto");"telefono"===e.target.value?n.innerHTML='\n            <input type="tel" id="telefono" placeholder="Tu Teléfono" name="contacto[telefono]">\n\n            <p>Elija la fecha y la hora para ser contactado</p>\n            <label for="fecha">Fecha:</label>\n            <input type="date" id="fecha" name="contacto[fecha]" min="2025-01-01" max="2025-12-31">\n            <label for="hora">Hora:</label>\n            <input type="time" id="hora" name="contacto[hora]" min="09:00" max="18:00">\n        ':n.innerHTML='\n            <input type="email" id="email" placeholder="Tu E-mail" name="contacto[email]">\n        '};!function(e,n){function o(e,n){return typeof e===n}function a(e){var n=c.className,o=r._config.classPrefix||"";if(d&&(n=n.baseVal),r._config.enableJSClass){var a=new RegExp("(^|\\s)"+o+"no-js(\\s|$)");n=n.replace(a,"$1"+o+"js$2")}r._config.enableClasses&&(n+=" "+o+e.join(" "+o),d?c.className.baseVal=n:c.className=n)}function t(e,n){if("object"==typeof e)for(var o in e)l(e,o)&&t(o,e[o]);else{var A=(e=e.toLowerCase()).split("."),i=r[A[0]];if(2==A.length&&(i=i[A[1]]),void 0!==i)return r;n="function"==typeof n?n():n,1==A.length?r[A[0]]=n:(!r[A[0]]||r[A[0]]instanceof Boolean||(r[A[0]]=new Boolean(r[A[0]])),r[A[0]][A[1]]=n),a([(n&&0!=n?"":"no-")+A.join("-")]),r._trigger(e,n)}return r}var A=[],i=[],s={_version:"3.6.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var o=this;setTimeout((function(){n(o[e])}),0)},addTest:function(e,n,o){i.push({name:e,fn:n,options:o})},addAsyncTest:function(e){i.push({name:null,fn:e})}},r=function(){};r.prototype=s,r=new r;var l,c=n.documentElement,d="svg"===c.nodeName.toLowerCase();!function(){var e={}.hasOwnProperty;l=o(e,"undefined")||o(e.call,"undefined")?function(e,n){return n in e&&o(e.constructor.prototype[n],"undefined")}:function(n,o){return e.call(n,o)}}(),s._l={},s.on=function(e,n){this._l[e]||(this._l[e]=[]),this._l[e].push(n),r.hasOwnProperty(e)&&setTimeout((function(){r._trigger(e,r[e])}),0)},s._trigger=function(e,n){if(this._l[e]){var o=this._l[e];setTimeout((function(){var e;for(e=0;e<o.length;e++)(0,o[e])(n)}),0),delete this._l[e]}},r._q.push((function(){s.addTest=t})),r.addAsyncTest((function(){function e(e,n,o){function a(n){var a=!(!n||"load"!==n.type)&&1==A.width;t(e,"webp"===e&&a?new Boolean(a):a),o&&o(n)}var A=new Image;A.onerror=a,A.onload=a,A.src=n}var n=[{uri:"data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=",name:"webp"},{uri:"data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==",name:"webp.alpha"},{uri:"data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA",name:"webp.animation"},{uri:"data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=",name:"webp.lossless"}],o=n.shift();e(o.name,o.uri,(function(o){if(o&&"load"===o.type)for(var a=0;a<n.length;a++)e(n[a].name,n[a].uri)}))})),function(){var e,n,a,t,s,l;for(var c in i)if(i.hasOwnProperty(c)){if(e=[],(n=i[c]).name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(a=0;a<n.options.aliases.length;a++)e.push(n.options.aliases[a].toLowerCase());for(t=o(n.fn,"function")?n.fn():n.fn,s=0;s<e.length;s++)1===(l=e[s].split(".")).length?r[l[0]]=t:(!r[l[0]]||r[l[0]]instanceof Boolean||(r[l[0]]=new Boolean(r[l[0]])),r[l[0]][l[1]]=t),A.push((t?"":"no-")+l.join("-"))}}(),a(A),delete s.addTest,delete s.addAsyncTest;for(var u=0;u<r._q.length;u++)r._q[u]();e.Modernizr=r}(window,document);//# sourceMappingURL=bundle.js.map
