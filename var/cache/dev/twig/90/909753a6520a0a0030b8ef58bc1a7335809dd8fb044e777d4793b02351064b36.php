<?php

/* BGUserBundle:Security:login_content.html.twig */
class __TwigTemplate_df8d7749e9e1fc5a0284e44607e3ab92eb0105193bc65ae6abb9e7f7ac24ffac extends Twig_Template
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
        $__internal_583d6a513d2612f7c4e980ad7f6f02c9702ac4f8b45a707d483c16e434ff6651 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_583d6a513d2612f7c4e980ad7f6f02c9702ac4f8b45a707d483c16e434ff6651->enter($__internal_583d6a513d2612f7c4e980ad7f6f02c9702ac4f8b45a707d483c16e434ff6651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BGUserBundle:Security:login_content.html.twig"));

        $__internal_f64e0becf7f93baad4238497fc896af8310f97f51003fd131daf4c5d51f58900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f64e0becf7f93baad4238497fc896af8310f97f51003fd131daf4c5d51f58900->enter($__internal_f64e0becf7f93baad4238497fc896af8310f97f51003fd131daf4c5d51f58900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BGUserBundle:Security:login_content.html.twig"));

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
        
        $__internal_583d6a513d2612f7c4e980ad7f6f02c9702ac4f8b45a707d483c16e434ff6651->leave($__internal_583d6a513d2612f7c4e980ad7f6f02c9702ac4f8b45a707d483c16e434ff6651_prof);

        
        $__internal_f64e0becf7f93baad4238497fc896af8310f97f51003fd131daf4c5d51f58900->leave($__internal_f64e0becf7f93baad4238497fc896af8310f97f51003fd131daf4c5d51f58900_prof);

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
        return array (  72 => 21,  70 => 20,  64 => 17,  59 => 15,  52 => 11,  47 => 9,  43 => 8,  40 => 7,  34 => 5,  32 => 4,  28 => 3,  25 => 2,);
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
", "BGUserBundle:Security:login_content.html.twig", "C:\\wamp64\\www\\BecoGestion\\src\\BG\\UserBundle\\Resources\\views\\Security\\login_content.html.twig");
    }
}
