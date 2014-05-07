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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"form-horizontal\">

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"control-group\">
\t\t\t\t  <label class=\"col-sm-5 control-label\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "specialite"), 'label', array("label" => "Spécialité : "));
        echo "</label>
\t\t\t\t  <div class=\"col-sm-3\">
\t\t\t\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "specialite"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<p></p>
\t\t\t <div class=\"row\">
\t\t\t  <div class=\"col-md-6\">\t\t\t  
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t  <h3 class=\"panel-title\">Ajouter des honoraires</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t  <p class=\"text-center\"><a href=\"#\" id=\"add-another-honoraire\" class=\"btn btn-warning text-center\">Ajouter honoraire</a></p>
\t\t\t\t\t\t  <ol id=\"nas_appbundle_specialite_honoraires\" data-prototype=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "honoraires"), "vars"), "prototype"), 'widget'));
        echo "\">
\t\t\t\t\t\t\t";
        // line 37
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "honoraires"));
        foreach ($context['_seq'] as $context["_key"] => $context["honoraire"]) {
            // line 38
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t";
            // line 40
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "honoraire"), "type"), 'errors');
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 41
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "honoraire"), "type"), 'label');
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 42
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "honoraire"), "type"), 'widget');
            echo "

\t\t\t\t\t\t\t\t\t";
            // line 44
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "honoraire"), "pourcentageFacture"), 'errors');
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 45
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "honoraire"), "pourcentageFacture"), 'label');
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 46
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "honoraire"), "pourcentageFacture"), 'widget');
            echo "
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['honoraire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t\t\t\t\t\t\t</ol>
\t\t\t\t\t</div>
\t\t\t\t  </div>\t\t\t\t\t
\t\t\t  </div>
\t\t\t  <div class=\"col-md-6\">\t\t\t  
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t  <h3 class=\"panel-title\">Ajouter des interventions</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t  <p class=\"text-center\"><a href=\"#\" id=\"add-another-intervention\" class=\"btn btn-warning text-center\">Ajouter intervention</a> </p>
\t\t\t\t\t  <ol id=\"nas_appbundle_specialite_interventions\" data-prototype=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "interventions"), "vars"), "prototype"), 'widget'));
        echo "\">
\t\t\t\t\t\t";
        // line 63
        echo "\t\t\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "interventions"));
        foreach ($context['_seq'] as $context["_key"] => $context["intervention"]) {
            // line 64
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t";
            // line 66
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "intervention"), "intervention"), 'errors');
            echo "
\t\t\t\t\t\t\t\t";
            // line 67
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "intervention"), "intervention"), 'label');
            echo "
\t\t\t\t\t\t\t\t";
            // line 68
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "intervention"), "intervention"), 'widget');
            echo "

\t\t\t\t\t\t\t\t";
            // line 70
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "intervention"), "ghs"), 'errors');
            echo "
\t\t\t\t\t\t\t\t";
            // line 71
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "intervention"), "ghs"), 'label');
            echo "
\t\t\t\t\t\t\t\t";
            // line 72
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "intervention"), "ghs"), 'widget');
            echo "
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
            // line 74
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "intervention"), "dmi"), 'errors');
            echo "
\t\t\t\t\t\t\t\t";
            // line 75
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "intervention"), "dmi"), 'label');
            echo "
\t\t\t\t\t\t\t\t";
            // line 76
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "intervention"), "dmi"), 'widget');
            echo "

\t\t\t\t\t\t\t\t";
            // line 78
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "intervention"), "dontSpecialiste"), 'errors');
            echo "
\t\t\t\t\t\t\t\t";
            // line 79
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "intervention"), "dontSpecialiste"), 'label');
            echo "
\t\t\t\t\t\t\t\t";
            // line 80
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "intervention"), "dontSpecialiste"), 'widget');
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['intervention'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "\t\t\t\t\t\t</ol>
\t\t\t\t\t</div>
\t\t\t\t  </div>\t\t\t\t\t
\t\t\t  </div>\t\t\t  

\t\t\t</div>
\t\t\t<p></p>
\t\t\t<div class=\"row text-center\">
\t\t\t";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'widget');
        echo "
\t\t\t\t<button class=\"btn btn-success\"><span class=\"icon-checkmark\"></span> Enregistrer</button></div>
\t\t\t</form>
        </div>

        <div class=\"col-sm-3\">

            ";
        // line 99
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("NasAppBundle:Specialite:list"));
        echo "

\t\t</div>

</div>



";
        // line 109
        echo "<script type=\"text/javascript\">
    // keep track of how many email fields have been rendered
    var honoraireCount = '";
        // line 111
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "form"), "honoraires")), "html", null, true);
        echo "';
