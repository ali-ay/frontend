<?php

/* SncRedisBundle:Collector:redis.html.twig */
class __TwigTemplate_cfefa79a1b4a83997cd633f0c463761a1d1d83405b9f34dbabc412400b2182db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "SncRedisBundle:Collector:redis.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd12b3681f6d0bd2dee67733d8aef680a9b6484da16348fad8f4ccba350a84ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd12b3681f6d0bd2dee67733d8aef680a9b6484da16348fad8f4ccba350a84ad->enter($__internal_cd12b3681f6d0bd2dee67733d8aef680a9b6484da16348fad8f4ccba350a84ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SncRedisBundle:Collector:redis.html.twig"));

        $__internal_60958feca9471557bb26232b4efc6c49dd52b0e8ab459baedb99de984c087369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60958feca9471557bb26232b4efc6c49dd52b0e8ab459baedb99de984c087369->enter($__internal_60958feca9471557bb26232b4efc6c49dd52b0e8ab459baedb99de984c087369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SncRedisBundle:Collector:redis.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd12b3681f6d0bd2dee67733d8aef680a9b6484da16348fad8f4ccba350a84ad->leave($__internal_cd12b3681f6d0bd2dee67733d8aef680a9b6484da16348fad8f4ccba350a84ad_prof);

        
        $__internal_60958feca9471557bb26232b4efc6c49dd52b0e8ab459baedb99de984c087369->leave($__internal_60958feca9471557bb26232b4efc6c49dd52b0e8ab459baedb99de984c087369_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ad5b0b358c7fc2c456d3735ef7346447e075cd69f6636d5fe223d52d593f7ea9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad5b0b358c7fc2c456d3735ef7346447e075cd69f6636d5fe223d52d593f7ea9->enter($__internal_ad5b0b358c7fc2c456d3735ef7346447e075cd69f6636d5fe223d52d593f7ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_35c17ca7dd62064a63c977789df2abdd3030f474191d1649d3ec842ff110381e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35c17ca7dd62064a63c977789df2abdd3030f474191d1649d3ec842ff110381e->enter($__internal_35c17ca7dd62064a63c977789df2abdd3030f474191d1649d3ec842ff110381e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter(($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 6
        if ((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) {
            // line 7
            ob_start();
            // line 8
            echo "            <img width=\"20\" height=\"28\" alt=\"Redis\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAv5JREFUeNrsVd9L01EUP9/tbm5ubtI2VqAOYpJP0WCYNOilQAiySbICHyp67CXqrf8jqKeejAVJ9GAUmUEMfYjSl5IYexqM1G3Mn1O3uT6fy+4QMV/yoQe/cLi7557zOZ/zOder1Ww25Tg/mxzzdwL4HwKqZDJ51Pkpy7JGtre3r9dqtbMul2vB4XBM4qp9gr962JVTBx0IcsIS+HkL64jP5zuTSqWkXq9LPp+/MDs7e1cp9QuAk4h5iZgfhwIioB8sxvb29m673e7z2Eu1WpVwOCwDAwMSi8VkZmZGcrmcFIvFc7u7u09sNttjgH8B6CvYW8AUrdHR0SvYPETA1Wg06hofH5dQKMQCUqlUZGJiQhYXFyWRSMj8/Lxsbm7KxsZG27q7u3W80+ksAeepWltbe9TZ2XmNLDs6OiQQCEhvb6/Y7Xa2r1uFhjI3Nycej0dQWPtZEJoKutGxOzs7ARRIWWjlPdCHASoQXAd4vV4N1NPTI0NDQxKJRHSR6elpSafTgjbboCxApltbW9JoNL4qv9//HVoNsz1WIksGoIgUCgXJZrPS19cny8vLMjU1pWOQqPUlCJi12fIWKLQRwSR1WwTiykACMolAmUxGF+LeALEDMu3q6tJSsDvkDqqlpaUg26ST4mLSWngmQV/BJDU4pq/P2Cr36EzLQ3aMLZfLZGtXSMgRgMZAApMxE8iGftMWWZIR2yPD9fV1fW7YImdBBYNBDydsWLESmXFINJxrzfi1psl7qKUhaxYhAbJFXL8qlUqnmcjKPDCsWJ3WElsDmiFQBiMTAenjUFHEr4D6e3V1VQ+EiYYV2yCwGQS1o/C8yIwhKP0rKyvmbjbhe8c/vQf48Rn7+wC4BBY2JjKJjM0NMBqyTRYnGIvCX4K9gT0D1jcrHo/vf8oGcXAP4DeQGKZmbI1mWjZsEfcTrhd8IGCF9puwD9A8ElxCSLqJ9Q7Wi3S3jhs4/4D1OewjrHrwtfoboLTeOjvsMmwMVoO9hmWOekCtk//L//z9EWAADA/Sh+MqnZ4AAAAASUVORK5CYII=\"/>

            <span class=\"sf-toolbar-status\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "commandcount", array()), "html", null, true);
            echo "</span>";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 13
            ob_start();
            // line 14
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Queries</b>
                <span class=\"sf-toolbar-status\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "commandcount", array()), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Query time</b>
                <span>";
            // line 21
            echo twig_escape_filter($this->env, sprintf("%0.2f", $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "time", array())), "html", null, true);
            echo " ms</span>
            </div>";
            // line 24
            if (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "erroredCommandsCount", array()) > 0)) {
                // line 25
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Failed Queries</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-red\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "erroredCommandsCount", array()), "html", null, true);
                echo "</span>
                </div>";
            }
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 32
            $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "SncRedisBundle:Collector:redis.html.twig", 32)->display(array_merge($context, array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url")), "status" => ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "erroredCommandsCount", array()) > 0)) ? ("red") : ("")))));
        } elseif (($this->getAttribute(        // line 33
($context["collector"] ?? $this->getContext($context, "collector")), "commandcount", array()) > 0)) {
            // line 34
            ob_start();
            // line 35
            echo twig_include($this->env, $context, "@SncRedis/Collector/icon.svg.twig");
            echo "

            <span class=\"sf-toolbar-value\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "commandCount", array()), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-info-piece-additional-detail\">
                <span class=\"sf-toolbar-label\">in</span>
                <span class=\"sf-toolbar-value\">";
            // line 40
            echo twig_escape_filter($this->env, sprintf("%0.2f", $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "time", array())), "html", null, true);
            echo "</span>
                <span class=\"sf-toolbar-label\">ms</span>
            </span>";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 45
            ob_start();
            // line 46
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Queries</b>
                <span class=\"sf-toolbar-status\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "commandcount", array()), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Query time</b>
                <span>";
            // line 53
            echo twig_escape_filter($this->env, sprintf("%0.2f", $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "time", array())), "html", null, true);
            echo " ms</span>
            </div>";
            // line 56
            if (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "erroredCommandsCount", array()) > 0)) {
                // line 57
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Failed Queries</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-red\">";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "erroredCommandsCount", array()), "html", null, true);
                echo "</span>
                </div>";
            }
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 64
            $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "SncRedisBundle:Collector:redis.html.twig", 64)->display(array_merge($context, array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url")), "status" => ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "erroredCommandsCount", array()) > 0)) ? ("red") : ("")))));
        }
        
        $__internal_35c17ca7dd62064a63c977789df2abdd3030f474191d1649d3ec842ff110381e->leave($__internal_35c17ca7dd62064a63c977789df2abdd3030f474191d1649d3ec842ff110381e_prof);

        
        $__internal_ad5b0b358c7fc2c456d3735ef7346447e075cd69f6636d5fe223d52d593f7ea9->leave($__internal_ad5b0b358c7fc2c456d3735ef7346447e075cd69f6636d5fe223d52d593f7ea9_prof);

    }

    // line 68
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d310931c4ca2cda4c1abbf5ea82983651df77ef0690a44eb5007fc24da58e2f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d310931c4ca2cda4c1abbf5ea82983651df77ef0690a44eb5007fc24da58e2f0->enter($__internal_d310931c4ca2cda4c1abbf5ea82983651df77ef0690a44eb5007fc24da58e2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_22de9975b4294cb3a9167e2304c3098bbda6f0347003e9646816545c2b78043d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22de9975b4294cb3a9167e2304c3098bbda6f0347003e9646816545c2b78043d->enter($__internal_22de9975b4294cb3a9167e2304c3098bbda6f0347003e9646816545c2b78043d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 69
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter(($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 71
        if ((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) {
            // line 72
            echo "    <span class=\"label\">
        <span class=\"icon\">
            <img width=\"32\" height=\"28\" src=\"data:image/png;base64, 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\" alt=\"Redis\" />
        </span>
        <strong>Redis</strong>
        <span class=\"count\">
            <span>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "commandcount", array()), "html", null, true);
            echo "</span>
            <span>";
            // line 79
            echo twig_escape_filter($this->env, sprintf("%0.0f", $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "time", array())), "html", null, true);
            echo " ms</span>
        </span>
    </span>";
        } else {
            // line 83
            echo "    <span class=\"label";
            echo ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "commandcount", array()) == 0)) ? ("disabled") : (""));
            echo "\">
        <span class=\"icon\">";
            // line 84
            echo twig_include($this->env, $context, "@SncRedis/Collector/icon.svg.twig", array("colors" => array("light" => "#DDD", "dark" => "#999")));
            echo "</span>
        <strong>Redis</strong>";
            // line 86
            if ((0 != $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "erroredCommandsCount", array()))) {
                // line 87
                echo "            <span class=\"count\">
                <span>";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "erroredCommandsCount", array()), "html", null, true);
                echo "</span>
            </span>";
            }
            // line 91
            echo "    </span>";
        }
        
        $__internal_22de9975b4294cb3a9167e2304c3098bbda6f0347003e9646816545c2b78043d->leave($__internal_22de9975b4294cb3a9167e2304c3098bbda6f0347003e9646816545c2b78043d_prof);

        
        $__internal_d310931c4ca2cda4c1abbf5ea82983651df77ef0690a44eb5007fc24da58e2f0->leave($__internal_d310931c4ca2cda4c1abbf5ea82983651df77ef0690a44eb5007fc24da58e2f0_prof);

    }

    // line 95
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bdc4afe621706cf63227b86dfdd1becaa2c15b6a3d9c94909a05acfb61f9f6ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdc4afe621706cf63227b86dfdd1becaa2c15b6a3d9c94909a05acfb61f9f6ec->enter($__internal_bdc4afe621706cf63227b86dfdd1becaa2c15b6a3d9c94909a05acfb61f9f6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_84dd6d0f69e8764d905fef8853402d983bf5058d0d6b0e828093263062f62d14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84dd6d0f69e8764d905fef8853402d983bf5058d0d6b0e828093263062f62d14->enter($__internal_84dd6d0f69e8764d905fef8853402d983bf5058d0d6b0e828093263062f62d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 96
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter(($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 97
        echo "
    <h2>Commands</h2>";
        // line 100
        if (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "commandcount", array()) == 0)) {
            // line 101
            echo "        <div class=\"empty\">
            <p";
            // line 102
            if ((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) {
                echo " style=\"font-style:italic;\"";
            }
            echo ">No commands were executed or the logger is disabled.</p>
        </div>";
        } else {
            // line 105
            echo "        <table class=\"alt\">
            <thead>
                <tr>
                    <th class=\"nowrap\">#</th>
                    <th class=\"nowrap\">Time</th>
                    <th class=\"nowrap\">Connection</th>
                    <th style=\"width:100%\">Command</th>
            </thead>
            <tbody>";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "commands", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["command"]) {
                // line 115
                echo "                    <tr";
                echo (($this->getAttribute($context["command"], "error", array())) ? ("class=\"status-error\"") : (""));
                echo ">
                        <td>";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</td>
                        <td class=\"nowrap\">";
                // line 117
                echo twig_escape_filter($this->env, sprintf("%0.2f", $this->getAttribute($context["command"], "executionMS", array())), "html", null, true);
                echo " ms</td>
                        <td class=\"font-normal\">";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($context["command"], "conn", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 120
                echo twig_escape_filter($this->env, $this->getAttribute($context["command"], "cmd", array()), "html", null, true);
                // line 122
                if ($this->getAttribute($context["command"], "error", array())) {
                    // line 123
                    echo "                                <br><strong class=\"font-normal\">An error occured:";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["command"], "error", array()), "html", null, true);
                    echo "</strong>";
                }
                // line 125
                echo "                        </td>
                    </tr>";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['command'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "            </tbody>
        </table>";
        }
        
        $__internal_84dd6d0f69e8764d905fef8853402d983bf5058d0d6b0e828093263062f62d14->leave($__internal_84dd6d0f69e8764d905fef8853402d983bf5058d0d6b0e828093263062f62d14_prof);

        
        $__internal_bdc4afe621706cf63227b86dfdd1becaa2c15b6a3d9c94909a05acfb61f9f6ec->leave($__internal_bdc4afe621706cf63227b86dfdd1becaa2c15b6a3d9c94909a05acfb61f9f6ec_prof);

    }

    public function getTemplateName()
    {
        return "SncRedisBundle:Collector:redis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 128,  299 => 125,  294 => 123,  292 => 122,  290 => 120,  286 => 118,  282 => 117,  278 => 116,  273 => 115,  256 => 114,  246 => 105,  239 => 102,  236 => 101,  234 => 100,  231 => 97,  229 => 96,  220 => 95,  209 => 91,  204 => 88,  201 => 87,  199 => 86,  195 => 84,  190 => 83,  184 => 79,  180 => 78,  172 => 72,  170 => 71,  168 => 69,  159 => 68,  148 => 64,  142 => 59,  138 => 57,  136 => 56,  132 => 53,  124 => 48,  120 => 46,  118 => 45,  112 => 40,  106 => 37,  101 => 35,  99 => 34,  97 => 33,  95 => 32,  89 => 27,  85 => 25,  83 => 24,  79 => 21,  71 => 16,  67 => 14,  65 => 13,  61 => 10,  57 => 8,  55 => 7,  53 => 6,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}

{% block toolbar %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    {% if profiler_markup_version == 1 %}
        {% set icon %}
            <img width=\"20\" height=\"28\" alt=\"Redis\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAv5JREFUeNrsVd9L01EUP9/tbm5ubtI2VqAOYpJP0WCYNOilQAiySbICHyp67CXqrf8jqKeejAVJ9GAUmUEMfYjSl5IYexqM1G3Mn1O3uT6fy+4QMV/yoQe/cLi7557zOZ/zOder1Ww25Tg/mxzzdwL4HwKqZDJ51Pkpy7JGtre3r9dqtbMul2vB4XBM4qp9gr962JVTBx0IcsIS+HkL64jP5zuTSqWkXq9LPp+/MDs7e1cp9QuAk4h5iZgfhwIioB8sxvb29m673e7z2Eu1WpVwOCwDAwMSi8VkZmZGcrmcFIvFc7u7u09sNttjgH8B6CvYW8AUrdHR0SvYPETA1Wg06hofH5dQKMQCUqlUZGJiQhYXFyWRSMj8/Lxsbm7KxsZG27q7u3W80+ksAeepWltbe9TZ2XmNLDs6OiQQCEhvb6/Y7Xa2r1uFhjI3Nycej0dQWPtZEJoKutGxOzs7ARRIWWjlPdCHASoQXAd4vV4N1NPTI0NDQxKJRHSR6elpSafTgjbboCxApltbW9JoNL4qv9//HVoNsz1WIksGoIgUCgXJZrPS19cny8vLMjU1pWOQqPUlCJi12fIWKLQRwSR1WwTiykACMolAmUxGF+LeALEDMu3q6tJSsDvkDqqlpaUg26ST4mLSWngmQV/BJDU4pq/P2Cr36EzLQ3aMLZfLZGtXSMgRgMZAApMxE8iGftMWWZIR2yPD9fV1fW7YImdBBYNBDydsWLESmXFINJxrzfi1psl7qKUhaxYhAbJFXL8qlUqnmcjKPDCsWJ3WElsDmiFQBiMTAenjUFHEr4D6e3V1VQ+EiYYV2yCwGQS1o/C8yIwhKP0rKyvmbjbhe8c/vQf48Rn7+wC4BBY2JjKJjM0NMBqyTRYnGIvCX4K9gT0D1jcrHo/vf8oGcXAP4DeQGKZmbI1mWjZsEfcTrhd8IGCF9puwD9A8ElxCSLqJ9Q7Wi3S3jhs4/4D1OewjrHrwtfoboLTeOjvsMmwMVoO9hmWOekCtk//L//z9EWAADA/Sh+MqnZ4AAAAASUVORK5CYII=\"/>

            <span class=\"sf-toolbar-status\">{{ collector.commandcount }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Queries</b>
                <span class=\"sf-toolbar-status\">{{ collector.commandcount }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Query time</b>
                <span>{{ '%0.2f'|format(collector.time) }} ms</span>
            </div>

            {% if collector.erroredCommandsCount > 0 %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Failed Queries</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-red\">{{ collector.erroredCommandsCount }}</span>
                </div>
            {% endif %}
        {% endset %}

        {% include 'WebProfilerBundle:Profiler:toolbar_item.html.twig' with { 'link': profiler_url, status: collector.erroredCommandsCount > 0 ? 'red' : '' } %}
    {% elseif collector.commandcount > 0 %}
        {% set icon %}
            {{ include('@SncRedis/Collector/icon.svg.twig') }}

            <span class=\"sf-toolbar-value\">{{ collector.commandCount }}</span>
            <span class=\"sf-toolbar-info-piece-additional-detail\">
                <span class=\"sf-toolbar-label\">in</span>
                <span class=\"sf-toolbar-value\">{{ '%0.2f'|format(collector.time) }}</span>
                <span class=\"sf-toolbar-label\">ms</span>
            </span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Queries</b>
                <span class=\"sf-toolbar-status\">{{ collector.commandcount }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Query time</b>
                <span>{{ '%0.2f'|format(collector.time) }} ms</span>
            </div>

            {% if collector.erroredCommandsCount > 0 %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Failed Queries</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-red\">{{ collector.erroredCommandsCount }}</span>
                </div>
            {% endif %}
        {% endset %}

        {% include 'WebProfilerBundle:Profiler:toolbar_item.html.twig' with { 'link': profiler_url, status: collector.erroredCommandsCount > 0 ? 'red' : '' } %}
    {% endif %}
{% endblock %}

{% block menu %}
{% set profiler_markup_version = profiler_markup_version|default(1) %}

{% if profiler_markup_version == 1 %}
    <span class=\"label\">
        <span class=\"icon\">
            <img width=\"32\" height=\"28\" src=\"data:image/png;base64, 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\" alt=\"Redis\" />
        </span>
        <strong>Redis</strong>
        <span class=\"count\">
            <span>{{ collector.commandcount }}</span>
            <span>{{ '%0.0f'|format(collector.time) }} ms</span>
        </span>
    </span>
{% else %}
    <span class=\"label {{ collector.commandcount == 0 ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@SncRedis/Collector/icon.svg.twig', {colors: {light: '#DDD', dark: '#999'}}) }}</span>
        <strong>Redis</strong>
        {% if 0 != collector.erroredCommandsCount %}
            <span class=\"count\">
                <span>{{ collector.erroredCommandsCount }}</span>
            </span>
        {% endif %}
    </span>
{% endif %}
{% endblock %}

{% block panel %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    <h2>Commands</h2>

    {% if collector.commandcount == 0 %}
        <div class=\"empty\">
            <p{% if profiler_markup_version == 1 %} style=\"font-style:italic;\"{% endif %}>No commands were executed or the logger is disabled.</p>
        </div>
    {% else %}
        <table class=\"alt\">
            <thead>
                <tr>
                    <th class=\"nowrap\">#</th>
                    <th class=\"nowrap\">Time</th>
                    <th class=\"nowrap\">Connection</th>
                    <th style=\"width:100%\">Command</th>
            </thead>
            <tbody>
                {% for command in collector.commands %}
                    <tr {{ command.error ? 'class=\"status-error\"' }}>
                        <td>{{ loop.index }}</td>
                        <td class=\"nowrap\">{{ '%0.2f'|format(command.executionMS) }} ms</td>
                        <td class=\"font-normal\">{{ command.conn }}</td>
                        <td>
                            {{ command.cmd }}

                            {% if command.error %}
                                <br><strong class=\"font-normal\">An error occured: {{ command.error }}</strong>
                            {% endif %}
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
{% endblock %}
", "SncRedisBundle:Collector:redis.html.twig", "/Users/aliay/Development/dev/iyzico_v4/vendor/snc/redis-bundle/Resources/views/Collector/redis.html.twig");
    }
}
