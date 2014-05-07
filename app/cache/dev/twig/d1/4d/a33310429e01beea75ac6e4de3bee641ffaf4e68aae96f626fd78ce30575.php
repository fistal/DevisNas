<?php

/* NasUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_d14da33310429e01beea75ac6e4de3bee641ffaf4e68aae96f626fd78ce30575 extends Twig_Template
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
        echo "<div class=\"row\">
<div class=\"col-md-6 col-md-offset-3\">
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " method=\"POST\" class=\"form-horizontal\">
<fieldset>
\t<legend>Enregistrer un utilisateur</legend>
    
\t<div class=\"form-group\">
\t\t<label for=\"username\" class=\"col-sm-4 control-label\">E-mail : </label>
\t\t<div class=\"col-sm-4\">
\t\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t<p class=\"help-block\">";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'errors');
        echo "</p>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"username\" class=\"col-sm-4 control-label\">Utilisateur : </label>
\t\t<div class=\"col-sm-4\">
\t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t<p class=\"help-block\">";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username"), 'errors');
        echo "</p>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"username\" class=\"col-sm-4 control-label\">Mot de passe : </label>
\t\t<div class=\"col-sm-4\">
\t\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "plainPassword"), "first"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t<p class=\"help-block\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "plainPassword"), "first"), 'errors');
        echo "</p>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"username\" class=\"col-sm-4 control-label\">Confirmer mot de passe : </label>
\t\t<div class=\"col-sm-4\">
\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "plainPassword"), "second"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t<p class=\"help-block\">";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "plainPassword"), "second"), 'errors');
        echo "</p>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"username\" class=\"col-sm-4 control-label\">Type de compte : </label>
\t\t<div class=\"col-sm-4\">
\t\t";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "roles"));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 39
            echo "\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "role"), 'widget', array("attr" => array("class" => "form-control")));
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "role"), 'errors');
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"username\" class=\"col-sm-4 control-label\">Spécialite : </label>
\t\t<div class=\"col-sm-4\">
\t\t\t";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "specialite"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div> 
";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
  <div class=\"form-group\">
    <div class=\"col-sm-offset-4 col-sm-10\">
      <input type=\"submit\" value=\"Valider\" class=\"btn btn-default\"/>
    </div>
  </div>  \t

</fieldset> 
</form>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "NasUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 2,  34 => 11,  150 => 59,  146 => 58,  97 => 31,  245 => 111,  210 => 84,  192 => 78,  174 => 72,  170 => 71,  161 => 68,  153 => 66,  104 => 42,  127 => 50,  100 => 41,  23 => 3,  266 => 141,  253 => 133,  249 => 112,  236 => 126,  234 => 125,  211 => 113,  207 => 112,  184 => 97,  165 => 84,  113 => 45,  77 => 26,  84 => 40,  65 => 25,  58 => 16,  124 => 55,  90 => 27,  81 => 27,  335 => 133,  332 => 132,  328 => 128,  325 => 127,  320 => 119,  317 => 118,  284 => 29,  279 => 27,  275 => 26,  271 => 25,  267 => 24,  261 => 138,  255 => 19,  251 => 18,  200 => 80,  198 => 127,  190 => 121,  188 => 118,  180 => 114,  175 => 112,  172 => 111,  167 => 65,  160 => 108,  148 => 105,  137 => 102,  118 => 95,  110 => 35,  70 => 24,  152 => 106,  134 => 70,  114 => 49,  76 => 35,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 23,  258 => 81,  252 => 80,  247 => 17,  241 => 109,  229 => 12,  220 => 92,  214 => 69,  177 => 93,  169 => 60,  140 => 61,  132 => 59,  128 => 43,  107 => 46,  61 => 24,  273 => 96,  269 => 94,  254 => 92,  243 => 130,  240 => 86,  238 => 15,  235 => 14,  230 => 99,  227 => 81,  224 => 118,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 111,  179 => 74,  159 => 61,  143 => 76,  135 => 55,  119 => 52,  102 => 30,  71 => 23,  67 => 22,  63 => 26,  59 => 21,  38 => 13,  94 => 37,  89 => 29,  85 => 28,  75 => 27,  68 => 21,  56 => 17,  87 => 38,  21 => 1,  26 => 6,  93 => 30,  88 => 6,  78 => 32,  46 => 11,  27 => 1,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 79,  183 => 75,  171 => 61,  166 => 70,  163 => 63,  158 => 80,  156 => 66,  151 => 76,  142 => 57,  138 => 54,  136 => 56,  121 => 46,  117 => 46,  105 => 50,  91 => 39,  62 => 20,  49 => 12,  24 => 4,  25 => 1,  19 => 1,  79 => 22,  72 => 25,  69 => 28,  47 => 9,  40 => 7,  37 => 10,  22 => 2,  246 => 90,  157 => 67,  145 => 46,  139 => 56,  131 => 52,  123 => 47,  120 => 53,  115 => 35,  111 => 33,  108 => 46,  101 => 41,  98 => 29,  96 => 40,  83 => 35,  74 => 31,  66 => 21,  55 => 16,  52 => 18,  50 => 17,  43 => 11,  41 => 9,  35 => 10,  32 => 10,  29 => 4,  209 => 82,  203 => 134,  199 => 67,  193 => 73,  189 => 71,  187 => 76,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 109,  154 => 60,  149 => 64,  147 => 58,  144 => 63,  141 => 48,  133 => 68,  130 => 41,  125 => 55,  122 => 53,  116 => 41,  112 => 49,  109 => 44,  106 => 35,  103 => 43,  99 => 39,  95 => 43,  92 => 38,  86 => 26,  82 => 25,  80 => 29,  73 => 23,  64 => 26,  60 => 16,  57 => 20,  54 => 15,  51 => 7,  48 => 17,  45 => 21,  42 => 8,  39 => 11,  36 => 11,  33 => 6,  30 => 10,);
    }
}
