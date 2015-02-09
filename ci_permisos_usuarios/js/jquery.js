/**
 * @since 1.7
 */
event.delegateTarget = new Element();

/**
 * Determine if the callbacks have already been called at least once.
 *
 * @since 1.7
 */
Callbacks.fired =  function() {
 return true;
};

/**
 * An optional list of space-separated flags that change how the callback list behaves.
 *
 * @param {String} flags An optional list of space-separated flags that change how the callback list behaves.
 * @since 1.7
 */
jQuery.Callbacks =  function(flags) {
 return new Callbacks();
};

/**
 * An optional list of space-separated flags that change how the callback list behaves.
 *
 * @param {String} flags An optional list of space-separated flags that change how the callback list behaves.
 * @since 1.7
 */
$.Callbacks =  function(flags) {
 return new Callbacks();
};

/**
 * Determine if the callbacks list has been locked.
 *
 * @since 1.7
 */
Callbacks.locked =  function() {
 return true;
};

/**
 * Remove all of the callbacks from a list.
 *
 * @since 1.7
 */
Callbacks.empty =  function() {
 return undefined;
};

/**
 * Lock a callback list in its current state.
 *
 * @since 1.7
 */
Callbacks.lock =  function() {
 return undefined;
};

/**
 * The argument or list of arguments to pass back to the callback list.
 *
 * @param {} arguments The argument or list of arguments to pass back to the callback list.
 * @since 1.7
 */
Callbacks.fire =  function(arguments) {
 return undefined;
};

/**
 * A function, or array of functions, that are to be removed from the callback list.
 *
 * @param {Function} callbacks A function, or array of functions, that are to be removed from the callback list.
 * @since 1.7
 */
Callbacks.remove =  function(callbacks) {
 return undefined;
};

/**
 * A function, or array of functions, that are to be added to the callback list.
 *
 * @param {Function} callbacks A function, or array of functions, that are to be added to the callback list.
 * @since 1.7
 */
Callbacks.add =  function(callbacks) {
 return undefined;
};

/**
 * Disable a callback list from doing anything more.
 *
 * @since 1.7
 */
Callbacks.disable =  function() {
 return undefined;
};

/**
 * The callback to search for.
 *
 * @param {Function} callback The callback to search for.
 * @since 1.7
 */
Callbacks.has =  function(callback) {
 return true;
};

/**
 * A reference to the context in which the callbacks in the list should be fired.
 *
 * @param {} context A reference to the context in which the callbacks in the list should be fired.
 * @param {} args An argument, or array of arguments, to pass to the callbacks in the list.
 * @since 1.7
 */
Callbacks.fireWith =  function(context, args) {
 return undefined;
};

/**
 * 
        A function, or array of functions, that is called when the Deferred generates progress notifications.
      
 *
 * @param {Function} progressCallbacks 
        A function, or array of functions, that is called when the Deferred generates progress notifications.
      
 * @since 1.7
 */
Deferred.progress =  function(progressCallbacks) {
 return new Deferred();
};

/**
 * 
             Context passed to the progressCallbacks as the this object.
           
 *
 * @param {Object} context 
             Context passed to the progressCallbacks as the this object.
           
 * @param {Object} args 
             Optional arguments that are passed to the progressCallbacks.
           
 * @since 1.7
 */
Deferred.notifyWith =  function(context, args) {
 return new Deferred();
};

/**
 * 
             Optional arguments that are passed to the progressCallbacks.
           
 *
 * @param {Object} args 
             Optional arguments that are passed to the progressCallbacks.
           
 * @since 1.7
 */
Deferred.notify =  function(args) {
 return new Deferred();
};

/**
 * Remove an event handler.
 *
 * @param {String} events One or more space-separated event types and optional namespaces, or just namespaces, such as "click", "keydown.myPlugin", or ".myPlugin".
 * @param {String} selector A selector which should match the one originally passed to .on() when attaching event handlers.
 * @param {Function} handler A handler function previously attached for the event(s), or the special value false.
 * @since 1.7
 */
jQuery.prototype.off = function(events, selector, handler) {
 return new jQuery();
};

/**
 * Remove an event handler.
 *
 * @param {Map} eventsmap events-map A map where the string keys represent one or more space-separated event types and optional namespaces, and the values represent handler functions previously attached for the event(s).
 * @param {String} selector A selector which should match the one originally passed to .on() when attaching event handlers.
 * @since 1.7
 */
jQuery.prototype.off = function(eventsmap, selector) {
 return new jQuery();
};

/**
 * Determine the current state of a Deferred object. 
 *
 * @since 1.7
 */
Deferred.state =  function() {
 return "";
};

/**
 * Attach an event handler function for one or more events to the selected elements.
 *
 * @param {String} events One or more space-separated event types and optional namespaces, such as "click" or "keydown.myPlugin".
 * @param {String} selector A selector string to filter the descendants of the selected elements that trigger the event. If the selector is null or omitted, the event is always triggered when it reaches the selected element.
 * @param {Anything} data Data to be passed to the handler in event.data when an event is triggered.
 * @param {Function} handler A function to execute when the event is triggered. The value false is also allowed as a shorthand for a function that simply does return false.
 * @since 1.7
 */
jQuery.prototype.on = function(events, selector, data, handler) {
 return new jQuery();
};

/**
 * Attach an event handler function for one or more events to the selected elements.
 *
 * @param {Map} eventsmap events-map A map in which the string keys represent one or more space-separated event types and optional namespaces, and the values represent a handler function to be called for the event(s).
 * @param {String} selector A selector string to filter the descendants of the selected elements that will call the handler. If the selector is null or omitted, the handler is always called when it reaches the selected element.
 * @param {Anything} data Data to be passed to the handler in event.data when an event occurs.
 * @since 1.7
 */
jQuery.prototype.on = function(eventsmap, selector, data) {
 return new jQuery();
};

/**
 * Determines whether its argument is a number.
 *
 * @param {Object} value The value to be tested.
 * @since 1.7
 */
jQuery.isNumeric =  function(value) {
 return true;
};

/**
 * Determines whether its argument is a number.
 *
 * @param {Object} value The value to be tested.
 * @since 1.7
 */
$.isNumeric =  function(value) {
 return true;
};


/**
 * 
        An optional function that is called when the Deferred is resolved.
      
 *
 * @param {Function} doneFilter 
        An optional function that is called when the Deferred is resolved.
      
 * @param {Function} failFilter 
        An optional function that is called when the Deferred is rejected.
      
 * @since 1.6
 */
Deferred.pipe =  function(doneFilter, failFilter) {
 return new Promise();
};

/**
 * 
        An optional function that is called when the Deferred is resolved.
      
 *
 * @param {Function} doneFilter 
        An optional function that is called when the Deferred is resolved.
      
 * @param {Function} failFilter 
        An optional function that is called when the Deferred is rejected.
      
 * @param {Function} progressFilter 
        An optional function that is called when progress notifications are sent to the Deferred.
      
 * @since 1.7
 */
Deferred.pipe =  function(doneFilter, failFilter, progressFilter) {
 return new Promise();
};

/**
 * 
        A function, or array of functions, that is called when the Deferred is resolved or rejected.
      
 *
 * @param {Function} alwaysCallbacks 
        A function, or array of functions, that is called when the Deferred is resolved or rejected.
      
 * @param {Function} alwaysCallbacks 
        Optional additional functions, or arrays of functions, that are called when the Deferred is resolved or rejected.
      
 * @since 1.6
 */
Deferred.always =  function(alwaysCallbacks, alwaysCallbacks) {
 return new Deferred();
};

/**
 *  The type of queue that needs to be observed. 
 *
 * @param {String} type  The type of queue that needs to be observed. 
 * @param {Object} target Object onto which the promise methods have to be attached
 * @since 1.6
 */
jQuery.prototype.promise = function(type, target) {
 return new Promise();
};

/**
 * The name of the property to set.
 *
 * @param {String} propertyName The name of the property to set.
 * @since 1.6
 */
jQuery.prototype.removeProp = function(propertyName) {
 return new jQuery();
};

/**
 * The name of the property to get.
 *
 * @param {String} propertyName The name of the property to get.
 * @since 1.6
 */
jQuery.prototype.prop = function(propertyName) {
 return "";
};

/**
 * The name of the property to set.
 *
 * @param {String} propertyName The name of the property to set.
 * @param {String; Number; Boolean} value A value to set for the property.
 * @since 1.6
 */
jQuery.prototype.prop = function(propertyName, value) {
 return new jQuery();
};

/**
 * The name of the property to set.
 *
 * @param {Map} map A map of property-value pairs to set.
 * @since 1.6
 */
jQuery.prototype.prop = function(map) {
 return new jQuery();
};

/**
 * The name of the property to set.
 *
 * @param {String} propertyName The name of the property to set.
 * @param {Function} func function(index, oldPropertyValue) A function returning the value to set. Receives the index position of the element in the set and the old property value as arguments. Within the function, the keyword this refers to the current element.
 * @since 1.6
 */
jQuery.prototype.prop = function(propertyName, func) {
 return new jQuery();
};

/**
 * Handle custom Ajax options or modify existing options before each request is sent and before they are processed by $.ajax().
 *
 * @param {String} dataTypes An optional string containing one or more space-separated dataTypes
 * @param {Function} handler handler(options, originalOptions, jqXHR) A handler to set default values for future Ajax requests.
 * @since 1.5
 */
jQuery.ajaxPrefilter =  function(dataTypes, handler) {
 return undefined;
};

/**
 * Handle custom Ajax options or modify existing options before each request is sent and before they are processed by $.ajax().
 *
 * @param {String} dataTypes An optional string containing one or more space-separated dataTypes
 * @param {Function} handler handler(options, originalOptions, jqXHR) A handler to set default values for future Ajax requests.
 * @since 1.5
 */
$.ajaxPrefilter =  function(dataTypes, handler) {
 return undefined;
};

/**
 * Holds or releases the execution of jQuery's ready event.
 *
 * @param {Boolean} hold Indicates whether the ready hold is being requested or released
 * @since 1.6
 */
jQuery.holdReady =  function(hold) {
 return undefined;
};

/**
 * Holds or releases the execution of jQuery's ready event.
 *
 * @param {Boolean} hold Indicates whether the ready hold is being requested or released
 * @since 1.6
 */
$.holdReady =  function(hold) {
 return undefined;
};

/**
 * A DOM element to be checked for data.
 *
 * @param {Element} element A DOM element to be checked for data.
 * @since 1.5
 */
jQuery.hasData =  function(element) {
 return true;
};

/**
 * A DOM element to be checked for data.
 *
 * @param {Element} element A DOM element to be checked for data.
 * @since 1.5
 */
$.hasData =  function(element) {
 return true;
};

/**
 * Return a number representing the current time.
 *
 * @since 1.4.3
 */
jQuery.now =  function() {
 return 1;
};

/**
 * Return a number representing the current time.
 *
 * @since 1.4.3
 */
$.now =  function() {
 return 1;
};

/**
 * @since 1.0
 */
jquery = "";

/**
 * Object onto which the promise methods have to be attached
 *
 * @param {Object} target Object onto which the promise methods have to be attached
 * @since 1.5
 */
Deferred.promise =  function(target) {
 return new Promise();
};

/**
 * @since 1.4.3
 */
jQuery.cssHooks = new Object();

/**
 * @since 1.4.3
 */
$.cssHooks = new Object();

/**
 * Parses a string into an XML document.
 *
 * @param {String} data a well-formed XML string to be parsed
 * @since 1.5
 */
jQuery.parseXML =  function(data) {
 return new XMLDocument();
};

/**
 * Parses a string into an XML document.
 *
 * @param {String} data a well-formed XML string to be parsed
 * @since 1.5
 */
$.parseXML =  function(data) {
 return new XMLDocument();
};

/**
 * One or more Deferred objects, or plain JavaScript objects.
 *
 * @param {Deferred} deferreds One or more Deferred objects, or plain JavaScript objects.
 * @since 1.5
 */
jQuery.when =  function(deferreds) {
 return new Promise();
};

/**
 * One or more Deferred objects, or plain JavaScript objects.
 *
 * @param {Deferred} deferreds One or more Deferred objects, or plain JavaScript objects.
 * @since 1.5
 */
$.when =  function(deferreds) {
 return new Promise();
};

/**
 * 
             Context passed to the doneCallbacks as the this object.
           
 *
 * @param {Object} context 
             Context passed to the doneCallbacks as the this object.
           
 * @param {Array} args 
             An optional array of arguments that are passed to the doneCallbacks.
           
 * @since 1.5
 */
Deferred.resolveWith =  function(context, args) {
 return new Deferred();
};

/**
 * 
             Context passed to the failCallbacks as the this object.
           
 *
 * @param {Object} context 
             Context passed to the failCallbacks as the this object.
           
 * @param {Array} args 
             An optional array of arguments that are passed to the failCallbacks.
           
 * @since 1.5
 */
Deferred.rejectWith =  function(context, args) {
 return new Deferred();
};

/**
 * 
             A function, or array of functions, that are called when the Deferred is rejected.
           
 *
 * @param {Function} failCallbacks 
             A function, or array of functions, that are called when the Deferred is rejected.
           
 * @param {Function} failCallbacks 
             Optional additional functions, or arrays of functions, that are called when the Deferred is rejected.
           
 * @since 1.5
 */
Deferred.fail =  function(failCallbacks, failCallbacks) {
 return new Deferred();
};

/**
 * 
             A function, or array of functions, that are called when the Deferred is resolved.
           
 *
 * @param {Function} doneCallbacks 
             A function, or array of functions, that are called when the Deferred is resolved.
           
 * @param {Function} doneCallbacks 
             Optional additional functions, or arrays of functions, that are called when the Deferred is resolved.
           
 * @since 1.5
 */
Deferred.done =  function(doneCallbacks, doneCallbacks) {
 return new Deferred();
};

/**
 * 
             A function, or array of functions, called when the Deferred is resolved.
           
 *
 * @param {Function} doneCallbacks 
             A function, or array of functions, called when the Deferred is resolved.
           
 * @param {Function} failCallbacks 
             A function, or array of functions, called when the Deferred is rejected.
           
 * @since 1.5
 */
Deferred.then =  function(doneCallbacks, failCallbacks) {
 return new Deferred();
};

/**
 * 
             A function, or array of functions, called when the Deferred is resolved.
           
 *
 * @param {Function} doneCallbacks 
             A function, or array of functions, called when the Deferred is resolved.
           
 * @param {Function} failCallbacks 
             A function, or array of functions, called when the Deferred is rejected.
           
 * @param {Function} progressCallbacks 
             A function, or array of functions, called when the Deferred notifies progress.
           
 * @since 1.7
 */
Deferred.then =  function(doneCallbacks, failCallbacks, progressCallbacks) {
 return new Deferred();
};

/**
 * 
             Optional arguments that are passed to the failCallbacks.
           
 *
 * @param {Object} args 
             Optional arguments that are passed to the failCallbacks.
           
 * @since 1.5
 */
Deferred.reject =  function(args) {
 return new Deferred();
};

/**
 *  Determine whether a Deferred object has been rejected. 
 *
 * @since 1.5
 */
Deferred.isRejected =  function() {
 return true;
};

/**
 *  Determine whether a Deferred object has been resolved. 
 *
 * @since 1.5
 */
Deferred.isResolved =  function() {
 return true;
};

/**
 * 
             Optional arguments that are passed to the doneCallbacks.
           
 *
 * @param {Object} args 
             Optional arguments that are passed to the doneCallbacks.
           
 * @since 1.5
 */
