<?php

/* AppBundle:landing:page_qa-data.html.twig */
class __TwigTemplate_1d7fd116487ddaec838afe3af601c969a997d4b730f9f17bc6c8fcecec3e1b93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:landing:page_qa-data.html.twig", 1);
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
        echo "QA Data";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        $this->loadTemplate("AppBundle:landing:navbar.html.twig", "AppBundle:landing:page_qa-data.html.twig", 7)->display($context);
        // line 8
        echo "
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col s12\">
      <h4 class=\"light\">";
        // line 12
        echo twig_escape_filter($this->env, ($context["filepath"] ?? null), "html", null, true);
        echo "</h4>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col s12 center\">
      <object data=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["filepath"] ?? null)), "html", null, true);
        echo "\" type=\"mimetype\"></object>
    </div>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "AppBundle:landing:page_qa-data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 18,  49 => 12,  43 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:landing:page_qa-data.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/landing/page_qa-data.html.twig");
    }
}
