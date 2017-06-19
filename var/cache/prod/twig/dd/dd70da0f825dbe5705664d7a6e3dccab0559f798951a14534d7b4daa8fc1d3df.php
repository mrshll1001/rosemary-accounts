<?php

/* AppBundle::base.html.twig */
class __TwigTemplate_d4528630c0b3ca05084e3f85c64ef68bba82eb25f7b22a3b4a395048a3a5bdfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no\"/>
  <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " :: Rosemary Accounts UK</title>

  <!-- CSS  -->
  <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
  <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/materialize.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen,projection\"/>
  <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen,projection\"/>
</head>

<body>
";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "
  <!--  Scripts-->
  <script src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
  <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/materialize.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/init.js"), "html", null, true);
        echo "\"></script>


  <script type=\"text/javascript\">
  \$(\".dropdown-button\").dropdown();

  \$('.datepicker').pickadate({
  selectMonths: true, // Creates a dropdown to control month
  selectYears: 15, // Creates a dropdown of 15 years to control year
  format: 'yyyy-mm-dd',
  formatSubmit: 'yyyy-mm-dd',
  hiddenPrefix: 'prefix__',
  hiddenSuffix: '__suffix'
});

  </script>

  ";
        // line 39
        $this->displayBlock('script', $context, $blocks);
        // line 40
        echo "
</body>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "
";
    }

    // line 39
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AppBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 39,  94 => 16,  91 => 15,  86 => 6,  80 => 40,  78 => 39,  58 => 22,  54 => 21,  49 => 18,  47 => 15,  40 => 11,  36 => 10,  29 => 6,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle::base.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/base.html.twig");
    }
}
