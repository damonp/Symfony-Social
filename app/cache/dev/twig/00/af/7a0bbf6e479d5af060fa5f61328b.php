<?php

/* FOSTwitterBundle::setup.html.twig */
class __TwigTemplate_00af7a0bbf6e479d5af060fa5f61328b extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<script src=\"http://platform.twitter.com/anywhere.js?id=";
        echo twig_escape_filter($this->env, $this->getContext($context, 'apiKey'), "html");
        echo "&v=";
        echo twig_escape_filter($this->env, $this->getContext($context, 'version'), "html");
        echo "\" type=\"text/javascript\"></script>
";
    }

    public function getTemplateName()
    {
        return "FOSTwitterBundle::setup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
