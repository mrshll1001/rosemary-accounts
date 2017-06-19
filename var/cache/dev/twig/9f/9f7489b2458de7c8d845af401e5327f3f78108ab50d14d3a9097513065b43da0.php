<?php

/* AppBundle:user/page:page_configure-apps.html.twig */
class __TwigTemplate_a8355e66b1425b62de8339e12da002de75941ff4b935de11cee143af7a3e753e extends Twig_Template
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
        $__internal_132996a8e7a04719989321430ab9454261c730fd64ccceea4f63d2055c73dbfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_132996a8e7a04719989321430ab9454261c730fd64ccceea4f63d2055c73dbfb->enter($__internal_132996a8e7a04719989321430ab9454261c730fd64ccceea4f63d2055c73dbfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user/page:page_configure-apps.html.twig"));

        $__internal_9b6497e929b5a483561d49119b3959f421e038f327c54d58b767ba32e96dbf7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b6497e929b5a483561d49119b3959f421e038f327c54d58b767ba32e96dbf7f->enter($__internal_9b6497e929b5a483561d49119b3959f421e038f327c54d58b767ba32e96dbf7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user/page:page_configure-apps.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_132996a8e7a04719989321430ab9454261c730fd64ccceea4f63d2055c73dbfb->leave($__internal_132996a8e7a04719989321430ab9454261c730fd64ccceea4f63d2055c73dbfb_prof);

        
        $__internal_9b6497e929b5a483561d49119b3959f421e038f327c54d58b767ba32e96dbf7f->leave($__internal_9b6497e929b5a483561d49119b3959f421e038f327c54d58b767ba32e96dbf7f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4514c75647453365be5ca22ae9464d5f44d13a4b04db1e4514747ea2c83e53d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4514c75647453365be5ca22ae9464d5f44d13a4b04db1e4514747ea2c83e53d0->enter($__internal_4514c75647453365be5ca22ae9464d5f44d13a4b04db1e4514747ea2c83e53d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aa061d08ff7034eb2a9cbfb0fb2b4a58e888a0f066f5d54f766f304aec79b7f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa061d08ff7034eb2a9cbfb0fb2b4a58e888a0f066f5d54f766f304aec79b7f0->enter($__internal_aa061d08ff7034eb2a9cbfb0fb2b4a58e888a0f066f5d54f766f304aec79b7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Configure Apps";
        
        $__internal_aa061d08ff7034eb2a9cbfb0fb2b4a58e888a0f066f5d54f766f304aec79b7f0->leave($__internal_aa061d08ff7034eb2a9cbfb0fb2b4a58e888a0f066f5d54f766f304aec79b7f0_prof);

        
        $__internal_4514c75647453365be5ca22ae9464d5f44d13a4b04db1e4514747ea2c83e53d0->leave($__internal_4514c75647453365be5ca22ae9464d5f44d13a4b04db1e4514747ea2c83e53d0_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_5da40a72e09386e16e470d26506d6074f3420696efea821872abb8ecf4867b25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5da40a72e09386e16e470d26506d6074f3420696efea821872abb8ecf4867b25->enter($__internal_5da40a72e09386e16e470d26506d6074f3420696efea821872abb8ecf4867b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_01460ab5b054c943ea065f1173e11947acdf803ae584ef03705d7f544ba9edde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01460ab5b054c943ea065f1173e11947acdf803ae584ef03705d7f544ba9edde->enter($__internal_01460ab5b054c943ea065f1173e11947acdf803ae584ef03705d7f544ba9edde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col s12\">
        <h2 class=\"light\">Configure Apps</h2>

        <p class=\"light\">
          Apps can help you and your team collect data to use on your Rosemary profile. This data can be receipts, events, or other forms of data supported by the <a href=\"http://openlab.ncl.ac.uk/qualitative-accounting\" target=\"_blank\">Qualitative Accounting</a> data standard. We support any apps that implement the standard, although we <a href=\"#\">officially support some partnered apps</a>. Using apps can help take the pressure off of the person cultivating the accounts and profile, as it allows other team members to join in on data collection.
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), 'form_start');
        echo "
          ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "name", array()), 'row');
        echo "
          <button type=\"submit\" name=\"submit\" class=\"btn right\">Add</button>
        ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), 'form_end');
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
        $context['_seq'] = twig_ensure_traversable((isset($context["tokens"]) || array_key_exists("tokens", $context) ? $context["tokens"] : (function () { throw new Twig_Error_Runtime('Variable "tokens" does not exist.', 62, $this->getSourceContext()); })()));
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
        
        $__internal_01460ab5b054c943ea065f1173e11947acdf803ae584ef03705d7f544ba9edde->leave($__internal_01460ab5b054c943ea065f1173e11947acdf803ae584ef03705d7f544ba9edde_prof);

        
        $__internal_5da40a72e09386e16e470d26506d6074f3420696efea821872abb8ecf4867b25->leave($__internal_5da40a72e09386e16e470d26506d6074f3420696efea821872abb8ecf4867b25_prof);

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
        return array (  164 => 77,  150 => 69,  143 => 65,  139 => 63,  135 => 62,  106 => 36,  101 => 34,  97 => 33,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle:user:control_panel.html.twig' %}

{% block title %}Configure Apps{% endblock %}

{% block content %}
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col s12\">
        <h2 class=\"light\">Configure Apps</h2>

        <p class=\"light\">
          Apps can help you and your team collect data to use on your Rosemary profile. This data can be receipts, events, or other forms of data supported by the <a href=\"http://openlab.ncl.ac.uk/qualitative-accounting\" target=\"_blank\">Qualitative Accounting</a> data standard. We support any apps that implement the standard, although we <a href=\"#\">officially support some partnered apps</a>. Using apps can help take the pressure off of the person cultivating the accounts and profile, as it allows other team members to join in on data collection.
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
        {{form_start(form)}}
          {{form_row(form.name)}}
          <button type=\"submit\" name=\"submit\" class=\"btn right\">Add</button>
        {{form_end(form)}}
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
                {% for token in tokens %}
                    <tr>
                      <td>
                        {{token.name}}
                      </td>

                      <td>
                        {{token.token}}
                      </td>

                      <td>
                        <button class=\"btn\" type=\"submit\" name=\"button\">Delete</button>
                      </td>
                    </tr>
                {% endfor %}
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>


  </div>
{% endblock content %}
", "AppBundle:user/page:page_configure-apps.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/user/page/page_configure-apps.html.twig");
    }
}
