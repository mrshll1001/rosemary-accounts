<?php

/* AppBundle:user/page:page_search-tags.html.twig */
class __TwigTemplate_cae9e83035898dca7d7cf729eec1fd231d472cef6a218577bd44f5640edc865b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:user:control_panel.html.twig", "AppBundle:user/page:page_search-tags.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Search tags";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "  <h1 class=\"light\">Search: ";
        echo twig_escape_filter($this->env, ($context["searchTerm"] ?? null), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["posts"] ?? null)), "html", null, true);
        echo " results)</h1>

  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col s12 m12\">
        <form>
            <div class=\"chips chips-initial\">

            </div>

            <button type=\"submit\" name=\"button\" class=\"btn\">Search</button>
        </form>
      </div>
    </div>
  </div>

";
    }

    // line 24
    public function block_script($context, array $blocks = array())
    {
        // line 25
        echo "<script type=\"text/javascript\">
    \$('.chips').material_chip();

    data = [{tag: \"";
        // line 28
        echo twig_escape_filter($this->env, ($context["searchTerm"] ?? null), "html", null, true);
        echo "\"}];

    \$('.chips-initial').material_chip({
    data: data,
  });

  //   \$('.chips-initial').material_chip({
  //   data: [{
  //     tag: 'Apple',
  //   }, {
  //     tag: 'Microsoft',
  //   }, {
  //     tag: 'Google',
  //   }],
  // });

</script>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:user/page:page_search-tags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 28,  66 => 25,  63 => 24,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:user/page:page_search-tags.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/user/page/page_search-tags.html.twig");
    }
}
