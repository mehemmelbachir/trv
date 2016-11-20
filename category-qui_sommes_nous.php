<?php get_header(); ?>

	<!-- Menu bar -->
	<div id="interne-menu" style="z-index:9;">						
		<ul id="">
			<?php if(have_posts()): while(have_posts()): the_post(); ?>
				<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; ?>
			<?php endif; ?>			
		</ul>
	</div>



	<main role="main">

		<!-- section -->
		<section>

			<div class="container w500">
				<h1>A PROPOS DE NOUS...</h1>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>TRAVOCOVIA </strong>est une Société Par Actions crée en 2009,
				 c’est une filiale du groupe Benhamadi dont le siège social : 
				 zone industrielle BP389 à Bordj-Bou-Arreridj avec un capital social de <strong>541 672 850,43 DA</strong> 
				 et un potentiel humain de plus de <strong>1000 ouvriers</strong> exerçant dans les différant projets à 
				 travers le territoire national dans plusieurs spécialités.
				</p>
				<div class="nbr_personnel">
					
				</div>
				<p>
					Son activité principale : Travaux public -Bâtiments et TCE -Travaux d'électricité -Installation de 
					système de froids et climatisation -Peinture industrielle et bâtiments   
					-Travaux d'aménagement urbains et installation de la charpente métallique 
					-Location engins et bureau d'étude. 
				</p>
				<p>
					L’entreprise est classée catégorie 9 et compte parmi les grandes entreprise qualifiées 
					pour la réalisation des projets de grande envergure vu le potentiel humain spécialisé dans 
					le domaine et le parc matériel qu’elle possède.
				</p>
				<h2 style="font-weight:800;font-size:1.5em;">&nbsp;PLAN DE CHARGE DE L'ENTREPRISE</h2>
				<ul>
					<li>Réalisation du Centre Arabe d’Archéologie a Tipaza.</li>
       				<li>Etude d'adaptation et réalisation d'un Centre d'Instruction et groupement de la Gendarmerie Nationale à Jijel. </li> 
        			<li>Réalisation d'une (ENT) - Ecole Nationale du Trésor Public, à Tipaza.</li>
        			<li>Réalisation de 292 Logts Promotionnels + Hôtel 23 Apparts à Tipaza.</li>
        			<li>Réalisation d'un Pénitencier 300 Détenus à Sidi Hadjres W-M'Sila.</li>
        			<li>Etude et réalisation de la nouvelle gare maritime d’Annaba.</li>
        			<li>Réalisation du siège de la direction de l'entreprise portuaire de djen-djen w- Jijel.</li>
        			<li>Réalisation 744 Logts Promotionnels à Souidania.</li>
				</ul>
				<p>
					En complément de la réalisation L’entreprise contribue dans la formation de jeunes diplômés 
					et stagiaires en mettant en œuvre ses cadres spécialisés pour les accompagnes et les formé.
				</p>	

			</div>

		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
