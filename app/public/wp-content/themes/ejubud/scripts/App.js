import $ from "jquery";
import MobileMenu from "./modules/_mobileMenu";
import GallerySlider from "./modules/_gallerySlider";
import LtrScale from "./modules/_ltrScale";
import RevealOnScroll from "./modules/_revealOnScroll";
import NavbarLinks from "./modules/_navbarLinks";
import ScrollToTop from "./modules/_scrollToTop";
import StickyHeader from "./modules/_stickyHeader";
import FacebookPlugin from "./modules/_facebook";

var mobileMenu = new MobileMenu();
var gallerySlider = new GallerySlider();
var ltrScale = new LtrScale();
var navbarLinks = new NavbarLinks();
var scrollToTop = new ScrollToTop();
var stickyHeader = new StickyHeader();
var facebookPlugin = new FacebookPlugin();
new RevealOnScroll($(".huge-icon-section_div"), "500px");
new RevealOnScroll($(".gallery-thumbnails__title"), "90%");
new RevealOnScroll($(".form__title"), "90%");
