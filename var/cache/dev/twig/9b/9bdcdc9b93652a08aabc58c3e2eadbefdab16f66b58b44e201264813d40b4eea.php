<?php

/* @root/LandingPage/Widgets/_newGTGWhoIsiyzico.html.twig */
class __TwigTemplate_ad707bc9f40e2760bac12a365596db9c2df03cf742337de02e76bd71ad56c129 extends Twig_Template
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
        $__internal_36d168515f0fe11af54187b3fbbf0355150d5a8766c6b5266c920b1635818a2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36d168515f0fe11af54187b3fbbf0355150d5a8766c6b5266c920b1635818a2c->enter($__internal_36d168515f0fe11af54187b3fbbf0355150d5a8766c6b5266c920b1635818a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/LandingPage/Widgets/_newGTGWhoIsiyzico.html.twig"));

        $__internal_48e3eb54001887954e9176e4e6179fe05a6319eabfaf012db8077e3f7a31701b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48e3eb54001887954e9176e4e6179fe05a6319eabfaf012db8077e3f7a31701b->enter($__internal_48e3eb54001887954e9176e4e6179fe05a6319eabfaf012db8077e3f7a31701b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/LandingPage/Widgets/_newGTGWhoIsiyzico.html.twig"));

        // line 1
        echo "<section class=\"newWhoIsiyzico\">
  <div class=\"container\">
    <div class=\"header\">
      <div class=\"headerTop\">
        <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/content/newArrow.svg"), "html", null, true);
        echo "\" alt=\"\"/>
        <p class=\"title\"><i>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["social"] ?? $this->getContext($context, "social")), "title", array()), "html", null, true);
        echo "</i>
        ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["social"] ?? $this->getContext($context, "social")), "subTitle", array()), "html", null, true);
        echo "</p>
      </div>
      <span>";
        // line 9
        echo $this->getAttribute(($context["social"] ?? $this->getContext($context, "social")), "description", array());
        echo "</span>
    </div>
  </div>
</section>
";
        
        $__internal_36d168515f0fe11af54187b3fbbf0355150d5a8766c6b5266c920b1635818a2c->leave($__internal_36d168515f0fe11af54187b3fbbf0355150d5a8766c6b5266c920b1635818a2c_prof);

        
        $__internal_48e3eb54001887954e9176e4e6179fe05a6319eabfaf012db8077e3f7a31701b->leave($__internal_48e3eb54001887954e9176e4e6179fe05a6319eabfaf012db8077e3f7a31701b_prof);

    }

    public function getTemplateName()
    {
        return "@root/LandingPage/Widgets/_newGTGWhoIsiyzico.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  39 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"newWhoIsiyzico\">
  <div class=\"container\">
    <div class=\"header\">
      <div class=\"headerTop\">
        <img src=\"{{ asset('assets/images/content/newArrow.svg')}}\" alt=\"\"/>
        <p class=\"title\"><i>{{ social.title }}</i>
        {{ social.subTitle }}</p>
      </div>
      <span>{{ social.description|raw }}</span>
    </div>
  </div>
</section>
", "@root/LandingPage/Widgets/_newGTGWhoIsiyzico.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/LandingPage/Widgets/_newGTGWhoIsiyzico.html.twig");
    }
}
