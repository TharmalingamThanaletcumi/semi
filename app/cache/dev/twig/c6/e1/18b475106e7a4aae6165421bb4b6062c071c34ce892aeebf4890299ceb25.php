<?php

/* SioSemiBundle::layout.html.twig */
class __TwigTemplate_c6e118b475106e7a4aae6165421bb4b6062c071c34ce892aeebf4890299ceb25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body', $context, $blocks);
    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        // line 2
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Seminaire";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "        <div class=\"flash-message\">
            <em>Notice</em>: ";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('content_header', $context, $blocks);
        // line 24
        echo "
    <div class=\"block\">
        ";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 27
        echo "    </div>

";
    }

    // line 15
    public function block_content_header($context, array $blocks = array())
    {
        // line 16
        echo "         <ul id=\"menu\">
            ";
        // line 17
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 20
        echo "        </ul> 

        <div style=\"clear: both\"></div>
    ";
    }

    // line 17
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 18
        echo "               
            ";
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SioSemiBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  119 => 26,  114 => 18,  111 => 17,  104 => 20,  102 => 17,  99 => 16,  96 => 15,  90 => 27,  88 => 26,  84 => 24,  82 => 15,  79 => 14,  70 => 11,  67 => 10,  62 => 9,  59 => 8,  53 => 6,  47 => 3,  42 => 2,  39 => 1,  35 => 8,  32 => 7,  30 => 6,  27 => 5,  25 => 1,);
    }
}
