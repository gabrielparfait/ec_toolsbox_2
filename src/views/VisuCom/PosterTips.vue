<template>
  <div>
    <Header/>
    <Menu/>
    <h3>CONSEILS ET ASTUCES</h3>
    <h4>
        Comment créer une affiche en 20 minutes{{'\xa0'}}?
      </h4>
    <b-row align-h="center">
      <iframe
        width="560"
        height="315"
        src="https://www.youtube.com/embed/PIIA5SJ-pKM"
        frameborder="0"
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen
      ></iframe>
    </b-row>
    <h4> Produire des affiches avec l'Intelligence Artificielle</h4>
    <p>Pour concevoir vos affiches, vous pouvez vous aider de l’IA.<strong> L’IA Leonardo ou l’IA Nano Banana </strong> 
      sont efficaces pour <strong>générer des images. </strong>
      Nano Banana est utilisable en passant par Google Gemini et en cliquant dans la recherche sur 
      « Génération d'images ». Elle vous permettra de créer facilement des images en fonction de vos besoins. Il vous suffit pour cela de créer un prompt (texte à entrer dans la 
      boîte de dialogue de l’IA) avec un maximum de détails qui correspondent à 
      la vision de ce que vous voulez créer.
    </p>
    <a
      class="subtitle-link"
      href="https://leonardo.ai/"
      target="_blank"
    >
    <strong> L'intelligence artificielle génératrice Leonardo.
    <b-icon icon="box-arrow-right" /></strong>
    </a>
    <br>
    <a
      class="subtitle-link"
      href="https://gemini.google/fr/overview/image-generation/?hl=fr-FR "
      target="_blank"
    >
    <strong> L'intelligence artificielle génératrice de Google, Nano Banana 2.
    <b-icon icon="box-arrow-right" /></strong>
    </a>
    <p></p>
    <p><strong class="redtext">Point de vigilance :</strong> créer une affiche générée par IA n’est pas gage de sa pertinence ni
      de son efficacité. Si elle confère un aspect professionnel à votre support visuel, l’IA peut
      aussi créer des affiches convenues, manquant de créativité ou présentant une impression de 
      déjà-vu. Veillez à rester maître de la direction artistique de votre affiche, sans en déléguer 
      la responsabilité à l’outil d’IA.</p>

    <h4>Mise en garde sur l’IA</h4>
    <p>
      Si vous utilisez un outil IA, il est bon d’être conscient des éléments suivants :
      l'IA utilise souvent des œuvres protégées sans le consentement des auteurs de textes ou 
      d'images dans lesquels elle puise ses ressources pour s'entraîner ; ses créations 
      n'appartiennent généralement pas à l'utilisateur. Également, il y a un risque d'affaiblissement 
      de l'esprit critique et de la créativité personnelle par excès de délégation sur le long terme. 
      Par ailleurs, les biais des algorithmes peuvent renforcer les préjugés et les fausses informations. 
      Au-delà de ces dimensions, l’usage de l’IA constitue un gouffre écologique : elle utilise une 
      très forte consommation d'énergie (électricité) et d'eau (refroidissement des serveurs) pour 
      chaque requête. Utilisez-la seulement lorsque cela est nécessaire et privilégiez une requête 
      sur un simple moteur de recherche dès que vous le pouvez.
    </p>
    <NextPrevBtn v-bind:nxtprev-list="nxtprevPosterTips" />
    <Footer/>
  </div>
</template>

<style lang="scss">
  .redtext {
    color: red !important;
  }
</style>
<script lang="ts">
import { Component, Vue } from "vue-property-decorator";
import Header from "@/components/Header.vue";
import Menu from "@/components/Menu.vue";
import {BPopover,BIconBoxArrowRight,BIcon} from "bootstrap-vue";
import NextPrevBtn from "@/components/NextPrevBtn.vue";
import Footer from "@/components/Footer.vue";
@Component({
  components: {
    Header,
    Menu,
    BPopover,
    NextPrevBtn,
    Footer,
    BIconBoxArrowRight,
    BIcon,
  },
})
export default class PosterTips extends Vue {
  protected nxtprevPosterTips = {
    BoolPrev: true ,
    BoolNext: true,
    PrevImage: "/thumbnail3.png",
    NextImage: "/thumbnail1.png",
    PrevLink: "/Affiche/Fondamentaux",
    NextLink: "/Affiche/EnPratique",
  };
}
</script>
