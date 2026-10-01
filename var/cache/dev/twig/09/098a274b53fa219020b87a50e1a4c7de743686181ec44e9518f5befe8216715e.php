<?php

/* @root/LandingPage/Widgets/_personalMobileAppSlider.html.twig */
class __TwigTemplate_a18d8484af9afdedd321e5227c4306bd309d52ff47fb7df46eff70d3b6249b5e extends Twig_Template
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
        $__internal_07e9f05def62ad1c2f19ecd7c1d7db520b7408d9a1656574a38fcacffa2777d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07e9f05def62ad1c2f19ecd7c1d7db520b7408d9a1656574a38fcacffa2777d9->enter($__internal_07e9f05def62ad1c2f19ecd7c1d7db520b7408d9a1656574a38fcacffa2777d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/LandingPage/Widgets/_personalMobileAppSlider.html.twig"));

        $__internal_58b9f4a8994a1b21c87be283784ebd1e15f0334e51fcdfe2f2ddaffa193a7af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58b9f4a8994a1b21c87be283784ebd1e15f0334e51fcdfe2f2ddaffa193a7af8->enter($__internal_58b9f4a8994a1b21c87be283784ebd1e15f0334e51fcdfe2f2ddaffa193a7af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/LandingPage/Widgets/_personalMobileAppSlider.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["sliderList"] ?? $this->getContext($context, "sliderList")), "features", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
            // line 2
            echo "<div class=\"personalMobileAppSliderWrap\">
<h3>";
            // line 3
            echo $this->getAttribute($context["items"], "title", array());
            echo "</h3>
<section class=\"personalMobileAppSlider\">

\t<div class=\"sliderContainer personalCampaignSlider\">
  ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["items"], "logos", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 8
                echo "      <div class=\"campaignSliderBox\">
          <div class=\"campaignSliderImgBox\">
            <img src=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "desktopimg", array()), "file", array()), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "desktopimg", array()), "extension", array()), "html", null, true);
                echo "\" srcset=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "desktopimg", array()), "file", array()), "html", null, true);
                echo "@2x.";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "desktopimg", array()), "extension", array()), "html", null, true);
                echo " 2x\" alt=\"iyzico\" />
          </div>
          <div class=\"campaignSliderContent\">
            <p class=\"title\">";
                // line 13
                echo $this->getAttribute($context["item"], "title", array());
                echo "</p>
          </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "
\t</div>
</section>

</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_07e9f05def62ad1c2f19ecd7c1d7db520b7408d9a1656574a38fcacffa2777d9->leave($__internal_07e9f05def62ad1c2f19ecd7c1d7db520b7408d9a1656574a38fcacffa2777d9_prof);

        
        $__internal_58b9f4a8994a1b21c87be283784ebd1e15f0334e51fcdfe2f2ddaffa193a7af8->leave($__internal_58b9f4a8994a1b21c87be283784ebd1e15f0334e51fcdfe2f2ddaffa193a7af8_prof);

    }

    public function getTemplateName()
    {
        return "@root/LandingPage/Widgets/_personalMobileAppSlider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 17,  59 => 13,  47 => 10,  43 => 8,  39 => 7,  32 => 3,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for items in sliderList.features %}
<div class=\"personalMobileAppSliderWrap\">
<h3>{{ items.title|raw }}</h3>
<section class=\"personalMobileAppSlider\">

\t<div class=\"sliderContainer personalCampaignSlider\">
  {% for item in items.logos %}
      <div class=\"campaignSliderBox\">
          <div class=\"campaignSliderImgBox\">
            <img src=\"{{ item.desktopimg.file }}.{{ item.desktopimg.extension }}\" srcset=\"{{ item.desktopimg.file }}@2x.{{ item.desktopimg.extension }} 2x\" alt=\"iyzico\" />
          </div>
          <div class=\"campaignSliderContent\">
            <p class=\"title\">{{ item.title|raw }}</p>
          </div>
        </div>
    {% endfor %}

\t</div>
</section>

</div>
{% endfor %}
", "@root/LandingPage/Widgets/_personalMobileAppSlider.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/LandingPage/Widgets/_personalMobileAppSlider.html.twig");
    }
}
