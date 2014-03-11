<?php

/* SioSemiBundle:Participant:listeParticipants.html.twig */
class __TwigTemplate_085cde38420b3b5fa5e5265fed76ae3a2e93de98d8b30ed5459caccda83ab0e6 extends Twig_Template
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
        // line 13
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
        echo "\t    <ul id=\"part\">
\t\t\t\t";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "lesParticipants"));
        foreach ($context['_seq'] as $context["_key"] => $context["part"]) {
            // line 8
            echo "\t\t\t\t\t<li> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "part"), "nom"), "html", null, true);
            echo "
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['part'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t\t</ul>
";
    }

    public function getTemplateName()
    {
        return "SioSemiBundle:Participant:listeParticipants.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 10,  47 => 8,  43 => 7,  40 => 6,  37 => 5,  31 => 3,  26 => 13,);
    }
}
