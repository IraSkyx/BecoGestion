<?php

/* @BGCore/Core/home.html.twig */
class __TwigTemplate_cfef914254f42035d93fdaac1e30b371fde2f1bf56bd69abcef8c35d19479b73 extends Twig_Template
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
        $__internal_9ca56fe4dfaeec5d6205b8b8737895a3ad67fad064be13eb5ad98d8585c898ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ca56fe4dfaeec5d6205b8b8737895a3ad67fad064be13eb5ad98d8585c898ec->enter($__internal_9ca56fe4dfaeec5d6205b8b8737895a3ad67fad064be13eb5ad98d8585c898ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BGCore/Core/home.html.twig"));

        $__internal_5b97cf12047e5c5ae1939b3408af5d7920a0a53b873e7f2f72ff2f80e8d23193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b97cf12047e5c5ae1939b3408af5d7920a0a53b873e7f2f72ff2f80e8d23193->enter($__internal_5b97cf12047e5c5ae1939b3408af5d7920a0a53b873e7f2f72ff2f80e8d23193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BGCore/Core/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ca56fe4dfaeec5d6205b8b8737895a3ad67fad064be13eb5ad98d8585c898ec->leave($__internal_9ca56fe4dfaeec5d6205b8b8737895a3ad67fad064be13eb5ad98d8585c898ec_prof);

        
        $__internal_5b97cf12047e5c5ae1939b3408af5d7920a0a53b873e7f2f72ff2f80e8d23193->leave($__internal_5b97cf12047e5c5ae1939b3408af5d7920a0a53b873e7f2f72ff2f80e8d23193_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0b765652a935fc2d239de886ad3c86ca6f7e8911a31a58d1f51b568d1f26128 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0b765652a935fc2d239de886ad3c86ca6f7e8911a31a58d1f51b568d1f26128->enter($__internal_e0b765652a935fc2d239de886ad3c86ca6f7e8911a31a58d1f51b568d1f26128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5c39455591283b66d92a6d6620035a69238670b894aa225af8508e6c1788e904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c39455591283b66d92a6d6620035a69238670b894aa225af8508e6c1788e904->enter($__internal_5c39455591283b66d92a6d6620035a69238670b894aa225af8508e6c1788e904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
      <a class=\"dropdown-item\" href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BG_CoreBundle_billstack");
        echo "\">Factures en attente</a>
      ";
        // line 17
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 17, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "BG_CoreBundle_home")) {
            // line 18
            echo "        <a class=\"dropdown-item\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BG_CoreBundle_archives");
            echo "\">Accéder aux archives</a>
      ";
        } else {
            // line 20
            echo "        <a class=\"dropdown-item\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BG_CoreBundle_home");
            echo "\">Accéder aux devis</a>
      ";
        }
        // line 22
        echo "      <div class=\"dropdown-divider\"></div>
      <a class=\"dropdown-item\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BG_CoreBundle_customers");
        echo "\">Gestion des clients</a>
      <a class=\"dropdown-item\" href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BG_CoreBundle_plans");
        echo "\">Gestion des plans</a>
      <a class=\"dropdown-item\" href=\"";
        // line 25
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
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quotes"]) || array_key_exists("quotes", $context) ? $context["quotes"] : (function () { throw new Twig_Error_Runtime('Variable "quotes" does not exist.', 43, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
            // line 44
            echo "                <tr>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["quote"], "id", array()), "html", null, true);
            echo "</td>

                    <td><button type=\"button\" class=\"btn btn-outline-";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["quote"], "status", array()), "type", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["quote"], "status", array()), "message", array()), "html", null, true);
            echo "</button></td>

                    <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["quote"], "customer", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["quote"], "customer", array()), "lastname", array()), "html", null, true);
            echo "</td>

                    <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["quote"], "date", array()), "d-m-Y"), "html", null, true);
            echo "</td>

                    <td><a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BG_CoreBundle_generate", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["quote"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i></a></td>

                    <td><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BG_CoreBundle_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["quote"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></a></td>
                </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
        </tbody>
      </table>

  ";
        // line 62
        $this->displayParentBlock("body", $context, $blocks);
        echo "

";
        
        $__internal_5c39455591283b66d92a6d6620035a69238670b894aa225af8508e6c1788e904->leave($__internal_5c39455591283b66d92a6d6620035a69238670b894aa225af8508e6c1788e904_prof);

        
        $__internal_e0b765652a935fc2d239de886ad3c86ca6f7e8911a31a58d1f51b568d1f26128->leave($__internal_e0b765652a935fc2d239de886ad3c86ca6f7e8911a31a58d1f51b568d1f26128_prof);

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
        return array (  170 => 62,  164 => 58,  155 => 55,  150 => 53,  145 => 51,  138 => 49,  131 => 47,  126 => 45,  123 => 44,  119 => 43,  98 => 25,  94 => 24,  90 => 23,  87 => 22,  81 => 20,  75 => 18,  73 => 17,  69 => 16,  64 => 14,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
      <a class=\"dropdown-item\" href=\"{{ path('BG_CoreBundle_billstack') }}\">Factures en attente</a>
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
", "@BGCore/Core/home.html.twig", "C:\\wamp64\\www\\BecoGestion\\src\\BG\\CoreBundle\\Resources\\views\\Core\\home.html.twig");
    }
}
