<?php

/* WebProfilerBundle:Profiler:table.html.twig */
class __TwigTemplate_e778488aaf71a166d4502d0c291496edea29fdca3695fcf785ec25e2092cbf97 extends Twig_Template
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
        echo "<table ";
        if (array_key_exists("class", $context)) {
            echo "class='";
            echo twig_escape_filter($this->env, $this->getContext($context, "class"), "html", null, true);
            echo "'";
        }
        echo " >
    <thead>
        <tr>
            <th scope=\"col\">Key</th>
            <th scope=\"col\">Value</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter($this->getContext($context, "data"))));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "            <tr>
                <th>";
            // line 11
            echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
            echo "</th>
                ";
            // line 13
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getContext($context, "data"), $this->getContext($context, "key"), array(), "array"), (64 | 256)), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  649 => 462,  634 => 456,  625 => 453,  620 => 451,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  517 => 404,  389 => 160,  386 => 159,  378 => 157,  371 => 156,  358 => 151,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  326 => 138,  307 => 128,  302 => 125,  296 => 121,  293 => 120,  290 => 119,  281 => 114,  276 => 111,  259 => 103,  232 => 88,  222 => 83,  155 => 47,  363 => 153,  357 => 123,  344 => 119,  327 => 114,  324 => 113,  321 => 135,  318 => 111,  306 => 107,  291 => 102,  274 => 110,  265 => 105,  263 => 95,  231 => 83,  212 => 78,  202 => 94,  672 => 345,  668 => 344,  664 => 342,  660 => 464,  651 => 337,  647 => 336,  644 => 335,  640 => 334,  631 => 327,  629 => 454,  626 => 325,  622 => 452,  613 => 320,  609 => 319,  606 => 449,  602 => 317,  593 => 310,  591 => 309,  588 => 308,  585 => 307,  581 => 305,  577 => 303,  569 => 300,  563 => 298,  559 => 296,  557 => 295,  552 => 293,  548 => 292,  545 => 291,  541 => 290,  533 => 284,  531 => 283,  527 => 408,  525 => 280,  522 => 406,  519 => 278,  515 => 276,  509 => 272,  505 => 270,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  479 => 256,  473 => 254,  471 => 253,  465 => 249,  463 => 248,  459 => 246,  454 => 244,  448 => 240,  438 => 236,  436 => 235,  428 => 230,  418 => 224,  412 => 222,  410 => 221,  400 => 214,  397 => 213,  383 => 207,  376 => 205,  367 => 155,  353 => 149,  347 => 191,  313 => 183,  304 => 181,  297 => 104,  295 => 178,  288 => 118,  205 => 108,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 226,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 158,  373 => 156,  361 => 152,  351 => 120,  348 => 140,  342 => 137,  338 => 135,  329 => 188,  323 => 128,  315 => 131,  303 => 106,  300 => 105,  289 => 113,  286 => 112,  270 => 102,  262 => 98,  256 => 96,  248 => 97,  233 => 87,  226 => 84,  216 => 79,  213 => 78,  197 => 69,  194 => 68,  191 => 67,  185 => 74,  181 => 65,  178 => 59,  134 => 39,  53 => 15,  76 => 27,  20 => 1,  34 => 5,  150 => 55,  146 => 58,  97 => 41,  245 => 111,  210 => 77,  192 => 78,  174 => 65,  170 => 84,  161 => 63,  153 => 77,  104 => 32,  127 => 35,  100 => 39,  23 => 4,  266 => 141,  253 => 100,  249 => 112,  236 => 126,  234 => 125,  211 => 113,  207 => 75,  184 => 63,  165 => 83,  113 => 48,  77 => 20,  65 => 11,  58 => 18,  124 => 55,  90 => 42,  81 => 23,  335 => 134,  332 => 116,  328 => 139,  325 => 129,  320 => 127,  317 => 185,  284 => 29,  279 => 27,  275 => 105,  271 => 25,  267 => 101,  261 => 138,  255 => 101,  251 => 18,  200 => 72,  198 => 127,  190 => 76,  188 => 90,  180 => 114,  175 => 58,  172 => 57,  167 => 65,  160 => 108,  152 => 46,  148 => 105,  137 => 102,  118 => 49,  114 => 49,  110 => 22,  70 => 24,  84 => 27,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 215,  398 => 129,  393 => 211,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 197,  362 => 110,  360 => 109,  355 => 150,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 95,  298 => 120,  294 => 90,  285 => 175,  283 => 115,  278 => 98,  268 => 85,  264 => 23,  258 => 94,  252 => 80,  247 => 17,  241 => 93,  229 => 87,  220 => 81,  214 => 69,  177 => 93,  169 => 60,  140 => 58,  132 => 59,  128 => 43,  107 => 46,  61 => 12,  273 => 174,  269 => 107,  254 => 92,  243 => 92,  240 => 86,  238 => 15,  235 => 89,  230 => 99,  227 => 86,  224 => 81,  221 => 77,  219 => 76,  217 => 75,  208 => 76,  204 => 111,  179 => 98,  159 => 90,  143 => 51,  135 => 62,  119 => 40,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 16,  38 => 12,  94 => 21,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 16,  87 => 32,  21 => 1,  26 => 6,  93 => 27,  88 => 25,  78 => 18,  46 => 13,  27 => 7,  44 => 11,  31 => 8,  28 => 3,  201 => 106,  196 => 92,  183 => 75,  171 => 61,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 57,  138 => 54,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 33,  62 => 27,  49 => 14,  24 => 7,  25 => 35,  19 => 1,  79 => 18,  72 => 18,  69 => 17,  47 => 21,  40 => 6,  37 => 7,  22 => 3,  246 => 136,  157 => 89,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 35,  111 => 47,  108 => 19,  101 => 31,  98 => 34,  96 => 30,  83 => 31,  74 => 27,  66 => 21,  55 => 38,  52 => 12,  50 => 18,  43 => 12,  41 => 19,  35 => 9,  32 => 4,  29 => 3,  209 => 82,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 64,  147 => 75,  144 => 42,  141 => 73,  133 => 68,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 43,  99 => 23,  95 => 34,  92 => 28,  86 => 26,  82 => 19,  80 => 27,  73 => 33,  64 => 21,  60 => 20,  57 => 20,  54 => 19,  51 => 37,  48 => 16,  45 => 9,  42 => 11,  39 => 10,  36 => 10,  33 => 9,  30 => 5,);
    }
}
