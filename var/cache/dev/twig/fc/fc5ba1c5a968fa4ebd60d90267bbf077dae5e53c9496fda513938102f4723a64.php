<?php

/* BGCoreBundle::layout.html.twig */
class __TwigTemplate_547feea48ecf60b9325b73e97d61c95518303ec857a807d4c6f2b7f0386184e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6133a68474f5525f4e2e3c5e314486425a2c5c940f2c00e6ee095e9b3da1c1ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6133a68474f5525f4e2e3c5e314486425a2c5c940f2c00e6ee095e9b3da1c1ae->enter($__internal_6133a68474f5525f4e2e3c5e314486425a2c5c940f2c00e6ee095e9b3da1c1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BGCoreBundle::layout.html.twig"));

        $__internal_1e11d98b23a28c6c77065943556aad219930274e8018f4be215d97caf6d07107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e11d98b23a28c6c77065943556aad219930274e8018f4be215d97caf6d07107->enter($__internal_1e11d98b23a28c6c77065943556aad219930274e8018f4be215d97caf6d07107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BGCoreBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
  <head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 15
        echo "  </head>

  <body>
    ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "  </body>
</html>
";
        
        $__internal_6133a68474f5525f4e2e3c5e314486425a2c5c940f2c00e6ee095e9b3da1c1ae->leave($__internal_6133a68474f5525f4e2e3c5e314486425a2c5c940f2c00e6ee095e9b3da1c1ae_prof);

        
        $__internal_1e11d98b23a28c6c77065943556aad219930274e8018f4be215d97caf6d07107->leave($__internal_1e11d98b23a28c6c77065943556aad219930274e8018f4be215d97caf6d07107_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_a6071281c1e70f1d5e471cc108e2431ec3eeef21f4e3e68af1c43745d0e27658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6071281c1e70f1d5e471cc108e2431ec3eeef21f4e3e68af1c43745d0e27658->enter($__internal_a6071281c1e70f1d5e471cc108e2431ec3eeef21f4e3e68af1c43745d0e27658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c7af7073e9888d6b931a2f498c7a9e3e7f6d2854daa7dd6ee36303e447a36a47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7af7073e9888d6b931a2f498c7a9e3e7f6d2854daa7dd6ee36303e447a36a47->enter($__internal_c7af7073e9888d6b931a2f498c7a9e3e7f6d2854daa7dd6ee36303e447a36a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "      <meta charset=\"utf-8\">
      <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

      <link type=\"text/css\" rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
      <link type=\"text/css\" rel=\"stylesheet\" href=\"http://localhost/BecoGestion/web/css/bootstrap.min.css\">
      <link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css\">
      <link type=\"text/css\" rel=\"stylesheet\" href=\"http://localhost/BecoGestion/web/css/material-bootstrap-wizard.css\">
      <link type=\"text/css\" rel=\"stylesheet\" href=\"http://localhost/BecoGestion/web/css/style.css\">
      <link type=\"text/css\" rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\">
    ";
        
        $__internal_c7af7073e9888d6b931a2f498c7a9e3e7f6d2854daa7dd6ee36303e447a36a47->leave($__internal_c7af7073e9888d6b931a2f498c7a9e3e7f6d2854daa7dd6ee36303e447a36a47_prof);

        
        $__internal_a6071281c1e70f1d5e471cc108e2431ec3eeef21f4e3e68af1c43745d0e27658->leave($__internal_a6071281c1e70f1d5e471cc108e2431ec3eeef21f4e3e68af1c43745d0e27658_prof);

    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_ab62d16cd685b10ea1bbe191150844f57a2eaf6b52398c866619f206a1e53df7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab62d16cd685b10ea1bbe191150844f57a2eaf6b52398c866619f206a1e53df7->enter($__internal_ab62d16cd685b10ea1bbe191150844f57a2eaf6b52398c866619f206a1e53df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_70766421387dc2a52b82a2dd255ba8b30d2d9b4692690aa980feaa044b737596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70766421387dc2a52b82a2dd255ba8b30d2d9b4692690aa980feaa044b737596->enter($__internal_70766421387dc2a52b82a2dd255ba8b30d2d9b4692690aa980feaa044b737596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BecoGestion";
        
        $__internal_70766421387dc2a52b82a2dd255ba8b30d2d9b4692690aa980feaa044b737596->leave($__internal_70766421387dc2a52b82a2dd255ba8b30d2d9b4692690aa980feaa044b737596_prof);

        
        $__internal_ab62d16cd685b10ea1bbe191150844f57a2eaf6b52398c866619f206a1e53df7->leave($__internal_ab62d16cd685b10ea1bbe191150844f57a2eaf6b52398c866619f206a1e53df7_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcdb99d949728b1c34062bd2ff495e51af1c8c56d1f971e8927333b7f52bc0a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcdb99d949728b1c34062bd2ff495e51af1c8c56d1f971e8927333b7f52bc0a8->enter($__internal_fcdb99d949728b1c34062bd2ff495e51af1c8c56d1f971e8927333b7f52bc0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_694f86b1a047e40df391b947bc9bfbc6cff00e960cc36444a3a95e56cf7684cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_694f86b1a047e40df391b947bc9bfbc6cff00e960cc36444a3a95e56cf7684cd->enter($__internal_694f86b1a047e40df391b947bc9bfbc6cff00e960cc36444a3a95e56cf7684cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "
      ";
        // line 20
        $this->displayBlock('scripts', $context, $blocks);
        // line 35
        echo "
    ";
        
        $__internal_694f86b1a047e40df391b947bc9bfbc6cff00e960cc36444a3a95e56cf7684cd->leave($__internal_694f86b1a047e40df391b947bc9bfbc6cff00e960cc36444a3a95e56cf7684cd_prof);

        
        $__internal_fcdb99d949728b1c34062bd2ff495e51af1c8c56d1f971e8927333b7f52bc0a8->leave($__internal_fcdb99d949728b1c34062bd2ff495e51af1c8c56d1f971e8927333b7f52bc0a8_prof);

    }

    // line 20
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_1fa080a90729eb331be981c36cb95e345991ca4527ba2d3ff844ba2fa59a03e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fa080a90729eb331be981c36cb95e345991ca4527ba2d3ff844ba2fa59a03e2->enter($__internal_1fa080a90729eb331be981c36cb95e345991ca4527ba2d3ff844ba2fa59a03e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_885e8a030f957b090bfbdd3265356db852d9137625859d56c6893ce44f1c29bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_885e8a030f957b090bfbdd3265356db852d9137625859d56c6893ce44f1c29bb->enter($__internal_885e8a030f957b090bfbdd3265356db852d9137625859d56c6893ce44f1c29bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 21
        echo "        <!--   Core JS Files   -->
        <script type=\"text/javascript\" src=\"http://localhost/BecoGestion/web/js/jquery-2.2.4.min.js\"></script>
        <script type=\"text/javascript\" src=\"http://localhost/BecoGestion/web/js/bootstrap.min.js\"></script>
        <script type=\"text/javascript\" src=\"http://localhost/BecoGestion/web/js/jquery.bootstrap.js\"></script>
        <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js\"></script>
        <script type=\"text/javascript\" src=\"https://code.jquery.com/ui/1.12.0/jquery-ui.min.js\" integrity=\"sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=\" crossorigin=\"anonymous\"></script>

        <!--  Plugin for the Wizard -->
        <script type=\"text/javascript\" src=\"http://localhost/BecoGestion/web/js/material-bootstrap-wizard.js\"></script>

        <script type=\"text/javascript\" src=\"http://localhost/BecoGestion/web/js/jquery.validate.min.js\"></script>

        <script type=\"text/javascript\" src=\"http://localhost/BecoGestion/web/js/BecoGestion.js\"></script>
      ";
        
        $__internal_885e8a030f957b090bfbdd3265356db852d9137625859d56c6893ce44f1c29bb->leave($__internal_885e8a030f957b090bfbdd3265356db852d9137625859d56c6893ce44f1c29bb_prof);

        
        $__internal_1fa080a90729eb331be981c36cb95e345991ca4527ba2d3ff844ba2fa59a03e2->leave($__internal_1fa080a90729eb331be981c36cb95e345991ca4527ba2d3ff844ba2fa59a03e2_prof);

    }

    public function getTemplateName()
    {
        return "BGCoreBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  137 => 21,  128 => 20,  117 => 35,  115 => 20,  112 => 19,  103 => 18,  67 => 6,  64 => 5,  55 => 4,  43 => 37,  41 => 18,  36 => 15,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>
<html>
  <head>
    {% block head %}
      <meta charset=\"utf-8\">
      <title>{% block title %}BecoGestion{% endblock %}</title>

      <link type=\"text/css\" rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
      <link type=\"text/css\" rel=\"stylesheet\" href=\"http://localhost/BecoGestion/web/css/bootstrap.min.css\">
      <link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css\">
      <link type=\"text/css\" rel=\"stylesheet\" href=\"http://localhost/BecoGestion/web/css/material-bootstrap-wizard.css\">
      <link type=\"text/css\" rel=\"stylesheet\" href=\"http://localhost/BecoGestion/web/css/style.css\">
      <link type=\"text/css\" rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\">
    {% endblock %}
  </head>

  <body>
    {% block body %}

      {% block scripts %}
        <!--   Core JS Files   -->
        <script type=\"text/javascript\" src=\"http://localhost/BecoGestion/web/js/jquery-2.2.4.min.js\"></script>
        <script type=\"text/javascript\" src=\"http://localhost/BecoGestion/web/js/bootstrap.min.js\"></script>
        <script type=\"text/javascript\" src=\"http://localhost/BecoGestion/web/js/jquery.bootstrap.js\"></script>
        <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js\"></script>
        <script type=\"text/javascript\" src=\"https://code.jquery.com/ui/1.12.0/jquery-ui.min.js\" integrity=\"sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=\" crossorigin=\"anonymous\"></script>

        <!--  Plugin for the Wizard -->
        <script type=\"text/javascript\" src=\"http://localhost/BecoGestion/web/js/material-bootstrap-wizard.js\"></script>

        <script type=\"text/javascript\" src=\"http://localhost/BecoGestion/web/js/jquery.validate.min.js\"></script>

        <script type=\"text/javascript\" src=\"http://localhost/BecoGestion/web/js/BecoGestion.js\"></script>
      {% endblock %}

    {% endblock %}
  </body>
</html>
", "BGCoreBundle::layout.html.twig", "C:\\wamp64\\www\\BecoGestion\\src\\BG\\CoreBundle\\Resources\\views\\layout.html.twig");
    }
}
