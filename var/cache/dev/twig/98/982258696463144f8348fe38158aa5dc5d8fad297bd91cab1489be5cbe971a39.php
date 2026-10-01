<?php

/* WebBundle:LandingPage:personalHomeLandingPage.html.twig */
class __TwigTemplate_f4ea7da83f751c4e5dc86e0bcd909825373df3e86f9693d9913a448e1e66e1aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::personalLandingPage.html.twig", "WebBundle:LandingPage:personalHomeLandingPage.html.twig", 1);
        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'description' => array($this, 'block_description'),
            'openGraph' => array($this, 'block_openGraph'),
            'bodyClass' => array($this, 'block_bodyClass'),
            'headerClasses' => array($this, 'block_headerClasses'),
            'footerClass' => array($this, 'block_footerClass'),
            'headContent' => array($this, 'block_headContent'),
            'main' => array($this, 'block_main'),
            'footerContent' => array($this, 'block_footerContent'),
            'bodyBottomScripts' => array($this, 'block_bodyBottomScripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::personalLandingPage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efc4a64fbf3c73a22ce4ece804279cf9cc7f8d07c044f467feca9a87261e8f8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efc4a64fbf3c73a22ce4ece804279cf9cc7f8d07c044f467feca9a87261e8f8b->enter($__internal_efc4a64fbf3c73a22ce4ece804279cf9cc7f8d07c044f467feca9a87261e8f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:LandingPage:personalHomeLandingPage.html.twig"));

        $__internal_96272c844f5e6d996c4af79b4352544194c7fdd50b1b59e27146d72799d2a0aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96272c844f5e6d996c4af79b4352544194c7fdd50b1b59e27146d72799d2a0aa->enter($__internal_96272c844f5e6d996c4af79b4352544194c7fdd50b1b59e27146d72799d2a0aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:LandingPage:personalHomeLandingPage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efc4a64fbf3c73a22ce4ece804279cf9cc7f8d07c044f467feca9a87261e8f8b->leave($__internal_efc4a64fbf3c73a22ce4ece804279cf9cc7f8d07c044f467feca9a87261e8f8b_prof);

        
        $__internal_96272c844f5e6d996c4af79b4352544194c7fdd50b1b59e27146d72799d2a0aa->leave($__internal_96272c844f5e6d996c4af79b4352544194c7fdd50b1b59e27146d72799d2a0aa_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_47458958c2a69ff5bed79fc358910a27f46833e7d183e130c6f6f7cb62503be4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47458958c2a69ff5bed79fc358910a27f46833e7d183e130c6f6f7cb62503be4->enter($__internal_47458958c2a69ff5bed79fc358910a27f46833e7d183e130c6f6f7cb62503be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_bd2dd7c9bd975f5ec85f22dff3a519f9cbf534c6d5f33e7bbb972b2cb278edad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd2dd7c9bd975f5ec85f22dff3a519f9cbf534c6d5f33e7bbb972b2cb278edad->enter($__internal_bd2dd7c9bd975f5ec85f22dff3a519f9cbf534c6d5f33e7bbb972b2cb278edad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["pageContents"] ?? $this->getContext($context, "pageContents")), "data", array()), "seo", array()), "title", array()), "html", null, true);
        
        $__internal_bd2dd7c9bd975f5ec85f22dff3a519f9cbf534c6d5f33e7bbb972b2cb278edad->leave($__internal_bd2dd7c9bd975f5ec85f22dff3a519f9cbf534c6d5f33e7bbb972b2cb278edad_prof);

        
        $__internal_47458958c2a69ff5bed79fc358910a27f46833e7d183e130c6f6f7cb62503be4->leave($__internal_47458958c2a69ff5bed79fc358910a27f46833e7d183e130c6f6f7cb62503be4_prof);

    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        $__internal_6bda6a2d168278e448988cc41e09af2ce0210bc5796079db454e88757964e8c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bda6a2d168278e448988cc41e09af2ce0210bc5796079db454e88757964e8c9->enter($__internal_6bda6a2d168278e448988cc41e09af2ce0210bc5796079db454e88757964e8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_1aaad37aba26df35a46cc8895ab9275e3383c2869d58ea51726028917b0ff09d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aaad37aba26df35a46cc8895ab9275e3383c2869d58ea51726028917b0ff09d->enter($__internal_1aaad37aba26df35a46cc8895ab9275e3383c2869d58ea51726028917b0ff09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["pageContents"] ?? $this->getContext($context, "pageContents")), "data", array()), "seo", array()), "description", array()), "html", null, true);
        
        $__internal_1aaad37aba26df35a46cc8895ab9275e3383c2869d58ea51726028917b0ff09d->leave($__internal_1aaad37aba26df35a46cc8895ab9275e3383c2869d58ea51726028917b0ff09d_prof);

        
        $__internal_6bda6a2d168278e448988cc41e09af2ce0210bc5796079db454e88757964e8c9->leave($__internal_6bda6a2d168278e448988cc41e09af2ce0210bc5796079db454e88757964e8c9_prof);

    }

    // line 5
    public function block_openGraph($context, array $blocks = array())
    {
        $__internal_d9d37dba6f334e4d7d9b01f49640328d3642e250cf9d52230f847c9b8835e308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9d37dba6f334e4d7d9b01f49640328d3642e250cf9d52230f847c9b8835e308->enter($__internal_d9d37dba6f334e4d7d9b01f49640328d3642e250cf9d52230f847c9b8835e308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "openGraph"));

        $__internal_13503594c69d5a5bc04737b98a9813809fd4a46429c768fca3291a3d4fd7b184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13503594c69d5a5bc04737b98a9813809fd4a46429c768fca3291a3d4fd7b184->enter($__internal_13503594c69d5a5bc04737b98a9813809fd4a46429c768fca3291a3d4fd7b184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "openGraph"));

        // line 6
        echo "    <meta property=\"og:title\" content=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["pageContents"] ?? $this->getContext($context, "pageContents")), "data", array()), "seo", array()), "ogTitle", array()), "html", null, true);
        echo "\" />
    <meta property=\"og:image\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["pageContents"] ?? $this->getContext($context, "pageContents")), "data", array()), "seo", array()), "ogImage", array()), "html", null, true);
        echo "\" />
    <meta property=\"og:description\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["pageContents"] ?? $this->getContext($context, "pageContents")), "data", array()), "seo", array()), "ogDescription", array()), "html", null, true);
        echo "\" />
