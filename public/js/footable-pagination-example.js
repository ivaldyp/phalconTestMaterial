// Pagination
	// -----------------------------------------------------------------
	$('# ').footable();
	$('#demo-show-entries').change(function (e) {
		e.preventDefault();
		var pageSize = $(this).val();
		$('#pagination-example').data('page-size', pageSize);
		$('#pagination-example').trigger('footable_initialized');
	});