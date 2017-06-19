<?php

/* AppBundle:user/page:page_post_image.html.twig */
class __TwigTemplate_dfd85758c33aaa77d52bd49ddeb4a3cd0af629ccf26102d205ec95e3646d4c24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:user:control_panel.html.twig", "AppBundle:user/page:page_post_image.html.twig", 1);
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
        $__internal_1543eada5e65daab4d66292328639c88588c03f11db7205d1305d64f1c10eca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1543eada5e65daab4d66292328639c88588c03f11db7205d1305d64f1c10eca0->enter($__internal_1543eada5e65daab4d66292328639c88588c03f11db7205d1305d64f1c10eca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user/page:page_post_image.html.twig"));

        $__internal_fb58a3f1ee91814aae65b33707f97d8ee7996bd8f0d5eb33595ce6cebf11c6cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb58a3f1ee91814aae65b33707f97d8ee7996bd8f0d5eb33595ce6cebf11c6cb->enter($__internal_fb58a3f1ee91814aae65b33707f97d8ee7996bd8f0d5eb33595ce6cebf11c6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user/page:page_post_image.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1543eada5e65daab4d66292328639c88588c03f11db7205d1305d64f1c10eca0->leave($__internal_1543eada5e65daab4d66292328639c88588c03f11db7205d1305d64f1c10eca0_prof);

        
        $__internal_fb58a3f1ee91814aae65b33707f97d8ee7996bd8f0d5eb33595ce6cebf11c6cb->leave($__internal_fb58a3f1ee91814aae65b33707f97d8ee7996bd8f0d5eb33595ce6cebf11c6cb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d03b104629273cfd5c23ef335c8896adef95d87826289719c45ab815b801138e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d03b104629273cfd5c23ef335c8896adef95d87826289719c45ab815b801138e->enter($__internal_d03b104629273cfd5c23ef335c8896adef95d87826289719c45ab815b801138e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_01a6593215a6af320b22251fcd4ed32e2464851f1f5a4b25ce532dc65ac7b301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01a6593215a6af320b22251fcd4ed32e2464851f1f5a4b25ce532dc65ac7b301->enter($__internal_01a6593215a6af320b22251fcd4ed32e2464851f1f5a4b25ce532dc65ac7b301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Post an Image";
        
        $__internal_01a6593215a6af320b22251fcd4ed32e2464851f1f5a4b25ce532dc65ac7b301->leave($__internal_01a6593215a6af320b22251fcd4ed32e2464851f1f5a4b25ce532dc65ac7b301_prof);

        
        $__internal_d03b104629273cfd5c23ef335c8896adef95d87826289719c45ab815b801138e->leave($__internal_d03b104629273cfd5c23ef335c8896adef95d87826289719c45ab815b801138e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_a28aa93736dce84082e0bef5f72a70196dcd044a0e2224c4b590086bafe3c682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a28aa93736dce84082e0bef5f72a70196dcd044a0e2224c4b590086bafe3c682->enter($__internal_a28aa93736dce84082e0bef5f72a70196dcd044a0e2224c4b590086bafe3c682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c4236423ad0e5caa0d488be0fdb6c669f95c4929cd2baf0f05a405e71e207082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4236423ad0e5caa0d488be0fdb6c669f95c4929cd2baf0f05a405e71e207082->enter($__internal_c4236423ad0e5caa0d488be0fdb6c669f95c4929cd2baf0f05a405e71e207082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<div class=\"container\">


  <div class=\"row\">
    <div class=\"col s12 m12\">

      <div class=\"card\">
        <div class=\"card-content\">
          <span class=\"card-title\">Post an Image</span>

          ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), 'form_start');
        echo "

            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "description", array()), 'row');
        echo "

            <div class=\"file-field input-field\">
              <div class=\"btn\">
                <span>Choose File</span>
                  ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), "media", array()), 'widget');
        echo "
              </div>

              <div class=\"file-path-wrapper\">
                  <input class=\"file-path validate\" type=\"text\">
              </div>
            </div>

            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), "dateGiven", array()), 'row');
        echo "

            <label for=\"chips\">Tags</label>
            <div class=\"chips chips-autocomplete\" name=\"chips\">
            </div>

            <button type=\"submit\" name=\"submit\" class=\"btn\">Post</button>


          ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), 'form_end');
        echo "
        </div>
      </div>

    </div>
  </div>

</div>

";
        
        $__internal_c4236423ad0e5caa0d488be0fdb6c669f95c4929cd2baf0f05a405e71e207082->leave($__internal_c4236423ad0e5caa0d488be0fdb6c669f95c4929cd2baf0f05a405e71e207082_prof);

        
        $__internal_a28aa93736dce84082e0bef5f72a70196dcd044a0e2224c4b590086bafe3c682->leave($__internal_a28aa93736dce84082e0bef5f72a70196dcd044a0e2224c4b590086bafe3c682_prof);

    }

    // line 52
    public function block_script($context, array $blocks = array())
    {
        $__internal_add25005ed3a6886f258d7f9eab1e9037ccf8f78a6e2913a604f200f39fb1f11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_add25005ed3a6886f258d7f9eab1e9037ccf8f78a6e2913a604f200f39fb1f11->enter($__internal_add25005ed3a6886f258d7f9eab1e9037ccf8f78a6e2913a604f200f39fb1f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_58ef5406db815daf469bd6840667a310bf5d7517cc83b186ebb914f959f0e4bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58ef5406db815daf469bd6840667a310bf5d7517cc83b186ebb914f959f0e4bd->enter($__internal_58ef5406db815daf469bd6840667a310bf5d7517cc83b186ebb914f959f0e4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 53
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

     \$('input[name=\"image_post[tags]\"]').val(newval);
   }
</script>

";
        
        $__internal_58ef5406db815daf469bd6840667a310bf5d7517cc83b186ebb914f959f0e4bd->leave($__internal_58ef5406db815daf469bd6840667a310bf5d7517cc83b186ebb914f959f0e4bd_prof);

        
        $__internal_add25005ed3a6886f258d7f9eab1e9037ccf8f78a6e2913a604f200f39fb1f11->leave($__internal_add25005ed3a6886f258d7f9eab1e9037ccf8f78a6e2913a604f200f39fb1f11_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:user/page:page_post_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 53,  137 => 52,  117 => 40,  105 => 31,  94 => 23,  86 => 18,  81 => 16,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle:user:control_panel.html.twig' %}

{% block title %}Post an Image{% endblock title %}

{% block content %}
<div class=\"container\">


  <div class=\"row\">
    <div class=\"col s12 m12\">

      <div class=\"card\">
        <div class=\"card-content\">
          <span class=\"card-title\">Post an Image</span>

          {{ form_start(form) }}

            {{form_row(form.description)}}

            <div class=\"file-field input-field\">
              <div class=\"btn\">
                <span>Choose File</span>
                  {{ form_widget(form.media) }}
              </div>

              <div class=\"file-path-wrapper\">
                  <input class=\"file-path validate\" type=\"text\">
              </div>
            </div>

            {{form_row(form.dateGiven)}}

            <label for=\"chips\">Tags</label>
            <div class=\"chips chips-autocomplete\" name=\"chips\">
            </div>

            <button type=\"submit\" name=\"submit\" class=\"btn\">Post</button>


          {{ form_end(form) }}
        </div>
      </div>

    </div>
  </div>

</div>

{% endblock content %}


{% block script %}

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

     \$('input[name=\"image_post[tags]\"]').val(newval);
   }
</script>

{% endblock script %}
", "AppBundle:user/page:page_post_image.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/user/page/page_post_image.html.twig");
    }
}
