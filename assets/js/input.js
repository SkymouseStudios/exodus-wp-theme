// test
$(document).ready(function() {
    $('input[name="sg"]').change(function() {
        if ($(this).is(":checked")) {
            $('#quantity-div').show();
			$('#quantity-div span input').prop('required',true);
        } else {
            $('#quantity-div').hide();
        }
    });
});
