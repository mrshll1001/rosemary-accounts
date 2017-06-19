<?php

/* AppBundle:profile:card_my-posts.html.twig */
class __TwigTemplate_43fec109d4689a02f6ac21ce50ed995cdc97c1bcc756a92158349659960f1a29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:profile:card_compound_user.html.twig", "AppBundle:profile:card_my-posts.html.twig", 1);
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
        $__internal_73fe30122e2288a30698c82eac943524c5c51fbc8ec59d1c39ee01553f65d3fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73fe30122e2288a30698c82eac943524c5c51fbc8ec59d1c39ee01553f65d3fb->enter($__internal_73fe30122e2288a30698c82eac943524c5c51fbc8ec59d1c39ee01553f65d3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:profile:card_my-posts.html.twig"));

        $__internal_9ce59af5e5829fff9fbbddcbfcafb4e8edb41bf87312182589bc915501f65bde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ce59af5e5829fff9fbbddcbfcafb4e8edb41bf87312182589bc915501f65bde->enter($__internal_9ce59af5e5829fff9fbbddcbfcafb4e8edb41bf87312182589bc915501f65bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:profile:card_my-posts.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73fe30122e2288a30698c82eac943524c5c51fbc8ec59d1c39ee01553f65d3fb->leave($__internal_73fe30122e2288a30698c82eac943524c5c51fbc8ec59d1c39ee01553f65d3fb_prof);

        
        $__internal_9ce59af5e5829fff9fbbddcbfcafb4e8edb41bf87312182589bc915501f65bde->leave($__internal_9ce59af5e5829fff9fbbddcbfcafb4e8edb41bf87312182589bc915501f65bde_prof);

    }

    // line 3
    public function block_form($context, array $blocks = array())
    {
        $__internal_3642a3f4bdd92a16dd16744d960a01322b99c91c3e58016f2f4bda7631c1090b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3642a3f4bdd92a16dd16744d960a01322b99c91c3e58016f2f4bda7631c1090b->enter($__internal_3642a3f4bdd92a16dd16744d960a01322b99c91c3e58016f2f4bda7631c1090b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_6bd895736c21a4c28354d06511cbf5ef3c50568a2f72397c33e66cd086b42060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd895736c21a4c28354d06511cbf5ef3c50568a2f72397c33e66cd086b42060->enter($__internal_6bd895736c21a4c28354d06511cbf5ef3c50568a2f72397c33e66cd086b42060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 4
        echo "<div class=\"card-action\">
    <a class=\"waves-effect waves-light btn orange\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("edit_post_page", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 5, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" ><i class=\"material-icons right\">edit</i>Edit</a>

    <a class=\"waves-effect waves-light btn red\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("remove_post", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 7, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\"><i class=\"material-icons right\">clear</i>Remove</a>
</div>
";
        
        $__internal_6bd895736c21a4c28354d06511cbf5ef3c50568a2f72397c33e66cd086b42060->leave($__internal_6bd895736c21a4c28354d06511cbf5ef3c50568a2f72397c33e66cd086b42060_prof);

        
        $__internal_3642a3f4bdd92a16dd16744d960a01322b99c91c3e58016f2f4bda7631c1090b->leave($__internal_3642a3f4bdd92a16dd16744d960a01322b99c91c3e58016f2f4bda7631c1090b_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:profile:card_my-posts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle:profile:card_compound_user.html.twig' %}

{% block form %}
<div class=\"card-action\">
    <a class=\"waves-effect waves-light btn orange\" href=\"{{url('edit_post_page', {'id':post.id})}}\" ><i class=\"material-icons right\">edit</i>Edit</a>

    <a class=\"waves-effect waves-light btn red\" href=\"{{url('remove_post', {'id':post.id}) }}\"><i class=\"material-icons right\">clear</i>Remove</a>
</div>
{% endblock form %}
", "AppBundle:profile:card_my-posts.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/profile/card_my-posts.html.twig");
    }
}
