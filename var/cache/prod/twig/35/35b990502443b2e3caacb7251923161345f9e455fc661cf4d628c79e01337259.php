<?php

/* AppBundle:profile:card_organisation_badge.html.twig */
class __TwigTemplate_3e3698f6b9854c6fefd7d8c786a74fcbec45cda5202bb2206fce45330835fb1d extends Twig_Template
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["organisation"] ?? null), "organisationName", array()), "html", null, true);
        echo "</span>

    <p class=\"light\">
      ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["organisation"] ?? null), "organisationDescription", array()), "html", null, true);
        echo "
    </p>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:profile:card_organisation_badge.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:profile:card_organisation_badge.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/profile/card_organisation_badge.html.twig");
    }
}
