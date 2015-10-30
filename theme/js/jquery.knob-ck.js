/*!jQuery Knob*//**
 * Downward compatible, touchable dial
 *
 * Version: 1.2.0 (15/07/2012)
 * Requires: jQuery v1.7+
 *
 * Copyright (c) 2012 Anthony Terrien
 * Under MIT and GPL licenses:
 *  http://www.opensource.org/licenses/mit-license.php
 *  http://www.gnu.org/licenses/gpl.html
 *
 * Thanks to vor, eskimoblood, spiffistan, FabrizioC
 */(function(e) {
    "use strict";
    var t = {}, n = Math.max, r = Math.min;
    t.c = {};
    t.c.d = e(document);
    t.c.t = function(e) {
        return e.originalEvent.touches.length - 1;
    };
    t.o = function() {
        var n = this;
        this.o = null;
        this.$ = null;
        this.i = null;
        this.g = null;
        this.v = null;
        this.cv = null;
        this.x = 0;
        this.y = 0;
        this.w = 0;
        this.h = 0;
        this.$c = null;
        this.c = null;
        this.t = 0;
        this.isInit = !1;
        this.fgColor = null;
        this.pColor = null;
        this.dH = null;
        this.cH = null;
        this.eH = null;
        this.rH = null;
        this.scale = 1;
        this.relative = !1;
        this.$div = null;
        this.run = function() {
            var t = function(e, t) {
                var r;
                for (r in t) n.o[r] = t[r];
                n.init();
                n._configure()._draw();
            };
            if (this.$.data("kontroled")) return;
            this.$.data("kontroled", !0);
            this.extend();
            this.o = e.extend({
                min: this.$.data("min") || 0,
                max: this.$.data("max") || 100,
                stopper: !0,
                readOnly: this.$.data("readonly"),
                cursor: this.$.data("cursor") === !0 && 30 || this.$.data("cursor") || 0,
                thickness: this.$.data("thickness") || .35,
                lineCap: this.$.data("linecap") || "butt",
                width: this.$.data("width") || 200,
                height: this.$.data("height") || 200,
                displayInput: this.$.data("displayinput") == null || this.$.data("displayinput"),
                displayPrevious: this.$.data("displayprevious"),
                fgColor: this.$.data("fgcolor") || "#87CEEB",
                inputColor: this.$.data("inputcolor") || this.$.data("fgcolor") || "#87CEEB",
                font: this.$.data("font") || "Arial",
                fontWeight: this.$.data("font-weight") || "bold",
                inline: !1,
                step: this.$.data("step") || 1,
                draw: null,
                change: null,
                cancel: null,
                release: null,
                error: null
            }, this.o);
            if (this.$.is("fieldset")) {
                this.v = {};
                this.i = this.$.find("input");
                this.i.each(function(t) {
                    var r = e(this);
                    n.i[t] = r;
                    n.v[t] = r.val();
                    r.bind("change", function() {
                        var e = {};
                        e[t] = r.val();
                        n.val(e);
                    });
                });
                this.$.find("legend").remove();
            } else {
                this.i = this.$;
                this.v = this.$.val();
                this.v == "" && (this.v = this.o.min);
                this.$.bind("change", function() {
                    n.val(n._validate(n.$.val()));
                });
            }
            !this.o.displayInput && this.$.hide();
            this.$c = e(document.createElement("canvas"));
            typeof G_vmlCanvasManager != "undefined" && G_vmlCanvasManager.initElement(this.$c[0]);
            this.c = this.$c[0].getContext ? this.$c[0].getContext("2d") : null;
            if (!this.c) {
                this.o.error && this.o.error();
                return;
            }
            this.scale = (window.devicePixelRatio || 1) / (this.c.webkitBackingStorePixelRatio || this.c.mozBackingStorePixelRatio || this.c.msBackingStorePixelRatio || this.c.oBackingStorePixelRatio || this.c.backingStorePixelRatio || 1);
            this.relative = this.o.width % 1 !== 0 && this.o.width.indexOf("%");
            this.$div = e('<div style="' + (this.o.inline ? "display:inline;" : "") + '"></div>');
            this.$.wrap(this.$div).before(this.$c);
            this.$div = this.$.parent();
            this._carve();
            if (this.v instanceof Object) {
                this.cv = {};
                this.copy(this.v, this.cv);
            } else this.cv = this.v;
            this.$.bind("configure", t).parent().bind("configure", t);
            this._listen()._configure()._xy().init();
            this.isInit = !0;
            this._draw();
            return this;
        };
        this._carve = function() {
            if (this.relative) {
                this.w = this.$div.parent().width() * parseInt(this.o.width) / 100;
                this.h = this.w;
            } else {
                this.w = this.o.width;
                this.h = this.o.height;
            }
            this.$div.css({
                width: this.w + "px",
                height: this.h + "px"
            });
            this.$c.attr({
                width: this.w,
                height: this.h
            });
            if (this.scale !== 1) {
                this.$c[0].width = this.$c[0].width * this.scale;
                this.$c[0].height = this.$c[0].height * this.scale;
                this.$c.width(this.w);
                this.$c.height(this.h);
            }
            return this;
        };
        this._draw = function() {
            var e = !0;
            n.g = n.c;
            n.clear();
            n.dH && (e = n.dH());
            e !== !1 && n.draw();
        };
        this._touch = function(e) {
            var r = function(e) {
                var t = n.xy2val(e.originalEvent.touches[n.t].pageX, e.originalEvent.touches[n.t].pageY);
                if (t == n.cv) return;
                if (n.cH && n.cH(t) === !1) return;
                n.change(n._validate(t));
                n._draw();
            };
            this.t = t.c.t(e);
            r(e);
            t.c.d.bind("touchmove.k", r).bind("touchend.k", function() {
                t.c.d.unbind("touchmove.k touchend.k");
                if (n.rH && n.rH(n.cv) === !1) return;
                n.val(n.cv);
            });
            return this;
        };
        this._mouse = function(e) {
            var r = function(e) {
                var t = n.xy2val(e.pageX, e.pageY);
                if (t == n.cv) return;
                if (n.cH && n.cH(t) === !1) return;
                n.change(n._validate(t));
                n._draw();
            };
            r(e);
            t.c.d.bind("mousemove.k", r).bind("keyup.k", function(e) {
                if (e.keyCode === 27) {
                    t.c.d.unbind("mouseup.k mousemove.k keyup.k");
                    if (n.eH && n.eH() === !1) return;
                    n.cancel();
                }
            }).bind("mouseup.k", function(e) {
                t.c.d.unbind("mousemove.k mouseup.k keyup.k");
                if (n.rH && n.rH(n.cv) === !1) return;
                n.val(n.cv);
            });
            return this;
        };
        this._xy = function() {
            var e = this.$c.offset();
            this.x = e.left;
            this.y = e.top;
            return this;
        };
        this._listen = function() {
            if (!this.o.readOnly) {
                this.$c.bind("mousedown", function(e) {
                    e.preventDefault();
                    n._xy()._mouse(e);
                }).bind("touchstart", function(e) {
                    e.preventDefault();
                    n._xy()._touch(e);
                });
                this.relative && e(window).resize(function() {
                    n._carve().init();
                    n._draw();
                });
                this.listen();
            } else this.$.attr("readonly", "readonly");
            return this;
        };
        this._configure = function() {
            this.o.draw && (this.dH = this.o.draw);
            this.o.change && (this.cH = this.o.change);
            this.o.cancel && (this.eH = this.o.cancel);
            this.o.release && (this.rH = this.o.release);
            if (this.o.displayPrevious) {
                this.pColor = this.h2rgba(this.o.fgColor, "0.4");
                this.fgColor = this.h2rgba(this.o.fgColor, "0.6");
            } else this.fgColor = this.o.fgColor;
            return this;
        };
        this._clear = function() {
            this.$c[0].width = this.$c[0].width;
        };
        this._validate = function(e) {
            return ~~((e < 0 ? -0.5 : .5) + e / this.o.step) * this.o.step;
        };
        this.listen = function() {};
        this.extend = function() {};
        this.init = function() {};
        this.change = function(e) {};
        this.val = function(e) {};
        this.xy2val = function(e, t) {};
        this.draw = function() {};
        this.clear = function() {
            this._clear();
        };
        this.h2rgba = function(e, t) {
            var n;
            e = e.substring(1, 7);
            n = [ parseInt(e.substring(0, 2), 16), parseInt(e.substring(2, 4), 16), parseInt(e.substring(4, 6), 16) ];
            return "rgba(" + n[0] + "," + n[1] + "," + n[2] + "," + t + ")";
        };
        this.copy = function(e, t) {
            for (var n in e) t[n] = e[n];
        };
    };
    t.Dial = function() {
        t.o.call(this);
        this.startAngle = null;
        this.xy = null;
        this.radius = null;
        this.lineWidth = null;
        this.cursorExt = null;
        this.w2 = null;
        this.PI2 = 2 * Math.PI;
        this.extend = function() {
            this.o = e.extend({
                bgColor: this.$.data("bgcolor") || "#EEEEEE",
                angleOffset: this.$.data("angleoffset") || 0,
                angleArc: this.$.data("anglearc") || 360,
                inline: !0
            }, this.o);
        };
        this.val = function(e) {
            if (null == e) return this.v;
            this.cv = this.o.stopper ? n(r(e, this.o.max), this.o.min) : e;
            this.v = this.cv;
            this.$.val(this.v);
            this._draw();
        };
        this.xy2val = function(e, t) {
            var i, s;
            i = Math.atan2(e - (this.x + this.w2), -(t - this.y - this.w2)) - this.angleOffset;
            this.angleArc != this.PI2 && i < 0 && i > -0.5 ? i = 0 : i < 0 && (i += this.PI2);
            s = ~~(.5 + i * (this.o.max - this.o.min) / this.angleArc) + this.o.min;
            this.o.stopper && (s = n(r(s, this.o.max), this.o.min));
            return s;
        };
        this.listen = function() {
            var t = this, i = function(e) {
                e.preventDefault();
                var n = e.originalEvent, r = n.detail || n.wheelDeltaX, i = n.detail || n.wheelDeltaY, s = parseInt(t.$.val()) + (r > 0 || i > 0 ? t.o.step : r < 0 || i < 0 ? -t.o.step : 0);
                if (t.cH && t.cH(s) === !1) return;
                t.val(s);
            }, s, o, u = 1, a = {
                37: -t.o.step,
                38: t.o.step,
                39: t.o.step,
                40: -t.o.step
            };
            this.$.bind("keydown", function(i) {
                var f = i.keyCode;
                f >= 96 && f <= 105 && (f = i.keyCode = f - 48);
                s = parseInt(String.fromCharCode(f));
                if (isNaN(s)) {
                    f !== 13 && f !== 8 && f !== 9 && f !== 189 && i.preventDefault();
                    if (e.inArray(f, [ 37, 38, 39, 40 ]) > -1) {
                        i.preventDefault();
                        var l = parseInt(t.$.val()) + a[f] * u;
                        t.o.stopper && (l = n(r(l, t.o.max), t.o.min));
                        t.change(l);
                        t._draw();
                        o = window.setTimeout(function() {
                            u *= 2;
                        }, 30);
                    }
                }
            }).bind("keyup", function(e) {
                if (isNaN(s)) {
                    if (o) {
                        window.clearTimeout(o);
                        o = null;
                        u = 1;
                        t.val(t.$.val());
                    }
                } else t.$.val() > t.o.max && t.$.val(t.o.max) || t.$.val() < t.o.min && t.$.val(t.o.min);
            });
            this.$c.bind("mousewheel DOMMouseScroll", i);
            this.$.bind("mousewheel DOMMouseScroll", i);
        };
        this.init = function() {
            if (this.v < this.o.min || this.v > this.o.max) this.v = this.o.min;
            this.$.val(this.v);
            this.w2 = this.w / 2;
            this.cursorExt = this.o.cursor / 100;
            this.xy = this.w2 * this.scale;
            this.lineWidth = this.xy * this.o.thickness;
            this.lineCap = this.o.lineCap;
            this.radius = this.xy - this.lineWidth / 2;
            this.o.angleOffset && (this.o.angleOffset = isNaN(this.o.angleOffset) ? 0 : this.o.angleOffset);
            this.o.angleArc && (this.o.angleArc = isNaN(this.o.angleArc) ? this.PI2 : this.o.angleArc);
            this.angleOffset = this.o.angleOffset * Math.PI / 180;
            this.angleArc = this.o.angleArc * Math.PI / 180;
            this.startAngle = 1.5 * Math.PI + this.angleOffset;
            this.endAngle = 1.5 * Math.PI + this.angleOffset + this.angleArc;
            var e = n(String(Math.abs(this.o.max)).length, String(Math.abs(this.o.min)).length, 2) + 2;
            this.o.displayInput && this.i.css({
                width: (this.w / 2 + 4 >> 0) + "px",
                height: (this.w / 3 >> 0) + "px",
                position: "absolute",
                "vertical-align": "middle",
                "margin-top": (this.w / 3 >> 0) + "px",
                "margin-left": "-" + (this.w * 3 / 4 + 2 >> 0) + "px",
                border: 0,
                background: "none",
                font: this.o.fontWeight + " " + (this.w / e >> 0) + "px " + this.o.font,
                "text-align": "center",
                color: this.o.inputColor || this.o.fgColor,
                padding: "0px",
                "-webkit-appearance": "none"
            }) || this.i.css({
                width: "0px",
                visibility: "hidden"
            });
        };
        this.change = function(e) {
            this.cv = e;
            this.$.val(e);
        };
        this.angle = function(e) {
            return (e - this.o.min) * this.angleArc / (this.o.max - this.o.min);
        };
        this.draw = function() {
            var e = this.g, t = this.angle(this.cv), n = this.startAngle, r = n + t, i, s, o = 1;
            e.lineWidth = this.lineWidth;
            e.lineCap = this.lineCap;
            this.o.cursor && (n = r - this.cursorExt) && (r += this.cursorExt);
            e.beginPath();
            e.strokeStyle = this.o.bgColor;
            e.arc(this.xy, this.xy, this.radius, this.endAngle, this.startAngle, !0);
            e.stroke();
            if (this.o.displayPrevious) {
                s = this.startAngle + this.angle(this.v);
                i = this.startAngle;
                this.o.cursor && (i = s - this.cursorExt) && (s += this.cursorExt);
                e.beginPath();
                e.strokeStyle = this.pColor;
                e.arc(this.xy, this.xy, this.radius, i, s, !1);
                e.stroke();
                o = this.cv == this.v;
            }
            e.beginPath();
            e.strokeStyle = o ? this.o.fgColor : this.fgColor;
            e.arc(this.xy, this.xy, this.radius, n, r, !1);
            e.stroke();
        };
        this.cancel = function() {
            this.val(this.v);
        };
    };
    e.fn.dial = e.fn.knob = function(n) {
        return this.each(function() {
            var r = new t.Dial;
            r.o = n;
            r.$ = e(this);
            r.run();
        }).parent();
    };
})(jQuery);