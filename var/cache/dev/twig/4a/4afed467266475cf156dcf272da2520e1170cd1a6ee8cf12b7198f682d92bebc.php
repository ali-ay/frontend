<?php

/* @root/Partials/_registerHeader.html.twig */
class __TwigTemplate_3692783885c08c9bc8fe159aa40d69b4dc7d195644148f1ae8628ba130d09980 extends Twig_Template
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
        $__internal_88ff4a114d82870c3a2726a13af8f94ef4f81e6729a8a3969557c61610e90628 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88ff4a114d82870c3a2726a13af8f94ef4f81e6729a8a3969557c61610e90628->enter($__internal_88ff4a114d82870c3a2726a13af8f94ef4f81e6729a8a3969557c61610e90628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/Partials/_registerHeader.html.twig"));

        $__internal_64f0980ff9173adde842c07ba2b7dec1c9cf10f3f34da8c92eef3e7aaad99200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64f0980ff9173adde842c07ba2b7dec1c9cf10f3f34da8c92eef3e7aaad99200->enter($__internal_64f0980ff9173adde842c07ba2b7dec1c9cf10f3f34da8c92eef3e7aaad99200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/Partials/_registerHeader.html.twig"));

        // line 1
        $this->loadTemplate("@root/Partials/_headerNotifications.html.twig", "@root/Partials/_registerHeader.html.twig", 1)->display($context);
        // line 2
        echo "<div class=\"navigationHeaderMenu\">
\t<div class=\"iyzi-container\">
\t\t<div class=\"iyzicoLogo\">
\t\t\t<a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/content/logo.svg"), "html", null, true);
        echo "\" alt=\"iyzico Logo\"/></a>
\t\t</div>
\t\t<div class=\"d-flex desktop-navigation-components mainHeaderLeftMenu\">
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("help_center");
        echo "\"><i class=\"icon icon--contact-phone\"></i></a><a href=\"tel:+90-216-599-0100\"><span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyziStatic", array()), "phoneNumber", array()), "html", null, true);
        echo "</span></a></li>
\t\t\t\t<li class=\"mHide\"><i class=\"dividers\"></i></li>

\t\t\t\t";
        // line 12
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_locale"), "method") == "tr")) {
            // line 13
            echo "\t\t\t\t\t<li class=\"mHide\"><a href=\"#\" id=\"other-language\" class=\"lang-switcher user-action__languages--item\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "languageEnglish", array()), "html", null, true);
            echo "</a></li>
\t\t\t\t";
        } else {
            // line 15
            echo "\t\t\t\t\t<li class=\"mHide\"><a href=\"#\" id=\"other-language\" class=\"lang-switcher user-action__languages--item\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "languageTurkish", array()), "html", null, true);
            echo "</a></li>
\t\t\t\t";
        }
        // line 17
        echo "
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"hamburgerMenu mobile-navigation-components\">
\t\t\t<i class=\"icon icon--variable-hamburger\"></i>
\t\t</div>
\t</div>
</div>
<nav class=\"mainNavigation\">
\t\t<div class=\"iyzi-container for-personal-submenu custom-submenu desktop-navigation-components\" style=\"display:none;\">
\t\t\t<div class=\"navMenuContent\">
\t\t\t\t<div class=\"col1\">
\t\t\t\t\t<div class=\"iyzi-row\">
\t\t\t\t\t\t<div class=\"buttonGroup\">
\t\t\t\t\t\t\t<a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("personal");
        echo "\" class=\"clear-blue\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "forPersonal", array()), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t<a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "forBusiness", array()), "html", null, true);
        echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"title\"><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("iyzicoCardLP");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "iyzicoCard", array()), "html", null, true);
        echo "</a><span class=\"newBadge\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyziBadge", array()), "newBadge", array()), "html", null, true);
        echo "</span></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"title\"><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("personal");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "pwi", array()), "html", null, true);
        echo "</a></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"title\"><a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pwi_brands");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "pwiBrands", array()), "html", null, true);
        echo "</a></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"title\"><a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("personal_buyer_protection");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "bP", array()), "html", null, true);
        echo "</a></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"alignRight\">
