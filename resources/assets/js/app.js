!function(window, undefined){
// list of all games
	var links = document.querySelectorAll("ul li a");
// EventListener for every game
	for(var i=0,ilen=links.length;i<ilen;++i){
		!function(i){
			links[i].addEventListener('click',function(e){
				e.preventDefault();
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function(){
					if(this.readyState === 4 && this.status === 200){
						// class switching for css transition
						var next = document.getElementById("nextPage"),old = document.getElementById("oldPage");
						next.innerHTML = xhttp.responseText;
						addClass("show",old);
						setTimeout(function(){
							addClass("hide",old);
						},500);
						next.removeAttribute("class");
						// load clicked game
						LoadGame(links[i].dataset.href.substr(window.location.href.length+5));
					}};
				xhttp.open("GET", links[i].dataset.href, true);
				xhttp.send();
			});
		}(i);
	}

	if(document.getElementById("overlay")){
		document.getElementById("overlay").addEventListener("click",function(e){
			e.preventDefault();
			this.classList.add("hide");
		});
	}

	function addClass(className,to){
		to.classList.add(className);
	}

	// load Game
	function LoadGame(game){
		var countDown = document.getElementById("countDown"),
			min = parseInt(countDown.dataset.min),
			max = parseInt(countDown.dataset.max),
			time = parseInt(countDown.innerHTML),
			pausedTimer = false,
			wonButton = document.getElementById("won"),
			pauseButton = document.getElementById("pause"),
			card = document.getElementsByClassName("card")[0],
			cardContent = document.getElementsByTagName("dialog")[0],
			readButton = document.getElementById("read"),
			winField = document.getElementById("win"),
			notification, timer;

		startTimer();

		notification = document.createElement("audio");
		notification.setAttribute('src',"/audio/notification - 10.mp3");
		notification.id = "notification";
		notification.preload = "auto";
		notification.addEventListener("ended",function(e){
			e.preventDefault();
			resetAudio(notification);
		});
		document.body.appendChild(notification);
		wonButton.addEventListener("click",function(e){
			e.preventDefault();
			pausedTimer = true;
			addClass("win",winField);
		});
		pauseButton.addEventListener("click",function(e){
			e.preventDefault();
			pauseButton.innerHTML = (!pausedTimer)?"speel verder":"pipi pauze";
			pausedTimer = (!pausedTimer);
		});
		readButton.addEventListener("click",function(){
			addnextTime(getRandomNumbreBetween(min, max));
			card.classList.remove("show");
			resetAudio(notification);
		});

		function lower(){
			if(!pausedTimer){
				if(time>0){
					time -= 1;
				}else if(time === 0){
					card.classList.add("show");
					var promise = notification.play();
					if (promise !== undefined){promise.catch(function(e){}).then(function(){});}
				}
			}
		}

		function fetchNewCard(){
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function(){
				if(this.readyState === 4 && this.status === 200){
					var response = (xhttp.responseText)?JSON.parse(xhttp.responseText):null;
					if (response){
						fillCard(response.categorie.name,response.title,response.description,response.image);
					}
				}};
			xhttp.open("GET", "/new/card/" + game, true);
			xhttp.send();
		}

		function fillCard(category,title,description,image){
			cardContent.className = "var-"+category;
			cardContent.getElementsByTagName("h2")[0].innerHTML = title;
			cardContent.getElementsByTagName("figcaption")[0].innerHTML = description;
			cardContent.getElementsByTagName("img")[0].alt = title;
			if(image !== null){
				cardContent.getElementsByTagName("img")[0].src = "/img/"+image;
			}
		}

		function getRandomNumbreBetween(min, max){
			return Math.floor(Math.random() * (max - min) + 1) + min;
		}

		function resetAudio(audioElement){
			audioElement.pause();
			audioElement.currentTime = 0;
		}

		function startTimer(){
			clearInterval(timer);
			timer = 0;
			timer = setInterval(lower,1000);
			setTimeout(fetchNewCard,500);
		}

		function addnextTime(seconds){
			time = seconds;
			startTimer();
		}
	}
}(window);