<?php

/* WebBundle:Partials:_notifications.html.twig */
class __TwigTemplate_404c559636f9e40cb9afb0f126770cce80729c094650e345c5d0ccfa241295ca extends Twig_Template
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
        $__internal_e690610c6eefeee1fec781a33f5a80d98e004994799ab087ce7e623cb4df011c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e690610c6eefeee1fec781a33f5a80d98e004994799ab087ce7e623cb4df011c->enter($__internal_e690610c6eefeee1fec781a33f5a80d98e004994799ab087ce7e623cb4df011c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Partials:_notifications.html.twig"));

        $__internal_ee2479dc8ab46bcec30329c8d987f8f49141e68a361421b0850204449798633a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee2479dc8ab46bcec30329c8d987f8f49141e68a361421b0850204449798633a->enter($__internal_ee2479dc8ab46bcec30329c8d987f8f49141e68a361421b0850204449798633a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Partials:_notifications.html.twig"));

        // line 1
        $context["successMessages"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method");
        // line 2
        $context["consumerRegisterSuccessMessages"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "consumerRegisterSuccess"), "method");
        // line 3
        $context["consumerRegisterOtpMessages"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "consumerRegisterOtp"), "method");
        // line 4
        $context["consumerRegisterFailMessages"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "consumerRegisterFail"), "method");
        // line 5
        $context["newConsumerRegisterSuccessMessages"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "newConsumerRegisterSuccess"), "method");
        // line 6
        echo "
";
        // line 7
        if (($context["successMessages"] ?? $this->getContext($context, "successMessages"))) {
            // line 8
            echo "<!-- Success Modal: Begin -->

<div class=\"modal fade fail-modal successModalPopup\" tabindex=\"-1\" role=\"dialog\" id=\"flash-modal\" aria-labelledby=\"myLargeModalLabel\">
    <div class=\"modal-dialog fail-modal__wrapper\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"row full-height text-center\">
                <button type=\"button\" class=\"modal-close mR-auto\" data-dismiss=\"modal\">
                    <i class=\"icon icon--popup-close\" aria-hidden=\"true\"></i>
                </button>
                <i class=\"icon icon--contactus-success\"></i>
                <h2><strong>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "newiyzicoNotifications", array()), "newIslemBasarili", array()), "html", null, true);
            echo "</strong></h2>
                ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["successMessages"] ?? $this->getContext($context, "successMessages")));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 20
                echo "                    <p style=\"margin-bottom:40px\">
                        ";
                // line 21
                echo $context["flashMessage"];
                echo "
                    </p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                <a href=\"javascript:;\" title=\"\" class=\"button primary\" data-dismiss=\"modal\">
                    ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "newiyzicoNotifications", array()), "newTamam", array()), "html", null, true);
            echo "
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Success Modal: End -->
";
        }
        // line 33
        if (($context["consumerRegisterSuccessMessages"] ?? $this->getContext($context, "consumerRegisterSuccessMessages"))) {
            // line 34
            echo "<!-- Success Modal: Begin -->
<div class=\"iyziModal open-personal-onboard-modal modal otpPopup otpSuccessModal\" tabindex=\"-1\" role=\"dialog\" id=\"flash-modal\" aria-labelledby=\"myLargeModalLabel\">
\t<div class=\"iyziModalWrap\">
\t\t<div class=\"iyziModalContainer\">
\t\t\t<div class=\"modalContent\">
\t\t\t\t<button type=\"button\" class=\"modal-close\" data-dismiss=\"modal\">
\t\t\t\t\t<i class=\"icon icon--popup-close\" aria-hidden=\"true\"></i>
\t\t\t\t</button>
\t\t\t\t<div class=\"modalContent\">
\t\t\t\t\t<i class=\"icon icon--contactus-success\"></i>
\t\t\t\t\t<h2><strong>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "consumerQuickRegister", array()), "title", array()), "html", null, true);
            echo "</strong></h2>
