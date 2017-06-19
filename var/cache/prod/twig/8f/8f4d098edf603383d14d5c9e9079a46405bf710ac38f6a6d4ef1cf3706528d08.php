<?php

/* AppBundle:landing:navbar.html.twig */
class __TwigTemplate_f2d73168d57ac7af819efcaca89b09931c037e9bdafeff50941ef13ed1734a2e extends Twig_Template
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
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array())) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("landing_features");
            echo "\">Features & Pricing</a></li>
        <li><a href=\"";
            // line 12
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
        // line 23
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
        return "AppBundle:landing:navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 23,  58 => 19,  52 => 15,  47 => 13,  43 => 12,  38 => 11,  36 => 10,  32 => 8,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:landing:navbar.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/landing/navbar.html.twig");
    }
}
