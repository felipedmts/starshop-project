<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* main/__shipStatusAside.html.twig */
class __TwigTemplate_f5003ce577751e4afe82627f14708204 extends Template
{
    private $source;
    private $macros = [];

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
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/__shipStatusAside.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/__shipStatusAside.html.twig"));

        // line 1
        yield "<aside
            class=\"pb-8 lg:pb-0 lg:w-[411px] shrink-0 lg:block lg:min-h-screen text-white transition-all overflow-hidden px-8 border-b lg:border-b-0 lg:border-r border-white/20 transition-all overflow-hidden\"
             data-controller=\"closeable\"
        >
            <div class=\"flex justify-between mt-11 mb-7\">
                <h2 class=\"text-[32px] font-semibold\">My Ship Status</h2>
                <button data-action=\"closeable#close\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 448 512\"><!--!Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2024 Fonticons, Inc.--><path fill=\"#fff\" d=\"M384 96c0-17.7 14.3-32 32-32s32 14.3 32 32V416c0 17.7-14.3 32-32 32s-32-14.3-32-32V96zM9.4 278.6c-12.5-12.5-12.5-32.8 0-45.3l128-128c12.5-12.5 32.8-12.5 45.3 0s12.5 32.8 0 45.3L109.3 224 288 224c17.7 0 32 14.3 32 32s-14.3 32-32 32l-178.7 0 73.4 73.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0l-128-128z\"/></svg>
                </button>
            </div>

            <div>
                <div class=\"flex flex-col space-y-1.5\">
                    <div class=\"rounded-2xl py-1 px-3 flex justify-center w-32 items-center\" style=\"background: rgba(255, 184, 0, .1);\">
                        <div class=\"rounded-full h-2 w-2 bg-amber-400 blur-[1px] mr-2\"></div>
                        <p class=\"uppercase text-xs\">in progress</p>
                    </div>
                    <h3 class=\"tracking-tight text-[22px] font-semibold\">
                        <a class=\"hover:underline\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_starship_show", ["id" => CoreExtension::getAttribute($this->env, $this->source,         // line 20
(isset($context["MyShip"]) || array_key_exists("MyShip", $context) ? $context["MyShip"] : (function () { throw new RuntimeError('Variable "MyShip" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
        // line 21
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["MyShip"]) || array_key_exists("MyShip", $context) ? $context["MyShip"] : (function () { throw new RuntimeError('Variable "MyShip" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), "html", null, true);
        yield "</a>
                    </h3>
                </div>
                <div class=\"flex mt-4\">
                    <div class=\"border-r border-white/20 pr-8\">
                        <p class=\"text-slate-400 text-xs\">Captain</p>
                        <p class=\"text-xl\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["MyShip"]) || array_key_exists("MyShip", $context) ? $context["MyShip"] : (function () { throw new RuntimeError('Variable "MyShip" does not exist.', 27, $this->source); })()), "captain", [], "any", false, false, false, 27), "html", null, true);
        yield "</p>
                    </div>

                    <div class=\"pl-8\">
                        <p class=\"text-slate-400 text-xs\">Class</p>
                        <p class=\"text-xl\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["MyShip"]) || array_key_exists("MyShip", $context) ? $context["MyShip"] : (function () { throw new RuntimeError('Variable "MyShip" does not exist.', 32, $this->source); })()), "class", [], "any", false, false, false, 32), "html", null, true);
        yield "</p>
                    </div>
                </div>
            </div>
        </aside>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "main/__shipStatusAside.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  85 => 32,  77 => 27,  67 => 21,  65 => 20,  64 => 19,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<aside
            class=\"pb-8 lg:pb-0 lg:w-[411px] shrink-0 lg:block lg:min-h-screen text-white transition-all overflow-hidden px-8 border-b lg:border-b-0 lg:border-r border-white/20 transition-all overflow-hidden\"
             data-controller=\"closeable\"
        >
            <div class=\"flex justify-between mt-11 mb-7\">
                <h2 class=\"text-[32px] font-semibold\">My Ship Status</h2>
                <button data-action=\"closeable#close\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 448 512\"><!--!Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2024 Fonticons, Inc.--><path fill=\"#fff\" d=\"M384 96c0-17.7 14.3-32 32-32s32 14.3 32 32V416c0 17.7-14.3 32-32 32s-32-14.3-32-32V96zM9.4 278.6c-12.5-12.5-12.5-32.8 0-45.3l128-128c12.5-12.5 32.8-12.5 45.3 0s12.5 32.8 0 45.3L109.3 224 288 224c17.7 0 32 14.3 32 32s-14.3 32-32 32l-178.7 0 73.4 73.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0l-128-128z\"/></svg>
                </button>
            </div>

            <div>
                <div class=\"flex flex-col space-y-1.5\">
                    <div class=\"rounded-2xl py-1 px-3 flex justify-center w-32 items-center\" style=\"background: rgba(255, 184, 0, .1);\">
                        <div class=\"rounded-full h-2 w-2 bg-amber-400 blur-[1px] mr-2\"></div>
                        <p class=\"uppercase text-xs\">in progress</p>
                    </div>
                    <h3 class=\"tracking-tight text-[22px] font-semibold\">
                        <a class=\"hover:underline\" href=\"{{ path('app_starship_show', {
                            id: MyShip.id
                        }) }}\">{{ MyShip.name }}</a>
                    </h3>
                </div>
                <div class=\"flex mt-4\">
                    <div class=\"border-r border-white/20 pr-8\">
                        <p class=\"text-slate-400 text-xs\">Captain</p>
                        <p class=\"text-xl\">{{ MyShip.captain }}</p>
                    </div>

                    <div class=\"pl-8\">
                        <p class=\"text-slate-400 text-xs\">Class</p>
                        <p class=\"text-xl\">{{ MyShip.class }}</p>
                    </div>
                </div>
            </div>
        </aside>", "main/__shipStatusAside.html.twig", "C:\\xampp\\htdocs\\my_project\\templates\\main\\__shipStatusAside.html.twig");
    }
}
