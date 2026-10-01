<?php

/* WebBundle:Partials:_cepPosOfferModal.html.twig */
class __TwigTemplate_f085667e80228abdb324409029b2652bb17e12b3da7fbc20567445730f300d84 extends Twig_Template
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
        $__internal_00588f04ebc4b58bda48727eb4419a2de73bdb06caeb05d4c51807d1a2d294f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00588f04ebc4b58bda48727eb4419a2de73bdb06caeb05d4c51807d1a2d294f6->enter($__internal_00588f04ebc4b58bda48727eb4419a2de73bdb06caeb05d4c51807d1a2d294f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Partials:_cepPosOfferModal.html.twig"));

        $__internal_707ceb3886e78456e6f7ad542804d1ce25feff780c79e0dfe37d2417dc0453c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_707ceb3886e78456e6f7ad542804d1ce25feff780c79e0dfe37d2417dc0453c3->enter($__internal_707ceb3886e78456e6f7ad542804d1ce25feff780c79e0dfe37d2417dc0453c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Partials:_cepPosOfferModal.html.twig"));

        // line 1
        echo "<div class=\"modal fade offer-modal-cep-pos\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\">
    <div class=\"modal-dialog signup-modal__wrapper\" role=\"document\">

        <div class=\"iyzi-modal aliay\">
        <button type=\"button\" class=\"modal-close\" data-dismiss=\"modal\">
            <i class=\"icon icon--popup-close\" aria-hidden=\"true\"></i>
        </button>
            <div class=\"iyzi-modal-wrapper\">
                <div class=\"offerContent\">
                    <div class=\"signup-modal__info\">
                        <h2><strong>";
        // line 11
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoOM", array()), "oMTitle", array());
        echo "</strong></h2>
                        <p>
                            ";
        // line 13
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoOM", array()), "oMDescription", array());
        echo "
                        </p>
                    </div>
                </div>

                <div class=\"offerForm\">
                    <div class=\"signup-modal__form\">
                        <form name=\"offer-form\" id=\"Popup_Lead_Form\" class=\"cep-pos-offer\" action=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cep_pos_offer");
        echo "\" method=\"POST\">
                            <input type=\"hidden\" id=\"csrf-token\" name=\"_csrf_token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("cep-pos-offer"), "html", null, true);
        echo "\">
                            <div class=\"row\">
                                <input type=\"text\" id=\"name\" name=\"name\" class=\"input-form input-form--large\" minlength=\"2\" autocomplete=\"off\" placeholder=\"";
        // line 23
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoNewMerchant", array()), "newOwnerName", array());
        echo "\">
                            </div>
                            <div class=\"row\">
                                <input type=\"text\" id=\"email\" name=\"email\" class=\"input-form input-form--large\" value=\"\" minlength=\"2\" autocomplete=\"off\" placeholder=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoOM", array()), "oMEmail", array()), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"row\">
                                <input type=\"tel\" autocomplete=\"off\" class=\"input-form input-form--large\" id=\"phone\" name=\"phone\" value=\"\" minlength=\"7\" onkeypress=\"return phoneControl(event)\" placeholder=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoOM", array()), "oMPhone", array()), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"row\">
                                <input type=\"text\" id=\"website\" name=\"website\" class=\"input-form input-form--large\" minlength=\"2\" autocomplete=\"off\" placeholder=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoOM", array()), "oMWebsite", array()), "html", null, true);
        echo "\">
                            </div>
                            ";
        // line 34
        if (($context["shouldShowCaptcha"] ?? $this->getContext($context, "shouldShowCaptcha"))) {
            // line 35
            echo "                                <div class=\"row\" id=\"submit-button-holder-offer\" style=\"display:none;\">
                                    <input type=\"hidden\" name=\"recaptcha-response\" value=\"\" id=\"recaptcha-value-offer\" />
                                    <button onclick=\"javascript:\$('.cep-pos-offer')\" type=\"submit\" title=\"\" class=\"button primary\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoOM", array()), "oMGonder", array()), "html", null, true);
            echo "</button>
                                </div>
                                <div class=\"row\" style=\"margin-left:-20px !important;\" id=\"recaptcha-holder-offer\">
                                </div>
                            ";
        } else {
            // line 42
            echo "                                <div class=\"row\">
                                    <button onclick=\"javascript:\$('.cep-pos-offer')\" type=\"submit\" title=\"\" class=\"button primary\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoOM", array()), "oMGonder", array()), "html", null, true);
            echo "</button>
                                </div>
                            ";
        }
        // line 46
        echo "                            <input type=\"submit\"
                                   style=\"position: absolute; left: -9999px; width: 1px; height: 1px;\"
                                   tabindex=\"-1\" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_00588f04ebc4b58bda48727eb4419a2de73bdb06caeb05d4c51807d1a2d294f6->leave($__internal_00588f04ebc4b58bda48727eb4419a2de73bdb06caeb05d4c51807d1a2d294f6_prof);

        
        $__internal_707ceb3886e78456e6f7ad542804d1ce25feff780c79e0dfe37d2417dc0453c3->leave($__internal_707ceb3886e78456e6f7ad542804d1ce25feff780c79e0dfe37d2417dc0453c3_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Partials:_cepPosOfferModal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 46,  101 => 43,  98 => 42,  90 => 37,  86 => 35,  84 => 34,  79 => 32,  73 => 29,  67 => 26,  61 => 23,  56 => 21,  52 => 20,  42 => 13,  37 => 11,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade offer-modal-cep-pos\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\">
    <div class=\"modal-dialog signup-modal__wrapper\" role=\"document\">

        <div class=\"iyzi-modal aliay\">
        <button type=\"button\" class=\"modal-close\" data-dismiss=\"modal\">
            <i class=\"icon icon--popup-close\" aria-hidden=\"true\"></i>
        </button>
            <div class=\"iyzi-modal-wrapper\">
                <div class=\"offerContent\">
                    <div class=\"signup-modal__info\">
                        <h2><strong>{{ translations.iyzicoOM.oMTitle|raw }}</strong></h2>
                        <p>
                            {{ translations.iyzicoOM.oMDescription|raw }}
                        </p>
                    </div>
                </div>

                <div class=\"offerForm\">
                    <div class=\"signup-modal__form\">
                        <form name=\"offer-form\" id=\"Popup_Lead_Form\" class=\"cep-pos-offer\" action=\"{{ path('cep_pos_offer') }}\" method=\"POST\">
                            <input type=\"hidden\" id=\"csrf-token\" name=\"_csrf_token\" value=\"{{ csrf_token('cep-pos-offer') }}\">
                            <div class=\"row\">
                                <input type=\"text\" id=\"name\" name=\"name\" class=\"input-form input-form--large\" minlength=\"2\" autocomplete=\"off\" placeholder=\"{{ translations.iyzicoNewMerchant.newOwnerName|raw }}\">
                            </div>
                            <div class=\"row\">
                                <input type=\"text\" id=\"email\" name=\"email\" class=\"input-form input-form--large\" value=\"\" minlength=\"2\" autocomplete=\"off\" placeholder=\"{{ translations.iyzicoOM.oMEmail }}\">
                            </div>
                            <div class=\"row\">
                                <input type=\"tel\" autocomplete=\"off\" class=\"input-form input-form--large\" id=\"phone\" name=\"phone\" value=\"\" minlength=\"7\" onkeypress=\"return phoneControl(event)\" placeholder=\"{{ translations.iyzicoOM.oMPhone }}\">
                            </div>
                            <div class=\"row\">
                                <input type=\"text\" id=\"website\" name=\"website\" class=\"input-form input-form--large\" minlength=\"2\" autocomplete=\"off\" placeholder=\"{{ translations.iyzicoOM.oMWebsite }}\">
                            </div>
                            {% if shouldShowCaptcha %}
                                <div class=\"row\" id=\"submit-button-holder-offer\" style=\"display:none;\">
                                    <input type=\"hidden\" name=\"recaptcha-response\" value=\"\" id=\"recaptcha-value-offer\" />
                                    <button onclick=\"javascript:\$('.cep-pos-offer')\" type=\"submit\" title=\"\" class=\"button primary\">{{ translations.iyzicoOM.oMGonder }}</button>
                                </div>
                                <div class=\"row\" style=\"margin-left:-20px !important;\" id=\"recaptcha-holder-offer\">
                                </div>
                            {% else %}
                                <div class=\"row\">
                                    <button onclick=\"javascript:\$('.cep-pos-offer')\" type=\"submit\" title=\"\" class=\"button primary\">{{ translations.iyzicoOM.oMGonder }}</button>
                                </div>
                            {% endif %}
                            <input type=\"submit\"
                                   style=\"position: absolute; left: -9999px; width: 1px; height: 1px;\"
                                   tabindex=\"-1\" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
", "WebBundle:Partials:_cepPosOfferModal.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/Partials/_cepPosOfferModal.html.twig");
    }
}
