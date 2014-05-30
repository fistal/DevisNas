<?php

/* NasAppBundle:Index:index.html.twig */
class __TwigTemplate_d0680a5dff5f3700c8d2904eb6f1084f9ebd587edbcacb80c75dfd79f1eac755 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'NasApp_body' => array($this, 'block_NasApp_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "\t";
        $this->displayBlock('NasApp_body', $context, $blocks);
    }

    public function block_NasApp_body($context, array $blocks = array())
    {
        echo "\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-7 col-md-offset-3\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t  <div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\">Tableau de bord</h3>
\t\t\t  </div>
\t\t\t  <div class=\"panel-body\">
\t\t\t\t<div class=\"btn-group btn-group-justified \">
\t\t\t\t  <div class=\"btn-group btn-group-lg\">
\t\t\t\t\t<a class=\"btn btn-info\" href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("nasApp_ajouterDevis");
        echo "\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-plus\" style=\"font-size:30px;\"></span><br>
\t\t\t\t\t\t<span class=\"glyphicon-class hidden-xs\">Ajouter un devis</span>
\t\t\t\t\t</a>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"btn-group btn-group-lg\">
\t\t\t\t\t<a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("nasApp_listeDevis");
        echo "\" class=\"btn btn-info\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-list\" style=\"font-size:30px;\"></span><br>
\t\t\t\t\t\t<span class=\"glyphicon-class hidden-xs\">Liste des devis</span>
\t\t\t\t\t</a>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"btn-group btn-group-lg\">
\t\t\t\t\t<a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("nasApp_chercheDevis");
        echo "\" class=\"btn btn-info\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-search\" style=\"font-size:30px;\"></span><br>
\t\t\t\t\t\t<span class=\"glyphicon-class hidden-xs\">Rechercher un devis</span>
\t\t\t\t\t</a>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</div>
\t\t\t</div>
\t\t</div>\t
\t";
    }

    public function getTemplateName()
    {
        return "NasAppBundle:Index:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 24,  228 => 120,  207 => 108,  200 => 104,  104 => 41,  167 => 91,  65 => 22,  58 => 24,  100 => 29,  53 => 26,  124 => 41,  114 => 38,  90 => 31,  81 => 29,  343 => 135,  340 => 134,  336 => 130,  333 => 129,  328 => 121,  325 => 120,  292 => 31,  287 => 29,  282 => 27,  274 => 25,  270 => 24,  267 => 23,  250 => 17,  232 => 12,  206 => 136,  191 => 120,  186 => 96,  178 => 114,  175 => 113,  170 => 112,  165 => 111,  160 => 109,  155 => 94,  113 => 95,  97 => 89,  84 => 32,  70 => 24,  148 => 82,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 26,  268 => 85,  264 => 22,  258 => 19,  252 => 80,  247 => 78,  241 => 15,  229 => 73,  220 => 70,  214 => 112,  177 => 110,  169 => 60,  140 => 104,  132 => 59,  128 => 43,  107 => 46,  61 => 18,  273 => 96,  269 => 94,  254 => 18,  243 => 88,  240 => 86,  238 => 14,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 116,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 92,  159 => 61,  143 => 56,  135 => 53,  119 => 52,  102 => 34,  71 => 20,  67 => 23,  63 => 26,  59 => 21,  38 => 6,  94 => 35,  89 => 85,  85 => 25,  75 => 21,  68 => 21,  56 => 9,  87 => 31,  21 => 1,  26 => 5,  93 => 35,  88 => 45,  78 => 28,  46 => 10,  27 => 1,  44 => 9,  31 => 6,  28 => 5,  201 => 129,  196 => 90,  183 => 116,  171 => 61,  166 => 102,  163 => 110,  158 => 67,  156 => 72,  151 => 107,  142 => 64,  138 => 75,  136 => 56,  121 => 97,  117 => 96,  105 => 40,  91 => 40,  62 => 23,  49 => 16,  24 => 4,  25 => 1,  19 => 1,  79 => 30,  72 => 25,  69 => 28,  47 => 9,  40 => 7,  37 => 10,  22 => 2,  246 => 16,  157 => 88,  145 => 46,  139 => 45,  131 => 60,  123 => 47,  120 => 53,  115 => 43,  111 => 62,  108 => 36,  101 => 32,  98 => 33,  96 => 27,  83 => 23,  74 => 28,  66 => 27,  55 => 17,  52 => 21,  50 => 60,  43 => 8,  41 => 7,  35 => 8,  32 => 4,  29 => 3,  209 => 82,  203 => 134,  199 => 67,  193 => 100,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 84,  149 => 68,  147 => 106,  144 => 86,  141 => 48,  133 => 78,  130 => 41,  125 => 55,  122 => 70,  116 => 41,  112 => 48,  109 => 94,  106 => 35,  103 => 49,  99 => 41,  95 => 88,  92 => 21,  86 => 30,  82 => 29,  80 => 30,  73 => 23,  64 => 18,  60 => 16,  57 => 20,  54 => 15,  51 => 7,  48 => 6,  45 => 21,  42 => 8,  39 => 7,  36 => 5,  33 => 3,  30 => 2,);
    }
}
