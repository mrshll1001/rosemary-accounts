<?php

/* AppBundle:user/page:page_add-expense.html.twig */
class __TwigTemplate_3ea6e038f20f1b9b2fb745d3e6b821a0b478417012358d5bc7268777d5e6434f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:user:control_panel.html.twig", "AppBundle:user/page:page_add-expense.html.twig", 1);
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
        echo "Add an Expense";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"container\">
  <div class=\"row\">

    <div class=\"col s12 m12\">

          ";
        // line 12
        $this->loadTemplate("AppBundle:user/form:card_add-expense.html.twig", "AppBundle:user/page:page_add-expense.html.twig", 12)->display($context);
        // line 13
        echo "    </div>
  </div>
</div>
";
    }

    // line 18
    public function block_script($context, array $blocks = array())
    {
        // line 19
        echo "
<script type=\"text/javascript\">

\$('#testButton').click(function(e)
{
    alert(\$('#expense_dateGiven').val());
});

\$('.chips').material_chip();

\$('.chips').on('chip.add', function(e, chip){
  updateChipInput(this);
})
.on('chip.delete', function(e, chip){
  updateChipInput(this);
});

function updateChipInput(chip){
     var newval= \$(chip).material_chip('data')
        .reduce(function(result,val){ result.push(val.tag); return result;},[]).join(\",\")

     \$('input[name=\"expense[tags]\"]').val(newval);
   }
</script>

";
    }

    public function getTemplateName()
    {
        return "AppBundle:user/page:page_add-expense.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 19,  56 => 18,  49 => 13,  47 => 12,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:user/page:page_add-expense.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/user/page/page_add-expense.html.twig");
    }
}
