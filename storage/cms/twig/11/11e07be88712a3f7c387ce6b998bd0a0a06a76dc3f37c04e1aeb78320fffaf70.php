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

/* C:\wamp64\www\events/themes/hambern-hambern-blank-bootstrap-4/pages/home.htm */
class __TwigTemplate_bbf7be818c3b77041be896e05a7e2ce601d5ca01503d14b731d55a793758bc11 extends \Twig\Template
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
        echo "<div id=\"howtowork\">
    <div class=\"cont\">
    \t<div class=\"app\">
    \t\t<div class=\"app__bgimg\">
    \t\t\t<div class=\"app__bgimg-image app__bgimg-image--1\"></div>
    \t\t\t<div class=\"app__bgimg-image app__bgimg-image--2\"></div>
    \t\t</div>
    \t\t<div class=\"app__img\">
    \t\t\t<img onmousedown=\"return false\" src=\"http://localhost/events/themes/hambern-hambern-blank-bootstrap-4/assets/images/bg.png\" alt=\"\" />
    \t\t</div>
        \t\t
    \t\t<div class=\"app__text app__text--1\">
    \t\t\t<div class=\"app__text-line app__text-line--4\">imperdiet </div>
    \t\t\t<div class=\"app__text-line app__text-line--3\">ut le</div>
    \t\t\t<div class=\"app__text-line app__text-line--2\">non tincidunt </div>
    \t\t\t<div class=\"app__text-line app__text-line--1 fadeInDownBig\"><a href=\"#search\" ><i class=\"fa fa-arrow-down fa-lg\"></i></a>
    \t\t    </div>
        \t</div>
        \t\t
    \t\t<div class=\"app__text app__text--2\">
    \t\t\t<div class=\"app__text-line app__text-line--4\">habitant</div>
    \t\t\t<div class=\"app__text-line app__text-line--3\">ut eget</div>
    \t\t\t<div class=\"app__text-line app__text-line--2\">Nam imperdiet</div>
    \t\t\t<div class=\"app__text-line app__text-line--1\"><img src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/537051/opus-attachment.png\" alt=\"\" />
    \t\t    </div>
    \t\t</div>
    \t\t
        \t</div> 
        </div> 
    </div>
</div>

<div id=\"search\">
    <h1>hell1</h1>
    <div class=\"search-box\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <label for=\"name\">     LOOKING FOR</label>
                <select name=\"\" id=\"\">
                <option value=\"1\">Event 1</option>
                <option value=\"2\">Event 2</option>
                <option value=\"3\">Event 3</option>
                </select>
            </div>
        </div>
    </div>
</div>
<!-- <div id=\"banner\">
    <div class=\"layer1\"></div>
        </div>
        <div id=\"slider\">
        <div class=\"waveWrapper waveAnimation\">
          <div class=\"waveWrapperInner bgTop\">
            <div class=\"wave waveTop\" style=\"background-image: url('http://front-end-noobs.com/jecko/img/wave-top.png')\"></div>
          </div>
          <div class=\"waveWrapperInner bgMiddle\">
            <div class=\"wave waveMiddle\" style=\"background-image: url('http://front-end-noobs.com/jecko/img/wave-mid.png')\"></div>
          </div>
          <div class=\"waveWrapperInner bgBottom\">
            <div class=\"wave waveBottom\" style=\"background-image: url('http://front-end-noobs.com/jecko/img/wave-bot.png')\"></div>
          </div>
    </div>
</div> -->


<div id=\"slider\"></div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\events/themes/hambern-hambern-blank-bootstrap-4/pages/home.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"howtowork\">
    <div class=\"cont\">
    \t<div class=\"app\">
    \t\t<div class=\"app__bgimg\">
    \t\t\t<div class=\"app__bgimg-image app__bgimg-image--1\"></div>
    \t\t\t<div class=\"app__bgimg-image app__bgimg-image--2\"></div>
    \t\t</div>
    \t\t<div class=\"app__img\">
    \t\t\t<img onmousedown=\"return false\" src=\"http://localhost/events/themes/hambern-hambern-blank-bootstrap-4/assets/images/bg.png\" alt=\"\" />
    \t\t</div>
        \t\t
    \t\t<div class=\"app__text app__text--1\">
    \t\t\t<div class=\"app__text-line app__text-line--4\">imperdiet </div>
    \t\t\t<div class=\"app__text-line app__text-line--3\">ut le</div>
    \t\t\t<div class=\"app__text-line app__text-line--2\">non tincidunt </div>
    \t\t\t<div class=\"app__text-line app__text-line--1 fadeInDownBig\"><a href=\"#search\" ><i class=\"fa fa-arrow-down fa-lg\"></i></a>
    \t\t    </div>
        \t</div>
        \t\t
    \t\t<div class=\"app__text app__text--2\">
    \t\t\t<div class=\"app__text-line app__text-line--4\">habitant</div>
    \t\t\t<div class=\"app__text-line app__text-line--3\">ut eget</div>
    \t\t\t<div class=\"app__text-line app__text-line--2\">Nam imperdiet</div>
    \t\t\t<div class=\"app__text-line app__text-line--1\"><img src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/537051/opus-attachment.png\" alt=\"\" />
    \t\t    </div>
    \t\t</div>
    \t\t
        \t</div> 
        </div> 
    </div>
</div>

<div id=\"search\">
    <h1>hell1</h1>
    <div class=\"search-box\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <label for=\"name\">     LOOKING FOR</label>
                <select name=\"\" id=\"\">
                <option value=\"1\">Event 1</option>
                <option value=\"2\">Event 2</option>
                <option value=\"3\">Event 3</option>
                </select>
            </div>
        </div>
    </div>
</div>
<!-- <div id=\"banner\">
    <div class=\"layer1\"></div>
        </div>
        <div id=\"slider\">
        <div class=\"waveWrapper waveAnimation\">
          <div class=\"waveWrapperInner bgTop\">
            <div class=\"wave waveTop\" style=\"background-image: url('http://front-end-noobs.com/jecko/img/wave-top.png')\"></div>
          </div>
          <div class=\"waveWrapperInner bgMiddle\">
            <div class=\"wave waveMiddle\" style=\"background-image: url('http://front-end-noobs.com/jecko/img/wave-mid.png')\"></div>
          </div>
          <div class=\"waveWrapperInner bgBottom\">
            <div class=\"wave waveBottom\" style=\"background-image: url('http://front-end-noobs.com/jecko/img/wave-bot.png')\"></div>
          </div>
    </div>
</div> -->


<div id=\"slider\"></div>", "C:\\wamp64\\www\\events/themes/hambern-hambern-blank-bootstrap-4/pages/home.htm", "");
    }
}
