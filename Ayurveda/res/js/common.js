
var scrollHeaderSize = 550;

function initCommonSections(selectedMenuItemId) {
  $("#header").load("html/header.html", function() {
    $(selectedMenuItemId).attr("class", "current");
  });

  $("#footer").load("html/footer.html");
  $("#sidebar").load("html/sidebar.html");
}

function updateHeaderCss(scrollFraction) {
    $("#header").css("background","rgba(0, 77, 37, " + (1 - scrollFraction) + ")");
    $("#header").css("height", (70 + (80 * scrollFraction)) + "px");
    $("#title_top").css("font-size", (140 + (60 * scrollFraction)) + "%");
    $("#title_top").css("padding",
        (7 + (23 * scrollFraction)) + "px 0 " + (7 + (8 * scrollFraction)) + "px 0");
    $("#title_bottom").css("padding", (10 * scrollFraction) + "px 0 0px 0");
}

function updateHeader() {
	var scrollTop = $(this).scrollTop();
    if (scrollTop > scrollHeaderSize) {
    	scrollTop = scrollHeaderSize;
    }
    updateHeaderCss((scrollHeaderSize - scrollTop) / scrollHeaderSize);
}

$(document).scroll(updateHeader);
