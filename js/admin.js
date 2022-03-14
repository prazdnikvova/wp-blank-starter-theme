jQuery(document).ready(function( $ ) {


});


"use strict";

var __ = wp.i18n.__;
var Fragment = wp.element.Fragment;
var InspectorControls = wp.blockEditor.InspectorControls;
var _wp$components = wp.components,
    PanelBody = _wp$components.PanelBody,
    PanelRow = _wp$components.PanelRow;
var addFilter = wp.hooks.addFilter;
var createHigherOrderComponent = wp.compose.createHigherOrderComponent;
var customClassNamesColumn = [{
  className: "color-border-top",
  category: "default"
}, {
  className: "color-border-left",
  category: "default"
}, {
  className: "color-border-right",
  category: "default"
}, {
  className: "col-lg",
  category: "default"
}, {
  className: "col-lg-1",
  category: "default"
}, {
  className: "col-lg-10",
  category: "default"
}, {
  className: "col-lg-11",
  category: "default"
}, {
  className: "col-lg-12",
  category: "default"
}, {
  className: "col-lg-2",
  category: "default"
}, {
  className: "col-lg-3",
  category: "default"
}, {
  className: "col-lg-4",
  category: "default"
}, {
  className: "col-lg-5",
  category: "default"
}, {
  className: "col-lg-6",
  category: "default"
}, {
  className: "col-lg-7",
  category: "default"
}, {
  className: "col-lg-8",
  category: "default"
}, {
  className: "col-lg-9",
  category: "default"
}, {
  className: "col-lg-auto",
  category: "default"
}, {
  className: "col-md",
  category: "default"
}, {
  className: "col-md-1",
  category: "default"
}, {
  className: "col-md-10",
  category: "default"
}, {
  className: "col-md-11",
  category: "default"
}, {
  className: "col-md-12",
  category: "default"
}, {
  className: "col-md-2",
  category: "default"
}, {
  className: "col-md-3",
  category: "default"
}, {
  className: "col-md-4",
  category: "default"
}, {
  className: "col-md-5",
  category: "default"
}, {
  className: "col-md-6",
  category: "default"
}, {
  className: "col-md-7",
  category: "default"
}, {
  className: "col-md-8",
  category: "default"
}, {
  className: "col-md-9",
  category: "default"
}, {
  className: "col-md-auto",
  category: "default"
}, {
  className: "col-sm",
  category: "default"
}, {
  className: "col-sm-1",
  category: "default"
}, {
  className: "col-sm-10",
  category: "default"
}, {
  className: "col-sm-11",
  category: "default"
}, {
  className: "col-sm-12",
  category: "default"
}, {
  className: "col-sm-2",
  category: "default"
}, {
  className: "col-sm-3",
  category: "default"
}, {
  className: "col-sm-4",
  category: "default"
}, {
  className: "col-sm-5",
  category: "default"
}, {
  className: "col-sm-6",
  category: "default"
}, {
  className: "col-sm-7",
  category: "default"
}, {
  className: "col-sm-8",
  category: "default"
}, {
  className: "col-sm-9",
  category: "default"
}, {
  className: "col-sm-auto",
  category: "default"
}, {
  className: "col-xl",
  category: "default"
}, {
  className: "col-xl-1",
  category: "default"
}, {
  className: "col-xl-10",
  category: "default"
}, {
  className: "col-xl-11",
  category: "default"
}, {
  className: "col-xl-12",
  category: "default"
}, {
  className: "col-xl-2",
  category: "default"
}, {
  className: "col-xl-3",
  category: "default"
}, {
  className: "col-xl-4",
  category: "default"
}, {
  className: "col-xl-5",
  category: "default"
}, {
  className: "col-xl-6",
  category: "default"
}, {
  className: "col-xl-7",
  category: "default"
}, {
  className: "col-xl-8",
  category: "default"
}, {
  className: "col-xl-9",
  category: "default"
}, {
  className: "col-xl-auto",
  category: "default"
}, {
  className: "col",
  category: "default"
}, {
  className: "col-1",
  category: "default"
}, {
  className: "col-10",
  category: "default"
}, {
  className: "col-11",
  category: "default"
}, {
  className: "col-12",
  category: "default"
}, {
  className: "col-2",
  category: "default"
}, {
  className: "col-3",
  category: "default"
}, {
  className: "col-4",
  category: "default"
}, {
  className: "col-5",
  category: "default"
}, {
  className: "col-6",
  category: "default"
}, {
  className: "col-7",
  category: "default"
}, {
  className: "col-8",
  category: "default"
}, {
  className: "col-9",
  category: "default"
}, {
  className: "col-auto",
  category: "default"
}, {
  className: "container-fluid",
  category: "default"
}, {
  className: "offset-1",
  category: "default"
}, {
  className: "offset-10",
  category: "default"
}, {
  className: "offset-11",
  category: "default"
}, {
  className: "offset-2",
  category: "default"
}, {
  className: "offset-3",
  category: "default"
}, {
  className: "offset-4",
  category: "default"
}, {
  className: "offset-5",
  category: "default"
}, {
  className: "offset-6",
  category: "default"
}, {
  className: "offset-7",
  category: "default"
}, {
  className: "offset-8",
  category: "default"
}, {
  className: "offset-9",
  category: "default"
}, {
  className: "offset-lg-0",
  category: "default"
}, {
  className: "offset-lg-1",
  category: "default"
}, {
  className: "offset-lg-10",
  category: "default"
}, {
  className: "offset-lg-11",
  category: "default"
}, {
  className: "offset-lg-2",
  category: "default"
}, {
  className: "offset-lg-3",
  category: "default"
}, {
  className: "offset-lg-4",
  category: "default"
}, {
  className: "offset-lg-5",
  category: "default"
}, {
  className: "offset-lg-6",
  category: "default"
}, {
  className: "offset-lg-7",
  category: "default"
}, {
  className: "offset-lg-8",
  category: "default"
}, {
  className: "offset-lg-9",
  category: "default"
}, {
  className: "offset-md-0",
  category: "default"
}, {
  className: "offset-md-1",
  category: "default"
}, {
  className: "offset-md-10",
  category: "default"
}, {
  className: "offset-md-11",
  category: "default"
}, {
  className: "offset-md-2",
  category: "default"
}, {
  className: "offset-md-3",
  category: "default"
}, {
  className: "offset-md-4",
  category: "default"
}, {
  className: "offset-md-5",
  category: "default"
}, {
  className: "offset-md-6",
  category: "default"
}, {
  className: "offset-md-7",
  category: "default"
}, {
  className: "offset-md-8",
  category: "default"
}, {
  className: "offset-md-9",
  category: "default"
}, {
  className: "offset-sm-0",
  category: "default"
}, {
  className: "offset-sm-1",
  category: "default"
}, {
  className: "offset-sm-10",
  category: "default"
}, {
  className: "offset-sm-11",
  category: "default"
}, {
  className: "offset-sm-2",
  category: "default"
}, {
  className: "offset-sm-3",
  category: "default"
}, {
  className: "offset-sm-4",
  category: "default"
}, {
  className: "offset-sm-5",
  category: "default"
}, {
  className: "offset-sm-6",
  category: "default"
}, {
  className: "offset-sm-7",
  category: "default"
}, {
  className: "offset-sm-8",
  category: "default"
}, {
  className: "offset-sm-9",
  category: "default"
}, {
  className: "offset-xl-0",
  category: "default"
}, {
  className: "offset-xl-1",
  category: "default"
}, {
  className: "offset-xl-10",
  category: "default"
}, {
  className: "offset-xl-11",
  category: "default"
}, {
  className: "offset-xl-2",
  category: "default"
}, {
  className: "offset-xl-3",
  category: "default"
}, {
  className: "offset-xl-4",
  category: "default"
}, {
  className: "offset-xl-5",
  category: "default"
}, {
  className: "offset-xl-6",
  category: "default"
}, {
  className: "offset-xl-7",
  category: "default"
}, {
  className: "offset-xl-8",
  category: "default"
}, {
  className: "offset-xl-9",
  category: "default"
}];
var customClassNamesRow = [{
  className: "justify-content-around",
  category: "default"
}, {
  className: "justify-content-between",
  category: "default"
}, {
  className: "justify-content-center",
  category: "default"
}, {
  className: "justify-content-end",
  category: "default"
}, {
  className: "justify-content-lg-around",
  category: "default"
}, {
  className: "justify-content-lg-between",
  category: "default"
}, {
  className: "justify-content-lg-center",
  category: "default"
}, {
  className: "justify-content-lg-end",
  category: "default"
}, {
  className: "justify-content-lg-start",
  category: "default"
}, {
  className: "justify-content-md-around",
  category: "default"
}, {
  className: "justify-content-md-between",
  category: "default"
}, {
  className: "justify-content-md-center",
  category: "default"
}, {
  className: "justify-content-md-end",
  category: "default"
}, {
  className: "justify-content-md-start",
  category: "default"
}, {
  className: "justify-content-sm-around",
  category: "default"
}, {
  className: "justify-content-sm-between",
  category: "default"
}, {
  className: "justify-content-sm-center",
  category: "default"
}, {
  className: "justify-content-sm-end",
  category: "default"
}, {
  className: "justify-content-sm-start",
  category: "default"
}, {
  className: "justify-content-start",
  category: "default"
}, {
  className: "justify-content-xl-around",
  category: "default"
}, {
  className: "justify-content-xl-between",
  category: "default"
}, {
  className: "justify-content-xl-center",
  category: "default"
}, {
  className: "justify-content-xl-end",
  category: "default"
}, {
  className: "justify-content-xl-start",
  category: "default"
}];
var CustomClassNameInspector2 = createHigherOrderComponent(function (BlockEdit) {
  return function (props) {

    if (props.name == 'advanced-bootstrap-blocks/row' || props.name == 'advanced-bootstrap-blocks/column') {
      if (props.name == 'advanced-bootstrap-blocks/row') {
        customClassNames = customClassNamesRow;
      } else if (props.name == 'advanced-bootstrap-blocks/column') {
        customClassNames = customClassNamesColumn;
      }

      props.attributes.classNameFilter = typeof props.attributes.classNameFilter !== "undefined" && props.attributes.classNameFilter.length ? props.attributes.classNameFilter : "";
      return React.createElement(Fragment, null, React.createElement(BlockEdit, props), React.createElement(InspectorControls, null, React.createElement(PanelBody, {
        title: __('Bootstrap Classes', 'advanced-bootstrap-blocks'),
        initialOpen: false
      }, props.attributes.className && React.createElement(PanelRow, {
        title: "Active Classes",
        className: "my-0 flex-wrap justify-content-start"
      }, props.attributes.className.split(" ").filter(function (item) {
        return item.trim() != '';
      }).map(function (item) {
        return React.createElement("button", {
          className: "d-inline badge badge-primary border-0 font-weight-light mb-2 mr-2",
          onClick: function onClick() {
            var classNameList = typeof props.attributes.className !== "undefined" ? props.attributes.className.split(" ") : [];

            if (classNameList.includes(item)) {
              props.setAttributes({
                className: classNameList.filter(function (name) {
                  return name !== item;
                }).join(" ")
              });
            }
          }
        }, item, " ", React.createElement("i", {
          className: "fa fa-close",
          "aria-hidden": "true"
        }));
      })), React.createElement(PanelRow, null, React.createElement("input", {
        id: "classNameFilter",
        type: "text",
        placeholder: "Filter class names",
        className: "d-block w-100 mb-3",
        onChange: function onChange(e) {
          return props.setAttributes({
            classNameFilter: e.target.value
          });
        }
      })), customClassNames.filter(function (item) {
        return item.className.indexOf(props.attributes.classNameFilter) != -1 ? true : false;
      }).map(function (item) {
        return React.createElement(PanelRow, {
          className: "mt-0"
        }, React.createElement("label", null, React.createElement("input", {
          type: "checkbox",
          checked: typeof props.attributes.className !== "undefined" && props.attributes.className.indexOf(item.className) != -1 ? true : false,
          onClick: function onClick() {
            var classNameList = typeof props.attributes.className !== "undefined" ? props.attributes.className.split(" ") : [];

            if (!classNameList.includes(item.className)) {
              props.setAttributes({
                className: [classNameList.join(" "), item.className].join(" ")
              });
            } else {
              props.setAttributes({
                className: classNameList.filter(function (name) {
                  return name !== item.className;
                }).join(" ")
              });
            }
          }
        }), React.createElement("small", null, item.className)));
      }))));
    } else {
      return React.createElement(BlockEdit, props);
    }
  };
}, 'CustomClassNameInspector2');
addFilter('editor.BlockEdit', 'advanced-custom-blocks/custom-classname-inspector-hide_classes', CustomClassNameInspector2);
wp.hooks.removeFilter('editor.BlockEdit', 'advanced-custom-blocks/custom-classname-inspector'); 



