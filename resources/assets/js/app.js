!function(window, undefined){

		// list of all games
	var links = document.querySelectorAll("ul li a"),
		// transition pages
		next = document.getElementById("nextPage"),old = document.getElementById("oldPage"),
		// intro overlay
		overlay = document.getElementById("overlay");

	// click event intro overlay
	if(overlay){
		overlay.addEventListener("click",function(e){
			e.preventDefault();
			addClass("hide",this);
		});
	}

	// EventListener for every game
	for(var i=0,ilen=links.length;i<ilen;++i){
		!function(i){
			links[i].addEventListener('click',function(e){
				e.preventDefault();
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function(){
					if(this.readyState === 4 && this.status === 200){

						// class switching before css transition
						next.innerHTML = xhttp.responseText;
						next.removeAttribute("class");
						addClass("show",old);

						// class switching after css transition
						next.addEventListener("transitionend",function(e){
							if(e.propertyName === "transform"){
								removeClass("show",old);
								addClass("hide",old);
								addClass("show",next);
							}
						});

						// load the game enclosure and pass clicked game
						LoadGame(links[i].dataset.href.substr(window.location.href.length+1));
					}};
				xhttp.open("GET", links[i].dataset.href, true);
				xhttp.send();
			});
		}(i);
	}

	function addClass(className,to){ // adds a given class to a given element
		(!to.classList.contains(className))? to.classList.add(className): null;
	}
	function removeClass(className,from){ // removes a given class from a given element
		(from.classList.contains(className))? from.classList.remove(className): null;
	}


	// Game enclosure
	function LoadGame(game){ // loads the given game
		var countDown = document.getElementById("countDown"),
			min = parseInt(countDown.dataset.min),
			max = parseInt(countDown.dataset.max),
			time = parseInt(countDown.innerHTML),
			pausedTimer = false,
			mute = false,
			notFirstClick = false,
			// wonButton = document.getElementById("won"),
			startButton = document.getElementById("start"),
			card = document.getElementsByClassName("card")[0],
			cardContent = document.getElementsByTagName("dialog")[0],
			readButton = document.getElementById("read"),
			audioButton = document.getElementById("mute"),
			audioImage = audioButton.children[0],
			// winField = document.getElementById("win"),
			notification, timer;

		// notification sound setup
		notification = document.createElement("audio");
		notification.setAttribute('src',"/audio/notification - 10.mp3");
		notification.id = "notification";
		notification.preload = "auto";
		notification.addEventListener("ended",function(e){
			e.preventDefault();
			resetAudio(notification);
		});
		document.body.appendChild(notification);

		//start button setup
		startButton.addEventListener("click",function(e){
			e.preventDefault();
			if(notFirstClick){
				startButton.innerHTML = (!pausedTimer)?"speel verder":"pipipauze";
				pausedTimer = (!pausedTimer);
			}else{
				startTimer();
				startButton.innerHTML = "pipipauze";
			}
			notFirstClick=true;
		});
		//win button setup
		// wonButton.addEventListener("click",function(e){
		// 	e.preventDefault();
		// 	pausedTimer = true;
		// 	addClass("win",winField);
		// });
		//read button setup
		readButton.addEventListener("click",function(){
			addnextTime(getRandomNumbreBetween(min, max));
			card.classList.remove("show");
			resetAudio(notification);
		});
		//mute button setup
		audioButton.addEventListener("click",function(){
			mute = (!mute);
			audioImage.src = (mute)?"/img/audio-uit.svg":"/img/audio-aan.svg";
			audioImage.alt = (mute)?"geluid uit":"geluid aan";
		});

		// only after card is hidden then fetch new card data
		card.addEventListener("transitionend",function(e){
			if(e.target.classList.contains("card") && !e.target.classList.contains("show")){
				fetchNewCard();
			}
		});

		function lower(){ // lowers time and triggers showing of the card
			if(!pausedTimer){
				if(time>0){
					time -= 1;
					countDown.innerHTML = time;
				}else if(time === 0){
					card.classList.add("show");
					if(!mute){
						var promise = notification.play();
						if (promise !== undefined){promise.catch(function(e){}).then(function(){});}
					}
				}
			}
		}

		function fetchNewCard(){ // fetches new card data and fills the hidden card
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

		function fillCard(category,title,description,image){ // fills the hidden card with the provided data
			cardContent.className = "var-"+category;
			cardContent.getElementsByTagName("h2")[0].innerHTML = title;
			cardContent.getElementsByTagName("figcaption")[0].innerHTML = description;
			if(image !== null){
				cardContent.getElementsByTagName("img")[0].src = "/img/"+image;
				cardContent.getElementsByTagName("img")[0].alt = title;
			}
		}

		function getRandomNumbreBetween(min, max){ // random number generator
			return Math.floor(Math.random() * (max - min) + 1) + min;
		}

		function resetAudio(audioElement){ // handles interrupted audio and makes sure it starts at the beginning next time
			audioElement.pause();
			audioElement.currentTime = 0;
		}

		function startTimer(){ // setup of a new timer
			clearInterval(timer);
			timer = 0;
			timer = setInterval(lower,1000);
		}

		function addnextTime(seconds){ // setups everything that the timer needs and triggers the timer after setup
			time = seconds;
			countDown.innerHTML = time;
			startTimer();
		}
	}
}(window);