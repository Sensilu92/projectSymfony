<?php

/* WebProfilerBundle:Collector:events.html.twig */
class __TwigTemplate_0360437f1a4b8bdac45178eefb46cdea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["__internal_0b0904e99e93e7536c8e2bfabedf87412cbd0b45"] = $this;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/events.png"), "html", null, true);
        echo "\" alt=\"Events\" /></span>
    <strong>Events</strong>
</span>
";
    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "calledlisteners"))) {
            // line 14
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        } else {
            // line 16
            echo "        <h2>Events</h2>
        <p>
            <em>No events have been recorded. Are you sure that debugging is enabled in the kernel?</em>
        </p>
    ";
        }
    }

    // line 23
    public function block_panelContent($context, array $blocks = array())
    {
        // line 24
        echo "    <h2>Called Listeners</h2>

    <table>
        <tr>
            <th>Event name</th>
            <th>Priority</th>
            <th>Listener</th>
        </tr>
        ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "collector"), "calledlisteners"));
        foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
            // line 33
            echo "            <tr>
                <td><code>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listener"), "event"), "html", null, true);
            echo "</code></td>
                <td><code>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listener"), "priority"), "html", null, true);
            echo "</code></td>
                <td><code>";
            // line 36
            echo $context["__internal_0b0904e99e93e7536c8e2bfabedf87412cbd0b45"]->getdisplay_listener($this->getContext($context, "listener"));
            echo "</code></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 39
        echo "    </table>

    ";
        // line 41
        if ($this->getAttribute($this->getContext($context, "collector"), "notcalledlisteners")) {
            // line 42
            echo "        <h2>Not Called Listeners</h2>

        <table>
            <tr>
                <th>Event name</th>
                <th>Priority</th>
                <th>Listener</th>
            </tr>
            ";
            // line 50
            $context["listeners"] = $this->getAttribute($this->getContext($context, "collector"), "notcalledlisteners");
            // line 51
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter($this->getContext($context, "listeners"))));
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 52
                echo "                <tr>
                    <td><code>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "listeners"), $this->getContext($context, "listener"), array(), "array"), "event"), "html", null, true);
                echo "</code></td>
                    <td><code>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "listeners"), $this->getContext($context, "listener"), array(), "array"), "priority"), "html", null, true);
                echo "</code></td>
                    <td><code>";
                // line 55
                echo $context["__internal_0b0904e99e93e7536c8e2bfabedf87412cbd0b45"]->getdisplay_listener($this->getAttribute($this->getContext($context, "listeners"), $this->getContext($context, "listener"), array(), "array"));
                echo "</code></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 58
            echo "        </table>
    ";
        }
    }

    // line 62
    public function getdisplay_listener($_listener = null)
    {
        $context = $this->env->mergeGlobals(array(
            "listener" => $_listener,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 63
            echo "    ";
            if (($this->getAttribute($this->getContext($context, "listener"), "type") == "Closure")) {
                // line 64
                echo "        Closure
    ";
            } elseif (($this->getAttribute($this->getContext($context, "listener"), "type") == "Function")) {
                // line 66
                echo "        ";
                $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute($this->getContext($context, "listener"), "file"), $this->getAttribute($this->getContext($context, "listener"), "line"));
                // line 67
                echo "        ";
                if ($this->getContext($context, "link")) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "link"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listener"), "function"), "html", null, true);
                    echo "</a>";
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listener"), "function"), "html", null, true);
                }
                // line 68
                echo "    ";
            } elseif (($this->getAttribute($this->getContext($context, "listener"), "type") == "Method")) {
                // line 69
                echo "        ";
                $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute($this->getContext($context, "listener"), "file"), $this->getAttribute($this->getContext($context, "listener"), "line"));
                // line 70
                echo "        ";
                echo $this->env->getExtension('code')->abbrClass($this->getAttribute($this->getContext($context, "listener"), "class"));
                echo "::";
                if ($this->getContext($context, "link")) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "link"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listener"), "method"), "html", null, true);
                    echo "</a>";
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listener"), "method"), "html", null, true);
                }
                // line 71
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 71,  188 => 69,  185 => 68,  167 => 64,  164 => 63,  134 => 54,  49 => 13,  356 => 163,  347 => 160,  343 => 159,  335 => 157,  333 => 156,  325 => 150,  323 => 149,  316 => 145,  309 => 141,  302 => 137,  295 => 133,  288 => 129,  281 => 125,  274 => 121,  252 => 105,  245 => 101,  238 => 97,  206 => 78,  203 => 77,  192 => 72,  182 => 69,  158 => 56,  148 => 52,  140 => 49,  241 => 87,  220 => 79,  218 => 78,  214 => 82,  211 => 81,  199 => 69,  179 => 63,  161 => 52,  150 => 48,  129 => 34,  110 => 42,  82 => 9,  77 => 15,  97 => 32,  65 => 21,  56 => 17,  40 => 6,  124 => 29,  86 => 28,  62 => 5,  113 => 40,  53 => 13,  264 => 90,  259 => 109,  253 => 86,  247 => 85,  244 => 84,  239 => 82,  236 => 84,  229 => 78,  221 => 76,  217 => 83,  202 => 72,  200 => 71,  197 => 70,  193 => 69,  190 => 68,  187 => 67,  174 => 67,  169 => 60,  117 => 31,  112 => 30,  90 => 42,  87 => 34,  69 => 20,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 158,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 83,  228 => 89,  223 => 80,  219 => 70,  213 => 74,  207 => 73,  198 => 74,  181 => 66,  176 => 62,  170 => 61,  168 => 60,  146 => 58,  142 => 45,  128 => 45,  125 => 44,  107 => 22,  38 => 7,  144 => 53,  141 => 51,  135 => 47,  126 => 33,  109 => 41,  103 => 46,  67 => 23,  61 => 15,  47 => 9,  105 => 26,  93 => 31,  76 => 16,  72 => 22,  68 => 6,  27 => 3,  91 => 35,  84 => 33,  94 => 39,  88 => 22,  79 => 20,  59 => 22,  21 => 2,  44 => 9,  31 => 5,  28 => 4,  225 => 88,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 70,  189 => 66,  186 => 76,  180 => 64,  172 => 64,  159 => 61,  154 => 54,  147 => 58,  132 => 48,  127 => 52,  121 => 45,  118 => 26,  114 => 42,  104 => 39,  100 => 35,  78 => 25,  75 => 23,  71 => 19,  58 => 16,  34 => 6,  26 => 7,  24 => 1,  25 => 3,  19 => 1,  70 => 24,  63 => 20,  46 => 12,  22 => 2,  163 => 57,  155 => 58,  152 => 49,  149 => 48,  145 => 44,  139 => 38,  131 => 46,  123 => 35,  120 => 50,  115 => 39,  106 => 36,  101 => 32,  96 => 21,  83 => 27,  80 => 32,  74 => 16,  66 => 19,  55 => 39,  52 => 14,  50 => 37,  43 => 8,  41 => 8,  37 => 5,  35 => 6,  32 => 5,  29 => 4,  184 => 70,  178 => 71,  171 => 66,  165 => 60,  162 => 57,  157 => 50,  153 => 62,  151 => 53,  143 => 43,  138 => 55,  136 => 50,  133 => 43,  130 => 53,  122 => 51,  119 => 43,  116 => 41,  111 => 37,  108 => 41,  102 => 25,  98 => 44,  95 => 36,  92 => 33,  89 => 29,  85 => 21,  81 => 35,  73 => 19,  64 => 17,  60 => 16,  57 => 11,  54 => 13,  51 => 12,  48 => 11,  45 => 8,  42 => 8,  39 => 6,  36 => 6,  33 => 4,  30 => 3,);
    }
}
