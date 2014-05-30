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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nasApp_voirDevis", array("idDevis" => $this->getAttribute($this->getContext($context, "devis"), "id"), "print" => "ok")), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nasApp_annuleDevis", array("idDevis" => $this->getAttribute($this->getContext($context, "devis"), "id"), "commentaire" => "Le patient ne viendra pas")), "html", null, true);
            echo "\">Le patient ne viendra pas</a></li>
\t\t\t\t<li><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nasApp_annuleDevis", array("idDevis" => $this->getAttribute($this->getContext($context, "devis"), "id"), "commentaire" => "Erreur dans le devis")), "html", null, true);
            echo "\">Erreur dans le devis</a></li>
\t\t\t\t<li><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nasApp_annuleDevis", array("idDevis" => $this->getAttribute($this->getContext($context, "devis"), "id"), "commentaire" => "Devis non signé")), "html", null, true);
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
        if (($this->getAttribute($this->getContext($context, "devis"), "etat") != "success")) {
            // line 37
            echo "<div class=\"row\">
  <div class=\"col-md-6 col-md-offset-3\">
\t\t<div class=\"alert alert-danger\">\t\t\t
\t\t\t<div class=\"text-center\">
\t\t\t\t<strong>Attention!</strong> Ce devis a été annulé. <br>Commentaire : ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "devis"), "commentaire"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "intervention"), "intervention"), "html", null, true);
        echo "</div>
</div>
<div class=\"row\">
\t<div class=\"col-md-6 text-right\">Le patient a-t-il demandé la chambre particulière ? </div>
\t<div class=\"col-md-6\"> ";
        // line 60
        if (($this->getAttribute($this->getContext($context, "devis"), "chambre") == 1)) {
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
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getContext($context, "devis"), "nbrJours") + $this->getAttribute($this->getContext($context, "devis"), "nbrJoursSupp")), "html", null, true);
        echo " jour(s)</div>
</div>
<div class=\"row\">
\t<div class=\"col-md-6 text-right\">Nom du patient : </div>
\t<div class=\"col-md-6\"> ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "patient"), "nom"), "html", null, true);
        echo "</div>
</div>
<div class=\"row\">
\t<div class=\"col-md-6 text-right\">Prénom du patient : </div>
\t<div class=\"col-md-6\"> ";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "patient"), "prenom"), "html", null, true);
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-md-6 col-md-offset-3 text-center\">
\t\t<h2>Informations tarifaires</h2>
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "devis"), "mntPartClinique"), "html", null, true);
        echo " €</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Dispositifs médicaux implantables </td>
\t\t\t<td> ";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "intervention"), "dmi"), "html", null, true);
        echo " €</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Chambre particulière</td>
\t\t\t<td> ";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "devis"), "mntChambre"), "html", null, true);
        echo " €</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Lit accompagnant + repas</td>
\t\t\t<td> ";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "devis"), "mntAccompagnant"), "html", null, true);
        echo " €</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Honoraires praticien </td>
\t\t\t<td>";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "devis"), "honorairesPraticien"), "html", null, true);
        echo " €</td>\t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>Honoraires anesthésiste </td>
\t\t\t<td>";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "devis"), "honorairesAnesthesiste"), "html", null, true);
        echo "  €</td>\t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>Honoraires autres spécialités </td>
\t\t\t<td>";
        // line 116
        echo twig_escape_filter($this->env, $this->getContext($context, "honorairesAutres"), "html", null, true);
        echo " €</td>\t\t\t
\t\t</tr>
\t\t<tr>
\t\t  <td>TOTAL :</td>
\t\t  <td>";
        // line 120
        echo twig_escape_filter($this->env, $this->getContext($context, "totalFacture"), "html", null, true);
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
        return array (  228 => 120,  207 => 108,  200 => 104,  104 => 41,  167 => 91,  65 => 21,  58 => 18,  100 => 54,  53 => 26,  124 => 56,  114 => 48,  90 => 34,  81 => 29,  343 => 135,  340 => 134,  336 => 130,  333 => 129,  328 => 121,  325 => 120,  292 => 31,  287 => 29,  282 => 27,  274 => 25,  270 => 24,  267 => 23,  250 => 17,  232 => 12,  206 => 136,  191 => 120,  186 => 96,  178 => 114,  175 => 113,  170 => 112,  165 => 111,  160 => 109,  155 => 94,  113 => 95,  97 => 89,  84 => 32,  70 => 24,  148 => 82,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 26,  268 => 85,  264 => 22,  258 => 19,  252 => 80,  247 => 78,  241 => 15,  229 => 73,  220 => 70,  214 => 112,  177 => 110,  169 => 60,  140 => 104,  132 => 59,  128 => 43,  107 => 46,  61 => 20,  273 => 96,  269 => 94,  254 => 18,  243 => 88,  240 => 86,  238 => 14,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 116,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 92,  159 => 61,  143 => 56,  135 => 53,  119 => 62,  102 => 34,  71 => 19,  67 => 15,  63 => 22,  59 => 21,  38 => 6,  94 => 32,  89 => 85,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 5,  93 => 35,  88 => 45,  78 => 41,  46 => 10,  27 => 4,  44 => 9,  31 => 5,  28 => 3,  201 => 129,  196 => 90,  183 => 116,  171 => 61,  166 => 102,  163 => 110,  158 => 67,  156 => 72,  151 => 107,  142 => 64,  138 => 75,  136 => 56,  121 => 97,  117 => 96,  105 => 40,  91 => 40,  62 => 23,  49 => 12,  24 => 4,  25 => 1,  19 => 1,  79 => 30,  72 => 16,  69 => 25,  47 => 9,  40 => 6,  37 => 10,  22 => 2,  246 => 16,  157 => 88,  145 => 46,  139 => 45,  131 => 60,  123 => 47,  120 => 53,  115 => 43,  111 => 62,  108 => 36,  101 => 32,  98 => 37,  96 => 36,  83 => 31,  74 => 26,  66 => 15,  55 => 16,  52 => 21,  50 => 60,  43 => 14,  41 => 7,  35 => 12,  32 => 3,  29 => 2,  209 => 82,  203 => 134,  199 => 67,  193 => 100,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 68,  147 => 106,  144 => 86,  141 => 48,  133 => 78,  130 => 41,  125 => 55,  122 => 70,  116 => 41,  112 => 48,  109 => 94,  106 => 35,  103 => 49,  99 => 31,  95 => 88,  92 => 21,  86 => 30,  82 => 42,  80 => 30,  73 => 28,  64 => 35,  60 => 6,  57 => 19,  54 => 10,  51 => 14,  48 => 22,  45 => 21,  42 => 7,  39 => 6,  36 => 5,  33 => 3,  30 => 2,);
    }
}
