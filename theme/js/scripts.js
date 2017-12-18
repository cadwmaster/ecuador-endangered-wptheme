(function($) {
    $(document).ready(function(){

        $('#volunteers-join').click(function () {
            $('#volunteers-form').submit();
        });
        
        $('#volunteers-form').submit(function (event) {
            var _data = { 'action' : 'submit_volunteer'};
            $.ajax({
                type: 'POST',
                url: EE.ajaxUrl,
                data: _data, 
                dataType: 'json',
                complete : function(responseText, statusText, xhr, $form) {
                    var message = $('#volunteers-form .message');
                    message.html('Your form has been submitted successfully');
                }
            });
    
            // stop the form from submitting the normal way and refreshing the page
            event.preventDefault();
        });
    });
})(jQuery);