<?php

/* AppBundle:user/page:page_configure-apps.html.twig */
class __TwigTemplate_467aede5b8e8ec2561fbaf75b6d07b60cac3e22502e7fb25d3118c67f37b72e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:user:control_panel.html.twig", "AppBundle:user/page:page_configure-apps.html.twig", 1);
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
        echo "Configure Apps";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col s12\">
        <h2 class=\"light\">Configure Apps</h2>

        <p class=\"light\">
          Apps can help you and your team collect data to use on your Rosemary profile. This data can be receipts, events, or other forms of data supported by the <a href=\"#\">Qualitative Accounting</a> data standard. We support any apps that implement the standard, although we <a href=\"#\">officially support some partnered apps</a>. Using apps can help take the pressure off of the person cultivating the accounts and profile, as it allows other team members to join in on data collection.
        </p>

        <p class=\"light\">
          To get started, follow the instructions below.
        </p>

        <ol class=\"light\">
          <li>Find an app that you like to use, we recommend <a href=\"#\">Accounting Scrapbook</a></li>
          <li>On the form below, enter a name that makes sense to you and will help you identify where the data is coming from, e.g. the name of a team member</li>

          <li>This will generate a 10 digit code. On your app, wherever you add a service, enter <code>http://rosemary-accounts.co.uk</code> alongside your code (Note, some apps may call this <em>API Key</em>)</li>

          <li>Done! Repeat the previous steps for each new code you want to generate, for everyone you want to collect data for you</li>
        </ol>

      </div>
    </div>

    <div class=\"row\">
      <div class=\"col s12\">
        ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
          ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "name", array()), 'row');
        echo "
          <button type=\"submit\" name=\"submit\" class=\"btn right\">Add</button>
        ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col s12\">
        <div class=\"card\">
          <div class=\"card-content\">
            <span class=\"card-title\">Current Codes</span>
            <table>
              <thead>
                <tr>
                  <th>
                    Name
                  </th>

                  <th>
                    Code
                  </th>

                  <th>
                    Action
                  </th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tokens"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["token"]) {
            // line 63
            echo "                    <tr>
                      <td>
                        ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["token"], "name", array()), "html", null, true);
            echo "
                      </td>

                      <td>
                        ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["token"], "token", array()), "html", null, true);
            echo "
                      </td>

                      <td>
                        <button class=\"btn\" type=\"submit\" name=\"button\">Delete</button>
                      </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['token'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
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
        return "AppBundle:user/page:page_configure-apps.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 77,  120 => 69,  113 => 65,  109 => 63,  105 => 62,  76 => 36,  71 => 34,  67 => 33,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:user/page:page_configure-apps.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/user/page/page_configure-apps.html.twig");
    }
}
