<?php

/* SioSemiBundle:Participant:NombreParticipants.html.twig */
class __TwigTemplate_6617041ca40fbf513b51253674308af0c588d5e5a609d82783bc7a52174cefe1 extends Twig_Template
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
        echo "\t    
\t\t\t<h1> nombre de participant : ";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, "NombreParticipants"), "html", null, true);
        echo " </h1>
\t\t
";
    }

    public function getTemplateName()
    {
        return "SioSemiBundle:Participant:NombreParticipants.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  37 => 5,  31 => 3,  26 => 11,);
    }
}
