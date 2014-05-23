<?php

/* NasAppBundle:Specialite:ajouter.html.twig */
class __TwigTemplate_44ecbc52b21daef956ebaed420ac09b83ea815afe7ca2525057ed4d2d87e14a1 extends Twig_Template
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

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "\tAjouter une intervention - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_titleAction($context, array $blocks = array())
    {
        echo "<h2>Ajouter une spécialité</h2>";
    }

    // line 11
    public function block_NasApp_body($context, array $blocks = array())
    {
        // line 12
        echo "<div class=\"row\">


        <div class=\"col-sm-8\">
\t\t\t<form method=\"post\" ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"control-group\">
\t\t\t\t  <label class=\"col-sm-5 control-label\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "specialite"), 'label', array("label" => "Spécialité : "));
        echo "</label>
\t\t\t\t  <div class=\"col-sm-3\">
\t\t\t\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "specialite"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<p></p>
\t\t\t <div class=\"row\">
\t\t\t  <div class=\"col-md-12\">\t\t\t  
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t  <h3 class=\"panel-title\">Ajouter des interventions</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t  <p class=\"text-center\"><a href=\"#\" id=\"add-another-intervention\" class=\"btn btn-warning text-center\"><span class=\"glyphicon glyphicon-plus\"></span></a> </p>
\t\t\t\t\t  <ol id=\"nas_appbundle_specialite_interventions\" data-prototype=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "interventions"), "vars"), "prototype"), 'widget'));
        echo "\">
\t\t\t\t\t\t";
        // line 37
        echo "\t\t\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "interventions"));
        foreach ($context['_seq'] as $context["_key"] => $context["intervention"]) {
            // line 38
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['intervention'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t\t\t\t\t</ol>
\t\t\t\t\t</div>
\t\t\t\t  </div>\t\t\t\t\t
\t\t\t  </div>\t\t\t  

\t\t\t</div>
\t\t\t<p></p>
\t\t\t<div class=\"row text-center\">
\t\t\t";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
\t\t\t\t<button class=\"btn btn-success\"><span class=\"icon-checkmark\"></span> Enregistrer</button></div>
\t\t\t</form>
        </div>

        <div class=\"col-sm-3\">

            ";
        // line 59
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("NasAppBundle:Specialite:list"));
        echo "

\t\t</div>

</div>



";
        // line 69
        echo "<script type=\"text/javascript\">
    // keep track of how many email fields have been rendered
\tvar interventionCount = '";
        // line 71
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "interventions")), "html", null, true);
        echo "';

    jQuery(document).ready(function() {
        jQuery('#add-another-intervention').click(function() {
            var interventionList = jQuery('#nas_appbundle_specialite_interventions');
\t\t\t
\t\t\t\$lienSuppression = \$('<p class=\\\"text-right\\\"><a id=\\\"delete\\\" href=\"\\#\\\" class=\\\"btn btn-danger\\\"><span class=\"glyphicon glyphicon-trash\"></span></a></p>');
            var newWidget = interventionList.attr('data-prototype');
            newWidget = newWidget.replace(/__name__/g, interventionCount);
            interventionCount++;

            var newLi = jQuery('<li id=\\\"'+interventionCount+'\\\"></li>').html(newWidget);
\t\t\tnewLi.append(\$lienSuppression);
            newLi.appendTo(jQuery('#nas_appbundle_specialite_interventions'));

            return false;
        });\t

\t\t
\t\t\$(document).on(\"click\", \"#delete\", function() {
\t\t\t\$(this).closest('li').remove();
\t\t});\t

\t\t\t\t

    })
</script>





";
    }

    public function getTemplateName()
    {
        return "NasAppBundle:Specialite:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 69,  127 => 55,  100 => 29,  23 => 24,  228 => 120,  207 => 108,  200 => 104,  104 => 41,  167 => 91,  65 => 22,  58 => 16,  150 => 92,  124 => 55,  114 => 38,  90 => 27,  81 => 29,  343 => 135,  340 => 134,  336 => 130,  333 => 129,  328 => 121,  325 => 120,  292 => 31,  287 => 29,  282 => 27,  274 => 25,  270 => 24,  267 => 23,  250 => 17,  232 => 12,  206 => 136,  191 => 120,  186 => 96,  178 => 114,  175 => 113,  170 => 112,  165 => 111,  160 => 109,  155 => 108,  113 => 52,  97 => 89,  84 => 33,  70 => 25,  172 => 101,  148 => 81,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 26,  268 => 85,  264 => 22,  258 => 19,  252 => 80,  247 => 78,  241 => 15,  229 => 73,  220 => 70,  214 => 112,  177 => 65,  169 => 60,  140 => 104,  132 => 59,  128 => 76,  107 => 46,  61 => 19,  273 => 96,  269 => 94,  254 => 18,  243 => 88,  240 => 86,  238 => 14,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 116,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 92,  159 => 61,  143 => 56,  135 => 60,  119 => 52,  102 => 30,  71 => 23,  67 => 22,  63 => 26,  59 => 21,  38 => 6,  94 => 37,  89 => 35,  85 => 31,  75 => 27,  68 => 21,  56 => 17,  87 => 37,  21 => 1,  26 => 6,  93 => 35,  88 => 6,  78 => 24,  46 => 11,  27 => 1,  44 => 9,  31 => 5,  28 => 4,  201 => 129,  196 => 90,  183 => 116,  171 => 61,  166 => 71,  163 => 110,  158 => 67,  156 => 72,  151 => 107,  142 => 64,  138 => 71,  136 => 56,  121 => 97,  117 => 51,  105 => 40,  91 => 27,  62 => 20,  49 => 12,  24 => 4,  25 => 1,  19 => 1,  79 => 30,  72 => 25,  69 => 28,  47 => 9,  40 => 9,  37 => 17,  22 => 2,  246 => 16,  157 => 56,  145 => 46,  139 => 84,  131 => 60,  123 => 59,  120 => 53,  115 => 35,  111 => 33,  108 => 45,  101 => 32,  98 => 29,  96 => 27,  83 => 35,  74 => 23,  66 => 21,  55 => 16,  52 => 21,  50 => 60,  43 => 12,  41 => 7,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 134,  199 => 67,  193 => 100,  189 => 71,  187 => 84,  182 => 109,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 84,  149 => 68,  147 => 106,  144 => 49,  141 => 48,  133 => 55,  130 => 69,  125 => 55,  122 => 53,  116 => 41,  112 => 49,  109 => 94,  106 => 35,  103 => 44,  99 => 39,  95 => 52,  92 => 38,  86 => 26,  82 => 25,  80 => 29,  73 => 23,  64 => 18,  60 => 16,  57 => 20,  54 => 15,  51 => 7,  48 => 6,  45 => 21,  42 => 8,  39 => 7,  36 => 5,  33 => 6,  30 => 5,);
    }
}
