<?php

/* WebBundle:LandingPage:goodToGoodLandingPage.html.twig */
class __TwigTemplate_3ff2aded10f2f54dccc0e394b11ff73233d407b0300d818ae515e63aea84a769 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::businessLandingPage.html.twig", "WebBundle:LandingPage:goodToGoodLandingPage.html.twig", 1);
        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'description' => array($this, 'block_description'),
            'openGraph' => array($this, 'block_openGraph'),
            'bodyClass' => array($this, 'block_bodyClass'),
            'headerClasses' => array($this, 'block_headerClasses'),
            'footerClass' => array($this, 'block_footerClass'),
            'main' => array($this, 'block_main'),
            'bodyBottomScripts' => array($this, 'block_bodyBottomScripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::businessLandingPage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29b2c96ae07f373bc7c96d9c436f0fb44be8515508bde3af8b5e4c29ce5a7121 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29b2c96ae07f373bc7c96d9c436f0fb44be8515508bde3af8b5e4c29ce5a7121->enter($__internal_29b2c96ae07f373bc7c96d9c436f0fb44be8515508bde3af8b5e4c29ce5a7121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:LandingPage:goodToGoodLandingPage.html.twig"));

        $__internal_32402bd7628f057bf722a7307bb689496e427861cbf06f158159207b0d851441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32402bd7628f057bf722a7307bb689496e427861cbf06f158159207b0d851441->enter($__internal_32402bd7628f057bf722a7307bb689496e427861cbf06f158159207b0d851441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:LandingPage:goodToGoodLandingPage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29b2c96ae07f373bc7c96d9c436f0fb44be8515508bde3af8b5e4c29ce5a7121->leave($__internal_29b2c96ae07f373bc7c96d9c436f0fb44be8515508bde3af8b5e4c29ce5a7121_prof);

        
        $__internal_32402bd7628f057bf722a7307bb689496e427861cbf06f158159207b0d851441->leave($__internal_32402bd7628f057bf722a7307bb689496e427861cbf06f158159207b0d851441_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_5f2872e74fd7d7493b8fd58251a24a9e6000ca94f8812be33f2ed486f55cc9ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f2872e74fd7d7493b8fd58251a24a9e6000ca94f8812be33f2ed486f55cc9ed->enter($__internal_5f2872e74fd7d7493b8fd58251a24a9e6000ca94f8812be33f2ed486f55cc9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_42018eecd5618f9c4a3bbf3a65dd6faa8cfbd09f222e77e73a7e068583d46e8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42018eecd5618f9c4a3bbf3a65dd6faa8cfbd09f222e77e73a7e068583d46e8e->enter($__internal_42018eecd5618f9c4a3bbf3a65dd6faa8cfbd09f222e77e73a7e068583d46e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["pageContents"] ?? $this->getContext($context, "pageContents")), "data", array()), "seo", array()), "title", array()), "html", null, true);
        
        $__internal_42018eecd5618f9c4a3bbf3a65dd6faa8cfbd09f222e77e73a7e068583d46e8e->leave($__internal_42018eecd5618f9c4a3bbf3a65dd6faa8cfbd09f222e77e73a7e068583d46e8e_prof);

        
        $__internal_5f2872e74fd7d7493b8fd58251a24a9e6000ca94f8812be33f2ed486f55cc9ed->leave($__internal_5f2872e74fd7d7493b8fd58251a24a9e6000ca94f8812be33f2ed486f55cc9ed_prof);

    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        $__internal_ea580b391025f8cf355d01f14c83a16465cf3f6e603c11389f3bef266806a019 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea580b391025f8cf355d01f14c83a16465cf3f6e603c11389f3bef266806a019->enter($__internal_ea580b391025f8cf355d01f14c83a16465cf3f6e603c11389f3bef266806a019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_25e335b93c9695ab8ddc2b2428405ae6a69fd6c48c3dd04f4bcfad9ffb48ead0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25e335b93c9695ab8ddc2b2428405ae6a69fd6c48c3dd04f4bcfad9ffb48ead0->enter($__internal_25e335b93c9695ab8ddc2b2428405ae6a69fd6c48c3dd04f4bcfad9ffb48ead0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["pageContents"] ?? $this->getContext($context, "pageContents")), "data", array()), "seo", array()), "description", array()), "html", null, true);
        
        $__internal_25e335b93c9695ab8ddc2b2428405ae6a69fd6c48c3dd04f4bcfad9ffb48ead0->leave($__internal_25e335b93c9695ab8ddc2b2428405ae6a69fd6c48c3dd04f4bcfad9ffb48ead0_prof);

        
        $__internal_ea580b391025f8cf355d01f14c83a16465cf3f6e603c11389f3bef266806a019->leave($__internal_ea580b391025f8cf355d01f14c83a16465cf3f6e603c11389f3bef266806a019_prof);

    }

    // line 5
    public function block_openGraph($context, array $blocks = array())
    {
        $__internal_a6fdf31d2c57b929ab604bd600a18013f04b5b0973146e852e53f96a2ca51d67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6fdf31d2c57b929ab604bd600a18013f04b5b0973146e852e53f96a2ca51d67->enter($__internal_a6fdf31d2c57b929ab604bd600a18013f04b5b0973146e852e53f96a2ca51d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "openGraph"));

        $__internal_8aba6858b6d1e122626dd6d4dd0129b9a1c78f673bc6a49ca6ea09a561e09590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aba6858b6d1e122626dd6d4dd0129b9a1c78f673bc6a49ca6ea09a561e09590->enter($__internal_8aba6858b6d1e122626dd6d4dd0129b9a1c78f673bc6a49ca6ea09a561e09590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "openGraph"));

        // line 6
        echo "\t<meta property=\"og:title\" content=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["pageContents"] ?? $this->getContext($context, "pageContents")), "data", array()), "seo", array()), "ogTitle", array()), "html", null, true);
        echo "\" />
