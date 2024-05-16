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

/* registration/register.html.twig */
class __TwigTemplate_de7cc45e8f7ac6ff278e75ee69646aba extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 24
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Register";
        return; yield '';
    }

    // line 28
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["verify_email_error"], "method", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 30
            yield "        <div class=\"alert alert-danger\" role=\"alert\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["flash_error"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "
    <h1>Register</h1>
";
        // line 36
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["registrationForm"] ?? null), 'errors');
        yield "

    ";
        // line 38
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_start');
        yield "
        ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["registrationForm"] ?? null), 'rest');
        yield "


        <button type=\"submit\" class=\"btn\">Register</button>
    ";
        // line 43
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_end');
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "registration/register.html.twig";
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
        return array (  95 => 43,  88 => 39,  84 => 38,  78 => 36,  74 => 32,  65 => 30,  60 => 29,  56 => 28,  48 => 26,  37 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "registration/register.html.twig", "C:\\Users\\sanaa\\Desktop\\Agence de Voyage 2\\agenceVoyageSymfo\\PROD\\templates\\registration\\register.html.twig");
    }
}
