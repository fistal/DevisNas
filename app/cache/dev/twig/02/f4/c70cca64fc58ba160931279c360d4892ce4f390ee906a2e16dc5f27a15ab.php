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
\t\t<h2>Informations générales</h2>
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
\t<div class=\"col-md-4 text-right\">Durée de séjour prévue : </div>
\t<div class=\"col-md-8\"> ";
        // line 76
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getContext($context, "devis"), "nbrJours") + $this->getAttribute($this->getContext($context, "devis"), "nbrJoursSupp")), "html", null, true);
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
        return array (  266 => 141,  253 => 133,  249 => 132,  236 => 126,  234 => 125,  211 => 113,  207 => 112,  184 => 97,  165 => 84,  113 => 53,  77 => 35,  84 => 32,  65 => 27,  58 => 18,  124 => 41,  90 => 31,  81 => 29,  335 => 133,  332 => 132,  328 => 128,  325 => 127,  320 => 119,  317 => 118,  284 => 29,  279 => 27,  275 => 26,  271 => 25,  267 => 24,  261 => 138,  255 => 19,  251 => 18,  200 => 110,  198 => 127,  190 => 121,  188 => 118,  180 => 114,  175 => 112,  172 => 111,  167 => 91,  160 => 108,  148 => 105,  137 => 102,  118 => 95,  110 => 93,  70 => 24,  186 => 110,  152 => 106,  134 => 70,  114 => 38,  76 => 30,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 23,  258 => 81,  252 => 80,  247 => 17,  241 => 129,  229 => 12,  220 => 116,  214 => 69,  177 => 93,  169 => 60,  140 => 72,  132 => 59,  128 => 43,  107 => 46,  61 => 17,  273 => 96,  269 => 94,  254 => 92,  243 => 130,  240 => 86,  238 => 15,  235 => 14,  230 => 82,  227 => 81,  224 => 118,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 111,  179 => 69,  159 => 61,  143 => 76,  135 => 53,  119 => 42,  102 => 34,  71 => 19,  67 => 24,  63 => 22,  59 => 21,  38 => 12,  94 => 32,  89 => 20,  85 => 36,  75 => 17,  68 => 14,  56 => 21,  87 => 25,  21 => 2,  26 => 6,  93 => 43,  88 => 6,  78 => 81,  46 => 9,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 115,  171 => 61,  166 => 71,  163 => 62,  158 => 80,  156 => 66,  151 => 76,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 50,  91 => 27,  62 => 23,  49 => 12,  24 => 4,  25 => 1,  19 => 1,  79 => 30,  72 => 16,  69 => 25,  47 => 9,  40 => 6,  37 => 10,  22 => 2,  246 => 90,  157 => 107,  145 => 46,  139 => 103,  131 => 52,  123 => 47,  120 => 53,  115 => 43,  111 => 37,  108 => 51,  101 => 46,  98 => 40,  96 => 44,  83 => 39,  74 => 28,  66 => 15,  55 => 15,  52 => 21,  50 => 58,  43 => 10,  41 => 9,  35 => 5,  32 => 3,  29 => 2,  209 => 82,  203 => 134,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 102,  173 => 65,  168 => 72,  164 => 59,  162 => 109,  154 => 58,  149 => 51,  147 => 58,  144 => 104,  141 => 48,  133 => 68,  130 => 41,  125 => 55,  122 => 59,  116 => 41,  112 => 48,  109 => 34,  106 => 35,  103 => 32,  99 => 45,  95 => 43,  92 => 86,  86 => 40,  82 => 82,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 20,  54 => 10,  51 => 14,  48 => 22,  45 => 21,  42 => 7,  39 => 6,  36 => 5,  33 => 3,  30 => 2,);
    }
}
