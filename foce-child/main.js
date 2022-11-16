/*###########################################################################
############################ PARALLAX VIDEO ################################
###########################################################################*/
var video = document.getElementsByClassName('video-parallax');
new simpleParallax(video);

/*###########################################################################
############################ SLIDER ################################
###########################################################################*/				

var swiper = new Swiper(".mySwiper", {
	effect: "coverflow",
	grabCursor: true,
	centeredSlides: true,
	slidesPerView: "auto",
	coverflowEffect: {
		rotate: 50,
		stretch: 0,
		depth: 10,
		modifier: 1,
		slideShadows: true,
	},
	breakpoints: {
		"@0.00": {
			slidesPerView: 1,
			spaceBetween: 10,
		},
		"@0.75": {
			slidesPerView: 2,
			spaceBetween: 20,
		},
		"@1.00": {
			slidesPerView: 3,
			spaceBetween: 40,
		},
	"@1.50": {
			slidesPerView: 4,
			spaceBetween: 50,
		},
	},
});

/*###########################################################################
############################ APPARITION FADE ##############################
###########################################################################*/				
				
const observerUp = new IntersectionObserver(entries => {
	// Loop over the entries
	entries.forEach(entry => {
		// If the element is visible
		if (entry.isIntersecting) {
			// Add the animation class
			entry.target.classList.add('section-animation-fadeInUp');
		}
	});
});

const observerDown = new IntersectionObserver(entries => {
	// Loop over the entries
	entries.forEach(entry => {
		// If the element is visible
		if (entry.isIntersecting) {
			// Add the animation class
			entry.target.classList.add('section-animation-fadeInDown');
		}
	});
});

observerDown.observe(document.querySelector('.banner'));
observerDown.observe(document.querySelector('.banner-video'));
observerUp.observe(document.querySelector('.story > h2'));
observerUp.observe(document.querySelector('.banner > img'));
observerUp.observe(document.querySelector('.banner-video > img'));
observerUp.observe(document.querySelector('#characters'));
observerUp.observe(document.querySelector('#place'));
observerUp.observe(document.querySelector('#studio'));
observerUp.observe(document.querySelector('.story__article'));

/*###########################################################################
############################ DEPLACEMENT DES NUAGES #######################
###########################################################################*/				
				
const flightPath = {
	curviness: 1.25,
	autoRotate: true,
	values: [{x: -300}]
};

	const tween = new TimelineLite();

	tween.add(
	TweenLite.to(".Grand-Nuage, .Petit-Nuage", 1, {
		bezier: flightPath,
		ease: Power1.easeInOut
	})
);

	const controller = new ScrollMagic.Controller();

	const scene = new ScrollMagic.Scene({
		triggerElement:'#place',
		duration: 700,
	})

	.setTween(tween)
	.addTo(controller)
	
	
/*##########################################################
############################ NAVBAR ########################
############################################################*/	
	
$(".btn").on("click", function(){
  $(".btn").toggleClass("close-btn");
  $(".menu").toggleClass("open-menu");
});