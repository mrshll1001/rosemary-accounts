<?php

/* AppBundle:landing:page_profile.html.twig */
class __TwigTemplate_9d7aa6a36a30377fb15c332baf3727dd78ce34b574b910b97db64b6d01c56c99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:landing:page_profile.html.twig", 1);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["organisation"] ?? null), "organisationName", array()), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        $this->loadTemplate("AppBundle:landing:navbar.html.twig", "AppBundle:landing:page_profile.html.twig", 6)->display($context);
        // line 7
        echo "
  <div class=\"container\">
    <div class=\"row\">

      <div class=\"col s12 m4\">
        ";
        // line 12
        $this->loadTemplate("AppBundle:profile:card_organisation_badge.html.twig", "AppBundle:landing:page_profile.html.twig", 12)->display($context);
        // line 13
        echo "      </div>

      <div class=\"col s12 m8\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["organisation"] ?? null), "posts", array())));
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
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 17
            echo "
          ";
            // line 18
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "reconciled", array())) {
                // line 19
                echo "
            ";
                // line 20
                $this->loadTemplate("AppBundle:profile:card_post-master.html.twig", "AppBundle:landing:page_profile.html.twig", 20)->display($context);
                // line 21
                echo "
          ";
            }
            // line 23
            echo "




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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "      </div>

    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "AppBundle:landing:page_profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 29,  86 => 23,  82 => 21,  80 => 20,  77 => 19,  75 => 18,  72 => 17,  55 => 16,  50 => 13,  48 => 12,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:landing:page_profile.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/landing/page_profile.html.twig");
    }
}
