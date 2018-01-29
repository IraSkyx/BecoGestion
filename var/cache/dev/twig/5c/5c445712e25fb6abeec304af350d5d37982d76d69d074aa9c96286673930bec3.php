<?php

/* BGCoreBundle::menu.html.twig */
class __TwigTemplate_288376863dede7ae1602cf87614d207c923a3c1403cbddcee18fe0da5ee9c9b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b332d1cc20723fb6f9ff471edf84c38a315f62378e8c70f523c3d9eaba12bf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b332d1cc20723fb6f9ff471edf84c38a315f62378e8c70f523c3d9eaba12bf0->enter($__internal_7b332d1cc20723fb6f9ff471edf84c38a315f62378e8c70f523c3d9eaba12bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BGCoreBundle::menu.html.twig"));

        $__internal_28b0a920dd7910fe40b009ce8bc40be8ca353eec1138565155cea819b534719a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28b0a920dd7910fe40b009ce8bc40be8ca353eec1138565155cea819b534719a->enter($__internal_28b0a920dd7910fe40b009ce8bc40be8ca353eec1138565155cea819b534719a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BGCoreBundle::menu.html.twig"));

        // line 1
        echo "<header>
  <nav>
    <div>
      <div class=\"col-sm-6 d-flex justify-content-start\"><a class=\"btn btn-info\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 4, $this->getSourceContext()); })()), (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new Twig_Error_Runtime('Variable "parameters" does not exist.', 4, $this->getSourceContext()); })())), "html", null, true);
        echo "\"><i class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i> Retour</a></div>
      <div class=\"col-sm-6 d-flex justify-content-end\"><a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-sign-out\"></i></a></div>
    </div>
  </nav>
</header>
";
        
        $__internal_7b332d1cc20723fb6f9ff471edf84c38a315f62378e8c70f523c3d9eaba12bf0->leave($__internal_7b332d1cc20723fb6f9ff471edf84c38a315f62378e8c70f523c3d9eaba12bf0_prof);

        
        $__internal_28b0a920dd7910fe40b009ce8bc40be8ca353eec1138565155cea819b534719a->leave($__internal_28b0a920dd7910fe40b009ce8bc40be8ca353eec1138565155cea819b534719a_prof);

    }

    public function getTemplateName()
    {
        return "BGCoreBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header>
  <nav>
    <div>
      <div class=\"col-sm-6 d-flex justify-content-start\"><a class=\"btn btn-info\" href=\"{{ path(route, parameters) }}\"><i class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i> Retour</a></div>
      <div class=\"col-sm-6 d-flex justify-content-end\"><a href=\"{{ path(\"fos_user_security_logout\") }}\"><i class=\"fa fa-sign-out\"></i></a></div>
    </div>
  </nav>
</header>
", "BGCoreBundle::menu.html.twig", "C:\\wamp64\\www\\BecoGestion\\src\\BG\\CoreBundle\\Resources\\views\\menu.html.twig");
    }
}
