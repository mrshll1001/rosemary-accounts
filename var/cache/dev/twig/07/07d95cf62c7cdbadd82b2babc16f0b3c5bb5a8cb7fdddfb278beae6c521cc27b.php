<?php

/* AppBundle:profile:card_incoming.html.twig */
class __TwigTemplate_c6d0f006c08a510250f0750d2f8776904349e600ec96ff237445642aa8b8c4b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:profile:card_compound_user.html.twig", "AppBundle:profile:card_incoming.html.twig", 1);
        $this->blocks = array(
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:profile:card_compound_user.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f5fcc0369ff67070db3f982e4243d856ee37f7fba7df748ddbcce7378c994a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f5fcc0369ff67070db3f982e4243d856ee37f7fba7df748ddbcce7378c994a9->enter($__internal_9f5fcc0369ff67070db3f982e4243d856ee37f7fba7df748ddbcce7378c994a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:profile:card_incoming.html.twig"));

        $__internal_95519b00c47424e97ab3992da5cab4b08d68eeac9d698c33869a7534bb4e9aa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95519b00c47424e97ab3992da5cab4b08d68eeac9d698c33869a7534bb4e9aa3->enter($__internal_95519b00c47424e97ab3992da5cab4b08d68eeac9d698c33869a7534bb4e9aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:profile:card_incoming.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f5fcc0369ff67070db3f982e4243d856ee37f7fba7df748ddbcce7378c994a9->leave($__internal_9f5fcc0369ff67070db3f982e4243d856ee37f7fba7df748ddbcce7378c994a9_prof);

        
        $__internal_95519b00c47424e97ab3992da5cab4b08d68eeac9d698c33869a7534bb4e9aa3->leave($__internal_95519b00c47424e97ab3992da5cab4b08d68eeac9d698c33869a7534bb4e9aa3_prof);

    }

    // line 3
    public function block_form($context, array $blocks = array())
    {
        $__internal_766da50f811ae0315f8de05953abf804c0bbb5c55f72973afb0a98c42c80608a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_766da50f811ae0315f8de05953abf804c0bbb5c55f72973afb0a98c42c80608a->enter($__internal_766da50f811ae0315f8de05953abf804c0bbb5c55f72973afb0a98c42c80608a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_853bfec613e08f4bd6a036ceaf6916ec6a83f307dca002b6907b8bbec7f32e06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_853bfec613e08f4bd6a036ceaf6916ec6a83f307dca002b6907b8bbec7f32e06->enter($__internal_853bfec613e08f4bd6a036ceaf6916ec6a83f307dca002b6907b8bbec7f32e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 4
        echo "<div class=\"card-action\">
    <a class=\"waves-effect waves-light btn green\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("approve_post", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 5, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\"><i class=\"material-icons right\">done</i>Approve</a>

    <a class=\"waves-effect waves-light btn orange\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("edit_post_page", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 7, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" ><i class=\"material-icons right\">edit</i>Edit</a>

    <a class=\"waves-effect waves-light btn red\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("remove_post", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 9, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\"><i class=\"material-icons right\">clear</i>Remove</a>
</div>
";
        
        $__internal_853bfec613e08f4bd6a036ceaf6916ec6a83f307dca002b6907b8bbec7f32e06->leave($__internal_853bfec613e08f4bd6a036ceaf6916ec6a83f307dca002b6907b8bbec7f32e06_prof);

        
        $__internal_766da50f811ae0315f8de05953abf804c0bbb5c55f72973afb0a98c42c80608a->leave($__internal_766da50f811ae0315f8de05953abf804c0bbb5c55f72973afb0a98c42c80608a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:profile:card_incoming.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 9,  57 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle:profile:card_compound_user.html.twig' %}

{% block form %}
<div class=\"card-action\">
    <a class=\"waves-effect waves-light btn green\" href=\"{{url('approve_post', {'id': post.id})}}\"><i class=\"material-icons right\">done</i>Approve</a>

    <a class=\"waves-effect waves-light btn orange\" href=\"{{url('edit_post_page', {'id':post.id})}}\" ><i class=\"material-icons right\">edit</i>Edit</a>

    <a class=\"waves-effect waves-light btn red\" href=\"{{url('remove_post', {'id':post.id}) }}\"><i class=\"material-icons right\">clear</i>Remove</a>
</div>
{% endblock form %}
", "AppBundle:profile:card_incoming.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/profile/card_incoming.html.twig");
    }
}
