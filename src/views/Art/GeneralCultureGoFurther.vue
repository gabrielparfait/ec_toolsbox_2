<template>
  <div>
    <Header />
    <Menu />
    <h3 id="goFurtherInterview">
      POUR ALLER PLUS LOIN
    </h3>

    <b-row id="go-further-Interview">
      <b-col sm="3">
        <a
          class="a-bloc"
          href="https://www.editions-ellipses.fr/accueil/10697-les-premiers-entretiens-de-recrutement-les-cles-pour-se-demarquer-et-reussir-concours-stages-emplois-9782340041356.html"
          alt="lien"
          target="_blank"
        >
          <img
            id="book-Com"
            src="../../assets/book4.jpg"
            alt="Les premiers entretiens de recrutement Peggy Raffy-Hideux : Livre sur le recrutements "
            draggable="false"
          />
        </a>
      </b-col>
      <b-col sm="9">
          <p class="margin-intro-book">
              La sacro-sainte épreuve de Culture générale évolue avec son temps.
              Désormais pour la réussir, vous devez montrer votre curiosité et votre ouverture, 
              votre capacité à investir tous les champs de la culture. Spontanéité, adaptabilité, 
              imagination sont les nouveaux mots clés de votre succès aux concours et examens.
          </p>
          <p class="margin-intro-book">
                Ce livre s’adresse donc à tous ceux qui veulent développer leurs connaissances et perfectionner 
                leur capacité à mettre leurs savoirs en réseaux, à dresser des ponts entre l’histoire et l’actualité, 
                entre les médias et la politique, entre la littérature et la société, entre l’architecture et la 
                géographie, entre la religion et l’histoire, entre les mythes et l’art… pour mieux appréhender le 
                monde contemporain.
          </p>
          <p class="margin-intro-book">
            Pour chacune des images présentées et commentées, quatre à cinq prolongements sont proposés 
            parmi les thématiques suivantes : histoire, géographie, mythes et religions, politique,
             économie, société, idées, architecture et patrimoine, médias et nouvelles technologies, 
             littérature, arts visuels, musique, spectacle vivant. Des conseils méthodologiques pour 
             préparer les épreuves concluent l'ouvrage.
          </p>
      </b-col>
    </b-row>
    <img class="centered"
            src="/picture_book/bookdesc.png"
            alt="Description du livre"
            draggable="false"
    />
    <Pdf v-bind:galery-pdf="pdfBook"></Pdf>
    <p> Enseignants : Fiche pédagogique pour créer des activités de culture générale à partir de l'ouvrage.
    </p>
    <NextPrevBtn v-bind:nxtprev-list="nxtprevGeneralCultureGoFurther" />
    <Footer />
  </div>
</template>

<style lang="scss">
@media (min-width: 600px) {
  #book-Com {
    width: 20vw;
    box-shadow: 1px 1px 10px black;
  }
  .margin-intro-book{
    margin-left:5%;
  }
  .centered{
    margin-left:7%;
  }
}
@media (max-width: 600px) {
  #book-Com {
    width: 70vw;
    box-shadow: 1px 1px 10px black;
  }
  .margin-intro-book{
    margin-left:0;
  }
    .centered{
    margin-left:7%;
  }
}
</style>

<script lang="ts">
import { Component, Vue } from "vue-property-decorator";
import Header from "@/components/Header.vue";
import Pdf from "@/components/Pdf.vue";
import Menu from "@/components/Menu.vue";
import NextPrevBtn from "@/components/NextPrevBtn.vue";
import Footer from "@/components/Footer.vue";
@Component({
  components: {
    Pdf,
    Header,
    Menu,
    NextPrevBtn,
    Footer,
  },
})
export default class GeneralCultureGoFurther extends Vue {
  protected nxtprevGeneralCultureGoFurther = {
    BoolPrev: true,
    BoolNext: false,
    PrevImage: "/thumbnail6.png",
    NextImage: "",
    PrevLink: "/CultureGenerale/Importance",
    NextLink: "",
  };
  protected pdfBook = [
    {
      PdfLink: "/pdf_culture/Book.pdf",
      PdfDownload: "FichePedagogique",
      TxtPdf: "Le livre comme outil pédagogique",
    },
  ]
}
</script>
