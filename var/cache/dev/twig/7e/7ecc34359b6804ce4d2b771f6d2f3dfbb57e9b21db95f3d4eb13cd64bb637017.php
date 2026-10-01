<?php

/* WebBundle:Partials:_signupModal.html.twig */
class __TwigTemplate_6c4000a7a1076bc3575ce8f943e53c52999754fb551933804597b2893f37f5e0 extends Twig_Template
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
        $__internal_b9768ee01dc953c1297c2b2df1caed820dd877ebd2846e48b1624023b01e22c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9768ee01dc953c1297c2b2df1caed820dd877ebd2846e48b1624023b01e22c4->enter($__internal_b9768ee01dc953c1297c2b2df1caed820dd877ebd2846e48b1624023b01e22c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Partials:_signupModal.html.twig"));

        $__internal_9f28e20d9a5d83000b888b20fcaae0541e83e460d300e1eeb8ec9271f1200ca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f28e20d9a5d83000b888b20fcaae0541e83e460d300e1eeb8ec9271f1200ca5->enter($__internal_9f28e20d9a5d83000b888b20fcaae0541e83e460d300e1eeb8ec9271f1200ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Partials:_signupModal.html.twig"));

        // line 1
        echo "<div class=\"modal fade signup-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\">
    <div class=\"modal-dialog signup-modal__wrapper\" role=\"document\">
        <button type=\"button\" class=\"modal-close\" data-dismiss=\"modal\">
            <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        </button>
        <div class=\"modal-content\">
            <div class=\"row full-height\">
                <div class=\"col-md-7 col-xs-12 no-gutter\">
                    <div class=\"signup-modal__info\">
                        <h2 class=\"signup-modal--title\">";
        // line 10
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoSignupModal", array()), "SignupModalTitle", array());
        echo "</h2>
                        <p class=\"signup-modal--content\">
                            ";
        // line 12
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoSignupModal", array()), "SignupModalDescription", array());
        echo "
                        </p>
                        <a target=\"_blankk\" href=\"https://merchant.iyzipay.com/login\" title=\"login\"><span class=\"signup-modal--link\">";
        // line 14
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoSignupModal", array()), "SingupModalAlreadyMember", array());
        echo " ";
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoSignupModal", array()), "SignupModalLogin", array());
        echo " <i class=\"fa fa-arrow-circle-right\"></i></span></a>
                    </div>
                </div>

                <div class=\"col-md-5 col-xs-12 no-gutter full-height\">
                    <div class=\"signup-modal__form\">
                        <form name=\"signup-form\" id=\"Popup_UyeOl_Form\" class=\"signup-form-popup\" action=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("form_sign_up");
        echo "\" method=\"POST\">
                            <input type=\"hidden\" id=\"csrf-token\" name=\"_csrf_token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("sign-up"), "html", null, true);
        echo "\">
                            <div class=\"row m-b-20\">
                                <input type=\"email\" name=\"email\" id=\"email\" class=\"input-form input-form--large\" placeholder=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoSignupModal", array()), "SignupModalEmail", array()), "html", null, true);
        echo "\" required />
                            </div>

                            <div class=\"row m-b-20\">
                                <input type=\"text\" name=\"phone\" id=\"phone\" class=\"input-form input-form--large\" placeholder=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoSignupModal", array()), "SignupModalPhone", array()), "html", null, true);
        echo "\" required />
                            </div>

                            <div class=\"row m-b-20\">
                                <input type=\"text\" name=\"website\" id=\"website\" class=\"input-form input-form--large\" placeholder=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoSignupModal", array()), "SignupModalWebsite", array()), "html", null, true);
        echo "\" required />
                            </div>

                            <div class=\"row m-b-20 password-field-holder\">
                                <div class=\"tooltiptext\">
                                    <span class=\"pass-length\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoSignupModal", array()), "SekizKarakter", array()), "html", null, true);
        echo "</span>
                                    <span class=\"pass-lower\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoSignupModal", array()), "BirKucukHarf", array()), "html", null, true);
        echo "</span>
                                    <span class=\"pass-upper\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoSignupModal", array()), "BirBuyukHarf", array()), "html", null, true);
        echo "</span>
                                    <span class=\"pass-number\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoSignupModal", array()), "BirRakam", array()), "html", null, true);
        echo "</span>
                                </div>
                                <input type=\"password\" name=\"password\" id=\"passwordPopup\" class=\"input-form input-form--large password-input\" placeholder=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoSignupModal", array()), "SignupModalPassword", array()), "html", null, true);
        echo "\" required />
                            </div>

                            <div class=\"row m-b-20\">
                                <input type=\"password\" name=\"passwordRepeat\" id=\"passwordRepeat\" class=\"input-form input-form--large\" placeholder=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoSignupModal", array()), "SignupModalPasswordRepeat", array()), "html", null, true);
        echo "\" required />
                            </div>
                            <input type=\"submit\"
                                   style=\"position: absolute; left: -9999px; width: 1px; height: 1px;\"
                                   tabindex=\"-1\" />
                            ";
        // line 50
        if (($context["shouldShowCaptcha"] ?? $this->getContext($context, "shouldShowCaptcha"))) {
            // line 51
            echo "                                <div class=\"row\" id=\"submit-button-holder-signup\" style=\"display:none;\">
                                    <input type=\"hidden\" name=\"recaptcha-response\" value=\"\" id=\"recaptcha-value-signup\" />
                                    <button onclick=\"javascript:\$('.signup-form-popup')\" type=\"submit\" title=\"\" class=\"button button__calltoaction button__full-width\">";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoSignupModal", array()), "SignupModalStartMembership", array()), "html", null, true);
            echo "</button>
                                </div>
                                <div class=\"row\" id=\"recaptcha-holder-signup\"></div>
                            ";
        } else {
            // line 57
            echo "                                <div class=\"row\" id=\"submit-button-holder-signup\">
                                    <button onclick=\"javascript:\$('.signup-form-popup')\" type=\"submit\" title=\"\" class=\"button button__calltoaction button__full-width\">";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoSignupModal", array()), "SignupModalStartMembership", array()), "html", null, true);
            echo "</button>
                                </div>
                            ";
        }
        // line 61
        echo "                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_b9768ee01dc953c1297c2b2df1caed820dd877ebd2846e48b1624023b01e22c4->leave($__internal_b9768ee01dc953c1297c2b2df1caed820dd877ebd2846e48b1624023b01e22c4_prof);

        
        $__internal_9f28e20d9a5d83000b888b20fcaae0541e83e460d300e1eeb8ec9271f1200ca5->leave($__internal_9f28e20d9a5d83000b888b20fcaae0541e83e460d300e1eeb8ec9271f1200ca5_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Partials:_signupModal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 61,  136 => 58,  133 => 57,  126 => 53,  122 => 51,  120 => 50,  112 => 45,  105 => 41,  100 => 39,  96 => 38,  92 => 37,  88 => 36,  80 => 31,  73 => 27,  66 => 23,  61 => 21,  57 => 20,  46 => 14,  41 => 12,  36 => 10,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade signup-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\">
    <div class=\"modal-dialog signup-modal__wrapper\" role=\"document\">
        <button type=\"button\" class=\"modal-close\" data-dismiss=\"modal\">
            <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        </button>
        <div class=\"modal-content\">
            <div class=\"row full-height\">
                <div class=\"col-md-7 col-xs-12 no-gutter\">
                    <div class=\"signup-modal__info\">
                        <h2 class=\"signup-modal--title\">{{ translations.iyzicoSignupModal.SignupModalTitle|raw }}</h2>
                        <p class=\"signup-modal--content\">
                            {{ translations.iyzicoSignupModal.SignupModalDescription|raw }}
                        </p>
                        <a target=\"_blankk\" href=\"https://merchant.iyzipay.com/login\" title=\"login\"><span class=\"signup-modal--link\">{{ translations.iyzicoSignupModal.SingupModalAlreadyMember|raw }} {{ translations.iyzicoSignupModal.SignupModalLogin|raw }} <i class=\"fa fa-arrow-circle-right\"></i></span></a>
                    </div>
                </div>

                <div class=\"col-md-5 col-xs-12 no-gutter full-height\">
                    <div class=\"signup-modal__form\">
                        <form name=\"signup-form\" id=\"Popup_UyeOl_Form\" class=\"signup-form-popup\" action=\"{{ path('form_sign_up') }}\" method=\"POST\">
                            <input type=\"hidden\" id=\"csrf-token\" name=\"_csrf_token\" value=\"{{ csrf_token('sign-up') }}\">
                            <div class=\"row m-b-20\">
                                <input type=\"email\" name=\"email\" id=\"email\" class=\"input-form input-form--large\" placeholder=\"{{ translations.iyzicoSignupModal.SignupModalEmail }}\" required />
                            </div>

                            <div class=\"row m-b-20\">
                                <input type=\"text\" name=\"phone\" id=\"phone\" class=\"input-form input-form--large\" placeholder=\"{{ translations.iyzicoSignupModal.SignupModalPhone }}\" required />
                            </div>

                            <div class=\"row m-b-20\">
                                <input type=\"text\" name=\"website\" id=\"website\" class=\"input-form input-form--large\" placeholder=\"{{ translations.iyzicoSignupModal.SignupModalWebsite }}\" required />
                            </div>

                            <div class=\"row m-b-20 password-field-holder\">
                                <div class=\"tooltiptext\">
                                    <span class=\"pass-length\">{{ translations.iyzicoSignupModal.SekizKarakter }}</span>
                                    <span class=\"pass-lower\">{{ translations.iyzicoSignupModal.BirKucukHarf }}</span>
                                    <span class=\"pass-upper\">{{ translations.iyzicoSignupModal.BirBuyukHarf }}</span>
                                    <span class=\"pass-number\">{{ translations.iyzicoSignupModal.BirRakam }}</span>
                                </div>
                                <input type=\"password\" name=\"password\" id=\"passwordPopup\" class=\"input-form input-form--large password-input\" placeholder=\"{{ translations.iyzicoSignupModal.SignupModalPassword }}\" required />
                            </div>

                            <div class=\"row m-b-20\">
                                <input type=\"password\" name=\"passwordRepeat\" id=\"passwordRepeat\" class=\"input-form input-form--large\" placeholder=\"{{ translations.iyzicoSignupModal.SignupModalPasswordRepeat }}\" required />
                            </div>
                            <input type=\"submit\"
                                   style=\"position: absolute; left: -9999px; width: 1px; height: 1px;\"
                                   tabindex=\"-1\" />
                            {% if shouldShowCaptcha %}
                                <div class=\"row\" id=\"submit-button-holder-signup\" style=\"display:none;\">
                                    <input type=\"hidden\" name=\"recaptcha-response\" value=\"\" id=\"recaptcha-value-signup\" />
                                    <button onclick=\"javascript:\$('.signup-form-popup')\" type=\"submit\" title=\"\" class=\"button button__calltoaction button__full-width\">{{ translations.iyzicoSignupModal.SignupModalStartMembership }}</button>
                                </div>
                                <div class=\"row\" id=\"recaptcha-holder-signup\"></div>
                            {% else %}
                                <div class=\"row\" id=\"submit-button-holder-signup\">
                                    <button onclick=\"javascript:\$('.signup-form-popup')\" type=\"submit\" title=\"\" class=\"button button__calltoaction button__full-width\">{{ translations.iyzicoSignupModal.SignupModalStartMembership }}</button>
                                </div>
                            {% endif %}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
", "WebBundle:Partials:_signupModal.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/Partials/_signupModal.html.twig");
    }
}
