WordPress Elements
==================

Elements is a DOM builder utility library enabling developers to easily create UI components in JavaScript. Inspired by libraries like Facebook's [React](https://facebook.github.io/react/), Elements provides a simple interface for building components declaratively.

## Example

An element can be created by passing a tag name, attributes object, and a child or array of children as arguments.

```js
wp.element( 'span', { className: 'greeting' }, 'Hello World' );
```

An attributes object consists of [any valid Element property](https://developer.mozilla.org/en-US/docs/Web/API/Element).

Children can be simple strings or elements themselves. Composing and reusing elements is one of the strengths of this pattern (see Motivation below).

If you're familiar with [React](https://facebook.github.io/react/) and build tools like [Webpack](https://webpack.js.org), you could even extend your build configuration to enable [JSX syntax](https://facebook.github.io/jsx/). For example, the above element could be expressed as:

```jsx
<span className="greeting">Hello World</span>
```

([See `pragma` option of `babel-plugin-transform-react-jsx` for more information](https://babeljs.io/docs/plugins/transform-react-jsx/#options))

## Motivation

One of React's greatest successes is shifting the mental model of creating user interfaces toward declarative functions. Managing DOM state in larger JavaScript applications quickly becomes unwieldy, and reading from and manipulating the DOM directly is a bane to application performance. In virtual DOM systems, components are very functional and consequently predictable: given a set of input attributes, an element function should simply return the expected visual representation. These individual elements can then be composed into a tree of virtual nodes that represent that UI of the application at any given point in time.

Should WordPress use React? Maybe. Despite the simplicity of the ideas behind React, there are a few issues that might discourage its adoption by the broader WordPress community. React suffers from significant buy-in; it's a large library that bundles high-level concepts of lifecycle and component state. It has also become increasingly difficult to use without complex build tooling necessary to support new and upcoming JavaScript language features. Worse yet, breaking changes in the API are worrying in an ecosystem like WordPress where plugin authors expect their code to work correctly for long durations of time.

By investing in a light WordPress-specific abstraction building on a small and stable foundation, we can leverage the benefits of a virtual DOM and ensure the long-term viability of plugins. It should also be noted that by implementing element creation as an abstraction, the underlying logic could potentially be substituted or rewritten at any time. The virtual node implementations of common libraries are similar enough that they can be used interchangeably with little trouble.

## Ecosystem (Prior Art)

The following set of links can serve as reference for some of the ideas expressed here relating to virtual DOMs:

- [React](https://facebook.github.io/react/)
 - [`createElement` API](https://facebook.github.io/react/docs/react-api.html#createelement)
- [Mithril](http://mithril.js.org/)
 - ["Virtual DOM nodes"](http://mithril.js.org/vnodes.html)
- [virtual-dom](https://github.com/Matt-Esch/virtual-dom/)
 - ["Motivation"](https://github.com/Matt-Esch/virtual-dom#motivation)
- [hyperscript](https://github.com/hyperhype/hyperscript)
- [mercury](https://github.com/Raynos/mercury)
 - ["Motivation"](https://github.com/Raynos/mercury#motivation)
 - [`virtual-dom/h` API](https://github.com/Matt-Esch/virtual-dom/blob/master/virtual-hyperscript/README.md)
- [Preact](https://preactjs.com/)
- [Inferno](https://infernojs.org/)
- [RAX](http://rax.taobaofed.org/)
- [JSX Specification](https://facebook.github.io/jsx/)
