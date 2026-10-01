<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_28670dd6755adea64fa996502455667a0f715f3290de9d89181611689c13afd1 extends Twig_Template
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
        $__internal_7589c5baf6167c38f1d1038f1302ebc36c9db240d88d2ba5351390230a736726 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7589c5baf6167c38f1d1038f1302ebc36c9db240d88d2ba5351390230a736726->enter($__internal_7589c5baf6167c38f1d1038f1302ebc36c9db240d88d2ba5351390230a736726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7d326543afc05a80f80398201c20940dfec2fcb114747a063cb6b75df0dd5531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d326543afc05a80f80398201c20940dfec2fcb114747a063cb6b75df0dd5531->enter($__internal_7d326543afc05a80f80398201c20940dfec2fcb114747a063cb6b75df0dd5531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7589c5baf6167c38f1d1038f1302ebc36c9db240d88d2ba5351390230a736726->leave($__internal_7589c5baf6167c38f1d1038f1302ebc36c9db240d88d2ba5351390230a736726_prof);

        
        $__internal_7d326543afc05a80f80398201c20940dfec2fcb114747a063cb6b75df0dd5531->leave($__internal_7d326543afc05a80f80398201c20940dfec2fcb114747a063cb6b75df0dd5531_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_603f5cbe0cf077ca3174e62d11aa767a480b98dbd8b874de671db1d0b372bb78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_603f5cbe0cf077ca3174e62d11aa767a480b98dbd8b874de671db1d0b372bb78->enter($__internal_603f5cbe0cf077ca3174e62d11aa767a480b98dbd8b874de671db1d0b372bb78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3b47ee9d1b58639c0aa8df05b82d1492bfda0e9c30e39a17a98b1d683c0f9874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b47ee9d1b58639c0aa8df05b82d1492bfda0e9c30e39a17a98b1d683c0f9874->enter($__internal_3b47ee9d1b58639c0aa8df05b82d1492bfda0e9c30e39a17a98b1d683c0f9874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3b47ee9d1b58639c0aa8df05b82d1492bfda0e9c30e39a17a98b1d683c0f9874->leave($__internal_3b47ee9d1b58639c0aa8df05b82d1492bfda0e9c30e39a17a98b1d683c0f9874_prof);

        
        $__internal_603f5cbe0cf077ca3174e62d11aa767a480b98dbd8b874de671db1d0b372bb78->leave($__internal_603f5cbe0cf077ca3174e62d11aa767a480b98dbd8b874de671db1d0b372bb78_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a619638a6963f2186e59f49d81cf75daa782bd54994e4d21246151b65b945b21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a619638a6963f2186e59f49d81cf75daa782bd54994e4d21246151b65b945b21->enter($__internal_a619638a6963f2186e59f49d81cf75daa782bd54994e4d21246151b65b945b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9aa2989e91b3b26cf0a3ef70c7e21749196ec82e6f98229fd332a40de28282f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa2989e91b3b26cf0a3ef70c7e21749196ec82e6f98229fd332a40de28282f0->enter($__internal_9aa2989e91b3b26cf0a3ef70c7e21749196ec82e6f98229fd332a40de28282f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9aa2989e91b3b26cf0a3ef70c7e21749196ec82e6f98229fd332a40de28282f0->leave($__internal_9aa2989e91b3b26cf0a3ef70c7e21749196ec82e6f98229fd332a40de28282f0_prof);

        
        $__internal_a619638a6963f2186e59f49d81cf75daa782bd54994e4d21246151b65b945b21->leave($__internal_a619638a6963f2186e59f49d81cf75daa782bd54994e4d21246151b65b945b21_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0c556c770251a57c545c5eb230d31094f618253a74976914ef6f5d92512579f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c556c770251a57c545c5eb230d31094f618253a74976914ef6f5d92512579f9->enter($__internal_0c556c770251a57c545c5eb230d31094f618253a74976914ef6f5d92512579f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cc7e7f0195e91b4b846d915d300ea8511c0aef510973f5b2842a7aa80218266a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc7e7f0195e91b4b846d915d300ea8511c0aef510973f5b2842a7aa80218266a->enter($__internal_cc7e7f0195e91b4b846d915d300ea8511c0aef510973f5b2842a7aa80218266a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cc7e7f0195e91b4b846d915d300ea8511c0aef510973f5b2842a7aa80218266a->leave($__internal_cc7e7f0195e91b4b846d915d300ea8511c0aef510973f5b2842a7aa80218266a_prof);

        
        $__internal_0c556c770251a57c545c5eb230d31094f618253a74976914ef6f5d92512579f9->leave($__internal_0c556c770251a57c545c5eb230d31094f618253a74976914ef6f5d92512579f9_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
