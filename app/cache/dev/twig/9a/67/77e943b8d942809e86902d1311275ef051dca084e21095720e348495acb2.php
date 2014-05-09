<?php

/* AcmeDemoBundle:Secured:hello.html.twig */
class __TwigTemplate_9a6777e943b8d942809e86902d1311275ef051dca084e21095720e348495acb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . $this->getContext($context, "name")), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!</h1>

    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_secured_hello_admin", array("name" => $this->getContext($context, "name"))), "html", null, true);
        echo "\">Hello resource secured for <strong>admin</strong> only.</a>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  20 => 2,  34 => 7,  150 => 59,  146 => 58,  97 => 31,  245 => 111,  210 => 84,  192 => 78,  174 => 72,  170 => 71,  161 => 68,  153 => 66,  104 => 42,  127 => 28,  126 => 57,  100 => 41,  23 => 4,  266 => 141,  253 => 133,  249 => 112,  236 => 126,  234 => 125,  211 => 113,  207 => 112,  184 => 97,  165 => 84,  113 => 45,  77 => 26,  84 => 29,  65 => 25,  58 => 16,  124 => 41,  90 => 32,  81 => 27,  335 => 133,  332 => 132,  328 => 128,  325 => 127,  320 => 119,  317 => 118,  284 => 29,  279 => 27,  275 => 26,  271 => 25,  267 => 24,  261 => 138,  255 => 19,  251 => 18,  200 => 80,  198 => 127,  190 => 121,  188 => 118,  180 => 114,  175 => 112,  172 => 111,  167 => 65,  160 => 108,  148 => 105,  137 => 102,  118 => 95,  110 => 22,  70 => 24,  186 => 110,  152 => 106,  134 => 70,  114 => 49,  76 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 23,  258 => 81,  252 => 80,  247 => 17,  241 => 109,  229 => 12,  220 => 92,  214 => 69,  177 => 93,  169 => 60,  140 => 61,  132 => 59,  128 => 43,  107 => 46,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 130,  240 => 86,  238 => 15,  235 => 14,  230 => 99,  227 => 81,  224 => 118,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 111,  179 => 74,  159 => 61,  143 => 76,  135 => 55,  119 => 52,  102 => 17,  71 => 23,  67 => 22,  63 => 28,  59 => 13,  38 => 6,  94 => 34,  89 => 29,  85 => 38,  75 => 34,  68 => 21,  56 => 11,  87 => 38,  21 => 1,  26 => 11,  93 => 30,  88 => 31,  78 => 26,  46 => 8,  27 => 5,  44 => 12,  31 => 3,  28 => 4,  201 => 92,  196 => 79,  183 => 75,  171 => 61,  166 => 70,  163 => 63,  158 => 80,  156 => 66,  151 => 76,  142 => 57,  138 => 63,  136 => 61,  121 => 46,  117 => 19,  105 => 18,  91 => 39,  62 => 20,  49 => 10,  24 => 7,  25 => 1,  19 => 2,  79 => 22,  72 => 25,  69 => 31,  47 => 8,  40 => 6,  37 => 5,  22 => 3,  246 => 90,  157 => 67,  145 => 46,  139 => 56,  131 => 59,  123 => 47,  120 => 20,  115 => 35,  111 => 33,  108 => 19,  101 => 41,  98 => 29,  96 => 40,  83 => 40,  74 => 31,  66 => 21,  55 => 16,  52 => 10,  50 => 10,  43 => 7,  41 => 5,  35 => 5,  32 => 10,  29 => 3,  209 => 82,  203 => 134,  199 => 67,  193 => 73,  189 => 71,  187 => 76,  182 => 66,  176 => 102,  173 => 65,  168 => 72,  164 => 59,  162 => 109,  154 => 60,  149 => 64,  147 => 58,  144 => 63,  141 => 63,  133 => 68,  130 => 41,  125 => 55,  122 => 53,  116 => 41,  112 => 49,  109 => 44,  106 => 35,  103 => 43,  99 => 39,  95 => 43,  92 => 38,  86 => 26,  82 => 28,  80 => 29,  73 => 16,  64 => 13,  60 => 20,  57 => 12,  54 => 15,  51 => 7,  48 => 9,  45 => 8,  42 => 7,  39 => 7,  36 => 5,  33 => 3,  30 => 3,);
    }
}
