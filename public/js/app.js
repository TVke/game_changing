function play(e){function n(){c||(l>0?(--l,o.innerHTML=l):0===l&&(clearInterval(r),u.classList.add("show"),f.addEventListener("click",function(){i(s(120,60)),u.classList.remove("show")})))}function t(){r=setInterval(n,1e3)}function a(e,n){m.getElementsByTagName("h2")[0].innerHTML=e,m.getElementsByTagName("p")[0].innerHTML=n}function s(e,n){return Math.floor(Math.random()*(n-e)+1)+e}function i(e){l=e,o.innerHTML=e,t()}var r,o=document.getElementById("countDown"),l=parseInt(o.dataset.max),c=!1,d=document.getElementById("pause"),u=document.getElementsByClassName("card")[0],m=document.getElementsByTagName("dialog")[0],f=document.getElementById("read");t(),function(){var n=new XMLHttpRequest;n.onreadystatechange=function(){if(4===this.readyState&&200===this.status){var e=n.responseText?JSON.parse(n.responseText):null;e&&a(e.title,e.description)}},n.open("GET","/new/card/"+e,!0),n.send()}(),d.addEventListener("click",function(){event.preventDefault(),d.innerHTML=c?"pauze":"speel verder",c=!c})}window;for(var links=document.querySelectorAll("ul li a"),i=0,ilen=links.length;i<ilen;++i)!function(e){links[e].addEventListener("click",function(){event.preventDefault();var n=new XMLHttpRequest;n.onreadystatechange=function(){4===this.readyState&&200===this.status&&(document.body.innerHTML=n.responseText,play(n.responseURL.substr(window.location.href.length+5)))},n.open("GET",links[e].href,!0),n.send()})}(i);