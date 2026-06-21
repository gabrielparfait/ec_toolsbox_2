<script lang="ts">
import { Component, Vue } from "vue-property-decorator";
import { BFormInput } from "bootstrap-vue";
import { BButton } from "bootstrap-vue";
import { BNavbarNav } from "bootstrap-vue";
import { BNavbar } from "bootstrap-vue";
import { BIcon, BIconSearch, BIconList } from "bootstrap-vue";
import SearchBar from "@/components/SearchBar.vue";

Vue.component("b-navbar", BNavbar);
Vue.component("b-navbar-nav", BNavbarNav);
Vue.component("b-button", BButton);
Vue.component("b-form-input", BFormInput);

@Component({
  components: {
    BIcon,
    BIconSearch,
    BIconList,
    SearchBar,
  },
})
export default class Menu extends Vue {
  protected showBurger = false;
  protected activeDropdown: string | null = null;
  protected isMobile = false;

  protected created() {
    this.isMobile = screen.width < 600;
    this.showBurger = !this.isMobile;
  }

  protected toggleBurger(): void {
    this.showBurger = !this.showBurger;
  }

  // Desktop : hover ouvre/ferme
  protected onMouseEnter(name: string): void {
    if (!this.isMobile) this.activeDropdown = name;
  }

  protected onMouseLeave(): void {
    if (!this.isMobile) this.activeDropdown = null;
  }

  // Mobile : clic toggle
  protected toggleDropdown(name: string): void {
    if (this.isMobile) {
      this.activeDropdown = this.activeDropdown === name ? null : name;
    }
  }

  protected isOpen(name: string): boolean {
    return this.activeDropdown === name;
  }
}
</script>

<template>
  <div id="nav-header">
    <!-- Barre mobile -->
    <div id="ManageBarPhone">
      <b-container fluid>
        <b-row>
          <SearchBar></SearchBar>
          <b-col cols="2">
            <b-button
              size="sm"
              id="BurgerList"
              class="my-2 my-sm-0"
              @click="toggleBurger()"
            >
              <b-icon icon="list"></b-icon>
            </b-button>
          </b-col>
        </b-row>
      </b-container>
    </div>

    <!-- Navigation principale -->
    <ul class="main-nav" v-if="showBurger">

      <li class="rubric" id="home">
        <router-link to="/">ACCUEIL</router-link>
      </li>

      <!-- DOSSIER DE CANDIDATURE -->
      <li
        class="rubric has-dropdown"
        @mouseenter="onMouseEnter('dossier')"
        @mouseleave="onMouseLeave()"
        @click="toggleDropdown('dossier')"
      >
        <span class="nav-label">DOSSIER DE CANDIDATURE</span>
        <ul class="sub-menu" v-show="isOpen('dossier')">
          <li class="sub-rubric">
            <router-link to="/DOSSIER/CV">CV</router-link>
          </li>
          <li class="sub-rubric">
            <router-link to="/Lettre_de_Motivation">LETTRE DE MOTIVATION</router-link>
          </li>
          <li class="sub-rubric">
            <router-link to="/Entretien">ENTRETIEN DE RECRUTEMENT</router-link>
          </li>
        </ul>
      </li>

      <!-- COMMUNICATION ÉCRITE ET ORALE -->
      <li
        class="rubric has-dropdown"
        @mouseenter="onMouseEnter('comm')"
        @mouseleave="onMouseLeave()"
        @click="toggleDropdown('comm')"
      >
        <span class="nav-label">COMMUNICATION ÉCRITE ET ORALE</span>
        <ul class="sub-menu" v-show="isOpen('comm')">
          <li class="sub-rubric">
            <router-link to="/Definition_Communication">QU'EST CE QUE LA COMMUNICATION&nbsp;?</router-link>
          </li>
          <li class="sub-rubric">
            <router-link to="/Ecrit_Pro">ÉCRITS PROFESSIONNEL, ACADÉMIQUE ET D'INVENTION</router-link>
          </li>
          <li class="sub-rubric">
            <router-link to="/Prise_de_Parole">PRISE DE PAROLE EN PUBLIC</router-link>
          </li>
          <!-- Sous-sous-menu : CONDUITE DE RÉUNION -->
          <li
            class="sub-rubric has-dropdown"
            @mouseenter.stop="onMouseEnter('reunion')"
            @mouseleave.stop="onMouseLeave()"
            @click.stop="toggleDropdown('reunion')"
          >
            <span>CONDUITE DE RÉUNION ▶</span>
            <ul class="sub-sub-menu" v-show="isOpen('reunion')">
              <li class="sub-sub-rubric">
                <router-link to="/Prise_de_Parole">PRISE DE PAROLE EN PUBLIC</router-link>
              </li>
            </ul>
          </li>
        </ul>
      </li>

      <!-- COMMUNICATION VISUELLE -->
      <li
        class="rubric has-dropdown"
        @mouseenter="onMouseEnter('visuel')"
        @mouseleave="onMouseLeave()"
        @click="toggleDropdown('visuel')"
      >
        <span class="nav-label">COMMUNICATION VISUELLE</span>
        <ul class="sub-menu" v-show="isOpen('visuel')">
          <li class="sub-rubric"><router-link to="/Affiche">AFFICHE</router-link></li>
          <li class="sub-rubric"><router-link to="/Diaporama">DIAPORAMA</router-link></li>
          <li class="sub-rubric"><router-link to="/Infographie">INFOGRAPHIE</router-link></li>
          <li class="sub-rubric"><router-link to="/Audiovisuel">AUDIOVISUEL</router-link></li>
        </ul>
      </li>

      <!-- ARTS ET CULTURE -->
      <li
        class="rubric has-dropdown"
        @mouseenter="onMouseEnter('arts')"
        @mouseleave="onMouseLeave()"
        @click="toggleDropdown('arts')"
      >
        <span class="nav-label">ARTS ET CULTURE</span>
        <ul class="sub-menu" v-show="isOpen('arts')">
          <li class="sub-rubric"><router-link to="/CultureGenerale">L'IMPORTANCE DE LA CULTURE EN GÉNÉRALE</router-link></li>
          <li class="sub-rubric"><router-link to="/PerformanceArtistique">PERFORMANCE ARTISTIQUE</router-link></li>
          <li class="sub-rubric"><router-link to="/PlaisirdeLire">PLAISIR DE LIRE</router-link></li>
          <li class="sub-rubric"><router-link to="/CultureenLigne">CULTURE EN LIGNE</router-link></li>
        </ul>
      </li>

      <li id="ceasura"></li>

      <li class="rubric" id="contact">
        <router-link to="/QuiSuisJe">À PROPOS</router-link>
      </li>

    </ul>
  </div>
