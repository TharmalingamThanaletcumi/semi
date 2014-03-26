<?php

/* SioSemiBundle:Participant:validationMail.html.twig */
class __TwigTemplate_9ded7c44bf5565ea8ca326d70721058aead74ca4cc8d9764beaadac2e0265d2d extends Twig_Template
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
        // line 12
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
        echo "
<div class=\"box inscription\">
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["validationMail"]) ? $context["validationMail"] : $this->getContext($context, "validationMail")), 'form');
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "SioSemiBundle:Participant:validationMail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  40 => 6,  37 => 5,  31 => 3,  26 => 12,);
    }
}
