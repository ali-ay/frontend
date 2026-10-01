<?php

/* WebBundle:Partials:_appDownloadWithQRApplyForCard.html.twig */
class __TwigTemplate_b78d777729a333234ba8bd258440ba65da587675bb2960d05f2219dd465786d7 extends Twig_Template
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
        $__internal_f98dd78d6737118693b447ddeec7924d2ff69ca8a81b939c789ddecc0b9f54ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f98dd78d6737118693b447ddeec7924d2ff69ca8a81b939c789ddecc0b9f54ee->enter($__internal_f98dd78d6737118693b447ddeec7924d2ff69ca8a81b939c789ddecc0b9f54ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Partials:_appDownloadWithQRApplyForCard.html.twig"));

        $__internal_6ba8dd661546b7bab85ea73ed7ae076a5ea1121b2318696aece9d5d65e7c9f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ba8dd661546b7bab85ea73ed7ae076a5ea1121b2318696aece9d5d65e7c9f80->enter($__internal_6ba8dd661546b7bab85ea73ed7ae076a5ea1121b2318696aece9d5d65e7c9f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Partials:_appDownloadWithQRApplyForCard.html.twig"));

        // line 1
        echo "<div class=\"iyziModal app-download-with-qr-apply-for-card modal\">
\t<div class=\"iyziModalWrap\">
\t\t<div class=\"iyziModalContainer\">
\t\t\t<button type=\"button\" class=\"modal-close\" data-dismiss=\"modal\">
\t\t\t\t<svg class=\"icon\">
\t\t\t\t\t<use xlink:href=\"/assets/images/sprite/icons.svg#basic-close\"></use>
\t\t\t\t</svg>
\t\t\t</button>
\t\t\t<div class=\"iyziModalContent\">
\t\t\t\t<img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/content/app-download-popup-v3.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/content/app-download-popup-v3@2x.png"), "html", null, true);
        echo " 2x\" alt=\"iyzico kart'a qr ile başvur\" />
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<div class=\"title\">";
        // line 12
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "personalHome", array()), "popupTwoTitle", array());
        echo "</div>
\t\t\t\t\t<img class=\"popupPwiLogo\" src=\"/assets/images/icons/app-download-with-qr.svg\" alt=\"iyzico mobile app indir\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_f98dd78d6737118693b447ddeec7924d2ff69ca8a81b939c789ddecc0b9f54ee->leave($__internal_f98dd78d6737118693b447ddeec7924d2ff69ca8a81b939c789ddecc0b9f54ee_prof);

        
        $__internal_6ba8dd661546b7bab85ea73ed7ae076a5ea1121b2318696aece9d5d65e7c9f80->leave($__internal_6ba8dd661546b7bab85ea73ed7ae076a5ea1121b2318696aece9d5d65e7c9f80_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Partials:_appDownloadWithQRApplyForCard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 12,  36 => 10,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"iyziModal app-download-with-qr-apply-for-card modal\">
\t<div class=\"iyziModalWrap\">
\t\t<div class=\"iyziModalContainer\">
\t\t\t<button type=\"button\" class=\"modal-close\" data-dismiss=\"modal\">
\t\t\t\t<svg class=\"icon\">
\t\t\t\t\t<use xlink:href=\"/assets/images/sprite/icons.svg#basic-close\"></use>
\t\t\t\t</svg>
\t\t\t</button>
\t\t\t<div class=\"iyziModalContent\">
\t\t\t\t<img src=\"{{ asset('assets/images/content/app-download-popup-v3.png')}}\" srcset=\"{{ asset('assets/images/content/app-download-popup-v3@2x.png')}} 2x\" alt=\"iyzico kart'a qr ile başvur\" />
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<div class=\"title\">{{ translations.personalHome.popupTwoTitle|raw }}</div>
\t\t\t\t\t<img class=\"popupPwiLogo\" src=\"/assets/images/icons/app-download-with-qr.svg\" alt=\"iyzico mobile app indir\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
", "WebBundle:Partials:_appDownloadWithQRApplyForCard.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/Partials/_appDownloadWithQRApplyForCard.html.twig");
    }
}
