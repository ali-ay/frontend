<?php

/* @root/LandingPage/Widgets/_mainHeaderContent.html.twig */
class __TwigTemplate_1a57ccda50b4251467296d0fef18f5b0e9db9fa04a6fec94ac1bfa7df7c39c35 extends Twig_Template
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
        $__internal_5f848c4fc4938c1e18efd33a7f2ea796dc620cebeeaa57c4dcdec2aa32e9a57a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f848c4fc4938c1e18efd33a7f2ea796dc620cebeeaa57c4dcdec2aa32e9a57a->enter($__internal_5f848c4fc4938c1e18efd33a7f2ea796dc620cebeeaa57c4dcdec2aa32e9a57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/LandingPage/Widgets/_mainHeaderContent.html.twig"));

        $__internal_51f6f8d1d36001a9b714ef3d272421c5f1611dea3e19ac1e91892800dbe2dad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f6f8d1d36001a9b714ef3d272421c5f1611dea3e19ac1e91892800dbe2dad9->enter($__internal_51f6f8d1d36001a9b714ef3d272421c5f1611dea3e19ac1e91892800dbe2dad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/LandingPage/Widgets/_mainHeaderContent.html.twig"));

        // line 1
        echo "<section class=\"mainHeaderBanner\">
  <div class=\"container-hero\">
    <div class=\"headerL\">
      ";
        // line 4
        if ((($context["deviceType"] ?? $this->getContext($context, "deviceType")) == "mobile")) {
            // line 5
            echo "
        <img src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/content/new-main-left-img-hero.png"), "html", null, true);
            echo "\" alt=\"iyzico Kendim İçin\"/>

      ";
        } else {
            // line 9
            echo "
        <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/content/new-main-left-img-hero@2x.png"), "html", null, true);
            echo "\" alt=\"iyzico Kendim İçin\"/>

      ";
        }
        // line 13
        echo "

      <div class=\"headerBox\">
        <h1>
          <strong>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "mainHeaderContent", array()), "boxOneTitleBold", array()), "html", null, true);
        echo "<br>
              <span>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "mainHeaderContent", array()), "boxOneTitleLight", array()), "html", null, true);
        echo "</span>
            </strong>
        </h1>
        <ul>
          <li>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "mainHeaderContent", array()), "boxOneBulletOne", array()), "html", null, true);
        echo "</li>
          <li>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "mainHeaderContent", array()), "boxOneBulletTwo", array()), "html", null, true);
        echo "</li>
          <li>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "mainHeaderContent", array()), "boxOneBulletThree", array()), "html", null, true);
        echo "</li>
          <li>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "mainHeaderContent", array()), "boxOneBulletFour", array()), "html", null, true);
        echo "</li>
        </ul>
        <div class=\"buttonGroup\">
          <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("personal");
        echo "\" class=\"button primary\" title=\"Kurumsal\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "mainHeaderContent", array()), "boxOneButton", array()), "html", null, true);
        echo "</a>
          <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pwi_brands");
        echo "\" class=\"button basic\"><i class=\"icon icon--icn-shop\"></i> Mağazalar</a>
        </div>
      </div>
    </div>
    <div class=\"headerR\">
      ";
        // line 34
        if ((($context["deviceType"] ?? $this->getContext($context, "deviceType")) == "mobile")) {
            // line 35
            echo "
        <img src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/content/new-main-right-img-hero.png"), "html", null, true);
            echo "\" alt=\"iyzico İşim İçin\"/>

      ";
        } else {
            // line 39
            echo "
        <img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/content/new-main-right-img-hero@2x.png"), "html", null, true);
            echo "\" alt=\"iyzico İşim İçin\"/>

      ";
        }
        // line 43
        echo "
      <div class=\"headerBox\">
        <h2>
          <strong>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "mainHeaderContent", array()), "boxTwoTitleBold", array()), "html", null, true);
        echo "<br>
              <span>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "mainHeaderContent", array()), "boxTwoTitleLight", array()), "html", null, true);
        echo "</span>
          </strong>
        </h2>
        <ul>
          <li>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "mainHeaderContent", array()), "boxTwoBulletOne", array()), "html", null, true);
        echo "</li>
          <li>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "mainHeaderContent", array()), "boxTwoBulletTwo", array()), "html", null, true);
        echo "</li>
          <li>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "mainHeaderContent", array()), "boxTwoBulletThree", array()), "html", null, true);
        echo "</li>
          <li>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "mainHeaderContent", array()), "boxTwoBulletFour", array()), "html", null, true);
        echo "</li>
        </ul>
        <div class=\"buttonGroup\">
          <a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business");
        echo "\" class=\"button default\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "mainHeaderContent", array()), "boxTwoButton", array()), "html", null, true);
        echo "</a>
          <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "iyzicoNewMerchant", array()), "newFormLoginUrl", array()), "html", null, true);
        echo "\" class=\"button basic\"><i class=\"icon icon--icn-shop\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "businessHeaderNavigation", array()), "login", array()), "html", null, true);
        echo "</a>
        </div>
      </div>
    </div>
  </div>
