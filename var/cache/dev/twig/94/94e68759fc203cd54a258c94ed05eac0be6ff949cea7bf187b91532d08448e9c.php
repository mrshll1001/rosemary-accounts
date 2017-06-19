<?php

/* AppBundle:profile:financial_descriptions.html.twig */
class __TwigTemplate_aaa583bf050c92522a63848fa360ce9cf6575ef5f0d0336bdfc3b56daa4798d3 extends Twig_Template
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
        $__internal_a73049d3d4f56bf9219e5bab83881d5a0279e6bca849ecc8189db66d14cedb59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a73049d3d4f56bf9219e5bab83881d5a0279e6bca849ecc8189db66d14cedb59->enter($__internal_a73049d3d4f56bf9219e5bab83881d5a0279e6bca849ecc8189db66d14cedb59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:profile:financial_descriptions.html.twig"));

        $__internal_fc0e2e2da8209fd241b7e35af35a0fdc605e4b848ef6e73a9c319bc5fd9d9a16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc0e2e2da8209fd241b7e35af35a0fdc605e4b848ef6e73a9c319bc5fd9d9a16->enter($__internal_fc0e2e2da8209fd241b7e35af35a0fdc605e4b848ef6e73a9c319bc5fd9d9a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:profile:financial_descriptions.html.twig"));

        // line 2
        echo "
<p>
";
        // line 4
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 4, $this->getSourceContext()); })()), "financialValue", array()) < 0)) {
            // line 5
            echo "    Spent <strong>£";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AbsoluteValueExtension')->absoluteValueFilter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 5, $this->getSourceContext()); })()), "financialValue", array())), "html", null, true);
            echo "</strong> on <em>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 5, $this->getSourceContext()); })()), "description", array()), "html", null, true);
            echo "</em>
";
        } else {
            // line 7
            echo "    Received <strong>£";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 7, $this->getSourceContext()); })()), "financialValue", array()), "html", null, true);
            echo "</strong> for <em>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 7, $this->getSourceContext()); })()), "description", array()), "html", null, true);
            echo "</em>, from ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 7, $this->getSourceContext()); })()), "customer", array()), "name", array()), "html", null, true);
            echo "
";
        }
        // line 9
        echo "</p>
";
        
        $__internal_a73049d3d4f56bf9219e5bab83881d5a0279e6bca849ecc8189db66d14cedb59->leave($__internal_a73049d3d4f56bf9219e5bab83881d5a0279e6bca849ecc8189db66d14cedb59_prof);

        
        $__internal_fc0e2e2da8209fd241b7e35af35a0fdc605e4b848ef6e73a9c319bc5fd9d9a16->leave($__internal_fc0e2e2da8209fd241b7e35af35a0fdc605e4b848ef6e73a9c319bc5fd9d9a16_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:profile:financial_descriptions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  39 => 7,  31 => 5,  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# This template decides how to render the description in the event of a financial value. If it's positive, then it's a gain, otherwise it's a spend #}

<p>
{% if post.financialValue < 0 %}
    Spent <strong>£{{post.financialValue|absVal}}</strong> on <em>{{post.description}}</em>
{% else %}
    Received <strong>£{{post.financialValue}}</strong> for <em>{{post.description}}</em>, from {{post.customer.name}}
{% endif %}
</p>
", "AppBundle:profile:financial_descriptions.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/profile/financial_descriptions.html.twig");
    }
}
