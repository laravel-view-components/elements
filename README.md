# Laravel 7.x View Components

A Laravel View Components package built on the [Tabler UI Kit](https://tabler.io) - a free and open-source HTML Dashboard UI Kit built on Bootstrap.

## Goal
The goal of this package is to provide a list of easy to use View Components in Blade to mimic the HTML package from LaravelCollective using the Tabler UI Kit. All the form elements listed on the [Tabler Preview](https://preview-dev.tabler.io/docs/toasts.html) should eventually be available here.

## Install

1. Install a fresh copy of [Laravel](https://laravel.com/docs/7.x/installation) 7.x or above.
2. Install this package via `composer require laravel-view-components/elements`. Laravel 7.x will automatically discover this package. No need to register the service provider.
3. Install the Tabler UI Preset according to it's instructions.
4. Run `npm install && npm run dev` to build the frontend

## Usage

If you are not familiar with Laravel 7.x View Components, please see the [Laravel Docs](https://laravel.com/docs/7.x/blade#displaying-components).

There are some common component attributes notated below. Specific components may have additional attributes detailed below.
* name - The HTML [name](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input#htmlattrdefname) attribute.
* label - An HTML [label](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/label) element tied to the input item.

The following Tabler UI components are available in this package.

### Alert notification component
`<x-notification-alert />`

### Modal notification component
`<x-notification-modal />`

### Toast notification component
`<x-notification-toast />`
