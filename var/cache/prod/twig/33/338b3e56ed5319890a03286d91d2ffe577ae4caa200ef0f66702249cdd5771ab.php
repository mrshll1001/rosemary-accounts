<?php

/* AppBundle:landing:index.html.twig */
class __TwigTemplate_2752933a11e4a1356a2623562bae81391f85f6577bfa5e2a8504704d8d5436e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:landing:index.html.twig", 1);
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
        echo "Free Charity Accounts Software";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
  ";
        // line 8
        echo "  ";
        $this->loadTemplate("AppBundle:landing:navbar.html.twig", "AppBundle:landing:index.html.twig", 8)->display($context);
        // line 9
        echo "

    <div id=\"index-banner\" class=\"parallax-container\">
      <div class=\"section no-pad-bot\">
        <div class=\"container\">
          <br><br>
          <h1 class=\"header center green-text text-lighten-1\">Rosemary Accounts</h1>
          <div class=\"row center\">
            <h5 class=\"header col s12 light\">A new approach to Charity and Non-Profit accounting</h5>
          </div>
          <div class=\"row center\">
            <a href=\"http://materializecss.com/getting-started.html\" id=\"download-button\" class=\"btn-large waves-effect waves-light green lighten-1\">Get Started</a>
          </div>
          <br><br>

        </div>
      </div>
      <div class=\"parallax\"><img src=\"http://topfoodfacts.com/wp-content/uploads/2013/10/rosemary.jpg\" alt=\"Unsplashed background img 1\"></div>
    </div>


    <div class=\"container\">
      <div class=\"section\">

        <!--   Icon Section   -->
        <div class=\"row\">
          <div class=\"col s12 m4\">
            <div class=\"icon-block\">
              <h2 class=\"center brown-text\"><i class=\"material-icons\">account_balance</i></h2>
              <h5 class=\"center\">For Charities</h5>

              <p class=\"light\">
                We provide a <em>free</em>, lightweight, accounting tool designed to showcase your finances <em>and your work</em> together, and generate budget reports. <a href=\"#\">Learn more</a>.
              </p>
            </div>
          </div>

          <div class=\"col s12 m4\">
            <div class=\"icon-block\">
              <h2 class=\"center brown-text\"><i class=\"material-icons\">group</i></h2>
              <h5 class=\"center\">For People</h5>

              <p class=\"light\">
                Designed to be easy to read, we provide a way for you to engage with an organisation's work and spending in a way that's meaningful for you. Say goodbye to pouring over meaningless spreadsheets, dive in, and <a href=\"#\">explore</a>.
              </p>
            </div>
          </div>

          <div class=\"col s12 m4\">
            <div class=\"icon-block\">
              <h2 class=\"center brown-text\"><i class=\"material-icons\">code</i></h2>
              <h5 class=\"center\">For Developers</h5>

              <p class=\"light\">We're part of the Qualitative Accounting ecosystem, and all of the data uploaded to the site is made open. You can build with us by using <a href=\"#\">our api</a>.
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>


    <div class=\"parallax-container valign-wrapper\">
      <div class=\"section no-pad-bot\">
        <div class=\"container\">
          <div class=\"row center\">
            <h5 class=\"header col s12 light\">Say goodbye to boring spreadsheets</h5>
          </div>
          <div class=\"row center\">
            <a href=\"#\" id=\"download-button\" class=\"btn-large waves-effect waves-light green lighten-1\">See examples</a>
          </div>
        </div>
      </div>
      <div class=\"parallax\"><img src=\"http://inphyusion.com/wp-content/uploads/2012/01/rosemary2.jpg\" alt=\"Unsplashed background img 2\"></div>
    </div>

    <div class=\"container\">
      <div class=\"section\">

        <div class=\"row\">
          <div class=\"col s12 center\">
            <h3><i class=\"mdi-content-send brown-text\"></i></h3>
            <h4>About</h4>

            <p class=\"left-align light\">
              Rosemary Accounts is part of a research project being undertaken by <a href=\"http://openlab.ncl.ac.uk\">Open Lab</a> at Newcastle University which looks at Transparency, Charities, and Technologies. Rosemary is designed to be an experimental tool to reframe producing accounts in charities by supporting organisations in presenting their work to the outside world, and supporting the outside world in finding it.
            </p>

            <p>
              Rosemary Accounts is therefore provided <em>free of charge</em> to those who wish to use it, with the understanding that: all data uploaded will be publically accessible; the software may be discontinued with short notice; and you may be asked to discuss your experience with the researchers.
            </p>
          </div>
        </div>

      </div>
    </div>


    <div class=\"parallax-container valign-wrapper\">
      <div class=\"section no-pad-bot\">
        <div class=\"container\">
          <div class=\"row center\">
            <h5 class=\"header col s12 light\">Build with us by using our Open Data api</h5>
          </div>
          <div class=\"row center\">
            <a href=\"#\" id=\"download-button\" class=\"btn-large waves-effect waves-light green lighten-1\">Check it out</a>
          </div>
        </div>
      </div>
      <div class=\"parallax\"><img src=\"http://www.wallpaperspoints.com/wp-content/uploads/2013/05/natural_green_forest_wallpaper.jpg\" alt=\"Unsplashed background img 3\"></div>
    </div>

    <footer class=\"page-footer green\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col l6 s12\">
            <h5 class=\"white-text\">Contact Us</h5>
            <p class=\"grey-text text-lighten-4\">
                For more information, please contact Matt Marshall at <a class=\"grey-text text-lighten-4\" href=\"mailto:m.marshall@newcastle.ac.uk\">m.marshall@ncl.ac.uk</a>
            </p>


          </div>
        </div>
      </div>
      <div class=\"footer-copyright\">
        <div class=\"container\">

        </div>
      </div>
    </footer>


";
    }

    public function getTemplateName()
    {
        return "AppBundle:landing:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  41 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:landing:index.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/landing/index.html.twig");
    }
}
