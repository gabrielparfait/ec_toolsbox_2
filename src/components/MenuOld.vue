<script lang="ts">
import { Component, Vue } from "vue-property-decorator";
import { DropdownPlugin } from "bootstrap-vue";
import { NavPlugin } from "bootstrap-vue";
import { BFormInput } from "bootstrap-vue";
import { BButton } from "bootstrap-vue";
import { BNavbarNav } from "bootstrap-vue";
import { BNavbar } from "bootstrap-vue";
import { BIcon, BIconSearch, BIconList } from "bootstrap-vue";
import SearchBar from "@/components/SearchBar.vue"

Vue.component("b-navbar", BNavbar);
Vue.component("b-navbar-nav", BNavbarNav);
Vue.component("b-button", BButton);
Vue.component("b-form-input", BFormInput);
Vue.use(NavPlugin);
Vue.use(DropdownPlugin);
@Component({
  components: {
    BIcon,
    BIconSearch,
    BIconList,
    SearchBar,
  },
})

export default class Menu extends Vue {
  protected showBurger= false;
  protected ToogleShowBurger(): void {
    if (this.showBurger == false) {this.showBurger = true;}
    else {
      this.showBurger = false;
    }
  }
  protected created() {
    if (screen.width < 600) {
      this.showBurger = false;
    } else {
      this.showBurger = true;
    }
  }
}
</script>

<template>
  <div id="nav-header">
    <div id="ManageBarPhone">
      <b-container fluid>
        <b-row>
          
          <SearchBar></SearchBar>
          <b-col cols="2">
            <b-button size="sm" id="BurgerList" class="my-2 my-sm-0" type="submit" v-on:click="ToogleShowBurger()"
              ><b-icon icon="list"></b-icon
            ></b-button>
          </b-col>
        </b-row>
      </b-container>
    </div>
    <b-nav pills fill v-if="showBurger">
      <b-nav-item class="rubric" id="home" to="/">ACCUEIL</b-nav-item>
      
      <b-nav-item-dropdown
        class="rubric"
        text-color="white"
        text="DOSSIER DE CANDIDATURE"
        toggle-class="nav-link-custom"
      >
        <b-nav-item
        class="sub-rubric nested-dropdown"
        color="black"
        text="CV"
        to="/CV"
        >
                <b-dropdown-item class="sub-rubric" to="/CV/Fondamentaux"
          >Les Fondamentaux</b-dropdown-item
        >
        </b-nav-item>
        <b-dropdown-item class="sub-rubric" to="/Lettre_de_Motivation"
          >LETTRE DE MOTIVATION</b-dropdown-item
        >
        <b-dropdown-item class="sub-rubric" to="/Entretien"
          >ENTRETIEN DE RECRUTEMENT</b-dropdown-item
        >
      </b-nav-item-dropdown>

      <b-nav-item-dropdown
        class="rubric"
        text="COMMUNICATION ÉCRITE ET ORALE"
        toggle-class="nav-link-custom"
      >
        <b-dropdown-item class="sub-rubric" to="/Definition_Communication"
          >QU'EST CE QUE LA COMMUNICATION{{ "\xa0" }}?</b-dropdown-item
        >
        <b-dropdown-item class="sub-rubric" to="/Ecrit_Pro"
          >ÉCRITS PROFESSIONNEL, <br />ACADÉMIQUE ET
          D'INVENTION</b-dropdown-item
        >
        <b-dropdown-item class="sub-rubric" to="/Prise_de_Parole"
          >PRISE DE PAROLE EN PUBLIC</b-dropdown-item
        >
        <b-nav-item-dropdown         
          class="sub-rubric"
          text="CONDUITE DE R&Eacute;UNION"
          toggle-class="nav-link-custom"
        >
          <b-dropdown-item class="sub-sub-rubric" to="/Prise_de_Parole"
            >PRISE DE PAROLE EN PUBLIC</b-dropdown-item
          >
       
      </b-nav-item-dropdown>
      </b-nav-item-dropdown>

      <b-nav-item-dropdown
        class="rubric"
        text="COMMUNICATION VISUELLE"
        toggle-class="nav-link-custom"
      >
        <b-dropdown-item class="sub-rubric" to="/Affiche"
          >AFFICHE</b-dropdown-item
        >
        <b-dropdown-item class="sub-rubric" to="/Diaporama"
          >DIAPORAMA</b-dropdown-item
        >
        <b-dropdown-item class="sub-rubric" to="/Infographie"
          >INFOGRAPHIE</b-dropdown-item
        >
        <b-dropdown-item class="sub-rubric" to="/Audiovisuel"
          >AUDIOVISUEL</b-dropdown-item
        >
      </b-nav-item-dropdown>

      <b-nav-item-dropdown
        class="rubric"
        text="ARTS ET CULTURE"
        toggle-class="nav-link-custom"
      >
        <b-dropdown-item class="sub-rubric" to="/CultureGenerale"
          >L'IMPORTANCE DE LA <br />
          CULTURE EN GÉNÉRALE</b-dropdown-item
        >
        <b-dropdown-item class="sub-rubric" to="/PerformanceArtistique"
          >PERFORMANCE ARTISTIQUE</b-dropdown-item
        >
        <b-dropdown-item class="sub-rubric" to="/PlaisirdeLire"
          >PLAISIR DE LIRE</b-dropdown-item
        >
        <b-dropdown-item class="sub-rubric" to="/CultureenLigne"
          >CULTURE EN LIGNE</b-dropdown-item
        >
      </b-nav-item-dropdown>

      <b-nav-item id="ceasura"></b-nav-item>

      <b-nav-item class="rubric" id="contact" to="/QuiSuisJe"
        >À PROPOS</b-nav-item
      >
    </b-nav>
  </div>
