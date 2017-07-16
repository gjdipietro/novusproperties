(function () {
  document.addEventListener("DOMContentLoaded", function(event) { 
    var showMenuBtn = document.querySelector('.js-menu-toggle');
    var menu = document.querySelector('.js-menu');

    addEventListeners();
    
    function addEventListeners() {
      showMenuBtn.addEventListener('click', toggleSideNav);
      showMenuBtn.addEventListener('tap', toggleSideNav);
    }
    function toggleSideNav () {
      menu.classList.toggle('c-masthead__nav--visible');
    } 
  });
})();