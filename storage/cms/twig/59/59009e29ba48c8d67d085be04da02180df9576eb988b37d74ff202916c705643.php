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

/* C:\wamp64\www\events/plugins/martin/forms/components/genericform/default.htm */
class __TwigTemplate_3bea13ac4e047a17db08de6261e54d1a23961de86af39d89c51921f9d320818a extends \Twig\Template
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
        echo "<form data-request=\"";
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onFormSubmit\">

    ";
        // line 3
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "

    <div id=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
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
        // line 27
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@recaptcha"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 28
        echo "    </div>

    <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-default\">Submit</button>

</form>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\events/plugins/martin/forms/components/genericform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 28,  71 => 27,  46 => 5,  41 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form data-request=\"{{ __SELF__ }}::onFormSubmit\">

    {{ form_token() }}

    <div id=\"{{ __SELF__ }}_forms_flash\"></div>

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

</form>", "C:\\wamp64\\www\\events/plugins/martin/forms/components/genericform/default.htm", "");
    }
}
