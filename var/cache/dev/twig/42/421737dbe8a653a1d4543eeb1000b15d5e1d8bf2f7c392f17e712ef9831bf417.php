<?php

/* AppBundle:user:control_panel.html.twig */
class __TwigTemplate_776d58a822de743e8616b84c13e0288bbdf9a8042a318121dcd0423a2d508513 extends Twig_Template
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
        $__internal_398a3a67c6238e39c2e3dd8ce62711e7ac5921224a3bafaeea6790a74e6fc560 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_398a3a67c6238e39c2e3dd8ce62711e7ac5921224a3bafaeea6790a74e6fc560->enter($__internal_398a3a67c6238e39c2e3dd8ce62711e7ac5921224a3bafaeea6790a74e6fc560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user:control_panel.html.twig"));

        $__internal_9dea33a5f274a2005847b7a9f5a33093b9a0461cf32f8af6d10eb87423d0e0ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dea33a5f274a2005847b7a9f5a33093b9a0461cf32f8af6d10eb87423d0e0ba->enter($__internal_9dea33a5f274a2005847b7a9f5a33093b9a0461cf32f8af6d10eb87423d0e0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user:control_panel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_398a3a67c6238e39c2e3dd8ce62711e7ac5921224a3bafaeea6790a74e6fc560->leave($__internal_398a3a67c6238e39c2e3dd8ce62711e7ac5921224a3bafaeea6790a74e6fc560_prof);

        
        $__internal_9dea33a5f274a2005847b7a9f5a33093b9a0461cf32f8af6d10eb87423d0e0ba->leave($__internal_9dea33a5f274a2005847b7a9f5a33093b9a0461cf32f8af6d10eb87423d0e0ba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4e4a40495a93c80bf872e1c9b2087170c4fb27b3f9e0f75e701d4ac82555206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4e4a40495a93c80bf872e1c9b2087170c4fb27b3f9e0f75e701d4ac82555206->enter($__internal_e4e4a40495a93c80bf872e1c9b2087170c4fb27b3f9e0f75e701d4ac82555206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_10d11e4aa445db58436fa4db8a571ac704d83b8fedee4ecff0640ac43ec08888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10d11e4aa445db58436fa4db8a571ac704d83b8fedee4ecff0640ac43ec08888->enter($__internal_10d11e4aa445db58436fa4db8a571ac704d83b8fedee4ecff0640ac43ec08888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Control Panel";
        
        $__internal_10d11e4aa445db58436fa4db8a571ac704d83b8fedee4ecff0640ac43ec08888->leave($__internal_10d11e4aa445db58436fa4db8a571ac704d83b8fedee4ecff0640ac43ec08888_prof);

        
        $__internal_e4e4a40495a93c80bf872e1c9b2087170c4fb27b3f9e0f75e701d4ac82555206->leave($__internal_e4e4a40495a93c80bf872e1c9b2087170c4fb27b3f9e0f75e701d4ac82555206_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce7ffcd2b17b1b4a479437104554e50d921b9d3c472e477897c62123ac13dead = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce7ffcd2b17b1b4a479437104554e50d921b9d3c472e477897c62123ac13dead->enter($__internal_ce7ffcd2b17b1b4a479437104554e50d921b9d3c472e477897c62123ac13dead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6b8733fe9593b1093b88ae40cbcaeb19b3af7bd8c9d21dd0b266ea9c7e631085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b8733fe9593b1093b88ae40cbcaeb19b3af7bd8c9d21dd0b266ea9c7e631085->enter($__internal_6b8733fe9593b1093b88ae40cbcaeb19b3af7bd8c9d21dd0b266ea9c7e631085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6b8733fe9593b1093b88ae40cbcaeb19b3af7bd8c9d21dd0b266ea9c7e631085->leave($__internal_6b8733fe9593b1093b88ae40cbcaeb19b3af7bd8c9d21dd0b266ea9c7e631085_prof);

        
        $__internal_ce7ffcd2b17b1b4a479437104554e50d921b9d3c472e477897c62123ac13dead->leave($__internal_ce7ffcd2b17b1b4a479437104554e50d921b9d3c472e477897c62123ac13dead_prof);

    }

    // line 7
    public function block_topbar($context, array $blocks = array())
    {
        $__internal_84a86b011460ab6e4e2a00a0dd4195ae667122bfef9b9a29233ef52dd7f9ec97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84a86b011460ab6e4e2a00a0dd4195ae667122bfef9b9a29233ef52dd7f9ec97->enter($__internal_84a86b011460ab6e4e2a00a0dd4195ae667122bfef9b9a29233ef52dd7f9ec97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

        $__internal_e2357ffad92e4c9d076319ab1abe7db05f801edaca657b04039a5aa3be5d0af9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2357ffad92e4c9d076319ab1abe7db05f801edaca657b04039a5aa3be5d0af9->enter($__internal_e2357ffad92e4c9d076319ab1abe7db05f801edaca657b04039a5aa3be5d0af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

        // line 8
        echo "    ";
        $this->loadTemplate("AppBundle:user/component:navbar.html.twig", "AppBundle:user:control_panel.html.twig", 8)->display($context);
        // line 9
        echo "  ";
        
        $__internal_e2357ffad92e4c9d076319ab1abe7db05f801edaca657b04039a5aa3be5d0af9->leave($__internal_e2357ffad92e4c9d076319ab1abe7db05f801edaca657b04039a5aa3be5d0af9_prof);

        
        $__internal_84a86b011460ab6e4e2a00a0dd4195ae667122bfef9b9a29233ef52dd7f9ec97->leave($__internal_84a86b011460ab6e4e2a00a0dd4195ae667122bfef9b9a29233ef52dd7f9ec97_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_9b10c8a0486f5271a7ac6c498bebd5740a9460158a3972e90f74cfe744b80038 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b10c8a0486f5271a7ac6c498bebd5740a9460158a3972e90f74cfe744b80038->enter($__internal_9b10c8a0486f5271a7ac6c498bebd5740a9460158a3972e90f74cfe744b80038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b5de309f72f740ed05823d885f16fee723184c1cadee51ad80e9a0eca495dc27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5de309f72f740ed05823d885f16fee723184c1cadee51ad80e9a0eca495dc27->enter($__internal_b5de309f72f740ed05823d885f16fee723184c1cadee51ad80e9a0eca495dc27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 15
        echo "          <h1 class=\"light\">If you can see this message, the developer mucked up somewhere</h1>
        ";
        
        $__internal_b5de309f72f740ed05823d885f16fee723184c1cadee51ad80e9a0eca495dc27->leave($__internal_b5de309f72f740ed05823d885f16fee723184c1cadee51ad80e9a0eca495dc27_prof);

        
        $__internal_9b10c8a0486f5271a7ac6c498bebd5740a9460158a3972e90f74cfe744b80038->leave($__internal_9b10c8a0486f5271a7ac6c498bebd5740a9460158a3972e90f74cfe744b80038_prof);

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
        return array (  128 => 15,  119 => 14,  109 => 9,  106 => 8,  97 => 7,  83 => 17,  81 => 14,  75 => 10,  73 => 7,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::base.html.twig' %}

{% block title %}Control Panel{% endblock title %}

{% block body %}

  {% block topbar %}
    {% include 'AppBundle:user/component:navbar.html.twig' %}
  {% endblock topbar %}

  <div class=\"row\">

      <div class=\"col s12 m12\">
        {% block content %}
          <h1 class=\"light\">If you can see this message, the developer mucked up somewhere</h1>
        {% endblock content %}
      </div>

  </div>

{% endblock body %}
", "AppBundle:user:control_panel.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/user/control_panel.html.twig");
    }
}
