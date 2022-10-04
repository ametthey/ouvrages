<div class="header-navigation--office-mobile">

    <!-- Colonne de droite -->

    <!-- TEXTE DE PRÉSENTATION -->
    <p class="desktop--office-presentation"><?php the_field( 'presentation', 'option' ); ?></p>

    <!-- ADRESSE -->
    <p class="desktop--office-adresse">
        25 Rue du Bac, F–75008 Paris <br>
        <a href="mailto:info@ouvrage.paris">info@ouvrage.paris</a><br>
        <a href="https://www.instagram.com/" target="_blank">Instagram</a>
    </p>

    <!-- ÉQUPE -->
    <p class="desktop--office-team">
    <?php if ( have_rows( 'team', 'option' ) ) : ?>
        <?php while ( have_rows( 'team', 'option' ) ) : the_row(); ?>
            <?php the_sub_field( 'membre_de_lequipe' ); ?>
            <br>
        <?php endwhile; ?>
    <?php else : ?>
        <?php // no rows found ?>
    <?php endif; ?>
    </p>

    <!-- CRÉDITS CRÉATION DU SITE -->
    <p class="desktop--office-cm"><a href="mailto:info@current-matters.ltd" target="_blank">Current Matters</a> <br> <a href="perimetre.studio" target="_blank">Albin Metthey @perimetre.studio </a></p>

    <!-- Colonne de Gauche -->
    <p class="desktop--office-bureau">Bureau</p>
    <p class="desktop--office-contact">Contact</p>
    <p class="desktop--office-equipe">Equipe</p>
    <p class="desktop--office-design">Design<br>Dev</p>
</div>
