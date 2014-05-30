<?php

/* NasAppBundle:Extraction:result.html.twig */
class __TwigTemplate_24e2f759b27e5506582ff2700e4142b529c0751f52256a52c81a7bf9817fe310 extends Twig_Template
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
        echo "http://datatables.net/extras/tabletools/
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
\t\t</table>\t\t
\t</div>

</div>



";
    }

    public function getTemplateName()
    {
        return "NasAppBundle:Extraction:result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 120,  207 => 108,  200 => 104,  104 => 41,  167 => 91,  65 => 22,  58 => 18,  100 => 54,  53 => 26,  124 => 41,  114 => 38,  90 => 31,  81 => 29,  343 => 135,  340 => 134,  336 => 130,  333 => 129,  328 => 121,  325 => 120,  292 => 31,  287 => 29,  282 => 27,  274 => 25,  270 => 24,  267 => 23,  250 => 17,  232 => 12,  206 => 136,  191 => 120,  186 => 96,  178 => 114,  175 => 113,  170 => 112,  165 => 111,  160 => 109,  155 => 94,  113 => 95,  97 => 89,  84 => 32,  70 => 27,  148 => 82,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 26,  268 => 85,  264 => 22,  258 => 19,  252 => 80,  247 => 78,  241 => 15,  229 => 73,  220 => 70,  214 => 112,  177 => 110,  169 => 60,  140 => 104,  132 => 59,  128 => 43,  107 => 46,  61 => 20,  273 => 96,  269 => 94,  254 => 18,  243 => 88,  240 => 86,  238 => 14,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 116,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 92,  159 => 61,  143 => 56,  135 => 53,  119 => 52,  102 => 34,  71 => 19,  67 => 15,  63 => 22,  59 => 21,  38 => 6,  94 => 32,  89 => 85,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 5,  93 => 35,  88 => 45,  78 => 41,  46 => 10,  27 => 4,  44 => 9,  31 => 5,  28 => 3,  201 => 129,  196 => 90,  183 => 116,  171 => 61,  166 => 102,  163 => 110,  158 => 67,  156 => 72,  151 => 107,  142 => 64,  138 => 75,  136 => 56,  121 => 97,  117 => 96,  105 => 40,  91 => 40,  62 => 23,  49 => 12,  24 => 4,  25 => 1,  19 => 1,  79 => 30,  72 => 16,  69 => 25,  47 => 9,  40 => 6,  37 => 10,  22 => 2,  246 => 16,  157 => 88,  145 => 46,  139 => 45,  131 => 60,  123 => 47,  120 => 53,  115 => 43,  111 => 62,  108 => 36,  101 => 32,  98 => 33,  96 => 36,  83 => 31,  74 => 28,  66 => 15,  55 => 16,  52 => 21,  50 => 60,  43 => 14,  41 => 7,  35 => 12,  32 => 3,  29 => 2,  209 => 82,  203 => 134,  199 => 67,  193 => 100,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 84,  149 => 68,  147 => 106,  144 => 86,  141 => 48,  133 => 78,  130 => 41,  125 => 55,  122 => 70,  116 => 41,  112 => 48,  109 => 94,  106 => 35,  103 => 49,  99 => 41,  95 => 88,  92 => 21,  86 => 30,  82 => 42,  80 => 30,  73 => 28,  64 => 35,  60 => 6,  57 => 20,  54 => 10,  51 => 14,  48 => 22,  45 => 21,  42 => 7,  39 => 6,  36 => 5,  33 => 3,  30 => 2,);
    }
}
