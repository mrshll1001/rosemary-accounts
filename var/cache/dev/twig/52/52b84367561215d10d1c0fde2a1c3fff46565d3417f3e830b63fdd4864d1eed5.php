<?php

/* AppBundle:user/page:page_edit_post.html.twig */
class __TwigTemplate_e722404b44c9e4133649deeaad59b82f2b12d30201ac699be6d779cafbf52f10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:user:control_panel.html.twig", "AppBundle:user/page:page_edit_post.html.twig", 1);
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
        $__internal_f79286ec11dc2cb19e64fa35a7be661d28a5068228127f1706a50ad65a3934ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f79286ec11dc2cb19e64fa35a7be661d28a5068228127f1706a50ad65a3934ee->enter($__internal_f79286ec11dc2cb19e64fa35a7be661d28a5068228127f1706a50ad65a3934ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user/page:page_edit_post.html.twig"));

        $__internal_e2e3816c30c271dadaeb1d3745de68e4227786bbc2fddbd1d71598b26ea428b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2e3816c30c271dadaeb1d3745de68e4227786bbc2fddbd1d71598b26ea428b5->enter($__internal_e2e3816c30c271dadaeb1d3745de68e4227786bbc2fddbd1d71598b26ea428b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user/page:page_edit_post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f79286ec11dc2cb19e64fa35a7be661d28a5068228127f1706a50ad65a3934ee->leave($__internal_f79286ec11dc2cb19e64fa35a7be661d28a5068228127f1706a50ad65a3934ee_prof);

        
        $__internal_e2e3816c30c271dadaeb1d3745de68e4227786bbc2fddbd1d71598b26ea428b5->leave($__internal_e2e3816c30c271dadaeb1d3745de68e4227786bbc2fddbd1d71598b26ea428b5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_30d83dbc330d76f471571c4f97cdf2c99b708e09330f1191a5ffc81b0712cd4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30d83dbc330d76f471571c4f97cdf2c99b708e09330f1191a5ffc81b0712cd4b->enter($__internal_30d83dbc330d76f471571c4f97cdf2c99b708e09330f1191a5ffc81b0712cd4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_beb02b57bd30bf926e98fc3a504775644653e58c0a0145a8f4393c6718bf5e3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beb02b57bd30bf926e98fc3a504775644653e58c0a0145a8f4393c6718bf5e3e->enter($__internal_beb02b57bd30bf926e98fc3a504775644653e58c0a0145a8f4393c6718bf5e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Edit Post";
        
        $__internal_beb02b57bd30bf926e98fc3a504775644653e58c0a0145a8f4393c6718bf5e3e->leave($__internal_beb02b57bd30bf926e98fc3a504775644653e58c0a0145a8f4393c6718bf5e3e_prof);

        
        $__internal_30d83dbc330d76f471571c4f97cdf2c99b708e09330f1191a5ffc81b0712cd4b->leave($__internal_30d83dbc330d76f471571c4f97cdf2c99b708e09330f1191a5ffc81b0712cd4b_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_4f4dd41e2cfd71a7a673907f3888acd1831f26c18954a633e2e129d50234a68a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f4dd41e2cfd71a7a673907f3888acd1831f26c18954a633e2e129d50234a68a->enter($__internal_4f4dd41e2cfd71a7a673907f3888acd1831f26c18954a633e2e129d50234a68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3ced4d8e2a9df2194266cd9ca2c3585ae8953dda49c77e60f5b06fc59cb1e571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ced4d8e2a9df2194266cd9ca2c3585ae8953dda49c77e60f5b06fc59cb1e571->enter($__internal_3ced4d8e2a9df2194266cd9ca2c3585ae8953dda49c77e60f5b06fc59cb1e571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["existing_tags"]) || array_key_exists("existing_tags", $context) ? $context["existing_tags"] : (function () { throw new Twig_Error_Runtime('Variable "existing_tags" does not exist.', 17, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 18
            echo "              <div class=\"existing_tag\" data-tag=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tag"], "name", array()), "html", null, true);
            echo "\" ></div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
            ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), 'form_start');
        echo "
              ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'widget');
        echo "

              <label for=\"chips\">Tags</label>
              <div class=\"chips chips-autocomplete\" name=\"chips\">
              </div>

              <br> <br>

              <div class=\"card-action\">
                <button type=\"submit\" class=\"waves-effect waves-light btn green \" name=\"button\"><i class=\"material-icons right\">done</i>Update and Approve</button>
                ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), 'form_end');
        echo "
              </div>
          </div>
        </div>

      </div>
    </div>

  </div>
";
        
        $__internal_3ced4d8e2a9df2194266cd9ca2c3585ae8953dda49c77e60f5b06fc59cb1e571->leave($__internal_3ced4d8e2a9df2194266cd9ca2c3585ae8953dda49c77e60f5b06fc59cb1e571_prof);

        
        $__internal_4f4dd41e2cfd71a7a673907f3888acd1831f26c18954a633e2e129d50234a68a->leave($__internal_4f4dd41e2cfd71a7a673907f3888acd1831f26c18954a633e2e129d50234a68a_prof);

    }

    // line 43
    public function block_script($context, array $blocks = array())
    {
        $__internal_6b1945ce0784e2c26d0395d725c6c50c1c0e69f7f812806e679d5280f4707d3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b1945ce0784e2c26d0395d725c6c50c1c0e69f7f812806e679d5280f4707d3d->enter($__internal_6b1945ce0784e2c26d0395d725c6c50c1c0e69f7f812806e679d5280f4707d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_44717fe5643a334c1199e19e38e7e3a14f657c640d0846dc29701a22141a08e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44717fe5643a334c1199e19e38e7e3a14f657c640d0846dc29701a22141a08e8->enter($__internal_44717fe5643a334c1199e19e38e7e3a14f657c640d0846dc29701a22141a08e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 44
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tags-edit-post.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_44717fe5643a334c1199e19e38e7e3a14f657c640d0846dc29701a22141a08e8->leave($__internal_44717fe5643a334c1199e19e38e7e3a14f657c640d0846dc29701a22141a08e8_prof);

        
        $__internal_6b1945ce0784e2c26d0395d725c6c50c1c0e69f7f812806e679d5280f4707d3d->leave($__internal_6b1945ce0784e2c26d0395d725c6c50c1c0e69f7f812806e679d5280f4707d3d_prof);

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
        return array (  144 => 44,  135 => 43,  115 => 32,  102 => 22,  98 => 21,  95 => 20,  86 => 18,  82 => 17,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle:user:control_panel.html.twig' %}

{% block title %}Edit Post{% endblock title %}

{% block content %}
  <div class=\"container\">
    <div class=\"row\">
      <h1 class=\"light\">Edit Post</h1>
    </div>

    <div class=\"row\">
      <div class=\"col s12\">

        <div class=\"card\">
          <div class=\"card-content\">

            {% for tag in existing_tags %}
              <div class=\"existing_tag\" data-tag=\"{{tag.name}}\" ></div>
            {% endfor %}

            {{form_start(form)}}
              {{form_widget(form)}}

              <label for=\"chips\">Tags</label>
              <div class=\"chips chips-autocomplete\" name=\"chips\">
              </div>

              <br> <br>

              <div class=\"card-action\">
                <button type=\"submit\" class=\"waves-effect waves-light btn green \" name=\"button\"><i class=\"material-icons right\">done</i>Update and Approve</button>
                {{form_end(form)}}
              </div>
          </div>
        </div>

      </div>
    </div>

  </div>
{% endblock content %}

{% block script %}
<script type=\"text/javascript\" src=\"{{asset('js/tags-edit-post.js')}}\"></script>

{% endblock script %}
", "AppBundle:user/page:page_edit_post.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/user/page/page_edit_post.html.twig");
    }
}
