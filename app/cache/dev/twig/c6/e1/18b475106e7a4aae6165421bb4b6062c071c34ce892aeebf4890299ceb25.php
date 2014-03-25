<?php

/* SioSemiBundle::layout.html.twig */
class __TwigTemplate_c6e118b475106e7a4aae6165421bb4b6062c071c34ce892aeebf4890299ceb25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
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

    // line 2
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" /> 
    
      
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Seminaire";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "        <div class=\"flash-message\">
            <em>Notice</em>: ";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
    ";
        // line 18
        $this->displayBlock('content_header', $context, $blocks);
        // line 27
        echo "
    <div class=\"block\">
        ";
        // line 29
        $this->displayBlock('content', $context, $blocks);
        // line 30
        echo "    </div>

";
    }

    // line 18
    public function block_content_header($context, array $blocks = array())
    {
        // line 19
        echo "         <ul id=\"menu\">
            ";
        // line 20
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 23
        echo "        </ul> 

        <div style=\"clear: both\"></div>
    ";
    }

    // line 20
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 21
        echo "               
            ";
    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
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
        return array (  115 => 29,  110 => 21,  107 => 20,  100 => 23,  98 => 20,  95 => 19,  92 => 18,  86 => 30,  84 => 29,  80 => 27,  78 => 18,  75 => 17,  66 => 14,  63 => 13,  58 => 12,  55 => 11,  49 => 9,  41 => 4,  36 => 3,  33 => 2,  44 => 8,  40 => 6,  37 => 5,  31 => 3,  26 => 11,);
    }
}
