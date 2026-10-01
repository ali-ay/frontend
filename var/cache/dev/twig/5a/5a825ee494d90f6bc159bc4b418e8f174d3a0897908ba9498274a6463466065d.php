<?php

/* WebBundle:Partials:_businessPwiModal.html.twig */
class __TwigTemplate_87e65cd655ffba251d65826e88abd29c6ede68faeddb59ee0c24045396b26cf4 extends Twig_Template
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
        $__internal_3fa67527925d5bd1001271c1c27405fd0c056beee677d4edee48ec84ac8dcf18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fa67527925d5bd1001271c1c27405fd0c056beee677d4edee48ec84ac8dcf18->enter($__internal_3fa67527925d5bd1001271c1c27405fd0c056beee677d4edee48ec84ac8dcf18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Partials:_businessPwiModal.html.twig"));

        $__internal_df6ad20392128ea3186651d91034a4d3fcc738ecd39c1facbc40cc2050377673 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df6ad20392128ea3186651d91034a4d3fcc738ecd39c1facbc40cc2050377673->enter($__internal_df6ad20392128ea3186651d91034a4d3fcc738ecd39c1facbc40cc2050377673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Partials:_businessPwiModal.html.twig"));

        // line 1
        echo "<div class=\"modal fade businessPwiModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\">
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
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessPwiPopup", array()), "title", array());
        echo "</strong></h2>
                        <p>
                            ";
        // line 13
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessPwiPopup", array()), "descriptiom", array());
        echo "
                        </p>
                    </div>
                </div>

                <div class=\"offerForm\">
                    <div class=\"signup-modal__form\">
                        <form name=\"offer-form\" id=\"Popup_Lead_Form\" class=\"business-pwi-popup\" action=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("form_get_business_pwi");
        echo "\" method=\"POST\">
                            <input type=\"hidden\" id=\"csrf-token\" name=\"_csrf_token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("business-pwi"), "html", null, true);
        echo "\">

                            <div class=\"row m-b-20\">
                            <span>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "popupFormField", array()), "nameSurname", array()), "html", null, true);
        echo "</span>
                                <input type=\"text\" name=\"last_name\"  minlength=\"2\" autocomplete=\"off\" id=\"name\" class=\"input-form input-form--large\" required />
                            </div>
                            <div class=\"row m-b-20\">
                            <span>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "popupFormField", array()), "email", array()), "html", null, true);
        echo "</span>
                                <input type=\"email\" name=\"emailCash\" autocomplete=\"off\" id=\"email\" class=\"input-form input-form--large\" required />
                            </div>
                            <div class=\"row m-b-20\">
                            <span>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "popupFormField", array()), "phone", array()), "html", null, true);
        echo "</span>
                                <input type=\"tel\" pattern=\"[0-9]*\" name=\"mobile\" minlength=\"7\" autocomplete=\"off\" id=\"phone\" class=\"input-form input-form--large\" required />
                            </div>
                            <div class=\"row m-b-20\">
                            <span>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "popupFormField", array()), "webSite", array()), "html", null, true);
        echo "</span>
                                <input type=\"text\" name=\"url\" autocomplete=\"off\" id=\"website\" class=\"input-form input-form--large\" required />
                            </div>


                            ";
        // line 41
        if (($context["shouldShowCaptcha"] ?? $this->getContext($context, "shouldShowCaptcha"))) {
            // line 42
            echo "                                <div class=\"row\" id=\"submit-button-holder-offer\" style=\"display:none;\">
                                    <input type=\"hidden\" name=\"recaptcha-response\" value=\"\" id=\"recaptcha-value-offer\" />
                                    <button onclick=\"javascript:\$('.business-pwi-popup')\" type=\"submit\" title=\"\" class=\"button primary\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoOM", array()), "oMGonder", array()), "html", null, true);
            echo "</button>
                                </div>
                                <div class=\"row\" style=\"margin-left:-20px !important;\" id=\"recaptcha-holder-offer\">
                                </div>
                            ";
        } else {
            // line 49
            echo "                                <div class=\"row\">
                                    <button onclick=\"javascript:\$('.business-pwi-popup')\" type=\"submit\" title=\"\" class=\"button primary\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoOM", array()), "oMGonder", array()), "html", null, true);
            echo "</button>
                                </div>
                            ";
        }
        // line 53
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
        
        $__internal_3fa67527925d5bd1001271c1c27405fd0c056beee677d4edee48ec84ac8dcf18->leave($__internal_3fa67527925d5bd1001271c1c27405fd0c056beee677d4edee48ec84ac8dcf18_prof);

        
        $__internal_df6ad20392128ea3186651d91034a4d3fcc738ecd39c1facbc40cc2050377673->leave($__internal_df6ad20392128ea3186651d91034a4d3fcc738ecd39c1facbc40cc2050377673_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Partials:_businessPwiModal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 53,  108 => 50,  105 => 49,  97 => 44,  93 => 42,  91 => 41,  83 => 36,  76 => 32,  69 => 28,  62 => 24,  56 => 21,  52 => 20,  42 => 13,  37 => 11,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade businessPwiModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\">
    <div class=\"modal-dialog signup-modal__wrapper\" role=\"document\">

        <div class=\"modal-content\">
        <button type=\"button\" class=\"modal-close\" data-dismiss=\"modal\">
            <i class=\"icon icon--popup-close\" aria-hidden=\"true\"></i>
        </button>
            <div class=\"row full-height cashPackage\">
                <div class=\"offerContent\">
                    <div class=\"signup-modal__info\">
                        <h2><strong>{{ translations.businessPwiPopup.title|raw }}</strong></h2>
                        <p>
                            {{ translations.businessPwiPopup.descriptiom|raw }}
                        </p>
                    </div>
                </div>

                <div class=\"offerForm\">
                    <div class=\"signup-modal__form\">
                        <form name=\"offer-form\" id=\"Popup_Lead_Form\" class=\"business-pwi-popup\" action=\"{{ path('form_get_business_pwi') }}\" method=\"POST\">
                            <input type=\"hidden\" id=\"csrf-token\" name=\"_csrf_token\" value=\"{{ csrf_token('business-pwi') }}\">

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
                                    <button onclick=\"javascript:\$('.business-pwi-popup')\" type=\"submit\" title=\"\" class=\"button primary\">{{ translations.iyzicoOM.oMGonder }}</button>
                                </div>
                                <div class=\"row\" style=\"margin-left:-20px !important;\" id=\"recaptcha-holder-offer\">
                                </div>
                            {% else %}
                                <div class=\"row\">
                                    <button onclick=\"javascript:\$('.business-pwi-popup')\" type=\"submit\" title=\"\" class=\"button primary\">{{ translations.iyzicoOM.oMGonder }}</button>
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
", "WebBundle:Partials:_businessPwiModal.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/Partials/_businessPwiModal.html.twig");
    }
}
