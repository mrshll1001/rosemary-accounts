<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_5ee068a957e58d2309df91f7012837f4fafa03a0c2bec4f46b0c30416117e0bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_934a04d10aae3bfabc12bb64c66e93e67d98a137420d91378b32dcb135ddf59d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_934a04d10aae3bfabc12bb64c66e93e67d98a137420d91378b32dcb135ddf59d->enter($__internal_934a04d10aae3bfabc12bb64c66e93e67d98a137420d91378b32dcb135ddf59d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_adbf64a56c0f9130cea5609609ec860bcc41b00dde674b6cd5fe0ce1128e1b52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adbf64a56c0f9130cea5609609ec860bcc41b00dde674b6cd5fe0ce1128e1b52->enter($__internal_adbf64a56c0f9130cea5609609ec860bcc41b00dde674b6cd5fe0ce1128e1b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_934a04d10aae3bfabc12bb64c66e93e67d98a137420d91378b32dcb135ddf59d->leave($__internal_934a04d10aae3bfabc12bb64c66e93e67d98a137420d91378b32dcb135ddf59d_prof);

        
        $__internal_adbf64a56c0f9130cea5609609ec860bcc41b00dde674b6cd5fe0ce1128e1b52->leave($__internal_adbf64a56c0f9130cea5609609ec860bcc41b00dde674b6cd5fe0ce1128e1b52_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_90a9457c80256ea5a7f68b10ef9504db1fb184c908e32ff0d011235f5b902071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90a9457c80256ea5a7f68b10ef9504db1fb184c908e32ff0d011235f5b902071->enter($__internal_90a9457c80256ea5a7f68b10ef9504db1fb184c908e32ff0d011235f5b902071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_96bcd0cda0acd8a8405c265ce9a1faf0ba1821b5791154d43aca2f3d647ee0d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96bcd0cda0acd8a8405c265ce9a1faf0ba1821b5791154d43aca2f3d647ee0d8->enter($__internal_96bcd0cda0acd8a8405c265ce9a1faf0ba1821b5791154d43aca2f3d647ee0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_96bcd0cda0acd8a8405c265ce9a1faf0ba1821b5791154d43aca2f3d647ee0d8->leave($__internal_96bcd0cda0acd8a8405c265ce9a1faf0ba1821b5791154d43aca2f3d647ee0d8_prof);

        
        $__internal_90a9457c80256ea5a7f68b10ef9504db1fb184c908e32ff0d011235f5b902071->leave($__internal_90a9457c80256ea5a7f68b10ef9504db1fb184c908e32ff0d011235f5b902071_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/marshall/codespace/rosemary-accounts/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
