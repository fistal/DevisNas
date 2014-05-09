<?php

/* NasAppBundle:Specialite:detail.html.twig */
class __TwigTemplate_3b5464f2cfd8adc29d64ede47b7849f82e2523e3d375b7c198ac784716787ea8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NasAppBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titleAction' => array($this, 'block_titleAction'),
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

    // line 5
    public function block_titleAction($context, array $blocks = array())
    {
        echo "<h2>Détail de la spécialité : ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "specialite"), "specialite"), "html", null, true);
        echo "</h2>";
    }

    // line 6
    public function block_NasApp_body($context, array $blocks = array())
    {
        // line 7
        echo "
<div class=\"row\">
\t<div class=\"col-md-12\">
\t\t<h3>Liste des interventions</h3>
\t\t<table class=\"table table-striped\" id=\"myTable\">
\t\t\t<thead>
\t\t\t  <tr>
\t\t\t\t<th>Intervention</th>
\t\t\t\t<th>GHS</th>
\t\t\t\t<th>DMI</th>
\t\t\t\t<th>Honoraires</th>
\t\t\t\t<th>jours CP</th>
\t\t\t\t<th>Total</th>
\t\t\t\t<th>Modifier</th>
\t\t\t  </tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeIntervention"));
        foreach ($context['_seq'] as $context["_key"] => $context["inter"]) {
            // line 25
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "inter"), "intervention"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "inter"), "ghs"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "inter"), "dmi"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "inter"), "honoraires"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "inter"), "nbrJours"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "inter"), "total"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td><a class=\"btn btn-warning\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nasApp_modifierIntervention", array("id" => $this->getAttribute($this->getContext($context, "inter"), "id"))), "html", null, true);
            echo "\">Modifier</a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t\t</tbody>
\t\t</table>
\t\t<a class=\"btn btn-success\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nasApp_ajouterIntervention", array("idSpecialite" => $this->getAttribute($this->getContext($context, "specialite"), "id"))), "html", null, true);
        echo "\">Ajouter une intervention</a>
\t</div>

</div>
\t<hr>
<div class=\"row\">
\t<div class=\"col-md-12\">
\t\t<h3>Liste les honoraires</h3>
\t\t<table class=\"table table-striped\">
\t\t\t<thead>
\t\t\t  <tr>
\t\t\t\t<th>Honoraire</th>
\t\t\t\t<th>% sur le total de la facture</th>
\t\t\t\t<th>% à appliquer sur les devis</th>
\t\t\t\t<th>Modifier</th>
\t\t\t  </tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeHonoraire"));
        foreach ($context['_seq'] as $context["_key"] => $context["honoraire"]) {
            // line 56
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "honoraire"), "type"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "honoraire"), "pourcentageFacture"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "honoraire"), "pourcentageDevis"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td><a class=\"btn btn-warning\" href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nasApp_modifierHonoraire", array("id" => $this->getAttribute($this->getContext($context, "honoraire"), "id"))), "html", null, true);
            echo "\">Modifier</a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['honoraire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "\t\t\t</tbody>
\t\t</table>
\t\t<a class=\"btn btn-success\" href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nasApp_ajouterHonoraire", array("idSpecialite" => $this->getAttribute($this->getContext($context, "specialite"), "id"))), "html", null, true);
        echo "\">Ajouter un honoraire</a>
\t</div>

</div>

";
    }

    public function getTemplateName()
    {
        return "NasAppBundle:Specialite:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 59,  146 => 58,  97 => 31,  245 => 111,  210 => 84,  192 => 78,  174 => 72,  170 => 71,  161 => 68,  153 => 66,  104 => 42,  127 => 50,  126 => 57,  100 => 41,  23 => 24,  266 => 141,  253 => 133,  249 => 112,  236 => 126,  234 => 125,  211 => 113,  207 => 112,  184 => 97,  165 => 84,  113 => 45,  77 => 26,  84 => 33,  65 => 22,  58 => 16,  124 => 41,  90 => 27,  81 => 27,  335 => 133,  332 => 132,  328 => 128,  325 => 127,  320 => 119,  317 => 118,  284 => 29,  279 => 27,  275 => 26,  271 => 25,  267 => 24,  261 => 138,  255 => 19,  251 => 18,  200 => 80,  198 => 127,  190 => 121,  188 => 118,  180 => 114,  175 => 112,  172 => 111,  167 => 65,  160 => 108,  148 => 105,  137 => 102,  118 => 95,  110 => 35,  70 => 24,  186 => 110,  152 => 106,  134 => 70,  114 => 37,  76 => 30,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 23,  258 => 81,  252 => 80,  247 => 17,  241 => 109,  229 => 12,  220 => 92,  214 => 69,  177 => 93,  169 => 60,  140 => 61,  132 => 59,  128 => 43,  107 => 46,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  243 => 130,  240 => 86,  238 => 15,  235 => 14,  230 => 99,  227 => 81,  224 => 118,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 111,  179 => 74,  159 => 61,  143 => 76,  135 => 55,  119 => 52,  102 => 30,  71 => 23,  67 => 22,  63 => 26,  59 => 21,  38 => 12,  94 => 37,  89 => 29,  85 => 28,  75 => 27,  68 => 21,  56 => 17,  87 => 37,  21 => 1,  26 => 6,  93 => 30,  88 => 6,  78 => 24,  46 => 11,  27 => 1,  44 => 12,  31 => 5,  28 => 4,  201 => 92,  196 => 79,  183 => 75,  171 => 61,  166 => 70,  163 => 63,  158 => 80,  156 => 66,  151 => 76,  142 => 57,  138 => 63,  136 => 61,  121 => 46,  117 => 46,  105 => 50,  91 => 27,  62 => 20,  49 => 12,  24 => 4,  25 => 1,  19 => 1,  79 => 22,  72 => 25,  69 => 28,  47 => 9,  40 => 5,  37 => 10,  22 => 2,  246 => 90,  157 => 67,  145 => 46,  139 => 56,  131 => 59,  123 => 47,  120 => 53,  115 => 35,  111 => 33,  108 => 45,  101 => 32,  98 => 29,  96 => 40,  83 => 35,  74 => 25,  66 => 21,  55 => 16,  52 => 21,  50 => 58,  43 => 12,  41 => 9,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 134,  199 => 67,  193 => 73,  189 => 71,  187 => 76,  182 => 66,  176 => 102,  173 => 65,  168 => 72,  164 => 59,  162 => 109,  154 => 60,  149 => 64,  147 => 58,  144 => 63,  141 => 63,  133 => 68,  130 => 41,  125 => 55,  122 => 53,  116 => 41,  112 => 49,  109 => 44,  106 => 35,  103 => 43,  99 => 39,  95 => 43,  92 => 38,  86 => 26,  82 => 25,  80 => 29,  73 => 23,  64 => 18,  60 => 16,  57 => 20,  54 => 15,  51 => 7,  48 => 6,  45 => 21,  42 => 8,  39 => 7,  36 => 5,  33 => 3,  30 => 2,);
    }
}
