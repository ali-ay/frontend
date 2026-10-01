<?php

/* WebBundle:Partials:_cookieNotification.html.twig */
class __TwigTemplate_799b2c9569c1dafec208087fac6a0293b0312e6ebca2934372796682c863d870 extends Twig_Template
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
        $__internal_fcfa47003f06018d106e537333aa91e1bb9b38870dc0ce11b6d9cc4808f04c7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcfa47003f06018d106e537333aa91e1bb9b38870dc0ce11b6d9cc4808f04c7f->enter($__internal_fcfa47003f06018d106e537333aa91e1bb9b38870dc0ce11b6d9cc4808f04c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Partials:_cookieNotification.html.twig"));

        $__internal_b9d3d37047c3c7a73e1532118259145529ac1661319bd2508c42fa849eb7395e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9d3d37047c3c7a73e1532118259145529ac1661319bd2508c42fa849eb7395e->enter($__internal_b9d3d37047c3c7a73e1532118259145529ac1661319bd2508c42fa849eb7395e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Partials:_cookieNotification.html.twig"));

        // line 1
        echo "<div class=\"cookie-notification\">
    <div class=\"notification-wrapper\">
        <div class=\"cookie-text\">
            ";
        // line 4
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "newiyzicoNotifications", array()), "newCookieBilgilendirmeYazisi", array());
        echo "
        </div>
        <div class=\"close-button\">
            <a href=\"#\" title=\"\" class=\"button-clean-close js-close-cookie-notification\">
                <i class=\"icon icon--cookie-notification\"></i>
            </a>
        </div>
    </div>
</div>
";
        
        $__internal_fcfa47003f06018d106e537333aa91e1bb9b38870dc0ce11b6d9cc4808f04c7f->leave($__internal_fcfa47003f06018d106e537333aa91e1bb9b38870dc0ce11b6d9cc4808f04c7f_prof);

        
        $__internal_b9d3d37047c3c7a73e1532118259145529ac1661319bd2508c42fa849eb7395e->leave($__internal_b9d3d37047c3c7a73e1532118259145529ac1661319bd2508c42fa849eb7395e_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Partials:_cookieNotification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"cookie-notification\">
    <div class=\"notification-wrapper\">
        <div class=\"cookie-text\">
            {{ translations.newiyzicoNotifications.newCookieBilgilendirmeYazisi|raw }}
        </div>
        <div class=\"close-button\">
            <a href=\"#\" title=\"\" class=\"button-clean-close js-close-cookie-notification\">
                <i class=\"icon icon--cookie-notification\"></i>
            </a>
        </div>
    </div>
</div>
", "WebBundle:Partials:_cookieNotification.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/Partials/_cookieNotification.html.twig");
    }
}
