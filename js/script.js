/*===========toggle nav===========
var myToggle = document.getElementById('menuBtn');

menuBtn.onclick = function () {

    menuBtn.classList.toggle('active');
    
}
*/
/*===========Scroll_Top===============
topBtn.oclick = () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth',
    
    })
  

}*/
/*===========slide-navbar-down==============
   $(window).scroll(function () {
    $n = $(window).scrollTop();
    if ( $n >= 1) {
        $('#navToggle').addClass('nav-panel');
    
    } else {
        $('#navToggle').removeClass('nav-panel');
    
    
    }




})


*/


/*===========Side_Narbar===============*/
/*===========Slider_Space==============*/
/*===========other plugins===============
$(document).ready(function(){
    $(window).scroll(function () {
        $n = $(window).scrollTop();
        if ( $n >= 600) {
            $('#ID').addClass('fixed');
        
        }if ( $n > 1200) {
            $('#ID').addClass('op_fixed');
        
        }else {
            $('#ID').removeClass('oop_fixed').addClass('class_po').removeClass('op_fixed');
        
        }  
       
    });  
        



    $(window).scroll(function() {
		var myscroll = $(window).scrollTop();
		if (myscroll >= 100) {
			$('.mysection').each(function(i) {
				if ($(this).position().top <= myscroll - 0) {
					$('ul li.active').removeClass('active');
					$('ul li').eq(i).addClass('active');
				}
			});

		} else {

			$('ul li.active').removeClass('active');
			$('ul li:first').addClass('active');
		}

		}).scroll();

});
*/
$(document).ready( function () {
    $('#dataTable').DataTable();
}); 