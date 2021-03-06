<?php 
/**
	Admin Page Framework v3.8.6 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/task-scheduler>
	Copyright (c) 2013-2016, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
abstract class TaskScheduler_AdminPageFramework_Form_View___CSS_Base extends TaskScheduler_AdminPageFramework_FrameworkUtility {
    public $aAdded = array();
    public function add($sCSSRules) {
        $this->aAdded[] = $sCSSRules;
    }
    public function get() {
        $_sCSSRules = $this->_get() . PHP_EOL;
        $_sCSSRules.= $this->_getVersionSpecific();
        $_sCSSRules.= implode(PHP_EOL, $this->aAdded);
        return $_sCSSRules;
    }
    protected function _get() {
        return '';
    }
    protected function _getVersionSpecific() {
        return '';
    }
}
class TaskScheduler_AdminPageFramework_Form_View___CSS_CollapsibleSection extends TaskScheduler_AdminPageFramework_Form_View___CSS_Base {
    protected function _get() {
        return $this->_getCollapsibleSectionsRules();
    }
    private function _getCollapsibleSectionsRules() {
        $_sCSSRules = ".task-scheduler-collapsible-sections-title.task-scheduler-collapsible-type-box, .task-scheduler-collapsible-section-title.task-scheduler-collapsible-type-box{font-size:13px;background-color: #fff;padding: 15px 18px;margin-top: 1em; border-top: 1px solid #eee;border-bottom: 1px solid #eee;}.task-scheduler-collapsible-sections-title.task-scheduler-collapsible-type-box.collapsed.task-scheduler-collapsible-section-title.task-scheduler-collapsible-type-box.collapsed {border-bottom: 1px solid #dfdfdf;margin-bottom: 1em; }.task-scheduler-collapsible-section-title.task-scheduler-collapsible-type-box {margin-top: 0;}.task-scheduler-collapsible-section-title.task-scheduler-collapsible-type-box.collapsed {margin-bottom: 0;}#poststuff .metabox-holder .task-scheduler-collapsible-sections-title.task-scheduler-collapsible-type-box.task-scheduler-section-title h3,#poststuff .metabox-holder .task-scheduler-collapsible-section-title.task-scheduler-collapsible-type-box.task-scheduler-section-title h3{font-size: 1em;margin: 0;}.task-scheduler-collapsible-sections-title.task-scheduler-collapsible-type-box.accordion-section-title:after,.task-scheduler-collapsible-section-title.task-scheduler-collapsible-type-box.accordion-section-title:after {top: 12px;right: 15px;}.task-scheduler-collapsible-sections-title.task-scheduler-collapsible-type-box.accordion-section-title:after,.task-scheduler-collapsible-section-title.task-scheduler-collapsible-type-box.accordion-section-title:after {content: '\\f142';}.task-scheduler-collapsible-sections-title.task-scheduler-collapsible-type-box.accordion-section-title.collapsed:after,.task-scheduler-collapsible-section-title.task-scheduler-collapsible-type-box.accordion-section-title.collapsed:after {content: '\\f140';} .task-scheduler-collapsible-sections-content.task-scheduler-collapsible-content.accordion-section-content,.task-scheduler-collapsible-section-content.task-scheduler-collapsible-content.accordion-section-content,.task-scheduler-collapsible-sections-content.task-scheduler-collapsible-content-type-box, .task-scheduler-collapsible-section-content.task-scheduler-collapsible-content-type-box{border: 1px solid #dfdfdf;border-top: 0;background-color: #fff;}tbody.task-scheduler-collapsible-content {display: table-caption; padding: 10px 20px 15px 20px;}tbody.task-scheduler-collapsible-content.table-caption {display: table-caption; }.task-scheduler-collapsible-toggle-all-button-container {margin-top: 1em;margin-bottom: 1em;width: 100%;display: table; }.task-scheduler-collapsible-toggle-all-button.button {height: 36px;line-height: 34px;padding: 0 16px 6px;font-size: 20px;width: auto;}.flipped > .task-scheduler-collapsible-toggle-all-button.button.dashicons {-moz-transform: scaleY(-1);-webkit-transform: scaleY(-1);transform: scaleY(-1);filter: flipv; }.task-scheduler-collapsible-section-title.task-scheduler-collapsible-type-box .task-scheduler-repeatable-section-buttons {margin: 0;margin-right: 2em; margin-top: -0.32em;}.task-scheduler-collapsible-section-title.task-scheduler-collapsible-type-box .task-scheduler-repeatable-section-buttons.section_title_field_sibling {margin-top: 0;}.task-scheduler-collapsible-section-title.task-scheduler-collapsible-type-box .repeatable-section-button {background: none; }.accordion-section-content.task-scheduler-collapsible-content-type-button {background-color: transparent;}.task-scheduler-collapsible-button {color: #888;margin-right: 0.4em;font-size: 0.8em;}.task-scheduler-collapsible-button-collapse {display: inline;} .collapsed > * > .task-scheduler-collapsible-button-collapse {display: none;}.task-scheduler-collapsible-button-expand {display: none;}.collapsed > * > .task-scheduler-collapsible-button-expand {display: inline;}.task-scheduler-collapsible-section-title .task-scheduler-fields {display: inline;}.task-scheduler-collapsible-section-title .task-scheduler-field {float: none;}.task-scheduler-collapsible-section-title .task-scheduler-fieldset {display: inline;margin-right: 1em;}";
        if (version_compare($GLOBALS['wp_version'], '3.8', '<')) {
            $_sCSSRules.= ".task-scheduler-collapsible-sections-title.task-scheduler-collapsible-type-box.accordion-section-title:after,.task-scheduler-collapsible-section-title.task-scheduler-collapsible-type-box.accordion-section-title:after {content: '';top: 18px;}.task-scheduler-collapsible-sections-title.task-scheduler-collapsible-type-box.accordion-section-title.collapsed:after,.task-scheduler-collapsible-section-title.task-scheduler-collapsible-type-box.accordion-section-title.collapsed:after {content: '';} .task-scheduler-collapsible-toggle-all-button.button {font-size: 1em;}.task-scheduler-collapsible-section-title.task-scheduler-collapsible-type-box .task-scheduler-repeatable-section-buttons {top: -8px;}";
        }
        return $_sCSSRules;
    }
}
