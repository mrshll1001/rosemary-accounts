<?php

/* AppBundle:user/form:card_add-expense.html.twig */
class __TwigTemplate_bb45b507ea1c92985baf76e56f11108424fc7dcf7e79de34a5e9124936c85a32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"card\">
  <div class=\"card-content\">
    <span class=\"card-title\">Add an Expense or Receipt</span>

    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "

      ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "


      <label for=\"chips\">Tags</label>
      <div class=\"chips chips-autocomplete\" name=\"chips\">
      </div>

      <br> <br>

      <!-- <button class=\"btn\" type=\"button\" id=\"testButton\" name=\"test\">Test Input</button> -->

      <button type=\"submit\" name=\"submit\" class=\"btn\">Add</button>

    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:user/form:card_add-expense.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 20,  30 => 7,  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:user/form:card_add-expense.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/user/form/card_add-expense.html.twig");
    }
}
