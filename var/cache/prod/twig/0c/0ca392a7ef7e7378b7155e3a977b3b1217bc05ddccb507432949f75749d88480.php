<?php

/* @BGCore/Core/view.html.twig */
class __TwigTemplate_858a1f1633e16b61935d01a7b9c1c3f41a8b3f82e46cedbb010dbc743a5744f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BGCoreBundle::layout.html.twig", "@BGCore/Core/view.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BGCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b54cfe9076c43ab07ec0dcf0c359adb11c4ccb69f308758949954697bddbd5a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b54cfe9076c43ab07ec0dcf0c359adb11c4ccb69f308758949954697bddbd5a7->enter($__internal_b54cfe9076c43ab07ec0dcf0c359adb11c4ccb69f308758949954697bddbd5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BGCore/Core/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b54cfe9076c43ab07ec0dcf0c359adb11c4ccb69f308758949954697bddbd5a7->leave($__internal_b54cfe9076c43ab07ec0dcf0c359adb11c4ccb69f308758949954697bddbd5a7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_965b6e267a7b8c80d8d9976661eeb7f437e95acbc918d32ddbb5bd9ad03f566a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_965b6e267a7b8c80d8d9976661eeb7f437e95acbc918d32ddbb5bd9ad03f566a->enter($__internal_965b6e267a7b8c80d8d9976661eeb7f437e95acbc918d32ddbb5bd9ad03f566a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  <div class=\"container card wizard-card\" data-color=\"blue\">

    <h2 class=\"row form-signin-heading justify-content-center\">Devis N°";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["quote"]) || array_key_exists("quote", $context) ? $context["quote"] : (function () { throw new Twig_Error_Runtime('Variable "quote" does not exist.', 7, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</h2>

    <button type=\"button\" class=\"btn btn-outline-";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["quote"]) || array_key_exists("quote", $context) ? $context["quote"] : (function () { throw new Twig_Error_Runtime('Variable "quote" does not exist.', 9, $this->getSourceContext()); })()), "status", array()), "type", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["quote"]) || array_key_exists("quote", $context) ? $context["quote"] : (function () { throw new Twig_Error_Runtime('Variable "quote" does not exist.', 9, $this->getSourceContext()); })()), "status", array()), "message", array()), "html", null, true);
        echo "</button>

       <div class=\"dropdown\">
         <button type=\"button\" class=\"btn btn-info dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Actions</button>
         <div class=\"dropdown-menu\">
            <a class=\"dropdown-item\" href=\"PathToAdd\">Ajouter un/des plan(s)</a>
            <a class=\"dropdown-item\">Générer un bordereau</a>
            <h6 class=\"dropdown-header\">Changer le status</h6>
            <a class=\"dropdown-item\" href=\"PathToAdd\">En attente</a>
            <a class=\"dropdown-item\" href=\"PathToAdd\">En cours</a>
            <a class=\"dropdown-item\" href=\"PathToAdd\">Terminé</a>
            <a class=\"dropdown-item\" href=\"PathToAdd\">Annulé</a>
         </div>
      </div>

    <div class=\"table-responsive\">
        <table class=\"table table-striped\">
          <thead>
            <tr>
              <th>Sélection</th>
              <th>Code</th>
              <th>Bâtiment</th>
              <th>Niveau</th>
              <th>Dessin</th>
              <th>Avancement global</th>
              <th>Temps ingénieur</th>
              <th>Temps dessinateur</th>
              <th>Éditer les avancements</th>
            </tr>
          </thead>
          <tbody>

        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["quote"]) || array_key_exists("quote", $context) ? $context["quote"] : (function () { throw new Twig_Error_Runtime('Variable "quote" does not exist.', 41, $this->getSourceContext()); })()), "services", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 42
            echo "          <tr>
            <td><div class=\"checkbox\"><label><input type=\"checkbox\" name=\"optionsCheckboxes\"></label></div></td>
            <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "plan", array()), "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "building", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "plan", array()), "level", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "plan", array()), "drawing", array()), "html", null, true);
            echo "</td>
            <td>100</td>

        <td><input id=\"newEngineerTime\" name=\"newEngineerTime\" type=\"number\" min=\"0\" step=\"0.01\" value=\"";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "engTime", array()), "html", null, true);
            echo "\" class=\"form-control required\" accesskey=\"";
            echo twig_escape_filter($this->env, ((((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "plan", array()), "id", array()) . "/") . twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "building", array())) . "/") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["quote"]) || array_key_exists("quote", $context) ? $context["quote"] : (function () { throw new Twig_Error_Runtime('Variable "quote" does not exist.', 50, $this->getSourceContext()); })()), "id", array())), "html", null, true);
            echo "\"></td>
        <td><input id=\"newDrawingTime\" name=\"newDrawingTime\" type=\"number\" min=\"0\" step=\"0.01\" value=\"";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "drawTime", array()), "html", null, true);
            echo "\" class=\"form-control required\"></td>
        <td><a href=\"#\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i></a></td>
        <td><a href=\"PathToAdd\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></a></td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
    </tbody>
  </table>
