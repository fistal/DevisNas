<?php

/* NasAppBundle:Honoraire:index.html.twig */
class __TwigTemplate_968bcd7cb859d9d8c56999b7fd128c1d3375acce510d27bc2227d11a373ad7db extends Twig_Template
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
        echo "\tAccueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_titleAction($context, array $blocks = array())
    {
        echo "<h2>Liste des interventions de la spécialité : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uneSpe"]) ? $context["uneSpe"] : $this->getContext($context, "uneSpe")), "specialite"), "html", null, true);
        echo "</h2>";
    }

    // line 6
    public function block_NasApp_body($context, array $blocks = array())
    {
        // line 7
        echo "\t<table class=\"table table-striped\">
\t\t<thead>
          <tr>
            <th>Honoraire</th>
            <th>% sur le total de la facture</th>
            <th>% à appliquer sur les devis</th>
            <th>Modifier</th>
            <th>Supprimer</th>
          </tr>
        </thead>
\t\t<tbody>
\t\t\t";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_honoraire"]) ? $context["liste_honoraire"] : $this->getContext($context, "liste_honoraire")));
        foreach ($context['_seq'] as $context["_key"] => $context["honoraire"]) {
            // line 19
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["honoraire"]) ? $context["honoraire"] : $this->getContext($context, "honoraire")), "type"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["honoraire"]) ? $context["honoraire"] : $this->getContext($context, "honoraire")), "pourcentageFacture"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["honoraire"]) ? $context["honoraire"] : $this->getContext($context, "honoraire")), "pourcentageDevis"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td><a class=\"btn btn-warning\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nasApp_modifierIntervention", array("id" => $this->getAttribute((isset($context["inter"]) ? $context["inter"] : $this->getContext($context, "inter")), "id"))), "html", null, true);
            echo "\">Modifier</a></td>
\t\t\t\t\t<td><a class=\"btn btn-danger\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nasApp_supprimerIntervention", array("id" => $this->getAttribute((isset($context["inter"]) ? $context["inter"] : $this->getContext($context, "inter")), "id"))), "html", null, true);
            echo "\">Supprimer</a></td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['honoraire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t</tbody>
\t</table>
\t<a class=\"btn btn-success\" href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("nasApp_ajouterIntervention");
        echo "\">Ajouter une intervention</a>
\t
\t
\t

";
    }

    public function getTemplateName()
    {
        return "NasAppBundle:Honoraire:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 29,  23 => 24,  228 => 120,  207 => 108,  200 => 104,  104 => 41,  167 => 91,  65 => 22,  58 => 24,  150 => 92,  124 => 41,  114 => 38,  90 => 31,  81 => 29,  343 => 135,  340 => 134,  336 => 130,  333 => 129,  328 => 121,  325 => 120,  292 => 31,  287 => 29,  282 => 27,  274 => 25,  270 => 24,  267 => 23,  250 => 17,  232 => 12,  206 => 136,  191 => 120,  186 => 96,  178 => 114,  175 => 113,  170 => 112,  165 => 111,  160 => 109,  155 => 108,  113 => 95,  97 => 89,  84 => 32,  70 => 27,  172 => 101,  148 => 81,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 26,  268 => 85,  264 => 22,  258 => 19,  252 => 80,  247 => 78,  241 => 15,  229 => 73,  220 => 70,  214 => 112,  177 => 65,  169 => 60,  140 => 104,  132 => 59,  128 => 76,  107 => 46,  61 => 25,  273 => 96,  269 => 94,  254 => 18,  243 => 88,  240 => 86,  238 => 14,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 116,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 92,  159 => 61,  143 => 56,  135 => 53,  119 => 52,  102 => 34,  71 => 20,  67 => 23,  63 => 26,  59 => 21,  38 => 6,  94 => 32,  89 => 85,  85 => 25,  75 => 21,  68 => 19,  56 => 9,  87 => 24,  21 => 1,  26 => 6,  93 => 35,  88 => 6,  78 => 28,  46 => 16,  27 => 1,  44 => 9,  31 => 6,  28 => 5,  201 => 129,  196 => 90,  183 => 116,  171 => 61,  166 => 71,  163 => 110,  158 => 67,  156 => 72,  151 => 107,  142 => 64,  138 => 54,  136 => 56,  121 => 97,  117 => 68,  105 => 40,  91 => 27,  62 => 23,  49 => 16,  24 => 4,  25 => 1,  19 => 1,  79 => 22,  72 => 25,  69 => 28,  47 => 9,  40 => 5,  37 => 17,  22 => 2,  246 => 16,  157 => 56,  145 => 46,  139 => 84,  131 => 60,  123 => 47,  120 => 53,  115 => 43,  111 => 56,  108 => 36,  101 => 32,  98 => 33,  96 => 27,  83 => 23,  74 => 28,  66 => 27,  55 => 17,  52 => 21,  50 => 60,  43 => 13,  41 => 7,  35 => 8,  32 => 3,  29 => 2,  209 => 82,  203 => 134,  199 => 67,  193 => 100,  189 => 71,  187 => 84,  182 => 109,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 84,  149 => 68,  147 => 106,  144 => 49,  141 => 48,  133 => 55,  130 => 69,  125 => 55,  122 => 43,  116 => 41,  112 => 48,  109 => 94,  106 => 35,  103 => 32,  99 => 41,  95 => 52,  92 => 43,  86 => 30,  82 => 36,  80 => 30,  73 => 36,  64 => 18,  60 => 19,  57 => 20,  54 => 10,  51 => 7,  48 => 6,  45 => 21,  42 => 12,  39 => 6,  36 => 5,  33 => 3,  30 => 2,);
    }
}
