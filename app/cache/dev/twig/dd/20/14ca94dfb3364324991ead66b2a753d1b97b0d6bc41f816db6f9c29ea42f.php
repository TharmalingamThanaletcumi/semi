<?php

/* SioSemiBundle:Seance:liste.html.twig */
class __TwigTemplate_dd2014ca94dfb3364324991ead66b2a753d1b97b0d6bc41f816db6f9c29ea42f extends Twig_Template
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
        // line 14
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "admin";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t    <table id=\"sea\">
\t\t\t\t";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesSeances"]) ? $context["lesSeances"] : $this->getContext($context, "lesSeances")));
        foreach ($context['_seq'] as $context["_key"] => $context["sea"]) {
            // line 8
            echo "\t\t\t\t\t<tr><td> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sea"]) ? $context["sea"] : $this->getContext($context, "sea")), "libelle"), "html", null, true);
            echo " </td> <td> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sea"]) ? $context["sea"] : $this->getContext($context, "sea")), "nbMax"), "html", null, true);
            echo " </td> <td> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sea"]) ? $context["sea"] : $this->getContext($context, "sea")), "dateHeureDebut"), "html", null, true);
            echo " </td></tr>
\t\t\t\t\t
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t\t</table>
";
    }

    public function getTemplateName()
    {
        return "SioSemiBundle:Seance:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  47 => 8,  43 => 7,  40 => 6,  37 => 5,  31 => 3,  26 => 14,);
    }
}
