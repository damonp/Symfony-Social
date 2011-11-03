<?php

/* SonataAdminBundle:Core:dashboard.html.twig */
class __TwigTemplate_356d879b9892948a00d505ce1c1819a7 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
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
    public function block_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("title_dashboard", array(), "SonataAdminBundle");
    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("title_dashboard", array(), "SonataAdminBundle");
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "
    <div class=\"span7\">
        ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'groups'));
        foreach ($context['_seq'] as $context['_key'] => $context['group']) {
            // line 20
            echo "            <table class=\"zebra-striped sonata-ba-list\">
                <thead>
                    <tr>
                        <th colspan=\"3\">";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, 'group'), "label", array(), "any", false), array(), "SonataAdminBundle"), "html");
            echo "</th>
                    </tr>
                </thead>

                <tbody>
                    ";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'group'), "items", array(), "any", false));
            foreach ($context['_seq'] as $context['_key'] => $context['admin']) {
                // line 29
                echo "                        <tr>
                            <td class=\"sonata-ba-list-label\">";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, 'admin'), "label", array(), "any", false), array(), $this->getAttribute($this->getContext($context, 'admin'), "translationdomain", array(), "any", false)), "html");
                echo "</td>
                            <td>
                                ";
                // line 32
                if (($this->getAttribute($this->getContext($context, 'admin'), "hasroute", array("create", ), "method", false) && $this->getAttribute($this->getContext($context, 'admin'), "isGranted", array("CREATE", ), "method", false))) {
                    // line 33
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateUrl", array("create", ), "method", false), "html");
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/add.png"), "html");
                    echo "\" /> ";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                    echo "</a>
                                ";
                }
                // line 35
                echo "                            </td>
                            <td>
                                ";
                // line 37
                if (($this->getAttribute($this->getContext($context, 'admin'), "hasroute", array("list", ), "method", false) && $this->getAttribute($this->getContext($context, 'admin'), "isGranted", array("LIST", ), "method", false))) {
                    // line 38
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateUrl", array("list", ), "method", false), "html");
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/application_view_list.png"), "html");
                    echo "\" />";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("link_list", array(), "SonataAdminBundle");
                    echo "</a>
                                ";
                }
                // line 40
                echo "                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 43
            echo "                </tbody>
            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 46
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
