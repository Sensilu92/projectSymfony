<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_9fd7295ce0950c3403f500799a4fd767 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" />
    ";
        // line 5
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_menu($context, array $blocks = array())
    {
        // line 9
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/exception.png"), "html", null, true);
        echo "\" alt=\"Exception\" /></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 13
        if ($this->getAttribute($this->getContext($context, "collector"), "hasexception")) {
            // line 14
            echo "            <span>1</span>
        ";
        }
        // line 16
        echo "    </span>
</span>
";
    }

    // line 20
    public function block_panel($context, array $blocks = array())
    {
        // line 21
        echo "    <h2>Exception</h2>

    ";
        // line 23
        if ((!$this->getAttribute($this->getContext($context, "collector"), "hasexception"))) {
            // line 24
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 28
            echo "        ";
            echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Exception:show", array("exception" => $this->getAttribute($this->getContext($context, "collector"), "exception"), "format" => "html"), array());
            // line 29
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 163,  347 => 160,  343 => 159,  335 => 157,  333 => 156,  325 => 150,  323 => 149,  316 => 145,  309 => 141,  302 => 137,  295 => 133,  288 => 129,  281 => 125,  274 => 121,  259 => 109,  206 => 78,  203 => 77,  192 => 72,  158 => 56,  140 => 49,  69 => 20,  134 => 54,  49 => 13,  254 => 98,  244 => 93,  238 => 97,  232 => 90,  214 => 82,  182 => 69,  167 => 64,  296 => 111,  276 => 95,  271 => 93,  266 => 91,  262 => 90,  256 => 89,  253 => 88,  247 => 85,  231 => 80,  226 => 78,  222 => 76,  197 => 77,  193 => 66,  161 => 54,  150 => 61,  86 => 29,  56 => 13,  169 => 58,  97 => 43,  224 => 80,  217 => 83,  202 => 80,  199 => 69,  190 => 66,  188 => 69,  183 => 62,  164 => 63,  148 => 52,  87 => 34,  82 => 30,  77 => 24,  65 => 25,  117 => 51,  110 => 42,  40 => 6,  137 => 31,  112 => 21,  99 => 27,  62 => 16,  113 => 40,  280 => 98,  275 => 93,  269 => 92,  260 => 90,  255 => 88,  252 => 105,  250 => 86,  245 => 101,  241 => 82,  237 => 81,  233 => 81,  229 => 89,  220 => 79,  218 => 78,  211 => 81,  208 => 71,  204 => 71,  195 => 70,  187 => 63,  185 => 68,  174 => 67,  160 => 66,  129 => 58,  124 => 36,  90 => 7,  53 => 21,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 158,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 106,  282 => 88,  277 => 86,  267 => 85,  263 => 91,  257 => 81,  251 => 87,  246 => 78,  240 => 77,  234 => 74,  228 => 89,  223 => 87,  219 => 70,  213 => 77,  207 => 82,  198 => 74,  181 => 60,  176 => 71,  170 => 69,  168 => 60,  146 => 44,  142 => 68,  128 => 45,  125 => 44,  107 => 20,  38 => 5,  144 => 60,  141 => 42,  135 => 47,  126 => 36,  109 => 52,  103 => 45,  67 => 23,  61 => 51,  47 => 9,  105 => 51,  93 => 31,  76 => 36,  72 => 22,  68 => 20,  27 => 3,  91 => 35,  84 => 33,  94 => 24,  88 => 23,  79 => 21,  59 => 23,  21 => 2,  44 => 8,  31 => 3,  28 => 4,  225 => 88,  216 => 90,  212 => 72,  205 => 84,  201 => 73,  196 => 80,  194 => 79,  191 => 70,  189 => 77,  186 => 76,  180 => 64,  172 => 64,  159 => 51,  154 => 54,  147 => 58,  132 => 40,  127 => 52,  121 => 35,  118 => 32,  114 => 44,  104 => 39,  100 => 35,  78 => 28,  75 => 23,  71 => 21,  58 => 14,  34 => 6,  26 => 6,  24 => 1,  25 => 14,  19 => 1,  70 => 24,  63 => 15,  46 => 12,  22 => 2,  163 => 75,  155 => 64,  152 => 52,  149 => 48,  145 => 61,  139 => 67,  131 => 46,  123 => 53,  120 => 50,  115 => 51,  106 => 27,  101 => 40,  96 => 31,  83 => 28,  80 => 32,  74 => 28,  66 => 19,  55 => 16,  52 => 14,  50 => 10,  43 => 16,  41 => 6,  37 => 5,  35 => 6,  32 => 5,  29 => 3,  184 => 70,  178 => 71,  171 => 66,  165 => 60,  162 => 57,  157 => 73,  153 => 62,  151 => 53,  143 => 46,  138 => 55,  136 => 41,  133 => 55,  130 => 53,  122 => 51,  119 => 43,  116 => 41,  111 => 31,  108 => 41,  102 => 28,  98 => 38,  95 => 36,  92 => 39,  89 => 29,  85 => 39,  81 => 40,  73 => 19,  64 => 16,  60 => 16,  57 => 11,  54 => 13,  51 => 12,  48 => 11,  45 => 10,  42 => 8,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
