alfatest.page.Home = function (config) {
	config = config || {};
	Ext.applyIf(config, {
		components: [{
			xtype: 'alfatest-panel-home', renderTo: 'alfatest-panel-home-div'
		}]
	});
	alfatest.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(alfatest.page.Home, MODx.Component);
Ext.reg('alfatest-page-home', alfatest.page.Home);