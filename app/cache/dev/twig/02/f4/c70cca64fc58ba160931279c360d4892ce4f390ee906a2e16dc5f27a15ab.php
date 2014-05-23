<?php

/* NasAppBundle:Devis:voir.html.twig */
class __TwigTemplate_02f4c70cca64fc58ba160931279c360d4892ce4f390ee906a2e16dc5f27a15ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NasAppBundle::layout.html.twig");

        $this->blocks = array(
            'printDevis' => array($this, 'block_printDevis'),
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
    public function block_printDevis($context, array $blocks = array())
    {
        // line 3
        echo "<ul class=\"nav nav-pills pull-right\">
\t<li>
\t\t<div class=\"navbar-form navbar-left\">
\t\t\t<a class=\"btn btn-warning\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nasApp_voirDevis", array("idDevis" => $this->getAttribute((isset($context["devis"]) ? $context["devis"] : $this->getContext($context, "devis")), "id"), "print" => "ok")), "html", null, true);
        echo "\" target=\"_blank\"><span class=\"glyphicon glyphicon-print\"></span> Imprimer</a>
\t\t</div>
\t</li>
\t";
        // line 9
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 10
            echo "\t<li>
\t\t<div class=\"navbar-form navbar-left\">
\t\t\t<div class=\"btn-group\">
\t\t\t  <a class=\"btn btn-danger\" href=\"#\"><span class=\"glyphicon glyphicon-trash\"></span> Annuler</a>
\t\t\t  <a class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t<span class=\"sr-only\">Toggle Dropdown</span>
\t\t\t  </a>
\t\t\t  <ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t<li><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nasApp_annuleDevis", array("idDevis" => $this->getAttribute((isset($context["devis"]) ? $context["devis"] : $this->getContext($context, "devis")), "id"), "commentaire" => "Le patient ne viendra pas")), "html", null, true);
            echo "\">Le patient ne viendra pas</a></li>
\t\t\t\t<li><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nasApp_annuleDevis", array("idDevis" => $this->getAttribute((isset($context["devis"]) ? $context["devis"] : $this->getContext($context, "devis")), "id"), "commentaire" => "Erreur dans le devis")), "html", null, true);
            echo "\">Erreur dans le devis</a></li>
\t\t\t\t<li><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nasApp_annuleDevis", array("idDevis" => $this->getAttribute((isset($context["devis"]) ? $context["devis"] : $this->getContext($context, "devis")), "id"), "commentaire" => "Devis non signé")), "html", null, true);
            echo "\">Devis non signé</a></li>
\t\t\t  </ul>
\t\t\t</div>
\t\t</div>
\t</li>
\t";
        }
        // line 26
        echo "\t
</ul>\t\t\t
";
    }

    // line 30
    public function block_title($context, array $blocks = array())
    {
        // line 31
        echo "\tAjouter une intervention - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 34
    public function block_NasApp_body($context, array $blocks = array())
    {
        // line 35
        echo "
";
        // line 36
        if (($this->getAttribute((isset($context["devis"]) ? $context["devis"] : $this->getContext($context, "devis")), "etat") != "success")) {
            // line 37
            echo "<div class=\"row\">
  <div class=\"col-md-6 col-md-offset-3\">
\t\t<div class=\"alert alert-danger\">\t\t\t
\t\t\t<div class=\"text-center\">
\t\t\t\t<strong>Attention!</strong> Ce devis a été annulé. <br>Commentaire : ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["devis"]) ? $context["devis"] : $this->getContext($context, "devis")), "commentaire"), "html", null, true);
            echo ".<br>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        }
        // line 48
        echo "
<div class=\"row\">
  <div class=\"col-md-6 col-md-offset-3 text-center\">
\t\t<h2>Informations générales</h2>
  </div>
</div>
<div class=\"row\">
\t<div class=\"col-md-6 text-right\">Type d'intervention :</div>
\t<div class=\"col-md-6\">";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["intervention"]) ? $context["intervention"] : $this->getContext($context, "intervention")), "intervention"), "html", null, true);
        echo "</div>
