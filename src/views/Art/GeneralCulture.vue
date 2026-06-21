<template>
  <div>
    <Header />
    <Menu />
    <h2 class="rubric-title">CULTURE GÉNÉRALE</h2>
    <ContentsPage v-bind:contents-list="contentsOnline"></ContentsPage>
    <Footer />
  </div>
</template>
<style lang="scss"></style>
<script lang="ts">
import { Component, Vue } from "vue-property-decorator";
import Header from "@/components/Header.vue";
import Menu from "@/components/Menu.vue";
import ContentsPage from "@/components/ContentsPage.vue";
import Footer from "@/components/Footer.vue";
@Component({
  components: {
    Header,
    Menu,
    ContentsPage,
    Footer,
  },
})
export default class OnlineCulture extends Vue {
   protected contentsOnline = [
    {
      ContentsTitle:"L'IMPORTANCE DE LA CULTURE GÉNÉRALE",
      ContentsPath:"/CultureGenerale/Importance",
      ContentsImage: "/thumbnail2.png"
    },
    {
      ContentsTitle:"POUR ALLER PLUS LOIN",
      ContentsPath:"/CultureGenerale/Aller_Plus_Loin",
      ContentsImage: "/thumbnail7.png"
    },
   ]
}
</script>