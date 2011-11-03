<?php

/* SocialSiteBundle::layout.html.twig */
class __TwigTemplate_0770bbfc689bbf66c31e35d22b3b6dcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html");
        echo "\" />

        ";
        // line 8
        echo $this->env->getExtension('twitter_anywhere')->renderSetup();
        echo "
    </head>
    <body>
            <div class=\"content\">
                ";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        // line 14
        echo "            </div>

        ";
        // line 16
        echo $this->env->getExtension('twitter_anywhere')->renderInitialize();
        echo "
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Social Bundle";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "                ";
    }

    public function getTemplateName()
    {
        return "SocialSiteBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
