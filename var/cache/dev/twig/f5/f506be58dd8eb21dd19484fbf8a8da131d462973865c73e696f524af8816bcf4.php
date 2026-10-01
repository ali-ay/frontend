<?php

/* ::landingPage.html.twig */
class __TwigTemplate_031bae8059db4a12520346d09897c32dde72a6b6a604f8d9c5495d66dbd017d7 extends Twig_Template
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
        $__internal_72e3d4a9dc9e7c9ffffdd633f6e3abf2367a632f7c0793ad63c5f1c316a19273 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72e3d4a9dc9e7c9ffffdd633f6e3abf2367a632f7c0793ad63c5f1c316a19273->enter($__internal_72e3d4a9dc9e7c9ffffdd633f6e3abf2367a632f7c0793ad63c5f1c316a19273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::landingPage.html.twig"));

        $__internal_87d2db5ddc8f8d66edcbd96ddcba2139492aba9fe7ceaad3fe1e6758afe87133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87d2db5ddc8f8d66edcbd96ddcba2139492aba9fe7ceaad3fe1e6758afe87133->enter($__internal_87d2db5ddc8f8d66edcbd96ddcba2139492aba9fe7ceaad3fe1e6758afe87133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::landingPage.html.twig"));

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
    <script>(function(d,t){
    var e = d.createElement(t),
        s = d.getElementsByTagName(t)[0];
        e.src = \"https://wps.relateddigital.com/relatedpush_sdk.js?ckey=FE52617BD5E04FE7A9C7A35DE4B559BA&aid=7a9b2b6d-c604-4ba9-95fc-bae01fc73e38\";
        e.async = true;
        s.parentNode.insertBefore(e,s);
    }(document,\"script\"));</script>
</head>

<body class=\"";
        // line 48
        $this->displayBlock('bodyClass', $context, $blocks);
        echo "\">
    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebBundle:Partials:_cookieNotification"));
        echo "
    <div class=\"iyzi-site heightFix\">
        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebBundle:Partials:_signupModal"));
        echo "
        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebBundle:Partials:_notifications"));
        echo "
        <header class=\"base-header ";
        // line 53
        $this->displayBlock('headerClasses', $context, $blocks);
        echo "\">
            ";
        // line 54
        $this->displayBlock('headContent', $context, $blocks);
        // line 57
        echo "        </header>
        <main class=\"base-main ";
        // line 58
        $this->displayBlock('mainClass', $context, $blocks);
        echo "\">
            <div class=\"menu-overlay\"></div>
            ";
        // line 60
        $this->displayBlock('main', $context, $blocks);
        // line 61
        echo "        </main>
        <footer class=\"base-footer ";
        // line 62
        $this->displayBlock('footerClass', $context, $blocks);
        echo "\">
            ";
        // line 63
        $this->displayBlock('footerContent', $context, $blocks);
        // line 64
        echo "        </footer>

        <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/vendors.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/main.min.js"), "html", null, true);
        echo "\" defer></script>
        <script>
          var translatedPage =  \"";
        // line 69
        echo twig_escape_filter($this->env, ($context["translatedUrl"] ?? $this->getContext($context, "translatedUrl")), "html", null, true);
        echo "\";
        </script>
        ";
        // line 71
        $this->displayBlock('bodyBottomScripts', $context, $blocks);
        // line 72
        echo "    </div>
    ";
        // line 73
        $this->loadTemplate("@root/Partials/_successFailPopup.html.twig", "::landingPage.html.twig", 73)->display($context);
        // line 74
        echo "</body>
</html>
";
        
        $__internal_72e3d4a9dc9e7c9ffffdd633f6e3abf2367a632f7c0793ad63c5f1c316a19273->leave($__internal_72e3d4a9dc9e7c9ffffdd633f6e3abf2367a632f7c0793ad63c5f1c316a19273_prof);

        
        $__internal_87d2db5ddc8f8d66edcbd96ddcba2139492aba9fe7ceaad3fe1e6758afe87133->leave($__internal_87d2db5ddc8f8d66edcbd96ddcba2139492aba9fe7ceaad3fe1e6758afe87133_prof);

    }

    // line 16
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_7afba0853cb3e64f265cdbc7473ec18b5b4471e7a6d44591fa3cdbfc82ad6641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7afba0853cb3e64f265cdbc7473ec18b5b4471e7a6d44591fa3cdbfc82ad6641->enter($__internal_7afba0853cb3e64f265cdbc7473ec18b5b4471e7a6d44591fa3cdbfc82ad6641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_62e79626fad27c967e616cd4c8689e79ab0b4ec28545677a9d414628c4a1df6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62e79626fad27c967e616cd4c8689e79ab0b4ec28545677a9d414628c4a1df6d->enter($__internal_62e79626fad27c967e616cd4c8689e79ab0b4ec28545677a9d414628c4a1df6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        
        $__internal_62e79626fad27c967e616cd4c8689e79ab0b4ec28545677a9d414628c4a1df6d->leave($__internal_62e79626fad27c967e616cd4c8689e79ab0b4ec28545677a9d414628c4a1df6d_prof);

        
        $__internal_7afba0853cb3e64f265cdbc7473ec18b5b4471e7a6d44591fa3cdbfc82ad6641->leave($__internal_7afba0853cb3e64f265cdbc7473ec18b5b4471e7a6d44591fa3cdbfc82ad6641_prof);

    }

    // line 25
    public function block_description($context, array $blocks = array())
    {
        $__internal_7ca621b535e4e19fe62fd40fca8365473e67b2a87643f4cdc6fc8b91390d2a86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ca621b535e4e19fe62fd40fca8365473e67b2a87643f4cdc6fc8b91390d2a86->enter($__internal_7ca621b535e4e19fe62fd40fca8365473e67b2a87643f4cdc6fc8b91390d2a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_09efe1a0c6a2828f5d1f967d8cd1ca37d7947a9b9bd551dcdc4a3b9812b45f5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09efe1a0c6a2828f5d1f967d8cd1ca37d7947a9b9bd551dcdc4a3b9812b45f5f->enter($__internal_09efe1a0c6a2828f5d1f967d8cd1ca37d7947a9b9bd551dcdc4a3b9812b45f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_09efe1a0c6a2828f5d1f967d8cd1ca37d7947a9b9bd551dcdc4a3b9812b45f5f->leave($__internal_09efe1a0c6a2828f5d1f967d8cd1ca37d7947a9b9bd551dcdc4a3b9812b45f5f_prof);

        
        $__internal_7ca621b535e4e19fe62fd40fca8365473e67b2a87643f4cdc6fc8b91390d2a86->leave($__internal_7ca621b535e4e19fe62fd40fca8365473e67b2a87643f4cdc6fc8b91390d2a86_prof);

    }

    // line 30
    public function block_openGraph($context, array $blocks = array())
    {
        $__internal_7d1ec62a69c891f3df36c0cdc3712bd6a296369870db542c798f914844d958c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d1ec62a69c891f3df36c0cdc3712bd6a296369870db542c798f914844d958c0->enter($__internal_7d1ec62a69c891f3df36c0cdc3712bd6a296369870db542c798f914844d958c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "openGraph"));

        $__internal_e295b76d07aa10c3f5b43ddba063ccc538059110815d0f702ad6d24441d90b57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e295b76d07aa10c3f5b43ddba063ccc538059110815d0f702ad6d24441d90b57->enter($__internal_e295b76d07aa10c3f5b43ddba063ccc538059110815d0f702ad6d24441d90b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "openGraph"));

        
        $__internal_e295b76d07aa10c3f5b43ddba063ccc538059110815d0f702ad6d24441d90b57->leave($__internal_e295b76d07aa10c3f5b43ddba063ccc538059110815d0f702ad6d24441d90b57_prof);

        
        $__internal_7d1ec62a69c891f3df36c0cdc3712bd6a296369870db542c798f914844d958c0->leave($__internal_7d1ec62a69c891f3df36c0cdc3712bd6a296369870db542c798f914844d958c0_prof);

    }

    // line 35
    public function block_headerStyleIncludes($context, array $blocks = array())
    {
        $__internal_da6a8d11a5510aa794a53f0b61eda22eea142133af798b55450cbe55e481b89a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da6a8d11a5510aa794a53f0b61eda22eea142133af798b55450cbe55e481b89a->enter($__internal_da6a8d11a5510aa794a53f0b61eda22eea142133af798b55450cbe55e481b89a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerStyleIncludes"));

        $__internal_5d6abd4322c29ed01b2cd44b965552a79628f1c53687c826fb5f4aac38461f20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d6abd4322c29ed01b2cd44b965552a79628f1c53687c826fb5f4aac38461f20->enter($__internal_5d6abd4322c29ed01b2cd44b965552a79628f1c53687c826fb5f4aac38461f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerStyleIncludes"));

        
        $__internal_5d6abd4322c29ed01b2cd44b965552a79628f1c53687c826fb5f4aac38461f20->leave($__internal_5d6abd4322c29ed01b2cd44b965552a79628f1c53687c826fb5f4aac38461f20_prof);

        
        $__internal_da6a8d11a5510aa794a53f0b61eda22eea142133af798b55450cbe55e481b89a->leave($__internal_da6a8d11a5510aa794a53f0b61eda22eea142133af798b55450cbe55e481b89a_prof);

    }

    // line 37
    public function block_headerJavascriptIncludes($context, array $blocks = array())
    {
        $__internal_8b6200343fdd7ccbd20b5ea7ec87fd4b7b565dba964b565e09b7fff0c3a0fe3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b6200343fdd7ccbd20b5ea7ec87fd4b7b565dba964b565e09b7fff0c3a0fe3f->enter($__internal_8b6200343fdd7ccbd20b5ea7ec87fd4b7b565dba964b565e09b7fff0c3a0fe3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerJavascriptIncludes"));

        $__internal_2cff0f32b828706a90c4f5c9d79da969f1bbcbdf2d4a1eb4b57b5d85d0850147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cff0f32b828706a90c4f5c9d79da969f1bbcbdf2d4a1eb4b57b5d85d0850147->enter($__internal_2cff0f32b828706a90c4f5c9d79da969f1bbcbdf2d4a1eb4b57b5d85d0850147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerJavascriptIncludes"));

        
        $__internal_2cff0f32b828706a90c4f5c9d79da969f1bbcbdf2d4a1eb4b57b5d85d0850147->leave($__internal_2cff0f32b828706a90c4f5c9d79da969f1bbcbdf2d4a1eb4b57b5d85d0850147_prof);

        
        $__internal_8b6200343fdd7ccbd20b5ea7ec87fd4b7b565dba964b565e09b7fff0c3a0fe3f->leave($__internal_8b6200343fdd7ccbd20b5ea7ec87fd4b7b565dba964b565e09b7fff0c3a0fe3f_prof);

    }

    // line 48
    public function block_bodyClass($context, array $blocks = array())
    {
        $__internal_ecc5f157341af11887816f761db69c6272cde8e10f4d006001e077a8805f2cf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecc5f157341af11887816f761db69c6272cde8e10f4d006001e077a8805f2cf9->enter($__internal_ecc5f157341af11887816f761db69c6272cde8e10f4d006001e077a8805f2cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyClass"));

        $__internal_22dc17049b8277666d24842cc77884e2814c3bd9a84a15b605d7ba5c3bf9fbdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22dc17049b8277666d24842cc77884e2814c3bd9a84a15b605d7ba5c3bf9fbdb->enter($__internal_22dc17049b8277666d24842cc77884e2814c3bd9a84a15b605d7ba5c3bf9fbdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyClass"));

        
        $__internal_22dc17049b8277666d24842cc77884e2814c3bd9a84a15b605d7ba5c3bf9fbdb->leave($__internal_22dc17049b8277666d24842cc77884e2814c3bd9a84a15b605d7ba5c3bf9fbdb_prof);

        
        $__internal_ecc5f157341af11887816f761db69c6272cde8e10f4d006001e077a8805f2cf9->leave($__internal_ecc5f157341af11887816f761db69c6272cde8e10f4d006001e077a8805f2cf9_prof);

    }

    // line 53
    public function block_headerClasses($context, array $blocks = array())
    {
        $__internal_2072265b8677d5be787bfd4489e17c2ff1161a8e4900899fb818184faf3519ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2072265b8677d5be787bfd4489e17c2ff1161a8e4900899fb818184faf3519ae->enter($__internal_2072265b8677d5be787bfd4489e17c2ff1161a8e4900899fb818184faf3519ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerClasses"));

        $__internal_24fbbb309daa812c143bece58498412a331bacfef2cb4aed4661a35cdcdd6408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24fbbb309daa812c143bece58498412a331bacfef2cb4aed4661a35cdcdd6408->enter($__internal_24fbbb309daa812c143bece58498412a331bacfef2cb4aed4661a35cdcdd6408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerClasses"));

        
        $__internal_24fbbb309daa812c143bece58498412a331bacfef2cb4aed4661a35cdcdd6408->leave($__internal_24fbbb309daa812c143bece58498412a331bacfef2cb4aed4661a35cdcdd6408_prof);

        
        $__internal_2072265b8677d5be787bfd4489e17c2ff1161a8e4900899fb818184faf3519ae->leave($__internal_2072265b8677d5be787bfd4489e17c2ff1161a8e4900899fb818184faf3519ae_prof);

    }

    // line 54
    public function block_headContent($context, array $blocks = array())
    {
        $__internal_627c4fc36571502f98da3b5e8278c174f5ce49169215bf99885f55466502d9bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_627c4fc36571502f98da3b5e8278c174f5ce49169215bf99885f55466502d9bc->enter($__internal_627c4fc36571502f98da3b5e8278c174f5ce49169215bf99885f55466502d9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headContent"));

        $__internal_f8535a891d0fc367e642c9b4794b874ebae100ae464ddf2bd8e47a590bc54464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8535a891d0fc367e642c9b4794b874ebae100ae464ddf2bd8e47a590bc54464->enter($__internal_f8535a891d0fc367e642c9b4794b874ebae100ae464ddf2bd8e47a590bc54464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headContent"));

        // line 55
        echo "                ";
        $this->loadTemplate("@root/Partials/_businessHeader.html.twig", "::landingPage.html.twig", 55)->display($context);
        // line 56
        echo "            ";
        
        $__internal_f8535a891d0fc367e642c9b4794b874ebae100ae464ddf2bd8e47a590bc54464->leave($__internal_f8535a891d0fc367e642c9b4794b874ebae100ae464ddf2bd8e47a590bc54464_prof);

        
        $__internal_627c4fc36571502f98da3b5e8278c174f5ce49169215bf99885f55466502d9bc->leave($__internal_627c4fc36571502f98da3b5e8278c174f5ce49169215bf99885f55466502d9bc_prof);

    }

    // line 58
    public function block_mainClass($context, array $blocks = array())
    {
        $__internal_ebc09032a466840bbd555b9d4598524d29059b672153a12882a92bbc0670f58b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebc09032a466840bbd555b9d4598524d29059b672153a12882a92bbc0670f58b->enter($__internal_ebc09032a466840bbd555b9d4598524d29059b672153a12882a92bbc0670f58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainClass"));

        $__internal_11f280d1cf8a7adc5a960deb9a94c912a30bbd8a12842b31a6e564a0e04aeb77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11f280d1cf8a7adc5a960deb9a94c912a30bbd8a12842b31a6e564a0e04aeb77->enter($__internal_11f280d1cf8a7adc5a960deb9a94c912a30bbd8a12842b31a6e564a0e04aeb77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainClass"));

        
        $__internal_11f280d1cf8a7adc5a960deb9a94c912a30bbd8a12842b31a6e564a0e04aeb77->leave($__internal_11f280d1cf8a7adc5a960deb9a94c912a30bbd8a12842b31a6e564a0e04aeb77_prof);

        
        $__internal_ebc09032a466840bbd555b9d4598524d29059b672153a12882a92bbc0670f58b->leave($__internal_ebc09032a466840bbd555b9d4598524d29059b672153a12882a92bbc0670f58b_prof);

    }

    // line 60
    public function block_main($context, array $blocks = array())
    {
        $__internal_59c4fbc0024ed7d0b8709a4d72c7961070bdc1b19720b02f414b73ac0dfebaf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59c4fbc0024ed7d0b8709a4d72c7961070bdc1b19720b02f414b73ac0dfebaf8->enter($__internal_59c4fbc0024ed7d0b8709a4d72c7961070bdc1b19720b02f414b73ac0dfebaf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_aa3109d67615253e4ab49903191beac612b60bff5088339aa3c8121d7e42ce14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa3109d67615253e4ab49903191beac612b60bff5088339aa3c8121d7e42ce14->enter($__internal_aa3109d67615253e4ab49903191beac612b60bff5088339aa3c8121d7e42ce14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_aa3109d67615253e4ab49903191beac612b60bff5088339aa3c8121d7e42ce14->leave($__internal_aa3109d67615253e4ab49903191beac612b60bff5088339aa3c8121d7e42ce14_prof);

        
        $__internal_59c4fbc0024ed7d0b8709a4d72c7961070bdc1b19720b02f414b73ac0dfebaf8->leave($__internal_59c4fbc0024ed7d0b8709a4d72c7961070bdc1b19720b02f414b73ac0dfebaf8_prof);

    }

    // line 62
    public function block_footerClass($context, array $blocks = array())
    {
        $__internal_49a241e4e4a637aeb9c66ca6cdfcac8ace44e803dbae79f2300a5c4c7d462ddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49a241e4e4a637aeb9c66ca6cdfcac8ace44e803dbae79f2300a5c4c7d462ddf->enter($__internal_49a241e4e4a637aeb9c66ca6cdfcac8ace44e803dbae79f2300a5c4c7d462ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerClass"));

        $__internal_bf0a0467e12ef762bfbabc1f6193d2c105f6030cc61008009ea2babdd11aa38f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf0a0467e12ef762bfbabc1f6193d2c105f6030cc61008009ea2babdd11aa38f->enter($__internal_bf0a0467e12ef762bfbabc1f6193d2c105f6030cc61008009ea2babdd11aa38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerClass"));

        
        $__internal_bf0a0467e12ef762bfbabc1f6193d2c105f6030cc61008009ea2babdd11aa38f->leave($__internal_bf0a0467e12ef762bfbabc1f6193d2c105f6030cc61008009ea2babdd11aa38f_prof);

        
        $__internal_49a241e4e4a637aeb9c66ca6cdfcac8ace44e803dbae79f2300a5c4c7d462ddf->leave($__internal_49a241e4e4a637aeb9c66ca6cdfcac8ace44e803dbae79f2300a5c4c7d462ddf_prof);

    }

    // line 63
    public function block_footerContent($context, array $blocks = array())
    {
        $__internal_73953dc7b65e38992fa55ae356188c1972594f3197530f7bf7ca9a3ce7ce96df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73953dc7b65e38992fa55ae356188c1972594f3197530f7bf7ca9a3ce7ce96df->enter($__internal_73953dc7b65e38992fa55ae356188c1972594f3197530f7bf7ca9a3ce7ce96df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerContent"));

        $__internal_f1ed95ec9a4c1006856f9506f78b8089634bcf61fbd456cdf783543e4a58d294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1ed95ec9a4c1006856f9506f78b8089634bcf61fbd456cdf783543e4a58d294->enter($__internal_f1ed95ec9a4c1006856f9506f78b8089634bcf61fbd456cdf783543e4a58d294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerContent"));

        
        $__internal_f1ed95ec9a4c1006856f9506f78b8089634bcf61fbd456cdf783543e4a58d294->leave($__internal_f1ed95ec9a4c1006856f9506f78b8089634bcf61fbd456cdf783543e4a58d294_prof);

        
        $__internal_73953dc7b65e38992fa55ae356188c1972594f3197530f7bf7ca9a3ce7ce96df->leave($__internal_73953dc7b65e38992fa55ae356188c1972594f3197530f7bf7ca9a3ce7ce96df_prof);

    }

    // line 71
    public function block_bodyBottomScripts($context, array $blocks = array())
    {
        $__internal_f0ea318b4a1faebb33d2c962e4d63728d31a6b6d6bc22d54068fccef8536081d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0ea318b4a1faebb33d2c962e4d63728d31a6b6d6bc22d54068fccef8536081d->enter($__internal_f0ea318b4a1faebb33d2c962e4d63728d31a6b6d6bc22d54068fccef8536081d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyBottomScripts"));

        $__internal_253afde62014ad3b46b7f1273fd63957f69fe962f74d34337846596dafa1f656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_253afde62014ad3b46b7f1273fd63957f69fe962f74d34337846596dafa1f656->enter($__internal_253afde62014ad3b46b7f1273fd63957f69fe962f74d34337846596dafa1f656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyBottomScripts"));

        
        $__internal_253afde62014ad3b46b7f1273fd63957f69fe962f74d34337846596dafa1f656->leave($__internal_253afde62014ad3b46b7f1273fd63957f69fe962f74d34337846596dafa1f656_prof);

        
        $__internal_f0ea318b4a1faebb33d2c962e4d63728d31a6b6d6bc22d54068fccef8536081d->leave($__internal_f0ea318b4a1faebb33d2c962e4d63728d31a6b6d6bc22d54068fccef8536081d_prof);

    }

    public function getTemplateName()
    {
        return "::landingPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  432 => 71,  415 => 63,  398 => 62,  381 => 60,  364 => 58,  354 => 56,  351 => 55,  342 => 54,  325 => 53,  308 => 48,  291 => 37,  274 => 35,  257 => 30,  240 => 25,  223 => 16,  211 => 74,  209 => 73,  206 => 72,  204 => 71,  199 => 69,  194 => 67,  190 => 66,  186 => 64,  184 => 63,  180 => 62,  177 => 61,  175 => 60,  170 => 58,  167 => 57,  165 => 54,  161 => 53,  157 => 52,  153 => 51,  148 => 49,  144 => 48,  132 => 38,  130 => 37,  127 => 36,  125 => 35,  121 => 34,  114 => 31,  112 => 30,  108 => 29,  101 => 25,  96 => 23,  89 => 22,  81 => 20,  79 => 19,  75 => 18,  70 => 16,  63 => 12,  60 => 11,  58 => 10,  56 => 9,  54 => 8,  50 => 6,  47 => 5,  43 => 3,  40 => 2,  38 => 1,);
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
    <div class=\"iyzi-site heightFix\">
        {{ render(controller('WebBundle:Partials:_signupModal')) }}
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
", "::landingPage.html.twig", "/Users/aliay/Development/dev/iyzico_v4/app/Resources/views/landingPage.html.twig");
    }
}
