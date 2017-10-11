!function(window, undefined){

	var links = document.querySelectorAll("ul li a");

	for(var i=0,ilen=links.length;i<ilen;++i){
		!function(i){
			links[i].addEventListener('click',function(e){
				e.preventDefault();
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function(){
					if(this.readyState === 4 && this.status === 200){
						document.body.innerHTML=xhttp.responseText;
						play(links[i].dataset.href.substr(window.location.href.length+5));
					}};
				xhttp.open("GET", links[i].dataset.href, true);
				xhttp.send();
			});
		}(i);
	}
	function play(game){
		var countDown = document.getElementById("countDown"),
			currentTime = parseInt(countDown.dataset.max),
			paused = false,
			pauseButton = document.getElementById("pause"),
			card = document.getElementsByClassName("card")[0],
			cardContent = document.getElementsByTagName("dialog")[0],
			readButton = document.getElementById("read"),
			timer;

		startTimer();
		fetchNewCard();

		pauseButton.addEventListener("click",function(e){
			e.preventDefault();
			pauseButton.innerHTML = (!paused)?"speel verder":"pauze";
			paused = (!paused);
		});

		function lower(){
			if(!paused){
				if(currentTime>0){
					--currentTime;
					countDown.innerHTML = currentTime;
				}else if(currentTime === 0){
					clearInterval(timer);
					card.classList.add("show");
					readButton.addEventListener("click",function(){
						addnextTime(getRandomNumbreBetween(30, 60));
						card.classList.remove("show");
					});
				}
			}
		}
		function startTimer(){
			timer = setInterval(lower,1000);
		}

		function fetchNewCard(){
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function(){
				if(this.readyState === 4 && this.status === 200){
					var response = (xhttp.responseText)?JSON.parse(xhttp.responseText):null;
					if (response){
						fillCard(response.title,response.description);
					}
				}};
			xhttp.open("GET", "/new/card/" + game, true);
			xhttp.send();
		}

		function fillCard(title,description){
			cardContent.getElementsByTagName("h2")[0].innerHTML = title;
			cardContent.getElementsByTagName("p")[0].innerHTML = description;
		}

		function getRandomNumbreBetween(min, max){
			return Math.floor(Math.random() * (max - min) + 1) + min;
		}

		function addnextTime(seconds){
			currentTime = seconds;
			countDown.innerHTML = seconds;
			startTimer();
			fetchNewCard();
		}
	}

}(window);