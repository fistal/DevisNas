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
\t\t\t<a class=\"btn btn-warning\" href=\"#\" onclick=\"imprime_zone('commande', 'printDevis');\"><span class=\"glyphicon glyphicon-print\"></span> Imprimer</a>
\t\t</div>
\t</li>
\t";
        // line 9
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 10
            echo "\t<li>
\t\t<form class=\"navbar-form navbar-right\" role=\"form\">
            <div class=\"form-group\">
              <input type=\"text\" placeholder=\"Commentaire\" class=\"form-control\">
            </div>
            <button type=\"submit\" class=\"btn btn-success\">Sign in</button>
          </form>
\t</li>
\t<li>
\t\t<div class=\"navbar-form navbar-left\">
\t\t\t<div class=\"btn-group\">
\t\t\t  <button type=\"button\" class=\"btn btn-danger\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nasApp_annuleDevis", array("idDevis" => $this->getAttribute($this->getContext($context, "devis"), "id"))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-trash\"></span> Annuler</button>
\t\t\t  <button type=\"button\" class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t<span class=\"sr-only\">Toggle Dropdown</span>
\t\t\t  </button>
\t\t\t  <ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t<li><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nasApp_annuleDevis", array("idDevis" => $this->getAttribute($this->getContext($context, "devis"), "id"), "commentaire" => "Le patient ne viendra pas")), "html", null, true);
            echo "\">Le patient ne viendra pas</a></li>
\t\t\t\t<li><a href=\"#\">Erreur dans le devis</a></li>
\t\t\t\t<li><a href=\"#\">Devis non signé</a></li>
\t\t\t  </ul>
\t\t\t</div>
\t\t\t Annuler</a>
\t\t</div>
\t</li>
\t";
        }
        // line 35
        echo "\t
</ul>\t\t\t
";
    }

    // line 39
    public function block_title($context, array $blocks = array())
    {
        // line 40
        echo "\tAjouter une intervention - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 43
    public function block_NasApp_body($context, array $blocks = array())
    {
        // line 44
        echo "
";
        // line 45
        if (($this->getAttribute($this->getContext($context, "devis"), "etat") != "success")) {
            // line 46
            echo "<div class=\"row\">
  <div class=\"col-md-6 col-md-offset-3\">
\t\t<div class=\"alert alert-danger alert-dismissable\">
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t\t\t<div class=\"text-center\">
\t\t\t\t<strong>Attention!</strong> Ce devis a été annulé. <br>Commentaire : ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "devis"), "commentaire"), "html", null, true);
            echo ".<br>
\t\t\t</div>
\t\t\t<a class=\"btn btn-info text-right\" href=\"";
            // line 53
            echo $this->env->getExtension('routing')->getPath("nasApp_listeDevis");
            echo "\"><span class=\"glyphicon glyphicon-chevron-left\"></span> Liste des devis</a>
\t\t</div>
\t</div>
</div>

";
        }
        // line 59
        echo "
<div id='printDevis'>
<div class=\"row\">
  <div class=\"col-md-6 col-md-offset-3 text-center\">
\t\t<h2>Informations générale</h2>
  </div>
</div>
<div class=\"row\">
\t<div class=\"col-md-4 text-right\">Type d'intervention :</div>
\t<div class=\"col-md-8\">";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "intervention"), "intervention"), "html", null, true);
        echo "</div>
</div>
<div class=\"row\">
\t<div class=\"col-md-4 text-right\">Le patient a-t-il demandé la chambre particulière ? </div>
\t<div class=\"col-md-8\"> ";
        // line 72
        if (($this->getAttribute($this->getContext($context, "devis"), "chambre") == 1)) {
            echo " oui ";
        } else {
            echo " non ";
        }
        echo "</div>
</div>
<div class=\"row\">
\t<div class=\"col-md-4 text-right\">Nombre jours estimés du séjour pour chambre particulière : </div>
\t<div class=\"col-md-8\"> ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "devis"), "nbrJours"), "html", null, true);
        echo "</div>
