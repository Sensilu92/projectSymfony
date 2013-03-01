<?php

/* SprintBundle:Sprint:assignationUserStoriesVue.html.twig */
class __TwigTemplate_5ef8de66121636d549fd98bb4f12e19c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'emplacement' => array($this, 'block_emplacement'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Assignation user stories
";
    }

    // line 7
    public function block_emplacement($context, array $blocks = array())
    {
        // line 8
        echo "        Assignation user stories
    ";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "        <div class=\"row\">
    <div class=\"span4 offset1\">
     
         <form method=\"post\" action=\"\"> 
        
        <label>Sprint : </label><SELECT name='sprint'>
            ";
        // line 18
        if (array_key_exists("sprint", $context)) {
            // line 19
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sprint"));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 20
                echo "                    ";
                if (array_key_exists("currentSprint", $context)) {
                    // line 21
                    echo "                        ";
                    if (($this->getAttribute($this->getContext($context, "s"), "nom") == $this->getContext($context, "currentSprint"))) {
                        // line 22
                        echo "                            <OPTION selected=\"selected\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s"), "nom"), "html", null, true);
                        echo "
                                ";
                    } else {
                        // line 24
                        echo "                            <OPTION>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s"), "nom"), "html", null, true);
                        echo "
                        ";
                    }
                    // line 26
                    echo "                     ";
                } else {
                    // line 27
                    echo "                        <OPTION>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s"), "nom"), "html", null, true);
                    echo "
                     ";
                }
                // line 29
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 30
            echo "            ";
        }
        // line 31
        echo "        </SELECT> 
        <label>Projet : </label><SELECT name='projet'>
            ";
        // line 33
        if (array_key_exists("projet", $context)) {
            // line 34
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "projet"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 35
                echo "                    ";
                if (array_key_exists("currentProjet", $context)) {
                    // line 36
                    echo "                        ";
                    if (($this->getAttribute($this->getContext($context, "p"), "nom") == $this->getContext($context, "currentProjet"))) {
                        // line 37
                        echo "                            <OPTION selected=\"selected\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nom"), "html", null, true);
                        echo "
                                ";
                    } else {
                        // line 39
                        echo "                            <OPTION>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nom"), "html", null, true);
                        echo "
                        ";
                    }
                    // line 41
                    echo "                     ";
                } else {
                    // line 42
                    echo "                        <OPTION>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nom"), "html", null, true);
                    echo "
                     ";
                }
                // line 44
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 45
            echo "            ";
        }
        // line 46
        echo "        </SELECT>
        
        <input type='submit' value='Charger' name='charger'/> <br /> <br /> 
        
            </div></div>
        <div class=\"row\">
    <div class=\"span10 offset2\">
        
        ";
        // line 54
        if (array_key_exists("userStories", $context)) {
            // line 55
            echo " 
        <table style=\"border-collapse: collapse; border: solid; text-align: left\"><tr>
           
            <td> User stories </td><td> A assigner à </td><td> Ajouter au sprint </td></tr>
        
            ";
            // line 60
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "userStories"));
            foreach ($context['_seq'] as $context["_key"] => $context["userStory"]) {
                // line 61
                echo "            
                <tr>
                    <td>
                        <b name=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                echo "\" >#";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                echo "</b><br> 
                        <b name=\"fonctionnalite\">Fonctionnalité : </b>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "fonctionnalite"), "html", null, true);
                echo "<br>
                    </td>
                    <td>
                        <SELECT name='dev";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                echo "'>
                            <OPTION name='' value=\"\">
                            ";
                // line 70
                if (array_key_exists("listDev", $context)) {
                    // line 71
                    echo "                                ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listDev"));
                    foreach ($context['_seq'] as $context["_key"] => $context["dev"]) {
                        // line 72
                        echo "                                     ";
                        // line 76
                        echo "                                    <OPTION>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "dev"), "nom"), "html", null, true);
                        echo "
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dev'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 78
                    echo "                            ";
                }
                // line 79
                echo "                        </SELECT> 
                    </td>
                    <td>
                        <input type='checkbox' name='ajout";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                echo "'/>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userStory'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 85
            echo " 
            </tr></table><br /> 
        <input type='submit' value='Valider' name='valider'/> <br /> <br /> 
         </form>
    ";
        }
        // line 90
        echo "        
            </div></div>

    
    ";
        // line 94
        if (array_key_exists("message", $context)) {
            // line 95
            echo "        <a style=\"color:red\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
            echo "</a>
    ";
        }
        // line 97
        echo "

 ";
    }

    public function getTemplateName()
    {
        return "SprintBundle:Sprint:assignationUserStoriesVue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 97,  245 => 95,  243 => 94,  237 => 90,  230 => 85,  220 => 82,  215 => 79,  212 => 78,  203 => 76,  201 => 72,  196 => 71,  194 => 70,  189 => 68,  183 => 65,  177 => 64,  172 => 61,  168 => 60,  161 => 55,  159 => 54,  149 => 46,  146 => 45,  140 => 44,  134 => 42,  131 => 41,  125 => 39,  119 => 37,  116 => 36,  113 => 35,  108 => 34,  106 => 33,  102 => 31,  99 => 30,  93 => 29,  87 => 27,  84 => 26,  78 => 24,  72 => 22,  69 => 21,  66 => 20,  61 => 19,  59 => 18,  51 => 12,  48 => 11,  43 => 8,  40 => 7,  33 => 4,  30 => 3,);
    }
}
