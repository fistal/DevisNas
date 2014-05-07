<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_a657b5a38a8c2407b34e9259cb24bbfb08288091d30c2ad2efa67aa92ef01e16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NasUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NasUserBundle::layout.html.twig";
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
";
        // line 7
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 8
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : null), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 10
        echo "<div class=\"row\">
<div class=\"col-md-6 col-md-offset-3\">
<form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-horizontal\">
<fieldset>
\t<legend><span class=\"icon-key\"></span> Connectez-vous</legend>
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />
\t
\t<div class=\"form-group\">
\t\t<label for=\"username\" class=\"col-sm-4 control-label\">Utilisateur : </label>
\t\t<div class=\"col-sm-4\">
\t\t\t<input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" />
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"username\" class=\"col-sm-4 control-label\">Mot de passe : </label>
\t\t<div class=\"col-sm-4\">
\t\t\t<input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" required=\"required\" />
\t\t</div>
\t</div>
  <div class=\"form-group\">
    <div class=\"col-sm-offset-4 col-sm-4\">
      <div class=\"checkbox\">
        <label>
          <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /> Se souvenir de moi
        </label>
      </div>
    </div>
  </div>\t
\t<div class=\"form-group\">
    <div class=\"col-sm-offset-4 col-sm-10\">
      <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe oublié</a>
    </div>
  </div> 
  <div class=\"form-group\">
    <div class=\"col-sm-offset-4 col-sm-10\">
      <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-default\" value=\"Valider\" />
    </div>
  </div>  

   </fieldset> 
</form>
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
        return array (  83 => 40,  60 => 20,  52 => 15,  46 => 12,  42 => 10,  36 => 8,  34 => 7,  31 => 6,  28 => 5,);
    }
}
