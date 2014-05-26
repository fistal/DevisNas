<?php

/* NasAppBundle:Devis:ajouter.html.twig */
class __TwigTemplate_f74bee475c7c0ce2923f87f3294f0fd0155e83299320c7fddc44a9ad1143bf42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NasAppBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "\tAjouter une intervention - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_NasApp_body($context, array $blocks = array())
    {
        // line 7
        echo "\t\t<form method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">\t\t\t
\t\t\t<fieldset>
\t\t\t\t<legend>Ajouter un devis</legend>
\t\t\t\t
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-3 col-md-offset-2\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">Nom</span>
\t\t\t\t\t\t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "patient"), "nom"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">Prénom</span>
\t\t\t\t\t\t\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "patient"), "prenom"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">Tel.</span>
\t\t\t\t\t\t\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "patient"), "telephone"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">E-mail</span>
\t\t\t\t\t\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "patient"), "email"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"username\" class=\"col-sm-6 control-label\">Intervention : </label>
\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "intervention"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"username\" class=\"col-sm-6 control-label\"><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Chambre particulière possible\">Nombre de jours estimés du séjour (*)</a> : </label>
\t\t\t\t\t\t\t<div class=\"col-sm-3 control-label\" id=\"nas_appbundle_devis_nbrJours\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"username\" class=\"col-sm-6 control-label\"><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Tooltip on top\">Nombre de jours supplémentaires (*)</a> : </label>
\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbrJoursSupp"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"username\" class=\"col-sm-6 control-label\"> * Le patient a-t-il demandé la chambre particulière ? </label>
\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chambre"), 'widget', array("attr" => array("class" => "checkbox inline")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t\t\t\t\t

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"username\" class=\"col-sm-6 control-label\">Accompagnant</label>
\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "accompagnant"), 'widget', array("attr" => array("class" => "checkbox inline")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"username\" class=\"col-sm-6 control-label\">Honoraires praticien  </label>
\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "honorairesPraticien"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"username\" class=\"col-sm-6 control-label\">Honoraires anesthésiste  </label>
\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "honorairesAnesthesiste"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-sm-offset-4 col-sm-10\">
\t\t\t\t\t\t  <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" class=\"btn btn-default\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>  

\t
\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t<div id=\"resultats_recherche\"></div>\t\t\t
\t\t\t</fieldset>\t\t\t\t\t
\t\t</form>



";
        // line 104
        echo "<script type=\"text/javascript\">

\$('#nas_appbundle_devis_intervention').on('change', function() {
    var interventionId = this.value;
\t
    var DATA = 'interventionId=' + interventionId;
    \$.ajax({
        type: \"POST\",
        url: \"";
        // line 112
        echo $this->env->getExtension('routing')->getPath("nasApp_nbrJourIntervention");
        echo "\",
        data: DATA,
        cache: false,
        success: function(data){
           \$('#nas_appbundle_devis_nbrJours').html(data);
        }
    });    
    return false;
});\t
</script>

";
    }

    public function getTemplateName()
    {
        return "NasAppBundle:Devis:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 112,  174 => 104,  154 => 85,  148 => 82,  139 => 76,  129 => 69,  119 => 62,  110 => 56,  94 => 43,  82 => 34,  73 => 28,  64 => 22,  55 => 16,  42 => 7,  39 => 6,  32 => 3,  29 => 2,);
    }
}