\t\t\t\t\t\t\t\t<div class=\"appDownload\">
\t\t\t\t\t\t\t\t\t<p>";
        // line 51
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "personalHeaderMenu", array()), "title", array());
        echo "</p>
\t\t\t\t\t\t\t\t\t<div class=\"downloadBtn\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("personal_campaign_landing_page");
        echo "\" class=\"button default\">";
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "personalHeaderMenu", array()), "button", array());
        echo "</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"iyzi-container for-business-submenu custom-submenu desktop-navigation-components\" style=\"display: none;\">
\t\t\t<div class=\"navMenuContent navMenuFlex\">
\t\t\t\t<div class=\"col2\">
\t\t\t\t\t<div class=\"iyzi-row\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"title\"><a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "rPSubTitle", array()), "html", null, true);
        echo "</a></div>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_virtual_pos");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "virtualPos", array()), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_marketplace");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "marketPlace", array()), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subscription_landing_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "subscription", array()), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_bank_transfer");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "businessBuyerProtectedMoneyTransfer", array()), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"title\"><a href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pay_with_iyzico_landingpage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "pwi", array()), "html", null, true);
        echo "</a><span class=\"newBadge\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyziBadge", array()), "newBadge", array()), "html", null, true);
        echo "</span></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"title\"><a href=\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mass_pay_out_landingpage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "massPayoutSubTitle", array()), "html", null, true);
        echo "</a><span class=\"newBadge\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyziBadge", array()), "newBadge", array()), "html", null, true);
        echo "</span></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"title\"><a href=\"";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_receive_payment");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "paymentForLink", array()), "html", null, true);
        echo "</a></div>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_stand_sales");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "stantSales", array()), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_social_media");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "socialMedia", array()), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_online_proceeds_payment");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "onlineProceeds", array()), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"title\"><a href=\"";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("campaign_landing_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "campaginTitle", array()), "html", null, true);
        echo "</a></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"title\"><a href=\"";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_buyer_protection");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "businessBuyerProtection", array()), "html", null, true);
        echo "</a></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col1\">
\t\t\t\t\t<div class=\"iyzi-row\">
\t\t\t\t\t\t<ul class=\"navRightMenu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"buttonGroup\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hesap_olustur_landing_page");
        echo "\" class=\"button primary\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "signUp", array()), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoNewMerchant", array()), "newFormLoginUrl", array()), "html", null, true);
        echo "\" class=\"button basic\"><i class=\"icon icon--icn-shop\"></i>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "login", array()), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"navGrayBox\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"title\">";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "privileges", array()), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_fraud");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "fraud", array()), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dynamic3ds_landing_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "dynamic3DS", array()), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smart_payment_landing_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "smartPayment", array()), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"title\">";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "developer", array()), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://dev.iyzipay.com/tr\">";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "developerPage", array()), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 139
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ready_integration_landing_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "solutionsParner", array()), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"mobileNavigationMenu mobile-navigation-components\">
\t\t\t<ul>
\t\t\t\t<li class=\"businessMM\">
\t\t\t\t\t<div class=\"mobileMenuWrap\">
\t\t\t\t\t\t<div class=\"buttonGroup\">
\t\t\t\t\t\t\t<a href=\"";
        // line 155
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("personal");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "forPersonal", array()), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t<a href=\"";
        // line 156
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business");
        echo "\" class=\"clear-blue\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "forBusiness", array()), "html", null, true);
        echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mobileMenuSubMenu hasSub menuOpen\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"menuToggler\">";
        // line 159
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "rPSubTitle", array()), "html", null, true);
        echo " <i class=\"icon icon--variable\"></i></a>
\t\t\t\t\t\t\t<div class=\"mobileMenuBox\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 162
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_virtual_pos");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "virtualPos", array()), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 163
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_marketplace");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "marketPlace", array()), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 164
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subscription_landing_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "subscription", array()), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_bank_transfer");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "businessBuyerProtectedMoneyTransfer", array()), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mobileMenuSubMenu\">
\t\t\t\t\t\t\t<a href=\"";
        // line 171
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pay_with_iyzico_landingpage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "pwi", array()), "html", null, true);
        echo " <span class=\"newBadge\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyziBadge", array()), "newBadge", array()), "html", null, true);
        echo "</span></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mobileMenuSubMenu\">