</section>
";
        
        $__internal_5f848c4fc4938c1e18efd33a7f2ea796dc620cebeeaa57c4dcdec2aa32e9a57a->leave($__internal_5f848c4fc4938c1e18efd33a7f2ea796dc620cebeeaa57c4dcdec2aa32e9a57a_prof);

        
        $__internal_51f6f8d1d36001a9b714ef3d272421c5f1611dea3e19ac1e91892800dbe2dad9->leave($__internal_51f6f8d1d36001a9b714ef3d272421c5f1611dea3e19ac1e91892800dbe2dad9_prof);

    }

    public function getTemplateName()
    {
        return "@root/LandingPage/Widgets/_mainHeaderContent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 58,  153 => 57,  147 => 54,  143 => 53,  139 => 52,  135 => 51,  128 => 47,  124 => 46,  119 => 43,  113 => 40,  110 => 39,  104 => 36,  101 => 35,  99 => 34,  91 => 29,  85 => 28,  79 => 25,  75 => 24,  71 => 23,  67 => 22,  60 => 18,  56 => 17,  50 => 13,  44 => 10,  41 => 9,  35 => 6,  32 => 5,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"mainHeaderBanner\">
  <div class=\"container-hero\">
    <div class=\"headerL\">
      {% if deviceType == 'mobile' %}

        <img src=\"{{ asset('assets/images/content/new-main-left-img-hero.png')}}\" alt=\"iyzico Kendim İçin\"/>

      {% else %}

        <img src=\"{{ asset('assets/images/content/new-main-left-img-hero@2x.png')}}\" alt=\"iyzico Kendim İçin\"/>

      {% endif %}


      <div class=\"headerBox\">
        <h1>
          <strong>{{ translations.mainHeaderContent.boxOneTitleBold }}<br>
              <span>{{ translations.mainHeaderContent.boxOneTitleLight }}</span>
            </strong>
        </h1>
        <ul>
          <li>{{ translations.mainHeaderContent.boxOneBulletOne }}</li>
          <li>{{ translations.mainHeaderContent.boxOneBulletTwo }}</li>
          <li>{{ translations.mainHeaderContent.boxOneBulletThree }}</li>
          <li>{{ translations.mainHeaderContent.boxOneBulletFour }}</li>
        </ul>
        <div class=\"buttonGroup\">
          <a href=\"{{ path('personal') }}\" class=\"button primary\" title=\"Kurumsal\">{{ translations.mainHeaderContent.boxOneButton }}</a>
          <a href=\"{{ path('pwi_brands') }}\" class=\"button basic\"><i class=\"icon icon--icn-shop\"></i> Mağazalar</a>
        </div>
      </div>
    </div>
    <div class=\"headerR\">
      {% if deviceType == 'mobile' %}

        <img src=\"{{ asset('assets/images/content/new-main-right-img-hero.png')}}\" alt=\"iyzico İşim İçin\"/>

      {% else %}

        <img src=\"{{ asset('assets/images/content/new-main-right-img-hero@2x.png')}}\" alt=\"iyzico İşim İçin\"/>

      {% endif %}

      <div class=\"headerBox\">
        <h2>
          <strong>{{ translations.mainHeaderContent.boxTwoTitleBold }}<br>
              <span>{{ translations.mainHeaderContent.boxTwoTitleLight }}</span>
          </strong>
        </h2>
        <ul>
          <li>{{ translations.mainHeaderContent.boxTwoBulletOne }}</li>
          <li>{{ translations.mainHeaderContent.boxTwoBulletTwo }}</li>
          <li>{{ translations.mainHeaderContent.boxTwoBulletThree }}</li>
          <li>{{ translations.mainHeaderContent.boxTwoBulletFour }}</li>
        </ul>
        <div class=\"buttonGroup\">
          <a href=\"{{ path('business') }}\" class=\"button default\">{{ translations.mainHeaderContent.boxTwoButton }}</a>
          <a href=\"{{ translations.iyzicoNewMerchant.newFormLoginUrl }}\" class=\"button basic\"><i class=\"icon icon--icn-shop\"></i> {{ translations.businessHeaderNavigation.login }}</a>
        </div>
      </div>
    </div>
  </div>
</section>
", "@root/LandingPage/Widgets/_mainHeaderContent.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/LandingPage/Widgets/_mainHeaderContent.html.twig");
    }
}
