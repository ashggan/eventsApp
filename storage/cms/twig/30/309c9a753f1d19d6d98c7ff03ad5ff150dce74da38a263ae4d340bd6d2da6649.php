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

/* C:\wamp64\www\events/plugins/martin/forms/components/partials/recaptcha.htm */
class __TwigTemplate_39e594cdced2ff6d520277abf7944b6cae82606a41925f1e22600c069e90f170 extends \Twig\Template
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
        if (($context["recaptcha_enabled"] ?? null)) {
            // line 2
            echo "    <div id=\"";
            echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
            echo "\" class=\"g-recaptcha\" data-sitekey=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, false, 2), "recaptcha_site_key", [], "any", false, false, false, 2), "html", null, true);
            echo "\" data-theme=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "recaptcha_theme"], "method", false, false, false, 2), "html", null, true);
            echo "\" data-type=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "recaptcha_type"], "method", false, false, false, 2), "html", null, true);
            echo "\" data-size=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "recaptcha_size"], "method", false, false, false, 2), "html", null, true);
            echo "\"></div>
";
        } elseif (        // line 3
($context["recaptcha_misconfigured"] ?? null)) {
            // line 4
            echo "    <h5>";
            echo twig_escape_filter($this->env, ($context["recaptcha_warn"] ?? null), "html", null, true);
            echo "</h5>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\events/plugins/martin/forms/components/partials/recaptcha.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 4,  50 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if (recaptcha_enabled) %}
    <div id=\"{{ __SELF__ }}\" class=\"g-recaptcha\" data-sitekey=\"{{ __SELF__.settings.recaptcha_site_key }}\" data-theme=\"{{ __SELF__.property('recaptcha_theme') }}\" data-type=\"{{ __SELF__.property('recaptcha_type') }}\" data-size=\"{{ __SELF__.property('recaptcha_size') }}\"></div>
{% elseif (recaptcha_misconfigured) %}
    <h5>{{ recaptcha_warn }}</h5>
{% endif %}", "C:\\wamp64\\www\\events/plugins/martin/forms/components/partials/recaptcha.htm", "");
    }
}
