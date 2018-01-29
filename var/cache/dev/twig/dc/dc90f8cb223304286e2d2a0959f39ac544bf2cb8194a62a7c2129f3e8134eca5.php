<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_5fbecc453385e4500d81cb1cb1a2914ad278bf27248816ac29b763cf1becebc5 extends Twig_Template
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
        $__internal_c270795a977c73557d1ddeb5d9a6783a2353ee7d4745fdda4f183edd11ce8b15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c270795a977c73557d1ddeb5d9a6783a2353ee7d4745fdda4f183edd11ce8b15->enter($__internal_c270795a977c73557d1ddeb5d9a6783a2353ee7d4745fdda4f183edd11ce8b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_d11e104df7b92e9d703fe91ca7d2dadb52b60e0ab886a08ffc978c7cca5e41c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d11e104df7b92e9d703fe91ca7d2dadb52b60e0ab886a08ffc978c7cca5e41c0->enter($__internal_d11e104df7b92e9d703fe91ca7d2dadb52b60e0ab886a08ffc978c7cca5e41c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c270795a977c73557d1ddeb5d9a6783a2353ee7d4745fdda4f183edd11ce8b15->leave($__internal_c270795a977c73557d1ddeb5d9a6783a2353ee7d4745fdda4f183edd11ce8b15_prof);

        
        $__internal_d11e104df7b92e9d703fe91ca7d2dadb52b60e0ab886a08ffc978c7cca5e41c0->leave($__internal_d11e104df7b92e9d703fe91ca7d2dadb52b60e0ab886a08ffc978c7cca5e41c0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4497a75874fe58a176fcb167ed4e74ace78aef252cbfd7cbf6fb13344b64adb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4497a75874fe58a176fcb167ed4e74ace78aef252cbfd7cbf6fb13344b64adb->enter($__internal_f4497a75874fe58a176fcb167ed4e74ace78aef252cbfd7cbf6fb13344b64adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_da4cbb4dd03e1a54912dbd183f4df94b87b1b14804ce41f6d2d67c68bf514701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da4cbb4dd03e1a54912dbd183f4df94b87b1b14804ce41f6d2d67c68bf514701->enter($__internal_da4cbb4dd03e1a54912dbd183f4df94b87b1b14804ce41f6d2d67c68bf514701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_da4cbb4dd03e1a54912dbd183f4df94b87b1b14804ce41f6d2d67c68bf514701->leave($__internal_da4cbb4dd03e1a54912dbd183f4df94b87b1b14804ce41f6d2d67c68bf514701_prof);

        
        $__internal_f4497a75874fe58a176fcb167ed4e74ace78aef252cbfd7cbf6fb13344b64adb->leave($__internal_f4497a75874fe58a176fcb167ed4e74ace78aef252cbfd7cbf6fb13344b64adb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_45076a0f65350873d1ffc22623c152254d5fe80952a9804bee3aeddfad264488 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45076a0f65350873d1ffc22623c152254d5fe80952a9804bee3aeddfad264488->enter($__internal_45076a0f65350873d1ffc22623c152254d5fe80952a9804bee3aeddfad264488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_015d47607ccc0396af8e98e34547fc8987214e5aafdbc4c058dc87c6d525a5ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_015d47607ccc0396af8e98e34547fc8987214e5aafdbc4c058dc87c6d525a5ff->enter($__internal_015d47607ccc0396af8e98e34547fc8987214e5aafdbc4c058dc87c6d525a5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_015d47607ccc0396af8e98e34547fc8987214e5aafdbc4c058dc87c6d525a5ff->leave($__internal_015d47607ccc0396af8e98e34547fc8987214e5aafdbc4c058dc87c6d525a5ff_prof);

        
        $__internal_45076a0f65350873d1ffc22623c152254d5fe80952a9804bee3aeddfad264488->leave($__internal_45076a0f65350873d1ffc22623c152254d5fe80952a9804bee3aeddfad264488_prof);

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
        return array (  90 => 13,  88 => 12,  80 => 6,  71 => 5,  58 => 19,  55 => 18,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\BecoGestion\\src\\BG\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
