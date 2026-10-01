<?php

/* WebBundle:LandingPage:newMerchant.html.twig */
class __TwigTemplate_397a8e20c2bd37c174f17958394f3d9a87e3377257e646ce4729fdb47097cdf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::landingPage.html.twig", "WebBundle:LandingPage:newMerchant.html.twig", 1);
        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'description' => array($this, 'block_description'),
            'openGraph' => array($this, 'block_openGraph'),
            'headerClasses' => array($this, 'block_headerClasses'),
            'bodyStyle' => array($this, 'block_bodyStyle'),
            'bodyClass' => array($this, 'block_bodyClass'),
            'headContent' => array($this, 'block_headContent'),
            'main' => array($this, 'block_main'),
            'footerContent' => array($this, 'block_footerContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::landingPage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_986b2394c300cae5ff2cbb166799dfac45e9fc4f2128a024a402845f571f1f1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_986b2394c300cae5ff2cbb166799dfac45e9fc4f2128a024a402845f571f1f1e->enter($__internal_986b2394c300cae5ff2cbb166799dfac45e9fc4f2128a024a402845f571f1f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:LandingPage:newMerchant.html.twig"));

        $__internal_be2afda6b2c0dd287ee2e0c01424b05df7af74c86451e26b1ce62f5bd9e90ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be2afda6b2c0dd287ee2e0c01424b05df7af74c86451e26b1ce62f5bd9e90ce6->enter($__internal_be2afda6b2c0dd287ee2e0c01424b05df7af74c86451e26b1ce62f5bd9e90ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:LandingPage:newMerchant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_986b2394c300cae5ff2cbb166799dfac45e9fc4f2128a024a402845f571f1f1e->leave($__internal_986b2394c300cae5ff2cbb166799dfac45e9fc4f2128a024a402845f571f1f1e_prof);

        
        $__internal_be2afda6b2c0dd287ee2e0c01424b05df7af74c86451e26b1ce62f5bd9e90ce6->leave($__internal_be2afda6b2c0dd287ee2e0c01424b05df7af74c86451e26b1ce62f5bd9e90ce6_prof);

    }

    // line 2
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_f1c6594f70c4ef104ebfff2d856361d8646997fc812ae2e3baab217a2a0c34ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1c6594f70c4ef104ebfff2d856361d8646997fc812ae2e3baab217a2a0c34ea->enter($__internal_f1c6594f70c4ef104ebfff2d856361d8646997fc812ae2e3baab217a2a0c34ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_2e3091b38fee61ac102a3e5d4ff8571bd14c1372486fd4e70e962c0ddb0f66c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e3091b38fee61ac102a3e5d4ff8571bd14c1372486fd4e70e962c0ddb0f66c3->enter($__internal_2e3091b38fee61ac102a3e5d4ff8571bd14c1372486fd4e70e962c0ddb0f66c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["pageContents"] ?? $this->getContext($context, "pageContents")), "seo", array()), "title", array()), "html", null, true);
        
        $__internal_2e3091b38fee61ac102a3e5d4ff8571bd14c1372486fd4e70e962c0ddb0f66c3->leave($__internal_2e3091b38fee61ac102a3e5d4ff8571bd14c1372486fd4e70e962c0ddb0f66c3_prof);

        
        $__internal_f1c6594f70c4ef104ebfff2d856361d8646997fc812ae2e3baab217a2a0c34ea->leave($__internal_f1c6594f70c4ef104ebfff2d856361d8646997fc812ae2e3baab217a2a0c34ea_prof);

    }

    // line 3
    public function block_description($context, array $blocks = array())
    {
        $__internal_4c747c39309e73c2a6ebcecf94f12554ca2277a70812b4b75fadc5efd339d3d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c747c39309e73c2a6ebcecf94f12554ca2277a70812b4b75fadc5efd339d3d7->enter($__internal_4c747c39309e73c2a6ebcecf94f12554ca2277a70812b4b75fadc5efd339d3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_9bbd87b73d0dd515bf5c4b420ac56573be62acb588b4dc67aacc8a38a6dda4a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bbd87b73d0dd515bf5c4b420ac56573be62acb588b4dc67aacc8a38a6dda4a7->enter($__internal_9bbd87b73d0dd515bf5c4b420ac56573be62acb588b4dc67aacc8a38a6dda4a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["pageContents"] ?? $this->getContext($context, "pageContents")), "seo", array()), "description", array()), "html", null, true);
        
        $__internal_9bbd87b73d0dd515bf5c4b420ac56573be62acb588b4dc67aacc8a38a6dda4a7->leave($__internal_9bbd87b73d0dd515bf5c4b420ac56573be62acb588b4dc67aacc8a38a6dda4a7_prof);

        
        $__internal_4c747c39309e73c2a6ebcecf94f12554ca2277a70812b4b75fadc5efd339d3d7->leave($__internal_4c747c39309e73c2a6ebcecf94f12554ca2277a70812b4b75fadc5efd339d3d7_prof);

    }

    // line 4
    public function block_openGraph($context, array $blocks = array())
    {
        $__internal_28b428f62901ea3dd97f9580be1d10ffa05b79481e0a58cb7ed34f30d13db356 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28b428f62901ea3dd97f9580be1d10ffa05b79481e0a58cb7ed34f30d13db356->enter($__internal_28b428f62901ea3dd97f9580be1d10ffa05b79481e0a58cb7ed34f30d13db356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "openGraph"));

        $__internal_f7573205a6f969b838d71ae4684926bf0b441f358d941513d4ebfb76446a27a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7573205a6f969b838d71ae4684926bf0b441f358d941513d4ebfb76446a27a8->enter($__internal_f7573205a6f969b838d71ae4684926bf0b441f358d941513d4ebfb76446a27a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "openGraph"));

        // line 5
        echo "    <meta name=\"robots\" content=\"noindex\" />
    <meta property=\"og:title\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["pageContents"] ?? $this->getContext($context, "pageContents")), "seo", array()), "ogTitle", array()), "html", null, true);
        echo "\" />
    <meta property=\"og:image\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["pageContents"] ?? $this->getContext($context, "pageContents")), "seo", array()), "ogImage", array()), "html", null, true);
        echo "\" />
    <meta property=\"og:description\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["pageContents"] ?? $this->getContext($context, "pageContents")), "seo", array()), "ogDescription", array()), "html", null, true);
        echo "\" />
