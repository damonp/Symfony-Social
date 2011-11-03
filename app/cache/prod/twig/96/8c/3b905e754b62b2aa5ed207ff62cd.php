<?php

/* FOSTwitterBundle::initialize.html.twig */
class __TwigTemplate_968c3b905e754b62b2aa5ed207ff62cd extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 2
        echo "<script type=\"text/javascript\">
    ";
        // line 3
        if ($this->getContext($context, 'configMap')) {
            // line 4
            echo "        twttr.anywhere.config({ ";
            echo $this->getContext($context, 'configMap');
            echo " });
    ";
        }
        // line 6
        echo "
    twttr.anywhere(function (T) {
        ";
        // line 8
        echo $this->getContext($context, 'scripts');
        echo "
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "FOSTwitterBundle::initialize.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
