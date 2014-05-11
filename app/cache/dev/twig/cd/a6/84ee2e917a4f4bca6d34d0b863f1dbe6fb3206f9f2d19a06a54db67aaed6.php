<?php

/* NasAppBundle:Form:collectionHonoraires.html.twig */
class __TwigTemplate_cda684ee2e917a4f4bca6d34d0b863f1dbe6fb3206f9f2d19a06a54db67aaed6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'my_widget' => array($this, 'block_my_widget'),
            'collection_widget' => array($this, 'block_collection_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('my_widget', $context, $blocks);
        // line 24
        $this->displayBlock('collection_widget', $context, $blocks);
    }

    // line 1
    public function block_my_widget($context, array $blocks = array())
    {
        // line 2
        echo " 
 <table class=\"table table-hover\">
      <thead>
        <tr>
          <th>Honoraire</th>
          <th>Pourcentage</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
\t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), "type"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t  </td>
          <td>
\t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), "pourcentageFacture"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t  </td>
        </tr>
      </tbody>
</table>
 
 
";
    }

    // line 24
    public function block_collection_widget($context, array $blocks = array())
    {
        // line 25
        ob_start();
        // line 26
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 27
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->renderBlock("my_widget", $context, $blocks)));
            // line 28
            echo "    ";
        }
        // line 29
        echo "    ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "NasAppBundle:Form:collectionHonoraires.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 24,  266 => 141,  253 => 133,  249 => 132,  236 => 126,  234 => 125,  211 => 113,  207 => 112,  184 => 97,  165 => 84,  113 => 53,  77 => 35,  84 => 32,  65 => 22,  58 => 18,  124 => 41,  90 => 31,  81 => 29,  335 => 133,  332 => 132,  328 => 128,  325 => 127,  320 => 119,  317 => 118,  284 => 29,  279 => 27,  275 => 26,  271 => 25,  267 => 24,  261 => 138,  255 => 19,  251 => 18,  200 => 110,  198 => 127,  190 => 121,  188 => 118,  180 => 114,  175 => 112,  172 => 111,  167 => 91,  160 => 108,  148 => 105,  137 => 102,  118 => 95,  110 => 93,  70 => 27,  186 => 110,  152 => 106,  134 => 70,  114 => 38,  76 => 30,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 23,  258 => 81,  252 => 80,  247 => 17,  241 => 129,  229 => 12,  220 => 116,  214 => 69,  177 => 93,  169 => 60,  140 => 72,  132 => 59,  128 => 43,  107 => 46,  61 => 24,  273 => 96,  269 => 94,  254 => 92,  243 => 130,  240 => 86,  238 => 15,  235 => 14,  230 => 82,  227 => 81,  224 => 118,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 111,  179 => 69,  159 => 61,  143 => 76,  135 => 53,  119 => 52,  102 => 34,  71 => 19,  67 => 24,  63 => 22,  59 => 21,  38 => 12,  94 => 32,  89 => 20,  85 => 36,  75 => 29,  68 => 14,  56 => 21,  87 => 25,  21 => 1,  26 => 6,  93 => 43,  88 => 6,  78 => 81,  46 => 9,  27 => 1,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 115,  171 => 61,  166 => 71,  163 => 62,  158 => 80,  156 => 66,  151 => 76,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 50,  91 => 27,  62 => 23,  49 => 16,  24 => 4,  25 => 1,  19 => 1,  79 => 30,  72 => 28,  69 => 27,  47 => 9,  40 => 6,  37 => 10,  22 => 2,  246 => 90,  157 => 107,  145 => 46,  139 => 103,  131 => 52,  123 => 47,  120 => 53,  115 => 43,  111 => 37,  108 => 36,  101 => 46,  98 => 33,  96 => 44,  83 => 39,  74 => 28,  66 => 26,  55 => 15,  52 => 21,  50 => 58,  43 => 13,  41 => 9,  35 => 5,  32 => 3,  29 => 2,  209 => 82,  203 => 134,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 102,  173 => 65,  168 => 72,  164 => 59,  162 => 109,  154 => 84,  149 => 51,  147 => 58,  144 => 104,  141 => 48,  133 => 68,  130 => 41,  125 => 55,  122 => 59,  116 => 41,  112 => 48,  109 => 34,  106 => 35,  103 => 32,  99 => 41,  95 => 43,  92 => 86,  86 => 30,  82 => 82,  80 => 19,  73 => 19,  64 => 25,  60 => 6,  57 => 20,  54 => 10,  51 => 14,  48 => 22,  45 => 21,  42 => 7,  39 => 6,  36 => 5,  33 => 3,  30 => 2,);
    }
}
