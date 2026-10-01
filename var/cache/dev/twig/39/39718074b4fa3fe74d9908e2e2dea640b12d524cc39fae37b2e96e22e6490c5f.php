<?php

/* ::businessLandingPage.html.twig */
class __TwigTemplate_59cc9311355f2721d651a4ce41102edac7edfa520855acca087f0f564baa9bc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'description' => array($this, 'block_description'),
            'openGraph' => array($this, 'block_openGraph'),
            'headerStyleIncludes' => array($this, 'block_headerStyleIncludes'),
            'headerJavascriptIncludes' => array($this, 'block_headerJavascriptIncludes'),
            'bodyClass' => array($this, 'block_bodyClass'),
            'headerClasses' => array($this, 'block_headerClasses'),
            'headContent' => array($this, 'block_headContent'),
            'mainClass' => array($this, 'block_mainClass'),
            'main' => array($this, 'block_main'),
            'footerClass' => array($this, 'block_footerClass'),
            'footerContent' => array($this, 'block_footerContent'),
            'bodyBottomScripts' => array($this, 'block_bodyBottomScripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd313f9b2b8b071d0c94453e29c766f867cb9b1721df8de5491bb55666f56112 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd313f9b2b8b071d0c94453e29c766f867cb9b1721df8de5491bb55666f56112->enter($__internal_dd313f9b2b8b071d0c94453e29c766f867cb9b1721df8de5491bb55666f56112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::businessLandingPage.html.twig"));

        $__internal_e7da00cf5dd2c84a38bbf841a19ea53541a842e56f5ae1047ccd4fbb36007cb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7da00cf5dd2c84a38bbf841a19ea53541a842e56f5ae1047ccd4fbb36007cb7->enter($__internal_e7da00cf5dd2c84a38bbf841a19ea53541a842e56f5ae1047ccd4fbb36007cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::businessLandingPage.html.twig"));

        // line 1
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_locale"), "method") == "tr")) {
            // line 2
            echo "    ";
            $context["toLocale"] = ".en";
            // line 3
            echo "    ";
            $context["hrefLang"] = "en";
        } else {
            // line 5
            echo "    ";
            $context["toLocale"] = ".tr";
            // line 6
            echo "    ";
            $context["hrefLang"] = "tr";
        }
        // line 8
        $context["pathTranslated"] = ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") . ($context["toLocale"] ?? $this->getContext($context, "toLocale")));
        // line 9
        $context["params"] = $this->env->getExtension('WebBundle\Twig\CustomExtensions')->removeLocale($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"));
        // line 10
        $context["translatedUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["pathTranslated"] ?? $this->getContext($context, "pathTranslated")), ($context["params"] ?? $this->getContext($context, "params")));
        // line 11
        echo "<!DOCTYPE html>
<html prefix=\"og: http://ogp.me/ns#\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>";
        // line 16
        $this->displayBlock('pageTitle', $context, $blocks);
        echo "</title>
    <link rel=\"canonical\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('WebBundle\Twig\CustomExtensions')->getCanonical($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "uri", array())), "html", null, true);
        echo "\" />
    ";
        // line 18
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "_region"), "method") != "Europe")) {
            // line 19
            echo "    <link rel=\"alternate\" href=\"//www.iyzico.com";
            echo twig_escape_filter($this->env, ($context["translatedUrl"] ?? $this->getContext($context, "translatedUrl")), "html", null, true);
            echo "\" hreflang=\"";
            echo twig_escape_filter($this->env, ($context["hrefLang"] ?? $this->getContext($context, "hrefLang")), "html", null, true);
            echo "\" />
    ";
        }
        // line 21
        echo "    <link rel=\"alternate\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('WebBundle\Twig\CustomExtensions')->getCanonical($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "uri", array())), "html", null, true);
        echo "\" hreflang=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_locale"), "method"), "html", null, true);
        echo "\" />
    <link rel=\"icon\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/content/favicon.png"), "html", null, true);
        echo "\">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
    <meta name=\"description\" content=\"";
        // line 24
        $this->displayBlock('description', $context, $blocks);
        echo "\">
    <!-- OpenGraph Information -->
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:url\" content=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('WebBundle\Twig\CustomExtensions')->getCanonical($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "uri", array())), "html", null, true);
        echo "\" />
    ";
        // line 28
        $this->displayBlock('openGraph', $context, $blocks);
        // line 29
        echo "    <meta property=\"og:site_name\" content=\"iyzico.com\" />
    <meta name=\"facebook-domain-verification\" content=\"i08si5vw7q52b8au7hp4hawdfsl1uq\" />
    <!-- Header Style Includes  -->
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/styles/main.min.css"), "html", null, true);
        echo "\" media=\"screen\">
    ";
        // line 33
        $this->displayBlock('headerStyleIncludes', $context, $blocks);
        // line 34
        echo "    <!-- Header Javascript Includes -->
    ";
        // line 35
        $this->displayBlock('headerJavascriptIncludes', $context, $blocks);
        // line 36
        echo "    <!-- Styles -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5RVPKJN');</script>
    <script>(function(d,t){
    var e = d.createElement(t),
        s = d.getElementsByTagName(t)[0];
        e.src = \"https://wps.relateddigital.com/relatedpush_sdk.js?ckey=FE52617BD5E04FE7A9C7A35DE4B559BA&aid=7a9b2b6d-c604-4ba9-95fc-bae01fc73e38\";
        e.async = true;
        s.parentNode.insertBefore(e,s);
    }(document,\"script\"));</script>
</head>

<body class=\"";
        // line 51
        $this->displayBlock('bodyClass', $context, $blocks);
        echo "\">
    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebBundle:Partials:_cookieNotification"));
        echo "
    <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-5RVPKJN\" height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
    <div class=\"iyzi-site heightFix\">
        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebBundle:Partials:_signupModal"));
        echo "
        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebBundle:Partials:_offerModal"));
        echo "
        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebBundle:Partials:_cepPosOfferModal"));
        echo "
        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebBundle:Partials:_cashPackageOfferModal"));
        echo "
        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebBundle:Partials:_buyerProtectedMoneyTransferModal"));
        echo "
        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebBundle:Partials:_massPayOutModal"));
        echo "
        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebBundle:Partials:_businessPwiModal"));
        echo "
        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebBundle:Partials:_notifications"));
        echo "
        <header class=\"base-header ";
        // line 63
        $this->displayBlock('headerClasses', $context, $blocks);
        echo "\">
            ";
        // line 64
        $this->displayBlock('headContent', $context, $blocks);
        // line 67
        echo "        </header>
        <main class=\"base-main ";
        // line 68
        $this->displayBlock('mainClass', $context, $blocks);
        echo "\">
            <div class=\"menu-overlay\"></div>
            ";
        // line 70
        $this->displayBlock('main', $context, $blocks);
        // line 71
        echo "        </main>
        <footer class=\"base-footer d-flex justify-content-center";
        // line 72
        $this->displayBlock('footerClass', $context, $blocks);
        echo "\">
            ";
        // line 73
        $this->displayBlock('footerContent', $context, $blocks);
        // line 76
        echo "        </footer>

        ";
        // line 78
        $this->displayBlock('bodyBottomScripts', $context, $blocks);
        // line 79
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/vendors.min.js"), "html", null, true);
        echo "\" defer></script>
        <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/main.min.js"), "html", null, true);
        echo "\" defer></script>
    <script>
        var translatedPage =  \"";
        // line 82
        echo twig_escape_filter($this->env, ($context["translatedUrl"] ?? $this->getContext($context, "translatedUrl")), "html", null, true);
        echo "\";
    </script>

    </div>
    ";
        // line 86
        $this->loadTemplate("@root/Partials/_successFailPopup.html.twig", "::businessLandingPage.html.twig", 86)->display($context);
        // line 87
        echo "</body>
</html>
";
        
        $__internal_dd313f9b2b8b071d0c94453e29c766f867cb9b1721df8de5491bb55666f56112->leave($__internal_dd313f9b2b8b071d0c94453e29c766f867cb9b1721df8de5491bb55666f56112_prof);

        
        $__internal_e7da00cf5dd2c84a38bbf841a19ea53541a842e56f5ae1047ccd4fbb36007cb7->leave($__internal_e7da00cf5dd2c84a38bbf841a19ea53541a842e56f5ae1047ccd4fbb36007cb7_prof);

    }

    // line 16
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_071b566ad70ed86f985d7844e63cf9a54af4930ae0c2fa36f2c3744200cb710b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_071b566ad70ed86f985d7844e63cf9a54af4930ae0c2fa36f2c3744200cb710b->enter($__internal_071b566ad70ed86f985d7844e63cf9a54af4930ae0c2fa36f2c3744200cb710b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_f45a0f93930b7da46a466e31e9665035d07aa5bdb7559f74ebe0a6e3c2ca6a49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f45a0f93930b7da46a466e31e9665035d07aa5bdb7559f74ebe0a6e3c2ca6a49->enter($__internal_f45a0f93930b7da46a466e31e9665035d07aa5bdb7559f74ebe0a6e3c2ca6a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        
        $__internal_f45a0f93930b7da46a466e31e9665035d07aa5bdb7559f74ebe0a6e3c2ca6a49->leave($__internal_f45a0f93930b7da46a466e31e9665035d07aa5bdb7559f74ebe0a6e3c2ca6a49_prof);

        
        $__internal_071b566ad70ed86f985d7844e63cf9a54af4930ae0c2fa36f2c3744200cb710b->leave($__internal_071b566ad70ed86f985d7844e63cf9a54af4930ae0c2fa36f2c3744200cb710b_prof);

    }

    // line 24
    public function block_description($context, array $blocks = array())
    {
        $__internal_3e21209485b54d5020fe4d4ed323390b10fd917153774e1a7ae0ee844e3d6cd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e21209485b54d5020fe4d4ed323390b10fd917153774e1a7ae0ee844e3d6cd3->enter($__internal_3e21209485b54d5020fe4d4ed323390b10fd917153774e1a7ae0ee844e3d6cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_22cefe290c9d9a3ba177075d1a36a2a1a4ac5335419e3acfb05eca0dccf55532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22cefe290c9d9a3ba177075d1a36a2a1a4ac5335419e3acfb05eca0dccf55532->enter($__internal_22cefe290c9d9a3ba177075d1a36a2a1a4ac5335419e3acfb05eca0dccf55532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_22cefe290c9d9a3ba177075d1a36a2a1a4ac5335419e3acfb05eca0dccf55532->leave($__internal_22cefe290c9d9a3ba177075d1a36a2a1a4ac5335419e3acfb05eca0dccf55532_prof);

        
        $__internal_3e21209485b54d5020fe4d4ed323390b10fd917153774e1a7ae0ee844e3d6cd3->leave($__internal_3e21209485b54d5020fe4d4ed323390b10fd917153774e1a7ae0ee844e3d6cd3_prof);

    }

    // line 28
    public function block_openGraph($context, array $blocks = array())
    {
        $__internal_2ef76ea720a9e4458d509b7c8cf4142fc25ff1c5f3ea2df95c7bc6aa66bd2c10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ef76ea720a9e4458d509b7c8cf4142fc25ff1c5f3ea2df95c7bc6aa66bd2c10->enter($__internal_2ef76ea720a9e4458d509b7c8cf4142fc25ff1c5f3ea2df95c7bc6aa66bd2c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "openGraph"));

        $__internal_398e9e744e3ce10b25eb3610733e01e733df2bcace75423e57a6152d2c1d5184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398e9e744e3ce10b25eb3610733e01e733df2bcace75423e57a6152d2c1d5184->enter($__internal_398e9e744e3ce10b25eb3610733e01e733df2bcace75423e57a6152d2c1d5184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "openGraph"));

        
        $__internal_398e9e744e3ce10b25eb3610733e01e733df2bcace75423e57a6152d2c1d5184->leave($__internal_398e9e744e3ce10b25eb3610733e01e733df2bcace75423e57a6152d2c1d5184_prof);

        
        $__internal_2ef76ea720a9e4458d509b7c8cf4142fc25ff1c5f3ea2df95c7bc6aa66bd2c10->leave($__internal_2ef76ea720a9e4458d509b7c8cf4142fc25ff1c5f3ea2df95c7bc6aa66bd2c10_prof);

    }

    // line 33
    public function block_headerStyleIncludes($context, array $blocks = array())
    {
        $__internal_eb39808ae8da8a335c60c3e48d372da10b41cb5445f05f98d42f3f598b11049f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb39808ae8da8a335c60c3e48d372da10b41cb5445f05f98d42f3f598b11049f->enter($__internal_eb39808ae8da8a335c60c3e48d372da10b41cb5445f05f98d42f3f598b11049f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerStyleIncludes"));

        $__internal_34c1abf4e808bed68bb94a3d7dc01fce48f8973f7bc7e9ecd52991684f965d87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34c1abf4e808bed68bb94a3d7dc01fce48f8973f7bc7e9ecd52991684f965d87->enter($__internal_34c1abf4e808bed68bb94a3d7dc01fce48f8973f7bc7e9ecd52991684f965d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerStyleIncludes"));

        
        $__internal_34c1abf4e808bed68bb94a3d7dc01fce48f8973f7bc7e9ecd52991684f965d87->leave($__internal_34c1abf4e808bed68bb94a3d7dc01fce48f8973f7bc7e9ecd52991684f965d87_prof);

        
        $__internal_eb39808ae8da8a335c60c3e48d372da10b41cb5445f05f98d42f3f598b11049f->leave($__internal_eb39808ae8da8a335c60c3e48d372da10b41cb5445f05f98d42f3f598b11049f_prof);

    }

    // line 35
    public function block_headerJavascriptIncludes($context, array $blocks = array())
    {
        $__internal_8ffe8eb71b2a3aec6673483fd598ce3f3f23f7e47c3ce29184de7ccad8c5fdf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ffe8eb71b2a3aec6673483fd598ce3f3f23f7e47c3ce29184de7ccad8c5fdf4->enter($__internal_8ffe8eb71b2a3aec6673483fd598ce3f3f23f7e47c3ce29184de7ccad8c5fdf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerJavascriptIncludes"));

        $__internal_ec3c6bd61258c607513da1ff8c3c39f0f9ed9d49beb92847fad087d382b689d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec3c6bd61258c607513da1ff8c3c39f0f9ed9d49beb92847fad087d382b689d8->enter($__internal_ec3c6bd61258c607513da1ff8c3c39f0f9ed9d49beb92847fad087d382b689d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerJavascriptIncludes"));

        
        $__internal_ec3c6bd61258c607513da1ff8c3c39f0f9ed9d49beb92847fad087d382b689d8->leave($__internal_ec3c6bd61258c607513da1ff8c3c39f0f9ed9d49beb92847fad087d382b689d8_prof);

        
        $__internal_8ffe8eb71b2a3aec6673483fd598ce3f3f23f7e47c3ce29184de7ccad8c5fdf4->leave($__internal_8ffe8eb71b2a3aec6673483fd598ce3f3f23f7e47c3ce29184de7ccad8c5fdf4_prof);

    }

    // line 51
    public function block_bodyClass($context, array $blocks = array())
    {
        $__internal_94113ffac612dc4c2b41a07f4488f7f84643ad52e4a78ded7a09fc55fecefad7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94113ffac612dc4c2b41a07f4488f7f84643ad52e4a78ded7a09fc55fecefad7->enter($__internal_94113ffac612dc4c2b41a07f4488f7f84643ad52e4a78ded7a09fc55fecefad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyClass"));

        $__internal_5378c573dd7ce65a2bb278bb8bbc5e3a59fb794662b1d15bb341588301346817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5378c573dd7ce65a2bb278bb8bbc5e3a59fb794662b1d15bb341588301346817->enter($__internal_5378c573dd7ce65a2bb278bb8bbc5e3a59fb794662b1d15bb341588301346817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyClass"));

        
        $__internal_5378c573dd7ce65a2bb278bb8bbc5e3a59fb794662b1d15bb341588301346817->leave($__internal_5378c573dd7ce65a2bb278bb8bbc5e3a59fb794662b1d15bb341588301346817_prof);

        
        $__internal_94113ffac612dc4c2b41a07f4488f7f84643ad52e4a78ded7a09fc55fecefad7->leave($__internal_94113ffac612dc4c2b41a07f4488f7f84643ad52e4a78ded7a09fc55fecefad7_prof);

    }

    // line 63
    public function block_headerClasses($context, array $blocks = array())
    {
        $__internal_c60e80cc19f12e329a6a2ef17e28b817031f6b54285743ab98e9cb9944557b90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c60e80cc19f12e329a6a2ef17e28b817031f6b54285743ab98e9cb9944557b90->enter($__internal_c60e80cc19f12e329a6a2ef17e28b817031f6b54285743ab98e9cb9944557b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerClasses"));

        $__internal_6bb642c0137a98e2f0f67ad4ab558985b2eff9b8caa627f1b3a2c0f935bbb217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bb642c0137a98e2f0f67ad4ab558985b2eff9b8caa627f1b3a2c0f935bbb217->enter($__internal_6bb642c0137a98e2f0f67ad4ab558985b2eff9b8caa627f1b3a2c0f935bbb217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerClasses"));

        
        $__internal_6bb642c0137a98e2f0f67ad4ab558985b2eff9b8caa627f1b3a2c0f935bbb217->leave($__internal_6bb642c0137a98e2f0f67ad4ab558985b2eff9b8caa627f1b3a2c0f935bbb217_prof);

        
        $__internal_c60e80cc19f12e329a6a2ef17e28b817031f6b54285743ab98e9cb9944557b90->leave($__internal_c60e80cc19f12e329a6a2ef17e28b817031f6b54285743ab98e9cb9944557b90_prof);

    }

    // line 64
    public function block_headContent($context, array $blocks = array())
    {
        $__internal_f2ddc416fe5d0c973b95540cf6316ecc2121946980f1832a25ab8efbef513c33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2ddc416fe5d0c973b95540cf6316ecc2121946980f1832a25ab8efbef513c33->enter($__internal_f2ddc416fe5d0c973b95540cf6316ecc2121946980f1832a25ab8efbef513c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headContent"));

        $__internal_a943c5ac2b13de256f5f1a8efd378679be264bc68fc8d18f1ee0c4dcda204efe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a943c5ac2b13de256f5f1a8efd378679be264bc68fc8d18f1ee0c4dcda204efe->enter($__internal_a943c5ac2b13de256f5f1a8efd378679be264bc68fc8d18f1ee0c4dcda204efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headContent"));

        // line 65
        echo "                ";
        $this->loadTemplate("@root/Partials/_businessHeader.html.twig", "::businessLandingPage.html.twig", 65)->display($context);
        // line 66
        echo "            ";
        
        $__internal_a943c5ac2b13de256f5f1a8efd378679be264bc68fc8d18f1ee0c4dcda204efe->leave($__internal_a943c5ac2b13de256f5f1a8efd378679be264bc68fc8d18f1ee0c4dcda204efe_prof);

        
        $__internal_f2ddc416fe5d0c973b95540cf6316ecc2121946980f1832a25ab8efbef513c33->leave($__internal_f2ddc416fe5d0c973b95540cf6316ecc2121946980f1832a25ab8efbef513c33_prof);

    }

    // line 68
    public function block_mainClass($context, array $blocks = array())
    {
        $__internal_85a5ea52e4f76945901c007b8551372871589801008095fdbc9f7d7a677abe32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85a5ea52e4f76945901c007b8551372871589801008095fdbc9f7d7a677abe32->enter($__internal_85a5ea52e4f76945901c007b8551372871589801008095fdbc9f7d7a677abe32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainClass"));

        $__internal_6d8211c7f5b82faa91ce3c9a4d0849437873d0324703c0bc931334eea70034d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d8211c7f5b82faa91ce3c9a4d0849437873d0324703c0bc931334eea70034d7->enter($__internal_6d8211c7f5b82faa91ce3c9a4d0849437873d0324703c0bc931334eea70034d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainClass"));

        
        $__internal_6d8211c7f5b82faa91ce3c9a4d0849437873d0324703c0bc931334eea70034d7->leave($__internal_6d8211c7f5b82faa91ce3c9a4d0849437873d0324703c0bc931334eea70034d7_prof);

        
        $__internal_85a5ea52e4f76945901c007b8551372871589801008095fdbc9f7d7a677abe32->leave($__internal_85a5ea52e4f76945901c007b8551372871589801008095fdbc9f7d7a677abe32_prof);

    }

    // line 70
    public function block_main($context, array $blocks = array())
    {
        $__internal_cb6fcef7e998c13ea99782e98cc835671f11295ba38d7a85777fde5565382b7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb6fcef7e998c13ea99782e98cc835671f11295ba38d7a85777fde5565382b7d->enter($__internal_cb6fcef7e998c13ea99782e98cc835671f11295ba38d7a85777fde5565382b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_e8f6036c71a91c1615d0f25517cdeb1d7d2eb12a1622a9dd6836ba091b2114dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f6036c71a91c1615d0f25517cdeb1d7d2eb12a1622a9dd6836ba091b2114dd->enter($__internal_e8f6036c71a91c1615d0f25517cdeb1d7d2eb12a1622a9dd6836ba091b2114dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_e8f6036c71a91c1615d0f25517cdeb1d7d2eb12a1622a9dd6836ba091b2114dd->leave($__internal_e8f6036c71a91c1615d0f25517cdeb1d7d2eb12a1622a9dd6836ba091b2114dd_prof);

        
        $__internal_cb6fcef7e998c13ea99782e98cc835671f11295ba38d7a85777fde5565382b7d->leave($__internal_cb6fcef7e998c13ea99782e98cc835671f11295ba38d7a85777fde5565382b7d_prof);

    }

    // line 72
    public function block_footerClass($context, array $blocks = array())
    {
        $__internal_f46a7707e9a225aa1d32a3e782e055486fbe741242ae9dd59d4729cf9c9bc18b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f46a7707e9a225aa1d32a3e782e055486fbe741242ae9dd59d4729cf9c9bc18b->enter($__internal_f46a7707e9a225aa1d32a3e782e055486fbe741242ae9dd59d4729cf9c9bc18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerClass"));

        $__internal_0f1e8d2366624220e4b3a90e07eaf257e9af223610e5f42597f07d0ab5a8824e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f1e8d2366624220e4b3a90e07eaf257e9af223610e5f42597f07d0ab5a8824e->enter($__internal_0f1e8d2366624220e4b3a90e07eaf257e9af223610e5f42597f07d0ab5a8824e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerClass"));

        
        $__internal_0f1e8d2366624220e4b3a90e07eaf257e9af223610e5f42597f07d0ab5a8824e->leave($__internal_0f1e8d2366624220e4b3a90e07eaf257e9af223610e5f42597f07d0ab5a8824e_prof);

        
        $__internal_f46a7707e9a225aa1d32a3e782e055486fbe741242ae9dd59d4729cf9c9bc18b->leave($__internal_f46a7707e9a225aa1d32a3e782e055486fbe741242ae9dd59d4729cf9c9bc18b_prof);

    }

    // line 73
    public function block_footerContent($context, array $blocks = array())
    {
        $__internal_5b82f92793660ec402ec9117b18fdee0b10fd937bd32870e0c20e8d0f04f6a52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b82f92793660ec402ec9117b18fdee0b10fd937bd32870e0c20e8d0f04f6a52->enter($__internal_5b82f92793660ec402ec9117b18fdee0b10fd937bd32870e0c20e8d0f04f6a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerContent"));

        $__internal_c3f96d700da89596b2061d1a92d6da6b5f99d9524688f7311407d919e6fb3505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3f96d700da89596b2061d1a92d6da6b5f99d9524688f7311407d919e6fb3505->enter($__internal_c3f96d700da89596b2061d1a92d6da6b5f99d9524688f7311407d919e6fb3505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerContent"));

        // line 74
        echo "                ";
        $this->loadTemplate("@root/Partials/_footer.html.twig", "::businessLandingPage.html.twig", 74)->display($context);
        // line 75
        echo "            ";
        
        $__internal_c3f96d700da89596b2061d1a92d6da6b5f99d9524688f7311407d919e6fb3505->leave($__internal_c3f96d700da89596b2061d1a92d6da6b5f99d9524688f7311407d919e6fb3505_prof);

        
        $__internal_5b82f92793660ec402ec9117b18fdee0b10fd937bd32870e0c20e8d0f04f6a52->leave($__internal_5b82f92793660ec402ec9117b18fdee0b10fd937bd32870e0c20e8d0f04f6a52_prof);

    }

    // line 78
    public function block_bodyBottomScripts($context, array $blocks = array())
    {
        $__internal_bde844a4b0e20a4271dd05c4c0c19771632016acb618f4b10799f3d54cd22b8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bde844a4b0e20a4271dd05c4c0c19771632016acb618f4b10799f3d54cd22b8b->enter($__internal_bde844a4b0e20a4271dd05c4c0c19771632016acb618f4b10799f3d54cd22b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyBottomScripts"));

        $__internal_ab630cf87ee4e4b4e11834a7152ade35e635e504059bdd7c0792ca314a83e6da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab630cf87ee4e4b4e11834a7152ade35e635e504059bdd7c0792ca314a83e6da->enter($__internal_ab630cf87ee4e4b4e11834a7152ade35e635e504059bdd7c0792ca314a83e6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyBottomScripts"));

        
        $__internal_ab630cf87ee4e4b4e11834a7152ade35e635e504059bdd7c0792ca314a83e6da->leave($__internal_ab630cf87ee4e4b4e11834a7152ade35e635e504059bdd7c0792ca314a83e6da_prof);

        
        $__internal_bde844a4b0e20a4271dd05c4c0c19771632016acb618f4b10799f3d54cd22b8b->leave($__internal_bde844a4b0e20a4271dd05c4c0c19771632016acb618f4b10799f3d54cd22b8b_prof);

    }

    public function getTemplateName()
    {
        return "::businessLandingPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  460 => 78,  450 => 75,  447 => 74,  438 => 73,  421 => 72,  404 => 70,  387 => 68,  377 => 66,  374 => 65,  365 => 64,  348 => 63,  331 => 51,  314 => 35,  297 => 33,  280 => 28,  263 => 24,  246 => 16,  234 => 87,  232 => 86,  225 => 82,  220 => 80,  215 => 79,  213 => 78,  209 => 76,  207 => 73,  203 => 72,  200 => 71,  198 => 70,  193 => 68,  190 => 67,  188 => 64,  184 => 63,  180 => 62,  176 => 61,  172 => 60,  168 => 59,  164 => 58,  160 => 57,  156 => 56,  152 => 55,  146 => 52,  142 => 51,  125 => 36,  123 => 35,  120 => 34,  118 => 33,  114 => 32,  109 => 29,  107 => 28,  103 => 27,  97 => 24,  92 => 22,  85 => 21,  77 => 19,  75 => 18,  71 => 17,  67 => 16,  60 => 11,  58 => 10,  56 => 9,  54 => 8,  50 => 6,  47 => 5,  43 => 3,  40 => 2,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if app.request.attributes.get('_locale') == \"tr\" %}
    {% set toLocale = \".en\" %}
    {% set hrefLang = \"en\" %}
{% else %}
    {% set toLocale = \".tr\" %}
    {% set hrefLang = \"tr\" %}
{% endif %}
{% set pathTranslated =  app.request.attributes.get('_route')~toLocale %}
{% set params = app.request.attributes.get('_route_params')|removeLocale %}
{% set translatedUrl = path(pathTranslated, params) %}
<!DOCTYPE html>
<html prefix=\"og: http://ogp.me/ns#\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>{% block pageTitle %}{% endblock %}</title>
    <link rel=\"canonical\" href=\"{{ app.request.uri|getCanonical }}\" />
    {% if app.session.get('_region') != \"Europe\" %}
    <link rel=\"alternate\" href=\"//www.iyzico.com{{ translatedUrl }}\" hreflang=\"{{ hrefLang }}\" />
    {% endif %}
    <link rel=\"alternate\" href=\"{{app.request.uri|getCanonical}}\" hreflang=\"{{ app.request.attributes.get('_locale') }}\" />
    <link rel=\"icon\" href=\"{{ asset('assets/images/content/favicon.png') }}\">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
    <meta name=\"description\" content=\"{% block description %}{% endblock %}\">
    <!-- OpenGraph Information -->
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:url\" content=\"{{ app.request.uri|getCanonical }}\" />
    {% block openGraph %}{% endblock %}
    <meta property=\"og:site_name\" content=\"iyzico.com\" />
    <meta name=\"facebook-domain-verification\" content=\"i08si5vw7q52b8au7hp4hawdfsl1uq\" />
    <!-- Header Style Includes  -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/styles/main.min.css') }}\" media=\"screen\">
    {% block headerStyleIncludes %}{% endblock %}
    <!-- Header Javascript Includes -->
    {% block headerJavascriptIncludes %}{% endblock %}
    <!-- Styles -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5RVPKJN');</script>
    <script>(function(d,t){
    var e = d.createElement(t),
        s = d.getElementsByTagName(t)[0];
        e.src = \"https://wps.relateddigital.com/relatedpush_sdk.js?ckey=FE52617BD5E04FE7A9C7A35DE4B559BA&aid=7a9b2b6d-c604-4ba9-95fc-bae01fc73e38\";
        e.async = true;
        s.parentNode.insertBefore(e,s);
    }(document,\"script\"));</script>
</head>

<body class=\"{% block bodyClass %}{% endblock %}\">
    {{ render(controller('WebBundle:Partials:_cookieNotification')) }}
    <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-5RVPKJN\" height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
    <div class=\"iyzi-site heightFix\">
        {{ render(controller('WebBundle:Partials:_signupModal')) }}
        {{ render(controller('WebBundle:Partials:_offerModal')) }}
        {{ render(controller('WebBundle:Partials:_cepPosOfferModal')) }}
        {{ render(controller('WebBundle:Partials:_cashPackageOfferModal')) }}
        {{ render(controller('WebBundle:Partials:_buyerProtectedMoneyTransferModal')) }}
        {{ render(controller('WebBundle:Partials:_massPayOutModal')) }}
        {{ render(controller('WebBundle:Partials:_businessPwiModal')) }}
        {{ render(controller('WebBundle:Partials:_notifications')) }}
        <header class=\"base-header {% block headerClasses %}{% endblock %}\">
            {% block headContent %}
                {% include '@root/Partials/_businessHeader.html.twig' %}
            {% endblock %}
        </header>
        <main class=\"base-main {% block mainClass %}{% endblock %}\">
            <div class=\"menu-overlay\"></div>
            {% block main %}{% endblock %}
        </main>
        <footer class=\"base-footer d-flex justify-content-center{% block footerClass %}{% endblock %}\">
            {% block footerContent %}
                {% include '@root/Partials/_footer.html.twig' %}
            {% endblock %}
        </footer>

        {% block bodyBottomScripts %}{% endblock %}
        <script src=\"{{ asset('assets/scripts/vendors.min.js')}}\" defer></script>
        <script src=\"{{ asset('assets/scripts/main.min.js')}}\" defer></script>
    <script>
        var translatedPage =  \"{{ translatedUrl }}\";
    </script>

    </div>
    {% include '@root/Partials/_successFailPopup.html.twig' %}
</body>
</html>
", "::businessLandingPage.html.twig", "/Users/aliay/Development/dev/iyzico_v4/app/Resources/views/businessLandingPage.html.twig");
    }
}
