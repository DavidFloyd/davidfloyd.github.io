webpackJsonp([4,15],{

/***/ 1024:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return CheckboxInputs; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var CheckboxInputs = (function () {
    function CheckboxInputs() {
        this.checkboxModel = [{
                name: 'Check 1',
                checked: false,
                class: 'col-md-4'
            }, {
                name: 'Check 2',
                checked: true,
                class: 'col-md-4'
            }, {
                name: 'Check 3',
                checked: false,
                class: 'col-md-4'
            }];
        this.isDisabled = false;
        this.checkboxPropertiesMapping = {
            model: 'checked',
            value: 'name',
            label: 'name',
            baCheckboxClass: 'class'
        };
    }
    return CheckboxInputs;
}());
CheckboxInputs = __decorate([
    __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
        selector: 'checkbox-inputs',
        template: __webpack_require__(1194),
    }),
    __metadata("design:paramtypes", [])
], CheckboxInputs);

//# sourceMappingURL=checkboxInputs.component.js.map

/***/ }),

/***/ 1025:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__checkboxInputs_component__ = __webpack_require__(1024);
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "a", function() { return __WEBPACK_IMPORTED_MODULE_0__checkboxInputs_component__["a"]; });

//# sourceMappingURL=index.js.map

/***/ }),

/***/ 1026:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return GroupInputs; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var GroupInputs = (function () {
    function GroupInputs() {
    }
    return GroupInputs;
}());
GroupInputs = __decorate([
    __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
        selector: 'group-inputs',
        template: __webpack_require__(1195),
    }),
    __metadata("design:paramtypes", [])
], GroupInputs);

//# sourceMappingURL=groupInputs.component.js.map

/***/ }),

/***/ 1027:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__groupInputs_component__ = __webpack_require__(1026);
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "a", function() { return __WEBPACK_IMPORTED_MODULE_0__groupInputs_component__["a"]; });

//# sourceMappingURL=index.js.map

/***/ }),

/***/ 1028:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__ratinginputs_component__ = __webpack_require__(1029);
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "a", function() { return __WEBPACK_IMPORTED_MODULE_0__ratinginputs_component__["a"]; });

//# sourceMappingURL=index.js.map

/***/ }),

/***/ 1029:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return Rating; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var Rating = (function () {
    function Rating() {
        this._rate1 = 3;
        this._rate2 = 4;
        this._max1 = 5;
        this._max2 = 10;
    }
    return Rating;
}());
Rating = __decorate([
    __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
        selector: 'rating-inputs',
        template: __webpack_require__(1196)
    }),
    __metadata("design:paramtypes", [])
], Rating);

//# sourceMappingURL=ratinginputs.component.js.map

/***/ }),

/***/ 1030:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__selectInputs_component__ = __webpack_require__(1031);
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "a", function() { return __WEBPACK_IMPORTED_MODULE_0__selectInputs_component__["a"]; });

//# sourceMappingURL=index.js.map

/***/ }),

/***/ 1031:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return SelectInputs; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var SelectInputs = (function () {
    function SelectInputs() {
    }
    return SelectInputs;
}());
SelectInputs = __decorate([
    __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
        selector: 'select-inputs',
        styles: [__webpack_require__(1106)],
        template: __webpack_require__(1197)
    }),
    __metadata("design:paramtypes", [])
], SelectInputs);

//# sourceMappingURL=selectInputs.component.js.map

/***/ }),

/***/ 1032:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__standardInputs_component__ = __webpack_require__(1033);
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "a", function() { return __WEBPACK_IMPORTED_MODULE_0__standardInputs_component__["a"]; });

//# sourceMappingURL=index.js.map

/***/ }),

/***/ 1033:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return StandardInputs; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var StandardInputs = (function () {
    function StandardInputs() {
    }
    return StandardInputs;
}());
StandardInputs = __decorate([
    __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
        selector: 'standard-inputs',
        template: __webpack_require__(1198),
    }),
    __metadata("design:paramtypes", [])
], StandardInputs);

//# sourceMappingURL=standardInputs.component.js.map

/***/ }),

/***/ 1034:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__validationInputs_component__ = __webpack_require__(1035);
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "a", function() { return __WEBPACK_IMPORTED_MODULE_0__validationInputs_component__["a"]; });

//# sourceMappingURL=index.js.map

/***/ }),