";
        
        $__internal_f7573205a6f969b838d71ae4684926bf0b441f358d941513d4ebfb76446a27a8->leave($__internal_f7573205a6f969b838d71ae4684926bf0b441f358d941513d4ebfb76446a27a8_prof);

        
        $__internal_28b428f62901ea3dd97f9580be1d10ffa05b79481e0a58cb7ed34f30d13db356->leave($__internal_28b428f62901ea3dd97f9580be1d10ffa05b79481e0a58cb7ed34f30d13db356_prof);

    }

    // line 10
    public function block_headerClasses($context, array $blocks = array())
    {
        $__internal_67f249625605c7bd5fa46d67a52b7f12226db54a856a632c3869c1018cfb0064 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67f249625605c7bd5fa46d67a52b7f12226db54a856a632c3869c1018cfb0064->enter($__internal_67f249625605c7bd5fa46d67a52b7f12226db54a856a632c3869c1018cfb0064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerClasses"));

        $__internal_e5a3d419cad4ef04d50ebef0a8a675574f5cae21029983c5c20bf371e34cca13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5a3d419cad4ef04d50ebef0a8a675574f5cae21029983c5c20bf371e34cca13->enter($__internal_e5a3d419cad4ef04d50ebef0a8a675574f5cae21029983c5c20bf371e34cca13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerClasses"));

        echo "full-height";
        
        $__internal_e5a3d419cad4ef04d50ebef0a8a675574f5cae21029983c5c20bf371e34cca13->leave($__internal_e5a3d419cad4ef04d50ebef0a8a675574f5cae21029983c5c20bf371e34cca13_prof);

        
        $__internal_67f249625605c7bd5fa46d67a52b7f12226db54a856a632c3869c1018cfb0064->leave($__internal_67f249625605c7bd5fa46d67a52b7f12226db54a856a632c3869c1018cfb0064_prof);

    }

    // line 11
    public function block_bodyStyle($context, array $blocks = array())
    {
        $__internal_99a4e82fc876f995e185d2b5316acf9c73556335eeefbb4b4231d24a74c2ae54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99a4e82fc876f995e185d2b5316acf9c73556335eeefbb4b4231d24a74c2ae54->enter($__internal_99a4e82fc876f995e185d2b5316acf9c73556335eeefbb4b4231d24a74c2ae54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyStyle"));

        $__internal_21144ee6bdd6295f596fef65cfeccbd895d0659057733df009f4d2bde20c2d24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21144ee6bdd6295f596fef65cfeccbd895d0659057733df009f4d2bde20c2d24->enter($__internal_21144ee6bdd6295f596fef65cfeccbd895d0659057733df009f4d2bde20c2d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyStyle"));

        echo "background-color:transparent";
        
        $__internal_21144ee6bdd6295f596fef65cfeccbd895d0659057733df009f4d2bde20c2d24->leave($__internal_21144ee6bdd6295f596fef65cfeccbd895d0659057733df009f4d2bde20c2d24_prof);

        
        $__internal_99a4e82fc876f995e185d2b5316acf9c73556335eeefbb4b4231d24a74c2ae54->leave($__internal_99a4e82fc876f995e185d2b5316acf9c73556335eeefbb4b4231d24a74c2ae54_prof);

    }

    // line 13
    public function block_bodyClass($context, array $blocks = array())
    {
        $__internal_f2ec58343f1a8c5c6d27bc400469b28ec67bae84ebc85dfd0f2d54e961aa18e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2ec58343f1a8c5c6d27bc400469b28ec67bae84ebc85dfd0f2d54e961aa18e4->enter($__internal_f2ec58343f1a8c5c6d27bc400469b28ec67bae84ebc85dfd0f2d54e961aa18e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyClass"));

        $__internal_8727edeba6235a5b75c0a3a51e5ae401590a6153fb1c1ea2d90cf61af4834c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8727edeba6235a5b75c0a3a51e5ae401590a6153fb1c1ea2d90cf61af4834c66->enter($__internal_8727edeba6235a5b75c0a3a51e5ae401590a6153fb1c1ea2d90cf61af4834c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyClass"));

        echo " new-merchant mainMenu";
        
        $__internal_8727edeba6235a5b75c0a3a51e5ae401590a6153fb1c1ea2d90cf61af4834c66->leave($__internal_8727edeba6235a5b75c0a3a51e5ae401590a6153fb1c1ea2d90cf61af4834c66_prof);

        
        $__internal_f2ec58343f1a8c5c6d27bc400469b28ec67bae84ebc85dfd0f2d54e961aa18e4->leave($__internal_f2ec58343f1a8c5c6d27bc400469b28ec67bae84ebc85dfd0f2d54e961aa18e4_prof);

    }

    // line 14
    public function block_headContent($context, array $blocks = array())
    {
        $__internal_aa254684e7bd4c4aa4dcb0051dcbda18c0c59a9ba737a385ae43befdf76eccfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa254684e7bd4c4aa4dcb0051dcbda18c0c59a9ba737a385ae43befdf76eccfd->enter($__internal_aa254684e7bd4c4aa4dcb0051dcbda18c0c59a9ba737a385ae43befdf76eccfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headContent"));

        $__internal_fe271b99d50f3e80aea2deadaed37a75e2dc0e198c5ec220b6469160093dc6b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe271b99d50f3e80aea2deadaed37a75e2dc0e198c5ec220b6469160093dc6b9->enter($__internal_fe271b99d50f3e80aea2deadaed37a75e2dc0e198c5ec220b6469160093dc6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headContent"));

        // line 15
        echo "    ";
        $this->loadTemplate("@root/Partials/_registerHeader.html.twig", "WebBundle:LandingPage:newMerchant.html.twig", 15)->display($context);
        
        $__internal_fe271b99d50f3e80aea2deadaed37a75e2dc0e198c5ec220b6469160093dc6b9->leave($__internal_fe271b99d50f3e80aea2deadaed37a75e2dc0e198c5ec220b6469160093dc6b9_prof);

        
        $__internal_aa254684e7bd4c4aa4dcb0051dcbda18c0c59a9ba737a385ae43befdf76eccfd->leave($__internal_aa254684e7bd4c4aa4dcb0051dcbda18c0c59a9ba737a385ae43befdf76eccfd_prof);

    }

    // line 17
    public function block_main($context, array $blocks = array())
    {
        $__internal_9cac0424321a5a3eb94753ca30a714a3e96af9bcbb5692af744a39d31048bea4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cac0424321a5a3eb94753ca30a714a3e96af9bcbb5692af744a39d31048bea4->enter($__internal_9cac0424321a5a3eb94753ca30a714a3e96af9bcbb5692af744a39d31048bea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_9817bdb572124e432c2036645a5968131b11c667a69e7535ab5061897a1e622d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9817bdb572124e432c2036645a5968131b11c667a69e7535ab5061897a1e622d->enter($__internal_9817bdb572124e432c2036645a5968131b11c667a69e7535ab5061897a1e622d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 18
        echo "  <div class=\"newMerchantContainer\">
    <div class=\"newMerchantForm\">
      <div class=\"form-wrap\">
        <div class=\"formTitle\">";
        // line 21
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoNewMerchant", array()), "newFormTitle", array());
        echo "</div>
        <form name=\"signup-form-final\" id=\"NewMember_Register_Form\" class=\"signup-form-final\" action=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("form_new_member_signup");
        echo "\" method=\"POST\" >
          <div class=\"input-wrap\">
            <div class=\"input-container\">
              <input type=\"text\" id=\"name\" name=\"name\" minlength=\"2\" autocomplete=\"off\" placeholder=\"";
        // line 25
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoNewMerchant", array()), "newOwnerName", array());
        echo "\">
            </div>
          </div>
          <div class=\"input-wrap\">
            <div class=\"input-container\">
              <input type=\"text\" name=\"surname\" value=\"\" minlength=\"2\" autocomplete=\"off\" placeholder=\"";
        // line 30
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoNewMerchant", array()), "newOwnerSurname", array());
        echo "\">
            </div>
          </div>
          <div class=\"input-wrap\">
            <div class=\"input-container\">
              <input type=\"text\" class=\"emailVal\" name=\"email\" autocomplete=\"off\" value=\"\" onkeypress=\"return isEmail(event)\" placeholder=\"";
        // line 35
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoNewMerchant", array()), "newEposta", array());
        echo "\">
            </div>
          </div>
          <div class=\"input-wrap\">
            <div class=\"input-container\">
              <input type=\"text\" autocomplete=\"off\" class=\"phone-input phoneControl\" id=\"phone\" name=\"phone\" value=\"\" minlength=\"7\" onkeypress=\"return phoneControl(event)\" placeholder=\"";
        // line 40
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoNewMerchant", array()), "newPhoneNumber", array());
        echo "\">
            </div>
          </div>
          <div class=\"input-wrap\">
            <div class=\"input-container password-field-holder\" id=\"passwordControl\">
              <input type=\"password\" id=\"password\" name=\"password\" value=\"\" class=\"password-input\" onkeypress=\"return isNumeric(event)\" pattern=\"[0-9]*\" inputmode=\"numeric\" maxlength=\"6\" autocomplete=\"off\" placeholder=\"";
        // line 45
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoNewMerchant", array()), "newPassword", array());
        echo "\">
              <input type=\"hidden\" id=\"csrf-token\" name=\"_csrf_token\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("new-member-sign-up"), "html", null, true);
        echo "\">
              <div class=\"pass-eye\">
                <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/pass-eye.svg"), "html", null, true);
        echo "\">
                <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/pass-eye-off.svg"), "html", null, true);
        echo "\">
              </div>
              <div class=\"tooltiptext\">
                  <span class=\"sixDigit\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoSignupModal", array()), "isSixDigit", array()), "html", null, true);
        echo "</span>
                  <span class=\"hasTwoConsecutiveNumbers\">";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoSignupModal", array()), "hasUniqueNumbers", array()), "html", null, true);
        echo "</span>
                  <span class=\"hasThreeTimesRepeatedOneBlock\">";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoSignupModal", array()), "hasThreeTimesRepeatedOneBlock", array()), "html", null, true);
        echo "</span>
                  <span class=\"hasThreeTimesRepeatedTwoBlock\">";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoSignupModal", array()), "hasThreeTimesRepeatedTwoBlock", array()), "html", null, true);
        echo "</span>
                  <span class=\"hasTreeUniqNumbers\">";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoSignupModal", array()), "isFirstThreeAndLastThreeSame", array()), "html", null, true);
        echo "</span>
                  <span class=\"isFirstThreeAndLastThreeSame\">";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoSignupModal", array()), "hasConsecutiveNumbers", array()), "html", null, true);
        echo "</span>
              </div>
            </div>
          </div>
          <input type=\"hidden\" name=\"memberType\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, ($context["memberType"] ?? $this->getContext($context, "memberType")), "html", null, true);
        echo "\">
          <input type=\"hidden\" name=\"source\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, ($context["source"] ?? $this->getContext($context, "source")), "html", null, true);
        echo "\">
          <input type=\"submit\" class=\"g-recaptcha\" data-sitekey=\"6LcdQz4UAAAAAC2WQlZInj-6cmv3GwZR1bGg4S8J\" data-size=\"invisible\" data-callback=\"formSubmit\" style=\"position: absolute; left: -9999px; width: 1px; height: 1px;\" tabindex=\"-1\" />
          <div class=\"row\" id=\"submit-button-new-member-page\">
            ";
        // line 65
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "memberType"), "method") == "PERSONAL")) {
            // line 66
            echo "              <input type=\"submit\" class=\"real-submit-button button primary\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoNewMerchant", array()), "newFormButtonPersonal", array()), "html", null, true);
            echo "\">
            ";
        } else {
            // line 68
            echo "              <input type=\"submit\" class=\"real-submit-button button primary\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoNewMerchant", array()), "newFormButtonBusiness", array()), "html", null, true);
            echo "\">
            ";
        }
        // line 70
        echo "          </div>
          <div class=\"input-wrap\">
            ";
        // line 72
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_locale"), "method") == "tr")) {
            // line 73
            echo "              <p class=\"padBot\">";
            echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoNewMerchant", array()), "newFormClarificationText", array());
            echo " <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("privacy_policy");
            echo "#kiisel-verilerin-lenmesine-likin-aydnlatma-metni\" target=\"_blank\" class=\"button buttonText\">";
            echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoNewMerchant", array()), "newFormClarificationButtonText", array());
            echo "</a>";
            echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoNewMerchant", array()), "newFormClarificationTextTwo", array());
            echo "</p>
            ";
        } else {
            // line 75
            echo "              <p class=\"padBot\">";
            echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoNewMerchant", array()), "newFormClarificationText", array());
            echo " <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("privacy_policy");
            echo "#information-notice-regarding-personal-data-processing\" target=\"_blank\" class=\"button buttonText\">";
            echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoNewMerchant", array()), "newFormClarificationButtonText", array());
            echo "</a>";
            echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoNewMerchant", array()), "newFormClarificationTextTwo", array());
            echo "</p>
            ";
        }
        // line 77
        echo "          </div>
        </form>
      </div>
      <div class=\"haveAccount\">
        <span>";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoNewMerchant", array()), "newFormLoginButton", array()), "html", null, true);
        echo "</span>
        <div class=\"buttonGroup\">
          <a href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoNewMerchant", array()), "newFormLoginUrl", array()), "html", null, true);
        echo "\" class=\"button basic\"><i class=\"icon icon--icn-shop\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "login", array()), "html", null, true);
        echo "</a>
        </div>
      </div>
    </div>
    <div class=\"info-container\">
      <div class=\"newMerchantContent\">
        <div class=\"title\"><span>";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoNewMerchant", array()), "newContentTitleOne", array()), "html", null, true);
        echo "</span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoNewMerchant", array()), "newContentTitleTwo", array()), "html", null, true);
        echo "</div>
        <ul>
          <li><i>1.</i> ";
        // line 91
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoNewMerchant", array()), "newSectionOne", array());
        echo "</li>
          <li><i>2.</i> ";
        // line 92
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoNewMerchant", array()), "newSectionTwo", array());
        echo "</li>
          <li><i>3.</i> ";
        // line 93
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoNewMerchant", array()), "newSectionThree", array());
        echo "</li>
        </ul>
        <div class=\"haveAccount\">
          <span>";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoNewMerchant", array()), "newFormLoginButton", array()), "html", null, true);
        echo "</span>
          <div class=\"buttonGroup\">
            <a href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoNewMerchant", array()), "newFormLoginUrl", array()), "html", null, true);
        echo "\" class=\"button basic\"><i class=\"icon icon--icn-shop\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "login", array()), "html", null, true);
        echo "</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<script>
  function formSubmit (token) {
    \$('#NewMember_Register_Form').submit();
      return true;
    }
