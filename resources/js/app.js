import './bootstrap';

var $ = require( "jquery" );
require( "smartwizard/dist/css/smart_wizard_all.css");
const smartWizard = require("smartwizard");

$(function() {
    $('#smartwizard').smartWizard();
});
