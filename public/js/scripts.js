$(document).ready(function() {
	$('form').on('submit', function() {
		var form = $(this);
		$('.modal').modal('hide');

		var title_attr = form.attr('data-modal-title');
		if( typeof title_attr !== 'undefined' && title_attr !== false && title_attr != '' ) {
			var title = form.attr('data-modal-title'));
		} else {
			var title = 'Submitting the form';
		}

		var body_attr = form.attr('data-modal-body')
		if( typeof body_attr !== 'undefined' && body_attr !== false && title_attr != '' ) {
			var body = form.attr('data-modal-body');
		} else {
			var body = 'Please wait while we submit the form...';
		}
		showModal(title, body);
	});
});

function showModal(title, body) {
	$('#generic_loading_modal_title').html(title);
	$('#generic_loading_modal_body').html(body);
	$('#generic_loading_modal').modal({
		backdrop: 'static',
		keyboard: false
	});
}

function closeModal() {
	$('#generic_loading_modal').modal('hide');
}

function ajaxCall(url, data, success) {
	$.ajax({
		dataType: "json",
		type: "POST",
		url: url,
		data: data,
	}).done(function(msg) {
		return success(msg);
	});
}