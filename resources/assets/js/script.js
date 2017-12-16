const slideoutButton = document.getElementById('slideoutButton');
const adminSideMenu = document.getElementById('adminSideMenu');

$(document).ready(function(){
	$(".dropdown-trigger").click(function(){
		$(".dropdown").toggleClass("is-active");
	})

	$(".modalToggle, .modal-close, .modal-background").click(function(){
		event.preventDefault();
		$("#modalContainer").toggleClass("is-active");
	})

})
