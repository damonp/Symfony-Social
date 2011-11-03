<?php

/* SonataAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_d93948745378e678bf21c5138bb7fc44 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'generic_label' => array($this, 'block_generic_label'),
            'label' => array($this, 'block_label'),
            'field_row' => array($this, 'block_field_row'),
        );
    }

    public function getParent(array $context)
    {
        $parent = "SonataAdminBundle:Form:silex_form_div_layout.html.twig";
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

    // line 15
    public function block_generic_label($context, array $blocks = array())
    {
        // line 16
        ob_start();
        // line 17
        echo "    ";
        if ($this->getContext($context, 'required')) {
            // line 18
            echo "        ";
            $context['attr'] = twig_array_merge($this->getContext($context, 'attr'), array("class" => ((($this->getAttribute(((array_key_exists("attr", $context)) ? (twig_default_filter($this->getContext($context, 'attr'))) : ("")), "class", array(), "any", true)) ? (twig_default_filter($this->getAttribute($this->getContext($context, 'attr'), "class", array(), "any", false), "")) : ("")) . " required")));
            // line 19
            echo "    ";
        }
        // line 20
        echo "    ";
        if (((array_key_exists("in_list_checkbox", $context) && $this->getContext($context, 'in_list_checkbox')) && array_key_exists("widget", $context))) {
            // line 21
            echo "        <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'attr'));
            foreach ($context['_seq'] as $context['attrname'] => $context['attrvalue']) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getContext($context, 'attrname'), "html");
                echo "=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, 'attrvalue'), "html");
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            echo ">
            ";
            // line 22
            echo $this->getContext($context, 'widget');
            echo "
            <span>
                ";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, 'label')), "html");
            echo "
            </span>
            ";
            // line 26
            echo (($this->getContext($context, 'required')) ? ("*") : (""));
            echo "
        </label>
    ";
        } else {
            // line 29
            echo "        <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'attr'));
            foreach ($context['_seq'] as $context['attrname'] => $context['attrvalue']) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getContext($context, 'attrname'), "html");
                echo "=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, 'attrvalue'), "html");
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, 'label')), "html");
            echo " ";
            echo (($this->getContext($context, 'required')) ? ("*") : (""));
            echo " </label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 39
    public function block_label($context, array $blocks = array())
    {
        // line 40
        echo "                ";
        if ($this->getAttribute((($this->getAttribute((($this->getAttribute(((array_key_exists("sonata_admin", $context)) ? (twig_default_filter($this->getContext($context, 'sonata_admin'))) : ("")), "field_description", array(), "any", true)) ? (twig_default_filter($this->getAttribute($this->getContext($context, 'sonata_admin'), "field_description", array(), "any", false))) : ("")), "options", array(), "any", true)) ? (twig_default_filter($this->getAttribute($this->getAttribute($this->getContext($context, 'sonata_admin'), "field_description", array(), "any", false), "options", array(), "any", false))) : ("")), "name", array(), "any", true)) {
            // line 41
            echo "                    ";
            echo $this->env->getExtension('form')->renderLabel($this->getContext($context, 'form'), $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'sonata_admin'), "field_description", array(), "any", false), "options", array(), "any", false), "name", array(), "any", false));
            echo "
                ";
        } else {
            // line 43
            echo "                    ";
            echo $this->env->getExtension('form')->renderLabel($this->getContext($context, 'form'));
            echo "
                ";
        }
        // line 45
        echo "            ";
    }

    // line 34
    public function block_field_row($context, array $blocks = array())
    {
        // line 35
        echo "    ";
        if ((((!array_key_exists("sonata_admin", $context)) || (!$this->getContext($context, 'sonata_admin_enabled'))) || (!$this->getAttribute($this->getContext($context, 'sonata_admin'), "field_description", array(), "any", false)))) {
            // line 36
            echo "        ";
            echo $this->renderParentBlock("field_row", $context, $blocks);
            echo "
    ";
        } else {
            // line 38
            echo "        <div class=\"clearfix";
            if ((twig_length_filter($this->env, $this->getContext($context, 'errors')) > 0)) {
                echo " error";
            }
            echo "\" id=\"sonata-ba-field-container-";
            echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
            echo "\">
            ";
            // line 39
            $this->displayBlock('label', $context, $blocks);
            // line 46
            echo "
            <div class=\"input sonata-ba-field sonata-ba-field-";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'sonata_admin'), "edit", array(), "any", false), "html");
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'sonata_admin'), "inline", array(), "any", false), "html");
            echo " ";
            if ((twig_length_filter($this->env, $this->getContext($context, 'errors')) > 0)) {
                echo "sonata-ba-field-error";
            }
            echo "\">

                ";
            // line 49
            echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
            echo "

                ";
            // line 51
            if ($this->getAttribute($this->getAttribute($this->getContext($context, 'sonata_admin'), "field_description", array(), "any", false), "help", array(), "any", false)) {
                // line 52
                echo "                    <span class=\"help-block sonata-ba-field-help\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'sonata_admin'), "field_description", array(), "any", false), "help", array(), "any", false), "html");
                echo "</span>
                ";
            }
            // line 54
            echo "
                ";
            // line 55
            if ((twig_length_filter($this->env, $this->getContext($context, 'errors')) > 0)) {
                // line 56
                echo "                    <div class=\"sonata-ba-field-error-messages\">
                        ";
                // line 57
                echo $this->env->getExtension('form')->renderErrors($this->getContext($context, 'form'));
                echo "
                    </div>
                ";
            }
            // line 60
            echo "            </div>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
