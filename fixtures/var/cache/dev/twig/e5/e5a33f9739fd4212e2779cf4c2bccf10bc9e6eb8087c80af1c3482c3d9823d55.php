<?php

/*
 * This file is part of the DoyoUserBundle project.
 *
 * (c) Anthonius Munthi <me@itstoni.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

use Twig\Environment;
use Twig\Error\RuntimeError;
use Twig\Source;

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_c6bd32e377703e792a08270c58fea65b6506b359e8cb6b011483a7703cf75fa9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension'];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'template', '@Twig/Exception/error.xml.twig'));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'template', '@Twig/Exception/error.xml.twig'));

        // line 1
        echo '<?xml version="1.0" encoding="';
        echo twig_escape_filter($this->env, $this->env->getCharset(), 'html', null, true);
        echo '" ?>

<error code="';
        // line 3
        echo twig_escape_filter($this->env, (isset($context['status_code']) || array_key_exists('status_code', $context) ? $context['status_code'] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 3, $this->source); })()), 'html', null, true);
        echo '" message="';
        echo twig_escape_filter($this->env, (isset($context['status_text']) || array_key_exists('status_text', $context) ? $context['status_text'] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 3, $this->source); })()), 'html', null, true);
        echo '" />
';

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);
    }

    public function getTemplateName()
    {
        return '@Twig/Exception/error.xml.twig';
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return [47 => 3,  41 => 1];
    }

    public function getSourceContext()
    {
        return new Source('<?xml version="1.0" encoding="{{ _charset }}" ?>

<error code="{{ status_code }}" message="{{ status_text }}" />
', '@Twig/Exception/error.xml.twig', '/project/doyo/user-bundle/vendor/symfony/twig-bundle/Resources/views/Exception/error.xml.twig');
    }
}
