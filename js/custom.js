// to get current year
function getYear() {
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    document.querySelector("#displayYear").innerHTML = currentYear;
}
getYear();

// nav menu 
function openNav() {
    document.getElementById("myNav").classList.toggle("menu_width")
    document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
}

var pageno = 1;
var perpage = 6;
var loading = false;

function loadData(pagination = false){
	if (!pagination) {
		pageno = 1;
	}
	$.ajax({
		url : $('#siteurl').val(),
		data: { 
			minPrice: $('.minPrice').val(), 
			maxPrice: $('.maxPrice').val(),
			minSize: $('.minSize').val(), 
			maxSize: $('.maxSize').val(),
			sortBy: $('.sortBy').val(),
			pageno: pageno,
			perpage: perpage
		},
		type : 'GET',
		success: function(response){
			if (pagination == true) {
				$('.sale_container').append(response);
			} else {
				$('.sale_container').html(response);
			}
		},
		error: function(response){
			alert(response);
		}
	});
}

$(window).scroll(function() {
    if ($(window).scrollTop() + 1 >= $('body').height() - $(window).height()) {
		if (loading == false) {
			loading = true;
			pageno+=1;
			loadData(true);
			
			setTimeout(function(){
				loading = false;
			}, 3000);
		}
    }
});