<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link href="CSS/actualite.css" rel="stylesheet"/>
		<title>Site Web de Théo Percheron</title>
	</head>
									<!-- Menu burger !-->
	<header>
	<nav> 

		<ul id="menu"> 
		<label for="toggleMenu" class="menuTitle"> Menu </label> 
 
	        <li class="menu">
	                <a href="Accueil.php">ACCUEIL</a> 
					<a href="index.php">FILM</a> 
	                <a href="Galerie.php">IMAGES</a> 
	                <a href="Video.php">VIDÉOS</a> 
	                <a href="Actualite.php">ACTUALITÉS</a>
	            <div class="clear"> </div>         
	        </li>
        
		</ul>

	</nav>
	</header>
	<div class="clear"> </div>
		<script src="jquery-3.1.1.min.js"> </script>
		<script type="text/javascript" >	
			//Création de la fonction:
			function responsiveMenu(){
			$(".menuTitle").click(function(){
			$(".menu").slideToggle("slow");
				});
			};
			//lancement de notre fonction
			$(function(){
			$(".menu").css({"display":"none","transition":"none","max-height":"inherit"});
			});
			$("#toggleMenu").remove();
			responsiveMenu();
		</script>
									<!-- Menu burger !-->
	<body>
		<div id="main">
			<section id="article">
				<article>
					<h3><a href="Article1.php" target="_blank"> La date de sortie d'Avatar 2 enfin fixée ? </a></h3>
					<span class="date">10 mai 2017</span>
					<img class="imgarticle" src="CSS/Images/hd-wallpapers-of-avatar-3.jpg" alt="Couverture du film Avatar 2" title="Pour lire cet article, cliquez sur le titre :) !"/>
					<h4> “Avatar“ sortira pour Noel 2018, espère James Cameron ! </h4>
					<p> Après un premier film qui fut un  chef-d'oeuvre dans le monde entier, "James Cameron" nous a récemment annoncé que le tournage de la suite allé bientôt commencer. Selon "James Cameron" les suites seront spectaculaires. Cette longue attente d'une suite aura donc valu le co... </p>
					<a class="button" href="Article1.php" target="_blank">Lire l'article</a>
				</article>
				<article>
					<h3><a href="Article2.php" target="_blank">Quels sont les attentes du film Avatar 2 ?</a></h3>
					<span class="date">2 mai 2017</span>
					<a href="Article2.php"><img class="imgarticle" src="CSS/Images/Fond.jpg" alt="Image d'un peuple Na'vi" title="Pour lire cet article, cliquez sur le titre :) !"></a>
					<p> Concernant le premier film "Avatar" de <strong> "James Cameron" </strong> les avis différent. Certains sont émerveillés devant le spectacle comme un enfant devant son premier dessin animé, et d'autres trouvent le film décevant, que l'histoire est du déjà vu. Cependant Avatar reste un des meilleurs films de l'année 2001 et la suite est attendu avec impatience dans le monde entier. </p>
					<p> Pour la suite du premier opus, "James Cameron" a laissé entendre que de nouvelles créatures, encore plus dangereuses feraient leur apparition. Il est aussi dit que l'on découvrira plus en profondeur les océans et les forêts sur Pandora.</p>
					<p> Doit-on aussi s'attendre à un retour des humains sur Pandora pour le deuxième o... </p>	
					<a class="button" href="Article2.php" target="_blank">Lire l'article</a>
				</article>
			</section>
			<aside>
				<section class="aside">
					<h2>Dernier article</h2>
					<article>
						<h3><a href="Article1.php" target="_blank"> La date de sortie d'Avatar 2 enfin fixée ?</a></h3>
						<span class="date">10 mai 2017</span>
						<div class="videocontainer"><iframe width="560" height="315" src="https://www.youtube.com/embed/Dm1gTW3V_98" frameborder="0" allowfullscreen></iframe></div>
						<p>Après un premier film qui fut un chef-d'oeuvre dans le monde entier, James cameron nous a récemment annoncé que le tournage de la suite allé bientôt commencer. Si vous souhaitez en savoir davantage sur la date de sortie du film Avatar 2, veuillez appuyer sur le bouton "Lire l'article" ci-dessous.</p>
						<a class="button" href="Article1.php" target="_blank">Lire l'article</a>
					</article>
				</section>
				<section class="aside">
					<h2>Réseaux sociaux </h2> <br/>
					<a class="logo" href="https://www.facebook.com/avatarlefilm/?ref=br_rs" target="_blank"><img src="CSS/Images/facebook.png" alt="imageFacebook"/></a>

					<a class="logo" href="https://twitter.com/officialavatar" target="_blank"><img src="CSS/Images/twitter.png" alt="imageTwitter"/></a>

					<a class="logo" href="https://www.youtube.com/results?search_query=Avatar+film" target="_blank"><img src="CSS/Images/youtube.png" alt="imageYouTube"/></a>


				</section>
				<section class="aside">
					<h2> Autres articles </h2> <br/>
						<h4><a href="http://cinema.jeuxactu.com/news-cinema-avatar-2-et-3-interview-james-camreron-scenario-16479.htm" target="_blank">PUREBREAK</a> 
						</h4>
						<h4><a href="http://www.purepeople.com/people/james-cameron_p1736" target="_blank">PUREPEOPLE</a>
						</h4>
						<h4><a href="http://funny.pho.to/fr/navi-avatar-face-creator/" target="_blank">SNAP AVATAR
						</h4>
				</section>
				<section class="aside">
					<h2>Article récents</h2>
					<p>
						<h4><a href="Article1.php" target="_blank">La date de sortie d'Avatar 2 enfin fixée ?</a></h4>
						<span class="date">10 mai 2017</span>

					<p>
						<h4><a href="Article2.php" target="_blank">Les attentes du film Avatar 2</a></h4>
						<span class="date">2 mai 2017</span>
					</p>
				</section>
				<section class="aside">
					<h2> Quizz </h2> <br />
						<a href="Quizz.php" target="_blank"> FAIRE LE QUIZZ </a>
				</section>
			</aside>
		</div>
		<footer>
			<div id="foot">
				<span> <a class="ML" href="ML.html" target="_blank"> Mentions légales </a>
             	| &copy; 2017| </span>
			</div>
		</footer>
	</body>
</html>
