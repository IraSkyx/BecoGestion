<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_488680e8950bbeb31636ecb4d8154516253cbd90c8b3dce75c7c74053984ffa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8134544ef4a0866f2f9100ddb50977bd65e033d2af049230087078f5a166335 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8134544ef4a0866f2f9100ddb50977bd65e033d2af049230087078f5a166335->enter($__internal_e8134544ef4a0866f2f9100ddb50977bd65e033d2af049230087078f5a166335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_77745fdc31f60b05011a76e32e2eb6b48c416ccdd42efcc5d3814d17b88d1704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77745fdc31f60b05011a76e32e2eb6b48c416ccdd42efcc5d3814d17b88d1704->enter($__internal_77745fdc31f60b05011a76e32e2eb6b48c416ccdd42efcc5d3814d17b88d1704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8134544ef4a0866f2f9100ddb50977bd65e033d2af049230087078f5a166335->leave($__internal_e8134544ef4a0866f2f9100ddb50977bd65e033d2af049230087078f5a166335_prof);

        
        $__internal_77745fdc31f60b05011a76e32e2eb6b48c416ccdd42efcc5d3814d17b88d1704->leave($__internal_77745fdc31f60b05011a76e32e2eb6b48c416ccdd42efcc5d3814d17b88d1704_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1a93c735faf2c97bbabcf531cacf9d8e8bf804b0dd6b183867bcbd7f34a828b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a93c735faf2c97bbabcf531cacf9d8e8bf804b0dd6b183867bcbd7f34a828b8->enter($__internal_1a93c735faf2c97bbabcf531cacf9d8e8bf804b0dd6b183867bcbd7f34a828b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1d9dcd25aaa5b6ccb9e212c7353bd6db3ae8d225e8b1ca35bcb8fd53a536a7dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d9dcd25aaa5b6ccb9e212c7353bd6db3ae8d225e8b1ca35bcb8fd53a536a7dd->enter($__internal_1d9dcd25aaa5b6ccb9e212c7353bd6db3ae8d225e8b1ca35bcb8fd53a536a7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_1d9dcd25aaa5b6ccb9e212c7353bd6db3ae8d225e8b1ca35bcb8fd53a536a7dd->leave($__internal_1d9dcd25aaa5b6ccb9e212c7353bd6db3ae8d225e8b1ca35bcb8fd53a536a7dd_prof);

        
        $__internal_1a93c735faf2c97bbabcf531cacf9d8e8bf804b0dd6b183867bcbd7f34a828b8->leave($__internal_1a93c735faf2c97bbabcf531cacf9d8e8bf804b0dd6b183867bcbd7f34a828b8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_57d82eabd22dc0b7e8d9a80b9a4be8bacfac2ad74b619b14a4cf9f6654cd105b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57d82eabd22dc0b7e8d9a80b9a4be8bacfac2ad74b619b14a4cf9f6654cd105b->enter($__internal_57d82eabd22dc0b7e8d9a80b9a4be8bacfac2ad74b619b14a4cf9f6654cd105b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_763793b0d006bf7a81b6fe1ff801a25810fcf6ac5ae8b5a206205a097ea2d58b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_763793b0d006bf7a81b6fe1ff801a25810fcf6ac5ae8b5a206205a097ea2d58b->enter($__internal_763793b0d006bf7a81b6fe1ff801a25810fcf6ac5ae8b5a206205a097ea2d58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_763793b0d006bf7a81b6fe1ff801a25810fcf6ac5ae8b5a206205a097ea2d58b->leave($__internal_763793b0d006bf7a81b6fe1ff801a25810fcf6ac5ae8b5a206205a097ea2d58b_prof);

        
        $__internal_57d82eabd22dc0b7e8d9a80b9a4be8bacfac2ad74b619b14a4cf9f6654cd105b->leave($__internal_57d82eabd22dc0b7e8d9a80b9a4be8bacfac2ad74b619b14a4cf9f6654cd105b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f1ee45a33de66fe499c60897e6248927aaf2559f5c9ff1f04cabd9ba4d27f6c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1ee45a33de66fe499c60897e6248927aaf2559f5c9ff1f04cabd9ba4d27f6c3->enter($__internal_f1ee45a33de66fe499c60897e6248927aaf2559f5c9ff1f04cabd9ba4d27f6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_737ad6440271e074ce2b83d432da473be2ce960223a6dd30783e4d43bc54683a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_737ad6440271e074ce2b83d432da473be2ce960223a6dd30783e4d43bc54683a->enter($__internal_737ad6440271e074ce2b83d432da473be2ce960223a6dd30783e4d43bc54683a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_737ad6440271e074ce2b83d432da473be2ce960223a6dd30783e4d43bc54683a->leave($__internal_737ad6440271e074ce2b83d432da473be2ce960223a6dd30783e4d43bc54683a_prof);

        
        $__internal_f1ee45a33de66fe499c60897e6248927aaf2559f5c9ff1f04cabd9ba4d27f6c3->leave($__internal_f1ee45a33de66fe499c60897e6248927aaf2559f5c9ff1f04cabd9ba4d27f6c3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\BecoGestion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
