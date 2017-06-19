<?php

/* AppBundle:user/component/cards:card_frequent_tags.html.twig */
class __TwigTemplate_8bb089b6a1cff91e7d4848d44ff11590890e1b67eec9110f437229b522792b9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:user/component/cards:card_base.html.twig", "AppBundle:user/component/cards:card_frequent_tags.html.twig", 1);
        $this->blocks = array(
            'card_title' => array($this, 'block_card_title'),
            'card_content' => array($this, 'block_card_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:user/component/cards:card_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c15b7f63d98196a43c5916b1dc3fd4d596713a6954ea976acd4c97afa1d7fed2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c15b7f63d98196a43c5916b1dc3fd4d596713a6954ea976acd4c97afa1d7fed2->enter($__internal_c15b7f63d98196a43c5916b1dc3fd4d596713a6954ea976acd4c97afa1d7fed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user/component/cards:card_frequent_tags.html.twig"));

        $__internal_9a484107cdda80c740ba0bb0530065a3f8848e24a8d80a3c8734f3959ccea664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a484107cdda80c740ba0bb0530065a3f8848e24a8d80a3c8734f3959ccea664->enter($__internal_9a484107cdda80c740ba0bb0530065a3f8848e24a8d80a3c8734f3959ccea664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user/component/cards:card_frequent_tags.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c15b7f63d98196a43c5916b1dc3fd4d596713a6954ea976acd4c97afa1d7fed2->leave($__internal_c15b7f63d98196a43c5916b1dc3fd4d596713a6954ea976acd4c97afa1d7fed2_prof);

        
        $__internal_9a484107cdda80c740ba0bb0530065a3f8848e24a8d80a3c8734f3959ccea664->leave($__internal_9a484107cdda80c740ba0bb0530065a3f8848e24a8d80a3c8734f3959ccea664_prof);

    }

    // line 3
    public function block_card_title($context, array $blocks = array())
    {
        $__internal_3a46fe34ddccf61f28d31e33e7815ecc839c60ef805a01b7a19fd3c4f7405569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a46fe34ddccf61f28d31e33e7815ecc839c60ef805a01b7a19fd3c4f7405569->enter($__internal_3a46fe34ddccf61f28d31e33e7815ecc839c60ef805a01b7a19fd3c4f7405569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "card_title"));

        $__internal_e614c40ec1ad75eb06db363f962f4cdf00789e0ef4e262fe2564581b0e76af34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e614c40ec1ad75eb06db363f962f4cdf00789e0ef4e262fe2564581b0e76af34->enter($__internal_e614c40ec1ad75eb06db363f962f4cdf00789e0ef4e262fe2564581b0e76af34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "card_title"));

        echo "Most used Tags";
        
        $__internal_e614c40ec1ad75eb06db363f962f4cdf00789e0ef4e262fe2564581b0e76af34->leave($__internal_e614c40ec1ad75eb06db363f962f4cdf00789e0ef4e262fe2564581b0e76af34_prof);

        
        $__internal_3a46fe34ddccf61f28d31e33e7815ecc839c60ef805a01b7a19fd3c4f7405569->leave($__internal_3a46fe34ddccf61f28d31e33e7815ecc839c60ef805a01b7a19fd3c4f7405569_prof);

    }

    // line 5
    public function block_card_content($context, array $blocks = array())
    {
        $__internal_f5c71afdfdbb5c28388e3be0e22c1e9d11a6bf806d7b1fbbce13c963feaacafa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5c71afdfdbb5c28388e3be0e22c1e9d11a6bf806d7b1fbbce13c963feaacafa->enter($__internal_f5c71afdfdbb5c28388e3be0e22c1e9d11a6bf806d7b1fbbce13c963feaacafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "card_content"));

        $__internal_21e6cbb6893b54ddcd7c49668c3e133e7e3415f55282b51d8b8e464934d4b7f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21e6cbb6893b54ddcd7c49668c3e133e7e3415f55282b51d8b8e464934d4b7f2->enter($__internal_21e6cbb6893b54ddcd7c49668c3e133e7e3415f55282b51d8b8e464934d4b7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "card_content"));

        // line 6
        echo "<br>

";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tag_count"]) || array_key_exists("tag_count", $context) ? $context["tag_count"] : (function () { throw new Twig_Error_Runtime('Variable "tag_count" does not exist.', 8, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 9
            echo "  <div class=\"chip\">


    ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tag"], "tag", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tag"], "number", array()), "html", null, true);
            echo ")
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
";
        
        $__internal_21e6cbb6893b54ddcd7c49668c3e133e7e3415f55282b51d8b8e464934d4b7f2->leave($__internal_21e6cbb6893b54ddcd7c49668c3e133e7e3415f55282b51d8b8e464934d4b7f2_prof);

        
        $__internal_f5c71afdfdbb5c28388e3be0e22c1e9d11a6bf806d7b1fbbce13c963feaacafa->leave($__internal_f5c71afdfdbb5c28388e3be0e22c1e9d11a6bf806d7b1fbbce13c963feaacafa_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:user/component/cards:card_frequent_tags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 15,  81 => 12,  76 => 9,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle:user/component/cards:card_base.html.twig' %}

{% block card_title %}Most used Tags{% endblock card_title %}

{% block card_content %}
<br>

{% for tag in tag_count %}
  <div class=\"chip\">


    {{tag.tag}} ({{tag.number}})
  </div>
{% endfor %}

{% endblock card_content %}
", "AppBundle:user/component/cards:card_frequent_tags.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/user/component/cards/card_frequent_tags.html.twig");
    }
}
