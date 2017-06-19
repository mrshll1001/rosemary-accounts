<?php

/* AppBundle:user:add_invoice.html.twig */
class __TwigTemplate_78446010e8a73ab750f8d5c6ce2976e0df81ea020b853ce4ba139cc82790595f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:user:control_panel.html.twig", "AppBundle:user:add_invoice.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
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
        echo "Add an Invoice";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col s12 m12 \">
      <div class=\"card\">
        <div class=\"card-content\">
          <span class=\"card-title\">Add Income</span>

          ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "


            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "financialValue", array()), 'row');
        echo "

            <br />

            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "description", array()), 'row');
        echo "

            <br />

            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "customer", array()), 'row');
        echo "

            <br />

            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "dateGiven", array()), 'row');
        echo "

            <br />

            <button type=\"submit\" name=\"submit\" class=\"btn\">Add</button>
          ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

        </div>
      </div>
    </div>
  </div>
</div>

";
    }

    // line 44
    public function block_script($context, array $blocks = array())
    {
        // line 45
        echo "<script type=\"text/javascript\">
\$(document).ready(function()
{
  \$('select').material_select();

});
</script>

";
    }

    public function getTemplateName()
    {
        return "AppBundle:user:add_invoice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 45,  97 => 44,  84 => 34,  76 => 29,  69 => 25,  62 => 21,  55 => 17,  49 => 14,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:user:add_invoice.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/user/add_invoice.html.twig");
    }
}