</div>
<div class=\"row\">
\t<div class=\"col-md-6 text-right\">Le patient a-t-il demandé la chambre particulière ? </div>
\t<div class=\"col-md-6\"> ";
        // line 60
        if (($this->getAttribute((isset($context["devis"]) ? $context["devis"] : $this->getContext($context, "devis")), "chambre") == 1)) {
            echo " oui ";
        } else {
            echo " non ";
        }
        echo "</div>
</div>
<div class=\"row\">
\t<div class=\"col-md-6 text-right\">Durée de séjour prévue : </div>
\t<div class=\"col-md-6\"> ";
        // line 64
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["devis"]) ? $context["devis"] : $this->getContext($context, "devis")), "nbrJours") + $this->getAttribute((isset($context["devis"]) ? $context["devis"] : $this->getContext($context, "devis")), "nbrJoursSupp")), "html", null, true);
        echo " jour(s)</div>
</div>
<div class=\"row\">
\t<div class=\"col-md-6 text-right\">Nom du patient : </div>
\t<div class=\"col-md-6\"> ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "nom"), "html", null, true);
        echo "</div>
</div>
<div class=\"row\">
\t<div class=\"col-md-6 text-right\">Prénom du patient : </div>
\t<div class=\"col-md-6\"> ";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "prenom"), "html", null, true);
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-md-6 col-md-offset-3 text-center\">
\t\t<h2>Informations tarifaire</h2>
  </div>
</div>

<div class=\"row\">
  <div class=\"col-md-6 col-md-offset-3\">
\t<table class=\"table table-hover\">
      <thead>
        <tr>
          <th></th>
          <th>Montants</th>
        </tr>
      </thead>
      <tbody>\t
\t\t<tr>
\t\t\t<td>Part de la clinique incluant les frais de séjour<br>(y compris de réanimation)</td>
\t\t\t<td> ";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["devis"]) ? $context["devis"] : $this->getContext($context, "devis")), "mntPartClinique"), "html", null, true);
        echo " €</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Dispositifs médicaux implantables </td>
\t\t\t<td> ";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["intervention"]) ? $context["intervention"] : $this->getContext($context, "intervention")), "dmi"), "html", null, true);
        echo " €</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Chambre particulière</td>
\t\t\t<td> ";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["devis"]) ? $context["devis"] : $this->getContext($context, "devis")), "mntChambre"), "html", null, true);
        echo " €</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Lit accompagnant + repas</td>
\t\t\t<td> ";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["devis"]) ? $context["devis"] : $this->getContext($context, "devis")), "mntAccompagnant"), "html", null, true);
        echo " €</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Honoraires praticien </td>
\t\t\t<td>";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["devis"]) ? $context["devis"] : $this->getContext($context, "devis")), "honorairesPraticien"), "html", null, true);
        echo " €</td>\t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>Honoraires anesthésiste </td>
\t\t\t<td>";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["devis"]) ? $context["devis"] : $this->getContext($context, "devis")), "honorairesAnesthesiste"), "html", null, true);
        echo "  €</td>\t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>Honoraires autres spécialités </td>
\t\t\t<td>";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["honorairesAutres"]) ? $context["honorairesAutres"] : $this->getContext($context, "honorairesAutres")), "html", null, true);
        echo " €</td>\t\t\t
\t\t</tr>
\t\t<tr>
\t\t  <td>TOTAL :</td>
\t\t  <td>";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["totalFacture"]) ? $context["totalFacture"] : $this->getContext($context, "totalFacture")), "html", null, true);
        echo " €</td>
\t\t</tr>
      </tbody>
    </table>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "NasAppBundle:Devis:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 120,  221 => 116,  214 => 112,  207 => 108,  200 => 104,  193 => 100,  186 => 96,  179 => 92,  156 => 72,  149 => 68,  142 => 64,  131 => 60,  124 => 56,  114 => 48,  104 => 41,  98 => 37,  96 => 36,  93 => 35,  90 => 34,  83 => 31,  80 => 30,  74 => 26,  65 => 21,  61 => 20,  57 => 19,  46 => 10,  44 => 9,  38 => 6,  33 => 3,  30 => 2,);
    }
}
