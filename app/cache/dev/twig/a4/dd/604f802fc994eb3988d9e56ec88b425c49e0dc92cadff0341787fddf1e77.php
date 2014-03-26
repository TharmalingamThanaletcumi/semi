<?php

/* SioSemiBundle:Participant:formulaireInscription.html.twig */
class __TwigTemplate_a4dd604f802fc994eb3988d9e56ec88b425c49e0dc92cadff0341787fddf1e77 extends Twig_Template
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
        echo "<div class=\"box inscription\">
";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["inscription"]) ? $context["inscription"] : $this->getContext($context, "inscription")), 'form');
        echo "
</div>
\t\t
";
    }

    public function getTemplateName()
    {
        return "SioSemiBundle:Participant:formulaireInscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  37 => 5,  31 => 3,  26 => 12,);
    }
}
