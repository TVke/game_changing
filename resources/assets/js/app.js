!function(window, undefined){

}(window);

var links = document.querySelectorAll("ul li a");

for(var i=0,ilen=links.length;i<ilen;++i){
	!function(i){
		// links[i].addEventListener('touchstart',function(){
		// 	event.preventDefault();
		// 	links[i].classList.add("hover");
		// });
		links[i].addEventListener('click',function(){
			event.preventDefault();
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function(){
				if(this.readyState === 4 && this.status === 200){

					document.body.innerHTML=xhttp.responseText;
				}
			};
			xhttp.open("GET", links[i].href, true);
			xhttp.send();
		});
	}(i);
}