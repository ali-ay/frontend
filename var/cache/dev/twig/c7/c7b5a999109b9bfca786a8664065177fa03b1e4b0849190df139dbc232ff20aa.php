<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_167e1d5a9fb2194852aeffbf2e31c6b31b58086a466d43bc5c6047c70d37a66b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7af184e6a2ef1aa72d235a4d50f2c8cdb9d9ec06bc0fe326a033193df0f103a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7af184e6a2ef1aa72d235a4d50f2c8cdb9d9ec06bc0fe326a033193df0f103a2->enter($__internal_7af184e6a2ef1aa72d235a4d50f2c8cdb9d9ec06bc0fe326a033193df0f103a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_c9a6a2c983a8000a844c4d6ef4b9ba4efeea22d6642f60ac16bce014b5c9e30e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9a6a2c983a8000a844c4d6ef4b9ba4efeea22d6642f60ac16bce014b5c9e30e->enter($__internal_c9a6a2c983a8000a844c4d6ef4b9ba4efeea22d6642f60ac16bce014b5c9e30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7af184e6a2ef1aa72d235a4d50f2c8cdb9d9ec06bc0fe326a033193df0f103a2->leave($__internal_7af184e6a2ef1aa72d235a4d50f2c8cdb9d9ec06bc0fe326a033193df0f103a2_prof);

        
        $__internal_c9a6a2c983a8000a844c4d6ef4b9ba4efeea22d6642f60ac16bce014b5c9e30e->leave($__internal_c9a6a2c983a8000a844c4d6ef4b9ba4efeea22d6642f60ac16bce014b5c9e30e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_522349c9a86b291f6d739d304c0a5f9d5af3bd7a774c841e1246b02fdf5d0d1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_522349c9a86b291f6d739d304c0a5f9d5af3bd7a774c841e1246b02fdf5d0d1a->enter($__internal_522349c9a86b291f6d739d304c0a5f9d5af3bd7a774c841e1246b02fdf5d0d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c1e9a9432df969abe4db21251f485638786c38dcb34376d5f65631dc9f65e257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1e9a9432df969abe4db21251f485638786c38dcb34376d5f65631dc9f65e257->enter($__internal_c1e9a9432df969abe4db21251f485638786c38dcb34376d5f65631dc9f65e257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>";
        
        $__internal_c1e9a9432df969abe4db21251f485638786c38dcb34376d5f65631dc9f65e257->leave($__internal_c1e9a9432df969abe4db21251f485638786c38dcb34376d5f65631dc9f65e257_prof);

        
        $__internal_522349c9a86b291f6d739d304c0a5f9d5af3bd7a774c841e1246b02fdf5d0d1a->leave($__internal_522349c9a86b291f6d739d304c0a5f9d5af3bd7a774c841e1246b02fdf5d0d1a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5dd1054933219aedbf8a8f8171f5eba6be381576e9338bcfff9d9ff76778e0e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dd1054933219aedbf8a8f8171f5eba6be381576e9338bcfff9d9ff76778e0e9->enter($__internal_5dd1054933219aedbf8a8f8171f5eba6be381576e9338bcfff9d9ff76778e0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d31910b9f0826dbba90873081852052538529c455895a7b6e86bd5894a3a3128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d31910b9f0826dbba90873081852052538529c455895a7b6e86bd5894a3a3128->enter($__internal_d31910b9f0826dbba90873081852052538529c455895a7b6e86bd5894a3a3128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")";
        
        $__internal_d31910b9f0826dbba90873081852052538529c455895a7b6e86bd5894a3a3128->leave($__internal_d31910b9f0826dbba90873081852052538529c455895a7b6e86bd5894a3a3128_prof);

        
        $__internal_5dd1054933219aedbf8a8f8171f5eba6be381576e9338bcfff9d9ff76778e0e9->leave($__internal_5dd1054933219aedbf8a8f8171f5eba6be381576e9338bcfff9d9ff76778e0e9_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_2bc7f58c323cf4f90b51f2b655381e4bf893dd87662489402eff1a65e596b577 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bc7f58c323cf4f90b51f2b655381e4bf893dd87662489402eff1a65e596b577->enter($__internal_2bc7f58c323cf4f90b51f2b655381e4bf893dd87662489402eff1a65e596b577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c3bfcfaf315f8733133f186fa8ecd5404e7fa0864060cccd1fa273e75b498cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c3bfcfaf315f8733133f186fa8ecd5404e7fa0864060cccd1fa273e75b498cb->enter($__internal_7c3bfcfaf315f8733133f186fa8ecd5404e7fa0864060cccd1fa273e75b498cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_7c3bfcfaf315f8733133f186fa8ecd5404e7fa0864060cccd1fa273e75b498cb->leave($__internal_7c3bfcfaf315f8733133f186fa8ecd5404e7fa0864060cccd1fa273e75b498cb_prof);

        
        $__internal_2bc7f58c323cf4f90b51f2b655381e4bf893dd87662489402eff1a65e596b577->leave($__internal_2bc7f58c323cf4f90b51f2b655381e4bf893dd87662489402eff1a65e596b577_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 141,  213 => 140,  199 => 137,  190 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/aliay/Development/dev/iyzico_v4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
