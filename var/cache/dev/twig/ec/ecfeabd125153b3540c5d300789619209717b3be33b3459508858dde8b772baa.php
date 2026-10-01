<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9ac4eefdbfb1bde0b5db17202a7836f1343460310837f284b70fdae99caf29af extends Twig_Template
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
        $__internal_fb5fc92d209f31cbfff1ae3cf989dff277acc31993547504caa9864e365c0ae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb5fc92d209f31cbfff1ae3cf989dff277acc31993547504caa9864e365c0ae6->enter($__internal_fb5fc92d209f31cbfff1ae3cf989dff277acc31993547504caa9864e365c0ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7b771cc5a4be4f160389ff7fe1d24cd4f564c75f46d7797437fe83ebe3881246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b771cc5a4be4f160389ff7fe1d24cd4f564c75f46d7797437fe83ebe3881246->enter($__internal_7b771cc5a4be4f160389ff7fe1d24cd4f564c75f46d7797437fe83ebe3881246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb5fc92d209f31cbfff1ae3cf989dff277acc31993547504caa9864e365c0ae6->leave($__internal_fb5fc92d209f31cbfff1ae3cf989dff277acc31993547504caa9864e365c0ae6_prof);

        
        $__internal_7b771cc5a4be4f160389ff7fe1d24cd4f564c75f46d7797437fe83ebe3881246->leave($__internal_7b771cc5a4be4f160389ff7fe1d24cd4f564c75f46d7797437fe83ebe3881246_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7d4b7b160da43917cc59a5e5003e7bb75dbe9739019a23f76ca72e2d4486155d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d4b7b160da43917cc59a5e5003e7bb75dbe9739019a23f76ca72e2d4486155d->enter($__internal_7d4b7b160da43917cc59a5e5003e7bb75dbe9739019a23f76ca72e2d4486155d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6047c9f3386b623bb7379b231e513e15f779528232000dde993e53c1ddb971aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6047c9f3386b623bb7379b231e513e15f779528232000dde993e53c1ddb971aa->enter($__internal_6047c9f3386b623bb7379b231e513e15f779528232000dde993e53c1ddb971aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6047c9f3386b623bb7379b231e513e15f779528232000dde993e53c1ddb971aa->leave($__internal_6047c9f3386b623bb7379b231e513e15f779528232000dde993e53c1ddb971aa_prof);

        
        $__internal_7d4b7b160da43917cc59a5e5003e7bb75dbe9739019a23f76ca72e2d4486155d->leave($__internal_7d4b7b160da43917cc59a5e5003e7bb75dbe9739019a23f76ca72e2d4486155d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f9a57d06b0a2dc7597c45082a7604c3915fa1c38b8fd8b6d26b8caa41f13521e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9a57d06b0a2dc7597c45082a7604c3915fa1c38b8fd8b6d26b8caa41f13521e->enter($__internal_f9a57d06b0a2dc7597c45082a7604c3915fa1c38b8fd8b6d26b8caa41f13521e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c706cf3c7611280dd3da549e5b70b58848abf283dc1ac193a15b91b729e56898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c706cf3c7611280dd3da549e5b70b58848abf283dc1ac193a15b91b729e56898->enter($__internal_c706cf3c7611280dd3da549e5b70b58848abf283dc1ac193a15b91b729e56898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>";
        
        $__internal_c706cf3c7611280dd3da549e5b70b58848abf283dc1ac193a15b91b729e56898->leave($__internal_c706cf3c7611280dd3da549e5b70b58848abf283dc1ac193a15b91b729e56898_prof);

        
        $__internal_f9a57d06b0a2dc7597c45082a7604c3915fa1c38b8fd8b6d26b8caa41f13521e->leave($__internal_f9a57d06b0a2dc7597c45082a7604c3915fa1c38b8fd8b6d26b8caa41f13521e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b09e81e542e77273f96f7a9c0315042e21419e1c115734096ae4af57b12fd9f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b09e81e542e77273f96f7a9c0315042e21419e1c115734096ae4af57b12fd9f7->enter($__internal_b09e81e542e77273f96f7a9c0315042e21419e1c115734096ae4af57b12fd9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_32e023dbf8fe47e7e9f2111cda33b79fbe9ce25cb68eec27350a73e52e051241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32e023dbf8fe47e7e9f2111cda33b79fbe9ce25cb68eec27350a73e52e051241->enter($__internal_32e023dbf8fe47e7e9f2111cda33b79fbe9ce25cb68eec27350a73e52e051241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        
        $__internal_32e023dbf8fe47e7e9f2111cda33b79fbe9ce25cb68eec27350a73e52e051241->leave($__internal_32e023dbf8fe47e7e9f2111cda33b79fbe9ce25cb68eec27350a73e52e051241_prof);

        
        $__internal_b09e81e542e77273f96f7a9c0315042e21419e1c115734096ae4af57b12fd9f7->leave($__internal_b09e81e542e77273f96f7a9c0315042e21419e1c115734096ae4af57b12fd9f7_prof);

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
        return array (  93 => 13,  84 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "/Users/aliay/Development/dev/iyzico_v4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
