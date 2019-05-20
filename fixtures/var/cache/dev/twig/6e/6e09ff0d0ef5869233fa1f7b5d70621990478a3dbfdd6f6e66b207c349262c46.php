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

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_9c3a99ffa35a66f355f10bd539f3638d801ed56c8c48318bf9314400bea28491 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'template', '@Twig/Exception/exception.rdf.twig'));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'template', '@Twig/Exception/exception.rdf.twig'));

        // line 1
        echo twig_include($this->env, $context, '@Twig/Exception/exception.xml.twig', ['exception' => (isset($context['exception']) || array_key_exists('exception', $context) ? $context['exception'] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 1, $this->source); })())]);
        echo '
';

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);
    }

    public function getTemplateName()
    {
        return '@Twig/Exception/exception.rdf.twig';
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return [41 => 1];
    }

    public function getSourceContext()
    {
        return new Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", '@Twig/Exception/exception.rdf.twig', '/project/doyo/user-bundle/vendor/symfony/twig-bundle/Resources/views/Exception/exception.rdf.twig');
    }
}
