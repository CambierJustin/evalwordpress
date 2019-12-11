<?php get_header(); ?>

<div class="container">

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
    the_post(); 

    /**
     * La méthode the_content() affiche le contenu du post en cours
     * Il s'agit du contenu que vous avez renseigné dans le back-office
     * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
     */
    the_content();
?>
    
<section class="section1">
    <p><?php the_field('texte1'); ?></p>
    <h1><?php the_field('texte2'); ?></h1>
    <div class=textevert><h1><?php the_field('texte3'); ?></h1></div>
    
</section>
    
<section class="section2">
    <h1><?php the_field('texte4'); ?></h1>
    <p><?php the_field('texte5'); ?></p>
</section>
    
<section class="section3">
  <h1 id="programme">AU PROGRAMME</h1>
    <div id="colonnes">
    
    <div id="vegetaux"><h1 id="titre"><?php the_field('texte6'); ?></h1>
        <?php
            $programs = get_field('program_elements');
      foreach($programs as $program) {
          echo $program['hour'];
          echo $program['text'] ."<br/>";
      }
      ?>
        </div>
          <div id="activites"><h1 id="titre"><?php the_field('texte7'); ?></h1>
        <?php
            $programs = get_field('program_elements2');
      foreach($programs as $program) {
          echo $program['hour'];
          echo $program['text'] ."<br/>";
      }
      ?>
    </div>
    </div>
        
    
</section>
    
<section class="section4">
    <h1>LES ORATEURS</h1>
    <p>Voici les orateurs qui seront présents durant les rencontres</p>
</section>

<section class="section5">
    <h1>INFORMATIONS PRATIQUES</h1>
   </section>

<section class="section6">
    <h1>VIDÉOS</h1>
</section>

<section class="section7">
    <h1>ACTUS</h1>
</section>




    
    
    
    <?php

  }
}
?>

</div>

<?php get_footer(); ?>