</script>
<script
  src='https://www.google.com/recaptcha/api.js?hl=";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_locale"), "method"), "html", null, true);
        echo "'
  async defer></script>
";
        
        $__internal_9817bdb572124e432c2036645a5968131b11c667a69e7535ab5061897a1e622d->leave($__internal_9817bdb572124e432c2036645a5968131b11c667a69e7535ab5061897a1e622d_prof);

        
        $__internal_9cac0424321a5a3eb94753ca30a714a3e96af9bcbb5692af744a39d31048bea4->leave($__internal_9cac0424321a5a3eb94753ca30a714a3e96af9bcbb5692af744a39d31048bea4_prof);

    }

    // line 114
    public function block_footerContent($context, array $blocks = array())
    {
        $__internal_99965bd01b9586069f32e21bfdc664adb859b9ace0fb00b37b49b6772a37bd2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99965bd01b9586069f32e21bfdc664adb859b9ace0fb00b37b49b6772a37bd2d->enter($__internal_99965bd01b9586069f32e21bfdc664adb859b9ace0fb00b37b49b6772a37bd2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerContent"));

        $__internal_3e32bd0a9082e67e51b78422ecc949dc083fd5508f252d7cac6e3e3dbff80ff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e32bd0a9082e67e51b78422ecc949dc083fd5508f252d7cac6e3e3dbff80ff5->enter($__internal_3e32bd0a9082e67e51b78422ecc949dc083fd5508f252d7cac6e3e3dbff80ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerContent"));

        // line 115
        echo "  ";
        $this->loadTemplate("@root/Partials/_footerShort.html.twig", "WebBundle:LandingPage:newMerchant.html.twig", 115)->display($context);
        
        $__internal_3e32bd0a9082e67e51b78422ecc949dc083fd5508f252d7cac6e3e3dbff80ff5->leave($__internal_3e32bd0a9082e67e51b78422ecc949dc083fd5508f252d7cac6e3e3dbff80ff5_prof);

        
        $__internal_99965bd01b9586069f32e21bfdc664adb859b9ace0fb00b37b49b6772a37bd2d->leave($__internal_99965bd01b9586069f32e21bfdc664adb859b9ace0fb00b37b49b6772a37bd2d_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:LandingPage:newMerchant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  434 => 115,  425 => 114,  412 => 111,  394 => 98,  389 => 96,  383 => 93,  379 => 92,  375 => 91,  368 => 89,  357 => 83,  352 => 81,  346 => 77,  334 => 75,  322 => 73,  320 => 72,  316 => 70,  310 => 68,  304 => 66,  302 => 65,  296 => 62,  292 => 61,  285 => 57,  281 => 56,  277 => 55,  273 => 54,  269 => 53,  265 => 52,  259 => 49,  255 => 48,  250 => 46,  246 => 45,  238 => 40,  230 => 35,  222 => 30,  214 => 25,  208 => 22,  204 => 21,  199 => 18,  190 => 17,  179 => 15,  170 => 14,  152 => 13,  134 => 11,  116 => 10,  104 => 8,  100 => 7,  96 => 6,  93 => 5,  84 => 4,  66 => 3,  48 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::landingPage.html.twig\" %}
{% block pageTitle %}{{ pageContents.seo.title }}{% endblock %}
{% block description %}{{ pageContents.seo.description }}{% endblock %}
{% block openGraph %}
    <meta name=\"robots\" content=\"noindex\" />
    <meta property=\"og:title\" content=\"{{ pageContents.seo.ogTitle }}\" />
    <meta property=\"og:image\" content=\"{{ pageContents.seo.ogImage }}\" />
    <meta property=\"og:description\" content=\"{{ pageContents.seo.ogDescription }}\" />
{% endblock %}
{% block headerClasses %}full-height{% endblock %}
{% block bodyStyle %}background-color:transparent{% endblock %}

{% block bodyClass %} new-merchant mainMenu{% endblock %}
{% block headContent %}
    {% include '@root/Partials/_registerHeader.html.twig' %}
{% endblock %}
{% block main %}
  <div class=\"newMerchantContainer\">
    <div class=\"newMerchantForm\">
      <div class=\"form-wrap\">
        <div class=\"formTitle\">{{ translations.iyzicoNewMerchant.newFormTitle|raw }}</div>
        <form name=\"signup-form-final\" id=\"NewMember_Register_Form\" class=\"signup-form-final\" action=\"{{ path('form_new_member_signup') }}\" method=\"POST\" >
          <div class=\"input-wrap\">
            <div class=\"input-container\">
              <input type=\"text\" id=\"name\" name=\"name\" minlength=\"2\" autocomplete=\"off\" placeholder=\"{{ translations.iyzicoNewMerchant.newOwnerName|raw }}\">
            </div>
          </div>
          <div class=\"input-wrap\">
            <div class=\"input-container\">
              <input type=\"text\" name=\"surname\" value=\"\" minlength=\"2\" autocomplete=\"off\" placeholder=\"{{ translations.iyzicoNewMerchant.newOwnerSurname|raw }}\">
            </div>
          </div>
          <div class=\"input-wrap\">
            <div class=\"input-container\">
              <input type=\"text\" class=\"emailVal\" name=\"email\" autocomplete=\"off\" value=\"\" onkeypress=\"return isEmail(event)\" placeholder=\"{{ translations.iyzicoNewMerchant.newEposta|raw }}\">
            </div>
          </div>
          <div class=\"input-wrap\">
            <div class=\"input-container\">
              <input type=\"text\" autocomplete=\"off\" class=\"phone-input phoneControl\" id=\"phone\" name=\"phone\" value=\"\" minlength=\"7\" onkeypress=\"return phoneControl(event)\" placeholder=\"{{ translations.iyzicoNewMerchant.newPhoneNumber|raw }}\">
            </div>
          </div>
          <div class=\"input-wrap\">
            <div class=\"input-container password-field-holder\" id=\"passwordControl\">
              <input type=\"password\" id=\"password\" name=\"password\" value=\"\" class=\"password-input\" onkeypress=\"return isNumeric(event)\" pattern=\"[0-9]*\" inputmode=\"numeric\" maxlength=\"6\" autocomplete=\"off\" placeholder=\"{{ translations.iyzicoNewMerchant.newPassword|raw }}\">
              <input type=\"hidden\" id=\"csrf-token\" name=\"_csrf_token\" value=\"{{ csrf_token('new-member-sign-up') }}\">
              <div class=\"pass-eye\">
                <img src=\"{{ asset('assets/images/pass-eye.svg') }}\">
                <img src=\"{{ asset('assets/images/pass-eye-off.svg') }}\">
              </div>
              <div class=\"tooltiptext\">
                  <span class=\"sixDigit\">{{ translations.iyzicoSignupModal.isSixDigit }}</span>
                  <span class=\"hasTwoConsecutiveNumbers\">{{ translations.iyzicoSignupModal.hasUniqueNumbers }}</span>
                  <span class=\"hasThreeTimesRepeatedOneBlock\">{{ translations.iyzicoSignupModal.hasThreeTimesRepeatedOneBlock }}</span>
                  <span class=\"hasThreeTimesRepeatedTwoBlock\">{{ translations.iyzicoSignupModal.hasThreeTimesRepeatedTwoBlock }}</span>
                  <span class=\"hasTreeUniqNumbers\">{{ translations.iyzicoSignupModal.isFirstThreeAndLastThreeSame }}</span>
                  <span class=\"isFirstThreeAndLastThreeSame\">{{ translations.iyzicoSignupModal.hasConsecutiveNumbers }}</span>
              </div>
            </div>
          </div>
          <input type=\"hidden\" name=\"memberType\" value=\"{{ memberType }}\">
          <input type=\"hidden\" name=\"source\" value=\"{{ source }}\">
          <input type=\"submit\" class=\"g-recaptcha\" data-sitekey=\"6LcdQz4UAAAAAC2WQlZInj-6cmv3GwZR1bGg4S8J\" data-size=\"invisible\" data-callback=\"formSubmit\" style=\"position: absolute; left: -9999px; width: 1px; height: 1px;\" tabindex=\"-1\" />
          <div class=\"row\" id=\"submit-button-new-member-page\">
            {% if app.request.attributes.get('memberType') == \"PERSONAL\" %}
              <input type=\"submit\" class=\"real-submit-button button primary\" value=\"{{ translations.iyzicoNewMerchant.newFormButtonPersonal }}\">
            {% else %}
              <input type=\"submit\" class=\"real-submit-button button primary\" value=\"{{ translations.iyzicoNewMerchant.newFormButtonBusiness }}\">
            {% endif %}
          </div>
          <div class=\"input-wrap\">
            {% if app.request.attributes.get('_locale') == \"tr\" %}
              <p class=\"padBot\">{{ translations.iyzicoNewMerchant.newFormClarificationText|raw }} <a href=\"{{ path('privacy_policy') }}#kiisel-verilerin-lenmesine-likin-aydnlatma-metni\" target=\"_blank\" class=\"button buttonText\">{{ translations.iyzicoNewMerchant.newFormClarificationButtonText|raw }}</a>{{ translations.iyzicoNewMerchant.newFormClarificationTextTwo|raw }}</p>
            {% else %}
              <p class=\"padBot\">{{ translations.iyzicoNewMerchant.newFormClarificationText|raw }} <a href=\"{{ path('privacy_policy') }}#information-notice-regarding-personal-data-processing\" target=\"_blank\" class=\"button buttonText\">{{ translations.iyzicoNewMerchant.newFormClarificationButtonText|raw }}</a>{{ translations.iyzicoNewMerchant.newFormClarificationTextTwo|raw }}</p>
            {% endif %}
          </div>
        </form>
      </div>
      <div class=\"haveAccount\">
        <span>{{ translations.iyzicoNewMerchant.newFormLoginButton }}</span>
        <div class=\"buttonGroup\">
          <a href=\"{{ translations.iyzicoNewMerchant.newFormLoginUrl }}\" class=\"button basic\"><i class=\"icon icon--icn-shop\"></i> {{ translations.businessHeaderNavigation.login }}</a>
        </div>
      </div>
    </div>
    <div class=\"info-container\">
      <div class=\"newMerchantContent\">
        <div class=\"title\"><span>{{ translations.iyzicoNewMerchant.newContentTitleOne }}</span>{{ translations.iyzicoNewMerchant.newContentTitleTwo }}</div>
        <ul>
          <li><i>1.</i> {{ translations.iyzicoNewMerchant.newSectionOne|raw }}</li>
          <li><i>2.</i> {{ translations.iyzicoNewMerchant.newSectionTwo|raw }}</li>
          <li><i>3.</i> {{ translations.iyzicoNewMerchant.newSectionThree|raw }}</li>
        </ul>
        <div class=\"haveAccount\">
          <span>{{ translations.iyzicoNewMerchant.newFormLoginButton }}</span>
          <div class=\"buttonGroup\">
            <a href=\"{{ translations.iyzicoNewMerchant.newFormLoginUrl }}\" class=\"button basic\"><i class=\"icon icon--icn-shop\"></i> {{ translations.businessHeaderNavigation.login }}</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<script>
  function formSubmit (token) {
    \$('#NewMember_Register_Form').submit();
      return true;
    }
</script>
<script
  src='https://www.google.com/recaptcha/api.js?hl={{app.request.attributes.get('_locale')}}'
  async defer></script>
{% endblock %}
{% block footerContent %}
  {% include '@root/Partials/_footerShort.html.twig' %}
{% endblock %}
", "WebBundle:LandingPage:newMerchant.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/LandingPage/newMerchant.html.twig");
    }
}
