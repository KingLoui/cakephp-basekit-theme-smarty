!function($){"use strict";function i(i,e,s,t,n,o,l){var a=Math.pow,r=Math.sqrt,c,p,u,h,f,d,v,x;return c=r(a(s-i,2)+a(t-e,2)),p=r(a(n-s,2)+a(o-t,2)),u=l*c/(c+p),h=l-u,f=s+u*(i-n),d=t+u*(e-o),v=s-h*(i-n),x=t-h*(e-o),[f,d,v,x]}function e(i,e,s,t,n){var o=$.color.parse(n);o.a="number"==typeof t?t:.3,o.normalize(),o=o.toString(),e.beginPath(),e.moveTo(i[0][0],i[0][1]);for(var l=i.length,a=0;a<l;a++)e[i[a][3]].apply(e,i[a][2]);e.stroke(),e.lineWidth=0,e.lineTo(i[l-1][0],s),e.lineTo(i[0][0],s),e.closePath(),t!==!1&&(e.fillStyle=o,e.fill())}function s(i,e,s,t){(void 0===e||"bezier"!==e&&"quadratic"!==e)&&(e="quadratic"),e+="CurveTo",0==n.length?n.push([s[0],s[1],t.concat(s.slice(2)),e]):"quadraticCurveTo"==e&&2==s.length?(t=t.slice(0,2).concat(s),n.push([s[0],s[1],t,e])):n.push([s[2],s[3],t.concat(s.slice(2)),e])}function t(t,o,l){if(l.splines.show===!0){var a=[],r=l.splines.tension||.5,c,p,u,h=l.datapoints.points,f=l.datapoints.pointsize,d=t.getPlotOffset(),v=h.length,x=[];if(n=[],v/f<4)return void $.extend(l.lines,l.splines);for(c=0;c<v;c+=f)p=h[c],u=h[c+1],null==p||p<l.xaxis.min||p>l.xaxis.max||u<l.yaxis.min||u>l.yaxis.max||x.push(l.xaxis.p2c(p)+d.left,l.yaxis.p2c(u)+d.top);for(v=x.length,c=0;c<v-2;c+=2)a=a.concat(i.apply(this,x.slice(c,c+6).concat([r])));for(o.save(),o.strokeStyle=l.color,o.lineWidth=l.splines.lineWidth,s(o,"quadratic",x.slice(0,4),a.slice(0,2)),c=2;c<v-3;c+=2)s(o,"bezier",x.slice(c,c+4),a.slice(2*c-2,2*c+2));s(o,"quadratic",x.slice(v-2,v),[a[2*v-10],a[2*v-9],x[v-4],x[v-3]]),e(n,o,t.height()+10,l.splines.fill,l.color),o.restore()}}var n=[];$.plot.plugins.push({init:function(i){i.hooks.drawSeries.push(t)},options:{series:{splines:{show:!1,lineWidth:2,tension:.5,fill:!1}}},name:"spline",version:"0.8.2"})}(jQuery);