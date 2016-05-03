var alfatest = function (config) {
	config = config || {};
	alfatest.superclass.constructor.call(this, config);
};
Ext.extend(alfatest, Ext.Component, {
	page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('alfatest', alfatest);

alfatest = new alfatest();