\t\t\t\t\t\t\t<p>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "consumerQuickRegister", array()), "descriptiom", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<p><strong>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "consumerQuickRegister", array()), "subDescription", array()), "html", null, true);
            echo "</strong></p>
\t\t\t\t\t\t<div class=\"buttonGroup\">
\t\t\t\t\t\t";
            // line 48
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_locale"), "method") == "tr")) {
                // line 49
                echo "\t\t\t\t\t\t\t<a href=\"https://itunes.apple.com/us/app/iyzico/id1436467445?ls=1&mt=8\" target=\"_blank\"><i class=\"icon icon--app-store\"></i></a>
\t\t\t\t\t\t\t<a href=\"https://play.google.com/store/apps/details?id=com.iyzico.assistant\" target=\"_blank\"><i class=\"icon icon--google-play\"></i></a>
\t\t\t\t\t\t";
            } else {
                // line 52
                echo "\t\t\t\t\t\t\t<a href=\"https://itunes.apple.com/us/app/iyzico/id1436467445?ls=1&mt=8\" target=\"_blank\"><i class=\"icon icon--app-store-en\"></i></a>
\t\t\t\t\t\t\t<a href=\"https://play.google.com/store/apps/details?id=com.iyzico.assistant\" target=\"_blank\"><i class=\"icon icon--google-play-en\"></i></a>
\t\t\t\t\t\t";
            }
            // line 55
            echo "\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<!-- Success Modal: End -->
";
        }
        // line 64
        if (($context["consumerRegisterFailMessages"] ?? $this->getContext($context, "consumerRegisterFailMessages"))) {
            // line 65
            echo "<!-- Fail Modal: Begin -->
<div class=\"modal fade fail-modal\" tabindex=\"-1\" role=\"dialog\" id=\"flash-modal\" aria-labelledby=\"myLargeModalLabel\">
    <div class=\"modal-dialog fail-modal__wrapper\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"row full-height text-center\">
                <button type=\"button\" class=\"modal-close mR-auto\" data-dismiss=\"modal\">
                    <i class=\"icon icon--popup-close\" aria-hidden=\"true\"></i>
                </button>
                <i class=\"icon icon--contactus-fail\"></i>
                <h2><strong>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "newiyzicoNotifications", array()), "newBirHataOlustu", array()), "html", null, true);
            echo "</strong></h2>
                ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["consumerRegisterFailMessages"] ?? $this->getContext($context, "consumerRegisterFailMessages")));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 76
                echo "                    <p>
                        ";
                // line 77
                echo $context["flashMessage"];
                echo "
                    </p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "                <div class=\"buttonGroup\">
                    <button type=\"button\" class=\"button primary\" data-dismiss=\"modal\">
                        ";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "newiyzicoNotifications", array()), "newKapat", array()), "html", null, true);
            echo "
                    </button>
                </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Fail Modal: End -->
";
        }
        // line 92
        if (($context["consumerRegisterOtpMessages"] ?? $this->getContext($context, "consumerRegisterOtpMessages"))) {
            // line 93
            echo "<script type=\"text/javascript\">


";
            // line 96
            $context["memberUserId"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "memberUserId"), "method");
            // line 97
            $context["referenceCode"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "referenceCode"), "method");
            // line 98
            echo "
var memberUserId = ";
            // line 99
            echo twig_escape_filter($this->env, ($context["memberUserId"] ?? $this->getContext($context, "memberUserId")), "html", null, true);
            echo ";
var referenceCode = \"";
            // line 100
            echo twig_escape_filter($this->env, ($context["referenceCode"] ?? $this->getContext($context, "referenceCode")), "html", null, true);
            echo "\";

