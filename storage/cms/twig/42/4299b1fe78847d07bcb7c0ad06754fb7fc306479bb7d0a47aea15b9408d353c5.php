<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\wamp64\www\events/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm */
class __TwigTemplate_36ecc9ad4ef191079fd1fd766b87d6af7ee13ee724d7dc038fbd6e38c51bd566 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<section id=\"navbar\" class=\"m-b-3\">
\t<nav class=\"navbar navbar-dark bg-inverse \">
\t\t<div class=\"container\">
    \t\t\t<a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"><img src=\"";
        echo "http://localhost/events/themes/hambern-hambern-blank-bootstrap-4/assets/images//logo.png";
        echo " \" alt=\"eventnas\"></a>
    \t\t\t
    \t\t\t<ul class=\"nav navbar-nav pull-xs-left\">
        \t\t\t<li class=\"nav-item";
        // line 7
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "baseFileName", [], "any", false, false, false, 7) == "browse-events")) ? (" active") : (""));
        echo "\">
    \t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("browse-events");
        echo "\"> Browse  </a>
    \t\t\t\t</li>
    \t\t\t\t<!-- <li class=\"nav-item";
        // line 10
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 10), "baseFileName", [], "any", false, false, false, 10) == "plan-event")) ? (" active") : (""));
        echo "\">
    \t\t\t\t    <a class=\"nav-link\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("plan-event");
        echo "\">Organize </a>
    \t\t\t\t</li> -->
    \t\t\t\t<!-- <li class=\"nav-item";
        // line 13
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 13), "baseFileName", [], "any", false, false, false, 13) == "contact")) ? (" active") : (""));
        echo "\">
    \t\t\t\t    <a class=\"nav-link\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\"> Contact us </a>
    \t\t\t\t</li> -->
    \t\t\t</ul>
\t\t\t<ul class=\"nav navbar-nav pull-xs-right\">
\t\t\t\t
\t\t\t\t<li class=\"nav-item";
        // line 19
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 19), "baseFileName", [], "any", false, false, false, 19) == "signin")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("signin");
        echo "\"><i class=\"fa fa-user mr-5\"></i> Sign In </a>
\t\t\t\t</li>
\t\t\t\t
\t\t\t</ul>
\t\t</div>
\t</nav>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\events/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 20,  78 => 19,  70 => 14,  66 => 13,  61 => 11,  57 => 10,  52 => 8,  48 => 7,  40 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"navbar\" class=\"m-b-3\">
\t<nav class=\"navbar navbar-dark bg-inverse \">
\t\t<div class=\"container\">
    \t\t\t<a class=\"navbar-brand\" href=\"{{ 'home'|page }}\"><img src=\"{{'http://localhost/events/themes/hambern-hambern-blank-bootstrap-4/assets/images//logo.png'}} \" alt=\"eventnas\"></a>
    \t\t\t
    \t\t\t<ul class=\"nav navbar-nav pull-xs-left\">
        \t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'browse-events' ? ' active' }}\">
    \t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'browse-events'|page }}\"> Browse  </a>
    \t\t\t\t</li>
    \t\t\t\t<!-- <li class=\"nav-item{{ this.page.baseFileName == 'plan-event' ? ' active' }}\">
    \t\t\t\t    <a class=\"nav-link\" href=\"{{ 'plan-event'|page }}\">Organize </a>
    \t\t\t\t</li> -->
    \t\t\t\t<!-- <li class=\"nav-item{{ this.page.baseFileName == 'contact' ? ' active' }}\">
    \t\t\t\t    <a class=\"nav-link\" href=\"{{ 'contact'|page }}\"> Contact us </a>
    \t\t\t\t</li> -->
    \t\t\t</ul>
\t\t\t<ul class=\"nav navbar-nav pull-xs-right\">
\t\t\t\t
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'signin' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'signin'|page }}\"><i class=\"fa fa-user mr-5\"></i> Sign In </a>
\t\t\t\t</li>
\t\t\t\t
\t\t\t</ul>
\t\t</div>
\t</nav>
</section>", "C:\\wamp64\\www\\events/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm", "");
    }
}
