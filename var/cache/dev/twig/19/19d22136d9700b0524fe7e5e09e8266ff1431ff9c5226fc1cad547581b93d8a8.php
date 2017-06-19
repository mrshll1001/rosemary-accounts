<?php

/* AppBundle:user/component/nav:posts_actions.html.twig */
class __TwigTemplate_96f3640ddbfa54916b6a88c412ce10e41c2554175760ffd54279e45fa66ae389 extends Twig_Template
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
        $__internal_24380f1290e70cdac0177cb32244d8386cd02c31e640ee6b168ba45d173a6998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24380f1290e70cdac0177cb32244d8386cd02c31e640ee6b168ba45d173a6998->enter($__internal_24380f1290e70cdac0177cb32244d8386cd02c31e640ee6b168ba45d173a6998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user/component/nav:posts_actions.html.twig"));

        $__internal_42287c13cfdea0ac367f8ae1dc5d792ea76ba0fa078f1273eeaba80de5c00927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42287c13cfdea0ac367f8ae1dc5d792ea76ba0fa078f1273eeaba80de5c00927->enter($__internal_42287c13cfdea0ac367f8ae1dc5d792ea76ba0fa078f1273eeaba80de5c00927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user/component/nav:posts_actions.html.twig"));

        // line 1
        echo "<li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_posts");
        echo "\"><i class=\"material-icons left\">description</i>My Posts</a></li>
<li class=\"divider\"></li>
<li><a href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_image_page");
        echo "\"><i class=\"material-icons left\">add_a_photo</i>Post an Image</a></li>
<li class=\"divider\"></li>
<li><a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_event_page");
        echo "\"><i class=\"material-icons left\">add_location</i>Post an Event</a></li>
<li class=\"divider\"></li>
<li><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("incoming_posts");
        echo "\"><i class=\"material-icons left\">sync</i>Sync App Posts</a></li>
";
        
        $__internal_24380f1290e70cdac0177cb32244d8386cd02c31e640ee6b168ba45d173a6998->leave($__internal_24380f1290e70cdac0177cb32244d8386cd02c31e640ee6b168ba45d173a6998_prof);

        
        $__internal_42287c13cfdea0ac367f8ae1dc5d792ea76ba0fa078f1273eeaba80de5c00927->leave($__internal_42287c13cfdea0ac367f8ae1dc5d792ea76ba0fa078f1273eeaba80de5c00927_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:user/component/nav:posts_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  36 => 5,  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li><a href=\"{{path('my_posts')}}\"><i class=\"material-icons left\">description</i>My Posts</a></li>
<li class=\"divider\"></li>
<li><a href=\"{{path('post_image_page')}}\"><i class=\"material-icons left\">add_a_photo</i>Post an Image</a></li>
<li class=\"divider\"></li>
<li><a href=\"{{path('post_event_page')}}\"><i class=\"material-icons left\">add_location</i>Post an Event</a></li>
<li class=\"divider\"></li>
<li><a href=\"{{path('incoming_posts')}}\"><i class=\"material-icons left\">sync</i>Sync App Posts</a></li>
", "AppBundle:user/component/nav:posts_actions.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/user/component/nav/posts_actions.html.twig");
    }
}
