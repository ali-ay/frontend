<?php

/* WebBundle:LandingPage:merchantTypeLandingPage.html.twig */
class __TwigTemplate_b95eb9e55bbff1678963c9393b40ba08b06200c5c8541cc679cc7dcf528954d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::landingPage.html.twig", "WebBundle:LandingPage:merchantTypeLandingPage.html.twig", 1);
        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'description' => array($this, 'block_description'),
            'openGraph' => array($this, 'block_openGraph'),
            'headerClasses' => array($this, 'block_headerClasses'),
            'bodyStyle' => array($this, 'block_bodyStyle'),
            'parallaxBackgroundHolder' => array($this, 'block_parallaxBackgroundHolder'),
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
        $__internal_4668885afe47f6b9bde814662049589c258c55e798e12862634faedea99b16d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4668885afe47f6b9bde814662049589c258c55e798e12862634faedea99b16d6->enter($__internal_4668885afe47f6b9bde814662049589c258c55e798e12862634faedea99b16d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:LandingPage:merchantTypeLandingPage.html.twig"));

        $__internal_5f4dcd3875a9946ace9934367f9d5a8b62716a63c9cdbbd03aedaf7736bcd810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f4dcd3875a9946ace9934367f9d5a8b62716a63c9cdbbd03aedaf7736bcd810->enter($__internal_5f4dcd3875a9946ace9934367f9d5a8b62716a63c9cdbbd03aedaf7736bcd810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:LandingPage:merchantTypeLandingPage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4668885afe47f6b9bde814662049589c258c55e798e12862634faedea99b16d6->leave($__internal_4668885afe47f6b9bde814662049589c258c55e798e12862634faedea99b16d6_prof);

        
        $__internal_5f4dcd3875a9946ace9934367f9d5a8b62716a63c9cdbbd03aedaf7736bcd810->leave($__internal_5f4dcd3875a9946ace9934367f9d5a8b62716a63c9cdbbd03aedaf7736bcd810_prof);

    }

    // line 2
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_2fb72bb142cf1812bd160fcc52badd369da18977132aa4e456bf5636ca0a6891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fb72bb142cf1812bd160fcc52badd369da18977132aa4e456bf5636ca0a6891->enter($__internal_2fb72bb142cf1812bd160fcc52badd369da18977132aa4e456bf5636ca0a6891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_15c150f38bd86897a417f6521c932b2c5daab1b4521896ea71d829914e4399f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15c150f38bd86897a417f6521c932b2c5daab1b4521896ea71d829914e4399f9->enter($__internal_15c150f38bd86897a417f6521c932b2c5daab1b4521896ea71d829914e4399f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["pageContents"] ?? $this->getContext($context, "pageContents")), "seo", array()), "title", array()), "html", null, true);
        
        $__internal_15c150f38bd86897a417f6521c932b2c5daab1b4521896ea71d829914e4399f9->leave($__internal_15c150f38bd86897a417f6521c932b2c5daab1b4521896ea71d829914e4399f9_prof);

        
        $__internal_2fb72bb142cf1812bd160fcc52badd369da18977132aa4e456bf5636ca0a6891->leave($__internal_2fb72bb142cf1812bd160fcc52badd369da18977132aa4e456bf5636ca0a6891_prof);

    }

    // line 3
    public function block_description($context, array $blocks = array())
    {
        $__internal_aa32ecfec57ef77c816663a7cffb3e344e93ab6c9c224eeb38c98e326480418f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa32ecfec57ef77c816663a7cffb3e344e93ab6c9c224eeb38c98e326480418f->enter($__internal_aa32ecfec57ef77c816663a7cffb3e344e93ab6c9c224eeb38c98e326480418f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_dd9983a430802fb9a6abc4d99b9d8dc788208216db9cbee32d87bb1c51e7b2e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd9983a430802fb9a6abc4d99b9d8dc788208216db9cbee32d87bb1c51e7b2e9->enter($__internal_dd9983a430802fb9a6abc4d99b9d8dc788208216db9cbee32d87bb1c51e7b2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["pageContents"] ?? $this->getContext($context, "pageContents")), "seo", array()), "description", array()), "html", null, true);
        
        $__internal_dd9983a430802fb9a6abc4d99b9d8dc788208216db9cbee32d87bb1c51e7b2e9->leave($__internal_dd9983a430802fb9a6abc4d99b9d8dc788208216db9cbee32d87bb1c51e7b2e9_prof);

        
        $__internal_aa32ecfec57ef77c816663a7cffb3e344e93ab6c9c224eeb38c98e326480418f->leave($__internal_aa32ecfec57ef77c816663a7cffb3e344e93ab6c9c224eeb38c98e326480418f_prof);

    }

    // line 4
    public function block_openGraph($context, array $blocks = array())
    {
        $__internal_f55c1a57a523e12d3049a2a8a43e305783bc1f93a1dd826fe20c68b5761f01da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f55c1a57a523e12d3049a2a8a43e305783bc1f93a1dd826fe20c68b5761f01da->enter($__internal_f55c1a57a523e12d3049a2a8a43e305783bc1f93a1dd826fe20c68b5761f01da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "openGraph"));

        $__internal_f707349dbe4cc142cca990bae2573d7a72a67a63e91a5a0998b58ca5b2265367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f707349dbe4cc142cca990bae2573d7a72a67a63e91a5a0998b58ca5b2265367->enter($__internal_f707349dbe4cc142cca990bae2573d7a72a67a63e91a5a0998b58ca5b2265367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "openGraph"));

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
        
        $__internal_f707349dbe4cc142cca990bae2573d7a72a67a63e91a5a0998b58ca5b2265367->leave($__internal_f707349dbe4cc142cca990bae2573d7a72a67a63e91a5a0998b58ca5b2265367_prof);

        
        $__internal_f55c1a57a523e12d3049a2a8a43e305783bc1f93a1dd826fe20c68b5761f01da->leave($__internal_f55c1a57a523e12d3049a2a8a43e305783bc1f93a1dd826fe20c68b5761f01da_prof);

    }

    // line 10
    public function block_headerClasses($context, array $blocks = array())
    {
        $__internal_be508e14c7d8bd5b04547d233d812acaa304fce9ca1f7f183151072c15d55791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be508e14c7d8bd5b04547d233d812acaa304fce9ca1f7f183151072c15d55791->enter($__internal_be508e14c7d8bd5b04547d233d812acaa304fce9ca1f7f183151072c15d55791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerClasses"));

        $__internal_8a8a28b66eb473d0b5af0f759d982a2f142eae43d1dd0f977595070c2d6aba5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a8a28b66eb473d0b5af0f759d982a2f142eae43d1dd0f977595070c2d6aba5e->enter($__internal_8a8a28b66eb473d0b5af0f759d982a2f142eae43d1dd0f977595070c2d6aba5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerClasses"));

        
        $__internal_8a8a28b66eb473d0b5af0f759d982a2f142eae43d1dd0f977595070c2d6aba5e->leave($__internal_8a8a28b66eb473d0b5af0f759d982a2f142eae43d1dd0f977595070c2d6aba5e_prof);

        
        $__internal_be508e14c7d8bd5b04547d233d812acaa304fce9ca1f7f183151072c15d55791->leave($__internal_be508e14c7d8bd5b04547d233d812acaa304fce9ca1f7f183151072c15d55791_prof);

    }

    // line 11
    public function block_bodyStyle($context, array $blocks = array())
    {
        $__internal_1b689d83ead01dd261cb300fb38bbc8206f2aa999e3e59b2e9d3cd89bdbfb61c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b689d83ead01dd261cb300fb38bbc8206f2aa999e3e59b2e9d3cd89bdbfb61c->enter($__internal_1b689d83ead01dd261cb300fb38bbc8206f2aa999e3e59b2e9d3cd89bdbfb61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyStyle"));

        $__internal_2c23e01b5fe311564ab2e0278b483e45ff6efc20da9741e3e992a2b89d967c3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c23e01b5fe311564ab2e0278b483e45ff6efc20da9741e3e992a2b89d967c3b->enter($__internal_2c23e01b5fe311564ab2e0278b483e45ff6efc20da9741e3e992a2b89d967c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyStyle"));

        echo "background-color:transparent";
        
        $__internal_2c23e01b5fe311564ab2e0278b483e45ff6efc20da9741e3e992a2b89d967c3b->leave($__internal_2c23e01b5fe311564ab2e0278b483e45ff6efc20da9741e3e992a2b89d967c3b_prof);

        
        $__internal_1b689d83ead01dd261cb300fb38bbc8206f2aa999e3e59b2e9d3cd89bdbfb61c->leave($__internal_1b689d83ead01dd261cb300fb38bbc8206f2aa999e3e59b2e9d3cd89bdbfb61c_prof);

    }

    // line 12
    public function block_parallaxBackgroundHolder($context, array $blocks = array())
    {
        $__internal_4cc3943ae599e633712718babe0b7b392a62885bf2d94ba01da68523cfc41f21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cc3943ae599e633712718babe0b7b392a62885bf2d94ba01da68523cfc41f21->enter($__internal_4cc3943ae599e633712718babe0b7b392a62885bf2d94ba01da68523cfc41f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "parallaxBackgroundHolder"));

        $__internal_8494417aeebd3172fffb75d194169e4d6132307bcf2b55a825203f87b4540476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8494417aeebd3172fffb75d194169e4d6132307bcf2b55a825203f87b4540476->enter($__internal_8494417aeebd3172fffb75d194169e4d6132307bcf2b55a825203f87b4540476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "parallaxBackgroundHolder"));

        // line 13
        echo "    <div class=\"cover-background\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/content/merchant-type-bg.jpg"), "html", null, true);
        echo ");\"></div>
";
        
        $__internal_8494417aeebd3172fffb75d194169e4d6132307bcf2b55a825203f87b4540476->leave($__internal_8494417aeebd3172fffb75d194169e4d6132307bcf2b55a825203f87b4540476_prof);

        
        $__internal_4cc3943ae599e633712718babe0b7b392a62885bf2d94ba01da68523cfc41f21->leave($__internal_4cc3943ae599e633712718babe0b7b392a62885bf2d94ba01da68523cfc41f21_prof);

    }

    // line 16
    public function block_bodyClass($context, array $blocks = array())
    {
        $__internal_b6b1eee7685736bef1b3f1e19f936d3d6f902099c44390233253becb8ed18e7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6b1eee7685736bef1b3f1e19f936d3d6f902099c44390233253becb8ed18e7e->enter($__internal_b6b1eee7685736bef1b3f1e19f936d3d6f902099c44390233253becb8ed18e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyClass"));

        $__internal_13ca41e0e527c7d106164c556170942572497f4cf14b01b75f40fa8239d959f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13ca41e0e527c7d106164c556170942572497f4cf14b01b75f40fa8239d959f5->enter($__internal_13ca41e0e527c7d106164c556170942572497f4cf14b01b75f40fa8239d959f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyClass"));

        echo " merchant-type mainMenu";
        
        $__internal_13ca41e0e527c7d106164c556170942572497f4cf14b01b75f40fa8239d959f5->leave($__internal_13ca41e0e527c7d106164c556170942572497f4cf14b01b75f40fa8239d959f5_prof);

        
        $__internal_b6b1eee7685736bef1b3f1e19f936d3d6f902099c44390233253becb8ed18e7e->leave($__internal_b6b1eee7685736bef1b3f1e19f936d3d6f902099c44390233253becb8ed18e7e_prof);

    }

    // line 17
    public function block_headContent($context, array $blocks = array())
    {
        $__internal_18a688ba191f3ffb71fe24cb4599e29ea793135f41ad5c964f0b1ed7322443c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18a688ba191f3ffb71fe24cb4599e29ea793135f41ad5c964f0b1ed7322443c7->enter($__internal_18a688ba191f3ffb71fe24cb4599e29ea793135f41ad5c964f0b1ed7322443c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headContent"));

        $__internal_23b380ed06bad237e299cc38d56eacd14e2e6d9730b97f165a8d5930f5da46b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23b380ed06bad237e299cc38d56eacd14e2e6d9730b97f165a8d5930f5da46b7->enter($__internal_23b380ed06bad237e299cc38d56eacd14e2e6d9730b97f165a8d5930f5da46b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headContent"));

        // line 18
        $this->loadTemplate("@root/Partials/_registerHeader.html.twig", "WebBundle:LandingPage:merchantTypeLandingPage.html.twig", 18)->display($context);
        
        $__internal_23b380ed06bad237e299cc38d56eacd14e2e6d9730b97f165a8d5930f5da46b7->leave($__internal_23b380ed06bad237e299cc38d56eacd14e2e6d9730b97f165a8d5930f5da46b7_prof);

        
        $__internal_18a688ba191f3ffb71fe24cb4599e29ea793135f41ad5c964f0b1ed7322443c7->leave($__internal_18a688ba191f3ffb71fe24cb4599e29ea793135f41ad5c964f0b1ed7322443c7_prof);

    }

    // line 21
    public function block_main($context, array $blocks = array())
    {
        $__internal_c3af5ac13a0509ffe2002486d0d75d1f7fce78c5b6ddead207ec907b1ef35807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3af5ac13a0509ffe2002486d0d75d1f7fce78c5b6ddead207ec907b1ef35807->enter($__internal_c3af5ac13a0509ffe2002486d0d75d1f7fce78c5b6ddead207ec907b1ef35807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_562cae6353532269eaa7602cf4874c5d17ec88f0e9393e2a26c6e71051146752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_562cae6353532269eaa7602cf4874c5d17ec88f0e9393e2a26c6e71051146752->enter($__internal_562cae6353532269eaa7602cf4874c5d17ec88f0e9393e2a26c6e71051146752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 22
        echo "  ";
        $this->loadTemplate("@root/LandingPage/Widgets/_merchantTypeSection.html.twig", "WebBundle:LandingPage:merchantTypeLandingPage.html.twig", 22)->display($context);
        // line 23
        echo "  ";
        $this->loadTemplate("@root/LandingPage/Widgets/_newwhoIsiyzicoMini.html.twig", "WebBundle:LandingPage:merchantTypeLandingPage.html.twig", 23)->display($context);
        
        $__internal_562cae6353532269eaa7602cf4874c5d17ec88f0e9393e2a26c6e71051146752->leave($__internal_562cae6353532269eaa7602cf4874c5d17ec88f0e9393e2a26c6e71051146752_prof);

        
        $__internal_c3af5ac13a0509ffe2002486d0d75d1f7fce78c5b6ddead207ec907b1ef35807->leave($__internal_c3af5ac13a0509ffe2002486d0d75d1f7fce78c5b6ddead207ec907b1ef35807_prof);

    }

    // line 25
    public function block_footerContent($context, array $blocks = array())
    {
        $__internal_faf3603f5a0f14fea13a7933f8dd76e563e2dde653808f7d3ce51cc4df308268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faf3603f5a0f14fea13a7933f8dd76e563e2dde653808f7d3ce51cc4df308268->enter($__internal_faf3603f5a0f14fea13a7933f8dd76e563e2dde653808f7d3ce51cc4df308268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerContent"));

        $__internal_c06674626d2c11570ac7c36077ad71ac33127a840821e19801d2f20d0d6e9845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c06674626d2c11570ac7c36077ad71ac33127a840821e19801d2f20d0d6e9845->enter($__internal_c06674626d2c11570ac7c36077ad71ac33127a840821e19801d2f20d0d6e9845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerContent"));

        // line 26
        echo "  ";
        $this->loadTemplate("@root/Partials/_footerShort.html.twig", "WebBundle:LandingPage:merchantTypeLandingPage.html.twig", 26)->display($context);
        
        $__internal_c06674626d2c11570ac7c36077ad71ac33127a840821e19801d2f20d0d6e9845->leave($__internal_c06674626d2c11570ac7c36077ad71ac33127a840821e19801d2f20d0d6e9845_prof);

        
        $__internal_faf3603f5a0f14fea13a7933f8dd76e563e2dde653808f7d3ce51cc4df308268->leave($__internal_faf3603f5a0f14fea13a7933f8dd76e563e2dde653808f7d3ce51cc4df308268_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:LandingPage:merchantTypeLandingPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 26,  234 => 25,  223 => 23,  220 => 22,  211 => 21,  201 => 18,  192 => 17,  174 => 16,  161 => 13,  152 => 12,  134 => 11,  117 => 10,  105 => 8,  101 => 7,  97 => 6,  94 => 5,  85 => 4,  67 => 3,  49 => 2,  11 => 1,);
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
{% block headerClasses %}{% endblock %}
{% block bodyStyle %}background-color:transparent{% endblock %}
{% block parallaxBackgroundHolder %}
    <div class=\"cover-background\" style=\"background-image:url({{ asset('assets/images/content/merchant-type-bg.jpg')}});\"></div>
{% endblock %}

{% block bodyClass %} merchant-type mainMenu{% endblock %}
{% block headContent %}
{% include '@root/Partials/_registerHeader.html.twig' %}
{% endblock %}

{% block main %}
  {% include '@root/LandingPage/Widgets/_merchantTypeSection.html.twig' %}
  {% include '@root/LandingPage/Widgets/_newwhoIsiyzicoMini.html.twig' %}
{% endblock %}
{% block footerContent %}
  {% include '@root/Partials/_footerShort.html.twig' %}
{% endblock %}
", "WebBundle:LandingPage:merchantTypeLandingPage.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/LandingPage/merchantTypeLandingPage.html.twig");
    }
}
