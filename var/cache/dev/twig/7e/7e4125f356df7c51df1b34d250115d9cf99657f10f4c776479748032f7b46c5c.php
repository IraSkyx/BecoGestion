<?php

/* BGCoreBundle:Core:service.html.twig */
class __TwigTemplate_be9707b5c180f87934654f22aa9f735f93f41a787ffa3d061ea822b92f686f09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BGCoreBundle::layout.html.twig", "BGCoreBundle:Core:service.html.twig", 1);
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
        $__internal_b2090c9cdbab0f4a59b6c29e31ec15b3afd79079c4b15ba290d5f40251fbbb65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2090c9cdbab0f4a59b6c29e31ec15b3afd79079c4b15ba290d5f40251fbbb65->enter($__internal_b2090c9cdbab0f4a59b6c29e31ec15b3afd79079c4b15ba290d5f40251fbbb65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BGCoreBundle:Core:service.html.twig"));

        $__internal_9c64648ffe82b76c8443368003eaad69e1d96a80fb530b2946f1356c0de79ced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c64648ffe82b76c8443368003eaad69e1d96a80fb530b2946f1356c0de79ced->enter($__internal_9c64648ffe82b76c8443368003eaad69e1d96a80fb530b2946f1356c0de79ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BGCoreBundle:Core:service.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2090c9cdbab0f4a59b6c29e31ec15b3afd79079c4b15ba290d5f40251fbbb65->leave($__internal_b2090c9cdbab0f4a59b6c29e31ec15b3afd79079c4b15ba290d5f40251fbbb65_prof);

        
        $__internal_9c64648ffe82b76c8443368003eaad69e1d96a80fb530b2946f1356c0de79ced->leave($__internal_9c64648ffe82b76c8443368003eaad69e1d96a80fb530b2946f1356c0de79ced_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8303dc5f6882ad3bff90f8c0f8daf7d92a7f59487df71af892c42fabc0829c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8303dc5f6882ad3bff90f8c0f8daf7d92a7f59487df71af892c42fabc0829c1->enter($__internal_e8303dc5f6882ad3bff90f8c0f8daf7d92a7f59487df71af892c42fabc0829c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bc6375a2c511e3f357ac78befad19aab7031d6bdf37792cbe412351aaa6a39f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc6375a2c511e3f357ac78befad19aab7031d6bdf37792cbe412351aaa6a39f0->enter($__internal_bc6375a2c511e3f357ac78befad19aab7031d6bdf37792cbe412351aaa6a39f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 5
        echo twig_include($this->env, $context, "BGCoreBundle::menu.html.twig", array("route" => "BG_CoreBundle_view", "parameters" => array("id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 5, $this->getSourceContext()); })()), "sid" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new Twig_Error_Runtime('Variable "service" does not exist.', 5, $this->getSourceContext()); })()), "id", array()))));
        echo "

  <div class=\"container card wizard-card\" data-color=\"blue\">

    <h2 class=\"row form-signin-heading justify-content-center\">Édition des avancements</h2>

    <h3 class=\"row form-signin-heading justify-content-center\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new Twig_Error_Runtime('Variable "service" does not exist.', 11, $this->getSourceContext()); })()), "plan", array()), "level", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new Twig_Error_Runtime('Variable "service" does not exist.', 11, $this->getSourceContext()); })()), "plan", array()), "drawing", array()), "html", null, true);
        echo "</h2>

      ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->getSourceContext()); })()), "session", array()), "flashbag", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 14
            echo "          ";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    <div>
      <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BG_CoreBundle_addstate", array("id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 18, $this->getSourceContext()); })()), "sid" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new Twig_Error_Runtime('Variable "service" does not exist.', 18, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-info\">Ajouter un avancement</a>
      ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

      <div class=\"form-group\">
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), "value", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Pourcentage actuel"));
        echo "
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), "value", array()), 'errors');
        echo "
        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), "value", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>

      ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "

      ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'rest');
        echo "
      ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'form_end');
        echo "
    </div>

    <h3 class=\"row form-signin-heading justify-content-center\">Historique</h3>

    <table class=\"table table-striped\">
      <thead>
        <tr>
          <th>Date</th>
          <th>Pourcentage</th>
        </tr>
      </thead>
    <tbody>

      ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new Twig_Error_Runtime('Variable "service" does not exist.', 44, $this->getSourceContext()); })()), "states", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
            // line 45
            echo "        ";
            if (($context["state"] != (isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new Twig_Error_Runtime('Variable "max" does not exist.', 45, $this->getSourceContext()); })()))) {
                // line 46
                echo "        <tr>
          <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["state"], "date", array()), "d-m-Y H:i:s"), "html", null, true);
                echo "</td>
          <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["state"], "value", array()), "html", null, true);
                echo "</td>
          <td><a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BG_CoreBundle_removestate", array("id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 49, $this->getSourceContext()); })()), "sid" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new Twig_Error_Runtime('Variable "service" does not exist.', 49, $this->getSourceContext()); })()), "id", array()), "aid" => twig_get_attribute($this->env, $this->getSourceContext(), $context["state"], "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a></td>
        </tr>
        ";
            }
            // line 52
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
    </tbody>
    </table>

  </div>

  ";
        // line 59
        $this->displayParentBlock("body", $context, $blocks);
        echo "

