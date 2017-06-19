<?php

/* AppBundle:landing:login.html.twig */
class __TwigTemplate_447ac9ae42dd5768b50e9b2dfb4a0a88f471bf82e671978ce1a9cf8523069308 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Login";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
  ";
        // line 7
        $this->loadTemplate("AppBundle:landing:navbar.html.twig", "AppBundle:landing:login.html.twig", 7)->display($context);
        // line 8
        echo "
  ";
        // line 9
        if (($context["error"] ?? null)) {
            // line 10
            echo "      <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), ($context["error"] ?? null), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), ($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
  ";
        }
        // line 12
        echo "
  <div class=\"section\">
    <div class=\"row\">
      <div class=\"col s12 m4 offset-m4 \">
        <form action=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
            <label for=\"username\">Username:</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" />

            <label for=\"password\">Password:</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />

            ";
        // line 28
        echo "
            <button class=\"btn\" type=\"submit\">login</button>
          </form>
      </div>
    </div>
  </div>



";
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
        return array (  73 => 28,  65 => 18,  60 => 16,  54 => 12,  48 => 10,  46 => 9,  43 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:landing:login.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/landing/login.html.twig");
    }
}
