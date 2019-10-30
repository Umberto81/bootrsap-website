/**
 * Adobe Edge: symbol definitions
 */
(function($, Edge, compId){
//images folder
var im='images/';

var fonts = {};    fonts['french-canon-small-caps, serif']='<script src=\"http://use.edgefonts.net/french-canon-small-caps:n4:all.js\"></script>';

var opts = {
    'gAudioPreloadPreference': 'auto',

    'gVideoPreloadPreference': 'auto'
};
var resources = [
];
var symbols = {
"stage": {
    version: "4.0.0",
    minimumCompatibleVersion: "4.0.0",
    build: "4.0.0.359",
    baseState: "Base State",
    scaleToFit: "width",
    centerStage: "horizontal",
    initialState: "Base State",
    gpuAccelerate: false,
    resizeInstances: false,
    content: {
            dom: [
            {
                id: '_122',
                type: 'image',
                rect: ['-1255px', '-727px','3060px','1044px','auto', 'auto'],
                fill: ["rgba(0,0,0,0)",im+"122.jpg",'0px','0px'],
                transform: [[],[],[],['0.17973','0.38331']]
            },
            {
                id: 'Rectangle',
                type: 'rect',
                rect: ['560px', '139px','550px','92px','auto', 'auto'],
                opacity: 0.36296296870267,
                fill: ["rgba(192,192,192,1)"],
                stroke: [0,"rgba(0,0,0,1)","none"]
            },
            {
                id: 'Text',
                type: 'text',
                rect: ['-411px', '160px','550px','92px','auto', 'auto'],
                text: "MATTIA LO CASCIO",
                align: "center",
                font: ['french-canon-small-caps, serif', [1.5, "em"], "rgba(146,107,33,1.00)", "normal", "none", ""]
            }],
            symbolInstances: [

            ]
        },
    states: {
        "Base State": {
            "${_Stage}": [
                ["color", "background-color", 'rgba(255,255,255,1)'],
                ["style", "overflow", 'hidden'],
                ["style", "height", '400px'],
                ["style", "width", '550px']
            ],
            "${_Rectangle}": [
                ["style", "top", '166px'],
                ["style", "opacity", '0.19999999823394'],
                ["style", "left", '560px'],
                ["style", "height", '67px']
            ],
            "${_Text}": [
                ["style", "letter-spacing", '0.17em'],
                ["subproperty", "filter.contrast", '1.01'],
                ["color", "color", 'rgba(150,106,87,1.00)'],
                ["style", "left", '-467px'],
                ["style", "font-size", '1.97em'],
                ["style", "top", '174px'],
                ["style", "text-align", 'center'],
                ["style", "height", '59px'],
                ["style", "font-family", 'french-canon-small-caps, serif']
            ],
            "${__122}": [
                ["style", "top", '-727px'],
                ["transform", "scaleY", '0.38331'],
                ["transform", "scaleX", '0.17973'],
                ["style", "height", '1044px'],
                ["style", "left", '-1255px'],
                ["style", "width", '3060px']
            ]
        }
    },
    timelines: {
        "Default Timeline": {
            fromState: "Base State",
            toState: "",
            duration: 2000,
            autoPlay: true,
            timeline: [
                { id: "eid26", tween: [ "subproperty", "${_Text}", "filter.contrast", '1.01', { fromValue: '1.01'}], position: 2000, duration: 0, easing: "easeInCubic" },
                { id: "eid16", tween: [ "style", "${__122}", "top", '-322px', { fromValue: '-727px'}], position: 0, duration: 2000 },
                { id: "eid1", tween: [ "style", "${_Rectangle}", "left", '1px', { fromValue: '560px'}], position: 0, duration: 2000 },
                { id: "eid14", tween: [ "style", "${_Rectangle}", "height", '67px', { fromValue: '67px'}], position: 2000, duration: 0 },
                { id: "eid27", tween: [ "style", "${_Text}", "height", '59px', { fromValue: '59px'}], position: 2000, duration: 0, easing: "easeInCubic" },
                { id: "eid13", tween: [ "style", "${_Text}", "letter-spacing", '0.17em', { fromValue: '0.17em'}], position: 2000, duration: 0 },
                { id: "eid7", tween: [ "style", "${_Text}", "top", '174px', { fromValue: '174px'}], position: 2000, duration: 0 },
                { id: "eid12", tween: [ "style", "${_Text}", "font-size", '1.97em', { fromValue: '1.97em'}], position: 2000, duration: 0 },
                { id: "eid11", tween: [ "style", "${_Rectangle}", "opacity", '0.19999999823394', { fromValue: '0.19999999823394'}], position: 2000, duration: 0 },
                { id: "eid2", tween: [ "style", "${_Text}", "left", '1px', { fromValue: '-467px'}], position: 0, duration: 2000, easing: "easeInCubic" },
                { id: "eid29", tween: [ "color", "${_Text}", "color", 'rgba(150,106,87,1.00)', { animationColorSpace: 'RGB', valueTemplate: undefined, fromValue: 'rgba(150,106,87,1.00)'}], position: 2000, duration: 0 },
                { id: "eid15", tween: [ "style", "${_Rectangle}", "top", '166px', { fromValue: '166px'}], position: 2000, duration: 0 }            ]
        }
    }
}
};


Edge.registerCompositionDefn(compId, symbols, fonts, resources, opts);

/**
 * Adobe Edge DOM Ready Event Handler
 */
$(window).ready(function() {
     Edge.launchComposition(compId);
});
})(jQuery, AdobeEdge, "EDGE-7675682");
