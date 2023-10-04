/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './stimulus.js'; // Stimulus
import './styles/app.scss'; // SCSS
import './styles/app.css'; // CSS (Overwrites)

require('@popperjs/core'); // Popper JS wird von Bootstrap erwartet.
require('bootstrap'); // Das Bootstrap-Modul exportiert nicht und sendet nichts als return
require('simplebar/dist/simplebar.css');