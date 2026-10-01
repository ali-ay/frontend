<?php

/* @root/Partials/_successFailPopup.html.twig */
class __TwigTemplate_0124ea380e6fd4bc1e9e5c2917fcd559b3429eef1672d9f3f0d142a690e75c5c extends Twig_Template
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
        $__internal_16c0ac55f3de532f486de9e6ed650bdd3b9c3a4565dcb93f90add6166a270552 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16c0ac55f3de532f486de9e6ed650bdd3b9c3a4565dcb93f90add6166a270552->enter($__internal_16c0ac55f3de532f486de9e6ed650bdd3b9c3a4565dcb93f90add6166a270552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/Partials/_successFailPopup.html.twig"));

        $__internal_2185c4e6c7775c53119e794d89369c5c8ddf915c32885f5684718c449cb99304 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2185c4e6c7775c53119e794d89369c5c8ddf915c32885f5684718c449cb99304->enter($__internal_2185c4e6c7775c53119e794d89369c5c8ddf915c32885f5684718c449cb99304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/Partials/_successFailPopup.html.twig"));

        // line 1
        $context["successMessages"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method");
        // line 2
        $context["failMessages"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method");
        // line 3
        echo "
";
        // line 4
        if (($context["successMessages"] ?? $this->getContext($context, "successMessages"))) {
            // line 5
            echo "<div class=\"modal\" id=\"successModal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-body\">
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["successMessages"] ?? $this->getContext($context, "successMessages")));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 10
                echo "            <i class=\"icon icon--popup-close mL-auto\" data-dismiss=\"modal\"></i>
            <i class=\"icon icon--contactus-success\"></i>
            <p class=\"title\">
                ";
                // line 13
                echo $context["flashMessage"];
                echo "
            </p>
            <p class=\"description\">";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "successFailPopup", array()), "description", array()), "html", null, true);
                echo "</p>
            <a href=\"#\" data-dismiss=\"modal\" class=\"button default\">";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "successFailPopup", array()), "button", array()), "html", null, true);
                echo "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "      </div>
    </div>
  </div>
</div>
<script>
    \$(document).ready(function(){
        \$(\"#successModal\").modal()
    })
</script>
";
        }
        // line 28
        if (($context["failMessages"] ?? $this->getContext($context, "failMessages"))) {
            // line 29
            echo "<div class=\"modal\" id=\"failModal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-body\">
        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["failMessages"] ?? $this->getContext($context, "failMessages")));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 34
                echo "            <p>
                ";
                // line 35
                echo $context["flashMessage"];
                echo "
            </p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "      </div>
    </div>
  </div>
</div>
<script>
    \$(document).ready(function(){
        \$(\"#failModal\").modal()
    })
</script>
";
        }
        
        $__internal_16c0ac55f3de532f486de9e6ed650bdd3b9c3a4565dcb93f90add6166a270552->leave($__internal_16c0ac55f3de532f486de9e6ed650bdd3b9c3a4565dcb93f90add6166a270552_prof);

        
        $__internal_2185c4e6c7775c53119e794d89369c5c8ddf915c32885f5684718c449cb99304->leave($__internal_2185c4e6c7775c53119e794d89369c5c8ddf915c32885f5684718c449cb99304_prof);

    }

    public function getTemplateName()
    {
        return "@root/Partials/_successFailPopup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 38,  93 => 35,  90 => 34,  86 => 33,  80 => 29,  78 => 28,  66 => 18,  58 => 16,  54 => 15,  49 => 13,  44 => 10,  40 => 9,  34 => 5,  32 => 4,  29 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set successMessages = app.session.flashbag.get('success') %}
{% set failMessages = app.session.flashbag.get('error') %}

{% if  successMessages %}
<div class=\"modal\" id=\"successModal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-body\">
        {% for flashMessage in successMessages %}
            <i class=\"icon icon--popup-close mL-auto\" data-dismiss=\"modal\"></i>
            <i class=\"icon icon--contactus-success\"></i>
            <p class=\"title\">
                {{ flashMessage|raw }}
            </p>
            <p class=\"description\">{{ translations.successFailPopup.description }}</p>
            <a href=\"#\" data-dismiss=\"modal\" class=\"button default\">{{ translations.successFailPopup.button }}</a>
        {% endfor %}
      </div>
    </div>
  </div>
</div>
<script>
    \$(document).ready(function(){
        \$(\"#successModal\").modal()
    })
</script>
{% endif %}
{% if failMessages  %}
<div class=\"modal\" id=\"failModal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-body\">
        {% for flashMessage in failMessages %}
            <p>
                {{ flashMessage|raw }}
            </p>
        {% endfor %}
      </div>
    </div>
  </div>
</div>
<script>
    \$(document).ready(function(){
        \$(\"#failModal\").modal()
    })
</script>
{% endif %}
", "@root/Partials/_successFailPopup.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/Partials/_successFailPopup.html.twig");
    }
}
