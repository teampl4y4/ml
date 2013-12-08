<?php

/* MetaLeagueFantasyBundle:Game:new.html.twig */
class __TwigTemplate_8da0341bb6733a534b43abb933bedd78a0b13b93b6181a9d3ea256cc54ee02ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Game creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("admin_game");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "MetaLeagueFantasyBundle:Game:new.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 10,  33 => 6,  29 => 4,  23 => 3,  20 => 2,);
    }
}
