$(function(){
	
	/*---bm---*/
	
	$('#close a').click(function(){
		if($('body.close').length){
			$('body').removeClass('close');
			$('body').removeClass('opensubmenu');
		}else{
			$('body').addClass('close');
		}
		return false;
	});
	
	/*---Resize---*/
	
	function ResizeS1(){
		if(window.innerWidth <= 1050){
			$('body').addClass('sp');
		}else{
			$('body').removeClass('sp');
		}
	}
	$(window).on('resize', ResizeS1);
	
	/*---aside nav---*/
	
	$('aside ul.s_list li').each(function(){
		$(this).children('ul').hide();
		if($(this).hasClass('active')){
			$(this).children('ul').show();
		}
	});
	$('aside ul.s_list i').click(function(){
		if($(this).parent().parent().find('>ul').css('display') == 'none'){
			$(this).parent().parent().parent().find('ul').slideUp(400, 'easeInOutQuad');
			$(this).parent().parent().find('>ul').slideDown(300, 'easeInOutQuad');
		}else{
			$(this).parent().parent().find('ul').slideUp(400, 'easeInOutQuad');
		}
		return false;
	});
	
	/*---m_list---*/
	
	$('body').on('click', '.datatable tbody tr', function(e){
		if(window.innerWidth <= 750){
			$(this).find('ul.list_action, .column-agency, .column-date').slideToggle(400, 'easeInOutCubic');
		}
	});
	$('body').on('click', '.datatable tbody tr a, .datatable tbody tr input, .datatable tbody tr label', function(e){
		e.stopPropagation();
	});
	
	/*---datatable order---*/
	
	$('.datatable thead a[class*="order-"]').click(function(){
		var order = $(this).attr('class');
		$(this).parents('thead').find('a').removeClass().addClass('order-none');
		if(order == 'order-des'){
			$(this).removeClass().addClass('order-asc');
		}else{
			$(this).removeClass().addClass('order-des');
		}
		return false;
	});
	
	/*---action_delete---*/
	
	$('.action_delete').on('click', function(){
		if(window.confirm('一度削除すると復元できません。\r\n本当に削除しますか？')) {
		}
	});
	
	/*---m_sale_setting---*/

	$('#m_sale_setting, #m_sale .col-12 .content .btn2 a').on("click", function(){
		$('#m_sale .col-12 .content').toggleClass('show');
	});
	$(document).on('click', function(event){
		if(!$(event.target).closest('#m_sale .col-12 .content, #m_sale #m_sale_setting, #ui-datepicker-div').length){
			$('#m_sale .col-12 .content').removeClass('show');
		}
	});

})

$(window).load(function(){
	
	/*---Resize---*/
	
	if(window.innerWidth <= 1050){
		$('body').addClass('close sp');
	}
	
	/*---loading---*/
	
	$('#load .loader').delay(300).queue(function(){
		$(this).stop().animate({opacity: 0}, 300, 'easeInOutCubic');
		$('#load').stop().animate({opacity: 0}, 800, 'easeInOutCubic', function(){
			$('#load').css({display: 'none'});
		});
	});

});