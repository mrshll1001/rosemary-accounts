<?php

/* AppBundle:user/page:page_post_event.html.twig */
class __TwigTemplate_7aee5f4efb8e9ea6f57797c495a100c448c01bb56e0dbcfa533636652a8463c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:user:control_panel.html.twig", "AppBundle:user/page:page_post_event.html.twig", 1);
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
        $__internal_43b755c9d76ba61becc3cc7a13912134ad9ce0f0a4d2fee55dc3c6df22244f42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43b755c9d76ba61becc3cc7a13912134ad9ce0f0a4d2fee55dc3c6df22244f42->enter($__internal_43b755c9d76ba61becc3cc7a13912134ad9ce0f0a4d2fee55dc3c6df22244f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user/page:page_post_event.html.twig"));

        $__internal_41386fa8a52c3c64c7b3472b06a530256714dd18b601d5d5bbf1d725b13e1a38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41386fa8a52c3c64c7b3472b06a530256714dd18b601d5d5bbf1d725b13e1a38->enter($__internal_41386fa8a52c3c64c7b3472b06a530256714dd18b601d5d5bbf1d725b13e1a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user/page:page_post_event.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43b755c9d76ba61becc3cc7a13912134ad9ce0f0a4d2fee55dc3c6df22244f42->leave($__internal_43b755c9d76ba61becc3cc7a13912134ad9ce0f0a4d2fee55dc3c6df22244f42_prof);

        
        $__internal_41386fa8a52c3c64c7b3472b06a530256714dd18b601d5d5bbf1d725b13e1a38->leave($__internal_41386fa8a52c3c64c7b3472b06a530256714dd18b601d5d5bbf1d725b13e1a38_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c3544dd73d74ff605c0affb812e6926515554657414ded88328d5b49fd7fecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c3544dd73d74ff605c0affb812e6926515554657414ded88328d5b49fd7fecf->enter($__internal_5c3544dd73d74ff605c0affb812e6926515554657414ded88328d5b49fd7fecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_57ddf2489f497307e5c67cb4df9e560c5452258810d6dccef0f464d53a108fa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57ddf2489f497307e5c67cb4df9e560c5452258810d6dccef0f464d53a108fa2->enter($__internal_57ddf2489f497307e5c67cb4df9e560c5452258810d6dccef0f464d53a108fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Post an Event";
        
        $__internal_57ddf2489f497307e5c67cb4df9e560c5452258810d6dccef0f464d53a108fa2->leave($__internal_57ddf2489f497307e5c67cb4df9e560c5452258810d6dccef0f464d53a108fa2_prof);

        
        $__internal_5c3544dd73d74ff605c0affb812e6926515554657414ded88328d5b49fd7fecf->leave($__internal_5c3544dd73d74ff605c0affb812e6926515554657414ded88328d5b49fd7fecf_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_4f55cefdfa10579e5703c046d1579ca08641b045d5d7d85c4c5778329f7cbb92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f55cefdfa10579e5703c046d1579ca08641b045d5d7d85c4c5778329f7cbb92->enter($__internal_4f55cefdfa10579e5703c046d1579ca08641b045d5d7d85c4c5778329f7cbb92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9051f359ab24858a0f358294d358fa7b4fde23b65d078897e68f7540ebe75b7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9051f359ab24858a0f358294d358fa7b4fde23b65d078897e68f7540ebe75b7a->enter($__internal_9051f359ab24858a0f358294d358fa7b4fde23b65d078897e68f7540ebe75b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
<div class=\"container\">
  <div class=\"row\">

    <div class=\"card\">
      <div class=\"card-content\">
          <span class=\"card-title\">Post an Event</span>

          <p class=\"light\">
            Click on the map to select the place
          </p>
          <div class=\"mock_map_div\" id=\"mock-map\" style=\"height: 500px; width: 100%;\"></div>

          ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'form_start');
        echo "
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'widget');
        echo "

            <label for=\"chips\">Tags</label>
            <div class=\"chips chips-autocomplete\" name=\"chips\">
            </div>

            <button type=\"submit\" class=\"btn\" name=\"button\">Post</button>
          ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'form_end');
        echo "

        </div>
      </div>
    </div>

  </div>
</div>

";
        
        $__internal_9051f359ab24858a0f358294d358fa7b4fde23b65d078897e68f7540ebe75b7a->leave($__internal_9051f359ab24858a0f358294d358fa7b4fde23b65d078897e68f7540ebe75b7a_prof);

        
        $__internal_4f55cefdfa10579e5703c046d1579ca08641b045d5d7d85c4c5778329f7cbb92->leave($__internal_4f55cefdfa10579e5703c046d1579ca08641b045d5d7d85c4c5778329f7cbb92_prof);

    }

    // line 38
    public function block_script($context, array $blocks = array())
    {
        $__internal_8a6d1fa7f862a423d339887e914e513081763667c88c471cab5dd7717d5d4d9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a6d1fa7f862a423d339887e914e513081763667c88c471cab5dd7717d5d4d9a->enter($__internal_8a6d1fa7f862a423d339887e914e513081763667c88c471cab5dd7717d5d4d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_89104a13d37528877b27bb27ffec079a3f9940a59082d6a0d8f2cc265fd6b8d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89104a13d37528877b27bb27ffec079a3f9940a59082d6a0d8f2cc265fd6b8d8->enter($__internal_89104a13d37528877b27bb27ffec079a3f9940a59082d6a0d8f2cc265fd6b8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 39
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/add-event-map.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\">
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

  \$('input[name=\"event_post[tags]\"]').val(newval);
}
</script>



";
        
        $__internal_89104a13d37528877b27bb27ffec079a3f9940a59082d6a0d8f2cc265fd6b8d8->leave($__internal_89104a13d37528877b27bb27ffec079a3f9940a59082d6a0d8f2cc265fd6b8d8_prof);

        
        $__internal_8a6d1fa7f862a423d339887e914e513081763667c88c471cab5dd7717d5d4d9a->leave($__internal_8a6d1fa7f862a423d339887e914e513081763667c88c471cab5dd7717d5d4d9a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:user/page:page_post_event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 39,  118 => 38,  98 => 27,  88 => 20,  84 => 19,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle:user:control_panel.html.twig' %}

{% block title %}Post an Event{% endblock title %}

{% block content %}

<div class=\"container\">
  <div class=\"row\">

    <div class=\"card\">
      <div class=\"card-content\">
          <span class=\"card-title\">Post an Event</span>

          <p class=\"light\">
            Click on the map to select the place
          </p>
          <div class=\"mock_map_div\" id=\"mock-map\" style=\"height: 500px; width: 100%;\"></div>

          {{ form_start(form) }}
            {{form_widget(form)}}

            <label for=\"chips\">Tags</label>
            <div class=\"chips chips-autocomplete\" name=\"chips\">
            </div>

            <button type=\"submit\" class=\"btn\" name=\"button\">Post</button>
          {{ form_end(form) }}

        </div>
      </div>
    </div>

  </div>
</div>

{% endblock content %}

{% block script %}
<script type=\"text/javascript\" src=\"{{asset('js/add-event-map.js')}}\"></script>

<script type=\"text/javascript\">
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

  \$('input[name=\"event_post[tags]\"]').val(newval);
}
</script>



{% endblock script %}
", "AppBundle:user/page:page_post_event.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/user/page/page_post_event.html.twig");
    }
}