Deferred.resolve =  function(args) {
 return new Deferred();
};

/**
 * Creates a new copy of jQuery whose properties and methods can be modified without affecting the original jQuery object.
 *
 * @since 1.5
 */
jQuery.sub =  function() {
 return new jQuery();
};

/**
 * Creates a new copy of jQuery whose properties and methods can be modified without affecting the original jQuery object.
 *
 * @since 1.5
 */
$.sub =  function() {
 return new jQuery();
};

/**
 * Display or hide the matched elements by animating their opacity.
 *
 * @param {String;Number} duration A string or number determining how long the animation will run.
 * @param {String} easing A string indicating which easing function to use for the transition.
 * @param {Function} callback A function to call once the animation is complete.
 * @since 1.4.4
 */
jQuery.prototype.fadeToggle = function(duration, easing, callback) {
 return new jQuery();
};

/**
 * Object to get the internal JavaScript [[Class]] of.
 *
 * @param {Object} obj Object to get the internal JavaScript [[Class]] of.
 * @since 1.4.3
 */
jQuery.type =  function(obj) {
 return "";
};

/**
 * Object to get the internal JavaScript [[Class]] of.
 *
 * @param {Object} obj Object to get the internal JavaScript [[Class]] of.
 * @since 1.4.3
 */
$.type =  function(obj) {
 return "";
};

/**
 * Object to test whether or not it is a window.
 *
 * @param {Object} obj Object to test whether or not it is a window.
 * @since 1.4.3
 */
jQuery.isWindow =  function(obj) {
 return true;
};

/**
 * Object to test whether or not it is a window.
 *
 * @param {Object} obj Object to test whether or not it is a window.
 * @since 1.4.3
 */
$.isWindow =  function(obj) {
 return true;
};

/**
 * Bind two or more handlers to the matched elements, to be executed on alternate clicks.
 *
 * @param {Function} handler handler(eventObject) A function to execute every even time the element is clicked.
 * @param {Function} handler1 handler(eventObject) A function to execute every odd time the element is clicked.
 * @param {Function} handler2 handler(eventObject) Additional handlers to cycle through after clicks.
 * @since 1.0
 */
jQuery.prototype.toggle = function(handler, handler1, handler2) {
 return new jQuery();
};

/**
 * @since 1.4.3
 */
jQuery.fx.interval = 1;

/**
 * @since 1.4.3
 */
$.fx.interval = 1;

/**
 * @since 1.4.3
 */
event.namespace = "";

/**
 * Remove a handler from the event for all elements which match the current selector, based upon a specific set of root elements.
 *
 * @since 1.4.2
 */
jQuery.prototype.undelegate = function() {
 return new jQuery();
};

/**
 * Remove a handler from the event for all elements which match the current selector, based upon a specific set of root elements.
 *
 * @param {String} selector A selector which will be used to filter the event results.
 * @param {String} eventType A string containing a JavaScript event type, such as "click" or "keydown"
 * @since 1.4.2
 */
jQuery.prototype.undelegate = function(selector, eventType) {
 return new jQuery();
};

/**
 * Remove a handler from the event for all elements which match the current selector, based upon a specific set of root elements.
 *
 * @param {String} selector A selector which will be used to filter the event results.
 * @param {String} eventType A string containing a JavaScript event type, such as "click" or "keydown"
 * @param {Function} handler A function to execute at the time the event is triggered.
 * @since 1.4.2
 */
jQuery.prototype.undelegate = function(selector, eventType, handler) {
 return new jQuery();
};

/**
 * Remove a handler from the event for all elements which match the current selector, based upon a specific set of root elements.
 *
 * @param {String} selector A selector which will be used to filter the event results.
 * @param {Map} events A map of one or more event types and previously bound functions to unbind from them.
 * @since 1.4.3
 */
jQuery.prototype.undelegate = function(selector, events) {
 return new jQuery();
};

/**
 * Remove a handler from the event for all elements which match the current selector, based upon a specific set of root elements.
 *
 * @param {String} namespace A string containing a namespace to unbind all events from.
 * @since 1.6
 */
jQuery.prototype.undelegate = function(namespace) {
 return new jQuery();
};

/**
 * Attach a handler to one or more events for all elements that match the selector, now or in the future, based on a specific set of root elements.
 *
 * @param {String} selector A selector to filter the elements that trigger the event.
 * @param {String} eventType A string containing one or more space-separated JavaScript event types, such as "click" or "keydown," or custom event names.
 * @param {Function} handler A function to execute at the time the event is triggered.
 * @since 1.4.2
 */
jQuery.prototype.delegate = function(selector, eventType, handler) {
 return new jQuery();
};

/**
 * Attach a handler to one or more events for all elements that match the selector, now or in the future, based on a specific set of root elements.
 *
 * @param {String} selector A selector to filter the elements that trigger the event.
 * @param {String} eventType A string containing one or more space-separated JavaScript event types, such as "click" or "keydown," or custom event names.
 * @param {Object} eventData A map of data that will be passed to the event handler.
 * @param {Function} handler A function to execute at the time the event is triggered.
 * @since 1.4.2
 */
jQuery.prototype.delegate = function(selector, eventType, eventData, handler) {
 return new jQuery();
};

/**
 * Attach a handler to one or more events for all elements that match the selector, now or in the future, based on a specific set of root elements.
 *
 * @param {String} selector A selector to filter the elements that trigger the event.
 * @param {Map} events A map of one or more event types and functions to execute for them.
 * @since 1.4.3
 */
jQuery.prototype.delegate = function(selector, events) {
 return new jQuery();
};

/**
 * The message to send out.
 *
 * @param {String} message The message to send out.
 * @since 1.4.1
 */
jQuery.error =  function(message) {
};

/**
 * The message to send out.
 *
 * @param {String} message The message to send out.
 * @since 1.4.1
 */
$.error =  function(message) {
};

/**
 * The JSON string to parse.
 *
 * @param {String} json The JSON string to parse.
 * @since 1.4.1
 */
jQuery.parseJSON =  function(json) {
 return new Object();
};

/**
 * The JSON string to parse.
 *
 * @param {String} json The JSON string to parse.
 * @since 1.4.1
 */
$.parseJSON =  function(json) {
 return new Object();
};

/**
 * The function whose context will be changed.
 *
 * @param {Function} func function The function whose context will be changed.
 * @param {Object} context The object to which the context (this) of the function should be set.
 * @since 1.4
 */
jQuery.proxy =  function(func, context) {
 return function() {};
};

/**
 * The function whose context will be changed.
 *
 * @param {Function} func function The function whose context will be changed.
 * @param {Object} context The object to which the context (this) of the function should be set.
 * @since 1.4
 */
$.proxy =  function(func, context) {
 return function() {};
};

/**
 * The function whose context will be changed.
 *
 * @param {Object} context The object to which the context of the function should be set.
 * @param {String} name The name of the function whose context will be changed (should be a property of the context object).
 * @since 1.4
 */
jQuery.proxy =  function(context, name) {
 return function() {};
};

/**
 * The function whose context will be changed.
 *
 * @param {Object} context The object to which the context of the function should be set.
 * @param {String} name The name of the function whose context will be changed (should be a property of the context object).
 * @since 1.4
 */
$.proxy =  function(context, name) {
 return function() {};
};

/**
 * Bind an event handler to the "focusout" JavaScript event.
 *
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.4
 */
jQuery.prototype.focusout = function(handler) {
 return new jQuery();
};

/**
 * Bind an event handler to the "focusout" JavaScript event.
 *
 * @param {Object} eventData A map of data that will be passed to the event handler.
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.4.3
 */
jQuery.prototype.focusout = function(eventData, handler) {
 return new jQuery();
};

/**
 * Bind an event handler to the "focusin" event.
 *
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.4
 */
jQuery.prototype.focusin = function(handler) {
 return new jQuery();
};

/**
 * Bind an event handler to the "focusin" event.
 *
 * @param {Object} eventData A map of data that will be passed to the event handler.
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.4.3
 */
jQuery.prototype.focusin = function(eventData, handler) {
 return new jQuery();
};

/**
 * A string containing a selector expression to match elements against.
 *
 * @param {String} selector A string containing a selector expression to match elements against.
 * @since 1.4
 */
jQuery.prototype.has = function(selector) {
 return new jQuery();
};

/**
 * A string containing a selector expression to match elements against.
 *
 * @param {Element} contained A DOM element to match elements against.
 * @since 1.4
 */
jQuery.prototype.has = function(contained) {
 return new jQuery();
};

/**
 * The DOM element that may contain the other element.
 *
 * @param {Element} container The DOM element that may contain the other element.
 * @param {Element} contained The DOM element that may be contained by the other element.
 * @since 1.4
 */
jQuery.contains =  function(container, contained) {
 return true;
};

/**
 * The DOM element that may contain the other element.
 *
 * @param {Element} container The DOM element that may contain the other element.
 * @param {Element} contained The DOM element that may be contained by the other element.
 * @since 1.4
 */
$.contains =  function(container, contained) {
 return true;
};

/**
 * An empty function.
 *
 * @since 1.4
 */
jQuery.noop =  function() {
 return function() {};
};

/**
 * An empty function.
 *
 * @since 1.4
 */
$.noop =  function() {
 return function() {};
};

/**
 * An integer indicating the number of milliseconds to delay execution of the next item in the queue.
 *
 * @param {Integer} duration An integer indicating the number of milliseconds to delay execution of the next item in the queue.
 * @param {String} queueName A string containing the name of the queue. Defaults to fx, the standard effects queue.
 * @since 1.4
 */
jQuery.prototype.delay = function(duration, queueName) {
 return new jQuery();
};

/**
 * A string containing a selector expression to indicate where to stop matching ancestor elements.
 *
 * @param {Selector} selector A string containing a selector expression to indicate where to stop matching ancestor elements.
 * @param {Selector} filter A string containing a selector expression to match elements against.
 * @since 1.4
 */
jQuery.prototype.parentsUntil = function(selector, filter) {
 return new jQuery();
};

/**
 * A string containing a selector expression to indicate where to stop matching ancestor elements.
 *
 * @param {Element} element A DOM node or jQuery object indicating where to stop matching ancestor elements.
 * @param {Selector} filter A string containing a selector expression to match elements against.
 * @since 1.6
 */
jQuery.prototype.parentsUntil = function(element, filter) {
 return new jQuery();
};

/**
 * A string containing a selector expression to indicate where to stop matching preceding sibling elements.
 *
 * @param {Selector} selector A string containing a selector expression to indicate where to stop matching preceding sibling elements.
 * @param {Selector} filter A string containing a selector expression to match elements against.
 * @since 1.4
 */
jQuery.prototype.prevUntil = function(selector, filter) {
 return new jQuery();
};

/**
 * A string containing a selector expression to indicate where to stop matching preceding sibling elements.
 *
 * @param {Element} element A DOM node or jQuery object indicating where to stop matching preceding sibling elements.
 * @param {Selector} filter A string containing a selector expression to match elements against.
 * @since 1.6
 */
jQuery.prototype.prevUntil = function(element, filter) {
 return new jQuery();
};

/**
 * A string containing a selector expression to indicate where to stop matching following sibling elements.
 *
 * @param {Selector} selector A string containing a selector expression to indicate where to stop matching following sibling elements.
 * @param {Selector} filter A string containing a selector expression to match elements against.
 * @since 1.4
 */
jQuery.prototype.nextUntil = function(selector, filter) {
 return new jQuery();
};

/**
 * A string containing a selector expression to indicate where to stop matching following sibling elements.
 *
 * @param {Element} element A DOM node or jQuery object indicating where to stop matching following sibling elements.
 * @param {Selector} filter A string containing a selector expression to match elements against.
 * @since 1.6
 */
jQuery.prototype.nextUntil = function(element, filter) {
 return new jQuery();
};

/**
 *   Returns whether event.stopImmediatePropagation() was ever called on this event object. 
 *
 * @since 1.3
 */
event.isImmediatePropagationStopped =  function() {
 return true;
};

/**
 *  Keeps the rest of the handlers from being executed and prevents the event from bubbling up the DOM tree.
  
 *
 * @since 1.3
 */
event.stopImmediatePropagation =  function() {
};

/**
 *   Returns whether event.stopPropagation() was ever called on this event object. 
 *
 * @since 1.3
 */
event.isPropagationStopped =  function() {
 return true;
};

/**
 * Prevents the event from bubbling up the DOM tree, preventing any parent handlers from being notified of the event.   
 *
 * @since 1.0
 */
event.stopPropagation =  function() {
};

/**
 * Returns whether event.preventDefault() was ever called on this event object. 
 *
 * @since 1.3
 */
event.isDefaultPrevented =  function() {
 return true;
};

/**
 *  If this method is called, the default action of the event will not be triggered. 
 *
 * @since 1.0
 */
event.preventDefault =  function() {
 return undefined;
};

/**
 * @since 1.2.6
 */
event.timeStamp = 1;

/**
 * @since 1.3
 */
event.result = new Object();

/**
 * @since 1.1.3
 */
event.which = 1;

/**
 * @since 1.0.4
 */
event.pageY = 1;

/**
 * @since 1.0.4
 */
event.pageX = 1;

/**
 * @since 1.3
 */
event.currentTarget = new Element();

/**
 * @since 1.1.4
 */
event.relatedTarget = new Element();

/**
 * @since 1.1
 */
event.data = new Object();

/**
 * @since 1.0
 */
event.target = new Element();

/**
 * @since 1.0
 */
event.type = "";

/**
 * @since 1.3
 */
jQuery.fx.off = true;

/**
 * @since 1.3
 */
$.fx.off = true;

/**
 * A function to execute for each matched element.
 *
 * @param {Function} func function(index, Element) A function to execute for each matched element.
 * @since 1.0
 */
jQuery.prototype.each = function(func) {
 return new jQuery();
};

/**
 * An array of elements to push onto the stack and make into a new jQuery object.
 *
 * @param {Array} elements An array of elements to push onto the stack and make into a new jQuery object.
 * @since 1.0
 */
jQuery.prototype.pushStack = function(elements) {
 return new jQuery();
};

/**
 * An array of elements to push onto the stack and make into a new jQuery object.
 *
 * @param {Array} elements An array of elements to push onto the stack and make into a new jQuery object.
 * @param {String} name The name of a jQuery method that generated the array of elements.
 * @param {Array} arguments The arguments that were passed in to the jQuery method (for serialization).
 * @since 1.3
 */
jQuery.prototype.pushStack = function(elements, name, arguments) {
 return new jQuery();
};

/**
 * The JavaScript code to execute.
 *
 * @param {String} code The JavaScript code to execute.
 * @since 1.0.4
 */
jQuery.globalEval =  function(code) {
};

/**
 * The JavaScript code to execute.
 *
 * @param {String} code The JavaScript code to execute.
 * @since 1.0.4
 */
$.globalEval =  function(code) {
};

/**
 * The DOM node that will be checked to see if it's in an XML document.
 *
 * @param {Element} node The DOM node that will be checked to see if it's in an XML document.
 * @since 1.1.4
 */
jQuery.isXMLDoc =  function(node) {
 return true;
};

/**
 * The DOM node that will be checked to see if it's in an XML document.
 *
 * @param {Element} node The DOM node that will be checked to see if it's in an XML document.
 * @since 1.1.4
 */
$.isXMLDoc =  function(node) {
 return true;
};

/**
 * A DOM element from which to remove data.
 *
 * @param {Element} element A DOM element from which to remove data.
 * @param {String} name A string naming the piece of data to remove.
 * @since 1.2.3
 */
