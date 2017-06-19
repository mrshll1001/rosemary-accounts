<?php

/* AppBundle:landing:login.html.twig */
class __TwigTemplate_8801608d11454e4a6d60d683ff0a9c438c4a5756ab8d2d4b12319b4125931ebf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:landing:login.html.twig", 1);
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
        $__internal_cbe151dda1de8563bdcaf17134fa52f3802f0420bb44af1e51a2806979fc89a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbe151dda1de8563bdcaf17134fa52f3802f0420bb44af1e51a2806979fc89a1->enter($__internal_cbe151dda1de8563bdcaf17134fa52f3802f0420bb44af1e51a2806979fc89a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:landing:login.html.twig"));

        $__internal_02ed177ef97c97c7f9440eb9fca1ad426de5d1b3a9da6ad0179d222e4d8a88ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ed177ef97c97c7f9440eb9fca1ad426de5d1b3a9da6ad0179d222e4d8a88ed->enter($__internal_02ed177ef97c97c7f9440eb9fca1ad426de5d1b3a9da6ad0179d222e4d8a88ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:landing:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbe151dda1de8563bdcaf17134fa52f3802f0420bb44af1e51a2806979fc89a1->leave($__internal_cbe151dda1de8563bdcaf17134fa52f3802f0420bb44af1e51a2806979fc89a1_prof);

        
        $__internal_02ed177ef97c97c7f9440eb9fca1ad426de5d1b3a9da6ad0179d222e4d8a88ed->leave($__internal_02ed177ef97c97c7f9440eb9fca1ad426de5d1b3a9da6ad0179d222e4d8a88ed_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a4861c963b78ea9197281f44f87290e01592c55cf1334f2ce4d7d732a17b5f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a4861c963b78ea9197281f44f87290e01592c55cf1334f2ce4d7d732a17b5f9->enter($__internal_7a4861c963b78ea9197281f44f87290e01592c55cf1334f2ce4d7d732a17b5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5b8cd417e0221dc25d9ef662bc2fb852a691fbba12d53372abbe38396899cbd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b8cd417e0221dc25d9ef662bc2fb852a691fbba12d53372abbe38396899cbd2->enter($__internal_5b8cd417e0221dc25d9ef662bc2fb852a691fbba12d53372abbe38396899cbd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_5b8cd417e0221dc25d9ef662bc2fb852a691fbba12d53372abbe38396899cbd2->leave($__internal_5b8cd417e0221dc25d9ef662bc2fb852a691fbba12d53372abbe38396899cbd2_prof);

        
        $__internal_7a4861c963b78ea9197281f44f87290e01592c55cf1334f2ce4d7d732a17b5f9->leave($__internal_7a4861c963b78ea9197281f44f87290e01592c55cf1334f2ce4d7d732a17b5f9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff34ae3f46e5ba96fb48609f80b6e2a340a8d7e11a272f55f92087e1d05e9edf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff34ae3f46e5ba96fb48609f80b6e2a340a8d7e11a272f55f92087e1d05e9edf->enter($__internal_ff34ae3f46e5ba96fb48609f80b6e2a340a8d7e11a272f55f92087e1d05e9edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_baf08ce7e4bf24720a937727252b1f4a7c0dc3075cf0b2bf955c88dc45d8ecb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baf08ce7e4bf24720a937727252b1f4a7c0dc3075cf0b2bf955c88dc45d8ecb6->enter($__internal_baf08ce7e4bf24720a937727252b1f4a7c0dc3075cf0b2bf955c88dc45d8ecb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  ";
        // line 7
        $this->loadTemplate("AppBundle:landing:navbar.html.twig", "AppBundle:landing:login.html.twig", 7)->display($context);
        // line 8
        echo "
  ";
        // line 9
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 9, $this->getSourceContext()); })())) {
            // line 10
            echo "      <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 10, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 10, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
  ";
        }
        // line 12
        echo "
  <div class=\"section\">

    <div class=\"row\">
      <h1 class=\"light center\">Login</h1>
    </div>

    <div class=\"row\">
      <div class=\"col s12 m4 offset-m4 \">
        <div class=\"card\">
          <div class=\"card-content\">

            <form action=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
                <label for=\"username\">Username:</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 26, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />

                <label for=\"password\">Password:</label>
                <input type=\"password\" id=\"password\" name=\"_password\" />

                ";
        // line 36
        echo "
                <button class=\"btn\" type=\"submit\">login</button>
              </form>

          </div>
        </div>
      </div>
    </div>
  </div>



";
        
        $__internal_baf08ce7e4bf24720a937727252b1f4a7c0dc3075cf0b2bf955c88dc45d8ecb6->leave($__internal_baf08ce7e4bf24720a937727252b1f4a7c0dc3075cf0b2bf955c88dc45d8ecb6_prof);

        
        $__internal_ff34ae3f46e5ba96fb48609f80b6e2a340a8d7e11a272f55f92087e1d05e9edf->leave($__internal_ff34ae3f46e5ba96fb48609f80b6e2a340a8d7e11a272f55f92087e1d05e9edf_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:landing:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 36,  103 => 26,  98 => 24,  84 => 12,  78 => 10,  76 => 9,  73 => 8,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::base.html.twig' %}

{% block title %}Login{% endblock title %}

{% block body %}

  {% include 'AppBundle:landing:navbar.html.twig' %}

  {% if error %}
      <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
  {% endif %}

  <div class=\"section\">

    <div class=\"row\">
      <h1 class=\"light center\">Login</h1>
    </div>

    <div class=\"row\">
      <div class=\"col s12 m4 offset-m4 \">
        <div class=\"card\">
          <div class=\"card-content\">

            <form action=\"{{ path('login') }}\" method=\"post\">
                <label for=\"username\">Username:</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

                <label for=\"password\">Password:</label>
                <input type=\"password\" id=\"password\" name=\"_password\" />

                {#
                    If you want to control the URL the user
                    is redirected to on success (more details below)
                    <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
                #}

                <button class=\"btn\" type=\"submit\">login</button>
              </form>

          </div>
        </div>
      </div>
    </div>
  </div>



{% endblock body %}
", "AppBundle:landing:login.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/landing/login.html.twig");
    }
}
