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

/* C:\wamp64\www\events/themes/hambern-hambern-blank-bootstrap-4/pages/plan-event.htm */
class __TwigTemplate_0475f0aae839d273938521336db84b21c4ab87a7b93c5c8d43b0dc462f7ddd83 extends \Twig\Template
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
        echo "<h1>Organize event</h1>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\events/themes/hambern-hambern-blank-bootstrap-4/pages/plan-event.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Organize event</h1>", "C:\\wamp64\\www\\events/themes/hambern-hambern-blank-bootstrap-4/pages/plan-event.htm", "");
    }
}
