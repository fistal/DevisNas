<?php

/* NasUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_3ae9cf7da2511fc96642ffae1c461b6b432abc3c1d34f6a90e3479bd9d0cf811 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"row\">
<div class=\"col-md-6 col-md-offset-3\">
<form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_change_password\" class=\"form-horizontal\">
<fieldset>
\t<legend>Changer votre mot de passe</legend>
\t

";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

<div class=\"row\">
\t<div class=\"form-group\">
\t\t<label for=\"username\" class=\"col-sm-4 control-label\">Votre mot de passe : </label>
\t\t<div class=\"col-sm-4\">\t\t\t\t\t\t
\t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>
</div>
<p></p>
<div class=\"row\">
\t<div class=\"form-group\">
\t\t<label for=\"username\" class=\"col-sm-4 control-label\">Nouveau mot de passe : </label>
\t\t<div class=\"col-sm-4\">
\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "first"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>
</div>
<p></p>
<div class=\"row\">
\t<div class=\"form-group\">
\t\t<label for=\"username\" class=\"col-sm-4 control-label\">Confirmer votre mot de passe : </label>
\t\t<div class=\"col-sm-4\">
\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "second"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div> 
</div>\t
<p></p>
";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  <div class=\"form-group\">
    <div class=\"col-sm-offset-4 col-sm-10\">
      <input type=\"submit\" value=\"Valider\" class=\"btn btn-default\"/>
    </div>
  </div> 




\t
</fieldset>\t
</form>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "NasUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 40,  76 => 35,  64 => 26,  52 => 17,  43 => 11,  33 => 6,  29 => 4,  23 => 3,  20 => 2,);
    }
}
