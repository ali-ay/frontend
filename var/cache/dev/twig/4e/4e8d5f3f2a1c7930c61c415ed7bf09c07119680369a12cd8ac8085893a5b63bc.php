<?php

/* WebBundle:Partials:_pwiBrandsHowToModal.html.twig */
class __TwigTemplate_7081f43d6cb1c1c703ffd4aa93d02b0667335f5d6b3d111f22d2f996b9cbb65c extends Twig_Template
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
        $__internal_f1a746b0ed3d8f612f2b80fc032505039884802f64ed27baf257de597de7e3e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1a746b0ed3d8f612f2b80fc032505039884802f64ed27baf257de597de7e3e0->enter($__internal_f1a746b0ed3d8f612f2b80fc032505039884802f64ed27baf257de597de7e3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Partials:_pwiBrandsHowToModal.html.twig"));

        $__internal_f7e225b0481f31f85080e86e1396c11db8a858a1d4e2d13b5837ea825be6b12b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e225b0481f31f85080e86e1396c11db8a858a1d4e2d13b5837ea825be6b12b->enter($__internal_f7e225b0481f31f85080e86e1396c11db8a858a1d4e2d13b5837ea825be6b12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Partials:_pwiBrandsHowToModal.html.twig"));

        // line 1
        echo "<div class=\"iyziModal pwi-brands-how-to-modal modal\">
\t<div class=\"iyziModalWrap\">
\t\t<div class=\"iyziModalContainer\">
\t\t\t<button type=\"button\" class=\"modal-close\" data-dismiss=\"modal\">
\t\t\t\t<svg class=\"icon\">
\t\t\t\t\t<use xlink:href=\"/assets/images/sprite/icons.svg#basic-close\"></use>
\t\t\t\t</svg>
\t\t\t</button>
\t\t\t<div class=\"iyziModalContent\">
\t\t\t\t<img class=\"popupPwiLogo\" src=\"/assets/images/icons/iyzico-logo-subbrands-pwi.svg\" alt=\"iyzico ile Öde Geçerli Mağazalar\">
\t\t\t\t<img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/content/pwi-brand-popup-banner.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/content/pwi-brand-popup-banner@2x.png"), "html", null, true);
        echo " 2x\" alt=\"pwi brand popup banner\" />
\t\t\t\t<div class=\"pwiBrandModalContent\" style=\"margin-bottom:8px;\">
\t\t\t\t\t<div class=\"title\">";
        // line 13
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "pwiBrandsLPpopup", array()), "title", array());
        echo "</div>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<svg class=\"icon\">
  \t\t\t\t\t\t\t<use xlink:href=\"/assets/images/sprite/icons.svg#basic-icn-oneclick\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<p>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "pwiBrandsLPpopup", array()), "secOne", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<svg class=\"icon\">
  \t\t\t\t\t\t\t<use xlink:href=\"/assets/images/sprite/icons.svg#phone\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<p>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "pwiBrandsLPpopup", array()), "secTwo", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<svg class=\"icon\">
  \t\t\t\t\t\t\t<use xlink:href=\"/assets/images/sprite/icons.svg#basic-cards\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<p>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "pwiBrandsLPpopup", array()), "secThree", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"note\">
\t\t\t\t\t\t\t<svg class=\"icon\">
  \t\t\t\t\t\t\t<use xlink:href=\"/assets/images/sprite/icons.svg#informative-info\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<p>";
        // line 37
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "pwiBrandsLPpopup", array()), "secFour", array());
        echo "
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_f1a746b0ed3d8f612f2b80fc032505039884802f64ed27baf257de597de7e3e0->leave($__internal_f1a746b0ed3d8f612f2b80fc032505039884802f64ed27baf257de597de7e3e0_prof);

        
        $__internal_f7e225b0481f31f85080e86e1396c11db8a858a1d4e2d13b5837ea825be6b12b->leave($__internal_f7e225b0481f31f85080e86e1396c11db8a858a1d4e2d13b5837ea825be6b12b_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Partials:_pwiBrandsHowToModal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 37,  71 => 31,  62 => 25,  53 => 19,  44 => 13,  37 => 11,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"iyziModal pwi-brands-how-to-modal modal\">
\t<div class=\"iyziModalWrap\">
\t\t<div class=\"iyziModalContainer\">
\t\t\t<button type=\"button\" class=\"modal-close\" data-dismiss=\"modal\">
\t\t\t\t<svg class=\"icon\">
\t\t\t\t\t<use xlink:href=\"/assets/images/sprite/icons.svg#basic-close\"></use>
\t\t\t\t</svg>
\t\t\t</button>
\t\t\t<div class=\"iyziModalContent\">
\t\t\t\t<img class=\"popupPwiLogo\" src=\"/assets/images/icons/iyzico-logo-subbrands-pwi.svg\" alt=\"iyzico ile Öde Geçerli Mağazalar\">
\t\t\t\t<img src=\"{{ asset('assets/images/content/pwi-brand-popup-banner.png')}}\" srcset=\"{{ asset('assets/images/content/pwi-brand-popup-banner@2x.png')}} 2x\" alt=\"pwi brand popup banner\" />
\t\t\t\t<div class=\"pwiBrandModalContent\" style=\"margin-bottom:8px;\">
\t\t\t\t\t<div class=\"title\">{{ translations.pwiBrandsLPpopup.title|raw }}</div>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<svg class=\"icon\">
  \t\t\t\t\t\t\t<use xlink:href=\"/assets/images/sprite/icons.svg#basic-icn-oneclick\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<p>{{ translations.pwiBrandsLPpopup.secOne }}</p>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<svg class=\"icon\">
  \t\t\t\t\t\t\t<use xlink:href=\"/assets/images/sprite/icons.svg#phone\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<p>{{ translations.pwiBrandsLPpopup.secTwo }}</p>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<svg class=\"icon\">
  \t\t\t\t\t\t\t<use xlink:href=\"/assets/images/sprite/icons.svg#basic-cards\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<p>{{ translations.pwiBrandsLPpopup.secThree }}</p>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"note\">
\t\t\t\t\t\t\t<svg class=\"icon\">
  \t\t\t\t\t\t\t<use xlink:href=\"/assets/images/sprite/icons.svg#informative-info\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<p>{{ translations.pwiBrandsLPpopup.secFour|raw }}
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
", "WebBundle:Partials:_pwiBrandsHowToModal.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/Partials/_pwiBrandsHowToModal.html.twig");
    }
}
