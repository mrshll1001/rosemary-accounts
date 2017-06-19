<?php

/* AppBundle:profile:card_summary.html.twig */
class __TwigTemplate_1d13c3b643d1eeb4245255822dfcc3cecfeaa4f8f5951ed97673825b98bd72c4 extends Twig_Template
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
        $__internal_99ecf31b6782502ce3325615566a49a0992c44a917784b517161360909dd72a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99ecf31b6782502ce3325615566a49a0992c44a917784b517161360909dd72a9->enter($__internal_99ecf31b6782502ce3325615566a49a0992c44a917784b517161360909dd72a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:profile:card_summary.html.twig"));

        $__internal_6ebb9017132d626cde315fc926b46255be4b24fda3eaaaf30a619e0aadd406c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ebb9017132d626cde315fc926b46255be4b24fda3eaaaf30a619e0aadd406c5->enter($__internal_6ebb9017132d626cde315fc926b46255be4b24fda3eaaaf30a619e0aadd406c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:profile:card_summary.html.twig"));

        // line 1
        echo "<div class=\"card grey-text text-darken-2\">
  <div class=\"card-content\">
    <p>
      ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["summary"]) || array_key_exists("summary", $context) ? $context["summary"] : (function () { throw new Twig_Error_Runtime('Variable "summary" does not exist.', 4, $this->getSourceContext()); })()), "post_types", array()), "total", array()), "html", null, true);
        echo " Posts
      ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["summary"]) || array_key_exists("summary", $context) ? $context["summary"] : (function () { throw new Twig_Error_Runtime('Variable "summary" does not exist.', 5, $this->getSourceContext()); })()), "post_types", array()), "images", array()), "html", null, true);
        echo " <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_profile_gallery", array("username" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["organisation"]) || array_key_exists("organisation", $context) ? $context["organisation"] : (function () { throw new Twig_Error_Runtime('Variable "organisation" does not exist.', 5, $this->getSourceContext()); })()), "username", array()))), "html", null, true);
        echo "\">Images</a>
      ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["summary"]) || array_key_exists("summary", $context) ? $context["summary"] : (function () { throw new Twig_Error_Runtime('Variable "summary" does not exist.', 6, $this->getSourceContext()); })()), "post_types", array()), "locations", array()), "html", null, true);
        echo " <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_profile_locations", array("username" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["organisation"]) || array_key_exists("organisation", $context) ? $context["organisation"] : (function () { throw new Twig_Error_Runtime('Variable "organisation" does not exist.', 6, $this->getSourceContext()); })()), "username", array()))), "html", null, true);
        echo "\">Locations</a>
    </p>

    <h5 class=\"light green-text\"> We've received ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AbsoluteValueExtension')->finTotalFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["summary"]) || array_key_exists("summary", $context) ? $context["summary"] : (function () { throw new Twig_Error_Runtime('Variable "summary" does not exist.', 9, $this->getSourceContext()); })()), "balances", array()), "moneyIn", array())), "html", null, true);
        echo " this year</h5>

    <h5 class=\"light orange-text\">We've spent ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AbsoluteValueExtension')->finTotalFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["summary"]) || array_key_exists("summary", $context) ? $context["summary"] : (function () { throw new Twig_Error_Runtime('Variable "summary" does not exist.', 11, $this->getSourceContext()); })()), "balances", array()), "moneyOut", array())), "html", null, true);
        echo " this year</h5>

    <!-- <h4 class=\"light\">Total ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AbsoluteValueExtension')->finTotalFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["summary"]) || array_key_exists("summary", $context) ? $context["summary"] : (function () { throw new Twig_Error_Runtime('Variable "summary" does not exist.', 13, $this->getSourceContext()); })()), "balances", array()), "moneyTotal", array()), true), "html", null, true);
        echo "</h4> -->
  </div>
</div>
";
        
        $__internal_99ecf31b6782502ce3325615566a49a0992c44a917784b517161360909dd72a9->leave($__internal_99ecf31b6782502ce3325615566a49a0992c44a917784b517161360909dd72a9_prof);

        
        $__internal_6ebb9017132d626cde315fc926b46255be4b24fda3eaaaf30a619e0aadd406c5->leave($__internal_6ebb9017132d626cde315fc926b46255be4b24fda3eaaaf30a619e0aadd406c5_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:profile:card_summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 13,  53 => 11,  48 => 9,  40 => 6,  34 => 5,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"card grey-text text-darken-2\">
  <div class=\"card-content\">
    <p>
      {{summary.post_types.total}} Posts
      {{summary.post_types.images}} <a href=\"{{path('social_profile_gallery', {'username': organisation.username})}}\">Images</a>
      {{summary.post_types.locations}} <a href=\"{{path('social_profile_locations', {'username': organisation.username})}}\">Locations</a>
    </p>

    <h5 class=\"light green-text\"> We've received {{summary.balances.moneyIn|fintotal}} this year</h5>

    <h5 class=\"light orange-text\">We've spent {{summary.balances.moneyOut|fintotal}} this year</h5>

    <!-- <h4 class=\"light\">Total {{summary.balances.moneyTotal|fintotal(true)}}</h4> -->
  </div>
</div>
", "AppBundle:profile:card_summary.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/profile/card_summary.html.twig");
    }
}
