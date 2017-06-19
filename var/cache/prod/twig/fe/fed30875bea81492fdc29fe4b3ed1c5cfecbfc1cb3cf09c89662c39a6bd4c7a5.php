<?php

/* AppBundle:user/page:page_summary.html.twig */
class __TwigTemplate_599d80ef19f91d582a7a713d3e2d2649ac615309bad016f665e1c73c2970a983 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:user:control_panel.html.twig", "AppBundle:user/page:page_summary.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:user:control_panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Summary";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "  <h1 class=\"light\">Accounts Summary</h1>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:user/page:page_summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:user/page:page_summary.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/user/page/page_summary.html.twig");
    }
}
