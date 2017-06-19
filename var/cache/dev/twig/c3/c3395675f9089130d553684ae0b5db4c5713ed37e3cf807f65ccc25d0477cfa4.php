<?php

/* AppBundle:user/component/cards:card_posts_summary.html.twig */
class __TwigTemplate_15fe9146110cf6492dce0df7b2d920ebd2adfd3bdd04428afad5691fef4be809 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:user/component/cards:card_base.html.twig", "AppBundle:user/component/cards:card_posts_summary.html.twig", 1);
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
        $__internal_0e844302c9ecaef527b6d1f82343dba5dafbe181e5fec5a7c258a13c6957cc94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e844302c9ecaef527b6d1f82343dba5dafbe181e5fec5a7c258a13c6957cc94->enter($__internal_0e844302c9ecaef527b6d1f82343dba5dafbe181e5fec5a7c258a13c6957cc94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user/component/cards:card_posts_summary.html.twig"));

        $__internal_a1c7c452057569639cdb6f7f99fbdc4f4893bda08cb22d0899c489a02212a10c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1c7c452057569639cdb6f7f99fbdc4f4893bda08cb22d0899c489a02212a10c->enter($__internal_a1c7c452057569639cdb6f7f99fbdc4f4893bda08cb22d0899c489a02212a10c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user/component/cards:card_posts_summary.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e844302c9ecaef527b6d1f82343dba5dafbe181e5fec5a7c258a13c6957cc94->leave($__internal_0e844302c9ecaef527b6d1f82343dba5dafbe181e5fec5a7c258a13c6957cc94_prof);

        
        $__internal_a1c7c452057569639cdb6f7f99fbdc4f4893bda08cb22d0899c489a02212a10c->leave($__internal_a1c7c452057569639cdb6f7f99fbdc4f4893bda08cb22d0899c489a02212a10c_prof);

    }

    // line 3
    public function block_card_title($context, array $blocks = array())
    {
        $__internal_f91c44bd64fc9c783de5dc69e20b6ad0dbf2c826395a9b2c03e9a0b6d66eb02f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f91c44bd64fc9c783de5dc69e20b6ad0dbf2c826395a9b2c03e9a0b6d66eb02f->enter($__internal_f91c44bd64fc9c783de5dc69e20b6ad0dbf2c826395a9b2c03e9a0b6d66eb02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "card_title"));

        $__internal_e82afe4c0398b6225166624b2998baef3e21e69bf7de423d456acdaffcb52bb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e82afe4c0398b6225166624b2998baef3e21e69bf7de423d456acdaffcb52bb3->enter($__internal_e82afe4c0398b6225166624b2998baef3e21e69bf7de423d456acdaffcb52bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "card_title"));

        echo "Summary of Posts";
        
        $__internal_e82afe4c0398b6225166624b2998baef3e21e69bf7de423d456acdaffcb52bb3->leave($__internal_e82afe4c0398b6225166624b2998baef3e21e69bf7de423d456acdaffcb52bb3_prof);

        
        $__internal_f91c44bd64fc9c783de5dc69e20b6ad0dbf2c826395a9b2c03e9a0b6d66eb02f->leave($__internal_f91c44bd64fc9c783de5dc69e20b6ad0dbf2c826395a9b2c03e9a0b6d66eb02f_prof);

    }

    // line 5
    public function block_card_content($context, array $blocks = array())
    {
        $__internal_99d7a93755c1a1659f6d026d83a4b15d1636ccd9a8a8f151d95ad4bf23c811b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99d7a93755c1a1659f6d026d83a4b15d1636ccd9a8a8f151d95ad4bf23c811b8->enter($__internal_99d7a93755c1a1659f6d026d83a4b15d1636ccd9a8a8f151d95ad4bf23c811b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "card_content"));

        $__internal_56edc165b4b6e312bb0e0732e6c0efffc0fa114797fc581d504c964051461b94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56edc165b4b6e312bb0e0732e6c0efffc0fa114797fc581d504c964051461b94->enter($__internal_56edc165b4b6e312bb0e0732e6c0efffc0fa114797fc581d504c964051461b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "card_content"));

        // line 6
        echo "<p>
  ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["summary"]) || array_key_exists("summary", $context) ? $context["summary"] : (function () { throw new Twig_Error_Runtime('Variable "summary" does not exist.', 7, $this->getSourceContext()); })()), "post_types", array()), "total", array()), "html", null, true);
        echo " Posts
  ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["summary"]) || array_key_exists("summary", $context) ? $context["summary"] : (function () { throw new Twig_Error_Runtime('Variable "summary" does not exist.', 8, $this->getSourceContext()); })()), "post_types", array()), "images", array()), "html", null, true);
        echo " Images
  ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["summary"]) || array_key_exists("summary", $context) ? $context["summary"] : (function () { throw new Twig_Error_Runtime('Variable "summary" does not exist.', 9, $this->getSourceContext()); })()), "post_types", array()), "locations", array()), "html", null, true);
        echo " Locations
  ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["summary"]) || array_key_exists("summary", $context) ? $context["summary"] : (function () { throw new Twig_Error_Runtime('Variable "summary" does not exist.', 10, $this->getSourceContext()); })()), "post_types", array()), "quotes", array()), "html", null, true);
        echo " Quotes
</p>


";
        
        $__internal_56edc165b4b6e312bb0e0732e6c0efffc0fa114797fc581d504c964051461b94->leave($__internal_56edc165b4b6e312bb0e0732e6c0efffc0fa114797fc581d504c964051461b94_prof);

        
        $__internal_99d7a93755c1a1659f6d026d83a4b15d1636ccd9a8a8f151d95ad4bf23c811b8->leave($__internal_99d7a93755c1a1659f6d026d83a4b15d1636ccd9a8a8f151d95ad4bf23c811b8_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:user/component/cards:card_posts_summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 10,  79 => 9,  75 => 8,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle:user/component/cards:card_base.html.twig' %}

{% block card_title %}Summary of Posts{% endblock card_title %}

{% block card_content %}
<p>
  {{summary.post_types.total}} Posts
  {{summary.post_types.images}} Images
  {{summary.post_types.locations}} Locations
  {{summary.post_types.quotes}} Quotes
</p>


{% endblock card_content %}
", "AppBundle:user/component/cards:card_posts_summary.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/user/component/cards/card_posts_summary.html.twig");
    }
}
