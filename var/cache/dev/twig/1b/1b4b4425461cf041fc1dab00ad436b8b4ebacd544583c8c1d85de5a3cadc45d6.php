<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_56afc24bcdbcd7b8504157bb29f7a16d5fc4835086b5aa8840fcff3c4896519e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_b3111ed57e99e102507ad55c3aa532cc98bc78beb30bb64411671e68c1163ba8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3111ed57e99e102507ad55c3aa532cc98bc78beb30bb64411671e68c1163ba8->enter($__internal_b3111ed57e99e102507ad55c3aa532cc98bc78beb30bb64411671e68c1163ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6dc61950659bcd748eb581cf7f3866dbb096fe3389d9ec01a9929d31c4d1618d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dc61950659bcd748eb581cf7f3866dbb096fe3389d9ec01a9929d31c4d1618d->enter($__internal_6dc61950659bcd748eb581cf7f3866dbb096fe3389d9ec01a9929d31c4d1618d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3111ed57e99e102507ad55c3aa532cc98bc78beb30bb64411671e68c1163ba8->leave($__internal_b3111ed57e99e102507ad55c3aa532cc98bc78beb30bb64411671e68c1163ba8_prof);

        
        $__internal_6dc61950659bcd748eb581cf7f3866dbb096fe3389d9ec01a9929d31c4d1618d->leave($__internal_6dc61950659bcd748eb581cf7f3866dbb096fe3389d9ec01a9929d31c4d1618d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5d893a7dd28fa391bff3f0cbad3724cc6843637f0b600cc878a408e354a4650b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d893a7dd28fa391bff3f0cbad3724cc6843637f0b600cc878a408e354a4650b->enter($__internal_5d893a7dd28fa391bff3f0cbad3724cc6843637f0b600cc878a408e354a4650b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_627f6685a9e15a8fbeb5980b4e5ee994cc804f86b6cf2c4232d531260a6a4736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_627f6685a9e15a8fbeb5980b4e5ee994cc804f86b6cf2c4232d531260a6a4736->enter($__internal_627f6685a9e15a8fbeb5980b4e5ee994cc804f86b6cf2c4232d531260a6a4736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_627f6685a9e15a8fbeb5980b4e5ee994cc804f86b6cf2c4232d531260a6a4736->leave($__internal_627f6685a9e15a8fbeb5980b4e5ee994cc804f86b6cf2c4232d531260a6a4736_prof);

        
        $__internal_5d893a7dd28fa391bff3f0cbad3724cc6843637f0b600cc878a408e354a4650b->leave($__internal_5d893a7dd28fa391bff3f0cbad3724cc6843637f0b600cc878a408e354a4650b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_12cfbfcaae8f6b408b9460ace8ad6c4181a8f41712ab492c85e82b93e67810aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12cfbfcaae8f6b408b9460ace8ad6c4181a8f41712ab492c85e82b93e67810aa->enter($__internal_12cfbfcaae8f6b408b9460ace8ad6c4181a8f41712ab492c85e82b93e67810aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d0e1dc8d2a5285270b93eecb0c41258fb032a6ab0892567d7f7b9f8020bf5921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e1dc8d2a5285270b93eecb0c41258fb032a6ab0892567d7f7b9f8020bf5921->enter($__internal_d0e1dc8d2a5285270b93eecb0c41258fb032a6ab0892567d7f7b9f8020bf5921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d0e1dc8d2a5285270b93eecb0c41258fb032a6ab0892567d7f7b9f8020bf5921->leave($__internal_d0e1dc8d2a5285270b93eecb0c41258fb032a6ab0892567d7f7b9f8020bf5921_prof);

        
        $__internal_12cfbfcaae8f6b408b9460ace8ad6c4181a8f41712ab492c85e82b93e67810aa->leave($__internal_12cfbfcaae8f6b408b9460ace8ad6c4181a8f41712ab492c85e82b93e67810aa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b3ea59fdf863b2b5fd8213100d327a5f6c8cf2f8ab7ac66607980ab26601cbe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3ea59fdf863b2b5fd8213100d327a5f6c8cf2f8ab7ac66607980ab26601cbe3->enter($__internal_b3ea59fdf863b2b5fd8213100d327a5f6c8cf2f8ab7ac66607980ab26601cbe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f7186e5159fe7f094bd0a38040571d792b5651ed4c10af0ab5fb282516c77a4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7186e5159fe7f094bd0a38040571d792b5651ed4c10af0ab5fb282516c77a4e->enter($__internal_f7186e5159fe7f094bd0a38040571d792b5651ed4c10af0ab5fb282516c77a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_f7186e5159fe7f094bd0a38040571d792b5651ed4c10af0ab5fb282516c77a4e->leave($__internal_f7186e5159fe7f094bd0a38040571d792b5651ed4c10af0ab5fb282516c77a4e_prof);

        
        $__internal_b3ea59fdf863b2b5fd8213100d327a5f6c8cf2f8ab7ac66607980ab26601cbe3->leave($__internal_b3ea59fdf863b2b5fd8213100d327a5f6c8cf2f8ab7ac66607980ab26601cbe3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\BecoGestion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
