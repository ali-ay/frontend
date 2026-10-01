<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_07d2955b70fd3b9ff9557d6cb64233543c67544d3467c8401cd8bca12fea5b11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_d3695038899abca660e237e44675ae39599d5b0f9600c9da55e30f95af718039 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3695038899abca660e237e44675ae39599d5b0f9600c9da55e30f95af718039->enter($__internal_d3695038899abca660e237e44675ae39599d5b0f9600c9da55e30f95af718039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_48fb434c801e2bcc8f62f76d72c154b536a63555f52ea0490395f4666a96d251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48fb434c801e2bcc8f62f76d72c154b536a63555f52ea0490395f4666a96d251->enter($__internal_48fb434c801e2bcc8f62f76d72c154b536a63555f52ea0490395f4666a96d251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3695038899abca660e237e44675ae39599d5b0f9600c9da55e30f95af718039->leave($__internal_d3695038899abca660e237e44675ae39599d5b0f9600c9da55e30f95af718039_prof);

        
        $__internal_48fb434c801e2bcc8f62f76d72c154b536a63555f52ea0490395f4666a96d251->leave($__internal_48fb434c801e2bcc8f62f76d72c154b536a63555f52ea0490395f4666a96d251_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d08d4a78bec3f521121d932d9ae8b7badbe3d30d923319043fa5648ba9448e5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d08d4a78bec3f521121d932d9ae8b7badbe3d30d923319043fa5648ba9448e5a->enter($__internal_d08d4a78bec3f521121d932d9ae8b7badbe3d30d923319043fa5648ba9448e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a8ea277aedc021de1dbe214b9757bde2d15c0943d0d82926dd2cbc649e518821 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8ea277aedc021de1dbe214b9757bde2d15c0943d0d82926dd2cbc649e518821->enter($__internal_a8ea277aedc021de1dbe214b9757bde2d15c0943d0d82926dd2cbc649e518821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a8ea277aedc021de1dbe214b9757bde2d15c0943d0d82926dd2cbc649e518821->leave($__internal_a8ea277aedc021de1dbe214b9757bde2d15c0943d0d82926dd2cbc649e518821_prof);

        
        $__internal_d08d4a78bec3f521121d932d9ae8b7badbe3d30d923319043fa5648ba9448e5a->leave($__internal_d08d4a78bec3f521121d932d9ae8b7badbe3d30d923319043fa5648ba9448e5a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_27d4d274c97803f638c46a88c25951d72bfb6ac97242dac455d12d653f952384 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27d4d274c97803f638c46a88c25951d72bfb6ac97242dac455d12d653f952384->enter($__internal_27d4d274c97803f638c46a88c25951d72bfb6ac97242dac455d12d653f952384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7a2cd101dd708e912566bcfa598a41c4234279f8c5f2a455dd78df44cf7c8ebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a2cd101dd708e912566bcfa598a41c4234279f8c5f2a455dd78df44cf7c8ebb->enter($__internal_7a2cd101dd708e912566bcfa598a41c4234279f8c5f2a455dd78df44cf7c8ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_7a2cd101dd708e912566bcfa598a41c4234279f8c5f2a455dd78df44cf7c8ebb->leave($__internal_7a2cd101dd708e912566bcfa598a41c4234279f8c5f2a455dd78df44cf7c8ebb_prof);

        
        $__internal_27d4d274c97803f638c46a88c25951d72bfb6ac97242dac455d12d653f952384->leave($__internal_27d4d274c97803f638c46a88c25951d72bfb6ac97242dac455d12d653f952384_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0f78801219475f820abf36870f5b003db70fbd5c7c14d08610eabf50e96e072d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f78801219475f820abf36870f5b003db70fbd5c7c14d08610eabf50e96e072d->enter($__internal_0f78801219475f820abf36870f5b003db70fbd5c7c14d08610eabf50e96e072d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c372843a162798fd9271faabee979fea8f648d816bb99eec257510f628cfaf20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c372843a162798fd9271faabee979fea8f648d816bb99eec257510f628cfaf20->enter($__internal_c372843a162798fd9271faabee979fea8f648d816bb99eec257510f628cfaf20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_c372843a162798fd9271faabee979fea8f648d816bb99eec257510f628cfaf20->leave($__internal_c372843a162798fd9271faabee979fea8f648d816bb99eec257510f628cfaf20_prof);

        
        $__internal_0f78801219475f820abf36870f5b003db70fbd5c7c14d08610eabf50e96e072d->leave($__internal_0f78801219475f820abf36870f5b003db70fbd5c7c14d08610eabf50e96e072d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/aliay/Development/dev/iyzico_v4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
