<?php

/* NasAppBundle:Devis:print.html.twig */
class __TwigTemplate_6a29a3ce6940781eebc4d977f832c7e54d3e2676e48146e936141be42932c4b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div>
<table>
\t<tr>
\t\t<td style=\"width:450px;\">
\t\t\t<strong>CMC AMBROISE PARE</strong><br>
\t\t\t27 Bd Victor Hugo<br>
\t\t\t92523 Neuilly-Sur-Seine<br><br>
\t\t\t<strong>Tél :</strong> 08.26.200.300     <strong>Fax :</strong> 01.46.41.89.80<br>
\t\t</td>
\t\t<td>
\t\t\t<img src=\"../web/dist/images/cmcap.png\" width=\"250\">
\t\t</td>
\t</tr>
</table>
\t<div style=\"clear:both;\"></div>
\t<div style=\"margin-top:20px; text-align:right; margin-right:50px;\">
\t\tNeuilly-Sur-Seine, le ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
        echo "
\t</div>
\t<div style=\"margin-top:20px;\">
\t\t<strong>Objet :</strong> Devis pour l’hospitalisation de Monsieur / Madame ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "nom"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "prenom"), "html", null, true);
        echo "
\t</div>
\t<div style=\"margin-top:20px;\">
\t\tPraticien responsable : Dr ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
        echo "<br>
\t\tEtabli le ";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["devis"]) ? $context["devis"] : $this->getContext($context, "devis")), "date"), "d/m/Y"), "html", null, true);
        echo " à la demande du praticien
\t</div>
\t<div style=\"margin-top:20px;\">
\t\tLe montant du devis pour la Clinique est de : ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["totalFacture"]) ? $context["totalFacture"] : $this->getContext($context, "totalFacture")), "html", null, true);
        echo " se répartissant en : \t\t\t\t\t
\t</div>
\t<div style=\"margin-top:20px; border=1px solid black; width:750px;\">
\t\t<table>
\t\t\t<tr>
\t\t\t\t<td style=\"width:500px;height:20px;\">
\t\t\t\t\tPart de la clinique incluant les frais de séjour (y compris de réanimation):
\t\t\t\t</td>
\t\t\t\t<td style=\"width:50px;\">
\t\t\t\t\t";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["devis"]) ? $context["devis"] : $this->getContext($context, "devis")), "mntPartClinique"), "html", null, true);
        echo "€
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td style=\"width:500px;height:20px;\">
\t\t\t\t\tDispositifs médicaux implantables :
\t\t\t\t</td>
\t\t\t\t<td style=\"width:50px;\">
\t\t\t\t\t";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["intervention"]) ? $context["intervention"] : $this->getContext($context, "intervention")), "dmi"), "html", null, true);
        echo "€
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t<td style=\"width:500px;height:20px;\">
\t\t\t\t\tChambre particulière :
\t\t\t\t</td>
\t\t\t\t<td style=\"width:50px;\">
\t\t\t\t\t";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["devis"]) ? $context["devis"] : $this->getContext($context, "devis")), "mntChambre"), "html", null, true);
        echo "€
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td style=\"width:500px;height:20px;\">
\t\t\t\t\tLit accompagnant + repas :
\t\t\t\t</td>
\t\t\t\t<td style=\"width:50px;\">
\t\t\t\t\t";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["devis"]) ? $context["devis"] : $this->getContext($context, "devis")), "mntAccompagnant"), "html", null, true);
        echo "€
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td style=\"width:500px;height:20px;\">
\t\t\t\t\tHonoraires praticien :
\t\t\t\t</td>
\t\t\t\t<td style=\"width:50px;\">
\t\t\t\t\t";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["devis"]) ? $context["devis"] : $this->getContext($context, "devis")), "honorairesPraticien"), "html", null, true);
        echo "€
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td style=\"width:500px;height:20px;\">
\t\t\t\t\tHonoraires anesthésiste :
\t\t\t\t</td>
\t\t\t\t<td style=\"width:50px;\">
\t\t\t\t\t";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["devis"]) ? $context["devis"] : $this->getContext($context, "devis")), "honorairesAnesthesiste"), "html", null, true);
        echo "€
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td style=\"width:500px;height:20px;\">
\t\t\t\t\tHonoraires autres spécialités :
\t\t\t\t</td>
\t\t\t\t<td style=\"width:50px;\">
\t\t\t\t\t";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["honorairesAutres"]) ? $context["honorairesAutres"] : $this->getContext($context, "honorairesAutres")), "html", null, true);
        echo "€
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td style=\"color:red; text-align:right; padding-right:30px;\">
\t\t\t\t\tTOTAL
\t\t\t\t</td>
\t\t\t\t<td style=\"color:red; width:50px;\">
\t\t\t\t\t";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["totalFacture"]) ? $context["totalFacture"] : $this->getContext($context, "totalFacture")), "html", null, true);
        echo "€
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t</div>
\t<div style=\"margin-top:20px;\">
\t\tCe montant sera à acquitter le jour d’entrée à la clinique sinon l’hospitalisation pourra vous être refusée.\t\t
\t</div>
\t<div style=\"text-align:center;margin-top:20px;\">
\t\tMerci de vous présenter avec un chèque certifié de banque ou des espèces ou une carte bancaire <br>(sauf American Express)
\t</div>
\t<div style=\"text-align:center; margin-top:40px;width:800px;\">
\t\t<table border=\"1\" >
\t\t\t<tr>
\t\t\t\t<td style=\"height:60px\"></td>
\t\t\t\t<td style=\"height:60px\"></td>
\t\t\t\t<td style=\"height:60px\"></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td style=\" width:225px;\">
\t\t\t\t\tSignature de la clinique
\t\t\t\t\tPrécédé de la mention « lu et approuvé »
\t\t\t\t</td>
\t\t\t\t<td style=\" width:225px;\">
\t\t\t\t\tSignature du patient
\t\t\t\t\tPrécédé de la mention « lu et approuvé »\t\t\t\t
\t\t\t\t</td>
\t\t\t\t<td style=\" width:225px;\">
\t\t\t\t\tSignature du chirurgien 
\t\t\t\t\tPrécédé de la mention « lu et approuvé »\t\t\t\t
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t</div>
</div>











";
    }

    public function getTemplateName()
    {
        return "NasAppBundle:Devis:print.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 92,  139 => 84,  128 => 76,  117 => 68,  106 => 60,  95 => 52,  84 => 44,  73 => 36,  61 => 27,  55 => 24,  51 => 23,  43 => 20,  37 => 17,  19 => 1,);
    }
}