\t<meta property=\"og:image\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["pageContents"] ?? $this->getContext($context, "pageContents")), "data", array()), "seo", array()), "ogImage", array()), "html", null, true);
        echo "\" />
\t<meta property=\"og:description\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["pageContents"] ?? $this->getContext($context, "pageContents")), "data", array()), "seo", array()), "ogDescription", array()), "html", null, true);
        echo "\" />
";
        
        $__internal_8aba6858b6d1e122626dd6d4dd0129b9a1c78f673bc6a49ca6ea09a561e09590->leave($__internal_8aba6858b6d1e122626dd6d4dd0129b9a1c78f673bc6a49ca6ea09a561e09590_prof);

        
        $__internal_a6fdf31d2c57b929ab604bd600a18013f04b5b0973146e852e53f96a2ca51d67->leave($__internal_a6fdf31d2c57b929ab604bd600a18013f04b5b0973146e852e53f96a2ca51d67_prof);

    }

    // line 10
    public function block_bodyClass($context, array $blocks = array())
    {
        $__internal_2faddfc11f791cfee1f35cacc2fdede97646a3b0a4dc6b4ccc60d0005dceb68a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2faddfc11f791cfee1f35cacc2fdede97646a3b0a4dc6b4ccc60d0005dceb68a->enter($__internal_2faddfc11f791cfee1f35cacc2fdede97646a3b0a4dc6b4ccc60d0005dceb68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyClass"));

        $__internal_273cc6c58e54b82e5b6e5c286da46eb22ba475fd9a14853b34f20778782231a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_273cc6c58e54b82e5b6e5c286da46eb22ba475fd9a14853b34f20778782231a2->enter($__internal_273cc6c58e54b82e5b6e5c286da46eb22ba475fd9a14853b34f20778782231a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyClass"));

        echo "business businessVirtualPos goodToGood";
        
        $__internal_273cc6c58e54b82e5b6e5c286da46eb22ba475fd9a14853b34f20778782231a2->leave($__internal_273cc6c58e54b82e5b6e5c286da46eb22ba475fd9a14853b34f20778782231a2_prof);

        
        $__internal_2faddfc11f791cfee1f35cacc2fdede97646a3b0a4dc6b4ccc60d0005dceb68a->leave($__internal_2faddfc11f791cfee1f35cacc2fdede97646a3b0a4dc6b4ccc60d0005dceb68a_prof);

    }

    // line 11
    public function block_headerClasses($context, array $blocks = array())
    {
        $__internal_df2b38364f975ae91a27cee57809622750912a45722257a2c9f7cc84c44cf203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df2b38364f975ae91a27cee57809622750912a45722257a2c9f7cc84c44cf203->enter($__internal_df2b38364f975ae91a27cee57809622750912a45722257a2c9f7cc84c44cf203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerClasses"));

        $__internal_4745f4325ac4ea65544b3a4235d2a0f04edb7b8b19247b9beeaac5adeb091593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4745f4325ac4ea65544b3a4235d2a0f04edb7b8b19247b9beeaac5adeb091593->enter($__internal_4745f4325ac4ea65544b3a4235d2a0f04edb7b8b19247b9beeaac5adeb091593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerClasses"));

        
        $__internal_4745f4325ac4ea65544b3a4235d2a0f04edb7b8b19247b9beeaac5adeb091593->leave($__internal_4745f4325ac4ea65544b3a4235d2a0f04edb7b8b19247b9beeaac5adeb091593_prof);

        
        $__internal_df2b38364f975ae91a27cee57809622750912a45722257a2c9f7cc84c44cf203->leave($__internal_df2b38364f975ae91a27cee57809622750912a45722257a2c9f7cc84c44cf203_prof);

    }

    // line 12
    public function block_footerClass($context, array $blocks = array())
    {
        $__internal_83e60dd82d38a52eb68331ccee6779edee389232bd5730219f9b6ac3aad49def = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83e60dd82d38a52eb68331ccee6779edee389232bd5730219f9b6ac3aad49def->enter($__internal_83e60dd82d38a52eb68331ccee6779edee389232bd5730219f9b6ac3aad49def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerClass"));

        $__internal_d1b2a6e2a44f105e9502e80c63d54173f5b241f6ca41d6034d476cd8f8768ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1b2a6e2a44f105e9502e80c63d54173f5b241f6ca41d6034d476cd8f8768ec3->enter($__internal_d1b2a6e2a44f105e9502e80c63d54173f5b241f6ca41d6034d476cd8f8768ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerClass"));

        
        $__internal_d1b2a6e2a44f105e9502e80c63d54173f5b241f6ca41d6034d476cd8f8768ec3->leave($__internal_d1b2a6e2a44f105e9502e80c63d54173f5b241f6ca41d6034d476cd8f8768ec3_prof);

        
        $__internal_83e60dd82d38a52eb68331ccee6779edee389232bd5730219f9b6ac3aad49def->leave($__internal_83e60dd82d38a52eb68331ccee6779edee389232bd5730219f9b6ac3aad49def_prof);

    }

    // line 13
    public function block_main($context, array $blocks = array())
    {
        $__internal_a617bd8113f9b266fe2db20f623efc15155fee987f484befd5e308d14ab19363 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a617bd8113f9b266fe2db20f623efc15155fee987f484befd5e308d14ab19363->enter($__internal_a617bd8113f9b266fe2db20f623efc15155fee987f484befd5e308d14ab19363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_66442f33d6c264f5c967c8898e7f113d11bc8a2789a4e5e94031c61fea23ac10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66442f33d6c264f5c967c8898e7f113d11bc8a2789a4e5e94031c61fea23ac10->enter($__internal_66442f33d6c264f5c967c8898e7f113d11bc8a2789a4e5e94031c61fea23ac10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 14
        echo "\t";
        $this->loadTemplate("@root/LandingPage/Widgets/_gTGHeaderContent.html.twig", "WebBundle:LandingPage:goodToGoodLandingPage.html.twig", 14)->display(array_merge($context, array("header" => $this->getAttribute(($context["widgets"] ?? $this->getContext($context, "widgets")), "iyideniyiyeheaderwidget", array()))));
        // line 15
        echo "\t";
        $this->loadTemplate("@root/LandingPage/Widgets/_newGTGWhoIsiyzico.html.twig", "WebBundle:LandingPage:goodToGoodLandingPage.html.twig", 15)->display(array_merge($context, array("social" => $this->getAttribute(($context["widgets"] ?? $this->getContext($context, "widgets")), "iyideniyiyesocialwidget", array()))));
        // line 16
        echo "\t";
        $this->loadTemplate("@root/LandingPage/Widgets/_gTGRegisterG4T.html.twig", "WebBundle:LandingPage:goodToGoodLandingPage.html.twig", 16)->display(array_merge($context, array("femaleentrepreneur" => $this->getAttribute(($context["widgets"] ?? $this->getContext($context, "widgets")), "iyideniyiyefemalewidget", array()))));
        // line 17
        echo "\t";
        $this->loadTemplate("@root/LandingPage/Widgets/_gTGFullBoxOne.html.twig", "WebBundle:LandingPage:goodToGoodLandingPage.html.twig", 17)->display(array_merge($context, array("socialGroupVideo" => $this->getAttribute(($context["widgets"] ?? $this->getContext($context, "widgets")), "iyideniyiyesocialgroupvideowidget", array()))));
        // line 18
        echo "\t";
        $this->loadTemplate("@root/LandingPage/Widgets/_gTGRegister.html.twig", "WebBundle:LandingPage:goodToGoodLandingPage.html.twig", 18)->display(array_merge($context, array("iyzicostart" => $this->getAttribute(($context["widgets"] ?? $this->getContext($context, "widgets")), "iyideniyiyeiyzicostartwidget", array()))));
        // line 19
        echo "\t";
        $this->loadTemplate("@root/LandingPage/Widgets/_personalPwiSss.html.twig", "WebBundle:LandingPage:goodToGoodLandingPage.html.twig", 19)->display(array_merge($context, array("pwiSss" => $this->getAttribute(($context["widgets"] ?? $this->getContext($context, "widgets")), "personalpwissswidget", array()))));
        
        $__internal_66442f33d6c264f5c967c8898e7f113d11bc8a2789a4e5e94031c61fea23ac10->leave($__internal_66442f33d6c264f5c967c8898e7f113d11bc8a2789a4e5e94031c61fea23ac10_prof);

        
        $__internal_a617bd8113f9b266fe2db20f623efc15155fee987f484befd5e308d14ab19363->leave($__internal_a617bd8113f9b266fe2db20f623efc15155fee987f484befd5e308d14ab19363_prof);

    }

    // line 22
    public function block_bodyBottomScripts($context, array $blocks = array())
    {
        $__internal_7821a78acef3068c11fd9eafe6623ef8793c090c599be940e2371769b8e9d496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7821a78acef3068c11fd9eafe6623ef8793c090c599be940e2371769b8e9d496->enter($__internal_7821a78acef3068c11fd9eafe6623ef8793c090c599be940e2371769b8e9d496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyBottomScripts"));

        $__internal_887fd9bbf84e063ba90cb8e322727a478762a0534d8b7dd5522b5ac7ed0102c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_887fd9bbf84e063ba90cb8e322727a478762a0534d8b7dd5522b5ac7ed0102c8->enter($__internal_887fd9bbf84e063ba90cb8e322727a478762a0534d8b7dd5522b5ac7ed0102c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyBottomScripts"));

        // line 23
        echo "\t<script>
\t\twindow.lazyLoadOptions = {
\t\t\tthreshold: 50
\t\t};
\t\twindow.addEventListener('LazyLoad::Initialized', function (e) {
\t\t\tconsole.log(e.detail.instance);
\t\t}, false);
\t</script>
";
        
        $__internal_887fd9bbf84e063ba90cb8e322727a478762a0534d8b7dd5522b5ac7ed0102c8->leave($__internal_887fd9bbf84e063ba90cb8e322727a478762a0534d8b7dd5522b5ac7ed0102c8_prof);

        
        $__internal_7821a78acef3068c11fd9eafe6623ef8793c090c599be940e2371769b8e9d496->leave($__internal_7821a78acef3068c11fd9eafe6623ef8793c090c599be940e2371769b8e9d496_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:LandingPage:goodToGoodLandingPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 23,  200 => 22,  189 => 19,  186 => 18,  183 => 17,  180 => 16,  177 => 15,  174 => 14,  165 => 13,  148 => 12,  131 => 11,  113 => 10,  101 => 8,  97 => 7,  92 => 6,  83 => 5,  65 => 4,  47 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::businessLandingPage.html.twig\" %}

{% block pageTitle %}{{ pageContents.data.seo.title }}{% endblock %}
{% block description %}{{ pageContents.data.seo.description }}{% endblock %}
{% block openGraph %}
\t<meta property=\"og:title\" content=\"{{ pageContents.data.seo.ogTitle }}\" />
\t<meta property=\"og:image\" content=\"{{ pageContents.data.seo.ogImage }}\" />
\t<meta property=\"og:description\" content=\"{{ pageContents.data.seo.ogDescription }}\" />
{% endblock %}
{% block bodyClass %}business businessVirtualPos goodToGood{% endblock %}
{% block headerClasses %}{% endblock %}
{% block footerClass %}{% endblock %}
{% block main %}
\t{% include '@root/LandingPage/Widgets/_gTGHeaderContent.html.twig' with {'header':widgets.iyideniyiyeheaderwidget } %}
\t{% include '@root/LandingPage/Widgets/_newGTGWhoIsiyzico.html.twig' with {'social':widgets.iyideniyiyesocialwidget } %}
\t{% include '@root/LandingPage/Widgets/_gTGRegisterG4T.html.twig' with {'femaleentrepreneur':widgets.iyideniyiyefemalewidget } %}
\t{% include '@root/LandingPage/Widgets/_gTGFullBoxOne.html.twig' with {'socialGroupVideo':widgets.iyideniyiyesocialgroupvideowidget } %}
\t{% include '@root/LandingPage/Widgets/_gTGRegister.html.twig' with {'iyzicostart':widgets.iyideniyiyeiyzicostartwidget } %}
\t{% include '@root/LandingPage/Widgets/_personalPwiSss.html.twig' with {'pwiSss':widgets.personalpwissswidget} %}
{% endblock %}

{% block bodyBottomScripts %}
\t<script>
\t\twindow.lazyLoadOptions = {
\t\t\tthreshold: 50
\t\t};
\t\twindow.addEventListener('LazyLoad::Initialized', function (e) {
\t\t\tconsole.log(e.detail.instance);
\t\t}, false);
\t</script>
{% endblock %}
", "WebBundle:LandingPage:goodToGoodLandingPage.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/LandingPage/goodToGoodLandingPage.html.twig");
    }
}
