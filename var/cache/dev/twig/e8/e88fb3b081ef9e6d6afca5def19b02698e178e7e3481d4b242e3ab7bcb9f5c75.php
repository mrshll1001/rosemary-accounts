<?php

/* AppBundle:landing:navbar.html.twig */
class __TwigTemplate_383f75b9758b1c87358fd9d98c447f08e346e300847c8c71102c8401f07165ab extends Twig_Template
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
        $__internal_37d3851fe94c69c961affad8652fd76255c7b75c2d80bee91d78a61850b84f3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37d3851fe94c69c961affad8652fd76255c7b75c2d80bee91d78a61850b84f3c->enter($__internal_37d3851fe94c69c961affad8652fd76255c7b75c2d80bee91d78a61850b84f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:landing:navbar.html.twig"));

        $__internal_2f054280cbcfeab803214c9fa982d553d30c6e2f4d539a2fdc9796f2f1f935fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f054280cbcfeab803214c9fa982d553d30c6e2f4d539a2fdc9796f2f1f935fd->enter($__internal_2f054280cbcfeab803214c9fa982d553d30c6e2f4d539a2fdc9796f2f1f935fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:landing:navbar.html.twig"));

        // line 1
        echo "<nav class=\"white\" role=\"navigation\">
  <div class=\"nav-wrapper container\">
    <a id=\"logo-container\" href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"brand-logo\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/test.svg"), "html", null, true);
        echo "\" alt=\"hello\" /></a>



    ";
        // line 8
        echo "    <ul class=\"right hide-on-med-and-down\">

      ";
        // line 10
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->getSourceContext()); })()), "user", array())) {
            // line 11
            echo "        ";
            // line 12
            echo "        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Login</a></li>
        <li><a href=\"";
            // line 13
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_registration");
            echo "\">Register</a></li>
      ";
        }
        // line 15
        echo "
    </ul>

    <ul class=\"right hide-on-med-and-down\">
      <li><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_organisations");
        echo "\">Organisations</a></li>

    </ul>

    ";
        // line 24
        echo "    <ul id=\"nav-mobile\" class=\"side-nav\">
      <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_organisations");
        echo "\">Organisations</a></li>
      ";
        // line 26
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 26, $this->getSourceContext()); })()), "user", array())) {
            // line 27
            echo "
        <li><a href=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Login</a></li>
        <li><a href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_registration");
            echo "\">Register</a></li>
      ";
        }
        // line 31
        echo "    </ul>
    <a href=\"#\" data-activates=\"nav-mobile\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
  </div>
</nav>
";
        
        $__internal_37d3851fe94c69c961affad8652fd76255c7b75c2d80bee91d78a61850b84f3c->leave($__internal_37d3851fe94c69c961affad8652fd76255c7b75c2d80bee91d78a61850b84f3c_prof);

        
        $__internal_2f054280cbcfeab803214c9fa982d553d30c6e2f4d539a2fdc9796f2f1f935fd->leave($__internal_2f054280cbcfeab803214c9fa982d553d30c6e2f4d539a2fdc9796f2f1f935fd_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:landing:navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 31,  85 => 29,  81 => 28,  78 => 27,  76 => 26,  72 => 25,  69 => 24,  62 => 19,  56 => 15,  51 => 13,  46 => 12,  44 => 11,  42 => 10,  38 => 8,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"white\" role=\"navigation\">
  <div class=\"nav-wrapper container\">
    <a id=\"logo-container\" href=\"{{path('index')}}\" class=\"brand-logo\"><img src=\"{{asset(\"img/test.svg\")}}\" alt=\"hello\" /></a>



    {# Displayed on web view, at the top of the page #}
    <ul class=\"right hide-on-med-and-down\">

      {% if not app.user %}
        {# <li><a href=\" \">Features & Pricing</a></li>#}
        <li><a href=\"{{path('login')}}\">Login</a></li>
        <li><a href=\"{{path('user_registration')}}\">Register</a></li>
      {% endif %}

    </ul>

    <ul class=\"right hide-on-med-and-down\">
      <li><a href=\"{{path('social_organisations')}}\">Organisations</a></li>

    </ul>

    {# Displayed on mobile view, in the side bar #}
    <ul id=\"nav-mobile\" class=\"side-nav\">
      <li><a href=\"{{path('social_organisations')}}\">Organisations</a></li>
      {% if not app.user %}

        <li><a href=\"{{path('login')}}\">Login</a></li>
        <li><a href=\"{{path('user_registration')}}\">Register</a></li>
      {% endif %}
    </ul>
    <a href=\"#\" data-activates=\"nav-mobile\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
  </div>
</nav>
", "AppBundle:landing:navbar.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/landing/navbar.html.twig");
    }
}
