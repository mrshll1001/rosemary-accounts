<?php

/* AppBundle:profile:card_compound.html.twig */
class __TwigTemplate_075a1ce59418d8c32fc080d0057ea7fac0602e5874550df5b3f3e18b6461e762 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'tags' => array($this, 'block_tags'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e09008f3fdef57941a11ecd77a0c59c6943ec03ae538b75e584213e0db7d1ace = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e09008f3fdef57941a11ecd77a0c59c6943ec03ae538b75e584213e0db7d1ace->enter($__internal_e09008f3fdef57941a11ecd77a0c59c6943ec03ae538b75e584213e0db7d1ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:profile:card_compound.html.twig"));

        $__internal_f3ded2c5f87515d92cd61aa08f1a9db4dcbc3a2c336c3ed3155ade3e88774e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3ded2c5f87515d92cd61aa08f1a9db4dcbc3a2c336c3ed3155ade3e88774e7f->enter($__internal_f3ded2c5f87515d92cd61aa08f1a9db4dcbc3a2c336c3ed3155ade3e88774e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:profile:card_compound.html.twig"));

        // line 1
        echo "<div class=\"card\">
";
        // line 3
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 3, $this->getSourceContext()); })()), "mediaURI", array()))) {
            // line 4
            echo "  <div class=\"card-image\">
      <img class=\"materialboxed\" data-caption=\"";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 5, $this->getSourceContext()); })()), "description", array()), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 5, $this->getSourceContext()); })()), "mediaURI", array()), "html", null, true);
            echo "\" alt=\"Image stored at ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 5, $this->getSourceContext()); })()), "mediaURI", array()), "html", null, true);
            echo "\" />
      <span class=\"card-title\">";
            // line 6
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 6, $this->getSourceContext()); })()), "dateGiven", array()), "d/m/Y"), "html", null, true);
            echo "</span>
  </div>
";
        }
        // line 9
        echo "

  <div class=\"card-content\">
    ";
        // line 13
        echo "    ";
        if ((null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 13, $this->getSourceContext()); })()), "mediaURI", array()))) {
            // line 14
            echo "      <span class=\"card-title\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 14, $this->getSourceContext()); })()), "dateGiven", array()), "d/m/Y"), "html", null, true);
            echo "</span>
    ";
        }
        // line 16
        echo "
    ";
        // line 18
        echo "    ";
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 18, $this->getSourceContext()); })()), "locationName", array()))) {
            // line 19
            echo "    <p class=\"light grey-text\">
      <i class=\"material-icons\">place</i> At <em>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 20, $this->getSourceContext()); })()), "locationName", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 20, $this->getSourceContext()); })()), "locationAddress", array()), "html", null, true);
            echo "</em>
    </p>
    ";
        }
        // line 23
        echo "
    ";
        // line 25
        echo "    ";
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 25, $this->getSourceContext()); })()), "financialValue", array()))) {
            // line 26
            echo "      ";
            $this->loadTemplate("AppBundle:profile:financial_descriptions.html.twig", "AppBundle:profile:card_compound.html.twig", 26)->display($context);
            // line 27
            echo "    ";
        } else {
            // line 28
            echo "     <p>
       ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 29, $this->getSourceContext()); })()), "description", array()), "html", null, true);
            echo "
     </p>
    ";
        }
        // line 32
        echo "
    <div class=\"map-container\">

      <div class=\"post-actionbar\">
        ";
        // line 37
        echo "        ";
        if (( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 37, $this->getSourceContext()); })()), "locationLatitude", array())) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 37, $this->getSourceContext()); })()), "locationLongitude", array())))) {
            // line 38
            echo "        <a class=\"btn-floating halfway-fab waves-effect waves-light blue map-reveal\"><i class=\"material-icons\">map</i></a>
        ";
        }
        // line 40
        echo "
        ";
        // line 42
        echo "        ";
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 42, $this->getSourceContext()); })()), "mediaURI", array()))) {
            // line 43
            echo "        <a class=\"btn-floating halfway-fab waves-effect waves-light red\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 43, $this->getSourceContext()); })()), "mediaURI", array()), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"material-icons\">image</i></a>
        ";
        }
        // line 45
        echo "      </div>

      ";
        // line 48
        echo "      ";
        if (( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 48, $this->getSourceContext()); })()), "locationLatitude", array())) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 48, $this->getSourceContext()); })()), "locationLongitude", array())))) {
            // line 49
            echo "        ";
            // line 50
            echo "        <div data-latitude=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 50, $this->getSourceContext()); })()), "locationLatitude", array()), "html", null, true);
            echo "\" data-longitude=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 50, $this->getSourceContext()); })()), "locationLongitude", array()), "html", null, true);
            echo "\" id=\"map-post-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 50, $this->getSourceContext()); })()), "id", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_random($this->env, 100), "html", null, true);
            echo "\" class=\"hidden-map\" style=\"height: 350px; width: 100%; margin-bottom: 1em;\"></div>
      ";
        }
        // line 52
        echo "    </div>

    <div class=\"tags-container\">
      ";
        // line 55
        $this->displayBlock('tags', $context, $blocks);
        // line 67
        echo "    </div>

    ";
        // line 69
        $this->displayBlock('form', $context, $blocks);
        // line 72
        echo "
  </div>

