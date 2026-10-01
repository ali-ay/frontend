<?php

/* @root/LandingPage/Widgets/_gTGFullBoxOne.html.twig */
class __TwigTemplate_c6ce4ada3490aecf05085a10203b790808f9829097e1fa94bbeefd6fe8ff4d5d extends Twig_Template
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
        $__internal_53375a70984ece71abff2f908f7aad762d721977a7c05e855a67b0578de164e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53375a70984ece71abff2f908f7aad762d721977a7c05e855a67b0578de164e3->enter($__internal_53375a70984ece71abff2f908f7aad762d721977a7c05e855a67b0578de164e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/LandingPage/Widgets/_gTGFullBoxOne.html.twig"));

        $__internal_82943b72b0372f0c0a5be7c5a62d9ce4ade75109809a62ee0f5149a45f168338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82943b72b0372f0c0a5be7c5a62d9ce4ade75109809a62ee0f5149a45f168338->enter($__internal_82943b72b0372f0c0a5be7c5a62d9ce4ade75109809a62ee0f5149a45f168338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@root/LandingPage/Widgets/_gTGFullBoxOne.html.twig"));

        // line 1
        echo "<div class=\"gTGFullBox\">

  <div class=\"iyziTabs\">
    <div class=\"iyzi-container\">
      <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a data-toggle=\"tab\" href=\"#menu1\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "goodToGoodMenu", array()), "secOne", array()), "html", null, true);
        echo "</a></li>
        <li><a data-toggle=\"tab\" href=\"#menu2\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["translations"] ?? $this->getContext($context, "translations")), "goodToGoodMenu", array()), "secTwo", array()), "html", null, true);
        echo "</a></li>
      </ul>
      <div class=\"tab-content\">
        <ul id=\"menu1\" class=\"tab-pane fade in active\">
          <li>
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["socialGroupVideo"] ?? $this->getContext($context, "socialGroupVideo")), "social", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
            // line 13
            echo "              ";
            if (($this->getAttribute($context["items"], "socialStatus", array()) == "active")) {
                // line 14
                echo "                <div class=\"boxWrap\">
                  <div class=\"imgWrap\">
                    ";
                // line 16
                if ((twig_length_filter($this->env, $this->getAttribute($context["items"], "videoUrl", array())) > 0)) {
                    // line 17
                    echo "                      <div class=\"container\">
                        <div class=\"video-responsive\">
                          ";
                    // line 19
                    echo $this->getAttribute($context["items"], "videoUrl", array());
                    echo "
                        </div>
                      </div>
                    ";
                } else {
                    // line 23
                    echo "                    <div class=\"container\">
                      <img src=\"";
                    // line 24
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["items"], "image", array()), "file", array()), "html", null, true);
                    echo ".";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["items"], "image", array()), "extension", array()), "html", null, true);
                    echo "\" srcset=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["items"], "image", array()), "file", array()), "html", null, true);
                    echo "@2x.";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["items"], "image", array()), "extension", array()), "html", null, true);
                    echo " 2x\" alt=\"\"/>
                    </div>
                    ";
                }
                // line 27
                echo "                    <div class=\"bundle\">
                      <img src=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["items"], "logo", array()), "file", array()), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["items"], "logo", array()), "extension", array()), "html", null, true);
                echo "\" srcset=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["items"], "logo", array()), "file", array()), "html", null, true);
                echo "@2x.";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["items"], "logo", array()), "extension", array()), "html", null, true);
                echo " 2x\" alt=\"\"/>
                    </div>
                  </div>
                  <h4>";
                // line 31
                echo $this->getAttribute($context["items"], "title", array());
                echo "</h4>
                  <p>
                    ";
                // line 33
                echo $this->getAttribute($context["items"], "content", array());
                echo "
                  </p>
                  ";
                // line 35
                if ((twig_length_filter($this->env, $this->getAttribute($context["items"], "buttonUrl", array())) > 0)) {
                    // line 36
                    echo "                    <div class=\"buttonBox\">
                      <a href=\"";
                    // line 37
                    echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "buttonUrl", array()), "html", null, true);
                    echo "\" target=\"_blank\" class=\"button basic clear-blue\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "buttonText", array()), "html", null, true);
                    echo "</a>
                    </div>
                  ";
                }
                // line 40
                echo "                </div>
              ";
            }
            // line 42
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "          </li>
        </ul>
        <ul id=\"menu2\" class=\"tab-pane fade\">
          <li>
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["socialGroupVideo"] ?? $this->getContext($context, "socialGroupVideo")), "social", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
            // line 48
            echo "              ";
            if (($this->getAttribute($context["items"], "socialStatus", array()) == "passive")) {
                // line 49
                echo "                  <div class=\"boxWrap\">
                    <div class=\"imgWrap\">

                      ";
                // line 52
                if ((twig_length_filter($this->env, $this->getAttribute($context["items"], "videoUrl", array())) > 0)) {
                    // line 53
                    echo "                        <div class=\"container\">
                          <div class=\"video-responsive\">
                            ";
                    // line 55
                    echo $this->getAttribute($context["items"], "videoUrl", array());
                    echo "
                          </div>
                        </div>
                      ";
                } else {
                    // line 59
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["items"], "image", array()), "file", array()), "html", null, true);
                    echo ".";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["items"], "image", array()), "extension", array()), "html", null, true);
                    echo "\" srcset=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["items"], "image", array()), "file", array()), "html", null, true);
                    echo "@2x.";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["items"], "image", array()), "extension", array()), "html", null, true);
                    echo " 2x\" alt=\"\"/>
                      ";
                }
                // line 61
                echo "
                      <div class=\"bundle\">
                        <img src=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["items"], "logo", array()), "file", array()), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["items"], "logo", array()), "extension", array()), "html", null, true);
                echo "\" srcset=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["items"], "logo", array()), "file", array()), "html", null, true);
                echo "@2x.";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["items"], "logo", array()), "extension", array()), "html", null, true);
                echo " 2x\" alt=\"\"/>
                      </div>
                    </div>
                    <h4>";
                // line 66
                echo $this->getAttribute($context["items"], "title", array());
                echo "</h4>
                    <p>
                      ";
                // line 68
                echo $this->getAttribute($context["items"], "content", array());
                echo "
                    </p>
                  ";
                // line 70
                if ((twig_length_filter($this->env, $this->getAttribute($context["items"], "buttonUrl", array())) > 0)) {
                    // line 71
                    echo "                    <div class=\"buttonBox\">
                      <a href=\"";
                    // line 72
                    echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "buttonUrl", array()), "html", null, true);
                    echo "\" target=\"_blank\" class=\"button basic clear-blue\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "buttonText", array()), "html", null, true);
                    echo "</a>
                    </div>
                  ";
                }
                // line 75
                echo "
                  </div>
              ";
            }
            // line 78
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "          </li>
        </ul>

      </div>
    </div>
  </div>

