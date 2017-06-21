jQuery(document).ready(function() {
 jQuery("a.scrollto").click(function () {
 var elementClick = jQuery(this).attr("href")
 var destination = jQuery(elementClick).offset().top;
 jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 800);
 return false;
 });
 });