/***/ 1035:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return ValidationInputs; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var ValidationInputs = (function () {
    function ValidationInputs() {
        this.checkboxModel = [{
                name: 'Checkbox with success',
                state: false,
                class: 'has-success checkbox'
            }, {
                name: 'Checkbox with warning',
                state: false,
                class: 'has-warning checkbox',
            }, {
                name: 'Checkbox with error',
                state: false,
                class: 'has-error checkbox'
            }];
        this.checkboxPropertiesMapping = {
            model: 'state',
            value: 'name',
            label: 'name',
            baCheckboxClass: 'class'
        };
    }
    return ValidationInputs;
}());
ValidationInputs = __decorate([
    __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
        selector: 'validation-inputs',
        template: __webpack_require__(1199),
    }),
    __metadata("design:paramtypes", [])
], ValidationInputs);

//# sourceMappingURL=validationInputs.component.js.map

/***/ }),

/***/ 1036:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__inputs_component__ = __webpack_require__(951);
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "a", function() { return __WEBPACK_IMPORTED_MODULE_0__inputs_component__["a"]; });

//# sourceMappingURL=index.js.map

/***/ }),

/***/ 1037:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return BasicForm; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var BasicForm = (function () {
    function BasicForm() {
        this.isChecked = false;
    }
    return BasicForm;
}());
BasicForm = __decorate([
    __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
        selector: 'basic-form',
        template: __webpack_require__(1201),
    }),
    __metadata("design:paramtypes", [])
], BasicForm);

//# sourceMappingURL=basicForm.component.js.map

/***/ }),

/***/ 1038:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__basicForm_component__ = __webpack_require__(1037);
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "a", function() { return __WEBPACK_IMPORTED_MODULE_0__basicForm_component__["a"]; });

//# sourceMappingURL=index.js.map

/***/ }),

/***/ 1039:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return BlockForm; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var BlockForm = (function () {
    function BlockForm() {
    }
    return BlockForm;
}());
BlockForm = __decorate([
    __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
        selector: 'block-form',
        template: __webpack_require__(1202),
    }),
    __metadata("design:paramtypes", [])
], BlockForm);

//# sourceMappingURL=blockForm.component.js.map

/***/ }),

/***/ 1040:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__blockForm_component__ = __webpack_require__(1039);
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "a", function() { return __WEBPACK_IMPORTED_MODULE_0__blockForm_component__["a"]; });

//# sourceMappingURL=index.js.map

/***/ }),

/***/ 1041:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return HorizontalForm; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var HorizontalForm = (function () {
    function HorizontalForm() {
        this.isRemember = false;
    }
    return HorizontalForm;
}());
HorizontalForm = __decorate([
    __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
        selector: 'horizontal-form',
        template: __webpack_require__(1203),
    }),
    __metadata("design:paramtypes", [])
], HorizontalForm);

//# sourceMappingURL=horizontalForm.component.js.map

/***/ }),

/***/ 1042:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__horizontalForm_component__ = __webpack_require__(1041);
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "a", function() { return __WEBPACK_IMPORTED_MODULE_0__horizontalForm_component__["a"]; });

//# sourceMappingURL=index.js.map

/***/ }),

/***/ 1043:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__inlineForm_component__ = __webpack_require__(1044);
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "a", function() { return __WEBPACK_IMPORTED_MODULE_0__inlineForm_component__["a"]; });

//# sourceMappingURL=index.js.map

/***/ }),

/***/ 1044:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return InlineForm; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var InlineForm = (function () {
    function InlineForm() {
        this.isRemember = false;
    }
    return InlineForm;
}());
InlineForm = __decorate([
    __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
        selector: 'inline-form',
        styles: [__webpack_require__(1107)],
        template: __webpack_require__(1204),
    }),
    __metadata("design:paramtypes", [])
], InlineForm);

//# sourceMappingURL=inlineForm.component.js.map

/***/ }),

/***/ 1045:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__withoutLabelsForm_component__ = __webpack_require__(1046);
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "a", function() { return __WEBPACK_IMPORTED_MODULE_0__withoutLabelsForm_component__["a"]; });

//# sourceMappingURL=index.js.map

/***/ }),

/***/ 1046:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return WithoutLabelsForm; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var WithoutLabelsForm = (function () {
    function WithoutLabelsForm() {
    }
    return WithoutLabelsForm;
}());
WithoutLabelsForm = __decorate([
    __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
        selector: 'without-labels-form',
        template: __webpack_require__(1205),
    }),
    __metadata("design:paramtypes", [])
], WithoutLabelsForm);

//# sourceMappingURL=withoutLabelsForm.component.js.map

/***/ }),

/***/ 1047:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__layouts_component__ = __webpack_require__(952);
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "a", function() { return __WEBPACK_IMPORTED_MODULE_0__layouts_component__["a"]; });

