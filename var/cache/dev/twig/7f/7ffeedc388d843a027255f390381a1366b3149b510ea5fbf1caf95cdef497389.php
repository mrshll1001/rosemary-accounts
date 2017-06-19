<?php

/* AppBundle:user/page:page_incoming-posts.html.twig */
class __TwigTemplate_69273c5b7abeb008b42ae1de1c48f38af208db2985aa938ba1ec7d02e625b5f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:user:control_panel.html.twig", "AppBundle:user/page:page_incoming-posts.html.twig", 1);
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
        $__internal_8081e3f37652975b93db1a38b2a6b662664c90966bdd7bb24e22154e3f75fa0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8081e3f37652975b93db1a38b2a6b662664c90966bdd7bb24e22154e3f75fa0f->enter($__internal_8081e3f37652975b93db1a38b2a6b662664c90966bdd7bb24e22154e3f75fa0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user/page:page_incoming-posts.html.twig"));

        $__internal_38f827ba00e622f28150ee9977a7fbde0f99dd71f984bd9104b73506d9163d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38f827ba00e622f28150ee9977a7fbde0f99dd71f984bd9104b73506d9163d10->enter($__internal_38f827ba00e622f28150ee9977a7fbde0f99dd71f984bd9104b73506d9163d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user/page:page_incoming-posts.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8081e3f37652975b93db1a38b2a6b662664c90966bdd7bb24e22154e3f75fa0f->leave($__internal_8081e3f37652975b93db1a38b2a6b662664c90966bdd7bb24e22154e3f75fa0f_prof);

        
        $__internal_38f827ba00e622f28150ee9977a7fbde0f99dd71f984bd9104b73506d9163d10->leave($__internal_38f827ba00e622f28150ee9977a7fbde0f99dd71f984bd9104b73506d9163d10_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_39b6cfbc95ca9c182059134ff5fbbb63efce421f7b26be2eb453013672178712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39b6cfbc95ca9c182059134ff5fbbb63efce421f7b26be2eb453013672178712->enter($__internal_39b6cfbc95ca9c182059134ff5fbbb63efce421f7b26be2eb453013672178712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c822cd324d1bb3b2ce6e7a0c8ab3daf357108225976758ef6ae1212be6c25968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c822cd324d1bb3b2ce6e7a0c8ab3daf357108225976758ef6ae1212be6c25968->enter($__internal_c822cd324d1bb3b2ce6e7a0c8ab3daf357108225976758ef6ae1212be6c25968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Incoming Posts";
        
        $__internal_c822cd324d1bb3b2ce6e7a0c8ab3daf357108225976758ef6ae1212be6c25968->leave($__internal_c822cd324d1bb3b2ce6e7a0c8ab3daf357108225976758ef6ae1212be6c25968_prof);

        
        $__internal_39b6cfbc95ca9c182059134ff5fbbb63efce421f7b26be2eb453013672178712->leave($__internal_39b6cfbc95ca9c182059134ff5fbbb63efce421f7b26be2eb453013672178712_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_dd364c7bffd1a5514501985a65745589bbce66480567dd3eeaaea1fa98980e98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd364c7bffd1a5514501985a65745589bbce66480567dd3eeaaea1fa98980e98->enter($__internal_dd364c7bffd1a5514501985a65745589bbce66480567dd3eeaaea1fa98980e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9e5a989af21f8ca47489da9522b0686d5e85fa6d1e3b4c7d65beaced9d34a7e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e5a989af21f8ca47489da9522b0686d5e85fa6d1e3b4c7d65beaced9d34a7e2->enter($__internal_9e5a989af21f8ca47489da9522b0686d5e85fa6d1e3b4c7d65beaced9d34a7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
<div class=\"container\">
  <div class=\"row\">
    <h1 class=\"light\">Incoming Posts</h1>
  </div>

  <div class=\"row\">
    <div class=\"col s12 m12\">
      <p class=\"light\">
        If you and your team are <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("configure_apps");
        echo "\">using apps</a> to help you collect accounts information, this page is designed to help you make sense of this. Whenever you or your team use an app to upload accounts information or media, they will be stored here and won't be able to be seen by the public until you approve of them. This also means that they are not considered in any budget summaries or calculations made by Rosemary until you approve.
      </p>

      <p class=\"light\">
        All you need to do to approve of a post is to click <a href=\"#\" class=\"btn\">Approve</a>, and it gets added to your profile. Before approving, you have the opportunity to edit the post by changing details; you may want to add or remove tags, or add data to the post such as location.
      </p>

      <p class=\"light\">
        Alternatively, you can <a href=\"#\" class=\"btn red\">Remove</a> a post. When you do this, the post is removed from the system altogether. There can be several reasons to do this, but most of the time you will want to edit the post instead of deleting it.
      </p>
    </div>
  </div>

  <div class=\"row\">
    <h3 class=\"light\">";
        // line 29
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 29, $this->getSourceContext()); })())), "html", null, true);
        echo " posts to approve</h3>
  </div>


  <div class=\"row\">
    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 34, $this->getSourceContext()); })()));
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
            // line 35
            echo "
      <div class=\"col s12\">
        ";
            // line 37
            $this->loadTemplate("AppBundle:profile:card_incoming.html.twig", "AppBundle:user/page:page_incoming-posts.html.twig", 37)->display($context);
            // line 38
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
        // line 41
        echo "  </div>