/*
const { __ } = wp.i18n;
const { Fragment } = wp.element;
const { InspectorControls } = wp.blockEditor;
const { PanelBody, PanelRow } = wp.components;
const { addFilter } = wp.hooks;
const { createHigherOrderComponent } = wp.compose;

const customClassNamesColumn = [
  { 
    className: "col-lg",
    category: "default",
  },
  { 
    className: "col-lg-1",
    category: "default",
  },
  { 
    className: "col-lg-10",
    category: "default",
  },
  { 
    className: "col-lg-11",
    category: "default",
  },
  { 
    className: "col-lg-12",
    category: "default",
  },
  { 
    className: "col-lg-2",
    category: "default",
  },
  { 
    className: "col-lg-3",
    category: "default",
  },
  { 
    className: "col-lg-4",
    category: "default",
  },
  { 
    className: "col-lg-5",
    category: "default",
  },
  { 
    className: "col-lg-6",
    category: "default",
  },
  { 
    className: "col-lg-7",
    category: "default",
  },
  { 
    className: "col-lg-8",
    category: "default",
  },
  { 
    className: "col-lg-9",
    category: "default",
  },
  { 
    className: "col-lg-auto",
    category: "default",
  },
  { 
    className: "col-md",
    category: "default",
  },
  { 
    className: "col-md-1",
    category: "default",
  },
  { 
    className: "col-md-10",
    category: "default",
  },
  { 
    className: "col-md-11",
    category: "default",
  },
  { 
    className: "col-md-12",
    category: "default",
  },
  { 
    className: "col-md-2",
    category: "default",
  },
  { 
    className: "col-md-3",
    category: "default",
  },
  { 
    className: "col-md-4",
    category: "default",
  },
  { 
    className: "col-md-5",
    category: "default",
  },
  { 
    className: "col-md-6",
    category: "default",
  },
  { 
    className: "col-md-7",
    category: "default",
  },
  { 
    className: "col-md-8",
    category: "default",
  },
  { 
    className: "col-md-9",
    category: "default",
  },
  { 
    className: "col-md-auto",
    category: "default",
  },
  { 
    className: "col-sm",
    category: "default",
  },
  { 
    className: "col-sm-1",
    category: "default",
  },
  { 
    className: "col-sm-10",
    category: "default",
  },
  { 
    className: "col-sm-11",
    category: "default",
  },
  { 
    className: "col-sm-12",
    category: "default",
  },
  { 
    className: "col-sm-2",
    category: "default",
  },
  { 
    className: "col-sm-3",
    category: "default",
  },
  { 
    className: "col-sm-4",
    category: "default",
  },
  { 
    className: "col-sm-5",
    category: "default",
  },
  { 
    className: "col-sm-6",
    category: "default",
  },
  { 
    className: "col-sm-7",
    category: "default",
  },
  { 
    className: "col-sm-8",
    category: "default",
  },
  { 
    className: "col-sm-9",
    category: "default",
  },
  { 
    className: "col-sm-auto",
    category: "default",
  },
  { 
    className: "col-xl",
    category: "default",
  },
  { 
    className: "col-xl-1",
    category: "default",
  },
  { 
    className: "col-xl-10",
    category: "default",
  },
  { 
    className: "col-xl-11",
    category: "default",
  },
  { 
    className: "col-xl-12",
    category: "default",
  },
  { 
    className: "col-xl-2",
    category: "default",
  },
  { 
    className: "col-xl-3",
    category: "default",
  },
  { 
    className: "col-xl-4",
    category: "default",
  },
  { 
    className: "col-xl-5",
    category: "default",
  },
  { 
    className: "col-xl-6",
    category: "default",
  },
  { 
    className: "col-xl-7",
    category: "default",
  },
  { 
    className: "col-xl-8",
    category: "default",
  },
  { 
    className: "col-xl-9",
    category: "default",
  },
  { 
    className: "col-xl-auto",
    category: "default",
  },
  { 
    className: "col",
    category: "default",
  },
  { 
    className: "col-1",
    category: "default",
  },
  { 
    className: "col-10",
    category: "default",
  },
  { 
    className: "col-11",
    category: "default",
  },
  { 
    className: "col-12",
    category: "default",
  },
  { 
    className: "col-2",
    category: "default",
  },
  { 
    className: "col-3",
    category: "default",
  },
  { 
    className: "col-4",
    category: "default",
  },
  { 
    className: "col-5",
    category: "default",
  },
  { 
    className: "col-6",
    category: "default",
  },
  { 
    className: "col-7",
    category: "default",
  },
  { 
    className: "col-8",
    category: "default",
  },
  { 
    className: "col-9",
    category: "default",
  },
  { 
    className: "col-auto",
    category: "default",
  },
  { 
    className: "container-fluid",
    category: "default",
  },
  { 
    className: "offset-1",
    category: "default",
  },
  { 
    className: "offset-10",
    category: "default",
  },
  { 
    className: "offset-11",
    category: "default",
  },
  { 
    className: "offset-2",
    category: "default",
  },
  { 
    className: "offset-3",
    category: "default",
  },
  { 
    className: "offset-4",
    category: "default",
  },
  { 
    className: "offset-5",
    category: "default",
  },
  { 
    className: "offset-6",
    category: "default",
  },
  { 
    className: "offset-7",
    category: "default",
  },
  { 
    className: "offset-8",
    category: "default",
  },
  { 
    className: "offset-9",
    category: "default",
  },
  { 
    className: "offset-lg-0",
    category: "default",
  },
  { 
    className: "offset-lg-1",
    category: "default",
  },
  { 
    className: "offset-lg-10",
    category: "default",
  },
  { 
    className: "offset-lg-11",
    category: "default",
  },
  { 
    className: "offset-lg-2",
    category: "default",
  },
  { 
    className: "offset-lg-3",
    category: "default",
  },
  { 
    className: "offset-lg-4",
    category: "default",
  },
  { 
    className: "offset-lg-5",
    category: "default",
  },
  { 
    className: "offset-lg-6",
    category: "default",
  },
  { 
    className: "offset-lg-7",
    category: "default",
  },
  { 
    className: "offset-lg-8",
    category: "default",
  },
  { 
    className: "offset-lg-9",
    category: "default",
  },
  { 
    className: "offset-md-0",
    category: "default",
  },
  { 
    className: "offset-md-1",
    category: "default",
  },
  { 
    className: "offset-md-10",
    category: "default",
  },
  { 
    className: "offset-md-11",
    category: "default",
  },
  { 
    className: "offset-md-2",
    category: "default",
  },
  { 
    className: "offset-md-3",
    category: "default",
  },
  { 
    className: "offset-md-4",
    category: "default",
  },
  { 
    className: "offset-md-5",
    category: "default",
  },
  { 
    className: "offset-md-6",
    category: "default",
  },
  { 
    className: "offset-md-7",
    category: "default",
  },
  { 
    className: "offset-md-8",
    category: "default",
  },
  { 
    className: "offset-md-9",
    category: "default",
  },
  { 
    className: "offset-sm-0",
    category: "default",
  },
  { 
    className: "offset-sm-1",
    category: "default",
  },
  { 
    className: "offset-sm-10",
    category: "default",
  },
  { 
    className: "offset-sm-11",
    category: "default",
  },
  { 
    className: "offset-sm-2",
    category: "default",
  },
  { 
    className: "offset-sm-3",
    category: "default",
  },
  { 
    className: "offset-sm-4",
    category: "default",
  },
  { 
    className: "offset-sm-5",
    category: "default",
  },
  { 
    className: "offset-sm-6",
    category: "default",
  },
  { 
    className: "offset-sm-7",
    category: "default",
  },
  { 
    className: "offset-sm-8",
    category: "default",
  },
  { 
    className: "offset-sm-9",
    category: "default",
  },
  { 
    className: "offset-xl-0",
    category: "default",
  },
  { 
    className: "offset-xl-1",
    category: "default",
  },
  { 
    className: "offset-xl-10",
    category: "default",
  },
  { 
    className: "offset-xl-11",
    category: "default",
  },
  { 
    className: "offset-xl-2",
    category: "default",
  },
  { 
    className: "offset-xl-3",
    category: "default",
  },
  { 
    className: "offset-xl-4",
    category: "default",
  },
  { 
    className: "offset-xl-5",
    category: "default",
  },
  { 
    className: "offset-xl-6",
    category: "default",
  },
  { 
    className: "offset-xl-7",
    category: "default",
  },
  { 
    className: "offset-xl-8",
    category: "default",
  },
  { 
    className: "offset-xl-9",
    category: "default",
  },
];
const customClassNamesRow = [
  { 
    className: "justify-content-around",
    category: "default",
  },
  { 
    className: "justify-content-between",
    category: "default",
  },
  { 
    className: "justify-content-center",
    category: "default",
  },
  { 
    className: "justify-content-end",
    category: "default",
  },
  { 
    className: "justify-content-lg-around",
    category: "default",
  },
  { 
    className: "justify-content-lg-between",
    category: "default",
  },
  { 
    className: "justify-content-lg-center",
    category: "default",
  },
  { 
    className: "justify-content-lg-end",
    category: "default",
  },
  { 
    className: "justify-content-lg-start",
    category: "default",
  },
  { 
    className: "justify-content-md-around",
    category: "default",
  },
  { 
    className: "justify-content-md-between",
    category: "default",
  },
  { 
    className: "justify-content-md-center",
    category: "default",
  },
  { 
    className: "justify-content-md-end",
    category: "default",
  },
  { 
    className: "justify-content-md-start",
    category: "default",
  },
  { 
    className: "justify-content-sm-around",
    category: "default",
  },
  { 
    className: "justify-content-sm-between",
    category: "default",
  },
  { 
    className: "justify-content-sm-center",
    category: "default",
  },
  { 
    className: "justify-content-sm-end",
    category: "default",
  },
  { 
    className: "justify-content-sm-start",
    category: "default",
  },
  { 
    className: "justify-content-start",
    category: "default",
  },
  { 
    className: "justify-content-xl-around",
    category: "default",
  },
  { 
    className: "justify-content-xl-between",
    category: "default",
  },
  { 
    className: "justify-content-xl-center",
    category: "default",
  },
  { 
    className: "justify-content-xl-end",
    category: "default",
  },
  { 
    className: "justify-content-xl-start",
    category: "default",
  },
];

const CustomClassNameInspector2 = createHigherOrderComponent( ( BlockEdit ) => {
  return ( props ) => {
    if (props.name=='advanced-bootstrap-blocks/row'||props.name=='advanced-bootstrap-blocks/column') {
      if (props.name=='advanced-bootstrap-blocks/row') {
        customClassNames = customClassNamesRow;
      } else if (props.name=='advanced-bootstrap-blocks/column') {
        customClassNames = customClassNamesColumn;
      }
      props.attributes.classNameFilter = typeof props.attributes.classNameFilter !== "undefined" && props.attributes.classNameFilter.length ? props.attributes.classNameFilter : ""; 
      return (
        <Fragment>
          <BlockEdit { ...props } />
          <InspectorControls>
            <PanelBody
              title={ __( 'Bootstrap Classes', 'advanced-bootstrap-blocks' ) }
              initialOpen={false}
              >
              {
                props.attributes.className && 
                  <PanelRow title="Active Classes" className="my-0 flex-wrap justify-content-start">
                    
                  {
                    props.attributes.className
                    .split(" ")
                    .filter(item => item.trim() != '')
                    .map((item) => {
                      return (
                          <button
                            className="d-inline badge badge-primary border-0 font-weight-light mb-2 mr-2"
                            onClick={() =>  {
                                const classNameList = typeof props.attributes.className !== "undefined" ? props.attributes.className.split(" ") : []; 
                                if (classNameList.includes(item)) {
                                  props.setAttributes( { 
                                    className: classNameList.filter(name => name !== item).join(" ")
                                  } );
                                }
                              } 
                            }
                          >
                            {item} <i className="fa fa-close" aria-hidden="true"></i>
                          </button>
                      )
                    })
                  }
                  </PanelRow>
              }
              <PanelRow>
                <input 
                  id="classNameFilter"
                  type="text"
                  placeholder="Filter class names"
                  className="d-block w-100 mb-3"
                  onChange={e => props.setAttributes({ classNameFilter: e.target.value }) }
                />
              </PanelRow>
              
              {
                customClassNames
                  .filter(item => item.className.indexOf(props.attributes.classNameFilter) != -1 ? true : false )
                  .map((item) => {
                    return (
                      <PanelRow className="mt-0">
                        <label
                        >
                          <input 
                            type="checkbox" 
                            checked={
                              typeof props.attributes.className !== "undefined" && 
                              props.attributes.className.indexOf(item.className) != -1 ? true : false
                            }
                            onClick={() =>  {
                                const classNameList = typeof props.attributes.className !== "undefined" ? props.attributes.className.split(" ") : []; 
                                if (!classNameList.includes(item.className)) {
                                  props.setAttributes( { 
                                    className: [classNameList.join(" "), item.className].join(" ") 
                                  } );
                                } else {
                                  props.setAttributes( { 
                                    className: classNameList.filter(name => name !== item.className).join(" ")
                                  } );
                                }
                              } 
                            }
                          />
                          <small>{item.className}</small>
                        </label>
                      </PanelRow>
                    )
                  })
              }
            </PanelBody>
          </InspectorControls>
        </Fragment>
      );
    } else {
      return <BlockEdit { ...props } />; 
    }
  };
}, 'CustomClassNameInspector2' );
addFilter( 'editor.BlockEdit', 'advanced-custom-blocks/custom-classname-inspector-hide_classes', CustomClassNameInspector2 );
wp.hooks.removeFilter( 'editor.BlockEdit', 'advanced-custom-blocks/custom-classname-inspector' );

*/



