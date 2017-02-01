( function( wp, vdom ) {
	/**
	 * @typedef {WPElement} Element virtual node
	 */

	/**
	 * Block element builder.
	 *
	 * @param  {string}                   tag        Element tag name
	 * @param  {Object}                   attributes Element attributes
	 * @param  {Array.<WPElement,string>} children   Element children
	 * @return {WPElement}                           Virtual node
	 */
	wp.element = function( tag, attributes, children ) {
		return vdom.h( tag, attributes, children );
	};
} )( this.wp, this.virtualDom );
