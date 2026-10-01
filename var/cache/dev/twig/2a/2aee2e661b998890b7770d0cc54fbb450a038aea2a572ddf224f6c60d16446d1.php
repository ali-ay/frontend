<?php

/* @root/LandingPage/Widgets/_merchantTypeSection.html.twig */
class __TwigTemplate_c686ddaa7f86a9d554a7891c1988dbe953050d910b396f2855bc91fa1e3d59f7 extends Twig_Template
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
        $__internal_7520a2c9b1f83ca4a61a8614d731edbb869302308ef5465233cf9f8f11303829 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7520a2c9b1f83ca4a61a8614d731edbb869302308ef5465233cf9f8f11303829->enter($__internal_7520a2c9b1f83ca4a61a8614d731edbb869302308ef5465233cf9f8f11303829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/LandingPage/Widgets/_merchantTypeSection.html.twig"));

        $__internal_b709e7732ae50a888265b6c8e2593bf3e4378d5ecbc9d70edc9c5b8ffb77db30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b709e7732ae50a888265b6c8e2593bf3e4378d5ecbc9d70edc9c5b8ffb77db30->enter($__internal_b709e7732ae50a888265b6c8e2593bf3e4378d5ecbc9d70edc9c5b8ffb77db30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/LandingPage/Widgets/_merchantTypeSection.html.twig"));

        // line 1
        echo "<section class=\"merchantType\">
  <div class=\"iyzi-container\">
    <div class=\"title\">";
        // line 3
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoMerchantType", array()), "title", array());
        echo "</div>
    <div class=\"sectionBox\">
      <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kurumsal_hesap_landing_page");
        echo "\">
        <div class=\"mBox-title\">";
        // line 6
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoMerchantType", array()), "corparateTitle", array());
        echo "</div>
        <ul>
          <li>";
        // line 8
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoMerchantType", array()), "corparateContentOne", array());
        echo "<span>";
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoMerchantType", array()), "corparateContentOneDesc", array());
        echo "</span></li>
          <li>";
        // line 9
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoMerchantType", array()), "corparateContentTwo", array());
        echo "</li>
        </ul>
        <span class=\"button primary\">";
        // line 11
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoMerchantType", array()), "corparateButtonText", array());
        echo "</span>
      </a>
      <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bireysel_hesap_landing_page");
        echo "\">
        <div class=\"mBox-title\">";
        // line 14
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoMerchantType", array()), "personalTitle", array());
        echo "</div>
        <ul>
          <li>";
        // line 16
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoMerchantType", array()), "personalContent", array());
        echo "<span>";
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoMerchantType", array()), "personalContentDesc", array());
        echo "</span></li>
        </ul>
        <span class=\"button default\">";
        // line 18
        echo $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoMerchantType", array()), "personalButtonText", array());
        echo "</span>
      </a>
    </div>
    <div class=\"haveAccount\">
      <span>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoNewMerchant", array()), "newFormLoginButton", array()), "html", null, true);
        echo "</span>
      <div class=\"buttonGroup\">
        <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoNewMerchant", array()), "newFormLoginUrl", array()), "html", null, true);
        echo "\" class=\"button basic\"><i class=\"icon icon--icn-shop\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "login", array()), "html", null, true);
        echo "</a>
      </div>
    </div>
  </div>
</section>
";
        
        $__internal_7520a2c9b1f83ca4a61a8614d731edbb869302308ef5465233cf9f8f11303829->leave($__internal_7520a2c9b1f83ca4a61a8614d731edbb869302308ef5465233cf9f8f11303829_prof);

        
        $__internal_b709e7732ae50a888265b6c8e2593bf3e4378d5ecbc9d70edc9c5b8ffb77db30->leave($__internal_b709e7732ae50a888265b6c8e2593bf3e4378d5ecbc9d70edc9c5b8ffb77db30_prof);

    }

    public function getTemplateName()
    {
        return "@root/LandingPage/Widgets/_merchantTypeSection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 24,  82 => 22,  75 => 18,  68 => 16,  63 => 14,  59 => 13,  54 => 11,  49 => 9,  43 => 8,  38 => 6,  34 => 5,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"merchantType\">
  <div class=\"iyzi-container\">
    <div class=\"title\">{{ translations.iyzicoMerchantType.title|raw }}</div>
    <div class=\"sectionBox\">
      <a href=\"{{ path('kurumsal_hesap_landing_page') }}\">
        <div class=\"mBox-title\">{{ translations.iyzicoMerchantType.corparateTitle|raw }}</div>
        <ul>
          <li>{{ translations.iyzicoMerchantType.corparateContentOne|raw }}<span>{{ translations.iyzicoMerchantType.corparateContentOneDesc|raw }}</span></li>
          <li>{{ translations.iyzicoMerchantType.corparateContentTwo|raw }}</li>
        </ul>
        <span class=\"button primary\">{{ translations.iyzicoMerchantType.corparateButtonText|raw }}</span>
      </a>
      <a href=\"{{ path('bireysel_hesap_landing_page') }}\">
        <div class=\"mBox-title\">{{ translations.iyzicoMerchantType.personalTitle|raw }}</div>
        <ul>
          <li>{{ translations.iyzicoMerchantType.personalContent|raw }}<span>{{ translations.iyzicoMerchantType.personalContentDesc|raw }}</span></li>
        </ul>
        <span class=\"button default\">{{ translations.iyzicoMerchantType.personalButtonText|raw }}</span>
      </a>
    </div>
    <div class=\"haveAccount\">
      <span>{{ translations.iyzicoNewMerchant.newFormLoginButton }}</span>
      <div class=\"buttonGroup\">
        <a href=\"{{ translations.iyzicoNewMerchant.newFormLoginUrl }}\" class=\"button basic\"><i class=\"icon icon--icn-shop\"></i> {{ translations.businessHeaderNavigation.login }}</a>
      </div>
    </div>
  </div>
</section>
", "@root/LandingPage/Widgets/_merchantTypeSection.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/LandingPage/Widgets/_merchantTypeSection.html.twig");
    }
}
