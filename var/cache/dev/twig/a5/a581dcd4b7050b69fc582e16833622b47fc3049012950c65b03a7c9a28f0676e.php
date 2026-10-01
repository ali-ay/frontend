<?php

/* ::personalLandingPage.html.twig */
class __TwigTemplate_4c54598733c3cedeaded6534533bc773d1eaeb2535fae9a25aa28b4a03547810 extends Twig_Template
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
            'rateSmileys' => array($this, 'block_rateSmileys'),
            'footerClass' => array($this, 'block_footerClass'),
            'footerContent' => array($this, 'block_footerContent'),
            'bodyBottomScripts' => array($this, 'block_bodyBottomScripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d10111973d1407b7b854e220b04985036d544ff48c66ffe6477ce40d28e51de5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d10111973d1407b7b854e220b04985036d544ff48c66ffe6477ce40d28e51de5->enter($__internal_d10111973d1407b7b854e220b04985036d544ff48c66ffe6477ce40d28e51de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::personalLandingPage.html.twig"));

        $__internal_1536dca0d1f293e0709148417792e4bc30cce40b1a8470d4988fac3e253c5b8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1536dca0d1f293e0709148417792e4bc30cce40b1a8470d4988fac3e253c5b8a->enter($__internal_1536dca0d1f293e0709148417792e4bc30cce40b1a8470d4988fac3e253c5b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::personalLandingPage.html.twig"));

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
<html prefix=\"og: http://ogp.me/ns#\" lang=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_locale"), "method"), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>";
        // line 16
        $this->displayBlock('pageTitle', $context, $blocks);
        echo "</title>

    <link rel=\"canonical\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('WebBundle\Twig\CustomExtensions')->getCanonical($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "uri", array())), "html", null, true);
        echo "\" />
    ";
        // line 19
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "_region"), "method") != "Europe")) {
            // line 20
            echo "    <link rel=\"alternate\" href=\"//www.iyzico.com";
            echo twig_escape_filter($this->env, ($context["translatedUrl"] ?? $this->getContext($context, "translatedUrl")), "html", null, true);
            echo "\" hreflang=\"";
            echo twig_escape_filter($this->env, ($context["hrefLang"] ?? $this->getContext($context, "hrefLang")), "html", null, true);
            echo "\" />
    ";
        }
        // line 22
        echo "    <link rel=\"alternate\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('WebBundle\Twig\CustomExtensions')->getCanonical($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "uri", array())), "html", null, true);
        echo "\" hreflang=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_locale"), "method"), "html", null, true);
        echo "\" />
    <link rel=\"icon\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/content/favicon.png"), "html", null, true);
        echo "\">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
    <meta name=\"description\" content=\"";
        // line 25
        $this->displayBlock('description', $context, $blocks);
        echo "\">
    <meta name=\"facebook-domain-verification\" content=\"i08si5vw7q52b8au7hp4hawdfsl1uq\" />
    <!-- OpenGraph Information -->
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:url\" content=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('WebBundle\Twig\CustomExtensions')->getCanonical($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "uri", array())), "html", null, true);
        echo "\" />
    ";
        // line 30
        $this->displayBlock('openGraph', $context, $blocks);
        // line 31
        echo "    <meta property=\"og:locale\" content=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "_locale"), "method"), "html", null, true);
        echo "\" />
    <meta property=\"og:site_name\" content=\"iyzico.com\" />
    <!-- Header Style Includes  -->
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/styles/main.min.css"), "html", null, true);
        echo "\" media=\"screen\">
    ";
        // line 35
        $this->displayBlock('headerStyleIncludes', $context, $blocks);
        // line 36
        echo "    <!-- Header Javascript Includes -->
    ";
        // line 37
        $this->displayBlock('headerJavascriptIncludes', $context, $blocks);
        // line 38
        echo "    <!-- Styles -->
    <script src=\"https://unpkg.com/@lottiefiles/lottie-player@1.5.7/dist/lottie-player.js\"></script>
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

