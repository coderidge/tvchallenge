<?php

/* TVGuideListingsBundle:Default:index.html.twig */
class __TwigTemplate_50dde500947db0c20686911f16a012ffcad00272dac8dfcd737e61b1d7d62681 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head>
      ";
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        echo "      </head>
 <body>
    
  <div class=\"container\">
  
   <div class=\"text-center\">
      <h1>TV Guide</h1>
      <h2>Select A TV Package</h2>
      <form>
      <select name=\"package\" onchange=\"showChannel(this.value)\">
      <option value=\"\">Select:</option>
      <option value=\"1\">Small</option>
      <option value=\"2\">Medium</option>
      <option value=\"3\">Large</option>
       </select>
      </form>
       <div id=\"available\"></div>
      </div>

    </div><!-- /.container -->
    </body>
        <script>
            
            <!-- should in bundle but would not work pushed for time -->
          function showChannel(str) {
    if (str == \"\") {
        document.getElementById(\"available\").innerHTML = \"\";
        return;
    } else {
        if (window.XMLHttpRequest) {
           
            xmlhttp = new XMLHttpRequest();
        } else {
        
            xmlhttp = new ActiveXObject(\"Microsoft.XMLHTTP\");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById(\"available\").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open(\"GET\",\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("tv_guide_listings_package");
        echo "?package=\"+str,true);
        xmlhttp.send();
    }
}
        </script>
    </html>";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tvguidelistings/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
      ";
    }

    public function getTemplateName()
    {
        return "TVGuideListingsBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 4,  79 => 3,  69 => 47,  26 => 6,  24 => 3,  20 => 1,);
    }
}