</template>

<style lang="scss">
@media (min-width: 600px) {
  .nav-item.dropdown:hover > .dropdown-menu {
    display: block;
    margin-top: 0; // Aligner proprement
  }

  // 2. Gérer les sous-menus à droite
  .nested-dropdown {
    position: relative;
    
    // On cache le menu par défaut et on le place à droite
    & > .dropdown-menu {
      top: 0;
      left: 100%; // Pousse le menu à droite du parent
      margin-top: 0;
      margin-left: 0px; 
    }

    // Flèche indicative (optionnel mais recommandé pour l'UX)
    & > .nav-link::after {
      content: '►';
      float: right;
      font-size: 0.8em;
      margin-left: 5px;
      border: none; // Enlève la flèche Bootstrap par défaut
    }
  }
  
  // Assurer que le lien du parent change de couleur aussi au survol du sous-menu
  .nav-item.dropdown:hover > .nav-link {
    background-image: url("../assets/basic-Graph/buttonred.png");
    background-size: 100% 100%;
  }
  #nav-header {
    position: relative; //work if it parent-component can scroll (home scroll, not header[that's why it didn't work])
    top: 0; //when menu change from relative to absolute, need the absolute position:top 0;
    z-index: 1000; //put menu above other elements
    margin-bottom: 0.5vh;
    
  }
  #ManageBarPhone {
    display: none;
  }
  .rubric {
    background-image: url("../assets/basic-Graph/buttonblue.png");
    background-size: 100% 100%;
    border-radius: 0px;
    margin-right: 0.5vw;
    width: 15.5vw;
    font-family: Myriad;
    text-align: center !important;

    &:hover {
      background-image: url("../assets/basic-Graph/buttonred.png");
      background-size: 100% 100%;
    }
    &:active {
      background-image: url("../assets/basic-Graph/buttonfocus.png");
      background-size: 100% 100%;
    }
  }
  #home {
    //rubric home
    background-image: url("../assets/basic-Graph/buttonred.png");
    background-size: 100% 100%;
  }
  #ceasura {
    background-color: #c94a19;
    margin-right: 0.5vw;
    width: 1vw;
  }
  #contact {
    margin-right: 0;
  }
  .sub-rubric {
    background-color: #bce8ff;
    width: 15.8vw;
    text-align: center;
    color: #2e367f;
  }

  .dropdown-menu {
    border-radius: 0px !important;
    border: 0px !important;
    padding: 0 !important;
  }
  .dropdown-item {
    color: #2e367f !important;
    padding: 0.25rem 0 !important;
  }
  .show > .nav-link {
    background-image: url("../assets/basic-Graph/buttonfocus.png");
    background-size: 100% 100%;
  }
  .nav-link-custom {
    padding: 0.5rem 0 !important;
  }
  .nav-link {
    color: white !important;
  }
  .nav-pills .nav-link {
    border-radius: 0 !important;
  }
}
@media (max-width: 600px) {
  
  #ManageBarPhone{
    background-color: #1794d6;
  }
  .rubric {
    background-image: url("../assets/basic-Graph/buttonblue.png");
    background-size: 100% 100%;
    border-radius: 0px;
    width: 100vw;
    font-size: 0.7rem;
    font-family: MyriadPhone;
    text-align: center !important;

    &:hover {
      background-image: url("../assets/basic-Graph/buttonred.png");
      background-size: 100% 100%;
    }
    &:active {
      background-image: url("../assets/basic-Graph/buttonfocus.png");
      background-size: 100% 100%;
    }
  }
  #home {
    //rubric home
    background-image: url("../assets/basic-Graph/buttonred.png");
    background-size: 100% 100%;
    z-index: 100;
  }
  #ceasura {
    display:none;
  }
  .sub-rubric {
    background-color: #bce8ff;
    font-size: 0.7rem;
    text-align: center;
    color: #2e367f;
  }
  .dropdown-item {
    color: #2e367f !important;
    padding: 0.25rem 0 !important;
  }
  .nav-link {
    color: white !important;
  }
  .dropdown-menu {
    border-radius: 0px !important;
    border: 0px !important;
    padding: 0 !important;
  }
  .show > .nav-link {
    background-image: url("../assets/basic-Graph/buttonfocus.png");
    background-size: 100% 100%;
  }
}
</style>
