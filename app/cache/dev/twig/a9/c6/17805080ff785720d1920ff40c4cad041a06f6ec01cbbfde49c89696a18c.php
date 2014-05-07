<?php

/* NasAppBundle:Honoraire:ajouter.html.twig */
class __TwigTemplate_a9c617805080ff785720d1920ff40c4cad041a06f6ec01cbbfde49c89696a18c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NasAppBundle::layout.html.twig");

        $this->blocks = array(
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

    // line 5
    public function block_NasApp_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"row\">
\t<div class=\"col-md-8 col-md-offset-3\">
\t\t<form method=\"post\" ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"form-horizontal\">\t\t\t
\t\t\t<fieldset>

\t\t\t<!-- Form Name -->
\t\t\t<legend>Ajouter un honoraire pour la spécialité : ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "specialite"), "specialite"), "html", null, true);
        echo " - <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nasApp_detailSpecialite", array("idSpecialite" => $this->getAttribute($this->getContext($context, "specialite"), "id"))), "html", null, true);
        echo "\" class=\"btn btn-info\">Retour à la spécialité</a></legend>
\t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
\t\t\t<!-- Text input-->
\t\t\t
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"username\" class=\"col-sm-4 control-label\">";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "type"), 'label', array("label" => "Type d'honoraire : "));
        echo "</label>
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "type"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"username\" class=\"col-sm-4 control-label\">";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "pourcentageFacture"), 'label', array("label" => "% sur le total de la facture : "));
        echo "</label>
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "pourcentageFacture"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
\t\t  <div class=\"form-group\">
\t\t\t<div class=\"col-sm-offset-4 col-sm-10\">
\t\t\t  <input type=\"submit\" class=\"btn btn-success\" value=\"Ajouter\"/>
\t\t\t</div>
\t\t  </div>  \t\t\t
\t\t\t
\t\t\t</fieldset>\t\t\t\t\t\t\t
\t\t</form>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "NasAppBundle:Honoraire:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 24,  266 => 141,  253 => 133,  249 => 132,  236 => 126,  234 => 125,  211 => 113,  207 => 112,  184 => 97,  165 => 84,  113 => 53,  77 => 35,  65 => 22,  58 => 24,  124 => 41,  90 => 31,  81 => 29,  335 => 133,  332 => 132,  328 => 128,  325 => 127,  320 => 119,  317 => 118,  284 => 29,  279 => 27,  275 => 26,  271 => 25,  267 => 24,  261 => 138,  255 => 19,  251 => 18,  200 => 110,  198 => 127,  190 => 121,  188 => 118,  180 => 114,  175 => 112,  172 => 111,  167 => 91,  160 => 108,  152 => 106,  148 => 105,  137 => 102,  118 => 95,  114 => 38,  110 => 93,  70 => 27,  84 => 32,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 23,  258 => 81,  252 => 80,  247 => 17,  241 => 129,  229 => 12,  220 => 116,  214 => 69,  177 => 93,  169 => 60,  140 => 72,  132 => 59,  128 => 43,  107 => 46,  61 => 25,  273 => 96,  269 => 94,  254 => 92,  243 => 130,  240 => 86,  238 => 15,  235 => 14,  230 => 82,  227 => 81,  224 => 118,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 111,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 52,  102 => 34,  71 => 19,  67 => 23,  63 => 26,  59 => 21,  38 => 12,  94 => 32,  89 => 20,  85 => 25,  75 => 29,  68 => 14,  56 => 21,  87 => 25,  21 => 1,  26 => 6,  93 => 43,  88 => 6,  78 => 28,  46 => 16,  27 => 1,  44 => 12,  31 => 6,  28 => 5,  201 => 92,  196 => 90,  183 => 115,  171 => 61,  166 => 71,  163 => 62,  158 => 80,  156 => 66,  151 => 76,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 56,  105 => 40,  91 => 27,  62 => 23,  49 => 16,  24 => 4,  25 => 1,  19 => 1,  79 => 30,  72 => 25,  69 => 28,  47 => 9,  40 => 6,  37 => 10,  22 => 2,  246 => 90,  157 => 107,  145 => 46,  139 => 103,  131 => 52,  123 => 47,  120 => 53,  115 => 43,  111 => 53,  108 => 36,  101 => 46,  98 => 33,  96 => 44,  83 => 39,  74 => 28,  66 => 27,  55 => 17,  52 => 21,  50 => 58,  43 => 13,  41 => 9,  35 => 8,  32 => 3,  29 => 2,  209 => 82,  203 => 134,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 109,  154 => 84,  149 => 51,  147 => 58,  144 => 104,  141 => 48,  133 => 68,  130 => 41,  125 => 55,  122 => 59,  116 => 41,  112 => 48,  109 => 34,  106 => 35,  103 => 32,  99 => 41,  95 => 28,  92 => 86,  86 => 30,  82 => 82,  80 => 19,  73 => 19,  64 => 25,  60 => 19,  57 => 20,  54 => 10,  51 => 14,  48 => 13,  45 => 21,  42 => 12,  39 => 6,  36 => 5,  33 => 3,  30 => 2,);
    }
}
