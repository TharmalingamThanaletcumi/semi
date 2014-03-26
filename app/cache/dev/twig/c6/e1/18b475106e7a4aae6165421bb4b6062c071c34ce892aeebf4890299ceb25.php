<?php

/* SioSemiBundle::layout.html.twig */
class __TwigTemplate_c6e118b475106e7a4aae6165421bb4b6062c071c34ce892aeebf4890299ceb25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"
       \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\">
  <head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/images/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\" />
    
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./styles/dataTable.css"), "html", null, true);
        echo "\" media=\"screen\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./styles/jquery.gritter.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./styles/formlogin.css"), "html", null, true);
        echo "\" />
    
     <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.7.2.min.js"), "html", null, true);
        echo "\"></script>     
     <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.8.23.custom.min.js"), "html", null, true);
        echo "\"></script>
     <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.gritter.min.js"), "html", null, true);
        echo "\"></script>
     <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery_002.js"), "html", null, true);
        echo "\"></script>
     <title>E-Seminaire : gestion des inscriptions</title>
  </head>
  <body>
  
  <header>  </header>
  
  <div id='navigation'>  
  <nav>
\t<ul>

\t\t<li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("_login");
        echo "\">Login</a></li>
\t\t<li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("_apropos");
        echo "\">A propos</a>
\t\t</li>
  </ul>
  </nav>\t
</div>
<br/>
<script type=\"text/javascript\">

</script>
    <br/>
      <div id=\"titre\">       
        <!-- img src=\"./images/seminairelogo.jpg\" id=\"logoseminaire\" alt=\"seminaire\" title=\"seminaire\" / -->       
        <h3>Séminaire : « Les Journées du management »</h3>
              </div>

 
 ";
        // line 47
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "
  <!-- Division pour le pied de page -->
    
  </body>
</html>


      
      
";
    }

    // line 47
    public function block_content($context, array $blocks = array())
    {
        // line 48
        echo " 
 ";
    }

    public function getTemplateName()
    {
        return "SioSemiBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 48,  122 => 47,  109 => 50,  107 => 47,  88 => 31,  84 => 30,  70 => 19,  66 => 18,  62 => 17,  58 => 16,  53 => 14,  49 => 13,  45 => 12,  40 => 10,  36 => 9,  31 => 7,  27 => 6,  20 => 1,);
    }
}
