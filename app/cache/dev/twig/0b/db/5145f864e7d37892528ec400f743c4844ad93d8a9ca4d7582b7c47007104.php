<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_0bdb5145f864e7d37892528ec400f743c4844ad93d8a9ca4d7582b7c47007104 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"page-head\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>Register Your Account</h2>
                </div>
            </div>
        </div>
    </div>


    <div class=\"content\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">

                    <h3 class=\"title\">Register Today <span class=\"color\">!!!</span></h3>
                    <h4 >Morbi tincidunt posuere turpis eu laoreet</h4>
                    <p>Nullam in est urna. In vitae adipiscing enim. Curabitur rhoncus condimentum lorem, non convallis dolor faucibus eget. In vitae adipiscing enim. Curabitur rhoncus condimentum lorem, non convallis dolor faucibus eget. In ut nulla est. </p>
                    <h5>Maecenas hendrerit neque id</h5>
                    <ul>
                        <li>Etiam adipiscing posuere justo, nec iaculis justo dictum non</li>
                        <li>Cras tincidunt mi non arcu hendrerit eleifend</li>
                        <li>Aenean ullamcorper justo tincidunt justo aliquet et lobortis diam faucibus</li>
                        <li>Maecenas hendrerit neque id ante dictum mattis</li>
                        <li>Vivamus non neque lacus, et cursus tortor</li>
                    </ul>

                    <p>Nullam in est urna. In vitae adipiscing enim. In ut nulla est. Nullam in est urna. In vitae adipiscing enim. Curabitur rhoncus condimentum lorem, non convallis dolor faucibus eget. In ut nulla est. </p>
                </div>


                <div class=\"col-md-6\">
                    <div class=\"formy well\">

                        <h4 class=\"title\">Register Your Account</h4>

                        ";
        // line 42
        $this->env->loadTemplate("FOSUserBundle:Registration:register_content.html.twig")->display($context);
        // line 43
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>



";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 43,  71 => 42,  31 => 4,  28 => 3,);
    }
}
