<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a5c7027f3be5bd37af7de8b327d3daab32b3417a6ac5ff067bf47acbab491147 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_263ab856f8a36aeb3d7c330a5110a4f402942bbb0d3b654928ec34e1ea2ca839 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_263ab856f8a36aeb3d7c330a5110a4f402942bbb0d3b654928ec34e1ea2ca839->enter($__internal_263ab856f8a36aeb3d7c330a5110a4f402942bbb0d3b654928ec34e1ea2ca839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_eed22351548f4e3c0cef40fa62e147670aaa293b12e969616f2137f79546f5b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eed22351548f4e3c0cef40fa62e147670aaa293b12e969616f2137f79546f5b5->enter($__internal_eed22351548f4e3c0cef40fa62e147670aaa293b12e969616f2137f79546f5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_263ab856f8a36aeb3d7c330a5110a4f402942bbb0d3b654928ec34e1ea2ca839->leave($__internal_263ab856f8a36aeb3d7c330a5110a4f402942bbb0d3b654928ec34e1ea2ca839_prof);

        
        $__internal_eed22351548f4e3c0cef40fa62e147670aaa293b12e969616f2137f79546f5b5->leave($__internal_eed22351548f4e3c0cef40fa62e147670aaa293b12e969616f2137f79546f5b5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7eea188f623b20dd216ca90990cb5b9f82b9f507bca91146d0a72cc7cfbd758f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eea188f623b20dd216ca90990cb5b9f82b9f507bca91146d0a72cc7cfbd758f->enter($__internal_7eea188f623b20dd216ca90990cb5b9f82b9f507bca91146d0a72cc7cfbd758f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a8f02b3ce62e753cb43b9b785221202b1108f11720d352b85356b336fda33503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8f02b3ce62e753cb43b9b785221202b1108f11720d352b85356b336fda33503->enter($__internal_a8f02b3ce62e753cb43b9b785221202b1108f11720d352b85356b336fda33503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a8f02b3ce62e753cb43b9b785221202b1108f11720d352b85356b336fda33503->leave($__internal_a8f02b3ce62e753cb43b9b785221202b1108f11720d352b85356b336fda33503_prof);

        
        $__internal_7eea188f623b20dd216ca90990cb5b9f82b9f507bca91146d0a72cc7cfbd758f->leave($__internal_7eea188f623b20dd216ca90990cb5b9f82b9f507bca91146d0a72cc7cfbd758f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6fa13eb1c4c338a78e719f55baba8fa80eb7603368797c6abd437b4efcf76404 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fa13eb1c4c338a78e719f55baba8fa80eb7603368797c6abd437b4efcf76404->enter($__internal_6fa13eb1c4c338a78e719f55baba8fa80eb7603368797c6abd437b4efcf76404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_298e128689849b4b6d15d93e6cc444005f671b73516d1640701afd6bea7e661c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_298e128689849b4b6d15d93e6cc444005f671b73516d1640701afd6bea7e661c->enter($__internal_298e128689849b4b6d15d93e6cc444005f671b73516d1640701afd6bea7e661c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_298e128689849b4b6d15d93e6cc444005f671b73516d1640701afd6bea7e661c->leave($__internal_298e128689849b4b6d15d93e6cc444005f671b73516d1640701afd6bea7e661c_prof);

        
        $__internal_6fa13eb1c4c338a78e719f55baba8fa80eb7603368797c6abd437b4efcf76404->leave($__internal_6fa13eb1c4c338a78e719f55baba8fa80eb7603368797c6abd437b4efcf76404_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fba1d7f4429f65212753f7cd527f5294fe6e5f44a3267e98f1874940fa7e157b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fba1d7f4429f65212753f7cd527f5294fe6e5f44a3267e98f1874940fa7e157b->enter($__internal_fba1d7f4429f65212753f7cd527f5294fe6e5f44a3267e98f1874940fa7e157b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3ce135259cdf211a97524f81c161286efe2b88b1b7b0d638f1f879b98cd9150b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ce135259cdf211a97524f81c161286efe2b88b1b7b0d638f1f879b98cd9150b->enter($__internal_3ce135259cdf211a97524f81c161286efe2b88b1b7b0d638f1f879b98cd9150b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_3ce135259cdf211a97524f81c161286efe2b88b1b7b0d638f1f879b98cd9150b->leave($__internal_3ce135259cdf211a97524f81c161286efe2b88b1b7b0d638f1f879b98cd9150b_prof);

        
        $__internal_fba1d7f4429f65212753f7cd527f5294fe6e5f44a3267e98f1874940fa7e157b->leave($__internal_fba1d7f4429f65212753f7cd527f5294fe6e5f44a3267e98f1874940fa7e157b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/marshall/codespace/rosemary-accounts/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