\tvar interventionCount = '";
        // line 112
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "form"), "interventions")), "html", null, true);
        echo "';

    jQuery(document).ready(function() {
        jQuery('#add-another-honoraire').click(function() {
            var honoraireList = jQuery('#nas_appbundle_specialite_honoraires');
\t\t\t
\t\t\t\$lienSuppression = \$('<p class=\\\"text-right\\\"><a id=\\\"delete\\\" href=\"\\#\\\" class=\\\"btn btn-danger\\\">Supprimer</a></p>');
            var newWidget = honoraireList.attr('data-prototype');
            newWidget = newWidget.replace(/__name__/g, honoraireCount);
            honoraireCount++;

            var newLi = jQuery('<li id=\\\"'+honoraireCount+'\\\"></li>').html(newWidget);
\t\t\tnewLi.append(\$lienSuppression);
            newLi.appendTo(jQuery('#nas_appbundle_specialite_honoraires'));

            return false;
        });
        jQuery('#add-another-intervention').click(function() {
            var interventionList = jQuery('#nas_appbundle_specialite_interventions');
\t\t\t
\t\t\t\$lienSuppression = \$('<p class=\\\"text-right\\\"><a id=\\\"delete\\\" href=\"\\#\\\" class=\\\"btn btn-danger\\\">Supprimer</a></p>');
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
        return array (  245 => 111,  210 => 84,  192 => 78,  174 => 72,  170 => 71,  161 => 68,  153 => 66,  104 => 42,  127 => 50,  100 => 41,  23 => 24,  266 => 141,  253 => 133,  249 => 112,  236 => 126,  234 => 125,  211 => 113,  207 => 112,  184 => 97,  165 => 84,  113 => 45,  77 => 35,  84 => 33,  65 => 22,  58 => 16,  124 => 55,  90 => 27,  81 => 29,  335 => 133,  332 => 132,  328 => 128,  325 => 127,  320 => 119,  317 => 118,  284 => 29,  279 => 27,  275 => 26,  271 => 25,  267 => 24,  261 => 138,  255 => 19,  251 => 18,  200 => 80,  198 => 127,  190 => 121,  188 => 118,  180 => 114,  175 => 112,  172 => 111,  167 => 91,  160 => 108,  148 => 105,  137 => 102,  118 => 95,  110 => 93,  70 => 25,  152 => 106,  134 => 70,  114 => 38,  76 => 30,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 23,  258 => 81,  252 => 80,  247 => 17,  241 => 109,  229 => 12,  220 => 92,  214 => 69,  177 => 93,  169 => 60,  140 => 61,  132 => 59,  128 => 43,  107 => 46,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  243 => 130,  240 => 86,  238 => 15,  235 => 14,  230 => 99,  227 => 81,  224 => 118,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 111,  179 => 74,  159 => 61,  143 => 76,  135 => 60,  119 => 52,  102 => 30,  71 => 23,  67 => 22,  63 => 26,  59 => 21,  38 => 12,  94 => 37,  89 => 35,  85 => 31,  75 => 27,  68 => 21,  56 => 17,  87 => 37,  21 => 1,  26 => 6,  93 => 43,  88 => 6,  78 => 24,  46 => 11,  27 => 1,  44 => 12,  31 => 5,  28 => 4,  201 => 92,  196 => 79,  183 => 75,  171 => 61,  166 => 70,  163 => 62,  158 => 80,  156 => 66,  151 => 76,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 46,  105 => 50,  91 => 27,  62 => 20,  49 => 12,  24 => 4,  25 => 1,  19 => 1,  79 => 22,  72 => 25,  69 => 28,  47 => 9,  40 => 9,  37 => 10,  22 => 2,  246 => 90,  157 => 67,  145 => 46,  139 => 103,  131 => 52,  123 => 47,  120 => 53,  115 => 35,  111 => 33,  108 => 45,  101 => 46,  98 => 29,  96 => 40,  83 => 35,  74 => 23,  66 => 21,  55 => 16,  52 => 21,  50 => 58,  43 => 12,  41 => 9,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 134,  199 => 67,  193 => 73,  189 => 71,  187 => 76,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 109,  154 => 84,  149 => 64,  147 => 58,  144 => 63,  141 => 48,  133 => 68,  130 => 41,  125 => 55,  122 => 53,  116 => 41,  112 => 49,  109 => 44,  106 => 35,  103 => 43,  99 => 39,  95 => 43,  92 => 38,  86 => 26,  82 => 25,  80 => 29,  73 => 23,  64 => 18,  60 => 16,  57 => 20,  54 => 15,  51 => 7,  48 => 6,  45 => 21,  42 => 8,  39 => 7,  36 => 5,  33 => 6,  30 => 5,);
    }
}
