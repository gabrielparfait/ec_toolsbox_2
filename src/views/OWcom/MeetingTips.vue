<template>
  <div id="MeetingTips">
    <Header />
    <Menu />
    <h3>CONSEILS ET ASTUCES</h3>
    <h4>Être efficace</h4>
    <Video v-bind:galery-video="videoMeetingTips"  v-bind:id-video="'meet2'"></Video>
    <h4>Réussir à capter l’auditoire</h4>
    <h5 class="text-vid">Maintenir l’engagement lors de réunions virtuelles</h5>
    <b-row align-h="center">
      <iframe
        width="560"
        height="315"
        src="https://www.youtube.com/embed/QQv4Onfotos"
        frameborder="0"
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen
      ></iframe>
    </b-row>
    <br>
    <h5 class="text-vid">Préparer et animer efficacement les réunions de conduite de projet </h5>
    <b-row align-h="center">
      <iframe
        width="560"
        height="315"
        src="https://www.youtube.com/embed/BIuIfJ0zp2s"
        frameborder="0"
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen
      ></iframe>
    </b-row>
    <NextPrevBtn v-bind:nxtprev-list="nxtprevMeetingTips" />
    <Footer />
    
  </div>
</template>

<style lang="scss">
#MeetingTips {
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
import NextPrevBtn from "@/components/NextPrevBtn.vue";
import Footer from "@/components/Footer.vue";
@Component({
  components: {
    Header,
    Menu,
    Video,
    NextPrevBtn,
    Footer,
  },
})
export default class MeetingTips extends Vue {
    protected videoMeetingTips = [
    {
      videoSrc: "https://www.youtube.com/embed/3w8lmzfGqQE",
      videoTitle: "Comment animer efficacement une réunion ? 1",
      videoRoot: "Chaîne :  Breasy : Et si manager devenait un jeu d'enfants ?",
    },
    {
      videoSrc: "https://www.youtube.com/embed/kBSHSZiS9uk",
      videoTitle: "Comment animer efficacement une réunion ? 2",
      videoRoot: "Chaîne : L'Express",
    },
  
    {
      videoSrc: "https://www.youtube.com/embed/jffoiI3ETr4",
      videoTitle: "Réunion de travail : interview d’un directeur qui a réussi à transformer ses séances.",
      videoRoot: "Chaîne : Organisologie",
    },

  ];
  protected nxtprevMeetingTips =
{
    BoolPrev: true,
    BoolNext: false,
    PrevImage: "/thumbnail5.png",
    NextImage: "",
    PrevLink: "/Conduite_Reunion/Fondamentaux",
    NextLink: "",
  };
}
</script>
