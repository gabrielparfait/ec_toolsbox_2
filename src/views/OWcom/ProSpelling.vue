<template>
  <div>
    <Header />
    <Menu />
    <h3>AMÉLIORER VOTRE ORTHOGRAPHE</h3>
    <p>
      90% des e-mails envoyés par des entreprises à leurs clients contiennent au
      moins une faute d'orthographe, selon une étude réalisée par TextMaster.
      D’autres études pointent qu’un site marchand qui contient des erreurs sur
      sa page d’accueil perd jusqu’à 50% de ses acheteurs potentiels. Ces
      erreurs feraient rater des ventes et coûteraient des millions aux
      entreprises.
    </p>
    <p>
      Les erreurs d’orthographe, c’est-à-dire des erreurs lexicales ou d’usage
      (vert, vers, verre) ou grammaticales (accords, conjugaisons, homophones
      grammaticaux), parfois combinées à des fautes mécaniques (omission ou
      inversion de lettres) décrédibilisent celui qui les commet.
    </p>
    <p>
      «{{ "\xa0" }}Nous sommes bouchers de père en fils{{ "\xa0" }}» et «{{
        "\xa0"
      }}Nous sommes bouchés de père en fils{{ "\xa0" }}» sont loin d’avoir la
      même signification… À quelques lettres d’écart près, le message sera bien
      différent. Certes, le contexte peut aider le lecteur à comprendre ce qu’a
      voulu dire l’auteur d’un texte cependant, le scripteur doit veiller à
      respecter les règles linguistiques en vigueur pour se faire bien
      comprendre et rendre plus fluide la communication avec son interlocuteur.
      Un bon écrit est celui qui est immédiatement compréhensible et lisible par
      son destinataire mais également celui qui donne une image de sérieux et de
      rigueur.
    </p>
    <h4>
      "Le prix des fautes", Envoyé spécial, 19 février 2016
    </h4>
    <p>
      Participes passés, mots invariables, accord de l’adjectif en genre et en
      nombre… et si nous avions tous besoin d’une remise à niveau ? Être fâché
      avec l'orthographe a un coût aussi bien pour les employeurs que pour les
      salariés...
    </p>
    <b-row align-h="center">
      <iframe
        frameborder="0"
        width="640"
        height="360"
        src="https://www.dailymotion.com/embed/video/x3t2t2a"
        allowfullscreen
        allow="autoplay"
      ></iframe>
    </b-row>

    <h4>
      Ressource Écri+
    </h4>
    <p>
      Écri+ est un dispositif mutualisé pour aider les étudiants à développer
      leurs compétences en français écrit à l’université. Il contient des outils
      de qualité universitaire gratuits pour les établissements publics de
      l’enseignement supérieur et leurs étudiants. Son interface est semblable à
      celle de Pix.
    </p>
    <a
      class="subtitle-link"
      href="http://ecriplus.fr/ressources/"
      target="_blank"
    >
      <strong>Ressource Écri+ </strong><b-icon icon="BoxArrowRight" />
    </a>
    <h5 class="centering">Tutoriel Écri+ ci-dessous</h5>
    <Galery v-bind:galery-picture="ecriplus" v-bind:classheight="square" />
    <h4>
      Amélioration du français
    </h4>
    <p>
      Le site "Amélioration du français" offre une grande variété de ressources
      didactiques et d’outils en ligne gratuits pour le personnel enseignant et
      la population étudiante du réseau collégial ou pour toute personne qui
      cherche à améliorer ses compétences en français. Il propose également des
      ressources plus avancées pour les personnes qui souhaitent se
      perfectionner en français. Au fil des ans, le site est devenu une
      référence en matière d’amélioration de la langue française et est utilisé
      par des milliers d’étudiants et d’enseignants.
    </p>
    <a
      class="subtitle-link"
      href="https://ameliofrancais.ccdmd.qc.ca/"
      target="_blank"
    >
      <strong>Accueil | Amélioration du français </strong
      ><b-icon icon="BoxArrowRight" />
    </a>
    <SpellingInterractExe></SpellingInterractExe>
    <h4>Autres Ressources</h4>
    <div>
      <a
        class="subtitle-link"
        href="http://uoh.univ-montp3.fr/j_ameliore_ma_maitrise_du_francais/portail/"
        target="_blank"
      >
        J'améliore mon français{{ "\xa0" }}: uoh.univ-montp3.fr
        <b-icon icon="BoxArrowRight" />
      </a>
    </div>
    <div>
      <a
        class="subtitle-link"
        href="https://ameliorer-ses-ecrits.univ-cotedazur.fr/"
        target="_blank"
      >
        Améliorer ses écrits{{ "\xa0" }}: Améliorer ses écrits – Des ressources
        pour améliorer votre français écrit <b-icon icon="BoxArrowRight" />
      </a>
    </div>
    <div>
      <a class="subtitle-link" href="https://www.afef.org/" target="_blank">
        Association française des enseignants de français.
        <b-icon icon="BoxArrowRight" />
      </a>
    </div>
    <div>
      <a
        class="subtitle-link"
        href="https://www.fun-mooc.fr/courses/course-v1:unicaen+48002+session01/about"
        target="_blank"
      >
        le MOOC sur les compétences orthographiques : www.fun-mooc.fr
        <b-icon icon="BoxArrowRight" />
      </a>
    </div>
    <div>
      <a
        class="subtitle-link"
        href="http://www.uoh.fr/front/notice?id=b2e045b1-b8f8-4756-8986-56f3001a402e"
        target="_blank"
      >
        Vidéos thématiques du MOOC : MOOC "Renforcer ses compétences
        orthographiques" | Portail UOH <b-icon icon="BoxArrowRight" />
      </a>
    </div>
    <h4>
      Livre-outil
    </h4>
    <a
      class="subtitle-link"
      href="https://oraprdnt.uqtr.uquebec.ca/pls/public/docs/GSC26/O0000669899_100_jours.pdf"
      target="_blank"
      >Bénédicte Gaillard, <i> 100 jours sans fautes</i>, Guy Saint-Jean
      Éditeur, 2015. <b-icon icon="box-arrow-right"></b-icon
    ></a>

    <h4>
      La nouvelle orthographe
    </h4>

    <a
      class="subtitle-link pdf-line"
      href="/pdf_OWcom/SpellingList.pdf"
      download="Règles nouvelles orthographe"
    >
      Liste nouvelle orthographe
      <img class="logo-pdf" src="../../assets/logo-pdf.png" />
    </a>
    <p class="none-margin-top">
      - D’après Danielle Béchennec et Liliane Sprenger,<i>
        Guide pratique de l’orthographe rectifiée</i
      >, disponible sur www.cahiers-pedagogiques.com
    </p>

    <a
      class="subtitle-link pdf-line"
      href="/pdf_OWcom/SpellingRule.pdf"
      download="Musée de la nouvelle orthographe"
    >
      Musée de la nouvelle orthographe
      <img class="logo-pdf" src="../../assets/logo-pdf.png" />
    </a>

    <NextPrevBtn v-bind:nxtprev-list="nxtprevProSpelling" />
    <Footer />
  </div>
