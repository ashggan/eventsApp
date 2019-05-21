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

/* C:\wamp64\www\events/themes/hambern-hambern-blank-bootstrap-4/pages/contact.htm */
class __TwigTemplate_d936a9b61574d6ad5a3830f4407a06f2dcdc3b92b69398f7b4cef5c4641c8fdc extends \Twig\Template
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
        echo "<div class=\"conatciner\">
    <div class=\"row\">
    <h1>contact us</h1>
    <form data-request=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["genericForm"] ?? null), "html", null, true);
        echo "::onFormSubmit\">

    ";
        // line 6
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "

    <div id=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["genericForm"] ?? null), "html", null, true);
        echo "_forms_flash\"></div>

    <div class=\"form-group\">
        <label for=\"name\">Name:</label>
        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\">
    </div>

    <div class=\"form-group\">
        <label for=\"email\">Email:</label>
        <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\">
    </div>

    <div class=\"form-group\">
        <label for=\"subject\">Subject:</label>
        <input type=\"text\" id=\"subject\" name=\"subject\" class=\"form-control\">
    </div>

    <div class=\"form-group\">
        <textarea id=\"comments\" name=\"comments\" rows=\"8\" cols=\"80\"></textarea>
    </div>

    <div class=\"form-group\">
        ";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@recaptcha"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "    </div>

    <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-default\">Submit</button>

    </form>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\events/themes/hambern-hambern-blank-bootstrap-4/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 31,  75 => 30,  50 => 8,  45 => 6,  40 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"conatciner\">
    <div class=\"row\">
    <h1>contact us</h1>
    <form data-request=\"{{ genericForm }}::onFormSubmit\">

    {{ form_token() }}

    <div id=\"{{ genericForm }}_forms_flash\"></div>

    <div class=\"form-group\">
        <label for=\"name\">Name:</label>
        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\">
    </div>

    <div class=\"form-group\">
        <label for=\"email\">Email:</label>
        <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\">
    </div>

    <div class=\"form-group\">
        <label for=\"subject\">Subject:</label>
        <input type=\"text\" id=\"subject\" name=\"subject\" class=\"form-control\">
    </div>

    <div class=\"form-group\">
        <textarea id=\"comments\" name=\"comments\" rows=\"8\" cols=\"80\"></textarea>
    </div>

    <div class=\"form-group\">
        {% partial '@recaptcha' %}
    </div>

    <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-default\">Submit</button>

    </form>
    </div>
</div>", "C:\\wamp64\\www\\events/themes/hambern-hambern-blank-bootstrap-4/pages/contact.htm", "");
    }
}