</template>

<style lang="scss">
/* ---- Reset liste ---- */
.main-nav {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  flex-wrap: wrap;
}

.main-nav a,
.main-nav .nav-label {
  display: block;
  color: white;
  text-decoration: none;
  padding: 0.5rem 0;
  width: 100%;
  text-align: center;
  cursor: pointer;
}

/* ---- Sous-menus : positionnement absolu sous le parent ---- */
.has-dropdown {
  position: relative;
}

.sub-menu {
  list-style: none;
  padding: 0;
  margin: 0;
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1100;
  min-width: 100%;
}

/* Sous-sous-menu à droite */
.sub-rubric.has-dropdown {
  position: relative;
}
.sub-sub-menu {
  list-style: none;
  padding: 0;
  margin: 0;
  position: absolute;
  top: 0;
  left: 100%;
  z-index: 1200;
  min-width: 100%;
}

@media (min-width: 600px) {
  #nav-header {
    position: sticky;
    top: 0;
    z-index: 1000;
    margin-bottom: 0.5vh;
  }

  #ManageBarPhone {
    display: none;
  }

  .rubric {
    background-image: url("../assets/basic-Graph/buttonblue.png");
    background-size: 100% 100%;
    border-radius: 0;
    margin-right: 0.5vw;
    width: 15.5vw;
    font-family: Myriad;
    text-align: center;

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
    background-image: url("../assets/basic-Graph/buttonred.png");
    background-size: 100% 100%;
  }

  #ceasura {
    background-color: #c94a19;
    margin-right: 0.5vw;
    width: 1vw;
  }

  #contact { margin-right: 0; }

  .sub-rubric {
    background-color: #bce8ff;
    width: 15.8vw;
    text-align: center;
    color: #2e367f;

    a { color: #2e367f; padding: 0.25rem 0; }
  }

  .sub-sub-rubric {
    background-color: #a0d8f5;
    a { color: #2e367f; padding: 0.25rem 0; }
  }
}

@media (max-width: 600px) {
  #ManageBarPhone {
    background-color: #1794d6;
  }

  .main-nav {
    flex-direction: column;
  }

  .rubric {
    background-image: url("../assets/basic-Graph/buttonblue.png");
    background-size: 100% 100%;
    border-radius: 0;
    width: 100vw;
    font-size: 0.7rem;
    font-family: MyriadPhone;
    text-align: center;

    &:hover { background-image: url("../assets/basic-Graph/buttonred.png"); background-size: 100% 100%; }
    &:active { background-image: url("../assets/basic-Graph/buttonfocus.png"); background-size: 100% 100%; }
  }

  #home {
    background-image: url("../assets/basic-Graph/buttonred.png");
    background-size: 100% 100%;
  }

  #ceasura { display: none; }

  /* Mobile : sous-menu en flux normal (pas absolu) */
  .sub-menu,
  .sub-sub-menu {
    position: static;
    width: 100%;
  }

  .sub-rubric {
    background-color: #bce8ff;
    font-size: 0.7rem;
    text-align: center;
    color: #2e367f;
    a { color: #2e367f; padding: 0.25rem 0; }
  }
}
</style>