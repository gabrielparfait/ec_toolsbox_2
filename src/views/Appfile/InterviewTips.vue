<template>
  <div id="InterviewTips">
    <Header />
    <Menu />
    <h3 id="tipsInterview">
      CONSEILS ET ASTUCES
    </h3>
    <h4>Ce que disent les professionnels</h4>
    <Video v-bind:galery-video="videoInterviewTips" v-bind:id-video="'interview1'"></Video>
    <h4>Attention{{'\xa0'}}! Les erreurs à éviter</h4>
    <Video v-bind:galery-video="videoInterviewErrors"  v-bind:id-video="'interview2'"></Video>
    
    <h4>Pour dédramatiser…</h4>
    <Video v-bind:galery-video="videoInterviewRelax"  v-bind:id-video="'interview3'"></Video>
    <NextPrevBtn v-bind:nxtprev-list="nxtprevInterviewTips" />
    <Footer />
  </div>
</template>
<style lang="scss">
  #InterviewTips {
  scroll-behavior: smooth;
  overflow: auto;
  height: 100vh;
}
.video-container {
  display: flex;
  justify-content: center;
  padding: 20px;
}
</style>

<script async src="//www.instagram.com/embed.js"></script>
<script lang="ts">
import { Component, Vue } from "vue-property-decorator";
import Video from "@/components/Video.vue";
import Header from "@/components/Header.vue";
import Menu from "@/components/Menu.vue";
import NextPrevBtn from "@/components/NextPrevBtn.vue";
import Footer from "@/components/Footer.vue";
import { BIconBoxArrowDownRight } from "bootstrap-vue";
@Component({
  components: {
    BIconBoxArrowDownRight,
    Video,
    Header,
    Menu,
    NextPrevBtn,
    Footer,
  }
})
export default class InterviewTips extends Vue {
    protected videoInterviewTips = [
    {
      videoSrc: "https://www.youtube.com/embed/Fsb3CeFWoDs",
      videoTitle: "Conseils de professionnels",
      videoRoot: "Chaîne :  Jérôme et Valentin",
    },
    {
      videoSrc: "https://www.youtube.com/embed/RAFrOBMUITk",
      videoTitle: "Trucs de chasseurs de tête",
      videoRoot: "Chaîne : Les Vidéos du Succès",
    },
    
    {
      videoSrc: "https://www.youtube.com/embed/XnBAvuiOSGk",
      videoTitle: "Astuces de recruteurs",
      videoRoot: "Chaîne :   cadremploi",
    },

     
    {
      videoSrc: "https://www.youtube.com/embed/bD8_sFAgia0",
      videoTitle: "L’entretien collectif",
      videoRoot: "Chaîne :  Winentretien",
    },
    {
      videoSrc: "https://www.youtube.com/embed/4Fd7UJZPIOQ",
      videoTitle: "Le truc qui tue en entretien",
      videoRoot: "Chaîne : cadremploi",
    },
    
      {
      videoSrc: "https://www.youtube.com/embed/916bTmTMLng",
      videoTitle: "Comment négocier en entretien",
      videoRoot: "Chaîne : cadremploi",
    },
    {
      videoSrc: "https://www.youtube.com/embed/Lbz30MjQP3k",
      videoTitle: "Recettes de recrutement avec Michel et Augustin",
      videoRoot: "Chaîne :   cadremploi",
    },
  ];
  
  protected videoInterviewRelax = [
    {
      videoSrc: "https://www.youtube.com/embed/7_VQCD863CU ",
      videoTitle: "Bref, j’ai passé un entretien",
      videoRoot: "Chaîne :  bref.",
    },
    {
      videoSrc: "https://www.dailymotion.com/embed/video/x3hdpcd",
      videoTitle: "Je suis un entretien",
      videoRoot: "Chaîne : Nikon Film Festival",
    },
    {
      videoSrc: "https://www.youtube.com/embed/olYifDZ8ppI",
      videoTitle: "Minutieux - Un Entretien saison 1 - CANAL+ ",
      videoRoot: "Chaîne : CANAL+",
    },
    
  ]
   protected videoInterviewErrors = [
     {
      videoSrc: "https://www.youtube.com/embed/ViQdm7TGqzc ",
      videoTitle: "Réussir son entretien d'embauche avec les conseils",
      videoRoot: "Chaîne : QuestionEntretien",
    },
    {
      videoSrc: "https://www.youtube.com/embed/o8LxPZVNQNk",
      videoTitle: "Quand votre corps parle",
      videoRoot: "Chaîne :   cadremploi",
    },
   ]
   protected nxtprevInterviewTips =
  {
    BoolPrev: true,
    BoolNext: true,
    PrevImage: "/thumbnail2.png",
    NextImage: "/thumbnail7.png",
    PrevLink: "/Entretien/Fondamentaux",
    NextLink: "/Entretien/Aller_Plus_Loin",
  };
}
</script>
