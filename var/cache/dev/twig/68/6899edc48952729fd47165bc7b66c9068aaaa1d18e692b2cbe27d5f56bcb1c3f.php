<?php

/* AppBundle:user/component/nav:accounts_actions.html.twig */
class __TwigTemplate_4576ad447ee6b3f71b4730f77f6dbc05a4dfaa675082e5f7b66d67cf3c89ad8c extends Twig_Template
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
        $__internal_d903e1d353295e3866bacf40b972602a13bc3ebd494062048b10a925f7a1c5c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d903e1d353295e3866bacf40b972602a13bc3ebd494062048b10a925f7a1c5c7->enter($__internal_d903e1d353295e3866bacf40b972602a13bc3ebd494062048b10a925f7a1c5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user/component/nav:accounts_actions.html.twig"));

        $__internal_ff5d7db7c457be5f73e2f870d1898c6e7adac285a1222aa8fc8519175d5d0c83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff5d7db7c457be5f73e2f870d1898c6e7adac285a1222aa8fc8519175d5d0c83->enter($__internal_ff5d7db7c457be5f73e2f870d1898c6e7adac285a1222aa8fc8519175d5d0c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user/component/nav:accounts_actions.html.twig"));

        // line 1
        echo "<li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("control_summary");
        echo "\"><i class=\"material-icons left\">show_chart</i>Summary</a></li>
<li class=\"divider\"></li>
<li><a href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("income");
        echo "\"><i class=\"material-icons left\">account_balance</i>Income</a></li>
<li class=\"divider\"></li>
<li><a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("expenses");
        echo "\"><i class=\"material-icons left\">credit_card</i>Expenses</a></li>
<li class=\"divider\"></li>
<li><a  href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customers");
        echo "\"><i class=\"material-icons left\">people</i>Customers and Funders</a> </li>
<li class=\"divider\"></li>
<li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("budget_codes");
        echo "\"><i class=\"material-icons left\">label</i>Budget Codes and Tags</a> </li>
";
        
        $__internal_d903e1d353295e3866bacf40b972602a13bc3ebd494062048b10a925f7a1c5c7->leave($__internal_d903e1d353295e3866bacf40b972602a13bc3ebd494062048b10a925f7a1c5c7_prof);

        
        $__internal_ff5d7db7c457be5f73e2f870d1898c6e7adac285a1222aa8fc8519175d5d0c83->leave($__internal_ff5d7db7c457be5f73e2f870d1898c6e7adac285a1222aa8fc8519175d5d0c83_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:user/component/nav:accounts_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  41 => 7,  36 => 5,  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li><a href=\"{{path('control_summary')}}\"><i class=\"material-icons left\">show_chart</i>Summary</a></li>
<li class=\"divider\"></li>
<li><a href=\"{{path('income')}}\"><i class=\"material-icons left\">account_balance</i>Income</a></li>
<li class=\"divider\"></li>
<li><a href=\"{{path('expenses')}}\"><i class=\"material-icons left\">credit_card</i>Expenses</a></li>
<li class=\"divider\"></li>
<li><a  href=\"{{path('customers')}}\"><i class=\"material-icons left\">people</i>Customers and Funders</a> </li>
<li class=\"divider\"></li>
<li><a href=\"{{path('budget_codes')}}\"><i class=\"material-icons left\">label</i>Budget Codes and Tags</a> </li>
", "AppBundle:user/component/nav:accounts_actions.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/user/component/nav/accounts_actions.html.twig");
    }
}