</div>
";
        
        $__internal_e09008f3fdef57941a11ecd77a0c59c6943ec03ae538b75e584213e0db7d1ace->leave($__internal_e09008f3fdef57941a11ecd77a0c59c6943ec03ae538b75e584213e0db7d1ace_prof);

        
        $__internal_f3ded2c5f87515d92cd61aa08f1a9db4dcbc3a2c336c3ed3155ade3e88774e7f->leave($__internal_f3ded2c5f87515d92cd61aa08f1a9db4dcbc3a2c336c3ed3155ade3e88774e7f_prof);

    }

    // line 55
    public function block_tags($context, array $blocks = array())
    {
        $__internal_f85066f26e393f52b9955ac652ca646ee1a677de1dfe39232f69be8cd1788491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f85066f26e393f52b9955ac652ca646ee1a677de1dfe39232f69be8cd1788491->enter($__internal_f85066f26e393f52b9955ac652ca646ee1a677de1dfe39232f69be8cd1788491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tags"));

        $__internal_8f8322e3bc091fbf01c2711b3524af31fa479eb922aea38af81e3e23a2ed4062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f8322e3bc091fbf01c2711b3524af31fa479eb922aea38af81e3e23a2ed4062->enter($__internal_8f8322e3bc091fbf01c2711b3524af31fa479eb922aea38af81e3e23a2ed4062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tags"));

        echo " ";
        // line 56
        echo "
        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 57, $this->getSourceContext()); })()), "tags", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 58
            echo "        <div class=\"chip\">
          ";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tag"], "name", array()), "html", null, true);
            echo "
        </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 62
            echo "        <p>
          This post has no tags! <a href=\"#\">Contact us</a> to fix it!
        </p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "      ";
        
        $__internal_8f8322e3bc091fbf01c2711b3524af31fa479eb922aea38af81e3e23a2ed4062->leave($__internal_8f8322e3bc091fbf01c2711b3524af31fa479eb922aea38af81e3e23a2ed4062_prof);

        
        $__internal_f85066f26e393f52b9955ac652ca646ee1a677de1dfe39232f69be8cd1788491->leave($__internal_f85066f26e393f52b9955ac652ca646ee1a677de1dfe39232f69be8cd1788491_prof);

    }

    // line 69
    public function block_form($context, array $blocks = array())
    {
        $__internal_4e001675a252dcbdfb65eed752ff105bdd8455e486fb5c04e8200982d133f401 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e001675a252dcbdfb65eed752ff105bdd8455e486fb5c04e8200982d133f401->enter($__internal_4e001675a252dcbdfb65eed752ff105bdd8455e486fb5c04e8200982d133f401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_4957b517315615458603fad622994d295a91e77c7f2a441d074483db706bcaab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4957b517315615458603fad622994d295a91e77c7f2a441d074483db706bcaab->enter($__internal_4957b517315615458603fad622994d295a91e77c7f2a441d074483db706bcaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 70
        echo "
    ";
        
        $__internal_4957b517315615458603fad622994d295a91e77c7f2a441d074483db706bcaab->leave($__internal_4957b517315615458603fad622994d295a91e77c7f2a441d074483db706bcaab_prof);

        
        $__internal_4e001675a252dcbdfb65eed752ff105bdd8455e486fb5c04e8200982d133f401->leave($__internal_4e001675a252dcbdfb65eed752ff105bdd8455e486fb5c04e8200982d133f401_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:profile:card_compound.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 70,  222 => 69,  212 => 66,  203 => 62,  195 => 59,  192 => 58,  187 => 57,  184 => 56,  174 => 55,  160 => 72,  158 => 69,  154 => 67,  152 => 55,  147 => 52,  135 => 50,  133 => 49,  130 => 48,  126 => 45,  120 => 43,  117 => 42,  114 => 40,  110 => 38,  107 => 37,  101 => 32,  95 => 29,  92 => 28,  89 => 27,  86 => 26,  83 => 25,  80 => 23,  72 => 20,  69 => 19,  66 => 18,  63 => 16,  57 => 14,  54 => 13,  49 => 9,  43 => 6,  35 => 5,  32 => 4,  30 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"card\">
{# Decide whether or not it will be an image card #}
{% if post.mediaURI is not null %}
  <div class=\"card-image\">
      <img class=\"materialboxed\" data-caption=\"{{post.description}}\" src=\"{{post.mediaURI}}\" alt=\"Image stored at {{post.mediaURI}}\" />
      <span class=\"card-title\">{{post.dateGiven|date(\"d/m/Y\")}}</span>
  </div>
{% endif %}


  <div class=\"card-content\">
    {# If it's NOT an image card, then we need to put the date/title in the card-content div #}
    {% if post.mediaURI is null %}
      <span class=\"card-title\">{{post.dateGiven|date(\"d/m/Y\")}}</span>
    {% endif %}

    {# Next, we decide what happens if there's an address' #}
    {% if post.locationName is not null %}
    <p class=\"light grey-text\">
      <i class=\"material-icons\">place</i> At <em>{{post.locationName}}, {{post.locationAddress}}</em>
    </p>
    {% endif %}

    {# Next we decide how to display the description. If the post's financial value is not null, then we offload the decision to the financial template. Else we just stick the description on there #}
    {% if post.financialValue is not null %}
      {% include 'AppBundle:profile:financial_descriptions.html.twig' %}
    {% else %}
     <p>
       {{post.description}}
     </p>
    {% endif %}

    <div class=\"map-container\">

      <div class=\"post-actionbar\">
        {# If we have location data we can decide to show a button to reveal the map #}
        {% if post.locationLatitude is not null and post.locationLongitude is not null %}
        <a class=\"btn-floating halfway-fab waves-effect waves-light blue map-reveal\"><i class=\"material-icons\">map</i></a>
        {% endif %}

        {# If we have image data then we know to include a button to view the larger image #}
        {% if post.mediaURI is not null %}
        <a class=\"btn-floating halfway-fab waves-effect waves-light red\" href=\"{{post.mediaURI}}\" target=\"_blank\"><i class=\"material-icons\">image</i></a>
        {% endif %}
      </div>

      {# If we have location data then we create a map with the data buried in the div #}
      {% if post.locationLatitude is not null and post.locationLongitude is not null %}
        {# Note: a random integer is added to the end of the id div so that we can have multiple copies of the map on the /what page when filtering by tags #}
        <div data-latitude=\"{{post.locationLatitude}}\" data-longitude=\"{{post.locationLongitude}}\" id=\"map-post-{{post.id}}-{{random(100)}}\" class=\"hidden-map\" style=\"height: 350px; width: 100%; margin-bottom: 1em;\"></div>
      {% endif %}
    </div>

    <div class=\"tags-container\">
      {% block tags %} {# Allow block to be overridden in case we need to put in a different route for the tags to link off to #}

        {% for tag in post.tags %}
        <div class=\"chip\">
          {{tag.name}}
        </div>
        {% else %}
        <p>
          This post has no tags! <a href=\"#\">Contact us</a> to fix it!
        </p>
        {% endfor %}
      {% endblock tags %}
    </div>

    {% block form %}

    {% endblock form %}

  </div>

</div>
", "AppBundle:profile:card_compound.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/profile/card_compound.html.twig");
    }
}
