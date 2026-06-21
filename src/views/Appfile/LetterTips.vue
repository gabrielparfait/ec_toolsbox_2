<template>
  <div id="LetterTips">
    <Header />
    <Menu />
    <h3 id="tipsLetter">
      CONSEILS ET ASTUCES
    </h3>
    <Video v-bind:galery-video="videoLetterTips"   v-bind:id-video="'letter1'"></Video>
        <a
      href="https://baborlelefan.com/2013/12/07/enquete-faut-tenter-des-candidatures-originales/"
      target="_blank"
      class="subtitle-link"
    >
      <strong>Pour dédramatiser <b-icon icon="box-arrow-right" /></strong
    ></a>
        <p>
      N’hésitez pas à faire un rappel de la charte graphique de votre CV dans
      votre lettre de motivation. Modèles de lettres de motivation graphiques{{
        "\xa0"
      }}:
    </p>
        <p>
      <a
        href="https://fr.venngage.com/templates/resumes/cover-letters"
        alt="vennage"
        class="link-help-builder"
        
        target="_blank"
        draggable="false"
        ><img
          class="Help_Builder"
          src="/picture_letter/LetterTool1.jpg"
          draggable="false"
        /><img
          class="supperposition"
          src="../../assets/Boxarrowright.png"
          draggable="false"
      /></a>
      <a
        href="https://fr.venngage.com/blog/modeles-lettres-de-motivation/"
        alt="vennage"
        class="link-help-builder"
        
        target="_blank"
        draggable="false"
        ><img
          class="Help_Builder"
          src="/picture_letter/LetterTool2.jpg"
          draggable="false"
        /><img
          class="supperposition"
          src="../../assets/Boxarrowright.png"
          draggable="false"
      /></a>
    </p>

    <h4 class ="margin-top"> Écrire sa lettre de motivation avec l'Intelligence Artificielle</h4>
    <p>Utiliser une IA comme ChatGPT pour écrire sa lettre de motivation, est-ce une bonne idée ? Voici un article pour vous guider dans l’utilisation de l’IA 
      dans ce cas précis. Il vous expliquera en quoi une IA peut vous être bénéfique et en 
      quoi elle peut vous desservir auprès d’un recruteur.</p>
    <a
      href="https://www.slate.fr/story/266396/ecrire-lettre-motivation-avec-chatgpt-intelligence-artificielle-bonne-mauvaise-idee-candidature-offre-emploi-recrutement-travail"
      target="_blank"
      class="subtitle-link"
    >
      <strong>Écrire une lettre de motivation avec ChatGPT, bonne ou mauvaise idée? <b-icon icon="box-arrow-right" /></strong
    ></a>
            <h4>Mise en garde sur l’IA</h4>
    <p>
      Si vous utilisez un outil IA, il est bon d’être conscient des éléments suivants :
      l'IA utilise souvent des œuvres protégées sans le consentement des auteurs de textes ou 
      images dans lesquels elle puise ses ressources pour s'entraîner ; ses créations 
      n'appartiennent généralement pas à l'utilisateur. Également, il y a un risque d'affaiblissement 
      de l'esprit critique et de la créativité personnelle par excès de délégation sur le long terme. 
      Par ailleurs, les biais des algorithmes peuvent renforcer les préjugés et les fausses informations. 
      Au-delà de ces dimensions, l’usage de l’IA constitue un gouffre écologique : elle utilise une 
      très forte consommation d'énergie (électricité) et d'eau (refroidissement des serveurs) pour 
      chaque requête. Utilisez-la seulement lorsque cela est nécessaire et privilégiez une requête 
      sur un simple moteur de recherche dès que vous le pouvez.
    </p>
    <NextPrevBtn v-bind:nxtprev-list="nxtprevLetterTips" />
    <Footer />
  </div>
</template>
<style lang="scss">
  #LetterTips {
    scroll-behavior: smooth;
    overflow: auto;
    height: 100vh;
  }
  .margin-top {
    margin-left: 10%;
    margin-top:-5%;
    color: #c21b2c;
  }
</style>
<script lang="ts">
import { Component, Vue } from "vue-property-decorator";
import Video from "@/components/Video.vue";
import { BIcon, BIconBoxArrowRight } from "bootstrap-vue";
import Header from "@/components/Header.vue";
import Menu from "@/components/Menu.vue";
import NextPrevBtn from "@/components/NextPrevBtn.vue";
import Footer from "@/components/Footer.vue";
@Component({
  components: {
    Video,
    BIcon,
    BIconBoxArrowRight,
    Header,
    Menu,
    NextPrevBtn,
    Footer,
  },
})
export default class LetterKeys extends Vue {
  protected videoLetterTips = [
    {
      videoSrc: "https://www.youtube.com/embed/zfVqBV3NV0E",
      videoTitle: "10 astuces pour écrire votre lettre de motivation",
      videoRoot: "Chaîne : Claire BAZIN",
    },
    {
      videoSrc: "https://www.youtube.com/embed/Kuquw_MFX3U",
      videoTitle: "Comment structurer votre lettre de motivation\xa0?",
      videoRoot: "Chaîne : digiSchool",
    },
    {
      videoSrc: "https://www.youtube.com/embed/bGNZQtmKuUg ",
      videoTitle: "Les 7 erreurs à éviter dans une lettre de motivation ",
      videoRoot: "Chaîne : QuestionEntretien",
    },
    {
      videoSrc: "https://www.youtube.com/embed/sE72wb2UsM0",
      videoTitle: "Les règles d’or de la lettre de motivation ",
      videoRoot: "Chaîne :  1er emploi, jobs, stages",
    },
  ];
  protected nxtprevLetterTips = {
    BoolPrev: true,
    BoolNext: true,
    PrevImage: "/thumbnail4.png",
    NextImage: "/thumbnail3.png",
    PrevLink: "/Lettre_de_Motivation/Fondamentaux",
    NextLink: "/Lettre_de_Motivation/Analyse",
  };
}
</script>
