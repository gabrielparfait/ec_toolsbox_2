<template>
  <div>
    <Header />
    <Menu />
    <h3>MÉDIAS, PRESSE</h3>

    <strong>
      <a
        href="https://theconversation.com/fr"
        class="subtitle-link"
        target="_blank"
      >
        <i>The Conversation</i> <b-icon icon="box-arrow-right" />
      </a>
    </strong>

    <p>
      Edité par des journalistes expérimentés, <i>The Conversation</i> offre des
      analyses informées et nourrit le débat sur les grands sujets qui touchent
      la planète. <i>The Conversation</i> est un média en ligne collaboratif qui
      fait entendre la voix des enseignants-chercheurs dans le débat citoyen
      pour éclairer l'actualité par de l'expertise fiable, fondée sur des
      recherches. Contrairement à ce qu’indique son nom, le site est
      francophone. Possibilité de s’abonner à la Newsletter.
    </p>

    <strong>
      <a href="https://www.lemonde.fr/" class="subtitle-link" target="_blank">
        <i>Le Monde</i> <b-icon icon="box-arrow-right" />
      </a>
    </strong>

    <p>
      1er site d'information français. Les articles du journal et toute
      l'actualité en continu{{ "\xa0" }}: International, France, Société,
      Economie, Culture, Environnement...
    </p>
    <NextPrevBtn v-bind:nxtprev-list="nxtprevOnlineCultureMedia" />
    <Footer />
  </div>
</template>
<style lang="scss"></style>
<script lang="ts">
import { Component, Vue } from "vue-property-decorator";
import Header from "@/components/Header.vue";
import Menu from "@/components/Menu.vue";
import { BIcon, BIconBoxArrowRight } from "bootstrap-vue";
import NextPrevBtn from "@/components/NextPrevBtn.vue";
import Footer from "@/components/Footer.vue";
@Component({
  components: {
    Header,
    Menu,
    BIconBoxArrowRight,
    BIcon,
    NextPrevBtn,
    Footer
  }
})
export default class OnlineCultureMedia extends Vue {
  protected nxtprevOnlineCultureMedia = {
    BoolPrev: true,
    BoolNext: false,
    PrevImage: "/thumbnail1.png",
    NextImage: " ",
    PrevLink: "/CultureenLigne/CultureGenerale",
    NextLink: ""
  };
}
</script>
