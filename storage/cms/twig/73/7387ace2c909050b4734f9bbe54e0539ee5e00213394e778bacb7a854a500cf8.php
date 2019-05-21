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

/* C:\wamp64\www\events/themes/hambern-hambern-blank-bootstrap-4/pages/browse-events.htm */
class __TwigTemplate_83780bfb9106b4d76dd6d3a255f762c525aec214dbaa2a7320ec3840d4837a7e extends \Twig\Template
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
        echo "<div class=\"row\">
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 3
            echo "    ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['event'] = $context["event"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@event.htm"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 5
            echo "    <div class=\"event-item\">
        <div class=\"details\">
            <h2 class=\"title\">";
            // line 7
            echo twig_escape_filter($this->env, ($context["noEventMessage"] ?? null), "html", null, true);
            echo "</h2>
        </div><!--//details-->
    </div><!--event-item-->
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
";
        // line 12
        echo twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "render", [], "any", false, false, false, 12);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\events/themes/hambern-hambern-blank-bootstrap-4/pages/browse-events.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 12,  66 => 11,  56 => 7,  52 => 5,  43 => 3,  38 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
{% for event in events %}
    {% partial '@event.htm' event=event %}
{% else %}
    <div class=\"event-item\">
        <div class=\"details\">
            <h2 class=\"title\">{{ noEventMessage }}</h2>
        </div><!--//details-->
    </div><!--event-item-->
{% endfor %}

{{ events.render | raw }}
</div>", "C:\\wamp64\\www\\events/themes/hambern-hambern-blank-bootstrap-4/pages/browse-events.htm", "");
    }
}
