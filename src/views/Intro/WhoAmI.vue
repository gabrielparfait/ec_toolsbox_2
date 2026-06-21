<template>
  <div>
    <Header />
    <Menu />
    <div id="container-intro">
      <h2>À PROPOS - PEGGY RAFFY-HIDEUX</h2>

      <img
        id="background-logo"
        src="../../assets/basic-Graph/Logo3.png"
        atl="Peggy Raffy-Hideux Logo Design"
      />
      <p class="margin">
        Diplômée d'un DESS (Master 2) en Ingénierie éditoriale-communication et
        docteure en Littérature française, générale et comparée, je suis
        enseignante certifiée en Lettres. J'enseigne actuellement la Culture et
        la Communication, principalement à l'IUT d'Angers dans le Département
        GEII (Génie Electrique et Informatique Industrielle) et suis, par
        ailleurs, conceptrice des sujets de concours d'entrée en école de
        commerce ACCÈS (synthèse, ouverture culturelle, agilité culturelle) et
        membre de l'AECIUT (Association des Enseignants en Communication des
        IUT). Après avoir publié deux essais littéraires sur les romans
        réunionnais et haïtiens, j'articule aujourd'hui mes domaines de
        recherche autour de la Communication et de la pédagogie dans le
        Supérieur. Dernières publications en date : "Les Premiers entretiens de
        recrutement. Les clés pour se démarquer et réussir. Concours, stages,
        emplois" (Ellipses, 2020) et "Culture générale : 80 images pour
        développer votre agilité culturelle - Concours et examens" (DUNOD, 2025,
        réédition 2027).
      </p>
      <br />
    </div>
    <Publish></Publish>
    <Footer />
  </div>
</template>
<style lang="scss">
@media (min-width: 600px) {
  #background-logo {
    position: absolute;
    z-index: -1;
    opacity: 0.1;
    height: 120%;
    margin-left: 5%;
    top: 2rem;
  }
  .margin {
    margin-bottom: -2%;
  }
}
@media (max-width: 600px) {
  #background-logo {
    position: absolute;
    z-index: -1;
    opacity: 0.1;
    width: 90%;
    margin-left: 5%;
    top: 6rem;
  }
}
#container-intro {
  position: relative;
}
</style>
<script lang="ts">
import { Component, Vue } from "vue-property-decorator";
import Header from "@/components/Header.vue";
import Menu from "@/components/Menu.vue";
import Publish from "@/views/Intro/Publish.vue";
import Footer from "@/components/Footer.vue";
@Component({
  components: {
    Header,
    Menu,
    Publish,
    Footer
  }
})
export default class WhoAmI extends Vue {}
</script>
