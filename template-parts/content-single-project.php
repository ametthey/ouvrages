<?php
  /*
  * Template-parts calling for the Loop content
  */
?>

<div class="single-grid--container">
    <div class="single-grid--container-left">

        <!-- Slider main container -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img src="http://ouvrage.local/wp-content/uploads/2021/01/perimetre-redbull-bandana-1.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="http://ouvrage.local/wp-content/uploads/2021/01/perimetre-ornement-the-sail-shoot-9.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="http://ouvrage.local/wp-content/uploads/2021/01/grid-background.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="http://ouvrage.local/wp-content/uploads/2021/01/balm_couv_reduze.jpg" alt="">
                </div>
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>

        <!-- FOOTER LEFT -->
        <div class="single-grid--footer-container-left">
            <a class="donnees-techniques-button" href="#">Données Techniques</a>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/close.svg" alt="close button">
            <span class="next-post"><?php next_post_link('%link', 'Projects Suivants'); ?></span>

            <div class="single-grid--donnees-techniques">
                <!-- MISSION -->
                <div class="single-grid--donnes-techniques-container donnes-techniques-margin">
                    <p class="single-grid--title">Mission</p>
                    <p class="single-grid--information">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five </p>
                </div>

                <div class="single-grid--donnes-techniques-container donnes-techniques-margin">
                    <p class="single-grid--title">Opération</p>
                    <p class="single-grid--information">Implantation du magasin Shinzo</p>
                </div>

                <div class="single-grid--donnes-techniques-container">
                    <p class="single-grid--title">Typologie</p>
                    <p class="single-grid--information">Commerce</p>
                </div>

                <div class="single-grid--donnes-techniques-container">
                    <p class="single-grid--title">Architecte</p>
                    <p class="single-grid--information">JMD-Architectes</p>
                </div>

                <div class="single-grid--donnes-techniques-container">
                    <p class="single-grid--title">Surface</p>
                    <p class="single-grid--information">Surface de 120m²</p>
                </div>

                <div class="single-grid--donnes-techniques-container donnes-techniques-margin">
                    <p class="single-grid--title">Décal. pré.</p>
                    <p class="single-grid--information">DP 075 103 20 V0198</p>
                </div>

                <div class="single-grid--donnes-techniques-container donnes-techniques-margin">
                    <p class="single-grid--title">Adresse</p>
                    <p class="single-grid--information">123 rue Vielle du temple <br>FR – 75003 PARIS</p>
                </div>

                <div class="single-grid--donnes-techniques-container donnes-techniques-margin">
                    <p class="single-grid--title">Bureaux d'études</p>
                    <p class="single-grid--information">B.C <br> Coord. SPS <br>B.E Access <br>B.E CfolCfa</p>
                </div>

                <div class="single-grid--donnes-techniques-container">
                    <p class="single-grid--title">Corps de Métiers</p>
                    <p class="single-grid--information">Beton<br>Beton<br>Beton<br>Beton<br>Beton<br>Beton<br>Beton</p>
                </div>
            </div>

            <div class="single-grid--footer-fake"></div>
        </div>
    </div>
    <div class="single-grid--container-right">
        <!-- Slider main container -->
        <!-- <div class="swiper&#45;container&#45;right"> -->
        <!--     <!&#45;&#45; Additional required wrapper &#45;&#45;> -->
        <!--     <div class="swiper&#45;wrapper"> -->
        <!--         <!&#45;&#45; Slides &#45;&#45;> -->
        <!--         <div class="swiper&#45;slide"> -->
        <!--             <!&#45;&#45; <img src="/wp&#38;#45;content/uploads/2020/11/edwardcurtis&#38;#45;galerieorenda2&#38;#45;copie.jpg" alt=""> &#45;&#45;> -->
        <!--         </div> -->
        <!--         <div class="swiper&#45;slide"> -->
        <!--             <!&#45;&#45; <img src="/wp&#38;#45;content/uploads/2020/11/edwardcurtis&#38;#45;galerieorenda1&#38;#45;copie.jpg" alt=""> &#45;&#45;> -->
        <!--         </div> -->
        <!--         <div class="swiper&#45;slide"> -->
        <!--             <!&#45;&#45; <img src="/wp&#38;#45;content/uploads/2020/11/about_leone.jpg" alt=""> &#45;&#45;> -->
        <!--         </div> -->
        <!--         <div class="swiper&#45;slide"> -->
        <!--             <!&#45;&#45; <img src="/wp&#38;#45;content/uploads/2020/11/Capture&#38;#45;décran&#38;#45;2020&#38;#45;11&#38;#45;11&#38;#45;à&#38;#45;09.37.38.jpg" alt=""> &#45;&#45;> -->
        <!--         </div> -->
        <!--     </div> -->
        <!--  -->
        <!--     <!&#45;&#45; If we need navigation buttons &#45;&#45;> -->
        <!--     <div class="swiper&#45;button&#45;prev"></div> -->
        <!--     <div class="swiper&#45;button&#45;next"></div> -->
        <!--  -->
        <!-- </div> -->
        <div class="single-grid--footer-container-right">
            <p>Projects Suivants</p>
        </div>
    </div>
</div>