jQuery.removeData =  function(element, name) {
 return new jQuery();
};

/**
 * A DOM element from which to remove data.
 *
 * @param {Element} element A DOM element from which to remove data.
 * @param {String} name A string naming the piece of data to remove.
 * @since 1.2.3
 */
$.removeData =  function(element, name) {
 return new jQuery();
};

/**
 * The DOM element to associate with the data.
 *
 * @param {Element} element The DOM element to associate with the data.
 * @param {String} key A string naming the piece of data to set.
 * @param {Object} value The new data value.
 * @since 1.2.3
 */
jQuery.data =  function(element, key, value) {
 return new Object();
};

/**
 * The DOM element to associate with the data.
 *
 * @param {Element} element The DOM element to associate with the data.
 * @param {String} key A string naming the piece of data to set.
 * @param {Object} value The new data value.
 * @since 1.2.3
 */
$.data =  function(element, key, value) {
 return new Object();
};

/**
 * The DOM element to query for the data.
 *
 * @param {Element} element The DOM element to query for the data.
 * @param {String} key Name of the data stored.
 * @since 1.2.3
 */
jQuery.data =  function(element, key) {
 return new Object();
};

/**
 * The DOM element to query for the data.
 *
 * @param {Element} element The DOM element to query for the data.
 * @param {String} key Name of the data stored.
 * @since 1.2.3
 */
$.data =  function(element, key) {
 return new Object();
};

/**
 * The DOM element to query for the data.
 *
 * @param {Element} element The DOM element to query for the data.
 * @since 1.4
 */
jQuery.data =  function(element) {
 return new Object();
};

/**
 * The DOM element to query for the data.
 *
 * @param {Element} element The DOM element to query for the data.
 * @since 1.4
 */
$.data =  function(element) {
 return new Object();
};

/**
 * A DOM element from which to remove and execute a queued function.
 *
 * @param {Element} element A DOM element from which to remove and execute a queued function.
 * @param {String} queueName A string containing the name of the queue. Defaults to fx, the standard effects queue.
 * @since 1.3
 */
jQuery.dequeue =  function(element, queueName) {
 return new jQuery();
};

/**
 * A DOM element from which to remove and execute a queued function.
 *
 * @param {Element} element A DOM element from which to remove and execute a queued function.
 * @param {String} queueName A string containing the name of the queue. Defaults to fx, the standard effects queue.
 * @since 1.3
 */
$.dequeue =  function(element, queueName) {
 return new jQuery();
};

/**
 * A DOM element to inspect for an attached queue.
 *
 * @param {Element} element A DOM element to inspect for an attached queue.
 * @param {String} queueName A string containing the name of the queue. Defaults to fx, the standard effects queue.
 * @since 1.3
 */
jQuery.queue =  function(element, queueName) {
 return new Array();
};

/**
 * A DOM element to inspect for an attached queue.
 *
 * @param {Element} element A DOM element to inspect for an attached queue.
 * @param {String} queueName A string containing the name of the queue. Defaults to fx, the standard effects queue.
 * @since 1.3
 */
$.queue =  function(element, queueName) {
 return new Array();
};

/**
 * A DOM element where the array of queued functions is attached.
 *
 * @param {Element} element A DOM element where the array of queued functions is attached.
 * @param {String} queueName A string containing the name of the queue. Defaults to fx, the standard effects queue.
 * @param {Array} newQueue An array of functions to replace the current queue contents.
 * @since 1.3
 */
jQuery.queue =  function(element, queueName, newQueue) {
 return new jQuery();
};

/**
 * A DOM element where the array of queued functions is attached.
 *
 * @param {Element} element A DOM element where the array of queued functions is attached.
 * @param {String} queueName A string containing the name of the queue. Defaults to fx, the standard effects queue.
 * @param {Array} newQueue An array of functions to replace the current queue contents.
 * @since 1.3
 */
$.queue =  function(element, queueName, newQueue) {
 return new jQuery();
};

/**
 * A DOM element where the array of queued functions is attached.
 *
 * @param {Element} element A DOM element on which to add a queued function.
 * @param {String} queueName A string containing the name of the queue. Defaults to fx, the standard effects queue.
 * @param {Function} callback callback() The new function to add to the queue.
 * @since 1.3
 */
jQuery.queue =  function(element, queueName, callback) {
 return new jQuery();
};

/**
 * A DOM element where the array of queued functions is attached.
 *
 * @param {Element} element A DOM element on which to add a queued function.
 * @param {String} queueName A string containing the name of the queue. Defaults to fx, the standard effects queue.
 * @param {Function} callback callback() The new function to add to the queue.
 * @since 1.3
 */
$.queue =  function(element, queueName, callback) {
 return new jQuery();
};

/**
 * A string containing the name of the queue. Defaults to fx, the standard effects queue.
 *
 * @param {String} queueName A string containing the name of the queue. Defaults to fx, the standard effects queue.
 * @since 1.4
 */
jQuery.prototype.clearQueue = function(queueName) {
 return new jQuery();
};

/**
 * Retrieve all the DOM elements contained in the jQuery set, as an array.
 *
 * @since 1.4
 */
jQuery.prototype.toArray = function() {
 return new Array();
};

/**
 * The object that will be checked to see if it's empty.
 *
 * @param {Object} object The object that will be checked to see if it's empty.
 * @since 1.4
 */
jQuery.isEmptyObject =  function(object) {
 return true;
};

/**
 * The object that will be checked to see if it's empty.
 *
 * @param {Object} object The object that will be checked to see if it's empty.
 * @since 1.4
 */
$.isEmptyObject =  function(object) {
 return true;
};

/**
 * The object that will be checked to see if it's a plain object.
 *
 * @param {Object} object The object that will be checked to see if it's a plain object.
 * @since 1.4
 */
jQuery.isPlainObject =  function(object) {
 return true;
};

/**
 * The object that will be checked to see if it's a plain object.
 *
 * @param {Object} object The object that will be checked to see if it's a plain object.
 * @since 1.4
 */
$.isPlainObject =  function(object) {
 return true;
};

/**
 * A function to execute each time the event is triggered.
 *
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.0
 */
jQuery.prototype.keydown = function(handler) {
 return new jQuery();
};

/**
 * A function to execute each time the event is triggered.
 *
 * @param {Object} eventData A map of data that will be passed to the event handler.
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.4.3
 */
jQuery.prototype.keydown = function(eventData, handler) {
 return new jQuery();
};

/**
 * A function to execute each time the event is triggered.
 *
 * @since 1.0
 */
jQuery.prototype.keydown = function() {
 return new jQuery();
};

/**
 * A selector representing a jQuery collection in which to look for an element.
 *
 * @since 1.4
 */
jQuery.prototype.index = function() {
 return 1;
};

/**
 * A selector representing a jQuery collection in which to look for an element.
 *
 * @param {Selector} selector A selector representing a jQuery collection in which to look for an element.
 * @since 1.4
 */
jQuery.prototype.index = function(selector) {
 return 1;
};

/**
 * A selector representing a jQuery collection in which to look for an element.
 *
 * @param {Element; jQuery} element The DOM element or first element within the jQuery object to look for.
 * @since 1.0
 */
jQuery.prototype.index = function(element) {
 return 1;
};

/**
 * A string naming the piece of data to delete.
 *
 * @param {String} name A string naming the piece of data to delete.
 * @since 1.2.3
 */
jQuery.prototype.removeData = function(name) {
 return new jQuery();
};

/**
 * A string naming the piece of data to delete.
 *
 * @param {Array;String} list An array or space-separated string naming the pieces of data to delete.
 * @since 1.7
 */
jQuery.prototype.removeData = function(list) {
 return new jQuery();
};

/**
 * A string naming the piece of data to set.
 *
 * @param {String} key A string naming the piece of data to set.
 * @param {Object} value The new data value; it can be any Javascript type including Array or Object.
 * @since 1.2.3
 */
jQuery.prototype.data = function(key, value) {
 return new jQuery();
};

/**
 * A string naming the piece of data to set.
 *
 * @param {Object} obj An object of key-value pairs of data to update.
 * @since 1.4.3
 */
jQuery.prototype.data = function(obj) {
 return new jQuery();
};

/**
 * Name of the data stored.
 *
 * @param {String} key Name of the data stored.
 * @since 1.2.3
 */
jQuery.prototype.data = function(key) {
 return new Object();
};

/**
 * Name of the data stored.
 *
 * @since 1.4
 */
jQuery.prototype.data = function() {
 return new Object();
};

/**
 * A zero-based integer indicating which element to retrieve.
 *
 * @param {Number} index A zero-based integer indicating which element to retrieve.
 * @since 1.0
 */
jQuery.prototype.get = function(index) {
 return [new Element() ] /* Element, Array */;
};

/**
 * Return the number of elements in the jQuery object.
 *
 * @since 1.0
 */
jQuery.prototype.size = function() {
 return 1;
};

/**
 * A Boolean indicating whether to remove all jQuery variables from the global scope (including jQuery itself).
 *
 * @param {Boolean} removeAll A Boolean indicating whether to remove all jQuery variables from the global scope (including jQuery itself).
 * @since 1.0
 */
jQuery.noConflict =  function(removeAll) {
 return new Object();
};

/**
 * A Boolean indicating whether to remove all jQuery variables from the global scope (including jQuery itself).
 *
 * @param {Boolean} removeAll A Boolean indicating whether to remove all jQuery variables from the global scope (including jQuery itself).
 * @since 1.0
 */
$.noConflict =  function(removeAll) {
 return new Object();
};





















































/**
 * Bind an event handler to the "scroll" JavaScript event, or trigger that event on an element.
 *
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.0
 */
jQuery.prototype.scroll = function(handler) {
 return new jQuery();
};

/**
 * Bind an event handler to the "scroll" JavaScript event, or trigger that event on an element.
 *
 * @param {Object} eventData A map of data that will be passed to the event handler.
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.4.3
 */
jQuery.prototype.scroll = function(eventData, handler) {
 return new jQuery();
};

/**
 * Bind an event handler to the "scroll" JavaScript event, or trigger that event on an element.
 *
 * @since 1.0
 */
jQuery.prototype.scroll = function() {
 return new jQuery();
};

/**
 * Bind an event handler to the "resize" JavaScript event, or trigger that event on an element.
 *
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.0
 */
jQuery.prototype.resize = function(handler) {
 return new jQuery();
};

/**
 * Bind an event handler to the "resize" JavaScript event, or trigger that event on an element.
 *
 * @param {Object} eventData A map of data that will be passed to the event handler.
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.4.3
 */
jQuery.prototype.resize = function(eventData, handler) {
 return new jQuery();
};

/**
 * Bind an event handler to the "resize" JavaScript event, or trigger that event on an element.
 *
 * @since 1.0
 */
jQuery.prototype.resize = function() {
 return new jQuery();
};

/**
 * A string containing the name of the queue. Defaults to fx, the standard effects queue.
 *
 * @param {String} queueName A string containing the name of the queue. Defaults to fx, the standard effects queue.
 * @since 1.2
 */
jQuery.prototype.dequeue = function(queueName) {
 return new jQuery();
};

/**
 * A string containing the name of the queue. Defaults to fx, the standard effects queue.
 *
 * @param {String} queueName A string containing the name of the queue. Defaults to fx, the standard effects queue.
 * @since 1.2
 */
jQuery.prototype.queue = function(queueName) {
 return new Array();
};

/**
 * A string containing the name of the queue. Defaults to fx, the standard effects queue.
 *
 * @param {String} queueName A string containing the name of the queue. Defaults to fx, the standard effects queue.
 * @param {Array} newQueue An array of functions to replace the current queue contents.
 * @since 1.2
 */
jQuery.prototype.queue = function(queueName, newQueue) {
 return new jQuery();
};

/**
 * A string containing the name of the queue. Defaults to fx, the standard effects queue.
 *
 * @param {String} queueName A string containing the name of the queue. Defaults to fx, the standard effects queue.
 * @param {Function} callback callback( next ) The new function to add to the queue, with a function to call that will dequeue the next item.
 * @since 1.2
 */
jQuery.prototype.queue = function(queueName, callback) {
 return new jQuery();
};

/**
 * Bind an event handler to the "keyup" JavaScript event, or trigger that event on an element.
 *
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.0
 */
jQuery.prototype.keyup = function(handler) {
 return new jQuery();
};

/**
 * Bind an event handler to the "keyup" JavaScript event, or trigger that event on an element.
 *
 * @param {Object} eventData A map of data that will be passed to the event handler.
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.4.3
 */
jQuery.prototype.keyup = function(eventData, handler) {
 return new jQuery();
};

/**
 * Bind an event handler to the "keyup" JavaScript event, or trigger that event on an element.
 *
 * @since 1.0
 */
jQuery.prototype.keyup = function() {
 return new jQuery();
};

/**
 * Bind an event handler to the "keypress" JavaScript event, or trigger that event on an element.
 *
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.0
 */
jQuery.prototype.keypress = function(handler) {
 return new jQuery();
};

/**
 * Bind an event handler to the "keypress" JavaScript event, or trigger that event on an element.
 *
 * @param {Object} eventData A map of data that will be passed to the event handler.
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.4.3
 */
jQuery.prototype.keypress = function(eventData, handler) {
 return new jQuery();
};

/**
 * Bind an event handler to the "keypress" JavaScript event, or trigger that event on an element.
 *
 * @since 1.0
 */
jQuery.prototype.keypress = function() {
 return new jQuery();
};

/**
 * Bind an event handler to the "submit" JavaScript event, or trigger that event on an element.
 *
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.0
 */
jQuery.prototype.submit = function(handler) {
 return new jQuery();
};

/**
 * Bind an event handler to the "submit" JavaScript event, or trigger that event on an element.
 *
 * @param {Object} eventData A map of data that will be passed to the event handler.
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.4.3
 */
jQuery.prototype.submit = function(eventData, handler) {
 return new jQuery();
};

/**
 * Bind an event handler to the "submit" JavaScript event, or trigger that event on an element.
 *
 * @since 1.0
 */
jQuery.prototype.submit = function() {
 return new jQuery();
};

/**
 * Bind an event handler to the "select" JavaScript event, or trigger that event on an element.
 *
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.0
 */
jQuery.prototype.select = function(handler) {
 return new jQuery();
};

/**
 * Bind an event handler to the "select" JavaScript event, or trigger that event on an element.
 *
 * @param {Object} eventData A map of data that will be passed to the event handler.
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.4.3
 */
jQuery.prototype.select = function(eventData, handler) {
 return new jQuery();
};

/**
 * Bind an event handler to the "select" JavaScript event, or trigger that event on an element.
 *
 * @since 1.0
 */
jQuery.prototype.select = function() {
 return new jQuery();
};

/**
 * Bind an event handler to the "change" JavaScript event, or trigger that event on an element.
 *
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.0
 */
jQuery.prototype.change = function(handler) {
 return new jQuery();
};

/**
 * Bind an event handler to the "change" JavaScript event, or trigger that event on an element.
 *
 * @param {Object} eventData A map of data that will be passed to the event handler.
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.4.3
 */
jQuery.prototype.change = function(eventData, handler) {
 return new jQuery();
};

/**
 * Bind an event handler to the "change" JavaScript event, or trigger that event on an element.
 *
 * @since 1.0
 */
jQuery.prototype.change = function() {
 return new jQuery();
};

/**
 * Bind an event handler to the "blur" JavaScript event, or trigger that event on an element.
 *
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.0
 */
jQuery.prototype.blur = function(handler) {
 return new jQuery();
};

