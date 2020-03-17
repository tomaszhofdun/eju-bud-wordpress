import $ from "jquery";
import smoothScroll from "jquery-smooth-scroll";

class ScrollToTop {
  constructor() {
    this.scrollToTopIcon = $(".scrollToTopIcon");
    this.addSmoothScrolling();
    this.events();
  }

  events() {
    window.onscroll = this.makeVisible.bind(this);
  }
  addSmoothScrolling() {
    this.scrollToTopIcon.smoothScroll({
      speed: 1000
    });
  }
  makeVisible() {
    if (window.pageYOffset > 800) {
      this.scrollToTopIcon.fadeIn();
    } else {
      this.scrollToTopIcon.fadeOut();
    }
  }
}

export default ScrollToTop;
