<?php

/* AppBundle:user:budget_codes.html.twig */
class __TwigTemplate_3a3bcfb2fa8e4d29cd896be0058903fac4cb1a58538069fca6950869a845328d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:user:control_panel.html.twig", "AppBundle:user:budget_codes.html.twig", 1);
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
        echo "Budget Codes";
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
          <span class=\"card-title\">Add a new Budget Code</span>

          ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
            <button type=\"submit\" name=\"submit\" class=\"btn\">Add</button>
          ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

        </div>
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col s12 m12 \">
      <div class=\"card\">
        <div class=\"card-content\">
          <span class=\"card-title\">Existing Budget Codes</span> <br>

          ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 31
            echo "              ";
            $this->loadTemplate("AppBundle:user/component:tag.html.twig", "AppBundle:user:budget_codes.html.twig", 31)->display($context);
            // line 32
            echo "          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
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
        return "AppBundle:user:budget_codes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 33,  93 => 32,  90 => 31,  73 => 30,  57 => 17,  52 => 15,  48 => 14,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:user:budget_codes.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/user/budget_codes.html.twig");
    }
}
