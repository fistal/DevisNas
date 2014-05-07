<?php

/* NasAppBundle::layout.html.twig */
class __TwigTemplate_89d238bbb173c5c0e3aade5d645db3bf52923f10f8b1ad0cbdf685c18a36f1af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'NasApp_body' => array($this, 'block_NasApp_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "\tDevis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "\t";
        $this->displayBlock('NasApp_body', $context, $blocks);
    }

    public function block_NasApp_body($context, array $blocks = array())
    {
        echo "\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-7 col-md-offset-3\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t  <div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\">Tableau de bord</h3>
\t\t\t  </div>
\t\t\t  <div class=\"panel-body\">
\t\t\t\t<div class=\"btn-group btn-group-justified \">
\t\t\t\t  <div class=\"btn-group btn-group-lg\">
\t\t\t\t\t<a class=\"btn btn-info\" href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("nasApp_ajouterDevis");
        echo "\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-plus\" style=\"font-size:30px;\"></span><br>
\t\t\t\t\t\t<span class=\"glyphicon-class hidden-xs\">Ajouter un devis</span>
\t\t\t\t\t</a>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"btn-group btn-group-lg\">
\t\t\t\t\t<a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("nasApp_listeDevis");
        echo "\" class=\"btn btn-info\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-list\" style=\"font-size:30px;\"></span><br>
\t\t\t\t\t\t<span class=\"glyphicon-class hidden-xs\">Liste des devis</span>
\t\t\t\t\t</a>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"btn-group btn-group-lg\">
\t\t\t\t\t<a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("nasApp_chercheDevis");
        echo "\" class=\"btn btn-info\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-search\" style=\"font-size:30px;\"></span><br>
\t\t\t\t\t\t<span class=\"glyphicon-class hidden-xs\">Rechercher un devis</span>
\t\t\t\t\t</a>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</div>
\t\t\t</div>
\t\t</div>\t
\t";
    }

    public function getTemplateName()
    {
        return "NasAppBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 29,  70 => 23,  61 => 17,  43 => 7,  40 => 6,  33 => 3,  30 => 2,  39 => 5,  32 => 3,  29 => 2,);
    }
}
