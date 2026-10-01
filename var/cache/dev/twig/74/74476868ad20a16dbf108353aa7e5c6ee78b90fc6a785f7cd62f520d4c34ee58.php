<?php

/* WebBundle:Partials:_cashPackageOfferModal.html.twig */
class __TwigTemplate_c7018bdbcaddaf84f8e104331cf5e9d2534b641dd054596ebe0811e93c87af1a extends Twig_Template
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
        $__internal_8e0088b16a3d93dacdcb27cf6a1c98356b8b2d488623571ee140b555a5411be5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e0088b16a3d93dacdcb27cf6a1c98356b8b2d488623571ee140b555a5411be5->enter($__internal_8e0088b16a3d93dacdcb27cf6a1c98356b8b2d488623571ee140b555a5411be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Partials:_cashPackageOfferModal.html.twig"));

        $__internal_a476853276ab0bd3aeb50c7bf0115c5604f498d25bd163d9ed7b6c88ccb50b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a476853276ab0bd3aeb50c7bf0115c5604f498d25bd163d9ed7b6c88ccb50b9c->enter($__internal_a476853276ab0bd3aeb50c7bf0115c5604f498d25bd163d9ed7b6c88ccb50b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Partials:_cashPackageOfferModal.html.twig"));

        // line 1
        echo "<div class=\"modal fade offer-modal-cash-package\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\">
    <div class=\"modal-dialog signup-modal__wrapper\" role=\"document\">

        <div class=\"modal-content\">
        <button type=\"button\" class=\"modal-close\" data-dismiss=\"modal\">
            <i class=\"icon icon--popup-close\" aria-hidden=\"true\"></i>
        </button>
            <div class=\"row full-height cashPackage\">
                <div class=\"offerContent\">
                    <div class=\"signup-modal__info\">
                        <h2><strong>";
        // line 11
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "cashPackagePopup", array()), "newtitle", array());
        echo "</strong></h2>
                        <p>
                            ";
        // line 13
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "cashPackagePopup", array()), "newdescription", array());
        echo "
                        </p>
                        <div class=\"description\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "cashPackagePopup", array()), "newsubDescription", array()), "html", null, true);
        echo "</div>
                    </div>
                </div>

                <div class=\"offerForm\">
                    <div class=\"signup-modal__form\">
                        <form name=\"offer-form\" id=\"Popup_Lead_Form\" class=\"cash-package-offer-form-popup\" action=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("form_get_cash_package_offer");
        echo "\" method=\"POST\">
                            <input type=\"hidden\" id=\"csrf-token\" name=\"_csrf_token\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("cash-package-offer"), "html", null, true);
        echo "\">

                            <div class=\"row m-b-20\">
                            <span>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "popupFormField", array()), "nameSurname", array()), "html", null, true);
        echo "</span>
                                <input type=\"text\" name=\"last_name\"  minlength=\"2\" autocomplete=\"off\" id=\"name\" class=\"input-form input-form--large\" required />
                            </div>
                            <div class=\"row m-b-20\">
                            <span>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "popupFormField", array()), "email", array()), "html", null, true);
        echo "</span>
                                <input type=\"email\" name=\"emailCash\" autocomplete=\"off\" id=\"email\" class=\"input-form input-form--large\" required />
                            </div>
                            <div class=\"row m-b-20\">
                            <span>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "popupFormField", array()), "phone", array()), "html", null, true);
        echo "</span>
                                <input type=\"tel\" pattern=\"[0-9]*\" name=\"mobile\" minlength=\"7\" autocomplete=\"off\" id=\"phone\" class=\"input-form input-form--large\" required />
                            </div>
                            <div class=\"row m-b-20\">
                            <span>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "popupFormField", array()), "webSite", array()), "html", null, true);
        echo "</span>
                                <input type=\"text\" name=\"url\" autocomplete=\"off\" id=\"website\" class=\"input-form input-form--large\" required />
                            </div>


                            ";
        // line 42
        if (($context["shouldShowCaptcha"] ?? $this->getContext($context, "shouldShowCaptcha"))) {
            // line 43
            echo "                                <div class=\"row\" id=\"submit-button-holder-offer\" style=\"display:none;\">
                                    <input type=\"hidden\" name=\"recaptcha-response\" value=\"\" id=\"recaptcha-value-offer\" />
                                    <button onclick=\"javascript:\$('.cash-package-offer-form-popup')\" type=\"submit\" title=\"\" class=\"button primary\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoOM", array()), "oMGonder", array()), "html", null, true);
            echo "</button>
                                </div>
                                <div class=\"row\" style=\"margin-left:-20px !important;\" id=\"recaptcha-holder-offer\">
                                </div>
                            ";
        } else {
            // line 50
            echo "                                <div class=\"row\">
                                    <button onclick=\"javascript:\$('.cash-package-offer-form-popup')\" type=\"submit\" title=\"\" class=\"button primary\">";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoOM", array()), "oMGonder", array()), "html", null, true);
            echo "</button>
                                </div>
                            ";
        }
        // line 54
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
        
        $__internal_8e0088b16a3d93dacdcb27cf6a1c98356b8b2d488623571ee140b555a5411be5->leave($__internal_8e0088b16a3d93dacdcb27cf6a1c98356b8b2d488623571ee140b555a5411be5_prof);

        
        $__internal_a476853276ab0bd3aeb50c7bf0115c5604f498d25bd163d9ed7b6c88ccb50b9c->leave($__internal_a476853276ab0bd3aeb50c7bf0115c5604f498d25bd163d9ed7b6c88ccb50b9c_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Partials:_cashPackageOfferModal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 54,  112 => 51,  109 => 50,  101 => 45,  97 => 43,  95 => 42,  87 => 37,  80 => 33,  73 => 29,  66 => 25,  60 => 22,  56 => 21,  47 => 15,  42 => 13,  37 => 11,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade offer-modal-cash-package\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\">
    <div class=\"modal-dialog signup-modal__wrapper\" role=\"document\">

        <div class=\"modal-content\">
        <button type=\"button\" class=\"modal-close\" data-dismiss=\"modal\">
            <i class=\"icon icon--popup-close\" aria-hidden=\"true\"></i>
        </button>
            <div class=\"row full-height cashPackage\">
                <div class=\"offerContent\">
                    <div class=\"signup-modal__info\">
                        <h2><strong>{{ translations.cashPackagePopup.newtitle|raw }}</strong></h2>
                        <p>
                            {{ translations.cashPackagePopup.newdescription|raw }}
                        </p>
                        <div class=\"description\">{{ translations.cashPackagePopup.newsubDescription }}</div>
                    </div>
                </div>

                <div class=\"offerForm\">
                    <div class=\"signup-modal__form\">
                        <form name=\"offer-form\" id=\"Popup_Lead_Form\" class=\"cash-package-offer-form-popup\" action=\"{{ path('form_get_cash_package_offer') }}\" method=\"POST\">
                            <input type=\"hidden\" id=\"csrf-token\" name=\"_csrf_token\" value=\"{{ csrf_token('cash-package-offer') }}\">

                            <div class=\"row m-b-20\">
                            <span>{{ translations.popupFormField.nameSurname }}</span>
                                <input type=\"text\" name=\"last_name\"  minlength=\"2\" autocomplete=\"off\" id=\"name\" class=\"input-form input-form--large\" required />
                            </div>
                            <div class=\"row m-b-20\">
                            <span>{{ translations.popupFormField.email }}</span>
                                <input type=\"email\" name=\"emailCash\" autocomplete=\"off\" id=\"email\" class=\"input-form input-form--large\" required />
                            </div>
                            <div class=\"row m-b-20\">
                            <span>{{ translations.popupFormField.phone }}</span>
                                <input type=\"tel\" pattern=\"[0-9]*\" name=\"mobile\" minlength=\"7\" autocomplete=\"off\" id=\"phone\" class=\"input-form input-form--large\" required />
                            </div>
                            <div class=\"row m-b-20\">
                            <span>{{ translations.popupFormField.webSite }}</span>
                                <input type=\"text\" name=\"url\" autocomplete=\"off\" id=\"website\" class=\"input-form input-form--large\" required />
                            </div>


                            {% if shouldShowCaptcha %}
                                <div class=\"row\" id=\"submit-button-holder-offer\" style=\"display:none;\">
                                    <input type=\"hidden\" name=\"recaptcha-response\" value=\"\" id=\"recaptcha-value-offer\" />
                                    <button onclick=\"javascript:\$('.cash-package-offer-form-popup')\" type=\"submit\" title=\"\" class=\"button primary\">{{ translations.iyzicoOM.oMGonder }}</button>
                                </div>
                                <div class=\"row\" style=\"margin-left:-20px !important;\" id=\"recaptcha-holder-offer\">
                                </div>
                            {% else %}
                                <div class=\"row\">
                                    <button onclick=\"javascript:\$('.cash-package-offer-form-popup')\" type=\"submit\" title=\"\" class=\"button primary\">{{ translations.iyzicoOM.oMGonder }}</button>
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
", "WebBundle:Partials:_cashPackageOfferModal.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/Partials/_cashPackageOfferModal.html.twig");
    }
}