/**
 * Bind an event handler to the "blur" JavaScript event, or trigger that event on an element.
 *
 * @param {Object} eventData A map of data that will be passed to the event handler.
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.4.3
 */
jQuery.prototype.blur = function(eventData, handler) {
 return new jQuery();
};

/**
 * Bind an event handler to the "blur" JavaScript event, or trigger that event on an element.
 *
 * @since 1.0
 */
jQuery.prototype.blur = function() {
 return new jQuery();
};

/**
 * Bind an event handler to the "focus" JavaScript event, or trigger that event on an element.
 *
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.0
 */
jQuery.prototype.focus = function(handler) {
 return new jQuery();
};

/**
 * Bind an event handler to the "focus" JavaScript event, or trigger that event on an element.
 *
 * @param {Object} eventData A map of data that will be passed to the event handler.
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.4.3
 */
jQuery.prototype.focus = function(eventData, handler) {
 return new jQuery();
};

/**
 * Bind an event handler to the "focus" JavaScript event, or trigger that event on an element.
 *
 * @since 1.0
 */
jQuery.prototype.focus = function() {
 return new jQuery();
};

/**
 * Bind an event handler to the "mousemove" JavaScript event, or trigger that event on an element.
 *
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.0
 */
jQuery.prototype.mousemove = function(handler) {
 return new jQuery();
};

/**
 * Bind an event handler to the "mousemove" JavaScript event, or trigger that event on an element.
 *
 * @param {Object} eventData A map of data that will be passed to the event handler.
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.4.3
 */
jQuery.prototype.mousemove = function(eventData, handler) {
 return new jQuery();
};

/**
 * Bind an event handler to the "mousemove" JavaScript event, or trigger that event on an element.
 *
 * @since 1.0
 */
jQuery.prototype.mousemove = function() {
 return new jQuery();
};

/**
 * Bind two handlers to the matched elements, to be executed when the mouse pointer enters and leaves the elements.
 *
 * @param {Function} handler handlerIn(eventObject) A function to execute when the mouse pointer enters the element.
 * @param {Function} handler1 handlerOut(eventObject) A function to execute when the mouse pointer leaves the element.
 * @since 1.0
 */
jQuery.prototype.hover = function(handler, handler1) {
 return new jQuery();
};

/**
 * Bind a single handler to the matched elements, to be executed when the mouse pointer enters or leaves the elements.
 *
 * @param {Function} handler handlerInOut(eventObject) A function to execute when the mouse pointer enters or leaves the element.
 * @since 1.4
 */
jQuery.prototype.hover = function(handler) {
 return new jQuery();
};

/**
 * Bind an event handler to be fired when the mouse leaves an element, or trigger that handler on an element.
 *
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.0
 */
jQuery.prototype.mouseleave = function(handler) {
 return new jQuery();
};

/**
 * Bind an event handler to be fired when the mouse leaves an element, or trigger that handler on an element.
 *
 * @param {Object} eventData A map of data that will be passed to the event handler.
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.4.3
 */
jQuery.prototype.mouseleave = function(eventData, handler) {
 return new jQuery();
};

/**
 * Bind an event handler to be fired when the mouse leaves an element, or trigger that handler on an element.
 *
 * @since 1.0
 */
jQuery.prototype.mouseleave = function() {
 return new jQuery();
};

/**
 * Bind an event handler to be fired when the mouse enters an element, or trigger that handler on an element.
 *
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.0
 */
jQuery.prototype.mouseenter = function(handler) {
 return new jQuery();
};

/**
 * Bind an event handler to be fired when the mouse enters an element, or trigger that handler on an element.
 *
 * @param {Object} eventData A map of data that will be passed to the event handler.
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.4.3
 */
jQuery.prototype.mouseenter = function(eventData, handler) {
 return new jQuery();
};

/**
 * Bind an event handler to be fired when the mouse enters an element, or trigger that handler on an element.
 *
 * @since 1.0
 */
jQuery.prototype.mouseenter = function() {
 return new jQuery();
};

/**
 * Bind an event handler to the "mouseout" JavaScript event, or trigger that event on an element.
 *
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.0
 */
jQuery.prototype.mouseout = function(handler) {
 return new jQuery();
};

/**
 * Bind an event handler to the "mouseout" JavaScript event, or trigger that event on an element.
 *
 * @param {Object} eventData A map of data that will be passed to the event handler.
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.4.3
 */
jQuery.prototype.mouseout = function(eventData, handler) {
 return new jQuery();
};

/**
 * Bind an event handler to the "mouseout" JavaScript event, or trigger that event on an element.
 *
 * @since 1.0
 */
jQuery.prototype.mouseout = function() {
 return new jQuery();
};

/**
 * Bind an event handler to the "mouseover" JavaScript event, or trigger that event on an element.
 *
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.0
 */
jQuery.prototype.mouseover = function(handler) {
 return new jQuery();
};

/**
 * Bind an event handler to the "mouseover" JavaScript event, or trigger that event on an element.
 *
 * @param {Object} eventData A map of data that will be passed to the event handler.
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.4.3
 */
jQuery.prototype.mouseover = function(eventData, handler) {
 return new jQuery();
};

/**
 * Bind an event handler to the "mouseover" JavaScript event, or trigger that event on an element.
 *
 * @since 1.0
 */
jQuery.prototype.mouseover = function() {
 return new jQuery();
};

/**
 * Bind an event handler to the "dblclick" JavaScript event, or trigger that event on an element.
 *
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.0
 */
jQuery.prototype.dblclick = function(handler) {
 return new jQuery();
};

/**
 * Bind an event handler to the "dblclick" JavaScript event, or trigger that event on an element.
 *
 * @param {Object} eventData A map of data that will be passed to the event handler.
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.4.3
 */
jQuery.prototype.dblclick = function(eventData, handler) {
 return new jQuery();
};

/**
 * Bind an event handler to the "dblclick" JavaScript event, or trigger that event on an element.
 *
 * @since 1.0
 */
jQuery.prototype.dblclick = function() {
 return new jQuery();
};

/**
 * Bind an event handler to the "click" JavaScript event, or trigger that event on an element.
 *
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.0
 */
jQuery.prototype.click = function(handler) {
 return new jQuery();
};

/**
 * Bind an event handler to the "click" JavaScript event, or trigger that event on an element.
 *
 * @param {Object} eventData A map of data that will be passed to the event handler.
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.4.3
 */
jQuery.prototype.click = function(eventData, handler) {
 return new jQuery();
};

/**
 * Bind an event handler to the "click" JavaScript event, or trigger that event on an element.
 *
 * @since 1.0
 */
jQuery.prototype.click = function() {
 return new jQuery();
};

/**
 * Bind an event handler to the "mouseup" JavaScript event, or trigger that event on an element.
 *
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.0
 */
jQuery.prototype.mouseup = function(handler) {
 return new jQuery();
};

/**
 * Bind an event handler to the "mouseup" JavaScript event, or trigger that event on an element.
 *
 * @param {Object} eventData A map of data that will be passed to the event handler.
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.4.3
 */
jQuery.prototype.mouseup = function(eventData, handler) {
 return new jQuery();
};

/**
 * Bind an event handler to the "mouseup" JavaScript event, or trigger that event on an element.
 *
 * @since 1.0
 */
jQuery.prototype.mouseup = function() {
 return new jQuery();
};

/**
 * Bind an event handler to the "mousedown" JavaScript event, or trigger that event on an element.
 *
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.0
 */
jQuery.prototype.mousedown = function(handler) {
 return new jQuery();
};

/**
 * Bind an event handler to the "mousedown" JavaScript event, or trigger that event on an element.
 *
 * @param {Object} eventData A map of data that will be passed to the event handler.
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.4.3
 */
jQuery.prototype.mousedown = function(eventData, handler) {
 return new jQuery();
};

/**
 * Bind an event handler to the "mousedown" JavaScript event, or trigger that event on an element.
 *
 * @since 1.0
 */
jQuery.prototype.mousedown = function() {
 return new jQuery();
};

/**
 * Bind an event handler to the "error" JavaScript event.
 *
 * @param {Function} handler handler(eventObject) A function to execute when the event is triggered.
 * @since 1.0
 */
jQuery.prototype.error = function(handler) {
 return new jQuery();
};

/**
 * Bind an event handler to the "error" JavaScript event.
 *
 * @param {Object} eventData A map of data that will be passed to the event handler.
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.4.3
 */
jQuery.prototype.error = function(eventData, handler) {
 return new jQuery();
};

/**
 * A function to execute when the event is triggered.
 *
 * @param {Function} handler handler(eventObject) A function to execute when the event is triggered.
 * @since 1.0
 */
jQuery.prototype.unload = function(handler) {
 return new jQuery();
};

/**
 * A function to execute when the event is triggered.
 *
 * @param {Object} eventData A map of data that will be passed to the event handler.
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.4.3
 */
jQuery.prototype.unload = function(eventData, handler) {
 return new jQuery();
};

/**
 * Bind an event handler to the "load" JavaScript event.
 *
 * @param {Function} handler handler(eventObject) A function to execute when the event is triggered.
 * @since 1.0
 */
jQuery.prototype.load = function(handler) {
 return new jQuery();
};

/**
 * Bind an event handler to the "load" JavaScript event.
 *
 * @param {Object} eventData A map of data that will be passed to the event handler.
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.4.3
 */
jQuery.prototype.load = function(eventData, handler) {
 return new jQuery();
};

/**
 * Specify a function to execute when the DOM is fully loaded.
 *
 * @param {Function} handler A function to execute after the DOM is ready.
 * @since 1.0
 */
jQuery.prototype.ready = function(handler) {
 return new jQuery();
};

/**
 * Remove all event handlers previously attached using .live() from the elements.
 *
 * @since 1.4.1
 */
jQuery.prototype.die = function() {
 return new jQuery();
};

/**
 * Remove an event handler previously attached using .live() from the elements.
 *
 * @param {String} eventType A string containing a JavaScript event type, such as click or keydown.
 * @param {String} handler The function that is no longer to be executed.
 * @since 1.3
 */
jQuery.prototype.die = function(eventType, handler) {
 return new jQuery();
};

/**
 * Remove an event handler previously attached using .live() from the elements.
 *
 * @param {Map} eventTypes A map of one or more event types, such as click or keydown and their corresponding functions that are no longer to be executed.
 * @since 1.4.3
 */
jQuery.prototype.die = function(eventTypes) {
 return new jQuery();
};

/**
 * @since 1.0
 */
jQuery.browser = new Map();

/**
 * @since 1.0
 */
$.browser = new Map();

/**
 * @since 1.1.3
 */
jQuery.browser.version = "";

/**
 * @since 1.1.3
 */
$.browser.version = "";

/**
 * Attach an event handler for all elements which match the current selector, now and in the future.
 *
 * @param {String} events A string containing a JavaScript event type, such as "click" or "keydown." As of jQuery 1.4 the string can contain multiple, space-separated event types or custom event names.
 * @param {Function} handler A function to execute at the time the event is triggered.
 * @since 1.3
 */
jQuery.prototype.live = function(events, handler) {
 return new jQuery();
};

/**
 * Attach an event handler for all elements which match the current selector, now and in the future.
 *
 * @param {String} events A string containing a JavaScript event type, such as "click" or "keydown." As of jQuery 1.4 the string can contain multiple, space-separated event types or custom event names.
 * @param {Object} data A map of data that will be passed to the event handler.
 * @param {Function} handler A function to execute at the time the event is triggered.
 * @since 1.4
 */
jQuery.prototype.live = function(events, data, handler) {
 return new jQuery();
};

/**
 * Attach an event handler for all elements which match the current selector, now and in the future.
 *
 * @param {Object} eventsmap events-map A map of one or more JavaScript event types and functions to execute for them.
 * @since 1.4.3
 */
jQuery.prototype.live = function(eventsmap) {
 return new jQuery();
};

/**
 * Execute all handlers attached to an element for an event.
 *
 * @param {String} eventType A string containing a JavaScript event type, such as click or submit.
 * @param {Array} extraParameters An array of additional parameters to pass along to the event handler.
 * @since 1.2
 */
jQuery.prototype.triggerHandler = function(eventType, extraParameters) {
 return new Object();
};

/**
 * Execute all handlers and behaviors attached to the matched elements for the given event type.
 *
 * @param {String} eventType A string containing a JavaScript event type, such as click or submit.
 * @param {Object} extraParameters Additional parameters to pass along to the event handler.
 * @since 1.0
 */
jQuery.prototype.trigger = function(eventType, extraParameters) {
 return new jQuery();
};

/**
 * Execute all handlers and behaviors attached to the matched elements for the given event type.
 *
 * @param {Event} event A jQuery.Event object.
 * @since 1.3
 */
jQuery.prototype.trigger = function(event) {
 return new jQuery();
};

/**
 * The function to be invoked.
 *
 * @param {Function} handler handler(event, XMLHttpRequest, ajaxOptions) The function to be invoked.
 * @since 1.0
 */
jQuery.prototype.ajaxComplete = function(handler) {
 return new jQuery();
};

/**
 * Attach a handler to an event for the elements. The handler is executed at most once per element.
 *
 * @param {String} events A string containing one or more JavaScript event types, such as "click" or "submit," or custom event names.
 * @param {Object} data A map of data that will be passed to the event handler.
 * @param {Function} handler A function to execute at the time the event is triggered.
 * @since 1.1
 */
jQuery.prototype.one = function(events, data, handler) {
 return new jQuery();
};

/**
 * Attach a handler to an event for the elements. The handler is executed at most once per element.
 *
 * @param {String} events One or more space-separated event types and optional namespaces, such as "click" or "keydown.myPlugin".
 * @param {String} selector A selector string to filter the descendants of the selected elements that trigger the event. If the selector is null or omitted, the event is always triggered when it reaches the selected element.
 * @param {Anything} data Data to be passed to the handler in event.data when an event is triggered.
 * @param {Function} handler A function to execute when the event is triggered. The value false is also allowed as a shorthand for a function that simply does return false.
 * @since 1.7
 */
jQuery.prototype.one = function(events, selector, data, handler) {
 return new jQuery();
};

/**
 * Attach a handler to an event for the elements. The handler is executed at most once per element.
 *
 * @param {Map} eventsmap events-map A map in which the string keys represent one or more space-separated event types and optional namespaces, and the values represent a handler function to be called for the event(s).
 * @param {String} selector A selector string to filter the descendants of the selected elements that will call the handler. If the selector is null or omitted, the handler is always called when it reaches the selected element.
 * @param {Anything} data Data to be passed to the handler in event.data when an event occurs.
 * @since 1.7
 */
jQuery.prototype.one = function(eventsmap, selector, data) {
 return new jQuery();
};

/**
 * Encode a set of form elements as an array of names and values.
 *
 * @since 1.2
 */
jQuery.prototype.serializeArray = function() {
 return new Array();
};

/**
 * Encode a set of form elements as a string for submission.
 *
 * @since 1.0
 */
jQuery.prototype.serialize = function() {
 return "";
};

/**
 * A set of key/value pairs that configure the default Ajax request. All options are optional. 
 *
 * @param {Options} options A set of key/value pairs that configure the default Ajax request. All options are optional. 
 * @since 1.1
 */
jQuery.ajaxSetup =  function(options) {
};

/**
 * A set of key/value pairs that configure the default Ajax request. All options are optional. 
 *
 * @param {Options} options A set of key/value pairs that configure the default Ajax request. All options are optional. 
 * @since 1.1
 */
$.ajaxSetup =  function(options) {
};

