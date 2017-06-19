<?php

/* AppBundle:user/component:navbar.html.twig */
class __TwigTemplate_b722396464c8c6123e0baffa8d6348a7a2415ed77d06ed02d6fb7895a8d49066 extends Twig_Template
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
        // line 1
        echo "
";
        // line 3
        echo "<ul id=\"dropdown-income\" class=\"dropdown-content\">
  <li><a  href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customers");
        echo "\">Customers and Funders</a> </li>
  <li><a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_invoice");
        echo "\">Add Income</a></li>
  <li class=\"divider\"></li>
  <li><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view_income");
        echo "\">View Income</a></li>
</ul>

<ul id=\"dropdown-expense\" class=\"dropdown-content\">
  <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("budget_codes");
        echo "\">Budget Codes</a> </li>
  <li><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_expense");
        echo "\">Add Expense</a></li>
    <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view_expense");
        echo "\">View Expenses</a></li>
</ul>

<ul id=\"dropdown-posts\" class=\"dropdown-content\">
  <li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("configure_apps");
        echo "\">Configure Apps</a></li>

  <li><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("incoming_posts");
        echo "\">Posts from Apps</a></li>

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

      <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown-income\">Income<i class=\"material-icons right\">arrow_drop_down</i></a></li>
      <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown-expense\">Expenses<i class=\"material-icons right\">arrow_drop_down</i></a></li>

    </ul>



    <ul class=\"right hide-on-med-and-down\">
      <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown-posts\">Apps and Posts<i class=\"material-icons right\">arrow_drop_down</i></a></li>
    </ul>

    <!-- <ul class=\"right hide-on-med-and-down\">
        <li><a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_organisations");
        echo "\">Organisations</a></li>
    </ul> -->

    ";
        // line 46
        echo "    <ul id=\"nav-mobile\" class=\"side-nav\">
      <li><a href=\"#\">World</a></li>
    </ul>
    <a href=\"#\" data-activates=\"nav-mobile\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
  </div>
</nav>
";
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
        return array (  99 => 46,  93 => 42,  77 => 28,  70 => 25,  61 => 19,  56 => 17,  49 => 13,  45 => 12,  41 => 11,  34 => 7,  29 => 5,  25 => 4,  22 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:user/component:navbar.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/user/component/navbar.html.twig");
    }
}
