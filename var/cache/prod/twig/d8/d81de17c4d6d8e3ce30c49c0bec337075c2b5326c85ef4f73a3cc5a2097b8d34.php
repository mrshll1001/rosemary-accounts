<?php

/* AppBundle:user/page:page_incoming-posts.html.twig */
class __TwigTemplate_6f71fcc574ee63949caed896dceaaa2357e37b4b917c5230e189acd14b2861b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:user:control_panel.html.twig", "AppBundle:user/page:page_incoming-posts.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Incoming Posts";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"container\">
  <div class=\"row\">
    <h1 class=\"light\">Incoming Posts</h1>
  </div>

  <div class=\"row\">
    <div class=\"col s12 m12\">
      <p class=\"light\">
        If you and your team are <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("configure_apps");
        echo "\">using apps</a> to help you collect accounts information, this page is designed to help you make sense of this. Whenever you or your team use an app to upload accounts information or media, they will be stored here and won't be able to be seen by the public until you approve of them. This also means that they are not considered in any budget summaries or calculations made by Rosemary until you approve.
      </p>

      <p class=\"light\">
        All you need to do to approve of a post is to click <a href=\"#\" class=\"btn\">Approve</a>, and it gets added to your profile. Before approving, you have the opportunity to edit the post by changing details; you may want to add or remove tags, or add data to the post such as location.
      </p>

      <p class=\"light\">
        Alternatively, you can <a href=\"#\" class=\"btn red\">Remove</a> a post. When you do this, the post is removed from the system altogether. There can be several reasons to do this, but most of the time you will want to edit the post instead of deleting it.
      </p>
    </div>
  </div>

  <div class=\"row\">
    <h3 class=\"light\">";
        // line 29
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["posts"] ?? null)), "html", null, true);
        echo " posts to approve</h3>
  </div>


  <div class=\"row\">
    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
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
            // line 35
            echo "
      <div class=\"col s12\">
        ";
            // line 37
            $this->loadTemplate("AppBundle:profile:card_post-master.html.twig", "AppBundle:user/page:page_incoming-posts.html.twig", 37)->display($context);
            // line 38
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "  </div>
</div>


";
    }

    public function getTemplateName()
    {
        return "AppBundle:user/page:page_incoming-posts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 41,  97 => 38,  95 => 37,  91 => 35,  74 => 34,  66 => 29,  49 => 15,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:user/page:page_incoming-posts.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/user/page/page_incoming-posts.html.twig");
    }
}
