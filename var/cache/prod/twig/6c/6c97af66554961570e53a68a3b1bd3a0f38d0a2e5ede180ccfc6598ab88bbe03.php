<?php

/* AppBundle:landing/component:card_user_list.html.twig */
class __TwigTemplate_7d7b00c20c220c6838c2952819b86ed50c4d4dff329faaf13818241b1ba19669 extends Twig_Template
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
        echo "<div class=\"card\">
  <div class=\"card-content\">
    <span class=\"card-title\">";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["org"] ?? null), "organisationName", array()), "html", null, true);
        echo "</span>

    <p class=\"light\">
        ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["org"] ?? null), "organisationDescription", array()), "html", null, true);
        echo "
    </p>

  </div>

  <div class=\"card-action\">
    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_profile", array("username" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["org"] ?? null), "username", array()))), "html", null, true);
        echo "\">View Profile</a>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:landing/component:card_user_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  29 => 6,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:landing/component:card_user_list.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/landing/component/card_user_list.html.twig");
    }
}
