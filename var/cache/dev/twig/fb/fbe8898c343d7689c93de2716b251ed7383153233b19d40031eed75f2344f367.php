<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_b29e3d43fd43f588738104651b85de657cc4007bd80aec3a0cb61e74dca26891 extends Twig_Template
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
        $__internal_6c05ec194484075ddf80c18b3af9b3e1871624a57a6b4e387d408f517eee72d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c05ec194484075ddf80c18b3af9b3e1871624a57a6b4e387d408f517eee72d4->enter($__internal_6c05ec194484075ddf80c18b3af9b3e1871624a57a6b4e387d408f517eee72d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_94abe7de37dd27cc46580e6aed2f62c1cf577f78a83fc3e9b12ff795127603a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94abe7de37dd27cc46580e6aed2f62c1cf577f78a83fc3e9b12ff795127603a1->enter($__internal_94abe7de37dd27cc46580e6aed2f62c1cf577f78a83fc3e9b12ff795127603a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_6c05ec194484075ddf80c18b3af9b3e1871624a57a6b4e387d408f517eee72d4->leave($__internal_6c05ec194484075ddf80c18b3af9b3e1871624a57a6b4e387d408f517eee72d4_prof);

        
        $__internal_94abe7de37dd27cc46580e6aed2f62c1cf577f78a83fc3e9b12ff795127603a1->leave($__internal_94abe7de37dd27cc46580e6aed2f62c1cf577f78a83fc3e9b12ff795127603a1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp64\\www\\BecoGestion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
