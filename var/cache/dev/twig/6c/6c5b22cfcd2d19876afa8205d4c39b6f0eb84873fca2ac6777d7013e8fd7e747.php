<?php

/* AppBundle:profile:card_compound_user.html.twig */
class __TwigTemplate_a87c718cea416bf26b752a0bcf287c3e6e7c25d8a8fcd73fcd962318dae24f01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:profile:card_compound.html.twig", "AppBundle:profile:card_compound_user.html.twig", 1);
        $this->blocks = array(
            'tags' => array($this, 'block_tags'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:profile:card_compound.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43c4c59ffe2fdc7486c532fb17ba359bc2d6dc84feaab31c82040a45bfb7f9fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43c4c59ffe2fdc7486c532fb17ba359bc2d6dc84feaab31c82040a45bfb7f9fe->enter($__internal_43c4c59ffe2fdc7486c532fb17ba359bc2d6dc84feaab31c82040a45bfb7f9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:profile:card_compound_user.html.twig"));

        $__internal_6e2ab45367669ceb3f11048e0031330ad7b53f69aa2712ee1d0c5fd64d770c71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e2ab45367669ceb3f11048e0031330ad7b53f69aa2712ee1d0c5fd64d770c71->enter($__internal_6e2ab45367669ceb3f11048e0031330ad7b53f69aa2712ee1d0c5fd64d770c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:profile:card_compound_user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43c4c59ffe2fdc7486c532fb17ba359bc2d6dc84feaab31c82040a45bfb7f9fe->leave($__internal_43c4c59ffe2fdc7486c532fb17ba359bc2d6dc84feaab31c82040a45bfb7f9fe_prof);

        
        $__internal_6e2ab45367669ceb3f11048e0031330ad7b53f69aa2712ee1d0c5fd64d770c71->leave($__internal_6e2ab45367669ceb3f11048e0031330ad7b53f69aa2712ee1d0c5fd64d770c71_prof);

    }

    // line 3
    public function block_tags($context, array $blocks = array())
    {
        $__internal_a1027d405955b6cf1c65f0e6a735e1cb951d064883daa26d8ecadb66c6578dc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1027d405955b6cf1c65f0e6a735e1cb951d064883daa26d8ecadb66c6578dc0->enter($__internal_a1027d405955b6cf1c65f0e6a735e1cb951d064883daa26d8ecadb66c6578dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tags"));

        $__internal_ee40d10ebc1d209d2070d17a01be4b115291b3efc8034f8397bd1eef8e0fb80c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee40d10ebc1d209d2070d17a01be4b115291b3efc8034f8397bd1eef8e0fb80c->enter($__internal_ee40d10ebc1d209d2070d17a01be4b115291b3efc8034f8397bd1eef8e0fb80c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tags"));

        // line 4
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 4, $this->getSourceContext()); })()), "tags", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 5
            echo "  <div class=\"chip\">
    <a class=\"grey-text text-darken-3\" href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("budget_codes_search", array("tagstring" => twig_get_attribute($this->env, $this->getSourceContext(), $context["tag"], "name", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tag"], "name", array()), "html", null, true);
            echo "</a>
  </div>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 9
            echo "  <p>
    This post has no tags!
  </p>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
";
        
        $__internal_ee40d10ebc1d209d2070d17a01be4b115291b3efc8034f8397bd1eef8e0fb80c->leave($__internal_ee40d10ebc1d209d2070d17a01be4b115291b3efc8034f8397bd1eef8e0fb80c_prof);

        
        $__internal_a1027d405955b6cf1c65f0e6a735e1cb951d064883daa26d8ecadb66c6578dc0->leave($__internal_a1027d405955b6cf1c65f0e6a735e1cb951d064883daa26d8ecadb66c6578dc0_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:profile:card_compound_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 13,  68 => 9,  58 => 6,  55 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle:profile:card_compound.html.twig' %}

{% block tags %}
  {% for tag in post.tags %}
  <div class=\"chip\">
    <a class=\"grey-text text-darken-3\" href=\"{{path('budget_codes_search', { 'tagstring': tag.name} )}}\">{{tag.name}}</a>
  </div>
  {% else %}
  <p>
    This post has no tags!
  </p>
  {% endfor %}

{% endblock tags %}
", "AppBundle:profile:card_compound_user.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/profile/card_compound_user.html.twig");
    }
}
