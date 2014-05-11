<?php

/* NasAppBundle:Specialite:detail.html.twig */
class __TwigTemplate_3b5464f2cfd8adc29d64ede47b7849f82e2523e3d375b7c198ac784716787ea8 extends Twig_Template
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "\tAjouter une intervention - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_titleAction($context, array $blocks = array())
    {
        echo "<h2>Détail de la spécialité : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["specialite"]) ? $context["specialite"] : $this->getContext($context, "specialite")), "specialite"), "html", null, true);
        echo "</h2>";
    }

    // line 6
    public function block_NasApp_body($context, array $blocks = array())
    {
        // line 7
        echo "
<div class=\"row\">
\t<div class=\"col-md-12\">
\t\t<h3>Liste des interventions <a class=\"btn btn-success btn-sm\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nasApp_ajouterIntervention", array("idSpecialite" => $this->getAttribute((isset($context["specialite"]) ? $context["specialite"] : $this->getContext($context, "specialite")), "id"))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-plus\"></span></a></h3>
\t\t<table class=\"table table-striped\" id=\"myTable\">
\t\t\t<thead>
\t\t\t  <tr>
\t\t\t\t<th>Intervention</th>
\t\t\t\t<th>GHS</th>
\t\t\t\t<th>DMI</th>
\t\t\t\t<th>Honoraires</th>
\t\t\t\t<th>jours CP</th>
\t\t\t\t<th>Total</th>
\t\t\t\t<th></th>
\t\t\t  </tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeIntervention"]) ? $context["listeIntervention"] : $this->getContext($context, "listeIntervention")));
        foreach ($context['_seq'] as $context["_key"] => $context["inter"]) {
            // line 25
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inter"]) ? $context["inter"] : $this->getContext($context, "inter")), "intervention"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inter"]) ? $context["inter"] : $this->getContext($context, "inter")), "ghs"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inter"]) ? $context["inter"] : $this->getContext($context, "inter")), "dmi"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inter"]) ? $context["inter"] : $this->getContext($context, "inter")), "honoraires"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inter"]) ? $context["inter"] : $this->getContext($context, "inter")), "nbrJours"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inter"]) ? $context["inter"] : $this->getContext($context, "inter")), "total"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td><a class=\"btn btn-warning\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nasApp_modifierIntervention", array("id" => $this->getAttribute((isset($context["inter"]) ? $context["inter"] : $this->getContext($context, "inter")), "id"))), "html", null, true);
            echo "\">Modifier</a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t\t</tbody>
\t\t</table>
\t\t
\t</div>

</div>
\t<hr>
<div class=\"row\">
\t<div class=\"col-md-12\">
\t\t<h3>Liste les honoraires <a class=\"btn btn-success btn-sm\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nasApp_ajouterHonoraire", array("idSpecialite" => $this->getAttribute((isset($context["specialite"]) ? $context["specialite"] : $this->getContext($context, "specialite")), "id"))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-plus\"></span></a></h3>
\t\t<table class=\"table table-striped\">
\t\t\t<thead>
\t\t\t  <tr>
\t\t\t\t<th>Honoraire</th>
\t\t\t\t<th>% sur le total de la facture</th>
\t\t\t\t<th>% à appliquer sur les devis</th>
\t\t\t\t<th></th>
\t\t\t  </tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeHonoraire"]) ? $context["listeHonoraire"] : $this->getContext($context, "listeHonoraire")));
        foreach ($context['_seq'] as $context["_key"] => $context["honoraire"]) {
            // line 56
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["honoraire"]) ? $context["honoraire"] : $this->getContext($context, "honoraire")), "type"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["honoraire"]) ? $context["honoraire"] : $this->getContext($context, "honoraire")), "pourcentageFacture"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["honoraire"]) ? $context["honoraire"] : $this->getContext($context, "honoraire")), "pourcentageDevis"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td><a class=\"btn btn-warning\" href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nasApp_modifierHonoraire", array("id" => $this->getAttribute((isset($context["honoraire"]) ? $context["honoraire"] : $this->getContext($context, "honoraire")), "id"))), "html", null, true);
            echo "\">Modifier</a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['honoraire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "\t\t\t</tbody>
\t\t</table>
\t\t
\t</div>

</div>

";
    }

    public function getTemplateName()
    {
        return "NasAppBundle:Specialite:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 63,  157 => 60,  153 => 59,  149 => 58,  145 => 57,  142 => 56,  138 => 55,  124 => 44,  113 => 35,  104 => 32,  100 => 31,  96 => 30,  92 => 29,  88 => 28,  84 => 27,  80 => 26,  77 => 25,  73 => 24,  56 => 10,  51 => 7,  48 => 6,  40 => 5,  33 => 3,  30 => 2,);
    }
}
