<?php

/* @BGCore/Core/home.html.twig */
class __TwigTemplate_9b9f9ec1f22515650eeb449a71ecfe5a3117815a22762efc87d6eed545b0effa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BGCoreBundle::layout.html.twig", "@BGCore/Core/home.html.twig", 1);
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
        $__internal_c631a7a4359eae29e5841228f7813d4e9afcb51285ea22ef51ae31d6c6dfcc78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c631a7a4359eae29e5841228f7813d4e9afcb51285ea22ef51ae31d6c6dfcc78->enter($__internal_c631a7a4359eae29e5841228f7813d4e9afcb51285ea22ef51ae31d6c6dfcc78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BGCore/Core/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c631a7a4359eae29e5841228f7813d4e9afcb51285ea22ef51ae31d6c6dfcc78->leave($__internal_c631a7a4359eae29e5841228f7813d4e9afcb51285ea22ef51ae31d6c6dfcc78_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4593254ad4a9880386d67a38430c6ddf379d5c8b85bb6ae793298393b1b95c35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4593254ad4a9880386d67a38430c6ddf379d5c8b85bb6ae793298393b1b95c35->enter($__internal_4593254ad4a9880386d67a38430c6ddf379d5c8b85bb6ae793298393b1b95c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  <div align=\"right\"><a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-sign-out\"></i></a></div>
  <div class=\"container d-flex align-items-center card wizard-card\">
  <h2 class=\"row justify-content-center\" style=\"font-family:Proxima; font-size:7em;\">BECO <strong>GESTION</strong></h1>

  <div class=\"row dropdown\">
    <button type=\"button\" class=\"btn btn-info dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
      Actions
    </button>
    <div class=\"dropdown-menu\">
      <a class=\"dropdown-item\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BG_CoreBundle_newquote");
        echo "\">Nouveau devis</a>
      <div class=\"dropdown-divider\"></div>
      ";
        // line 16
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 16, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "BG_CoreBundle_home")) {
            // line 17
            echo "        <a class=\"dropdown-item\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BG_CoreBundle_archives");
            echo "\">Accéder aux archives</a>
      ";
        } else {
            // line 19
            echo "        <a class=\"dropdown-item\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BG_CoreBundle_home");
            echo "\">Accéder aux devis</a>
      ";
        }
        // line 21
        echo "      <div class=\"dropdown-divider\"></div>
      <a class=\"dropdown-item\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BG_CoreBundle_customers");
        echo "\">Gestion des clients</a>
      <a class=\"dropdown-item\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BG_CoreBundle_plans");
        echo "\">Gestion des plans</a>
      <a class=\"dropdown-item\" href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BG_CoreBundle_settings");
        echo "\">Gestion des paramètres</a>
    </div>
  </div>

  <div class=\"table-responsive\">
      <table class=\"table table-striped\">
        <thead>
          <tr>
            <th>Réf Devis</th>
            <th>Status</th>
            <th>Client</th>
            <th>Date de création</th>
            <th>Facture</th>
            <th>Gérer</th>
          </tr>
        </thead>
        <tbody>

          ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quotes"]) || array_key_exists("quotes", $context) ? $context["quotes"] : (function () { throw new Twig_Error_Runtime('Variable "quotes" does not exist.', 42, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
            // line 43
            echo "                <tr>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["quote"], "id", array()), "html", null, true);
            echo "</td>

                    <td><button type=\"button\" class=\"btn btn-outline-";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["quote"], "status", array()), "type", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["quote"], "status", array()), "message", array()), "html", null, true);
            echo "</button></td>

                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["quote"], "customer", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["quote"], "customer", array()), "lastname", array()), "html", null, true);
            echo "</td>

                    <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["quote"], "date", array()), "d-m-Y"), "html", null, true);
            echo "</td>

                    <td><a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BG_CoreBundle_generate", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["quote"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i></a></td>

                    <td><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BG_CoreBundle_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["quote"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></a></td>
                </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
        </tbody>
      </table>

  ";
        // line 61
        $this->displayParentBlock("body", $context, $blocks);
        echo "

";
        
        $__internal_4593254ad4a9880386d67a38430c6ddf379d5c8b85bb6ae793298393b1b95c35->leave($__internal_4593254ad4a9880386d67a38430c6ddf379d5c8b85bb6ae793298393b1b95c35_prof);

    }

    public function getTemplateName()
    {
        return "@BGCore/Core/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 61,  151 => 57,  142 => 54,  137 => 52,  132 => 50,  125 => 48,  118 => 46,  113 => 44,  110 => 43,  106 => 42,  85 => 24,  81 => 23,  77 => 22,  74 => 21,  68 => 19,  62 => 17,  60 => 16,  55 => 14,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BGCoreBundle::layout.html.twig\" %}

{% block body %}

  <div align=\"right\"><a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"fa fa-sign-out\"></i></a></div>
  <div class=\"container d-flex align-items-center card wizard-card\">
  <h2 class=\"row justify-content-center\" style=\"font-family:Proxima; font-size:7em;\">BECO <strong>GESTION</strong></h1>

  <div class=\"row dropdown\">
    <button type=\"button\" class=\"btn btn-info dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
      Actions
    </button>
    <div class=\"dropdown-menu\">
      <a class=\"dropdown-item\" href=\"{{ path('BG_CoreBundle_newquote') }}\">Nouveau devis</a>
      <div class=\"dropdown-divider\"></div>
      {% if app.request.attributes.get('_route') == \"BG_CoreBundle_home\" %}
        <a class=\"dropdown-item\" href=\"{{ path('BG_CoreBundle_archives') }}\">Accéder aux archives</a>
      {% else %}
        <a class=\"dropdown-item\" href=\"{{ path('BG_CoreBundle_home') }}\">Accéder aux devis</a>
      {% endif %}
      <div class=\"dropdown-divider\"></div>
      <a class=\"dropdown-item\" href=\"{{ path('BG_CoreBundle_customers') }}\">Gestion des clients</a>
      <a class=\"dropdown-item\" href=\"{{ path('BG_CoreBundle_plans') }}\">Gestion des plans</a>
      <a class=\"dropdown-item\" href=\"{{ path('BG_CoreBundle_settings') }}\">Gestion des paramètres</a>
    </div>
  </div>

  <div class=\"table-responsive\">
      <table class=\"table table-striped\">
        <thead>
          <tr>
            <th>Réf Devis</th>
            <th>Status</th>
            <th>Client</th>
            <th>Date de création</th>
            <th>Facture</th>
            <th>Gérer</th>
          </tr>
        </thead>
        <tbody>

          {% for quote in quotes %}
                <tr>
                    <td>{{ quote.id }}</td>

                    <td><button type=\"button\" class=\"btn btn-outline-{{ quote.status.type}}\">{{ quote.status.message }}</button></td>

                    <td>{{ quote.customer.firstname }} {{ quote.customer.lastname }}</td>

                    <td>{{ quote.date|date('d-m-Y')  }}</td>

                    <td><a href=\"{{ path('BG_CoreBundle_generate', {'id': quote.id}) }}\"><i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i></a></td>

                    <td><a href=\"{{ path('BG_CoreBundle_view', {'id': quote.id}) }}\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></a></td>
                </tr>
          {% endfor %}

        </tbody>
      </table>

  {{ parent() }}

{% endblock %}
", "@BGCore/Core/home.html.twig", "F:\\wamp64\\www\\BecoGestion\\src\\BG\\CoreBundle\\Resources\\views\\Core\\home.html.twig");
    }
}
