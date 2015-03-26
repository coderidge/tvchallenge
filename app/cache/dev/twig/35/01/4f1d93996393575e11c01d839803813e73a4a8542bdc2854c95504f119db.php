<?php

/* TVGuideListingsBundle:Default:menu.html.twig */
class __TwigTemplate_35014f1d93996393575e11c01d839803813e73a4a8542bdc2854c95504f119db extends Twig_Template
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
        echo "     <div class=\"page-header\">
        <h1>TV Channels</h1>
      </div>
      <div class=\"well\">
            

";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
        foreach ($context['_seq'] as $context["_key"] => $context["names"]) {
            echo " 
    
    <h2>   ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["names"]) ? $context["names"] : $this->getContext($context, "names")), "channel_name"), "html", null, true);
            echo " </h2>
    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['names'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    
      
 
            </div>

";
    }

    public function getTemplateName()
    {
        return "TVGuideListingsBundle:Default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 12,  34 => 9,  27 => 7,  19 => 1,);
    }
}
