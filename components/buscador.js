$(document).ready(function() {
    $(".buscador a").click(function() {
        $(this).parent(".buscador").toggleClass("collapsed");
      });
    });