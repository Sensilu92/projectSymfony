<?php

/* SprintBundle:Sprint:assignationUserStoriesVue.html.twig */
class __TwigTemplate_5ef8de66121636d549fd98bb4f12e19c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::modele2.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::modele2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $this->displayParentBlock("menu", $context, $blocks);
        echo "Assignation user stories<br /><br />";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo " 
    <form method=\"post\" action=\"\"> 
        
        <label>Sprint : </label><SELECT name='sprint'>
            ";
        // line 10
        if (array_key_exists("sprint", $context)) {
            // line 11
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sprint"));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 12
                echo "                    ";
                if (array_key_exists("currentSprint", $context)) {
                    // line 13
                    echo "                        ";
                    if (($this->getAttribute($this->getContext($context, "s"), "nom") == $this->getContext($context, "currentSprint"))) {
                        // line 14
                        echo "                            <OPTION selected=\"selected\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s"), "nom"), "html", null, true);
                        echo "
                                ";
                    } else {
                        // line 16
                        echo "                            <OPTION>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s"), "nom"), "html", null, true);
                        echo "
                        ";
                    }
                    // line 18
                    echo "                     ";
                } else {
                    // line 19
                    echo "                        <OPTION>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s"), "nom"), "html", null, true);
                    echo "
                     ";
                }
                // line 21
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 22
            echo "            ";
        }
        // line 23
        echo "        </SELECT> 
        <label>Projet : </label><SELECT name='projet'>
            ";
        // line 25
        if (array_key_exists("projet", $context)) {
            // line 26
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "projet"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 27
                echo "                    ";
                if (array_key_exists("currentProjet", $context)) {
                    // line 28
                    echo "                        ";
                    if (($this->getAttribute($this->getContext($context, "p"), "nom") == $this->getContext($context, "currentProjet"))) {
                        // line 29
                        echo "                            <OPTION selected=\"selected\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nom"), "html", null, true);
                        echo "
                                ";
                    } else {
                        // line 31
                        echo "                            <OPTION>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nom"), "html", null, true);
                        echo "
                        ";
                    }
                    // line 33
                    echo "                     ";
                } else {
                    // line 34
                    echo "                        <OPTION>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nom"), "html", null, true);
                    echo "
                     ";
                }
                // line 36
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 37
            echo "            ";
        }
        // line 38
        echo "        </SELECT>
        
        <input type='submit' value='Charger' name='charger'/> <br /> <br /> 
 
    ";
        // line 42
        $context["counter"] = 0;
        echo " 
        
    ";
        // line 44
        if (array_key_exists("userStories", $context)) {
            // line 45
            echo " 
        <table style=\"border-collapse: collapse; border: solid; text-align: left\"><tr>
           
            <td> User stories </td><td> A assigner à </td><td> Ajouter au sprint </td></tr>
        
            ";
            // line 50
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "userStories"));
            foreach ($context['_seq'] as $context["_key"] => $context["userStory"]) {
                // line 51
                echo "            
                <tr>
                    <td>
                        <b name=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                echo "\" >#";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                echo "</b><br> 
                        <b name=\"fonctionnalite\">Fonctionnalité : </b>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "fonctionnalite"), "html", null, true);
                echo "<br>
                    </td>
                    <td>
                        <SELECT name='dev";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                echo "'>
                            <OPTION name='' value=\"\">
                            ";
                // line 60
                if (array_key_exists("listDev", $context)) {
                    // line 61
                    echo "                                ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listDev"));
                    foreach ($context['_seq'] as $context["_key"] => $context["dev"]) {
                        // line 62
                        echo "                                     ";
                        // line 66
                        echo "                                    <OPTION>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "dev"), "nom"), "html", null, true);
                        echo "
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dev'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 68
                    echo "                            ";
                }
                // line 69
                echo "                        </SELECT> 
                    </td>
                    <td>
                        <input type='checkbox' name='ajout";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                echo "'/>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userStory'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 75
            echo " 
            </tr></table><br /> 
        <input type='submit' value='Valider' name='valider'/> <br /> <br /> 
         </form>
    ";
        }
        // line 80
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
        return array (  224 => 80,  217 => 75,  207 => 72,  202 => 69,  199 => 68,  190 => 66,  188 => 62,  183 => 61,  181 => 60,  176 => 58,  170 => 55,  164 => 54,  159 => 51,  155 => 50,  148 => 45,  146 => 44,  141 => 42,  135 => 38,  132 => 37,  126 => 36,  120 => 34,  117 => 33,  111 => 31,  105 => 29,  102 => 28,  99 => 27,  94 => 26,  92 => 25,  88 => 23,  85 => 22,  79 => 21,  73 => 19,  70 => 18,  64 => 16,  58 => 14,  55 => 13,  52 => 12,  47 => 11,  45 => 10,  39 => 6,  36 => 5,  29 => 3,);
    }
}
