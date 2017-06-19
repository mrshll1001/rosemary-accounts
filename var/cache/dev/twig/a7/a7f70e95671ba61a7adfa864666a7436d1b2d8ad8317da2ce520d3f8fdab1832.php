<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_101e9561374981648470e0eef9ef8667089a218dc6ecf9a8de07c43a6fd80af0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26ac17c45ae40e0209a44e6788e47c88440b182a8072af63208b20947a8decd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26ac17c45ae40e0209a44e6788e47c88440b182a8072af63208b20947a8decd6->enter($__internal_26ac17c45ae40e0209a44e6788e47c88440b182a8072af63208b20947a8decd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3c6898aa4f5a7d8fa2c68df5f5a590fc69dcfc04e40eb7597bda51bf194b66cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c6898aa4f5a7d8fa2c68df5f5a590fc69dcfc04e40eb7597bda51bf194b66cf->enter($__internal_3c6898aa4f5a7d8fa2c68df5f5a590fc69dcfc04e40eb7597bda51bf194b66cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26ac17c45ae40e0209a44e6788e47c88440b182a8072af63208b20947a8decd6->leave($__internal_26ac17c45ae40e0209a44e6788e47c88440b182a8072af63208b20947a8decd6_prof);

        
        $__internal_3c6898aa4f5a7d8fa2c68df5f5a590fc69dcfc04e40eb7597bda51bf194b66cf->leave($__internal_3c6898aa4f5a7d8fa2c68df5f5a590fc69dcfc04e40eb7597bda51bf194b66cf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ae5201c3eaba80452f9d7ff110b98fea9dfeb7e223ccb2c6e7dffe1d6921205d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae5201c3eaba80452f9d7ff110b98fea9dfeb7e223ccb2c6e7dffe1d6921205d->enter($__internal_ae5201c3eaba80452f9d7ff110b98fea9dfeb7e223ccb2c6e7dffe1d6921205d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bda622b1a2523cfc90b42e91eae838c032b4294441ff478b3485fdbf895e20e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bda622b1a2523cfc90b42e91eae838c032b4294441ff478b3485fdbf895e20e4->enter($__internal_bda622b1a2523cfc90b42e91eae838c032b4294441ff478b3485fdbf895e20e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_bda622b1a2523cfc90b42e91eae838c032b4294441ff478b3485fdbf895e20e4->leave($__internal_bda622b1a2523cfc90b42e91eae838c032b4294441ff478b3485fdbf895e20e4_prof);

        
        $__internal_ae5201c3eaba80452f9d7ff110b98fea9dfeb7e223ccb2c6e7dffe1d6921205d->leave($__internal_ae5201c3eaba80452f9d7ff110b98fea9dfeb7e223ccb2c6e7dffe1d6921205d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f75d7b08f8eff1ea3a215fba73fc58927666da5462e70381c97c4e8ee3c9cc7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f75d7b08f8eff1ea3a215fba73fc58927666da5462e70381c97c4e8ee3c9cc7b->enter($__internal_f75d7b08f8eff1ea3a215fba73fc58927666da5462e70381c97c4e8ee3c9cc7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1cae83e50a39b743cd2e67647e1437b0b621fadaf7a1348994c1fdd2d73fc5a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cae83e50a39b743cd2e67647e1437b0b621fadaf7a1348994c1fdd2d73fc5a9->enter($__internal_1cae83e50a39b743cd2e67647e1437b0b621fadaf7a1348994c1fdd2d73fc5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_1cae83e50a39b743cd2e67647e1437b0b621fadaf7a1348994c1fdd2d73fc5a9->leave($__internal_1cae83e50a39b743cd2e67647e1437b0b621fadaf7a1348994c1fdd2d73fc5a9_prof);

        
        $__internal_f75d7b08f8eff1ea3a215fba73fc58927666da5462e70381c97c4e8ee3c9cc7b->leave($__internal_f75d7b08f8eff1ea3a215fba73fc58927666da5462e70381c97c4e8ee3c9cc7b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b21ff71640751f4825f5f1264fb322064eb5dca3e75cd7dae31ef4960848f57d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b21ff71640751f4825f5f1264fb322064eb5dca3e75cd7dae31ef4960848f57d->enter($__internal_b21ff71640751f4825f5f1264fb322064eb5dca3e75cd7dae31ef4960848f57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_083e5e25bac59eea7f22f345f83bbfb4304485e5e57e1d4d9ccd7a955cce381f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_083e5e25bac59eea7f22f345f83bbfb4304485e5e57e1d4d9ccd7a955cce381f->enter($__internal_083e5e25bac59eea7f22f345f83bbfb4304485e5e57e1d4d9ccd7a955cce381f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_083e5e25bac59eea7f22f345f83bbfb4304485e5e57e1d4d9ccd7a955cce381f->leave($__internal_083e5e25bac59eea7f22f345f83bbfb4304485e5e57e1d4d9ccd7a955cce381f_prof);

        
        $__internal_b21ff71640751f4825f5f1264fb322064eb5dca3e75cd7dae31ef4960848f57d->leave($__internal_b21ff71640751f4825f5f1264fb322064eb5dca3e75cd7dae31ef4960848f57d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/marshall/codespace/rosemary-accounts/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
