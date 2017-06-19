<?php

/* AppBundle:landing:page_qa-media.html.twig */
class __TwigTemplate_f5e113594a6650c127e6331379875dd83c63980c02ebbac3e2425ee6da6e205b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:landing:page_qa-media.html.twig", 1);
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
        echo "Qualitative Account Media";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
  ";
        // line 7
        $this->loadTemplate("AppBundle:landing:navbar.html.twig", "AppBundle:landing:page_qa-media.html.twig", 7)->display($context);
        // line 8
        echo "
<div class=\"section\">
  <div class=\"container\">

    <div class=\"row\">
      <h1 class=\"light\">Qualitative Accounting Media</h1>
    </div>
    <div class=\"row\">

      <div class=\"col s12 m12\">

        <p class=\"light\">
          Rosemary Accounts is part of the <a href=\"#\">Qualitative Accounting</a> (QA) ecosystem. As a free to use web service we have the opportunity to act as a place to store media files for use in QA applications. All media (images, video, documents), uploaded to us will be stored and made available in accordance with the QA API Standard.
        </p>

        <p class=\"light\">
          If you're using our services to log your work, this will happen automatically whenever you upload a post with media. Alternatively, you can use one of our <a href=\"#\"> affiliated apps</a> in conjunction with your account. The app should handle the file upload for you. If you want to try it out, however, you can use this form to upload a file.
        </p>

      </div>
    </div>

    ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
      ";
        // line 32
        echo "      <span class=\"red-text\">";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "</span>
    <div class=\"file-field input-field\">
        <div class=\"btn\">
          <span>Choose File</span>
                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
        </div>

        <div class=\"file-path-wrapper\">
            <input class=\"file-path validate\" type=\"text\">
        </div>
    </div>

    <button type=\"submit\" class=\"btn\" name=\"submit\">Upload</button>

    ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
  </div>

</div>
  ";
    }

    public function getTemplateName()
    {
        return "AppBundle:landing:page_qa-media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 46,  79 => 36,  71 => 32,  67 => 30,  43 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:landing:page_qa-media.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/landing/page_qa-media.html.twig");
    }
}
