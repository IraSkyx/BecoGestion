<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_8e55104425ac4768b0f4a197a915138c03f4cc805841fdbc6b03de8a4ee9fa16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af51d3e9e34fbd69ad293e4e9c028f9e93c6d6f3215aaa779491024af9a15c6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af51d3e9e34fbd69ad293e4e9c028f9e93c6d6f3215aaa779491024af9a15c6a->enter($__internal_af51d3e9e34fbd69ad293e4e9c028f9e93c6d6f3215aaa779491024af9a15c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_74b413fc130cbc7784767a121ab2e1f675c41762f8a32bd30f822f842a8898fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74b413fc130cbc7784767a121ab2e1f675c41762f8a32bd30f822f842a8898fe->enter($__internal_74b413fc130cbc7784767a121ab2e1f675c41762f8a32bd30f822f842a8898fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_af51d3e9e34fbd69ad293e4e9c028f9e93c6d6f3215aaa779491024af9a15c6a->leave($__internal_af51d3e9e34fbd69ad293e4e9c028f9e93c6d6f3215aaa779491024af9a15c6a_prof);

        
        $__internal_74b413fc130cbc7784767a121ab2e1f675c41762f8a32bd30f822f842a8898fe->leave($__internal_74b413fc130cbc7784767a121ab2e1f675c41762f8a32bd30f822f842a8898fe_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a7d4e389978659df49d8b6a77213426c2d203f08da9c38136ccb27d8dd1cf2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a7d4e389978659df49d8b6a77213426c2d203f08da9c38136ccb27d8dd1cf2d->enter($__internal_9a7d4e389978659df49d8b6a77213426c2d203f08da9c38136ccb27d8dd1cf2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c3970ad5c813ab566f3506baaf6966a3c7a6a98699b1db325d8e9059fab2a36a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3970ad5c813ab566f3506baaf6966a3c7a6a98699b1db325d8e9059fab2a36a->enter($__internal_c3970ad5c813ab566f3506baaf6966a3c7a6a98699b1db325d8e9059fab2a36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c3970ad5c813ab566f3506baaf6966a3c7a6a98699b1db325d8e9059fab2a36a->leave($__internal_c3970ad5c813ab566f3506baaf6966a3c7a6a98699b1db325d8e9059fab2a36a_prof);

        
        $__internal_9a7d4e389978659df49d8b6a77213426c2d203f08da9c38136ccb27d8dd1cf2d->leave($__internal_9a7d4e389978659df49d8b6a77213426c2d203f08da9c38136ccb27d8dd1cf2d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ae3f1b72c766da87b6fcd97e4af4c3bba968a049ba5c7190822e9bdb23bf0c03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae3f1b72c766da87b6fcd97e4af4c3bba968a049ba5c7190822e9bdb23bf0c03->enter($__internal_ae3f1b72c766da87b6fcd97e4af4c3bba968a049ba5c7190822e9bdb23bf0c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_43437d34f44ef5c8bd375977c376a7e5879f8c63b679fe2e44f3a194de3afe4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43437d34f44ef5c8bd375977c376a7e5879f8c63b679fe2e44f3a194de3afe4e->enter($__internal_43437d34f44ef5c8bd375977c376a7e5879f8c63b679fe2e44f3a194de3afe4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_43437d34f44ef5c8bd375977c376a7e5879f8c63b679fe2e44f3a194de3afe4e->leave($__internal_43437d34f44ef5c8bd375977c376a7e5879f8c63b679fe2e44f3a194de3afe4e_prof);

        
        $__internal_ae3f1b72c766da87b6fcd97e4af4c3bba968a049ba5c7190822e9bdb23bf0c03->leave($__internal_ae3f1b72c766da87b6fcd97e4af4c3bba968a049ba5c7190822e9bdb23bf0c03_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d5cf5b4f6fcff81e872ee50212734b8277b31c31a837232ba3579611048c4da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d5cf5b4f6fcff81e872ee50212734b8277b31c31a837232ba3579611048c4da->enter($__internal_7d5cf5b4f6fcff81e872ee50212734b8277b31c31a837232ba3579611048c4da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_963316a69ef5879fa46c1f846f025ccda52b421165511d90a01789a590aae1fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_963316a69ef5879fa46c1f846f025ccda52b421165511d90a01789a590aae1fe->enter($__internal_963316a69ef5879fa46c1f846f025ccda52b421165511d90a01789a590aae1fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_963316a69ef5879fa46c1f846f025ccda52b421165511d90a01789a590aae1fe->leave($__internal_963316a69ef5879fa46c1f846f025ccda52b421165511d90a01789a590aae1fe_prof);

        
        $__internal_7d5cf5b4f6fcff81e872ee50212734b8277b31c31a837232ba3579611048c4da->leave($__internal_7d5cf5b4f6fcff81e872ee50212734b8277b31c31a837232ba3579611048c4da_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\BecoGestion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
