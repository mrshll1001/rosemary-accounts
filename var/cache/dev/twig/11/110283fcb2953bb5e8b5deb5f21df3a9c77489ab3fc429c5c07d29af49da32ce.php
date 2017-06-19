<?php

/* AppBundle:profile:profile_header.html.twig */
class __TwigTemplate_2992f1bfc4f212c8af49216f9d9bc7ac73fe9ca61e8917304178a6a4c7df29b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f79b78a9bd79876f4e33ef84e0aed180be8de7502ccaa3d23a2e8b71d69055c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f79b78a9bd79876f4e33ef84e0aed180be8de7502ccaa3d23a2e8b71d69055c->enter($__internal_4f79b78a9bd79876f4e33ef84e0aed180be8de7502ccaa3d23a2e8b71d69055c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:profile:profile_header.html.twig"));

        $__internal_9f00e0e1f288228694f9fffdb05935991b8739acdaed2133cca3b3851a2df35c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f00e0e1f288228694f9fffdb05935991b8739acdaed2133cca3b3851a2df35c->enter($__internal_9f00e0e1f288228694f9fffdb05935991b8739acdaed2133cca3b3851a2df35c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:profile:profile_header.html.twig"));

        // line 1
        echo "<div id=\"profile-banner\" class=\"parallax-container\">
  <div class=\"section no-pad-bot\">
    <div class=\"container\">
      <br><br>
      <h1 class=\"header light text-lighten-1\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["organisation"]) || array_key_exists("organisation", $context) ? $context["organisation"] : (function () { throw new Twig_Error_Runtime('Variable "organisation" does not exist.', 5, $this->getSourceContext()); })()), "organisationName", array()), "html", null, true);
        echo "</h1>
      <div class=\"row\">
        <div class=\"col s12 m6\">

          <h5 class=\"header col s12\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["organisation"]) || array_key_exists("organisation", $context) ? $context["organisation"] : (function () { throw new Twig_Error_Runtime('Variable "organisation" does not exist.', 9, $this->getSourceContext()); })()), "organisationDescription", array()), "html", null, true);
        echo "</h5>

          <h5 class=\"header col s12 light\"><i class=\"material-icons\">email</i> <a class=\"green-text\" href=\"mailto:";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["organisation"]) || array_key_exists("organisation", $context) ? $context["organisation"] : (function () { throw new Twig_Error_Runtime('Variable "organisation" does not exist.', 11, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["organisation"]) || array_key_exists("organisation", $context) ? $context["organisation"] : (function () { throw new Twig_Error_Runtime('Variable "organisation" does not exist.', 11, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</a></h4>
        </div>

        <div class=\"col s12 m6\">
          ";
        // line 15
        $this->loadTemplate("AppBundle:profile:card_summary.html.twig", "AppBundle:profile:profile_header.html.twig", 15)->display($context);
        // line 16
        echo "        </div>
      </div>
      <div class=\"row\">
        <div class=\"col s12\">
          ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tag_map"]) || array_key_exists("tag_map", $context) ? $context["tag_map"] : (function () { throw new Twig_Error_Runtime('Variable "tag_map" does not exist.', 20, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 21
            echo "            <div class=\"chip\">
                ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tag"], "tag", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tag"], "number", array()), "html", null, true);
            echo ")
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </div>
      </div>
      <br><br>

    </div>
  </div>
  <div class=\"parallax\"><img src=\"http://sarahsexyplants.com/wp-content/uploads/2015/01/Rosemary-in-Flower-1024x768.jpg\" alt=\"Unsplashed background img 1\"></div>
</div>
";
        
        $__internal_4f79b78a9bd79876f4e33ef84e0aed180be8de7502ccaa3d23a2e8b71d69055c->leave($__internal_4f79b78a9bd79876f4e33ef84e0aed180be8de7502ccaa3d23a2e8b71d69055c_prof);

        
        $__internal_9f00e0e1f288228694f9fffdb05935991b8739acdaed2133cca3b3851a2df35c->leave($__internal_9f00e0e1f288228694f9fffdb05935991b8739acdaed2133cca3b3851a2df35c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:profile:profile_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 25,  67 => 22,  64 => 21,  60 => 20,  54 => 16,  52 => 15,  43 => 11,  38 => 9,  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"profile-banner\" class=\"parallax-container\">
  <div class=\"section no-pad-bot\">
    <div class=\"container\">
      <br><br>
      <h1 class=\"header light text-lighten-1\">{{organisation.organisationName}}</h1>
      <div class=\"row\">
        <div class=\"col s12 m6\">

          <h5 class=\"header col s12\">{{organisation.organisationDescription }}</h5>

          <h5 class=\"header col s12 light\"><i class=\"material-icons\">email</i> <a class=\"green-text\" href=\"mailto:{{organisation.email}}\">{{organisation.email}}</a></h4>
        </div>

        <div class=\"col s12 m6\">
          {% include 'AppBundle:profile:card_summary.html.twig'%}
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col s12\">
          {% for tag in tag_map %}
            <div class=\"chip\">
                {{tag.tag}} ({{tag.number}})
            </div>
          {% endfor %}
        </div>
      </div>
      <br><br>

    </div>
  </div>
  <div class=\"parallax\"><img src=\"http://sarahsexyplants.com/wp-content/uploads/2015/01/Rosemary-in-Flower-1024x768.jpg\" alt=\"Unsplashed background img 1\"></div>
</div>
", "AppBundle:profile:profile_header.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/profile/profile_header.html.twig");
    }
}
