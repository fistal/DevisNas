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
        return array (  249 => 112,  245 => 111,  241 => 109,  230 => 99,  220 => 92,  210 => 84,  200 => 80,  196 => 79,  192 => 78,  187 => 76,  183 => 75,  179 => 74,  174 => 72,  170 => 71,  166 => 70,  161 => 68,  157 => 67,  153 => 66,  149 => 64,  144 => 63,  140 => 61,  127 => 50,  117 => 46,  113 => 45,  109 => 44,  104 => 42,  100 => 41,  96 => 40,  92 => 38,  87 => 37,  83 => 35,  67 => 22,  62 => 20,  55 => 16,  49 => 12,  46 => 11,  40 => 9,  33 => 6,  30 => 5,);
    }
}
