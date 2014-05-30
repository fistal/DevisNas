<?php

/* NasAppBundle:Intervention:modifier.html.twig */
class __TwigTemplate_6efa40e5805b4d58f882207ca59fbf00419779e204d77ae4775d8d9b6904fb17 extends Twig_Template
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
        echo "\tModifier une intervention - ";
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"form-horizontal\">
\t\t\t
\t\t\t<fieldset>

\t\t\t<!-- Form Name -->
\t\t\t<legend>Modifier une intervention de la specialite : ";
        // line 15
        echo twig_escape_filter($this->env, $this->getContext($context, "maSpecialite"), "html", null, true);
        echo "</legend>
\t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
\t\t\t
\t\t\t<!-- Text input-->

\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"username\" class=\"col-sm-4 control-label\">";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "intervention"), 'label', array("label" => "Nom de l'intervention : "));
        echo " </label>
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "intervention"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Text input-->
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"username\" class=\"col-sm-4 control-label\">";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ghs"), 'label', array("label" => "Montant GHS : "));
        echo " </label>
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ghs"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>\t\t\t

\t\t\t<!-- Text input-->
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"username\" class=\"col-sm-4 control-label\">";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dmi"), 'label', array("label" => "Montant DMI : "));
        echo " </label>
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dmi"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>\t\t\t

\t\t\t<!-- Text input-->
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"username\" class=\"col-sm-4 control-label\">";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "honoraires"), 'label', array("label" => "Honoraires autres spécialités : "));
        echo " </label>
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "honoraires"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>\t
\t\t\t
\t\t\t<!-- Text input-->
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"username\" class=\"col-sm-4 control-label\">";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nbrJours"), 'label', array("label" => "Nombre de jours (cp)  : "));
        echo "</label>
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nbrJours"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>\t\t\t


\t\t\t";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "

\t\t  <div class=\"form-group\">
\t\t\t<div class=\"col-sm-offset-4 col-sm-10\">
\t\t\t  <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\"/>
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
        return "NasAppBundle:Intervention:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 55,  23 => 24,  228 => 120,  207 => 108,  200 => 104,  104 => 41,  167 => 91,  65 => 22,  58 => 16,  100 => 29,  53 => 26,  124 => 55,  114 => 38,  90 => 27,  81 => 29,  343 => 135,  340 => 134,  336 => 130,  333 => 129,  328 => 121,  325 => 120,  292 => 31,  287 => 29,  282 => 27,  274 => 25,  270 => 24,  267 => 23,  250 => 17,  232 => 12,  206 => 136,  191 => 120,  186 => 96,  178 => 114,  175 => 113,  170 => 112,  165 => 111,  160 => 109,  155 => 94,  113 => 47,  97 => 89,  84 => 33,  70 => 25,  148 => 82,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 26,  268 => 85,  264 => 22,  258 => 19,  252 => 80,  247 => 78,  241 => 15,  229 => 73,  220 => 70,  214 => 112,  177 => 110,  169 => 60,  140 => 104,  132 => 59,  128 => 43,  107 => 46,  61 => 19,  273 => 96,  269 => 94,  254 => 18,  243 => 88,  240 => 86,  238 => 14,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 116,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 92,  159 => 61,  143 => 56,  135 => 60,  119 => 52,  102 => 30,  71 => 23,  67 => 21,  63 => 26,  59 => 21,  38 => 6,  94 => 37,  89 => 35,  85 => 31,  75 => 27,  68 => 21,  56 => 17,  87 => 31,  21 => 1,  26 => 5,  93 => 35,  88 => 45,  78 => 24,  46 => 10,  27 => 1,  44 => 9,  31 => 5,  28 => 4,  201 => 129,  196 => 90,  183 => 116,  171 => 61,  166 => 102,  163 => 110,  158 => 67,  156 => 72,  151 => 107,  142 => 64,  138 => 75,  136 => 56,  121 => 97,  117 => 51,  105 => 40,  91 => 40,  62 => 23,  49 => 13,  24 => 4,  25 => 1,  19 => 1,  79 => 30,  72 => 25,  69 => 28,  47 => 9,  40 => 5,  37 => 10,  22 => 2,  246 => 16,  157 => 88,  145 => 46,  139 => 45,  131 => 60,  123 => 47,  120 => 53,  115 => 35,  111 => 33,  108 => 45,  101 => 32,  98 => 29,  96 => 27,  83 => 23,  74 => 23,  66 => 21,  55 => 17,  52 => 21,  50 => 60,  43 => 12,  41 => 7,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 134,  199 => 67,  193 => 100,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 84,  149 => 68,  147 => 106,  144 => 86,  141 => 48,  133 => 78,  130 => 41,  125 => 55,  122 => 53,  116 => 41,  112 => 49,  109 => 94,  106 => 35,  103 => 43,  99 => 39,  95 => 88,  92 => 21,  86 => 26,  82 => 25,  80 => 29,  73 => 23,  64 => 18,  60 => 16,  57 => 20,  54 => 15,  51 => 7,  48 => 6,  45 => 21,  42 => 8,  39 => 7,  36 => 5,  33 => 3,  30 => 2,);
    }
}
