<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_1514cb2ffafb72d0ed11a00c0b94b0f3063d42bcb9a83f1bccffde5c35acbad0 extends Twig_Template
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

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"page-head\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>Login</h2>
                        ";
        // line 12
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 13
            echo "                            <h4>Error: <span class=\"color\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</span></h4>
                        ";
        }
        // line 15
        echo "                </div>
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

                        <h4 class=\"title\">Login to Your Account</h4>

                        <div class=\"form\">
                            <form action=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-horizontal\" role=\"form\">
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                                <div class=\"form-group\">
                                    <label for=\"username\" class=\"col-lg-2 control-label\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                    <div class=\"col-lg-10\">
                                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <label for=\"password\" class=\"col-lg-2 control-label\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                    <div class=\"col-lg-10\">
                                        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <div class=\"col-lg-offset-2 col-lg-10\">
                                        <div class=\"checkbox\">
                                            <label>
                                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <div class=\"col-lg-offset-2 col-lg-10\">
                                        <button type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                                    </div>
                                </div>
                            </form>

                            <hr>
                            <h5>New Account</h5>
                            <!-- Register link -->
                            Don't have an Account? <b><a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Register</a></b>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 85,  129 => 77,  118 => 69,  105 => 59,  97 => 54,  92 => 52,  86 => 49,  82 => 48,  47 => 15,  41 => 13,  39 => 12,  31 => 6,  28 => 5,);
    }
}
