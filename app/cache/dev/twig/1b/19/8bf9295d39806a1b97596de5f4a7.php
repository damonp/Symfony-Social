<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_1b198bf9295d39806a1b97596de5f4a7 extends Twig_Template
{
    protected $parent;

    public function getParent(array $context)
    {
        $parent = "SonataAdminBundle:CRUD:base_list.html.twig";
        if ($parent instanceof Twig_Template) {
            $name = $parent->getTemplateName();
            $this->parent[$name] = $parent;
            $parent = $name;
        } elseif (!isset($this->parent[$parent])) {
            $this->parent[$parent] = $this->env->loadTemplate($parent);
        }

        return $this->parent[$parent];
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
