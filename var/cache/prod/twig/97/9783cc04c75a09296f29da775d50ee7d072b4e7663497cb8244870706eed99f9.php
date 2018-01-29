<?php

/* BGCoreBundle::layout.html.twig */
class __TwigTemplate_3bc793e3bef3bb396e813da5ed5edd1d40065ab01832ce9e6895712f2158cf66 extends Twig_Template
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
        $__internal_3ac243ef08ed91c0956970cb1a984a6cf8c08867a87894b04a10d61e45b2dede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ac243ef08ed91c0956970cb1a984a6cf8c08867a87894b04a10d61e45b2dede->enter($__internal_3ac243ef08ed91c0956970cb1a984a6cf8c08867a87894b04a10d61e45b2dede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BGCoreBundle::layout.html.twig"));

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
        
        $__internal_3ac243ef08ed91c0956970cb1a984a6cf8c08867a87894b04a10d61e45b2dede->leave($__internal_3ac243ef08ed91c0956970cb1a984a6cf8c08867a87894b04a10d61e45b2dede_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_0c348f9ff2ffaacd2ff8619850ef7b6c78cebbf94245be7aa3dc322c5c463ba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c348f9ff2ffaacd2ff8619850ef7b6c78cebbf94245be7aa3dc322c5c463ba7->enter($__internal_0c348f9ff2ffaacd2ff8619850ef7b6c78cebbf94245be7aa3dc322c5c463ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0c348f9ff2ffaacd2ff8619850ef7b6c78cebbf94245be7aa3dc322c5c463ba7->leave($__internal_0c348f9ff2ffaacd2ff8619850ef7b6c78cebbf94245be7aa3dc322c5c463ba7_prof);

    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_dbd2d856d92cd106ed989af7ed31f8a18cf9a742fcca8723a6d155f063661e52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd2d856d92cd106ed989af7ed31f8a18cf9a742fcca8723a6d155f063661e52->enter($__internal_dbd2d856d92cd106ed989af7ed31f8a18cf9a742fcca8723a6d155f063661e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BecoGestion";
        
        $__internal_dbd2d856d92cd106ed989af7ed31f8a18cf9a742fcca8723a6d155f063661e52->leave($__internal_dbd2d856d92cd106ed989af7ed31f8a18cf9a742fcca8723a6d155f063661e52_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff904b691131d8dcb69164672b92f80b20ff953974ff209ada1497429567de36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff904b691131d8dcb69164672b92f80b20ff953974ff209ada1497429567de36->enter($__internal_ff904b691131d8dcb69164672b92f80b20ff953974ff209ada1497429567de36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "
      ";
        // line 20
        $this->displayBlock('scripts', $context, $blocks);
        // line 35
        echo "
    ";
        
        $__internal_ff904b691131d8dcb69164672b92f80b20ff953974ff209ada1497429567de36->leave($__internal_ff904b691131d8dcb69164672b92f80b20ff953974ff209ada1497429567de36_prof);

    }

    // line 20
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_138731ea075ad2ccc7a25645b00c847a6165cd16f9f24f3833bb4d05c9f2e6fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_138731ea075ad2ccc7a25645b00c847a6165cd16f9f24f3833bb4d05c9f2e6fe->enter($__internal_138731ea075ad2ccc7a25645b00c847a6165cd16f9f24f3833bb4d05c9f2e6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

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
        
        $__internal_138731ea075ad2ccc7a25645b00c847a6165cd16f9f24f3833bb4d05c9f2e6fe->leave($__internal_138731ea075ad2ccc7a25645b00c847a6165cd16f9f24f3833bb4d05c9f2e6fe_prof);

    }

    public function getTemplateName()
    {
        return "BGCoreBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  110 => 21,  104 => 20,  96 => 35,  94 => 20,  91 => 19,  85 => 18,  58 => 6,  55 => 5,  49 => 4,  40 => 37,  38 => 18,  33 => 15,  31 => 4,  26 => 1,);
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
", "BGCoreBundle::layout.html.twig", "F:\\wamp64\\www\\BecoGestion\\src\\BG\\CoreBundle/Resources/views/layout.html.twig");
    }
}
