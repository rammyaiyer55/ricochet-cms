// TinyMCE WYSIWYG textarea selector script.
tinymce.init({ selector:'textarea' });

// Select all checkbox script.
$(document).ready(function () {

	$('#selectAllBoxes').click(function (event) {
		if(this.checked) {
			$('.checkboxes').each(function () {
				this.checked = true;
			});
		} else {
			$('.checkboxes').each(function () {
				this.checked = false;
			});
		}
	});

});