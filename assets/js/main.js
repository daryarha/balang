
  $(".button-collapse").sideNav();
    $(document).ready(function() {
    $('select').material_select();
    $('ul.tabs').tabs();
    $('.modal').modal();
    $('input#input_text, textarea#textarea1').characterCounter();
  });


$(function() {                         
        $(window).scroll(function(){                          
            if ($(this).scrollTop() > 100) {
                $('.navbar-fixed-top').fadeIn(500);
            } else {
                $('.navbar-fixed-top').fadeOut(500);
            }
        });
});

  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'OK',
    closeOnSelect: true,
    format: 'yyyy-mm-dd', // Close upon selecting a date,
  });

   $('.timepicker').pickatime({
    default: 'now', // Set default time: 'now', '1:30AM', '16:30'
    fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
    twelvehour: false, // Use AM/PM or 24-hour format
    donetext: 'OK', // text for done-button
    cleartext: 'Clear', // text for clear-button
    canceltext: 'Cancel', // Text for cancel-button
    autoclose: true, // automatic close timepicker
    ampmclickable: true, // make AM PM clickable
    aftershow: function(){} //Function for after opening timepicker
  });


$.extend( $.fn.dataTable.defaults, {
    responsive: true
} );


    $('#data2').DataTable().columns.adjust().responsive.recalc();
    $('#data').DataTable();
    // $('#data2').DataTable().columns.adjust().responsive.recalc();
