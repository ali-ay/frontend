<?php

/* @root/LandingPage/Widgets/_gTGRegister.html.twig */
class __TwigTemplate_8e6011e58f30a66cc208fddc74662826b299ec41e8af330c35184d100175b662 extends Twig_Template
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
        $__internal_c21876889e06c6f70ff14522986a6d48a811e49c4f67a4de6724034551f7e54d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c21876889e06c6f70ff14522986a6d48a811e49c4f67a4de6724034551f7e54d->enter($__internal_c21876889e06c6f70ff14522986a6d48a811e49c4f67a4de6724034551f7e54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/LandingPage/Widgets/_gTGRegister.html.twig"));

        $__internal_fa929ac3313783abf51881abb76f60750909814b349be159400dc502a3f0dd44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa929ac3313783abf51881abb76f60750909814b349be159400dc502a3f0dd44->enter($__internal_fa929ac3313783abf51881abb76f60750909814b349be159400dc502a3f0dd44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/LandingPage/Widgets/_gTGRegister.html.twig"));

        // line 1
        echo "<section class=\"iyziRegister clear-blue-bg\">
\t<div class=\"container\">
\t\t<h2 class=\"pale-blue\"><strong>";
        // line 3
        echo $this->getAttribute(($context["iyzicostart"] ?? $this->getContext($context, "iyzicostart")), "title", array());
        echo "</strong></h2>
\t\t<div class=\"desc\">
\t\t\t";
        // line 5
        echo $this->getAttribute(($context["iyzicostart"] ?? $this->getContext($context, "iyzicostart")), "description", array());
        echo "
\t\t</div>
\t\t<div class=\"downloadBtn\">
\t\t\t\t<a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["iyzicostart"] ?? $this->getContext($context, "iyzicostart")), "buttonUrl", array()), "html", null, true);
        echo "\" target=\"_blank\" class=\"button basic\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["iyzicostart"] ?? $this->getContext($context, "iyzicostart")), "buttonText", array()), "html", null, true);
        echo "</a>
\t\t</div>
\t\t<div class=\"gTg-arrow\">
\t\t\t<img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/content/gTg-arrow.svg"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t</div>
\t</div>
</section>
";
        
        $__internal_c21876889e06c6f70ff14522986a6d48a811e49c4f67a4de6724034551f7e54d->leave($__internal_c21876889e06c6f70ff14522986a6d48a811e49c4f67a4de6724034551f7e54d_prof);

        
        $__internal_fa929ac3313783abf51881abb76f60750909814b349be159400dc502a3f0dd44->leave($__internal_fa929ac3313783abf51881abb76f60750909814b349be159400dc502a3f0dd44_prof);

    }

    public function getTemplateName()
    {
        return "@root/LandingPage/Widgets/_gTGRegister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 11,  40 => 8,  34 => 5,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"iyziRegister clear-blue-bg\">
\t<div class=\"container\">
\t\t<h2 class=\"pale-blue\"><strong>{{ iyzicostart.title|raw }}</strong></h2>
\t\t<div class=\"desc\">
\t\t\t{{ iyzicostart.description|raw }}
\t\t</div>
\t\t<div class=\"downloadBtn\">
\t\t\t\t<a href=\"{{ iyzicostart.buttonUrl }}\" target=\"_blank\" class=\"button basic\">{{ iyzicostart.buttonText }}</a>
\t\t</div>
\t\t<div class=\"gTg-arrow\">
\t\t\t<img src=\"{{ asset('assets/images/content/gTg-arrow.svg')}}\" alt=\"\"/>
\t\t</div>
\t</div>
</section>
", "@root/LandingPage/Widgets/_gTGRegister.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/LandingPage/Widgets/_gTGRegister.html.twig");
    }
}
