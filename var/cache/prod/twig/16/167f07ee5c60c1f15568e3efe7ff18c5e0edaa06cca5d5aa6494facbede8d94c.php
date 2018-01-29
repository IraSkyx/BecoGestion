<?php

/* BGUserBundle:Security:login_content.html.twig */
class __TwigTemplate_f5f80422fd28b3cff64df078d05156567064feb49f167ad94f959011484cc83f extends Twig_Template
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
        $__internal_fff301c15f7869faa6ec44ce6eeebcfeebbe071c6e0fec6b93072f4b3333a62d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fff301c15f7869faa6ec44ce6eeebcfeebbe071c6e0fec6b93072f4b3333a62d->enter($__internal_fff301c15f7869faa6ec44ce6eeebcfeebbe071c6e0fec6b93072f4b3333a62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BGUserBundle:Security:login_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 4
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 4, $this->getSourceContext()); })())) {
            // line 5
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
    ";
        }
        // line 7
        echo "
    <label class=\"sr-only\" for=\"username\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
        echo "\" required=\"required\" />

    <label class=\"sr-only\" for=\"password\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

    <input class=\"button btn-lg btn-info btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>

";
        // line 20
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 20, $this->getSourceContext()); })())) {
            // line 21
            echo "    <div class=\"alert alert-danger\" style=\"margin: 1.5vh;\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 21, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 21, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        
        $__internal_fff301c15f7869faa6ec44ce6eeebcfeebbe071c6e0fec6b93072f4b3333a62d->leave($__internal_fff301c15f7869faa6ec44ce6eeebcfeebbe071c6e0fec6b93072f4b3333a62d_prof);

    }

    public function getTemplateName()
    {
        return "BGUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 21,  67 => 20,  61 => 17,  56 => 15,  49 => 11,  44 => 9,  40 => 8,  37 => 7,  31 => 5,  29 => 4,  25 => 3,  22 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}

    <label class=\"sr-only\" for=\"username\">{{ 'security.login.username'|trans }}</label>
    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />

    <label class=\"sr-only\" for=\"password\">{{ 'security.login.password'|trans }}</label>
    <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>

    <input class=\"button btn-lg btn-info btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
</form>

{% if error %}
    <div class=\"alert alert-danger\" style=\"margin: 1.5vh;\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}
", "BGUserBundle:Security:login_content.html.twig", "F:\\wamp64\\www\\BecoGestion\\src\\BG\\UserBundle/Resources/views/Security/login_content.html.twig");
    }
}
