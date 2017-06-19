<?php

/* AppBundle:user/page:page_summary.html.twig */
class __TwigTemplate_0c6c8f5a1d11a253f26ce78daecb4e630c0d4493c3bfd2b0c6ab1ac54c653a12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:user:control_panel.html.twig", "AppBundle:user/page:page_summary.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:user:control_panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63e3d0a7f46133b62aa7a46d5ee3af3ecc7a47263f6e3f7a91d5599201d6f5fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63e3d0a7f46133b62aa7a46d5ee3af3ecc7a47263f6e3f7a91d5599201d6f5fb->enter($__internal_63e3d0a7f46133b62aa7a46d5ee3af3ecc7a47263f6e3f7a91d5599201d6f5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user/page:page_summary.html.twig"));

        $__internal_28c4507846f76b191d1bba52d6e165925aca7905084cc1b761816b5ff47d5bca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28c4507846f76b191d1bba52d6e165925aca7905084cc1b761816b5ff47d5bca->enter($__internal_28c4507846f76b191d1bba52d6e165925aca7905084cc1b761816b5ff47d5bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user/page:page_summary.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63e3d0a7f46133b62aa7a46d5ee3af3ecc7a47263f6e3f7a91d5599201d6f5fb->leave($__internal_63e3d0a7f46133b62aa7a46d5ee3af3ecc7a47263f6e3f7a91d5599201d6f5fb_prof);

        
        $__internal_28c4507846f76b191d1bba52d6e165925aca7905084cc1b761816b5ff47d5bca->leave($__internal_28c4507846f76b191d1bba52d6e165925aca7905084cc1b761816b5ff47d5bca_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_301cbf5b89f5510657337ef02302eda855083e87c1eaf27e7ea7350e18ce2cb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_301cbf5b89f5510657337ef02302eda855083e87c1eaf27e7ea7350e18ce2cb8->enter($__internal_301cbf5b89f5510657337ef02302eda855083e87c1eaf27e7ea7350e18ce2cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_907cd4b7741b828aa9b8415dfe33a40dfd55166867e907b3e620e1c9147d3888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_907cd4b7741b828aa9b8415dfe33a40dfd55166867e907b3e620e1c9147d3888->enter($__internal_907cd4b7741b828aa9b8415dfe33a40dfd55166867e907b3e620e1c9147d3888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Summary";
        
        $__internal_907cd4b7741b828aa9b8415dfe33a40dfd55166867e907b3e620e1c9147d3888->leave($__internal_907cd4b7741b828aa9b8415dfe33a40dfd55166867e907b3e620e1c9147d3888_prof);

        
        $__internal_301cbf5b89f5510657337ef02302eda855083e87c1eaf27e7ea7350e18ce2cb8->leave($__internal_301cbf5b89f5510657337ef02302eda855083e87c1eaf27e7ea7350e18ce2cb8_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_c21bb1a48c2529e3b2f40a49e35a0987668eeedf96c272186f5df96be30695d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c21bb1a48c2529e3b2f40a49e35a0987668eeedf96c272186f5df96be30695d0->enter($__internal_c21bb1a48c2529e3b2f40a49e35a0987668eeedf96c272186f5df96be30695d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ddeda97793540165ce2e7d8fe7aba5da4becdd730cee7bb0e79a06e268552fd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddeda97793540165ce2e7d8fe7aba5da4becdd730cee7bb0e79a06e268552fd5->enter($__internal_ddeda97793540165ce2e7d8fe7aba5da4becdd730cee7bb0e79a06e268552fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "  <div class=\"container\">
    <div class=\"row\">
      <h1 class=\"light\">Accounts Summary</h1>
    </div>

    <div class=\"row\">
      <div class=\"col s12 m6\">
        ";
        // line 13
        $this->loadTemplate("AppBundle:user/component/cards:card_account_balance.html.twig", "AppBundle:user/page:page_summary.html.twig", 13)->display($context);
        // line 14
        echo "      </div>

      <div class=\"col s12 m6\">
        ";
        // line 17
        $this->loadTemplate("AppBundle:user/component/cards:card_frequent_tags.html.twig", "AppBundle:user/page:page_summary.html.twig", 17)->display($context);
        // line 18
        echo "
      </div>
      <div class=\"col s12 m6\">
        ";
        // line 21
        $this->loadTemplate("AppBundle:user/component/cards:card_posts_summary.html.twig", "AppBundle:user/page:page_summary.html.twig", 21)->display($context);
        // line 22
        echo "
      </div>
    </div>

  </div>
";
        
        $__internal_ddeda97793540165ce2e7d8fe7aba5da4becdd730cee7bb0e79a06e268552fd5->leave($__internal_ddeda97793540165ce2e7d8fe7aba5da4becdd730cee7bb0e79a06e268552fd5_prof);

        
        $__internal_c21bb1a48c2529e3b2f40a49e35a0987668eeedf96c272186f5df96be30695d0->leave($__internal_c21bb1a48c2529e3b2f40a49e35a0987668eeedf96c272186f5df96be30695d0_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:user/page:page_summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 22,  91 => 21,  86 => 18,  84 => 17,  79 => 14,  77 => 13,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle:user:control_panel.html.twig' %}

{% block title %}Summary{% endblock %}

{% block content %}
  <div class=\"container\">
    <div class=\"row\">
      <h1 class=\"light\">Accounts Summary</h1>
    </div>

    <div class=\"row\">
      <div class=\"col s12 m6\">
        {% include 'AppBundle:user/component/cards:card_account_balance.html.twig' %}
      </div>

      <div class=\"col s12 m6\">
        {% include 'AppBundle:user/component/cards:card_frequent_tags.html.twig' %}

      </div>
      <div class=\"col s12 m6\">
        {% include 'AppBundle:user/component/cards:card_posts_summary.html.twig' %}

      </div>
    </div>

  </div>
{% endblock %}
", "AppBundle:user/page:page_summary.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/user/page/page_summary.html.twig");
    }
}
