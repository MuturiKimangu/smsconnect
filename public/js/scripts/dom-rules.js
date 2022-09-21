!function(t){let e={parentSelector:"",scopeSelector:"",rules:[]},o=function(o){this.options=t.extend({},e,o),this.conditions=["==","===","!=","!==",">",">=","<","<=","any","not-any"],this.applyRules()};o.prototype.evalCallback=function(t,e){return e?t.showTargets&&"function"==typeof t.showTargets?t.showTargets:this.options.showTargets&&"function"==typeof this.options.showTargets?this.options.showTargets:this.showTargets:t.hideTargets&&"function"==typeof t.hideTargets?t.hideTargets:this.options.hideTargets&&"function"==typeof this.options.hideTargets?this.options.hideTargets:this.hideTargets},o.prototype.runRule=function(t){let e=this.evalCondition(t.data.rule.condition,t.data.controller.val(),t.data.rule.value);this.evalCallback(t.data.rule,e)(t.data.rule,t.data.controller,e,t.data.targets,t.data.scope)},o.prototype.applyRule=function(e){let o=e.scopeSelector?e.scopeSelector:this.options.scopeSelector,n=t(this.options.parentSelector).find(o),i=this;n.each(function(){let o=t(this).find(e.controller),s=t(this).find(e.targets),r={rule:e,controller:o,targets:s,scope:n};o.on("change",r,i.runRule.bind(i)).trigger("change",r)})},o.prototype.showTargets=function(t,e,o,n){n.show()},o.prototype.hideTargets=function(t,e,o,n){n.hide()},o.prototype.evalCondition=function(t,e,o){if(!(this.conditions.indexOf(t)>-1))throw new Error("Unknown condition:"+t);switch(t){case"==":case"===":return e===o;case"!=":case"!==":return e!==o;case">":return e>o;case"<":return e<o;case"any":return o.indexOf(e)>=0;case"not-any":return o.indexOf(e)<0}},o.prototype.unbindEvents=function(){this.options.rules.forEach(function(e){t(this.options.parentSelector).find(e.controller).off("change")}.bind(this))},o.prototype.applyRules=function(){this.options.rules.forEach(function(t){this.applyRule(t)}.bind(this))},o.prototype.rulesUpdate=function(){this.unbindEvents(),this.applyRules()},t.createDomRules=function(t){return new o(t)}}(jQuery);