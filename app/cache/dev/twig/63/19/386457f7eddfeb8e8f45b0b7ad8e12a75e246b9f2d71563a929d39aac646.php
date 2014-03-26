<?php

/* SioSemiBundle:Participant:apropos.html.twig */
class __TwigTemplate_6319386457f7eddfeb8e8f45b0b7ad8e12a75e246b9f2d71563a929d39aac646 extends Twig_Template
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
        // line 23
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Apropos";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"box inscription\" >
<img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logoEdu.png"), "html", null, true);
        echo "\" alt=\"logo education nationale\"/>
<br />
<div class=\"box \">
Cette application permet de vous inscrire à 
des séances d'un séminaire, tenant compte des places disponibles.
</div>  
</div>
<div class=\"box inscription\" >
Développeurs : Olivier Capuozzo, Patrice Grand, Eric dondelinger  (réseau certa)<br/>
Responsables infrastucture système et réseau : Frédéric Varni, Olivier Korn  (réseau certa)<br/>
Expression des besoins : Christine Gaubert Macon, Eric Deschaintre (réseau certa), Miriam Benac  
</div>

";
    }

    public function getTemplateName()
    {
        return "SioSemiBundle:Participant:apropos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  40 => 6,  37 => 5,  31 => 3,  26 => 23,);
    }
}
