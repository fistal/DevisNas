<?php

/* NasAppBundle:Intervention:ajouter.html.twig */
class __TwigTemplate_5a53b2ad8d32cf7cb3ae7a60067c58dc0ae044fe5123afec1789bd7dcfbde587 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NasAppBundle::layout.html.twig");

        $this->blocks = array(
            'NasApp_body' => array($this, 'block_NasApp_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NasAppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_NasApp_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"row\">
\t<div class=\"col-md-8 col-md-offset-3\">
\t\t<form method=\"post\" ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
\t\t\t
\t\t<fieldset>

\t\t<!-- Form Name -->
\t\t<legend>Ajouter une intervention pour la spécialité : ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["specialite"]) ? $context["specialite"] : $this->getContext($context, "specialite")), "specialite"), "html", null, true);
        echo " - <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nasApp_detailSpecialite", array("idSpecialite" => $this->getAttribute((isset($context["specialite"]) ? $context["specialite"] : $this->getContext($context, "specialite")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-info\">Retour à la spécialité</a></legend>
\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t
\t\t<!-- Text input-->
\t\t<div class=\"form-group\">
\t\t\t<label for=\"username\" class=\"col-sm-4 control-label\">";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "intervention"), 'label', array("label" => "Nom de l'intervention : "));
        echo "</label>
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "intervention"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t</div>
\t\t</div>

\t\t<!-- Text input-->
\t\t<div class=\"form-group\">
\t\t\t<label for=\"username\" class=\"col-sm-4 control-label\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ghs"), 'label', array("label" => "Montant GHS : "));
        echo "</label>
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ghs"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t</div>
\t\t</div>\t\t

\t\t<!-- Text input-->
\t\t<div class=\"form-group\">
\t\t\t<label for=\"username\" class=\"col-sm-4 control-label\">";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dmi"), 'label', array("label" => "Montant DMI : "));
        echo "</label>
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dmi"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t</div>
\t\t</div>\t\t

\t\t<!-- Text input-->
\t\t<div class=\"form-group\">
\t\t\t<label for=\"username\" class=\"col-sm-4 control-label\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "honoraires"), 'label', array("label" => "Montant honoraires : "));
        echo "</label>
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "honoraires"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t</div>
\t\t</div>\t

\t\t<!-- Text input-->
\t\t<div class=\"form-group\">
\t\t\t<label for=\"username\" class=\"col-sm-4 control-label\">";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbrJours"), 'label', array("label" => "nbrJours (cp) : "));
        echo "</label>
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbrJours"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t</div>
\t\t</div>\t\t\t

\t\t<!-- Text input-->
\t\t<div class=\"form-group\">
\t\t\t<label for=\"username\" class=\"col-sm-4 control-label\">";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dontSpecialiste"), 'label', array("label" => "Dont Praticien : "));
        echo "</label>
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dontSpecialiste"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t</div>
\t\t</div>\t\t\t\t\t

\t\t";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

\t\t  <div class=\"form-group\">
\t\t\t<div class=\"col-sm-offset-4 col-sm-10\">
\t\t\t  <input type=\"submit\" class=\"btn btn-success\" value=\"Ajouter\"/>
\t\t\t</div>
\t\t  </div>  

\t\t
\t\t</fieldset>\t\t
\t\t
\t\t
\t\t</form>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "NasAppBundle:Intervention:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 63,  131 => 59,  126 => 57,  117 => 51,  112 => 49,  103 => 43,  98 => 41,  89 => 35,  84 => 33,  75 => 27,  70 => 25,  61 => 19,  56 => 17,  49 => 13,  43 => 12,  35 => 7,  31 => 5,  28 => 4,);
    }
}
