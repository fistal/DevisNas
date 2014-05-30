<?php

/* ::Copie de layout.html.twig */
class __TwigTemplate_7e4877dc261009008d5f28bbc120363f2f4475e0dc6cfd3278bfb9b7c83d10d6 extends Twig_Template
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
        return "::Copie de layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  689 => 137,  683 => 135,  680 => 134,  678 => 133,  675 => 132,  666 => 126,  662 => 125,  658 => 124,  654 => 123,  643 => 120,  638 => 118,  635 => 117,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  576 => 101,  564 => 99,  555 => 95,  550 => 94,  547 => 93,  524 => 90,  512 => 84,  503 => 81,  501 => 80,  496 => 79,  493 => 78,  490 => 77,  478 => 74,  470 => 73,  467 => 72,  464 => 71,  456 => 68,  450 => 64,  442 => 62,  433 => 60,  426 => 58,  414 => 52,  405 => 49,  403 => 48,  390 => 43,  388 => 42,  385 => 41,  377 => 37,  366 => 33,  316 => 16,  311 => 14,  299 => 8,  271 => 374,  266 => 366,  260 => 363,  245 => 335,  225 => 298,  215 => 280,  146 => 181,  129 => 148,  126 => 147,  350 => 26,  308 => 13,  810 => 492,  807 => 491,  796 => 183,  792 => 488,  788 => 486,  775 => 485,  749 => 162,  746 => 161,  727 => 476,  710 => 149,  706 => 473,  702 => 472,  698 => 471,  694 => 138,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  649 => 122,  634 => 456,  625 => 453,  620 => 451,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 92,  517 => 404,  389 => 160,  386 => 159,  378 => 157,  371 => 35,  358 => 151,  345 => 147,  334 => 141,  331 => 140,  326 => 138,  307 => 128,  302 => 125,  296 => 121,  293 => 6,  290 => 5,  281 => 411,  276 => 395,  259 => 103,  253 => 342,  222 => 297,  210 => 270,  152 => 46,  363 => 32,  357 => 123,  344 => 24,  332 => 20,  327 => 114,  324 => 113,  321 => 135,  318 => 111,  306 => 286,  291 => 102,  265 => 105,  263 => 365,  255 => 353,  231 => 83,  212 => 279,  202 => 266,  190 => 76,  174 => 217,  672 => 345,  668 => 344,  664 => 342,  660 => 464,  651 => 337,  647 => 336,  644 => 335,  640 => 119,  631 => 327,  629 => 454,  626 => 325,  622 => 452,  613 => 320,  609 => 319,  606 => 449,  602 => 317,  593 => 105,  591 => 309,  588 => 308,  585 => 307,  581 => 305,  577 => 303,  569 => 300,  563 => 298,  559 => 296,  557 => 96,  552 => 293,  548 => 292,  545 => 291,  541 => 290,  533 => 284,  531 => 283,  527 => 91,  525 => 280,  522 => 406,  519 => 278,  515 => 85,  509 => 83,  505 => 270,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  479 => 256,  473 => 254,  471 => 253,  465 => 249,  463 => 248,  459 => 69,  454 => 244,  448 => 240,  438 => 236,  436 => 235,  428 => 59,  418 => 224,  412 => 222,  410 => 221,  400 => 47,  397 => 213,  383 => 207,  376 => 205,  367 => 339,  353 => 328,  347 => 191,  317 => 185,  313 => 15,  304 => 181,  297 => 104,  295 => 178,  288 => 4,  205 => 108,  188 => 90,  184 => 233,  161 => 202,  118 => 49,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 226,  415 => 180,  408 => 50,  401 => 172,  394 => 168,  380 => 158,  373 => 156,  361 => 152,  351 => 120,  348 => 140,  342 => 23,  338 => 135,  335 => 21,  329 => 188,  323 => 128,  320 => 127,  315 => 131,  303 => 106,  300 => 105,  289 => 113,  286 => 112,  275 => 105,  262 => 98,  256 => 96,  248 => 336,  233 => 304,  226 => 84,  216 => 79,  213 => 78,  197 => 249,  194 => 248,  185 => 74,  181 => 232,  172 => 57,  153 => 77,  150 => 55,  110 => 38,  76 => 31,  20 => 1,  34 => 4,  77 => 25,  134 => 161,  127 => 35,  23 => 4,  228 => 120,  207 => 269,  200 => 72,  104 => 90,  167 => 91,  65 => 17,  58 => 14,  100 => 36,  53 => 11,  124 => 132,  114 => 111,  90 => 27,  81 => 30,  343 => 135,  340 => 134,  336 => 130,  333 => 129,  328 => 121,  325 => 120,  292 => 31,  287 => 29,  282 => 27,  274 => 25,  270 => 24,  267 => 23,  250 => 17,  232 => 12,  206 => 136,  191 => 120,  186 => 117,  178 => 114,  175 => 113,  170 => 112,  165 => 111,  160 => 109,  155 => 108,  113 => 95,  97 => 89,  84 => 84,  70 => 78,  148 => 82,  480 => 75,  474 => 161,  469 => 158,  461 => 70,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 61,  435 => 146,  430 => 144,  427 => 143,  423 => 57,  413 => 134,  409 => 132,  407 => 131,  402 => 215,  398 => 129,  393 => 211,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 36,  368 => 34,  365 => 197,  362 => 110,  360 => 109,  355 => 27,  341 => 118,  337 => 22,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 95,  298 => 120,  294 => 90,  285 => 3,  283 => 115,  278 => 26,  268 => 373,  264 => 22,  258 => 19,  252 => 80,  247 => 78,  241 => 15,  229 => 87,  220 => 290,  214 => 112,  177 => 110,  169 => 210,  140 => 104,  132 => 59,  128 => 101,  107 => 37,  61 => 2,  273 => 394,  269 => 107,  254 => 18,  243 => 327,  240 => 326,  238 => 14,  235 => 311,  230 => 303,  227 => 301,  224 => 81,  221 => 116,  219 => 76,  217 => 289,  208 => 76,  204 => 267,  179 => 224,  159 => 196,  143 => 51,  135 => 62,  119 => 117,  102 => 90,  71 => 19,  67 => 16,  63 => 21,  59 => 17,  38 => 12,  94 => 57,  89 => 85,  85 => 26,  75 => 22,  68 => 20,  56 => 12,  87 => 26,  21 => 2,  26 => 3,  93 => 28,  88 => 28,  78 => 83,  46 => 10,  27 => 7,  44 => 8,  31 => 5,  28 => 3,  201 => 129,  196 => 92,  183 => 116,  171 => 216,  166 => 209,  163 => 110,  158 => 80,  156 => 195,  151 => 107,  142 => 105,  138 => 71,  136 => 168,  121 => 97,  117 => 96,  105 => 25,  91 => 56,  62 => 14,  49 => 12,  24 => 2,  25 => 1,  19 => 1,  79 => 32,  72 => 21,  69 => 21,  47 => 10,  40 => 11,  37 => 7,  22 => 2,  246 => 16,  157 => 89,  145 => 74,  139 => 169,  131 => 102,  123 => 61,  120 => 31,  115 => 40,  111 => 110,  108 => 33,  101 => 89,  98 => 29,  96 => 67,  83 => 30,  74 => 20,  66 => 12,  55 => 12,  52 => 13,  50 => 60,  43 => 14,  41 => 7,  35 => 5,  32 => 6,  29 => 4,  209 => 82,  203 => 134,  199 => 265,  193 => 123,  189 => 240,  187 => 75,  182 => 87,  176 => 223,  173 => 85,  168 => 61,  164 => 203,  162 => 59,  154 => 189,  149 => 182,  147 => 106,  144 => 176,  141 => 175,  133 => 78,  130 => 46,  125 => 42,  122 => 41,  116 => 116,  112 => 39,  109 => 94,  106 => 104,  103 => 44,  99 => 68,  95 => 88,  92 => 31,  86 => 46,  82 => 25,  80 => 24,  73 => 23,  64 => 19,  60 => 20,  57 => 19,  54 => 15,  51 => 37,  48 => 22,  45 => 21,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
