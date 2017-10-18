$(window, document, undefined).ready(function() {

    /**********************
     * Input Used Value
     **********************/

    function monitorInput() {
        var input = $('input');

        for (var i = 0; i < input.length; i++) {
            if (input.eq(i).val()) {
                input.eq(i).addClass('used');
            }
        }

        input.blur(function() {
            var $this = $(this);
            if ($this.val())
                $this.addClass('used');
            else
                $this.removeClass('used');
        });
    }

    monitorInput();

    setTimeout(monitorInput, 100);


    /**********************
     * Effect Ripples
     **********************/

    var $ripples = $('.ripples');

    $ripples.on('click.Ripples', function(e) {

        var $this = $(this);
        var $offset = $this.parent().offset();
        var $circle = $this.find('.ripplesCircle');

        var x = e.pageX - $offset.left;
        var y = e.pageY - $offset.top;

        $circle.css({
            top: y + 'px',
            left: x + 'px'
        });

        $this.addClass('is-active');

    });

    $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
        $(this).removeClass('is-active');
    });




    /**********************
     * Datenpicker
     **********************/
    var initialDate = $('#form_initialDate'),
        initialTime = $('#form_initialTime'),
        endingDate  = $('#form_endingDate'),
        endingTime  = $('#form_endingTime');

    initialDate.datetimepicker({
        format: 'DD.MM.YYYY'
    });

    endingDate.datetimepicker({
        format: 'DD.MM.YYYY'
    });

    initialTime.datetimepicker({
        format: 'HH:mm'
    });

    endingTime.datetimepicker({
        format: 'HH:mm'
    });


    $('.fa-calendar').click(function () {
        $(this).closest('.row').find('input').trigger('focus');
    });






    /**********************
     * dform Datum
     **********************/

    var dform = $('#dForm'),
        checkbox = $('input[type="checkbox"]');

    checkbox.on('click', function () {
        if (checkbox.prop('checked') == true) {
            dform.find('#dtime1 .form-group input').addClass( "disabled").prop( "disabled", true );
            dform.find('#dtime1 .input-group-addon').addClass( "disabled");
            dform.find('#dtime2 .form-group input').addClass( "disabled").prop( "disabled", true );
            dform.find('#dtime2 .input-group-addon').addClass( "disabled");
        } else {
            dform.find('#dtime1 .form-group input').removeClass( "disabled").prop( "disabled", false );
            dform.find('#dtime1 .input-group-addon').removeClass( "disabled");
            dform.find('#dtime2 .form-group input').removeClass( "disabled").prop( "disabled", false );
            dform.find('#dtime2 .input-group-addon').removeClass( "disabled");
        }
    });




    /**********************
     * dform Event Input
     **********************/
     $.event.special.inputchange = {
        setup: function() {
            var self = this, val;
            $.data(this, 'timer', window.setInterval(function() {
                val = self.value;
                if ( $.data( self, 'cache') != val ) {
                    $.data( self, 'cache', val );
                    $( self ).trigger( 'inputchange' );
                }
            }, 20));
        },
        teardown: function() {
            window.clearInterval( $.data(this, 'timer') );
        },
        add: function() {
            $.data(this, 'cache', this.value);
        }
    };

    initialDate.on('inputchange', function() {
        endingDate.val(this.value);

        monitorInput();
    });




    /**********************
     * Add Field
     **********************/

    var addButton = $('.addButton');
    var wrapper = $('.newName');

    $(addButton).click(function(){
        wrapper.find('.disabled:first').removeClass('disabled');
    });

    $(wrapper).on('click', '.removeButton', function(e){
        e.preventDefault();

        var row = $(this).closest('.row-flex'),
            input =  row.find('input');

        input.val('');
        row.addClass('disabled');
    });
});