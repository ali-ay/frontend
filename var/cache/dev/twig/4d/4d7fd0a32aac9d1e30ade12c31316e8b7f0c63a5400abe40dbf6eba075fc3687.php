<?php

/* @root/LandingPage/Widgets/_personalHomeAppDownload.html.twig */
class __TwigTemplate_49af66eb470a357db225cfd87d0446f3f3af78910ebe3a5cb0d9afeb34d77bc4 extends Twig_Template
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
        $__internal_8e77949d8c37059b7346a9ec990e12833c5ad43070867ce4a7f68f8bb7e6e887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e77949d8c37059b7346a9ec990e12833c5ad43070867ce4a7f68f8bb7e6e887->enter($__internal_8e77949d8c37059b7346a9ec990e12833c5ad43070867ce4a7f68f8bb7e6e887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/LandingPage/Widgets/_personalHomeAppDownload.html.twig"));

        $__internal_134d6d3080d2995d5a0fc790c5695d3f0f585d5752e1d50272c905346f1ac571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_134d6d3080d2995d5a0fc790c5695d3f0f585d5752e1d50272c905346f1ac571->enter($__internal_134d6d3080d2995d5a0fc790c5695d3f0f585d5752e1d50272c905346f1ac571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/LandingPage/Widgets/_personalHomeAppDownload.html.twig"));

        // line 1
        echo "<section class=\"iyziRegister orange-pink-bg\">
\t<div class=\"container\">
      ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["appdownload"] ?? $this->getContext($context, "appdownload")), "headers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
            // line 4
            echo "
\t\t\t<div class=\"imgResp\">
        <img src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["items"], "image", array()), "file", array()), "html", null, true);
            echo "@2x.";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["items"], "image", array()), "extension", array()), "html", null, true);
            echo "\"/>
      </div>

\t\t\t<h2 class=\"very-light-pink dHide\">";
            // line 9
            echo $this->getAttribute($context["items"], "colorTitle", array());
            echo " <span class=\"gray-100\">";
            echo $this->getAttribute($context["items"], "title", array());
            echo "</span></h2>
\t\t\t<h2 class=\"very-light-pink mHide\">";
            // line 10
            echo $this->getAttribute($context["items"], "subDesc", array());
            echo " <span class=\"gray-100\">";
            echo $this->getAttribute($context["items"], "subTwoDesc", array());
            echo "</span></h2>

\t\t\t<a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "buttonOneUrl", array()), "html", null, true);
            echo "\" target=\"_blank\" class=\"button primary mHide\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "buttonOneText", array()), "html", null, true);
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
\t</div>
</section>


";
        
        $__internal_8e77949d8c37059b7346a9ec990e12833c5ad43070867ce4a7f68f8bb7e6e887->leave($__internal_8e77949d8c37059b7346a9ec990e12833c5ad43070867ce4a7f68f8bb7e6e887_prof);

        
        $__internal_134d6d3080d2995d5a0fc790c5695d3f0f585d5752e1d50272c905346f1ac571->leave($__internal_134d6d3080d2995d5a0fc790c5695d3f0f585d5752e1d50272c905346f1ac571_prof);

    }

    public function getTemplateName()
    {
        return "@root/LandingPage/Widgets/_personalHomeAppDownload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 14,  58 => 12,  51 => 10,  45 => 9,  37 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"iyziRegister orange-pink-bg\">
\t<div class=\"container\">
      {% for items in appdownload.headers %}

\t\t\t<div class=\"imgResp\">
        <img src=\"{{ items.image.file }}@2x.{{ items.image.extension }}\"/>
      </div>

\t\t\t<h2 class=\"very-light-pink dHide\">{{ items.colorTitle|raw }} <span class=\"gray-100\">{{ items.title|raw }}</span></h2>
\t\t\t<h2 class=\"very-light-pink mHide\">{{ items.subDesc|raw }} <span class=\"gray-100\">{{ items.subTwoDesc|raw }}</span></h2>

\t\t\t<a href=\"{{ items.buttonOneUrl }}\" target=\"_blank\" class=\"button primary mHide\">{{ items.buttonOneText }}</a>
    {% endfor %}

\t</div>
</section>


", "@root/LandingPage/Widgets/_personalHomeAppDownload.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/LandingPage/Widgets/_personalHomeAppDownload.html.twig");
    }
}
