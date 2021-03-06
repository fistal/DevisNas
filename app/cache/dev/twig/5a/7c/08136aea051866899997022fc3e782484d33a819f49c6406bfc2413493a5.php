<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_5a7c08136aea051866899997022fc3e782484d33a819f49c6406bfc2413493a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 35,  20 => 2,  34 => 7,  77 => 25,  134 => 69,  127 => 55,  23 => 4,  228 => 120,  207 => 108,  200 => 104,  104 => 32,  167 => 91,  65 => 25,  58 => 16,  100 => 31,  53 => 23,  124 => 55,  114 => 49,  90 => 27,  81 => 29,  343 => 135,  340 => 134,  336 => 130,  333 => 129,  328 => 121,  325 => 120,  292 => 31,  287 => 29,  282 => 27,  274 => 25,  270 => 24,  267 => 23,  250 => 17,  232 => 12,  206 => 136,  191 => 120,  186 => 96,  178 => 114,  175 => 113,  170 => 112,  165 => 111,  160 => 109,  155 => 94,  113 => 35,  97 => 89,  84 => 40,  70 => 25,  148 => 82,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 26,  268 => 85,  264 => 22,  258 => 19,  252 => 80,  247 => 78,  241 => 15,  229 => 73,  220 => 70,  214 => 112,  177 => 110,  169 => 60,  140 => 104,  132 => 59,  128 => 43,  107 => 46,  61 => 24,  273 => 96,  269 => 94,  254 => 18,  243 => 88,  240 => 86,  238 => 14,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 116,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 92,  159 => 61,  143 => 56,  135 => 60,  119 => 52,  102 => 30,  71 => 23,  67 => 22,  63 => 28,  59 => 21,  38 => 8,  94 => 37,  89 => 35,  85 => 38,  75 => 34,  68 => 21,  56 => 10,  87 => 38,  21 => 1,  26 => 12,  93 => 35,  88 => 28,  78 => 32,  46 => 12,  27 => 4,  44 => 9,  31 => 6,  28 => 5,  201 => 129,  196 => 90,  183 => 116,  171 => 61,  166 => 102,  163 => 110,  158 => 67,  156 => 72,  151 => 107,  142 => 64,  138 => 71,  136 => 56,  121 => 97,  117 => 51,  105 => 40,  91 => 39,  62 => 20,  49 => 22,  24 => 7,  25 => 1,  19 => 2,  79 => 30,  72 => 25,  69 => 31,  47 => 9,  40 => 7,  37 => 10,  22 => 2,  246 => 16,  157 => 88,  145 => 46,  139 => 45,  131 => 60,  123 => 59,  120 => 53,  115 => 35,  111 => 33,  108 => 46,  101 => 41,  98 => 29,  96 => 30,  83 => 40,  74 => 31,  66 => 21,  55 => 16,  52 => 15,  50 => 10,  43 => 11,  41 => 9,  35 => 10,  32 => 10,  29 => 4,  209 => 82,  203 => 134,  199 => 67,  193 => 100,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 84,  149 => 68,  147 => 106,  144 => 86,  141 => 48,  133 => 78,  130 => 41,  125 => 55,  122 => 53,  116 => 41,  112 => 49,  109 => 94,  106 => 35,  103 => 44,  99 => 39,  95 => 88,  92 => 29,  86 => 26,  82 => 25,  80 => 26,  73 => 24,  64 => 26,  60 => 20,  57 => 25,  54 => 15,  51 => 7,  48 => 12,  45 => 21,  42 => 9,  39 => 7,  36 => 7,  33 => 4,  30 => 2,);
    }
}
