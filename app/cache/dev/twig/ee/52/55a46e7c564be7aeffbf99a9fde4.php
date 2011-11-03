<?php

/* SonataAdminBundle:CRUD:base_list.html.twig */
class __TwigTemplate_ee5255a46e7c564be7aeffbf99a9fde4 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'list_table' => array($this, 'block_list_table'),
            'list_filters' => array($this, 'block_list_filters'),
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
        if (($this->getAttribute($this->getContext($context, 'admin'), "hasRoute", array("create", ), "method", false) && $this->getAttribute($this->getContext($context, 'admin'), "isGranted", array("CREATE", ), "method", false))) {
            // line 18
            echo "                <li class=\"btn\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateUrl", array("create", ), "method", false), "html");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_create", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 20
        echo "        </ul>
    </div>
";
    }

    // line 24
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute($this->getContext($context, 'admin'), "sidemenu", array($this->getContext($context, 'action'), ), "method", false), array(), "list");
    }

    // line 31
    public function block_table_header($context, array $blocks = array())
    {
        // line 32
        echo "                    <thead>
                        <tr class=\"sonata-ba-list-field-header\">
                            ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "list", array(), "any", false), "elements", array(), "any", false));
        foreach ($context['_seq'] as $context['_key'] => $context['field_description']) {
            // line 35
            echo "                                ";
            if ((($this->getAttribute($this->getContext($context, 'field_description'), "getOption", array("code", ), "method", false) == "_batch") && (twig_length_filter($this->env, $this->getContext($context, 'batchactions')) > 0))) {
                // line 36
                echo "                                    <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                      <input type=\"checkbox\" id=\"list_batch_checkbox\" />
                                    </th>
                                ";
            } else {
                // line 40
                echo "                                    ";
                $context['sortable'] = false;
                // line 41
                echo "                                    ";
                if (($this->getAttribute((($this->getAttribute(((array_key_exists("field_description", $context)) ? (twig_default_filter($this->getContext($context, 'field_description'))) : ("")), "options", array(), "any", true)) ? (twig_default_filter($this->getAttribute($this->getContext($context, 'field_description'), "options", array(), "any", false))) : ("")), "sortable", array(), "any", true) && $this->getAttribute($this->getAttribute($this->getContext($context, 'field_description'), "options", array(), "any", false), "sortable", array(), "any", false))) {
                    // line 42
                    echo "                                        ";
                    $context['sortable'] = true;
                    // line 43
                    echo "                                        ";
                    $context['current'] = ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), "values", array(), "any", false), "_sort_by", array(), "any", false) == $this->getAttribute($this->getAttribute($this->getContext($context, 'field_description'), "options", array(), "any", false), "sortable", array(), "any", false));
                    // line 44
                    echo "                                        ";
                    $context['sort_parameters'] = $this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "modelmanager", array(), "any", false), "sortparameters", array($this->getContext($context, 'field_description'), $this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), ), "method", false);
                    // line 45
                    echo "                                        ";
                    $context['sort_active_class'] = (($this->getContext($context, 'current')) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 46
                    echo "                                        ";
                    $context['sort_by'] = (($this->getContext($context, 'current')) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), "values", array(), "any", false), "_sort_order", array(), "any", false)) : ($this->getAttribute($this->getAttribute($this->getContext($context, 'field_description'), "options", array(), "any", false), "_sort_order", array(), "any", false)));
                    // line 47
                    echo "                                    ";
                }
                // line 48
                echo "
                                    ";
                // line 49
                ob_start();
                // line 50
                echo "                                        <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'field_description'), "type", array(), "any", false), "html");
                echo " ";
                if ($this->getContext($context, 'sortable')) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getContext($context, 'sort_by')), "html");
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getContext($context, 'sort_active_class'), "html");
                }
                echo "\">
                                            ";
                // line 51
                if ($this->getContext($context, 'sortable')) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateUrl", array("list", $this->getContext($context, 'sort_parameters'), ), "method", false), "html");
                    echo "\">";
                }
                // line 52
                echo "
                                            ";
                // line 53
                if ($this->getAttribute((($this->getAttribute(((array_key_exists("field_description", $context)) ? (twig_default_filter($this->getContext($context, 'field_description'))) : ("")), "options", array(), "any", true)) ? (twig_default_filter($this->getAttribute($this->getContext($context, 'field_description'), "options", array(), "any", false))) : ("")), "name", array(), "any", true)) {
                    // line 54
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getContext($context, 'field_description'), "options", array(), "any", false), "name", array(), "any", false), array(), $this->getAttribute($this->getContext($context, 'admin'), "translationdomain", array(), "any", false)), "html");
                    echo "
                                            ";
                } else {
                    // line 56
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, 'field_description'), "name", array(), "any", false), array(), $this->getAttribute($this->getContext($context, 'admin'), "translationdomain", array(), "any", false)), "html");
                    echo "
                                            ";
                }
                // line 58
                echo "
                                            ";
                // line 59
                if ($this->getContext($context, 'sortable')) {
                    echo "</a>";
                }
                // line 60
                echo "                                        </th>
                                    ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 62
                echo "                                ";
            }
            // line 63
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 64
        echo "                        </tr>
                    </thead>
                ";
    }

    // line 68
    public function block_table_body($context, array $blocks = array())
    {
        // line 69
        echo "                    <tbody>
                        ";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), "results", array(), "any", false));
        foreach ($context['_seq'] as $context['_key'] => $context['object']) {
            // line 71
            echo "                            <tr>
                                ";
            // line 72
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "list", array(), "any", false), "elements", array(), "any", false));
            foreach ($context['_seq'] as $context['_key'] => $context['field_description']) {
                // line 73
                echo "                                    ";
                echo $this->env->getExtension('sonata_admin')->renderListElement($this->getContext($context, 'object'), $this->getContext($context, 'field_description'));
                echo "
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 75
            echo "                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 77
        echo "                    </tbody>
                ";
    }

    // line 80
    public function block_table_footer($context, array $blocks = array())
    {
        // line 81
        echo "                    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), "pager", array(), "any", false), "haveToPaginate", array(), "method", false)) {
            // line 82
            echo "                        <tr>
                            <td colspan=\"";
            // line 83
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "list", array(), "any", false), "elements", array(), "any", false)), "html");
            echo "\" class=\"pager\">

                                <div class=\"pagination\">
                                  <ul>

                                      ";
            // line 88
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), "pager", array(), "any", false), "page", array(), "any", false) != $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), "pager", array(), "any", false), "previouspage", array(), "any", false))) {
                // line 89
                echo "                                          <li class=\"prev\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateUrl", array("list", $this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "modelmanager", array(), "any", false), "paginationparameters", array($this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), "pager", array(), "any", false), "previouspage", array(), "any", false), ), "method", false), ), "method", false), "html");
                echo "\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("link_previous_pager", array(), "SonataAdminBundle");
                echo "</a></li>
                                      ";
            }
            // line 91
            echo "
                                      ";
            // line 93
            echo "                                      ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), "pager", array(), "any", false), "getLinks", array(5, ), "method", false));
            foreach ($context['_seq'] as $context['_key'] => $context['page']) {
                // line 94
                echo "                                          ";
                if (($this->getContext($context, 'page') == $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), "pager", array(), "any", false), "page", array(), "any", false))) {
                    // line 95
                    echo "                                                <li class=\"active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateUrl", array("list", $this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "modelmanager", array(), "any", false), "paginationparameters", array($this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), $this->getContext($context, 'page'), ), "method", false), ), "method", false), "html");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, 'page'), "html");
                    echo "</a></li>
                                          ";
                } else {
                    // line 97
                    echo "                                              <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateUrl", array("list", $this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "modelmanager", array(), "any", false), "paginationparameters", array($this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), $this->getContext($context, 'page'), ), "method", false), ), "method", false), "html");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, 'page'), "html");
                    echo "</a></li>
                                          ";
                }
                // line 99
                echo "                                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 100
            echo "
                                      ";
            // line 101
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), "pager", array(), "any", false), "page", array(), "any", false) != $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), "pager", array(), "any", false), "nextpage", array(), "any", false))) {
                // line 102
                echo "                                          <li class=\"next\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateUrl", array("list", $this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "modelmanager", array(), "any", false), "paginationparameters", array($this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), "pager", array(), "any", false), "nextpage", array(), "any", false), ), "method", false), ), "method", false), "html");
                echo "\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("link_next_pager", array(), "SonataAdminBundle");
                echo "</a></li>
                                      ";
            }
            // line 104
            echo "                                  </ul>
                                </div>
                            </td>
                        </tr>
                    ";
        }
        // line 109
        echo "                ";
    }

    // line 26
    public function block_list_table($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        $context['batchactions'] = $this->getAttribute($this->getContext($context, 'admin'), "batchactions", array(), "any", false);
        // line 28
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), "results", array(), "any", false)) > 0)) {
            // line 29
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateUrl", array("batch", $this->getAttribute($this->getContext($context, 'admin'), "filterParameters", array(), "any", false), ), "method", false), "html");
            echo "\" method=\"POST\" >
            <table class=\"zebra-striped\">
                ";
            // line 31
            $this->displayBlock('table_header', $context, $blocks);
            // line 67
            echo "
                ";
            // line 68
            $this->displayBlock('table_body', $context, $blocks);
            // line 79
            echo "
                ";
            // line 80
            $this->displayBlock('table_footer', $context, $blocks);
            // line 110
            echo "            </table>

            ";
            // line 112
            if ((twig_length_filter($this->env, $this->getContext($context, 'batchactions')) > 0)) {
                // line 113
                echo "                <script type=\"text/javascript\">
                    jQuery(document).ready(function(\$){
                       \$('#list_batch_checkbox').click(function(){
                           \$(this).closest('table').find(\"td input[type='checkbox']\").attr('checked', \$(this).is(':checked'));
                       });
                       \$('.delete_link').click(function(e){
                          if (!confirm('";
                // line 119
                echo $this->env->getExtension('translator')->getTranslator()->trans("confirm_msg", array(), "SonataAdminBundle");
                echo "')) e.preventDefault();
                       });
                    });
                </script>

                <div class=\"actions sonata-ba-list-actions\">
                    <select name=\"action\">
                        ";
                // line 126
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'batchactions'));
                foreach ($context['_seq'] as $context['action'] => $context['options']) {
                    // line 127
                    echo "                            <option value=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, 'action'), "html");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'options'), "label", array(), "any", false), "html");
                    echo "</option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 129
                echo "                    </select>

                    <label>
                        <input type=\"checkbox\" name=\"all_elements\"/>
                        ";
                // line 133
                echo $this->env->getExtension('translator')->getTranslator()->trans("all_elements", array(), "SonataAdminBundle");
                // line 134
                echo "                    </label>

                    <input type=\"submit\" class=\"btn primary\" value=\"";
                // line 136
                echo $this->env->getExtension('translator')->getTranslator()->trans("btn_batch", array(), "SonataAdminBundle");
                echo "\" />
                </div>
            ";
            }
            // line 139
            echo "        </form>
    ";
        } else {
            // line 141
            echo "        <p class=\"notice\">
          ";
            // line 142
            echo $this->env->getExtension('translator')->getTranslator()->trans("no_result", array(), "SonataAdminBundle");
            // line 143
            echo "        </p>
    ";
        }
    }

    // line 147
    public function block_list_filters($context, array $blocks = array())
    {
        // line 148
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), "filters", array(), "any", false)) {
            // line 149
            echo "        <form class=\"sonata-filter-form\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateUrl", array("list", ), "method", false), "html");
            echo "\" method=\"GET\">
            <fieldset class=\"filter_legend\">
                <legend class=\"filter_legend\">";
            // line 151
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_filters", array(), "SonataAdminBundle");
            echo "</legend>

                <div class=\"filter_container\">
                    <table>
                        <tr>
                            <td>
                                <table>
                                    ";
            // line 158
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, 'admin'), "datagrid", array(), "any", false), "filters", array(), "any", false));
            foreach ($context['_seq'] as $context['_key'] => $context['filter']) {
                // line 159
                echo "                                        <tr id=\"filter_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'filter'), "name", array(), "any", false), "html");
                echo "_row\">
                                            <td class=\"filter-title\">";
                // line 160
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "trans", array($this->getAttribute($this->getContext($context, 'filter'), "name", array(), "any", false), ), "method", false), "html");
                echo "</td>
                                            <td class=\"filter-type\">";
                // line 161
                echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, 'form'), "getChild", array($this->getAttribute($this->getContext($context, 'filter'), "name", array(), "any", false), ), "method", false), "getChild", array("type", ), "method", false));
                echo "</td>
                                            <td class=\"filter-value\">";
                // line 162
                echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, 'form'), "getChild", array($this->getAttribute($this->getContext($context, 'filter'), "name", array(), "any", false), ), "method", false), "getChild", array("value", ), "method", false));
                echo "</td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 165
            echo "                                </table>
                            </td>
                            ";
            // line 168
            echo "                                ";
            // line 169
            echo "                                ";
            // line 170
            echo "                                    ";
            // line 171
            echo "                                        ";
            // line 172
            echo "                                    ";
            // line 173
            echo "                                ";
            // line 174
            echo "                            ";
            // line 175
            echo "                        </tr>
                    </table>
                    ";
            // line 177
            echo $this->env->getExtension('form')->renderRest($this->getContext($context, 'form'));
            echo "

                    <input type=\"submit\" class=\"btn primary\" value=\"";
            // line 179
            echo $this->env->getExtension('translator')->getTranslator()->trans("btn_filter", array(), "SonataAdminBundle");
            echo "\" />

                    <a class=\"btn\" href=\"";
            // line 181
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateUrl", array("list", ), "method", false), "html");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_reset_filter", array(), "SonataAdminBundle");
            echo "</a>

                </div>
            </fieldset>

        </form>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