//# sourceMappingURL=index.js.map

/***/ }),

/***/ 1048:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_router__ = __webpack_require__(38);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__forms_component__ = __webpack_require__(953);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__components_inputs_inputs_component__ = __webpack_require__(951);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__components_layouts_layouts_component__ = __webpack_require__(952);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return routing; });




// noinspection TypeScriptValidateTypes
var routes = [
    {
        path: '',
        component: __WEBPACK_IMPORTED_MODULE_1__forms_component__["a" /* Forms */],
        children: [
            { path: 'inputs', component: __WEBPACK_IMPORTED_MODULE_2__components_inputs_inputs_component__["a" /* Inputs */] },
            { path: 'layouts', component: __WEBPACK_IMPORTED_MODULE_3__components_layouts_layouts_component__["a" /* Layouts */] }
        ]
    }
];
var routing = __WEBPACK_IMPORTED_MODULE_0__angular_router__["a" /* RouterModule */].forChild(routes);
//# sourceMappingURL=forms.routing.js.map

/***/ }),

/***/ 1106:
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(3)(false);
// imports


// module
exports.push([module.i, "select.form-control[multiple] {\n  overflow-y: scroll; }\n\nselect.form-control {\n  color: #ffffff; }\n", ""]);

// exports


/*** EXPORTS FROM exports-loader ***/
module.exports = module.exports.toString();

/***/ }),

/***/ 1107:
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(3)(false);
// imports


// module
exports.push([module.i, ".checkbox {\n  display: inline-block;\n  margin-bottom: -12px;\n  margin-left: 12px; }\n", ""]);

// exports


/*** EXPORTS FROM exports-loader ***/
module.exports = module.exports.toString();

/***/ }),

/***/ 1194:
/***/ (function(module, exports) {

module.exports = "<div class=\"checkbox-demo-row\">\r\n  <div class=\"input-demo checkbox-demo row\">\r\n    <ba-multi-checkbox [(ngModel)]=\"checkboxModel\" [propertiesMapping]=\"checkboxPropertiesMapping\"></ba-multi-checkbox>\r\n  </div>\r\n  <div class=\"input-demo radio-demo row\">\r\n    <div class=\"col-md-4\">\r\n      <label class=\"radio-inline custom-radio nowrap\">\r\n        <input type=\"radio\" name=\"inlineRadioOptions\" id=\"inlineRadio1\" value=\"option1\">\r\n        <span translate>{{'general.forms.option1'}}</span>\r\n      </label>\r\n    </div>\r\n    <div class=\"col-md-4\">\r\n      <label class=\"radio-inline custom-radio nowrap\">\r\n        <input type=\"radio\" name=\"inlineRadioOptions\" id=\"inlineRadio2\" value=\"option2\">\r\n        <span>Option 2</span>\r\n      </label>\r\n    </div>\r\n    <div class=\"col-md-4\">\r\n      <label class=\"radio-inline custom-radio nowrap\">\r\n        <input type=\"radio\" name=\"inlineRadioOptions\" id=\"inlineRadio3\" value=\"option3\">\r\n        <span>Option3</span>\r\n      </label>\r\n    </div>\r\n  </div>\r\n</div>\r\n<div>\r\n  <ba-checkbox [(ngModel)]=\"isDisabled\" [baCheckboxClass]=\"'disabled'\" [label]=\"'Disabled checkbox'\" [disabled]=\"true\"></ba-checkbox>\r\n  <div class=\"radio disabled\">\r\n    <label class=\"custom-radio nowrap\">\r\n      <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios3\" value=\"option3\" disabled>\r\n      <span>Disabled option</span>\r\n    </label>\r\n  </div>\r\n</div>\r\n"

/***/ }),

/***/ 1195:
/***/ (function(module, exports) {

module.exports = "<div class=\"input-group\">\r\n  <span class=\"input-group-addon input-group-addon-primary addon-left\" id=\"basic-addon1\">@</span>\r\n  <input type=\"text\" class=\"form-control with-primary-addon\" placeholder=\"Username\" aria-describedby=\"basic-addon1\">\r\n</div>\r\n\r\n<div class=\"input-group\">\r\n  <input type=\"text\" class=\"form-control with-warning-addon\" placeholder=\"Recipient's username\" aria-describedby=\"basic-addon2\">\r\n  <span class=\"input-group-addon input-group-addon-warning addon-right\" id=\"basic-addon2\">@example.com</span>\r\n</div>\r\n\r\n<div class=\"input-group\">\r\n  <span class=\"input-group-addon addon-left input-group-addon-success\">$</span>\r\n  <input type=\"text\" class=\"form-control with-success-addon\" aria-label=\"Amount (to the nearest dollar)\">\r\n  <span class=\"input-group-addon addon-right input-group-addon-success\">.00</span>\r\n</div>\r\n\r\n<div class=\"input-group\">\r\n  <input type=\"text\" class=\"form-control with-danger-addon\" placeholder=\"Search for...\">\r\n  <span class=\"input-group-btn\">\r\n      <button class=\"btn btn-danger\" type=\"button\">Go!</button>\r\n  </span>\r\n</div>\r\n"

/***/ }),

