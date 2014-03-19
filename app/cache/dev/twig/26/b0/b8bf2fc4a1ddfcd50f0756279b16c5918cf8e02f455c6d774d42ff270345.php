<?php

/* SioSemiBundle:Participant:verification.html.twig */
class __TwigTemplate_26b0b8bf2fc4a1ddfcd50f0756279b16c5918cf8e02f455c6d774d42ff270345 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SioSemiBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SioSemiBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "les participant";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t<h1> verifiction : ";
        echo twig_escape_filter($this->env, (isset($context["veri"]) ? $context["veri"] : $this->getContext($context, "veri")), "html", null, true);
        echo "</h1>
";
    }

    public function getTemplateName()
    {
        return "SioSemiBundle:Participant:verification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  37 => 5,  31 => 3,  26 => 9,);
    }
}
