<?php

/* @root/LandingPage/Widgets/_personalHomeShopList.html.twig */
class __TwigTemplate_554302f691f6646897f45065d7b8ac6a18e0eee91ccd9883240445e83ce99303 extends Twig_Template
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
        $__internal_29aee5042ac40237f124a917ed2e7ef18b166273410cecd4534bf2187e97c826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29aee5042ac40237f124a917ed2e7ef18b166273410cecd4534bf2187e97c826->enter($__internal_29aee5042ac40237f124a917ed2e7ef18b166273410cecd4534bf2187e97c826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/LandingPage/Widgets/_personalHomeShopList.html.twig"));

        $__internal_307a39e5600dc39d768959446db25880b8da4e10134e0cd8c86cf422b471ee26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_307a39e5600dc39d768959446db25880b8da4e10134e0cd8c86cf422b471ee26->enter($__internal_307a39e5600dc39d768959446db25880b8da4e10134e0cd8c86cf422b471ee26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/LandingPage/Widgets/_personalHomeShopList.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["shoplist"] ?? $this->getContext($context, "shoplist")), "features", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
            // line 2
            echo "\t<section class=\"newWhoIsiyzico gray-100-bg\">
  \t<div class=\"container\">
\t\t\t<div class=\"header\">
\t\t\t\t<div class=\"headerTop\">
\t\t\t\t\t<img src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/content/newArrow.svg"), "html", null, true);
            echo "\"/>
\t\t\t\t\t<p class=\"title\">";
            // line 7
            echo $this->getAttribute($context["items"], "title", array());
            echo " <span class=\"clear-blue\">";
            echo $this->getAttribute($context["items"], "colorTitle", array());
            echo "</span></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"headerSubMenu\">
\t\t\t\t\t<span>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "content", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t<div class=\"buttonGroup\">
\t\t\t\t\t\t<a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "buttonUrl", array()), "html", null, true);
            echo "\" target=\"_blank\" class=\"button buttonText\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "buttonText", array()), "html", null, true);
            echo "<i class=\"icon icon--text-basic-icn-rightarrow\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<section class=\"brandsBox\">
\t\t<div id=\"brandBox\" class=\"iyzi-container\">
\t\t\t<div class=\"brandsWrap\">
\t\t\t\t<div class=\"ulCenter\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["items"], "logos", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 24
                echo "\t\t\t\t\t\t\t<li class=\"brandItem\">
\t\t\t\t\t\t\t\t<a href=\"\" class=\"itemUrl\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "desktopimg", array()), "file", array()), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "desktopimg", array()), "extension", array()), "html", null, true);
                echo "\" srcset=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "desktopimg", array()), "file", array()), "html", null, true);
                echo "@2x.";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "desktopimg", array()), "extension", array()), "html", null, true);
                echo " 2x\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "desktopimgalt", array()), "html", null, true);
                echo "\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"buttonGroup\">
\t\t\t\t\t\t<a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "buttonUrl", array()), "html", null, true);
            echo "\" target=\"_blank\" class=\"button buttonText\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "buttonText", array()), "html", null, true);
            echo "<i class=\"icon icon--text-basic-icn-rightarrow\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_29aee5042ac40237f124a917ed2e7ef18b166273410cecd4534bf2187e97c826->leave($__internal_29aee5042ac40237f124a917ed2e7ef18b166273410cecd4534bf2187e97c826_prof);

        
        $__internal_307a39e5600dc39d768959446db25880b8da4e10134e0cd8c86cf422b471ee26->leave($__internal_307a39e5600dc39d768959446db25880b8da4e10134e0cd8c86cf422b471ee26_prof);

    }

    public function getTemplateName()
    {
        return "@root/LandingPage/Widgets/_personalHomeShopList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 32,  94 => 30,  76 => 26,  72 => 24,  68 => 23,  52 => 12,  47 => 10,  39 => 7,  35 => 6,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for items in shoplist.features %}
\t<section class=\"newWhoIsiyzico gray-100-bg\">
  \t<div class=\"container\">
\t\t\t<div class=\"header\">
\t\t\t\t<div class=\"headerTop\">
\t\t\t\t\t<img src=\"{{ asset('assets/images/content/newArrow.svg')}}\"/>
\t\t\t\t\t<p class=\"title\">{{ items.title|raw }} <span class=\"clear-blue\">{{ items.colorTitle|raw }}</span></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"headerSubMenu\">
\t\t\t\t\t<span>{{ items.content }}</span>
\t\t\t\t\t<div class=\"buttonGroup\">
\t\t\t\t\t\t<a href=\"{{ items.buttonUrl }}\" target=\"_blank\" class=\"button buttonText\">{{ items.buttonText }}<i class=\"icon icon--text-basic-icn-rightarrow\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<section class=\"brandsBox\">
\t\t<div id=\"brandBox\" class=\"iyzi-container\">
\t\t\t<div class=\"brandsWrap\">
\t\t\t\t<div class=\"ulCenter\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t{% for item in items.logos %}
\t\t\t\t\t\t\t<li class=\"brandItem\">
\t\t\t\t\t\t\t\t<a href=\"\" class=\"itemUrl\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ item.desktopimg.file }}.{{ item.desktopimg.extension }}\" srcset=\"{{ item.desktopimg.file }}@2x.{{ item.desktopimg.extension }} 2x\" alt=\"{{item.desktopimgalt}}\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"buttonGroup\">
\t\t\t\t\t\t<a href=\"{{ items.buttonUrl }}\" target=\"_blank\" class=\"button buttonText\">{{ items.buttonText }}<i class=\"icon icon--text-basic-icn-rightarrow\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
{% endfor %}
", "@root/LandingPage/Widgets/_personalHomeShopList.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/LandingPage/Widgets/_personalHomeShopList.html.twig");
    }
}
