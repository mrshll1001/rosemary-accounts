<?php

/* AppBundle:landing:page_profile_where.html.twig */
class __TwigTemplate_e5a7021f09a1b0ed286b5e50d1c7154cad3afcc4eb9ef7c4b777c42b01b43c57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:landing:page_profile_where.html.twig", 1);
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
        $__internal_b70ac27e9c1c012047f56a65c0cf023e0c09b9b11416ea92134d31aff721279e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b70ac27e9c1c012047f56a65c0cf023e0c09b9b11416ea92134d31aff721279e->enter($__internal_b70ac27e9c1c012047f56a65c0cf023e0c09b9b11416ea92134d31aff721279e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:landing:page_profile_where.html.twig"));

        $__internal_36248a8976c8053e362d24130003ceae532d91bca0b18c7ebf84ecff5b0905a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36248a8976c8053e362d24130003ceae532d91bca0b18c7ebf84ecff5b0905a1->enter($__internal_36248a8976c8053e362d24130003ceae532d91bca0b18c7ebf84ecff5b0905a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:landing:page_profile_where.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b70ac27e9c1c012047f56a65c0cf023e0c09b9b11416ea92134d31aff721279e->leave($__internal_b70ac27e9c1c012047f56a65c0cf023e0c09b9b11416ea92134d31aff721279e_prof);

        
        $__internal_36248a8976c8053e362d24130003ceae532d91bca0b18c7ebf84ecff5b0905a1->leave($__internal_36248a8976c8053e362d24130003ceae532d91bca0b18c7ebf84ecff5b0905a1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc7a304ab56d55d60d3085562d873c2d6d4a3415466f11057a7e5f98977251d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc7a304ab56d55d60d3085562d873c2d6d4a3415466f11057a7e5f98977251d1->enter($__internal_bc7a304ab56d55d60d3085562d873c2d6d4a3415466f11057a7e5f98977251d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e61a5baeedeca8b120444115558c0a46a035b83ae323c82e3aff8a79799767c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e61a5baeedeca8b120444115558c0a46a035b83ae323c82e3aff8a79799767c6->enter($__internal_e61a5baeedeca8b120444115558c0a46a035b83ae323c82e3aff8a79799767c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["organisation"]) || array_key_exists("organisation", $context) ? $context["organisation"] : (function () { throw new Twig_Error_Runtime('Variable "organisation" does not exist.', 3, $this->getSourceContext()); })()), "organisationName", array()), "html", null, true);
        echo "'s Locations";
        
        $__internal_e61a5baeedeca8b120444115558c0a46a035b83ae323c82e3aff8a79799767c6->leave($__internal_e61a5baeedeca8b120444115558c0a46a035b83ae323c82e3aff8a79799767c6_prof);

        
        $__internal_bc7a304ab56d55d60d3085562d873c2d6d4a3415466f11057a7e5f98977251d1->leave($__internal_bc7a304ab56d55d60d3085562d873c2d6d4a3415466f11057a7e5f98977251d1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_28a0a3c2b8ebdd3a1949895752b0e14406b76c57a36ef57252ff792ddb4e1b99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28a0a3c2b8ebdd3a1949895752b0e14406b76c57a36ef57252ff792ddb4e1b99->enter($__internal_28a0a3c2b8ebdd3a1949895752b0e14406b76c57a36ef57252ff792ddb4e1b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0f46bbfc7e43f17a12efa813911a867349769452e893f250791e9f16e24895c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f46bbfc7e43f17a12efa813911a867349769452e893f250791e9f16e24895c0->enter($__internal_0f46bbfc7e43f17a12efa813911a867349769452e893f250791e9f16e24895c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  ";
        $this->loadTemplate("AppBundle:landing:navbar.html.twig", "AppBundle:landing:page_profile_where.html.twig", 6)->display($context);
        // line 7
        echo "
  ";
        // line 9
        echo "  ";
        $this->loadTemplate("AppBundle:profile:profile_header.html.twig", "AppBundle:landing:page_profile_where.html.twig", 9)->display($context);
        // line 10
        echo "
  <div class=\"container \">
    <div class=\"row\">
      <div class=\"col s12 center\">

          ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new Twig_Error_Runtime('Variable "events" does not exist.', 15, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 16
            echo "              <div class=\"location-marker\" data-latitude=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "locationLatitude", array()), "html", null, true);
            echo "\" data-longitude=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "locationLongitude", array()), "html", null, true);
            echo "\"></div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "          <div id=\"where-map\" class=\"multi-location-map\" style=\"width: 100%; height: 350px\"></div>

      </div>
    </div>

    <div class=\"row\">
      ";
        // line 25
        echo "      <h3 class=\"light\">Posts with Locations</h3>
    </div>

    <div class=\"row\">
      ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new Twig_Error_Runtime('Variable "events" does not exist.', 29, $this->getSourceContext()); })())));
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
            // line 30
            echo "      <div class=\"col s12 m6\">

        ";
            // line 32
            $this->loadTemplate("AppBundle:profile:card_compound.html.twig", "AppBundle:landing:page_profile_where.html.twig", 32)->display($context);
            // line 33
            echo "
      </div>

      ";
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
            // line 37
            echo "          <p class=\"center\">
            There doesn't appear to be any locations for this organisation!
          </p>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "    </div>
  </div>
