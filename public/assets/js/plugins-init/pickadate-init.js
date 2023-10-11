(function($) {
    "use strict"

    //date picker classic default
    $('.datepicker-default').pickadate(
        {
            format: 'mm/dd/yyyy',
            formatSubmit: 'mm/dd/yyyy',
            hiddenPrefix: 'prefix__',
            invalid: 'Enter a valid date',
            
        },

        
    );

})(jQuery);