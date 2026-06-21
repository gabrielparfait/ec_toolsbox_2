<template>
  <div>
    <Header />
    <Menu />
    <h3 id="AudioVisualEditing">
      MONTAGE VIDÉO
    </h3>
    <h4>
        Conception d'une vidéo
      </h4>
    <p>
        La réussite d’un montage vidéo 
        repose, avant tout aspect technique, sur une bonne préparation. Concevoir sa vidéo en amont permet de clarifier ses idées, de
        structurer son message et de faciliter tout le processus de montage.
        La première étape consiste donc à <strong>définir son idée et son objectif</strong>. Il est 
        important de savoir ce que l’on veut 
        transmettre (informer, raconter ou promouvoir) et de bien indentifier le public visé. 
        Cela permet d’adapter le ton, le format et le contenu de la vidéo.
        Vient ensuite la phase d’<strong>écriture</strong>, avec la réalisation d’un synopsis ou d’un script. 
        Cette étape permet d’organiser ses idées, de structurer la vidéo (ouverture, développement, chute) et d’anticiper le rythme global.
    </p>
    <h5 class="text-vid">Rédiger un script de vidéo Youtube qui captive et engage</h5>
    <b-row align-h="center">
      <iframe
        width="560"
        height="315"
        src="https://www.youtube.com/embed/bxHpZuShu60"
        frameborder="0"
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen
      ></iframe>
    </b-row>
    <p class="text-vid none-margin-top">
      Chaîne : Loïc - La vidéo au smartphone
    </p>
    <h5 class="text-vid">Rédiger un script vidéo qui fonctionne</h5>
    <b-row align-h="center">
      <iframe
        width="560"
        height="315"
        src="https://www.youtube.com/embed/n4Kz9unIGoA"
        frameborder="0"
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen
      ></iframe>
    </b-row>
    <p class="text-vid none-margin-top">
      Chaîne : TopoVideo
    </p>
    <h4>Le storyboard</h4>
    <p>Le <strong>storyboard</strong> est un outil essentiel pour visualiser la vidéo avant le tournage. 
        Il permet de représenter les différentes scènes, de prévoir les types de plans 
        et d’anticiper les transitions ou éléments visuels (textes, effets, animations).
    </p>
    <h5 class="text-vid">Comment concevoir son storyboard ?</h5>
    <b-row align-h="center">
      <iframe
        width="560"
        height="315"
        src="https://www.youtube.com/embed/K5di6BqQ5gc"
        frameborder="0"
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen
      ></iframe>
    </b-row>
    <p class="text-vid none-margin-top">
      Chaîne : Apprendre le scénario - Écrire un film 
    </p>
    <p>
        Il est également important de <strong>préparer son tournage</strong> en listant les plans nécessaires, 
        en anticipant les contraintes techniques (lumière, son, matériel) et en organisant les 
        prises de vues. Une bonne préparation évite les oublis et fait gagner un temps précieux.
        Pensez aux transitions entre les scènes et aux changements de plans pour
         rendre le montage plus fluide, dynamique et cohérent.
    </p>
    <h4>La partie technique du montage</h4>
    <h4> 1. Le choix du logiciel de montage</h4>
    <p>
        Le bon outil n’est pas nécessairement le plus coûteux, mais celui qui correspond à votre niveau 
        et à vos besoins.
    </p>
    <h5 class="h5better">Niveau Débutant</h5>
    <br>
    <p>
      <b-row class="justify-content-md-center breath-top">

        <b-col class="right-col">
          <a href="https://clipchamp.com/fr/" target="_blank">
            <b-button class="icon" id="popover-ClipChamp">
              <img
                src="@/assets/Picture_Editing/Clipchamp-icon.png"
                class="Logo"
                alt="ClipChamp"
              />
            </b-button>
          </a>
        </b-col>
        <b-popover target="popover-ClipChamp" triggers="hover" placement="top">
          ClipChamp
        </b-popover>

        <b-col class="right-col">
          <a href="https://www.capcut.com/" target="_blank">
            <b-button class="icon" id="popover-Capcut">
              <img
                src="@/assets/Picture_Editing/Capcut-icon.png"
                class="Logo"
                alt="Capcut"
              />
            </b-button>
          </a>
        </b-col>
        <b-popover target="popover-Capcut" triggers="hover" placement="top">
          Capcut
        </b-popover>


        <b-col>
          <a href="https://inshot.com/" target="_blank">
            <b-button class="icon" id="popover-InShot">
              <img
                src="@/assets/Picture_Editing/InShot-icon.png"
                class="Logo"
                alt="InShot"
              />
            </b-button>
          </a>
        </b-col>
        <b-popover target="popover-InShot" triggers="hover" placement="top">
          InShot
        </b-popover>

      </b-row>
    </p>
    <p class="margin-top-minus">
        Ces outils sont <strong>intuitifs</strong> et <strong>faciles à prendre en main</strong>. Ils proposent des fonctionnalités 
        modernes (IA pour sous-titres automatiques, suppression de fond...) ainsi que des modèles 
        prêts à l’emploi.
    </p>
    <h5 class="h5better">Niveau Confirmé</h5>
    <p>
      <b-row class="justify-content-md-center breath-top">

        <b-col class="right-col">
          <a href="https://www.blackmagicdesign.com/fr/products/davinciresolve" target="_blank">
            <b-button class="icon" id="popover-Davinci">
              <img
                src="@/assets/Picture_Editing/DaVinci-icon.png"
                class="Logo"
                alt="Davinci"
              />
            </b-button>
          </a>
        </b-col>
        <b-popover target="popover-Davinci" triggers="hover" placement="top">
          Davinci Resolve
        </b-popover>

        <b-col>
          <a href="https://www.adobe.com/fr/products/premiere.html" target="_blank">
            <b-button class="icon" id="popover-Premiere">
              <img
                src="@/assets/Picture_Editing/Adobe_Premiere-icon.png"
                class="Logo"
                alt="Premiere"
              />
            </b-button>
          </a>
        </b-col>
        <b-popover target="popover-Premiere" triggers="hover" placement="top">
          Adobe Premiere
        </b-popover>

      </b-row>
    </p>
    <p class="margin-top-minus">Ces logiciels professionnels, plus complexes, offrent <strong>une grande liberté de création </strong>
      et permettent de réaliser <strong>des montages avancés et personnalisés.</strong>
    </p>
    <h4> 2. Se former grâce à des tutoriels</h4>
    <p>Plusieurs créateurs proposent des contenus pédagogiques 
      de qualité pour progresser en montage vidéo :
    </p>
    <a
      class="subtitle-link"
      href="https://www.youtube.com/@Paul-Monteur-Pro"
      target="_blank"
    ><strong>
      Paul-Monteur-Pro : Apprentissage du montage professionnel avec une approche orientée storytelling et efficacité.
      <b-icon icon="box-arrow-right" /></strong>
    </a>
    <br>
    <a
      class="subtitle-link"
      href="https://www.youtube.com/@strategie-video"
      target="_blank"
    ><strong>
      Stratégie-Vidéo: Optimisation des contenus pour YouTube et les réseaux sociaux.
      <b-icon icon="box-arrow-right" /></strong>
    </a>
    <br>
    <a
      class="subtitle-link"
      href="https://www.youtube.com/@Grainedephotographe"
      target="_blank"
    ><strong>
      Graine-de-Photographe: bases techniques (prise de vue et montage).
      <b-icon icon="box-arrow-right" /></strong>
    </a>
    <br>
    <a
      class="subtitle-link"
      href="https://www.youtube.com/@BlackmagicDesignOfficial"
      target="_blank"
    ><strong>
      BlackmagicDesignOfficial: Ressources avancées pour maîtriser le logiciel (en anglais).
      <b-icon icon="box-arrow-right" /></strong>
      <br>
      <br>
    </a>
        <br>
    <p>Pour ceux qui veulent apprendre le montage vidéo, voici un tuto réalisé par Prosper BODET, étudiant en BUT1 GEII.</p>
    <a
      class="subtitle-link pdf-line"
      href="/pdf_video/montage.pdf"
      download="Tuto_Montage_UA"
    >
    Tutoriel d'utilisation de Davinci Resolve <img class="logo-pdf" src="../../assets/logo-pdf.png" />
    </a>
    <h4>3. Ressources gratuites utiles</h4>
    <p>Pour enrichir vos productions et illustrer vos projets, il existe de nombreuses bibliothèques de contenus libres de droits pour illustrer vos projets : </p>
    <p class ="redtext">Images et vidéos :</p>
    <a
      class="subtitle-link"
      href="https://www.pexels.com/fr-fr/"
      target="_blank"
    ><strong>
      Pexels
      <b-icon icon="box-arrow-right" /></strong>
    </a>
    <br>
    <a
      class="subtitle-link"
      href="https://pixabay.com/fr/"
      target="_blank"
    ><strong>
      Pixabay
      <b-icon icon="box-arrow-right" /></strong>
    </a>
    <br>
    <br>
    <p class ="redtext" >Musiques et effets sonores :</p>
        <a
      class="subtitle-link"
      href="https://www.youtube.com/audiolibrary"
      target="_blank"
    ><strong>
      Youtube Audio Library
      <b-icon icon="box-arrow-right" /></strong>
    </a>
    <br>
    <a
      class="subtitle-link"
      href="https://mixkit.co/"
      target="_blank"
    ><strong>
      Mixkit
      <b-icon icon="box-arrow-right" /></strong>
    </a>
    <br>
    <br>
    <p class ="redtext">Polices de caractères :</p>
        <a
      class="subtitle-link"
      href="https://www.dafont.com/fr/"
      target="_blank"
    ><strong>
      DaFont
      <b-icon icon="box-arrow-right" /></strong>
    </a>
    <br>
    <a
      class="subtitle-link"
      href="https://fonts.google.com/"
      target="_blank"
    ><strong>
      Google Fonts
      <b-icon icon="box-arrow-right" /></strong>
    </a>
    <br>
    <br>
    <h4>4. Bonnes pratiques pour une communication percutante</h4>
    <p><strong>La règle des 3 secondes</strong></p>
    <p >→ Alternez les plans ou ajoutez des éléments visuels (texte, zoom, transitions) toutes les 3 secondes, ou en rythme avec la musique, afin de maintenir l’attention.</p>
    <p><strong>Le son avant l’image</strong></p>
    <p>→ Une qualité sonore médiocre nuit fortement à la perception globale. Il est recommandé d’utiliser un micro adapté ou des outils comme Adobe Podcast pour améliorer l’audio.
    </p>
    <p><strong>Le sous-titrage</strong></p>
    <p>→ Essentiel pour les formats courts : environ 85 % des vidéos mobiles sont visionnées sans le son.</p>
    <br>
    <p>Les outils comme CapCut ou Premiere Pro permettent de générer rapidement des sous-titres automatiques.</p>

    <NextPrevBtn v-bind:nxtprev-list="nxtprevAudioVisualEditing" />
    <Footer />
    
    
  </div>
