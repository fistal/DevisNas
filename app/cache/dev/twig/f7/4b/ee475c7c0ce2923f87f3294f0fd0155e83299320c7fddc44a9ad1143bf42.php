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
        echo "<div class=\"row\">
\t<div class=\"col-md-8 col-md-offset-3\">
\t\t<form method=\"post\" ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"form-horizontal\">\t\t\t
\t\t\t<fieldset>
\t\t\t\t<legend>Ajouter un devis</legend>
\t\t\t\t
\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"username\" class=\"col-sm-4 control-label\">Intervention : </label>
\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "intervention"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"username\" class=\"col-sm-4 control-label\">Le patient a-t-il demandé la chambre particulière ? </label>
\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "chambre"), 'widget', array("attr" => array("class" => "checkbox inline")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"username\" class=\"col-sm-4 control-label\">Nombre jours estimés du séjour pour chambre particulière : </label>
\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nbrJours"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"username\" class=\"col-sm-4 control-label\">Nombre de jours supplémentaires  : </label>
\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nbrJoursSupp"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"username\" class=\"col-sm-4 control-label\">Accompagnant </label>
\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "accompagnant"), 'widget', array("attr" => array("class" => "checkbox inline")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"username\" class=\"col-sm-4 control-label\">Honoraires praticien  </label>
\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "honorairesPraticien"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"username\" class=\"col-sm-4 control-label\">Honoraires anesthésiste  </label>
\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "honorairesAnesthesiste"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"username\" class=\"col-sm-4 control-label\">Nom du patient : </label>
\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "patient"), "nom"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"username\" class=\"col-sm-4 control-label\">Prénom du patient : </label>
\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "patient"), "prenom"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"username\" class=\"col-sm-4 control-label\">Telephone du patient : </label>
\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "patient"), "telephone"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"username\" class=\"col-sm-4 control-label\">E-mail du patient : </label>
\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "patient"), "email"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t
";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t<div class=\"col-sm-offset-4 col-sm-10\">
\t\t\t\t\t  <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" class=\"btn btn-default\"/>
\t\t\t\t\t</div>
\t\t\t\t  </div>  
<div id=\"resultats_recherche\"></div>

\t\t\t\t
\t\t\t</fieldset>\t\t\t\t\t
\t\t</form>
\t</div>
</div>


";
        // line 102
        echo "<script type=\"text/javascript\">

\$('#nas_appbundle_devis_intervention').on('change', function() {
    var interventionId = this.value;
\t
    var DATA = 'interventionId=' + interventionId;
    \$.ajax({
        type: \"POST\",
        url: \"";
        // line 110
        echo $this->env->getExtension('routing')->getPath("nasApp_nbrJourIntervention");
        echo "\",
        data: DATA,
        cache: false,
        success: function(data){
\t\talert(data);
           \$('#resultats_recherche').html(data);
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
        return array (  186 => 110,  176 => 102,  158 => 85,  152 => 82,  143 => 76,  134 => 70,  125 => 64,  114 => 56,  105 => 50,  95 => 43,  85 => 36,  76 => 30,  67 => 24,  57 => 17,  46 => 9,  42 => 7,  39 => 6,  32 => 3,  29 => 2,);
    }
}
