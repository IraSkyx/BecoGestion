<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_fc5ca5b1679b548bf79772c2a496ca63582d06866b423e74b93f4155ddf71c9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ad34551f558e5f06b0e04227f1c3a1b2fc4509926c612f143a8b031f999199d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ad34551f558e5f06b0e04227f1c3a1b2fc4509926c612f143a8b031f999199d->enter($__internal_8ad34551f558e5f06b0e04227f1c3a1b2fc4509926c612f143a8b031f999199d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_216321e779918a6327233c35657c36808c82dc321b2c8104dc58afa7153511c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_216321e779918a6327233c35657c36808c82dc321b2c8104dc58afa7153511c3->enter($__internal_216321e779918a6327233c35657c36808c82dc321b2c8104dc58afa7153511c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('button_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('form_label', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('choice_label', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('radio_label', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 88
        echo "
";
        // line 90
        echo "
";
        // line 91
        $this->displayBlock('form_row', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('button_row', $context, $blocks);
        // line 104
        echo "
";
        // line 105
        $this->displayBlock('choice_row', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('date_row', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('time_row', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 124
        echo "
";
        // line 125
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('radio_row', $context, $blocks);
        // line 138
        echo "
";
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_8ad34551f558e5f06b0e04227f1c3a1b2fc4509926c612f143a8b031f999199d->leave($__internal_8ad34551f558e5f06b0e04227f1c3a1b2fc4509926c612f143a8b031f999199d_prof);

        
        $__internal_216321e779918a6327233c35657c36808c82dc321b2c8104dc58afa7153511c3->leave($__internal_216321e779918a6327233c35657c36808c82dc321b2c8104dc58afa7153511c3_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_9cfb6531a6c089089d8323892bce8a838d49ff3189f080ad2785aac4a602d160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cfb6531a6c089089d8323892bce8a838d49ff3189f080ad2785aac4a602d160->enter($__internal_9cfb6531a6c089089d8323892bce8a838d49ff3189f080ad2785aac4a602d160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_9a02f76f278c6f535a9b704480d4a5bb52636a967faba348eac2ca130642b06a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a02f76f278c6f535a9b704480d4a5bb52636a967faba348eac2ca130642b06a->enter($__internal_9a02f76f278c6f535a9b704480d4a5bb52636a967faba348eac2ca130642b06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_9a02f76f278c6f535a9b704480d4a5bb52636a967faba348eac2ca130642b06a->leave($__internal_9a02f76f278c6f535a9b704480d4a5bb52636a967faba348eac2ca130642b06a_prof);

        
        $__internal_9cfb6531a6c089089d8323892bce8a838d49ff3189f080ad2785aac4a602d160->leave($__internal_9cfb6531a6c089089d8323892bce8a838d49ff3189f080ad2785aac4a602d160_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_f0134755a93a0c3967b837026451fff143ffd6c9198b2a2f5a23e51527c92795 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0134755a93a0c3967b837026451fff143ffd6c9198b2a2f5a23e51527c92795->enter($__internal_f0134755a93a0c3967b837026451fff143ffd6c9198b2a2f5a23e51527c92795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_8ec7482d484e4a9696978ae5d3a0a7939e181367a5b374527959b8b835a1a8c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ec7482d484e4a9696978ae5d3a0a7939e181367a5b374527959b8b835a1a8c3->enter($__internal_8ec7482d484e4a9696978ae5d3a0a7939e181367a5b374527959b8b835a1a8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_8ec7482d484e4a9696978ae5d3a0a7939e181367a5b374527959b8b835a1a8c3->leave($__internal_8ec7482d484e4a9696978ae5d3a0a7939e181367a5b374527959b8b835a1a8c3_prof);

        
        $__internal_f0134755a93a0c3967b837026451fff143ffd6c9198b2a2f5a23e51527c92795->leave($__internal_f0134755a93a0c3967b837026451fff143ffd6c9198b2a2f5a23e51527c92795_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_d75992c874ceb9505f6a524b18fee7c6857878b07303dde25600a036b4b64227 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d75992c874ceb9505f6a524b18fee7c6857878b07303dde25600a036b4b64227->enter($__internal_d75992c874ceb9505f6a524b18fee7c6857878b07303dde25600a036b4b64227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_52936295d0cc4d2a3ee63601c147066710d1c23d9e9d7b9ec235cf65df93a55f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52936295d0cc4d2a3ee63601c147066710d1c23d9e9d7b9ec235cf65df93a55f->enter($__internal_52936295d0cc4d2a3ee63601c147066710d1c23d9e9d7b9ec235cf65df93a55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 18
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 18, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 19
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 19, $this->getSourceContext()); })()))) {
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 22
            echo "<div class=\"checkbox\">";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 24
            echo "</div>";
        }
        
        $__internal_52936295d0cc4d2a3ee63601c147066710d1c23d9e9d7b9ec235cf65df93a55f->leave($__internal_52936295d0cc4d2a3ee63601c147066710d1c23d9e9d7b9ec235cf65df93a55f_prof);

        
        $__internal_d75992c874ceb9505f6a524b18fee7c6857878b07303dde25600a036b4b64227->leave($__internal_d75992c874ceb9505f6a524b18fee7c6857878b07303dde25600a036b4b64227_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_02c1645744b10ce72525d9589aa5c8c5ce9b8ed734d22829c75ced654d0e16f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02c1645744b10ce72525d9589aa5c8c5ce9b8ed734d22829c75ced654d0e16f9->enter($__internal_02c1645744b10ce72525d9589aa5c8c5ce9b8ed734d22829c75ced654d0e16f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_3aaa0da3c97775e37415ed39a6738e87cf31ed8618398236b9f000321a8ae956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aaa0da3c97775e37415ed39a6738e87cf31ed8618398236b9f000321a8ae956->enter($__internal_3aaa0da3c97775e37415ed39a6738e87cf31ed8618398236b9f000321a8ae956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 29
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 29, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 30
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 30, $this->getSourceContext()); })()))) {
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 33
            echo "<div class=\"radio\">";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 35
            echo "</div>";
        }
        
        $__internal_3aaa0da3c97775e37415ed39a6738e87cf31ed8618398236b9f000321a8ae956->leave($__internal_3aaa0da3c97775e37415ed39a6738e87cf31ed8618398236b9f000321a8ae956_prof);

        
        $__internal_02c1645744b10ce72525d9589aa5c8c5ce9b8ed734d22829c75ced654d0e16f9->leave($__internal_02c1645744b10ce72525d9589aa5c8c5ce9b8ed734d22829c75ced654d0e16f9_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_7f304b618c8e9699429522936729e038a49eb89f5dd1dc5b56e6eff96daefcc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f304b618c8e9699429522936729e038a49eb89f5dd1dc5b56e6eff96daefcc8->enter($__internal_7f304b618c8e9699429522936729e038a49eb89f5dd1dc5b56e6eff96daefcc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_45e5f189495d8e3afcb41c8ebed7a64b02d6eda3d89e9fdcb237b6a8739d8cb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45e5f189495d8e3afcb41c8ebed7a64b02d6eda3d89e9fdcb237b6a8739d8cb3->enter($__internal_45e5f189495d8e3afcb41c8ebed7a64b02d6eda3d89e9fdcb237b6a8739d8cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_45e5f189495d8e3afcb41c8ebed7a64b02d6eda3d89e9fdcb237b6a8739d8cb3->leave($__internal_45e5f189495d8e3afcb41c8ebed7a64b02d6eda3d89e9fdcb237b6a8739d8cb3_prof);

        
        $__internal_7f304b618c8e9699429522936729e038a49eb89f5dd1dc5b56e6eff96daefcc8->leave($__internal_7f304b618c8e9699429522936729e038a49eb89f5dd1dc5b56e6eff96daefcc8_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_d5b66b521cc9038c9e712a342f30ef0799d3acda2f209e66605e5a52c10fdec2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5b66b521cc9038c9e712a342f30ef0799d3acda2f209e66605e5a52c10fdec2->enter($__internal_d5b66b521cc9038c9e712a342f30ef0799d3acda2f209e66605e5a52c10fdec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_25b0f59d4741ddcde79417e521d1d31093b96b3a10104b8903d8bb33029f6b0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25b0f59d4741ddcde79417e521d1d31093b96b3a10104b8903d8bb33029f6b0a->enter($__internal_25b0f59d4741ddcde79417e521d1d31093b96b3a10104b8903d8bb33029f6b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_25b0f59d4741ddcde79417e521d1d31093b96b3a10104b8903d8bb33029f6b0a->leave($__internal_25b0f59d4741ddcde79417e521d1d31093b96b3a10104b8903d8bb33029f6b0a_prof);

        
        $__internal_d5b66b521cc9038c9e712a342f30ef0799d3acda2f209e66605e5a52c10fdec2->leave($__internal_d5b66b521cc9038c9e712a342f30ef0799d3acda2f209e66605e5a52c10fdec2_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_3f079f02b679409c8ab692098d9f96a29e7c37342b8666e9bb804117165e7715 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f079f02b679409c8ab692098d9f96a29e7c37342b8666e9bb804117165e7715->enter($__internal_3f079f02b679409c8ab692098d9f96a29e7c37342b8666e9bb804117165e7715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_2c7244cddb3c80c8d17407c0d9007990abdba8425b3e184ecc445eda592dea85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c7244cddb3c80c8d17407c0d9007990abdba8425b3e184ecc445eda592dea85->enter($__internal_2c7244cddb3c80c8d17407c0d9007990abdba8425b3e184ecc445eda592dea85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_2c7244cddb3c80c8d17407c0d9007990abdba8425b3e184ecc445eda592dea85->leave($__internal_2c7244cddb3c80c8d17407c0d9007990abdba8425b3e184ecc445eda592dea85_prof);

        
        $__internal_3f079f02b679409c8ab692098d9f96a29e7c37342b8666e9bb804117165e7715->leave($__internal_3f079f02b679409c8ab692098d9f96a29e7c37342b8666e9bb804117165e7715_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_6e444d7c79980bfd78ba96a6e3578819a09ba3fe3cc6da9e0c4a8f1a4d559c29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e444d7c79980bfd78ba96a6e3578819a09ba3fe3cc6da9e0c4a8f1a4d559c29->enter($__internal_6e444d7c79980bfd78ba96a6e3578819a09ba3fe3cc6da9e0c4a8f1a4d559c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_4b175fed9324ab500d9c95d8c6c2ea1f0c859f36d2cf4ba79c44279601ca707e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b175fed9324ab500d9c95d8c6c2ea1f0c859f36d2cf4ba79c44279601ca707e->enter($__internal_4b175fed9324ab500d9c95d8c6c2ea1f0c859f36d2cf4ba79c44279601ca707e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_4b175fed9324ab500d9c95d8c6c2ea1f0c859f36d2cf4ba79c44279601ca707e->leave($__internal_4b175fed9324ab500d9c95d8c6c2ea1f0c859f36d2cf4ba79c44279601ca707e_prof);

        
        $__internal_6e444d7c79980bfd78ba96a6e3578819a09ba3fe3cc6da9e0c4a8f1a4d559c29->leave($__internal_6e444d7c79980bfd78ba96a6e3578819a09ba3fe3cc6da9e0c4a8f1a4d559c29_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_de5bf9558d592075cf90e6cd171c9d9a55c2c16e0c25b57d94f45d9c4faa90c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de5bf9558d592075cf90e6cd171c9d9a55c2c16e0c25b57d94f45d9c4faa90c3->enter($__internal_de5bf9558d592075cf90e6cd171c9d9a55c2c16e0c25b57d94f45d9c4faa90c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_0e5979c2f674ae55626c3cd86f3b04058ff9a2e7294dfb24029db19f397f74a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e5979c2f674ae55626c3cd86f3b04058ff9a2e7294dfb24029db19f397f74a2->enter($__internal_0e5979c2f674ae55626c3cd86f3b04058ff9a2e7294dfb24029db19f397f74a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 66
        if (array_key_exists("widget", $context)) {
            // line 67
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 67, $this->getSourceContext()); })())) {
                // line 68
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 68, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 70
            if (array_key_exists("parent_label_class", $context)) {
                // line 71
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 71, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 71, $this->getSourceContext()); })())))));
            }
            // line 73
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })())))) {
                // line 74
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 74, $this->getSourceContext()); })()))) {
                    // line 75
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 75, $this->getSourceContext()); })()), array("%name%" =>                     // line 76
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 76, $this->getSourceContext()); })()), "%id%" =>                     // line 77
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 77, $this->getSourceContext()); })())));
                } else {
                    // line 80
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 80, $this->getSourceContext()); })()));
                }
            }
            // line 83
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 83, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 84
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 84, $this->getSourceContext()); })());
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            // line 85
            echo "</label>";
        }
        
        $__internal_0e5979c2f674ae55626c3cd86f3b04058ff9a2e7294dfb24029db19f397f74a2->leave($__internal_0e5979c2f674ae55626c3cd86f3b04058ff9a2e7294dfb24029db19f397f74a2_prof);

        
        $__internal_de5bf9558d592075cf90e6cd171c9d9a55c2c16e0c25b57d94f45d9c4faa90c3->leave($__internal_de5bf9558d592075cf90e6cd171c9d9a55c2c16e0c25b57d94f45d9c4faa90c3_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_b7c639227f4701e3b51cd0dfe8608c49cceadc327b82815eae3cf2ac0ac37d99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7c639227f4701e3b51cd0dfe8608c49cceadc327b82815eae3cf2ac0ac37d99->enter($__internal_b7c639227f4701e3b51cd0dfe8608c49cceadc327b82815eae3cf2ac0ac37d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_4b2aa94d2b6ab9f5ad99295ea698bcec00a3ffa539212174c1369f60efd55d9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b2aa94d2b6ab9f5ad99295ea698bcec00a3ffa539212174c1369f60efd55d9d->enter($__internal_4b2aa94d2b6ab9f5ad99295ea698bcec00a3ffa539212174c1369f60efd55d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 92
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 92, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 92, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 92, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 93, $this->getSourceContext()); })()), 'label');
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->getSourceContext()); })()), 'widget');
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 95, $this->getSourceContext()); })()), 'errors');
        // line 96
        echo "</div>";
        
        $__internal_4b2aa94d2b6ab9f5ad99295ea698bcec00a3ffa539212174c1369f60efd55d9d->leave($__internal_4b2aa94d2b6ab9f5ad99295ea698bcec00a3ffa539212174c1369f60efd55d9d_prof);

        
        $__internal_b7c639227f4701e3b51cd0dfe8608c49cceadc327b82815eae3cf2ac0ac37d99->leave($__internal_b7c639227f4701e3b51cd0dfe8608c49cceadc327b82815eae3cf2ac0ac37d99_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_fb51db371dc728698dc9fb2739256b1ec04894a4d65dae5ca2dba36363a21d58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb51db371dc728698dc9fb2739256b1ec04894a4d65dae5ca2dba36363a21d58->enter($__internal_fb51db371dc728698dc9fb2739256b1ec04894a4d65dae5ca2dba36363a21d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_61eb3430b16de7dc0791a631898397f5716ad3a1bbe1477d5efd18686ad2d889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61eb3430b16de7dc0791a631898397f5716ad3a1bbe1477d5efd18686ad2d889->enter($__internal_61eb3430b16de7dc0791a631898397f5716ad3a1bbe1477d5efd18686ad2d889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_61eb3430b16de7dc0791a631898397f5716ad3a1bbe1477d5efd18686ad2d889->leave($__internal_61eb3430b16de7dc0791a631898397f5716ad3a1bbe1477d5efd18686ad2d889_prof);

        
        $__internal_fb51db371dc728698dc9fb2739256b1ec04894a4d65dae5ca2dba36363a21d58->leave($__internal_fb51db371dc728698dc9fb2739256b1ec04894a4d65dae5ca2dba36363a21d58_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_bae5a54e436525393a6a663d2b0f67c78f911f65fbedbbc3d1a2d22f472615ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bae5a54e436525393a6a663d2b0f67c78f911f65fbedbbc3d1a2d22f472615ff->enter($__internal_bae5a54e436525393a6a663d2b0f67c78f911f65fbedbbc3d1a2d22f472615ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_9e91778ebf4871f40f8a15bb889811084cc02434b5734fb4db209e9540f910f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e91778ebf4871f40f8a15bb889811084cc02434b5734fb4db209e9540f910f8->enter($__internal_9e91778ebf4871f40f8a15bb889811084cc02434b5734fb4db209e9540f910f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9e91778ebf4871f40f8a15bb889811084cc02434b5734fb4db209e9540f910f8->leave($__internal_9e91778ebf4871f40f8a15bb889811084cc02434b5734fb4db209e9540f910f8_prof);

        
        $__internal_bae5a54e436525393a6a663d2b0f67c78f911f65fbedbbc3d1a2d22f472615ff->leave($__internal_bae5a54e436525393a6a663d2b0f67c78f911f65fbedbbc3d1a2d22f472615ff_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_82b0324342b4ec843c67c447f9332cbed4c48c66a6afae85eb632a39e10bca14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82b0324342b4ec843c67c447f9332cbed4c48c66a6afae85eb632a39e10bca14->enter($__internal_82b0324342b4ec843c67c447f9332cbed4c48c66a6afae85eb632a39e10bca14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_88c8962d195b904fabf2184fd6bbbfed6e9e040fbe08ca2bbf74cb385988e247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88c8962d195b904fabf2184fd6bbbfed6e9e040fbe08ca2bbf74cb385988e247->enter($__internal_88c8962d195b904fabf2184fd6bbbfed6e9e040fbe08ca2bbf74cb385988e247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_88c8962d195b904fabf2184fd6bbbfed6e9e040fbe08ca2bbf74cb385988e247->leave($__internal_88c8962d195b904fabf2184fd6bbbfed6e9e040fbe08ca2bbf74cb385988e247_prof);

        
        $__internal_82b0324342b4ec843c67c447f9332cbed4c48c66a6afae85eb632a39e10bca14->leave($__internal_82b0324342b4ec843c67c447f9332cbed4c48c66a6afae85eb632a39e10bca14_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_9fce99ac3bb4ef8a24e7ffcef0535a3f742a1cb0f7b7788e2e7894930ac71b77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fce99ac3bb4ef8a24e7ffcef0535a3f742a1cb0f7b7788e2e7894930ac71b77->enter($__internal_9fce99ac3bb4ef8a24e7ffcef0535a3f742a1cb0f7b7788e2e7894930ac71b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_78a1c0045155acad7331b7cb856d3fa7bf844211f45f135b07bbeb61ab653c84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78a1c0045155acad7331b7cb856d3fa7bf844211f45f135b07bbeb61ab653c84->enter($__internal_78a1c0045155acad7331b7cb856d3fa7bf844211f45f135b07bbeb61ab653c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_78a1c0045155acad7331b7cb856d3fa7bf844211f45f135b07bbeb61ab653c84->leave($__internal_78a1c0045155acad7331b7cb856d3fa7bf844211f45f135b07bbeb61ab653c84_prof);

        
        $__internal_9fce99ac3bb4ef8a24e7ffcef0535a3f742a1cb0f7b7788e2e7894930ac71b77->leave($__internal_9fce99ac3bb4ef8a24e7ffcef0535a3f742a1cb0f7b7788e2e7894930ac71b77_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_287f9cb6511dbe0a83f6f066856cdc4a975738ac214349784440312914c24a78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_287f9cb6511dbe0a83f6f066856cdc4a975738ac214349784440312914c24a78->enter($__internal_287f9cb6511dbe0a83f6f066856cdc4a975738ac214349784440312914c24a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_52d34789c11f5dccc31e2758149cd8999890fda1e7dee8d57163e532183203ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52d34789c11f5dccc31e2758149cd8999890fda1e7dee8d57163e532183203ba->enter($__internal_52d34789c11f5dccc31e2758149cd8999890fda1e7dee8d57163e532183203ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_52d34789c11f5dccc31e2758149cd8999890fda1e7dee8d57163e532183203ba->leave($__internal_52d34789c11f5dccc31e2758149cd8999890fda1e7dee8d57163e532183203ba_prof);

        
        $__internal_287f9cb6511dbe0a83f6f066856cdc4a975738ac214349784440312914c24a78->leave($__internal_287f9cb6511dbe0a83f6f066856cdc4a975738ac214349784440312914c24a78_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_64932bf3ee635d0858c3cfdcf6b58546a65cc9f50b70e4272e05ffeb78b16c39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64932bf3ee635d0858c3cfdcf6b58546a65cc9f50b70e4272e05ffeb78b16c39->enter($__internal_64932bf3ee635d0858c3cfdcf6b58546a65cc9f50b70e4272e05ffeb78b16c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_5ac4fc403a4f45b2969b05ec06e011fcc119aa6e97293e840507e4c85df4e90b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ac4fc403a4f45b2969b05ec06e011fcc119aa6e97293e840507e4c85df4e90b->enter($__internal_5ac4fc403a4f45b2969b05ec06e011fcc119aa6e97293e840507e4c85df4e90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 126
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 126, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 127, $this->getSourceContext()); })()), 'widget');
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), 'errors');
        // line 129
        echo "</div>";
        
        $__internal_5ac4fc403a4f45b2969b05ec06e011fcc119aa6e97293e840507e4c85df4e90b->leave($__internal_5ac4fc403a4f45b2969b05ec06e011fcc119aa6e97293e840507e4c85df4e90b_prof);

        
        $__internal_64932bf3ee635d0858c3cfdcf6b58546a65cc9f50b70e4272e05ffeb78b16c39->leave($__internal_64932bf3ee635d0858c3cfdcf6b58546a65cc9f50b70e4272e05ffeb78b16c39_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_5f5b39f69bc33c42e3dedf17b6427d02b73abb50f10db822bfa9f46d32ebc0e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f5b39f69bc33c42e3dedf17b6427d02b73abb50f10db822bfa9f46d32ebc0e0->enter($__internal_5f5b39f69bc33c42e3dedf17b6427d02b73abb50f10db822bfa9f46d32ebc0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_ac253ae0d670a770129b1caeee675308017cd21db8573b63a6d7e81ff3c56344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac253ae0d670a770129b1caeee675308017cd21db8573b63a6d7e81ff3c56344->enter($__internal_ac253ae0d670a770129b1caeee675308017cd21db8573b63a6d7e81ff3c56344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 133
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 133, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->getSourceContext()); })()), 'widget');
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 135, $this->getSourceContext()); })()), 'errors');
        // line 136
        echo "</div>";
        
        $__internal_ac253ae0d670a770129b1caeee675308017cd21db8573b63a6d7e81ff3c56344->leave($__internal_ac253ae0d670a770129b1caeee675308017cd21db8573b63a6d7e81ff3c56344_prof);

        
        $__internal_5f5b39f69bc33c42e3dedf17b6427d02b73abb50f10db822bfa9f46d32ebc0e0->leave($__internal_5f5b39f69bc33c42e3dedf17b6427d02b73abb50f10db822bfa9f46d32ebc0e0_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_f2ba764ee203a0fb15d93c09c95fc120dd2defbfdd3f0de402b46671c4b8380d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2ba764ee203a0fb15d93c09c95fc120dd2defbfdd3f0de402b46671c4b8380d->enter($__internal_f2ba764ee203a0fb15d93c09c95fc120dd2defbfdd3f0de402b46671c4b8380d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_f85707965a9095734a27b98254fe8fdd4cac73c06ec20de38de63a4fc69d19ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f85707965a9095734a27b98254fe8fdd4cac73c06ec20de38de63a4fc69d19ab->enter($__internal_f85707965a9095734a27b98254fe8fdd4cac73c06ec20de38de63a4fc69d19ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 142
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 142, $this->getSourceContext()); })())) > 0)) {
            // line 143
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 144
            echo "    <ul class=\"list-unstyled\">";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 145, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 146
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "</ul>
    ";
            // line 149
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 149, $this->getSourceContext()); })()))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_f85707965a9095734a27b98254fe8fdd4cac73c06ec20de38de63a4fc69d19ab->leave($__internal_f85707965a9095734a27b98254fe8fdd4cac73c06ec20de38de63a4fc69d19ab_prof);

        
        $__internal_f2ba764ee203a0fb15d93c09c95fc120dd2defbfdd3f0de402b46671c4b8380d->leave($__internal_f2ba764ee203a0fb15d93c09c95fc120dd2defbfdd3f0de402b46671c4b8380d_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  650 => 149,  647 => 148,  639 => 146,  635 => 145,  633 => 144,  627 => 143,  625 => 142,  616 => 141,  606 => 136,  604 => 135,  602 => 134,  596 => 133,  587 => 132,  577 => 129,  575 => 128,  573 => 127,  567 => 126,  558 => 125,  548 => 122,  546 => 121,  537 => 120,  527 => 117,  525 => 116,  516 => 115,  506 => 112,  504 => 111,  495 => 110,  485 => 107,  483 => 106,  474 => 105,  464 => 102,  462 => 101,  460 => 100,  451 => 99,  441 => 96,  439 => 95,  437 => 94,  435 => 93,  429 => 92,  420 => 91,  409 => 85,  405 => 84,  390 => 83,  386 => 80,  383 => 77,  382 => 76,  381 => 75,  379 => 74,  377 => 73,  374 => 71,  372 => 70,  369 => 68,  367 => 67,  365 => 66,  356 => 64,  346 => 61,  344 => 59,  335 => 58,  325 => 55,  323 => 53,  314 => 52,  304 => 49,  302 => 48,  293 => 46,  283 => 43,  281 => 42,  272 => 41,  261 => 35,  259 => 34,  257 => 33,  254 => 31,  252 => 30,  250 => 29,  241 => 28,  230 => 24,  228 => 23,  226 => 22,  223 => 20,  221 => 19,  219 => 18,  210 => 17,  200 => 14,  198 => 13,  189 => 12,  179 => 9,  176 => 7,  174 => 6,  165 => 5,  155 => 141,  152 => 140,  149 => 138,  147 => 132,  144 => 131,  142 => 125,  139 => 124,  137 => 120,  134 => 119,  132 => 115,  129 => 114,  127 => 110,  124 => 109,  122 => 105,  119 => 104,  117 => 99,  114 => 98,  112 => 91,  109 => 90,  106 => 88,  104 => 64,  101 => 63,  99 => 58,  96 => 57,  94 => 52,  91 => 51,  89 => 46,  86 => 45,  84 => 41,  81 => 40,  78 => 38,  76 => 28,  73 => 27,  71 => 17,  68 => 16,  66 => 12,  63 => 11,  61 => 5,  58 => 4,  55 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {%- if widget is defined -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "C:\\wamp64\\www\\BecoGestion\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
