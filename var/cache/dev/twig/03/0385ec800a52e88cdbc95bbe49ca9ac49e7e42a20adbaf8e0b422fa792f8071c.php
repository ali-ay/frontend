<?php

/* @Twig/Exception/trace.txt.twig */
class __TwigTemplate_7ffc22f201b405b34408d6dd862fe817b50da7db16876ebc02653000dfe9fdde extends Twig_Template
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
        $__internal_166f274cd080186dc021eb91beee359d1ca5024e3ff2e0de2022a42ff9c420b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_166f274cd080186dc021eb91beee359d1ca5024e3ff2e0de2022a42ff9c420b9->enter($__internal_166f274cd080186dc021eb91beee359d1ca5024e3ff2e0de2022a42ff9c420b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        $__internal_c2aadaabef60a2e6b300b39c3a53032c3a2984c3f1cc3604268ad9ce92862a32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2aadaabef60a2e6b300b39c3a53032c3a2984c3f1cc3604268ad9ce92862a32->enter($__internal_c2aadaabef60a2e6b300b39c3a53032c3a2984c3f1cc3604268ad9ce92862a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        // line 1
        if ($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "function", array())) {
            // line 2
            echo "    at";
            echo (($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "class", array()) . $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "type", array())) . $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "function", array()));
            echo "(";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgsAsText($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "args", array()));
            echo ")";
        } else {
            // line 4
            echo "    at n/a";
        }
        // line 6
        if (($this->getAttribute(($context["trace"] ?? null), "file", array(), "any", true, true) && $this->getAttribute(($context["trace"] ?? null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in";
            echo $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "file", array());
            echo " line";
            echo $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "line", array());
        }
        
        $__internal_166f274cd080186dc021eb91beee359d1ca5024e3ff2e0de2022a42ff9c420b9->leave($__internal_166f274cd080186dc021eb91beee359d1ca5024e3ff2e0de2022a42ff9c420b9_prof);

        
        $__internal_c2aadaabef60a2e6b300b39c3a53032c3a2984c3f1cc3604268ad9ce92862a32->leave($__internal_c2aadaabef60a2e6b300b39c3a53032c3a2984c3f1cc3604268ad9ce92862a32_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  37 => 6,  34 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if trace.function %}
    at {{ trace.class ~ trace.type ~ trace.function }}({{ trace.args|format_args_as_text }})
{% else %}
    at n/a
{% endif %}
{% if trace.file is defined and trace.line is defined %}
        in {{ trace.file }} line {{ trace.line }}
{% endif %}
", "@Twig/Exception/trace.txt.twig", "/Users/aliay/Development/dev/iyzico_v4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/trace.txt.twig");
    }
}
