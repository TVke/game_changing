!function(e,t){function n(e,t){t.classList.contains(e)||t.classList.add(e)}function a(e,t){t.classList.contains(e)&&t.classList.remove(e)}function i(e){function n(){if(!p)if(g>0)g-=1,l.innerHTML=g;else if(0===g&&(E.classList.add("show"),!v)){var e=d.play();e!==t&&e.catch(function(e){}).then(function(){})}}function a(){var t=new XMLHttpRequest;t.onreadystatechange=function(){if(4===this.readyState&&200===this.status){var e=t.responseText?JSON.parse(t.responseText):null;e&&i(e.categorie.name,e.title,e.description,e.image)}},t.open("GET","/new/card/"+e,!0),t.send()}function i(e,t,n,a){y.className="var-"+e,y.getElementsByTagName("h2")[0].innerHTML=t,y.getElementsByTagName("figcaption")[0].innerHTML=n,null!==a&&(y.getElementsByTagName("img")[0].src="/img/"+a,y.getElementsByTagName("img")[0].alt=t)}function s(e,t){return Math.floor(Math.random()*(t-e)+1)+e}function o(e){e.pause(),e.currentTime=0}function r(){clearInterval(u),u=0,u=setInterval(n,1e3)}function c(e){g=e,l.innerHTML=g,r()}var d,u,l=document.getElementById("countDown"),m=parseInt(l.dataset.min),f=parseInt(l.dataset.max),g=parseInt(l.innerHTML),p=!1,v=!1,h=!1,L=document.getElementById("start"),E=document.getElementsByClassName("card")[0],y=document.getElementsByTagName("dialog")[0],T=document.getElementById("read"),B=document.getElementById("mute"),w=B.children[0];(d=document.createElement("audio")).setAttribute("src","/audio/notification - 10.mp3"),d.id="notification",d.preload="auto",d.addEventListener("ended",function(e){e.preventDefault(),o(d)}),document.body.appendChild(d),L.addEventListener("click",function(e){e.preventDefault(),h?(L.innerHTML=p?"pipipauze":"speel verder",p=!p):(r(),L.innerHTML="pipipauze"),h=!0}),T.addEventListener("click",function(){c(s(m,f)),E.classList.remove("show"),o(d)}),B.addEventListener("click",function(){v=!v,w.src=v?"/img/audio-uit.svg":"/img/audio-aan.svg",w.alt=v?"geluid uit":"geluid aan"}),E.addEventListener("transitionend",function(e){e.target.classList.contains("card")&&!e.target.classList.contains("show")&&a()})}var s=document.querySelectorAll("ul li a"),o=document.getElementById("nextPage"),r=document.getElementById("oldPage"),c=document.getElementById("overlay");c&&c.addEventListener("click",function(e){e.preventDefault(),n("hide",this)});for(var d=0,u=s.length;d<u;++d)!function(t){s[t].addEventListener("click",function(c){c.preventDefault();var d=new XMLHttpRequest;d.onreadystatechange=function(){4===this.readyState&&200===this.status&&(o.innerHTML=d.responseText,o.removeAttribute("class"),n("show",r),o.addEventListener("transitionend",function(e){"transform"===e.propertyName&&(a("show",r),n("hide",r),n("show",o))}),i(s[t].dataset.href.substr(e.location.href.length+1)))},d.open("GET",s[t].dataset.href,!0),d.send()})}(d)}(window);