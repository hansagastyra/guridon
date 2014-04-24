jQuery(document).ready(function($) {
	$(document).foundation();
        var container = document.querySelector('.fluid-container');
        var mason = new Masonry( container, {
          // options
          itemSelector: '.item'
        });
});