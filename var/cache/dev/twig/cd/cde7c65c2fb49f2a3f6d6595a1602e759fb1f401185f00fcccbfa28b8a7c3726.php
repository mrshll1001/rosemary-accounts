<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_e627a9246dde2e4b4b5f41925e9a169d378ef0ca4e1b677d5386e1563fe587e0 extends Twig_Template
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
        $__internal_0819b4e670fcacb3b997f5fbadf6eca4f5b423ac356b6c1e7c1fb86b00679d76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0819b4e670fcacb3b997f5fbadf6eca4f5b423ac356b6c1e7c1fb86b00679d76->enter($__internal_0819b4e670fcacb3b997f5fbadf6eca4f5b423ac356b6c1e7c1fb86b00679d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_1280718084e9540c4ea90d83560d1fe5c741bee25377fddefbf1a602f28d3b5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1280718084e9540c4ea90d83560d1fe5c741bee25377fddefbf1a602f28d3b5b->enter($__internal_1280718084e9540c4ea90d83560d1fe5c741bee25377fddefbf1a602f28d3b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_0819b4e670fcacb3b997f5fbadf6eca4f5b423ac356b6c1e7c1fb86b00679d76->leave($__internal_0819b4e670fcacb3b997f5fbadf6eca4f5b423ac356b6c1e7c1fb86b00679d76_prof);

        
        $__internal_1280718084e9540c4ea90d83560d1fe5c741bee25377fddefbf1a602f28d3b5b->leave($__internal_1280718084e9540c4ea90d83560d1fe5c741bee25377fddefbf1a602f28d3b5b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/home/marshall/codespace/rosemary-accounts/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
