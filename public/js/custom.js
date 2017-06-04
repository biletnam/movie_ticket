$(document).ready(function(){

	// Initializing Select2
	$('.select2').select2({
        placeholder: "Please choose",
        allowClear: true,
        maximumSelectionSize: 1,
        width: '100%',
	});''

	$('.btnNext').click(function(){
		$('.nav-tabs > .active').next('li').find('a').trigger('click');
	});

	$('.btnPrevious').click(function(){
		$('.nav-tabs > .active').prev('li').find('a').trigger('click');
	});
});