<?php

/* @root/LandingPage/Widgets/_personalHomeCampaign.html.twig */
class __TwigTemplate_b536c07efbc94b50a244ba1dab89a2748557526bbf7eeeafa6d80e4738501f72 extends Twig_Template
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
        $__internal_a2bbe6bbd3cbc2d4da13c4cd44cc1ed777e874f7852c0545b37658c35fc2b457 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2bbe6bbd3cbc2d4da13c4cd44cc1ed777e874f7852c0545b37658c35fc2b457->enter($__internal_a2bbe6bbd3cbc2d4da13c4cd44cc1ed777e874f7852c0545b37658c35fc2b457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/LandingPage/Widgets/_personalHomeCampaign.html.twig"));

        $__internal_ede52657d790c32a3c009c372115def04d7d307ccfb0f72a8617d2ceeda43884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ede52657d790c32a3c009c372115def04d7d307ccfb0f72a8617d2ceeda43884->enter($__internal_ede52657d790c32a3c009c372115def04d7d307ccfb0f72a8617d2ceeda43884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/LandingPage/Widgets/_personalHomeCampaign.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["campaign"] ?? $this->getContext($context, "campaign")), "features", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
            // line 2
            echo "\t<section class=\"newWhoIsiyzico gray-100-bg\">
  \t<div class=\"container\">
\t\t\t<div class=\"header\">
\t\t\t\t<div class=\"headerTop\">
\t\t\t\t\t<p class=\"title\">";
            // line 6
            echo $this->getAttribute($context["items"], "title", array());
            echo " <span class=\"clear-blue\">";
            echo $this->getAttribute($context["items"], "colorTitle", array());
            echo "</span></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"headerSubMenu\">
\t\t\t\t\t<span>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "content", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t<div class=\"buttonGroup\">
\t\t\t\t\t\t<a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "buttonUrl", array()), "html", null, true);
            echo "\" target=\"_blank\" class=\"button buttonText\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "buttonText", array()), "html", null, true);
            echo "<i class=\"icon icon--text-basic-icn-rightarrow\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<div class=\"campaignLP\">
\t\t<div class=\"iyziTabs\">
\t\t\t<div class=\"iyzi-container\">
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<ul id=\"menu1\" class=\"tab-pane fade in active\">
\t\t\t\t\t\t";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pageContents"] ?? $this->getContext($context, "pageContents")), "campaign", array()), "activeCampaign", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 23
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"containerWrap\">
\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "image", array()), "file", array()), "html", null, true);
                echo "@2x.";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "image", array()), "extension", array()), "html", null, true);
                echo "\" alt=\"partner\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"title\">";
                // line 28
                echo $this->getAttribute($context["item"], "title", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"description\">";
                // line 29
                echo $this->getAttribute($context["item"], "content", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"subDesc\">";
                // line 30
                echo $this->getAttribute($context["item"], "endDate", array());
                echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true);
                echo "\" class=\"button basic\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "linkTitle", array()), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"buttonGroup\">
\t\t\t\t\t<a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "buttonUrl", array()), "html", null, true);
            echo "\" target=\"_blank\" class=\"button buttonText\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "buttonText", array()), "html", null, true);
            echo "<i class=\"icon icon--text-basic-icn-rightarrow\"></i></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_a2bbe6bbd3cbc2d4da13c4cd44cc1ed777e874f7852c0545b37658c35fc2b457->leave($__internal_a2bbe6bbd3cbc2d4da13c4cd44cc1ed777e874f7852c0545b37658c35fc2b457_prof);

        
        $__internal_ede52657d790c32a3c009c372115def04d7d307ccfb0f72a8617d2ceeda43884->leave($__internal_ede52657d790c32a3c009c372115def04d7d307ccfb0f72a8617d2ceeda43884_prof);

    }

    public function getTemplateName()
    {
        return "@root/LandingPage/Widgets/_personalHomeCampaign.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 38,  104 => 35,  93 => 32,  88 => 30,  84 => 29,  80 => 28,  73 => 26,  68 => 23,  64 => 22,  48 => 11,  43 => 9,  35 => 6,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for items in campaign.features %}
\t<section class=\"newWhoIsiyzico gray-100-bg\">
  \t<div class=\"container\">
\t\t\t<div class=\"header\">
\t\t\t\t<div class=\"headerTop\">
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
\t<div class=\"campaignLP\">
\t\t<div class=\"iyziTabs\">
\t\t\t<div class=\"iyzi-container\">
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<ul id=\"menu1\" class=\"tab-pane fade in active\">
\t\t\t\t\t\t{% for item in pageContents.campaign.activeCampaign %}
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"containerWrap\">
\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ item.image.file }}@2x.{{ item.image.extension }}\" alt=\"partner\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"title\">{{ item.title|raw }}</div>
\t\t\t\t\t\t\t\t\t<div class=\"description\">{{ item.content|raw }}</div>
\t\t\t\t\t\t\t\t\t<div class=\"subDesc\">{{ item.endDate|raw }}</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"{{item.link}}\" class=\"button basic\">{{item.linkTitle}}</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"buttonGroup\">
\t\t\t\t\t<a href=\"{{ items.buttonUrl }}\" target=\"_blank\" class=\"button buttonText\">{{ items.buttonText }}<i class=\"icon icon--text-basic-icn-rightarrow\"></i></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endfor %}
", "@root/LandingPage/Widgets/_personalHomeCampaign.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/LandingPage/Widgets/_personalHomeCampaign.html.twig");
    }
}
