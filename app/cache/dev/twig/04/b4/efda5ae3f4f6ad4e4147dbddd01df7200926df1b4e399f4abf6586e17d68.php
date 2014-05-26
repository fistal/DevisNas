<?php

/* NasUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_04b4efda5ae3f4f6ad4e4147dbddd01df7200926df1b4e399f4abf6586e17d68 extends Twig_Template
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
        // line 2
        echo "

<div class=\"row\">
<div class=\"col-md-6 col-md-offset-3\">
\t<div class=\"alert alert-success\">
        Votre mot de passe à été modifié !
      </div>
    <p>Votre nom utilisateur : ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
        echo "</p>
    <p>Votre adresse mail : ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "</p>
\t<p>Vos droits : ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "roles"), 0, array(), "array"), "html", null, true);
        echo "</p>

</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "NasUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 11,  32 => 10,  19 => 2,  31 => 4,  28 => 9,);
    }
}
