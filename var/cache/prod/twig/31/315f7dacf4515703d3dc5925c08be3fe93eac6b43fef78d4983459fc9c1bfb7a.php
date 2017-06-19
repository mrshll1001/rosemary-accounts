<?php

/* AppBundle:user/page:page_view-income.html.twig */
class __TwigTemplate_cc728e88c5ee0974695e2fb5ae12653cc4c3875028d988d8f3a1feff1a849f1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:user:control_panel.html.twig", "AppBundle:user/page:page_view-income.html.twig", 1);
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
        echo "Income";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
  <div class=\"container\">
    <h1 class=\"light\">Income</h1>
    <div class=\"row\">
      <div class=\"col s12\">

        <p class=\"light\">
          This page shows you all of the income you've received this year, in table format.
        </p>

      </div>
    </div>


    <div class=\"row\">
      <div class=\"col s12\">
        <div class=\"card\">
          <div class=\"card-content\">
            <span class=\"card-title\">Total £";
        // line 24
        echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
        echo "</span>
            <table class=\"table\">
              <thead>
                <tr>
                  <th>
                    Date Given
                  </th>

                  <th>
                    Source
                  </th>

                  <th>
                    Amount
                  </th>

                  <th>
                    Description
                  </th>

                </tr>
              </thead>

              <tbody>
                ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 49
            echo "                    <tr>
                      <td>
                        ";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "dateGiven", array()), "d/m/y"), "html", null, true);
            echo "
                      </td>

                      <td>
                        ";
            // line 55
            if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "customer", array()))) {
                // line 56
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "customer", array()), "name", array()), "html", null, true);
                echo "
                        ";
            }
            // line 58
            echo "                      </td>

                      <td>
                        £";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AbsoluteValueExtension')->absoluteValueFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "financialValue", array())), "html", null, true);
            echo "
                      </td>

                      <td>
                        ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "description", array()), "html", null, true);
            echo "
                      </td>


                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "              </tbody>
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
        return "AppBundle:user/page:page_view-income.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 71,  120 => 65,  113 => 61,  108 => 58,  102 => 56,  100 => 55,  93 => 51,  89 => 49,  85 => 48,  58 => 24,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:user/page:page_view-income.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/user/page/page_view-income.html.twig");
    }
}
