<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_38dc22f72bacba584caf6512a95f48b9 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'form' => array($this, 'block_form'),
        );
    }

    public function getParent(array $context)
    {
        $parent = $this->getContext($context, 'base_template');
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

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions\">
        <ul>
            ";
        // line 17
        if (((($this->getAttribute($this->getContext($context, 'admin'), "hasroute", array("show", ), "method", false) && $this->getAttribute($this->getContext($context, 'admin'), "id", array($this->getContext($context, 'object'), ), "method", false)) && $this->getAttribute($this->getContext($context, 'admin'), "isGranted", array("VIEW", ), "method", false)) && (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "show", array(), "any", false)) > 0))) {
            // line 18
            echo "                <li class=\"btn sonata-action-element\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateObjectUrl", array("show", $this->getContext($context, 'object'), ), "method", false), "html");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_show", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 20
        echo "            ";
        if (($this->getAttribute($this->getContext($context, 'admin'), "hasroute", array("create", ), "method", false) && $this->getAttribute($this->getContext($context, 'admin'), "isGranted", array("CREATE", ), "method", false))) {
            // line 21
            echo "                <li class=\"btn sonata-action-element\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateUrl", array("create", ), "method", false), "html");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_create", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 23
        echo "            ";
        if (($this->getAttribute($this->getContext($context, 'admin'), "hasroute", array("list", ), "method", false) && $this->getAttribute($this->getContext($context, 'admin'), "isGranted", array("LIST", ), "method", false))) {
            // line 24
            echo "                <li class=\"btn sonata-action-element\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateUrl", array("list", ), "method", false), "html");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_list", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 26
        echo "        </ul>
    </div>