\t\t\t\t\t\t\t<a href=\"";
        // line 175
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mass_pay_out_landingpage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "massPayoutSubTitle", array()), "html", null, true);
        echo "</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mobileMenuSubMenu hasSub\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"menuToggler\">";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "paymentForLink", array()), "html", null, true);
        echo "<i class=\"icon icon--variable\"></i></a>
\t\t\t\t\t\t\t<div class=\"mobileMenuBox mobileBoxClose\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 182
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_stand_sales");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "stantSales", array()), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 183
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_social_media");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "socialMedia", array()), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 184
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_online_proceeds_payment");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "onlineProceeds", array()), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mobileMenuSubMenu\">
\t\t\t\t\t\t\t<a href=\"";
        // line 190
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("campaign_landing_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "campaginTitle", array()), "html", null, true);
        echo "</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mobileMenuSubMenu\">
\t\t\t\t\t\t\t<a href=\"";
        // line 194
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_buyer_protection");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "businessBuyerProtection", array()), "html", null, true);
        echo "</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mobileMenuButtonGroup\">
\t\t\t\t\t\t\t<a href=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyziStatic", array()), "merhantPanelUrl", array()), "html", null, true);
        echo "\" class=\"button basic\"><i class=\"icon icon--icn-shop\"></i>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "login", array()), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t<a href=\"";
        // line 199
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hesap_olustur_landing_page");
        echo "\" class=\"button primary mR-15\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "signUp", array()), "html", null, true);
        echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mobileNavigationMenuContact mobile-navigation-components\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"subTitle\">";
        // line 203
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "privileges", array()), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t\t<li class=\"description\"><a href=\"";
        // line 204
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business_fraud");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "fraud", array()), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li class=\"description\"><a href=\"";
        // line 205
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dynamic3ds_landing_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "dynamic3DS", array()), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li class=\"description bBottom\"><a href=\"";
        // line 206
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smart_payment_landing_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "smartPayment", array()), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li class=\"subTitle pT24\">";
        // line 207
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "developer", array()), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t\t<li class=\"description\"><a href=\"https://dev.iyzipay.com/tr\">";
        // line 208
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "developerPage", array()), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li class=\"description\"><a href=\"";
        // line 209
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ready_integration_landing_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "solutionsParner", array()), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"mainMM\">
\t\t\t\t\t<div class=\"mobileMenuWrap\">
\t\t\t\t\t\t<div class=\"mobileMenuSubMenu\">
\t\t\t\t\t\t\t<a href=\"";
        // line 217
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("personal");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "forPersonal", array()), "html", null, true);
        echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mobileMenuSubMenu\">
\t\t\t\t\t\t\t<a href=\"";
        // line 220
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "forBusiness", array()), "html", null, true);
        echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
