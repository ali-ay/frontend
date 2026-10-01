<?php

/* WebBundle:Partials:_consumerOfferRegisterOtpModal.html.twig */
class __TwigTemplate_1a7cbeb3320b9f0a9503d0b9132d45fdeb1254f1ba61ee1d40b9d8ae3599b4ca extends Twig_Template
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
        $__internal_01ffe585dc8ed5720b5de294417672b69841459e431e7b5d2a9a24be039c91ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01ffe585dc8ed5720b5de294417672b69841459e431e7b5d2a9a24be039c91ab->enter($__internal_01ffe585dc8ed5720b5de294417672b69841459e431e7b5d2a9a24be039c91ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Partials:_consumerOfferRegisterOtpModal.html.twig"));

        $__internal_dcb7b3b3e4ae62277b93b7265edf2dce1ba1831f4ae412f99ac14b51b781f4f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcb7b3b3e4ae62277b93b7265edf2dce1ba1831f4ae412f99ac14b51b781f4f6->enter($__internal_dcb7b3b3e4ae62277b93b7265edf2dce1ba1831f4ae412f99ac14b51b781f4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Partials:_consumerOfferRegisterOtpModal.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">

";
        // line 3
        $context["memberUserId"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "memberUserId"), "method");
        // line 4
        $context["referenceCode"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "referenceCode"), "method");
        // line 5
        $context["loginChannel"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "loginChannel"), "method");
        // line 6
        $context["clientIp"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "clientIp"), "method");
        // line 7
        echo "

var memberUserId = \"";
        // line 9
        echo twig_escape_filter($this->env, ($context["memberUserId"] ?? $this->getContext($context, "memberUserId")), "html", null, true);
        echo "\";
var referenceCode = \"";
        // line 10
        echo twig_escape_filter($this->env, ($context["referenceCode"] ?? $this->getContext($context, "referenceCode")), "html", null, true);
        echo "\";
var loginChannel = \"";
        // line 11
        echo twig_escape_filter($this->env, ($context["loginChannel"] ?? $this->getContext($context, "loginChannel")), "html", null, true);
        echo "\";
var clientIp = \"";
        // line 12
        echo twig_escape_filter($this->env, ($context["clientIp"] ?? $this->getContext($context, "clientIp")), "html", null, true);
        echo "\";

</script>


<div class=\"iyziModal consumer-offer-register-otp-modal otpPopup modal\">
\t<div class=\"iyziModalWrap\">
\t\t<div class=\"iyziModalContainer\">
\t\t\t<button type=\"button\" class=\"modal-close\" data-dismiss=\"modal\">
\t\t\t\t<i class=\"icon icon--popup-close\" aria-hidden=\"true\"></i>
\t\t\t</button>
\t\t\t<div class=\"iyziModalContent\">
\t\t\t\t<div class=\"contentWrap\">
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<h2><strong>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "consumerQuickRegisterOtp", array()), "title", array()), "html", null, true);
        echo "</strong></h2>
\t\t\t\t\t\t<p>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "consumerQuickRegisterOtp", array()), "description", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"formWrap\">
\t\t\t\t  <button type=\"button\" class=\"modal-close\" data-dismiss=\"modal\" style=\"display:none;\">
          \t<i class=\"icon icon--popup-close\" aria-hidden=\"true\"></i>
          </button>
\t\t\t\t\t<div class=\"newForm\">
\t\t\t\t\t\t<div class=\"offerForm\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<form name=\"consumer-otp-popup\" id=\"consumer-app-form\" class=\"consumer-otp-popup\" action=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("consumer_otp_check");
        echo "\" method=\"POST\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"csrf-token\" name=\"_csrf_token\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("consumer-otp-check"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"inputWrap\">
\t\t\t\t\t\t\t\t\t\t<input type=\"tel\" pattern=\"[0-9]*\" name=\"phone\" minlength=\"6\" autocomplete=\"off\" id=\"otpPhone\" placeholder=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "consumerQuickRegisterOtp", array()), "inputTitle", array()), "html", null, true);
        echo "\" class=\"input-form input-form--large\" required />
