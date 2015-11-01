

function initCommonSections(selectedMenuItemId){
  $("#header").load("html/header.html", function() {
    $(selectedMenuItemId).attr("class", "current");
  });

  $("#footer").load("html/footer.html");
  $("#sidebar").load("html/sidebar.html");
}
