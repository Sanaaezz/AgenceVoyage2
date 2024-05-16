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

/* registration/confirmation_email.html.twig */
class __TwigTemplate_4dc58a34d297ccda5f23f5320fd77d1c extends Template
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
        yield "<h1>Hi! Please confirm your email!</h1>

<p>
    Please confirm your email address by clicking the following link: <br><br>
    <a href=\"";
        // line 5
        yield ($context["signedUrl"] ?? null);
        yield "\">Confirm my Email</a>.
    This link will expire in ";
        // line 6
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["expiresAtMessageKey"] ?? null), ($context["expiresAtMessageData"] ?? null), "VerifyEmailBundle"), "html", null, true);
        yield ".
</p>

<p>
    Cheers!
</p>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "registration/confirmation_email.html.twig";
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
        return array (  48 => 6,  44 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "registration/confirmation_email.html.twig", "C:\\Users\\sanaa\\Desktop\\Agence de Voyage 2\\agenceVoyageSymfo\\PROD\\templates\\registration\\confirmation_email.html.twig");
    }
}
