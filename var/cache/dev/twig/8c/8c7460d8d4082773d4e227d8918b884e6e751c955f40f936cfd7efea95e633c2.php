<?php

/* @root/Partials/_headerNotifications.html.twig */
class __TwigTemplate_d796be2252cb816879e6cec4d8da88b45b9e74b75bbb35a347f7a310a502945e extends Twig_Template
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
        $__internal_fdf1b904df0aed805ea5d3998999585369bb93d942af4c41a46e0e985c05c2d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdf1b904df0aed805ea5d3998999585369bb93d942af4c41a46e0e985c05c2d6->enter($__internal_fdf1b904df0aed805ea5d3998999585369bb93d942af4c41a46e0e985c05c2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/Partials/_headerNotifications.html.twig"));

        $__internal_913b9d6ce76b1f5556b883abb44b900318744a48df6b5a39a8e291126bec915a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_913b9d6ce76b1f5556b883abb44b900318744a48df6b5a39a8e291126bec915a->enter($__internal_913b9d6ce76b1f5556b883abb44b900318744a48df6b5a39a8e291126bec915a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/Partials/_headerNotifications.html.twig"));

        // line 1
        echo "<section class=\"headerNotifications\">
\t<div class=\"iyzi-container\">
\t\t<div class=\"content\">
\t\t\t<p><strong>İyiden İyiye;</strong> Toplum, Çevre ve Kültür İçin<a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("goodToGood_landing_page");
        echo "\">Daha Fazla Bilgi</a></p>
\t\t</div>
\t</div>
</section>
";
        
        $__internal_fdf1b904df0aed805ea5d3998999585369bb93d942af4c41a46e0e985c05c2d6->leave($__internal_fdf1b904df0aed805ea5d3998999585369bb93d942af4c41a46e0e985c05c2d6_prof);

        
        $__internal_913b9d6ce76b1f5556b883abb44b900318744a48df6b5a39a8e291126bec915a->leave($__internal_913b9d6ce76b1f5556b883abb44b900318744a48df6b5a39a8e291126bec915a_prof);

    }

    public function getTemplateName()
    {
        return "@root/Partials/_headerNotifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"headerNotifications\">
\t<div class=\"iyzi-container\">
\t\t<div class=\"content\">
\t\t\t<p><strong>İyiden İyiye;</strong> Toplum, Çevre ve Kültür İçin<a href=\"{{path('goodToGood_landing_page')}}\">Daha Fazla Bilgi</a></p>
\t\t</div>
\t</div>
</section>
", "@root/Partials/_headerNotifications.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/Partials/_headerNotifications.html.twig");
    }
}
