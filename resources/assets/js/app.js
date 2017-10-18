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
			min = parseInt(countDown.dataset.min),
			max = parseInt(countDown.dataset.max),
			currentTime = parseInt(countDown.innerHTML),
			paused = false,
			pauseButton = document.getElementById("pause"),
			card = document.getElementsByClassName("card")[0],
			cardContent = document.getElementsByTagName("dialog")[0],
			readButton = document.getElementById("read"),
			timer;

		startTimer();

		pauseButton.addEventListener("click",function(e){
			e.preventDefault();
			pauseButton.innerHTML = (!paused)?"speel verder":"pipi pauze";
			paused = (!paused);
		});

		function lower(){
			if(!paused){
				if(currentTime>0){
					currentTime -= 1;
					countDown.innerHTML = currentTime;
				}else if(currentTime === 0){

					card.classList.add("show");
					readButton.addEventListener("click",function(){
						addnextTime(getRandomNumbreBetween(min, max));
						card.classList.remove("show");
					});
				}
			}
		}
		function startTimer(){
			clearInterval(timer);
			timer = 0;
			timer = setInterval(lower,1000);
			fetchNewCard();
		}

		function fetchNewCard(){
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function(){
				if(this.readyState === 4 && this.status === 200){
					var response = (xhttp.responseText)?JSON.parse(xhttp.responseText):null;
					if (response){
						console.log(response);
						fillCard(response.categorie.categorie,response.title,response.description);
					}
				}};
			xhttp.open("GET", "/new/card/" + game, true);
			xhttp.send();
		}

		function fillCard(categorie,title,description){
			cardContent.className = "var-"+categorie;
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
		}
	}

}(window);