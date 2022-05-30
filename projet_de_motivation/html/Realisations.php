	<?php
		include_once("header.php");
	?>
	<link rel="stylesheet" href="../css/Realisations.css">
	
	<body>
		<div class="menuBouton">
			<button id="but1" class="button-50" onclick="div1()">Développement Web</button>
			<button id="but2" class="button-50" onclick="div2()">Production Audiovisuelle</button>
			<button id="but3" class="button-50" onclick="div3()">Production Artistique</button>
			
			</br>
			</br>
		</div>

		<div class="ventre">
			<p>
				<h4>
				<div id="d1" class="arrive" style="display:none">
					<h3>Développement Web :</h3>
					Je suis sur un projet avec un auto-entrepreneur qui souhaite que je lui créé un site web afin de faire prospérer son activité. 
					Je fais intervenir CSS, HTML, JS et PHP pour concrétiser ce projet. 
					Je réalise également une maquette sur Figma pour satisfaire les attentes de mon client.
					</br>
					</br>
					Durant cette première année de formation, j'ai réalisé un site web qui consiste en la manipulation d'une base de données Pokémon.
					J'ai moi même codé ce site en HTML,CSS, JavaScript et PHP.  
					</br></br>

					<a href="https://www.figma.com/proto/poiCvSay3ltwXdnBtlSMFA/Ergonomie?page-id=0%3A1&node-id=1%3A2&viewport=515%2C133%2C0.06&scaling=scale-down&starting-point-node-id=1%3A2" class="button-50" target = "_blank" download><i class="bi bi-link-45deg size"></i> Maquette Figma</a>



					</br></br>


					Sachez par ailleurs que j'ai moi même codé ce site, principalement en HTML et CSS.
					</br></br>


					</div>

					<div id="d2" style="display:none">
						<h3>Production AudioVisuelle :</h3>
						J'ai réalisé plusieurs port-folios sous format vidéos, en lien avec l'option latin. Pour chacune de ces vidéos, j'ai fait un script de ma voie off puis j'ai ajusté le temps des images ou portions de vidéos que je présente en fonction de mon script.</br>
						
						<video src="../mov/Cleopatre_et_les_chats.mp4" width=320  height=240 class="margin" controls poster="vignette.jpg">
						Cette vidéo ne peut être affichée sur votre navigateur Internet.<br> 
						</video>
						
						<video src="../mov/bonus_sphinx.mp4" width=320  height=240 class="margin" controls poster="vignette.jpg">
						Cette vidéo ne peut être affichée sur votre navigateur Internet.<br> 
						</video>

						<br>
						Afin de finaliser un projet d'enseignement pratique interdisciplinaire (EPI), j’ai fait un peu de montage audio grâce au logiciel « Audacity ». 
						Par groupe nous devions créer une ville du future dans un environnement particulier, dans notre cas, la ville se trouvait sous l’eau et nous avions entrepris de recréer tous les bruits que cette ville pouvait engendrer, en créant un environnement aquatique.
						
						<br><br>
						
						Lors d'un projet de groupe, mon équipe et moi-même avons réalisé un spot informatif pour ArmorScience, une association de vulgarisation scientifique.
						Pour ce faire, nous avons interviewé des membres de l'association.

						<video src="../mov/InterviewAS.mp4" width=320  height=240 class="margin" controls poster="vignette.jpg">
						Cette vidéo ne peut être affichée sur votre navigateur Internet.<br> 
						</video>
						</br></br>
						En collaboration avec des camarades de ma classe, je réalise actuellement une vidéo promotionnelle pour un crayon afin de parfaire nos usages des outils de montage vidéo.

					
						</br></br>
					</div>

					<div id="d3" style="display:none">
						<h3>Production Artistique :</h3>
						Ci-dessous, se trouve le premier montage d'image que j'ai réalisé à l'aide de Photoshop. 
						Le but de ce montage était de faire passer un message pour lutter contre le racisme. 
						J'ai donc dessiné des mains croisées puis j'ai pris une image de la Trumptower et je l'ai collée sur la tour, de sorte que cela ressemble à un sticker.
						Je tiens à préciser que j'ai réalisé ce montage en 4ème.
						</br>
						</br>
						<img  src="../img/m1.png" height="400" width="600" class="centrer"/></br>
						</br>
						Dans le cadre de ma formation, il m'a été demandé de réaliser un logo qui répondrait aux besoins d'une entreprise de technologie pour cadre dynamique. 
						J'ai donc pour cela choisi de représenter une entreprise proposant des stylets graphiques. 
						Après de nombreuses recherches deux logos se sont détachés des autres.
						</br>
						<img  src="../img/Silgimim.png" height="400" width="600" class="centrer"/></br>
						</br>
						Le but final étant de n'en sélectionner qu'un seul, j'ai donc opté pour celui que vous retrouverez en pdf ci-dessous.
						</br></br>
						
						<a href="../img/Silgimim.pdf" class="button-50" download><i class="bi bi-filetype-pdf size"></i>Brandboard au format PDF du premier Axe <i class="bi bi-download size"></i></a>
						
						</br>
						</br>

						Dans la même optique de réalisation de logo, j'ai réalisé un logo qui devait être le symbole de notre formation (MMI) puis un brandboard de ce dernier.
						</br></br>
						
						<a href="../img/logoMMI.pdf" class="button-50" download><i class="bi bi-filetype-pdf size"></i>Brandboard au format PDF du logo MMI <i class="bi bi-download size"></i></a>
						</br>
						</br>

						Le logo suivant est une réalisation faite pour des amis qui avaient besoin d'un logo pour un de leurs projets en Réseaux et Télécoms.
						<img  src="../img/ReseauMax.png" height="400" width="600" class="centrer"/>
						</br>

    				</div>

					
					
					
					
				</h4>
			</p>
		</div>
		
	</body>

	<script>

		function div1() {
			let custDiv = document.getElementById("d1");
			if (custDiv.style.display === "none") {
				custDiv.style.display = "block";
			} 
			else{
				custDiv.style.display = "none";
			}
		}
		
		function div2() {
			let custDiv = document.getElementById("d2");
			if (custDiv.style.display === "none") {
				custDiv.style.display = "block";
			} 
			else{
				custDiv.style.display = "none";
			}
		}
		
		function div3() {
			let custDiv = document.getElementById("d3");
			if (custDiv.style.display === "none") {
				custDiv.style.display = "block";
			} 
			else{
				custDiv.style.display = "none";
			}
		}
		/*
		function divn() {
			let custDiv1 = document.getElementById("d1");
			let custDiv1 = document.getElementById("d2");
			let custDiv3 = document.getElementById("d3");
			if (custDiv1.style.display === "block") {
				custDiv1.style.display = "none";
			} 
			if (custDiv2.style.display === "block") {
				custDiv2.style.display = "none";
			} 
			if (custDiv3.style.display === "block") {
				custDiv3.style.display = "none";
			} 
		*/

	</script>
	
    <?php
        include_once("footer.php");
    ?>