<body class=\"personal ";
        // line 54
        $this->displayBlock('bodyClass', $context, $blocks);
        echo "\" id=\"myDiv\">
    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebBundle:Partials:_notifications"));
        echo "
    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebBundle:Partials:_offerModal"));
        echo "
    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebBundle:Partials:_cookieNotification"));
        echo "
    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebBundle:Partials:_pwiBrandsModal"));
        echo "
    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebBundle:Partials:_pwiBrandsHowToModal"));
        echo "
    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebBundle:Partials:_appDownloadWithQR"));
        echo "
    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebBundle:Partials:_appDownloadWithQRApplyForCard"));
        echo "
    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebBundle:Partials:_consumerOfferRegisterOtpModal"));
        echo "
    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebBundle:Partials:_newconsumerRegisterFailOfferModal"));
        echo "
    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebBundle:Partials:_newconsumerRegisterSucsessOfferModal"));
        echo "
    <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-5RVPKJN\" height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
    <div class=\"iyzi-site heightFix\">
        <header class=\"base-header ";
        // line 67
        $this->displayBlock('headerClasses', $context, $blocks);
        echo "\">
            ";
        // line 68
        $this->displayBlock('headContent', $context, $blocks);
        // line 69
        echo "        </header>
        <main class=\"base-main ";
        // line 70
        $this->displayBlock('mainClass', $context, $blocks);
        echo "\">
            <div class=\"menu-overlay\"></div>
            ";
        // line 72
        $this->displayBlock('main', $context, $blocks);
        // line 73
        echo "        </main>
        ";
        // line 74
        $this->displayBlock('rateSmileys', $context, $blocks);
        // line 75
        echo "        <footer class=\"base-footer ";
        $this->displayBlock('footerClass', $context, $blocks);
        echo "\">
            ";
        // line 76
        $this->displayBlock('footerContent', $context, $blocks);
        // line 77
        echo "        </footer>
        <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/vendors.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/main.min.js"), "html", null, true);
        echo "\" defer></script>
        <script>
            var translatedPage =  \"";
        // line 81
        echo twig_escape_filter($this->env, ($context["translatedUrl"] ?? $this->getContext($context, "translatedUrl")), "html", null, true);
        echo "\";
        </script>
          ";
        // line 83
        $this->displayBlock('bodyBottomScripts', $context, $blocks);
        // line 84
        echo "    </div>
    ";
        // line 85
        $this->loadTemplate("@root/Partials/_successFailPopup.html.twig", "::personalLandingPage.html.twig", 85)->display($context);
        // line 86
        echo "</body>
