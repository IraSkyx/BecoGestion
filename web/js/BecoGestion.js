$("#nbBuilding").bind('keyup mouseup', function () {
  $.ajax({
  url: '../model/QuerySet.php',
  type: 'post',
  data: { "getPlans": "yes"},
  success: function(result) {
    var rows = JSON.parse(result);
      var element='';
          for (var i = 0; i < $("#nbBuilding").val(); ++i) {
            element+='<div style="margin:1vh;">';
            element+='<h4 class="info-text">Bâtiment N° ' + i + '</h4>';

            element+='<select id="selectpicker' + i + '" class="selectpicker" data-live-search="true" style="width:100%;" multiple>';
            element+='<option disabled selected value> -- Sélectionnez des plans -- </option>';

            for (var j = 0; j < rows.length; ++j){
              element+='<option accesskey="' + rows[j].code + '" data-tokens="' + rows[j].level + rows[j].drawing + '">' + rows[j].level + " " + rows[j].drawing + '</option>';
            }

            element+='</select>';
            element+='</div>';
          }
      document.getElementById("multipleBat").innerHTML = element;
      $('.selectpicker').selectpicker('render');
   }
  });
});

$('#generate').on('click', function(event){
  if(!confirm("Êtes-vous sûr de vouloir générer une facture ? (Cette action est irréversible)"))
  event.preventDefault();
});

function getSelectedPlans(){
  var multipleSelect = [];

  for (var j = 0; j < $("#nbBuilding").val(); ++j) {
    var selectedKey = [];

    $('#selectpicker' + j + ' option:selected').each(function(i, value){
        selectedKey[i] = $(value).attr('accesskey');
    });

    multipleSelect[j]=selectedKey;

    }
    return multipleSelect;
}

//AddQuote script
$(document).ready(function() {
  $('#myform').submit(function(){

   var selectedCustomer = $("#selectCustomer").find("option:selected").attr("accesskey");
   var engineer_rate = $("#engineerRate").val();
   var drawing_rate = $("#drawingRate").val();
   var nb_building = $("#nbBuilding").val();
   var vat = $("#vat").val();

   var multipleSelect = getSelectedPlans();

    $.ajax({
    url: '../controller/SaveQuote.php',
    type: 'post',
    data: { "selectedCustomer": selectedCustomer, "engineer_rate": engineer_rate, "drawing_rate": drawing_rate, "nb_building": nb_building, "plans": multipleSelect, "vat": vat },
    success: function() {
        window.location = "Home.php";
      }
    });
    return false;
  });
});

$('#addAdv').on('click', function(event) {
  if($('#newPercentage').valid() == false)
      event.preventDefault();
});

//Auto-detect changes on lost focus (For AddAdvancement.php)
$('#newPercentage').on('change textInput input', function(){
  $("#message").html('<div class="alert alert-warning"><strong>Attention !</strong> Pensez à sauvegarder !</div>');
});

$('#newEngineerTime, #newDrawingTime').on('change', function(){

  //if($('#newEngineerTime').valid()){

    var newEngineerTime = $('#newEngineerTime').val();
    var newDrawingTime=$('#newDrawingTime').val();

    var res = $('#newEngineerTime').attr('accesskey').split("/");

    var code = res[0];
    var building=res[1];
    var id=res[2];

    $.ajax({
    url: '../controller/UpdatePlan.php',
    type: 'post',
    data: { "newEngineerTime": newEngineerTime, "newDrawingTime": newDrawingTime, "code": code, "building": building, "id": id },
    success: function() {
      $("#response").html('<div class="alert alert-success"><strong>Changements sauvegardés !</strong></div>');
      setTimeout(function(){
          $("#response").removeAttr('style');
          $("#response").empty();
      }, 2000);
    }
  });
  //}
});

//Add dynamically fields to assign building number to plans
$('#plansToAdd').on('change', function(){
  $('#multipleBat').empty();
  $('#plansToAdd option:selected').each(function(i, value){
      if(i == 0) return true; // Default selection
      $('#multipleBat').append('<h6 class="info-text">Bâtiment du plan : '+ $(value).html() + '</h6><input id="building' + i + '" type="number" class="form-control required" min="1" value="1" style="width:15%;">');
  });
});

//Handle the preview display
$(function() {
  $('.selectpicker').on('change', function(){
    var selected = $(this).find("option:selected").attr("accesskey");
    $.ajax({
    url: '../controller/RenderOverview.php',
    type: 'post',
    data: { "selectedCustomer": selected},
    success: function(response) { $('#content').html(response); }
    });
  });
});

//Add dynamically a form that contains the current values of the selected customer
$("#customerToEdit").on('change', function(){
  var selected=$("#customerToEdit").find("option:selected").attr("accesskey");

  $.ajax({
  url: '../controller/ModifyCustomerForm.php',
  type: 'post',
  data: { "id": selected},
  success: function(response){
    $('#customerToModify').html(response);
  }
  });
});

//Add dynamically a form that contains the current values of the selected plan
$("#planToEdit").on('change', function(){
  var selected=$("#planToEdit").find("option:selected").attr("accesskey");

  $.ajax({
  url: '../controller/ModifyPlanForm.php',
  type: 'post',
  data: { "id": selected},
  success: function(response){
    $('#planToModify').html(response);
  }
  });
});

$('a[data-toggle="tab"]').on('shown.bs.tab', function (event) {
  /*if($(e.target).attr("accesskey") - 1 == 2){
    var a = $("#selectedCustomer").find("option:selected").attr("accesskey");
    if($(this).find("option:selected").attr("accesskey") != 0){
      e.preventDefault();
    }
  }*/

  event.preventDefault();
    return false;
});


//--------------------------------------



  $(document).ready(function() {
    var $container = $('div#bg_corebundle_service_states');
    var index = $container.find(':input').length;

    $('#add_adv').click(function(e) {
      addCategory($container);

      e.preventDefault();
      return false;
    });

    if (index == 0) {
      addAdv($container);
    } else {
      $container.children('div').each(function() {
        addDeleteLink($(this));
      });
    }

    function addAdv($container) {
      var template = $container.attr('data-prototype')
        .replace(/__name__label__/g, 'Avancement n°' + (index+1))
        .replace(/__name__/g,        index)
      ;
      var $prototype = $(template);
      addDeleteLink($prototype);
      $container.append($prototype);
      index++;
    }

    function addDeleteLink($prototype) {
      var $deleteLink = $('<a href="#" class="btn btn-danger">Supprimer</a>');
      $prototype.append($deleteLink);
      $deleteLink.click(function(e) {
        $prototype.remove();
        e.preventDefault();
        return false;
      });
    }
  });
