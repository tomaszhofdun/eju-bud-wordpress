import $ from "jquery";

class StickyHeader {
  constructor() {
    this.navbar = document.getElementById("menu-header");
    this.stickyOffset = document.getElementsByClassName("menu-header__nav")[0].offsetTop;
    this.events();
  }

  events() {
    var that = this;
    $(window).scroll(function() {
      that.sticky();
    });
  }

  sticky() {
    if (window.pageYOffset > this.stickyOffset) {
      console.log("d");
      this.navbar.classList.add("menu-header--sticky");
    } else {
      this.navbar.classList.remove("menu-header--sticky");
    }
  }
}

export default StickyHeader;