/***/ 1196:
/***/ (function(module, exports) {

module.exports = "<div class=\"raiting-box\">\r\n  <div class=\"col-md-4\">\r\n    <ngb-rating [(ngModel)]=\"_rate1\" max=\"{{_max1}}\" class=\"rating\">\r\n        <ng-template let-fill=\"fill\">\r\n            <i *ngIf=\"fill === 100\" class=\"ion-android-star\"></i>\r\n            <i *ngIf=\"fill === 0\" class=\"ion-android-star-outline\"></i>\r\n        </ng-template>\r\n    </ngb-rating>\r\n    <span class=\"help-block\">Rate: {{_rate1}}</span>\r\n  </div>\r\n\r\n  <div class=\"col-md-8\">\r\n    <ngb-rating [(ngModel)]=\"_rate2\" max=\"{{_max2}}\" class=\"rating\">\r\n        <ng-template let-fill=\"fill\">\r\n            <i *ngIf=\"fill === 100\" class=\"ion-ios-heart\"></i>\r\n            <i *ngIf=\"fill === 0\" class=\"ion-ios-heart-outline\"></i>\r\n        </ng-template>\r\n    </ngb-rating>\r\n    <span class=\"help-block\">Rate: {{_rate2}}</span>\r\n  </div>\r\n</div>\r\n"

/***/ }),

/***/ 1197:
/***/ (function(module, exports) {

module.exports = "<div class=\"form-group\">\r\n  <label for=\"exampleSelect1\">Example select</label>\r\n  <select class=\"form-control\" id=\"exampleSelect1\">\r\n    <option>1</option>\r\n    <option>2</option>\r\n    <option>3</option>\r\n    <option>4</option>\r\n    <option>5</option>\r\n  </select>\r\n</div>\r\n\r\n<div class=\"form-group\">\r\n  <label for=\"exampleSelect2\">Example multiple select</label>\r\n  <select multiple class=\"form-control\" id=\"exampleSelect2\">\r\n    <option>1</option>\r\n    <option>2</option>\r\n    <option>3</option>\r\n    <option>4</option>\r\n    <option>5</option>\r\n  </select>\r\n</div>\r\n"

/***/ }),

/***/ 1198:
/***/ (function(module, exports) {

module.exports = "<form>\r\n  <div class=\"form-group\">\r\n    <label for=\"input01\">Text</label>\r\n    <input type=\"text\" class=\"form-control\" id=\"input01\" placeholder=\"Text\">\r\n  </div>\r\n  <div class=\"form-group\">\r\n    <label for=\"input02\">Password</label>\r\n    <input type=\"password\" class=\"form-control\" id=\"input02\" placeholder=\"Password\">\r\n  </div>\r\n  <div class=\"form-group\">\r\n    <label for=\"input03\">Rounded Corners</label>\r\n    <input type=\"text\" class=\"form-control form-control-rounded\" id=\"input03\" placeholder=\"Rounded Corners\">\r\n  </div>\r\n  <div class=\"form-group\">\r\n    <label for=\"input04\">With help</label>\r\n    <input type=\"text\" class=\"form-control\" id=\"input04\" placeholder=\"With help\">\r\n    <span class=\"help-block sub-little-text\">A block of help text that breaks onto a new line and may extend beyond one line.</span>\r\n  </div>\r\n  <div class=\"form-group\">\r\n    <label for=\"input05\">Disabled Input</label>\r\n    <input type=\"text\" class=\"form-control\" id=\"input05\" placeholder=\"Disabled Input\" disabled>\r\n  </div>\r\n\r\n  <div class=\"form-group\">\r\n    <label for=\"textarea01\">Textarea</label>\r\n    <textarea placeholder=\"Default Input\" class=\"form-control\" id=\"textarea01\"></textarea>\r\n  </div>\r\n\r\n  <div class=\"form-group\">\r\n    <input type=\"text\" class=\"form-control form-control-sm\" id=\"input2\" placeholder=\"Small Input\">\r\n  </div>\r\n  <div class=\"form-group\">\r\n    <input type=\"text\" class=\"form-control form-control-lg\" id=\"input4\" placeholder=\"Large Input\">\r\n  </div>\r\n</form>\r\n"

/***/ }),

