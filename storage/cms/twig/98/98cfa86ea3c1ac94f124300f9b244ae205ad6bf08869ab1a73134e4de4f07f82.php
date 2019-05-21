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

/* C:\wamp64\www\events/themes/hambern-hambern-blank-bootstrap-4/pages/signin.htm */
class __TwigTemplate_0a684cc282b73a45f8ac61a73acb42d5459b768b4d537cc1daedfe86565e940d extends \Twig\Template
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
        echo "<div class=\"conatiner\">
    <div class=\"row\">
    <h1>signup</h1>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\events/themes/hambern-hambern-blank-bootstrap-4/pages/signin.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"conatiner\">
    <div class=\"row\">
    <h1>signup</h1>
    </div>
</div>", "C:\\wamp64\\www\\events/themes/hambern-hambern-blank-bootstrap-4/pages/signin.htm", "");
    }
}
