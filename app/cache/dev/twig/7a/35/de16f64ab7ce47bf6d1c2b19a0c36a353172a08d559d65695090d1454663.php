<?php

/* SioSemiBundle:Default:index.html.twig */
class __TwigTemplate_7a35de16f64ab7ce47bf6d1c2b19a0c36a353172a08d559d65695090d1454663 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
Hello ";
        // line 2
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!

";
    }

    public function getTemplateName()
    {
        return "SioSemiBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
