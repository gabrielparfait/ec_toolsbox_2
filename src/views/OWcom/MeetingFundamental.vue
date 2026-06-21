<template>
  <div id="MeetingFundamental">
    <Header />
    <Menu />
    <h3>LES FONDAMENTAUX DE LA RÉUNION</h3>
    <h4>Les fiches-clés</h4>
    <p>
      Il existe plusieurs types de réunions{{ "\xa0" }}: les réunions
      d’information, de résolution de problèmes, de stimulation, de formation ou
      encore de négociation… Quel que soit son objectif, une bonne réunion est
      une réunion bien préparée, aussi bien par ses organisateurs que par ses
      participants. Pour les premiers : rédaction de
      l’ordre du jour, définition d’un objectif, cadrage, choix d’une modalité
      (tour de table, débat, sous-groupes…). Pour les deuxièmes : connaissance et exploration du sujet, préparation à une participation active et pertinente.
    </p>
    <Pdf v-bind:galery-pdf="pdfMeeting"></Pdf>
    <h4>Erreurs courantes</h4>
    <h5 class="text-vid">Ce à quoi une réunion ne devrait pas ressembler…</h5>
    <b-row align-h="center">
      <iframe
        width="560"
        height="315"
        src="https://www.youtube.com/embed/2E6Md66AjNY"
        frameborder="0"
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen
      ></iframe>
    </b-row>
    <NextPrevBtn v-bind:nxtprev-list="nxtprevMeetingFundamental" />
    <Footer />
  </div>
</template>

<style lang="scss">
@media (max-width: 600px){
  .desktop-slide{
    display:none;
  }
 
}
@media (min-width: 600px){
  .phone-slide{
    display:none;
  }
}
#MeetingFundamental {
  scroll-behavior: smooth;
  overflow: auto;
  height: 100vh;
}
</style>

<script lang="ts">
import { Component, Vue } from "vue-property-decorator";
import Header from "@/components/Header.vue";
import Menu from "@/components/Menu.vue";
import Video from "@/components/Video.vue";
import Pdf from "@/components/Pdf.vue";
import NextPrevBtn from "@/components/NextPrevBtn.vue";
import Footer from "@/components/Footer.vue";
@Component({
  components: {
    Header,
    Menu,
    Video,
    Pdf,
    NextPrevBtn,
    Footer,
  },
})
export default class MeetingFundamental extends Vue {
  protected pdfMeeting = [
    {
      PdfLink: "/pdf_OWcom/MeetingChapter1.pdf",
      PdfDownload: "OrganiserReunion",
      TxtPdf: "Chapitre 1 : organiser une réunion",
    },
    {
      PdfLink: "/pdf_OWcom/MeetingChapter2.pdf",
      PdfDownload: "AnimerReunion",
      TxtPdf: "Chapitre 2 : animer une réunion",
    },
    {
      PdfLink: "/pdf_OWcom/MeetingChapter3.pdf",
      PdfDownload: "CommunicationReunion",
      TxtPdf: "Chapitre 3 : la communication en réunion",
    },
    {
      PdfLink: "/pdf_OWcom/MeetingReport.pdf",
      PdfDownload: "CompteRenduReunion",
      TxtPdf: "Rédiger un compte rendu de réunion",
    },
  ];

  protected nxtprevMeetingFundamental = {
    BoolPrev: false,
    BoolNext: true,
    PrevImage: "",
    NextImage: "/thumbnail1.png",
    PrevLink: "",
    NextLink: "/Conduite_Reunion/Astuces",
  };
}
</script>
