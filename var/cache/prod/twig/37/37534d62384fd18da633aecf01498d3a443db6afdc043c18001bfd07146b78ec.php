<?php

/* AppBundle:user/page:page_view-expense.html.twig */
class __TwigTemplate_fd5b16ac600ec061a6998455e6cd99baaf71e02caf7ebcf4b615ecdf4741ed19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:user:control_panel.html.twig", "AppBundle:user/page:page_view-expense.html.twig", 1);
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
        echo "View Expenses";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "

<div class=\"container\">
  <div class=\"row\">
    <h1 class=\"light\">Expenses / Receipts</h1>
    <div class=\"col s12\">

      <p class=\"light\">
        This page shows you all of the expenses you've registered this year
      </p>

    </div>
  </div>


  <div class=\"row\">
    <div class=\"col s12\">
      <div class=\"card\">
        <div class=\"card-content\">
          <span class=\"card-title\">Total £";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AbsoluteValueExtension')->absoluteValueFilter(($context["total"] ?? null)), "html", null, true);
        echo "</span>
          <table class=\"table\">
            <thead>
              <tr>
                <th>
                  Date Given
                </th>

                <th>
                  Amount
                </th>

                <th>
                  Description
                </th>

                <th>
                  Tags
                </th>

              </tr>
            </thead>

            <tbody>
              ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 50
            echo "                  <tr>
                    <td>
                      ";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "dateGiven", array()), "d/m/y"), "html", null, true);
            echo "
                    </td>

                    <td>
                      £";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AbsoluteValueExtension')->absoluteValueFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "financialValue", array())), "html", null, true);
            echo "
                    </td>

                    <td>
                      ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "description", array()), "html", null, true);
            echo "
                    </td>

                    <td>
                      ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "tags", array()));
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
                // line 65
                echo "                          ";
                $this->loadTemplate("AppBundle:profile:chip_tag.html.twig", "AppBundle:user/page:page_view-expense.html.twig", 65)->display(array_merge($context, array("route" => "accounts_search_tags")));
                // line 66
                echo "                      ";
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
            // line 67
            echo "                    </td>


                  </tr>
              ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:user/page:page_view-expense.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 72,  162 => 67,  148 => 66,  145 => 65,  128 => 64,  121 => 60,  114 => 56,  107 => 52,  103 => 50,  86 => 49,  59 => 25,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:user/page:page_view-expense.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/user/page/page_view-expense.html.twig");
    }
}
