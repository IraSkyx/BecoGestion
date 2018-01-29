<?php

/* @BGCore/Core/view.html.twig */
class __TwigTemplate_a9be01ca0e7376c5a18d06326e8987f8f899491ef85f5bf0153ed3d9f223a37e extends Twig_Template
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
        $__internal_6d90fb883fb9b3cb94e21f0c90454fe71bd16bea585f35a68156409f7026d1a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d90fb883fb9b3cb94e21f0c90454fe71bd16bea585f35a68156409f7026d1a2->enter($__internal_6d90fb883fb9b3cb94e21f0c90454fe71bd16bea585f35a68156409f7026d1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BGCore/Core/view.html.twig"));

        $__internal_4f2ca6c6a5ddf0fac3e99a8bbb197e13a916fdfec5aeab169a796ee34cf0e2df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f2ca6c6a5ddf0fac3e99a8bbb197e13a916fdfec5aeab169a796ee34cf0e2df->enter($__internal_4f2ca6c6a5ddf0fac3e99a8bbb197e13a916fdfec5aeab169a796ee34cf0e2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BGCore/Core/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d90fb883fb9b3cb94e21f0c90454fe71bd16bea585f35a68156409f7026d1a2->leave($__internal_6d90fb883fb9b3cb94e21f0c90454fe71bd16bea585f35a68156409f7026d1a2_prof);

        
        $__internal_4f2ca6c6a5ddf0fac3e99a8bbb197e13a916fdfec5aeab169a796ee34cf0e2df->leave($__internal_4f2ca6c6a5ddf0fac3e99a8bbb197e13a916fdfec5aeab169a796ee34cf0e2df_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_543f4e5b9faef9ab731959044439c3bd0c393fb9063a01941610732b41c3f710 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_543f4e5b9faef9ab731959044439c3bd0c393fb9063a01941610732b41c3f710->enter($__internal_543f4e5b9faef9ab731959044439c3bd0c393fb9063a01941610732b41c3f710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_05087ea8d1f518adb9be0dd5e0514728a0a0881ea7924c1471449fed5fa69f6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05087ea8d1f518adb9be0dd5e0514728a0a0881ea7924c1471449fed5fa69f6e->enter($__internal_05087ea8d1f518adb9be0dd5e0514728a0a0881ea7924c1471449fed5fa69f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 5
        echo twig_include($this->env, $context, "BGCoreBundle::menu.html.twig", array("route" => "BG_CoreBundle_home", "parameters" => array()));
        echo "

  <div class=\"container card wizard-card\" data-color=\"blue\">

    <h2 class=\"row form-signin-heading justify-content-center\">Devis N°";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["quote"]) || array_key_exists("quote", $context) ? $context["quote"] : (function () { throw new Twig_Error_Runtime('Variable "quote" does not exist.', 9, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</h2>

    <button type=\"button\" class=\"btn btn-outline-";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["quote"]) || array_key_exists("quote", $context) ? $context["quote"] : (function () { throw new Twig_Error_Runtime('Variable "quote" does not exist.', 11, $this->getSourceContext()); })()), "status", array()), "type", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["quote"]) || array_key_exists("quote", $context) ? $context["quote"] : (function () { throw new Twig_Error_Runtime('Variable "quote" does not exist.', 11, $this->getSourceContext()); })()), "status", array()), "message", array()), "html", null, true);
        echo "</button>

       <div class=\"dropdown\">
         <button type=\"button\" class=\"btn btn-info dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Actions</button>
         <div class=\"dropdown-menu\">
            <a class=\"dropdown-item\" href=\"PathToAdd\">Ajouter un/des plan(s)</a>
            <a class=\"dropdown-item\">Générer un bordereau</a>
            <h6 class=\"dropdown-header\">Changer le status</h6>
            <a class=\"dropdown-item\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BG_CoreBundle_changestatus", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["quote"]) || array_key_exists("quote", $context) ? $context["quote"] : (function () { throw new Twig_Error_Runtime('Variable "quote" does not exist.', 19, $this->getSourceContext()); })()), "id", array()), "status" => "awaiting")), "html", null, true);
        echo "\">En attente</a>
            <a class=\"dropdown-item\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BG_CoreBundle_changestatus", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["quote"]) || array_key_exists("quote", $context) ? $context["quote"] : (function () { throw new Twig_Error_Runtime('Variable "quote" does not exist.', 20, $this->getSourceContext()); })()), "id", array()), "status" => "ongoing")), "html", null, true);
        echo "\">En cours</a>
            <a class=\"dropdown-item\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BG_CoreBundle_changestatus", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["quote"]) || array_key_exists("quote", $context) ? $context["quote"] : (function () { throw new Twig_Error_Runtime('Variable "quote" does not exist.', 21, $this->getSourceContext()); })()), "id", array()), "status" => "finished")), "html", null, true);
        echo "\">Terminé</a>
            <a class=\"dropdown-item\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BG_CoreBundle_changestatus", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["quote"]) || array_key_exists("quote", $context) ? $context["quote"] : (function () { throw new Twig_Error_Runtime('Variable "quote" does not exist.', 22, $this->getSourceContext()); })()), "id", array()), "status" => "cancelled")), "html", null, true);
        echo "\">Annulé</a>
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
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["quote"]) || array_key_exists("quote", $context) ? $context["quote"] : (function () { throw new Twig_Error_Runtime('Variable "quote" does not exist.', 43, $this->getSourceContext()); })()), "services", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 44
            echo "          <tr>
            <td><div class=\"checkbox\"><label><input type=\"checkbox\" name=\"optionsCheckboxes\"></label></div></td>
            <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "plan", array()), "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "building", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "plan", array()), "level", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "plan", array()), "drawing", array()), "html", null, true);
            echo "</td>

            ";
            // line 51
            $context["maxValue"] = 0;
            // line 52
            echo "
            ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "states", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
                // line 54
                echo "                ";
                $context["maxValue"] = max(twig_get_attribute($this->env, $this->getSourceContext(), $context["state"], "value", array()), (isset($context["maxValue"]) || array_key_exists("maxValue", $context) ? $context["maxValue"] : (function () { throw new Twig_Error_Runtime('Variable "maxValue" does not exist.', 54, $this->getSourceContext()); })()));
                // line 55
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "
            <td>";
            // line 57
            echo twig_escape_filter($this->env, (isset($context["maxValue"]) || array_key_exists("maxValue", $context) ? $context["maxValue"] : (function () { throw new Twig_Error_Runtime('Variable "maxValue" does not exist.', 57, $this->getSourceContext()); })()), "html", null, true);
            echo "</td>

            <td><input id=\"newEngineerTime\" name=\"newEngineerTime\" type=\"number\" min=\"0\" step=\"0.01\" value=\"";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "engTime", array()), "html", null, true);
            echo "\" class=\"form-control required\" accesskey=\"";
            echo twig_escape_filter($this->env, ((((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "plan", array()), "id", array()) . "/") . twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "building", array())) . "/") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["quote"]) || array_key_exists("quote", $context) ? $context["quote"] : (function () { throw new Twig_Error_Runtime('Variable "quote" does not exist.', 59, $this->getSourceContext()); })()), "id", array())), "html", null, true);
            echo "\"></td>
            <td><input id=\"newDrawingTime\" name=\"newDrawingTime\" type=\"number\" min=\"0\" step=\"0.01\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "drawTime", array()), "html", null, true);
            echo "\" class=\"form-control required\"></td>
            <td><a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BG_CoreBundle_service", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["quote"]) || array_key_exists("quote", $context) ? $context["quote"] : (function () { throw new Twig_Error_Runtime('Variable "quote" does not exist.', 61, $this->getSourceContext()); })()), "id", array()), "sid" => twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></a></td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
    </tbody>
  </table>
