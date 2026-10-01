<?php

/* @root/LandingPage/Widgets/_personalHomePwi.html.twig */
class __TwigTemplate_064afe079f497c9ec0ded742ccab56420a9ee08c0b0a2945e9b9c5c1ba56160f extends Twig_Template
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
        $__internal_348ed2feb0d3ac123380629f9c0221b23a50eb712e3aac1eee1eb43a4cf44bf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_348ed2feb0d3ac123380629f9c0221b23a50eb712e3aac1eee1eb43a4cf44bf4->enter($__internal_348ed2feb0d3ac123380629f9c0221b23a50eb712e3aac1eee1eb43a4cf44bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/LandingPage/Widgets/_personalHomePwi.html.twig"));

        $__internal_4e16d60c1028531a57d4c45911cc5b47f280693f563474258e44eae179907846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e16d60c1028531a57d4c45911cc5b47f280693f563474258e44eae179907846->enter($__internal_4e16d60c1028531a57d4c45911cc5b47f280693f563474258e44eae179907846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/LandingPage/Widgets/_personalHomePwi.html.twig"));

        // line 1
        echo "<section class=\"iyziLife\">
\t<div class=\"iyzi-container\">
\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["cardfeaturesscreen"] ?? $this->getContext($context, "cardfeaturesscreen")), "features", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
            // line 4
            echo "\t\t<ul>

\t\t";
            // line 6
            $context["itemIndex"] = 1;
            // line 7
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["items"], "logos", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 8
                echo "\t\t\t";
                if ((0 == ($context["itemIndex"] ?? $this->getContext($context, "itemIndex")) % 2)) {
                    // line 9
                    echo "
\t\t\t";
                    // line 10
                    if (($this->getAttribute($context["item"], "appdownload", array()) == "True")) {
                        // line 11
                        echo "\t\t\t<li class=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", array()), "html", null, true);
                        echo "\">
\t\t\t";
                    } else {
                        // line 13
                        echo "\t\t\t<li>
\t\t\t";
                    }
                    // line 15
                    echo "\t\t\t\t<div class=\"itemContent\">
\t\t\t\t\t";
                    // line 16
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "
\t\t\t\t\t";
                    // line 17
                    echo $this->getAttribute($context["item"], "alt", array());
                    echo "
\t\t\t\t\t";
                    // line 18
                    echo $this->getAttribute($context["item"], "content", array());
                    echo "
\t\t\t\t\t<div class=\"buttonGroup\">

\t          ";
                    // line 21
                    if ((($context["deviceType"] ?? $this->getContext($context, "deviceType")) == "mobile")) {
                        // line 22
                        echo "
\t\t\t\t\t\t\t<a href=\"http://onelink.to/d9gd7t\" class=\"button ";
                        // line 23
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttononeclass", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttononetext", array()), "html", null, true);
                        echo "</a>

    \t      ";
                    } else {
                        // line 26
                        echo "
      \t      <a href=\"";
                        // line 27
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttononeurl", array()), "html", null, true);
                        echo "\" class=\"button ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttononeclass", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttononetext", array()), "html", null, true);
                        echo "</a>

        \t  ";
                    }
                    // line 30
                    echo "
\t\t\t\t\t\t<a href=\"";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttontwourl", array()), "html", null, true);
                    echo "\" class=\"button ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttontwoclass", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttontwotext", array()), "html", null, true);
                    echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"itemimg\">
\t\t\t\t\t<img src=\"";
                    // line 35
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
\t\t\t\t</div>
\t\t\t</li>

\t\t\t";
                } else {
                    // line 40
                    echo "
\t\t\t<li>
\t\t\t\t<div class=\"itemimg\">
\t\t\t\t\t<img src=\"";
                    // line 43
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
\t\t\t\t</div>
\t\t\t\t<div class=\"itemContent\">
\t\t\t\t\t";
                    // line 46
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "
\t\t\t\t\t";
                    // line 47
                    echo $this->getAttribute($context["item"], "alt", array());
                    echo "
\t\t\t\t\t";
                    // line 48
                    echo $this->getAttribute($context["item"], "content", array());
                    echo "
\t\t\t\t\t<div class=\"buttonGroup\">
\t\t\t\t\t\t<a href=\"";
                    // line 50
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttononeurl", array()), "html", null, true);
                    echo "\" class=\"button ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttononeclass", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttononetext", array()), "html", null, true);
                    echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>

\t\t\t";
                }
                // line 56
                echo "\t\t\t";
                $context["itemIndex"] = (($context["itemIndex"] ?? $this->getContext($context, "itemIndex")) + 1);
                // line 57
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "
\t\t</ul>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "\t</div>
</section>