</nav>
";
        
        $__internal_88ff4a114d82870c3a2726a13af8f94ef4f81e6729a8a3969557c61610e90628->leave($__internal_88ff4a114d82870c3a2726a13af8f94ef4f81e6729a8a3969557c61610e90628_prof);

        
        $__internal_64f0980ff9173adde842c07ba2b7dec1c9cf10f3f34da8c92eef3e7aaad99200->leave($__internal_64f0980ff9173adde842c07ba2b7dec1c9cf10f3f34da8c92eef3e7aaad99200_prof);

    }

    public function getTemplateName()
    {
        return "@root/Partials/_registerHeader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  533 => 220,  525 => 217,  512 => 209,  508 => 208,  504 => 207,  498 => 206,  492 => 205,  486 => 204,  482 => 203,  473 => 199,  467 => 198,  458 => 194,  449 => 190,  438 => 184,  432 => 183,  426 => 182,  420 => 179,  411 => 175,  400 => 171,  389 => 165,  383 => 164,  377 => 163,  371 => 162,  365 => 159,  357 => 156,  351 => 155,  330 => 139,  324 => 136,  319 => 134,  310 => 130,  302 => 127,  294 => 124,  289 => 122,  279 => 117,  273 => 116,  258 => 106,  250 => 103,  241 => 99,  233 => 96,  225 => 93,  218 => 91,  206 => 86,  196 => 83,  187 => 79,  179 => 76,  171 => 73,  163 => 70,  156 => 68,  136 => 53,  131 => 51,  120 => 45,  112 => 42,  104 => 39,  94 => 36,  85 => 32,  79 => 31,  63 => 17,  57 => 15,  51 => 13,  49 => 12,  41 => 9,  32 => 5,  27 => 2,  25 => 1,);
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
\t<div class=\"iyzi-container\">
\t\t<div class=\"iyzicoLogo\">
\t\t\t<a href=\"{{ path('homepage') }}\"><img src=\"{{ asset('assets/images/content/logo.svg')}}\" alt=\"iyzico Logo\"/></a>
\t\t</div>
\t\t<div class=\"d-flex desktop-navigation-components mainHeaderLeftMenu\">
\t\t\t<ul>
\t\t\t\t<li><a href=\"{{ path('help_center') }}\"><i class=\"icon icon--contact-phone\"></i></a><a href=\"tel:+90-216-599-0100\"><span>{{ translations.iyziStatic.phoneNumber }}</span></a></li>
\t\t\t\t<li class=\"mHide\"><i class=\"dividers\"></i></li>

\t\t\t\t{% if app.request.attributes.get('_locale') == \"tr\" %}
\t\t\t\t\t<li class=\"mHide\"><a href=\"#\" id=\"other-language\" class=\"lang-switcher user-action__languages--item\">{{ translations.businessHeaderNavigation.languageEnglish }}</a></li>
\t\t\t\t{% else %}
\t\t\t\t\t<li class=\"mHide\"><a href=\"#\" id=\"other-language\" class=\"lang-switcher user-action__languages--item\">{{ translations.businessHeaderNavigation.languageTurkish }}</a></li>
\t\t\t\t{% endif %}

\t\t\t</ul>
\t\t</div>
\t\t<div class=\"hamburgerMenu mobile-navigation-components\">
\t\t\t<i class=\"icon icon--variable-hamburger\"></i>
\t\t</div>
\t</div>
</div>
<nav class=\"mainNavigation\">
\t\t<div class=\"iyzi-container for-personal-submenu custom-submenu desktop-navigation-components\" style=\"display:none;\">
\t\t\t<div class=\"navMenuContent\">
\t\t\t\t<div class=\"col1\">
\t\t\t\t\t<div class=\"iyzi-row\">
\t\t\t\t\t\t<div class=\"buttonGroup\">
\t\t\t\t\t\t\t<a href=\"{{ path('personal') }}\" class=\"clear-blue\">{{ translations.businessHeaderNavigation.forPersonal }}</a>
\t\t\t\t\t\t\t<a href=\"{{ path('business') }}\">{{ translations.businessHeaderNavigation.forBusiness }}</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"title\"><a href=\"{{ path('iyzicoCardLP') }}\">{{ translations.businessHeaderNavigation.iyzicoCard }}</a><span class=\"newBadge\">{{ translations.iyziBadge.newBadge }}</span></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"title\"><a href=\"{{ path('personal') }}\">{{ translations.businessHeaderNavigation.pwi }}</a></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"title\"><a href=\"{{ path('pwi_brands') }}\">{{ translations.businessHeaderNavigation.pwiBrands }}</a></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"title\"><a href=\"{{ path('personal_buyer_protection') }}\">{{ translations.businessHeaderNavigation.bP }}</a></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"alignRight\">
\t\t\t\t\t\t\t\t<div class=\"appDownload\">
\t\t\t\t\t\t\t\t\t<p>{{ translations.personalHeaderMenu.title|raw }}</p>
\t\t\t\t\t\t\t\t\t<div class=\"downloadBtn\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('personal_campaign_landing_page') }}\" class=\"button default\">{{ translations.personalHeaderMenu.button|raw }}</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"iyzi-container for-business-submenu custom-submenu desktop-navigation-components\" style=\"display: none;\">
\t\t\t<div class=\"navMenuContent navMenuFlex\">
\t\t\t\t<div class=\"col2\">
\t\t\t\t\t<div class=\"iyzi-row\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"title\"><a href=\"{{ path('business') }}\">{{ translations.businessHeaderNavigation.rPSubTitle }}</a></div>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('business_virtual_pos') }}\">{{ translations.businessHeaderNavigation.virtualPos }}</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('business_marketplace') }}\">{{ translations.businessHeaderNavigation.marketPlace }}</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('subscription_landing_page') }}\">{{ translations.businessHeaderNavigation.subscription }}</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('business_bank_transfer') }}\">{{ translations.businessHeaderNavigation.businessBuyerProtectedMoneyTransfer }}</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"title\"><a href=\"{{ path('pay_with_iyzico_landingpage') }}\">{{ translations.businessHeaderNavigation.pwi }}</a><span class=\"newBadge\">{{ translations.iyziBadge.newBadge }}</span></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"title\"><a href=\"{{ path('mass_pay_out_landingpage') }}\">{{ translations.businessHeaderNavigation.massPayoutSubTitle }}</a><span class=\"newBadge\">{{ translations.iyziBadge.newBadge }}</span></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"title\"><a href=\"{{ path('business_receive_payment') }}\">{{ translations.businessHeaderNavigation.paymentForLink }}</a></div>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('business_stand_sales') }}\">{{ translations.businessHeaderNavigation.stantSales }}</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('business_social_media') }}\">{{ translations.businessHeaderNavigation.socialMedia }}</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('business_online_proceeds_payment') }}\">{{ translations.businessHeaderNavigation.onlineProceeds }}</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"title\"><a href=\"{{ path('campaign_landing_page') }}\">{{ translations.businessHeaderNavigation.campaginTitle }}</a></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"title\"><a href=\"{{ path('business_buyer_protection') }}\">{{ translations.businessHeaderNavigation.businessBuyerProtection }}</a></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col1\">
\t\t\t\t\t<div class=\"iyzi-row\">
\t\t\t\t\t\t<ul class=\"navRightMenu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"buttonGroup\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('hesap_olustur_landing_page') }}\" class=\"button primary\">{{ translations.businessHeaderNavigation.signUp }}</a>
\t\t\t\t\t\t\t\t\t<a href=\"{{ translations.iyzicoNewMerchant.newFormLoginUrl }}\" class=\"button basic\"><i class=\"icon icon--icn-shop\"></i>{{ translations.businessHeaderNavigation.login }}</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"navGrayBox\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"title\">{{ translations.businessHeaderNavigation.privileges }}</div>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('business_fraud') }}\">{{ translations.businessHeaderNavigation.fraud }}</a>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('dynamic3ds_landing_page') }}\">{{ translations.businessHeaderNavigation.dynamic3DS }}</a>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('smart_payment_landing_page') }}\">{{ translations.businessHeaderNavigation.smartPayment }}</a>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"title\">{{ translations.businessHeaderNavigation.developer }}</div>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://dev.iyzipay.com/tr\">{{ translations.businessHeaderNavigation.developerPage }}</a>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('ready_integration_landing_page') }}\">{{ translations.businessHeaderNavigation.solutionsParner }}</a>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"mobileNavigationMenu mobile-navigation-components\">
\t\t\t<ul>
\t\t\t\t<li class=\"businessMM\">
\t\t\t\t\t<div class=\"mobileMenuWrap\">
\t\t\t\t\t\t<div class=\"buttonGroup\">
\t\t\t\t\t\t\t<a href=\"{{ path('personal') }}\">{{ translations.businessHeaderNavigation.forPersonal }}</a>
\t\t\t\t\t\t\t<a href=\"{{ path('business') }}\" class=\"clear-blue\">{{ translations.businessHeaderNavigation.forBusiness }}</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mobileMenuSubMenu hasSub menuOpen\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"menuToggler\">{{ translations.businessHeaderNavigation.rPSubTitle }} <i class=\"icon icon--variable\"></i></a>
\t\t\t\t\t\t\t<div class=\"mobileMenuBox\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('business_virtual_pos') }}\">{{ translations.businessHeaderNavigation.virtualPos }}</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('business_marketplace') }}\">{{ translations.businessHeaderNavigation.marketPlace }}</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('subscription_landing_page') }}\">{{ translations.businessHeaderNavigation.subscription }}</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('business_bank_transfer') }}\">{{ translations.businessHeaderNavigation.businessBuyerProtectedMoneyTransfer }}</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mobileMenuSubMenu\">
\t\t\t\t\t\t\t<a href=\"{{ path('pay_with_iyzico_landingpage') }}\">{{ translations.businessHeaderNavigation.pwi }} <span class=\"newBadge\">{{ translations.iyziBadge.newBadge }}</span></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mobileMenuSubMenu\">
\t\t\t\t\t\t\t<a href=\"{{ path('mass_pay_out_landingpage') }}\">{{ translations.businessHeaderNavigation.massPayoutSubTitle }}</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mobileMenuSubMenu hasSub\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"menuToggler\">{{ translations.businessHeaderNavigation.paymentForLink }}<i class=\"icon icon--variable\"></i></a>
\t\t\t\t\t\t\t<div class=\"mobileMenuBox mobileBoxClose\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('business_stand_sales') }}\">{{ translations.businessHeaderNavigation.stantSales }}</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('business_social_media') }}\">{{ translations.businessHeaderNavigation.socialMedia }}</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('business_online_proceeds_payment') }}\">{{ translations.businessHeaderNavigation.onlineProceeds }}</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mobileMenuSubMenu\">
\t\t\t\t\t\t\t<a href=\"{{ path('campaign_landing_page') }}\">{{ translations.businessHeaderNavigation.campaginTitle }}</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mobileMenuSubMenu\">
\t\t\t\t\t\t\t<a href=\"{{ path('business_buyer_protection') }}\">{{ translations.businessHeaderNavigation.businessBuyerProtection }}</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mobileMenuButtonGroup\">
\t\t\t\t\t\t\t<a href=\"{{ translations.iyziStatic.merhantPanelUrl }}\" class=\"button basic\"><i class=\"icon icon--icn-shop\"></i>{{ translations.businessHeaderNavigation.login }}</a>
\t\t\t\t\t\t\t<a href=\"{{ path('hesap_olustur_landing_page') }}\" class=\"button primary mR-15\">{{ translations.businessHeaderNavigation.signUp }}</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mobileNavigationMenuContact mobile-navigation-components\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"subTitle\">{{ translations.businessHeaderNavigation.privileges }}</li>
\t\t\t\t\t\t\t\t<li class=\"description\"><a href=\"{{ path('business_fraud') }}\">{{ translations.businessHeaderNavigation.fraud }}</a></li>
\t\t\t\t\t\t\t\t<li class=\"description\"><a href=\"{{ path('dynamic3ds_landing_page') }}\">{{ translations.businessHeaderNavigation.dynamic3DS }}</a></li>
\t\t\t\t\t\t\t\t<li class=\"description bBottom\"><a href=\"{{ path('smart_payment_landing_page') }}\">{{ translations.businessHeaderNavigation.smartPayment }}</a></li>
\t\t\t\t\t\t\t\t<li class=\"subTitle pT24\">{{ translations.businessHeaderNavigation.developer }}</li>
\t\t\t\t\t\t\t\t<li class=\"description\"><a href=\"https://dev.iyzipay.com/tr\">{{ translations.businessHeaderNavigation.developerPage }}</a></li>
\t\t\t\t\t\t\t\t<li class=\"description\"><a href=\"{{ path('ready_integration_landing_page') }}\">{{ translations.businessHeaderNavigation.solutionsParner }}</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"mainMM\">
\t\t\t\t\t<div class=\"mobileMenuWrap\">
\t\t\t\t\t\t<div class=\"mobileMenuSubMenu\">
\t\t\t\t\t\t\t<a href=\"{{ path('personal') }}\">{{ translations.businessHeaderNavigation.forPersonal }}</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mobileMenuSubMenu\">
\t\t\t\t\t\t\t<a href=\"{{ path('business') }}\">{{ translations.businessHeaderNavigation.forBusiness }}</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
</nav>
", "@root/Partials/_registerHeader.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/Partials/_registerHeader.html.twig");
    }
}
