<?php

/* ::layout.html.twig */
class __TwigTemplate_fffeb20f8a4ccec3c79e7b36dbd56d88c2929b97f509fee4c7d272e1343bd3f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'printDevis' => array($this, 'block_printDevis'),
            'titleAction' => array($this, 'block_titleAction'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"shortcut icon\" href=\"../../docs-assets/ico/favicon.png\">

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    
\t";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "\t
\t";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "
  </head>

  <body>

<div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">Devis nas</a>
        </div>
        <div class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav\">
            <li><a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("nas_app_homepage");
        echo "\"><span class=\"icon-home\" ></span> Accueil</a></li>
\t\t\t
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"icon-copy\"></span> Devis <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("nasApp_ajouterDevis");
        echo "\">Créer un devis</a></li>
                <li><a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("nasApp_listeDevis");
        echo "\">Liste des devis</a></li>
                <li><a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("nasApp_chercheDevis");
        echo "\">Rechercher un devis</a></li>
              </ul>
            </li>
\t\t\t";
        // line 86
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 87
            echo "\t\t\t<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("nasApp_ajouterSpecialite");
            echo "\"><span class=\"icon-grid\" ></span> Specialité</a></li>
\t\t\t<li><a href=\"";
            // line 88
            echo $this->env->getExtension('routing')->getPath("nasApp_extraction");
            echo "\"><span class=\"icon-pie\" ></span> Extraction</a></li>
<!--             <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"icon-pie\"></span> Statistique <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"";
            // line 92
            echo $this->env->getExtension('routing')->getPath("nasApp_ajouterSpecialite");
            echo "\">Devis par utilisateur</a></li>
                <li><a href=\"";
            // line 93
            echo $this->env->getExtension('routing')->getPath("nasApp_ajouterSpecialite");
            echo "\">Devis validé</a></li>
                <li><a href=\"";
            // line 94
            echo $this->env->getExtension('routing')->getPath("nasApp_listeSpecialite");
            echo "\">Devis supprimé</a></li>
                <li><a href=\"";
            // line 95
            echo $this->env->getExtension('routing')->getPath("nasApp_listeSpecialite");
            echo "\">Listing par spécialité</a></li>
              </ul>
            </li>\t -->
\t\t\t";
        }
        // line 99
        echo "\t\t\t<li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"icon-user\" ></span> Utilisateur";
        // line 100
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "  -  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "username"), "html", null, true);
            echo " ";
        }
        echo " <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
\t\t\t\t";
        // line 102
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 103
            echo "                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\"><span class=\"icon-user2\" style=\"color:#5a943f;\"></span> Nouveau utilisateur</a></li>
\t\t\t\t<!-- <li><a href=\"";
            // line 104
            echo $this->env->getExtension('routing')->getPath("nasUser_listUser");
            echo "\"><span class=\"icon-user2\" style=\"color:#5a943f;\"></span> Liste utilisateurs</a></li> -->
\t\t\t\t<li><a href=\"";
            // line 105
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\"><span class=\"glyphicon glyphicon-cog\" style=\"color:#5a943f;\"></span> Changer le mot de passe</a></li>
                <li><a href=\"";
            // line 106
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"><span class=\"icon-close\" style=\"color:#911f4c;\"></span> Déconnexion</a></li>
\t\t\t\t";
        } else {
            // line 107
            echo "\t
\t\t\t\t\t";
            // line 108
            if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 109
                echo "\t\t\t\t\t\t<li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
                echo "\"><span class=\"glyphicon glyphicon-cog\" style=\"color:#5a943f;\"></span> Changer le mot de passe</a></li>
\t\t\t\t\t\t<li><a href=\"";
                // line 110
                echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
                echo "\"><span class=\"icon-close\" style=\"color:#911f4c;\"></span> Déconnexion</a></li>
\t\t\t\t\t";
            } else {
                // line 111
                echo "\t
\t\t\t\t\t\t<li><a href=\"";
                // line 112
                echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
                echo "\"><span class=\"icon-key\" style=\"color:#5a943f;\"></span> Connexion</a></li>
\t\t\t\t\t";
            }
            // line 114
            echo "\t\t\t\t";
        }
        // line 115
        echo "              </ul>
            </li>\t\t\t
          </ul>
