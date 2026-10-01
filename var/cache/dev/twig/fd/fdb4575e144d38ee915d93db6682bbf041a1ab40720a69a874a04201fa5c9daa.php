<?php

/* @root/Partials/_businessHeader.html.twig */
class __TwigTemplate_dc64092e27675dd2014fb5fe4f09ae871c82b53f2140da9dd8149e6015511eb4 extends Twig_Template
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
        $__internal_c9fe82a63ad6c80ba5ca4739126b874212b811e67bf27efad39eb59e21ecc736 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9fe82a63ad6c80ba5ca4739126b874212b811e67bf27efad39eb59e21ecc736->enter($__internal_c9fe82a63ad6c80ba5ca4739126b874212b811e67bf27efad39eb59e21ecc736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/Partials/_businessHeader.html.twig"));

        $__internal_2d9d66aa2b16ede2938b62047feffacba542d9339134d5e8f8e9d51f50d93a0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d9d66aa2b16ede2938b62047feffacba542d9339134d5e8f8e9d51f50d93a0d->enter($__internal_2d9d66aa2b16ede2938b62047feffacba542d9339134d5e8f8e9d51f50d93a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/Partials/_businessHeader.html.twig"));

        // line 1
        $this->loadTemplate("@root/Partials/_headerNotifications.html.twig", "@root/Partials/_businessHeader.html.twig", 1)->display($context);
        // line 2
        echo "<div class=\"navigationHeaderMenu\">
  <div class=\"iyzi-container\">
    <div class=\"iyzicoLogo\">
      <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/content/logo.svg"), "html", null, true);
        echo "\" alt=\"iyzico Logo\"/></a>
      <ul class=\"desktop-navigation-components\">
        <li class=\"mHide\"><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("personal_home");
        echo "\" data-target=\"for-personal-submenu\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "forPersonal", array()), "html", null, true);
        echo "</a></li>
        <li class=\"mHide\"><a href=\"#\" class=\"dropdown custom-submenu-toggle\" data-target=\"for-business-submenu\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "forBusiness", array()), "html", null, true);
        echo "</a></li>
      </ul>
    </div>
    <div class=\"d-flex desktop-navigation-components mainHeaderLeftMenu\">
      <ul>
        <li class=\"mHide\"><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("help_center");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "support", array()), "html", null, true);
        echo "</a></li>
        <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("help_center");
        echo "\"><i class=\"icon icon--contact-phone\"></i></a><a href=\"tel:+90-216-599-0100\"><span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyziStatic", array()), "phoneNumber", array()), "html", null, true);
        echo "</span></a></li>
        <li class=\"mHide\"><i class=\"dividers\"></i></li>

        ";
        // line 17
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_locale"), "method") == "tr")) {
            // line 18
            echo "          <li class=\"mHide\"><a href=\"#\" id=\"other-language\" class=\"lang-switcher user-action__languages--item\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "languageEnglish", array()), "html", null, true);
            echo "</a></li>
        ";
        } else {
            // line 20
            echo "          <li class=\"mHide\"><a href=\"#\" id=\"other-language\" class=\"lang-switcher user-action__languages--item\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "languageTurkish", array()), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 22
        echo "
      </ul>
    </div>
    <div class=\"hamburgerMenu mobile-navigation-components\">
      <i class=\"icon icon--variable-hamburger\"></i>
    </div>
  </div>
</div>
<nav class=\"mainNavigation\">
    <div class=\"iyzi-container for-personal-submenu custom-submenu desktop-navigation-components\" style=\"display:none;\">
      <div class=\"navMenuContent\">
        <div class=\"col1\">
          <div class=\"iyzi-row\">
            <div class=\"buttonGroup\">
              <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("personal_home");
        echo "\" class=\"clear-blue\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "forPersonal", array()), "html", null, true);
        echo "</a>
              <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "forBusiness", array()), "html", null, true);
        echo "</a>
            </div>
            <ul>
              <li>
                <div class=\"title\"><a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("iyzicoCardLP");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "iyzicoCard", array()), "html", null, true);
        echo "</a></div>
              </li>
              <li>
                <div class=\"title\"><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("personal");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "pwi", array()), "html", null, true);
        echo "</a></div>
              </li>
              <li>
                <div class=\"title\"><a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pwi_brands");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "pwiBrands", array()), "html", null, true);
        echo "</a></div>
              </li>
              <li>
                <div class=\"title\"><a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("personal_buyer_protection");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "bP", array()), "html", null, true);
        echo "</a></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class=\"iyzi-container for-business-submenu custom-submenu desktop-navigation-components\" style=\"display: none;\">
      <div class=\"navMenuContent navMenuFlex\">
        <div class=\"col2\">
          <div class=\"iyzi-row\">
            <ul>
              <li>
                <div class=\"title\"><a href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "rPSubTitle", array()), "html", null, true);
        echo "</a></div>
                <p>
                  <a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_virtual_pos");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "virtualPos", array()), "html", null, true);
        echo "</a>
                </p>
                <p>
                  <a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_marketplace");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "marketPlace", array()), "html", null, true);
        echo "</a>
                </p>
                <p>
                  <a href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subscription_landing_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "subscription", array()), "html", null, true);
        echo "</a>
                </p>
                <p>
                  <a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_bank_transfer");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "businessBuyerProtectedMoneyTransfer", array()), "html", null, true);
        echo "</a>
                </p>
              </li>
              <li>
                <div class=\"title\"><a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pay_with_iyzico_landingpage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "pwi", array()), "html", null, true);
        echo "</a></div>
              </li>
              <li>
                <div class=\"title\"><a href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("iyzico_cep_pos_landingpage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "cepPos", array()), "html", null, true);
        echo "</a><span class=\"newBadge\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyziBadge", array()), "newBadge", array()), "html", null, true);
        echo "</span></div>
              </li>
              <li>
                <div class=\"title\"><a href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mass_pay_out_landingpage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "massPayoutSubTitle", array()), "html", null, true);
        echo "</a></div>
              </li>
            </ul>
            <ul>
              <li>
                <div class=\"title\"><a href=\"";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_receive_payment");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "paymentForLink", array()), "html", null, true);
        echo "</a></div>
                <p>
                  <a href=\"";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_stand_sales");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "stantSales", array()), "html", null, true);
        echo "</a>
                </p>
                <p>
                  <a href=\"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_social_media");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "socialMedia", array()), "html", null, true);
        echo "</a>
                </p>
                <p>
                  <a href=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_online_proceeds_payment");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "onlineProceeds", array()), "html", null, true);
        echo "</a>
                </p>
                <p>&nbsp;</p>
              </li>
              <li>
                <div class=\"title\"><a href=\"";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("campaign_landing_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "campaginTitle", array()), "html", null, true);
        echo "</a></div>
              </li>
              <li>
                <div class=\"title\"><a href=\"";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_buyer_protection");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "businessBuyerProtection", array()), "html", null, true);
        echo "</a></div>
              </li>
            </ul>
          </div>
        </div>
        <div class=\"col1\">
          <div class=\"iyzi-row\">
            <ul class=\"navRightMenu\">
              <li>
                <div class=\"buttonGroup\">
                  <a href=\"";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hesap_olustur_landing_page");
        echo "\" class=\"button primary\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "signUp", array()), "html", null, true);
        echo "</a>
                  <a href=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoNewMerchant", array()), "newFormLoginUrl", array()), "html", null, true);
        echo "\" class=\"button basic\"><i class=\"icon icon--icn-shop\"></i>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "login", array()), "html", null, true);
        echo "</a>
                </div>
                <div class=\"navGrayBox\">
                  <ul>
                    <li>
                      <div class=\"title\">";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "privileges", array()), "html", null, true);
        echo "</div>
                      <p>
                        <a href=\"";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_fraud");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "fraud", array()), "html", null, true);
        echo "</a>
                      </p>
                      <p>
                        <a href=\"";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dynamic3ds_landing_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "dynamic3DS", array()), "html", null, true);
        echo "</a>
                      </p>
                      <p>
                        <a href=\"";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smart_payment_landing_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "smartPayment", array()), "html", null, true);
        echo "</a>
                      </p>
                    </li>
                    <li>
                      <div class=\"title\">";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "developer", array()), "html", null, true);
        echo "</div>
                      <p>
                        <a href=\"https://dev.iyzipay.com/tr\">";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "developerPage", array()), "html", null, true);
        echo "</a>
                      </p>
                      <p>
                        <a href=\"";
        // line 138
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ready_integration_landing_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "solutionsParner", array()), "html", null, true);
        echo "</a>
                      </p>
                      <p>
                        <a href=\"";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_source");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "integrationSubMenu", array()), "openSource", array()), "html", null, true);
        echo "</a>
                      </p>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class=\"mobileNavigationMenu mobile-navigation-components\">
      <ul>
        <li class=\"businessMM\">
          <div class=\"mobileMenuWrap\">
            <div class=\"buttonGroup\">
              <a href=\"";
        // line 157
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("personal_home");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "forPersonal", array()), "html", null, true);
        echo "</a>
              <a href=\"";
        // line 158
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business");
        echo "\" class=\"clear-blue\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "forBusiness", array()), "html", null, true);
        echo "</a>
            </div>
            <div class=\"mobileMenuSubMenu hasSub menuOpen\">
              <a href=\"#\" class=\"menuToggler\">";
        // line 161
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "rPSubTitle", array()), "html", null, true);
        echo " <i class=\"icon icon--variable\"></i></a>
              <div class=\"mobileMenuBox\">
                <ul>
                  <li><a href=\"";
        // line 164
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_virtual_pos");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "virtualPos", array()), "html", null, true);
        echo "</a></li>
                  <li><a href=\"";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_marketplace");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "marketPlace", array()), "html", null, true);
        echo "</a></li>
                  <li><a href=\"";
        // line 166
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subscription_landing_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "subscription", array()), "html", null, true);
        echo "</a></li>
                  <li><a href=\"";
        // line 167
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_bank_transfer");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "businessBuyerProtectedMoneyTransfer", array()), "html", null, true);
        echo "</a></li>
                </ul>
              </div>
            </div>

            <div class=\"mobileMenuSubMenu\">
              <a href=\"";
        // line 173
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pay_with_iyzico_landingpage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "pwi", array()), "html", null, true);
        echo "</a>
            </div>
            <div class=\"mobileMenuSubMenu\">
              <a href=\"";
        // line 176
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("iyzico_cep_pos_landingpage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "cepPos", array()), "html", null, true);
        echo " <span class=\"newBadge\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyziBadge", array()), "newBadge", array()), "html", null, true);
        echo "</span></a>
            </div>
            <div class=\"mobileMenuSubMenu\">
              <a href=\"";
        // line 179
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mass_pay_out_landingpage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "massPayoutSubTitle", array()), "html", null, true);
        echo "</a>
            </div>

            <div class=\"mobileMenuSubMenu hasSub\">
              <a href=\"#\" class=\"menuToggler\">";
        // line 183
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "paymentForLink", array()), "html", null, true);
        echo "<i class=\"icon icon--variable\"></i></a>
              <div class=\"mobileMenuBox mobileBoxClose\">
                <ul>
                  <li><a href=\"";
        // line 186
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_stand_sales");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "stantSales", array()), "html", null, true);
        echo "</a></li>
                  <li><a href=\"";
        // line 187
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_social_media");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "socialMedia", array()), "html", null, true);
        echo "</a></li>
                  <li><a href=\"";
        // line 188
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_online_proceeds_payment");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "onlineProceeds", array()), "html", null, true);
        echo "</a></li>
                </ul>
              </div>
            </div>

            <div class=\"mobileMenuSubMenu\">
              <a href=\"";
        // line 194
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("campaign_landing_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "campaginTitle", array()), "html", null, true);
        echo "</a>
            </div>

            <div class=\"mobileMenuSubMenu\">
              <a href=\"";
        // line 198
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_buyer_protection");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "businessBuyerProtection", array()), "html", null, true);
        echo "</a>
            </div>

            <div class=\"mobileMenuButtonGroup\">
              <a href=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyziStatic", array()), "merhantPanelUrl", array()), "html", null, true);
        echo "\" class=\"button basic\"><i class=\"icon icon--icn-shop\"></i>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "login", array()), "html", null, true);
        echo "</a>
              <a href=\"";
        // line 203
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hesap_olustur_landing_page");
        echo "\" class=\"button primary mR-15\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "signUp", array()), "html", null, true);
        echo "</a>
            </div>
            <div class=\"mobileNavigationMenuContact mobile-navigation-components\">
              <ul>
                <li class=\"subTitle\">";
        // line 207
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "privileges", array()), "html", null, true);
        echo "</li>
                <li class=\"description\"><a href=\"";
        // line 208
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_fraud");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "fraud", array()), "html", null, true);
        echo "</a></li>
                <li class=\"description\"><a href=\"";
        // line 209
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dynamic3ds_landing_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "dynamic3DS", array()), "html", null, true);
        echo "</a></li>
                <li class=\"description bBottom\"><a href=\"";
        // line 210
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smart_payment_landing_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "smartPayment", array()), "html", null, true);
        echo "</a></li>
                <li class=\"subTitle pT24\">";
        // line 211
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "developer", array()), "html", null, true);
        echo "</li>
                <li class=\"description\"><a href=\"https://dev.iyzipay.com/tr\">";
        // line 212
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "developerPage", array()), "html", null, true);
        echo "</a></li>
                <li class=\"description\"><a href=\"";
        // line 213
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ready_integration_landing_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "solutionsParner", array()), "html", null, true);
        echo "</a></li>
                <li class=\"description\"><a href=\"";
        // line 214
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_source");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "integrationSubMenu", array()), "openSource", array()), "html", null, true);
        echo "</a></li>
              </ul>
            </div>
          </div>
        </li>
        <li class=\"mainMM\">
          <div class=\"mobileMenuWrap\">
            <div class=\"mobileMenuSubMenu\">
              <a href=\"";
        // line 222
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("personal_home");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "forPersonal", array()), "html", null, true);
        echo "</a>
            </div>
            <div class=\"mobileMenuSubMenu\">
              <a href=\"";
        // line 225
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "forBusiness", array()), "html", null, true);
        echo "</a>
            </div>
          </div>
        </li>
      </ul>
    </div>
