<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_1cf38989cc5329bbc1db375632eb19ee9abb443a069a5dd2fa448a8c1aa0540f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BGCoreBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BGCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f3f9364058744b44ff6b98a3c815569e9d04e0b86e5e5e259e43e275ea7cb79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f3f9364058744b44ff6b98a3c815569e9d04e0b86e5e5e259e43e275ea7cb79->enter($__internal_4f3f9364058744b44ff6b98a3c815569e9d04e0b86e5e5e259e43e275ea7cb79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f3f9364058744b44ff6b98a3c815569e9d04e0b86e5e5e259e43e275ea7cb79->leave($__internal_4f3f9364058744b44ff6b98a3c815569e9d04e0b86e5e5e259e43e275ea7cb79_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d57fe313a0cbc346b0879b3113754d8d76b0b82d016d64e2d33a34f45bfe3c46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d57fe313a0cbc346b0879b3113754d8d76b0b82d016d64e2d33a34f45bfe3c46->enter($__internal_d57fe313a0cbc346b0879b3113754d8d76b0b82d016d64e2d33a34f45bfe3c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
      ";
        // line 5
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 18
        echo "
  ";
        // line 19
        $this->displayParentBlock("body", $context, $blocks);
        echo "

";
        
        $__internal_d57fe313a0cbc346b0879b3113754d8d76b0b82d016d64e2d33a34f45bfe3c46->leave($__internal_d57fe313a0cbc346b0879b3113754d8d76b0b82d016d64e2d33a34f45bfe3c46_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8a82826c8886a4497cdc9e717883b60ae3ea45de51c4ea687abb8ea8eda2edd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a82826c8886a4497cdc9e717883b60ae3ea45de51c4ea687abb8ea8eda2edd0->enter($__internal_8a82826c8886a4497cdc9e717883b60ae3ea45de51c4ea687abb8ea8eda2edd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "
        <div class=\"container d-flex align-items-center\">

          <div class=\"card wizard-card\" style=\"padding: 5vh;\" data-color=\"blue\">
            <h2 class=\"form-signin-heading\">BECO GESTION</h2>

              ";
        // line 12
        $this->loadTemplate("BGUserBundle:Security:login_content.html.twig", "@FOSUser/Security/login.html.twig", 12)->display($context);
        // line 13
        echo "
          </div>
        </div>

      ";
        
        $__internal_8a82826c8886a4497cdc9e717883b60ae3ea45de51c4ea687abb8ea8eda2edd0->leave($__internal_8a82826c8886a4497cdc9e717883b60ae3ea45de51c4ea687abb8ea8eda2edd0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 13,  73 => 12,  65 => 6,  59 => 5,  49 => 19,  46 => 18,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BGCoreBundle::layout.html.twig\" %}

{% block body %}

      {% block fos_user_content %}

        <div class=\"container d-flex align-items-center\">

          <div class=\"card wizard-card\" style=\"padding: 5vh;\" data-color=\"blue\">
            <h2 class=\"form-signin-heading\">BECO GESTION</h2>

              {% include \"BGUserBundle:Security:login_content.html.twig\" %}

          </div>
        </div>

      {% endblock fos_user_content %}

  {{ parent() }}

{% endblock %}
", "@FOSUser/Security/login.html.twig", "F:\\wamp64\\www\\BecoGestion\\src\\BG\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
