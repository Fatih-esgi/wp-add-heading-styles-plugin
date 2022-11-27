# wp-add-heading-styles-plugin
ajouter des styles aux blocs gutenberg

<img width="211" alt="image" src="https://user-images.githubusercontent.com/75906474/204152242-2eccc4de-7c9b-4bed-b2d5-6590c0266184.png">

<h2>installation</h2>
ajouter simplement le plugin dans le dossier des plugins wordpress

<h2>configuration</h2>
<ul>
<li>changer le block en modifiant : 'core/heading' par le bloc souhaité</li>
<li>ajouter plusieurs styles en ajoutant un register_block_style pour chaque style</li>

<h2>styles</h2>
<li>changer le style dans le fichier styles.css</li>
<li>la classe css est définie par le(s) register_block_style->Name -> .is-style-{register_block_style.name}<br>
p.ex: .is-style-decorated </li>
