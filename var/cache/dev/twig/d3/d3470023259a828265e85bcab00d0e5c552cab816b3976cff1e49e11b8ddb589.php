<?php

/* AppBundle::base.html.twig */
class __TwigTemplate_d1a7843a9b11aea5e061d35bcdd96b6ac93e53c506c5cff7c2d0e4a60f35c4cf extends Twig_Template
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
        $__internal_2ec09b71fcbf041a83116a86fc1a7fb2e54b141915ffce150ea9b64cbf20cbf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ec09b71fcbf041a83116a86fc1a7fb2e54b141915ffce150ea9b64cbf20cbf1->enter($__internal_2ec09b71fcbf041a83116a86fc1a7fb2e54b141915ffce150ea9b64cbf20cbf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::base.html.twig"));

        $__internal_ac74cea957e942ed9e33e1816f202810564542c3980bf040b07ab4c327e93137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac74cea957e942ed9e33e1816f202810564542c3980bf040b07ab4c327e93137->enter($__internal_ac74cea957e942ed9e33e1816f202810564542c3980bf040b07ab4c327e93137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>

  <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "?v=2\" />

  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no\"/>
  <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo " :: Rosemary Accounts UK</title>

  <!-- CSS  -->
  <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
  <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/materialize.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen,projection\"/>
  <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen,projection\"/>
  <!-- Leaflet -->

  <!-- <link rel=\"stylesheet\" href=\"https://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css\" />
  <script src=\"https://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js\"></script> -->

  <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.3/leaflet.css\" />

  <script src=\"//cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.3/leaflet.js\"> </script>
  <script src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
  <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/materialize.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/init.js"), "html", null, true);
        echo "\"></script>
  <script src=\"https://unpkg.com/leaflet@1.0.3/dist/leaflet.js\"></script>
</head>

<body>
";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "
  <!--  Scripts-->


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
        // line 51
        $this->displayBlock('script', $context, $blocks);
        // line 52
        echo "
</body>
";
        
        $__internal_2ec09b71fcbf041a83116a86fc1a7fb2e54b141915ffce150ea9b64cbf20cbf1->leave($__internal_2ec09b71fcbf041a83116a86fc1a7fb2e54b141915ffce150ea9b64cbf20cbf1_prof);

        
        $__internal_ac74cea957e942ed9e33e1816f202810564542c3980bf040b07ab4c327e93137->leave($__internal_ac74cea957e942ed9e33e1816f202810564542c3980bf040b07ab4c327e93137_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_acb0c46c8ffdc320d13f9bf58d80d752e40660166ff59ef273e94cfea1788138 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acb0c46c8ffdc320d13f9bf58d80d752e40660166ff59ef273e94cfea1788138->enter($__internal_acb0c46c8ffdc320d13f9bf58d80d752e40660166ff59ef273e94cfea1788138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5026b48b07b7a4b0c9c436a09fdfe8be9c5abfdf0faac41eabd6d4e9bc9af3cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5026b48b07b7a4b0c9c436a09fdfe8be9c5abfdf0faac41eabd6d4e9bc9af3cb->enter($__internal_5026b48b07b7a4b0c9c436a09fdfe8be9c5abfdf0faac41eabd6d4e9bc9af3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5026b48b07b7a4b0c9c436a09fdfe8be9c5abfdf0faac41eabd6d4e9bc9af3cb->leave($__internal_5026b48b07b7a4b0c9c436a09fdfe8be9c5abfdf0faac41eabd6d4e9bc9af3cb_prof);

        
        $__internal_acb0c46c8ffdc320d13f9bf58d80d752e40660166ff59ef273e94cfea1788138->leave($__internal_acb0c46c8ffdc320d13f9bf58d80d752e40660166ff59ef273e94cfea1788138_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_0de20c421b91652a8d22d776cd56406cfffc247b9c5c6acb0811b1c0ba06df7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0de20c421b91652a8d22d776cd56406cfffc247b9c5c6acb0811b1c0ba06df7d->enter($__internal_0de20c421b91652a8d22d776cd56406cfffc247b9c5c6acb0811b1c0ba06df7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_28bdc48c0b2a1bed64f7da3c20a0b834a7f683ba521dafa1e255c14228152a27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28bdc48c0b2a1bed64f7da3c20a0b834a7f683ba521dafa1e255c14228152a27->enter($__internal_28bdc48c0b2a1bed64f7da3c20a0b834a7f683ba521dafa1e255c14228152a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo "
";
        
        $__internal_28bdc48c0b2a1bed64f7da3c20a0b834a7f683ba521dafa1e255c14228152a27->leave($__internal_28bdc48c0b2a1bed64f7da3c20a0b834a7f683ba521dafa1e255c14228152a27_prof);

        
        $__internal_0de20c421b91652a8d22d776cd56406cfffc247b9c5c6acb0811b1c0ba06df7d->leave($__internal_0de20c421b91652a8d22d776cd56406cfffc247b9c5c6acb0811b1c0ba06df7d_prof);

    }

    // line 51
    public function block_script($context, array $blocks = array())
    {
        $__internal_6946569fd906b7704f02ed45248515d081c67e7309ca48fb787988d86bc4b277 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6946569fd906b7704f02ed45248515d081c67e7309ca48fb787988d86bc4b277->enter($__internal_6946569fd906b7704f02ed45248515d081c67e7309ca48fb787988d86bc4b277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_45b91368483d64da01acb31c9dcd0dbaa6de01adb7f8dd7bdb39a4c85b0acd0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45b91368483d64da01acb31c9dcd0dbaa6de01adb7f8dd7bdb39a4c85b0acd0f->enter($__internal_45b91368483d64da01acb31c9dcd0dbaa6de01adb7f8dd7bdb39a4c85b0acd0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        
        $__internal_45b91368483d64da01acb31c9dcd0dbaa6de01adb7f8dd7bdb39a4c85b0acd0f->leave($__internal_45b91368483d64da01acb31c9dcd0dbaa6de01adb7f8dd7bdb39a4c85b0acd0f_prof);

        
        $__internal_6946569fd906b7704f02ed45248515d081c67e7309ca48fb787988d86bc4b277->leave($__internal_6946569fd906b7704f02ed45248515d081c67e7309ca48fb787988d86bc4b277_prof);

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
        return array (  150 => 51,  139 => 31,  130 => 30,  113 => 9,  101 => 52,  99 => 51,  79 => 33,  77 => 30,  69 => 25,  65 => 24,  52 => 14,  48 => 13,  41 => 9,  34 => 5,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>

  <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}?v=2\" />

  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no\"/>
  <title>{% block title %}{% endblock title %} :: Rosemary Accounts UK</title>

  <!-- CSS  -->
  <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
  <link href=\"{{asset(\"css/materialize.css\")}}\" type=\"text/css\" rel=\"stylesheet\" media=\"screen,projection\"/>
  <link href=\"{{asset(\"css/style.css\")}}\" type=\"text/css\" rel=\"stylesheet\" media=\"screen,projection\"/>
  <!-- Leaflet -->

  <!-- <link rel=\"stylesheet\" href=\"https://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css\" />
  <script src=\"https://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js\"></script> -->

  <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.3/leaflet.css\" />

  <script src=\"//cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.3/leaflet.js\"> </script>
  <script src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
  <script src=\"{{asset(\"js/materialize.js\")}}\"></script>
  <script src=\"{{asset(\"js/init.js\")}}\"></script>
  <script src=\"https://unpkg.com/leaflet@1.0.3/dist/leaflet.js\"></script>
</head>

<body>
{% block body %}

{% endblock body %}

  <!--  Scripts-->


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

  {% block script %}{% endblock script %}

</body>
", "AppBundle::base.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/base.html.twig");
    }
}
