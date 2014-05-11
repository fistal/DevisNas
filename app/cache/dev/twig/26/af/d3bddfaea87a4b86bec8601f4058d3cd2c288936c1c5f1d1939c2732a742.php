<?php

/* NasAppBundle:Honoraire:modifier.html.twig */
class __TwigTemplate_26afd3bddfaea87a4b86bec8601f4058d3cd2c288936c1c5f1d1939c2732a742 extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\tModifier un honoraire - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_NasApp_body($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"row\">
\t<div class=\"col-md-8 col-md-offset-3\">
\t\t<form method=\"post\" ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
\t\t\t
\t\t\t<fieldset>

\t\t\t<!-- Form Name -->
\t\t\t<legend>Modifier un honoraire de la specialite : ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["specialite"]) ? $context["specialite"] : $this->getContext($context, "specialite")), "specialite"), "html", null, true);
        echo " - <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nasApp_detailSpecialite", array("idSpecialite" => $this->getAttribute((isset($context["specialite"]) ? $context["specialite"] : $this->getContext($context, "specialite")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-info\">Retour à la spécialité</a></legend>
\t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t
\t\t\t<!-- Text input-->

\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"username\" class=\"col-sm-4 control-label\">";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'label', array("label" => "Type de l'honoraire : "));
        echo " </label>
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Text input-->
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"username\" class=\"col-sm-4 control-label\">";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pourcentageFacture"), 'label', array("label" => "Pourcentage facture : "));
        echo " </label>
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pourcentageFacture"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>\t\t\t\t\t

\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

\t\t  <div class=\"form-group\">
\t\t\t<div class=\"col-sm-offset-4 col-sm-10\">
\t\t\t  <input type=\"submit\" class=\"btn btn-success\" value=\"Modifier\"/>
\t\t\t</div>
\t\t  </div>  \t\t\t
\t\t\t</fieldset>\t\t
\t\t\t\t
\t\t\t\t
\t\t</form>
\t</div>
</div>\t

";
    }

    public function getTemplateName()
    {
        return "NasAppBundle:Honoraire:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 29,  23 => 24,  266 => 141,  253 => 133,  249 => 132,  236 => 126,  234 => 125,  211 => 113,  207 => 112,  184 => 97,  165 => 84,  113 => 53,  77 => 35,  84 => 32,  65 => 22,  58 => 24,  124 => 41,  90 => 31,  81 => 29,  335 => 133,  332 => 132,  328 => 128,  325 => 127,  320 => 119,  317 => 118,  284 => 29,  279 => 27,  275 => 26,  271 => 25,  267 => 24,  261 => 138,  255 => 19,  251 => 18,  200 => 110,  198 => 127,  190 => 121,  188 => 118,  180 => 114,  175 => 112,  172 => 111,  167 => 91,  160 => 108,  148 => 105,  137 => 102,  118 => 95,  110 => 93,  70 => 27,  186 => 110,  152 => 106,  134 => 70,  114 => 38,  76 => 30,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 23,  258 => 81,  252 => 80,  247 => 17,  241 => 129,  229 => 12,  220 => 116,  214 => 69,  177 => 93,  169 => 60,  140 => 72,  132 => 59,  128 => 43,  107 => 46,  61 => 25,  273 => 96,  269 => 94,  254 => 92,  243 => 130,  240 => 86,  238 => 15,  235 => 14,  230 => 82,  227 => 81,  224 => 118,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 111,  179 => 69,  159 => 61,  143 => 76,  135 => 53,  119 => 52,  102 => 34,  71 => 20,  67 => 23,  63 => 26,  59 => 21,  38 => 12,  94 => 35,  89 => 20,  85 => 36,  75 => 21,  68 => 21,  56 => 21,  87 => 31,  21 => 1,  26 => 6,  93 => 43,  88 => 6,  78 => 28,  46 => 10,  27 => 1,  44 => 12,  31 => 6,  28 => 5,  201 => 92,  196 => 90,  183 => 115,  171 => 61,  166 => 71,  163 => 62,  158 => 80,  156 => 66,  151 => 76,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 50,  91 => 27,  62 => 23,  49 => 16,  24 => 4,  25 => 1,  19 => 1,  79 => 22,  72 => 25,  69 => 28,  47 => 9,  40 => 5,  37 => 10,  22 => 2,  246 => 90,  157 => 107,  145 => 46,  139 => 103,  131 => 52,  123 => 47,  120 => 53,  115 => 43,  111 => 37,  108 => 36,  101 => 46,  98 => 33,  96 => 27,  83 => 23,  74 => 28,  66 => 27,  55 => 17,  52 => 21,  50 => 58,  43 => 13,  41 => 9,  35 => 8,  32 => 4,  29 => 3,  209 => 82,  203 => 134,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 102,  173 => 65,  168 => 72,  164 => 59,  162 => 109,  154 => 84,  149 => 51,  147 => 58,  144 => 104,  141 => 48,  133 => 68,  130 => 41,  125 => 55,  122 => 59,  116 => 41,  112 => 48,  109 => 34,  106 => 35,  103 => 32,  99 => 41,  95 => 43,  92 => 86,  86 => 30,  82 => 29,  80 => 19,  73 => 23,  64 => 18,  60 => 16,  57 => 20,  54 => 15,  51 => 7,  48 => 6,  45 => 21,  42 => 8,  39 => 7,  36 => 5,  33 => 3,  30 => 2,);
    }
}
