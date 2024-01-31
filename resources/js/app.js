import "./bootstrap";

// import our custom css
import "~resources/scss/app.scss";

// Import all of Bootstrap's JS
import * as bootstrap from "bootstrap";

// dico a vite di processare le immagini nella cartella resources/img/
import.meta.glob(["../img/**"]);
