![](https://heatbadger.vercel.app/github/readme/{{ORGANIZATION}}/{{PROJECT}}/)

<p align=center>
  <a href="https://github.com/{{ORGANIZATION}}/{{PROJECT}}/actions"><img src="https://badgen.net/github/checks/{{ORGANIZATION}}/{{PROJECT}}/master?cache=300"></a>
  <a href="https://codecov.io/gh/{{ORGANIZATION}}/{{PROJECT}}"><img src="https://badgen.net/codecov/c/github/{{ORGANIZATION}}/{{PROJECT}}"></a>
  <a href="https://packagist.org/packages/{{ORGANIZATION}}/{{PROJECT}}"><img src="https://badgen.net/packagist/dm/{{ORGANIZATION}}/{{PROJECT}}"></a>
  <a href="https://packagist.org/packages/{{ORGANIZATION}}/{{PROJECT}}"><img src="https://badgen.net/packagist/v/{{ORGANIZATION}}/{{PROJECT}}"></a>
</p>
<p align=center>
  <a href="https://packagist.org/packages/{{ORGANIZATION}}/{{PROJECT}}"><img src="https://badgen.net/packagist/php/{{ORGANIZATION}}/{{PROJECT}}"></a>
  <a href="https://github.com/{{ORGANIZATION}}/{{PROJECT}}"><img src="https://badgen.net/github/license/{{ORGANIZATION}}/{{PROJECT}}"></a>
  <a href="https://bit.ly/cttfo"><img src="https://badgen.net/badge/support/forum/yellow"></a>
  <a href="https://contributte.org/partners.html"><img src="https://badgen.net/badge/sponsor/donations/F96854"></a>
</p>

<p align=center>
Website <a href="https://contributte.org">contributte.org</a> | Contact <a href="https://f3l1x.io">f3l1x.io</a> | Twitter <a href="https://twitter.com/contributte">@contributte</a>
</p>

`{{ORGANIZATION}}/{{PROJECT}}` is a bare Contributte library template for Nette projects. It provides a reusable package scaffold with a DI extension, service example, tests, QA tooling, and documentation placeholders.

## Versions

| State       | Version | Branch   | Nette  | PHP     |
|-------------|---------|----------|--------|---------|
| dev         | `^0.1`  | `master` | `3.2+` | `>={{PHP_MIN_VERSION}}` |
| stable      | `^0.1`  | `master` | `3.2+` | `>={{PHP_MIN_VERSION}}` |

## Installation

Install the package using [Composer](https://getcomposer.org).

```bash
composer require {{ORGANIZATION}}/{{PROJECT}}
```

Register the extension in your `config.neon` file.

```neon
extensions:
  {{PROJECT}}: {{ORGANIZATION}}\{{PROJECT}}\DI\{{PROJECT}}Extension
```

## Configuration

### Minimal Configuration

```neon
{{PROJECT}}:
  # Add minimal configuration here
```

### Advanced Configuration

Here is the list of all available options with their types.

```neon
{{PROJECT}}:
  # option1: <type>
  # option2: <type>
```

## Usage

### Basic Usage

```php
<?php declare(strict_types=1);

use {{ORGANIZATION}}\{{PROJECT}}\ExampleService;

$service = $container->getByType(ExampleService::class);
$service->doSomething();
```

### Advanced Usage

```php
// Add advanced usage examples here
```

## Examples

> [!TIP]
> Take a look at more examples in [contributte/playground](https://github.com/contributte/playground).

## Development

See [how to contribute](https://contributte.org/contributing.html) to this package.

This package is currently maintaining by these authors.

<a href="https://github.com/f3l1x">
  <img width="80" height="80" src="https://avatars2.githubusercontent.com/u/538058?v=3&s=80">
</a>

-----

Consider to [support](https://contributte.org/partners.html) **contributte** development team.
Also thank you for using this package.
