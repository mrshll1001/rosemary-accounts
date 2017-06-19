<?php

/* AppBundle:landing/component:card_user_list.html.twig */
class __TwigTemplate_8655a9e597b67a9e7cb162146cbf038d21cb6081103bd0a55e73e55a334569bb extends Twig_Template
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
        $__internal_f4cc59a425edab9048fef5d83c551a763b065ec012d91a48ad73dc71ed08f70c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4cc59a425edab9048fef5d83c551a763b065ec012d91a48ad73dc71ed08f70c->enter($__internal_f4cc59a425edab9048fef5d83c551a763b065ec012d91a48ad73dc71ed08f70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:landing/component:card_user_list.html.twig"));

        $__internal_f699f28c1499adfc81c08b83472903559d98eaa97851b707726d63505a36e092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f699f28c1499adfc81c08b83472903559d98eaa97851b707726d63505a36e092->enter($__internal_f699f28c1499adfc81c08b83472903559d98eaa97851b707726d63505a36e092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:landing/component:card_user_list.html.twig"));

        // line 1
        echo "<div class=\"card\">
  <div class=\"card-content\">
    <span class=\"card-title\">";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["org"]) || array_key_exists("org", $context) ? $context["org"] : (function () { throw new Twig_Error_Runtime('Variable "org" does not exist.', 3, $this->getSourceContext()); })()), "organisationName", array()), "html", null, true);
        echo "</span>

    <p class=\"light\">
        ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["org"]) || array_key_exists("org", $context) ? $context["org"] : (function () { throw new Twig_Error_Runtime('Variable "org" does not exist.', 6, $this->getSourceContext()); })()), "organisationDescription", array()), "html", null, true);
        echo "
    </p>

  </div>

  <div class=\"card-action\">
    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_profile", array("username" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["org"]) || array_key_exists("org", $context) ? $context["org"] : (function () { throw new Twig_Error_Runtime('Variable "org" does not exist.', 12, $this->getSourceContext()); })()), "username", array()))), "html", null, true);
        echo "\">View Profile</a>
  </div>
</div>
";
        
        $__internal_f4cc59a425edab9048fef5d83c551a763b065ec012d91a48ad73dc71ed08f70c->leave($__internal_f4cc59a425edab9048fef5d83c551a763b065ec012d91a48ad73dc71ed08f70c_prof);

        
        $__internal_f699f28c1499adfc81c08b83472903559d98eaa97851b707726d63505a36e092->leave($__internal_f699f28c1499adfc81c08b83472903559d98eaa97851b707726d63505a36e092_prof);

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
        return array (  44 => 12,  35 => 6,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"card\">
  <div class=\"card-content\">
    <span class=\"card-title\">{{org.organisationName}}</span>

    <p class=\"light\">
        {{org.organisationDescription}}
    </p>

  </div>

  <div class=\"card-action\">
    <a href=\"{{ path('social_profile', {'username':org.username}) }}\">View Profile</a>
  </div>
</div>
", "AppBundle:landing/component:card_user_list.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/landing/component/card_user_list.html.twig");
    }
}
