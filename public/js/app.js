function play(e){function n(){r||(i>0?(--i,s.innerHTML=i):0===i&&(clearInterval(a),o.classList.add("show")))}function t(e,n){c.getElementsByTagName("h2")[0].innerHTML=e,c.getElementsByTagName("p")[0].innerHTML=n}var a,s=document.getElementById("countDown"),i=parseInt(s.dataset.max),r=!1,l=document.getElementsByTagName("button")[0],o=document.getElementsByClassName("card")[0],c=document.getElementsByTagName("dialog")[0];a=setInterval(n,1e3),function(){var n=new XMLHttpRequest;n.onreadystatechange=function(){if(4===this.readyState&&200===this.status){var e=n.responseText?JSON.parse(n.responseText):null;e&&t(e.title,e.discription)}},n.open("GET","/new/card/"+e,!0),n.send()}(),l.addEventListener("click",function(){event.preventDefault(),l.innerHTML=r?"pauze":"speel verder",r=!r})}window;for(var links=document.querySelectorAll("ul li a"),i=0,ilen=links.length;i<ilen;++i)!function(e){links[e].addEventListener("click",function(){event.preventDefault();var n=new XMLHttpRequest;n.onreadystatechange=function(){4===this.readyState&&200===this.status&&(document.body.innerHTML=n.responseText,play(n.responseURL.substr(window.location.href.length+5)))},n.open("GET",links[e].href,!0),n.send()})}(i);