</div>

  </div>

";
        // line 71
        $this->displayParentBlock("body", $context, $blocks);
        echo "

";
        
        $__internal_05087ea8d1f518adb9be0dd5e0514728a0a0881ea7924c1471449fed5fa69f6e->leave($__internal_05087ea8d1f518adb9be0dd5e0514728a0a0881ea7924c1471449fed5fa69f6e_prof);

        
        $__internal_543f4e5b9faef9ab731959044439c3bd0c393fb9063a01941610732b41c3f710->leave($__internal_543f4e5b9faef9ab731959044439c3bd0c393fb9063a01941610732b41c3f710_prof);

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
        return array (  192 => 71,  183 => 64,  174 => 61,  170 => 60,  164 => 59,  159 => 57,  156 => 56,  150 => 55,  147 => 54,  143 => 53,  140 => 52,  138 => 51,  133 => 49,  129 => 48,  125 => 47,  121 => 46,  117 => 44,  113 => 43,  89 => 22,  85 => 21,  81 => 20,  77 => 19,  64 => 11,  59 => 9,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BGCoreBundle::layout.html.twig\" %}

{% block body %}

  {{ include('BGCoreBundle::menu.html.twig', { 'route': 'BG_CoreBundle_home', 'parameters': {}  }) }}

  <div class=\"container card wizard-card\" data-color=\"blue\">

    <h2 class=\"row form-signin-heading justify-content-center\">Devis N°{{ quote.id }}</h2>

    <button type=\"button\" class=\"btn btn-outline-{{ quote.status.type }}\">{{ quote.status.message }}</button>

       <div class=\"dropdown\">
         <button type=\"button\" class=\"btn btn-info dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Actions</button>
         <div class=\"dropdown-menu\">
            <a class=\"dropdown-item\" href=\"PathToAdd\">Ajouter un/des plan(s)</a>
            <a class=\"dropdown-item\">Générer un bordereau</a>
            <h6 class=\"dropdown-header\">Changer le status</h6>
            <a class=\"dropdown-item\" href=\"{{ path('BG_CoreBundle_changestatus', {'id': quote.id, 'status': 'awaiting'}) }}\">En attente</a>
            <a class=\"dropdown-item\" href=\"{{ path('BG_CoreBundle_changestatus', {'id': quote.id, 'status': 'ongoing'}) }}\">En cours</a>
            <a class=\"dropdown-item\" href=\"{{ path('BG_CoreBundle_changestatus', {'id': quote.id, 'status': 'finished'}) }}\">Terminé</a>
            <a class=\"dropdown-item\" href=\"{{ path('BG_CoreBundle_changestatus', {'id': quote.id, 'status': 'cancelled'}) }}\">Annulé</a>
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

            {% set maxValue = 0 %}

            {% for state in service.states %}
                {% set maxValue = max(state.value, maxValue) %}
            {% endfor %}

            <td>{{ maxValue }}</td>

            <td><input id=\"newEngineerTime\" name=\"newEngineerTime\" type=\"number\" min=\"0\" step=\"0.01\" value=\"{{ service.engTime }}\" class=\"form-control required\" accesskey=\"{{ service.plan.id ~ '/' ~ service.building ~ '/' ~ quote.id}}\"></td>
            <td><input id=\"newDrawingTime\" name=\"newDrawingTime\" type=\"number\" min=\"0\" step=\"0.01\" value=\"{{ service.drawTime }}\" class=\"form-control required\"></td>
            <td><a href=\"{{ path('BG_CoreBundle_service', {'id': quote.id, 'sid': service.id}) }}\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></a></td>
          </tr>
        {% endfor %}

    </tbody>
  </table>
</div>

  </div>

{{ parent() }}

{% endblock %}
", "@BGCore/Core/view.html.twig", "C:\\wamp64\\www\\BecoGestion\\src\\BG\\CoreBundle\\Resources\\views\\Core\\view.html.twig");
    }
}
