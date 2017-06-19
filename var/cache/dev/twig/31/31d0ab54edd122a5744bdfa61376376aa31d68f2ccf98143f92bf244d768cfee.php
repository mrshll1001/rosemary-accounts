<?php

/* AppBundle:landing:organisation_list.html.twig */
class __TwigTemplate_53988516b70a727da070cbc7b4e82612db1a005cc1693f854a49ecd3972452cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:landing:organisation_list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_972c8235f8b3572bc3393b8f32f56744a3e37e7604f4616e48f3211fa2da4ce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_972c8235f8b3572bc3393b8f32f56744a3e37e7604f4616e48f3211fa2da4ce9->enter($__internal_972c8235f8b3572bc3393b8f32f56744a3e37e7604f4616e48f3211fa2da4ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:landing:organisation_list.html.twig"));

        $__internal_0c62e1766efd44c1f214b7482dff7f06d4eb27660fb00be103ae3ff81963c600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c62e1766efd44c1f214b7482dff7f06d4eb27660fb00be103ae3ff81963c600->enter($__internal_0c62e1766efd44c1f214b7482dff7f06d4eb27660fb00be103ae3ff81963c600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:landing:organisation_list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_972c8235f8b3572bc3393b8f32f56744a3e37e7604f4616e48f3211fa2da4ce9->leave($__internal_972c8235f8b3572bc3393b8f32f56744a3e37e7604f4616e48f3211fa2da4ce9_prof);

        
        $__internal_0c62e1766efd44c1f214b7482dff7f06d4eb27660fb00be103ae3ff81963c600->leave($__internal_0c62e1766efd44c1f214b7482dff7f06d4eb27660fb00be103ae3ff81963c600_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_40c8851528ce8796997ef93e682a1c5c9a9c7fad30ea333313d8650437816dad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40c8851528ce8796997ef93e682a1c5c9a9c7fad30ea333313d8650437816dad->enter($__internal_40c8851528ce8796997ef93e682a1c5c9a9c7fad30ea333313d8650437816dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2f4cc996b89060eaaaf068f4db0ecde1cc270f85f3e1e3120ec79fc31fbceeb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f4cc996b89060eaaaf068f4db0ecde1cc270f85f3e1e3120ec79fc31fbceeb5->enter($__internal_2f4cc996b89060eaaaf068f4db0ecde1cc270f85f3e1e3120ec79fc31fbceeb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Organisations";
        
        $__internal_2f4cc996b89060eaaaf068f4db0ecde1cc270f85f3e1e3120ec79fc31fbceeb5->leave($__internal_2f4cc996b89060eaaaf068f4db0ecde1cc270f85f3e1e3120ec79fc31fbceeb5_prof);

        
        $__internal_40c8851528ce8796997ef93e682a1c5c9a9c7fad30ea333313d8650437816dad->leave($__internal_40c8851528ce8796997ef93e682a1c5c9a9c7fad30ea333313d8650437816dad_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c4dbbb8126ed4870fd973fe636c85ef90e48ef4c3511b4e18a126d6580e434a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c4dbbb8126ed4870fd973fe636c85ef90e48ef4c3511b4e18a126d6580e434a->enter($__internal_8c4dbbb8126ed4870fd973fe636c85ef90e48ef4c3511b4e18a126d6580e434a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_24cc7296c7cf097cf5998f80180e50fa3a3a4fe921556c0d19a6fa613357e864 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24cc7296c7cf097cf5998f80180e50fa3a3a4fe921556c0d19a6fa613357e864->enter($__internal_24cc7296c7cf097cf5998f80180e50fa3a3a4fe921556c0d19a6fa613357e864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  ";
        // line 7
        $this->loadTemplate("AppBundle:landing:navbar.html.twig", "AppBundle:landing:organisation_list.html.twig", 7)->display($context);
        // line 8
        echo "
<div class=\"container\">
  <div class=\"row\">
    <h1 class=\"light\">List of Organisations</h1>
  </div>

  <div class=\"row\">
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orgs"]) || array_key_exists("orgs", $context) ? $context["orgs"] : (function () { throw new Twig_Error_Runtime('Variable "orgs" does not exist.', 15, $this->getSourceContext()); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["org"]) {
            // line 16
            echo "      <div class=\"col s12 m4\">
        ";
            // line 17
            $this->loadTemplate("AppBundle:landing/component:card_user_list.html.twig", "AppBundle:landing:organisation_list.html.twig", 17)->display($context);
            // line 18
            echo "      </div>
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
            // line 20
            echo "          <p class=\"light\">
            Oh my! It looks like it's early days and nobody's confirmed their account yet. Help us out by either <a href=\"";
            // line 21
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("user_registration");
            echo "\">creating an account</a> or, if you already have one, <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("login");
            echo "\">logging in</a> to verify it.
          </p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['org'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "  </div>

</div>

";
        
        $__internal_24cc7296c7cf097cf5998f80180e50fa3a3a4fe921556c0d19a6fa613357e864->leave($__internal_24cc7296c7cf097cf5998f80180e50fa3a3a4fe921556c0d19a6fa613357e864_prof);

        
        $__internal_8c4dbbb8126ed4870fd973fe636c85ef90e48ef4c3511b4e18a126d6580e434a->leave($__internal_8c4dbbb8126ed4870fd973fe636c85ef90e48ef4c3511b4e18a126d6580e434a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:landing:organisation_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 24,  122 => 21,  119 => 20,  105 => 18,  103 => 17,  100 => 16,  82 => 15,  73 => 8,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::base.html.twig' %}

{% block title %}Organisations{% endblock title %}

{% block body %}

  {% include 'AppBundle:landing:navbar.html.twig' %}

<div class=\"container\">
  <div class=\"row\">
    <h1 class=\"light\">List of Organisations</h1>
  </div>

  <div class=\"row\">
    {% for org in orgs %}
      <div class=\"col s12 m4\">
        {% include 'AppBundle:landing/component:card_user_list.html.twig' %}
      </div>
      {% else %}
          <p class=\"light\">
            Oh my! It looks like it's early days and nobody's confirmed their account yet. Help us out by either <a href=\"{{url('user_registration')}}\">creating an account</a> or, if you already have one, <a href=\"{{url('login')}}\">logging in</a> to verify it.
          </p>
    {% endfor %}
  </div>

</div>

{% endblock body %}
", "AppBundle:landing:organisation_list.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/landing/organisation_list.html.twig");
    }
}
