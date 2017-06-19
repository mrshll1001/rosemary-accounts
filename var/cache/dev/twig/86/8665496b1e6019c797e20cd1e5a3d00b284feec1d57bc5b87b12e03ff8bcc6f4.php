<?php

/* AppBundle:landing:page_profile.html.twig */
class __TwigTemplate_c5913d492d490f987ca218546a3f37ab9d7eef9a9e3f10191ac526d036ed90c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:landing:page_profile.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16cb7b59a486da6cab1300c2a0f310747227d8f7b1a3dedc1ac1eca2b5c4c6e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16cb7b59a486da6cab1300c2a0f310747227d8f7b1a3dedc1ac1eca2b5c4c6e6->enter($__internal_16cb7b59a486da6cab1300c2a0f310747227d8f7b1a3dedc1ac1eca2b5c4c6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:landing:page_profile.html.twig"));

        $__internal_9ed922da96462f32ec4867e5d4792773c4651fa157110bda279a8b427e1a9343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed922da96462f32ec4867e5d4792773c4651fa157110bda279a8b427e1a9343->enter($__internal_9ed922da96462f32ec4867e5d4792773c4651fa157110bda279a8b427e1a9343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:landing:page_profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16cb7b59a486da6cab1300c2a0f310747227d8f7b1a3dedc1ac1eca2b5c4c6e6->leave($__internal_16cb7b59a486da6cab1300c2a0f310747227d8f7b1a3dedc1ac1eca2b5c4c6e6_prof);

        
        $__internal_9ed922da96462f32ec4867e5d4792773c4651fa157110bda279a8b427e1a9343->leave($__internal_9ed922da96462f32ec4867e5d4792773c4651fa157110bda279a8b427e1a9343_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1f47ce169ff504222368e102fba824fbe614d8b85e9fd63ca6b405202bf4fc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1f47ce169ff504222368e102fba824fbe614d8b85e9fd63ca6b405202bf4fc2->enter($__internal_d1f47ce169ff504222368e102fba824fbe614d8b85e9fd63ca6b405202bf4fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_afb4bf58942c41b227aef5e3d2f84d42653ebcc14ca274d2f8d6925a02d84dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afb4bf58942c41b227aef5e3d2f84d42653ebcc14ca274d2f8d6925a02d84dc3->enter($__internal_afb4bf58942c41b227aef5e3d2f84d42653ebcc14ca274d2f8d6925a02d84dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["organisation"]) || array_key_exists("organisation", $context) ? $context["organisation"] : (function () { throw new Twig_Error_Runtime('Variable "organisation" does not exist.', 3, $this->getSourceContext()); })()), "organisationName", array()), "html", null, true);
        
        $__internal_afb4bf58942c41b227aef5e3d2f84d42653ebcc14ca274d2f8d6925a02d84dc3->leave($__internal_afb4bf58942c41b227aef5e3d2f84d42653ebcc14ca274d2f8d6925a02d84dc3_prof);

        
        $__internal_d1f47ce169ff504222368e102fba824fbe614d8b85e9fd63ca6b405202bf4fc2->leave($__internal_d1f47ce169ff504222368e102fba824fbe614d8b85e9fd63ca6b405202bf4fc2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_72346e71f26795cea998d572c4c127530bb9de21a2c6a47e3d79a63bdb0275ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72346e71f26795cea998d572c4c127530bb9de21a2c6a47e3d79a63bdb0275ac->enter($__internal_72346e71f26795cea998d572c4c127530bb9de21a2c6a47e3d79a63bdb0275ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_873c8d2453d684a684f1886abfcc0b8c2804df85e9532854ba349f096571c254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_873c8d2453d684a684f1886abfcc0b8c2804df85e9532854ba349f096571c254->enter($__internal_873c8d2453d684a684f1886abfcc0b8c2804df85e9532854ba349f096571c254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  ";
        $this->loadTemplate("AppBundle:landing:navbar.html.twig", "AppBundle:landing:page_profile.html.twig", 6)->display($context);
        // line 7
        echo "
  ";
        // line 9
        echo "  ";
        $this->loadTemplate("AppBundle:profile:profile_header.html.twig", "AppBundle:landing:page_profile.html.twig", 9)->display($context);
        // line 10
        echo "
  <div class=\"container\">
    <div class=\"row\">
      <h2 class=\"light\">Latest Posts</h2>
    </div>

    <div class=\"row\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["organisation"]) || array_key_exists("organisation", $context) ? $context["organisation"] : (function () { throw new Twig_Error_Runtime('Variable "organisation" does not exist.', 17, $this->getSourceContext()); })()), "posts", array())));
        $context['_iterated'] = false;
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
            // line 18
            echo "
          ";
            // line 19
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "reconciled", array())) {
                // line 20
                echo "          <div class=\"col s12\">

            ";
                // line 22
                $this->loadTemplate("AppBundle:profile:card_compound_profile.html.twig", "AppBundle:landing:page_profile.html.twig", 22)->display($context);
                // line 23
                echo "
          </div>
          ";
            }
            // line 26
            echo "          ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 27
            echo "              <p class=\"light\">
                Looks that this organisation hasn't posted yet!
              </p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
        ";
        // line 33
        echo "
    </div>
  </div>

";
        
        $__internal_873c8d2453d684a684f1886abfcc0b8c2804df85e9532854ba349f096571c254->leave($__internal_873c8d2453d684a684f1886abfcc0b8c2804df85e9532854ba349f096571c254_prof);

        
        $__internal_72346e71f26795cea998d572c4c127530bb9de21a2c6a47e3d79a63bdb0275ac->leave($__internal_72346e71f26795cea998d572c4c127530bb9de21a2c6a47e3d79a63bdb0275ac_prof);

    }

    // line 38
    public function block_script($context, array $blocks = array())
    {
        $__internal_e8fb9a3aad44ea7622e720de165b99f607579acff2087d5c377fd63984f0e920 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8fb9a3aad44ea7622e720de165b99f607579acff2087d5c377fd63984f0e920->enter($__internal_e8fb9a3aad44ea7622e720de165b99f607579acff2087d5c377fd63984f0e920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_c002162585c6b867694488d491a3158266b26616df9d8e61fde4ef88c74e3fa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c002162585c6b867694488d491a3158266b26616df9d8e61fde4ef88c74e3fa4->enter($__internal_c002162585c6b867694488d491a3158266b26616df9d8e61fde4ef88c74e3fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 39
        echo "  <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/profile-maps.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_c002162585c6b867694488d491a3158266b26616df9d8e61fde4ef88c74e3fa4->leave($__internal_c002162585c6b867694488d491a3158266b26616df9d8e61fde4ef88c74e3fa4_prof);

        
        $__internal_e8fb9a3aad44ea7622e720de165b99f607579acff2087d5c377fd63984f0e920->leave($__internal_e8fb9a3aad44ea7622e720de165b99f607579acff2087d5c377fd63984f0e920_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:landing:page_profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 39,  160 => 38,  146 => 33,  143 => 31,  134 => 27,  121 => 26,  116 => 23,  114 => 22,  110 => 20,  108 => 19,  105 => 18,  87 => 17,  78 => 10,  75 => 9,  72 => 7,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::base.html.twig' %}

{% block title %}{{organisation.organisationName}}{% endblock title %}

{% block body %}
  {% include 'AppBundle:landing:navbar.html.twig' %}

  {# Profile Info #}
  {% include 'AppBundle:profile:profile_header.html.twig'  %}

  <div class=\"container\">
    <div class=\"row\">
      <h2 class=\"light\">Latest Posts</h2>
    </div>

    <div class=\"row\">
        {% for post in organisation.posts|reverse %}

          {% if post.reconciled %}
          <div class=\"col s12\">

            {% include 'AppBundle:profile:card_compound_profile.html.twig'  %}

          </div>
          {% endif %}
          {% else %}
              <p class=\"light\">
                Looks that this organisation hasn't posted yet!
              </p>
        {% endfor %}

        {# Mock cards #}

    </div>
  </div>

{% endblock body %}
{% block script %}
  <script type=\"text/javascript\" src=\"{{asset('js/profile-maps.js')}}\"></script>
{% endblock script %}
", "AppBundle:landing:page_profile.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/landing/page_profile.html.twig");
    }
}
