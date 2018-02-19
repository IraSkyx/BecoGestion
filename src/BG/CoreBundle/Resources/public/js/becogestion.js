$(document).ready(function() {
  var $wrapper = $('.js-services-wrapper');

  $wrapper.on('click', '.js-remove-services', function(e) {
      e.preventDefault();

      $(this).closest('.js-services-item')
          .fadeOut('slow')
          .remove();

      $wrapper.data('index', $wrapper.data('index') - 1);

      /*for ... {
        $('#bg_corebundle_quote_buildings_' + index + '_num').val(index + 1);
      }*/
      //To do
  });

  $wrapper.on('click', '.js-services-add', function(e) {
      e.preventDefault();

      var prototype = $wrapper.data('prototype');

      var index = $wrapper.data('index');

      var newForm = prototype.replace(/__name__label__/g, 'Bâtiment N°' + (index+1)).replace(/__name__/g, index);

      $wrapper.data('index', index + 1);

      $(this).parent().before(newForm);

      $('#bg_corebundle_quote_buildings_' + index + '_num').val(index + 1);
  });

  /*$wrapper.on('click', '.js-services-add', function(e) {
      e.preventDefault();

      var prototype = $wrapper.children().first().prop('outerHTML');

      var index = $wrapper.data('index');

      var newForm = prototype.replace(/__name__label__/g, 'Bâtiment N°' + (index+1)).replace(/__name__/g, index);

      $wrapper.data('index', index + 1);

      $(this).parent().before(newForm);

      $('#bg_corebundle_quote_buildings_' + index + '_num').val(index + 1);
  });*/
});


$(document).ready(function(){

  $('.flash').delay(2000).fadeOut('slow');

  $('#bg_corebundle_customer_customer').on("select2:select", function(e) {
    window.location.replace(Routing.generate('BG_CoreBundle_customers', { action: $('#bg_corebundle_customer_customer').val() } ));
  });
  }
);

$(document).ready(function(){

  $('#generateInvoice').on("click", function(e) {
    if (confirm('Êtes-vous sûr de vouloir générer une facture et un bordereau d\'envoi ?') == false) {
      e.preventDefault();
      return false;
    }
  });
  }
);

$(document).ready(function(){

});
