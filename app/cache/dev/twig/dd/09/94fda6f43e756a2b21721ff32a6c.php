<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_dd0994fda6f43e756a2b21721ff32a6c extends Twig_Template
{
    protected $parent;

    public function getParent(array $context)
    {
        $parent = "SonataAdminBundle:CRUD:base_list_field.html.twig";
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
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
