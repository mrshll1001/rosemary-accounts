<?php

/* AppBundle:user/component:navbar.html.twig */
class __TwigTemplate_755f822157526b209104f1a2172e8776d30a9059c15eb65ce1fabdd6addf6aba extends Twig_Template
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
        $__internal_9ec0793bac7da5ad349b9842f13d527ea5f89502fe121d6d7b6f7813bbf705ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ec0793bac7da5ad349b9842f13d527ea5f89502fe121d6d7b6f7813bbf705ca->enter($__internal_9ec0793bac7da5ad349b9842f13d527ea5f89502fe121d6d7b6f7813bbf705ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user/component:navbar.html.twig"));

        $__internal_2fdfc921ed38950da1e6cd8b00d5ad83a4055797c731f1ec0031e4eb1cd10353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fdfc921ed38950da1e6cd8b00d5ad83a4055797c731f1ec0031e4eb1cd10353->enter($__internal_2fdfc921ed38950da1e6cd8b00d5ad83a4055797c731f1ec0031e4eb1cd10353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user/component:navbar.html.twig"));

        // line 1
        echo "
";
        // line 3
        echo "<ul id=\"dropdown-accounts\" class=\"dropdown-content\">
";
        // line 4
        $this->loadTemplate("AppBundle:user/component/nav:accounts_actions.html.twig", "AppBundle:user/component:navbar.html.twig", 4)->display($context);
        // line 5
        echo "</ul>


<ul id=\"dropdown-posts\" class=\"dropdown-content\">
";
        // line 9
        $this->loadTemplate("AppBundle:user/component/nav:posts_actions.html.twig", "AppBundle:user/component:navbar.html.twig", 9)->display($context);
        // line 10
        echo "
</ul>

<ul id=\"dropdown-settings\" class=\"dropdown-content\">
";
        // line 14
        $this->loadTemplate("AppBundle:user/component/nav:settings_actions.html.twig", "AppBundle:user/component:navbar.html.twig", 14)->display($context);
        // line 15
        echo "
</ul>

<ul id=\"dropdown-user\" class=\"dropdown-content\">
";
        // line 19
        $this->loadTemplate("AppBundle:user/component/nav:user_actions.html.twig", "AppBundle:user/component:navbar.html.twig", 19)->display($context);
        // line 20
        echo "
</ul>

<nav class=\"white\" role=\"navigation\">
  <div class=\"nav-wrapper container\">
    <a id=\"logo-container\" href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"brand-logo center\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icon.svg"), "html", null, true);
        echo "\" height=\"60em\" alt=\"hello\" /></a>

    ";
        // line 28
        echo "    <ul class=\"left hide-on-med-and-down\">

      <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown-accounts\"><i class=\"material-icons left\">account_balance_wallet</i>Accounts<i class=\"material-icons right\">arrow_drop_down</i></a></li>

      <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown-posts\"><i class=\"material-icons left\">description</i>Posts<i class=\"material-icons right\">arrow_drop_down</i></a></li>
    </ul>



    <ul class=\"right hide-on-med-and-down\">
      <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown-settings\"><i class=\"material-icons left\">settings</i>Settings<i class=\"material-icons right\">arrow_drop_down</i></a></li>

      <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown-user\"><i class=\"material-icons left\">account_box</i>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 40, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
        echo "<i class=\"material-icons right\">arrow_drop_down</i></a></li>

    </ul>


    ";
        // line 46
        echo "    <ul id=\"nav-mobile\" class=\"side-nav\">
      ";
        // line 47
        $this->loadTemplate("AppBundle:user/component/nav:accounts_actions.html.twig", "AppBundle:user/component:navbar.html.twig", 47)->display($context);
        // line 48
        echo "      <li class=\"divider\"></li>
      ";
        // line 49
        $this->loadTemplate("AppBundle:user/component/nav:posts_actions.html.twig", "AppBundle:user/component:navbar.html.twig", 49)->display($context);
        // line 50
        echo "      <li class=\"divider\"></li>
      ";
        // line 51
        $this->loadTemplate("AppBundle:user/component/nav:settings_actions.html.twig", "AppBundle:user/component:navbar.html.twig", 51)->display($context);
        // line 52
        echo "      <li class=\"divider\"></li>
      ";
        // line 53
        $this->loadTemplate("AppBundle:user/component/nav:user_actions.html.twig", "AppBundle:user/component:navbar.html.twig", 53)->display($context);
        // line 54
        echo "

    </ul>
    <a href=\"#\" data-activates=\"nav-mobile\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
  </div>
</nav>
";
        
        $__internal_9ec0793bac7da5ad349b9842f13d527ea5f89502fe121d6d7b6f7813bbf705ca->leave($__internal_9ec0793bac7da5ad349b9842f13d527ea5f89502fe121d6d7b6f7813bbf705ca_prof);

        
        $__internal_2fdfc921ed38950da1e6cd8b00d5ad83a4055797c731f1ec0031e4eb1cd10353->leave($__internal_2fdfc921ed38950da1e6cd8b00d5ad83a4055797c731f1ec0031e4eb1cd10353_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:user/component:navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 54,  111 => 53,  108 => 52,  106 => 51,  103 => 50,  101 => 49,  98 => 48,  96 => 47,  93 => 46,  85 => 40,  71 => 28,  64 => 25,  57 => 20,  55 => 19,  49 => 15,  47 => 14,  41 => 10,  39 => 9,  33 => 5,  31 => 4,  28 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{# Dropdowns #}
<ul id=\"dropdown-accounts\" class=\"dropdown-content\">
{% include 'AppBundle:user/component/nav:accounts_actions.html.twig' %}
</ul>


<ul id=\"dropdown-posts\" class=\"dropdown-content\">
{% include 'AppBundle:user/component/nav:posts_actions.html.twig' %}

</ul>

<ul id=\"dropdown-settings\" class=\"dropdown-content\">
{% include 'AppBundle:user/component/nav:settings_actions.html.twig' %}

</ul>

<ul id=\"dropdown-user\" class=\"dropdown-content\">
{% include 'AppBundle:user/component/nav:user_actions.html.twig' %}

</ul>

<nav class=\"white\" role=\"navigation\">
  <div class=\"nav-wrapper container\">
    <a id=\"logo-container\" href=\"{{path('index')}}\" class=\"brand-logo center\"><img src=\"{{asset(\"img/icon.svg\")}}\" height=\"60em\" alt=\"hello\" /></a>

    {# Displayed on web view, at the top of the page #}
    <ul class=\"left hide-on-med-and-down\">

      <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown-accounts\"><i class=\"material-icons left\">account_balance_wallet</i>Accounts<i class=\"material-icons right\">arrow_drop_down</i></a></li>

      <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown-posts\"><i class=\"material-icons left\">description</i>Posts<i class=\"material-icons right\">arrow_drop_down</i></a></li>
    </ul>



    <ul class=\"right hide-on-med-and-down\">
      <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown-settings\"><i class=\"material-icons left\">settings</i>Settings<i class=\"material-icons right\">arrow_drop_down</i></a></li>

      <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown-user\"><i class=\"material-icons left\">account_box</i>{{app.user.username}}<i class=\"material-icons right\">arrow_drop_down</i></a></li>

    </ul>


    {# Displayed on mobile view, in the side bar #}
    <ul id=\"nav-mobile\" class=\"side-nav\">
      {% include 'AppBundle:user/component/nav:accounts_actions.html.twig' %}
      <li class=\"divider\"></li>
      {% include 'AppBundle:user/component/nav:posts_actions.html.twig' %}
      <li class=\"divider\"></li>
      {% include 'AppBundle:user/component/nav:settings_actions.html.twig' %}
      <li class=\"divider\"></li>
      {% include 'AppBundle:user/component/nav:user_actions.html.twig' %}


    </ul>
    <a href=\"#\" data-activates=\"nav-mobile\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
  </div>
</nav>
", "AppBundle:user/component:navbar.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/user/component/navbar.html.twig");
    }
}
