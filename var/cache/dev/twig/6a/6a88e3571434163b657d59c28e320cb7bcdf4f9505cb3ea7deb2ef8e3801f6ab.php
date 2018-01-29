<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_849c2038196717df126eb02df52a966a73034cf5cc759052ea3d983dbf3a1d85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1944818348e7ab6c1fd756ea1dff7c309d07d42b7bc8a21063e7f022b4177574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1944818348e7ab6c1fd756ea1dff7c309d07d42b7bc8a21063e7f022b4177574->enter($__internal_1944818348e7ab6c1fd756ea1dff7c309d07d42b7bc8a21063e7f022b4177574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_5b42f374c5298e7475c17df74a8768f81787f5f220f32dd5e5c73506a3cd397c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b42f374c5298e7475c17df74a8768f81787f5f220f32dd5e5c73506a3cd397c->enter($__internal_5b42f374c5298e7475c17df74a8768f81787f5f220f32dd5e5c73506a3cd397c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1944818348e7ab6c1fd756ea1dff7c309d07d42b7bc8a21063e7f022b4177574->leave($__internal_1944818348e7ab6c1fd756ea1dff7c309d07d42b7bc8a21063e7f022b4177574_prof);

        
        $__internal_5b42f374c5298e7475c17df74a8768f81787f5f220f32dd5e5c73506a3cd397c->leave($__internal_5b42f374c5298e7475c17df74a8768f81787f5f220f32dd5e5c73506a3cd397c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8d3a9d0b2883a6c3daaba273fb0debbb44d8e8a2228fb3ec138c47ea533ff9c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d3a9d0b2883a6c3daaba273fb0debbb44d8e8a2228fb3ec138c47ea533ff9c3->enter($__internal_8d3a9d0b2883a6c3daaba273fb0debbb44d8e8a2228fb3ec138c47ea533ff9c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c0d7619c51e1ee43670ad3b2d56fec8f627e0ef0d92a1c064e9ff00d31faeddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0d7619c51e1ee43670ad3b2d56fec8f627e0ef0d92a1c064e9ff00d31faeddf->enter($__internal_c0d7619c51e1ee43670ad3b2d56fec8f627e0ef0d92a1c064e9ff00d31faeddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_c0d7619c51e1ee43670ad3b2d56fec8f627e0ef0d92a1c064e9ff00d31faeddf->leave($__internal_c0d7619c51e1ee43670ad3b2d56fec8f627e0ef0d92a1c064e9ff00d31faeddf_prof);

        
        $__internal_8d3a9d0b2883a6c3daaba273fb0debbb44d8e8a2228fb3ec138c47ea533ff9c3->leave($__internal_8d3a9d0b2883a6c3daaba273fb0debbb44d8e8a2228fb3ec138c47ea533ff9c3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\wamp64\\www\\BecoGestion\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