</div>


";
        
        $__internal_9e5a989af21f8ca47489da9522b0686d5e85fa6d1e3b4c7d65beaced9d34a7e2->leave($__internal_9e5a989af21f8ca47489da9522b0686d5e85fa6d1e3b4c7d65beaced9d34a7e2_prof);

        
        $__internal_dd364c7bffd1a5514501985a65745589bbce66480567dd3eeaaea1fa98980e98->leave($__internal_dd364c7bffd1a5514501985a65745589bbce66480567dd3eeaaea1fa98980e98_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:user/page:page_incoming-posts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 41,  127 => 38,  125 => 37,  121 => 35,  104 => 34,  96 => 29,  79 => 15,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle:user:control_panel.html.twig' %}

{% block title %}Incoming Posts{% endblock %}

{% block content %}

<div class=\"container\">
  <div class=\"row\">
    <h1 class=\"light\">Incoming Posts</h1>
  </div>

  <div class=\"row\">
    <div class=\"col s12 m12\">
      <p class=\"light\">
        If you and your team are <a href=\"{{path('configure_apps')}}\">using apps</a> to help you collect accounts information, this page is designed to help you make sense of this. Whenever you or your team use an app to upload accounts information or media, they will be stored here and won't be able to be seen by the public until you approve of them. This also means that they are not considered in any budget summaries or calculations made by Rosemary until you approve.
      </p>

      <p class=\"light\">
        All you need to do to approve of a post is to click <a href=\"#\" class=\"btn\">Approve</a>, and it gets added to your profile. Before approving, you have the opportunity to edit the post by changing details; you may want to add or remove tags, or add data to the post such as location.
      </p>

      <p class=\"light\">
        Alternatively, you can <a href=\"#\" class=\"btn red\">Remove</a> a post. When you do this, the post is removed from the system altogether. There can be several reasons to do this, but most of the time you will want to edit the post instead of deleting it.
      </p>
    </div>
  </div>

  <div class=\"row\">
    <h3 class=\"light\">{{posts|length}} posts to approve</h3>
  </div>


  <div class=\"row\">
    {% for post in posts %}

      <div class=\"col s12\">
        {% include 'AppBundle:profile:card_incoming.html.twig' %}
      </div>

    {% endfor %}
  </div>
</div>


{% endblock %}
", "AppBundle:user/page:page_incoming-posts.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/user/page/page_incoming-posts.html.twig");
    }
}