</div>
<div class=\"row\">
\t<div class=\"col-md-4 text-right\">Nom du patient : </div>
\t<div class=\"col-md-8\"> ";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "patient"), "nom"), "html", null, true);
        echo "</div>
</div>
<div class=\"row\">
\t<div class=\"col-md-4 text-right\">Prénom du patient : </div>
\t<div class=\"col-md-8\"> ";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "patient"), "prenom"), "html", null, true);
        echo "</div>
</div>
<div class=\"row\">
  <div class=\"col-md-6 col-md-offset-3 text-center\">
\t\t<h2>Informations tarifaire</h2>
  </div>
</div>
<div class=\"row\">
\t<div class=\"col-md-4 text-right\">Part de la clinique incluant les frais de séjour (y compris de réanimation) : </div>
\t<div class=\"col-md-8\"> ";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "devis"), "mntPartClinique"), "html", null, true);
        echo " €</div>
</div>
<div class=\"row\">
\t<div class=\"col-md-4 text-right\">Chambre particulière : </div>
\t<div class=\"col-md-8\"> ";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "devis"), "mntChambre"), "html", null, true);
        echo " €</div>
</div>

<div class=\"row\">
  <div class=\"col-md-6 col-md-offset-3\">
\t<table class=\"table table-hover\">
      <thead>
        <tr>
          <th>Honnoraire</th>
          <th>Montant</th>
        </tr>
      </thead>
      <tbody>\t\t
\t\t";
        // line 110
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeHonoraires"));
        foreach ($context['_seq'] as $context["_key"] => $context["honoraire"]) {
            // line 111
            echo "\t\t\t\t<tr>
\t\t\t\t  <td>";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "honoraire"), "honoraire"), "type"), "html", null, true);
            echo "</td>
\t\t\t\t  <td>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "honoraire"), "mnt"), "html", null, true);
            echo " €</td>
\t\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['honoraire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "\t\t\t\t<tr>
\t\t\t\t  <td>TOTAL :</td>
\t\t\t\t  <td>";
        // line 118
        echo twig_escape_filter($this->env, $this->getContext($context, "totalFacture"), "html", null, true);
        echo " €</td>
\t\t\t\t</tr>
      </tbody>
    </table>
  </div>
</div>
</div>
";
        // line 125
        if (($this->getAttribute($this->getContext($context, "devis"), "etat") == "success")) {
            // line 126
            echo "<div class=\"row\">
  <div class=\"col-md-6 col-md-offset-3 text-center\" >
\t\t<a class=\"btn btn-warning\" href=\"#\" onclick=\"imprime_zone('commande', 'printDevis');\"><span class=\"glyphicon glyphicon-print\"></span> Imprimer</a>
\t\t";
            // line 129
            if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                // line 130
                echo "\t\t\t<form class=\"navbar-form navbar-right\" method=\"post\" action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nasApp_annuleDevis", array("idDevis" => $this->getAttribute($this->getContext($context, "devis"), "id"))), "html", null, true);
                echo "\" >
            <div class=\"form-group\">
              ";
                // line 132
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "commentaire"), 'widget', array("attr" => array("class" => "form-control")));
                echo "
\t\t\t  ";
                // line 133
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
                echo "
            </div>
            <button type=\"submit\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-trash\"></span>  Annuler</button>
          </form>
\t\t";
            }
            // line 138
            echo "  </div>
</div>
";
        }
        // line 141
        echo "
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
        return array (  266 => 141,  261 => 138,  253 => 133,  249 => 132,  243 => 130,  241 => 129,  236 => 126,  234 => 125,  224 => 118,  220 => 116,  211 => 113,  207 => 112,  204 => 111,  200 => 110,  184 => 97,  177 => 93,  165 => 84,  158 => 80,  151 => 76,  140 => 72,  133 => 68,  122 => 59,  113 => 53,  108 => 51,  101 => 46,  99 => 45,  96 => 44,  93 => 43,  86 => 40,  83 => 39,  77 => 35,  65 => 27,  56 => 21,  43 => 10,  41 => 9,  33 => 3,  30 => 2,);
    }
}
