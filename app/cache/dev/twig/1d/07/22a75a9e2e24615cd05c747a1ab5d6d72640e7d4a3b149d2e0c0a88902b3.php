<?php

/* NasAppBundle:Devis:liste.html.twig */
class __TwigTemplate_1d0722a75a9e2e24615cd05c747a1ab5d6d72640e7d4a3b149d2e0c0a88902b3 extends Twig_Template
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
        echo "
<div class=\"row\">
\t<div class=\"col-md-12\">
\t\t<h3>Liste des devis</h3>
\t\t<table class=\"table table-hover\" id=\"myTable\">
\t\t\t<thead>
\t\t\t  <tr>
\t\t\t\t<th class=\"header\">Nom</th>
\t\t\t\t<th class=\"header\">Prénom</th>
\t\t\t\t<th class=\"header\">Téléphone</th>
\t\t\t\t<th class=\"header\">E-mail</th>
\t\t\t\t<th class=\"header\">Intervention</th>
\t\t\t\t<th class=\"header\">Date</th>
\t\t\t\t";
        // line 20
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 21
            echo "\t\t\t\t\t<th class=\"header\">Utilisateur</th>
\t\t\t\t";
        }
        // line 22
        echo "\t\t\t\t
\t\t\t\t<th></th>
\t\t\t  </tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeDevis"));
        foreach ($context['_seq'] as $context["_key"] => $context["devis"]) {
            // line 28
            echo "\t\t\t\t\t";
            if (($this->getAttribute($this->getContext($context, "devis"), "etat") == "cancel")) {
                echo "<tr class=\"danger\">";
            } else {
                echo "<tr>";
            }
            // line 29
            echo "\t\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "devis"), "patient"), "nom"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "devis"), "patient"), "prenom"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "devis"), "patient"), "telephone"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "devis"), "patient"), "email"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "devis"), "intervention"), "intervention"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "devis"), "date"), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t";
            // line 35
            if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                // line 36
                echo "\t\t\t\t\t\t\t<td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "devis"), "user"), "username"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t";
            }
            // line 38
            echo "\t\t\t\t\t\t<td><a class=\"btn btn-warning\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nasApp_voirDevis", array("idDevis" => $this->getAttribute($this->getContext($context, "devis"), "id"))), "html", null, true);
            echo "\">Consulter</a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['devis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t\t\t</tbody>
\t\t</table>
\t\t<a class=\"btn btn-success\" href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("nasApp_ajouterDevis");
        echo "\">Ajouter un devis</a>
\t</div>

</div>



";
    }

    public function getTemplateName()
    {
        return "NasAppBundle:Devis:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 41,  90 => 31,  81 => 29,  335 => 133,  332 => 132,  328 => 128,  325 => 127,  320 => 119,  317 => 118,  284 => 29,  279 => 27,  275 => 26,  271 => 25,  267 => 24,  261 => 22,  255 => 19,  251 => 18,  200 => 132,  198 => 127,  190 => 121,  188 => 118,  180 => 114,  175 => 112,  172 => 111,  167 => 110,  160 => 108,  148 => 105,  137 => 102,  118 => 95,  110 => 93,  70 => 27,  186 => 110,  152 => 106,  134 => 70,  114 => 38,  76 => 30,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 23,  258 => 81,  252 => 80,  247 => 17,  241 => 77,  229 => 12,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 43,  107 => 36,  61 => 17,  273 => 96,  269 => 94,  254 => 92,  243 => 16,  240 => 86,  238 => 15,  235 => 14,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 76,  135 => 53,  119 => 42,  102 => 34,  71 => 19,  67 => 24,  63 => 22,  59 => 21,  38 => 12,  94 => 32,  89 => 20,  85 => 36,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 81,  46 => 9,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 115,  171 => 61,  166 => 71,  163 => 62,  158 => 85,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 50,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 1,  19 => 1,  79 => 29,  72 => 16,  69 => 25,  47 => 9,  40 => 6,  37 => 10,  22 => 2,  246 => 90,  157 => 107,  145 => 46,  139 => 103,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 33,  96 => 31,  83 => 25,  74 => 28,  66 => 15,  55 => 15,  52 => 21,  50 => 58,  43 => 14,  41 => 7,  35 => 5,  32 => 3,  29 => 2,  209 => 82,  203 => 134,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 102,  173 => 65,  168 => 72,  164 => 59,  162 => 109,  154 => 58,  149 => 51,  147 => 58,  144 => 104,  141 => 48,  133 => 55,  130 => 41,  125 => 99,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 35,  103 => 32,  99 => 88,  95 => 43,  92 => 86,  86 => 30,  82 => 82,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 20,  54 => 10,  51 => 14,  48 => 22,  45 => 21,  42 => 7,  39 => 6,  36 => 5,  33 => 3,  30 => 2,);
    }
}
