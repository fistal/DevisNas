<?php

/* NasAppBundle:Devis:print.html.twig */
class __TwigTemplate_6a29a3ce6940781eebc4d977f832c7e54d3e2676e48146e936141be42932c4b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div>
<table>
\t<tr>
\t\t";
        // line 4
        if (($this->getAttribute($this->getContext($context, "devis"), "clinique") == "Ambroise Paré")) {
            // line 5
            echo "\t\t<td style=\"width:450px;\">
\t\t\t<strong>CMC AMBROISE PARE</strong><br>
\t\t\t27 Bd Victor Hugo<br>
\t\t\t92200 Neuilly sur seine<br><br>
\t\t\t<strong>Tél :</strong> 08.26.200.300     <strong>Fax :</strong> 01.46.41.89.80<br>
\t\t</td>
\t\t";
        } elseif (($this->getAttribute($this->getContext($context, "devis"), "clinique") == "Pierre Cherest")) {
            // line 12
            echo "\t\t<td style=\"width:450px;\">
\t\t\t<strong>CMC PIERRE CHEREST</strong><br>
\t\t\t5 rue Pierre Cherest, <br>
\t\t\t92200 Neuilly sur seine<br><br>
\t\t\t<strong>Tél :</strong> 08.26.200.300     <strong>Fax :</strong> 01.46.41.89.80<br>
\t\t</td>\t\t
\t\t";
        } elseif (($this->getAttribute($this->getContext($context, "devis"), "clinique") == "Hartmann")) {
            // line 19
            echo "\t\t<td style=\"width:450px;\">
\t\t\t<strong>CMC HARTMANN</strong><br>
\t\t\t26 Boulevard Victor Hugo<br>
\t\t\t92200 Neuilly sur seine<br><br>
\t\t\t<strong>Tél :</strong> 08.26.200.300     <strong>Fax :</strong> 01.46.41.89.80<br>
\t\t</td>\t
\t\t";
        }
        // line 26
        echo "\t\t
\t\t
\t\t<td>
\t\t\t<img src=\"../web/dist/images/cmcap.png\" width=\"250\">
\t\t</td>
\t</tr>
</table>
\t<div style=\"clear:both;\"></div>
\t<div style=\"margin-top:20px; text-align:right; margin-right:50px;\">
\t\tNeuilly-Sur-Seine, le ";
        // line 35
        echo twig_escape_filter($this->env, $this->getContext($context, "date"), "html", null, true);
        echo "
\t</div>
\t<div style=\"margin-top:20px;\">
\t\t<strong>Objet :</strong> Devis pour l’hospitalisation de Monsieur / Madame ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "patient"), "nom"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "patient"), "prenom"), "html", null, true);
        echo "
\t</div>
\t<div style=\"margin-top:20px;\">
\t\tPraticien responsable : Dr ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
        echo "<br>
\t\tEtabli le ";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "devis"), "date"), "d/m/Y"), "html", null, true);
        echo " à la demande du praticien
\t</div>
\t<div style=\"margin-top:20px;\">
\t\tLe montant du devis pour la Clinique est de : ";
        // line 45
        echo twig_escape_filter($this->env, $this->getContext($context, "totalFacture"), "html", null, true);
        echo " euros se répartissant en : \t\t\t\t\t