</html>
";
        
        $__internal_d10111973d1407b7b854e220b04985036d544ff48c66ffe6477ce40d28e51de5->leave($__internal_d10111973d1407b7b854e220b04985036d544ff48c66ffe6477ce40d28e51de5_prof);

        
        $__internal_1536dca0d1f293e0709148417792e4bc30cce40b1a8470d4988fac3e253c5b8a->leave($__internal_1536dca0d1f293e0709148417792e4bc30cce40b1a8470d4988fac3e253c5b8a_prof);

    }

    // line 16
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_0ec5c27d7f5ba5c824e0e8934b37b5f56953f555c00fba6c5424f18ee679d013 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ec5c27d7f5ba5c824e0e8934b37b5f56953f555c00fba6c5424f18ee679d013->enter($__internal_0ec5c27d7f5ba5c824e0e8934b37b5f56953f555c00fba6c5424f18ee679d013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_7b30bec68826ff247b39a618db48b740090c83373588f80dd8282ca48717ae86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b30bec68826ff247b39a618db48b740090c83373588f80dd8282ca48717ae86->enter($__internal_7b30bec68826ff247b39a618db48b740090c83373588f80dd8282ca48717ae86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        
        $__internal_7b30bec68826ff247b39a618db48b740090c83373588f80dd8282ca48717ae86->leave($__internal_7b30bec68826ff247b39a618db48b740090c83373588f80dd8282ca48717ae86_prof);

        
        $__internal_0ec5c27d7f5ba5c824e0e8934b37b5f56953f555c00fba6c5424f18ee679d013->leave($__internal_0ec5c27d7f5ba5c824e0e8934b37b5f56953f555c00fba6c5424f18ee679d013_prof);

    }

    // line 25
    public function block_description($context, array $blocks = array())
    {
        $__internal_c51ed1951c00c08b4d1875b26460b2dcf67b51e0a0749f88820a0463c012c864 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c51ed1951c00c08b4d1875b26460b2dcf67b51e0a0749f88820a0463c012c864->enter($__internal_c51ed1951c00c08b4d1875b26460b2dcf67b51e0a0749f88820a0463c012c864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_6fd0d025298c8aa9a833830fb9927994a4c37dbe79403ab14735dec4fad1e81e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fd0d025298c8aa9a833830fb9927994a4c37dbe79403ab14735dec4fad1e81e->enter($__internal_6fd0d025298c8aa9a833830fb9927994a4c37dbe79403ab14735dec4fad1e81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_6fd0d025298c8aa9a833830fb9927994a4c37dbe79403ab14735dec4fad1e81e->leave($__internal_6fd0d025298c8aa9a833830fb9927994a4c37dbe79403ab14735dec4fad1e81e_prof);

        
        $__internal_c51ed1951c00c08b4d1875b26460b2dcf67b51e0a0749f88820a0463c012c864->leave($__internal_c51ed1951c00c08b4d1875b26460b2dcf67b51e0a0749f88820a0463c012c864_prof);

    }

    // line 30
    public function block_openGraph($context, array $blocks = array())
    {
        $__internal_7baafacc5fb00e5d897f49bf1bf28757718c6ce0de8155bb8a0bff905a2dba6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7baafacc5fb00e5d897f49bf1bf28757718c6ce0de8155bb8a0bff905a2dba6a->enter($__internal_7baafacc5fb00e5d897f49bf1bf28757718c6ce0de8155bb8a0bff905a2dba6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "openGraph"));

        $__internal_da7bbf982d6bfe680a878d2090e78b25a0eb139e8a40077d3bb7d3213bbe625e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da7bbf982d6bfe680a878d2090e78b25a0eb139e8a40077d3bb7d3213bbe625e->enter($__internal_da7bbf982d6bfe680a878d2090e78b25a0eb139e8a40077d3bb7d3213bbe625e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "openGraph"));

        
        $__internal_da7bbf982d6bfe680a878d2090e78b25a0eb139e8a40077d3bb7d3213bbe625e->leave($__internal_da7bbf982d6bfe680a878d2090e78b25a0eb139e8a40077d3bb7d3213bbe625e_prof);

        
        $__internal_7baafacc5fb00e5d897f49bf1bf28757718c6ce0de8155bb8a0bff905a2dba6a->leave($__internal_7baafacc5fb00e5d897f49bf1bf28757718c6ce0de8155bb8a0bff905a2dba6a_prof);

    }

    // line 35
    public function block_headerStyleIncludes($context, array $blocks = array())
    {
        $__internal_a39d2524b84fbcfe2a08b3f23bd306f269835f6766080b7a34c8f816a1f53a53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a39d2524b84fbcfe2a08b3f23bd306f269835f6766080b7a34c8f816a1f53a53->enter($__internal_a39d2524b84fbcfe2a08b3f23bd306f269835f6766080b7a34c8f816a1f53a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerStyleIncludes"));

        $__internal_3487eb707bc0cf976c4c62d21c055d90dd21cd38251954b3bff071920404f764 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3487eb707bc0cf976c4c62d21c055d90dd21cd38251954b3bff071920404f764->enter($__internal_3487eb707bc0cf976c4c62d21c055d90dd21cd38251954b3bff071920404f764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerStyleIncludes"));

        
        $__internal_3487eb707bc0cf976c4c62d21c055d90dd21cd38251954b3bff071920404f764->leave($__internal_3487eb707bc0cf976c4c62d21c055d90dd21cd38251954b3bff071920404f764_prof);

        
        $__internal_a39d2524b84fbcfe2a08b3f23bd306f269835f6766080b7a34c8f816a1f53a53->leave($__internal_a39d2524b84fbcfe2a08b3f23bd306f269835f6766080b7a34c8f816a1f53a53_prof);

    }

    // line 37
    public function block_headerJavascriptIncludes($context, array $blocks = array())
    {
        $__internal_8c4c23f8416b8773ef99d787e8d2886eabdb46e9a2c9d74bfc613f087db234fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c4c23f8416b8773ef99d787e8d2886eabdb46e9a2c9d74bfc613f087db234fe->enter($__internal_8c4c23f8416b8773ef99d787e8d2886eabdb46e9a2c9d74bfc613f087db234fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerJavascriptIncludes"));

        $__internal_90522d3d4baad9ff1336ccc0ba9e09ed21f19990bc0deb1e5c7511b73027639d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90522d3d4baad9ff1336ccc0ba9e09ed21f19990bc0deb1e5c7511b73027639d->enter($__internal_90522d3d4baad9ff1336ccc0ba9e09ed21f19990bc0deb1e5c7511b73027639d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerJavascriptIncludes"));

        
        $__internal_90522d3d4baad9ff1336ccc0ba9e09ed21f19990bc0deb1e5c7511b73027639d->leave($__internal_90522d3d4baad9ff1336ccc0ba9e09ed21f19990bc0deb1e5c7511b73027639d_prof);

        
        $__internal_8c4c23f8416b8773ef99d787e8d2886eabdb46e9a2c9d74bfc613f087db234fe->leave($__internal_8c4c23f8416b8773ef99d787e8d2886eabdb46e9a2c9d74bfc613f087db234fe_prof);

    }

    // line 54
    public function block_bodyClass($context, array $blocks = array())
    {
        $__internal_37bc581987431500bb1451f49287b51dc5e22f2ccea5db54d0dbfc47402e4717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37bc581987431500bb1451f49287b51dc5e22f2ccea5db54d0dbfc47402e4717->enter($__internal_37bc581987431500bb1451f49287b51dc5e22f2ccea5db54d0dbfc47402e4717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyClass"));

        $__internal_6f207e0972df70587a6139467c0cb0d691e257c65da0c79005b1f6cbb1af7c1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f207e0972df70587a6139467c0cb0d691e257c65da0c79005b1f6cbb1af7c1f->enter($__internal_6f207e0972df70587a6139467c0cb0d691e257c65da0c79005b1f6cbb1af7c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyClass"));

        
        $__internal_6f207e0972df70587a6139467c0cb0d691e257c65da0c79005b1f6cbb1af7c1f->leave($__internal_6f207e0972df70587a6139467c0cb0d691e257c65da0c79005b1f6cbb1af7c1f_prof);

        
        $__internal_37bc581987431500bb1451f49287b51dc5e22f2ccea5db54d0dbfc47402e4717->leave($__internal_37bc581987431500bb1451f49287b51dc5e22f2ccea5db54d0dbfc47402e4717_prof);

    }

    // line 67
    public function block_headerClasses($context, array $blocks = array())
    {
        $__internal_4b4b9ff0a8c196a40a8a470542ed985d6a7488dd72d4f1a1a086f4c9d1e5ae57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b4b9ff0a8c196a40a8a470542ed985d6a7488dd72d4f1a1a086f4c9d1e5ae57->enter($__internal_4b4b9ff0a8c196a40a8a470542ed985d6a7488dd72d4f1a1a086f4c9d1e5ae57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerClasses"));

        $__internal_df46c639e3316132fb62602e6b159293b66966aefcd4670576155e874e80fcd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df46c639e3316132fb62602e6b159293b66966aefcd4670576155e874e80fcd6->enter($__internal_df46c639e3316132fb62602e6b159293b66966aefcd4670576155e874e80fcd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerClasses"));

        
        $__internal_df46c639e3316132fb62602e6b159293b66966aefcd4670576155e874e80fcd6->leave($__internal_df46c639e3316132fb62602e6b159293b66966aefcd4670576155e874e80fcd6_prof);

        
        $__internal_4b4b9ff0a8c196a40a8a470542ed985d6a7488dd72d4f1a1a086f4c9d1e5ae57->leave($__internal_4b4b9ff0a8c196a40a8a470542ed985d6a7488dd72d4f1a1a086f4c9d1e5ae57_prof);

    }

    // line 68
    public function block_headContent($context, array $blocks = array())
    {
        $__internal_046677b86456312dce1a7af06460bec37109800ee23324bfcb014c46b4fb596e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_046677b86456312dce1a7af06460bec37109800ee23324bfcb014c46b4fb596e->enter($__internal_046677b86456312dce1a7af06460bec37109800ee23324bfcb014c46b4fb596e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headContent"));

        $__internal_a19f757f355394877339896dbf16ee8f265308553c1125552509eace083f495d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a19f757f355394877339896dbf16ee8f265308553c1125552509eace083f495d->enter($__internal_a19f757f355394877339896dbf16ee8f265308553c1125552509eace083f495d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headContent"));

        
        $__internal_a19f757f355394877339896dbf16ee8f265308553c1125552509eace083f495d->leave($__internal_a19f757f355394877339896dbf16ee8f265308553c1125552509eace083f495d_prof);

        
        $__internal_046677b86456312dce1a7af06460bec37109800ee23324bfcb014c46b4fb596e->leave($__internal_046677b86456312dce1a7af06460bec37109800ee23324bfcb014c46b4fb596e_prof);

    }

    // line 70
    public function block_mainClass($context, array $blocks = array())
    {
        $__internal_4413bbc2839d912e3a3d45d923a859a49928a8f1bb49e894f6fd70755902e643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4413bbc2839d912e3a3d45d923a859a49928a8f1bb49e894f6fd70755902e643->enter($__internal_4413bbc2839d912e3a3d45d923a859a49928a8f1bb49e894f6fd70755902e643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainClass"));

        $__internal_2f19e36e45c4d6c03ef74ed202261929fbac2201213b26b1f016e33db5212897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f19e36e45c4d6c03ef74ed202261929fbac2201213b26b1f016e33db5212897->enter($__internal_2f19e36e45c4d6c03ef74ed202261929fbac2201213b26b1f016e33db5212897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainClass"));

        
        $__internal_2f19e36e45c4d6c03ef74ed202261929fbac2201213b26b1f016e33db5212897->leave($__internal_2f19e36e45c4d6c03ef74ed202261929fbac2201213b26b1f016e33db5212897_prof);

        
        $__internal_4413bbc2839d912e3a3d45d923a859a49928a8f1bb49e894f6fd70755902e643->leave($__internal_4413bbc2839d912e3a3d45d923a859a49928a8f1bb49e894f6fd70755902e643_prof);

    }

    // line 72
    public function block_main($context, array $blocks = array())
    {
        $__internal_2faa426e89cf7a977511bdbfa3d7a7f4aed91bd0fb2c668c01684ecebe7bbfcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2faa426e89cf7a977511bdbfa3d7a7f4aed91bd0fb2c668c01684ecebe7bbfcc->enter($__internal_2faa426e89cf7a977511bdbfa3d7a7f4aed91bd0fb2c668c01684ecebe7bbfcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_3ae5e7b581b165f537449848f71922a836ec92a53cddf100197e35d2e8b393d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ae5e7b581b165f537449848f71922a836ec92a53cddf100197e35d2e8b393d0->enter($__internal_3ae5e7b581b165f537449848f71922a836ec92a53cddf100197e35d2e8b393d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_3ae5e7b581b165f537449848f71922a836ec92a53cddf100197e35d2e8b393d0->leave($__internal_3ae5e7b581b165f537449848f71922a836ec92a53cddf100197e35d2e8b393d0_prof);

        
        $__internal_2faa426e89cf7a977511bdbfa3d7a7f4aed91bd0fb2c668c01684ecebe7bbfcc->leave($__internal_2faa426e89cf7a977511bdbfa3d7a7f4aed91bd0fb2c668c01684ecebe7bbfcc_prof);

    }

    // line 74
    public function block_rateSmileys($context, array $blocks = array())
    {
        $__internal_10ae3c5b5912ddea659dba24e8ec2ed554537c2381df83dd3b6a26b879037176 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10ae3c5b5912ddea659dba24e8ec2ed554537c2381df83dd3b6a26b879037176->enter($__internal_10ae3c5b5912ddea659dba24e8ec2ed554537c2381df83dd3b6a26b879037176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rateSmileys"));

        $__internal_80f11e24911eed68ff45900645efa3e12fc4ea3a3aa8d5f45b98559e72013264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80f11e24911eed68ff45900645efa3e12fc4ea3a3aa8d5f45b98559e72013264->enter($__internal_80f11e24911eed68ff45900645efa3e12fc4ea3a3aa8d5f45b98559e72013264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rateSmileys"));

        
        $__internal_80f11e24911eed68ff45900645efa3e12fc4ea3a3aa8d5f45b98559e72013264->leave($__internal_80f11e24911eed68ff45900645efa3e12fc4ea3a3aa8d5f45b98559e72013264_prof);

        
        $__internal_10ae3c5b5912ddea659dba24e8ec2ed554537c2381df83dd3b6a26b879037176->leave($__internal_10ae3c5b5912ddea659dba24e8ec2ed554537c2381df83dd3b6a26b879037176_prof);

    }

    // line 75
    public function block_footerClass($context, array $blocks = array())
    {
        $__internal_91212fa27f19da255ce6f91a9f0b711b6f3b3037c262fccf7c0266b4ba4008a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91212fa27f19da255ce6f91a9f0b711b6f3b3037c262fccf7c0266b4ba4008a4->enter($__internal_91212fa27f19da255ce6f91a9f0b711b6f3b3037c262fccf7c0266b4ba4008a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerClass"));

        $__internal_72701634735657470aeb89b0d2d4d72f4b020fb36961dc3062d143064cfc103b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72701634735657470aeb89b0d2d4d72f4b020fb36961dc3062d143064cfc103b->enter($__internal_72701634735657470aeb89b0d2d4d72f4b020fb36961dc3062d143064cfc103b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerClass"));

        
        $__internal_72701634735657470aeb89b0d2d4d72f4b020fb36961dc3062d143064cfc103b->leave($__internal_72701634735657470aeb89b0d2d4d72f4b020fb36961dc3062d143064cfc103b_prof);

        
        $__internal_91212fa27f19da255ce6f91a9f0b711b6f3b3037c262fccf7c0266b4ba4008a4->leave($__internal_91212fa27f19da255ce6f91a9f0b711b6f3b3037c262fccf7c0266b4ba4008a4_prof);

    }

    // line 76
    public function block_footerContent($context, array $blocks = array())
    {
        $__internal_8d032a50209639097e7b15f27397407600d7b1d991f202fb1c6f060a57ade622 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d032a50209639097e7b15f27397407600d7b1d991f202fb1c6f060a57ade622->enter($__internal_8d032a50209639097e7b15f27397407600d7b1d991f202fb1c6f060a57ade622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerContent"));

        $__internal_cd37f3128b49262b9d7421b5fd87421cc8d0149da618f75d4fc7358fb35bea42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd37f3128b49262b9d7421b5fd87421cc8d0149da618f75d4fc7358fb35bea42->enter($__internal_cd37f3128b49262b9d7421b5fd87421cc8d0149da618f75d4fc7358fb35bea42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerContent"));

        
        $__internal_cd37f3128b49262b9d7421b5fd87421cc8d0149da618f75d4fc7358fb35bea42->leave($__internal_cd37f3128b49262b9d7421b5fd87421cc8d0149da618f75d4fc7358fb35bea42_prof);

        
        $__internal_8d032a50209639097e7b15f27397407600d7b1d991f202fb1c6f060a57ade622->leave($__internal_8d032a50209639097e7b15f27397407600d7b1d991f202fb1c6f060a57ade622_prof);

    }

    // line 83
    public function block_bodyBottomScripts($context, array $blocks = array())
    {
        $__internal_3404fe6bb28426c1cfb393adc2768353956c0298de20fd1d35f72d057a3d75ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3404fe6bb28426c1cfb393adc2768353956c0298de20fd1d35f72d057a3d75ee->enter($__internal_3404fe6bb28426c1cfb393adc2768353956c0298de20fd1d35f72d057a3d75ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyBottomScripts"));

        $__internal_27e538659ac5a262766093e8e30e4ecc028d792bf3ac4c771d60c21d697be868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27e538659ac5a262766093e8e30e4ecc028d792bf3ac4c771d60c21d697be868->enter($__internal_27e538659ac5a262766093e8e30e4ecc028d792bf3ac4c771d60c21d697be868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyBottomScripts"));

        
        $__internal_27e538659ac5a262766093e8e30e4ecc028d792bf3ac4c771d60c21d697be868->leave($__internal_27e538659ac5a262766093e8e30e4ecc028d792bf3ac4c771d60c21d697be868_prof);

        
        $__internal_3404fe6bb28426c1cfb393adc2768353956c0298de20fd1d35f72d057a3d75ee->leave($__internal_3404fe6bb28426c1cfb393adc2768353956c0298de20fd1d35f72d057a3d75ee_prof);

    }

    public function getTemplateName()
    {
        return "::personalLandingPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  482 => 83,  465 => 76,  448 => 75,  431 => 74,  414 => 72,  397 => 70,  380 => 68,  363 => 67,  346 => 54,  329 => 37,  312 => 35,  295 => 30,  278 => 25,  261 => 16,  249 => 86,  247 => 85,  244 => 84,  242 => 83,  237 => 81,  232 => 79,  228 => 78,  225 => 77,  223 => 76,  218 => 75,  216 => 74,  213 => 73,  211 => 72,  206 => 70,  203 => 69,  201 => 68,  197 => 67,  191 => 64,  187 => 63,  183 => 62,  179 => 61,  175 => 60,  171 => 59,  167 => 58,  163 => 57,  159 => 56,  155 => 55,  151 => 54,  133 => 38,  131 => 37,  128 => 36,  126 => 35,  122 => 34,  115 => 31,  113 => 30,  109 => 29,  102 => 25,  97 => 23,  90 => 22,  82 => 20,  80 => 19,  76 => 18,  71 => 16,  64 => 12,  61 => 11,  59 => 10,  57 => 9,  55 => 8,  51 => 6,  48 => 5,  44 => 3,  41 => 2,  39 => 1,);
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
<html prefix=\"og: http://ogp.me/ns#\" lang=\"{{app.request.attributes.get('_locale')}}\">
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
    <meta name=\"facebook-domain-verification\" content=\"i08si5vw7q52b8au7hp4hawdfsl1uq\" />
    <!-- OpenGraph Information -->
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:url\" content=\"{{ app.request.uri|getCanonical }}\" />
    {% block openGraph %}{% endblock %}
    <meta property=\"og:locale\" content=\"{{ app.session.get('_locale') }}\" />
    <meta property=\"og:site_name\" content=\"iyzico.com\" />
    <!-- Header Style Includes  -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/styles/main.min.css') }}\" media=\"screen\">
    {% block headerStyleIncludes %}{% endblock %}
    <!-- Header Javascript Includes -->
    {% block headerJavascriptIncludes %}{% endblock %}
    <!-- Styles -->
    <script src=\"https://unpkg.com/@lottiefiles/lottie-player@1.5.7/dist/lottie-player.js\"></script>
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

<body class=\"personal {% block bodyClass %}{% endblock %}\" id=\"myDiv\">
    {{ render(controller('WebBundle:Partials:_notifications')) }}
    {{ render(controller('WebBundle:Partials:_offerModal')) }}
    {{ render(controller('WebBundle:Partials:_cookieNotification')) }}
    {{ render(controller('WebBundle:Partials:_pwiBrandsModal')) }}
    {{ render(controller('WebBundle:Partials:_pwiBrandsHowToModal')) }}
    {{ render(controller('WebBundle:Partials:_appDownloadWithQR' )) }}
    {{ render(controller('WebBundle:Partials:_appDownloadWithQRApplyForCard' )) }}
    {{ render(controller('WebBundle:Partials:_consumerOfferRegisterOtpModal')) }}
    {{ render(controller('WebBundle:Partials:_newconsumerRegisterFailOfferModal')) }}
    {{ render(controller('WebBundle:Partials:_newconsumerRegisterSucsessOfferModal')) }}
    <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-5RVPKJN\" height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
    <div class=\"iyzi-site heightFix\">
        <header class=\"base-header {% block headerClasses %}{% endblock %}\">
            {% block headContent %}{% endblock %}
        </header>
        <main class=\"base-main {% block mainClass %}{% endblock %}\">
            <div class=\"menu-overlay\"></div>
            {% block main %}{% endblock %}
        </main>
        {% block rateSmileys %}{% endblock %}
        <footer class=\"base-footer {% block footerClass %}{% endblock %}\">
            {% block footerContent %}{% endblock %}
        </footer>
        <script src=\"{{ asset('assets/scripts/vendors.min.js')}}\"></script>
        <script src=\"{{ asset('assets/scripts/main.min.js')}}\" defer></script>
        <script>
            var translatedPage =  \"{{ translatedUrl }}\";
        </script>
          {% block bodyBottomScripts %}{% endblock %}
    </div>
    {% include '@root/Partials/_successFailPopup.html.twig' %}
</body>
</html>
", "::personalLandingPage.html.twig", "/Users/aliay/Development/dev/iyzico_v4/app/Resources/views/personalLandingPage.html.twig");
    }
}