";
        
        $__internal_348ed2feb0d3ac123380629f9c0221b23a50eb712e3aac1eee1eb43a4cf44bf4->leave($__internal_348ed2feb0d3ac123380629f9c0221b23a50eb712e3aac1eee1eb43a4cf44bf4_prof);

        
        $__internal_4e16d60c1028531a57d4c45911cc5b47f280693f563474258e44eae179907846->leave($__internal_4e16d60c1028531a57d4c45911cc5b47f280693f563474258e44eae179907846_prof);

    }

    public function getTemplateName()
    {
        return "@root/LandingPage/Widgets/_personalHomePwi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 61,  189 => 58,  183 => 57,  180 => 56,  167 => 50,  162 => 48,  158 => 47,  154 => 46,  140 => 43,  135 => 40,  119 => 35,  108 => 31,  105 => 30,  95 => 27,  92 => 26,  84 => 23,  81 => 22,  79 => 21,  73 => 18,  69 => 17,  65 => 16,  62 => 15,  58 => 13,  52 => 11,  50 => 10,  47 => 9,  44 => 8,  39 => 7,  37 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"iyziLife\">
\t<div class=\"iyzi-container\">
\t{% for items in cardfeaturesscreen.features %}
\t\t<ul>

\t\t{% set itemIndex = 1 %}
\t\t{% for item in items.logos %}
\t\t\t{% if itemIndex is divisible by(2) %}

\t\t\t{% if item.appdownload == \"True\" %}
\t\t\t<li class=\"{{ item.class }}\">
\t\t\t{% else %}
\t\t\t<li>
\t\t\t{% endif %}
\t\t\t\t<div class=\"itemContent\">
\t\t\t\t\t{{ item.title|raw }}
\t\t\t\t\t{{ item.alt|raw }}
\t\t\t\t\t{{ item.content|raw }}
\t\t\t\t\t<div class=\"buttonGroup\">

\t          {% if deviceType == 'mobile' %}

\t\t\t\t\t\t\t<a href=\"http://onelink.to/d9gd7t\" class=\"button {{ item.buttononeclass }}\">{{ item.buttononetext }}</a>

    \t      {% else %}

      \t      <a href=\"{{ item.buttononeurl }}\" class=\"button {{ item.buttononeclass }}\">{{ item.buttononetext }}</a>

        \t  {% endif %}

\t\t\t\t\t\t<a href=\"{{ item.buttontwourl }}\" class=\"button {{ item.buttontwoclass }}\">{{ item.buttontwotext }}</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"itemimg\">
\t\t\t\t\t<img src=\"{{ item.desktopimg.file }}.{{ item.desktopimg.extension }}\" srcset=\"{{ item.desktopimg.file }}@2x.{{ item.desktopimg.extension }} 2x\" alt=\"{{item.desktopimgalt}}\" />
\t\t\t\t</div>
\t\t\t</li>

\t\t\t{% else %}

\t\t\t<li>
\t\t\t\t<div class=\"itemimg\">
\t\t\t\t\t<img src=\"{{ item.desktopimg.file }}.{{ item.desktopimg.extension }}\" srcset=\"{{ item.desktopimg.file }}@2x.{{ item.desktopimg.extension }} 2x\" alt=\"{{item.desktopimgalt}}\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"itemContent\">
\t\t\t\t\t{{ item.title|raw }}
\t\t\t\t\t{{ item.alt|raw }}
\t\t\t\t\t{{ item.content|raw }}
\t\t\t\t\t<div class=\"buttonGroup\">
\t\t\t\t\t\t<a href=\"{{ item.buttononeurl }}\" class=\"button {{ item.buttononeclass }}\">{{ item.buttononetext }}</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>

\t\t\t{% endif %}
\t\t\t{% set itemIndex = itemIndex + 1 %}
\t\t{% endfor %}

\t\t</ul>
\t\t{% endfor %}
\t</div>
</section>

", "@root/LandingPage/Widgets/_personalHomePwi.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/LandingPage/Widgets/_personalHomePwi.html.twig");
    }
}
