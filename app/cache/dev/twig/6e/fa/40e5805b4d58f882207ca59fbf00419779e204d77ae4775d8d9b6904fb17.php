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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "honoraires"), 'label', array("label" => "Montant honoraires : "));
        echo " </label>
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "honoraires"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>\t

\t\t\t<!-- Text input-->
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"username\" class=\"col-sm-4 control-label\">";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dontSpecialiste"), 'label', array("label" => "Dont Praticien : "));
        echo "</label>
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dontSpecialiste"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>


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
        return array (  127 => 55,  100 => 29,  23 => 24,  266 => 141,  253 => 133,  249 => 132,  236 => 126,  234 => 125,  211 => 113,  207 => 112,  184 => 97,  165 => 84,  113 => 47,  77 => 35,  84 => 33,  65 => 22,  58 => 16,  124 => 55,  90 => 27,  81 => 29,  335 => 133,  332 => 132,  328 => 128,  325 => 127,  320 => 119,  317 => 118,  284 => 29,  279 => 27,  275 => 26,  271 => 25,  267 => 24,  261 => 138,  255 => 19,  251 => 18,  200 => 110,  198 => 127,  190 => 121,  188 => 118,  180 => 114,  175 => 112,  172 => 111,  167 => 91,  160 => 108,  148 => 105,  137 => 102,  118 => 95,  110 => 93,  70 => 25,  152 => 106,  134 => 70,  114 => 38,  76 => 30,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 23,  258 => 81,  252 => 80,  247 => 17,  241 => 129,  229 => 12,  220 => 116,  214 => 69,  177 => 93,  169 => 60,  140 => 72,  132 => 59,  128 => 43,  107 => 46,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  243 => 130,  240 => 86,  238 => 15,  235 => 14,  230 => 82,  227 => 81,  224 => 118,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 111,  179 => 69,  159 => 61,  143 => 76,  135 => 60,  119 => 52,  102 => 30,  71 => 23,  67 => 21,  63 => 26,  59 => 21,  38 => 12,  94 => 37,  89 => 35,  85 => 31,  75 => 27,  68 => 21,  56 => 17,  87 => 31,  21 => 1,  26 => 6,  93 => 43,  88 => 6,  78 => 24,  46 => 10,  27 => 1,  44 => 12,  31 => 5,  28 => 4,  201 => 92,  196 => 90,  183 => 115,  171 => 61,  166 => 71,  163 => 62,  158 => 80,  156 => 66,  151 => 76,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 51,  105 => 50,  91 => 27,  62 => 23,  49 => 13,  24 => 4,  25 => 1,  19 => 1,  79 => 22,  72 => 25,  69 => 28,  47 => 9,  40 => 5,  37 => 10,  22 => 2,  246 => 90,  157 => 107,  145 => 46,  139 => 103,  131 => 52,  123 => 47,  120 => 53,  115 => 35,  111 => 33,  108 => 45,  101 => 46,  98 => 29,  96 => 27,  83 => 23,  74 => 23,  66 => 21,  55 => 17,  52 => 21,  50 => 58,  43 => 12,  41 => 9,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 134,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 109,  154 => 84,  149 => 51,  147 => 58,  144 => 104,  141 => 48,  133 => 68,  130 => 41,  125 => 55,  122 => 53,  116 => 41,  112 => 49,  109 => 34,  106 => 35,  103 => 43,  99 => 39,  95 => 43,  92 => 86,  86 => 26,  82 => 25,  80 => 29,  73 => 23,  64 => 18,  60 => 16,  57 => 20,  54 => 15,  51 => 7,  48 => 6,  45 => 21,  42 => 8,  39 => 7,  36 => 5,  33 => 3,  30 => 2,);
    }
}
