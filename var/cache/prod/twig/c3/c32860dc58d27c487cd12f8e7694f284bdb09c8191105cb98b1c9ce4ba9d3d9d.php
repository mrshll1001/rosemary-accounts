<?php

/* AppBundle:user:page_setup-account.html.twig */
class __TwigTemplate_6b833df8ca00dd10bd68df2213d832f593fd010631604695fdf24be12ddbc4be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:user:page_setup-account.html.twig", 1);
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
        echo "Set up Account ";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "  <div class=\"container\">

    <div class=\"row\">

        <div class=\"col s12 m8 offset-m2\">

          <div class=\"card\">
            <div class=\"card-content\">
              <span class=\"card-title\">Finish setting up</span>
              <p>
                Hello there, ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
        echo "! It's nice to see you. Before we let you in, however, we need just a few more details. These will go on your profile to make it easier to read, and for people to find you.
              </p>

              ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "

                <button type=\"submit\" name=\"submit\" class=\"btn\">Let's go</button>
              ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

            </div>
          </div>

        </div>

    </div>

  </div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:user:page_setup-account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 24,  60 => 21,  56 => 20,  50 => 17,  38 => 7,  35 => 6,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:user:page_setup-account.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/user/page_setup-account.html.twig");
    }
}
