<?php

/* AppBundle:user:control_panel.html.twig */
class __TwigTemplate_8d498efebeafdb360b78445aab44d22b790c4143c1cb8bfb258bc9c8ba57938e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:user:control_panel.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'topbar' => array($this, 'block_topbar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Control Panel";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
  ";
        // line 7
        $this->displayBlock('topbar', $context, $blocks);
        // line 10
        echo "
  <div class=\"row\">

      <div class=\"col s12 m12\">
        ";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "      </div>

  </div>

";
    }

    // line 7
    public function block_topbar($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->loadTemplate("AppBundle:user/component:navbar.html.twig", "AppBundle:user:control_panel.html.twig", 8)->display($context);
        // line 9
        echo "  ";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "          <h1 class=\"light\">If you can see this message, the developer mucked up somewhere</h1>
        ";
    }

    public function getTemplateName()
    {
        return "AppBundle:user:control_panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 15,  71 => 14,  67 => 9,  64 => 8,  61 => 7,  53 => 17,  51 => 14,  45 => 10,  43 => 7,  40 => 6,  37 => 5,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:user:control_panel.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/user/control_panel.html.twig");
    }
}
