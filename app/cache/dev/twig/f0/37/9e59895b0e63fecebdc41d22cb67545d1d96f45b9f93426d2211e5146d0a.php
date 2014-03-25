<?php

/* SioSemiBundle:Participant:login.html.twig */
class __TwigTemplate_f0379e59895b0e63fecebdc41d22cb67545d1d96f45b9f93426d2211e5146d0a extends Twig_Template
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
        // line 11
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
        echo "<h1> connectez-vous svp </h1>

";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), 'form');
        echo "\t\t
";
    }

    public function getTemplateName()
    {
        return "SioSemiBundle:Participant:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  40 => 6,  37 => 5,  31 => 3,  26 => 11,);
    }
}