/**
 * The function to be invoked.
 *
 * @param {Function} handler handler(event, XMLHttpRequest, ajaxOptions) The function to be invoked.
 * @since 1.0
 */
jQuery.prototype.ajaxSuccess = function(handler) {
 return new jQuery();
};

/**
 * Register a handler to be called when all Ajax requests have completed. This is an Ajax Event.
 *
 * @param {Function} handler handler() The function to be invoked.
 * @since 1.0
 */
jQuery.prototype.ajaxStop = function(handler) {
 return new jQuery();
};

/**
 * The function to be invoked.
 *
 * @param {Function} handler handler() The function to be invoked.
 * @since 1.0
 */
jQuery.prototype.ajaxStart = function(handler) {
 return new jQuery();
};

/**
 * The function to be invoked.
 *
 * @param {Function} handler handler(event, jqXHR, ajaxOptions) The function to be invoked.
 * @since 1.0
 */
jQuery.prototype.ajaxSend = function(handler) {
 return new jQuery();
};

/**
 * The function to be invoked.
 *
 * @param {Function} handler handler(event, jqXHR, ajaxSettings, thrownError) The function to be invoked.
 * @since 1.0
 */
jQuery.prototype.ajaxError = function(handler) {
 return new jQuery();
};

/**
 * Remove a previously-attached event handler from the elements.
 *
 * @param {String} eventType A string containing a JavaScript event type, such as click or submit.
 * @param {Function} handler handler(eventObject) The function that is to be no longer executed.
 * @since 1.0
 */
jQuery.prototype.unbind = function(eventType, handler) {
 return new jQuery();
};

/**
 * Remove a previously-attached event handler from the elements.
 *
 * @param {String} eventType A string containing a JavaScript event type, such as click or submit.
 * @param {Boolean} bool false Unbinds the corresponding 'return false' function that was bound using .bind( eventType, false ).
 * @since 1.4.3
 */
jQuery.prototype.unbind = function(eventType, bool) {
 return new jQuery();
};

/**
 * Remove a previously-attached event handler from the elements.
 *
 * @param {Object} event A JavaScript event object as passed to an event handler.
 * @since 1.0
 */
jQuery.prototype.unbind = function(event) {
 return new jQuery();
};

/**
 * A string containing one or more DOM event types, such as "click" or "submit," or custom event names.
 *
 * @param {String} eventType A string containing one or more DOM event types, such as "click" or "submit," or custom event names.
 * @param {Object} eventData A map of data that will be passed to the event handler.
 * @param {Function} handler handler(eventObject) A function to execute each time the event is triggered.
 * @since 1.0
 */
jQuery.prototype.bind = function(eventType, eventData, handler) {
 return new jQuery();
};

/**
 * A string containing one or more DOM event types, such as "click" or "submit," or custom event names.
 *
 * @param {String} eventType A string containing one or more DOM event types, such as "click" or "submit," or custom event names.
 * @param {Object} eventData A map of data that will be passed to the event handler.
 * @param {Boolean} preventBubble Setting the third argument to false will attach a function that prevents the default action from occurring and stops the event from bubbling. The default is true.
 * @since 1.4.3
 */
jQuery.prototype.bind = function(eventType, eventData, preventBubble) {
 return new jQuery();
};

/**
 * A string containing one or more DOM event types, such as "click" or "submit," or custom event names.
 *
 * @param {Object} events A map of one or more DOM event types and functions to execute for them.
 * @since 1.4
 */
jQuery.prototype.bind = function(events) {
 return new jQuery();
};

/**
 * Reduce the set of matched elements to the first in the set.
 *
 * @since 1.4
 */
jQuery.prototype.first = function() {
 return new jQuery();
};

/**
 * Reduce the set of matched elements to the final one in the set.
 *
 * @since 1.4
 */
jQuery.prototype.last = function() {
 return new jQuery();
};

/**
 * An integer indicating the 0-based position at which the elements begin to be selected. If negative, it indicates an offset from the end of the set.
 *
 * @param {Integer} start An integer indicating the 0-based position at which the elements begin to be selected. If negative, it indicates an offset from the end of the set.
 * @param {Integer} end An integer indicating the 0-based position at which the elements stop being selected. If negative, it indicates an offset from the end of the set. If omitted, the range continues until the end of the set.
 * @since 1.1.4
 */
jQuery.prototype.slice = function(start, end) {
 return new jQuery();
};

/**
 * A string containing a selector expression
 *
 * @param {selector} selector A string containing a selector expression
 * @param {Element; jQuery} context A DOM Element, Document, or jQuery to use as context
 * @since 1.0
 */
jQuery = function(selector, context) {
 return new jQuery();
};

/**
 * A string containing a selector expression
 *
 * @param {Element} element A DOM element to wrap in a jQuery object.
 * @since 1.0
 */
jQuery = function(element) {
 return new jQuery();
};

/**
 * A string containing a selector expression
 *
 * @param {Object} object A plain object to wrap in a jQuery object.
 * @since 1.0
 */
jQuery = function(object) {
 return new jQuery();
};

/**
 * A string containing a selector expression
 *
 * @param {Array} elementArray An array containing a set of DOM elements to wrap in a jQuery object.
 * @since 1.0
 */
jQuery = function(elementArray) {
 return new jQuery();
};

/**
 * A string containing a selector expression
 *
 * @param {Object} jQueryobject jQuery object An existing jQuery object to clone.
 * @since 1.0
 */
jQuery = function(jQueryobject) {
 return new jQuery();
};

/**
 * A string containing a selector expression
 *
 * @since 1.4
 */
jQuery = function() {
 return new jQuery();
};

/**
 * A string of HTML to create on the fly. Note that this parses HTML, not XML.
 *
 * @param {String} html A string of HTML to create on the fly. Note that this parses HTML, not XML.
 * @param {document} ownerDocument A document in which the new elements will be created
 * @since 1.0
 */
jQuery = function(html, ownerDocument) {
 return new jQuery();
};

/**
 * A string of HTML to create on the fly. Note that this parses HTML, not XML.
 *
 * @param {String} html A string defining a single, standalone, HTML element (e.g. <div/> or <div></div>).
 * @param {Object} props An map of attributes, events, and methods to call on the newly-created element.
 * @since 1.4
 */
jQuery = function(html, props) {
 return new jQuery();
};

/**
 * The function to execute when the DOM is ready.
 *
 * @param {Function} callback The function to execute when the DOM is ready.
 * @since 1.0
 */
jQuery = function(callback) {
 return new jQuery();
};

/**
 * Stop the currently-running animation on the matched elements.
 *
 * @param {Boolean} clearQueue A Boolean indicating whether to remove queued animation as well. Defaults to false.
 * @param {Boolean} jumpToEnd A Boolean indicating whether to complete the current animation immediately. Defaults to false.
 * @since 1.2
 */
jQuery.prototype.stop = function(clearQueue, jumpToEnd) {
 return new jQuery();
};

/**
 * Stop the currently-running animation on the matched elements.
 *
 * @param {String} queue The name of the queue in which to stop animations.
 * @param {Boolean} clearQueue A Boolean indicating whether to remove queued animation as well. Defaults to false.
 * @param {Boolean} jumpToEnd A Boolean indicating whether to complete the current animation immediately. Defaults to false.
 * @since 1.7
 */
jQuery.prototype.stop = function(queue, clearQueue, jumpToEnd) {
 return new jQuery();
};

/**
 * End the most recent filtering operation in the current chain and return the set of matched elements to its previous state.
 *
 * @since 1.0
 */
jQuery.prototype.end = function() {
 return new jQuery();
};

/**
 * Add the previous set of elements on the stack to the current set.
 *
 * @since 1.2
 */
jQuery.prototype.andSelf = function() {
 return new jQuery();
};

/**
 * A string containing a selector expression to match elements against.
 *
 * @param {Selector} selector A string containing a selector expression to match elements against.
 * @since 1.0
 */
jQuery.prototype.siblings = function(selector) {
 return new jQuery();
};

/**
 * Perform a custom animation of a set of CSS properties.
 *
 * @param {Map} properties A map of CSS properties that the animation will move toward.
 * @param {String;Number} duration A string or number determining how long the animation will run.
 * @param {String} easing A string indicating which easing function to use for the transition.
 * @param {Function} complete A function to call once the animation is complete.
 * @since 1.0
 */
jQuery.prototype.animate = function(properties, duration, easing, complete) {
 return new jQuery();
};

/**
 * Perform a custom animation of a set of CSS properties.
 *
 * @param {Map} properties A map of CSS properties that the animation will move toward.
 * @param {Map} options A map of additional options to pass to the method. Supported keys:
        
        duration: A string or number determining how long the animation will run.
        easing: A string indicating which easing function to use for the transition.
        complete: A function to call once the animation is complete.
        step: A function to be called after each step of the animation.
        queue: A Boolean indicating whether to place the animation in the effects queue. If false, the animation will begin immediately. As of jQuery 1.7, the queue option can also accept a string, in which case the animation is added to the queue represented by that string.
        specialEasing: A map of one or more of the CSS properties defined by the properties argument and their corresponding easing functions (added 1.4).
        
        
 * @since 1.0
 */
jQuery.prototype.animate = function(properties, options) {
 return new jQuery();
};

/**
 * A string containing a selector expression to match elements against.
 *
 * @param {Selector} selector A string containing a selector expression to match elements against.
 * @since 1.2
 */
jQuery.prototype.prevAll = function(selector) {
 return new jQuery();
};

/**
 * A string containing a selector expression to match elements against.
 *
 * @param {Selector} selector A string containing a selector expression to match elements against.
 * @since 1.0
 */
jQuery.prototype.prev = function(selector) {
 return new jQuery();
};

/**
 * Adjust the opacity of the matched elements.
 *
 * @param {String;Number} duration A string or number determining how long the animation will run.
 * @param {Number} opacity A number between 0 and 1 denoting the target opacity.
 * @param {Callback} callback A function to call once the animation is complete.
 * @since 1.0
 */
jQuery.prototype.fadeTo = function(duration, opacity, callback) {
 return new jQuery();
};

/**
 * Adjust the opacity of the matched elements.
 *
 * @param {String;Number} duration A string or number determining how long the animation will run.
 * @param {Number} opacity A number between 0 and 1 denoting the target opacity.
 * @param {String} easing A string indicating which easing function to use for the transition.
 * @param {Callback} callback A function to call once the animation is complete.
 * @since 1.4.3
 */
jQuery.prototype.fadeTo = function(duration, opacity, easing, callback) {
 return new jQuery();
};

/**
 * Hide the matched elements by fading them to transparent.
 *
 * @param {String;Number} duration A string or number determining how long the animation will run.
 * @param {Callback} callback A function to call once the animation is complete.
 * @since 1.0
 */
jQuery.prototype.fadeOut = function(duration, callback) {
 return new jQuery();
};

/**
 * Hide the matched elements by fading them to transparent.
 *
 * @param {String;Number} duration A string or number determining how long the animation will run.
 * @param {String} easing A string indicating which easing function to use for the transition.
 * @param {Callback} callback A function to call once the animation is complete.
 * @since 1.4.3
 */
jQuery.prototype.fadeOut = function(duration, easing, callback) {
 return new jQuery();
};

/**
 * A string containing a selector expression to match elements against.
 *
 * @param {Selector} selector A string containing a selector expression to match elements against.
 * @since 1.0
 */
jQuery.prototype.parents = function(selector) {
 return new jQuery();
};

/**
 * Display the matched elements by fading them to opaque.
 *
 * @param {String;Number} duration A string or number determining how long the animation will run.
 * @param {Callback} callback A function to call once the animation is complete.
 * @since 1.0
 */
jQuery.prototype.fadeIn = function(duration, callback) {
 return new jQuery();
};

/**
 * Display the matched elements by fading them to opaque.
 *
 * @param {String;Number} duration A string or number determining how long the animation will run.
 * @param {String} easing A string indicating which easing function to use for the transition.
 * @param {Callback} callback A function to call once the animation is complete.
 * @since 1.4.3
 */
jQuery.prototype.fadeIn = function(duration, easing, callback) {
 return new jQuery();
};

/**
 * A string containing a selector expression to match elements against.
 *
 * @param {Selector} selector A string containing a selector expression to match elements against.
 * @since 1.0
 */
jQuery.prototype.parent = function(selector) {
 return new jQuery();
};

/**
 * Get the closest ancestor element that is positioned.
 *
 * @since 1.2.6
 */
jQuery.prototype.offsetParent = function() {
 return new jQuery();
};

/**
 * Display or hide the matched elements with a sliding motion.
 *
 * @param {String;Number} duration A string or number determining how long the animation will run.
 * @param {Callback} callback A function to call once the animation is complete.
 * @since 1.0
 */
jQuery.prototype.slideToggle = function(duration, callback) {
 return new jQuery();
};

/**
 * Display or hide the matched elements with a sliding motion.
 *
 * @param {String;Number} duration A string or number determining how long the animation will run.
 * @param {String} easing A string indicating which easing function to use for the transition.
 * @param {Callback} callback A function to call once the animation is complete.
 * @since 1.4.3
 */
jQuery.prototype.slideToggle = function(duration, easing, callback) {
 return new jQuery();
};

/**
 * A string containing the URL to which the request is sent.
 *
 * @param {String} url A string containing the URL to which the request is sent.
 * @param {Map; String} data A map or string that is sent to the server with the request.
 * @param {Function} success success(data, textStatus, jqXHR) A callback function that is executed if the request succeeds.
 * @param {String} dataType The type of data expected from the server. Default: Intelligent Guess (xml, json, script, or html).
 * @since 1.0
 */
jQuery.post =  function(url, data, success, dataType) {
 return new Deferred();
};

/**
 * A string containing the URL to which the request is sent.
 *
 * @param {String} url A string containing the URL to which the request is sent.
 * @param {Map; String} data A map or string that is sent to the server with the request.
 * @param {Function} success success(data, textStatus, jqXHR) A callback function that is executed if the request succeeds.
 * @param {String} dataType The type of data expected from the server. Default: Intelligent Guess (xml, json, script, or html).
 * @since 1.0
 */
$.post =  function(url, data, success, dataType) {
 return new Deferred();
};

/**
 * Hide the matched elements with a sliding motion.
 *
 * @param {String;Number} duration A string or number determining how long the animation will run.
 * @param {Callback} callback A function to call once the animation is complete.
 * @since 1.0
 */
jQuery.prototype.slideUp = function(duration, callback) {
 return new jQuery();
};

/**
 * Hide the matched elements with a sliding motion.
 *
 * @param {String;Number} duration A string or number determining how long the animation will run.
 * @param {String} easing A string indicating which easing function to use for the transition.
 * @param {Callback} callback A function to call once the animation is complete.
 * @since 1.4.3
 */
jQuery.prototype.slideUp = function(duration, easing, callback) {
 return new jQuery();
};

/**
 * A string containing a selector expression to match elements against.
 *
 * @param {String} selector A string containing a selector expression to match elements against.
 * @since 1.2
 */
jQuery.prototype.nextAll = function(selector) {
 return new jQuery();
};

/**
 * A string containing a selector expression to match elements against.
 *
 * @param {Selector} selector A string containing a selector expression to match elements against.
 * @since 1.0
 */
jQuery.prototype.next = function(selector) {
 return new jQuery();
};

/**
 * Display the matched elements with a sliding motion.
 *
 * @param {String;Number} duration A string or number determining how long the animation will run.
 * @param {Callback} callback A function to call once the animation is complete.
 * @since 1.0
 */
