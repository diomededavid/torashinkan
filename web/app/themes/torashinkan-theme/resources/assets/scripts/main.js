// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
    common,
  // Home page
    home,
  // About Us page, note the change from about-us to aboutUs.
    aboutUs,
});

// import then needed Font Awesome functionality
import {library, dom} from '@fortawesome/fontawesome-svg-core';
import {faFacebook, faLinkedin, faTwitter, faYoutube} from '@fortawesome/free-brands-svg-icons';
import {faBars} from '@fortawesome/free-solid-svg-icons';

// add the imported icons to the library
library.add(faBars, faFacebook, faTwitter, faLinkedin, faYoutube);

// tell FontAwesome to watch the DOM and add the SVGs when it detects icon markup
dom.watch();

// Load Events
jQuery(document).ready(() => routes.loadEvents());
