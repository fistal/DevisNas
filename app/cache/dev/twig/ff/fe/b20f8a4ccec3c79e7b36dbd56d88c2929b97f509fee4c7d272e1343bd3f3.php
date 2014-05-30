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
        // line 60
        echo "
  </head>

  <body>

<div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <a  class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </a>
          <a class=\"navbar-brand\" href=\"#\">Devis nas</a>
        </div>
        <div class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav\">
            <li><a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("nas_app_homepage");
        echo "\"><span class=\"icon-home\" ></span> Accueil</a></li>
\t\t\t
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"icon-copy\"></span> Devis <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                ";
        // line 83
        if ((!$this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"))) {
            echo "<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("nasApp_ajouterDevis");
            echo "\">Créer un devis</a></li>";
        }
        // line 84
        echo "                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("nasApp_listeDevis");
        echo "\">Liste des devis</a></li>
                <li><a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("nasApp_chercheDevis");
        echo "\">Rechercher un devis</a></li>
              </ul>
            </li>
\t\t\t";
        // line 88
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 89
            echo "\t\t\t<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("nasApp_ajouterSpecialite");
            echo "\"><span class=\"icon-grid\" ></span> Specialité</a></li>
\t\t\t<li><a href=\"";
            // line 90
            echo $this->env->getExtension('routing')->getPath("nasApp_extraction");
            echo "\"><span class=\"icon-pie\" ></span> Extraction</a></li>
<!--             <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"icon-pie\"></span> Statistique <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"";
            // line 94
            echo $this->env->getExtension('routing')->getPath("nasApp_ajouterSpecialite");
            echo "\">Devis par utilisateur</a></li>
                <li><a href=\"";
            // line 95
            echo $this->env->getExtension('routing')->getPath("nasApp_ajouterSpecialite");
            echo "\">Devis validé</a></li>
                <li><a href=\"";
            // line 96
            echo $this->env->getExtension('routing')->getPath("nasApp_listeSpecialite");
            echo "\">Devis supprimé</a></li>
                <li><a href=\"";
            // line 97
            echo $this->env->getExtension('routing')->getPath("nasApp_listeSpecialite");
            echo "\">Listing par spécialité</a></li>
              </ul>
            </li>\t -->
\t\t\t";
        }
        // line 101
        echo "\t\t\t<li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"icon-user\" ></span> Utilisateur";
        // line 102
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "  -  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
            echo " ";
        }
        echo " <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
\t\t\t\t";
        // line 104
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 105
            echo "                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\"><span class=\"icon-user2\" style=\"color:#5a943f;\"></span> Nouveau utilisateur</a></li>
\t\t\t\t<!-- <li><a href=\"";
            // line 106
            echo $this->env->getExtension('routing')->getPath("nasUser_listUser");
            echo "\"><span class=\"icon-user2\" style=\"color:#5a943f;\"></span> Liste utilisateurs</a></li> -->
\t\t\t\t<li><a href=\"";
            // line 107
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\"><span class=\"glyphicon glyphicon-cog\" style=\"color:#5a943f;\"></span> Changer le mot de passe</a></li>
                <li><a href=\"";
            // line 108
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"><span class=\"icon-close\" style=\"color:#911f4c;\"></span> Déconnexion</a></li>
\t\t\t\t";
        } else {
            // line 109
            echo "\t
\t\t\t\t\t";
            // line 110
            if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 111
                echo "\t\t\t\t\t\t<li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
                echo "\"><span class=\"glyphicon glyphicon-cog\" style=\"color:#5a943f;\"></span> Changer le mot de passe</a></li>
\t\t\t\t\t\t<li><a href=\"";
                // line 112
                echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
                echo "\"><span class=\"icon-close\" style=\"color:#911f4c;\"></span> Déconnexion</a></li>
\t\t\t\t\t";
            } else {
                // line 113
                echo "\t
\t\t\t\t\t\t<li><a href=\"";
                // line 114
                echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
                echo "\"><span class=\"icon-key\" style=\"color:#5a943f;\"></span> Connexion</a></li>
\t\t\t\t\t";
            }
            // line 116
            echo "\t\t\t\t";
        }
        // line 117
        echo "              </ul>
            </li>\t\t\t
          </ul>
\t\t\t";
        // line 120
        $this->displayBlock('printDevis', $context, $blocks);
        // line 123
        echo "        </div><!--/.nav-collapse -->
      </div>
    </div>
\t
<!-- Main jumbotron for a primary marketing message or call to action -->
    <div class=\"jumbotron\">
\t\t";
        // line 129
        $this->displayBlock('titleAction', $context, $blocks);
        // line 134
        echo "\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 136
        echo "
    </div>
  
\t  <div class=\"container\">

\t  </div>
\t  
    <div class=\"container\">
      <div>
        <p>&copy; Clinique Ambroise Pare 2014</p>
      </div>
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
\t<script type=\"text/javascript\" src=\"http://platform.twitter.com/widgets.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/bootstrap-tooltip.js"), "html", null, true);
        echo "\"></script>
\t
\t<script type=\"text/javascript\" src=\"";
        // line 31
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

    // line 120
    public function block_printDevis($context, array $blocks = array())
    {
        // line 121
        echo "\t\t
\t\t\t";
    }

    // line 129
    public function block_titleAction($context, array $blocks = array())
    {
        // line 130
        echo "\t\t";
    }

    // line 134
    public function block_body($context, array $blocks = array())
    {
        // line 135
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
        return array (  343 => 135,  340 => 134,  336 => 130,  333 => 129,  328 => 121,  325 => 120,  292 => 31,  287 => 29,  282 => 27,  274 => 25,  270 => 24,  267 => 23,  250 => 17,  232 => 12,  206 => 136,  191 => 120,  186 => 117,  178 => 114,  175 => 113,  170 => 112,  165 => 111,  160 => 109,  155 => 108,  113 => 95,  97 => 89,  84 => 84,  70 => 78,  148 => 82,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 26,  268 => 85,  264 => 22,  258 => 19,  252 => 80,  247 => 78,  241 => 15,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 104,  132 => 51,  128 => 101,  107 => 36,  61 => 17,  273 => 96,  269 => 94,  254 => 18,  243 => 88,  240 => 86,  238 => 14,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 62,  102 => 90,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 12,  94 => 28,  89 => 85,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 83,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 129,  196 => 90,  183 => 116,  171 => 61,  166 => 71,  163 => 110,  158 => 67,  156 => 66,  151 => 107,  142 => 105,  138 => 75,  136 => 56,  121 => 97,  117 => 96,  105 => 40,  91 => 40,  62 => 23,  49 => 19,  24 => 4,  25 => 1,  19 => 1,  79 => 29,  72 => 16,  69 => 25,  47 => 9,  40 => 6,  37 => 10,  22 => 2,  246 => 16,  157 => 88,  145 => 46,  139 => 45,  131 => 102,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 16,  52 => 21,  50 => 60,  43 => 14,  41 => 7,  35 => 5,  32 => 3,  29 => 2,  209 => 82,  203 => 134,  199 => 67,  193 => 123,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 106,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 94,  106 => 36,  103 => 49,  99 => 31,  95 => 88,  92 => 21,  86 => 28,  82 => 34,  80 => 19,  73 => 28,  64 => 22,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 22,  45 => 21,  42 => 7,  39 => 6,  36 => 5,  33 => 3,  30 => 2,);
    }
}