";
    }

    // line 30
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute($this->getContext($context, 'admin'), "sidemenu", array($this->getContext($context, 'action'), ), "method", false), array(), "list");
    }

    // line 32
    public function block_form($context, array $blocks = array())
    {
        // line 33
        echo "
    ";
        // line 34
        if ($this->getAttribute($this->getContext($context, 'admin'), "id", array($this->getContext($context, 'object'), ), "method", false)) {
            // line 35
            echo "        ";
            $context['url'] = "edit";
            // line 36
            echo "    ";
        } else {
            // line 37
            echo "        ";
            $context['url'] = "create";
            // line 38
            echo "    ";
        }
        // line 39
        echo "
    ";
        // line 40
        if ((!$this->getAttribute($this->getContext($context, 'admin'), "hasRoute", array($this->getContext($context, 'url'), ), "method", false))) {
            // line 41
            echo "        <div>
            ";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form_not_available", array(), "SonataAdminBundle"), "html");
            echo "
        </div>
    ";
        } else {
            // line 45
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateUrl", array($this->getContext($context, 'url'), array("id" => $this->getAttribute($this->getContext($context, 'admin'), "id", array($this->getContext($context, 'object'), ), "method", false), "uniqid" => $this->getAttribute($this->getContext($context, 'admin'), "uniqid", array(), "any", false)), ), "method", false), "html");
            echo "\" ";
            echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, 'form'));
            echo " method=\"POST\">

            ";
            // line 47
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'form'), "vars", array(), "any", false), "errors", array(), "any", false)) > 0)) {
                // line 48
                echo "                <div class=\"sonata-ba-form-error\">
                    ";
                // line 49
                echo $this->env->getExtension('form')->renderErrors($this->getContext($context, 'form'));
                echo "
                </div>
            ";
            }
            // line 52
            echo "
            ";
            // line 53
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'admin'), "formgroups", array(), "any", false));
            foreach ($context['_seq'] as $context['name'] => $context['form_group']) {
                // line 54
                echo "                <fieldset>
                    <legend>
                        ";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, 'name'), array(), $this->getAttribute($this->getContext($context, 'admin'), "translationdomain", array(), "any", false)), "html");
                echo "
                        ";
                // line 57
                if ($this->getAttribute($this->getContext($context, 'form_group'), "collapsed", array(), "any", false)) {
                    // line 58
                    echo "                            <a href=\"\" class=\"sonata-ba-collapsed\">";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("link_expand", array(), "SonataAdminBundle");
                    echo "</a>
                        ";
                }
                // line 60
                echo "                    </legend>

                    <div class=\"sonata-ba-collapsed-fields\">
                        ";
                // line 63
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'form_group'), "fields", array(), "any", false));
                foreach ($context['_seq'] as $context['_key'] => $context['field_name']) {
                    // line 64
                    echo "                            ";
                    if ($this->getAttribute((($this->getAttribute(((array_key_exists("admin", $context)) ? (twig_default_filter($this->getContext($context, 'admin'))) : ("")), "formfielddescriptions", array(), "any", true)) ? (twig_default_filter($this->getAttribute($this->getContext($context, 'admin'), "formfielddescriptions", array(), "any", false))) : ("")), $this->getContext($context, 'field_name'), array(), "array", true)) {
                        // line 65
                        echo "                                ";
                        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, 'form'), $this->getContext($context, 'field_name'), array(), "array", false));
                        echo "
                            ";
                    }
                    // line 67
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 68
                echo "                    </div>
                </fieldset>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 71
            echo "
            ";
            // line 72
            echo $this->env->getExtension('form')->renderRest($this->getContext($context, 'form'));
            echo "

            <div class=\"actions\">
                ";
            // line 75
            if ($this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "request", array(), "any", false), "isxmlhttprequest", array(), "any", false)) {
                // line 76
                echo "                    ";
                if ($this->getAttribute($this->getContext($context, 'admin'), "id", array($this->getContext($context, 'object'), ), "method", false)) {
                    // line 77
                    echo "                        <input type=\"submit\" class=\"btn primary\" name=\"btn_update\" value=\"";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("btn_update", array(), "SonataAdminBundle");
                    echo "\"/>
                    ";
                } else {
                    // line 79
                    echo "                        <input type=\"submit\" class=\"btn\" name=\"btn_create\" value=\"";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("btn_create", array(), "SonataAdminBundle");
                    echo "\"/>
                    ";
                }
                // line 81
                echo "                ";
            } else {
                // line 82
                echo "                    ";
                if ($this->getAttribute($this->getContext($context, 'admin'), "id", array($this->getContext($context, 'object'), ), "method", false)) {
                    // line 83
                    echo "                        <input type=\"submit\" class=\"btn primary\" name=\"btn_update_and_edit\" value=\"";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("btn_update_and_edit_again", array(), "SonataAdminBundle");
                    echo "\"/>
                        <input type=\"submit\" class=\"btn\" name=\"btn_update_and_list\" value=\"";
                    // line 84
                    echo $this->env->getExtension('translator')->getTranslator()->trans("btn_update_and_return_to_list", array(), "SonataAdminBundle");
                    echo "\"/>

                        ";
                    // line 86
                    if (($this->getAttribute($this->getContext($context, 'admin'), "hasroute", array("delete", ), "method", false) && $this->getAttribute($this->getContext($context, 'admin'), "isGranted", array("DELETE", ), "method", false))) {
                        // line 87
                        echo "                            ";
                        echo $this->env->getExtension('translator')->getTranslator()->trans("delete_or", array(), "SonataAdminBundle");
                        // line 88
                        echo "                            <a class=\"btn danger\" href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateObjectUrl", array("delete", $this->getContext($context, 'object'), ), "method", false), "html");
                        echo "\">";
                        echo $this->env->getExtension('translator')->getTranslator()->trans("link_delete", array(), "SonataAdminBundle");
                        echo "</a>
                        ";
                    }
                    // line 90
                    echo "                    ";
                } else {
                    // line 91
                    echo "                        <input class=\"btn primary\" type=\"submit\" name=\"btn_create_and_edit\" value=\"";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("btn_create_and_edit_again", array(), "SonataAdminBundle");
                    echo "\"/>
                        <input class=\"btn\" type=\"submit\" name=\"btn_create_and_create\" value=\"";
                    // line 92
                    echo $this->env->getExtension('translator')->getTranslator()->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle");
                    echo "\"/>
                    ";
                }
                // line 94
                echo "                ";
            }
            // line 95
            echo "            </div>
        </form>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
