<?php

/* AppBundle:user/component/nav:user_actions.html.twig */
class __TwigTemplate_20ff6ab05306259e2102dca5773a8549d6184e415002d92538136414b47200e3 extends Twig_Template
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
        $__internal_f59c95add125b169f2aa64c323a11ccb1d5be5ef35fb78896322dc9cdadadbdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f59c95add125b169f2aa64c323a11ccb1d5be5ef35fb78896322dc9cdadadbdf->enter($__internal_f59c95add125b169f2aa64c323a11ccb1d5be5ef35fb78896322dc9cdadadbdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user/component/nav:user_actions.html.twig"));

        $__internal_d558342df9b78c90d95474b515dd6ce9853f98e60f2c773905d1a5ed7717ce67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d558342df9b78c90d95474b515dd6ce9853f98e60f2c773905d1a5ed7717ce67->enter($__internal_d558342df9b78c90d95474b515dd6ce9853f98e60f2c773905d1a5ed7717ce67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user/component/nav:user_actions.html.twig"));

        // line 1
        echo "<li><a target=\"_blank\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_profile", array("username" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->getSourceContext()); })()), "user", array()), "username", array()))), "html", null, true);
        echo "\"><i class=\"material-icons left\">account_circle</i>View Profile</a></li>
<li class=\"divider\"></li>
<li><a href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\"><i class=\"material-icons left\">exit_to_app</i>Logout</a></li>
";
        
        $__internal_f59c95add125b169f2aa64c323a11ccb1d5be5ef35fb78896322dc9cdadadbdf->leave($__internal_f59c95add125b169f2aa64c323a11ccb1d5be5ef35fb78896322dc9cdadadbdf_prof);

        
        $__internal_d558342df9b78c90d95474b515dd6ce9853f98e60f2c773905d1a5ed7717ce67->leave($__internal_d558342df9b78c90d95474b515dd6ce9853f98e60f2c773905d1a5ed7717ce67_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:user/component/nav:user_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li><a target=\"_blank\" href=\"{{path('social_profile', {'username': app.user.username})}}\"><i class=\"material-icons left\">account_circle</i>View Profile</a></li>
<li class=\"divider\"></li>
<li><a href=\"{{path('logout')}}\"><i class=\"material-icons left\">exit_to_app</i>Logout</a></li>
", "AppBundle:user/component/nav:user_actions.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/user/component/nav/user_actions.html.twig");
    }
}
