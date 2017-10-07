!function(window, undefined){

}(window);

var links = document.querySelectorAll("ul li a");

for(var i=0,ilen=links.length;i<ilen;++i){
	!function(i){
		links[i].addEventListener('click',function(){
			event.preventDefault();
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function(){
				if(this.readyState === 4 && this.status === 200){
					document.body.innerHTML=xhttp.responseText;
					play();
				}};
			xhttp.open("GET", links[i].href, true);
			xhttp.send();
		});
	}(i);
}
function play(){
	var countDown = document.getElementById("countDown"),
		currentTime = countDown.dataset.max,
		paused = false,
		pauseButton = document.getElementsByTagName("button")[0],
		card = document.getElementsByTagName("dialog")[0],

		timer = setInterval(lower,1000);

	pauseButton.addEventListener("click",function(){
		event.preventDefault();
		pauseButton.innerHTML = (!paused)?"speel verder":"pauze";
		paused = (!paused);

	});

	function lower(){
		if(!paused){
			if(currentTime>0){
				--currentTime;
				countDown.innerHTML = currentTime;
			}else if(currentTime=0){
				clearInterval(timer);
				document.body.classList.add("show");
			}
		}
	}

}