/***/ 1199:
/***/ (function(module, exports) {

module.exports = "<div class=\"form-group has-success\">\r\n  <label class=\"control-label\" for=\"inputSuccess1\">Input with success</label>\r\n  <input type=\"text\" class=\"form-control\" id=\"inputSuccess1\">\r\n</div>\r\n<div class=\"form-group has-warning\">\r\n  <label class=\"control-label\" for=\"inputWarning1\">Input with warning</label>\r\n  <input type=\"text\" class=\"form-control\" id=\"inputWarning1\">\r\n</div>\r\n<div class=\"form-group has-error\">\r\n  <label class=\"control-label\" for=\"inputError1\">Input with error</label>\r\n  <input type=\"text\" class=\"form-control\" id=\"inputError1\">\r\n</div>\r\n  <ba-multi-checkbox [(ngModel)]=\"checkboxModel\" [propertiesMapping]=\"checkboxPropertiesMapping\"></ba-multi-checkbox>\r\n<div class=\"form-group has-success has-feedback\">\r\n  <label class=\"control-label\" for=\"inputSuccess2\">Input with success</label>\r\n  <input type=\"text\" class=\"form-control\" id=\"inputSuccess2\" aria-describedby=\"inputSuccess2Status\">\r\n  <i class=\"ion-checkmark-circled form-control-feedback\" aria-hidden=\"true\"></i>\r\n  <span id=\"inputSuccess2Status\" class=\"sr-only\">(success)</span>\r\n</div>\r\n<div class=\"form-group has-warning has-feedback\">\r\n  <label class=\"control-label\" for=\"inputWarning2\">Input with warning</label>\r\n  <input type=\"text\" class=\"form-control\" id=\"inputWarning2\" aria-describedby=\"inputWarning2Status\">\r\n  <i class=\"ion-alert-circled form-control-feedback\" aria-hidden=\"true\"></i>\r\n  <span id=\"inputWarning2Status\" class=\"sr-only\">(warning)</span>\r\n</div>\r\n<div class=\"form-group has-error has-feedback\">\r\n  <label class=\"control-label\" for=\"inputError2\">Input with error</label>\r\n  <input type=\"text\" class=\"form-control\" id=\"inputError2\" aria-describedby=\"inputError2Status\">\r\n  <i class=\"ion-android-cancel form-control-feedback\" aria-hidden=\"true\"></i>\r\n  <span id=\"inputError2Status\" class=\"sr-only\">(error)</span>\r\n</div>\r\n<div class=\"form-group has-success has-feedback\">\r\n  <label class=\"control-label\" for=\"inputGroupSuccess1\">Input group with success</label>\r\n  <div class=\"input-group\">\r\n    <span class=\"input-group-addon addon-left\">@</span>\r\n    <input type=\"text\" class=\"form-control\" id=\"inputGroupSuccess1\" aria-describedby=\"inputGroupSuccess1Status\">\r\n  </div>\r\n  <i class=\"ion-checkmark-circled form-control-feedback\" aria-hidden=\"true\"></i>\r\n  <span id=\"inputGroupSuccess1Status\" class=\"sr-only\">(success)</span>\r\n</div>\r\n"

/***/ }),

/***/ 1200:
/***/ (function(module, exports) {

module.exports = "<div class=\"widgets\">\r\n\r\n  <div class=\"row\">\r\n    <div class=\"col-md-6\">\r\n      <ba-card title=\"Standard Fields\" baCardClass=\"with-scroll\">\r\n        <standard-inputs></standard-inputs>\r\n      </ba-card>\r\n\r\n      <ba-card title=\"Input Groups\" baCardClass=\"with-scroll\">\r\n        <group-inputs></group-inputs>\r\n      </ba-card>\r\n\r\n      <ba-card title=\"Selects\" baCardClass=\"with-scroll\">\r\n        <select-inputs></select-inputs>\r\n      </ba-card>\r\n    </div>\r\n\r\n    <div class=\"col-md-6\">\r\n      <ba-card title=\"Validation States\" baCardClass=\"with-scroll\">\r\n        <validation-inputs></validation-inputs>\r\n      </ba-card>\r\n\r\n      <ba-card title=\"Checkboxes & Radios\" baCardClass=\"with-scroll\">\r\n        <checkbox-inputs></checkbox-inputs>\r\n      </ba-card>\r\n\r\n      <ba-card title=\"Rating\" baCardClass=\"with-scroll\">\r\n        <rating-inputs></rating-inputs>\r\n      </ba-card>\r\n    </div>\r\n  </div>\r\n\r\n</div>\r\n"

/***/ }),

