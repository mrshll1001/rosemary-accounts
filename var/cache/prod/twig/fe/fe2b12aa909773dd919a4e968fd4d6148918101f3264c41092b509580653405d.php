<?php

/* AppBundle:user:sidepanel.html.twig */
class __TwigTemplate_702b445df4d448f6b23e3ce352ab746e3b2fd1ad405b7f81eed85e99ee3f5d84 extends Twig_Template
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
        echo "  <div class=\"row\">
    <div class=\"col s12\">
      <div class=\"card\">
        <div class=\"card-content\">
          <span class=\"card-title\">Navigation</span>

          <ul class=\"light\">
            <li><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("budget_codes");
        echo "\">Budget Codes</a> </li>

            <li><a  href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customers");
        echo "\">Customers</a> </li>

            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_invoice");
        echo "\">Add Invoice</a></li>

            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_expense");
        echo "\">Add Expense</a></li>

            <li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("configure_apps");
        echo "\">Configure Apps</a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:user:sidepanel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 16,  43 => 14,  38 => 12,  33 => 10,  28 => 8,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:user:sidepanel.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/user/sidepanel.html.twig");
    }
}