jQuery.prototype.slideDown = function(duration, callback) {
 return new jQuery();
};

/**
 * Display the matched elements with a sliding motion.
 *
 * @param {String;Number} duration A string or number determining how long the animation will run.
 * @param {String} easing A string indicating which easing function to use for the transition.
 * @param {Callback} callback A function to call once the animation is complete.
 * @since 1.4.3
 */
jQuery.prototype.slideDown = function(duration, easing, callback) {
 return new jQuery();
};

/**
 * A string containing a selector expression to match elements against.
 *
 * @param {Selector} selector A string containing a selector expression to match elements against.
 * @since 1.0
 */
jQuery.prototype.find = function(selector) {
 return new jQuery();
};

/**
 * A string containing a selector expression to match elements against.
 *
 * @param {Object} jQueryobject jQuery object A jQuery object to match elements against.
 * @since 1.6
 */
jQuery.prototype.find = function(jQueryobject) {
 return new jQuery();
};

/**
 * A string containing a selector expression to match elements against.
 *
 * @param {Element} element An element to match elements against.
 * @since 1.6
 */
jQuery.prototype.find = function(element) {
 return new jQuery();
};

/**
 * A string containing the URL to which the request is sent.
 *
 * @param {String} url A string containing the URL to which the request is sent.
 * @param {Function} success success(data, textStatus) A callback function that is executed if the request succeeds.
 * @since 1.0
 */
jQuery.getScript =  function(url, success) {
 return new Deferred();
};

/**
 * A string containing the URL to which the request is sent.
 *
 * @param {String} url A string containing the URL to which the request is sent.
 * @param {Function} success success(data, textStatus) A callback function that is executed if the request succeeds.
 * @since 1.0
 */
$.getScript =  function(url, success) {
 return new Deferred();
};

/**
 * Get the children of each element in the set of matched elements, including text and comment nodes.
 *
 * @since 1.2
 */
jQuery.prototype.contents = function() {
 return new jQuery();
};

/**
 * A string containing a selector expression to match elements against.
 *
 * @param {Selector} selector A string containing a selector expression to match elements against.
 * @since 1.3
 */
jQuery.prototype.closest = function(selector) {
 return new jQuery();
};

/**
 * A string containing a selector expression to match elements against.
 *
 * @param {Selector} selector A string containing a selector expression to match elements against.
 * @param {Element} context A DOM element within which a matching element may be found. If no context is passed in then the context of the jQuery set will be used instead.
 * @since 1.4
 */
jQuery.prototype.closest = function(selector, context) {
 return new jQuery();
};

/**
 * A string containing a selector expression to match elements against.
 *
 * @param {jQuery} jQueryobject jQuery object A jQuery object to match elements against.
 * @since 1.6
 */
jQuery.prototype.closest = function(jQueryobject) {
 return new jQuery();
};

/**
 * A string containing a selector expression to match elements against.
 *
 * @param {Element} element An element to match elements against.
 * @since 1.6
 */
jQuery.prototype.closest = function(element) {
 return new jQuery();
};

/**
 * An array or string containing a selector expression to match elements against (can also be a jQuery object).
 *
 * @param {Array} selectors An array or string containing a selector expression to match elements against (can also be a jQuery object).
 * @param {Element} context A DOM element within which a matching element may be found. If no context is passed in then the context of the jQuery set will be used instead.
 * @since 1.4
 */
jQuery.prototype.closest = function(selectors, context) {
 return new Array();
};

/**
 * A string containing the URL to which the request is sent.
 *
 * @param {String} url A string containing the URL to which the request is sent.
 * @param {Map} data A map or string that is sent to the server with the request.
 * @param {Function} success success(data, textStatus, jqXHR) A callback function that is executed if the request succeeds.
 * @since 1.0
 */
jQuery.getJSON =  function(url, data, success) {
 return new Deferred();
};

/**
 * A string containing the URL to which the request is sent.
 *
 * @param {String} url A string containing the URL to which the request is sent.
 * @param {Map} data A map or string that is sent to the server with the request.
 * @param {Function} success success(data, textStatus, jqXHR) A callback function that is executed if the request succeeds.
 * @since 1.0
 */
$.getJSON =  function(url, data, success) {
 return new Deferred();
};

/**
 * A string containing the URL to which the request is sent.
 *
 * @param {String} url A string containing the URL to which the request is sent.
 * @param {Map; String} data A map or string that is sent to the server with the request.
 * @param {Function} success success(data, textStatus, jqXHR) A callback function that is executed if the request succeeds.
 * @param {String} dataType The type of data expected from the server. Default: Intelligent Guess (xml, json, script, or html).
 * @since 1.0
 */
jQuery.get =  function(url, data, success, dataType) {
 return new Deferred();
};

/**
 * A string containing the URL to which the request is sent.
 *
 * @param {String} url A string containing the URL to which the request is sent.
 * @param {Map; String} data A map or string that is sent to the server with the request.
 * @param {Function} success success(data, textStatus, jqXHR) A callback function that is executed if the request succeeds.
 * @param {String} dataType The type of data expected from the server. Default: Intelligent Guess (xml, json, script, or html).
 * @since 1.0
 */
$.get =  function(url, data, success, dataType) {
 return new Deferred();
};

/**
 * A string containing the URL to which the request is sent.
 *
 * @param {String} url A string containing the URL to which the request is sent.
 * @param {Map; String} data A map or string that is sent to the server with the request.
 * @param {Function} complete complete(responseText, textStatus, XMLHttpRequest) A callback function that is executed when the request completes.
 * @since 1.0
 */
jQuery.prototype.load = function(url, data, complete) {
 return new jQuery();
};

/**
 * A string containing the URL to which the request is sent.
 *
 * @param {String} url A string containing the URL to which the request is sent.
 * @param {Map} settings A set of key/value pairs that configure the Ajax request. All settings are optional. A default can be set for any option with $.ajaxSetup(). See jQuery.ajax( settings ) below for a complete list of all settings. 
 * @since 1.5
 */
jQuery.ajax =  function(url, settings) {
 return new Deferred();
};

/**
 * A string containing the URL to which the request is sent.
 *
 * @param {String} url A string containing the URL to which the request is sent.
 * @param {Map} settings A set of key/value pairs that configure the Ajax request. All settings are optional. A default can be set for any option with $.ajaxSetup(). See jQuery.ajax( settings ) below for a complete list of all settings. 
 * @since 1.5
 */
$.ajax =  function(url, settings) {
 return new Deferred();
};

/**
 * A string containing the URL to which the request is sent.
 *
 * @param {Map} settings A set of key/value pairs that configure the Ajax request. All settings are optional. A default can be set for any option with $.ajaxSetup().
 * @since 1.0
 */
jQuery.ajax =  function(settings) {
 return new Deferred();
};

/**
 * A string containing the URL to which the request is sent.
 *
 * @param {Map} settings A set of key/value pairs that configure the Ajax request. All settings are optional. A default can be set for any option with $.ajaxSetup().
 * @since 1.0
 */
$.ajax =  function(settings) {
 return new Deferred();
};

/**
 * @since 1.0
 */
length = 1;

/**
 * A string containing a selector expression to match elements against.
 *
 * @param {Selector} selector A string containing a selector expression to match elements against.
 * @since 1.0
 */
jQuery.prototype.children = function(selector) {
 return new jQuery();
};

/**
 * A string representing a selector expression to find additional elements to add to the set of matched elements.
 *
 * @param {Selector} selector A string representing a selector expression to find additional elements to add to the set of matched elements.
 * @since 1.0
 */
jQuery.prototype.add = function(selector) {
 return new jQuery();
};

/**
 * A string representing a selector expression to find additional elements to add to the set of matched elements.
 *
 * @param {Elements} elements One or more elements to add to the set of matched elements.
 * @since 1.0
 */
jQuery.prototype.add = function(elements) {
 return new jQuery();
};

/**
 * A string representing a selector expression to find additional elements to add to the set of matched elements.
 *
 * @param {HTML} html An HTML fragment to add to the set of matched elements.
 * @since 1.0
 */
jQuery.prototype.add = function(html) {
 return new jQuery();
};

/**
 * A string representing a selector expression to find additional elements to add to the set of matched elements.
 *
 * @param {jQuery object } jQueryobject jQuery object An existing jQuery object to add to the set of matched elements.
 * @since 1.3.2
 */
jQuery.prototype.add = function(jQueryobject) {
 return new jQuery();
};

/**
 * A string representing a selector expression to find additional elements to add to the set of matched elements.
 *
 * @param {Selector} selector A string representing a selector expression to find additional elements to add to the set of matched elements.
 * @param {Element} context The point in the document at which the selector should begin matching; similar to the context argument of the $(selector, context) method.
 * @since 1.4
 */
jQuery.prototype.add = function(selector, context) {
 return new jQuery();
};

/**
 * @since 1.3
 */
context = new Element();

/**
 * A string containing a selector expression to match elements against.
 *
 * @param {Selector} selector A string containing a selector expression to match elements against.
 * @since 1.0
 */
jQuery.prototype.not = function(selector) {
 return new jQuery();
};

/**
 * A string containing a selector expression to match elements against.
 *
 * @param {Elements} elements One or more DOM elements to remove from the matched set.
 * @since 1.0
 */
jQuery.prototype.not = function(elements) {
 return new jQuery();
};

/**
 * A string containing a selector expression to match elements against.
 *
 * @param {Function} func function(index) A function used as a test for each element in the set. this is the current DOM element.
 * @since 1.4
 */
jQuery.prototype.not = function(func) {
 return new jQuery();
};

/**
 * A Boolean indicating whether to include the element's margin in the calculation.
 *
 * @param {Boolean} includeMargin A Boolean indicating whether to include the element's margin in the calculation.
 * @since 1.2.6
 */
jQuery.prototype.outerWidth = function(includeMargin) {
 return 1;
};

/**
 * A Boolean indicating whether to include the element's margin in the calculation.
 *
 * @param {Boolean} includeMargin A Boolean indicating whether to include the element's margin in the calculation.
 * @since 1.2.6
 */
jQuery.prototype.outerHeight = function(includeMargin) {
 return 1;
};

/**
 * Display or hide the matched elements.
 *
 * @param {String;Number} duration A string or number determining how long the animation will run.
 * @param {Callback} callback A function to call once the animation is complete.
 * @since 1.0
 */
jQuery.prototype.toggle = function(duration, callback) {
 return new jQuery();
};

/**
 * Display or hide the matched elements.
 *
 * @param {String;Number} duration A string or number determining how long the animation will run.
 * @param {String} easing A string indicating which easing function to use for the transition.
 * @param {Callback} callback A function to call once the animation is complete.
 * @since 1.4.3
 */
jQuery.prototype.toggle = function(duration, easing, callback) {
 return new jQuery();
};

/**
 * Display or hide the matched elements.
 *
 * @param {Boolean} showOrHide A Boolean indicating whether to show or hide the elements.
 * @since 1.3
 */
jQuery.prototype.toggle = function(showOrHide) {
 return new jQuery();
};

/**
 * Get the current computed width for the first element in the set of matched elements, including padding but not border.
 *
 * @since 1.2.6
 */
jQuery.prototype.innerWidth = function() {
 return 1;
};

/**
 * Get the current computed height for the first element in the set of matched elements, including padding but not border.
 *
 * @since 1.2.6
 */
jQuery.prototype.innerHeight = function() {
 return 1;
};

/**
 * An array or object to serialize.
 *
 * @param {Array; Object} obj An array or object to serialize.
 * @since 1.2
 */
jQuery.param =  function(obj) {
 return "";
};

/**
 * An array or object to serialize.
 *
 * @param {Array; Object} obj An array or object to serialize.
 * @since 1.2
 */
$.param =  function(obj) {
 return "";
};

/**
 * An array or object to serialize.
 *
 * @param {Array; Object} obj An array or object to serialize.
 * @param {Boolean} traditional A Boolean indicating whether to perform a traditional "shallow" serialization.
 * @since 1.4
 */
jQuery.param =  function(obj, traditional) {
 return "";
};

/**
 * An array or object to serialize.
 *
 * @param {Array; Object} obj An array or object to serialize.
 * @param {Boolean} traditional A Boolean indicating whether to perform a traditional "shallow" serialization.
 * @since 1.4
 */
$.param =  function(obj, traditional) {
 return "";
};

/**
 * Hide the matched elements.
 *
 * @since 1.0
 */
jQuery.prototype.hide = function() {
 return new jQuery();
};

/**
 * Hide the matched elements.
 *
 * @param {String;Number} duration A string or number determining how long the animation will run.
 * @param {Callback} callback A function to call once the animation is complete.
 * @since 1.0
 */
jQuery.prototype.hide = function(duration, callback) {
 return new jQuery();
};

/**
 * Hide the matched elements.
 *
 * @param {String;Number} duration A string or number determining how long the animation will run.
 * @param {String} easing A string indicating which easing function to use for the transition.
 * @param {Callback} callback A function to call once the animation is complete.
 * @since 1.4.3
 */
jQuery.prototype.hide = function(duration, easing, callback) {
 return new jQuery();
};

/**
 * Get the current computed width for the first element in the set of matched elements.
 *
 * @since 1.0
 */
jQuery.prototype.width = function() {
 return 1;
};

/**
 * An integer representing the number of pixels, or an integer along with an optional unit of measure appended (as a string).
 *
 * @param {String; Number} value An integer representing the number of pixels, or an integer along with an optional unit of measure appended (as a string).
 * @since 1.0
 */
jQuery.prototype.width = function(value) {
 return new jQuery();
};

/**
 * An integer representing the number of pixels, or an integer along with an optional unit of measure appended (as a string).
 *
 * @param {Function} func function(index, width) A function returning the width to set. Receives the index position of the element in the set and the old width as arguments. Within the function, this refers to the current element in the set.
 * @since 1.4.1
 */
jQuery.prototype.width = function(func) {
 return new jQuery();
};

/**
 * Get the current computed height for the first element in the set of matched elements.
 *
 * @since 1.0
 */
jQuery.prototype.height = function() {
 return 1;
};

/**
 * An integer representing the number of pixels, or an integer with an optional unit of measure appended (as a string).
 *
 * @param {String; Number} value An integer representing the number of pixels, or an integer with an optional unit of measure appended (as a string).
 * @since 1.0
 */
jQuery.prototype.height = function(value) {
 return new jQuery();
};

/**
 * An integer representing the number of pixels, or an integer with an optional unit of measure appended (as a string).
 *
 * @param {Function} func function(index, height) A function returning the height to set. Receives the index position of the element in the set and the old height as arguments. Within the function, this refers to the current element in the set.
 * @since 1.4.1
 */
jQuery.prototype.height = function(func) {
 return new jQuery();
};

/**
 * Display the matched elements.
 *
 * @since 1.0
 */
jQuery.prototype.show = function() {
 return new jQuery();
};

/**
 * Display the matched elements.
 *
 * @param {String;Number} duration A string or number determining how long the animation will run.
 * @param {Callback} callback A function to call once the animation is complete.
 * @since 1.0
 */
jQuery.prototype.show = function(duration, callback) {
 return new jQuery();
};

/**
 * Display the matched elements.
 *
 * @param {String;Number} duration A string or number determining how long the animation will run.
 * @param {String} easing A string indicating which easing function to use for the transition.
 * @param {Callback} callback A function to call once the animation is complete.
 * @since 1.4.3
 */
jQuery.prototype.show = function(duration, easing, callback) {
 return new jQuery();
};

/**
 * Get the current horizontal position of the scroll bar for the first element in the set of matched elements.
 *
 * @since 1.2.6
 */