\t\t\t\t\t\t\t\t\t\t<label id=\"otpError\" ></label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"reSend\">
\t\t\t\t\t\t\t\t\t\t<div class=\"countdown\">
\t\t\t\t\t\t\t\t\t\t\t<i id=\"countdown-icon\" class=\"icon icon--icon-clock\" style=\"display:none;\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span id=\"countdown\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" id=\"reSend\" title=\"\" class=\"\">";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "consumerQuickRegisterOtp", array()), "reSendButtonText", array()), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"messagebox\">
\t\t\t\t\t\t\t\t\t\t<div id=\"alertMessage\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"buttonGroup\">
\t\t\t\t\t\t\t\t\t\t<button onclick=\"javascript:\$('.consumer-otp-popup')\" type=\"submit\" title=\"\" class=\"button primary\">";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "consumerQuickRegisterOtp", array()), "checkButtonText", array()), "html", null, true);
        echo "</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"g-recaptcha\" data-sitekey=\"6LcdQz4UAAAAAC2WQlZInj-6cmv3GwZR1bGg4S8J\" data-size=\"invisible\" data-callback=\"formSubmit\"  style=\"position: absolute; left: -9999px; width: 1px; height: 1px;\" tabindex=\"-1\" />
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_01ffe585dc8ed5720b5de294417672b69841459e431e7b5d2a9a24be039c91ab->leave($__internal_01ffe585dc8ed5720b5de294417672b69841459e431e7b5d2a9a24be039c91ab_prof);

        
        $__internal_dcb7b3b3e4ae62277b93b7265edf2dce1ba1831f4ae412f99ac14b51b781f4f6->leave($__internal_dcb7b3b3e4ae62277b93b7265edf2dce1ba1831f4ae412f99ac14b51b781f4f6_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Partials:_consumerOfferRegisterOtpModal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 54,  107 => 48,  96 => 40,  91 => 38,  87 => 37,  74 => 27,  70 => 26,  53 => 12,  49 => 11,  45 => 10,  41 => 9,  37 => 7,  35 => 6,  33 => 5,  31 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script type=\"text/javascript\">

{% set memberUserId = app.session.get('memberUserId') %}
{% set referenceCode = app.session.get('referenceCode') %}
{% set loginChannel = app.session.get('loginChannel') %}
{% set clientIp = app.session.get('clientIp') %}


var memberUserId = \"{{ memberUserId }}\";
var referenceCode = \"{{ referenceCode }}\";
var loginChannel = \"{{ loginChannel }}\";
var clientIp = \"{{ clientIp }}\";

</script>


<div class=\"iyziModal consumer-offer-register-otp-modal otpPopup modal\">
\t<div class=\"iyziModalWrap\">
\t\t<div class=\"iyziModalContainer\">
\t\t\t<button type=\"button\" class=\"modal-close\" data-dismiss=\"modal\">
\t\t\t\t<i class=\"icon icon--popup-close\" aria-hidden=\"true\"></i>
\t\t\t</button>
\t\t\t<div class=\"iyziModalContent\">
\t\t\t\t<div class=\"contentWrap\">
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<h2><strong>{{ translations.consumerQuickRegisterOtp.title }}</strong></h2>
\t\t\t\t\t\t<p>{{ translations.consumerQuickRegisterOtp.description }}</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"formWrap\">
\t\t\t\t  <button type=\"button\" class=\"modal-close\" data-dismiss=\"modal\" style=\"display:none;\">
          \t<i class=\"icon icon--popup-close\" aria-hidden=\"true\"></i>
          </button>
\t\t\t\t\t<div class=\"newForm\">
\t\t\t\t\t\t<div class=\"offerForm\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<form name=\"consumer-otp-popup\" id=\"consumer-app-form\" class=\"consumer-otp-popup\" action=\"{{ path('consumer_otp_check') }}\" method=\"POST\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"csrf-token\" name=\"_csrf_token\" value=\"{{ csrf_token('consumer-otp-check') }}\">
\t\t\t\t\t\t\t\t\t<div class=\"inputWrap\">
\t\t\t\t\t\t\t\t\t\t<input type=\"tel\" pattern=\"[0-9]*\" name=\"phone\" minlength=\"6\" autocomplete=\"off\" id=\"otpPhone\" placeholder=\"{{ translations.consumerQuickRegisterOtp.inputTitle }}\" class=\"input-form input-form--large\" required />
\t\t\t\t\t\t\t\t\t\t<label id=\"otpError\" ></label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"reSend\">
\t\t\t\t\t\t\t\t\t\t<div class=\"countdown\">
\t\t\t\t\t\t\t\t\t\t\t<i id=\"countdown-icon\" class=\"icon icon--icon-clock\" style=\"display:none;\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span id=\"countdown\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" id=\"reSend\" title=\"\" class=\"\">{{ translations.consumerQuickRegisterOtp.reSendButtonText }}</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"messagebox\">
\t\t\t\t\t\t\t\t\t\t<div id=\"alertMessage\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"buttonGroup\">
\t\t\t\t\t\t\t\t\t\t<button onclick=\"javascript:\$('.consumer-otp-popup')\" type=\"submit\" title=\"\" class=\"button primary\">{{ translations.consumerQuickRegisterOtp.checkButtonText }}</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"g-recaptcha\" data-sitekey=\"6LcdQz4UAAAAAC2WQlZInj-6cmv3GwZR1bGg4S8J\" data-size=\"invisible\" data-callback=\"formSubmit\"  style=\"position: absolute; left: -9999px; width: 1px; height: 1px;\" tabindex=\"-1\" />
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
", "WebBundle:Partials:_consumerOfferRegisterOtpModal.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/Partials/_consumerOfferRegisterOtpModal.html.twig");
    }
}
