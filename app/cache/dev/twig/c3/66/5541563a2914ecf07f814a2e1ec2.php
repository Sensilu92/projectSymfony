<?php

/* suiviProjetDevelopperBundle:Developper:creationNoticeVue.html.twig */
class __TwigTemplate_c3665541563a2914ecf07f814a2e1ec2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 75
    public function block_title($context, array $blocks = array())
    {
        // line 76
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Connexion
";
    }

    // line 80
    public function block_content($context, array $blocks = array())
    {
        // line 81
        echo "  <div class=\"container-fluid\">
     <div class=\"row-fluid\">
       <div class=\"span2 offset3\">
       
           ";
        // line 95
        echo " 
    <form method=\"post\" action=\"\">
                 
        <label>Projet : </label><SELECT name='projet'>
        ";
        // line 99
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "projet"));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 100
            echo "                ";
            if (array_key_exists("currentProjet", $context)) {
                // line 101
                echo "                    ";
                if (($this->getAttribute($this->getContext($context, "p"), "idprojet") == $this->getAttribute($this->getContext($context, "currentProjet"), "idprojet"))) {
                    // line 102
                    echo "                        <OPTION selected=\"selected\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nom"), "html", null, true);
                    echo "
                     ";
                } else {
                    // line 104
                    echo "                        <OPTION>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nom"), "html", null, true);
                    echo "
                    ";
                }
                // line 106
                echo "                ";
            } else {
                // line 107
                echo "                    <OPTION>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nom"), "html", null, true);
                echo " 
                ";
            }
            // line 108
            echo "               
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 110
        echo "        </SELECT> 
     
        <input type='submit' value='Charger' name='charger'/> <br /> 
     
           </div>
     </div>
   </div>
    

        
 <div class=\"container-fluid\">
    <div class=\"row-fluid\"> 
  <div class=\"span4 offset1\">
      
      ";
        // line 125
        echo "
      <fieldset ";
        // line 126
        echo " class=\"well\"> 
            <legend>Nouvelle notice d'utilisation</legend></br></br>
           
            <label>Titre : </label><input type='text'  name='titre' id='titre'/> <br /><br />
            <label>Fonctionnalité : </label><input type='text'  name='fonctionnalite' id='fonctionnalite'/> <br /><br />
            <label>Explications : </label><textarea name=\"detail\" rows=\"5\" cols=\"30\" style=\"border:solid 1px black; font-family:tahoma;\"></textarea> <br /><br />
            <input type='submit' value='Enregistrer' name='enregistrer'/> <br />        
        </fieldset>
    </form>
       ";
        // line 136
        echo "           
  </div>
    
  <div class=\"span4 offset2\"> 
 
      <fieldset class=\"well\"> 
        <legend>Liste des notices disponible pour ce projet</legend></br></br>
            <ul>
                ";
        // line 144
        if (array_key_exists("notices", $context)) {
            // line 145
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "notices"));
            foreach ($context['_seq'] as $context["_key"] => $context["notice"]) {
                // line 146
                echo "                        <li> <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suivi_projet_developper_consulte_notice", array("idNotice" => $this->getAttribute($this->getContext($context, "notice"), "idnotice"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "notice"), "fonctionnalite"), "html", null, true);
                echo "</a><br></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 148
            echo "                ";
        }
        // line 149
        echo "            </ul>    
    </fieldset>
        
  </div></div></div>


    
    
    ";
        // line 157
        if (array_key_exists("message", $context)) {
            // line 158
            echo "        <a style=\"color:red\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
            echo "</a>
    ";
        }
        // line 160
        echo "

 ";
    }

    public function getTemplateName()
    {
        return "suiviProjetDevelopperBundle:Developper:creationNoticeVue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 160,  165 => 158,  163 => 157,  153 => 149,  150 => 148,  139 => 146,  134 => 145,  132 => 144,  122 => 136,  111 => 126,  108 => 125,  92 => 110,  85 => 108,  79 => 107,  76 => 106,  70 => 104,  64 => 102,  61 => 101,  58 => 100,  54 => 99,  48 => 95,  42 => 81,  39 => 80,  32 => 76,  29 => 75,);
    }
}
