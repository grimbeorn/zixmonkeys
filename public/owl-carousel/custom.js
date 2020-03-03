// (function($){
// 	$(document).ready(function(){
// 		$(".top-search-toggle").click(function(){
// 			$(".top-search").slideToggle("normal");
// 		});

// 		$("#owl-demo").owlCarousel({
// 			navigation : true,
// 			slideSpeed : 300,
// 			paginationSpeed : 400,
// 			singleItem: true
// 		});
// 	});

// })(jQuery);


$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
});