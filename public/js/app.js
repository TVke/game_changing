!function(e,t){function n(e){function t(){d||(c>0?(--c,i.innerHTML=c):0===c&&(clearInterval(o),l.classList.add("show"),m.addEventListener("click",function(){r(s(120,60)),l.classList.remove("show")})))}function n(){o=setInterval(t,1e3)}function a(e,t){f.getElementsByTagName("h2")[0].innerHTML=e,f.getElementsByTagName("p")[0].innerHTML=t}function s(e,t){return Math.floor(Math.random()*(t-e)+1)+e}function r(e){c=e,i.innerHTML=e,n()}var o,i=document.getElementById("countDown"),c=parseInt(i.dataset.max),d=!1,u=document.getElementById("pause"),l=document.getElementsByClassName("card")[0],f=document.getElementsByTagName("dialog")[0],m=document.getElementById("read");n(),function(){var t=new XMLHttpRequest;t.onreadystatechange=function(){if(4===this.readyState&&200===this.status){var e=t.responseText?JSON.parse(t.responseText):null;e&&a(e.title,e.description)}},t.open("GET","/new/card/"+e,!0),t.send()}(),u.addEventListener("click",function(e){e.preventDefault(),u.innerHTML=d?"pauze":"speel verder",d=!d})}for(var a=document.querySelectorAll("ul li a"),s=0,r=a.length;s<r;++s)!function(t){a[t].addEventListener("click",function(s){s.preventDefault();var r=new XMLHttpRequest;r.onreadystatechange=function(){4===this.readyState&&200===this.status&&(document.body.innerHTML=r.responseText,n(a[t].dataset.href.substr(e.location.href.length+5)))},r.open("GET",a[t].dataset.href,!0),r.send()})}(s)}(window);