/***/ 1201:
/***/ (function(module, exports) {

module.exports = "<form>\r\n  <div class=\"form-group\">\r\n    <label for=\"exampleInputEmail1\">Email address</label>\r\n    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Email\">\r\n  </div>\r\n  <div class=\"form-group\">\r\n    <label for=\"exampleInputPassword1\">Password</label>\r\n    <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\">\r\n  </div>\r\n  <div class=\"checkbox\">\r\n    <ba-checkbox [(ngModel)]=\"isChecked\" [label]=\"'Check me out'\" [ngModelOptions]=\"{standalone: true}\"></ba-checkbox>\r\n  </div>\r\n  <button type=\"submit\" class=\"btn btn-danger\">Submit</button>\r\n</form>\r\n"

/***/ }),

/***/ 1202:
/***/ (function(module, exports) {

module.exports = "<div class=\"row\">\r\n  <div class=\"col-sm-6\">\r\n    <div class=\"form-group\">\r\n      <label for=\"inputFirstName\">First Name</label>\r\n      <input type=\"text\" class=\"form-control\" id=\"inputFirstName\" placeholder=\"First Name\">\r\n    </div>\r\n  </div>\r\n  <div class=\"col-sm-6\">\r\n    <div class=\"form-group\">\r\n      <label for=\"inputLastName\">Last Name</label>\r\n      <input type=\"text\" class=\"form-control\" id=\"inputLastName\" placeholder=\"Last Name\">\r\n    </div>\r\n  </div>\r\n</div>\r\n<div class=\"row\">\r\n  <div class=\"col-sm-6\">\r\n    <div class=\"form-group\">\r\n      <label for=\"inputEmail\">Email</label>\r\n      <input type=\"email\" class=\"form-control\" id=\"inputEmail\" placeholder=\"Email\">\r\n    </div>\r\n  </div>\r\n  <div class=\"col-sm-6\">\r\n    <div class=\"form-group\">\r\n      <label for=\"inputWebsite\">Website</label>\r\n      <input type=\"text\" class=\"form-control\" id=\"inputWebsite\" placeholder=\"Website\">\r\n    </div>\r\n  </div>\r\n</div>\r\n<button type=\"submit\" class=\"btn btn-primary\">Submit</button>\r\n"

/***/ }),

/***/ 1203:
/***/ (function(module, exports) {

module.exports = "<form class=\"form-horizontal\">\r\n  <div class=\"form-group row\">\r\n    <label for=\"inputEmail3\" class=\"col-sm-2 form-control-label\">Email</label>\r\n    <div class=\"col-sm-10\">\r\n      <input type=\"email\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Email\">\r\n    </div>\r\n  </div>\r\n  <div class=\"form-group row\">\r\n    <label for=\"inputPassword3\" class=\"col-sm-2 form-control-label\">Password</label>\r\n    <div class=\"col-sm-10\">\r\n      <input type=\"password\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"Password\">\r\n    </div>\r\n  </div>\r\n  <div class=\"form-group row\">\r\n    <div class=\"offset-sm-2 col-sm-10\">\r\n      <div class=\"checkbox\">\r\n        <ba-checkbox [(ngModel)]=\"isRemember\" [label]=\"'Remember me'\" [ngModelOptions]=\"{standalone: true}\"></ba-checkbox>\r\n      </div>\r\n    </div>\r\n  </div>\r\n  <div class=\"form-group row\">\r\n    <div class=\"offset-sm-2 col-sm-10\">\r\n      <button type=\"submit\" class=\"btn btn-warning\">Sign in</button>\r\n    </div>\r\n  </div>\r\n</form>\r\n"

/***/ }),

/***/ 1204:
/***/ (function(module, exports) {

module.exports = "<form class=\"row form-inline\">\r\n  <div class=\"form-group col-sm-3\">\r\n    <input type=\"text\" class=\"form-control\" id=\"exampleInputName2\" placeholder=\"Name\">\r\n  </div>\r\n  <div class=\"form-group col-sm-3\">\r\n    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail2\" placeholder=\"Email\">\r\n  </div>\r\n  <div class=\"form-group\">\r\n    <div class=\"checkbox\">\r\n      <ba-checkbox [(ngModel)]=\"isRemember\" [label]=\"'Remember me'\" [ngModelOptions]=\"{standalone: true}\"></ba-checkbox>\r\n    </div>\r\n  </div>\r\n  <div class=\"form-group\">\r\n    <button type=\"submit\" class=\"btn btn-primary\">Send invitation</button>\r\n  </div>\r\n</form>\r\n"

/***/ }),

