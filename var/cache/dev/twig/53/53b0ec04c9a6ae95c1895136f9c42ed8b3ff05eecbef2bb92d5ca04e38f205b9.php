<?php

/* WebBundle:Partials:_newconsumerRegisterFailOfferModal.html.twig */
class __TwigTemplate_2c17925e9e8e23f3be156b6527445dacbd3d8d2d2a5746aef2f8233b4db2409d extends Twig_Template
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
        $__internal_2e219baa6ff8b68cb18a6a3094a6aba14e35fc66e310a65f728370208081566a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e219baa6ff8b68cb18a6a3094a6aba14e35fc66e310a65f728370208081566a->enter($__internal_2e219baa6ff8b68cb18a6a3094a6aba14e35fc66e310a65f728370208081566a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Partials:_newconsumerRegisterFailOfferModal.html.twig"));

        $__internal_0f85fb98217c4df74c02a8130503f91c7d8cc4ca4658194b66d986efce37f550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f85fb98217c4df74c02a8130503f91c7d8cc4ca4658194b66d986efce37f550->enter($__internal_0f85fb98217c4df74c02a8130503f91c7d8cc4ca4658194b66d986efce37f550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Partials:_newconsumerRegisterFailOfferModal.html.twig"));

        // line 1
        echo "<div class=\"iyziModal consumer-register-fail-offer-modal consumerRegisterFail modal\">
\t<div class=\"iyziModalWrap\">
\t\t<div class=\"iyziModalContainer\">
\t\t\t<button type=\"button\" class=\"modal-close\" data-dismiss=\"modal\">
\t\t\t\t<i class=\"icon icon--popup-close\" aria-hidden=\"true\"></i>
\t\t\t</button>
\t\t\t<div class=\"iyziModalContent\">
\t\t\t\t<div class=\"contentWrap\">
\t\t\t\t\t<div class=\"content\">
                        <i class=\"icon icon--contactus-fail\"></i>
\t\t\t\t\t\t<h2><strong>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "newiyzicoNotifications", array()), "newBirHataOlustu", array()), "html", null, true);
        echo "</strong></h2>
                        <p id=\"consumerRegisterErrorMessage\"></p>
                        <div class=\"buttonGroup\">
                            <button type=\"button\" class=\"button primary\" id=\"registerFailBack\">
                                ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "newiyzicoNotifications", array()), "newKapat", array()), "html", null, true);
        echo "
                            </button>
                        </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_2e219baa6ff8b68cb18a6a3094a6aba14e35fc66e310a65f728370208081566a->leave($__internal_2e219baa6ff8b68cb18a6a3094a6aba14e35fc66e310a65f728370208081566a_prof);

        
        $__internal_0f85fb98217c4df74c02a8130503f91c7d8cc4ca4658194b66d986efce37f550->leave($__internal_0f85fb98217c4df74c02a8130503f91c7d8cc4ca4658194b66d986efce37f550_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Partials:_newconsumerRegisterFailOfferModal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 15,  37 => 11,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"iyziModal consumer-register-fail-offer-modal consumerRegisterFail modal\">
\t<div class=\"iyziModalWrap\">
\t\t<div class=\"iyziModalContainer\">
\t\t\t<button type=\"button\" class=\"modal-close\" data-dismiss=\"modal\">
\t\t\t\t<i class=\"icon icon--popup-close\" aria-hidden=\"true\"></i>
\t\t\t</button>
\t\t\t<div class=\"iyziModalContent\">
\t\t\t\t<div class=\"contentWrap\">
\t\t\t\t\t<div class=\"content\">
                        <i class=\"icon icon--contactus-fail\"></i>
\t\t\t\t\t\t<h2><strong>{{ translations.newiyzicoNotifications.newBirHataOlustu }}</strong></h2>
                        <p id=\"consumerRegisterErrorMessage\"></p>
                        <div class=\"buttonGroup\">
                            <button type=\"button\" class=\"button primary\" id=\"registerFailBack\">
                                {{ translations.newiyzicoNotifications.newKapat }}
                            </button>
                        </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
", "WebBundle:Partials:_newconsumerRegisterFailOfferModal.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/Partials/_newconsumerRegisterFailOfferModal.html.twig");
    }
}
