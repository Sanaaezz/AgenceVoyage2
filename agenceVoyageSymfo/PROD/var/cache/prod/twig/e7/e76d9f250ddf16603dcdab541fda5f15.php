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

/* voyage/index.html.twig */
class __TwigTemplate_e4b38c3a5e161b63b66c9cf327e35ee1 extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "voyage/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Voyage index";
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    <h1>Voyage index</h1>

    <table class=\"table\">
    <style>
    .table { width: 95%}
    </style>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom_voyage</th>
                <th>Photo_voyage</th>
                <th>Duree_voyage</th>
                <th>DateDepart_voyage</th>
                <th>DateRetour_voyage</th>
                <th>Visibility_voyage</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["voyages"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["voyage"]) {
            // line 26
            yield "            <tr>
                <td>";
            // line 27
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                <td>";
            // line 28
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "nomVoyage", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                <td>";
            // line 29
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "photoVoyage", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
                <td>";
            // line 30
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "dureeVoyage", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
                <td>";
            // line 31
            ((CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "dateDepartVoyage", [], "any", false, false, false, 31)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "dateDepartVoyage", [], "any", false, false, false, 31), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td>
                <td>";
            // line 32
            ((CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "dateRetourVoyage", [], "any", false, false, false, 32)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "dateRetourVoyage", [], "any", false, false, false, 32), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td>
                <td>";
            // line 33
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "visibilityVoyage", [], "any", false, false, false, 33)) ? ("Yes") : ("No"));
            yield "</td>
                <td>
                    <a href=\"";
            // line 35
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voyage_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\">show</a>
                    <a href=\"";
            // line 36
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voyage_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            yield "            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voyage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voyage_new");
        yield "\">Create new</a>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "voyage/index.html.twig";
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
        return array (  145 => 47,  140 => 44,  131 => 40,  122 => 36,  118 => 35,  113 => 33,  109 => 32,  105 => 31,  101 => 30,  97 => 29,  93 => 28,  89 => 27,  86 => 26,  81 => 25,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "voyage/index.html.twig", "C:\\Users\\sanaa\\Desktop\\Agence de Voyage 2\\agenceVoyageSymfo\\PROD\\templates\\voyage\\index.html.twig");
    }
}
