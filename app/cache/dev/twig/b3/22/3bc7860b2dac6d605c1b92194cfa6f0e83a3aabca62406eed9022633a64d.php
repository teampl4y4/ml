<?php

/* MetaLeagueSiteBundle:Default:logo.html.twig */
class __TwigTemplate_b3223bc7860b2dac6d605c1b92194cfa6f0e83a3aabca62406eed9022633a64d extends Twig_Template
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
        echo "<div class=\"logo\">
    <h1><a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("meta_league_homepage");
        echo "\">Meta<span class=\"color bold\">League</span></a></h1>
    <p class=\"meta\">Fantasy eSports</p>
</div>";
    }

    public function getTemplateName()
    {
        return "MetaLeagueSiteBundle:Default:logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
