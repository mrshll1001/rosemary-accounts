<?php

/* AppBundle:landing:organisation_list.html.twig */
class __TwigTemplate_c22cba05de29008ae618fc05efd20f56edeb89ac88f5274350cf623ec8d232a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:landing:organisation_list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Organisations";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
  ";
        // line 7
        $this->loadTemplate("AppBundle:landing:navbar.html.twig", "AppBundle:landing:organisation_list.html.twig", 7)->display($context);
        // line 8
        echo "
<div class=\"container\">
  <div class=\"row\">
    <h1 class=\"light\">List of Organisations</h1>
  </div>

  <div class=\"row\">
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orgs"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["org"]) {
            // line 16
            echo "      <div class=\"col s12 m3\">
        ";
            // line 17
            $this->loadTemplate("AppBundle:landing/component:card_user_list.html.twig", "AppBundle:landing:organisation_list.html.twig", 17)->display($context);
            // line 18
            echo "      </div>

    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['org'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "  </div>

</div>

";
    }

    public function getTemplateName()
    {
        return "AppBundle:landing:organisation_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 21,  74 => 18,  72 => 17,  69 => 16,  52 => 15,  43 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:landing:organisation_list.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/landing/organisation_list.html.twig");
    }
}
