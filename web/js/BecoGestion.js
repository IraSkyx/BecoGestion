$(document).ready(function() {
    // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
    var $container = $('div#bg_corebundle_quote_services');

    var form_elements = getElementsByIdStartsWith("bg_corebundle_quote_services", "div", "bg_corebundle_quote_services_");

    for (var i = 0; i < form_elements.length; i++) {
        //form_elements[i].attr()
    }

    // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
    var index = form_elements.length;

    // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
    $('#add_service').click(function(e) {
      addCategory($container);

      e.preventDefault(); // évite qu'un # apparaisse dans l'URL
      return false;
    });

    // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).
    if (index == 0) {
      addCategory($container);
    } else {
      // S'il existe déjà des catégories, on ajoute un lien de suppression pour chacune d'entre elles
      $container.children('div').each(function() {
        addDeleteLink($(this));
      });
    }

    function getElementsByIdStartsWith(container, selectorTag, prefix) {
        var items = [];
        var myPosts = document.getElementById(container).getElementsByTagName(selectorTag);
        for (var i = 0; i < myPosts.length; i++) {
            //omitting undefined null check for brevity
            if (myPosts[i].id.lastIndexOf(prefix, 0) === 0) {
                items.push(myPosts[i]);
            }
        }
        return items;
    }

    // La fonction qui ajoute un formulaire CategoryType
    function addCategory($container) {
      // Dans le contenu de l'attribut « data-prototype », on remplace :
      // - le texte "__name__label__" qu'il contient par le label du champ
      // - le texte "__name__" qu'il contient par le numéro du champ
      var template = $container.attr('data-prototype')
        .replace(/__name__label__/g, '<h5 class="wizard-title">Service n°' + (index+1) + '</h5>')
        .replace(/__name__/g,        index)
      ;

      $(template).css("margin", "2vh !important");

      // On crée un objet jquery qui contient ce template
      var $prototype = $(template);

      // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
      addDeleteLink($prototype);

      // On ajoute le prototype modifié à la fin de la balise <div>
      $container.append($prototype);

      // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
      index++;
    }

    // La fonction qui ajoute un lien de suppression d'une catégorie
    function addDeleteLink($prototype) {
      // Création du lien
      var $deleteLink = $('<a href="#" class="btn btn-danger">Supprimer</a>');

      // Ajout du lien
      $prototype.append($deleteLink);

      // Ajout du listener sur le clic du lien pour effectivement supprimer la catégorie
      $deleteLink.click(function(e) {
        $prototype.remove();
        index--;
        e.preventDefault(); // évite qu'un # apparaisse dans l'URL
        return false;
      });
    }
  });