console.log(\"ASLSLLALSLSLSLSLSLLSLSL\",memberUserId,referenceCode)


</script>
<!-- OTP Modal: Begin -->
<div class=\"iyziModal open-personal-onboard-modal modal otpPopup\" tabindex=\"-1\" role=\"dialog\" id=\"flash-modal\" aria-labelledby=\"myLargeModalLabel\">
\t<div class=\"iyziModalWrap\">
\t\t<div class=\"iyziModalContainer\">
\t\t\t<button type=\"button\" class=\"modal-close\" data-dismiss=\"modal\">
\t\t\t\t<i class=\"icon icon--popup-close\" aria-hidden=\"true\"></i>
\t\t\t</button>
\t\t\t<div class=\"iyziModalContent\">
\t\t\t\t<div class=\"contentWrap\">
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<h2><strong>";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "consumerQuickRegisterOtp", array()), "title", array()), "html", null, true);
            echo "</strong></h2>
\t\t\t\t\t\t<p>";
            // line 117
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
            // line 127
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("consumer_otp_check");
            echo "\" method=\"POST\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"csrf-token\" name=\"_csrf_token\" value=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("consumer-otp-check"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"inputWrap\">
\t\t\t\t\t\t\t\t\t\t<span>";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "consumerQuickRegisterOtp", array()), "inputTitle", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"tel\" pattern=\"[0-9]*\" name=\"phone\" minlength=\"6\" autocomplete=\"off\" id=\"phone\" class=\"input-form input-form--large\" required />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"reSend\">
\t\t\t\t\t\t\t\t\t\t<div class=\"countdown\">
\t\t\t\t\t\t\t\t\t\t\t<i id=\"countdown-icon\" class=\"icon icon--icon-clock\" style=\"display:none;\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span id=\"countdown\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" id=\"reSend\" title=\"\" class=\"\">";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "consumerQuickRegisterOtp", array()), "reSendButtonText", array()), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"messagebox\">
\t\t\t\t\t\t\t\t\t\t<div id=\"alertMessage\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"buttonGroup\">
\t\t\t\t\t\t\t\t\t\t<button onclick=\"javascript:\$('.consumer-otp-popup')\" type=\"submit\" title=\"\" class=\"button default\">";
            // line 144
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
<!-- OTP Modal: End -->
";
        }
        // line 158
        echo "


";
        // line 161
        if (($context["newConsumerRegisterSuccessMessages"] ?? $this->getContext($context, "newConsumerRegisterSuccessMessages"))) {
            // line 162
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
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "consumerRegisterSuccess", array()), "title", array()), "html", null, true);
            echo "</strong></h2>
\t\t\t\t\t<p>";
            // line 172
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "consumerRegisterSuccess", array()), "description", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t<p><strong>";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "consumerRegisterSuccess", array()), "subTitle", array()), "html", null, true);
            echo "</strong></p>
\t\t\t\t\t<div class=\"buttonGroup\">
\t\t\t\t\t";
            // line 175
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_locale"), "method") == "tr")) {
                // line 176
                echo "\t\t\t\t\t\t<a href=\"https://itunes.apple.com/us/app/iyzico/id1436467445?ls=1&mt=8\" target=\"_blank\"><i class=\"icon icon--app-store\"></i></a>
