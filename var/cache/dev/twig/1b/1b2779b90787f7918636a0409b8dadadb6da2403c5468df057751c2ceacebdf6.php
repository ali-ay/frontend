<?php

/* @root/LandingPage/Widgets/_personalPwiSss.html.twig */
class __TwigTemplate_7602d67640e03dac19505ca617354fb91fb46c3da0aa510ba8c9d2238344b2b7 extends Twig_Template
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
        $__internal_ab17cb2e032dc509c6773b729704ff0b79e57fe07a3fc4571f3b85d81a170ec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab17cb2e032dc509c6773b729704ff0b79e57fe07a3fc4571f3b85d81a170ec6->enter($__internal_ab17cb2e032dc509c6773b729704ff0b79e57fe07a3fc4571f3b85d81a170ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/LandingPage/Widgets/_personalPwiSss.html.twig"));

        $__internal_c0833972153472b62f15baf926bea2d4b74fe0f5aa95b91fd0dfa625f2cd04a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0833972153472b62f15baf926bea2d4b74fe0f5aa95b91fd0dfa625f2cd04a9->enter($__internal_c0833972153472b62f15baf926bea2d4b74fe0f5aa95b91fd0dfa625f2cd04a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/LandingPage/Widgets/_personalPwiSss.html.twig"));

        // line 1
        echo "<section class=\"iyzicoSss\" id=\"sss\">
\t<div class=\"container\">
\t\t<div class=\"title\">";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pwiSss"] ?? $this->getContext($context, "pwiSss")), "title", array()), "html", null, true);
        echo "</div>
\t\t<div class=\"description\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pwiSss"] ?? $this->getContext($context, "pwiSss")), "desc", array()), "html", null, true);
        echo "</div>
\t\t<div class=\"sssWrap\">
\t\t\t<ul>
\t\t\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pwiSss"] ?? $this->getContext($context, "pwiSss")), "buyerSss", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
            // line 8
            echo "\t\t\t\t";
            if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                // line 9
                echo "\t\t\t\t\t";
                $context["activeClass"] = "menuOpen";
                // line 10
                echo "\t\t\t\t";
            } else {
                // line 11
                echo "\t\t\t\t\t";
                $context["activeClass"] = "";
                // line 12
                echo "\t\t\t\t";
            }
            // line 13
            echo "
\t\t\t\t<li class=\"accordion hasSub ";
            // line 14
            echo twig_escape_filter($this->env, ($context["activeClass"] ?? $this->getContext($context, "activeClass")), "html", null, true);
            echo "\" onclick=\"ga('send', 'event', 'Button', 'Click', 'sss";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "');\">
\t\t\t\t\t<div class=\"sssHeader\">
\t\t\t\t\t\t<div class=\"title\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "title", array()), "html", null, true);
            echo "</div>
\t\t\t\t\t\t<i class=\"icon icon--variable\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"description\">";
            // line 19
            echo $this->getAttribute($context["items"], "content", array());
            echo "</div>
\t\t\t\t</li>

\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
\t\t\t</ul>
\t\t</div>
\t</div>
</section>
";
        
        $__internal_ab17cb2e032dc509c6773b729704ff0b79e57fe07a3fc4571f3b85d81a170ec6->leave($__internal_ab17cb2e032dc509c6773b729704ff0b79e57fe07a3fc4571f3b85d81a170ec6_prof);

        
        $__internal_c0833972153472b62f15baf926bea2d4b74fe0f5aa95b91fd0dfa625f2cd04a9->leave($__internal_c0833972153472b62f15baf926bea2d4b74fe0f5aa95b91fd0dfa625f2cd04a9_prof);

    }

    public function getTemplateName()
    {
        return "@root/LandingPage/Widgets/_personalPwiSss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 23,  87 => 19,  81 => 16,  74 => 14,  71 => 13,  68 => 12,  65 => 11,  62 => 10,  59 => 9,  56 => 8,  39 => 7,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"iyzicoSss\" id=\"sss\">
\t<div class=\"container\">
\t\t<div class=\"title\">{{ pwiSss.title }}</div>
\t\t<div class=\"description\">{{ pwiSss.desc }}</div>
\t\t<div class=\"sssWrap\">
\t\t\t<ul>
\t\t\t\t{% for items in pwiSss.buyerSss %}
\t\t\t\t{% if loop.index == 1 %}
\t\t\t\t\t{% set activeClass = \"menuOpen\" %}
\t\t\t\t{% else %}
\t\t\t\t\t{% set activeClass = \"\" %}
\t\t\t\t{% endif %}

\t\t\t\t<li class=\"accordion hasSub {{ activeClass }}\" onclick=\"ga('send', 'event', 'Button', 'Click', 'sss{{loop.index}}');\">
\t\t\t\t\t<div class=\"sssHeader\">
\t\t\t\t\t\t<div class=\"title\">{{ items.title }}</div>
\t\t\t\t\t\t<i class=\"icon icon--variable\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"description\">{{ items.content|raw }}</div>
\t\t\t\t</li>

\t\t\t\t{% endfor %}

\t\t\t</ul>
\t\t</div>
\t</div>
</section>
", "@root/LandingPage/Widgets/_personalPwiSss.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/LandingPage/Widgets/_personalPwiSss.html.twig");
    }
}
