<?php

/* WebBundle:Partials:_pwiBrandsModal.html.twig */
class __TwigTemplate_19800aadf3294ccaf3d825d849ba73020c85c0034ee9470e931385a8ccfd33b4 extends Twig_Template
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
        $__internal_8b5bfb50b2c332299c30721a6924ef32f4fea56111f6b9ab5c8c87356ead0172 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b5bfb50b2c332299c30721a6924ef32f4fea56111f6b9ab5c8c87356ead0172->enter($__internal_8b5bfb50b2c332299c30721a6924ef32f4fea56111f6b9ab5c8c87356ead0172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Partials:_pwiBrandsModal.html.twig"));

        $__internal_c6a5bbcac46ffd5e2a83682bf89d072e93725bd96982a8c2d014fd58953351e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a5bbcac46ffd5e2a83682bf89d072e93725bd96982a8c2d014fd58953351e0->enter($__internal_c6a5bbcac46ffd5e2a83682bf89d072e93725bd96982a8c2d014fd58953351e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Partials:_pwiBrandsModal.html.twig"));

        // line 1
        echo "<div class=\"iyziModal pwi-brands-modal modal\">
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
\t\t\t\t<div class=\"pwiBrandModalContent\">
\t\t\t\t\t<div class=\"title\">";
        // line 13
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "pwiBrandsLPpopup", array()), "titleTwo", array());
        echo "</div>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<svg class=\"icon\">
  \t\t\t\t\t\t\t<use xlink:href=\"/assets/images/sprite/icons.svg#mcc-icn-shopping\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<p>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "pwiBrandsLPpopup", array()), "secFive", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<svg class=\"icon\">
  \t\t\t\t\t\t\t<use xlink:href=\"/assets/images/sprite/icons.svg#basic-icn-support\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<p>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "pwiBrandsLPpopup", array()), "secSix", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<svg class=\"icon\">
  \t\t\t\t\t\t\t<use xlink:href=\"/assets/images/sprite/icons.svg#mcc-refund\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<p>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "pwiBrandsLPpopup", array()), "secSeven", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"note\">
\t\t\t\t\t\t\t<svg class=\"icon\">
  \t\t\t\t\t\t\t<use xlink:href=\"/assets/images/sprite/icons.svg#informative-info\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<p>";
        // line 37
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "pwiBrandsLPpopup", array()), "secEight", array());
        echo "
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"brandDomain\"></div>
\t\t\t\t\t<a href=\"#\" class=\"button primary brandUrl\" title=\"Kurumsal\" target=\"_blank\">
\t\t\t\t\t\t<svg class=\"icon\">
  \t\t\t\t\t\t\t<use xlink:href=\"/assets/images/sprite/icons.svg#icons-basic-icn-web\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "pwiBrandsLPpopup", array()), "buttonText", array()), "html", null, true);
        echo "
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_8b5bfb50b2c332299c30721a6924ef32f4fea56111f6b9ab5c8c87356ead0172->leave($__internal_8b5bfb50b2c332299c30721a6924ef32f4fea56111f6b9ab5c8c87356ead0172_prof);

        
        $__internal_c6a5bbcac46ffd5e2a83682bf89d072e93725bd96982a8c2d014fd58953351e0->leave($__internal_c6a5bbcac46ffd5e2a83682bf89d072e93725bd96982a8c2d014fd58953351e0_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Partials:_pwiBrandsModal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 45,  80 => 37,  71 => 31,  62 => 25,  53 => 19,  44 => 13,  37 => 11,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"iyziModal pwi-brands-modal modal\">
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
\t\t\t\t<div class=\"pwiBrandModalContent\">
\t\t\t\t\t<div class=\"title\">{{ translations.pwiBrandsLPpopup.titleTwo|raw }}</div>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<svg class=\"icon\">
  \t\t\t\t\t\t\t<use xlink:href=\"/assets/images/sprite/icons.svg#mcc-icn-shopping\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<p>{{ translations.pwiBrandsLPpopup.secFive }}</p>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<svg class=\"icon\">
  \t\t\t\t\t\t\t<use xlink:href=\"/assets/images/sprite/icons.svg#basic-icn-support\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<p>{{ translations.pwiBrandsLPpopup.secSix }}</p>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<svg class=\"icon\">
  \t\t\t\t\t\t\t<use xlink:href=\"/assets/images/sprite/icons.svg#mcc-refund\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<p>{{ translations.pwiBrandsLPpopup.secSeven }}</p>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"note\">
\t\t\t\t\t\t\t<svg class=\"icon\">
  \t\t\t\t\t\t\t<use xlink:href=\"/assets/images/sprite/icons.svg#informative-info\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<p>{{ translations.pwiBrandsLPpopup.secEight|raw }}
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"brandDomain\"></div>
\t\t\t\t\t<a href=\"#\" class=\"button primary brandUrl\" title=\"Kurumsal\" target=\"_blank\">
\t\t\t\t\t\t<svg class=\"icon\">
  \t\t\t\t\t\t\t<use xlink:href=\"/assets/images/sprite/icons.svg#icons-basic-icn-web\"></use>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t{{ translations.pwiBrandsLPpopup.buttonText }}
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
", "WebBundle:Partials:_pwiBrandsModal.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/Partials/_pwiBrandsModal.html.twig");
    }
}
