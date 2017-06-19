<?php

/* AppBundle:user/component/cards:card_base.html.twig */
class __TwigTemplate_b752f036ec5745ebb7a97e42a6b016753b84a4fc9619d5a1b42209681abf9f8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'card_title' => array($this, 'block_card_title'),
            'card_content' => array($this, 'block_card_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7a9d76be20a3d4376a503b4907003079e2f8b9fc62dd61ac8087a4cc174f82f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7a9d76be20a3d4376a503b4907003079e2f8b9fc62dd61ac8087a4cc174f82f->enter($__internal_c7a9d76be20a3d4376a503b4907003079e2f8b9fc62dd61ac8087a4cc174f82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user/component/cards:card_base.html.twig"));

        $__internal_c71a83ca53a4d90cc32e4547a981c9b82a4315e20c2bc7747b4f50d3e4f8d051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c71a83ca53a4d90cc32e4547a981c9b82a4315e20c2bc7747b4f50d3e4f8d051->enter($__internal_c71a83ca53a4d90cc32e4547a981c9b82a4315e20c2bc7747b4f50d3e4f8d051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user/component/cards:card_base.html.twig"));

        // line 1
        echo "<div class=\"card\">
  <div class=\"card-content\">
    <span class=\"card-title\">";
        // line 3
        $this->displayBlock('card_title', $context, $blocks);
        echo "</span>

    ";
        // line 5
        $this->displayBlock('card_content', $context, $blocks);
        // line 6
        echo "
  </div>

</div>
";
        
        $__internal_c7a9d76be20a3d4376a503b4907003079e2f8b9fc62dd61ac8087a4cc174f82f->leave($__internal_c7a9d76be20a3d4376a503b4907003079e2f8b9fc62dd61ac8087a4cc174f82f_prof);

        
        $__internal_c71a83ca53a4d90cc32e4547a981c9b82a4315e20c2bc7747b4f50d3e4f8d051->leave($__internal_c71a83ca53a4d90cc32e4547a981c9b82a4315e20c2bc7747b4f50d3e4f8d051_prof);

    }

    // line 3
    public function block_card_title($context, array $blocks = array())
    {
        $__internal_6efe1a44f060a5f9bb3c7de5487fa62a28ea72aff1b4fce3deb87647139de7be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6efe1a44f060a5f9bb3c7de5487fa62a28ea72aff1b4fce3deb87647139de7be->enter($__internal_6efe1a44f060a5f9bb3c7de5487fa62a28ea72aff1b4fce3deb87647139de7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "card_title"));

        $__internal_c5f9fc2c072f84bdb6d972b1f10e264dea950ab428f6d1e35cf1159f3471ad17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5f9fc2c072f84bdb6d972b1f10e264dea950ab428f6d1e35cf1159f3471ad17->enter($__internal_c5f9fc2c072f84bdb6d972b1f10e264dea950ab428f6d1e35cf1159f3471ad17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "card_title"));

        
        $__internal_c5f9fc2c072f84bdb6d972b1f10e264dea950ab428f6d1e35cf1159f3471ad17->leave($__internal_c5f9fc2c072f84bdb6d972b1f10e264dea950ab428f6d1e35cf1159f3471ad17_prof);

        
        $__internal_6efe1a44f060a5f9bb3c7de5487fa62a28ea72aff1b4fce3deb87647139de7be->leave($__internal_6efe1a44f060a5f9bb3c7de5487fa62a28ea72aff1b4fce3deb87647139de7be_prof);

    }

    // line 5
    public function block_card_content($context, array $blocks = array())
    {
        $__internal_152af2f523a215fa150cc80bcd7aaf274e36f560ddc92f52f22776975131566c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_152af2f523a215fa150cc80bcd7aaf274e36f560ddc92f52f22776975131566c->enter($__internal_152af2f523a215fa150cc80bcd7aaf274e36f560ddc92f52f22776975131566c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "card_content"));

        $__internal_3dd9e5825378eb72970a54175de6679bce4d6f16c53bf09b53a4a94b131e2eec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dd9e5825378eb72970a54175de6679bce4d6f16c53bf09b53a4a94b131e2eec->enter($__internal_3dd9e5825378eb72970a54175de6679bce4d6f16c53bf09b53a4a94b131e2eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "card_content"));

        
        $__internal_3dd9e5825378eb72970a54175de6679bce4d6f16c53bf09b53a4a94b131e2eec->leave($__internal_3dd9e5825378eb72970a54175de6679bce4d6f16c53bf09b53a4a94b131e2eec_prof);

        
        $__internal_152af2f523a215fa150cc80bcd7aaf274e36f560ddc92f52f22776975131566c->leave($__internal_152af2f523a215fa150cc80bcd7aaf274e36f560ddc92f52f22776975131566c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:user/component/cards:card_base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  69 => 5,  52 => 3,  38 => 6,  36 => 5,  31 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"card\">
  <div class=\"card-content\">
    <span class=\"card-title\">{% block card_title %}{% endblock card_title %}</span>

    {% block card_content %}{% endblock card_content %}

  </div>

</div>
", "AppBundle:user/component/cards:card_base.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/user/component/cards/card_base.html.twig");
    }
}
