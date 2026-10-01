<?php

/* WebBundle:Partials:_appDownloadWithQR.html.twig */
class __TwigTemplate_ac12450747c72e45651b4f61161e6970cb5d86684eb9116989ed27da1bbb9e2c extends Twig_Template
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
        $__internal_189b56636f29b1e2ba7f8b4f4efa2c34d031f50a800d1aa5a2a16b8c5065b1be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_189b56636f29b1e2ba7f8b4f4efa2c34d031f50a800d1aa5a2a16b8c5065b1be->enter($__internal_189b56636f29b1e2ba7f8b4f4efa2c34d031f50a800d1aa5a2a16b8c5065b1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Partials:_appDownloadWithQR.html.twig"));

        $__internal_5b5251e44e39e272909a3a27bc935eefb07e336ea6f4044156b1b8200e4aed72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b5251e44e39e272909a3a27bc935eefb07e336ea6f4044156b1b8200e4aed72->enter($__internal_5b5251e44e39e272909a3a27bc935eefb07e336ea6f4044156b1b8200e4aed72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Partials:_appDownloadWithQR.html.twig"));

        // line 1
        echo "<div class=\"iyziModal app-download-with-qr modal\">
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/content/app-download-popup-v1.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/content/app-download-popup-v1@2x.png"), "html", null, true);
        echo " 2x\" alt=\"pwi brand popup banner\" />
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<div class=\"title\">";
        // line 12
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "personalHome", array()), "popupOneTitle", array());
        echo "</div>
\t\t\t\t\t<img class=\"popupPwiLogo\" src=\"/assets/images/icons/app-download-with-qr.svg\" alt=\"iyzico mobile app indir\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_189b56636f29b1e2ba7f8b4f4efa2c34d031f50a800d1aa5a2a16b8c5065b1be->leave($__internal_189b56636f29b1e2ba7f8b4f4efa2c34d031f50a800d1aa5a2a16b8c5065b1be_prof);

        
        $__internal_5b5251e44e39e272909a3a27bc935eefb07e336ea6f4044156b1b8200e4aed72->leave($__internal_5b5251e44e39e272909a3a27bc935eefb07e336ea6f4044156b1b8200e4aed72_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Partials:_appDownloadWithQR.html.twig";
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
        return new Twig_Source("<div class=\"iyziModal app-download-with-qr modal\">
\t<div class=\"iyziModalWrap\">
\t\t<div class=\"iyziModalContainer\">
\t\t\t<button type=\"button\" class=\"modal-close\" data-dismiss=\"modal\">
\t\t\t\t<svg class=\"icon\">
\t\t\t\t\t<use xlink:href=\"/assets/images/sprite/icons.svg#basic-close\"></use>
\t\t\t\t</svg>
\t\t\t</button>
\t\t\t<div class=\"iyziModalContent\">
\t\t\t\t<img src=\"{{ asset('assets/images/content/app-download-popup-v1.png')}}\" srcset=\"{{ asset('assets/images/content/app-download-popup-v1@2x.png')}} 2x\" alt=\"pwi brand popup banner\" />
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<div class=\"title\">{{ translations.personalHome.popupOneTitle|raw }}</div>
\t\t\t\t\t<img class=\"popupPwiLogo\" src=\"/assets/images/icons/app-download-with-qr.svg\" alt=\"iyzico mobile app indir\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
", "WebBundle:Partials:_appDownloadWithQR.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/Partials/_appDownloadWithQR.html.twig");
    }
}
