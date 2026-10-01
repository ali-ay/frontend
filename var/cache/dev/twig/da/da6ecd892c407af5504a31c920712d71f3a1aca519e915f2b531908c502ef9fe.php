<?php

/* @root/Partials/_personalHeader.html.twig */
class __TwigTemplate_f0af7d23ca54fefe58dcad089121742d11baff7a6c24bb94864658a80c9c8367 extends Twig_Template
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
        $__internal_2ae5c332d56cf17e17b1723798064e2636633d1b4e7d226a674168de0420f0b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ae5c332d56cf17e17b1723798064e2636633d1b4e7d226a674168de0420f0b8->enter($__internal_2ae5c332d56cf17e17b1723798064e2636633d1b4e7d226a674168de0420f0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/Partials/_personalHeader.html.twig"));

        $__internal_71b8eb4d82c6807f1fa7486524b765089ea3cf64ee21048e71705c559d58b3ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71b8eb4d82c6807f1fa7486524b765089ea3cf64ee21048e71705c559d58b3ef->enter($__internal_71b8eb4d82c6807f1fa7486524b765089ea3cf64ee21048e71705c559d58b3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/Partials/_personalHeader.html.twig"));

        // line 1
        $this->loadTemplate("@root/Partials/_headerNotifications.html.twig", "@root/Partials/_personalHeader.html.twig", 1)->display($context);
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
        <li class=\"dHide\"><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("personal_home");
        echo "\" data-target=\"for-personal-submenu\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "forPersonal", array()), "html", null, true);
        echo "</a></li>
        <li class=\"tHide\"><a href=\"#\" class=\"dropdown custom-submenu-toggle ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('WebBundle\Twig\CustomExtensions')->activeMenu(array(0 => "business_virtual_pos", 1 => "business_marketplace", 2 => "business_receive_payment", 3 => "business_online_proceeds_payment", 4 => "business_etsy", 5 => "business_social_media", 6 => "business_stand_sales")), "html", null, true);
        echo "\" data-target=\"for-personal-submenu\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "forPersonal", array()), "html", null, true);
        echo "</a></li>
        <li class=\"mHide\"><a href=\"#\" class=\"dropdown custom-submenu-toggle\" data-target=\"for-business-submenu\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "forBusiness", array()), "html", null, true);
        echo "</a></li>
      </ul>
    </div>
    <div class=\"d-flex desktop-navigation-components mainHeaderLeftMenu\">
      <ul>
        <li class=\"mHide\"><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("help_center");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "support", array()), "html", null, true);
        echo "</a></li>
        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("help_center");
        echo "\"><i class=\"icon icon--contact-phone\"></i></a><a href=\"tel:+90-216-599-0100\"><span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyziStatic", array()), "phoneNumber", array()), "html", null, true);
        echo "</span></a></li>
        <li class=\"mHide\"><i class=\"dividers\"></i></li>

        ";
        // line 18
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_locale"), "method") == "tr")) {
            // line 19
            echo "          <li class=\"mHide\"><a href=\"#\" id=\"other-language\" class=\"lang-switcher user-action__languages--item\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "languageEnglish", array()), "html", null, true);
            echo "</a></li>
        ";
        } else {
            // line 21
            echo "          <li class=\"mHide\"><a href=\"#\" id=\"other-language\" class=\"lang-switcher user-action__languages--item\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "languageTurkish", array()), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 23
        echo "
      </ul>
    </div>
    <div class=\"hamburgerMenu mobile-navigation-components\">
      <i class=\"icon icon--variable-hamburger\"></i>
    </div>
  </div>
</div>


<div class=\"navigationHeaderMenu personalNavMenu\">
  <div class=\"iyzi-container\">
    <div class=\"d-flex desktop-navigation-components mainHeaderLeftMenu\">
      <ul>
        <li class=\"mHide\"><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("personal");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "pwi", array()), "html", null, true);
        echo "</a></li>
        <li class=\"mHide\"><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("iyzicoCardLP");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "iyzicoCard", array()), "html", null, true);
        echo "</a></li>
        <li class=\"mHide\"><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pwi_brands");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "pwiBrands", array()), "html", null, true);
        echo "</a></li>
        <li class=\"mHide\"><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("personal_buyer_protection");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "bP", array()), "html", null, true);
        echo "</a></li>
        <li class=\"mHide\"><a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("personal_campaign_landing_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "campaginTitle", array()), "html", null, true);
        echo "</a></li>
        <li class=\"mHide\"><a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("help_center");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "support", array()), "html", null, true);
        echo "</a></li>
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
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("personal");
        echo "\" class=\"clear-blue\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "forPersonal", array()), "html", null, true);
        echo "</a>
              <a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "forBusiness", array()), "html", null, true);
        echo "</a>
            </div>
            <ul>
              <li>
                <div class=\"title\"><a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("personal");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "pwi", array()), "html", null, true);
        echo "</a></div>
              </li>
              <li>
                <div class=\"title\"><a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("iyzicoCardLP");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "iyzicoCard", array()), "html", null, true);
        echo "</a></div>
              </li>
              <li>
                <div class=\"title\"><a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pwi_brands");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "pwiBrands", array()), "html", null, true);
        echo "</a></div>
              </li>
              <li>
                <div class=\"title\"><a href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("personal_buyer_protection");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "bP", array()), "html", null, true);
        echo "</a></div>
              </li>
              <li>
                <div class=\"title\"><a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("personal_campaign_landing_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "campaginTitle", array()), "html", null, true);
        echo "</a></div>
              </li>
              <li>
                <div class=\"title\"><a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("help_center");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "support", array()), "html", null, true);
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
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "rPSubTitle", array()), "html", null, true);
        echo "</a></div>
                <p>
                  <a href=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_virtual_pos");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "virtualPos", array()), "html", null, true);
        echo "</a>
                </p>
                <p>
                  <a href=\"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_marketplace");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "marketPlace", array()), "html", null, true);
        echo "</a>
                </p>
                <p>
                  <a href=\"";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subscription_landing_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "subscription", array()), "html", null, true);
        echo "</a>
                </p>
                <p>
                  <a href=\"";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_bank_transfer");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "businessBuyerProtectedMoneyTransfer", array()), "html", null, true);
        echo "</a>
                </p>
              </li>
              <li>
                <div class=\"title\"><a href=\"";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pay_with_iyzico_landingpage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "pwi", array()), "html", null, true);
        echo "</a></div>
              </li>
              <li>
                <div class=\"title\"><a href=\"";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("iyzico_cep_pos_landingpage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "cepPos", array()), "html", null, true);
        echo "</a><span class=\"newBadge\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyziBadge", array()), "newBadge", array()), "html", null, true);
        echo "</span></div>
              </li>
              <li>
                <div class=\"title\"><a href=\"";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mass_pay_out_landingpage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "massPayoutSubTitle", array()), "html", null, true);
        echo "</a></div>
              </li>
            </ul>
            <ul>
              <li>
                <div class=\"title\"><a href=\"";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_receive_payment");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "paymentForLink", array()), "html", null, true);
        echo "</a></div>
                <p>
                  <a href=\"";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_stand_sales");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "stantSales", array()), "html", null, true);
        echo "</a>
                </p>
                <p>
                  <a href=\"";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_social_media");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "socialMedia", array()), "html", null, true);
        echo "</a>
                </p>
                <p>
                  <a href=\"";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_online_proceeds_payment");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "onlineProceeds", array()), "html", null, true);
        echo "</a>
                </p>
                <p>&nbsp;</p>
              </li>
              <li>
                <div class=\"title\"><a href=\"";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("campaign_landing_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "campaginTitle", array()), "html", null, true);
        echo "</a></div>
              </li>
              <li>
                <div class=\"title\"><a href=\"";
        // line 132
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
        // line 142
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hesap_olustur_landing_page");
        echo "\" class=\"button primary\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "signUp", array()), "html", null, true);
        echo "</a>
                  <a href=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoNewMerchant", array()), "newFormLoginUrl", array()), "html", null, true);
        echo "\" class=\"button basic\"><i class=\"icon icon--icn-shop\"></i>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "login", array()), "html", null, true);
        echo "</a>
                </div>
                <div class=\"navGrayBox\">
                  <ul>
                    <li>
                      <div class=\"title\">";
        // line 148
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "privileges", array()), "html", null, true);
        echo "</div>
                      <p>
                        <a href=\"";
        // line 150
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_fraud");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "fraud", array()), "html", null, true);
        echo "</a>
                      </p>
                      <p>
                        <a href=\"";
        // line 153
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dynamic3ds_landing_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "dynamic3DS", array()), "html", null, true);
        echo "</a>
                      </p>
                      <p>
                        <a href=\"";
        // line 156
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smart_payment_landing_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "smartPayment", array()), "html", null, true);
        echo "</a>
                      </p>
                    </li>
                    <li>
                      <div class=\"title\">";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "developer", array()), "html", null, true);
        echo "</div>
                      <p>
                        <a href=\"https://dev.iyzipay.com/tr\">";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "developerPage", array()), "html", null, true);
        echo "</a>
                      </p>
                      <p>
                        <a href=\"";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ready_integration_landing_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "solutionsParner", array()), "html", null, true);
        echo "</a>
                      </p>
                      <p>
                        <a href=\"";
        // line 168
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
        // line 184
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("personal");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "forPersonal", array()), "html", null, true);
        echo "</a>
              <a href=\"";
        // line 185
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business");
        echo "\" class=\"clear-blue\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "forBusiness", array()), "html", null, true);
        echo "</a>
            </div>
            <div class=\"mobileMenuSubMenu hasSub menuOpen\">
              <a href=\"#\" class=\"menuToggler\">";
        // line 188
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "rPSubTitle", array()), "html", null, true);
        echo " <i class=\"icon icon--variable\"></i></a>
              <div class=\"mobileMenuBox\">
                <ul>
                  <li><a href=\"";
        // line 191
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_virtual_pos");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "virtualPos", array()), "html", null, true);
        echo "</a></li>
                  <li><a href=\"";
        // line 192
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_marketplace");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "marketPlace", array()), "html", null, true);
        echo "</a></li>
                  <li><a href=\"";
        // line 193
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subscription_landing_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "subscription", array()), "html", null, true);
        echo "</a></li>
                  <li><a href=\"";
        // line 194
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_bank_transfer");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "businessBuyerProtectedMoneyTransfer", array()), "html", null, true);
        echo "</a></li>
                </ul>
              </div>
            </div>

            <div class=\"mobileMenuSubMenu\">
              <a href=\"";
        // line 200
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pay_with_iyzico_landingpage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "pwi", array()), "html", null, true);
        echo "</a>
            </div>

            <div class=\"mobileMenuSubMenu\">
              <a href=\"";
        // line 204
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("iyzico_cep_pos_landingpage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "cepPos", array()), "html", null, true);
        echo " <span class=\"newBadge\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyziBadge", array()), "newBadge", array()), "html", null, true);
        echo "</span></a>
            </div>

            <div class=\"mobileMenuSubMenu\">
              <a href=\"";
        // line 208
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mass_pay_out_landingpage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "massPayoutSubTitle", array()), "html", null, true);
        echo "</a>
            </div>

            <div class=\"mobileMenuSubMenu hasSub\">
              <a href=\"#\" class=\"menuToggler\">";
        // line 212
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "paymentForLink", array()), "html", null, true);
        echo "<i class=\"icon icon--variable\"></i></a>
              <div class=\"mobileMenuBox mobileBoxClose\">
                <ul>
                  <li><a href=\"";
        // line 215
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_stand_sales");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "stantSales", array()), "html", null, true);
        echo "</a></li>
                  <li><a href=\"";
        // line 216
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_social_media");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "socialMedia", array()), "html", null, true);
        echo "</a></li>
                  <li><a href=\"";
        // line 217
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_online_proceeds_payment");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "onlineProceeds", array()), "html", null, true);
        echo "</a></li>
                </ul>
              </div>
            </div>

            <div class=\"mobileMenuSubMenu\">
              <a href=\"";
        // line 223
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("campaign_landing_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "campaginTitle", array()), "html", null, true);
        echo "</a>
            </div>

            <div class=\"mobileMenuSubMenu\">
              <a href=\"";
        // line 227
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_buyer_protection");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "businessBuyerProtection", array()), "html", null, true);
        echo "</a>
            </div>

            <div class=\"mobileMenuButtonGroup\">
              <a href=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyziStatic", array()), "merhantPanelUrl", array()), "html", null, true);
        echo "\" class=\"button basic\"><i class=\"icon icon--icn-shop\"></i>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "login", array()), "html", null, true);
        echo "</a>
              <a href=\"";
        // line 232
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hesap_olustur_landing_page");
        echo "\" class=\"button primary mR-15\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "signUp", array()), "html", null, true);
        echo "</a>
            </div>
            <div class=\"mobileNavigationMenuContact mobile-navigation-components\">
              <ul>
                <li class=\"subTitle\">";
        // line 236
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "privileges", array()), "html", null, true);
        echo "</li>
                <li class=\"description\"><a href=\"";
        // line 237
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_fraud");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "fraud", array()), "html", null, true);
        echo "</a></li>
                <li class=\"description\"><a href=\"";
        // line 238
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dynamic3ds_landing_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "dynamic3DS", array()), "html", null, true);
        echo "</a></li>
                <li class=\"description bBottom\"><a href=\"";
        // line 239
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smart_payment_landing_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "smartPayment", array()), "html", null, true);
        echo "</a></li>
                <li class=\"subTitle pT24\">";
        // line 240
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "developer", array()), "html", null, true);
        echo "</li>
                <li class=\"description\"><a href=\"https://dev.iyzipay.com/tr\">";
        // line 241
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "developerPage", array()), "html", null, true);
        echo "</a></li>
                <li class=\"description\"><a href=\"";
        // line 242
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ready_integration_landing_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "solutionsParner", array()), "html", null, true);
        echo "</a></li>
                <li class=\"description\"><a href=\"";
        // line 243
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
        // line 251
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("personal");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "forPersonal", array()), "html", null, true);
        echo "</a>
            </div>
            <div class=\"mobileMenuSubMenu\">
              <a href=\"";
        // line 254
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
        
        $__internal_2ae5c332d56cf17e17b1723798064e2636633d1b4e7d226a674168de0420f0b8->leave($__internal_2ae5c332d56cf17e17b1723798064e2636633d1b4e7d226a674168de0420f0b8_prof);

        
        $__internal_71b8eb4d82c6807f1fa7486524b765089ea3cf64ee21048e71705c559d58b3ef->leave($__internal_71b8eb4d82c6807f1fa7486524b765089ea3cf64ee21048e71705c559d58b3ef_prof);

    }

    public function getTemplateName()
    {
        return "@root/Partials/_personalHeader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  633 => 254,  625 => 251,  612 => 243,  606 => 242,  602 => 241,  598 => 240,  592 => 239,  586 => 238,  580 => 237,  576 => 236,  567 => 232,  561 => 231,  552 => 227,  543 => 223,  532 => 217,  526 => 216,  520 => 215,  514 => 212,  505 => 208,  494 => 204,  485 => 200,  474 => 194,  468 => 193,  462 => 192,  456 => 191,  450 => 188,  442 => 185,  436 => 184,  415 => 168,  407 => 165,  401 => 162,  396 => 160,  387 => 156,  379 => 153,  371 => 150,  366 => 148,  356 => 143,  350 => 142,  335 => 132,  327 => 129,  317 => 124,  309 => 121,  301 => 118,  294 => 116,  284 => 111,  274 => 108,  266 => 105,  257 => 101,  249 => 98,  241 => 95,  233 => 92,  226 => 90,  208 => 77,  200 => 74,  192 => 71,  184 => 68,  176 => 65,  168 => 62,  159 => 58,  153 => 57,  133 => 42,  127 => 41,  121 => 40,  115 => 39,  109 => 38,  103 => 37,  87 => 23,  81 => 21,  75 => 19,  73 => 18,  65 => 15,  59 => 14,  51 => 9,  45 => 8,  39 => 7,  32 => 5,  27 => 2,  25 => 1,);
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
        <li class=\"dHide\"><a href=\"{{ path('personal_home') }}\" data-target=\"for-personal-submenu\">{{ translations.businessHeaderNavigation.forPersonal }}</a></li>
        <li class=\"tHide\"><a href=\"#\" class=\"dropdown custom-submenu-toggle {{ activeMenu(['business_virtual_pos', 'business_marketplace','business_receive_payment','business_online_proceeds_payment','business_etsy','business_social_media','business_stand_sales']) }}\" data-target=\"for-personal-submenu\">{{ translations.businessHeaderNavigation.forPersonal }}</a></li>
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


<div class=\"navigationHeaderMenu personalNavMenu\">
  <div class=\"iyzi-container\">
    <div class=\"d-flex desktop-navigation-components mainHeaderLeftMenu\">
      <ul>
        <li class=\"mHide\"><a href=\"{{ path('personal') }}\">{{ translations.businessHeaderNavigation.pwi }}</a></li>
        <li class=\"mHide\"><a href=\"{{ path('iyzicoCardLP') }}\">{{ translations.businessHeaderNavigation.iyzicoCard }}</a></li>
        <li class=\"mHide\"><a href=\"{{ path('pwi_brands') }}\">{{ translations.businessHeaderNavigation.pwiBrands }}</a></li>
        <li class=\"mHide\"><a href=\"{{ path('personal_buyer_protection') }}\">{{ translations.businessHeaderNavigation.bP }}</a></li>
        <li class=\"mHide\"><a href=\"{{ path('personal_campaign_landing_page') }}\">{{ translations.businessHeaderNavigation.campaginTitle }}</a></li>
        <li class=\"mHide\"><a href=\"{{ path('help_center') }}\">{{ translations.businessHeaderNavigation.support }}</a></li>
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
              <a href=\"{{ path('personal') }}\" class=\"clear-blue\">{{ translations.businessHeaderNavigation.forPersonal }}</a>
              <a href=\"{{ path('business') }}\">{{ translations.businessHeaderNavigation.forBusiness }}</a>
            </div>
            <ul>
              <li>
                <div class=\"title\"><a href=\"{{ path('personal') }}\">{{ translations.businessHeaderNavigation.pwi }}</a></div>
              </li>
              <li>
                <div class=\"title\"><a href=\"{{ path('iyzicoCardLP') }}\">{{ translations.businessHeaderNavigation.iyzicoCard }}</a></div>
              </li>
              <li>
                <div class=\"title\"><a href=\"{{ path('pwi_brands') }}\">{{ translations.businessHeaderNavigation.pwiBrands }}</a></div>
              </li>
              <li>
                <div class=\"title\"><a href=\"{{ path('personal_buyer_protection') }}\">{{ translations.businessHeaderNavigation.bP }}</a></div>
              </li>
              <li>
                <div class=\"title\"><a href=\"{{ path('personal_campaign_landing_page') }}\">{{ translations.businessHeaderNavigation.campaginTitle }}</a></div>
              </li>
              <li>
                <div class=\"title\"><a href=\"{{ path('help_center') }}\">{{ translations.businessHeaderNavigation.support }}</a></div>
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
              <a href=\"{{ path('personal') }}\">{{ translations.businessHeaderNavigation.forPersonal }}</a>
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
              <a href=\"{{ path('personal') }}\">{{ translations.businessHeaderNavigation.forPersonal }}</a>
            </div>
            <div class=\"mobileMenuSubMenu\">
              <a href=\"{{ path('business') }}\">{{ translations.businessHeaderNavigation.forBusiness }}</a>
            </div>
          </div>
        </li>
      </ul>
    </div>
</nav>

", "@root/Partials/_personalHeader.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/Partials/_personalHeader.html.twig");
    }
}