jQuery.prototype.scrollLeft = function() {
 return 1;
};

/**
 * An integer indicating the new position to set the scroll bar to.
 *
 * @param {Number} value An integer indicating the new position to set the scroll bar to.
 * @since 1.2.6
 */
jQuery.prototype.scrollLeft = function(value) {
 return new jQuery();
};

/**
 * The string to trim.
 *
 * @param {String} str The string to trim.
 * @since 1.0
 */
jQuery.trim =  function(str) {
 return "";
};

/**
 * The string to trim.
 *
 * @param {String} str The string to trim.
 * @since 1.0
 */
$.trim =  function(str) {
 return "";
};

/**
 * Object to test whether or not it is a function.
 *
 * @param {Object} obj Object to test whether or not it is a function.
 * @since 1.2
 */
jQuery.isFunction =  function(obj) {
 return true;
};

/**
 * Object to test whether or not it is a function.
 *
 * @param {Object} obj Object to test whether or not it is a function.
 * @since 1.2
 */
$.isFunction =  function(obj) {
 return true;
};

/**
 * Object to test whether or not it is an array.
 *
 * @param {Object} obj Object to test whether or not it is an array.
 * @since 1.3
 */
jQuery.isArray =  function(obj) {
 return true;
};

/**
 * Object to test whether or not it is an array.
 *
 * @param {Object} obj Object to test whether or not it is an array.
 * @since 1.3
 */
$.isArray =  function(obj) {
 return true;
};

/**
 * The Array of DOM elements.
 *
 * @param {Array} array The Array of DOM elements.
 * @since 1.1.3
 */
jQuery.unique =  function(array) {
 return new Array();
};

/**
 * The Array of DOM elements.
 *
 * @param {Array} array The Array of DOM elements.
 * @since 1.1.3
 */
$.unique =  function(array) {
 return new Array();
};

/**
 * Merge the contents of two arrays together into the first array. 
 *
 * @param {Array} first The first array to merge, the elements of second added.
 * @param {Array} second The second array to merge into the first, unaltered.
 * @since 1.0
 */
jQuery.merge =  function(first, second) {
 return new Array();
};

/**
 * Merge the contents of two arrays together into the first array. 
 *
 * @param {Array} first The first array to merge, the elements of second added.
 * @param {Array} second The second array to merge into the first, unaltered.
 * @since 1.0
 */
$.merge =  function(first, second) {
 return new Array();
};

/**
 * The value to search for.
 *
 * @param {Any} value The value to search for.
 * @param {Array} array An array through which to search.
 * @param {Number} fromIndex The index of the array at which to begin the search. The default is 0, which will search the whole array.
 * @since 1.2
 */
jQuery.inArray =  function(value, array, fromIndex) {
 return 1;
};

/**
 * The value to search for.
 *
 * @param {Any} value The value to search for.
 * @param {Array} array An array through which to search.
 * @param {Number} fromIndex The index of the array at which to begin the search. The default is 0, which will search the whole array.
 * @since 1.2
 */
$.inArray =  function(value, array, fromIndex) {
 return 1;
};

/**
 * The Array to translate.
 *
 * @param {Array} array The Array to translate.
 * @param {Function} callback callback(elementOfArray, indexInArray) The function to process each item against.  The first argument to the function is the array item, the second argument is the index in array The function can return any value. Within the function, this refers to the global (window) object.
 * @since 1.0
 */
jQuery.map =  function(array, callback) {
 return new Array();
};

/**
 * The Array to translate.
 *
 * @param {Array} array The Array to translate.
 * @param {Function} callback callback(elementOfArray, indexInArray) The function to process each item against.  The first argument to the function is the array item, the second argument is the index in array The function can return any value. Within the function, this refers to the global (window) object.
 * @since 1.0
 */
$.map =  function(array, callback) {
 return new Array();
};

/**
 * The Array to translate.
 *
 * @param {Array;Object} arrayOrObject The Array or Object to translate.
 * @param {Function} callback callback( value, indexOrKey ) The function to process each item against.  The first argument to the function is the value; the second argument is the index or key of the array or object property. The function can return any value to add to the array. A returned array will be flattened into the resulting array. Within the function, this refers to the global (window) object. 
 * @since 1.6
 */
jQuery.map =  function(arrayOrObject, callback) {
 return new Array();
};

/**
 * The Array to translate.
 *
 * @param {Array;Object} arrayOrObject The Array or Object to translate.
 * @param {Function} callback callback( value, indexOrKey ) The function to process each item against.  The first argument to the function is the value; the second argument is the index or key of the array or object property. The function can return any value to add to the array. A returned array will be flattened into the resulting array. Within the function, this refers to the global (window) object. 
 * @since 1.6
 */
$.map =  function(arrayOrObject, callback) {
 return new Array();
};

/**
 * Any object to turn into a native Array.
 *
 * @param {Object} obj Any object to turn into a native Array.
 * @since 1.2
 */
jQuery.makeArray =  function(obj) {
 return new Array();
};

/**
 * Any object to turn into a native Array.
 *
 * @param {Object} obj Any object to turn into a native Array.
 * @since 1.2
 */
$.makeArray =  function(obj) {
 return new Array();
};

/**
 * Finds the elements of an array which satisfy a filter function. The original array is not affected.
 *
 * @param {Array} array The array to search through.
 * @param {Function} func function(elementOfArray, indexInArray) The function to process each item against.  The first argument to the function is the item, and the second argument is the index.  The function should return a Boolean value.  this will be the global window object.
 * @param {Boolean} invert If "invert" is false, or not provided, then the function returns an array consisting of all elements for which "callback" returns true.  If "invert" is true, then the function returns an array consisting of all elements for which "callback" returns false.
 * @since 1.0
 */
jQuery.grep =  function(array, func, invert) {
 return new Array();
};

/**
 * Finds the elements of an array which satisfy a filter function. The original array is not affected.
 *
 * @param {Array} array The array to search through.
 * @param {Function} func function(elementOfArray, indexInArray) The function to process each item against.  The first argument to the function is the item, and the second argument is the index.  The function should return a Boolean value.  this will be the global window object.
 * @param {Boolean} invert If "invert" is false, or not provided, then the function returns an array consisting of all elements for which "callback" returns true.  If "invert" is true, then the function returns an array consisting of all elements for which "callback" returns false.
 * @since 1.0
 */
$.grep =  function(array, func, invert) {
 return new Array();
};

/**
 *  An object that will receive the new properties if additional objects are passed in or that will extend the jQuery namespace if it is the sole argument.
 *
 * @param {Object} target  An object that will receive the new properties if additional objects are passed in or that will extend the jQuery namespace if it is the sole argument.
 * @param {Object} object object1 An object containing additional properties to merge in.
 * @param {Object} objectN Additional objects containing properties to merge in.
 * @since 1.0
 */
jQuery.extend =  function(target, object, objectN) {
 return new Object();
};

/**
 *  An object that will receive the new properties if additional objects are passed in or that will extend the jQuery namespace if it is the sole argument.
 *
 * @param {Object} target  An object that will receive the new properties if additional objects are passed in or that will extend the jQuery namespace if it is the sole argument.
 * @param {Object} object object1 An object containing additional properties to merge in.
 * @param {Object} objectN Additional objects containing properties to merge in.
 * @since 1.0
 */
$.extend =  function(target, object, objectN) {
 return new Object();
};

/**
 *  An object that will receive the new properties if additional objects are passed in or that will extend the jQuery namespace if it is the sole argument.
 *
 * @param {Boolean} deep If true, the merge becomes recursive (aka. deep copy).
 * @param {Object} target The object to extend. It will receive the new properties.
 * @param {Object} object object1 An object containing additional properties to merge in.
 * @param {Object} objectN Additional objects containing properties to merge in.
 * @since 1.1.4
 */
jQuery.extend =  function(deep, target, object, objectN) {
 return new Object();
};

/**
 *  An object that will receive the new properties if additional objects are passed in or that will extend the jQuery namespace if it is the sole argument.
 *
 * @param {Boolean} deep If true, the merge becomes recursive (aka. deep copy).
 * @param {Object} target The object to extend. It will receive the new properties.
 * @param {Object} object object1 An object containing additional properties to merge in.
 * @param {Object} objectN Additional objects containing properties to merge in.
 * @since 1.1.4
 */
$.extend =  function(deep, target, object, objectN) {
 return new Object();
};

/**
 * The object or array to iterate over.
 *
 * @param {Object} collection The object or array to iterate over.
 * @param {Function} callback callback(indexInArray, valueOfElement) The function that will be executed on every object.
 * @since 1.0
 */
jQuery.each =  function(collection, callback) {
 return new Object();
};

/**
 * The object or array to iterate over.
 *
 * @param {Object} collection The object or array to iterate over.
 * @param {Function} callback callback(indexInArray, valueOfElement) The function that will be executed on every object.
 * @since 1.0
 */
$.each =  function(collection, callback) {
 return new Object();
};

/**
 * @since 1.0
 */
jQuery.boxModel = true;

/**
 * @since 1.0
 */
$.boxModel = true;

/**
 * Get the current vertical position of the scroll bar for the first element in the set of matched elements.
 *
 * @since 1.2.6
 */
jQuery.prototype.scrollTop = function() {
 return 1;
};

/**
 * An integer indicating the new position to set the scroll bar to.
 *
 * @param {Number} value An integer indicating the new position to set the scroll bar to.
 * @since 1.2.6
 */
jQuery.prototype.scrollTop = function(value) {
 return new jQuery();
};

/**
 * @since 1.3
 */
jQuery.support = new Object();

/**
 * @since 1.3
 */
$.support = new Object();

/**
 * Get the current coordinates of the first element in the set of matched elements, relative to the offset parent.
 *
 * @since 1.2
 */
jQuery.prototype.position = function() {
 return new Object();
};

/**
 * Get the current coordinates of the first element in the set of matched elements, relative to the document.
 *
 * @since 1.2
 */
jQuery.prototype.offset = function() {
 return new Object();
};

/**
 * An object containing the properties top and left, which are integers indicating the new top and left coordinates for the elements.
 *
 * @param {Object} coordinates An object containing the properties top and left, which are integers indicating the new top and left coordinates for the elements.
 * @since 1.4
 */
jQuery.prototype.offset = function(coordinates) {
 return new jQuery();
};

/**
 * An object containing the properties top and left, which are integers indicating the new top and left coordinates for the elements.
 *
 * @param {Function} func function(index, coords) A function to return the coordinates to set. Receives the index of the element in the collection as the first argument and the current coordinates as the second argument. The function should return an object with the new top and left properties.
 * @since 1.4
 */
jQuery.prototype.offset = function(func) {
 return new jQuery();
};

/**
 * A CSS property.
 *
 * @param {String} propertyName A CSS property.
 * @since 1.0
 */
jQuery.prototype.css = function(propertyName) {
 return "";
};

/**
 * A CSS property name.
 *
 * @param {String} propertyName A CSS property name.
 * @param {String; Number} value A value to set for the property.
 * @since 1.0
 */
jQuery.prototype.css = function(propertyName, value) {
 return new jQuery();
};

/**
 * A CSS property name.
 *
 * @param {String} propertyName A CSS property name.
 * @param {Function} func function(index, value) A function returning the value to set. this is the current element. Receives the index position of the element in the set and the old value as arguments.
 * @since 1.4
 */
jQuery.prototype.css = function(propertyName, func) {
 return new jQuery();
};

/**
 * A CSS property name.
 *
 * @param {Map} map A map of property-value pairs to set.
 * @since 1.0
 */
jQuery.prototype.css = function(map) {
 return new jQuery();
};

/**
 * Remove the parents of the set of matched elements from the DOM, leaving the matched elements in their place.
 *
 * @since 1.4
 */
jQuery.prototype.unwrap = function() {
 return new jQuery();
};

/**
 * A selector expression that filters the set of matched elements to be removed.
 *
 * @param {Selector} selector A selector expression that filters the set of matched elements to be removed.
 * @since 1.4
 */
jQuery.prototype.detach = function(selector) {
 return new jQuery();
};

/**
 * A Boolean indicating whether event handlers should be copied along with the elements. As of jQuery 1.4, element data will be copied as well.
 *
 * @param {Boolean} withDataAndEvents A Boolean indicating whether event handlers should be copied along with the elements. As of jQuery 1.4, element data will be copied as well.
 * @since 1.0
 */
jQuery.prototype.clone = function(withDataAndEvents) {
 return new jQuery();
};

/**
 * A Boolean indicating whether event handlers should be copied along with the elements. As of jQuery 1.4, element data will be copied as well.
 *
 * @param {Boolean} withDataAndEvents A Boolean indicating whether event handlers and data should be copied along with the elements. The default value is false. *In jQuery 1.5.0 the default value was incorrectly true; it was changed back to false in 1.5.1 and up.
 * @param {Boolean} deepWithDataAndEvents A Boolean indicating whether event handlers and data for all children of the cloned element should be copied. By default its value matches the first argument's value (which defaults to false).
 * @since 1.5
 */
jQuery.prototype.clone = function(withDataAndEvents, deepWithDataAndEvents) {
 return new jQuery();
};

/**
 * A selector expression that filters the set of matched elements to be removed.
 *
 * @param {String} selector A selector expression that filters the set of matched elements to be removed.
 * @since 1.0
 */
jQuery.prototype.remove = function(selector) {
 return new jQuery();
};

/**
 * Remove all child nodes of the set of matched elements from the DOM.
 *
 * @since 1.0
 */
jQuery.prototype.empty = function() {
 return new jQuery();
};

/**
 * A selector expression indicating which element(s) to replace.
 *
 * @param {Selector} target A selector expression indicating which element(s) to replace.
 * @since 1.2
 */
jQuery.prototype.replaceAll = function(target) {
 return new jQuery();
};

/**
 * The content to insert. May be an HTML string, DOM element, or jQuery object.
 *
 * @param {String; Element; jQuery} newContent The content to insert. May be an HTML string, DOM element, or jQuery object.
 * @since 1.2
 */
jQuery.prototype.replaceWith = function(newContent) {
 return new jQuery();
};

/**
 * The content to insert. May be an HTML string, DOM element, or jQuery object.
 *
 * @param {Function} func function A function that returns content with which to replace the set of matched elements.
 * @since 1.4
 */
jQuery.prototype.replaceWith = function(func) {
 return new jQuery();
};

/**
 * An HTML snippet, selector expression, jQuery object, or DOM element specifying the structure to wrap around the content of the matched elements.
 *
 * @param {String} wrappingElement An HTML snippet, selector expression, jQuery object, or DOM element specifying the structure to wrap around the content of the matched elements.
 * @since 1.2
 */
jQuery.prototype.wrapInner = function(wrappingElement) {
 return new jQuery();
};

/**
 * An HTML snippet, selector expression, jQuery object, or DOM element specifying the structure to wrap around the content of the matched elements.
 *
 * @param {Function} func function(index) A callback function which generates a structure to wrap around the content of the matched elements. Receives the index position of the element in the set as an argument. Within the function, this refers to the current element in the set.
 * @since 1.4
 */
jQuery.prototype.wrapInner = function(func) {
 return new jQuery();
};

/**
 * An HTML snippet, selector expression, jQuery object, or DOM element specifying the structure to wrap around the matched elements.
 *
 * @param {String; Selector; Element; jQuery} wrappingElement An HTML snippet, selector expression, jQuery object, or DOM element specifying the structure to wrap around the matched elements.
 * @since 1.2
 */
jQuery.prototype.wrapAll = function(wrappingElement) {
 return new jQuery();
};

