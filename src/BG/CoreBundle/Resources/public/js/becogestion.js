//Dynamic addition of forms 
$(document).ready(function() {
  var $wrapper = $('.js-services-wrapper');

  $wrapper.on('click', '.js-remove-services', function(e) {
      e.preventDefault();

      $(this).closest('.js-services-item')
          .fadeOut('slow')
          .remove();

      $wrapper.data('index', $wrapper.data('index') - 1);
  });

  $wrapper.on('click', '.js-services-add', function(e) {
      e.preventDefault();

      var prototype = $wrapper.data('prototype');

      var index = $wrapper.data('index');

      var newForm = prototype.replace(/__name__/g, index);

      $wrapper.data('index', index + 1);

      $(this).parent().before(newForm);
  });
});
//Dynamic addition of forms

$(document).ready(function(){

  //FlashBag
  $('.flash').delay(2000).fadeOut('slow');
  //FlashBag

  //Access from BGCustomer/Options to BGCustomer/Modify
  $('#bg_customerbundle_customer_customer').on("select2:select", function(e) {
    window.location.replace(Routing.generate('BG_CustomerBundle_modify', { id: $('#bg_customerbundle_customer_customer').val() } ));
  });
  //Access from BGCustomer/Options to BGCustomer/Modify

  //Invoice generation confirmation
  $('#generateInvoice').on("click", function(e) {
    if (confirm('Êtes-vous sûr de vouloir générer une facture ?') == false) {
      e.preventDefault();
      return false;
    }
  });
  //Invoice generation confirmation

  //Slip generation confirmation
  $('#generateSlip').on("click", function(e) {
    if (confirm('Êtes-vous sûr de vouloir générer un bordereau ?') == false) {
      e.preventDefault();
      return false;
    }
  });
  //Slip generation confirmation
});

//Handle for plans in quote creation/modification
document.addEventListener("DOMContentLoaded", function(event){
  jQuery.expr[':'].regex = function(elem, index, match) {
      var matchParams = match[3].split(','),
          validLabels = /^(data|css):/,
          attr = {
              method: matchParams[0].match(validLabels) ?
                          matchParams[0].split(':')[0] : 'attr',
              property: matchParams.shift().replace(validLabels,'')
          },
          regexFlags = 'ig',
          regex = new RegExp(matchParams.join('').replace(/^s+|s+$/g,''), regexFlags);
      return regex.test(jQuery(elem)[attr.method](attr.property));
  }

  function hideShowFloors(value, building) {
    for (var i = 0; i < 10; i++) {
      if(i < value){
          $('.hide-' + i).filter(function() {
            return $(this).data("attribute") == building
          }).show("slow");
      }
      else {
          $('.hide-' + i).filter(function() {
            return $(this).data("attribute") == building
          }).hide("slow");

          $('.hide-' + i).filter(function() {
            return $(this).data("attribute") == building
          }).find('.form-check-input').prop("checked", false);
      }
    }
  }

  function hideShowBasements(value, building) {
    for (var i = -1; i > -6; i--) {
      if(i >= (value*(-1))){
          $('.hide-' + i).filter(function() {
            return $(this).data("attribute") == building
          }).show("slow");
      }
      else {
          $('.hide-' + i).filter(function() {
            return $(this).data("attribute") == building
          }).hide("slow");

          $('.hide-' + i).filter(function() {
            return $(this).data("attribute") == building
          }).find('.form-check-input').prop("checked", false);
      }
    }
  }

  function hideShowGardenLevel(value, building) {
    if(value){
      $('.hide-RDJ').filter(function() {
        return $(this).data("attribute") == building
      }).show("slow");
    }
    else{
      $('.hide-RDJ').filter(function() {
        return $(this).data("attribute") == building
      }).hide("slow");

      $('.hide-RDJ').filter(function() {
        return $(this).data("attribute") == building
      }).find('.form-check-input').prop("checked", false);
    }
  }

  function selectAll(value, building) {
    for (var i = -5; i < 10; i++) {
      $('.hide-' + i).filter(function() {
        return $(this).data("attribute") == building && $(this).is(":visible")
      }).find('.form-check-input').prop("checked", value);
    }
    $('.hide-RDJ').filter(function() {
      return $(this).data("attribute") == building && $(this).is(":visible")
    }).find('.form-check-input').prop("checked", value);
    $('.hide-NA').filter(function() {
      return $(this).data("attribute") == building && $(this).is(":visible")
    }).find('.form-check-input').prop("checked", value);
  }

  for (var i = 0; i < $('.js-services-mywrapper').data('index'); i++){
    hideShowFloors($('bg_quotebundle_quote_buildings_' + i + '_floors').val(), i);
    hideShowBasements($('bg_quotebundle_quote_buildings_' + i + '_basements').val(), i);
    hideShowGardenLevel($('bg_quotebundle_quote_buildings_' + i + '_gardenLevel').prop("checked"), i);
  }

  $('input:regex(id,bg_quotebundle_quote_buildings_[0-9]+_floors)').on('keydown change', function(e){
    hideShowFloors(this.value, parseInt(this.id.match(/\d+/g).map(Number)));
  });

  $('input:regex(id,bg_quotebundle_quote_buildings_[0-9]+_basements)').on('keydown change', function(e){
    hideShowBasements(this.value, parseInt(this.id.match(/\d+/g).map(Number)));
  });

  $('input:regex(id,bg_quotebundle_quote_buildings_[0-9]+_gardenLevel)').change(function(e){
    hideShowGardenLevel(this.checked, parseInt(this.id.match(/\d+/g).map(Number)));
  });

  $('input:regex(id,selector[0-9]+)').change(function(e){
    selectAll(this.checked, parseInt(this.id.match(/\d+/g).map(Number)) - 1);
  });

  $('#showAll').on('click', function(e){
    var building = $(this).data("attribute");
    for (var i = -5; i < 10; i++) {
      $('.hide-' + i).filter(function() {
        return $(this).data("attribute") == building
      }).show("slow");
    }
    e.preventDefault();
  });

  $('#hideAll').on('click', function(e){
    var building = $(this).data("attribute");
    for (var i = -5; i < 10; i++) {
      $('.hide-' + i).filter(function() {
        return $(this).data("attribute") == building && $(this).find('.form-check-input').is(":checked") == false
      }).hide("slow");
    }
    $('.hide-NA, .hide-RDJ').filter(function() {
      return $(this).data("attribute") == building && $(this).find('.form-check-input').is(":checked") == false
    }).hide("slow");
    e.preventDefault();
  });
});
//Handle for plans in quote creation/modification

//Modal for quote round
  function modal(id) {
    apprise('Indiquer le montant', {'input':true}, function(res) {
      if(res)
        $.ajax({
          url: Routing.generate('BG_QuoteBundle_round', { id: id, value: res } ), 
          success: function(){
            window.location.replace(Routing.generate('BG_QuoteBundle_view', { id: id } ));
          },
          error: function(json){    
            $(".aErrors").html('<h2 class="small" style="color:red;">' + json.responseJSON['error'] + '</h2>');
          }
        });
    });
  }
//Modal for quote round