<?php

/* AppBundle:profile:chip_tag.html.twig */
class __TwigTemplate_b1d32966927ae24afe02f9a9617bb5e6404745daf2aac8fdf66b4112c04cb469 extends Twig_Template
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
";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["tag"] ?? null), "name", array()), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:profile:chip_tag.html.twig";
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
        return new Twig_Source("", "AppBundle:profile:chip_tag.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/profile/chip_tag.html.twig");
    }
}
