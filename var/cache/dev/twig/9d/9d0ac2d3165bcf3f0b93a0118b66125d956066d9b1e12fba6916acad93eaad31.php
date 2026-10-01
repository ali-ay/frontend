<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_34464d91e6aa020a35a1330ebe5de234fdec2ff5947f4e8a1a6fa2be8cf885c4 extends Twig_Template
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
        $__internal_e6c15aec5ad0295611909c9909d530e6cf2671ff7c2f21ed32f0213f05d31a7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6c15aec5ad0295611909c9909d530e6cf2671ff7c2f21ed32f0213f05d31a7b->enter($__internal_e6c15aec5ad0295611909c9909d530e6cf2671ff7c2f21ed32f0213f05d31a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_738ed7042f6cc79ad50fab450dd7d78163ca2c595df6d9ef963a351898626797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_738ed7042f6cc79ad50fab450dd7d78163ca2c595df6d9ef963a351898626797->enter($__internal_738ed7042f6cc79ad50fab450dd7d78163ca2c595df6d9ef963a351898626797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_e6c15aec5ad0295611909c9909d530e6cf2671ff7c2f21ed32f0213f05d31a7b->leave($__internal_e6c15aec5ad0295611909c9909d530e6cf2671ff7c2f21ed32f0213f05d31a7b_prof);

        
        $__internal_738ed7042f6cc79ad50fab450dd7d78163ca2c595df6d9ef963a351898626797->leave($__internal_738ed7042f6cc79ad50fab450dd7d78163ca2c595df6d9ef963a351898626797_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Users/aliay/Development/dev/iyzico_v4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
