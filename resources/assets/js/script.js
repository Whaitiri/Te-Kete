const slideoutButton = document.getElementById('slideoutButton');
const adminSideMenu = document.getElementById('adminSideMenu');

$(document).ready(function(){
	$(".dropdown-trigger").click(function(){
		$(".dropdown").toggleClass("is-active");
	})
})

slideoutButton.onclick = function() {
	this.classList.toggle('is-active');
	document.getElementById('adminSideMenu').classList.toggle('is-active');
}