\t\t\t";
        // line 118
        $this->displayBlock('printDevis', $context, $blocks);
        // line 121
        echo "        </div><!--/.nav-collapse -->
      </div>
    </div>
\t
<!-- Main jumbotron for a primary marketing message or call to action -->
    <div class=\"jumbotron\">
\t\t";
        // line 127
        $this->displayBlock('titleAction', $context, $blocks);
        // line 132
        echo "\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 134
        echo "
    </div>
  
\t  <div class=\"container\">

\t  </div>
\t  
    <div class=\"container\">
      <footer>
        <p>&copy; Clinique Ambroise Pare 2014</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
\t

\t
  </body>
</html>
";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo " Nas ";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/bootstrap-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">\t\t\t
\t<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">\t\t\t
\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">\t\t\t
\t<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/docs.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">\t\t\t
\t";
    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        // line 23
        echo "\t<script src=\"https://code.jquery.com/jquery-1.10.2.min.js\"></script>   
\t<script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>\t
\t<script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/docs.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
\t
\t<script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/jquery.tablesorter.min.js"), "html", null, true);
        echo "\"></script>\t\t
    <script language=\"JavaScript\">
\t\t\$(function() {\t\t
\t\t\$(\"#myTable\").tablesorter({sortList:[[0,0],[2,1]], widgets: ['zebra']});
\t\t\$(\"#options\").tablesorter({sortList: [[0,0]], headers: { 3:{sorter: false}, 4:{sorter: false}}});
\t\t});
        function imprime_zone(titre, obj) {
            // Définie la zone à imprimer
            var zi = document.getElementById(obj).innerHTML;

            // Ouvre une nouvelle fenetre
            var f = window.open(\"\", \"ZoneImpr\", \"height=1000, width=1000,toolbar=0, menubar=0, scrollbars=1, resizable=1,status=0, location=0, left=10, top=10\");

            // Définit le Style de la page
            f.document.body.style.color = '#000000';
            f.document.body.style.backgroundColor = '#FFFFFF';
            f.document.body.style.padding = \"10px\";

            // Ajoute les Données
            f.document.title = \"\";
            f.document.body.innerHTML += \" \" + zi + \" \";

            // Imprime et ferme la fenetre
            f.window.print();
            f.window.close();
            return true;
        }
\t</script>\t
\t";
    }

    // line 118
    public function block_printDevis($context, array $blocks = array())
    {
        // line 119
        echo "\t\t
\t\t\t";
    }

    // line 127
    public function block_titleAction($context, array $blocks = array())
    {
        // line 128
        echo "\t\t";
    }

    // line 132
    public function block_body($context, array $blocks = array())
    {
        // line 133
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 133,  332 => 132,  328 => 128,  325 => 127,  320 => 119,  317 => 118,  284 => 29,  279 => 27,  275 => 26,  271 => 25,  267 => 24,  264 => 23,  261 => 22,  255 => 19,  251 => 18,  247 => 17,  243 => 16,  238 => 15,  235 => 14,  229 => 12,  203 => 134,  200 => 132,  198 => 127,  190 => 121,  188 => 118,  183 => 115,  180 => 114,  175 => 112,  172 => 111,  167 => 110,  162 => 109,  160 => 108,  157 => 107,  152 => 106,  148 => 105,  144 => 104,  139 => 103,  137 => 102,  128 => 100,  125 => 99,  118 => 95,  114 => 94,  110 => 93,  106 => 92,  99 => 88,  94 => 87,  92 => 86,  86 => 83,  82 => 82,  78 => 81,  70 => 76,  50 => 58,  48 => 22,  45 => 21,  43 => 14,  38 => 12,  25 => 1,  40 => 7,  32 => 4,  29 => 2,  83 => 40,  60 => 20,  52 => 15,  46 => 12,  42 => 10,  36 => 8,  34 => 7,  31 => 6,  28 => 5,);
    }
}
