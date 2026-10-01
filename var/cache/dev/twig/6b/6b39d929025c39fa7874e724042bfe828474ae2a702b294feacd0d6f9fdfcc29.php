<?php

/* WebBundle:Partials:_newconsumerRegisterSucsessOfferModal.html.twig */
class __TwigTemplate_96dafda33308eea0e057bfd94e56714838c6117b1f479a44a01afa28b527b35c extends Twig_Template
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
        $__internal_60000574dd523a39e309a8443761e219c4f2eb059ef98a600aad535db865248b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60000574dd523a39e309a8443761e219c4f2eb059ef98a600aad535db865248b->enter($__internal_60000574dd523a39e309a8443761e219c4f2eb059ef98a600aad535db865248b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Partials:_newconsumerRegisterSucsessOfferModal.html.twig"));

        $__internal_4de8bcbce747b0fd986afe1357cfd588408ed6a4926886afc2f75015466ae0c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de8bcbce747b0fd986afe1357cfd588408ed6a4926886afc2f75015466ae0c1->enter($__internal_4de8bcbce747b0fd986afe1357cfd588408ed6a4926886afc2f75015466ae0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Partials:_newconsumerRegisterSucsessOfferModal.html.twig"));

        // line 1
        echo "<div class=\"iyziModal consumer-register-success-modal modal consumerRegisterSucsess\">
\t<div class=\"iyziModalWrap\">
\t\t<div class=\"iyziModalContainer\">
\t\t\t<div class=\"modalContent\">
\t\t\t\t<button type=\"button\" class=\"modal-close\" data-dismiss=\"modal\">
\t\t\t\t\t<i class=\"icon icon--popup-close\" aria-hidden=\"true\"></i>
\t\t\t\t</button>
\t\t\t\t<div class=\"modalContent\">
\t\t\t\t\t<i class=\"icon icon--contactus-success\"></i>
\t\t\t\t\t<h2><strong>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "consumerRegisterSuccess", array()), "title", array()), "html", null, true);
        echo "</strong></h2>
\t\t\t\t\t<p>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "consumerRegisterSuccess", array()), "description", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t<p><strong>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "consumerRegisterSuccess", array()), "subTitle", array()), "html", null, true);
        echo "</strong></p>
\t\t\t\t\t<div class=\"buttonGroup\">
\t\t\t\t\t";
        // line 14
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_locale"), "method") == "tr")) {
            // line 15
            echo "\t\t\t\t\t\t<a href=\"https://itunes.apple.com/us/app/iyzico/id1436467445?ls=1&mt=8\" target=\"_blank\"><i class=\"icon icon--app-store\"></i></a>
\t\t\t\t\t\t<a href=\"https://play.google.com/store/apps/details?id=com.iyzico.assistant\" target=\"_blank\"><i class=\"icon icon--google-play\"></i></a>
\t\t\t\t\t";
        } else {
            // line 18
            echo "\t\t\t\t\t\t<a href=\"https://itunes.apple.com/us/app/iyzico/id1436467445?ls=1&mt=8\" target=\"_blank\"><i class=\"icon icon--app-store-en\"></i></a>
\t\t\t\t\t\t<a href=\"https://play.google.com/store/apps/details?id=com.iyzico.assistant\" target=\"_blank\"><i class=\"icon icon--google-play-en\"></i></a>
\t\t\t\t\t";
        }
        // line 21
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"qrCode\">
\t\t\t\t\t\t<img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/content/consumerAppQrcode.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/content/consumerAppQrcode@2x.png"), "html", null, true);
        echo " 2x\" alt=\"\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<p><span>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "consumerRegisterSuccess", array()), "subDescription", array()), "html", null, true);
        echo "</span></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_60000574dd523a39e309a8443761e219c4f2eb059ef98a600aad535db865248b->leave($__internal_60000574dd523a39e309a8443761e219c4f2eb059ef98a600aad535db865248b_prof);

        
        $__internal_4de8bcbce747b0fd986afe1357cfd588408ed6a4926886afc2f75015466ae0c1->leave($__internal_4de8bcbce747b0fd986afe1357cfd588408ed6a4926886afc2f75015466ae0c1_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Partials:_newconsumerRegisterSucsessOfferModal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 25,  65 => 23,  61 => 21,  56 => 18,  51 => 15,  49 => 14,  44 => 12,  40 => 11,  36 => 10,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"iyziModal consumer-register-success-modal modal consumerRegisterSucsess\">
\t<div class=\"iyziModalWrap\">
\t\t<div class=\"iyziModalContainer\">
\t\t\t<div class=\"modalContent\">
\t\t\t\t<button type=\"button\" class=\"modal-close\" data-dismiss=\"modal\">
\t\t\t\t\t<i class=\"icon icon--popup-close\" aria-hidden=\"true\"></i>
\t\t\t\t</button>
\t\t\t\t<div class=\"modalContent\">
\t\t\t\t\t<i class=\"icon icon--contactus-success\"></i>
\t\t\t\t\t<h2><strong>{{ translations.consumerRegisterSuccess.title }}</strong></h2>
\t\t\t\t\t<p>{{ translations.consumerRegisterSuccess.description }}</p>
\t\t\t\t\t<p><strong>{{ translations.consumerRegisterSuccess.subTitle }}</strong></p>
\t\t\t\t\t<div class=\"buttonGroup\">
\t\t\t\t\t{% if app.request.attributes.get('_locale') == \"tr\" %}
\t\t\t\t\t\t<a href=\"https://itunes.apple.com/us/app/iyzico/id1436467445?ls=1&mt=8\" target=\"_blank\"><i class=\"icon icon--app-store\"></i></a>
\t\t\t\t\t\t<a href=\"https://play.google.com/store/apps/details?id=com.iyzico.assistant\" target=\"_blank\"><i class=\"icon icon--google-play\"></i></a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a href=\"https://itunes.apple.com/us/app/iyzico/id1436467445?ls=1&mt=8\" target=\"_blank\"><i class=\"icon icon--app-store-en\"></i></a>
\t\t\t\t\t\t<a href=\"https://play.google.com/store/apps/details?id=com.iyzico.assistant\" target=\"_blank\"><i class=\"icon icon--google-play-en\"></i></a>
\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"qrCode\">
\t\t\t\t\t\t<img src=\"{{ asset('assets/images/content/consumerAppQrcode.png')}}\" srcset=\"{{ asset('assets/images/content/consumerAppQrcode@2x.png')}} 2x\" alt=\"\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<p><span>{{ translations.consumerRegisterSuccess.subDescription }}</span></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
", "WebBundle:Partials:_newconsumerRegisterSucsessOfferModal.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/Partials/_newconsumerRegisterSucsessOfferModal.html.twig");
    }
}
