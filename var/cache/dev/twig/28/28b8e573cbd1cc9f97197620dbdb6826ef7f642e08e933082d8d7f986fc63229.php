<?php

/* AppBundle:user/component/nav:settings_actions.html.twig */
class __TwigTemplate_b72b9211318906fd111fea83135de6fd921acdae0409a243a5ef74385bc793b6 extends Twig_Template
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
        $__internal_ff9218b954c382225780b4ddf9b1dc8ca2ca14e26dcd96e4dcf6911d905ec505 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff9218b954c382225780b4ddf9b1dc8ca2ca14e26dcd96e4dcf6911d905ec505->enter($__internal_ff9218b954c382225780b4ddf9b1dc8ca2ca14e26dcd96e4dcf6911d905ec505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user/component/nav:settings_actions.html.twig"));

        $__internal_4d94324a61016d04b35db86bde2e40ca58659487e870ee6982de0216ac998bdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d94324a61016d04b35db86bde2e40ca58659487e870ee6982de0216ac998bdd->enter($__internal_4d94324a61016d04b35db86bde2e40ca58659487e870ee6982de0216ac998bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user/component/nav:settings_actions.html.twig"));

        // line 1
        echo "  <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("configure_apps");
        echo "\"><i class=\"material-icons left\">important_devices</i>Configure Apps</a></li>
";
        
        $__internal_ff9218b954c382225780b4ddf9b1dc8ca2ca14e26dcd96e4dcf6911d905ec505->leave($__internal_ff9218b954c382225780b4ddf9b1dc8ca2ca14e26dcd96e4dcf6911d905ec505_prof);

        
        $__internal_4d94324a61016d04b35db86bde2e40ca58659487e870ee6982de0216ac998bdd->leave($__internal_4d94324a61016d04b35db86bde2e40ca58659487e870ee6982de0216ac998bdd_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:user/component/nav:settings_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("  <li><a href=\"{{path('configure_apps')}}\"><i class=\"material-icons left\">important_devices</i>Configure Apps</a></li>
", "AppBundle:user/component/nav:settings_actions.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/user/component/nav/settings_actions.html.twig");
    }
}
