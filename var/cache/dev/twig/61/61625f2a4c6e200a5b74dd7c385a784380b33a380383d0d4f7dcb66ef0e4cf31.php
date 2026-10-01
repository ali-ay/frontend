<?php

/* @root/LandingPage/Widgets/_personalHomeHeaderContent.html.twig */
class __TwigTemplate_7271d954151b912eb13fc12792ec94a257851a0d42d6f83de679035451f7c368 extends Twig_Template
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
        $__internal_37137e803657fc206baf957c4cd5931af0f61f584c198946fcb5f6e57c8e340e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37137e803657fc206baf957c4cd5931af0f61f584c198946fcb5f6e57c8e340e->enter($__internal_37137e803657fc206baf957c4cd5931af0f61f584c198946fcb5f6e57c8e340e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/LandingPage/Widgets/_personalHomeHeaderContent.html.twig"));

        $__internal_a854482a7dd5e8d327f4b7c8b07ca60fed1dfdfec4ee07c01789d8178c9076c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a854482a7dd5e8d327f4b7c8b07ca60fed1dfdfec4ee07c01789d8178c9076c9->enter($__internal_a854482a7dd5e8d327f4b7c8b07ca60fed1dfdfec4ee07c01789d8178c9076c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/LandingPage/Widgets/_personalHomeHeaderContent.html.twig"));

        // line 1
        echo "<div class=\"newHeaderComponent\">
  <div class=\"iyzi-container\">
    <div class=\"content\">
      ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["header"] ?? $this->getContext($context, "header")), "headers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
            // line 5
            echo "        <h1>
         ";
            // line 6
            echo $this->getAttribute($context["items"], "colorTitle", array());
            echo " ";
            echo $this->getAttribute($context["items"], "title", array());
            echo "
        </h1>
        <p>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "subDesc", array()), "html", null, true);
            echo "</p>
        <div class=\"buttonGroup\">
          ";
            // line 10
            if ((($context["deviceType"] ?? $this->getContext($context, "deviceType")) == "mobile")) {
                // line 11
                echo "
            <a href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "buttonTwoUrl", array()), "html", null, true);
                echo "\" target=\"_blank\" class=\"button primary\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "buttonOneText", array()), "html", null, true);
                echo "</a>

          ";
            } else {
                // line 15
                echo "
            <a href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "buttonOneUrl", array()), "html", null, true);
                echo "\" class=\"button primary\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "buttonOneText", array()), "html", null, true);
                echo "</a>

          ";
            }
            // line 19
            echo "
        </div>
      </div>
      <div class=\"imgResp\">
        <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["items"], "image", array()), "file", array()), "html", null, true);
            echo "@2x.";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["items"], "image", array()), "extension", array()), "html", null, true);
            echo "\"/>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "  </div>
</div>
";
        
        $__internal_37137e803657fc206baf957c4cd5931af0f61f584c198946fcb5f6e57c8e340e->leave($__internal_37137e803657fc206baf957c4cd5931af0f61f584c198946fcb5f6e57c8e340e_prof);

        
        $__internal_a854482a7dd5e8d327f4b7c8b07ca60fed1dfdfec4ee07c01789d8178c9076c9->leave($__internal_a854482a7dd5e8d327f4b7c8b07ca60fed1dfdfec4ee07c01789d8178c9076c9_prof);

    }

    public function getTemplateName()
    {
        return "@root/LandingPage/Widgets/_personalHomeHeaderContent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 26,  79 => 23,  73 => 19,  65 => 16,  62 => 15,  54 => 12,  51 => 11,  49 => 10,  44 => 8,  37 => 6,  34 => 5,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"newHeaderComponent\">
  <div class=\"iyzi-container\">
    <div class=\"content\">
      {% for items in header.headers %}
        <h1>
         {{ items.colorTitle|raw }} {{ items.title|raw }}
        </h1>
        <p>{{ items.subDesc }}</p>
        <div class=\"buttonGroup\">
          {% if deviceType == 'mobile' %}

            <a href=\"{{ items.buttonTwoUrl }}\" target=\"_blank\" class=\"button primary\">{{ items.buttonOneText }}</a>

          {% else %}

            <a href=\"{{ items.buttonOneUrl }}\" class=\"button primary\">{{ items.buttonOneText }}</a>

          {% endif %}

        </div>
      </div>
      <div class=\"imgResp\">
        <img src=\"{{ items.image.file }}@2x.{{ items.image.extension }}\"/>
      </div>
    {% endfor %}
  </div>
</div>
", "@root/LandingPage/Widgets/_personalHomeHeaderContent.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/LandingPage/Widgets/_personalHomeHeaderContent.html.twig");
    }
}
