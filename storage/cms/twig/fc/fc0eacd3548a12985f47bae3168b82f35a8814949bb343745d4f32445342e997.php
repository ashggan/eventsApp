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

/* C:\wamp64\www\events/plugins/jorgeandrade/events/components/partials/event.htm */
class __TwigTemplate_6cfa26d95279c0610ac876abf7794dc10d0770b7e6e792b7e574086810bdbbf4 extends \Twig\Template
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
        $context["locale"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "locale", [], "any", false, false, false, 1);
        // line 2
        echo "
<div class=\"event-item\">
    <!--<p class=\"date-label\">-->
        <!--<span class=\"month\">";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "start_at", [], "any", false, false, false, 5), "M"), "html", null, true);
        echo "</span>-->
        <!--<span class=\"date-number\">";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "start_at", [], "any", false, false, false, 6), "d"), "html", null, true);
        echo "</span>-->
    <!--</p>-->
    <div class=\"details\">
        <h2 class=\"title\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "</h2>
        <p class=\"time\"><i class=\"fa fa-clock-o\"></i> ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "start_at", [], "any", false, false, false, 10), "M"), "html", null, true);
        echo "</p>
        ";
        // line 11
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "address", [], "any", false, false, false, 11))) {
            // line 12
            echo "        <p class=\"location\"><i class=\"fa fa-map-marker\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "address", [], "any", false, false, false, 12), "html", null, true);
            echo "</p>
        ";
        }
        // line 14
        echo "    </div><!--//details-->
</div><!--event-item-->
";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\events/plugins/jorgeandrade/events/components/partials/event.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 14,  62 => 12,  60 => 11,  56 => 10,  52 => 9,  46 => 6,  42 => 5,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set locale = __SELF__.locale %}

<div class=\"event-item\">
    <!--<p class=\"date-label\">-->
        <!--<span class=\"month\">{{event.start_at | date('M') }}</span>-->
        <!--<span class=\"date-number\">{{event.start_at | date('d') }}</span>-->
    <!--</p>-->
    <div class=\"details\">
        <h2 class=\"title\">{{event.name}}</h2>
        <p class=\"time\"><i class=\"fa fa-clock-o\"></i> {{event.start_at | date('M')}}</p>
        {% if event.address is not empty %}
        <p class=\"location\"><i class=\"fa fa-map-marker\"></i> {{event.address}}</p>
        {% endif %}
    </div><!--//details-->
</div><!--event-item-->
", "C:\\wamp64\\www\\events/plugins/jorgeandrade/events/components/partials/event.htm", "");
    }
}