/***/ 1205:
/***/ (function(module, exports) {

module.exports = "<form>\r\n  <div class=\"form-group\">\r\n    <input type=\"text\" class=\"form-control\" placeholder=\"Recipients\">\r\n  </div>\r\n  <div class=\"form-group\">\r\n    <input type=\"text\" class=\"form-control\" placeholder=\"Subject\">\r\n  </div>\r\n  <div class=\"form-group\">\r\n    <textarea class=\"form-control\" placeholder=\"Message\"></textarea>\r\n  </div>\r\n  <button type=\"submit\" class=\"btn btn-success\">Send</button>\r\n</form>\r\n"

/***/ }),

/***/ 1206:
/***/ (function(module, exports) {

module.exports = "<div class=\"widgets\">\r\n\r\n  <div class=\"row\">\r\n    <div class=\"col-md-12\">\r\n      <ba-card title=\"Inline Form\" baCardClass=\"with-scroll\">\r\n        <inline-form></inline-form>\r\n      </ba-card>\r\n    </div>\r\n  </div>\r\n\r\n  <div class=\"row\">\r\n    <div class=\"col-md-6\">\r\n      <div>\r\n        <ba-card title=\"Basic Form\" baCardClass=\"with-scroll\">\r\n          <basic-form></basic-form>\r\n        </ba-card>\r\n      </div>\r\n\r\n      <div>\r\n        <ba-card title=\"Horizontal Form\" baCardClass=\"with-scroll\">\r\n          <horizontal-form></horizontal-form>\r\n        </ba-card>\r\n      </div>\r\n    </div>\r\n    <div class=\"col-md-6\">\r\n      <div>\r\n        <ba-card title=\"Form Without Labels\" baCardClass=\"with-scroll\">\r\n          <without-labels-form></without-labels-form>\r\n        </ba-card>\r\n      </div>\r\n      <div>\r\n        <ba-card title=\"Block Form\" baCardClass=\"with-scroll\">\r\n          <block-form></block-form>\r\n        </ba-card>\r\n      </div>\r\n    </div>\r\n  </div>\r\n  <div class=\"row\">\r\n    <div class=\"col-md-6\">\r\n      <ba-card title=\"Picture Uploader\" baCardClass=\"with-scroll\">\r\n        <ba-picture-uploader [picture]=\"profile.picture\" [defaultPicture]=\"defaultPicture\" [uploaderOptions]=\"uploaderOptions\"></ba-picture-uploader>\r\n      </ba-card>\r\n    </div>\r\n    <div class=\"col-md-6\">\r\n      <ba-card title=\"File Uploader\" baCardClass=\"with-scroll\">\r\n        <ba-file-uploader [fileUploaderOptions]=\"fileUploaderOptions\"></ba-file-uploader>\r\n      </ba-card>\r\n    </div>\r\n  </div>\r\n</div>\r\n"

/***/ }),

/***/ 625:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__angular_common__ = __webpack_require__(7);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__angular_forms__ = __webpack_require__(11);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__app_translation_module__ = __webpack_require__(168);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__theme_nga_module__ = __webpack_require__(165);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5__ng_bootstrap_ng_bootstrap__ = __webpack_require__(392);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_6__forms_routing__ = __webpack_require__(1048);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_7__forms_component__ = __webpack_require__(953);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_8__components_inputs__ = __webpack_require__(1036);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_9__components_layouts__ = __webpack_require__(1047);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_10__components_inputs_components_standardInputs__ = __webpack_require__(1032);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_11__components_inputs_components_validationInputs__ = __webpack_require__(1034);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_12__components_inputs_components_groupInputs__ = __webpack_require__(1027);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_13__components_inputs_components_checkboxInputs__ = __webpack_require__(1025);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_14__components_inputs_components_ratinginputs__ = __webpack_require__(1028);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_15__components_inputs_components_selectInputs__ = __webpack_require__(1030);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_16__components_layouts_components_inlineForm__ = __webpack_require__(1043);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_17__components_layouts_components_blockForm__ = __webpack_require__(1040);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_18__components_layouts_components_horizontalForm__ = __webpack_require__(1042);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_19__components_layouts_components_basicForm__ = __webpack_require__(1038);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_20__components_layouts_components_withoutLabelsForm__ = __webpack_require__(1045);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "FormsModule", function() { return FormsModule; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};





















