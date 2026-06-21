<template>
  <div>
    <b-card-group deck>
      <b-card img-src="/thumbail20.png" id="oneimgcard" img-alt="Image" img-top>
        <a
          href="https://ameliofrancais.ccdmd.qc.ca/recherche?type=descripteurs&id=250&descripteurs=Exercice&s=&f=250#page=1"
          target="_blank"
        >
          <b-card-text class="writeInCard">
            Amélioration du français – Exercices interactifs pour travailler
            différents points de l’expression écrite.
          </b-card-text>
        </a>
      </b-card>
    </b-card-group>

    <b-card-group deck>
      <b-card img-src="/thumbail21.png" img-alt="Image" id="" img-top>
        <a
          href="https://ameliofrancais.ccdmd.qc.ca/recherche?type=descripteurs&id=250&descripteurs=Exercice&s=&f=250,265#page=1"
          target="_blank"
        >
          <b-card-text class="writeInCard">
            Grammaire
          </b-card-text></a
        >
      </b-card>

      <b-card img-src="/thumbail21.png" img-alt="Image" id="" img-top>
        <a
          href="https://ameliofrancais.ccdmd.qc.ca/recherche?type=descripteurs&id=250&descripteurs=Exercice&s=&f=250,250,250,18#page=1"
          target="_blank"
        >
          <b-card-text class="writeInCard">
            Grammaire du Texte
          </b-card-text>
        </a>
      </b-card>
    </b-card-group>

    <b-card-group deck>
      <b-card img-src="/thumbail21.png" img-alt="Image" img-top>
        <a
          href="https://ameliofrancais.ccdmd.qc.ca/recherche?type=descripteurs&id=250&descripteurs=Exercice&s=&f=250,250,250,19#page=1"
          target="_blank"
        >
          <b-card-text class="writeInCard">
            Orthographe et Typographie
          </b-card-text>
        </a>
      </b-card>

      <b-card img-src="/thumbail21.png" img-alt="Image" img-top>
        <a
          href="https://ameliofrancais.ccdmd.qc.ca/recherche?type=descripteurs&id=250&descripteurs=Exercice&s=&f=250,250,250,21#page=1"
          target="_blank"
        >
          <b-card-text class="writeInCard">
            Lexique
          </b-card-text>
        </a>
      </b-card>
    </b-card-group>
    <b-card-group deck>
      <b-card img-src="/thumbail22.png" img-alt="Image" img-top>
        <a
          href="https://ameliofrancais.ccdmd.qc.ca/recherche?type=descripteurs&id=250&descripteurs=Exercice&s=&f=250,250,250,38#page=1"
          target="_blank"
        >
          <b-card-text class="writeInCard">
            Ponctuation
          </b-card-text>
        </a>
      </b-card>

      <b-card img-src="/thumbail22.png" img-alt="Image" img-top>
        <a
          href="https://ameliofrancais.ccdmd.qc.ca/recherche?type=descripteurs&id=250&descripteurs=Exercice&s=&f=250,250,250,39#page=1"
          target="_blank"
        >
          <b-card-text class="writeInCard">
            Écriture
          </b-card-text>
        </a>
      </b-card>
      <b-card img-src="/thumbail22.png" img-alt="Image" img-top>
        <a
          href="https://ameliofrancais.ccdmd.qc.ca/recherche?type=descripteurs&id=250&descripteurs=Exercice&s=&f=250,250,250,40#page=1"
          target="_blank"
        >
          <b-card-text class="writeInCard">
            Lecture
          </b-card-text></a
        >
      </b-card>
    </b-card-group>
  </div>
</template>

<style>
.card-body {
  margin: 2% !important;
  padding: 0 !important;
}
.card-deck {
  margin: 2% 5% !important;
}
.img-card {
  height: 5vh !important;
}
#oneimgcard {
  height: 10vh !important;
}
.writeInCard {
  text-align: center;
  margin: 0;
}
</style>

<script lang="ts">
import { Component, Vue } from "vue-property-decorator";
import { BCard, BCardGroup, BCardText, BCardImg } from "bootstrap-vue";
@Component({
  components: {
    BCard,
    BCardGroup,
    BCardText,
    BCardImg
  }
})
export default class SpellingInterractExe extends Vue {}
</script>