\t\t\t\t\t\t<a href=\"https://play.google.com/store/apps/details?id=com.iyzico.assistant\" target=\"_blank\"><i class=\"icon icon--google-play\"></i></a>
\t\t\t\t\t";
            } else {
                // line 179
                echo "\t\t\t\t\t\t<a href=\"https://itunes.apple.com/us/app/iyzico/id1436467445?ls=1&mt=8\" target=\"_blank\"><i class=\"icon icon--app-store-en\"></i></a>
\t\t\t\t\t\t<a href=\"https://play.google.com/store/apps/details?id=com.iyzico.assistant\" target=\"_blank\"><i class=\"icon icon--google-play-en\"></i></a>
\t\t\t\t\t";
            }
            // line 182
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"qrCode\">
\t\t\t\t\t\t<img src=\"";
            // line 184
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/content/consumerAppQrcode.png"), "html", null, true);
            echo "\" srcset=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/content/consumerAppQrcode@2x.png"), "html", null, true);
            echo " 2x\" alt=\"\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<p><span>";
            // line 186
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "consumerRegisterSuccess", array()), "subDescription", array()), "html", null, true);
            echo "</span></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        }
        
        $__internal_e690610c6eefeee1fec781a33f5a80d98e004994799ab087ce7e623cb4df011c->leave($__internal_e690610c6eefeee1fec781a33f5a80d98e004994799ab087ce7e623cb4df011c_prof);

        
        $__internal_ee2479dc8ab46bcec30329c8d987f8f49141e68a361421b0850204449798633a->leave($__internal_ee2479dc8ab46bcec30329c8d987f8f49141e68a361421b0850204449798633a_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Partials:_notifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 186,  333 => 184,  329 => 182,  324 => 179,  319 => 176,  317 => 175,  312 => 173,  308 => 172,  304 => 171,  293 => 162,  291 => 161,  286 => 158,  269 => 144,  260 => 138,  249 => 130,  244 => 128,  240 => 127,  227 => 117,  223 => 116,  204 => 100,  200 => 99,  197 => 98,  195 => 97,  193 => 96,  188 => 93,  186 => 92,  173 => 82,  169 => 80,  160 => 77,  157 => 76,  153 => 75,  149 => 74,  138 => 65,  136 => 64,  125 => 55,  120 => 52,  115 => 49,  113 => 48,  108 => 46,  104 => 45,  100 => 44,  88 => 34,  86 => 33,  75 => 25,  72 => 24,  63 => 21,  60 => 20,  56 => 19,  52 => 18,  40 => 8,  38 => 7,  35 => 6,  33 => 5,  31 => 4,  29 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set successMessages = app.session.flashBag.get('success') %}
{% set consumerRegisterSuccessMessages = app.session.flashBag.get('consumerRegisterSuccess') %}
{% set consumerRegisterOtpMessages = app.session.flashBag.get('consumerRegisterOtp') %}
{% set consumerRegisterFailMessages = app.session.flashBag.get('consumerRegisterFail') %}
{% set newConsumerRegisterSuccessMessages = app.session.flashBag.get('newConsumerRegisterSuccess') %}

{% if  successMessages %}
<!-- Success Modal: Begin -->