\t</div>
\t<div style=\"margin-top:20px; border=1px solid black; width:750px;\">
\t\t<table>
\t\t\t<tr>
\t\t\t\t<td style=\"width:500px;height:20px;\">
\t\t\t\t\tPart de la clinique incluant les frais de séjour (y compris de réanimation):
\t\t\t\t</td>
\t\t\t\t<td style=\"width:50px;\">
\t\t\t\t\t";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "devis"), "mntPartClinique"), "html", null, true);
        echo "€
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td style=\"width:500px;height:20px;\">
\t\t\t\t\tDispositifs médicaux implantables :
\t\t\t\t</td>
\t\t\t\t<td style=\"width:50px;\">
\t\t\t\t\t";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "intervention"), "dmi"), "html", null, true);
        echo "€
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t<td style=\"width:500px;height:20px;\">
\t\t\t\t\tChambre particulière :
\t\t\t\t</td>
\t\t\t\t<td style=\"width:50px;\">
\t\t\t\t\t";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "devis"), "mntChambre"), "html", null, true);
        echo "€
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td style=\"width:500px;height:20px;\">
\t\t\t\t\tLit accompagnant + repas :
\t\t\t\t</td>
\t\t\t\t<td style=\"width:50px;\">
\t\t\t\t\t";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "devis"), "mntAccompagnant"), "html", null, true);
        echo "€
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td style=\"width:500px;height:20px;\">
\t\t\t\t\tHonoraires praticien :
\t\t\t\t</td>
\t\t\t\t<td style=\"width:50px;\">
\t\t\t\t\t";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "devis"), "honorairesPraticien"), "html", null, true);
        echo "€
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td style=\"width:500px;height:20px;\">
\t\t\t\t\tHonoraires anesthésiste :
\t\t\t\t</td>
\t\t\t\t<td style=\"width:50px;\">
\t\t\t\t\t";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "devis"), "honorairesAnesthesiste"), "html", null, true);
        echo "€
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td style=\"width:500px;height:20px;\">
\t\t\t\t\tHonoraires autres spécialités :
\t\t\t\t</td>
\t\t\t\t<td style=\"width:50px;\">
\t\t\t\t\t";
        // line 102
        echo twig_escape_filter($this->env, $this->getContext($context, "honorairesAutres"), "html", null, true);
        echo "€
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td style=\"color:red; text-align:right; padding-right:30px;\">
\t\t\t\t\tTOTAL
\t\t\t\t</td>
\t\t\t\t<td style=\"color:red; width:50px;\">
\t\t\t\t\t";
        // line 110
        echo twig_escape_filter($this->env, $this->getContext($context, "totalFacture"), "html", null, true);
        echo "€
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t</div>
\t<div style=\"margin-top:20px;\">
\t\tCe montant sera à acquitter le jour d’entrée à la clinique sinon l’hospitalisation pourra vous être refusée.\t\t
\t</div>
\t<div style=\"text-align:center;margin-top:20px;\">
\t\tMerci de vous présenter avec un chèque certifié de banque ou des espèces ou une carte bancaire <br>(sauf American Express)
\t</div>
\t<div style=\"text-align:center; margin-top:40px;width:800px;\">
\t\t<table border=\"1\" >
\t\t\t<tr>
\t\t\t\t<td style=\"height:60px\"></td>
\t\t\t\t<td style=\"height:60px\"></td>
\t\t\t\t<td style=\"height:60px\"></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td style=\" width:225px;\">
\t\t\t\t\tSignature de la clinique
\t\t\t\t\tPrécédé de la mention « lu et approuvé »
\t\t\t\t</td>
\t\t\t\t<td style=\" width:225px;\">
\t\t\t\t\tSignature du patient
\t\t\t\t\tPrécédé de la mention « lu et approuvé »\t\t\t\t
\t\t\t\t</td>
\t\t\t\t<td style=\" width:225px;\">
\t\t\t\t\tSignature du chirurgien 
\t\t\t\t\tPrécédé de la mention « lu et approuvé »\t\t\t\t
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t</div>
</div>











";
    }

    public function getTemplateName()
    {
        return "NasAppBundle:Devis:print.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 54,  53 => 26,  124 => 41,  114 => 38,  90 => 31,  81 => 29,  343 => 135,  340 => 134,  336 => 130,  333 => 129,  328 => 121,  325 => 120,  292 => 31,  287 => 29,  282 => 27,  274 => 25,  270 => 24,  267 => 23,  250 => 17,  232 => 12,  206 => 136,  191 => 120,  186 => 117,  178 => 114,  175 => 113,  170 => 112,  165 => 111,  160 => 109,  155 => 94,  113 => 95,  97 => 89,  84 => 84,  70 => 38,  148 => 82,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 26,  268 => 85,  264 => 22,  258 => 19,  252 => 80,  247 => 78,  241 => 15,  229 => 73,  220 => 70,  214 => 69,  177 => 110,  169 => 60,  140 => 104,  132 => 51,  128 => 43,  107 => 36,  61 => 17,  273 => 96,  269 => 94,  254 => 18,  243 => 88,  240 => 86,  238 => 14,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 62,  102 => 34,  71 => 19,  67 => 15,  63 => 22,  59 => 21,  38 => 12,  94 => 32,  89 => 85,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 5,  93 => 28,  88 => 45,  78 => 41,  46 => 7,  27 => 4,  44 => 19,  31 => 5,  28 => 3,  201 => 129,  196 => 90,  183 => 116,  171 => 61,  166 => 102,  163 => 110,  158 => 67,  156 => 66,  151 => 107,  142 => 105,  138 => 75,  136 => 56,  121 => 97,  117 => 96,  105 => 40,  91 => 40,  62 => 23,  49 => 19,  24 => 4,  25 => 1,  19 => 1,  79 => 29,  72 => 16,  69 => 25,  47 => 9,  40 => 6,  37 => 10,  22 => 2,  246 => 16,  157 => 88,  145 => 46,  139 => 45,  131 => 102,  123 => 47,  120 => 40,  115 => 43,  111 => 62,  108 => 36,  101 => 32,  98 => 33,  96 => 31,  83 => 25,  74 => 28,  66 => 15,  55 => 16,  52 => 21,  50 => 60,  43 => 14,  41 => 7,  35 => 12,  32 => 3,  29 => 2,  209 => 82,  203 => 134,  199 => 67,  193 => 123,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 106,  144 => 86,  141 => 48,  133 => 78,  130 => 41,  125 => 44,  122 => 70,  116 => 41,  112 => 42,  109 => 94,  106 => 35,  103 => 49,  99 => 31,  95 => 88,  92 => 21,  86 => 30,  82 => 42,  80 => 19,  73 => 28,  64 => 35,  60 => 6,  57 => 20,  54 => 10,  51 => 14,  48 => 22,  45 => 21,  42 => 7,  39 => 6,  36 => 5,  33 => 3,  30 => 2,);
    }
}
