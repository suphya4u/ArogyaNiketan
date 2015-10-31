

function initCommonSections(selectedMenuItemId){
  $("#header").load("header.html", function() {
    $(selectedMenuItemId).attr("class", "current");
  });

  $("#footer").load("footer.html");
  $("#sidebar").load("sidebar.html");
}