var FormsModule = (function () {
    function FormsModule() {
    }
    return FormsModule;
}());
FormsModule = __decorate([
    __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["NgModule"])({
        imports: [
            __WEBPACK_IMPORTED_MODULE_1__angular_common__["CommonModule"],
            __WEBPACK_IMPORTED_MODULE_2__angular_forms__["FormsModule"],
            __WEBPACK_IMPORTED_MODULE_3__app_translation_module__["a" /* AppTranslationModule */],
            __WEBPACK_IMPORTED_MODULE_4__theme_nga_module__["a" /* NgaModule */],
            __WEBPACK_IMPORTED_MODULE_5__ng_bootstrap_ng_bootstrap__["b" /* NgbRatingModule */],
            __WEBPACK_IMPORTED_MODULE_6__forms_routing__["a" /* routing */]
        ],
        declarations: [
            __WEBPACK_IMPORTED_MODULE_9__components_layouts__["a" /* Layouts */],
            __WEBPACK_IMPORTED_MODULE_8__components_inputs__["a" /* Inputs */],
            __WEBPACK_IMPORTED_MODULE_7__forms_component__["a" /* Forms */],
            __WEBPACK_IMPORTED_MODULE_10__components_inputs_components_standardInputs__["a" /* StandardInputs */],
            __WEBPACK_IMPORTED_MODULE_11__components_inputs_components_validationInputs__["a" /* ValidationInputs */],
            __WEBPACK_IMPORTED_MODULE_12__components_inputs_components_groupInputs__["a" /* GroupInputs */],
            __WEBPACK_IMPORTED_MODULE_13__components_inputs_components_checkboxInputs__["a" /* CheckboxInputs */],
            __WEBPACK_IMPORTED_MODULE_14__components_inputs_components_ratinginputs__["a" /* Rating */],
            __WEBPACK_IMPORTED_MODULE_15__components_inputs_components_selectInputs__["a" /* SelectInputs */],
            __WEBPACK_IMPORTED_MODULE_16__components_layouts_components_inlineForm__["a" /* InlineForm */],
            __WEBPACK_IMPORTED_MODULE_17__components_layouts_components_blockForm__["a" /* BlockForm */],
            __WEBPACK_IMPORTED_MODULE_18__components_layouts_components_horizontalForm__["a" /* HorizontalForm */],
            __WEBPACK_IMPORTED_MODULE_19__components_layouts_components_basicForm__["a" /* BasicForm */],
            __WEBPACK_IMPORTED_MODULE_20__components_layouts_components_withoutLabelsForm__["a" /* WithoutLabelsForm */]
        ]
    })
], FormsModule);

//# sourceMappingURL=forms.module.js.map

/***/ }),

/***/ 951:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return Inputs; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var Inputs = (function () {
    function Inputs() {
    }
    return Inputs;
}());
Inputs = __decorate([
    __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
        selector: 'inputs',
        template: __webpack_require__(1200),
    }),
    __metadata("design:paramtypes", [])
], Inputs);

//# sourceMappingURL=inputs.component.js.map

/***/ }),

/***/ 952:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return Layouts; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var Layouts = (function () {
    function Layouts() {
        this.defaultPicture = 'assets/img/theme/no-photo.png';
        this.profile = {
            picture: 'assets/img/app/profile/Nasta.png'
        };
        this.uploaderOptions = {
            // url: 'http://website.com/upload'
            url: '',
        };
        this.fileUploaderOptions = {
            // url: 'http://website.com/upload'
            url: '',
        };
    }
    Layouts.prototype.ngOnInit = function () {
    };
    return Layouts;
}());
Layouts = __decorate([
    __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
        selector: 'layouts',
        template: __webpack_require__(1206),
    }),
    __metadata("design:paramtypes", [])
], Layouts);

//# sourceMappingURL=layouts.component.js.map

/***/ }),

/***/ 953:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return Forms; });
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var Forms = (function () {
    function Forms() {
    }
    return Forms;
}());
Forms = __decorate([
    __webpack_require__.i(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
        selector: 'forms',
        template: "<router-outlet></router-outlet>"
    }),
    __metadata("design:paramtypes", [])
], Forms);

//# sourceMappingURL=forms.component.js.map

/***/ })

});
//# sourceMappingURL=4.chunk.js.map