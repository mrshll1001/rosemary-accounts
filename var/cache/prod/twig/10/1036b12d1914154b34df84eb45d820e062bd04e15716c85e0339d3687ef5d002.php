<?php

/* AppBundle:user/component:tag.html.twig */
class __TwigTemplate_cb1f1daaae42e23c9fb187f72baaec50e96a05b6274ffd5c9d05dd721ebd173a extends Twig_Template
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
        // line 1
        echo "<div class=\"chip\">
<a href=\"#\">";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["tag"] ?? null), "name", array()), "html", null, true);
        echo "</a>  
</div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:user/component:tag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:user/component:tag.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/user/component/tag.html.twig");
    }
}
