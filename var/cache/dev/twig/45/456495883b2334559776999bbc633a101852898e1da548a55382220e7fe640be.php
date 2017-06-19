<?php

/* AppBundle:user/component/cards:card_account_balance.html.twig */
class __TwigTemplate_45d40e5a545ac35e8d33efe365fa60de73c2da3c979667fabc4b2e574bc73112 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:user/component/cards:card_base.html.twig", "AppBundle:user/component/cards:card_account_balance.html.twig", 1);
        $this->blocks = array(
            'card_title' => array($this, 'block_card_title'),
            'card_content' => array($this, 'block_card_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:user/component/cards:card_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7fcdab6ee18362fd1118c453e25eb6e22f8fade31c938974415ac540b664770 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7fcdab6ee18362fd1118c453e25eb6e22f8fade31c938974415ac540b664770->enter($__internal_c7fcdab6ee18362fd1118c453e25eb6e22f8fade31c938974415ac540b664770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user/component/cards:card_account_balance.html.twig"));

        $__internal_9c5c6eefd4a9b591e750b80b519f7e94df0982c1d998a37b5599226f91b96e76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c5c6eefd4a9b591e750b80b519f7e94df0982c1d998a37b5599226f91b96e76->enter($__internal_9c5c6eefd4a9b591e750b80b519f7e94df0982c1d998a37b5599226f91b96e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user/component/cards:card_account_balance.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7fcdab6ee18362fd1118c453e25eb6e22f8fade31c938974415ac540b664770->leave($__internal_c7fcdab6ee18362fd1118c453e25eb6e22f8fade31c938974415ac540b664770_prof);

        
        $__internal_9c5c6eefd4a9b591e750b80b519f7e94df0982c1d998a37b5599226f91b96e76->leave($__internal_9c5c6eefd4a9b591e750b80b519f7e94df0982c1d998a37b5599226f91b96e76_prof);

    }

    // line 3
    public function block_card_title($context, array $blocks = array())
    {
        $__internal_f514015ba39869df82c2db056ff79b74e939a15d4ddadf9b130e074d817cf929 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f514015ba39869df82c2db056ff79b74e939a15d4ddadf9b130e074d817cf929->enter($__internal_f514015ba39869df82c2db056ff79b74e939a15d4ddadf9b130e074d817cf929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "card_title"));

        $__internal_e4b201315ef110bf7f631665cbcb3e0a0f54607105bd1892224648d2bfc6944d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4b201315ef110bf7f631665cbcb3e0a0f54607105bd1892224648d2bfc6944d->enter($__internal_e4b201315ef110bf7f631665cbcb3e0a0f54607105bd1892224648d2bfc6944d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "card_title"));

        echo "Account Balance";
        
        $__internal_e4b201315ef110bf7f631665cbcb3e0a0f54607105bd1892224648d2bfc6944d->leave($__internal_e4b201315ef110bf7f631665cbcb3e0a0f54607105bd1892224648d2bfc6944d_prof);

        
        $__internal_f514015ba39869df82c2db056ff79b74e939a15d4ddadf9b130e074d817cf929->leave($__internal_f514015ba39869df82c2db056ff79b74e939a15d4ddadf9b130e074d817cf929_prof);

    }

    // line 5
    public function block_card_content($context, array $blocks = array())
    {
        $__internal_57ba0c9cb1e232f1d21998525f106511c0ac44a6e4989155d602bda118c7c3c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57ba0c9cb1e232f1d21998525f106511c0ac44a6e4989155d602bda118c7c3c9->enter($__internal_57ba0c9cb1e232f1d21998525f106511c0ac44a6e4989155d602bda118c7c3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "card_content"));

        $__internal_b6a3a35fee6b4266d86a0138e630fa13b430587a66354df2ec48e59523a46f66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6a3a35fee6b4266d86a0138e630fa13b430587a66354df2ec48e59523a46f66->enter($__internal_b6a3a35fee6b4266d86a0138e630fa13b430587a66354df2ec48e59523a46f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "card_content"));

        // line 6
        echo "
<h5 class=\"light green-text\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AbsoluteValueExtension')->finTotalFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["summary"]) || array_key_exists("summary", $context) ? $context["summary"] : (function () { throw new Twig_Error_Runtime('Variable "summary" does not exist.', 7, $this->getSourceContext()); })()), "balances", array()), "moneyIn", array())), "html", null, true);
        echo " payments in</h5>

<h5 class=\"light orange-text\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AbsoluteValueExtension')->finTotalFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["summary"]) || array_key_exists("summary", $context) ? $context["summary"] : (function () { throw new Twig_Error_Runtime('Variable "summary" does not exist.', 9, $this->getSourceContext()); })()), "balances", array()), "moneyOut", array())), "html", null, true);
        echo " payments out</h5>

<h4 class=\"light\">Total ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AbsoluteValueExtension')->finTotalFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["summary"]) || array_key_exists("summary", $context) ? $context["summary"] : (function () { throw new Twig_Error_Runtime('Variable "summary" does not exist.', 11, $this->getSourceContext()); })()), "balances", array()), "moneyTotal", array()), true), "html", null, true);
        echo "</h4>


";
        
        $__internal_b6a3a35fee6b4266d86a0138e630fa13b430587a66354df2ec48e59523a46f66->leave($__internal_b6a3a35fee6b4266d86a0138e630fa13b430587a66354df2ec48e59523a46f66_prof);

        
        $__internal_57ba0c9cb1e232f1d21998525f106511c0ac44a6e4989155d602bda118c7c3c9->leave($__internal_57ba0c9cb1e232f1d21998525f106511c0ac44a6e4989155d602bda118c7c3c9_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:user/component/cards:card_account_balance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 11,  76 => 9,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle:user/component/cards:card_base.html.twig' %}

{% block card_title %}Account Balance{% endblock card_title %}

{% block card_content %}

<h5 class=\"light green-text\">{{summary.balances.moneyIn|fintotal}} payments in</h5>

<h5 class=\"light orange-text\">{{summary.balances.moneyOut|fintotal}} payments out</h5>

<h4 class=\"light\">Total {{summary.balances.moneyTotal|fintotal(true)}}</h4>


{% endblock card_content %}
", "AppBundle:user/component/cards:card_account_balance.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/user/component/cards/card_account_balance.html.twig");
    }
}
