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

/* C:\wamp64\www\events/plugins/jorgeandrade/events/components/eventlist/default.htm */
class __TwigTemplate_ed3afd32e2107138d4b8e5e2ba15ecc57fd540585526d859808dc12f3bde4cdf extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 2
            echo "    ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['event'] = $context["event"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@event.htm"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 4
            echo "    <div class=\"event-item\">
        <div class=\"details\">
            <h2 class=\"title\">";
            // line 6
            echo twig_escape_filter($this->env, ($context["noEventMessage"] ?? null), "html", null, true);
            echo "</h2>
        </div><!--//details-->
    </div><!--event-item-->
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
";
        // line 11
        echo twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "render", [], "any", false, false, false, 11);
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\events/plugins/jorgeandrade/events/components/eventlist/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  63 => 10,  53 => 6,  49 => 4,  40 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for event in events %}
    {% partial '@event.htm' event=event %}
{% else %}
    <div class=\"event-item\">
        <div class=\"details\">
            <h2 class=\"title\">{{ noEventMessage }}</h2>
        </div><!--//details-->
    </div><!--event-item-->
{% endfor %}

{{ events.render | raw }}", "C:\\wamp64\\www\\events/plugins/jorgeandrade/events/components/eventlist/default.htm", "");
    }
}
