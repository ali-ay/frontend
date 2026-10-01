<?php

/* @root/LandingPage/Widgets/_personalHomeFeatureList.html.twig */
class __TwigTemplate_3f943c3243a0c81626b5b26099dfa83369fa2c589b2ec819a5576311d2695a52 extends Twig_Template
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
        $__internal_159c7b8b8897a440147116a7068a0d7726abad58f6b4bc3edc46f422d79b707e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_159c7b8b8897a440147116a7068a0d7726abad58f6b4bc3edc46f422d79b707e->enter($__internal_159c7b8b8897a440147116a7068a0d7726abad58f6b4bc3edc46f422d79b707e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/LandingPage/Widgets/_personalHomeFeatureList.html.twig"));

        $__internal_6d13e3dbae9b7f094c1e3cc0c1e37d26310f444b84ee4a0cf6ee3e864cad5405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d13e3dbae9b7f094c1e3cc0c1e37d26310f444b84ee4a0cf6ee3e864cad5405->enter($__internal_6d13e3dbae9b7f094c1e3cc0c1e37d26310f444b84ee4a0cf6ee3e864cad5405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/LandingPage/Widgets/_personalHomeFeatureList.html.twig"));

        // line 1
        echo "<section class=\"newiyziCards multipleCards\">
\t<div class=\"iyzi-container\">
\t\t\t<div class=\"cardWrap\">
\t\t\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["featureList"] ?? $this->getContext($context, "featureList")), "features", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "\t\t\t\t\t<div class=\"cardBox\">
\t\t\t\t\t\t<img src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "image", array()), "file", array()), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "image", array()), "extension", array()), "html", null, true);
            echo "\" alt=\"iyzico\"/>
\t\t\t\t\t\t<h3>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo " <span class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "colorTitle", array()), "html", null, true);
            echo "</span></h3>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t\t\t</div>
\t</div>
</section>
";
        
        $__internal_159c7b8b8897a440147116a7068a0d7726abad58f6b4bc3edc46f422d79b707e->leave($__internal_159c7b8b8897a440147116a7068a0d7726abad58f6b4bc3edc46f422d79b707e_prof);

        
        $__internal_6d13e3dbae9b7f094c1e3cc0c1e37d26310f444b84ee4a0cf6ee3e864cad5405->leave($__internal_6d13e3dbae9b7f094c1e3cc0c1e37d26310f444b84ee4a0cf6ee3e864cad5405_prof);

    }

    public function getTemplateName()
    {
        return "@root/LandingPage/Widgets/_personalHomeFeatureList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 10,  43 => 7,  37 => 6,  34 => 5,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"newiyziCards multipleCards\">
\t<div class=\"iyzi-container\">
\t\t\t<div class=\"cardWrap\">
\t\t\t\t{% for item in featureList.features %}
\t\t\t\t\t<div class=\"cardBox\">
\t\t\t\t\t\t<img src=\"{{ item.image.file }}.{{ item.image.extension }}\" alt=\"iyzico\"/>
\t\t\t\t\t\t<h3>{{ item.title }} <span class=\"{{ item.class }}\">{{ item.colorTitle }}</span></h3>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t</div>
</section>
", "@root/LandingPage/Widgets/_personalHomeFeatureList.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/LandingPage/Widgets/_personalHomeFeatureList.html.twig");
    }
}
