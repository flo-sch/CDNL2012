<?php

/* CDNL2012ProjectsBundle:Default:index.html.twig */
class __TwigTemplate_0621e7abad488fe454bc1f7223491454 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "CDNL2012ProjectsBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
