<?php

/* @root/LandingPage/Widgets/_gTGHeaderContent.html.twig */
class __TwigTemplate_e32980237ec8d28bbf2a96742d4108a5af00b3d0ffa959090a7845e4316cb107 extends Twig_Template
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
        $__internal_c4b0caaaec82cb8cbb339e5f96a9ed37d603038ac959f8623b76ae3cf9fcd30d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4b0caaaec82cb8cbb339e5f96a9ed37d603038ac959f8623b76ae3cf9fcd30d->enter($__internal_c4b0caaaec82cb8cbb339e5f96a9ed37d603038ac959f8623b76ae3cf9fcd30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/LandingPage/Widgets/_gTGHeaderContent.html.twig"));

        $__internal_8c57e50ddec113bf2f974fae91d503b10a867210f4feaa707d94223558204a58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c57e50ddec113bf2f974fae91d503b10a867210f4feaa707d94223558204a58->enter($__internal_8c57e50ddec113bf2f974fae91d503b10a867210f4feaa707d94223558204a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/LandingPage/Widgets/_gTGHeaderContent.html.twig"));

        // line 1
        echo "<div class=\"newHeaderComponent\">
  <div class=\"iyzi-container\">
    <div class=\"content\">
      <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/iyiden-iyiye-logo.svg"), "html", null, true);
        echo "\" alt=\"İyiden iyiye Logo\"/>
      <h1>
        <strong>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? $this->getContext($context, "header")), "title", array()), "html", null, true);
        echo "</strong>
      </h1>
      <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? $this->getContext($context, "header")), "description", array()), "html", null, true);
        echo "</p>
    </div>
  </div>
</div>
";
        
        $__internal_c4b0caaaec82cb8cbb339e5f96a9ed37d603038ac959f8623b76ae3cf9fcd30d->leave($__internal_c4b0caaaec82cb8cbb339e5f96a9ed37d603038ac959f8623b76ae3cf9fcd30d_prof);

        
        $__internal_8c57e50ddec113bf2f974fae91d503b10a867210f4feaa707d94223558204a58->leave($__internal_8c57e50ddec113bf2f974fae91d503b10a867210f4feaa707d94223558204a58_prof);

    }

    public function getTemplateName()
    {
        return "@root/LandingPage/Widgets/_gTGHeaderContent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  35 => 6,  30 => 4,  25 => 1,);
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
      <img src=\"{{ asset('assets/images/icons/iyiden-iyiye-logo.svg')}}\" alt=\"İyiden iyiye Logo\"/>
      <h1>
        <strong>{{ header.title }}</strong>
      </h1>
      <p>{{ header.description }}</p>
    </div>
  </div>
</div>
", "@root/LandingPage/Widgets/_gTGHeaderContent.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/LandingPage/Widgets/_gTGHeaderContent.html.twig");
    }
}
