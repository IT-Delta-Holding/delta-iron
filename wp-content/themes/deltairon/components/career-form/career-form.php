<?php
$career_privacy_link = get_field('career_privacy_link', 'option');
?>
<section id="careers" class="container"></section><section id="careersFree"></section>
<script>
    const APP_CONFIGURATION = {
        requests: {
            get_url: "https://posao.deltaholding.rs/api/extension/positions/delta-dmd",
            post_url: "https://posao.deltaholding.rs/api/application/insert",
            post_urlfree: "https://posao.deltaholding.rs/api/generalapplication/insert",
        },
        settings: {
            /* parametar koji se reguliše na strani aplikacije gde se implementira, a dolenavedeno je podrazumevano stanje koje će biti "pregaženo" vrednostima iz fajla na strani konkretne aplikacije */
            privacyLink: "../<?php echo $career_privacy_link ?: '/politika-privatnosti/' ?>",
            privacyLinkfree: "../<?php echo $career_privacy_link ?: '/politika-privatnosti/' ?>",
            animate: false,
            // submitFreeText: 'Prijavi se :)'
        },
        styles: {
            /*ime_korisnika: {
              identifier: 'name',
              class: ['wpcf7-form'],
              styles: 'background-color: #fff !important;margin-top: 20px;border-radius: 10px !important;',
              attribute: [['placeholder', 'Tvoje ime i prezime...']]
            },
            ime_korisnika_free: {
              identifier: 'namefree',
              class: ['wpcf7-form'],
              attribute: [['placeholder', 'Tvoje ime i prezime...']],
              styles: 'background-color: #fff !important;margin-top: 20px;border-radius: 10px !important;',
            },*/
        }
    };</script>


