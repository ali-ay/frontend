<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_96f0b52012e10ed44309b6d9a4bfa97e46a9b47baf2092435fbb23945c77654a extends Twig_Template
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
        $__internal_6a279b2a8f215262dffcca9140c2acd29773f48d6656abbd05b9e63095b71e49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a279b2a8f215262dffcca9140c2acd29773f48d6656abbd05b9e63095b71e49->enter($__internal_6a279b2a8f215262dffcca9140c2acd29773f48d6656abbd05b9e63095b71e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_45e568bd002bdff2cebd4bec5a0b9d2b0559889f24195acffedd3d4267118996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45e568bd002bdff2cebd4bec5a0b9d2b0559889f24195acffedd3d4267118996->enter($__internal_45e568bd002bdff2cebd4bec5a0b9d2b0559889f24195acffedd3d4267118996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a279b2a8f215262dffcca9140c2acd29773f48d6656abbd05b9e63095b71e49->leave($__internal_6a279b2a8f215262dffcca9140c2acd29773f48d6656abbd05b9e63095b71e49_prof);

        
        $__internal_45e568bd002bdff2cebd4bec5a0b9d2b0559889f24195acffedd3d4267118996->leave($__internal_45e568bd002bdff2cebd4bec5a0b9d2b0559889f24195acffedd3d4267118996_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a53e05df11fa8c0ea1c92205714e0482cedbd95c6f844341ff4674b4bf6c54c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a53e05df11fa8c0ea1c92205714e0482cedbd95c6f844341ff4674b4bf6c54c2->enter($__internal_a53e05df11fa8c0ea1c92205714e0482cedbd95c6f844341ff4674b4bf6c54c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d4785e5d0fa9d67ea2cb24bf1a0241e2b0a034d3cd73dfad233717d31d1532be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4785e5d0fa9d67ea2cb24bf1a0241e2b0a034d3cd73dfad233717d31d1532be->enter($__internal_d4785e5d0fa9d67ea2cb24bf1a0241e2b0a034d3cd73dfad233717d31d1532be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>";
        }
        // line 9
        $this->displayParentBlock("head", $context, $blocks);
        
        $__internal_d4785e5d0fa9d67ea2cb24bf1a0241e2b0a034d3cd73dfad233717d31d1532be->leave($__internal_d4785e5d0fa9d67ea2cb24bf1a0241e2b0a034d3cd73dfad233717d31d1532be_prof);

        
        $__internal_a53e05df11fa8c0ea1c92205714e0482cedbd95c6f844341ff4674b4bf6c54c2->leave($__internal_a53e05df11fa8c0ea1c92205714e0482cedbd95c6f844341ff4674b4bf6c54c2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fe3af49e7a25e1ab9f4f20fe02bb376a08a4fcd66b3742d710252e6b07b911dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe3af49e7a25e1ab9f4f20fe02bb376a08a4fcd66b3742d710252e6b07b911dd->enter($__internal_fe3af49e7a25e1ab9f4f20fe02bb376a08a4fcd66b3742d710252e6b07b911dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0e549792891bcdf58d10e9003b8136540cf98e89f4dd45aa5236780f151e6292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e549792891bcdf58d10e9003b8136540cf98e89f4dd45aa5236780f151e6292->enter($__internal_0e549792891bcdf58d10e9003b8136540cf98e89f4dd45aa5236780f151e6292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>";
        }
        // line 21
        echo "    </span>";
        
        $__internal_0e549792891bcdf58d10e9003b8136540cf98e89f4dd45aa5236780f151e6292->leave($__internal_0e549792891bcdf58d10e9003b8136540cf98e89f4dd45aa5236780f151e6292_prof);

        
        $__internal_fe3af49e7a25e1ab9f4f20fe02bb376a08a4fcd66b3742d710252e6b07b911dd->leave($__internal_fe3af49e7a25e1ab9f4f20fe02bb376a08a4fcd66b3742d710252e6b07b911dd_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c23c091092b7dcdfabb49317dba13b210aae862828fbd5be26d659cb3abf0f03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c23c091092b7dcdfabb49317dba13b210aae862828fbd5be26d659cb3abf0f03->enter($__internal_c23c091092b7dcdfabb49317dba13b210aae862828fbd5be26d659cb3abf0f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_df0566b36904ad8fd652c0140fac01aa9063aa2d643c13d76e5668029a668ef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df0566b36904ad8fd652c0140fac01aa9063aa2d643c13d76e5668029a668ef8->enter($__internal_df0566b36904ad8fd652c0140fac01aa9063aa2d643c13d76e5668029a668ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>";
        }
        
        $__internal_df0566b36904ad8fd652c0140fac01aa9063aa2d643c13d76e5668029a668ef8->leave($__internal_df0566b36904ad8fd652c0140fac01aa9063aa2d643c13d76e5668029a668ef8_prof);

        
        $__internal_c23c091092b7dcdfabb49317dba13b210aae862828fbd5be26d659cb3abf0f03->leave($__internal_c23c091092b7dcdfabb49317dba13b210aae862828fbd5be26d659cb3abf0f03_prof);

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
        return array (  125 => 33,  123 => 32,  118 => 28,  116 => 27,  114 => 25,  105 => 24,  95 => 21,  90 => 17,  88 => 16,  84 => 14,  79 => 13,  70 => 12,  60 => 9,  55 => 6,  53 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
