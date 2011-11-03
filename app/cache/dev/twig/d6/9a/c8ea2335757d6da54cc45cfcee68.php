<?php

/* SocialSiteBundle:Default:index.html.twig */
class __TwigTemplate_d69ac8ea2335757d6da54cc45cfcee68 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    public function getParent(array $context)
    {
        $parent = "SocialSiteBundle::layout.html.twig";
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
      ";
        // line 6
        echo $this->env->getExtension('facebook')->renderInitialize(array("xfbml" => true, "status" => true, "fbAsyncInit" => "onFbInit();"));
        echo "

        <script>
          function goLogIn(){
              window.location = \"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_security_check"), "html");
        echo "\";
          }

          function onFbInit() {
             if (typeof(FB) != 'undefined' && FB != null ) {
                  FB.Event.subscribe('auth.login', function(response) {
                       setTimeout(goLogIn,500);
                  });

                  FB.Event.subscribe('auth.logout', function(response) {
                       window.location = \"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_security_logout"), "html");
        echo "\";
                  });
             }
          }
        </script>

    <h1>Welcome!</h1>

    <p>Click to login.</p>

      ";
        // line 30
        echo $this->env->getExtension('facebook')->renderLoginButton(array("autologoutlink" => true));
        echo "

    <p>Click to login with Twitter</p>

      <span id=\"twitter_connect\"></span>
      ";
        // line 36
        echo "      ";
        echo $this->env->getExtension('twitter_anywhere')->queue("T(\"#twitter_connect\").connectButton()");
        echo "

";
    }

    public function getTemplateName()
    {
        return "SocialSiteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
