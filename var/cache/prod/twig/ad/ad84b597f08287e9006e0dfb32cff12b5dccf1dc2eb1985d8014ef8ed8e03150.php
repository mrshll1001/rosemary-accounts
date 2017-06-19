<?php

/* AppBundle:user/page:page_edit_post.html.twig */
class __TwigTemplate_ebf5ab4a65aa7d0a2beb9b16051cc886f405d900f1d8b58d0305927d14961e41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:user:control_panel.html.twig", "AppBundle:user/page:page_edit_post.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:user:control_panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Edit Post";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "  <div class=\"container\">
    <div class=\"row\">
      <h1 class=\"light\">Edit Post</h1>
    </div>

    <div class=\"row\">
      <div class=\"col s12\">

        <div class=\"card\">
          <div class=\"card-content\">
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
              ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "

              <div class=\"card-action\">
                <button type=\"submit\" class=\"waves-effect waves-light btn green \" name=\"button\"><i class=\"material-icons right\">done</i>Update and Approve</button>
                ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
              </div>
          </div>
        </div>

      </div>
    </div>

  </div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:user/page:page_edit_post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 21,  54 => 17,  50 => 16,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:user/page:page_edit_post.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/user/page/page_edit_post.html.twig");
    }
}
