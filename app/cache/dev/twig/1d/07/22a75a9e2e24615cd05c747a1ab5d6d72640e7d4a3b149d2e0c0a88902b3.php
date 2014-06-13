<?php

/* NasAppBundle:Devis:liste.html.twig */
class __TwigTemplate_1d0722a75a9e2e24615cd05c747a1ab5d6d72640e7d4a3b149d2e0c0a88902b3 extends Twig_Template
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "\tAjouter une intervention - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_NasApp_body($context, array $blocks = array())
    {
        // line 7
        echo "
<div class=\"row\">
\t<div class=\"col-md-12\">
\t\t<h3>Liste des devis</h3>
\t\t<table class=\"table table-hover\" id=\"myTable\">
\t\t\t<thead>
\t\t\t  <tr>
\t\t\t\t<th class=\"header\">Nom</th>
\t\t\t\t<th class=\"header\">Prénom</th>
\t\t\t\t<th class=\"header\">Téléphone</th>
\t\t\t\t<th class=\"header\">E-mail</th>
\t\t\t\t<th class=\"header\">Intervention</th>
\t\t\t\t<th class=\"header\">Date</th>
\t\t\t\t";
        // line 20
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 21
            echo "\t\t\t\t\t<th class=\"header\">Utilisateur</th>
\t\t\t\t";
        }
        // line 22
        echo "\t\t\t\t
\t\t\t\t<th></th>
\t\t\t  </tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeDevis"));
        foreach ($context['_seq'] as $context["_key"] => $context["devis"]) {
            // line 28
            echo "\t\t\t\t\t";
            if (($this->getAttribute($this->getContext($context, "devis"), "etat") == "cancel")) {
                echo "<tr class=\"danger\">";
            } else {
                echo "<tr>";
            }
            // line 29
            echo "\t\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "devis"), "patient"), "nom"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "devis"), "patient"), "prenom"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "devis"), "patient"), "telephone"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "devis"), "patient"), "email"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "devis"), "intervention"), "intervention"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "devis"), "date"), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t";
            // line 35
            if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                // line 36
                echo "\t\t\t\t\t\t\t<td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "devis"), "user"), "username"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t";
            }
            // line 38
            echo "\t\t\t\t\t\t<td><a class=\"btn btn-warning\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nasApp_voirDevis", array("idDevis" => $this->getAttribute($this->getContext($context, "devis"), "id"))), "html", null, true);
            echo "\">Consulter</a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['devis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t\t\t</tbody>
\t\t</table>
\t\t<a class=\"btn btn-success\" href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("nasApp_ajouterDevis");
        echo "\">Ajouter un devis</a>
\t</div>

</div>



";
    }

    public function getTemplateName()
    {
        return "NasAppBundle:Devis:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 43,  124 => 41,  114 => 38,  108 => 36,  106 => 35,  102 => 34,  98 => 33,  94 => 32,  90 => 31,  86 => 30,  81 => 29,  74 => 28,  70 => 27,  63 => 22,  59 => 21,  57 => 20,  42 => 7,  39 => 6,  32 => 3,  29 => 2,);
    }
}
