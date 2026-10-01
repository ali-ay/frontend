<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_21968b5ad13137d01e0d226e41396aa5808bc59593f8eac27c80e38f2995bf1f extends Twig_Template
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
        $__internal_dd977c4e688c2a1ac0666456d7a2258e5cbc8f650303ffb270bc6a12e32844b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd977c4e688c2a1ac0666456d7a2258e5cbc8f650303ffb270bc6a12e32844b7->enter($__internal_dd977c4e688c2a1ac0666456d7a2258e5cbc8f650303ffb270bc6a12e32844b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_2a17599d13f21aa46db29aa29531ab62d42d740540c0543f7f9394f01392f8f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a17599d13f21aa46db29aa29531ab62d42d740540c0543f7f9394f01392f8f6->enter($__internal_2a17599d13f21aa46db29aa29531ab62d42d740540c0543f7f9394f01392f8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd977c4e688c2a1ac0666456d7a2258e5cbc8f650303ffb270bc6a12e32844b7->leave($__internal_dd977c4e688c2a1ac0666456d7a2258e5cbc8f650303ffb270bc6a12e32844b7_prof);

        
        $__internal_2a17599d13f21aa46db29aa29531ab62d42d740540c0543f7f9394f01392f8f6->leave($__internal_2a17599d13f21aa46db29aa29531ab62d42d740540c0543f7f9394f01392f8f6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1c6d42491948d382690a07a86166937bfbede75c95552ed1e695b781d058f14f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c6d42491948d382690a07a86166937bfbede75c95552ed1e695b781d058f14f->enter($__internal_1c6d42491948d382690a07a86166937bfbede75c95552ed1e695b781d058f14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c582523ea05cdc7fc8644e2369a38309223c4db5a351fa98a6172249a28fafda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c582523ea05cdc7fc8644e2369a38309223c4db5a351fa98a6172249a28fafda->enter($__internal_c582523ea05cdc7fc8644e2369a38309223c4db5a351fa98a6172249a28fafda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        ob_start();
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
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
        </div>") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        
        $__internal_c582523ea05cdc7fc8644e2369a38309223c4db5a351fa98a6172249a28fafda->leave($__internal_c582523ea05cdc7fc8644e2369a38309223c4db5a351fa98a6172249a28fafda_prof);

        
        $__internal_1c6d42491948d382690a07a86166937bfbede75c95552ed1e695b781d058f14f->leave($__internal_1c6d42491948d382690a07a86166937bfbede75c95552ed1e695b781d058f14f_prof);

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
        return array (  75 => 30,  56 => 9,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
