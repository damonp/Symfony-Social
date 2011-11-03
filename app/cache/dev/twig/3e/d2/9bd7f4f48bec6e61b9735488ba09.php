<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_3ed29bd7f4f48bec6e61b9735488ba09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'user_block' => array($this, 'block_user_block'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'actions' => array($this, 'block_actions'),
            'notice' => array($this, 'block_notice'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 11
        $context['_preview'] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context['_form'] = $this->renderBlock("form", $context, $blocks);
        // line 13
        $context['_show'] = $this->renderBlock("show", $context, $blocks);
        // line 14
        $context['_list_table'] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context['_list_filters'] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context['_side_menu'] = $this->renderBlock("side_menu", $context, $blocks);
        // line 17
        $context['_content'] = $this->renderBlock("content", $context, $blocks);
        // line 18
        $context['_title'] = $this->renderBlock("title", $context, $blocks);
        // line 19
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

        ";
        // line 24
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 44
        echo "
        ";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "
        <title>
            ";
        // line 64
        echo $this->env->getExtension('translator')->getTranslator()->trans("Admin", array(), "SonataAdminBundle");
        // line 65
        echo "
            ";
        // line 66
        if ((!twig_test_empty($this->getContext($context, '_title')))) {
            // line 67
            echo "                ";
            echo $this->getContext($context, '_title');
            echo "
            ";
        } else {
            // line 69
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 70
                echo "                    -
                    ";
                // line 71
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'admin'), "breadcrumbs", array($this->getContext($context, 'action'), ), "method", false));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context['label'] => $context['uri']) {
                    // line 72
                    echo "                        ";
                    if ((!$this->getAttribute($this->getContext($context, 'loop'), "first", array(), "any", false))) {
                        // line 73
                        echo "                            &gt;
                        ";
                    }
                    // line 75
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getContext($context, 'label'), "html");
                    echo "
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['label'], $context['uri'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 77
                echo "                ";
            }
            // line 78
            echo "            ";
        }
        // line 79
        echo "        </title>
    </head>
    <body>
        ";
        // line 83
        echo "
        <div class=\"topbar\" data-dropdown=\"dropdown\" >
            <div class=\"topbar\">
                <div class=\"topbar-inner\">
                    <div class=\"container-fluid\">
                        <a href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard"), "html");
        echo "\" class=\"brand\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Admin", array(), "SonataAdminBundle");
        echo "</a>
                        <ul class=\"nav\">
                            ";
        // line 90
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'admin_pool'), "dashboardgroups", array(), "any", false));
        foreach ($context['_seq'] as $context['_key'] => $context['group']) {
            // line 91
            echo "                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\">";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, 'group'), "label", array(), "any", false), array(), "SonataAdminBundle"), "html");
            echo "</a>
                                    <ul class=\"dropdown-menu\">
                                        ";
            // line 94
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'group'), "items", array(), "any", false));
            foreach ($context['_seq'] as $context['_key'] => $context['admin']) {
                // line 95
                echo "                                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'admin'), "generateUrl", array("list", ), "method", false), "html");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, 'admin'), "label", array(), "any", false), array(), $this->getAttribute($this->getContext($context, 'admin'), "translationdomain", array(), "any", false)), "html");
                echo "</a></li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 97
            echo "                                    </ul>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 100
        echo "                        </ul>
                        <p class=\"pull-right\">";
        // line 101
        $this->displayBlock('user_block', $context, $blocks);
        echo "</p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"container-fluid\">
            <div style=\"\">
                <ul class=\"breadcrumb\">
                    ";
        // line 110
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 124
        echo "                </ul>

            </div>

            <div style=\"float: right\">
                ";
        // line 129
        $this->displayBlock('actions', $context, $blocks);
        // line 130
        echo "            </div>

            ";
        // line 132
        if ((!twig_test_empty($this->getContext($context, '_side_menu')))) {
            // line 133
            echo "                <div class=\"sidebar\">
                    <div class=\"well sonata-ba-side-menu\">";
            // line 134
            echo $this->getContext($context, '_side_menu');
            echo "</div>
                </div>
            ";
        }
        // line 137
        echo "            <div class=\"content\">

                ";
        // line 139
        $this->displayBlock('notice', $context, $blocks);
        // line 151
        echo "
                <div class=\"page-header\">
                    <h1>
                        ";
        // line 154
        if ((!twig_test_empty($this->getContext($context, '_title')))) {
            // line 155
            echo "                            ";
            echo $this->getContext($context, '_title');
            echo "
                        ";
        } else {
            // line 157
            echo "                            ";
            if (array_key_exists("action", $context)) {
                // line 158
                echo "                                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'admin'), "breadcrumbs", array($this->getContext($context, 'action'), ), "method", false));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context['label'] => $context['uri']) {
                    // line 159
                    echo "                                    ";
                    if ($this->getAttribute($this->getContext($context, 'loop'), "last", array(), "any", false)) {
                        // line 160
                        echo "                                        ";
                        echo twig_escape_filter($this->env, $this->getContext($context, 'label'), "html");
                        echo "
                                    ";
                    }
                    // line 162
                    echo "                                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['label'], $context['uri'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 163
                echo "                            ";
            }
            // line 164
            echo "                        ";
        }
        // line 165
        echo "                    </h1>
                </div>

                ";
        // line 168
        if ((!twig_test_empty($this->getContext($context, '_preview')))) {
            // line 169
            echo "                    <div class=\"sonata-ba-preview\">";
            echo $this->getContext($context, '_preview');
            echo "</div>
                ";
        }
        // line 171
        echo "

                ";
        // line 173
        if ((!twig_test_empty($this->getContext($context, '_content')))) {
            // line 174
            echo "                    <div class=\"sonata-ba-content\">";
            echo $this->getContext($context, '_content');
            echo "</div>
                ";
        }
        // line 176
        echo "
                ";
        // line 177
        if ((!twig_test_empty($this->getContext($context, '_show')))) {
            // line 178
            echo "                    <div class=\"sonata-ba-show\">";
            echo $this->getContext($context, '_show');
            echo "</div>
                ";
        }
        // line 180
        echo "
                ";
        // line 181
        if ((!twig_test_empty($this->getContext($context, '_form')))) {
            // line 182
            echo "                    <div class=\"sonata-ba-form\">";
            echo $this->getContext($context, '_form');
            echo "</div>
                ";
        }
        // line 184
        echo "
                ";
        // line 185
        if (((!twig_test_empty($this->getContext($context, '_list_table'))) || (!twig_test_empty($this->getContext($context, '_list_filters'))))) {
            // line 186
            echo "                    <div class=\"sonata-ba-filter\">
                        ";
            // line 187
            echo $this->getContext($context, '_list_filters');
            echo "
                    </div>
                    <div class=\"sonata-ba-list\">
                        ";
            // line 190
            echo $this->getContext($context, '_list_table');
            echo "
                    </div>
                ";
        }
        // line 193
        echo "
                ";
        // line 194
        $this->displayBlock('footer', $context, $blocks);
        // line 195
        echo "            </div>
        </div>
    </body>
</html>

";
    }

    // line 24
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 25
        echo "            <!-- jQuery code -->
            <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/themes/flick/jquery-ui-1.8.6.custom.css"), "html");
        echo "\" type=\"text/css\" media=\"all\" />

            <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/bootstrap.min.css"), "html");
        echo "\" type=\"text/css\" media=\"all\" >

            <style type=\"text/css\">
              body {
                  padding-top: 60px;
              }

              fieldset legend {
                  padding-left: 0px;
              }
            </style>

            <!-- base application asset -->
            <link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/layout.css"), "html");
        echo "\" type=\"text/css\" media=\"all\">
            <link rel=\"stylesheet\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/colors.css"), "html");
        echo "\" type=\"text/css\" media=\"all\">
        ";
    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        // line 46
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-1.4.4.js"), "html");
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-1.8.6.custom.js"), "html");
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-i18n.js"), "html");
        echo "\" type=\"text/javascript\"></script>

            <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/js/bootstrap-tabs.js"), "html");
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/js/bootstrap-alerts.js"), "html");
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/js/bootstrap-modal.js"), "html");
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/js/bootstrap-twipsy.js"), "html");
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/js/bootstrap-popover.js"), "html");
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/js/bootstrap-scrollspy.js"), "html");
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/js/bootstrap-dropdown.js"), "html");
        echo "\" type=\"text/javascript\"></script>

            <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/qtip/jquery.qtip-1.0.0-rc3.min.js"), "html");
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/jquery/jquery.form.js"), "html");
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/base.js"), "html");
        echo "\" type=\"text/javascript\"></script>
        ";
    }

    // line 101
    public function block_user_block($context, array $blocks = array())
    {
        echo "<a href=\"#\">Login/Logout</a></li>";
    }

    // line 110
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 111
        echo "                        ";
        if (array_key_exists("action", $context)) {
            // line 112
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'admin'), "breadcrumbs", array($this->getContext($context, 'action'), ), "method", false));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context['label'] => $context['uri']) {
                // line 113
                echo "                                <li>
                                    ";
                // line 114
                if ((!$this->getAttribute($this->getContext($context, 'loop'), "last", array(), "any", false))) {
                    // line 115
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, 'uri'), "html");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, 'label'), "html");
                    echo "</a>
                                        <span class=\"divider\">/</span>
                                    ";
                } else {
                    // line 118
                    echo "                                        <li class=\"active\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, 'label'), "html");
                    echo "</li>
                                    ";
                }
                // line 120
                echo "                                </li>
                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['uri'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 122
            echo "                        ";
        }
        // line 123
        echo "                    ";
    }

    // line 129
    public function block_actions($context, array $blocks = array())
    {
    }

    // line 139
    public function block_notice($context, array $blocks = array())
    {
        // line 140
        echo "
                    ";
        // line 141
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "success", 1 => "error", 2 => "info", 3 => "warning"));
        foreach ($context['_seq'] as $context['_key'] => $context['notice_level']) {
            // line 142
            echo "                        ";
            $context['session_var'] = ("sonata_flash_" . $this->getContext($context, 'notice_level'));
            // line 143
            echo "                        ";
            if ($this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "session", array(), "any", false), "hasFlash", array($this->getContext($context, 'session_var'), ), "method", false)) {
                // line 144
                echo "                            <div class=\"alert-message ";
                echo twig_escape_filter($this->env, $this->getContext($context, 'notice_level'), "html");
                echo "\">
                                ";
                // line 145
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "session", array(), "any", false), "flash", array($this->getContext($context, 'session_var'), ), "method", false), array(), "SonataAdminBundle"), "html");
                echo "
                                ";
                // line 147
                echo "                            </div>
                        ";
            }
            // line 149
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice_level'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 150
        echo "                ";
    }

    // line 194
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