";
        
        $__internal_0f46bbfc7e43f17a12efa813911a867349769452e893f250791e9f16e24895c0->leave($__internal_0f46bbfc7e43f17a12efa813911a867349769452e893f250791e9f16e24895c0_prof);

        
        $__internal_28a0a3c2b8ebdd3a1949895752b0e14406b76c57a36ef57252ff792ddb4e1b99->leave($__internal_28a0a3c2b8ebdd3a1949895752b0e14406b76c57a36ef57252ff792ddb4e1b99_prof);

    }

    // line 45
    public function block_script($context, array $blocks = array())
    {
        $__internal_8bdba55ed68c0e9df70e9bfe469217404793dafddc85b835c5ce50445ff8321c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bdba55ed68c0e9df70e9bfe469217404793dafddc85b835c5ce50445ff8321c->enter($__internal_8bdba55ed68c0e9df70e9bfe469217404793dafddc85b835c5ce50445ff8321c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_6114e1ad337bf1a82f0a7ddbf14c40f5a842d7f8f7338ae39ab3b8ba72cb9628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6114e1ad337bf1a82f0a7ddbf14c40f5a842d7f8f7338ae39ab3b8ba72cb9628->enter($__internal_6114e1ad337bf1a82f0a7ddbf14c40f5a842d7f8f7338ae39ab3b8ba72cb9628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 46
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/profile-maps.js"), "html", null, true);
        echo "\" ></script>
<script type=\"text/javascript\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/org-locations-map.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_6114e1ad337bf1a82f0a7ddbf14c40f5a842d7f8f7338ae39ab3b8ba72cb9628->leave($__internal_6114e1ad337bf1a82f0a7ddbf14c40f5a842d7f8f7338ae39ab3b8ba72cb9628_prof);

        
        $__internal_8bdba55ed68c0e9df70e9bfe469217404793dafddc85b835c5ce50445ff8321c->leave($__internal_8bdba55ed68c0e9df70e9bfe469217404793dafddc85b835c5ce50445ff8321c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:landing:page_profile_where.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 47,  185 => 46,  176 => 45,  164 => 41,  155 => 37,  139 => 33,  137 => 32,  133 => 30,  115 => 29,  109 => 25,  101 => 18,  90 => 16,  86 => 15,  79 => 10,  76 => 9,  73 => 7,  70 => 6,  61 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::base.html.twig' %}

{% block title %}{{organisation.organisationName}}'s Locations{% endblock %}

{% block body %}
  {% include 'AppBundle:landing:navbar.html.twig' %}

  {# Profile Info #}
  {% include 'AppBundle:profile:profile_header.html.twig'  %}

  <div class=\"container \">
    <div class=\"row\">
      <div class=\"col s12 center\">

          {% for post in events %}
              <div class=\"location-marker\" data-latitude=\"{{post.locationLatitude}}\" data-longitude=\"{{post.locationLongitude}}\"></div>
          {% endfor %}
          <div id=\"where-map\" class=\"multi-location-map\" style=\"width: 100%; height: 350px\"></div>

      </div>
    </div>

    <div class=\"row\">
      {# Posts with events #}
      <h3 class=\"light\">Posts with Locations</h3>
    </div>

    <div class=\"row\">
      {% for post in events|reverse %}
      <div class=\"col s12 m6\">

        {% include 'AppBundle:profile:card_compound.html.twig'  %}

      </div>

      {% else %}
          <p class=\"center\">
            There doesn't appear to be any locations for this organisation!
          </p>
      {% endfor %}
    </div>
  </div>
{% endblock body %}

{% block script %}
<script type=\"text/javascript\" src=\"{{asset('js/profile-maps.js')}}\" ></script>
<script type=\"text/javascript\" src=\"{{asset('js/org-locations-map.js')}}\"></script>

{% endblock script %}
", "AppBundle:landing:page_profile_where.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/landing/page_profile_where.html.twig");
    }
}