";
        
        $__internal_bc6375a2c511e3f357ac78befad19aab7031d6bdf37792cbe412351aaa6a39f0->leave($__internal_bc6375a2c511e3f357ac78befad19aab7031d6bdf37792cbe412351aaa6a39f0_prof);

        
        $__internal_e8303dc5f6882ad3bff90f8c0f8daf7d92a7f59487df71af892c42fabc0829c1->leave($__internal_e8303dc5f6882ad3bff90f8c0f8daf7d92a7f59487df71af892c42fabc0829c1_prof);

    }

    public function getTemplateName()
    {
        return "BGCoreBundle:Core:service.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 59,  165 => 53,  159 => 52,  153 => 49,  149 => 48,  145 => 47,  142 => 46,  139 => 45,  135 => 44,  118 => 30,  114 => 29,  109 => 27,  103 => 24,  99 => 23,  95 => 22,  89 => 19,  85 => 18,  81 => 16,  72 => 14,  68 => 13,  61 => 11,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BGCoreBundle::layout.html.twig\" %}

{% block body %}

  {{ include('BGCoreBundle::menu.html.twig', { 'route' : 'BG_CoreBundle_view', 'parameters': {'id': id, 'sid': service.id} }) }}

  <div class=\"container card wizard-card\" data-color=\"blue\">

    <h2 class=\"row form-signin-heading justify-content-center\">Édition des avancements</h2>

    <h3 class=\"row form-signin-heading justify-content-center\">{{ service.plan.level }} - {{ service.plan.drawing }}</h2>

      {% for flashMessage in app.session.flashbag %}
          {{ flashMessage }}
      {% endfor %}

    <div>
      <a href=\"{{ path('BG_CoreBundle_addstate', {'id': id, \"sid\": service.id}) }}\" class=\"btn btn-info\">Ajouter un avancement</a>
      {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}

      <div class=\"form-group\">
        {{ form_label(form.value, \"Pourcentage actuel\", {'label_attr': {'class': 'control-label'}}) }}
        {{ form_errors(form.value) }}
        {{ form_widget(form.value, {'attr': {'class': 'form-control'}}) }}
      </div>

      {{ form_widget(form.save, {'attr': {'class': 'btn btn-success'}}) }}

      {{ form_rest(form) }}
      {{ form_end(form) }}
    </div>

    <h3 class=\"row form-signin-heading justify-content-center\">Historique</h3>

    <table class=\"table table-striped\">
      <thead>
        <tr>
          <th>Date</th>
          <th>Pourcentage</th>
        </tr>
      </thead>
    <tbody>

      {% for state in service.states %}
        {% if state != max %}
        <tr>
          <td>{{ state.date|date('d-m-Y H:i:s') }}</td>
          <td>{{ state.value }}</td>
          <td><a href=\"{{ path('BG_CoreBundle_removestate', {'id': id, 'sid': service.id, 'aid': state.id}) }}\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a></td>
        </tr>
        {% endif %}
      {% endfor %}

    </tbody>
    </table>

  </div>

  {{ parent() }}

{% endblock %}
", "BGCoreBundle:Core:service.html.twig", "C:\\wamp64\\www\\BecoGestion\\src\\BG\\CoreBundle\\Resources\\views\\Core\\service.html.twig");
    }
}
