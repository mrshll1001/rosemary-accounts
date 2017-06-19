<?php

/* AppBundle:landing:page_features.html.twig */
class __TwigTemplate_0486a01caabf4cec3e59e5301e8569d27325b42c60b2a364fdd9e9cb599c13b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:landing:page_features.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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
        echo "Features and Pricing";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
";
        // line 8
        $this->loadTemplate("AppBundle:landing:navbar.html.twig", "AppBundle:landing:page_features.html.twig", 8)->display($context);
        // line 9
        echo "
<div class=\"section green\">

  <div class=\"row\">
    <div class=\"col s12 center\">
      <h1 class=\"grey-text text-lighten-4 light\">One price. Free.</h1>
    </div>
  </div>

</div>

<div class=\"section\">

  <div class=\"row\">
    <div class=\"col s12 m8\">

      <h4 class=\"light\">Track money in, track money out</h3>

        <img class=\"responsive-img\" src=\"http://baconmockup.com/900/300/\" alt=\"MM tasty\" />


      </div>
      <div class=\"col s12 m4 right\">
        <p class=\"left-align light\">
          Accounting features to help you log and track spending and invoices:
        </p>

        <ul class=\"light\">
          <li> - Add customers & grant givers to add income</li>
          <li> - Add spends to reconcile receipts</li>
          <li> - Get an overview of your accounts in seconds</li>
        </ul>

      </div>

    </div>

  </div>

  <div class=\"section grey darken-2\">
    <div class=\"row\">

      <div class=\"col s12 center\">
        <h3 class=\"light grey-text text-lighten-5\">Account for work, not just money</h3>

        <p class=\"light grey-text text-lighten-5\">
          Charity work involves a lot more than just spending money and tracking grants. We aim to help everyone see the work you've done
        </p>

      </div>
    </div>

    <div class=\"row\">
      <div class=\"col s12 m4 center\">
        <h4 class=\"light grey-text text-lighten-5\">Add in quality</h4>
        <p class=\"light grey-text text-lighten-5\">
        You can build a rich picture of your work by adding images, maps, and commentary to your accounts. Then, link everything together with an easy-to-use tagging system, allowing everyone to search and view for related items
        </p>
      </div>

      <div class=\"col s12 m4 center\">
        <img class=\"responsive-img circle\" src=\"http://baconmockup.com/400/300/\" alt=\"\" />
      </div>

      <div class=\"col s12 m4 center\">
        <h4 class=\"light grey-text text-lighten-5\">Showcase your work</h4>
        <p class=\"light grey-text text-lighten-5\">
          We provide you with a social media style profile page, and everything you post can be made visible to the world to help others see what you do.
        </p>
      </div>
    </div>


  </div>


";
    }

    public function getTemplateName()
    {
        return "AppBundle:landing:page_features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  41 => 8,  38 => 7,  35 => 6,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:landing:page_features.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/landing/page_features.html.twig");
    }
}
