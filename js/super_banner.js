/* 1 */

$("body").removeClass("mini-navbar"); SmoothlyMenu(); if (localStorageSupport) { localStorage.setItem("collapse_menu", "off") };

/* 2 */

$("body").addClass("fixed-sidebar"); $(".sidebar-collapse").slimScroll({ height: "100%", railOpacity: 0.9 }); if (localStorageSupport) { localStorage.setItem("fixedsidebar", "on") };

/* 3 */

$(".navbar-fixed-top").removeClass("navbar-fixed-top").addClass("navbar-static-top"); $("body").removeClass("fixed-nav"); if (localStorageSupport) { localStorage.setItem("fixednavbar", "off") };

/* 4 */

$("body").removeClass("boxed-layout"); if (localStorageSupport) { localStorage.setItem("boxedlayout", "off") };

/* 5 */

$(".footer").removeClass("fixed"); if (localStorageSupport) { localStorage.setItem("fixedfooter", "off") };

/* 6 */

try { if (localStorageSupport) { var collapse = localStorage.getItem("collapse_menu"); var fixedsidebar = localStorage.getItem("fixedsidebar"); var fixednavbar = localStorage.getItem("fixednavbar"); var boxedlayout = localStorage.getItem("boxedlayout"); var fixedfooter = localStorage.getItem("fixedfooter"); if (collapse == "on") { $("#collapsemenu").prop("checked", "checked") } if (fixedsidebar == "on") { $("#fixedsidebar").prop("checked", "checked") } if (fixednavbar == "on") { $("#fixednavbar").prop("checked", "checked") } if (boxedlayout == "on") { $("#boxedlayout").prop("checked", "checked") } if (fixedfooter == "on") { $("#fixedfooter").prop("checked", "checked") } } } catch (exception) { console.log(exception) };

/* 7 */

var hdr_full_logo = "/image/company_logo?img_id=45034&amp;t=1709615946695"; var hdr_mini_logo = "https://miespe.espe.edu.ec/LP53-ellucian-theme/images/favicon.jpg"; $(document).ready(function () { $(".navbar-minimalize").click(function () { if ($("body").hasClass("mini-navbar")) { document.getElementById("siteLogo").src = hdr_full_logo } else { document.getElementById("siteLogo").src = hdr_mini_logo } }) });
