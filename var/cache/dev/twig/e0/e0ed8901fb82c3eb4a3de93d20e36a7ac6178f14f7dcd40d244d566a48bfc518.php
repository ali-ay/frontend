<?php

/* WebBundle:LandingPage:mainLandingPage.html.twig */
class __TwigTemplate_3954ed2e1d4bd33a4e6bd0b7528ba5f664fa3bd76083b6afd88b29c85b78b5d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::landingPage.html.twig", "WebBundle:LandingPage:mainLandingPage.html.twig", 1);
        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'description' => array($this, 'block_description'),
            'openGraph' => array($this, 'block_openGraph'),
            'bodyClass' => array($this, 'block_bodyClass'),
            'headerClasses' => array($this, 'block_headerClasses'),
            'footerClass' => array($this, 'block_footerClass'),
            'main' => array($this, 'block_main'),
            'footerContent' => array($this, 'block_footerContent'),
            'bodyBottomScripts' => array($this, 'block_bodyBottomScripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::landingPage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_007a6e7bd67b725851919aee5cacdfe8940a24ab4314072207c82bb782268ccf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_007a6e7bd67b725851919aee5cacdfe8940a24ab4314072207c82bb782268ccf->enter($__internal_007a6e7bd67b725851919aee5cacdfe8940a24ab4314072207c82bb782268ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:LandingPage:mainLandingPage.html.twig"));

        $__internal_b193b4c1c801e92b6cc045945f11c315e9b5d9e3cb8ee377ee18b337fbe3b017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b193b4c1c801e92b6cc045945f11c315e9b5d9e3cb8ee377ee18b337fbe3b017->enter($__internal_b193b4c1c801e92b6cc045945f11c315e9b5d9e3cb8ee377ee18b337fbe3b017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:LandingPage:mainLandingPage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_007a6e7bd67b725851919aee5cacdfe8940a24ab4314072207c82bb782268ccf->leave($__internal_007a6e7bd67b725851919aee5cacdfe8940a24ab4314072207c82bb782268ccf_prof);

        
        $__internal_b193b4c1c801e92b6cc045945f11c315e9b5d9e3cb8ee377ee18b337fbe3b017->leave($__internal_b193b4c1c801e92b6cc045945f11c315e9b5d9e3cb8ee377ee18b337fbe3b017_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_dba6090098a0039053c3a2fa3c7cbd46f7741e453ffed244905419c51b7b4ca5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dba6090098a0039053c3a2fa3c7cbd46f7741e453ffed244905419c51b7b4ca5->enter($__internal_dba6090098a0039053c3a2fa3c7cbd46f7741e453ffed244905419c51b7b4ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_00e4b3d811d8a1d316a1fded2a6450e855645ddbb89e31ac2965895b5c83a4f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00e4b3d811d8a1d316a1fded2a6450e855645ddbb89e31ac2965895b5c83a4f1->enter($__internal_00e4b3d811d8a1d316a1fded2a6450e855645ddbb89e31ac2965895b5c83a4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["pageContents"] ?? $this->getContext($context, "pageContents")), "data", array()), "seo", array()), "title", array()), "html", null, true);
        
        $__internal_00e4b3d811d8a1d316a1fded2a6450e855645ddbb89e31ac2965895b5c83a4f1->leave($__internal_00e4b3d811d8a1d316a1fded2a6450e855645ddbb89e31ac2965895b5c83a4f1_prof);

        
        $__internal_dba6090098a0039053c3a2fa3c7cbd46f7741e453ffed244905419c51b7b4ca5->leave($__internal_dba6090098a0039053c3a2fa3c7cbd46f7741e453ffed244905419c51b7b4ca5_prof);

    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        $__internal_e0c07f6b0ae1abd7a94ed21f01802a5ef7a733366eaa89babdc539f4841edc4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0c07f6b0ae1abd7a94ed21f01802a5ef7a733366eaa89babdc539f4841edc4e->enter($__internal_e0c07f6b0ae1abd7a94ed21f01802a5ef7a733366eaa89babdc539f4841edc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_355f49db6ffa4090a30ad3851f983b55f135a0ad397188b7734561fd4691556b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_355f49db6ffa4090a30ad3851f983b55f135a0ad397188b7734561fd4691556b->enter($__internal_355f49db6ffa4090a30ad3851f983b55f135a0ad397188b7734561fd4691556b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["pageContents"] ?? $this->getContext($context, "pageContents")), "data", array()), "seo", array()), "description", array()), "html", null, true);
        
        $__internal_355f49db6ffa4090a30ad3851f983b55f135a0ad397188b7734561fd4691556b->leave($__internal_355f49db6ffa4090a30ad3851f983b55f135a0ad397188b7734561fd4691556b_prof);

        
        $__internal_e0c07f6b0ae1abd7a94ed21f01802a5ef7a733366eaa89babdc539f4841edc4e->leave($__internal_e0c07f6b0ae1abd7a94ed21f01802a5ef7a733366eaa89babdc539f4841edc4e_prof);

    }

    // line 5
    public function block_openGraph($context, array $blocks = array())
    {
        $__internal_ec7290351db6cbac6b319472c57bf860b39c92534368b0254e6072f890cbe773 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec7290351db6cbac6b319472c57bf860b39c92534368b0254e6072f890cbe773->enter($__internal_ec7290351db6cbac6b319472c57bf860b39c92534368b0254e6072f890cbe773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "openGraph"));

        $__internal_b786f1e2e454b29544a8abcf6e0787bccb70923a4d7ba37b7ccd96c39a351d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b786f1e2e454b29544a8abcf6e0787bccb70923a4d7ba37b7ccd96c39a351d2f->enter($__internal_b786f1e2e454b29544a8abcf6e0787bccb70923a4d7ba37b7ccd96c39a351d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "openGraph"));

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
        
        $__internal_b786f1e2e454b29544a8abcf6e0787bccb70923a4d7ba37b7ccd96c39a351d2f->leave($__internal_b786f1e2e454b29544a8abcf6e0787bccb70923a4d7ba37b7ccd96c39a351d2f_prof);

        
        $__internal_ec7290351db6cbac6b319472c57bf860b39c92534368b0254e6072f890cbe773->leave($__internal_ec7290351db6cbac6b319472c57bf860b39c92534368b0254e6072f890cbe773_prof);

    }

    // line 10
    public function block_bodyClass($context, array $blocks = array())
    {
        $__internal_0cd6d791822dd087656a38ff8bd9b9828de67dbf4aceb314992a12f801c39704 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cd6d791822dd087656a38ff8bd9b9828de67dbf4aceb314992a12f801c39704->enter($__internal_0cd6d791822dd087656a38ff8bd9b9828de67dbf4aceb314992a12f801c39704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyClass"));

        $__internal_cf96b1231257c8e4bc578bcebf2172f07ed88d91ca3a95267d21da30b4ca12bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf96b1231257c8e4bc578bcebf2172f07ed88d91ca3a95267d21da30b4ca12bb->enter($__internal_cf96b1231257c8e4bc578bcebf2172f07ed88d91ca3a95267d21da30b4ca12bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyClass"));

        echo "mainLandingPage mainMenu";
        
        $__internal_cf96b1231257c8e4bc578bcebf2172f07ed88d91ca3a95267d21da30b4ca12bb->leave($__internal_cf96b1231257c8e4bc578bcebf2172f07ed88d91ca3a95267d21da30b4ca12bb_prof);

        
        $__internal_0cd6d791822dd087656a38ff8bd9b9828de67dbf4aceb314992a12f801c39704->leave($__internal_0cd6d791822dd087656a38ff8bd9b9828de67dbf4aceb314992a12f801c39704_prof);

    }

    // line 11
    public function block_headerClasses($context, array $blocks = array())
    {
        $__internal_1ac6c9a7529fe23aa339c6493c84520b0c9e89754e514d500a344cf0a693e67c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ac6c9a7529fe23aa339c6493c84520b0c9e89754e514d500a344cf0a693e67c->enter($__internal_1ac6c9a7529fe23aa339c6493c84520b0c9e89754e514d500a344cf0a693e67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerClasses"));

        $__internal_1c49dcb89a9657f72ba19e71b8b947ef1157a23ee9eeb6df0aa0f45ca0066fa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c49dcb89a9657f72ba19e71b8b947ef1157a23ee9eeb6df0aa0f45ca0066fa2->enter($__internal_1c49dcb89a9657f72ba19e71b8b947ef1157a23ee9eeb6df0aa0f45ca0066fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerClasses"));

        
        $__internal_1c49dcb89a9657f72ba19e71b8b947ef1157a23ee9eeb6df0aa0f45ca0066fa2->leave($__internal_1c49dcb89a9657f72ba19e71b8b947ef1157a23ee9eeb6df0aa0f45ca0066fa2_prof);

        
        $__internal_1ac6c9a7529fe23aa339c6493c84520b0c9e89754e514d500a344cf0a693e67c->leave($__internal_1ac6c9a7529fe23aa339c6493c84520b0c9e89754e514d500a344cf0a693e67c_prof);

    }

    // line 12
    public function block_footerClass($context, array $blocks = array())
    {
        $__internal_e31dd983af95ae5d2d678d5b4a19a60b2a465c1f6645d3b32009037299dc696d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e31dd983af95ae5d2d678d5b4a19a60b2a465c1f6645d3b32009037299dc696d->enter($__internal_e31dd983af95ae5d2d678d5b4a19a60b2a465c1f6645d3b32009037299dc696d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerClass"));

        $__internal_14528b90e49886c95840f0151c3e9f7627c027705fcc8c4d11201985688666e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14528b90e49886c95840f0151c3e9f7627c027705fcc8c4d11201985688666e5->enter($__internal_14528b90e49886c95840f0151c3e9f7627c027705fcc8c4d11201985688666e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerClass"));

        
        $__internal_14528b90e49886c95840f0151c3e9f7627c027705fcc8c4d11201985688666e5->leave($__internal_14528b90e49886c95840f0151c3e9f7627c027705fcc8c4d11201985688666e5_prof);

        
        $__internal_e31dd983af95ae5d2d678d5b4a19a60b2a465c1f6645d3b32009037299dc696d->leave($__internal_e31dd983af95ae5d2d678d5b4a19a60b2a465c1f6645d3b32009037299dc696d_prof);

    }

    // line 14
    public function block_main($context, array $blocks = array())
    {
        $__internal_02a69de30cb16e76b9d75dccf13c8bf7a08353a8bb8acc00b329c3ae8e389bda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02a69de30cb16e76b9d75dccf13c8bf7a08353a8bb8acc00b329c3ae8e389bda->enter($__internal_02a69de30cb16e76b9d75dccf13c8bf7a08353a8bb8acc00b329c3ae8e389bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_71e972adb2a2ecffc490827a7c77811b6502bba78e2d78efaa4d59d6ecea3906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71e972adb2a2ecffc490827a7c77811b6502bba78e2d78efaa4d59d6ecea3906->enter($__internal_71e972adb2a2ecffc490827a7c77811b6502bba78e2d78efaa4d59d6ecea3906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 15
        echo "  ";
        $this->loadTemplate("@root/LandingPage/Widgets/_mainHeaderContent.html.twig", "WebBundle:LandingPage:mainLandingPage.html.twig", 15)->display($context);
        // line 16
        echo "  ";
        $this->loadTemplate("@root/LandingPage/Widgets/_newwhoIsiyzico.html.twig", "WebBundle:LandingPage:mainLandingPage.html.twig", 16)->display($context);
        
        $__internal_71e972adb2a2ecffc490827a7c77811b6502bba78e2d78efaa4d59d6ecea3906->leave($__internal_71e972adb2a2ecffc490827a7c77811b6502bba78e2d78efaa4d59d6ecea3906_prof);

        
        $__internal_02a69de30cb16e76b9d75dccf13c8bf7a08353a8bb8acc00b329c3ae8e389bda->leave($__internal_02a69de30cb16e76b9d75dccf13c8bf7a08353a8bb8acc00b329c3ae8e389bda_prof);

    }

    // line 18
    public function block_footerContent($context, array $blocks = array())
    {
        $__internal_ab25f5effca413f575837321a799b92174515a00fb260118443cdb293871db2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab25f5effca413f575837321a799b92174515a00fb260118443cdb293871db2d->enter($__internal_ab25f5effca413f575837321a799b92174515a00fb260118443cdb293871db2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerContent"));

        $__internal_2c16c386197521e7b7274fb8a42e3d49b51cd554c23c73596f338c16fb3c0919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c16c386197521e7b7274fb8a42e3d49b51cd554c23c73596f338c16fb3c0919->enter($__internal_2c16c386197521e7b7274fb8a42e3d49b51cd554c23c73596f338c16fb3c0919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerContent"));

        // line 19
        echo "  ";
        $this->loadTemplate("@root/Partials/_footer.html.twig", "WebBundle:LandingPage:mainLandingPage.html.twig", 19)->display($context);
        
        $__internal_2c16c386197521e7b7274fb8a42e3d49b51cd554c23c73596f338c16fb3c0919->leave($__internal_2c16c386197521e7b7274fb8a42e3d49b51cd554c23c73596f338c16fb3c0919_prof);

        
        $__internal_ab25f5effca413f575837321a799b92174515a00fb260118443cdb293871db2d->leave($__internal_ab25f5effca413f575837321a799b92174515a00fb260118443cdb293871db2d_prof);

    }

    // line 22
    public function block_bodyBottomScripts($context, array $blocks = array())
    {
        $__internal_d915f7084b1770a4aa3d32d94e25df160a586054341770c8e12106835cfb4917 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d915f7084b1770a4aa3d32d94e25df160a586054341770c8e12106835cfb4917->enter($__internal_d915f7084b1770a4aa3d32d94e25df160a586054341770c8e12106835cfb4917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyBottomScripts"));

        $__internal_697be8da36fad55fd6fd6758a140e2fee8db6a134a014b899582758a21a6247a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_697be8da36fad55fd6fd6758a140e2fee8db6a134a014b899582758a21a6247a->enter($__internal_697be8da36fad55fd6fd6758a140e2fee8db6a134a014b899582758a21a6247a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyBottomScripts"));

        // line 23
        echo "    <script>
      window.lazyLoadOptions = {
  \t\t\tthreshold: 50
  \t\t};
  \t\twindow.addEventListener('LazyLoad::Initialized', function (e) {
  \t\t\tconsole.log(e.detail.instance);
  \t\t}, false);
    </script>
";
        
        $__internal_697be8da36fad55fd6fd6758a140e2fee8db6a134a014b899582758a21a6247a->leave($__internal_697be8da36fad55fd6fd6758a140e2fee8db6a134a014b899582758a21a6247a_prof);

        
        $__internal_d915f7084b1770a4aa3d32d94e25df160a586054341770c8e12106835cfb4917->leave($__internal_d915f7084b1770a4aa3d32d94e25df160a586054341770c8e12106835cfb4917_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:LandingPage:mainLandingPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 23,  209 => 22,  198 => 19,  189 => 18,  178 => 16,  175 => 15,  166 => 14,  149 => 12,  132 => 11,  114 => 10,  102 => 8,  98 => 7,  93 => 6,  84 => 5,  66 => 4,  48 => 3,  11 => 1,);
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

{% block pageTitle %}{{ pageContents.data.seo.title }}{% endblock %}
{% block description %}{{ pageContents.data.seo.description }}{% endblock %}
{% block openGraph %}
    <meta property=\"og:title\" content=\"{{ pageContents.data.seo.ogTitle }}\" />
    <meta property=\"og:image\" content=\"{{ pageContents.data.seo.ogImage }}\" />
    <meta property=\"og:description\" content=\"{{ pageContents.data.seo.ogDescription }}\" />
{% endblock %}
{% block bodyClass %}mainLandingPage mainMenu{% endblock %}
{% block headerClasses %}{% endblock %}
{% block footerClass %}{% endblock %}

{% block main %}
  {% include '@root/LandingPage/Widgets/_mainHeaderContent.html.twig' %}
  {% include '@root/LandingPage/Widgets/_newwhoIsiyzico.html.twig' %}
{% endblock %}
{% block footerContent %}
  {% include '@root/Partials/_footer.html.twig' %}
{% endblock %}

{% block bodyBottomScripts %}
    <script>
      window.lazyLoadOptions = {
  \t\t\tthreshold: 50
  \t\t};
  \t\twindow.addEventListener('LazyLoad::Initialized', function (e) {
  \t\t\tconsole.log(e.detail.instance);
  \t\t}, false);
    </script>
{% endblock %}
", "WebBundle:LandingPage:mainLandingPage.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/LandingPage/mainLandingPage.html.twig");
    }
}
