<html>
	<head>
		<link href="style.css" rel="stylesheet">
		<title> Test Particeep Eshwar </title>
	</head>
	<body>
		<hr>
		<center><h1> Liste de Films </h1></center>
		<hr>
			
			<script type="module">
			
			
			
					
				function like(){
					likes++;
					calculateBar();
				}
				function dislike(){
					dislikes++;
					calculateBar();
				}
				import {movies$} from "/TestParticieep/movies.js"
				movies$.then((movies) => {
					movies.forEach((movies) =>{
						var likes=movies.likes, dislikes=movies.dislikes;
						
						document.body.innerHTML += '<div class="carte"><b> Titre : ' + movies.title + '</b></br> id: '+ movies.id + '</br> Catégorie: ' + movies.category + '<div id="bar"><div id="likes"></div><div id="dislikes"></div></div><input id="blike" type="button" value="Like" id="likeButton" onclick="like();"/><input type="button" value="Dislike" id="dislikeButton" onclick="dislike();"/></div>' ;
						// document.body.innerHTML +=
						var total= likes+dislikes;
						
						
					});
					
				})
				

				
				

				
				

			</script>
			
				
	</body>
</html>