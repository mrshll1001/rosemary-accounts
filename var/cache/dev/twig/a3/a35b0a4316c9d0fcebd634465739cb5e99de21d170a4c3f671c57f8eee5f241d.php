<?php

/* AppBundle:user/page:page_my-posts.html.twig */
class __TwigTemplate_d62a075747c944625980b29fdcef08fb54f0d3e6ea75b9b166fff02734656a1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:user:control_panel.html.twig", "AppBundle:user/page:page_my-posts.html.twig", 1);
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
        $__internal_13a3b15cc7a6c8580071ab6009400afd56c2cfdaa85941a246ea438b46e04d85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13a3b15cc7a6c8580071ab6009400afd56c2cfdaa85941a246ea438b46e04d85->enter($__internal_13a3b15cc7a6c8580071ab6009400afd56c2cfdaa85941a246ea438b46e04d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user/page:page_my-posts.html.twig"));

        $__internal_527000c6bfb891d39468f2bac765bdd0d074b2b014dc51938058a85fdee21791 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_527000c6bfb891d39468f2bac765bdd0d074b2b014dc51938058a85fdee21791->enter($__internal_527000c6bfb891d39468f2bac765bdd0d074b2b014dc51938058a85fdee21791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user/page:page_my-posts.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13a3b15cc7a6c8580071ab6009400afd56c2cfdaa85941a246ea438b46e04d85->leave($__internal_13a3b15cc7a6c8580071ab6009400afd56c2cfdaa85941a246ea438b46e04d85_prof);

        
        $__internal_527000c6bfb891d39468f2bac765bdd0d074b2b014dc51938058a85fdee21791->leave($__internal_527000c6bfb891d39468f2bac765bdd0d074b2b014dc51938058a85fdee21791_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c377478f5ccd1da0e3774fd9442d05df0436e83c5cff91fe65288e2c5c6b180 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c377478f5ccd1da0e3774fd9442d05df0436e83c5cff91fe65288e2c5c6b180->enter($__internal_0c377478f5ccd1da0e3774fd9442d05df0436e83c5cff91fe65288e2c5c6b180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7722c24a1c4fa94575018daa11869582fee041592853a66e94253a8459566378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7722c24a1c4fa94575018daa11869582fee041592853a66e94253a8459566378->enter($__internal_7722c24a1c4fa94575018daa11869582fee041592853a66e94253a8459566378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "My Posts";
        
        $__internal_7722c24a1c4fa94575018daa11869582fee041592853a66e94253a8459566378->leave($__internal_7722c24a1c4fa94575018daa11869582fee041592853a66e94253a8459566378_prof);

        
        $__internal_0c377478f5ccd1da0e3774fd9442d05df0436e83c5cff91fe65288e2c5c6b180->leave($__internal_0c377478f5ccd1da0e3774fd9442d05df0436e83c5cff91fe65288e2c5c6b180_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_361fbaf6a8ca107f5c39ac86f9ec7c1060fbca1e4911a81d2fdeb827b0d2aea5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_361fbaf6a8ca107f5c39ac86f9ec7c1060fbca1e4911a81d2fdeb827b0d2aea5->enter($__internal_361fbaf6a8ca107f5c39ac86f9ec7c1060fbca1e4911a81d2fdeb827b0d2aea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_12a544de7f0ed32ae355d76f42e8a370d3d59174e30446b419cb3f7940d9c9c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a544de7f0ed32ae355d76f42e8a370d3d59174e30446b419cb3f7940d9c9c0->enter($__internal_12a544de7f0ed32ae355d76f42e8a370d3d59174e30446b419cb3f7940d9c9c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<div class=\"container\">
  <div class=\"row\">
    <h1 class=\"light\">My Posts</h1>
    <p class=\"light\">
      Here you can see a list of your posts, edit and delete them.
    </p>
  </div>

  <div class=\"row\">
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 15, $this->getSourceContext()); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 16
            echo "
      <div class=\"col s12\">


        ";
            // line 20
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "reconciled", array())) {
                // line 21
                echo "          ";
                $this->loadTemplate("AppBundle:profile:card_my-posts.html.twig", "AppBundle:user/page:page_my-posts.html.twig", 21)->display($context);
                // line 22
                echo "        ";
            } else {
                // line 23
                echo "          ";
                $this->loadTemplate("AppBundle:profile:card_incoming.html.twig", "AppBundle:user/page:page_my-posts.html.twig", 23)->display($context);
                // line 24
                echo "        ";
            }
            // line 25
            echo "      </div>

    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "  </div>
</div>

";
        
        $__internal_12a544de7f0ed32ae355d76f42e8a370d3d59174e30446b419cb3f7940d9c9c0->leave($__internal_12a544de7f0ed32ae355d76f42e8a370d3d59174e30446b419cb3f7940d9c9c0_prof);

        
        $__internal_361fbaf6a8ca107f5c39ac86f9ec7c1060fbca1e4911a81d2fdeb827b0d2aea5->leave($__internal_361fbaf6a8ca107f5c39ac86f9ec7c1060fbca1e4911a81d2fdeb827b0d2aea5_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:user/page:page_my-posts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 28,  116 => 25,  113 => 24,  110 => 23,  107 => 22,  104 => 21,  102 => 20,  96 => 16,  79 => 15,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle:user:control_panel.html.twig' %}

{% block title %}My Posts{% endblock title %}

{% block content %}
<div class=\"container\">
  <div class=\"row\">
    <h1 class=\"light\">My Posts</h1>
    <p class=\"light\">
      Here you can see a list of your posts, edit and delete them.
    </p>
  </div>

  <div class=\"row\">
    {% for post in posts %}

      <div class=\"col s12\">


        {% if post.reconciled %}
          {% include 'AppBundle:profile:card_my-posts.html.twig' %}
        {% else %}
          {% include 'AppBundle:profile:card_incoming.html.twig' %}
        {% endif %}
      </div>

    {% endfor %}
  </div>
</div>

{% endblock content %}
", "AppBundle:user/page:page_my-posts.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/user/page/page_my-posts.html.twig");
    }
}