";
        
        $__internal_13503594c69d5a5bc04737b98a9813809fd4a46429c768fca3291a3d4fd7b184->leave($__internal_13503594c69d5a5bc04737b98a9813809fd4a46429c768fca3291a3d4fd7b184_prof);

        
        $__internal_d9d37dba6f334e4d7d9b01f49640328d3642e250cf9d52230f847c9b8835e308->leave($__internal_d9d37dba6f334e4d7d9b01f49640328d3642e250cf9d52230f847c9b8835e308_prof);

    }

    // line 10
    public function block_bodyClass($context, array $blocks = array())
    {
        $__internal_8e8008528f3880736e080521fcd6403cd3eda97773a4e2c507b4241a416e19b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e8008528f3880736e080521fcd6403cd3eda97773a4e2c507b4241a416e19b4->enter($__internal_8e8008528f3880736e080521fcd6403cd3eda97773a4e2c507b4241a416e19b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyClass"));

        $__internal_40de68c886e9451bca84a25b6bf592a104c0353c6e577da505297b443acd1591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40de68c886e9451bca84a25b6bf592a104c0353c6e577da505297b443acd1591->enter($__internal_40de68c886e9451bca84a25b6bf592a104c0353c6e577da505297b443acd1591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyClass"));

        echo "personalHome";
        
        $__internal_40de68c886e9451bca84a25b6bf592a104c0353c6e577da505297b443acd1591->leave($__internal_40de68c886e9451bca84a25b6bf592a104c0353c6e577da505297b443acd1591_prof);

        
        $__internal_8e8008528f3880736e080521fcd6403cd3eda97773a4e2c507b4241a416e19b4->leave($__internal_8e8008528f3880736e080521fcd6403cd3eda97773a4e2c507b4241a416e19b4_prof);

    }

    // line 11
    public function block_headerClasses($context, array $blocks = array())
    {
        $__internal_7b252442826e042e1bf04a6f5488e82cb07303f0130af449aa3368854beab181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b252442826e042e1bf04a6f5488e82cb07303f0130af449aa3368854beab181->enter($__internal_7b252442826e042e1bf04a6f5488e82cb07303f0130af449aa3368854beab181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerClasses"));

        $__internal_88db21a6f3a83783b62e0d6b3228500b6773d81729470122eb7878b69416cb3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88db21a6f3a83783b62e0d6b3228500b6773d81729470122eb7878b69416cb3e->enter($__internal_88db21a6f3a83783b62e0d6b3228500b6773d81729470122eb7878b69416cb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerClasses"));

        
        $__internal_88db21a6f3a83783b62e0d6b3228500b6773d81729470122eb7878b69416cb3e->leave($__internal_88db21a6f3a83783b62e0d6b3228500b6773d81729470122eb7878b69416cb3e_prof);

        
        $__internal_7b252442826e042e1bf04a6f5488e82cb07303f0130af449aa3368854beab181->leave($__internal_7b252442826e042e1bf04a6f5488e82cb07303f0130af449aa3368854beab181_prof);

    }

    // line 12
    public function block_footerClass($context, array $blocks = array())
    {
        $__internal_4176e8527f79e198f88959df15cf09cf72f333766a48acc9eb13375865c41ff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4176e8527f79e198f88959df15cf09cf72f333766a48acc9eb13375865c41ff2->enter($__internal_4176e8527f79e198f88959df15cf09cf72f333766a48acc9eb13375865c41ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerClass"));

        $__internal_482a8f521b3a9da95d105673554e8dc08c66f3f450518d8f3c35bef3b641b339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_482a8f521b3a9da95d105673554e8dc08c66f3f450518d8f3c35bef3b641b339->enter($__internal_482a8f521b3a9da95d105673554e8dc08c66f3f450518d8f3c35bef3b641b339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerClass"));

        
        $__internal_482a8f521b3a9da95d105673554e8dc08c66f3f450518d8f3c35bef3b641b339->leave($__internal_482a8f521b3a9da95d105673554e8dc08c66f3f450518d8f3c35bef3b641b339_prof);

        
        $__internal_4176e8527f79e198f88959df15cf09cf72f333766a48acc9eb13375865c41ff2->leave($__internal_4176e8527f79e198f88959df15cf09cf72f333766a48acc9eb13375865c41ff2_prof);

    }

    // line 13
    public function block_headContent($context, array $blocks = array())
    {
        $__internal_a6cb8daf89d8a4123f3541dde2b08d10f7d697cf29cd3bba543a17bd230082e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6cb8daf89d8a4123f3541dde2b08d10f7d697cf29cd3bba543a17bd230082e7->enter($__internal_a6cb8daf89d8a4123f3541dde2b08d10f7d697cf29cd3bba543a17bd230082e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headContent"));

        $__internal_24579c3969344911ccc543e141a7800dde5e5bc94f6d8301a9e1908996fc3760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24579c3969344911ccc543e141a7800dde5e5bc94f6d8301a9e1908996fc3760->enter($__internal_24579c3969344911ccc543e141a7800dde5e5bc94f6d8301a9e1908996fc3760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headContent"));

        // line 14
        echo "    ";
        $this->loadTemplate("@root/Partials/_personalHeader.html.twig", "WebBundle:LandingPage:personalHomeLandingPage.html.twig", 14)->display($context);
        
        $__internal_24579c3969344911ccc543e141a7800dde5e5bc94f6d8301a9e1908996fc3760->leave($__internal_24579c3969344911ccc543e141a7800dde5e5bc94f6d8301a9e1908996fc3760_prof);

        
        $__internal_a6cb8daf89d8a4123f3541dde2b08d10f7d697cf29cd3bba543a17bd230082e7->leave($__internal_a6cb8daf89d8a4123f3541dde2b08d10f7d697cf29cd3bba543a17bd230082e7_prof);

    }

    // line 16
    public function block_main($context, array $blocks = array())
    {
        $__internal_d503451416b5420a35196a390e15ddbf35ca6a7df5aebbd7a2abafbf114a14c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d503451416b5420a35196a390e15ddbf35ca6a7df5aebbd7a2abafbf114a14c3->enter($__internal_d503451416b5420a35196a390e15ddbf35ca6a7df5aebbd7a2abafbf114a14c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_4643c1ffbacfdfdb66e7419c4639c0142977516ac4e10c70f14d58a59d9db130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4643c1ffbacfdfdb66e7419c4639c0142977516ac4e10c70f14d58a59d9db130->enter($__internal_4643c1ffbacfdfdb66e7419c4639c0142977516ac4e10c70f14d58a59d9db130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 17
        echo "  ";
        $this->loadTemplate("@root/LandingPage/Widgets/_personalHomeHeaderContent.html.twig", "WebBundle:LandingPage:personalHomeLandingPage.html.twig", 17)->display(array_merge($context, array("header" => $this->getAttribute(($context["widgets"] ?? $this->getContext($context, "widgets")), "personalhomeheaderwidget", array()))));
        // line 18
        echo "  ";
        $this->loadTemplate("@root/LandingPage/Widgets/_personalHomeFeatureList.html.twig", "WebBundle:LandingPage:personalHomeLandingPage.html.twig", 18)->display(array_merge($context, array("featureList" => $this->getAttribute(($context["widgets"] ?? $this->getContext($context, "widgets")), "personalhomefeaturelistwidget", array()))));
        // line 19
        echo "  ";
        $this->loadTemplate("@root/LandingPage/Widgets/_personalMobileAppSlider.html.twig", "WebBundle:LandingPage:personalHomeLandingPage.html.twig", 19)->display(array_merge($context, array("sliderList" => $this->getAttribute(($context["widgets"] ?? $this->getContext($context, "widgets")), "personalhomemobileappsliderwidget", array()))));
        // line 20
        echo "  ";
        $this->loadTemplate("@root/LandingPage/Widgets/_personalHomePwi.html.twig", "WebBundle:LandingPage:personalHomeLandingPage.html.twig", 20)->display(array_merge($context, array("cardfeaturesscreen" => $this->getAttribute(($context["widgets"] ?? $this->getContext($context, "widgets")), "personalhomepwiwidget", array()))));
        // line 21
        echo "  ";
        $this->loadTemplate("@root/LandingPage/Widgets/_personalHomeAppDownload.html.twig", "WebBundle:LandingPage:personalHomeLandingPage.html.twig", 21)->display(array_merge($context, array("appdownload" => $this->getAttribute(($context["widgets"] ?? $this->getContext($context, "widgets")), "personalhomeappdownloadwidget", array()))));
        // line 22
        echo "  ";
        $this->loadTemplate("@root/LandingPage/Widgets/_personalHomeShopList.html.twig", "WebBundle:LandingPage:personalHomeLandingPage.html.twig", 22)->display(array_merge($context, array("shoplist" => $this->getAttribute(($context["widgets"] ?? $this->getContext($context, "widgets")), "personalhomeshoplistwidget", array()))));
        // line 23
        echo "  ";
        $this->loadTemplate("@root/LandingPage/Widgets/_personalHomeCampaign.html.twig", "WebBundle:LandingPage:personalHomeLandingPage.html.twig", 23)->display(array_merge($context, array("campaign" => $this->getAttribute(($context["widgets"] ?? $this->getContext($context, "widgets")), "personalhomecampaignwidget", array()), "allbrand" => $this->getAttribute(($context["widgets"] ?? $this->getContext($context, "widgets")), "buyerprotectionfeaturelistwidget", array()))));
        
        $__internal_4643c1ffbacfdfdb66e7419c4639c0142977516ac4e10c70f14d58a59d9db130->leave($__internal_4643c1ffbacfdfdb66e7419c4639c0142977516ac4e10c70f14d58a59d9db130_prof);

        
        $__internal_d503451416b5420a35196a390e15ddbf35ca6a7df5aebbd7a2abafbf114a14c3->leave($__internal_d503451416b5420a35196a390e15ddbf35ca6a7df5aebbd7a2abafbf114a14c3_prof);

    }

    // line 25
    public function block_footerContent($context, array $blocks = array())
    {
        $__internal_b940547e0fd32631659ad46144814d40a2b7f8e49d2f53728de26abaca6a2942 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b940547e0fd32631659ad46144814d40a2b7f8e49d2f53728de26abaca6a2942->enter($__internal_b940547e0fd32631659ad46144814d40a2b7f8e49d2f53728de26abaca6a2942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerContent"));

        $__internal_520d702ed8918e50bd95708e00de29e6284ead52a9aedbdc87a830e71fa36d9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_520d702ed8918e50bd95708e00de29e6284ead52a9aedbdc87a830e71fa36d9e->enter($__internal_520d702ed8918e50bd95708e00de29e6284ead52a9aedbdc87a830e71fa36d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerContent"));

        // line 26
        echo "    ";
        $this->loadTemplate("@root/Partials/_footer.html.twig", "WebBundle:LandingPage:personalHomeLandingPage.html.twig", 26)->display($context);
        
        $__internal_520d702ed8918e50bd95708e00de29e6284ead52a9aedbdc87a830e71fa36d9e->leave($__internal_520d702ed8918e50bd95708e00de29e6284ead52a9aedbdc87a830e71fa36d9e_prof);

        
        $__internal_b940547e0fd32631659ad46144814d40a2b7f8e49d2f53728de26abaca6a2942->leave($__internal_b940547e0fd32631659ad46144814d40a2b7f8e49d2f53728de26abaca6a2942_prof);

    }

    // line 29
    public function block_bodyBottomScripts($context, array $blocks = array())
    {
        $__internal_fb68072936261b1c7e13c0fbe60674878d0d60928081930d043d6341dd47824a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb68072936261b1c7e13c0fbe60674878d0d60928081930d043d6341dd47824a->enter($__internal_fb68072936261b1c7e13c0fbe60674878d0d60928081930d043d6341dd47824a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyBottomScripts"));

        $__internal_5af50bef2539e7f98f4c0cb28d65fae90656a76978ffa5878e056c49d76585c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5af50bef2539e7f98f4c0cb28d65fae90656a76978ffa5878e056c49d76585c7->enter($__internal_5af50bef2539e7f98f4c0cb28d65fae90656a76978ffa5878e056c49d76585c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyBottomScripts"));

        // line 30
        echo "    <script>

    function setCookie(name,value,days) {
        var expires = \"\";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days*24*60*60*1000));
            expires = \"; expires=\" + date.toUTCString();
        }
        document.cookie = name + \"=\" + (value || \"\")  + expires + \"; path=/\";
    }

    setCookie('iyzicosection','personal',1000)


      window.lazyLoadOptions = {
  \t\t\tthreshold: 50
  \t\t};
  \t\twindow.addEventListener('LazyLoad::Initialized', function (e) {
  \t\t\tconsole.log(e.detail.instance);
  \t\t}, false);
    </script>
    <script>
        function formSubmit (token) {
                \$('#consumer-app-form').submit();
                return true;
            }
        </script>
    <script src='https://www.google.com/recaptcha/api.js?hl=";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_locale"), "method"), "html", null, true);
        echo "' async defer></script>

";
        
        $__internal_5af50bef2539e7f98f4c0cb28d65fae90656a76978ffa5878e056c49d76585c7->leave($__internal_5af50bef2539e7f98f4c0cb28d65fae90656a76978ffa5878e056c49d76585c7_prof);

        
        $__internal_fb68072936261b1c7e13c0fbe60674878d0d60928081930d043d6341dd47824a->leave($__internal_fb68072936261b1c7e13c0fbe60674878d0d60928081930d043d6341dd47824a_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:LandingPage:personalHomeLandingPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 58,  254 => 30,  245 => 29,  234 => 26,  225 => 25,  214 => 23,  211 => 22,  208 => 21,  205 => 20,  202 => 19,  199 => 18,  196 => 17,  187 => 16,  176 => 14,  167 => 13,  150 => 12,  133 => 11,  115 => 10,  103 => 8,  99 => 7,  94 => 6,  85 => 5,  67 => 4,  49 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::personalLandingPage.html.twig\" %}

{% block pageTitle %}{{ pageContents.data.seo.title }}{% endblock %}
{% block description %}{{ pageContents.data.seo.description }}{% endblock %}
{% block openGraph %}
    <meta property=\"og:title\" content=\"{{ pageContents.data.seo.ogTitle }}\" />
    <meta property=\"og:image\" content=\"{{ pageContents.data.seo.ogImage }}\" />
    <meta property=\"og:description\" content=\"{{ pageContents.data.seo.ogDescription }}\" />
{% endblock %}
{% block bodyClass %}personalHome{% endblock %}
{% block headerClasses %}{% endblock %}
{% block footerClass %}{% endblock %}
{% block headContent %}
    {% include '@root/Partials/_personalHeader.html.twig' %}
{% endblock %}
{% block main %}
  {% include '@root/LandingPage/Widgets/_personalHomeHeaderContent.html.twig' with {'header':widgets.personalhomeheaderwidget} %}
  {% include '@root/LandingPage/Widgets/_personalHomeFeatureList.html.twig' with {'featureList':widgets.personalhomefeaturelistwidget} %}
  {% include '@root/LandingPage/Widgets/_personalMobileAppSlider.html.twig' with {'sliderList':widgets.personalhomemobileappsliderwidget} %}
  {% include '@root/LandingPage/Widgets/_personalHomePwi.html.twig' with {'cardfeaturesscreen':widgets.personalhomepwiwidget} %}
  {% include '@root/LandingPage/Widgets/_personalHomeAppDownload.html.twig' with {'appdownload':widgets.personalhomeappdownloadwidget} %}
  {% include '@root/LandingPage/Widgets/_personalHomeShopList.html.twig' with {'shoplist':widgets.personalhomeshoplistwidget} %}
  {% include '@root/LandingPage/Widgets/_personalHomeCampaign.html.twig' with {'campaign':widgets.personalhomecampaignwidget, 'allbrand':widgets.buyerprotectionfeaturelistwidget } %}
{% endblock %}
{% block footerContent %}
    {% include '@root/Partials/_footer.html.twig' %}
{% endblock %}

{% block bodyBottomScripts %}
    <script>

    function setCookie(name,value,days) {
        var expires = \"\";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days*24*60*60*1000));
            expires = \"; expires=\" + date.toUTCString();
        }
        document.cookie = name + \"=\" + (value || \"\")  + expires + \"; path=/\";
    }

    setCookie('iyzicosection','personal',1000)


      window.lazyLoadOptions = {
  \t\t\tthreshold: 50
  \t\t};
  \t\twindow.addEventListener('LazyLoad::Initialized', function (e) {
  \t\t\tconsole.log(e.detail.instance);
  \t\t}, false);
    </script>
    <script>
        function formSubmit (token) {
                \$('#consumer-app-form').submit();
                return true;
            }
        </script>
    <script src='https://www.google.com/recaptcha/api.js?hl={{app.request.attributes.get('_locale')}}' async defer></script>

{% endblock %}
", "WebBundle:LandingPage:personalHomeLandingPage.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/LandingPage/personalHomeLandingPage.html.twig");
    }
}
