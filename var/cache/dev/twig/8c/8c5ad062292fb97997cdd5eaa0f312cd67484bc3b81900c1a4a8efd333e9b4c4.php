<?php

/* AppBundle:profile:card_compound_profile.html.twig */
class __TwigTemplate_a20acadcc4ae2126ad48f8019f4055facb8998b6309810d623e97abecfbfacf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:profile:card_compound.html.twig", "AppBundle:profile:card_compound_profile.html.twig", 1);
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
        $__internal_3d72a8406018d80e42b38491e03831af5f09e9e6e4d8e1ca0994e74502f29514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d72a8406018d80e42b38491e03831af5f09e9e6e4d8e1ca0994e74502f29514->enter($__internal_3d72a8406018d80e42b38491e03831af5f09e9e6e4d8e1ca0994e74502f29514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:profile:card_compound_profile.html.twig"));

        $__internal_5699221c04df7fa7d2b540567429eea9c34da0894ad68fef88b856b6c12696aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5699221c04df7fa7d2b540567429eea9c34da0894ad68fef88b856b6c12696aa->enter($__internal_5699221c04df7fa7d2b540567429eea9c34da0894ad68fef88b856b6c12696aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:profile:card_compound_profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d72a8406018d80e42b38491e03831af5f09e9e6e4d8e1ca0994e74502f29514->leave($__internal_3d72a8406018d80e42b38491e03831af5f09e9e6e4d8e1ca0994e74502f29514_prof);

        
        $__internal_5699221c04df7fa7d2b540567429eea9c34da0894ad68fef88b856b6c12696aa->leave($__internal_5699221c04df7fa7d2b540567429eea9c34da0894ad68fef88b856b6c12696aa_prof);

    }

    // line 3
    public function block_tags($context, array $blocks = array())
    {
        $__internal_71f490617c9c5f975ded8901f615f12738bba46c499fc6081fdb1c2c057eb211 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71f490617c9c5f975ded8901f615f12738bba46c499fc6081fdb1c2c057eb211->enter($__internal_71f490617c9c5f975ded8901f615f12738bba46c499fc6081fdb1c2c057eb211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tags"));

        $__internal_231d2dcd3174ef09f2bd7a04e2b262dde8aab12ffd023a132e9ebcfcf027b75d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_231d2dcd3174ef09f2bd7a04e2b262dde8aab12ffd023a132e9ebcfcf027b75d->enter($__internal_231d2dcd3174ef09f2bd7a04e2b262dde8aab12ffd023a132e9ebcfcf027b75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tags"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_profile_tags_search", array("username" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["organisation"]) || array_key_exists("organisation", $context) ? $context["organisation"] : (function () { throw new Twig_Error_Runtime('Variable "organisation" does not exist.', 6, $this->getSourceContext()); })()), "username", array()), "tagstring" => twig_get_attribute($this->env, $this->getSourceContext(), $context["tag"], "name", array()))), "html", null, true);
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
        
        $__internal_231d2dcd3174ef09f2bd7a04e2b262dde8aab12ffd023a132e9ebcfcf027b75d->leave($__internal_231d2dcd3174ef09f2bd7a04e2b262dde8aab12ffd023a132e9ebcfcf027b75d_prof);

        
        $__internal_71f490617c9c5f975ded8901f615f12738bba46c499fc6081fdb1c2c057eb211->leave($__internal_71f490617c9c5f975ded8901f615f12738bba46c499fc6081fdb1c2c057eb211_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:profile:card_compound_profile.html.twig";
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
    <a class=\"grey-text text-darken-3\" href=\"{{path('social_profile_tags_search', { 'username': organisation.username, 'tagstring': tag.name } )}}\">{{tag.name}}</a>
  </div>
  {% else %}
  <p>
    This post has no tags!
  </p>
  {% endfor %}

{% endblock tags %}
", "AppBundle:profile:card_compound_profile.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/profile/card_compound_profile.html.twig");
    }
}
