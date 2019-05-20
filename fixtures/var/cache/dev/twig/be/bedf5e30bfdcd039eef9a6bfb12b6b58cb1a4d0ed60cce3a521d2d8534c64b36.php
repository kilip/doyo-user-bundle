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

/* @Twig/Exception/error.html.twig */
class __TwigTemplate_bf7fce507cfab53b7ff68c9616cef53797d0a108ec8f3adfefaf1d1b006fa4dd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'template', '@Twig/Exception/error.html.twig'));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'template', '@Twig/Exception/error.html.twig'));

        // line 1
        echo '<!DOCTYPE html>
<html>
    <head>
        <meta charset="';
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), 'html', null, true);
        echo '" />
        <title>An Error Occurred: ';
        // line 5
        echo twig_escape_filter($this->env, (isset($context['status_text']) || array_key_exists('status_text', $context) ? $context['status_text'] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 5, $this->source); })()), 'html', null, true);
        echo '</title>
        <style>
            body { background-color: #fff; color: #222; font: 16px/1.5 -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; margin: 0; }
            .container { margin: 30px; max-width: 600px; }
            h1 { color: #dc3545; font-size: 24px; }
            h2 { font-size: 18px; }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Oops! An Error Occurred</h1>
            <h2>The server returned a "';
        // line 16
        echo twig_escape_filter($this->env, (isset($context['status_code']) || array_key_exists('status_code', $context) ? $context['status_code'] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 16, $this->source); })()), 'html', null, true);
        echo ' ';
        echo twig_escape_filter($this->env, (isset($context['status_text']) || array_key_exists('status_text', $context) ? $context['status_text'] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 16, $this->source); })()), 'html', null, true);
        echo '".</h2>

            <p>
                Something is broken. Please let us know what you were doing when this error occurred.
                We will fix it as soon as possible. Sorry for any inconvenience caused.
            </p>
        </div>
    </body>
</html>
';

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);
    }

    public function getTemplateName()
    {
        return '@Twig/Exception/error.html.twig';
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return [64 => 16,  50 => 5,  46 => 4,  41 => 1];
    }

    public function getSourceContext()
    {
        return new Source('<!DOCTYPE html>
<html>
    <head>
        <meta charset="{{ _charset }}" />
        <title>An Error Occurred: {{ status_text }}</title>
        <style>
            body { background-color: #fff; color: #222; font: 16px/1.5 -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; margin: 0; }
            .container { margin: 30px; max-width: 600px; }
            h1 { color: #dc3545; font-size: 24px; }
            h2 { font-size: 18px; }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Oops! An Error Occurred</h1>
            <h2>The server returned a "{{ status_code }} {{ status_text }}".</h2>

            <p>
                Something is broken. Please let us know what you were doing when this error occurred.
                We will fix it as soon as possible. Sorry for any inconvenience caused.
            </p>
        </div>
    </body>
</html>
', '@Twig/Exception/error.html.twig', '/project/doyo/user-bundle/vendor/symfony/twig-bundle/Resources/views/Exception/error.html.twig');
    }
}
