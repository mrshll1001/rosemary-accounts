<?php

/* AppBundle:user:customers.html.twig */
class __TwigTemplate_f78fc9f0fff9cc8c657e678756de9b26ad64851d4807622e775390b597e3b0ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:user:control_panel.html.twig", "AppBundle:user:customers.html.twig", 1);
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
        echo "Customers";
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

          <span class=\"card-title\">Add a new Funder or Customer</span>
            ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "name", array()), 'row');
        echo "

              <div>
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "funder", array()), 'widget');
        echo "
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "funder", array()), 'label');
        echo "
              </div>

              <br />

              <button class=\"btn\" type=\"submit\" name=\"button\">Add</button>

            ";
        // line 26
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
          <span class=\"card-title\">Your Funders and Customers</span> <br>

          <p>
            This shows the list of funders and customers you've already added. We've highlighted funders in <span class=\"blue-text\">blue</span> to make them easier to spot
          </p>

          <table>
            <thead>
              <tr>
                <th data-field=\"customer_name\">
                  Customer Name
                </th>
                <th data-field=\"is_funder\">
                  Funder / Customer
                </th>
              </tr>
            </thead>

            <tbody>
              ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 58
            echo "
                ";
            // line 59
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "funder", array())) {
                // line 60
                echo "                  <tr class=\"blue-text\">

                ";
            } else {
                // line 63
                echo "                  <tr>
                ";
            }
            // line 65
            echo "                  <td>
                    ";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "name", array()), "html", null, true);
            echo "
                  </td>

                  <td>
                    ";
            // line 70
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "funder", array())) {
                // line 71
                echo "                    Funder
                    ";
            } else {
                // line 73
                echo "                    Customer
                    ";
            }
            // line 75
            echo "                  </td>

                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
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
        return "AppBundle:user:customers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 79,  144 => 75,  140 => 73,  136 => 71,  134 => 70,  127 => 66,  124 => 65,  120 => 63,  115 => 60,  113 => 59,  110 => 58,  106 => 57,  72 => 26,  62 => 19,  58 => 18,  52 => 15,  48 => 14,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:user:customers.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/user/customers.html.twig");
    }
}
