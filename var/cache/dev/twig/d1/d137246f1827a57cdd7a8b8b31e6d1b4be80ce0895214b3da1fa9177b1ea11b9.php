<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_55f986cb9e85303e980aa81b0446b332047776f101da4a5c39b0d0dfd4b4ddf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2dbc7200429abbfa63f8b2a4b6e8504de81c05f66fcf65e27e33de90b9c9b1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2dbc7200429abbfa63f8b2a4b6e8504de81c05f66fcf65e27e33de90b9c9b1b->enter($__internal_a2dbc7200429abbfa63f8b2a4b6e8504de81c05f66fcf65e27e33de90b9c9b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_b92ab02b89a4f5a669e6975676dedc5ea152fda077eb1402cf77f7d95976f0d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b92ab02b89a4f5a669e6975676dedc5ea152fda077eb1402cf77f7d95976f0d0->enter($__internal_b92ab02b89a4f5a669e6975676dedc5ea152fda077eb1402cf77f7d95976f0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2dbc7200429abbfa63f8b2a4b6e8504de81c05f66fcf65e27e33de90b9c9b1b->leave($__internal_a2dbc7200429abbfa63f8b2a4b6e8504de81c05f66fcf65e27e33de90b9c9b1b_prof);

        
        $__internal_b92ab02b89a4f5a669e6975676dedc5ea152fda077eb1402cf77f7d95976f0d0->leave($__internal_b92ab02b89a4f5a669e6975676dedc5ea152fda077eb1402cf77f7d95976f0d0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dc4a828ed299b5d5a60e8aaab16fdd6c255b47ca87a6253d63db6fe1c5076e33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc4a828ed299b5d5a60e8aaab16fdd6c255b47ca87a6253d63db6fe1c5076e33->enter($__internal_dc4a828ed299b5d5a60e8aaab16fdd6c255b47ca87a6253d63db6fe1c5076e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ebedd73ba62a0cc8fe8927d250dadfb18147205cd0274fbf663f0f1042b3fd8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebedd73ba62a0cc8fe8927d250dadfb18147205cd0274fbf663f0f1042b3fd8b->enter($__internal_ebedd73ba62a0cc8fe8927d250dadfb18147205cd0274fbf663f0f1042b3fd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_ebedd73ba62a0cc8fe8927d250dadfb18147205cd0274fbf663f0f1042b3fd8b->leave($__internal_ebedd73ba62a0cc8fe8927d250dadfb18147205cd0274fbf663f0f1042b3fd8b_prof);

        
        $__internal_dc4a828ed299b5d5a60e8aaab16fdd6c255b47ca87a6253d63db6fe1c5076e33->leave($__internal_dc4a828ed299b5d5a60e8aaab16fdd6c255b47ca87a6253d63db6fe1c5076e33_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/aliay/Development/dev/iyzico_v4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