</template>

<style lang="scss">
/* Conteneur principal */
.pdf-grid-container {
  max-width: 1200px;
  width: 100%;

  padding: 20px;
  background-color: #f0f0f0;
}

/* On cible l'élément généré par le composant */
.pdf-grid-content {
  display: grid;
  /* On définit 3 colonnes de largeur égale */
  grid-template-columns: repeat(2, 1fr);
  /* Espace entre les pages */
  gap: 20px;
}
.centering {
  text-align: center;
}

/* On s'assure que les pages s'adaptent à la largeur de la colonne */
.pdf-grid-content >>> canvas {
  max-width: 200px !important;
  width: 50% !important;
  height: auto !important;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
@media (min-width: 800px) {
  .pdf-grid-content {
    grid-template-columns: repeat(2, 1fr);
    display: grid;
  }
}
@media (max-width: 800px) {
  .pdf-grid-content {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 500px) {
  .pdf-grid-content {
    grid-template-columns: 1fr;
  }
}
</style>
<script lang="ts">
import { Component, Vue } from "vue-property-decorator";
import Header from "@/components/Header.vue";
import Menu from "@/components/Menu.vue";
import Pdf from "@/components/Pdf.vue";
import { BIcon, BIconBoxArrowRight, BIconUpload } from "bootstrap-vue";
import NextPrevBtn from "@/components/NextPrevBtn.vue";
import Galery from "@/components/Galery.vue";
import Footer from "@/components/Footer.vue";
import SpellingInterractExe from "./ProSpelling/SpellingInterractExe.vue";
@Component({
  components: {
    Galery,
    Header,
    Menu,
    Pdf,
    BIcon,
    BIconBoxArrowRight,
    BIconUpload,
    NextPrevBtn,
    Footer,
    SpellingInterractExe
  }
})
export default class ProSpelling extends Vue {
  protected ecriplus: string[] = [
    "/picture_ecriplus/ecriplus-1.png",
    "/picture_ecriplus/ecriplus-2.png",
    "/picture_ecriplus/ecriplus-3.png",
    "/picture_ecriplus/ecriplus-4.png",
    "/picture_ecriplus/ecriplus-5.png"
  ];
  protected nxtprevProSpelling = {
    BoolPrev: true,
    BoolNext: true,
    PrevImage: "/thumbnail3.png",
    NextImage: "/thumbnail7.png",
    PrevLink: "/Ecrit_Pro/Strategie",
    NextLink: "/Ecrit_Pro/Exemples"
  };
}
</script>
