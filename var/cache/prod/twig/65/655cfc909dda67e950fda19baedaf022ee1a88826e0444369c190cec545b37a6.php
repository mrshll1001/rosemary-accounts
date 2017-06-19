<?php

/* AppBundle:profile:card_post-master.html.twig */
class __TwigTemplate_46c24abb7202cac02a816c4bc33db4fc703eb16544d88bb9ab693626f2af5c98 extends Twig_Template
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
        // line 2
        echo "
<div class=\"card\">
  <div class=\"card-content\">

    ";
        // line 6
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "financialValue", array()))) {
            // line 7
            echo "      ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "financialValue", array()) < 0)) {
                // line 8
                echo "        ";
                $this->loadTemplate("AppBundle:profile:card_expense.html.twig", "AppBundle:profile:card_post-master.html.twig", 8)->display(array_merge($context, array("route" => "social_profile")));
                // line 9
                echo "      ";
            } else {
                // line 10
                echo "        ";
                $this->loadTemplate("AppBundle:profile:card_income.html.twig", "AppBundle:profile:card_post-master.html.twig", 10)->display($context);
                // line 11
                echo "      ";
            }
            // line 12
            echo "    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if (( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "reconciled", array()) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "user", array())))) {
            // line 15
            echo "      <div class=\"card-action\">
          <a class=\"waves-effect waves-light btn green\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("approve_post", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "id", array()))), "html", null, true);
            echo "\"><i class=\"material-icons right\">done</i>Approve</a>

          <a class=\"waves-effect waves-light btn orange\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("edit_post_page", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "id", array()))), "html", null, true);
            echo "\" ><i class=\"material-icons right\">edit</i>Edit</a>

          <a class=\"waves-effect waves-light btn red\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("remove_post", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "id", array()))), "html", null, true);
            echo "\"><i class=\"material-icons right\">clear</i>Remove</a>
      </div>
    ";
        }
        // line 23
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:profile:card_post-master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 23,  63 => 20,  58 => 18,  53 => 16,  50 => 15,  48 => 14,  45 => 13,  42 => 12,  39 => 11,  36 => 10,  33 => 9,  30 => 8,  27 => 7,  25 => 6,  19 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:profile:card_post-master.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/profile/card_post-master.html.twig");
    }
}