</nav>

";
        
        $__internal_c9fe82a63ad6c80ba5ca4739126b874212b811e67bf27efad39eb59e21ecc736->leave($__internal_c9fe82a63ad6c80ba5ca4739126b874212b811e67bf27efad39eb59e21ecc736_prof);

        
        $__internal_2d9d66aa2b16ede2938b62047feffacba542d9339134d5e8f8e9d51f50d93a0d->leave($__internal_2d9d66aa2b16ede2938b62047feffacba542d9339134d5e8f8e9d51f50d93a0d_prof);

    }

    public function getTemplateName()
    {
        return "@root/Partials/_businessHeader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  559 => 225,  551 => 222,  538 => 214,  532 => 213,  528 => 212,  524 => 211,  518 => 210,  512 => 209,  506 => 208,  502 => 207,  493 => 203,  487 => 202,  478 => 198,  469 => 194,  458 => 188,  452 => 187,  446 => 186,  440 => 183,  431 => 179,  421 => 176,  413 => 173,  402 => 167,  396 => 166,  390 => 165,  384 => 164,  378 => 161,  370 => 158,  364 => 157,  343 => 141,  335 => 138,  329 => 135,  324 => 133,  315 => 129,  307 => 126,  299 => 123,  294 => 121,  284 => 116,  278 => 115,  263 => 105,  255 => 102,  245 => 97,  237 => 94,  229 => 91,  222 => 89,  212 => 84,  202 => 81,  194 => 78,  185 => 74,  177 => 71,  169 => 68,  161 => 65,  154 => 63,  136 => 50,  128 => 47,  120 => 44,  112 => 41,  103 => 37,  97 => 36,  81 => 22,  75 => 20,  69 => 18,  67 => 17,  59 => 14,  53 => 13,  45 => 8,  39 => 7,  32 => 5,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@root/Partials/_headerNotifications.html.twig' %}
<div class=\"navigationHeaderMenu\">
  <div class=\"iyzi-container\">
    <div class=\"iyzicoLogo\">
      <a href=\"{{ path('homepage') }}\"><img src=\"{{ asset('assets/images/content/logo.svg')}}\" alt=\"iyzico Logo\"/></a>
      <ul class=\"desktop-navigation-components\">
        <li class=\"mHide\"><a href=\"{{ path('personal_home') }}\" data-target=\"for-personal-submenu\">{{ translations.businessHeaderNavigation.forPersonal }}</a></li>
        <li class=\"mHide\"><a href=\"#\" class=\"dropdown custom-submenu-toggle\" data-target=\"for-business-submenu\">{{ translations.businessHeaderNavigation.forBusiness }}</a></li>
      </ul>
    </div>
    <div class=\"d-flex desktop-navigation-components mainHeaderLeftMenu\">
      <ul>
        <li class=\"mHide\"><a href=\"{{ path('help_center') }}\">{{ translations.businessHeaderNavigation.support }}</a></li>
        <li><a href=\"{{ path('help_center') }}\"><i class=\"icon icon--contact-phone\"></i></a><a href=\"tel:+90-216-599-0100\"><span>{{ translations.iyziStatic.phoneNumber }}</span></a></li>
        <li class=\"mHide\"><i class=\"dividers\"></i></li>

        {% if app.request.attributes.get('_locale') == \"tr\" %}
          <li class=\"mHide\"><a href=\"#\" id=\"other-language\" class=\"lang-switcher user-action__languages--item\">{{ translations.businessHeaderNavigation.languageEnglish }}</a></li>
        {% else %}
          <li class=\"mHide\"><a href=\"#\" id=\"other-language\" class=\"lang-switcher user-action__languages--item\">{{ translations.businessHeaderNavigation.languageTurkish }}</a></li>
        {% endif %}

      </ul>
    </div>
    <div class=\"hamburgerMenu mobile-navigation-components\">
      <i class=\"icon icon--variable-hamburger\"></i>
    </div>
  </div>
</div>
<nav class=\"mainNavigation\">
    <div class=\"iyzi-container for-personal-submenu custom-submenu desktop-navigation-components\" style=\"display:none;\">
      <div class=\"navMenuContent\">
        <div class=\"col1\">
          <div class=\"iyzi-row\">
            <div class=\"buttonGroup\">
              <a href=\"{{ path('personal_home') }}\" class=\"clear-blue\">{{ translations.businessHeaderNavigation.forPersonal }}</a>
              <a href=\"{{ path('business') }}\">{{ translations.businessHeaderNavigation.forBusiness }}</a>
            </div>
            <ul>
              <li>
                <div class=\"title\"><a href=\"{{ path('iyzicoCardLP') }}\">{{ translations.businessHeaderNavigation.iyzicoCard }}</a></div>
              </li>
              <li>
                <div class=\"title\"><a href=\"{{ path('personal') }}\">{{ translations.businessHeaderNavigation.pwi }}</a></div>
              </li>
              <li>
                <div class=\"title\"><a href=\"{{ path('pwi_brands') }}\">{{ translations.businessHeaderNavigation.pwiBrands }}</a></div>
              </li>
              <li>
                <div class=\"title\"><a href=\"{{ path('personal_buyer_protection') }}\">{{ translations.businessHeaderNavigation.bP }}</a></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class=\"iyzi-container for-business-submenu custom-submenu desktop-navigation-components\" style=\"display: none;\">
      <div class=\"navMenuContent navMenuFlex\">
        <div class=\"col2\">
          <div class=\"iyzi-row\">
            <ul>
              <li>
                <div class=\"title\"><a href=\"{{ path('business') }}\">{{ translations.businessHeaderNavigation.rPSubTitle }}</a></div>
                <p>
                  <a href=\"{{ path('business_virtual_pos') }}\">{{ translations.businessHeaderNavigation.virtualPos }}</a>
                </p>
                <p>
                  <a href=\"{{ path('business_marketplace') }}\">{{ translations.businessHeaderNavigation.marketPlace }}</a>
                </p>
                <p>
                  <a href=\"{{ path('subscription_landing_page') }}\">{{ translations.businessHeaderNavigation.subscription }}</a>
                </p>
                <p>
                  <a href=\"{{ path('business_bank_transfer') }}\">{{ translations.businessHeaderNavigation.businessBuyerProtectedMoneyTransfer }}</a>
                </p>
              </li>
              <li>
                <div class=\"title\"><a href=\"{{ path('pay_with_iyzico_landingpage') }}\">{{ translations.businessHeaderNavigation.pwi }}</a></div>
              </li>
              <li>
                <div class=\"title\"><a href=\"{{ path('iyzico_cep_pos_landingpage') }}\">{{ translations.businessHeaderNavigation.cepPos }}</a><span class=\"newBadge\">{{ translations.iyziBadge.newBadge }}</span></div>
              </li>
              <li>
                <div class=\"title\"><a href=\"{{ path('mass_pay_out_landingpage') }}\">{{ translations.businessHeaderNavigation.massPayoutSubTitle }}</a></div>
              </li>
            </ul>
            <ul>
              <li>
                <div class=\"title\"><a href=\"{{ path('business_receive_payment') }}\">{{ translations.businessHeaderNavigation.paymentForLink }}</a></div>
                <p>
                  <a href=\"{{ path('business_stand_sales') }}\">{{ translations.businessHeaderNavigation.stantSales }}</a>
                </p>
                <p>
                  <a href=\"{{ path('business_social_media') }}\">{{ translations.businessHeaderNavigation.socialMedia }}</a>
                </p>
                <p>
                  <a href=\"{{ path('business_online_proceeds_payment') }}\">{{ translations.businessHeaderNavigation.onlineProceeds }}</a>
                </p>
                <p>&nbsp;</p>
              </li>
              <li>
                <div class=\"title\"><a href=\"{{ path('campaign_landing_page') }}\">{{ translations.businessHeaderNavigation.campaginTitle }}</a></div>
              </li>
              <li>
                <div class=\"title\"><a href=\"{{ path('business_buyer_protection') }}\">{{ translations.businessHeaderNavigation.businessBuyerProtection }}</a></div>
              </li>
            </ul>
          </div>
        </div>
        <div class=\"col1\">
          <div class=\"iyzi-row\">
            <ul class=\"navRightMenu\">
              <li>
                <div class=\"buttonGroup\">
                  <a href=\"{{ path('hesap_olustur_landing_page') }}\" class=\"button primary\">{{ translations.businessHeaderNavigation.signUp }}</a>
                  <a href=\"{{ translations.iyzicoNewMerchant.newFormLoginUrl }}\" class=\"button basic\"><i class=\"icon icon--icn-shop\"></i>{{ translations.businessHeaderNavigation.login }}</a>
                </div>
                <div class=\"navGrayBox\">
                  <ul>
                    <li>
                      <div class=\"title\">{{ translations.businessHeaderNavigation.privileges }}</div>
                      <p>
                        <a href=\"{{ path('business_fraud') }}\">{{ translations.businessHeaderNavigation.fraud }}</a>
                      </p>
                      <p>
                        <a href=\"{{ path('dynamic3ds_landing_page') }}\">{{ translations.businessHeaderNavigation.dynamic3DS }}</a>
                      </p>
                      <p>
                        <a href=\"{{ path('smart_payment_landing_page') }}\">{{ translations.businessHeaderNavigation.smartPayment }}</a>
                      </p>
                    </li>
                    <li>
                      <div class=\"title\">{{ translations.businessHeaderNavigation.developer }}</div>
                      <p>
                        <a href=\"https://dev.iyzipay.com/tr\">{{ translations.businessHeaderNavigation.developerPage }}</a>
                      </p>
                      <p>
                        <a href=\"{{ path('ready_integration_landing_page') }}\">{{ translations.businessHeaderNavigation.solutionsParner }}</a>
                      </p>
                      <p>
                        <a href=\"{{ path('open_source') }}\">{{ translations.integrationSubMenu.openSource }}</a>
                      </p>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class=\"mobileNavigationMenu mobile-navigation-components\">
      <ul>
        <li class=\"businessMM\">
          <div class=\"mobileMenuWrap\">
            <div class=\"buttonGroup\">
              <a href=\"{{ path('personal_home') }}\">{{ translations.businessHeaderNavigation.forPersonal }}</a>
              <a href=\"{{ path('business') }}\" class=\"clear-blue\">{{ translations.businessHeaderNavigation.forBusiness }}</a>
            </div>
            <div class=\"mobileMenuSubMenu hasSub menuOpen\">
              <a href=\"#\" class=\"menuToggler\">{{ translations.businessHeaderNavigation.rPSubTitle }} <i class=\"icon icon--variable\"></i></a>
              <div class=\"mobileMenuBox\">
                <ul>
                  <li><a href=\"{{ path('business_virtual_pos') }}\">{{ translations.businessHeaderNavigation.virtualPos }}</a></li>
                  <li><a href=\"{{ path('business_marketplace') }}\">{{ translations.businessHeaderNavigation.marketPlace }}</a></li>
                  <li><a href=\"{{ path('subscription_landing_page') }}\">{{ translations.businessHeaderNavigation.subscription }}</a></li>
                  <li><a href=\"{{ path('business_bank_transfer') }}\">{{ translations.businessHeaderNavigation.businessBuyerProtectedMoneyTransfer }}</a></li>
                </ul>
              </div>
            </div>

            <div class=\"mobileMenuSubMenu\">
              <a href=\"{{ path('pay_with_iyzico_landingpage') }}\">{{ translations.businessHeaderNavigation.pwi }}</a>
            </div>
            <div class=\"mobileMenuSubMenu\">
              <a href=\"{{ path('iyzico_cep_pos_landingpage') }}\">{{ translations.businessHeaderNavigation.cepPos }} <span class=\"newBadge\">{{ translations.iyziBadge.newBadge }}</span></a>
            </div>
            <div class=\"mobileMenuSubMenu\">
              <a href=\"{{ path('mass_pay_out_landingpage') }}\">{{ translations.businessHeaderNavigation.massPayoutSubTitle }}</a>
            </div>

            <div class=\"mobileMenuSubMenu hasSub\">
              <a href=\"#\" class=\"menuToggler\">{{ translations.businessHeaderNavigation.paymentForLink }}<i class=\"icon icon--variable\"></i></a>
              <div class=\"mobileMenuBox mobileBoxClose\">
                <ul>
                  <li><a href=\"{{ path('business_stand_sales') }}\">{{ translations.businessHeaderNavigation.stantSales }}</a></li>
                  <li><a href=\"{{ path('business_social_media') }}\">{{ translations.businessHeaderNavigation.socialMedia }}</a></li>
                  <li><a href=\"{{ path('business_online_proceeds_payment') }}\">{{ translations.businessHeaderNavigation.onlineProceeds }}</a></li>
                </ul>
              </div>
            </div>

            <div class=\"mobileMenuSubMenu\">
              <a href=\"{{ path('campaign_landing_page') }}\">{{ translations.businessHeaderNavigation.campaginTitle }}</a>
            </div>

            <div class=\"mobileMenuSubMenu\">
              <a href=\"{{ path('business_buyer_protection') }}\">{{ translations.businessHeaderNavigation.businessBuyerProtection }}</a>
            </div>

            <div class=\"mobileMenuButtonGroup\">
              <a href=\"{{ translations.iyziStatic.merhantPanelUrl }}\" class=\"button basic\"><i class=\"icon icon--icn-shop\"></i>{{ translations.businessHeaderNavigation.login }}</a>
              <a href=\"{{ path('hesap_olustur_landing_page') }}\" class=\"button primary mR-15\">{{ translations.businessHeaderNavigation.signUp }}</a>
            </div>
            <div class=\"mobileNavigationMenuContact mobile-navigation-components\">
              <ul>
                <li class=\"subTitle\">{{ translations.businessHeaderNavigation.privileges }}</li>
                <li class=\"description\"><a href=\"{{ path('business_fraud') }}\">{{ translations.businessHeaderNavigation.fraud }}</a></li>
                <li class=\"description\"><a href=\"{{ path('dynamic3ds_landing_page') }}\">{{ translations.businessHeaderNavigation.dynamic3DS }}</a></li>
                <li class=\"description bBottom\"><a href=\"{{ path('smart_payment_landing_page') }}\">{{ translations.businessHeaderNavigation.smartPayment }}</a></li>
                <li class=\"subTitle pT24\">{{ translations.businessHeaderNavigation.developer }}</li>
                <li class=\"description\"><a href=\"https://dev.iyzipay.com/tr\">{{ translations.businessHeaderNavigation.developerPage }}</a></li>
                <li class=\"description\"><a href=\"{{ path('ready_integration_landing_page') }}\">{{ translations.businessHeaderNavigation.solutionsParner }}</a></li>
                <li class=\"description\"><a href=\"{{ path('open_source') }}\">{{ translations.integrationSubMenu.openSource }}</a></li>
              </ul>
            </div>
          </div>
        </li>
        <li class=\"mainMM\">
          <div class=\"mobileMenuWrap\">
            <div class=\"mobileMenuSubMenu\">
              <a href=\"{{ path('personal_home') }}\">{{ translations.businessHeaderNavigation.forPersonal }}</a>
            </div>
            <div class=\"mobileMenuSubMenu\">
              <a href=\"{{ path('business') }}\">{{ translations.businessHeaderNavigation.forBusiness }}</a>
            </div>
          </div>
        </li>
      </ul>
    </div>
</nav>

", "@root/Partials/_businessHeader.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/Partials/_businessHeader.html.twig");
    }
}