<div class=\"modal fade fail-modal successModalPopup\" tabindex=\"-1\" role=\"dialog\" id=\"flash-modal\" aria-labelledby=\"myLargeModalLabel\">
    <div class=\"modal-dialog fail-modal__wrapper\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"row full-height text-center\">
                <button type=\"button\" class=\"modal-close mR-auto\" data-dismiss=\"modal\">
                    <i class=\"icon icon--popup-close\" aria-hidden=\"true\"></i>
                </button>
                <i class=\"icon icon--contactus-success\"></i>
                <h2><strong>{{ translations.newiyzicoNotifications.newIslemBasarili }}</strong></h2>
                {% for flashMessage in successMessages %}
                    <p style=\"margin-bottom:40px\">
                        {{ flashMessage|raw }}
                    </p>
                {% endfor %}
                <a href=\"javascript:;\" title=\"\" class=\"button primary\" data-dismiss=\"modal\">
                    {{ translations.newiyzicoNotifications.newTamam }}
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Success Modal: End -->
{% endif %}
{% if  consumerRegisterSuccessMessages %}
<!-- Success Modal: Begin -->
<div class=\"iyziModal open-personal-onboard-modal modal otpPopup otpSuccessModal\" tabindex=\"-1\" role=\"dialog\" id=\"flash-modal\" aria-labelledby=\"myLargeModalLabel\">
\t<div class=\"iyziModalWrap\">
\t\t<div class=\"iyziModalContainer\">
\t\t\t<div class=\"modalContent\">
\t\t\t\t<button type=\"button\" class=\"modal-close\" data-dismiss=\"modal\">
\t\t\t\t\t<i class=\"icon icon--popup-close\" aria-hidden=\"true\"></i>
\t\t\t\t</button>
\t\t\t\t<div class=\"modalContent\">
\t\t\t\t\t<i class=\"icon icon--contactus-success\"></i>
\t\t\t\t\t<h2><strong>{{ translations.consumerQuickRegister.title }}</strong></h2>
\t\t\t\t\t\t\t<p>{{ translations.consumerQuickRegister.descriptiom }}</p>
\t\t\t\t\t\t\t<p><strong>{{ translations.consumerQuickRegister.subDescription }}</strong></p>
\t\t\t\t\t\t<div class=\"buttonGroup\">
\t\t\t\t\t\t{% if app.request.attributes.get('_locale') == \"tr\" %}
\t\t\t\t\t\t\t<a href=\"https://itunes.apple.com/us/app/iyzico/id1436467445?ls=1&mt=8\" target=\"_blank\"><i class=\"icon icon--app-store\"></i></a>
\t\t\t\t\t\t\t<a href=\"https://play.google.com/store/apps/details?id=com.iyzico.assistant\" target=\"_blank\"><i class=\"icon icon--google-play\"></i></a>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<a href=\"https://itunes.apple.com/us/app/iyzico/id1436467445?ls=1&mt=8\" target=\"_blank\"><i class=\"icon icon--app-store-en\"></i></a>
\t\t\t\t\t\t\t<a href=\"https://play.google.com/store/apps/details?id=com.iyzico.assistant\" target=\"_blank\"><i class=\"icon icon--google-play-en\"></i></a>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<!-- Success Modal: End -->
{% endif %}
{% if consumerRegisterFailMessages  %}
<!-- Fail Modal: Begin -->
<div class=\"modal fade fail-modal\" tabindex=\"-1\" role=\"dialog\" id=\"flash-modal\" aria-labelledby=\"myLargeModalLabel\">
    <div class=\"modal-dialog fail-modal__wrapper\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"row full-height text-center\">
                <button type=\"button\" class=\"modal-close mR-auto\" data-dismiss=\"modal\">
                    <i class=\"icon icon--popup-close\" aria-hidden=\"true\"></i>
                </button>
                <i class=\"icon icon--contactus-fail\"></i>
                <h2><strong>{{ translations.newiyzicoNotifications.newBirHataOlustu }}</strong></h2>
                {% for flashMessage in consumerRegisterFailMessages %}
                    <p>
                        {{ flashMessage|raw }}
                    </p>
                {% endfor %}
                <div class=\"buttonGroup\">
                    <button type=\"button\" class=\"button primary\" data-dismiss=\"modal\">
                        {{ translations.newiyzicoNotifications.newKapat }}
                    </button>
                </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Fail Modal: End -->
{% endif %}
{% if consumerRegisterOtpMessages  %}
<script type=\"text/javascript\">


{% set memberUserId = app.session.get('memberUserId') %}
{% set referenceCode = app.session.get('referenceCode') %}

var memberUserId = {{ memberUserId }};
var referenceCode = \"{{ referenceCode }}\";

console.log(\"ASLSLLALSLSLSLSLSLLSLSL\",memberUserId,referenceCode)


</script>
<!-- OTP Modal: Begin -->
<div class=\"iyziModal open-personal-onboard-modal modal otpPopup\" tabindex=\"-1\" role=\"dialog\" id=\"flash-modal\" aria-labelledby=\"myLargeModalLabel\">
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
\t\t\t\t\t\t\t\t\t\t<span>{{ translations.consumerQuickRegisterOtp.inputTitle }}</span>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"tel\" pattern=\"[0-9]*\" name=\"phone\" minlength=\"6\" autocomplete=\"off\" id=\"phone\" class=\"input-form input-form--large\" required />
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
\t\t\t\t\t\t\t\t\t\t<button onclick=\"javascript:\$('.consumer-otp-popup')\" type=\"submit\" title=\"\" class=\"button default\">{{ translations.consumerQuickRegisterOtp.checkButtonText }}</button>
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
<!-- OTP Modal: End -->
{% endif %}



{% if newConsumerRegisterSuccessMessages %}
<div class=\"iyziModal consumer-register-success-modal modal consumerRegisterSucsess\">
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
{% endif %}
", "WebBundle:Partials:_notifications.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/Partials/_notifications.html.twig");
    }
}
