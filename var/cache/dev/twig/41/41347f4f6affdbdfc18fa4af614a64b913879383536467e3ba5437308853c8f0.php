<?php

/* @root/LandingPage/Widgets/_gTGRegisterG4T.html.twig */
class __TwigTemplate_9b111e27b57cd8791f6ad5f73a8c0d3c72bff9cfbf8239325f78679d180ecfe8 extends Twig_Template
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
        $__internal_21b9a475bab8ed9dfcc0eca07b25d633da55a15512982e09bb769d3b0d44b00a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21b9a475bab8ed9dfcc0eca07b25d633da55a15512982e09bb769d3b0d44b00a->enter($__internal_21b9a475bab8ed9dfcc0eca07b25d633da55a15512982e09bb769d3b0d44b00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/LandingPage/Widgets/_gTGRegisterG4T.html.twig"));

        $__internal_ea3518da14a0665265fd99f766efdeedbeccbb647e40726d9c63b4cc035b172f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea3518da14a0665265fd99f766efdeedbeccbb647e40726d9c63b4cc035b172f->enter($__internal_ea3518da14a0665265fd99f766efdeedbeccbb647e40726d9c63b4cc035b172f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/LandingPage/Widgets/_gTGRegisterG4T.html.twig"));

        // line 1
        echo "<section class=\"iyziRegister dark-indigo-bg\">
\t<div class=\"container\">
\t\t<h2 class=\"pale-blue\"><strong>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["femaleentrepreneur"] ?? $this->getContext($context, "femaleentrepreneur")), "title", array()), "html", null, true);
        echo "</strong></h2>
\t\t<div class=\"desc\">
\t\t\t";
        // line 5
        echo $this->getAttribute(($context["femaleentrepreneur"] ?? $this->getContext($context, "femaleentrepreneur")), "description", array());
        echo "
\t\t</div>
\t\t<div class=\"downloadBtn\">
\t\t\t\t<a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["femaleentrepreneur"] ?? $this->getContext($context, "femaleentrepreneur")), "buttonUrl", array()), "html", null, true);
        echo "\" class=\"button basic\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["femaleentrepreneur"] ?? $this->getContext($context, "femaleentrepreneur")), "buttonText", array()), "html", null, true);
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
        
        $__internal_21b9a475bab8ed9dfcc0eca07b25d633da55a15512982e09bb769d3b0d44b00a->leave($__internal_21b9a475bab8ed9dfcc0eca07b25d633da55a15512982e09bb769d3b0d44b00a_prof);

        
        $__internal_ea3518da14a0665265fd99f766efdeedbeccbb647e40726d9c63b4cc035b172f->leave($__internal_ea3518da14a0665265fd99f766efdeedbeccbb647e40726d9c63b4cc035b172f_prof);

    }

    public function getTemplateName()
    {
        return "@root/LandingPage/Widgets/_gTGRegisterG4T.html.twig";
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
        return new Twig_Source("<section class=\"iyziRegister dark-indigo-bg\">
\t<div class=\"container\">
\t\t<h2 class=\"pale-blue\"><strong>{{ femaleentrepreneur.title }}</strong></h2>
\t\t<div class=\"desc\">
\t\t\t{{ femaleentrepreneur.description|raw }}
\t\t</div>
\t\t<div class=\"downloadBtn\">
\t\t\t\t<a href=\"{{ femaleentrepreneur.buttonUrl }}\" class=\"button basic\">{{ femaleentrepreneur.buttonText }}</a>
\t\t</div>
\t\t<div class=\"gTg-arrow\">
\t\t\t<img src=\"{{ asset('assets/images/content/gTg-arrow.svg')}}\" alt=\"\"/>
\t\t</div>
\t</div>
</section>
", "@root/LandingPage/Widgets/_gTGRegisterG4T.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/LandingPage/Widgets/_gTGRegisterG4T.html.twig");
    }
}
