<?php

/* WebBundle:Partials:_offerModal.html.twig */
class __TwigTemplate_3cffabf6aabb8f500b59e14bc7025da75b7e9eb3850c31025493109e651b722a extends Twig_Template
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
        $__internal_c7d2325b43ab272758f069b8af767a468410d6d41645a53fa8d326931bdf9f72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7d2325b43ab272758f069b8af767a468410d6d41645a53fa8d326931bdf9f72->enter($__internal_c7d2325b43ab272758f069b8af767a468410d6d41645a53fa8d326931bdf9f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Partials:_offerModal.html.twig"));

        $__internal_42d4bf9c101bd0aaa5e61f1e42d228fbe65ac550ba4d6bc2bc092f85f4305ef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42d4bf9c101bd0aaa5e61f1e42d228fbe65ac550ba4d6bc2bc092f85f4305ef3->enter($__internal_42d4bf9c101bd0aaa5e61f1e42d228fbe65ac550ba4d6bc2bc092f85f4305ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Partials:_offerModal.html.twig"));

        // line 1
        echo "<div class=\"modal fade offer-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\">
    <div class=\"modal-dialog signup-modal__wrapper\" role=\"document\">

        <div class=\"modal-content\">
        <button type=\"button\" class=\"modal-close\" data-dismiss=\"modal\">
            <i class=\"icon icon--popup-close\" aria-hidden=\"true\"></i>
        </button>
            <div class=\"row full-height\">
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
                        <form name=\"offer-form\" id=\"Popup_Lead_Form\" class=\"offer-form-popup\" action=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("form_get_offer");
        echo "\" method=\"POST\">
                            <input type=\"hidden\" id=\"csrf-token\" name=\"_csrf_token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("get-offer"), "html", null, true);
        echo "\">

                            <div class=\"row m-b-20\">
                            <span>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoOM", array()), "oMNameSurname", array()), "html", null, true);
        echo "</span>
                                <input type=\"text\" name=\"last_name\" minlength=\"2\" autocomplete=\"off\" id=\"name\" class=\"input-form input-form--large\" required />
                            </div>
                            <div class=\"row m-b-20\">
                            <span>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoOM", array()), "oMEmail", array()), "html", null, true);
        echo "</span>
                                <input type=\"text\" name=\"emailLead\" autocomplete=\"off\" id=\"email\" class=\"input-form input-form--large\" required />
                            </div>
                            <div class=\"row m-b-20\">
                            <span>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoOM", array()), "oMPhone", array()), "html", null, true);
        echo "</span>
                                <input type=\"tel\" pattern=\"[0-9]*\" minlength=\"7\" name=\"mobile\" autocomplete=\"off\" id=\"phone\" class=\"input-form input-form--large\" required />
                            </div>
                            <div class=\"row m-b-20\">
                            <span>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoOM", array()), "oMWebsite", array()), "html", null, true);
        echo "</span>
                                <input type=\"text\" name=\"url\" autocomplete=\"off\" id=\"website\" class=\"input-form input-form--large\" required />
                            </div>
                            ";
        // line 39
        if (($context["shouldShowCaptcha"] ?? $this->getContext($context, "shouldShowCaptcha"))) {
            // line 40
            echo "                                <div class=\"row\" id=\"submit-button-holder-offer\" style=\"display:none;\">
                                    <input type=\"hidden\" name=\"recaptcha-response\" value=\"\" id=\"recaptcha-value-offer\" />
                                    <button onclick=\"javascript:\$('.offer-form-popup')\" type=\"submit\" title=\"\" class=\"button primary\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoOM", array()), "oMGonder", array()), "html", null, true);
            echo "</button>
                                </div>
                                <div class=\"row\" style=\"margin-left:-20px !important;\" id=\"recaptcha-holder-offer\">
                                </div>
                            ";
        } else {
            // line 47
            echo "                                <div class=\"row\">
                                    <button onclick=\"javascript:\$('.offer-form-popup')\" type=\"submit\" title=\"\" class=\"button primary\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoOM", array()), "oMGonder", array()), "html", null, true);
            echo "</button>
                                </div>
                            ";
        }
        // line 51
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
        
        $__internal_c7d2325b43ab272758f069b8af767a468410d6d41645a53fa8d326931bdf9f72->leave($__internal_c7d2325b43ab272758f069b8af767a468410d6d41645a53fa8d326931bdf9f72_prof);

        
        $__internal_42d4bf9c101bd0aaa5e61f1e42d228fbe65ac550ba4d6bc2bc092f85f4305ef3->leave($__internal_42d4bf9c101bd0aaa5e61f1e42d228fbe65ac550ba4d6bc2bc092f85f4305ef3_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Partials:_offerModal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 51,  106 => 48,  103 => 47,  95 => 42,  91 => 40,  89 => 39,  83 => 36,  76 => 32,  69 => 28,  62 => 24,  56 => 21,  52 => 20,  42 => 13,  37 => 11,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade offer-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\">
    <div class=\"modal-dialog signup-modal__wrapper\" role=\"document\">

        <div class=\"modal-content\">
        <button type=\"button\" class=\"modal-close\" data-dismiss=\"modal\">
            <i class=\"icon icon--popup-close\" aria-hidden=\"true\"></i>
        </button>
            <div class=\"row full-height\">
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
                        <form name=\"offer-form\" id=\"Popup_Lead_Form\" class=\"offer-form-popup\" action=\"{{ path('form_get_offer') }}\" method=\"POST\">
                            <input type=\"hidden\" id=\"csrf-token\" name=\"_csrf_token\" value=\"{{ csrf_token('get-offer') }}\">

                            <div class=\"row m-b-20\">
                            <span>{{ translations.iyzicoOM.oMNameSurname }}</span>
                                <input type=\"text\" name=\"last_name\" minlength=\"2\" autocomplete=\"off\" id=\"name\" class=\"input-form input-form--large\" required />
                            </div>
                            <div class=\"row m-b-20\">
                            <span>{{ translations.iyzicoOM.oMEmail }}</span>
                                <input type=\"text\" name=\"emailLead\" autocomplete=\"off\" id=\"email\" class=\"input-form input-form--large\" required />
                            </div>
                            <div class=\"row m-b-20\">
                            <span>{{ translations.iyzicoOM.oMPhone }}</span>
                                <input type=\"tel\" pattern=\"[0-9]*\" minlength=\"7\" name=\"mobile\" autocomplete=\"off\" id=\"phone\" class=\"input-form input-form--large\" required />
                            </div>
                            <div class=\"row m-b-20\">
                            <span>{{ translations.iyzicoOM.oMWebsite }}</span>
                                <input type=\"text\" name=\"url\" autocomplete=\"off\" id=\"website\" class=\"input-form input-form--large\" required />
                            </div>
                            {% if shouldShowCaptcha %}
                                <div class=\"row\" id=\"submit-button-holder-offer\" style=\"display:none;\">
                                    <input type=\"hidden\" name=\"recaptcha-response\" value=\"\" id=\"recaptcha-value-offer\" />
                                    <button onclick=\"javascript:\$('.offer-form-popup')\" type=\"submit\" title=\"\" class=\"button primary\">{{ translations.iyzicoOM.oMGonder }}</button>
                                </div>
                                <div class=\"row\" style=\"margin-left:-20px !important;\" id=\"recaptcha-holder-offer\">
                                </div>
                            {% else %}
                                <div class=\"row\">
                                    <button onclick=\"javascript:\$('.offer-form-popup')\" type=\"submit\" title=\"\" class=\"button primary\">{{ translations.iyzicoOM.oMGonder }}</button>
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
", "WebBundle:Partials:_offerModal.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/Partials/_offerModal.html.twig");
    }
}
