var GlX = function (config) {
	config = config || {};
	GlX.superclass.constructor.call(this, config);
};
Ext.extend(GlX, Ext.Component, {
	page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('glx', GlX);

GlX = new GlX();