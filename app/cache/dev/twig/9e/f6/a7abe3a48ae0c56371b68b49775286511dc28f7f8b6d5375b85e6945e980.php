<?php

/* NasAppBundle:Intervention:index.html.twig */
class __TwigTemplate_9ef6a7abe3a48ae0c56371b68b49775286511dc28f7f8b6d5375b85e6945e980 extends Twig_Template
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
            <th>Intervention</th>
            <th>GHS</th>
            <th>DMI</th>
            <th>Honoraires</th>
            <th>Dont praticien</th>
            <th>Total</th>
            <th>Modifier</th>
            <th>Supprimer</th>
          </tr>
        </thead>
\t\t<tbody>
\t\t\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_intervention"]) ? $context["liste_intervention"] : $this->getContext($context, "liste_intervention")));
        foreach ($context['_seq'] as $context["_key"] => $context["inter"]) {
            // line 22
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inter"]) ? $context["inter"] : $this->getContext($context, "inter")), "intervention"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inter"]) ? $context["inter"] : $this->getContext($context, "inter")), "ghs"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inter"]) ? $context["inter"] : $this->getContext($context, "inter")), "dmi"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inter"]) ? $context["inter"] : $this->getContext($context, "inter")), "honoraires"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inter"]) ? $context["inter"] : $this->getContext($context, "inter")), "dontSpecialiste"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inter"]) ? $context["inter"] : $this->getContext($context, "inter")), "total"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td><a class=\"btn btn-warning\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nasApp_modifierIntervention", array("id" => $this->getAttribute((isset($context["inter"]) ? $context["inter"] : $this->getContext($context, "inter")), "id"))), "html", null, true);
            echo "\">Modifier</a></td>
\t\t\t\t\t<td><a class=\"btn btn-danger\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nasApp_supprimerIntervention", array("id" => $this->getAttribute((isset($context["inter"]) ? $context["inter"] : $this->getContext($context, "inter")), "id"))), "html", null, true);
            echo "\">Supprimer</a></td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t</tbody>
\t</table>
\t<a class=\"btn btn-success\" href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("nasApp_ajouterIntervention");
        echo "\">Ajouter une intervention</a>
\t
\t
\t

";
    }

    public function getTemplateName()
    {
        return "NasAppBundle:Intervention:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 57,  100 => 29,  23 => 24,  266 => 141,  253 => 133,  249 => 132,  236 => 126,  234 => 125,  211 => 113,  207 => 112,  184 => 97,  165 => 84,  113 => 53,  77 => 35,  84 => 33,  65 => 22,  58 => 24,  124 => 41,  90 => 27,  81 => 29,  335 => 133,  332 => 132,  328 => 128,  325 => 127,  320 => 119,  317 => 118,  284 => 29,  279 => 27,  275 => 26,  271 => 25,  267 => 24,  261 => 138,  255 => 19,  251 => 18,  200 => 110,  198 => 127,  190 => 121,  188 => 118,  180 => 114,  175 => 112,  172 => 111,  167 => 91,  160 => 108,  148 => 105,  137 => 102,  118 => 95,  110 => 93,  70 => 25,  186 => 110,  152 => 106,  134 => 70,  114 => 38,  76 => 30,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 23,  258 => 81,  252 => 80,  247 => 17,  241 => 129,  229 => 12,  220 => 116,  214 => 69,  177 => 93,  169 => 60,  140 => 72,  132 => 59,  128 => 43,  107 => 46,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  243 => 130,  240 => 86,  238 => 15,  235 => 14,  230 => 82,  227 => 81,  224 => 118,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 111,  179 => 69,  159 => 61,  143 => 76,  135 => 53,  119 => 52,  102 => 30,  71 => 22,  67 => 21,  63 => 26,  59 => 21,  38 => 12,  94 => 28,  89 => 35,  85 => 36,  75 => 27,  68 => 21,  56 => 17,  87 => 31,  21 => 1,  26 => 6,  93 => 43,  88 => 6,  78 => 24,  46 => 10,  27 => 1,  44 => 12,  31 => 5,  28 => 4,  201 => 92,  196 => 90,  183 => 115,  171 => 61,  166 => 71,  163 => 62,  158 => 80,  156 => 66,  151 => 76,  142 => 59,  138 => 63,  136 => 56,  121 => 46,  117 => 51,  105 => 50,  91 => 27,  62 => 23,  49 => 13,  24 => 4,  25 => 1,  19 => 1,  79 => 22,  72 => 25,  69 => 28,  47 => 9,  40 => 5,  37 => 10,  22 => 2,  246 => 90,  157 => 107,  145 => 46,  139 => 103,  131 => 59,  123 => 47,  120 => 53,  115 => 35,  111 => 33,  108 => 36,  101 => 46,  98 => 29,  96 => 27,  83 => 23,  74 => 23,  66 => 27,  55 => 17,  52 => 21,  50 => 58,  43 => 12,  41 => 9,  35 => 7,  32 => 3,  29 => 2,  209 => 82,  203 => 134,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 102,  173 => 65,  168 => 72,  164 => 59,  162 => 109,  154 => 84,  149 => 51,  147 => 58,  144 => 104,  141 => 48,  133 => 68,  130 => 41,  125 => 55,  122 => 59,  116 => 41,  112 => 49,  109 => 34,  106 => 35,  103 => 43,  99 => 41,  95 => 43,  92 => 86,  86 => 26,  82 => 25,  80 => 19,  73 => 23,  64 => 18,  60 => 16,  57 => 20,  54 => 15,  51 => 7,  48 => 6,  45 => 21,  42 => 8,  39 => 5,  36 => 5,  33 => 3,  30 => 2,);
    }
}