</div>
";
        
        $__internal_53375a70984ece71abff2f908f7aad762d721977a7c05e855a67b0578de164e3->leave($__internal_53375a70984ece71abff2f908f7aad762d721977a7c05e855a67b0578de164e3_prof);

        
        $__internal_82943b72b0372f0c0a5be7c5a62d9ce4ade75109809a62ee0f5149a45f168338->leave($__internal_82943b72b0372f0c0a5be7c5a62d9ce4ade75109809a62ee0f5149a45f168338_prof);

    }

    public function getTemplateName()
    {
        return "@root/LandingPage/Widgets/_gTGFullBoxOne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 79,  218 => 78,  213 => 75,  205 => 72,  202 => 71,  200 => 70,  195 => 68,  190 => 66,  178 => 63,  174 => 61,  162 => 59,  155 => 55,  151 => 53,  149 => 52,  144 => 49,  141 => 48,  137 => 47,  131 => 43,  125 => 42,  121 => 40,  113 => 37,  110 => 36,  108 => 35,  103 => 33,  98 => 31,  86 => 28,  83 => 27,  71 => 24,  68 => 23,  61 => 19,  57 => 17,  55 => 16,  51 => 14,  48 => 13,  44 => 12,  36 => 7,  32 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"gTGFullBox\">

  <div class=\"iyziTabs\">
    <div class=\"iyzi-container\">
      <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a data-toggle=\"tab\" href=\"#menu1\">{{ translations.goodToGoodMenu.secOne }}</a></li>
        <li><a data-toggle=\"tab\" href=\"#menu2\">{{ translations.goodToGoodMenu.secTwo }}</a></li>
      </ul>
      <div class=\"tab-content\">
        <ul id=\"menu1\" class=\"tab-pane fade in active\">
          <li>
            {% for items in socialGroupVideo.social %}
              {% if items.socialStatus == \"active\" %}
                <div class=\"boxWrap\">
                  <div class=\"imgWrap\">
                    {% if items.videoUrl|length > 0 %}
                      <div class=\"container\">
                        <div class=\"video-responsive\">
                          {{ items.videoUrl|raw }}
                        </div>
                      </div>
                    {% else %}
                    <div class=\"container\">
                      <img src=\"{{ items.image.file }}.{{ items.image.extension }}\" srcset=\"{{ items.image.file }}@2x.{{ items.image.extension }} 2x\" alt=\"\"/>
                    </div>
                    {% endif %}
                    <div class=\"bundle\">
                      <img src=\"{{ items.logo.file }}.{{ items.logo.extension }}\" srcset=\"{{ items.logo.file }}@2x.{{ items.logo.extension }} 2x\" alt=\"\"/>
                    </div>
                  </div>
                  <h4>{{ items.title|raw }}</h4>
                  <p>
                    {{ items.content|raw }}
                  </p>
                  {% if items.buttonUrl|length > 0 %}
                    <div class=\"buttonBox\">
                      <a href=\"{{ items.buttonUrl }}\" target=\"_blank\" class=\"button basic clear-blue\">{{ items.buttonText }}</a>
                    </div>
                  {% endif %}
                </div>
              {% endif %}
            {% endfor %}
          </li>
        </ul>
        <ul id=\"menu2\" class=\"tab-pane fade\">
          <li>
            {% for items in socialGroupVideo.social %}
              {% if items.socialStatus == \"passive\" %}
                  <div class=\"boxWrap\">
                    <div class=\"imgWrap\">

                      {% if items.videoUrl|length > 0 %}
                        <div class=\"container\">
                          <div class=\"video-responsive\">
                            {{ items.videoUrl|raw }}
                          </div>
                        </div>
                      {% else %}
                        <img src=\"{{ items.image.file }}.{{ items.image.extension }}\" srcset=\"{{ items.image.file }}@2x.{{ items.image.extension }} 2x\" alt=\"\"/>
                      {% endif %}

                      <div class=\"bundle\">
                        <img src=\"{{ items.logo.file }}.{{ items.logo.extension }}\" srcset=\"{{ items.logo.file }}@2x.{{ items.logo.extension }} 2x\" alt=\"\"/>
                      </div>
                    </div>
                    <h4>{{ items.title|raw }}</h4>
                    <p>
                      {{ items.content|raw }}
                    </p>
                  {% if items.buttonUrl|length > 0 %}
                    <div class=\"buttonBox\">
                      <a href=\"{{ items.buttonUrl }}\" target=\"_blank\" class=\"button basic clear-blue\">{{ items.buttonText }}</a>
                    </div>
                  {% endif %}

                  </div>
              {% endif %}
            {% endfor %}
          </li>
        </ul>

      </div>
    </div>
  </div>

</div>
", "@root/LandingPage/Widgets/_gTGFullBoxOne.html.twig", "/Users/aliay/Development/dev/iyzico_v4/src/WebBundle/Resources/views/LandingPage/Widgets/_gTGFullBoxOne.html.twig");
    }
}
