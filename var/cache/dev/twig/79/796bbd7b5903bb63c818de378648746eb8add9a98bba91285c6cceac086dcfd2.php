<?php

/* AppBundle:landing:register.html.twig */
class __TwigTemplate_eb595b2d4ab4ef295468b63baac75a36cb4443837851791c76d69309f0dbfe38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:landing:register.html.twig", 1);
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
        $__internal_223142d703913d5875625bee53b5415428695d8b1c1d330f23d9e7032c485f18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_223142d703913d5875625bee53b5415428695d8b1c1d330f23d9e7032c485f18->enter($__internal_223142d703913d5875625bee53b5415428695d8b1c1d330f23d9e7032c485f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:landing:register.html.twig"));

        $__internal_45c1bc34cd5aba86d0e3617cfd2aa39fa6b004073c702008c67a293ae99e42f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45c1bc34cd5aba86d0e3617cfd2aa39fa6b004073c702008c67a293ae99e42f5->enter($__internal_45c1bc34cd5aba86d0e3617cfd2aa39fa6b004073c702008c67a293ae99e42f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:landing:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_223142d703913d5875625bee53b5415428695d8b1c1d330f23d9e7032c485f18->leave($__internal_223142d703913d5875625bee53b5415428695d8b1c1d330f23d9e7032c485f18_prof);

        
        $__internal_45c1bc34cd5aba86d0e3617cfd2aa39fa6b004073c702008c67a293ae99e42f5->leave($__internal_45c1bc34cd5aba86d0e3617cfd2aa39fa6b004073c702008c67a293ae99e42f5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_63fd560b36c3840823255aae0cb5041a56d829661aa31eef18870112e56701a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63fd560b36c3840823255aae0cb5041a56d829661aa31eef18870112e56701a9->enter($__internal_63fd560b36c3840823255aae0cb5041a56d829661aa31eef18870112e56701a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e6caa826fc3429c1ea6ff4a951dbd0846eed6833129373ee2469644679a5bba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6caa826fc3429c1ea6ff4a951dbd0846eed6833129373ee2469644679a5bba9->enter($__internal_e6caa826fc3429c1ea6ff4a951dbd0846eed6833129373ee2469644679a5bba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Register";
        
        $__internal_e6caa826fc3429c1ea6ff4a951dbd0846eed6833129373ee2469644679a5bba9->leave($__internal_e6caa826fc3429c1ea6ff4a951dbd0846eed6833129373ee2469644679a5bba9_prof);

        
        $__internal_63fd560b36c3840823255aae0cb5041a56d829661aa31eef18870112e56701a9->leave($__internal_63fd560b36c3840823255aae0cb5041a56d829661aa31eef18870112e56701a9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c50a104f7a4768d1af7ea6267396ba5c087f51fc087fdac408916115ff5e72f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c50a104f7a4768d1af7ea6267396ba5c087f51fc087fdac408916115ff5e72f->enter($__internal_0c50a104f7a4768d1af7ea6267396ba5c087f51fc087fdac408916115ff5e72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_34f2b307b05256fe1c1de3441cff4ca0d4bbd1df86978c451bff87b84b27c09a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34f2b307b05256fe1c1de3441cff4ca0d4bbd1df86978c451bff87b84b27c09a->enter($__internal_34f2b307b05256fe1c1de3441cff4ca0d4bbd1df86978c451bff87b84b27c09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  ";
        // line 7
        $this->loadTemplate("AppBundle:landing:navbar.html.twig", "AppBundle:landing:register.html.twig", 7)->display($context);
        // line 8
        echo "
  <div class=\"section\">

    <div class=\"row\">
      <h1 class=\"light center\">Create an Account</h1>
    </div>

    <div class=\"row\">

      <div class=\"col s12 m4 offset-m4\">
      <div class=\"card\">
        <div class=\"card-content\">
          ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'form_start');
        echo "
              ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "username", array()), 'row');
        echo "
              ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), "email", array()), 'row');
        echo "
              ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), "plainPassword", array()), "first", array()), 'row');
        echo "
              ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), "plainPassword", array()), "second", array()), 'row');
        echo "

              <p class=\"light\">
                By creating an account you agree to Rosemary Account's <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("terms");
        echo "\">Terms of Use</a> and <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("privacy");
        echo "\">Privacy Policy</a>
              </p>
              <br />
            <button class=\"btn\" type=\"submit\">Register</button>

          ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), 'form_end');
        echo "
        </div>
      </div>

      </div>

    </div>
  </div>
";
        
        $__internal_34f2b307b05256fe1c1de3441cff4ca0d4bbd1df86978c451bff87b84b27c09a->leave($__internal_34f2b307b05256fe1c1de3441cff4ca0d4bbd1df86978c451bff87b84b27c09a_prof);

        
        $__internal_0c50a104f7a4768d1af7ea6267396ba5c087f51fc087fdac408916115ff5e72f->leave($__internal_0c50a104f7a4768d1af7ea6267396ba5c087f51fc087fdac408916115ff5e72f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:landing:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 32,  109 => 27,  103 => 24,  99 => 23,  95 => 22,  91 => 21,  87 => 20,  73 => 8,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::base.html.twig' %}

{% block title %}Register{% endblock title %}

{% block body %}

  {% include 'AppBundle:landing:navbar.html.twig' %}

  <div class=\"section\">

    <div class=\"row\">
      <h1 class=\"light center\">Create an Account</h1>
    </div>

    <div class=\"row\">

      <div class=\"col s12 m4 offset-m4\">
      <div class=\"card\">
        <div class=\"card-content\">
          {{ form_start(form) }}
              {{ form_row(form.username) }}
              {{ form_row(form.email) }}
              {{ form_row(form.plainPassword.first) }}
              {{ form_row(form.plainPassword.second) }}

              <p class=\"light\">
                By creating an account you agree to Rosemary Account's <a href=\"{{url('terms')}}\">Terms of Use</a> and <a href=\"{{url('privacy')}}\">Privacy Policy</a>
              </p>
              <br />
            <button class=\"btn\" type=\"submit\">Register</button>

          {{ form_end(form) }}
        </div>
      </div>

      </div>

    </div>
  </div>
{% endblock %}
", "AppBundle:landing:register.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/landing/register.html.twig");
    }
}