/**
 * An HTML snippet, selector expression, jQuery object, or DOM element specifying the structure to wrap around the matched elements.
 *
 * @param {String; Selector; Element; jQuery} wrappingElement An HTML snippet, selector expression, jQuery object, or DOM element specifying the structure to wrap around the matched elements.
 * @since 1.0
 */
jQuery.prototype.wrap = function(wrappingElement) {
 return new jQuery();
};

/**
 * An HTML snippet, selector expression, jQuery object, or DOM element specifying the structure to wrap around the matched elements.
 *
 * @param {Function} func function(index) A callback function returning the HTML content or jQuery object to wrap around the matched elements. Receives the index position of the element in the set as an argument. Within the function, this refers to the current element in the set.
 * @since 1.4
 */
jQuery.prototype.wrap = function(func) {
 return new jQuery();
};

/**
 * A selector, element, HTML string, or jQuery object; the matched set of elements will be inserted before the element(s) specified by this parameter.
 *
 * @param {Selector; Element; jQuery} target A selector, element, HTML string, or jQuery object; the matched set of elements will be inserted before the element(s) specified by this parameter.
 * @since 1.0
 */
jQuery.prototype.insertBefore = function(target) {
 return new jQuery();
};

/**
 * HTML string, DOM element, or jQuery object to insert before each element in the set of matched elements.
 *
 * @param {String; Element; jQuery} content HTML string, DOM element, or jQuery object to insert before each element in the set of matched elements.
 * @param {String; Element; Array; jQuery} content One or more additional DOM elements, arrays of elements, HTML strings, or jQuery objects to insert before each element in the set of matched elements.
 * @since 1.0
 */
jQuery.prototype.before = function(content, content) {
 return new jQuery();
};

/**
 * HTML string, DOM element, or jQuery object to insert before each element in the set of matched elements.
 *
 * @param {Function} func function A function that returns an HTML string, DOM element(s), or jQuery object to insert before each element in the set of matched elements. Receives the index position of the element in the set as an argument. Within the function, this refers to the current element in the set.

 * @since 1.4
 */
jQuery.prototype.before = function(func) {
 return new jQuery();
};

/**
 * A selector, element, HTML string, or jQuery object; the matched set of elements will be inserted after the element(s) specified by this parameter.
 *
 * @param {Selector; Element; jQuery} target A selector, element, HTML string, or jQuery object; the matched set of elements will be inserted after the element(s) specified by this parameter.
 * @since 1.0
 */
jQuery.prototype.insertAfter = function(target) {
 return new jQuery();
};

/**
 * HTML string, DOM element, or jQuery object to insert after each element in the set of matched elements.
 *
 * @param {String; Element; jQuery} content HTML string, DOM element, or jQuery object to insert after each element in the set of matched elements.
 * @param {String; Element; Array; jQuery} content One or more additional DOM elements, arrays of elements, HTML strings, or jQuery objects to insert after each element in the set of matched elements.
 * @since 1.0
 */
jQuery.prototype.after = function(content, content) {
 return new jQuery();
};

/**
 * HTML string, DOM element, or jQuery object to insert after each element in the set of matched elements.
 *
 * @param {Function} func function(index) A function that returns an HTML string, DOM element(s), or jQuery object to insert after each element in the set of matched elements. Receives the index position of the element in the set as an argument. Within the function, this refers to the current element in the set.
 * @since 1.4
 */
jQuery.prototype.after = function(func) {
 return new jQuery();
};

/**
 * A selector, element, HTML string, or jQuery object; the matched set of elements will be inserted at the beginning of the element(s) specified by this parameter.
 *
 * @param {Selector; Element; jQuery} target A selector, element, HTML string, or jQuery object; the matched set of elements will be inserted at the beginning of the element(s) specified by this parameter.
 * @since 1.0
 */
jQuery.prototype.prependTo = function(target) {
 return new jQuery();
};

/**
 * DOM element, array of elements, HTML string, or jQuery object to insert at the beginning of each element in the set of matched elements.
 *
 * @param {String; Element; jQuery} content DOM element, array of elements, HTML string, or jQuery object to insert at the beginning of each element in the set of matched elements.
 * @param {String; Element; jQuery} content One or more additional DOM elements, arrays of elements, HTML strings, or jQuery objects to insert at the beginning of each element in the set of matched elements.
 * @since 1.0
 */
jQuery.prototype.prepend = function(content, content) {
 return new jQuery();
};

/**
 * DOM element, array of elements, HTML string, or jQuery object to insert at the beginning of each element in the set of matched elements.
 *
 * @param {Function} func function(index, html) A function that returns an HTML string, DOM element(s), or jQuery object to insert at the beginning of each element in the set of matched elements. Receives the index position of the element in the set and the old HTML value of the element as arguments. Within the function, this refers to the current element in the set.
 * @since 1.4
 */
jQuery.prototype.prepend = function(func) {
 return new jQuery();
};

/**
 * A selector, element, HTML string, or jQuery object; the matched set of elements will be inserted at the end of the element(s) specified by this parameter.
 *
 * @param {Selector; Element; jQuery} target A selector, element, HTML string, or jQuery object; the matched set of elements will be inserted at the end of the element(s) specified by this parameter.
 * @since 1.0
 */
jQuery.prototype.appendTo = function(target) {
 return new jQuery();
};

/**
 * DOM element, HTML string, or jQuery object to insert at the end of each element in the set of matched elements.
 *
 * @param {String; Element; jQuery} content DOM element, HTML string, or jQuery object to insert at the end of each element in the set of matched elements.
 * @param {String; Element; Array; jQuery} content One or more additional DOM elements, arrays of elements, HTML strings, or jQuery objects to insert at the end of each element in the set of matched elements.
 * @since 1.0
 */
jQuery.prototype.append = function(content, content) {
 return new jQuery();
};

/**
 * DOM element, HTML string, or jQuery object to insert at the end of each element in the set of matched elements.
 *
 * @param {Function} func function(index, html) A function that returns an HTML string, DOM element(s), or jQuery object to insert at the end of each element in the set of matched elements. Receives the index position of the element in the set and the old HTML value of the element as arguments. Within the function, this refers to the current element in the set.

 * @since 1.4
 */
jQuery.prototype.append = function(func) {
 return new jQuery();
};

/**
 * Get the current value of the first element in the set of matched elements.
 *
 * @since 1.0
 */
jQuery.prototype.val = function() {
 return ["", 1] /* String, Number, Array */;
};

/**
 * A string of text or an array of strings corresponding to the value of each matched element to set as selected/checked.
 *
 * @param {String} value A string of text or an array of strings corresponding to the value of each matched element to set as selected/checked.
 * @since 1.0
 */
jQuery.prototype.val = function(value) {
 return new jQuery();
};

/**
 * A string of text or an array of strings corresponding to the value of each matched element to set as selected/checked.
 *
 * @param {Function} func function(index, value) A function returning the value to set. this is the current element. Receives the index position of the element in the set and the old value as arguments.
 * @since 1.4
 */
jQuery.prototype.val = function(func) {
 return new jQuery();
};

/**
 * Get the combined text contents of each element in the set of matched elements, including their descendants.
 *
 * @since 1.0
 */
jQuery.prototype.text = function() {
 return "";
};

/**
 * A string of text to set as the content of each matched element.
 *
 * @param {String} textString A string of text to set as the content of each matched element.
 * @since 1.0
 */
jQuery.prototype.text = function(textString) {
 return new jQuery();
};

/**
 * A string of text to set as the content of each matched element.
 *
 * @param {Function} func function(index, text) A function returning the text content to set. Receives the index position of the element in the set and the old text value as arguments.
 * @since 1.4
 */
jQuery.prototype.text = function(func) {
 return new jQuery();
};

/**
 * Get the HTML contents of the first element in the set of matched elements.
 *
 * @since 1.0
 */
jQuery.prototype.html = function() {
 return "";
};

/**
 * A string of HTML to set as the content of each matched element.
 *
 * @param {String} htmlString A string of HTML to set as the content of each matched element.
 * @since 1.0
 */
jQuery.prototype.html = function(htmlString) {
 return new jQuery();
};

/**
 * A string of HTML to set as the content of each matched element.
 *
 * @param {Function} func function(index, oldhtml) A function returning the HTML content to set. Receives the index position of the element in the set and the old HTML value as arguments. jQuery empties the element before calling the function; use the oldhtml argument to reference the previous content. Within the function, this refers to the current element in the set.
 * @since 1.4
 */
jQuery.prototype.html = function(func) {
 return new jQuery();
};

/**
 * A function object that will be invoked for each element in the current set.
 *
 * @param {Function} callback callback(index, domElement) A function object that will be invoked for each element in the current set.
 * @since 1.2
 */
jQuery.prototype.map = function(callback) {
 return new jQuery();
};

/**
 * A string containing a selector expression to match elements against.
 *
 * @param {Selector} selector A string containing a selector expression to match elements against.
 * @since 1.0
 */
jQuery.prototype.is = function(selector) {
 return true;
};

/**
 * A string containing a selector expression to match elements against.
 *
 * @param {Function} func function(index) A function used as a test for the set of elements. It accepts one argument, index, which is the element's index in the jQuery collection.Within the function, this refers to the current DOM element. 
 * @since 1.6
 */
jQuery.prototype.is = function(func) {
 return true;
};

/**
 * A string containing a selector expression to match elements against.
 *
 * @param {Object} jQueryobject jQuery object An existing jQuery object to match the current set of elements against.
 * @since 1.6
 */
jQuery.prototype.is = function(jQueryobject) {
 return true;
};

/**
 * A string containing a selector expression to match elements against.
 *
 * @param {Element} element An element to match the current set of elements against.
 * @since 1.6
 */
jQuery.prototype.is = function(element) {
 return true;
};

/**
 * An integer indicating the 0-based position of the element. 
 *
 * @param {Integer} index An integer indicating the 0-based position of the element. 
 * @since 1.1.2
 */
jQuery.prototype.eq = function(index) {
 return new jQuery();
};

/**
 * An integer indicating the 0-based position of the element. 
 *
 * @param {Integer} index -index An integer indicating the position of the element, counting backwards  from the last element in the set. 
 * @since 1.4
 */
jQuery.prototype.eq = function(index) {
 return new jQuery();
};

/**
 * A string containing a selector expression to match the current set of elements against.
 *
 * @param {Selector} selector A string containing a selector expression to match the current set of elements against.
 * @since 1.0
 */
jQuery.prototype.filter = function(selector) {
 return new jQuery();
};

/**
 * A string containing a selector expression to match the current set of elements against.
 *
 * @param {Function} func function(index) A function used as a test for each element in the set. this is the current DOM element.
 * @since 1.0
 */
jQuery.prototype.filter = function(func) {
 return new jQuery();
};

/**
 * A string containing a selector expression to match the current set of elements against.
 *
 * @param {Element} element An element to match the current set of elements against.
 * @since 1.4
 */
jQuery.prototype.filter = function(element) {
 return new jQuery();
};

/**
 * A string containing a selector expression to match the current set of elements against.
 *
 * @param {Object} jQueryobject jQuery object An existing jQuery object to match the current set of elements against.
 * @since 1.4
 */
jQuery.prototype.filter = function(jQueryobject) {
 return new jQuery();
};

/**
 * One or more class names (separated by spaces) to be toggled for each element in the matched set.
 *
 * @param {String} className One or more class names (separated by spaces) to be toggled for each element in the matched set.
 * @since 1.0
 */
jQuery.prototype.toggleClass = function(className) {
 return new jQuery();
};

/**
 * One or more class names (separated by spaces) to be toggled for each element in the matched set.
 *
 * @param {String} className One or more class names (separated by spaces) to be toggled for each element in the matched set.
 * @param {Boolean} choice switch A Boolean (not just truthy/falsy) value to determine whether the class should be added or removed.
 * @since 1.3
 */
jQuery.prototype.toggleClass = function(className, choice) {
 return new jQuery();
};

/**
 * One or more class names (separated by spaces) to be toggled for each element in the matched set.
 *
 * @param {Boolean} choice switch A boolean value to determine whether the class should be added or removed.
 * @since 1.4
 */
jQuery.prototype.toggleClass = function(choice) {
 return new jQuery();
};

/**
 * One or more class names (separated by spaces) to be toggled for each element in the matched set.
 *
 * @param {Function} func function(index, class, switch) A function that returns class names to be toggled in the class attribute of each element in the matched set. Receives the index position of the element in the set, the old class value, and the switch as arguments.
 * @param {Boolean} choice switch A boolean value to determine whether the class should be added or removed.
 * @since 1.4
 */
jQuery.prototype.toggleClass = function(func, choice) {
 return new jQuery();
};

/**
 * One or more space-separated classes to be removed from the class attribute of each matched element.
 *
 * @param {String} className One or more space-separated classes to be removed from the class attribute of each matched element.
 * @since 1.0
 */
jQuery.prototype.removeClass = function(className) {
 return new jQuery();
};

/**
 * One or more space-separated classes to be removed from the class attribute of each matched element.
 *
 * @param {Function} func function(index, class) A function returning one or more space-separated class names to be removed. Receives the index position of the element in the set and the old class value as arguments.
 * @since 1.4
 */
jQuery.prototype.removeClass = function(func) {
 return new jQuery();
};

/**
 * The class name to search for.
 *
 * @param {String} className The class name to search for.
 * @since 1.2
 */
jQuery.prototype.hasClass = function(className) {
 return true;
};

/**
 * An attribute to remove; as of version 1.7, it can be a space-separated list of attributes.
 *
 * @param {String} attributeName An attribute to remove; as of version 1.7, it can be a space-separated list of attributes.
 * @since 1.0
 */
jQuery.prototype.removeAttr = function(attributeName) {
 return new jQuery();
};

/**
 * The name of the attribute to get.
 *
 * @param {String} attributeName The name of the attribute to get.
 * @since 1.0
 */
jQuery.prototype.attr = function(attributeName) {
 return "";
};

/**
 * The name of the attribute to set.
 *
 * @param {String} attributeName The name of the attribute to set.
 * @param {String;Number} value A value to set for the attribute.
 * @since 1.0
 */
jQuery.prototype.attr = function(attributeName, value) {
 return new jQuery();
};

/**
 * The name of the attribute to set.
 *
 * @param {Map} map A map of attribute-value pairs to set.
 * @since 1.0
 */
jQuery.prototype.attr = function(map) {
 return new jQuery();
};

/**
 * The name of the attribute to set.
 *
 * @param {String} attributeName The name of the attribute to set.
 * @param {Function} func function(index, attr) A function returning the value to set. this is the current element. Receives the index position of the element in the set and the old attribute value as arguments.
 * @since 1.1
 */
jQuery.prototype.attr = function(attributeName, func) {
 return new jQuery();
};

/**
 * One or more class names to be added to the class attribute of each matched element.
 *
 * @param {String} className One or more class names to be added to the class attribute of each matched element.
 * @since 1.0
 */
jQuery.prototype.addClass = function(className) {
 return new jQuery();
};

/**
 * One or more class names to be added to the class attribute of each matched element.
 *
 * @param {Function} func function(index, currentClass) A function returning one or more space-separated class names to be added to the existing class name(s). Receives the index position of the element in the set and the existing class name(s) as arguments. Within the function, this refers to the current element in the set.
 * @since 1.4
 */
jQuery.prototype.addClass = function(func) {
 return new jQuery();
};

/**
 * @param {String} ctx context
 */
function $(ctx) { return new jQuery(); };
$.prototype = new jQuery();