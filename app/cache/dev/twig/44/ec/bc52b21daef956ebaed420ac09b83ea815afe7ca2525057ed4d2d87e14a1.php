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
\t\t\t  <div class=\"col-md-12\">\t\t\t  
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t  <h3 class=\"panel-title\">Ajouter des interventions</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t  <p class=\"text-center\"><a href=\"#\" id=\"add-another-intervention\" class=\"btn btn-warning text-center\"><span class=\"glyphicon glyphicon-plus\"></span></a> </p>
\t\t\t\t\t  <ol id=\"nas_appbundle_specialite_interventions\" data-prototype=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "interventions"), "vars"), "prototype"), 'widget'));
        echo "\">
\t\t\t\t\t\t";
        // line 37
        echo "\t\t\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "interventions"));
        foreach ($context['_seq'] as $context["_key"] => $context["intervention"]) {
            // line 38
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t";
            // line 40
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "intervention"), "intervention"), 'errors');
            echo "
\t\t\t\t\t\t\t\t";
            // line 41
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "intervention"), "intervention"), 'label');
            echo "
\t\t\t\t\t\t\t\t";
            // line 42
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "intervention"), "intervention"), 'widget');
            echo "

\t\t\t\t\t\t\t\t";
            // line 44
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "intervention"), "ghs"), 'errors');
            echo "
\t\t\t\t\t\t\t\t";
            // line 45
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "intervention"), "ghs"), 'label');
            echo "
\t\t\t\t\t\t\t\t";
            // line 46
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "intervention"), "ghs"), 'widget');
            echo "
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "intervention"), "dmi"), 'errors');
            echo "
\t\t\t\t\t\t\t\t";
            // line 49
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "intervention"), "dmi"), 'label');
            echo "
\t\t\t\t\t\t\t\t";
            // line 50
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "intervention"), "dmi"), 'widget');
            echo "

\t\t\t\t\t\t\t\t";
            // line 52
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "intervention"), "dontSpecialiste"), 'errors');
            echo "
\t\t\t\t\t\t\t\t";
            // line 53
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "intervention"), "dontSpecialiste"), 'label');
            echo "
\t\t\t\t\t\t\t\t";
            // line 54
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "intervention"), "dontSpecialiste"), 'widget');
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['intervention'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t\t\t\t\t</ol>
\t\t\t\t\t</div>
\t\t\t\t  </div>\t\t\t\t\t
\t\t\t  </div>\t\t\t  

\t\t\t</div>
\t\t\t<p></p>
\t\t\t<div class=\"row text-center\">
\t\t\t";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'widget');
        echo "
\t\t\t\t<button class=\"btn btn-success\"><span class=\"icon-checkmark\"></span> Enregistrer</button></div>
\t\t\t</form>
        </div>

        <div class=\"col-sm-3\">

            ";
        // line 73
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("NasAppBundle:Specialite:list"));
        echo "

\t\t</div>

</div>



";
        // line 83
        echo "<script type=\"text/javascript\">
    // keep track of how many email fields have been rendered
\tvar interventionCount = '";
        // line 85
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "form"), "interventions")), "html", null, true);
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
        return array (  188 => 85,  184 => 83,  173 => 73,  163 => 66,  153 => 58,  143 => 54,  139 => 53,  135 => 52,  130 => 50,  126 => 49,  122 => 48,  117 => 46,  113 => 45,  109 => 44,  104 => 42,  100 => 41,  96 => 40,  92 => 38,  87 => 37,  83 => 35,  67 => 22,  62 => 20,  55 => 16,  49 => 12,  46 => 11,  40 => 9,  33 => 6,  30 => 5,);
    }
}
