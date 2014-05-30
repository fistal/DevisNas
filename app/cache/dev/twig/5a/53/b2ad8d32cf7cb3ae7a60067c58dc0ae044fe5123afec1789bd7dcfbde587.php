<?php

/* NasAppBundle:Intervention:ajouter.html.twig */
class __TwigTemplate_5a53b2ad8d32cf7cb3ae7a60067c58dc0ae044fe5123afec1789bd7dcfbde587 extends Twig_Template
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

    // line 4
    public function block_NasApp_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"row\">
\t<div class=\"col-md-8 col-md-offset-3\">
\t\t<form method=\"post\" ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"form-horizontal\">
\t\t\t
\t\t<fieldset>

\t\t<!-- Form Name -->
\t\t<legend>Ajouter une intervention pour la spécialité : ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "specialite"), "specialite"), "html", null, true);
        echo " - <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nasApp_detailSpecialite", array("idSpecialite" => $this->getAttribute($this->getContext($context, "specialite"), "id"))), "html", null, true);
        echo "\" class=\"btn btn-info\">Retour à la spécialité</a></legend>
\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
\t\t
\t\t<!-- Text input-->
\t\t<div class=\"form-group\">
\t\t\t<label for=\"username\" class=\"col-sm-4 control-label\">";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "intervention"), 'label', array("label" => "Nom de l'intervention : "));
        echo "</label>
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "intervention"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t</div>
\t\t</div>

\t\t<!-- Text input-->
\t\t<div class=\"form-group\">
\t\t\t<label for=\"username\" class=\"col-sm-4 control-label\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ghs"), 'label', array("label" => "Montant GHS : "));
        echo "</label>
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ghs"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t</div>
\t\t</div>\t\t

\t\t<!-- Text input-->
\t\t<div class=\"form-group\">
\t\t\t<label for=\"username\" class=\"col-sm-4 control-label\">";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dmi"), 'label', array("label" => "Montant DMI : "));
        echo "</label>
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dmi"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t</div>
\t\t</div>\t\t

\t\t<!-- Text input-->
\t\t<div class=\"form-group\">
\t\t\t<label for=\"username\" class=\"col-sm-4 control-label\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "honoraires"), 'label', array("label" => "Honoraires autres spécialités : "));
        echo "</label>
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "honoraires"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t</div>
\t\t</div>\t

\t\t<!-- Text input-->
\t\t<div class=\"form-group\">
\t\t\t<label for=\"username\" class=\"col-sm-4 control-label\">";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nbrJours"), 'label', array("label" => "nbrJours (cp) : "));
        echo "</label>
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nbrJours"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t</div>
\t\t</div>\t\t\t\t\t\t\t

\t\t";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "

\t\t  <div class=\"form-group\">
\t\t\t<div class=\"col-sm-offset-4 col-sm-10\">
\t\t\t  <input type=\"submit\" class=\"btn btn-success\" value=\"Ajouter\"/>
\t\t\t</div>
\t\t  </div>  

\t\t
\t\t</fieldset>\t\t
\t\t
\t\t
\t\t</form>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "NasAppBundle:Intervention:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 24,  228 => 120,  207 => 108,  200 => 104,  104 => 41,  167 => 91,  65 => 22,  58 => 24,  100 => 29,  53 => 26,  124 => 55,  114 => 38,  90 => 31,  81 => 29,  343 => 135,  340 => 134,  336 => 130,  333 => 129,  328 => 121,  325 => 120,  292 => 31,  287 => 29,  282 => 27,  274 => 25,  270 => 24,  267 => 23,  250 => 17,  232 => 12,  206 => 136,  191 => 120,  186 => 96,  178 => 114,  175 => 113,  170 => 112,  165 => 111,  160 => 109,  155 => 94,  113 => 95,  97 => 89,  84 => 33,  70 => 25,  148 => 82,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 26,  268 => 85,  264 => 22,  258 => 19,  252 => 80,  247 => 78,  241 => 15,  229 => 73,  220 => 70,  214 => 112,  177 => 110,  169 => 60,  140 => 104,  132 => 59,  128 => 43,  107 => 46,  61 => 19,  273 => 96,  269 => 94,  254 => 18,  243 => 88,  240 => 86,  238 => 14,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 116,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 92,  159 => 61,  143 => 56,  135 => 53,  119 => 52,  102 => 34,  71 => 20,  67 => 23,  63 => 26,  59 => 21,  38 => 6,  94 => 35,  89 => 35,  85 => 25,  75 => 27,  68 => 21,  56 => 17,  87 => 31,  21 => 1,  26 => 5,  93 => 35,  88 => 45,  78 => 28,  46 => 10,  27 => 1,  44 => 9,  31 => 5,  28 => 4,  201 => 129,  196 => 90,  183 => 116,  171 => 61,  166 => 102,  163 => 110,  158 => 67,  156 => 72,  151 => 107,  142 => 64,  138 => 75,  136 => 56,  121 => 97,  117 => 51,  105 => 40,  91 => 40,  62 => 23,  49 => 13,  24 => 4,  25 => 1,  19 => 1,  79 => 30,  72 => 25,  69 => 28,  47 => 9,  40 => 7,  37 => 10,  22 => 2,  246 => 16,  157 => 88,  145 => 46,  139 => 45,  131 => 60,  123 => 47,  120 => 53,  115 => 43,  111 => 62,  108 => 36,  101 => 32,  98 => 41,  96 => 27,  83 => 23,  74 => 28,  66 => 27,  55 => 17,  52 => 21,  50 => 60,  43 => 12,  41 => 7,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 134,  199 => 67,  193 => 100,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 84,  149 => 68,  147 => 106,  144 => 86,  141 => 48,  133 => 78,  130 => 41,  125 => 55,  122 => 70,  116 => 41,  112 => 49,  109 => 94,  106 => 35,  103 => 43,  99 => 41,  95 => 88,  92 => 21,  86 => 30,  82 => 29,  80 => 30,  73 => 23,  64 => 18,  60 => 16,  57 => 20,  54 => 15,  51 => 7,  48 => 6,  45 => 21,  42 => 8,  39 => 7,  36 => 5,  33 => 3,  30 => 2,);
    }
}
