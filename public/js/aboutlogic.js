	$(function() {
		var $list = $('ul li');
		$list.filter(':first').addClass('animated flipInX');
		setInterval(function() {
			if( $list.filter('.flipInX').index() !== $list.length) {
				$list.filter('.flipInX').removeClass('animated flipInX').next().addClass('animated flipInX');
			}
		}, 400);
	});
$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 2
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 2
            }
        }]
    });
});