</div>

  </div>

";
        // line 63
        $this->displayParentBlock("body", $context, $blocks);
        echo "

";
        
        $__internal_965b6e267a7b8c80d8d9976661eeb7f437e95acbc918d32ddbb5bd9ad03f566a->leave($__internal_965b6e267a7b8c80d8d9976661eeb7f437e95acbc918d32ddbb5bd9ad03f566a_prof);

    }

    public function getTemplateName()
    {
        return "@BGCore/Core/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 63,  130 => 56,  119 => 51,  113 => 50,  107 => 47,  103 => 46,  99 => 45,  95 => 44,  91 => 42,  87 => 41,  50 => 9,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BGCoreBundle::layout.html.twig\" %}

{% block body %}

  <div class=\"container card wizard-card\" data-color=\"blue\">

    <h2 class=\"row form-signin-heading justify-content-center\">Devis N°{{ quote.id }}</h2>

    <button type=\"button\" class=\"btn btn-outline-{{ quote.status.type }}\">{{ quote.status.message }}</button>

       <div class=\"dropdown\">
         <button type=\"button\" class=\"btn btn-info dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Actions</button>
         <div class=\"dropdown-menu\">
            <a class=\"dropdown-item\" href=\"PathToAdd\">Ajouter un/des plan(s)</a>
            <a class=\"dropdown-item\">Générer un bordereau</a>
            <h6 class=\"dropdown-header\">Changer le status</h6>
            <a class=\"dropdown-item\" href=\"PathToAdd\">En attente</a>
            <a class=\"dropdown-item\" href=\"PathToAdd\">En cours</a>
            <a class=\"dropdown-item\" href=\"PathToAdd\">Terminé</a>
            <a class=\"dropdown-item\" href=\"PathToAdd\">Annulé</a>
         </div>
      </div>

    <div class=\"table-responsive\">
        <table class=\"table table-striped\">
          <thead>
            <tr>
              <th>Sélection</th>
              <th>Code</th>
              <th>Bâtiment</th>
              <th>Niveau</th>
              <th>Dessin</th>
              <th>Avancement global</th>
              <th>Temps ingénieur</th>
              <th>Temps dessinateur</th>
              <th>Éditer les avancements</th>
            </tr>
          </thead>
          <tbody>

        {% for service in quote.services %}
          <tr>
            <td><div class=\"checkbox\"><label><input type=\"checkbox\" name=\"optionsCheckboxes\"></label></div></td>
            <td>{{ service.plan.id }}</td>
            <td>{{ service.building }}</td>
            <td>{{ service.plan.level }}</td>
            <td>{{ service.plan.drawing }}</td>
            <td>100</td>

        <td><input id=\"newEngineerTime\" name=\"newEngineerTime\" type=\"number\" min=\"0\" step=\"0.01\" value=\"{{ service.engTime }}\" class=\"form-control required\" accesskey=\"{{ service.plan.id ~ '/' ~ service.building ~ '/' ~ quote.id}}\"></td>
        <td><input id=\"newDrawingTime\" name=\"newDrawingTime\" type=\"number\" min=\"0\" step=\"0.01\" value=\"{{ service.drawTime }}\" class=\"form-control required\"></td>
        <td><a href=\"#\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i></a></td>
        <td><a href=\"PathToAdd\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></a></td>
        </tr>
        {% endfor %}

    </tbody>
  </table>
</div>

  </div>

{{ parent() }}

{% endblock %}
", "@BGCore/Core/view.html.twig", "F:\\wamp64\\www\\BecoGestion\\src\\BG\\CoreBundle\\Resources\\views\\Core\\view.html.twig");
    }
}