</template>
<style lang="scss">
    #h5red {
        font-size: 9pt;
        text-align: center;
        margin-top: 20vh;
        color: #ededed
    }
    .h5better{
      margin-left:10%;
      margin-bottom:-7%;
    }
    .right-col{
      margin-right: -50%;
    }
    .margin-top-minus{
      margin-top:-5%;
    }
    .redtext{
      color: #c52636
    }
</style>
<script lang="ts">
import { Component, Vue } from "vue-property-decorator";
import Header from "@/components/Header.vue";
import Menu from "@/components/Menu.vue";
import { BIcon, BIconBoxArrowRight, BPopover } from "bootstrap-vue";
import Footer from "@/components/Footer.vue";
import NextPrevBtn from "@/components/NextPrevBtn.vue";
import { hasProto } from "vue-class-component/lib/util";
@Component({
  components: {
    Header,
    Menu,
    BIconBoxArrowRight,
    BIcon,
    BPopover,
    NextPrevBtn,
    Footer,
  },
})
export default class AudioVisualEditing extends Vue {
  protected nxtprevAudioVisualEditing = {
    BoolPrev: true,
    BoolNext: false ,
    PrevImage: "/thumbnail3.png",
    NextImage: "",
    PrevLink: "/Audiovisuel/Fondamentaux",
    NextLink: "",
  };
}
</script>
