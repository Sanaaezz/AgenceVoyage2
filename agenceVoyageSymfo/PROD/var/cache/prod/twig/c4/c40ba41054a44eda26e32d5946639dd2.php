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

/* voyage/_form.html.twig */
class __TwigTemplate_6ff926d932d952be1d4c03a95a14311a extends Template
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
        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        yield "
    ";
        // line 2
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        yield "
    <button class=\"btn\">";
        // line 3
        yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["button_label"] ?? null), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "</button>
";
        // line 4
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "voyage/_form.html.twig";
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
        return array (  50 => 4,  46 => 3,  42 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "voyage/_form.html.twig", "C:\\Users\\sanaa\\Desktop\\Agence de Voyage 2\\agenceVoyageSymfo\\PROD\\templates\\voyage\\_form.html.twig");
    }
}
